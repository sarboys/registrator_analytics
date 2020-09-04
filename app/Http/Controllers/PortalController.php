<?php

namespace App\Http\Controllers;
use App\Jobs\ProceddGetAllVoxi;
use App\Jobs\ProceddGetFalseVoxi;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\PortalPhone;
// Файл для информации с портала , для пропущенных звонков
class PortalController extends Controller
{
    public $FailVoix;
    public $AllVoix;
    public $AllResult;
    public function AllVoix($phone,$dateFrom,$dateTo,$callDuration) {
        $response = Http::post('https://portal.keydisk.ru/rest/896/'.env('APP_PORTAL_KEY').'/voximplant.statistic.get', [
            'order' => array(),
            'filter' => array(
                'PORTAL_NUMBER' => $phone,
                'CALL_TYPE' => 2,
                'CALL_FAILED_CODE' => array(200,304),
//                '>CALL_DURATION' => $callDuration,
                ">=CALL_START_DATE" => date('c',strtotime($dateFrom)),
                "<=CALL_START_DATE" => $dateTo
            ),
            'sort' => array()
        ]);
        $res = json_decode($response,true);
        return $res['total'];
    }
    public function FailVoix ($phone,$dateFrom,$dateTo) {
        $response = Http::post('https://portal.keydisk.ru/rest/896/'.env('APP_PORTAL_KEY').'/voximplant.statistic.get', [
            'order' => array(),
            'filter' => array(
                'PORTAL_NUMBER'=>$phone,
                'CALL_TYPE' => 2,
                'CALL_FAILED_CODE' => 304,
                '>CALL_DURATION' => 47,
                ">=CALL_START_DATE" => date('c',strtotime($dateFrom)),
                "<=CALL_START_DATE" => $dateTo
            ),
            'sort' => array()
        ]);
        $res = json_decode($response,true);
        return $res['total'];
    }


    public function AllResult($phone,$dateFrom,$dateTo,$callDuration,$dateRange) {
        $this->AllResult['allPhones'] = PortalPhone::all();
        $this->AllResult['phone'] = $phone;
        $this->AllResult['fail'] = $this->FailVoix($phone,$dateFrom,$dateTo);
        $this->AllResult['success'] = $this->AllVoix($phone,$dateFrom,$dateTo,$callDuration);
        $this->AllResult['all'] = round($this->FailVoix($phone,$dateFrom,$dateTo) / $this->AllVoix($phone,$dateFrom,$dateTo,$callDuration)  * 100,2);
        $this->AllResult['dateRange'] = $dateRange;
        $this->AllResult['callDuration'] = $callDuration;
        return view('/portal/tel')->with('response',$this->AllResult);
    }


    public function index(Request $request) {
        if(!$request->has('param')) {
            //Записываем в кеш
            if (Cache::has('tel')) {
                return $this->AllResult(Cache::get('tel'),Cache::get('dateFrom'),Cache::get('dateTo'),Cache::get('callDuration'),Cache::get('dateRange'));
            } else {
                return $this->AllResult('74951182890','2020-01-01T09:00','2020-12-31T18:00','0','01/01/2020 09:00 AM / 12/31/2020 18:00 PM');
            }
        } else {
            //Делим строку с временем на массив
            $test = explode(' / ',$request['dateRange']);

            //Убираем АМ, конвертация в 24 часа не нужна
            $testFrom = str_replace(' AM','',$test[0]);
            $testTo = date_create($test[1]);

            //Конвертируем дату из РМ в 24 часа
            $tesTo = date_format($testTo, 'Y-m-d H:i:s');
            $tesTo = date(DATE_ISO8601, strtotime($tesTo));


            //Записываем в кеш
            Cache::put('tel', $request['param']);
            Cache::put('dateFrom', date('c',strtotime($testFrom)));
            Cache::put('dateTo', str_replace('+0000','+03:00',$tesTo));
            Cache::put('callDuration', $request['callDuration']);
            Cache::put('dateRange', $request['dateRange']);

            return $this->AllResult(Cache::get('tel'),Cache::get('dateFrom'),Cache::get('dateTo'),Cache::get('callDuration'),Cache::get('dateRange'));
        }

    }
}

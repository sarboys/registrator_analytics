<?php

namespace App\Http\Controllers;
use App\Jobs\ProceddGetAllVoxi;
use App\Jobs\ProceddGetFalseVoxi;
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
                'CALL_FAILED_CODE' => 200,
                ">=CALL_START_DATE" => date('c',strtotime('2020-08-03T09:00')),
                "<=CALL_START_DATE" => date('c',strtotime('2020-08-04T18:00'))
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
                ">=CALL_START_DATE" => date('c',strtotime('2020-08-03T09:00')),
                "<=CALL_START_DATE" => date('c',strtotime('2020-08-04T18:00'))
            ),
            'sort' => array()
        ]);
        $res = json_decode($response,true);
        return $res['total'];
    }


    public function AllResult($phone,$dateFrom,$dateTo,$callDuration) {
        $this->AllResult['allPhones'] = PortalPhone::all();


        $this->AllResult['fail'] = $this->FailVoix($phone,$dateFrom,$dateTo);
        $this->AllResult['success'] = $this->AllVoix($phone,$dateFrom,$dateTo,$callDuration);
        $this->AllResult['all'] = round($this->FailVoix($phone,$dateFrom,$dateTo) / $this->AllVoix($phone,$dateFrom,$dateTo,$callDuration)  * 100,0);
        return view('portal')->with('response',$this->AllResult);
    }




    public function index() {
        return $this->AllResult('74951182890','2020-01-01T09:00','2020-12-31T18:00','');
    }
    public function indexPost(Request $request) {
//        return $this->AllResult($request['param']);
    }
}

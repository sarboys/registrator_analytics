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

    public function FailVoix ($phone) {
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
    public function AllVoix($phone) {
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
  public function index() {
//        dd(date(DATE_ISO8601, strtotime('08/13/2020 12:00')));
      $this->AllResult['allPhones'] = PortalPhone::all();
      $this->AllResult['fail'] = $this->FailVoix('74951182890');
      $this->AllResult['success'] = $this->AllVoix('74951182890');
      $this->AllResult['all'] = round($this->FailVoix('74951182890') / $this->AllVoix('74951182890')  * 100,0);

      return view('portal')->with('response',$this->AllResult);
  }
    public function indexPost(Request $request) {
        $this->AllResult['allPhones'] = PortalPhone::all();
        $this->AllResult['fail'] = $this->FailVoix($request['param']);
        $this->AllResult['success'] = $this->AllVoix($request['param']);
        $this->AllResult['all'] = round($this->FailVoix($request['param']) / $this->AllVoix($request['param'])  * 100,0);
        $this->AllResult['phone'] = $request['param'];
        return view('portal')->with('response',$this->AllResult);
    }
}

<?php

namespace App\Http\Controllers;
use App\Jobs\ProceddGetAllVoxi;
use App\Jobs\ProceddGetFalseVoxi;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
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
                ">=CALL_START_DATE" => '2020-08-01',
                "<=CALL_START_DATE" => '2020-08-31'
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
                ">=CALL_START_DATE" => '2020-08-01',
                "<=CALL_START_DATE" => '2020-08-31'
            ),
            'sort' => array()
        ]);
        $res = json_decode($response,true);
        return $res['total'];
    }
  public function index() {


//        dd($this->AllResult);
      return view('portal')->with('response',round($this->AllResult,1));
  }
    public function indexPost(Request $request) {
        $this->AllResult['fail'] = $this->FailVoix($request['param']);
        $this->AllResult['success'] = $this->AllVoix($request['param']);
        $this->AllResult['all'] = round($this->FailVoix($request['param']) / $this->AllVoix($request['param'])  * 100,0);
//        dd($this->AllResult);
        return view('portal')->with('response',$this->AllResult);
    }
}

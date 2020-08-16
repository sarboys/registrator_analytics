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

    public function FailVoix() {
        $response = Http::post('https://portal.keydisk.ru/rest/896/'.env('APP_PORTAL_KEY').'/voximplant.statistic.get', [
            'order' => array(),
            'filter' => array(
                'PORTAL_NUMBER'=>'74951183582',
                'CALL_FAILED_CODE' => 304,
                ">=CALL_START_DATE" => '2020-08-01',
                "<=CALL_START_DATE" => '2020-08-31'
            ),
            'sort' => array()
        ]);
        $res = json_decode($response,true);
        return $res['total'];
    }
    public function AllVoix() {
        $response = Http::post('https://portal.keydisk.ru/rest/896/'.env('APP_PORTAL_KEY').'/voximplant.statistic.get', [
            'order' => array(),
            'filter' => array(
                'PORTAL_NUMBER'=>'74951183582',
                '!CALL_FAILED_CODE' => 304,
                ">=CALL_START_DATE" => '2020-08-01',
                "<=CALL_START_DATE" => '2020-08-31'
            ),
            'sort' => array()
        ]);
        $res = json_decode($response,true);
        return $res['total'];
    }
  public function index() {

        $this->AllResult = $this->FailVoix() / $this->AllVoix()  * 100;
//        dd(round($this->AllResult,1));
      return view('portal');
  }
}

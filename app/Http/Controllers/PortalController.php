<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PortalController extends Controller
{
  public function index() {
//      $response = Http::post('https://portal.keydisk.ru/rest/896/'.env('APP_PORTAL_KEY').'/crm.deal.list', [
//          'order' => array(''),
//          'filter' => array('ID' => 206021),
//          'select' => array("ID", "TITLE", "DATE_CREATE")
//      ]);

      $response = Http::post('https://portal.keydisk.ru/rest/896/'.env('APP_PORTAL_KEY').'/voximplant.statistic.get', [
          'order' => array(),
          'filter' => array(
              'PORTAL_NUMBER'=>'74951183582',
              'CALL_FAILED_CODE'=> 304,
              ">=CALL_START_DATE" => '2020-08-01',
              "<=CALL_START_DATE" => '2020-08-31'
          ),
          'sort' => array()
      ]);
      $res = json_decode($response,true);
      dd($res);
//      return view('portal')->with('response',$response);
  }
}

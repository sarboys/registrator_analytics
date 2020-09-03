<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PartnersController extends Controller
{
    public function index()
    {
        $response = Http::post('https://portal.keydisk.ru/rest/896/gnird2l2jwx4a07z/voximplant.statistic.get', [
            'order' => array(),
            'filter' => array(
                'PORTAL_NUMBER' => '73832807785',
                'CALL_TYPE' => 2,
                'CALL_FAILED_CODE' => 200,
                '>CALL_DURATION' => 47,
                ">=CALL_START_DATE" => '2020-08-17T09:00',
                "<=CALL_START_DATE" => '2020-08-23T18:00'
            ),
            'sort' => array()
        ]);
        $res = json_decode($response, true);
        dd($res);
//        return $res['total'];
//        return view('partners');
    }
}

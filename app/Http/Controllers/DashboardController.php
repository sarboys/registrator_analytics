<?php

namespace App\Http\Controllers;
use App\Models\PortalPhone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public $result;
    public $average;
    public function AllVoix($phone) {
        $response = Http::post('https://portal.keydisk.ru/rest/896/'.env('APP_PORTAL_KEY').'/voximplant.statistic.get', [
            'order' => array(),
            'filter' => array(
                'PORTAL_NUMBER' => $phone,
                'CALL_TYPE' => 2,
                'CALL_FAILED_CODE' => array(200,304),
                ">=CALL_START_DATE" => '2020-08-24T09:00',
                "<=CALL_START_DATE" => '2020-08-30T18:00'
            ),
            'sort' => array()
        ]);
        $res = json_decode($response,true);
        return $res['total'];
    }
    public function FailVoix ($phone) {
        $response = Http::post('https://portal.keydisk.ru/rest/896/'.env('APP_PORTAL_KEY').'/voximplant.statistic.get', [
            'order' => array(),
            'filter' => array(
                'PORTAL_NUMBER'=>$phone,
                'CALL_TYPE' => 2,
                'CALL_FAILED_CODE' => 304,
                '>CALL_DURATION' => 47,
                ">=CALL_START_DATE" => '2020-08-24T09:00',
                "<=CALL_START_DATE" => '2020-08-30T18:00'
            ),
            'sort' => array()
        ]);
        $res = json_decode($response,true);
        return $res['total'];
    }
    public function index() {
        $phones = PortalPhone::orderBy('sort')->get();
        foreach ($phones as $phone) {
            $this->result[$phone->phone]['name'] = $phone->name;
            $this->result[$phone->phone]['all'] = $this->AllVoix($phone);
            $this->result[$phone->phone]['fail'] = $this->FailVoix($phone);
            if($this->result[$phone->phone]['fail'] != 0 && $this->result[$phone->phone]['all'] != 0) {
                $this->result[$phone->phone]['percent'] = round($this->result[$phone->phone]['fail'] / $this->result[$phone->phone]['all']  * 100,2);
            } else {
                $this->result[$phone->phone]['percent'] = 0;
            }
        }
        return view("/portal/dashboard",[
            'response' => $this->result
        ]);
//        dd($this->result);

    }

}


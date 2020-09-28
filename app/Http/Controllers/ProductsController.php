<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductsController extends Controller
{
    public function getDataWeek($type) {
        $date = Carbon::now();
        $lastMonday = new Carbon('Last Monday'.$date);
        $NextSunday = new Carbon('Next Sunday'.$date);

        $lastWeekMonday = new Carbon('Monday last week'.$date);
        $NextWeekSunday = new Carbon('Sunday last week'.$date);
        if($type == 'last') {
            return date('Y-m-d',strtotime($lastMonday));
        } elseif ($type == 'next') {
            return date('Y-m-d',strtotime($NextSunday));
        } elseif ($type == 'last_week_monday') {
            return date('Y-m-d',strtotime($lastWeekMonday));
        } else {
            return date('Y-m-d',strtotime($NextWeekSunday));
        }
    }
    public function index()
    {
        $response = Http::post('https://portal.keydisk.ru/rest/896/'.env('APP_PORTAL_KEY').'/voximplant.statistic.get', [
            'order' => array(),
            'filter' => array(
                'PORTAL_NUMBER' => '74951182068',
                'CALL_TYPE' => 2,
                'CALL_FAILED_CODE' => array(200,304),
                ">=CALL_START_DATE" => $this->getDataWeek('last_week_monday').'T09:00',
                "<=CALL_START_DATE" => $this->getDataWeek('last_week_sunday').'T18:00'
            ),
            'sort' => array()
        ]);
        $res = json_decode($response,true);
        return $res['total'];
        return view('products');
    }
}

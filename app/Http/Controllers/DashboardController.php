<?php

namespace App\Http\Controllers;
use App\Models\Dashboard;
use App\Models\Deal;
use App\Models\DealStats;
use App\Models\PortalPhone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public $result;
    public $average;
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
    public function AllVoix($phone) {
        $response = Http::post('https://portal.keydisk.ru/rest/896/'.env('APP_PORTAL_KEY').'/voximplant.statistic.get', [
            'order' => array(),
            'filter' => array(
                'PORTAL_NUMBER' => $phone,
                'CALL_TYPE' => 2,
                'CALL_FAILED_CODE' => array(200,304),
                ">=CALL_START_DATE" => $this->getDataWeek('last_week_monday').'T09:00',
                "<=CALL_START_DATE" => $this->getDataWeek('last_week_sunday').'T18:00'
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
                ">=CALL_START_DATE" => $this->getDataWeek('last_week_monday').'T09:00',
                "<=CALL_START_DATE" => $this->getDataWeek('last_week_sunday').'T18:00'
            ),
            'sort' => array()
        ]);
        $res = json_decode($response,true);
        return $res['total'];
    }


    public function index() {
        $dashboard = new Dashboard();
        $deal_stats = new DealStats();
        return view("/portal/dashboard",
            [
            'response' => $dashboard::where([
               [ 'date_from' , $this->getDataWeek('last_week_monday').'T09:00'],
               [ 'date_to', $this->getDataWeek('last_week_sunday').'T18:00']
            ])->orderBy('all','desc')->get(),
            'average' => round(($dashboard->sum('fail')/$dashboard->sum('all'))*100,1),
            'responseDeal' => $deal_stats::where([
                [ 'date_from' , $this->getDataWeek('last_week_monday').'T09:00'],
                [ 'date_to', $this->getDataWeek('last_week_sunday').'T18:00']
            ])->orderBy('all','desc')->get(),
            'averageDeal' => round($deal_stats->sum('not_on_time') / ($deal_stats->sum('all') -  $deal_stats->sum('off_time')),3)*100,
            'date_from' => $this->getDataWeek('last_week_monday'),
            'date_to' => $this->getDataWeek('last_week_sunday')
        ]);
    }

}

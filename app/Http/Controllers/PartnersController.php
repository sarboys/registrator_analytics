<?php


namespace App\Http\Controllers;

use App\Http\Controllers\DashboardController;
use App\Models\Remark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Deal;
use App\Models\Dashboard;
use App\Models\PartnerStats;
class PartnersController extends Controller
{
    public function index()
    {
//        PartnerStats::where('product_name', '=', 'Партнер Астрал.ЭДО')->delete();
//        PartnerStats::where('product_name', '=', 'Партнер 1С-Отчетность')->delete();
//        PartnerStats::where('product_name', '=', 'Партнер Астрал-ЭП')->delete();



        $deal = new Deal();
        $dashboard_get = new DashboardController();
        $remarks = $deal::select('remark')->distinct('remark')->get();
        foreach ($remarks as $remark) {
            $res[$remark->remark]['off time'] = deal::where([
                'remark' => $remark->remark,
                'time' =>  5220
            ])->get()->count();
            $res[$remark->remark]['not on time'] = deal::where([
                'remark' => $remark->remark,
                'time' =>  5061
            ])->get()->count();
            $res[$remark->remark]['on time'] = deal::where([
                'remark' => $remark->remark,
                'time' =>  5060
            ])->get()->count();
        }
        return view("/partners",[
            'response' => $res

//            $deal::where([
//                [ 'date_from' , $this->getDataWeek('last_week_monday').'T09:00'],
//                [ 'date_to', $this->getDataWeek('last_week_sunday').'T18:00']
//            ])->get(),
//            'average' => round(($dashboard->sum('fail')/$dashboard->sum('all')*100),1)
        ]);
    }
}

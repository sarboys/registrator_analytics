<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RoAbonents;
use App\Models\PartnerStats;
use Carbon\Carbon;
use DateTime;
use App\Classes\ReplicGetDB;

class ProductsController extends Controller
{

    function getJson (Request $request) {
//        return $request['test'];
//        $arr = json_decode(json_encode($request['test']) , true);
//        foreach ($arr as $value) {
//            $test = new PartnerStats();
//            $test->month = $value['month'];
//            $test->year = $value['year'];
//            $test->data_patner = $value['data'];
//            $test->data_off = $value['data_off'];
//            $test->all = $value['all'];
//            $test->product_name = '';
//            $test->save();
//        }
        if(empty($request['data_prd'])) {
            $request['data_prd'] = '';
        }
        $PartnerStats = PartnerStats::where([
            ['year','=', $request['data']],
            ['product_name','=', $request['data_prd']]
        ])->get();
        return $PartnerStats;
    }
    public function index()
    {

        $ro = new RoAbonents();
//        $test = DB::connection('pgsql')->table('ro_agent')
//            ->join('ro_agent_region', function ($join) {
//                $join->on('ro_agent.agent_id', '=', 'ro_agent_region.agent_id')
//                    ->whereYear('creation_time', '2018');
//            })
//            ->selectRaw('COUNT(DISTINCT abonent_id) AS data, extract(month from creation_time) as month,extract(year from creation_time) as year')
//            ->whereRaw("creation_time >  to_timestamp('2018/01/01', 'YYYY/MM/DD') AND to_timestamp('2018/12/31', 'YYYY/MM/DD') > creation_time")
//            ->groupBy( 'month','year')
//            ->orderByRaw('month desc,year desc')
//            ->get();
//select  COUNT(*) as data , extract(month from creation_time) as month from "ro_agent" where creation_time >  to_timestamp('2019/04/23', 'YYYY/MM/DD') AND to_timestamp('2020/04/23', 'YYYY/MM/DD') > creation_time GROUP BY "month" ORDER BY "month" desc
// = 2759
//        $re123q = DB::connection('pgsql')->table('ro_agent')
//            ->selectRaw(" COALESCE(extract(month FROM q1.creation_time), extract(month FROM q2.off_time)) AS month,
//    COALESCE(extract(year FROM q1.creation_time), extract(year FROM q2.off_time)) AS year,
//    COUNT(DISTINCT q1.abonent_id) OVER (PARTITION BY to_char(q1.creation_time, 'MM.YYYY')) AS data,
//    COUNT(DISTINCT q2.abonent_id) OVER (PARTITION BY to_char(q2.off_time, 'MM.YYYY')) AS data,
//    q2.data_off AS data_off
//FROM ro_agent q1
//    FULL JOIN ro_agent q2 ON to_char(creation_time, 'MM.YYYY') = to_char(off_time, 'MM.YYYY')
//ORDER BY month, year DESC")
//            ->get();




        //Посчитать количество партнеров за этот год. Ушло/Пришло
        $req = DB::connection('pgsql')->table('ro_agent')
            ->selectRaw('COUNT(DISTINCT abonent_id) AS data, extract(month from creation_time) as month,extract(year from creation_time) as year')
            ->whereRaw("creation_time >  to_timestamp('2018/01/01', 'YYYY/MM/DD') AND to_timestamp('2018/12/31', 'YYYY/MM/DD') > creation_time")
            ->groupBy( 'month','year')
            ->orderByRaw('month desc,year desc')
            ->get();


        $req2 = DB::connection('pgsql')->table('ro_agent')
            ->selectRaw('COUNT(DISTINCT abonent_id) AS data_off, extract(month from off_time) as month,extract(year from off_time) as year')
            ->whereRaw("off_time >  to_timestamp('2018/01/01', 'YYYY/MM/DD') AND to_timestamp('2018/12/31', 'YYYY/MM/DD') > off_time")
            ->groupBy( 'month','year')
            ->orderByRaw('month desc,year desc')
            ->get();

        $test = array_merge_recursive( (array) $req, (array) $req2);
//        $test = DB::connection('pgsql')->table('ro_agent')->selectRaw(DB::connection('pgsql')->table('ro_agent')->Raw("WITH q1 AS (

//        "))->get();

//            ->selectRaw('count(*)')
//            ->whereColumn([
//                ['creation_time', '>', '2018-01-01'],
//                ['2020-12', '>', 'creation_time']
//            ])
//            ->selectRaw('extract(month from off_time) as month COUNT(*) as data')
//            ->whereBetween('creation_time',array(new DateTime('2019-01-01'), new DateTime('2020-12-31')))
//            ->whereYear('creation_time', '2020')
//            ->whereRaw('( creation_time BETWEEN 2019-01-01 AND 2020-12-31")
//            ->groupBy( 'month','year')
//            ->orderBy('month')
//            ->get();
//        $request['on'] = $req;
//        $request['off'] = $req_off;
//
//        dd($test);
//        dd($request);
//        $res =   $ro->select('agent_name','creation_time')->whereYear('creation_time', '2017')->whereMonth('creation_time', '09')->get();
//        foreach ($res as $r) {
//            echo $r->agent_name.'-'.$r->creation_time.'<br>';
//        }
        return view('/products',['res'=>$test]);

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\PortalPhone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Classes\PortalUserGet;
use App\Models\PortalDepartment;
class CrmController extends Controller
{
    public $dealResult;

    public function getDeal($dateFrom,$dateTo,$category,$people) {
        $response = Http::post('https://portal.keydisk.ru/rest/896/'.env('APP_PORTAL_KEY').'/crm.deal.list', [
            'order' => array(),
            'filter' => array(
                    'ASSIGNED_BY_ID' => $people,
                    'CATEGORY_ID' => $category,
                    ">=CALL_START_DATE" => $dateFrom,
                    "<=CALL_START_DATE" => $dateTo,
                ),
                'select' => array('*','UF_CRM_1555936928'),
            ]);
            $res = json_decode($response,true);
            return $res;
    }
    public function index(Request $request) {

        $PortalUserGet = new PortalUserGet();
        $PortalDepartment = new PortalDepartment;

        if($request->has('dateRange')) {
            $request['depPeople'] = explode(',',$request['depPeople']);
            $request['dateRange'] = explode(' / ', $request['dateRange']);
            $this->dealResult =$this->getDeal($request['dateRange'][0],$request['dateRange'][1],$request['category'],$request['depPeople']);
//            dd();
            return view('/portal/crm')->with('response',['deal'=> json_encode($this->dealResult['result']),'dep'=>$PortalUserGet->getDepartment(),'people'=>$PortalDepartment::all(),'category' => $PortalUserGet->getCategoryList()]);
        }
        else {
            return view('/portal/crm')->with('response',['deal'=> array(), 'dep'=>$PortalUserGet->getDepartment(),'people'=>$PortalDepartment::all(),'category' => $PortalUserGet->getCategoryList()]);
        }


    }
    public function getUser (Request $request) {
        $getUserByID = new PortalUserGet();
        return $getUserByID->getUser($request['data']);
    }
}



//        dd();
//        $response = Http::post('https://portal.keydisk.ru/rest/896/'.env('APP_PORTAL_KEY').'/crm.timeline.comment.list', [
//            'order' => array(),
//            'filter' => array(
//                'ENTITY_ID' => 207841,
//                'ENTITY_TYPE' => 'Deal'
//            ),
//            'select' => array('ID','COMMENT','*','CREATED')
//        ]);
//
//        $response = Http::post('https://portal.keydisk.ru/rest/896/'.env('APP_PORTAL_KEY').'/crm.activity.list', [
//            'order' => array(),
//            'filter' => array(
//                'OWNER_ID' => 207841,
//                'OWNER_TYPE_ID' => 2
//            ),
//            'select' => array('*')
//        ]);
//        $res = '1';
//        foreach($getUserByID->getUser($request['data']) as $key => $val) {
//            $PortalDepartment->id = 1;
//            $PortalDepartment->fill(['name' => $val['NAME']." ".$val['LAST_NAME']]);
//            $PortalDepartment->fill(['portal_id' =>  $val['ID']]);
//            $PortalDepartment->save();
//        }

<?php

namespace App\Http\Controllers;

use App\Models\PortalPhone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Classes\PortalUserGet;
use App\Models\PortalDepartment;
class CrmController extends Controller
{
    public function index() {
        $depArray = new PortalUserGet();
        $PortalDepartment = new PortalDepartment;
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
        return view('/portal/crm')->with('response',[$depArray->getDepartment(),$PortalDepartment::all()]);
    }
    public function getUser (Request $request) {
        $getUserByID = new PortalUserGet();

        foreach($getUserByID->getUser($request['data']) as $key => $val) {



//            $PortalDepartment->id = 1;
//            $PortalDepartment->fill(['name' => $val['NAME']." ".$val['LAST_NAME']]);
//            $PortalDepartment->fill(['portal_id' =>  $val['ID']]);
//            $PortalDepartment->save();

        }

        return $getUserByID->getUser($request['data']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Classes\PortalUserGet;

class CrmController extends Controller
{
    public function index() {
//        $t = new PortalUserGet();
//        dd($t->getUser());
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
        return view('/portal/crm');
    }
}

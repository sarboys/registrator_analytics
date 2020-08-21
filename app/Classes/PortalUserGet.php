<?php

namespace App\Classes;
use Illuminate\Support\Facades\Http;
use App\Models\PortalPhone;
class PortalUserGet
{
    public function getUser ($array) {
        $response = Http::post('https://portal.keydisk.ru/rest/896/'.env('APP_PORTAL_KEY').'/user.search',        [
            'UF_DEPARTMENT' => $array,
            'ACTIVE'=>'Y'
        ]);
        $res = json_decode($response,true);


        return $res['result'] ;

    }
    public function getDepartment () {
        $response = Http::post('https://portal.keydisk.ru/API/analitics.php');
        $res = json_decode($response,true);
        return $res['DATA'];
    }

    public function getCategoryList() {
        $response = Http::post('https://portal.keydisk.ru/rest/896/'.env('APP_PORTAL_KEY').'/crm.dealcategory.list',        [
            'order' => array(),
            'filter' => array("ID" => array(5,13)),
            'sort' => array("ID", "NAME", "SORT")
        ]);
        $res = json_decode($response,true);
        return $res['result'] ;
    }
}

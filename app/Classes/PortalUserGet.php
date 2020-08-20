<?php

namespace App\Classes;
use Illuminate\Support\Facades\Http;

class PortalUserGet
{
    function __construct() {

    }
    public function getUser () {
        $response = Http::post('https://portal.keydisk.ru/rest/896/'.env('APP_PORTAL_KEY').'/user.search',        [
            'UF_DEPARTMENT' => array(16260,6083)
        ]);
        $res = json_decode($response,true);
        return $res['result'] ;

    }


    public function getDepartment () {
        $response = Http::post('https://portal.keydisk.ru/rest/896/'.env('APP_PORTAL_KEY').'/department.get', [
            'PARENT' => 16221
        ]);
        $res = json_decode($response,true);
        return $res;
    }
}

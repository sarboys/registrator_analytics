<?php

namespace App\Classes;
use Illuminate\Support\Facades\Http;

class PortalUserGet
{
    public function getUser ($array) {
        $response = Http::post('https://portal.keydisk.ru/rest/896/'.env('APP_PORTAL_KEY').'/user.search',        [
            'UF_DEPARTMENT' => $array
        ]);
        $res = json_decode($response,true);
        return $res['result'] ;

    }
    public function getDepartment () {
        $response = Http::post('https://portal.keydisk.ru/API/analitics.php');
        $res = json_decode($response,true);
        return $res['DATA'];
    }
}

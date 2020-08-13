<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PortalController extends Controller
{
  public function index() {
      $response = Http::post('https://portal.keydisk.ru/rest/896/'.env('APP_PORTAL_KEY').'/profile/', [
          'id' => 896
      ]);
      return view('portal')->with('response', $response);
  }
}

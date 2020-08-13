<?php

use Illuminate\Support\Facades\Route;
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('/auth/login');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/partners', 'partnersController@index')->name('partners');
Route::get('/products', 'productsController@index')->name('products');
Route::get('/unloading', 'unloadingController@index')->name('unloading');

Route::get('/portal', 'PortalController@index')->name('portal');

Route::get('/user/{id}', function (\App\User $id) {
    return view('/user/user',['id' => $id]);
})->name('user');

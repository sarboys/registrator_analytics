<?php

use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('/auth/login');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/partners', 'partnersController@index')->name('partners');
Route::get('/products', 'productsController@index')->name('products');
Route::get('/unloading', 'unloadingController@index')->name('unloading');


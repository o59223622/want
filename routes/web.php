<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('beginner', 'BeginnerController@index');

Route::get('resister', 'ResisterController@index');

Route::get('login', 'LoginController@index');

Route::get('goodspage', 'GoodsPageController@index');

Route::get('wantlist','WantListController@index');
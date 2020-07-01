<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\acades\Route;

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
    return view('table');
});

Route::get('/daftar', 'RegisterController@daftar');

Route::get('/index', 'RegisterController@index');

Route::get('/welcome1', 'RegisterController@welcome1');

Route::get('/template', function () {
    return view('template');
});

Route::get('/master', function () {
    return view('admin.Master');
});
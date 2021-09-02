<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/add', function () {
    return view('welcome');
});

Route::post('/submitClient', 'App\Http\Controllers\HomeController@submitClient');

Route::get('/',  'App\Http\Controllers\HomeController@getBasic');
Route::get('/getBasicData',  'App\Http\Controllers\HomeController@getBasicData');
Route::get('/getPdf/{id}',  'App\Http\Controllers\HomeController@getPdf');



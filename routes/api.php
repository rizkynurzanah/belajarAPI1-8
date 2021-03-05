<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'App\Http\Controllers\AuthApiController@login');
    Route::post('logout', 'App\Http\Controllers\AuthApiController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthApiController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthApiController@me');

});
Route::apiResource('artikel', \App\Http\Controllers\artikelAPIController::class);

Route::apiResource('berita', \App\Http\Controllers\beritaAPIController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('soal1','App\Http\Controllers\BabSatuController@a1');

Route::get('soal2','App\Http\Controllers\BabSatuController@a2');

Route::get('soal3','App\Http\Controllers\BabSatuController@a3');

Route::get('soal4','App\Http\Controllers\BabSatuController@a4');

Route::get('soal5','App\Http\Controllers\BabDuaController@a5');

Route::get('soal6','App\Http\Controllers\BabDuaController@a6');

Route::get('soal7','App\Http\Controllers\BabDuaController@a7');

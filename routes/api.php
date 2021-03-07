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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('get-jenis-pembayaran', 'Api\JenisPembayaranController@index')->name('api.get-jenis-pembayaran');
Route::get('get-jenis-pembayaran-object', 'Api\JenisPembayaranController@show')->name('api.get-jenis-pembayaran-object');
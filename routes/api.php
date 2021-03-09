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

Route::get('get-siswa', 'Api\SiswaController@index')->name('api.get-siswa');
Route::get('get-siswa-object', 'Api\SiswaController@show')->name('api.get-siswa-object');

Route::get('get-via-transfer', 'Api\ViaTransferController@index')->name('api.get-via-transfer');
Route::get('get-via-transfer-object', 'Api\ViaTransferController@show')->name('api.get-via-transfer-object');

Route::get('get-rencana-pembayaran', 'Api\RencanaPembayaranController@index')->name('api.get-rencana-pembayaran');
Route::get('get-rencana-pembayaran-object', 'Api\RencanaPembayaranController@show')->name('api.get-rencana-pembayaran-object');
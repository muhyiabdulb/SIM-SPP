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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ROLE KEPALA SEKOLAH
Route::middleware('role:kepsek')->prefix('/kepalasekolah')->name('kepsek.')->group(function() {
    Route::get('kepsek-page', function() {
        return 'Halaman untuk Kepsek';
    })->name('page');
});

//ROLE ORANG TUA
Route::middleware('role:ortu')->prefix('/orangtua')->name('ortu.')->group(function() {
    Route::get('ortu-page', function() {
        return 'Halaman untuk ortu';
    })->name('page');
});

//ROLE PEGAWAI
Route::middleware('role:pegawai')->prefix('/pegawai')->name('pegawai.')->group(function() {
    Route::get('pegawai-page', function() {
        return 'Halaman untuk Pegawai';
    })->name('page');
});

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
    return view('layouts/landing');
});
Route::get('pegawai', function () {
    return view('pegawai/pembayaran/laporan');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ROLE ADMIN
Route::middleware('role:admin')->prefix('/admin')->name('admin.')->group(function() {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    // CRUD RAYON
    Route::prefix('/rayon')->name('rayon.')->group(function(){
        Route::get('/', 'Admin\RayonController@index')->name('index');
        Route::get('/create', 'Admin\RayonController@create')->name('create');
        Route::post('/store', 'Admin\RayonController@store')->name('store');
        Route::get('/edit/{rayon}', 'Admin\RayonController@edit')->name('edit');
        Route::put('/update/{rayon}', 'Admin\RayonController@update')->name('update');
        Route::delete('/delete/{rayon}', 'Admin\RayonController@destroy')->name('destroy');
    });

    // ROUTE JURUSAN
    Route::prefix('/jurusan')->name('jurusan.')->group(function(){
        Route::get('/', 'Admin\JurusanController@index')->name('index');
        Route::get('/create', 'Admin\JurusanController@create')->name('create');
        Route::post('/store', 'Admin\JurusanController@store')->name('store');
        Route::get('/edit/{jurusan}', 'Admin\JurusanController@edit')->name('edit');
        Route::put('/update/{jurusan}', 'Admin\JurusanController@update')->name('update');
        Route::delete('/delete/{jurusan}', 'Admin\JurusanController@destroy')->name('destroy');
    });

    
    //ROUTE ROMBEL
    Route::prefix('/rombel')->name('rombel.')->group(function(){
        Route::get('/', 'Admin\RombelController@index')->name('index');
        Route::get('/create', 'Admin\RombelController@create')->name('create');
        Route::post('/store', 'Admin\RombelController@store')->name('store');
        Route::get('/edit/{rombel}', 'Admin\RombelController@edit')->name('edit');
        Route::put('/update/{rombel}', 'Admin\RombelController@update')->name('update');
        Route::delete('/delete/{rombel}', 'Admin\RombelController@destroy')->name('destroy');
    });

    //ROUTE SEMESTER
    Route::prefix('/semester')->name('semester.')->group(function(){
        Route::get('/', 'Admin\SemesterController@index')->name('index');
        Route::get('/create', 'Admin\SemesterController@create')->name('create');
        Route::post('/store', 'Admin\SemesterController@store')->name('store');
        Route::get('/edit/{semester}', 'Admin\SemesterController@edit')->name('edit');
        Route::put('/update/{semester}', 'Admin\SemesterController@update')->name('update');
        Route::delete('/delete/{semester}', 'Admin\SemesterController@destroy')->name('destroy');
    });

    // CRUD VIA TRANSFER
    Route::prefix('/viatransfer')->name('viatransfer.')->group(function(){
        Route::get('/', 'Admin\ViaTransferController@index')->name('index');
        Route::get('/create', 'Admin\ViaTransferController@create')->name('create');
        Route::post('/store', 'Admin\ViaTransferController@store')->name('store');
        Route::get('/edit/{viatransfer}', 'Admin\ViaTransferController@edit')->name('edit');
        Route::put('/update/{viatransfer}', 'Admin\ViaTransferController@update')->name('update');
        Route::delete('/delete/{viatransfer}', 'Admin\ViaTransferController@destroy')->name('destroy');
    });

    //ROUTE JENIS PEMBAYARAN
      Route::prefix('/jenispembayaran')->name('jenispembayaran.')->group(function(){
        Route::get('/', 'Admin\JenisPembayaranController@index')->name('index');
        Route::get('/create', 'Admin\JenisPembayaranController@create')->name('create');
        Route::post('/store', 'Admin\JenisPembayaranController@store')->name('store');
        Route::get('/edit/{jenispembayaran}', 'Admin\JenisPembayaranController@edit')->name('edit');
        Route::put('/update/{jenispembayaran}', 'Admin\JenisPembayaranController@update')->name('update');
        Route::delete('/delete/{jenispembayaran}', 'Admin\JenisPembayaranController@destroy')->name('destroy');
    });

    //ROUTE PEMBIMBING
    Route::prefix('/pembimbing')->name('pembimbing.')->group(function(){
        Route::get('/', 'Admin\PembimbingController@index')->name('index');
        Route::get('/create', 'Admin\PembimbingController@create')->name('create');
        Route::post('/store', 'Admin\PembimbingController@store')->name('store');
        Route::get('/show/{pembimbing}', 'Admin\PembimbingController@show')->name('show');
        Route::get('/edit/{pembimbing}', 'Admin\PembimbingController@edit')->name('edit');
        Route::put('/update/{pembimbing}', 'Admin\PembimbingController@update')->name('update');
        Route::delete('/delete/{pembimbing}', 'Admin\PembimbingController@destroy')->name('destroy');
    });

    //ROUTE SISWA
    Route::prefix('/siswa')->name('siswa.')->group(function(){
        Route::get('/', 'Admin\SiswaController@index')->name('index');
        Route::get('/create', 'Admin\SiswaController@create')->name('create');
        Route::post('/store', 'Admin\SiswaController@store')->name('store');
        Route::get('/show/{siswa}', 'Admin\SiswaController@show')->name('show');
        Route::get('/edit/{siswa}', 'Admin\SiswaController@edit')->name('edit');
        Route::put('/update/{siswa}', 'Admin\SiswaController@update')->name('update');
        Route::delete('/delete/{siswa}', 'Admin\SiswaController@destroy')->name('destroy');
    });

    //ROUTE USER
    Route::prefix('/user')->name('user.')->group(function(){
        Route::get('/', 'Admin\UserController@index')->name('index');
        Route::get('/create', 'Admin\UserController@create')->name('create');
        Route::post('/store', 'Admin\UserController@store')->name('store');
        Route::get('/show/{user}', 'Admin\UserController@show')->name('show');
        Route::get('/edit/{user}', 'Admin\UserController@edit')->name('edit');
        Route::put('/update/{user}', 'Admin\UserController@update')->name('update');
        Route::delete('/delete/{user}', 'Admin\UserController@destroy')->name('destroy');
        Route::get('user/json','UserController@json');
    });

    // // Profile
    // Route::prefix('/profile')->name('profile.')->group(function () {
    //     Route::get('/myprofile', 'UserController@myProfile')->name('myprofile');
    //     Route::put('/updateprofile', 'UserController@updateProfile')->name('update');
    //     Route::get('/password', 'UserController@changePassword')->name('changepassword');
    //     Route::put('/updatepassword', 'UserController@updatePassword')->name('updatepassword');
    // });     
 
});

// ROLE PEGAWAI
Route::middleware('role:pegawai')->prefix('/pegawai')->name('pegawai.')->group(function() {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    // Pembayaran
    Route::prefix('pembayaran')->name('pembayaran.')->group(function () {
        Route::get('/history', 'Pegawai\PembayaranController@history')->name('history');
        Route::get('/bayar', 'Pegawai\PembayaranController@bayar')->name('bayar');
        Route::post('/store', 'Pegawai\PembayaranController@store')->name('store');
        Route::get('/detail/{id}', 'Pegawai\PembayaranController@detail')->name('detail');
    });
});

// ROLE ORANG TUA
Route::middleware('role:ortu')->prefix('/ortu')->name('ortu.')->group(function() {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
});

// ROLE KEPALA SEKOLAH
Route::middleware('role:kepsek')->prefix('/kepsek')->name('kepsek.')->group(function() {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
 
});

// ROLE PEMBIMBING RAYON
Route::middleware('role:pembimbing')->prefix('/pembimbing')->name('pembimbing.')->group(function() {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
});

// User Edit Profile & Ganti Password
Route::prefix('user')->name('user.')->group(function () {
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/myprofile', 'UserController@myProfile')->name('myprofile');
        Route::put('/updateprofile', 'UserController@updateProfile')->name('update');
        Route::get('/password', 'UserController@changePassword')->name('changepassword');
        Route::put('/updatepassword', 'UserController@updatePassword')->name('updatepassword');
    }); 
});
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

// INI PERUBAHAN PAHRIJAL
Route::get('/index', function () {
    return "Ini index";
});

// INI PERUBAHAN MUHYI
Route::get('/muhyi', function () {
    return "Ini muhyi";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

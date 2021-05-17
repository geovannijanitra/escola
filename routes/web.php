<?php

use Facade\FlareClient\View;
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
    return view('dashboard');
});
Route::resource('gurumapel','GurumapelController');
Route::resource('gurubk','GurubkController');
Route::resource('siswa','SiswaController');
Route::resource('walimurid','WalimuridController');
Route::resource('mapel','MapelController');
Route::resource('pointbk','PointbkController');
Route::resource('kritik','KritikController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/pengumuman', 'pengumuman.create');
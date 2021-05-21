<?php

use Facade\FlareClient\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', 'RedirectIfAuthenticatedController');
Auth::routes();

Route::middleware(['auth'])->group(function(){
    
Route::resource('gurumapel','GurumapelController');
Route::resource('siswa','SiswaController');
Route::resource('mapel','MapelController');
Route::resource('kritik','KritikController');
Route::resource('pengumuman','PengumumanController');
Route::resource('user','UserController');
Route::resource('score','ScoreController');

Route::get('/home', 'HomeController@index')->name('home');
});

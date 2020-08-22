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

Route::get('/', 'dashboardController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/forum', 'PertanyaanController@index')->name('dashboard.forum');
Route::post('/tambahpertanyaan/{jawaban}', 'PertanyaanController@tambahJawaban')->name('tambahjawaban');
Route::post('/pertanyaan', 'PertanyaanController@store')->name('pertanyaan.store');
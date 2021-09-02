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

Route::get('/','App\Http\Controllers\LaprintController@index');

Route::get('/data_terbaru','App\Http\Controllers\LaprintController@data_terbaru');

Route::get('/data_cuti','App\Http\Controllers\LaprintController@data_cuti');

Route::get('/sisa_cuti','App\Http\Controllers\LaprintController@sisa_cuti');

Route::get('/tambah_cuti','App\Http\Controllers\LaprintController@tambah_cuti');

Route::post('/store_cuti','App\Http\Controllers\LaprintController@store_cuti');

Route::get('/tambah_karyawan','App\Http\Controllers\LaprintController@tambah_karyawan');

Route::post('/store_karyawan','App\Http\Controllers\LaprintController@store_karyawan');

Route::get('/edit_karyawan/{no}','App\Http\Controllers\LaprintController@edit_karyawan');

Route::post('/update_karyawan/{no}','App\Http\Controllers\LaprintController@update_karyawan');

Route::get('/hapus_karyawan/{no}','App\Http\Controllers\LaprintController@hapus_karyawan');

Route::get('/cuti','App\Http\Controllers\LaprintController@cuti');

Route::get('/edit_cuti/{id}','App\Http\Controllers\LaprintController@edit_cuti');

Route::post('/update_cuti/{id}','App\Http\Controllers\LaprintController@update_cuti');

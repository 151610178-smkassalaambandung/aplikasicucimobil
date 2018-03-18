<?php

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
Route::group(['prefix'=>'cucimobil','middleware'=>['auth','role:admin|member']], function() {
	//Route diisi disini
	Route::resource('karyawan', 'KaryawanController');
	Route::resource('konsumen', 'KonsumenController');
	Route::resource('mobil', 'MobilController');
	Route::resource('tran', 'TransaksiController');
	Route::resource('user', 'UserController')->middleware(['role:admin']);
});
Route::get('karyawan','KaryawanController@index');
Route::post('karyawan','KaryawanController@search');
Route::get('konsumen','KonsumenController@index');
Route::post('konsumen','KonsumenController@search');
Route::get('mobil','MobilController@index');
Route::post('mobil','MobilController@search');
Route::get('karyawan', 'KaryawanController@index');
Route::get('mobil', 'MobilController@index');
Route::get('tran', 'TransaksiController@index');
Route::post('tran','TransaksiController@search');
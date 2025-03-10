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

Route::resource('/','HomeController')->except(['show','update']);
Route::get('/daftar','DaftarController@index');
Route::post('/daftar/create','DaftarController@create');

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => ['auth','checkRole:admin']], function () {
Route::resource('kamar','KamarController');
Route::post('/kamar/stores','KamarController@stores');
Route::resource('tipekamar','TipekamarController');
Route::post('/tipekamar/stores','TipekamarController@stores');
Route::resource('reservationdiary','ReservationdiaryController');
Route::post('/reservationdiary/stores','ReservationdiaryController@stores');
Route::resource('datatamu','DatatamuController');
Route::post('/datatamu/stores','DatatamuController@stores');
Route::resource('laundry','LaundryController');
Route::post('/laundry/stores','LaundryController@stores');
Route::resource('transaksi','TransaksiController');
Route::get('/daftarlaundry','LaundryController@daftarlaundry');
Route::get('/laporan','LaporanController@index');
Route::get('/dashboard','DashboardController@index');
Route::resource('databooking','BookingController');
Route::get('/databooking/{id}/checkin','BookingController@checkin');
Route::post('/databooking/{id}/update','BookingController@update');
Route::get('/transaksi/{id}/checkout','BookingController@checkout');
Route::post('/checkout/{id}/updates','BookingController@updates');
Route::get('/histori','BookingController@histori');
Route::get('/transaksi/{id}/melaundry','BookingController@melaundry');
Route::post('/databooking/{id}/laundry','BookingController@laundry');
});

Route::group(['middleware' => ['auth','checkRole:customer,admin']], function () {
Route::get('/home/{id}/tambahbooking','HomeController@tambahbooking');
Route::get('/pesan','HomeController@pesan');
Route::get('/pesan/{id}/print','HomeController@print');
Route::post('/booking/stores','BookingController@stores');
});


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

Route::group(['prefix' => 'barang'], function() {
    route::get('index','BarangController@index')->name('barang.index');
    route::get('barang','BarangController@create')->name('tambah-data.barang');
    Route::get('edit/{item}','BarangController@edit')->name('edit-data.barang');
    route::post('store','BarangController@store')->name('barang.store');
    Route::patch('update/{item}','BarangController@update')->name('barang.update');
    Route::delete('delete/{item}','BarangController@destroy')->name('barang.delete');
});

Route::group(['prefix' => 'dashboard'], function(){
    route::get('dashboard','DashboardController@index')->name('dashboard.index');
});

route::group(['prefix' => 'transaksi'], function(){
    Route::get('index','TransaksiController@index')->name('transaksi.index');
    route::get('create/{transactions}','TransaksiController@create')->name('transaksi.create');
    route::get('transaksi','TransaksiController@edit')->name('edit-data.transaksi');
    route::post('store/{transactions}','TransaksiController@store')->name('transaksi.store');
});

route::group(['prefix' => 'pengembalian'], function(){
    route::get('index','KembaliController@index')->name('kembali.index');
    route::get('create/{id}','KembaliController@create')->name('kembali.create');
    route::post('store/{transaksi}','KembaliController@store')->name('kembali.store');
});

route::group(['prefix' => 'sms'], function(){
    route::get('create','SmsController@create')->name('sms.create');
    route::post('sms/{sms}','SmsController@store')->name('sms.kirim');
});

route::group(['prefix' => 'cetak'], function(){
    route::get('index','CetakController@index')->name('cetak.barang');
    route::get('edit','CetakController@edit')->name('cetak.transaksi');
    route::get('create','CetakController@create')->name('cetak.pengembalian');
    route::get('dashboard','CetakController@dashboard')->name('cetak.dashboard');
});

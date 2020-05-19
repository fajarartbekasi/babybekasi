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

Route::group(['prefix' => 'master-barang'], function(){
    route::get('index', 'MasterbarangController@index')->name('master-barang.index');
    route::get('create', 'MasterbarangController@create')->name('master-barang.create');
    route::post('store', 'MasterbarangController@store')->name('master-barang.store');
    route::get('edit/product/{product}', 'MasterbarangController@edit')->name('master-barang.edit.product');
    route::patch('update/product/{product}', 'MasterbarangController@update')->name('master-barang.update.product');

    route::post('add-cart', 'MasterbarangController@addTocart')->name('master-barang.add-cart');
    route::post('update-cart', 'MasterbarangController@updateCart')->name('master-barang.update-cart');
    route::get('proses-penjualan', 'MasterbarangController@checkout')->name('master-barang.proses-penjualan');
    route::post('kirim-penjualan', 'MasterbarangController@prosesCheckout')->name('master-barang.kirim-penjualan');

    Route::get('/checkout/{invoice}', 'MasterbarangController@checkoutFinish')->name('master-barang.checkout');
});

Route::get('penjualan/index','PenjualanController@index')->name('penjualan.index');
Route::get('cari-penjualan','ReportController@show')->name('cari-penjualan');
Route::get('cari-laporan','ReportController@periode')->name('cari-laporan');

Route::get('list-cart', 'MasterbarangController@listcart')->name('list-cart');
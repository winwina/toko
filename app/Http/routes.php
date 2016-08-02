<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('barang','BarangController');
Route::resource('kategori','KategoriController');
Route::resource('tambah','BarangController@store');
Route::resource('tambah_kat','KategoriController@store');
Route::resource('edit','BarangController@edit');
Route::resource('delete','BarangController@destroy');
Route::resource('update','BarangController@update');



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

Route::get('catergori', function () {
    return"kategori";
});

Route::get('master', function () {
    return view('Dashboard.index');
});
Route::get('loby', function () {
    return view('Dashboard.kontenadmin');
});
Route::get('kategorii', function () {
    return view('kategori.index');
});
/*Route::get('detail_kategori/{id}', function ($id) {
    return"id ".$id;
});*/

Route::post('kategori.store','Kategoricontroller@store');
Route::post('kategori/update','Kategoricontroller@update');
Route::get('kategori.tambah','Kategoricontroller@tambah');
Route::get('kategori/destroy/{id}','Kategoricontroller@destroy');
Route::get('kategori.kategoriedit/{id}','Kategoricontroller@edit');


Route::resource('kategori','Kategoricontroller');

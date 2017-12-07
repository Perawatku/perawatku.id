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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::resource('/','PerawatkuController');
Route::get('/listrawat','PerawatkuController@listrawat')->name('perawatku.listrawat');
Route::get('/detailrs/{id}','PerawatkuController@detailrs');
Route::get('/detailrs/listperawat/{id}','PerawatkuController@listperawat');
Route::get('/detailrs/listperawat/detailperawat/{id}','PerawatkuController@detailperawat');
Route::get('/detailrs/listperawat/detailperawat/pemesanan/{id}','PerawatkuController@pemesanan');
Route::post('/pesanperawat','PerawatkuController@pemesananperawat');
Route::get('/about','PerawatkuController@about');
Route::get('/faq','PerawatkuController@faq');

Route::get('/rumahsakit', 'RumahSakitController@index')->name('rumahsakit.home');
Route::get('/rumahsakit/perawat', 'RumahSakitController@perawat')->name('rumahsakit.perawat');
Route::get('/rumahsakit/perawat-add', 'RumahSakitController@perawat_add')->name('rumahsakit.perawat.add');
Route::get('/rumahsakit/perawat-edit', 'RumahSakitController@perawat_edit')->name('rumahsakit.perawat.edit');
Route::get('/rumahsakit/profil', 'RumahSakitController@profil')->name('rumahsakit.profil');
Route::get('/rumahsakit/profil-edit', 'RumahSakitController@profil_edit')->name('rumahsakit.profil.edit');

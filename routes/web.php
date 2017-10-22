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
Route::get('/listrawat','PerawatkuController@listrawat');
Route::get('/detailrs/{id}','PerawatkuController@detailrs');
Route::get('detailrs/listperawat/{id}','PerawatkuController@listperawat');
Route::get('detailrs/listperawat/detailperawat/{id}','PerawatkuController@detailperawat');
Route::get('detailrs/listperawat/detailperawat/pemesanan/{id}','PerawatkuController@pemesanan');
Route::post('pesanperawat','PerawatkuController@pemesananperawat');
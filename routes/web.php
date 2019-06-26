<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {return view('welcome');});
|
*/

					/*login*/
Auth::routes();

					/*aktifasi register dengan email*/
Auth::routes(['verify' => true]);

					/*home butuh login terverifikasi*/
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');



  					/*home butuh login terverifikasi*///tambah-edit kategori & show film
Route::resource( 'admin/kategori','KategoriController');

//tambah tipe
Route::get( 'admin/kategori/{slug}/create','KategoriController@createTipe');
Route::post( 'admin/kategori/{slug}','KategoriController@storeTipe');
//edit tipe

Route::get( 'admin/kategori/{slug}/{slug2}/edit','KategoriController@editTipe');
Route::patch( 'admin/kategori/tipe/{slug2}','KategoriController@updateTipe');
Route::delete( 'admin/kategori/tipe/{id}','KategoriController@destroyTipe');

					/*halaman awal*/
Route::get('/','AwalController@index');
Route::get( '/{slug}/{slug2}','AwalController@showKonten');				
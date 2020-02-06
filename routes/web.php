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
Route::get('/usuario', 'UsuarioController@index')->name('usuario')->middleware('usuariok');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admink');


Route::resource('users','UsersController');
//cajero
Route::resource('ventas','VentasController');
Route::resource('tiendas','TiendasController');
Route::resource('documentos','DocumentosController');
//Nuevo
Route::resource('tipos','TiposController');

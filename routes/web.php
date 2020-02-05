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
Route::get('/recipe', function () {
    return view('recipe');
});
Route::get('cesta', 'ClienteWebController@cesta');

Auth::routes();
Route::get('/mccb', 'ClienteWebController@index')->name('cliente')->middleware('clienteweb');
Route::get('/cajero', 'CajeroController@index')->name('cajero')->middleware('cajero');
Route::get('/recepcion', 'RecepcionController@index')->name('recepcion')->middleware('recepcion');
Route::get('/elaborador', 'ElaboradorController@index')->name('elaborador')->middleware('elaborador');
Route::get('/supervisor', 'SupervisorController@index')->name('supervisor')->middleware('supervisor');


//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('login','LoginController@index');
// Route::get('clienteweb','ClienteWebController@index')->name('home');
// Route::get('cesta','ClienteWebController@cesta');
// Route::get('cajero','CajeroController@index');

// Route::get('/posts','PostsController@index');
// Route::get('/posts/create','PostsController@create');
// Route::get('/posts/{post}','PostsController@show');
// Route::post('/posts','PostsController@store');
// Route::get('/posts/{post}/edit','PostsController@edit');
// Route::patch('/posts/{post}','PostsController@update');
// Route::delete('/posts/{post}','PostsController@destroy');

Route::resource('posts','PostsController');
//MENU categoria
Route::resource('catmenus','CatMenuController');
//MENUS
Route::resource('menus','MenuController');
//INSUMOS Y CONTROL INSUMOS y insumos Stocks
Route::resource('insumos', 'InsumosController');
Route::resource('categoria_insumos', 'Categoria_InsumosController');
Route::resource('insumos_stocks','Insumos_StocksController');
Route::resource('users','UsersController');
Route::resource('usersrol','UsersRolController');
//cajero
Route::resource('ventas','VentasController');
Route::resource('tiendas','TiendasController');

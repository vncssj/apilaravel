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

Route::group(['prefix' => 'users'], function(){
    Route::get('/','UsersController@index');
    Route::get('index','UsersController@index');
    Route::get('add','UsersController@add');
    Route::post('add','UsersController@save');
});
Route::group(['prefix' => 'produtos'], function(){
    Route::get('/', 'ProdutosController@index');
    Route::get('index', 'ProdutosController@index');
});
Route::group(['prefix' => 'categorias'], function(){
    Route::get('/', 'CategoriasController@index');
    Route::get('index', 'CategoriasController@index');
    Route::get('add', 'CategoriasController@add');
    Route::post('add', 'CategoriasController@saveAdd');
});
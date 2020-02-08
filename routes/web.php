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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ProdutoController@index');

Route::get('/form', 'ProdutoController@create');
Route::post('/store', 'ProdutoController@store');
Route::get('/edit/{id}', 'ProdutoController@edit');
Route::put('/update/{id}', 'ProdutoController@update');

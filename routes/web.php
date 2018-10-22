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

Route::get('/', 'noticiasController@index');
Route::get('/nova_noticia', 'noticiasController@create');
Route::post('/salvar_noticia', 'noticiasController@store');
Route::get('/gestor_noticia', 'noticiasController@listarNoticias');
Route::get('noticias_visivel/{id}', 'noticiasController@visivelNoticias');
Route::get('noticias_deletar/{id}', 'noticiasController@destroy');
Route::get('noticias_editar/{id}', 'noticiasController@edit');
Route::post('noticias_atualizar/{id}', 'noticiasController@update');

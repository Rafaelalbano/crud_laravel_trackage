<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MotoristasController@index');

Route::get('motorista/novo', 'MotoristasController@create');
Route::post('motorista/novo', 'MotoristasController@store')->name('salvar_motorista');
Route::get('motorista/listar', 'MotoristasController@show');
Route::get('motorista/excluir/{id}', 'MotoristasController@destroy')->name('excluir_motorista');
Route::get('motorista/edit/{id}', 'MotoristasController@edit')->name('editar_motorista');
Route::post('motorista/edit/{id}', 'MotoristasController@update')->name('atualizar_motorista');
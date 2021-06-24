<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;

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
/*****Empresa */
Route::get('empresa/index','EmpresaController@index');
Route::get('empresa/create','EmpresaController@create');
Route::post('empresa/store','EmpresaController@store');
Route::get('empresa/show','EmpresaController@show');
Route::get('empresa/edit/{id}','EmpresaController@edit');
Route::post('empresa/update/{id}', 'EmpresaController@update');
Route::get('empresa/destroy/{id}','EmpresaController@destroy');

/*****Direccion  */
Route::get('direccion/create/{id}','DireccionController@create');
Route::post('direccion/store/{id}','DireccionController@store');
Route::get('direccion/show/{id}','DireccionController@show');
Route::get('direccion/edit/{id}','DireccionController@edit');
Route::post('direccion/update/{id}', 'DireccionController@update');
Route::get('direccion/destroy/{id}/{idEmpresa}','DireccionController@destroy');

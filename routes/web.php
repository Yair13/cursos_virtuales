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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');








//registro_estudiantes
Route::get('/', 'RegistroEstudiantesController@index')->name('index.index');  // PRIMERA PANTALLA
Route::get('registro_estudiantes', 'RegistroEstudiantesController@index')->name('registro_estudiantes.index'); 
Route::post('registro_estudiantes/store', 'RegistroEstudiantesController@store')->name('registro_estudiantes.store'); // GUARDAR NUEVO

//listado aspirantes

Route::get('registro_estudiantes/list_aspirantes', 'RegistroEstudiantesController@list_aspirantes')->name('registro_estudiantes.list_aspirantes'); 
Route::get('registro_estudiantes/list_aspirantes_filtr', 'RegistroEstudiantesController@list_aspirantes_filtr')->name('registro_estudiantes.list_aspirantes_filtr'); 
Route::put('registro_estudiantes/update/{id}', 'RegistroEstudiantesController@update')->name('registro_estudiantes.update'); //ACTUALIZAR

//usuarios

Route::get('user/list', 'UserController@index')->name('user.index');  // PRIMERA PANTALLA
Route::get('user/create', 'UserController@create')->name('user.create'); // Creacion
Route::post('user/store', 'UserController@store')->name('user.store'); // GUARDAR NUEVO

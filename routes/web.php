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
    return redirect('inicio');
});

Auth::routes(['register'=>false, 'reset'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('registro', 'RegisterController');
Route::get('crear', 'RegisterController@create')->name('crear');
Route::get('crearPdf/{id}', 'RegisterController@ExportPdf')->name('crearPdf');
Route::resource('inicio', 'InicioController');

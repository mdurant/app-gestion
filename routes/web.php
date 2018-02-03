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

    // Ruta de Productos
    Route::get('/admin/prodcuts', 'ProductController@index'); // listar
    Route::get('/admin/prodcuts/create', 'ProductController@create'); // crear
    Route::get('/admin/prodcuts/create', 'ProductController@create'); // crear
    Route::get('/admin/prodcuts/', 'ProductController@store'); // RegistrarPermite Guardar (Store = save)
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php


Route::get('/', function () {
    return view('welcome');
});

 // Ruta de Productos
Route::get('/admin/products', 'ProductController@index'); // listar
Route::get('/admin/products/create', 'ProductController@create'); // crear
Route::post('/admin/products/', 'ProductController@store'); // RegistrarPermite Guardar (Store = save)

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', 'ProductController@index');
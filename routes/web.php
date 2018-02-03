<?php


Route::get('/', function () {
    return view('welcome');

    // Ruta de Productos
    Route::get('/admin/prodcuts', 'ProductController@index'); // listar
    Route::get('/admin/prodcuts/create', 'ProductController@create'); // crear
    Route::postphp('/admin/prodcuts/', 'ProductController@store'); // RegistrarPermite Guardar (Store = save)
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

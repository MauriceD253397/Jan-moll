<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products','ItemController@index')->name('products.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home/store', 'ItemController@store')->name('products.store');

Route::get('/product/{item}','ItemController@show')->name('products.show');

Route::get('/product/{item}/delete','ItemController@destroy')->name('products.delete');

Route::get('products/{item}/update','ItemController@update')->name('products.update');
// Route::admin('/admin')->name('admin.index');

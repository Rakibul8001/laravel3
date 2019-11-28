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
Route::get('/home','LoginController@home')->name('home');
//Route::get('/login','LoginController@index');
Route::get('/contact','LoginController@contact')->name('contact');
Route::get('/products','LoginController@products')->name('products');

Route::group(['prefix'=>'admin'],function(){
    Route::get('/','AdminPagesController@index')->name('admin.pages.index');
    Route::get('/products/create','AdminPagesController@create')->name('admin.pages.products.create');
    Route::post('/products/create/store','AdminPagesController@store')->name('admin.pages.products.store');
});



?>

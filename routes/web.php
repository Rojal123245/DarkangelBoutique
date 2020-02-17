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


use App\Category;
use function foo\func;

Route::get('/', function () {
    return view('frontend/home');
});

Route::get('/shop', function (){
   return view('frontend/shop') ;
});

Route::get('/product-details', function (){
    return view('frontend/product-details');
});

Route::get('/admin-home', function (){
    return view('admin/dashboard');
});

/* ------------- Product routes -----------------------------------*/
Route::get('/admin-product', 'ProductController@index');
Route::get('/admin-product/create', 'ProductController@create')->name('prod.create');
Route::post('/admin-product/store', 'ProductController@store')->name('prod.store');
Route::get('/admin-product/{product}/edit', 'ProductController@edit')->name('prod.edit');
Route::PUT('/admin-product/{product}/update', 'ProductController@update')->name('prod.update');
Route::get('/admin-product/{id}', 'ProductController@destroy')->name('prod.destroy');

/*--------------------------Category routes ----------------------*/
Route::get('/admin-category', 'CategoryController@index');
Route::get('/admin-category/create', 'CategoryController@create')->name('category.create');
Route::post('/admin-category/store', 'CategoryController@store')->name('category.store');
Route::get('/admin-category/{category}/edit', 'CategoryController@edit')->name('category.edit');
Route::PUT('/admin-category/{category}/update', 'CategoryController@update')->name('category.update');
Route::get('/admin-category/{id}', 'CategoryController@destroy')->name('category.destroy');
//Route::get('/admin-product', function (){
//
//});

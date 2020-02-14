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

Route::get('/admin-product', 'ProductController@index');

Route::get('/admin-product/create', 'ProductController@create')->name('prod.create');
Route::post('/admin-product/store', 'ProductController@store')->name('prod.store');
Route::get('/admin-product/{product}/edit', 'ProductController@edit')->name('prod.edit');
Route::post('/admin-product/{product}/update', 'ProductController@update')->name('prod.update');
Route::get('/admin-product/{id}', 'ProductController@destroy')->name('prod.destroy');

//Route::get('/admin-product', function (){
//
//});

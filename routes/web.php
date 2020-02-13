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

Route::get('/admin-product', function (){
    return view('admin/product');
});

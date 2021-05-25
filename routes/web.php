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
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontendController;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;
use Illuminate\Http\Request;
use App\User;

use function foo\func;




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

/*--------------------------Category_measurement routes ----------------------*/
Route::get('/admin-category-measure', 'CategoryMeasurementController@index');
Route::get('/admin-category-measure/create', 'CategoryMeasurementController@create')->name('categorymeasure.create');
Route::post('/admin-category-measure/store', 'CategoryMeasurementController@store')->name('categorymeasure.store');
Route::get('/admin-category-measure/{category_measure}/edit', 'CategoryMeasurementController@edit')->name('categorymeasure.edit');
Route::put('/admin-category-measure/{category_measure}/update', 'CategoryMeasurementController@update')->name('categorymeasure.update');
Route::get('/admin-category-measure/{id}', 'CategoryMeasurementController@destroy')->name('categorymeasure.destroy');

/*------------------------------ Measurement routes -----------------------------*/
Route::post('/measurementSave', 'MeasurementController@saveData')->name('measure.save');

/* ---------------------------Customer Routes ------------------------*/
Route::get('/customerLogin', 'CustomerController@index')->name('customer.login');
Route::get('/customerRegister', 'CustomerController@register')->name('customer.register');
Route::post('/customerLogin/register', 'CustomerController@store')->name('customer.store');
Route::post('/customerLogin/login', 'CustomerController@login')->name('customer.customerLogin');

/* ---------------------------Frontend Routes ------------------------*/
Route::get('/order', 'DisplayOrderController@index')->name('order.index');
Route::get('/order/{measure}/status', 'DisplayOrderController@changeStatus')->name('order.status');
Route::get('/order/{measure}/cancel', 'DisplayOrderController@CancelStatus')->name('order.cancel');
Route::get('/order/{id}', 'DisplayOrderController@destroy')->name('order.destroy');

/* ---------------------------Frontend Routes ------------------------*/

Route::get('/', 'FrontendController@index')->name("front.home");
Route::get('/prod-details/{id}/show', 'FrontendController@show')->name('front.show');
Route::get('/shop', 'FrontendController@shopData')->name('front.shopData');
Route::get('/shop/{category}/product', 'FrontendController@shopProd')->name('front.shopprod');
Route::get('/userRegister', 'FrontendController@userRegister')->name('front.register');
Route::get('/userLogin', 'FrontendController@userlogin')->name('front.login');
Route::post('/saveLogin', 'FrontendController@saveLogin')->name('front.savelogin');
Route::post('/saveRegister', 'FrontendController@saveRegister')->name('front.saveRegister');
Route::get('/contactus', 'FrontendController@contact')->name('front.contact');

Auth::routes();

//------------------------Search Routes -------------------------
Route::post('/search', 'SearchFunctionalityController@index');


/*------------------------- Rating Route ------------------- */
//Route::get('/rating', function() {
//    return View::make('product-details');
//});

//Route::post('/rating', 'RatingController@receiveData')->name('postData');

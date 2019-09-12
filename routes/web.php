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
});


Route::get('/landingpage', function () {
    return view('landingpage');
})->name('landingpage');


Auth::routes();

Route::get('/{view?}', 'HomeController@index')->where('view', '(.*)')->name('home');
//Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');

//PRODUCTS
//Route::get('/admin/product', 'Admin\ProductController@index')->name('admin.product.index')->middleware('auth');

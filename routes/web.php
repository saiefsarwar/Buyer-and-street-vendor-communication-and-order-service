<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/' , 'PageController@landingPage');
Route::get('/contact' , 'PageController@contact')->name('contact');
Route::get('/signup' , function (){
	return view('auth.signup');})->name('user.signup');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/add', 'CartController@add')->name('cart.store');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');
Route::get('/shop/checkout' , 'CheckoutController@index')->name('checkout.index');
Route::post('/shop/checkout', 'CheckoutController@store')->name('checkout.store');

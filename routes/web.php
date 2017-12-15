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


//Route::get('/', 'HomeController@index');

Route::get('/test', function(){
  return "test";
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/productos', 'ProductsController@index');
Route::get('/productos/{id}', 'ProductsController@show');



Route::get('/nueva', 'HomeController@nueva');
Route::get('/faq', 'HomeController@faq');
Route::get('/index', 'HomeController@index');
Route::get('/login', 'HomeController@login');
Route::get('/register', 'HomeController@register');
Route::get('/welcome', 'HomeController@welcome');

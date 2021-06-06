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

Route::get('/', function () {
  return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('home2', 'CarController@home2Function')->name('home2');

Route::get('/pilot/{id}', 'CarController@pilotFunction')->name('pilot');

Route::get('/brand/{id}', 'CarController@brandFunction')->name('brand');

Route::get('/create', 'CarController@createFunction')->name('create');

Route::post('/create/store', 'CarController@storeFunction')->name('store');

Route::get('/edit/{id}', 'HomeController@editFunction')->name('edit');

Route::post('/update/{id}', 'CarController@updateFunction')->name('update');

Route::get('/delete/{id}', 'HomeController@deleteFunction')->name('delete');

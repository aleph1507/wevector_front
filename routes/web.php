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

Route::get('/howitworks', function() {
  return view('howitworks');
})->name('howitworks');

Route::get('/plans', function() {
  return view('plans');
})->name('plans');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

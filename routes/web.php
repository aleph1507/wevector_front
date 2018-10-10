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

Route::get('/contact', function() {
  return view('contact');
})->name('contact');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('/admin/landing', 'PagesController@landing_page')->name('admin_landing');

Route::get('/admin/howitworks', 'PagesController@howitworks')->name('admin_howitworks');

Route::get('/admin/packages', 'PagesController@packages')->name('admin_packages');

Route::get('/admin/contact', 'PagesController@contact')->name('admin_contact');

Route::post('/admin/content', 'ContentController@content')->name('content');

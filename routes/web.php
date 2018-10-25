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
    $content = App\ContentLive::landing()->get();
    return view('welcome')->with(compact('content'));
});

Route::get('/howitworks', function() {
  $content = App\ContentLive::howitworks()->get();
  return view('howitworks')->with(compact('content'));
})->name('howitworks');

Route::get('/plans', function() {
  $content = App\ContentLive::packages()->get();
  return view('plans')->with(compact('content'));
})->name('plans');

Route::get('/contact', function() {
  $content = App\ContentLive::contact()->get();
  return view('contact')->with(compact('content'));
})->name('contact');

Route::get('/register', function() {
  $content = App\ContentLive::landing()->get();
  return view('welcome')->with(compact('content'));
});

Route::post('/register', function() {
  echo 'Sorry, registration has ended';
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('/admin/landing', 'PagesController@landing_page')->name('admin_landing');

Route::get('/admin/howitworks', 'PagesController@howitworks')->name('admin_howitworks');

Route::get('/admin/packages', 'PagesController@packages')->name('admin_packages');

Route::get('/admin/contact', 'PagesController@contact')->name('admin_contact');

Route::get('/admin/footer', 'PagesController@footer')->name('admin_footer');

Route::post('/admin/content', 'ContentController@content')->name('content');

Route::post('/admin/publish', 'PagesController@publish')->name('publish');

Route::get('/preview/{page?}', 'PagesController@preview')->name('preview');

Route::post('/contactmail/send', 'ContactController@send')->name('send_contact');

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

Route::get('index', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('backend', function () {
    return view('backend');
});
Route::get('/', function () {
    return view('frontend.index');
});
Route::get('about', function () {
    return view('frontend.about');
});
Route::get('catagories', function () {
    return view('frontend.catagories');
});
Route::get('contact', function () {
    return view('frontend.contact');
});
Route::get('singlepost', function () {
    return view('frontend.singlepost');
});
Route::group(['prefix' => 'home', 'middleware' => ['auth']], function () {
    Route::resource('artikel', 'ArtikelController');
    Route::resource('kategori', 'KategoriController');
    Route::resource('tag', 'TagController');
});
    Route::resource('/', 'FrontendController');
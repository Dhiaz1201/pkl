<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
   Route::resource('siswa', 'Api\SiswaController');
      Route::resource('kategori', 'Api\KategoriController');
          Route::resource('tag', 'Api\TagController');
           Route::resource('/latest', 'Api\FrontendController');
    Route::group(['prefix' => 'json' ], function () {
      Route::get('/latest', 'Api\FrontendController@latest');
       Route::get('/menu', 'Api\FrontendController@menu');
       Route::get('/tag', 'Api\FrontendController@tag');
       Route::get('/latestnews', 'Api\FrontendController@latestnews');
       Route::get('/singlepost{artikel}','Api\FrontendController@singlepost');
    // Route::get('/index', 'Api\FrontendController@index');
 });
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



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'MainController@config');
Route::get('/main', 'MainController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/googleedca492c694e8d2c', 'MainController@in');
Route::get('/anketa', 'MainController@anketa');
Route::get('/uchat', 'MainController@uchat');
Route::get('/newinfo', 'MainController@newinfo');
Route::get('/rasp', 'MainController@rasp');
Route::get('/docs', 'MainController@docs');

Route::post('/form1', 'MainController@form1');
Route::post('/form2', 'MainController@form2');

Route::get('/photovideo', 'MainController@photovideo');

Route::get('/ssoboy', 'MainController@ssoboy');

Route::get('/scrol18923net', 'MainController@scroll');

Route::get('/vsephoto', 'MainController@vsephoto');

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/facebook', 'Auth\RegisterController@redirectFacebook');
Route::get('auth/callback/facebook', 'Auth\RegisterController@callback');
Route::post('auth/social', 'Auth\RegisterController@register_with_social');

Auth::routes();

Route::get('/home', 'HomeController@index');

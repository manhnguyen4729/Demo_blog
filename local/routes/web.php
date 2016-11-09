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
Route::get('createuser','Admin\LoginController@createUser');
Route::group(['namespace'=>'Admin'],function(){
	Route::group(['prefix'=>'login','middleware'=>'checkLogin'],function(){
		Route::get('/','LoginController@getLogin');
		Route::post('/','LoginController@postLogin');
	});
	Route::group(['prefix'=>'admin','middleware'=>'checkLogout'],function(){
		Route::get('home','HomeController@getHome');
		Route::get('logout','HomeController@getLogout');
	});
});
Route::get('abc','HomeController@mail');
Route::
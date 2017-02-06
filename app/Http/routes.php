<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::post('storage/create', 'ImageController@upload');


Route::post('login', [
	'as' => 'login-post',
	'uses' => 'Auth\AuthController@login'
]);

//retirar sesion
Route::get('logout', [
	'as' => 'logout',
	'uses' => 'Auth\AuthController@logout'
]);

// Para autentificarse
Route::get('login', [
	'as' => 'login-get',
	'uses' => 'Auth\AuthController@showLoginForm'
]);

Route::get('morepruebas', [
	'as' => 'notifications',
	'uses' => 'ImageController@token'
]);
Route::post('addtoken', [
	'as' => 'token',
	'uses' => 'ImageController@addtoken'
]);

Route::get('/', function () {
    return view('home');
});
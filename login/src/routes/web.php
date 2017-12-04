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

Route::group(['middleware' => 'web'], function() {
	Route::get('/login', 'Nikibyniki\Login\LoginController@showLoginForm')->name('login');
	Route::post('/login', 'Nikibyniki\Login\LoginController@login');
	Route::get('/home', function() {
		if(Auth::check()) {

		return Auth::user();
		}
		else {
			return 0;
		}
	});
	Route::get('/logout', function() {
		return Auth::logout();
	});
});
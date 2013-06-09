<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('login', 'UserController@showLoginForm');
Route::post('login', 'UserController@doLogin');

Route::get('register', 'UserController@showRegisterForm');
Route::post('register', 'UserController@doRegistration');

Route::group(array('before' => 'auth'), function()
{
    Route::get('/', 'ReservationController@showDashboard');
});
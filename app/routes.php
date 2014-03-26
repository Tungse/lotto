<?php

/*
|--------------------------------------------------------------------------
| Fucking Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the fucking routes for your shitty application.
| It's a fucking breeze. Simply tell Laravel the fucking URIs it should respond to
| and give it the Closure to fucking execute when that URI is requested.
|
*/

Route::any('/', 'IndexController@actionController');
Route::any('index', 'IndexController@actionController');
Route::any('admin', 'AdminController@actionController');

if(Config::get('facebook.enviroment') == 'live') App::error(function(Exception $exception) 
{ 
	return Redirect::to('/'); 
});
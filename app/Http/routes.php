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
    return view('Welcome');
});

// Api Routes

Route::any('api/orange', 'ApiController@orangeData');
Route::any('api/orange-vue', 'ApiController@orangeVueData');

// Orange Routes

Route::resource('orange', 'OrangeController');
Route::auth();

Route::get('/home', 'HomeController@index');

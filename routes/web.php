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

Route::get('/', 'ManagementController@index');
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login.get');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', 'UsersController', ['only' => ['edit', 'update', 'destroy']]);
    Route::resource('management', 'ManagementController', ['only' => ['index', 'store', 'show', 'edit', 'update', 'destroy']]);
    Route::get('monday/{id}', 'WeekController@monday')->name('monday.get');
    Route::get('tuesday/{id}', 'WeekController@tuesday')->name('tuesday.get');
    Route::get('wednesday/{id}', 'WeekController@wednesday')->name('wednesday.get');
    Route::get('thursday/{id}', 'WeekController@thursday')->name('thursday.get');
    Route::get('friday/{id}', 'WeekController@friday')->name('friday.get');
});

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

Route::resource('lessons', 'LessonController');

Route::resource('users', 'UserController');

Route::resource('countries','CountryController');

Route::get('/', function () {
    $france = Countries::where('name.common', 'Egypt');
    return $france;
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

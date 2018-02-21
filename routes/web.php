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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/adds', 'AddsController@index');
Route::resource('useradds', 'UserAddsController');
Route::resource('adds', 'AddsController');
Route::resource('users', 'UsersController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


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

Route::get('/', function () {
    return view('home');
});
Route::get('/register', 'RegisterController@register');
Route::post('/register', 'RegisterController@postRegister');
Route::get('/logout', 'LoginController@logout');
Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@postLogin');

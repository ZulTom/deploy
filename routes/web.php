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
    return view('welcome');
});

//below the register routes have been set to false, remove it if you need to register a new user.Auth::routes(); to add register functionality
Auth::routes(['register' => false]);
Route::post('add_lecture','Audio_lecturesController@storefile');
Route::get('addlecture', function () {
    return view('addlecture');
});



Route::get('/home', 'HomeController@index')->name('home');

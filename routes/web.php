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


//login
Route::get('/','AuthController@login');
Route::get('/login','AuthController@login')->name('login');
Route::get('/register','AuthController@register')->name('register');
Route::post('/postregister','AuthController@postregister');
Route::post('/postlogin','AuthController@postlogin');
//akhiranlogin

//Uji
Route::get('/uji','UjiController@index');
Route::get('/uji/{id}/pengisian','UjiController@pengisian');
Route::post('/uji/{id}/create','UjiController@create');
//akhrir Uji


//Hasil
Route::get('/hasil/{id}','HasilController@index');


//dashboard
Route::get('/home','DashboardController@index');
//dashboard Akhiran


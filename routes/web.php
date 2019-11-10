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

//Route Login
Route::post('/postlogin','AuthController@postlogin');
Route::get('/login','AuthController@login')->name('login');

//Route Logout
Route::get('/logout','AuthController@logout');


//Route gruoup auth middleware
Route::group(['middleware' => 'auth'],function () {
    //Route CRUD
    Route::post('/siswa/create','SiswaController@create');
    Route::get('/siswa/{id}/edit','SiswaController@edit');
    Route::post('/siswa/{id}/update','SiswaController@update');
    Route::get('siswa/{id}/delete','SiswaController@delete');
    //Route Index
    Route::get('/dashboard','DashboardController@index');
    Route::get('/siswa','SiswaController@index');

    //profile
    Route::get('/siswa/{id}/profile','SiswaController@profile');
});
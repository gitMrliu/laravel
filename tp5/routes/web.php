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


Route::get('Admin/index','Admin\AdminController@index');
Route::get('Admin/login','Admin\AdminController@login');

Route::get('Com/index','Com\ComController@index');
Route::post('Com/addsave','Com\ComController@addsave');
Route::get('Com/delete','Com\ComController@delete');
//Route::get('Admin/delete','Admin\AdminController@delete');
//Route::get('Admin/update','Admin\AdminController@update');
//Route::post('Admin/addsave','Admin\AdminController@addsave');
//Route::post('Admin/updates','Admin\AdminController@updates');
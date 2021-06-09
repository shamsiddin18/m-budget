<?php

use Illuminate\Support\Facades\Route;

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
/*

Route::get('/', function () {
    return view('welcome');
});  */


Route::get('/',"AccountController@index") ;
Route::get('/edit/{id}',"AccountController@edit") ;
Route::get('/show/{id}',"AccountController@show") ;
Route::get('/create',"AccountController@create") ;
Route::post('/store',"AccountController@store") ;
Route::post('/update/{id}',"AccountController@update") ;


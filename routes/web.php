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
//
//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', function () {
    return view('index');
});

Route::get('/name', function () {
    return view('name');
});


Route::get('/roll_num', function () {
    return view('roll_num');
});
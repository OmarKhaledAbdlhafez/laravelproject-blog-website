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

Route::get('/',"posts_controller@welcome");
Route::get('/post/{id}',"posts_controller@show");
Route::get('/createpost',"posts_controller@createpost");
Route::post('/createpost',"posts_controller@create");
Route::post('/post/{post}',"comments_controller@add");

Route::get('/register',"register_controller@index");
Route::get('/login',"login_controller@index");
Route::post('/login',"login_controller@login");
Route::post('/register',"register_controller@create");
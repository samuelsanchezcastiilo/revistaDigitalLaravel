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

Route::redirect('/', 'revista');

Auth::routes();

Route::get('revista', 'Web\PageController@revista')->name('revista');

//Docente
Route::resource('Posts','Docente\PostController');

//Admin
Route::resource('Posts2','Admin\PostController');
Route::resource('User','Admin\UserController');

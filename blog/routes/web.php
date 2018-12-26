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

//home
Route::get('/', 'PostController@index');

//create
Route::get('/posts/create', 'PostController@create');

//store
Route::post('/posts', 'PostController@store');

//show
Route::get('/posts/{id}', 'PostController@show');

//edit
Route::get('/posts/{id}/edit', 'PostController@edit');

//update
Route::put('/posts/{id}', 'PostController@update');

//destroy
Route::get('/posts/{id}/delete', 'PostController@destroy');

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

Auth::routes();


Route::group(['middleware' => 'auth'], function (){
    Route::get('/', 'TimelineController@index');

    Route::get('/posts', 'PostController@index');
    Route::post('/posts', 'PostController@create');

    Route::get('/users/{user}', 'UserController@index')->name('user.index');
    Route::get('/users/{user}/follow', 'UserController@follow')->name('user.follow');
    Route::get('/users/{user}/unfollow', 'UserController@unfollow')->name('user.unfollow');
});
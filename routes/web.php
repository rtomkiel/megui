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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return redirect('/home');
    });
    Route::get('/home', 'HomeController@index');
    Route::Auth();
});

Route::group(["prefix" => "databases"], function() {
    Route::get('/', 'DatabaseController@databases');
    Route::get('/novo', function () {
        return view('skell.novodb');
    });
    Route::post("/novo/store", "DatabaseController@store");
    Route::Auth();
});


Route::group(["prefix" => "usuarios"], function() {
    Route::get('/', 'UserController@users');
    Route::get('/novo', function () {
        return view('skell.listuser');
    });
    Route::Auth();
});

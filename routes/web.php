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
    // $site_title = "Grumpy Camper";
    // $owner_name = "Michael";
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

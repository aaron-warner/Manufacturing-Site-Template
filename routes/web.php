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

/* GENERIC PAGE ROUTES */

/*Route::get('/', function () {
    return view('pages.home');
});*/

Route::get('/', 'NewsController@getMostRecentNews');

Route::get('/contact', function () {
    return view('pages.contact');
});

/* DASHBOARD PAGE ROUTES */

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

/* RESOURCE ROUTES */

Route::resource('news', 'NewsController');

/* AUTH ROUTES */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

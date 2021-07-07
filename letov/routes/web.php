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

Route::get('/help', function () {
    return view('welcome');
});


Route::get('/', 'MainController@itforit')->name('review');
Route::post('/itforit/check', 'MainController@itforit_check');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});
Route::get('/migrate', function() {
    $exitCode = Artisan::call('migrate');
    return 'DONE'; //Return anything
});

Route::get('/php', 'MainController@php');

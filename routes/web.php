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
    return 'Hello, World!';
});


Route::prefix('admin')->namespace('Admin')->group(function() {

    Route::get('/', 'HomeController@index');
    Route::get('/login', 'HomeController@getLogin');
    Route::post('/login', 'HomeController@login');
    Route::get('/test', 'HomeController@test');
    Route::get('/forgetPassword','HomeController@forgetPassword');
    Route::post('/forgetPassword','HomeController@forgetPasswordPost');

    // 区域管理
    Route::resource('guards', 'GuardController', ['except' => 'show']);

});
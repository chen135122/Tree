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

    Route::get('/login', 'AuthController@getLogin');
    Route::post('/login', 'AuthController@login');
    Route::get('/getRegister', 'AuthController@getgetRegister');
    Route::get('/forgetPassword','AuthController@forgetPassword');
    Route::post('/forgetPassword','AuthController@forgetPasswordPost');
    Route::get('/resetPassword/{email}/{token}','AuthController@resetPassword');
    Route::post('/resetPassword','AuthController@reset');

    Route::get('/welcome', 'HomeController@welcome');


    Route::get('/test', 'HomeController@test');



//    Route::get('/logout',function (){
//        \Illuminate\Support\Facades\Auth::logout();
//    });
    Route::get('/d3/{name}','HomeController@circle');
    Route::get('/tree',function (){
        $data = file_get_contents('./common/tree.erp');
//        return $data;
        return view('common.d3.tree');
    });
    Route::get('/upload','HomeController@file');
    Route::get('/file','HomeController@file');
    Route::post('/upload','HomeController@upload');
    // 权限管理


    Route::middleware('auth.admin')->group(function() {
        Route::resource('users', 'UserController');
        Route::resource('domains', 'DomainController', ['except' => 'show']);
        Route::resource('roles', 'RoleController', ['except' => 'show']);


        Route::post('fields/toggle', 'FieldController@toggleField');
    });

});

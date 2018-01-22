<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('Api')->group(function(){
    Route::get('roles', 'RoleController@index');
    Route::get('domains', 'DomainController@index');
    Route::get('permissions', 'PermissionController@index');
    Route::get('users', 'UserController@index');

    // 分配角色
    Route::post('roles/assign', 'UserController@assignRole');
    // 用户列表，有参数 role_id
    Route::get('roles/assign/users', 'UserController@roleAssignUsersIndex');
});

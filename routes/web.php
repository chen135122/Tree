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
    Route::get('/tree/{name}','HomeController@showTree');
    Route::get('/delete/{name}','HomeController@delete');
    Route::get('/upload','HomeController@file');
    Route::get('/file','HomeController@file');
    Route::get('/tree','HomeController@tree');
    Route::get('/circle/{file}/{page}','HomeController@page');
    Route::get('/file/{page?}','HomeController@tree');
    Route::get('/showTree/{file}/{data}','HomeController@showNewTree');
    Route::post('/tree','HomeController@treePost');
    Route::post('/upload','HomeController@upload');
    Route::get('/index','HomeController@backIndex');
    Route::get('/test',function (){
        $array = array();
        $array['1'] = 111;
        $array['1']['2'] = 111222;
        $array['2'] = 222;
        $array['3']['1'] = 311;
        $array['3']['2'] = 322;
//        $array['3']['1']['1'] = 3111111;
//        $array['3']['1']['2'] = 3111222;
//        $array['3']['2']['1'] = 3222111;
//        $array['3']['2']['2'] = 3222222;
        dd($array);
    });


    // 权限管理
    Route::middleware('auth.admin')->group(function() {
        // 角色分配
        Route::get('roles/assign', 'RoleController@assign');
        // 权限分配
        Route::get('permissions/assign', 'PermissionController@assign');

        Route::resource('users', 'UserController', ['except' => 'show']);
        Route::resource('domains', 'DomainController', ['except' => 'show']);
        Route::resource('roles', 'RoleController', ['except' => 'show']);
        Route::resource('permissions', 'PermissionController', ['only' => ['index', 'edit', 'update']]);
        // 列表页显示字段的开启或关闭
        Route::post('fields/toggle', 'FieldController@toggleField');
    });

});

Route::get('/test1',function (\Illuminate\Http\Request $request){
    $data = [
        'age' => 8
    ];
   $validator = \Illuminate\Support\Facades\Validator::make($data, [
       'age' => 'Numeric|size:8'
   ]);

   if ($validator->fails()) {
       dd($validator->errors()->first());
   }

   dd('pass');
});

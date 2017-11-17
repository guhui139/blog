<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//后台
	Route::resource('admin/user','admin\UserController');
	Route::resource('admin/artical','admin\ArticalController');
//路由组的设置
Route::group(['prefie'=>'admin','namespace'=>'admin','middleware'=>'login'],function(){

	//后台

	
});

Route::group(['prefie'=>'home','middleware'=>'login'],function(){

	// 前台

});




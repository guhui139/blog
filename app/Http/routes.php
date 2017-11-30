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

/*前台登录*/
Route::get('/index','home\LoginController@code');
Route::get('/index/code','home\LoginController@code');
Route::resource('/index','home\LoginController');


//前台主页
Route::get('/','home\BlogController@dologin');
Route::get('/lol','home\BlogController@dologout');
Route::resource('/','home\BlogController');

//前台详情



Route::get('/admin/login','loginsController@index');
Route::post('/admin/dologin','loginsController@add');

Route::resource('/list','home\ListController');

/*前台注册*/
Route::get('/home/sendcode','home\RegisterController@sendcode');
Route::resource('/register','home\RegisterController');

/*前台分区*/
Route::resource('/type','home\TypeController');

/*前台评论*/

/*点赞*/


//后台
	Route::resource('admin/user','admin\UserController');
	Route::resource('admin/artical','admin\ArticalController');


//路由组的设置
Route::group(['prefie'=>'admin','namespace'=>'admin','middleware'=>'login'],function(){

	//后台

	
});

Route::group(['middleware'=>'home'],function(){

	// 前台
	Route::post('/review/add','home\CommentController@add');
	Route::post('/review/ping','home\CommentController@ping');
	Route::resource('/info','home\InfoController');
	
	Route::post('/list/create','home\ListController@create');
	Route::post('/like/zan','home\LikeController@zan');
	Route::post('/like/review_zan','home\LikeController@review_zan');

});




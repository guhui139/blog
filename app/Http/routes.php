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

Route::get('/ueditor',function(){
	return view('ueditor');
});

/*前台登录*/
Route::get('/index','home\LoginController@code');
Route::get('/index/code','home\LoginController@code');
Route::resource('/index','home\LoginController');

/*前台注册*/
Route::get('/home/sendcode','home\RegisterController@sendcode');
Route::resource('/register','home\RegisterController');

//前台主页
Route::get('/','home\BlogController@dologin');
Route::get('/lol','home\BlogController@dologout');
Route::resource('/','home\BlogController');

/*前台账号管理*/
	Route::get('/home/user/account','home\UserController@account');
	/*个人信息*/
	Route::resource('/home/user','home\UserController');
	/*文章内容评论,删除*/
	Route::resource('/home/content','home\ContentController');


//前台详情
Route::resource('/list','home\ListController');

/*前台的用户信息*/

/*忘记密码之修改*/
Route::get('/homed','home\LoginController@edit');
Route::post('/homed','home\LoginController@update');

/*前台分区*/
Route::resource('/type','home\TypeController');

/*前台评论*/


//后台
Route::resource('admin/login','admin\LoginsController');


//路由组的设置
Route::group(['middleware'=>'admin'],function(){

	//后台
	Route::resource('admin/user','admin\UserController');
	Route::resource('admin/artical','admin\ArticalController');
	Route::resource('admin/type','admin\TypeController');
	Route::resource('admin/link','admin\LinkController');
	Route::resource('admin/center','admin\CenterController');
	Route::resource('admin/review','admin\ReviewController');
	
});

Route::group(['middleware'=>'home'],function(){

	Route::get('/list/create','home\ListController@create');
	// 前台
	Route::post('/review/add','home\CommentController@add');
	Route::resource('/info','home\InfoController');
	
	Route::post('/list/create','home\ListController@create');
	Route::post('/like/zan','home\LikeController@zan');

	
});




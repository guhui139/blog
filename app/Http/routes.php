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


Route::get('/admin/login','loginsController@index');
Route::post('/admin/dologin','loginsController@add');
Route::resource('/list','home\ListController');

Route::resource('/home','home\BlogController');

/*前台登录*/
Route::get('/home/index','home\LoginController@index');
Route::get('/home/code','home\LoginController@code');
Route::post('/home/dologin','home\LoginController@dologin');

/*前台注册*/
Route::get('/home/sendcode','home\RegisterController@sendcode');
Route::resource('/home','home\RegisterController');


//后台
	Route::resource('admin/user','admin\UserController');
	Route::resource('admin/artical','admin\ArticalController');


//后台
	Route::resource('admin/user','admin\UserController');
	Route::resource('admin/artical','admin\ArticalController');


/*前台登录*/
Route::get('/home/index','home\LoginController@index');
Route::get('/home/code','home\LoginController@code');
Route::post('/home/dologin','home\LoginController@dologin');

/*前台注册*/
Route::get('/home/sendcode','home\RegisterController@sendcode');
Route::resource('/home','home\RegisterController');


//后台
	Route::resource('admin/user','admin\UserController');
	Route::resource('admin/artical','admin\ArticalController');


//后台
	Route::resource('admin/user','admin\UserController');
	Route::resource('admin/artical','admin\ArticalController');

/*前台登录*/
Route::get('/home/index','home\LoginController@index');
Route::get('/home/code','home\LoginController@code');
Route::post('/home/dologin','home\LoginController@dologin');

/*前台注册*/
Route::get('/home/sendcode','home\RegisterController@sendcode');
Route::resource('/home','home\RegisterController');


//后台
	Route::resource('admin/user','admin\UserController');
	Route::resource('admin/artical','admin\ArticalController');


//后台
	Route::resource('admin/user','admin\UserController');
	Route::resource('admin/artical','admin\ArticalController');

/*前台登录*/
Route::get('/home/index','home\LoginController@index');
Route::get('/home/code','home\LoginController@code');
Route::post('/home/dologin','home\LoginController@dologin');

/*前台注册*/
Route::get('/home/sendcode','home\RegisterController@sendcode');
Route::resource('/home','home\RegisterController');


//后台
	Route::resource('admin/user','admin\UserController');
	Route::resource('admin/artical','admin\ArticalController');


//后台
	Route::resource('admin/user','admin\UserController');
	Route::resource('admin/artical','admin\ArticalController');

/*前台登录*/
Route::get('/home/index','home\LoginController@index');
Route::get('/home/code','home\LoginController@code');
Route::post('/home/dologin','home\LoginController@dologin');

/*前台注册*/
Route::get('/home/sendcode','home\RegisterController@sendcode');
Route::resource('/home','home\RegisterController');


//后台
	Route::resource('admin/user','admin\UserController');
	Route::resource('admin/artical','admin\ArticalController');


//后台
	Route::resource('admin/user','admin\UserController');
	Route::resource('admin/artical','admin\ArticalController');

/*前台登录*/
Route::get('/home/index','home\LoginController@index');
Route::get('/home/code','home\LoginController@code');
Route::post('/home/dologin','home\LoginController@dologin');

/*前台注册*/
Route::get('/home/sendcode','home\RegisterController@sendcode');
Route::resource('/home','home\RegisterController');


//后台
	Route::resource('admin/user','admin\UserController');
	Route::resource('admin/artical','admin\ArticalController');


//后台
	Route::resource('admin/user','admin\UserController');
	Route::resource('admin/artical','admin\ArticalController');

/*前台登录*/
Route::get('/home/index','home\LoginController@index');
Route::get('/home/code','home\LoginController@code');
Route::post('/home/dologin','home\LoginController@dologin');

/*前台注册*/
Route::get('/home/sendcode','home\RegisterController@sendcode');
Route::resource('/home','home\RegisterController');


//后台
	Route::resource('admin/user','admin\UserController');
	Route::resource('admin/artical','admin\ArticalController');


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




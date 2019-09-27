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
//HOME首页
Route::get('/', function () {
	dump(date('Y-m-d h:i:s'),Config::get('app.timezone'));
    return view('welcome');
});

//后台Admin
//后台登陆界面
Route::get('admin/login','Admin\LoginController@login');
//后台登陆中间件
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'login'],function(){
//后台登陆界面
	Route::get('index','IndexController@show');
	Route::get('logout','LoginController@logout');
	Route::match(['get','post'],'check','LoginController@check');
	//后台网站信息修改
	Route::get('webinfo','WebInfoController@show');
});
//验证码路由
Route::get('/code/captcha/{tmp}','Admin\LoginController@captcha');
//分类模块
Route::get('/admin/cate','Admin\CateController@show');
Route::get('/admin/addCate','Admin\CateController@addCate');


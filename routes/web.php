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

Route::get('/laravel', function () {
    return view('welcome');
});

//首页
Route::any('/','Index\IndexController@index');

//信息收集
Route::any('/usermessage','Index\IndexController@usermessage');
Route::any('/usermessages','Index\IndexController@usermessages');

//服务支持
Route::any('/ydservice','Index\IndexController@ydservice');
//合作加盟
Route::any('/ydcooperation','Index\IndexController@ydcooperation');
//关于我们
Route::any('/ydabout','Index\IndexController@ydabout');
//咨询中心
Route::any('/ydnews','Index\IndexController@ydnews');
//资讯详情
Route::any('/ydnewsxq','Index\IndexController@ydnewsxq');
//课程介绍
Route::any('/ydcourse','Index\IndexController@ydcourse');
//新闻添加
Route::any('/newsaddlist','Index\IndexController@newsaddlist');
//小问
Route::any('/xw','Index\IndexController@xw');
//小问
Route::any('/ss','Index\IndexController@ss');
//kms
Route::any('/kms','Index\IndexController@kms');
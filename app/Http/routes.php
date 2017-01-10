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
Route::any('/wechat', 'WechatController@serve');
Route::get('/', function () {
    return view('welcome');

});
Route::group(['middleware'=>['web']],function(){
Route::get('/users','UsersController@users');
Route::get('/user/{openId}','UsersController@users');
Route::get('/remark','UsersController@remark');
Route::get('/menu','MenuController@menu');
Route::get('/menu/all','MenuController@all');
});

<?php
/**
 * fonnie 2020/03/22 09:13:11
 */

Route::get('/test', function () {
    return 'test';
});

//route组
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    //后台登录
    Route::get('/login','EntryController@loginForm');
    //登录处理
    Route::post('/login','EntryController@login');
    //后台登录主页
    Route::get('/index','EntryController@index');
});

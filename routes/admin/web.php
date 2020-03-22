<?php
/**
 * fonnie 2020/03/22 09:13:11
 */

Route::get('/abc', function () {
    return 'test';
});

//route组
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    Route::get('/login','EntryController@login');
});

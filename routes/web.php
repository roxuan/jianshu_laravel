<?php
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', '\App\Http\Controllers\TestController@index');
// 文章列表页
Route::get('/posts', '\App\Http\Controllers\PostController@index');
// 文章详情页
Route::get('/posts/{post}', '\App\Http\Controllers\PostController@show');
// 创建文章
Route::get('/posts/create', '\App\Http\Controllers\PostController@create');
Route::post('/posts', '\App\Http\Controllers\PostController@store');
// 编辑文章
Route::get('/post/{post}/edit', '\App\Http\Controllers\PostController@edit');
Route::put('/post/{post}', '\App\Http\Controllers\PostController@update');
// 删除文章
Route::get('/post/delete', '\App\Http\Controllers\PostController@delete');
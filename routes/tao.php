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
Route::get('/', 'Tao\IndexController@index');
Route::get('/tao/goods', 'Tao\ListController@goodsList');
Route::get('/tao/detail', 'Tao\ListController@goodsDetail');

/**移动版url*/
Route::get('/mobile/index', 'Mobile\IndexController@index');
Route::get('/mobile/goods', 'Mobile\ListController@goodsList');
Route::get('/mobile/detail', 'Mobile\ListController@goodsDetail');
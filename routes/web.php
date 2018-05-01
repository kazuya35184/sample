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

Route::get('/', 'MemoController@index');

Route::get('/edit', 'MemoController@edit');
Route::post('/edit', 'MemoController@update');

Route::get('/shinki', 'MemoController@index3');

Route::get('/add', 'MemoController@add');
Route::post('/add', 'MemoController@create');

Route::post('/delete','MemoController@remove');

//routes
//一番最初に参照される場所
//次に何をするかの行動指針を示す

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

Route::get('/', 'MainController@main');

Route::get('private-chat','ChatController@privateChat');

Route::get('general-chat','ChatController@index');

Route::get('send-message','ChatController@sendMessage');

Route::get('search-form','MainController@searchForm');

Route::get('get-random-string','MainController@getRandomString');

Route::get('get-table','MainController@getTable');

Route::get('get-json','MainController@getJson');

Route::get('socket-chart','MainController@newData');

Route::get('chart-data','MainController@chartData');

Route::get('chart-data-pie','MainController@chartDataPie');

Route::get('random-data','MainController@randomData');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

Route::get('get-json','MainController@getJson');

Route::get('chart-data','MainController@chartData');

Route::get('chart-data-pie','MainController@chartDataPie');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

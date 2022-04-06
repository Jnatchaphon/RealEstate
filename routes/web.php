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




Route::get('/', 'HomeController@index');
Route::get('{id1}/{id2}.html', 'HomeController@newsdetail');
Route::get('news', 'HomeController@news');
Route::get('columnists', 'HomeController@columnists');
Route::get('sportsworld', 'HomeController@sportsworld');
Route::get('previews', 'HomeController@previews');




Auth::routes();


// Backend

Route::get('Admin', 'AdminController@index');
Route::get('Admin/Profile', 'AdminController@profile');
Route::resource('Admin/Password', 'CpassController');
Route::resource('Admin/News', 'NewsController');
Route::resource('Admin/Columnists', 'ColumnistsController');
Route::resource('Admin/Varieties', 'VarietiesController');
Route::resource('Admin/Leaguetable', 'LeaguetableController');
Route::resource('Admin/Nextmatch', 'NextmatchController');

Route::get('Admin/NSet/{id1}/{id2}', 'NewsController@settest');
Route::get('Admin/CSet/{id1}/{id2}', 'ColumnistsController@settest');
Route::get('Admin/VSet/{id1}/{id2}', 'VarietiesController@settest');
Route::get('Admin/NMSet/{id1}/{id2}', 'NextmatchController@settest');


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



Auth::routes();

Route::get('/', 'MainController@index')->name('main');
Route::get('new-team', 'TeamController@create')->name('new-team');
Route::post('store-new-team', 'TeamController@store')->name('store-new-team');
Route::get('delete-team/{id}', 'TeamController@destroy')->name('delete-team');
Route::get('edit-team/{id}', 'TeamController@edit')->name('edit-team');
Route::post('update-team', 'TeamController@update')->name('update-team');
Route::get('team-info/{id}', 'TeamController@show')->name('team-info');
Route::get('delete-player/{id}', 'PlayerController@destroy')->name('delete-player');
Route::get('edit-player/{id}', 'PlayerController@edit')->name('edit-player');


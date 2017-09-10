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

//HOME
Route::get('/','HomeController@index')->name('home');
Route::post('/','HomeController@vote');
//ajax
Route::post('/refresh','HomeController@refresh');

//LEADERBOARD
Route::get('/leaderboard','LeaderboardController@index')->name('leaderboard');
Route::get('/leaderboard/add','LeaderboardController@add')->name('add');
Route::post('/leaderboard/add',function () { echo 'hello'; } );
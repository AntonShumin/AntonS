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

Route::get('/','HomeController@index')->name('home');
Route::post('/','HomeController@vote');

//ajax
Route::post('/refresh','HomeController@refresh');

/*
Route::get('/', function () {
    return view('home');


Route::get('/deelnemers/{id}', function ($id) {

    //$deelnemer = DB::table('deelnemers')->latest()->get();
    $deelnemer = DB::table('deelnemers')->find($id);

    dd($deelnemer);

    return $deelnemer;

});

});
*/
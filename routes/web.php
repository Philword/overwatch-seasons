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

Route::get('/players', 'PlayerController@index');
Route::get('/teams', 'TeamController@index')->name('teams');
Route::get('/teams/{team}', 'TeamController@show');
Route::get('/application', 'TeamController@create')->name('application');
Route::get('/application/submited', function () {
    return view('teams.create.final');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/t', function () {
    return view('test');
});
Route::post('/subscriber', 'SubscriberController@store');

Route::post('/teams', 'TeamController@store');

Route::get('/application/{team}/players', 'PlayerController@create');
Route::post('/application/{team}/players', 'PlayerController@store');

Route::get('/rules', function () {
    return view('pages.rules');
});

Route::group(['prefix' => 'osadmin'], function () {
    Voyager::routes();
});

// ======MATCHES======

Route::get('/test', 'MatchController@index');
Route::get('/test2', 'GroupController@index');

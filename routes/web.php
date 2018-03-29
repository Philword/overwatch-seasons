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

Route::get('/', function () {
    return view('index');
});
Route::get('/players', 'PlayerController@index');
Route::get('/teams', 'TeamController@index')->name('teams');
Route::get('/teams/{team}', 'TeamController@show');
Route::get('/rules', function () {
    return view('pages.rules');
});
// ========ADMIN=======
Route::group(['prefix' => 'osadmin'], function () {
    Voyager::routes();
});
// ======MATCHES======
Route::get('/schedule', 'GroupController@index')->name('schedule');
Route::get('/match/{match}', 'MatchController@show');

// =======STANDINGS=======
Route::get('/standings', 'PageController@index')->name('standings');

// ====POSTS====
// Route::get('/news', 'PostController@index')->name('news');
// Route::get('/news/{post}', 'PostController@show');

// ======SUBSCRIBER======
Route::post('/subscriber', 'SubscriberController@store');

// =====Video======
// Route::get('/videos', 'VideoController@index')->name('videos');

// =======REGISTRATION=========
// Route::post('/teams', 'TeamController@store');
// Route::get('/application', 'TeamController@create')->name('application');
// Route::get('/application/{team}/players', 'PlayerController@create');
// Route::post('/application/{team}/players', 'PlayerController@store');
// Route::get('/application/submited', function () {
//     return view('teams.create.final');
// });

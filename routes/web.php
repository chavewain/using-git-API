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

// Route::get('/', function () {
//     return view('welcome');
// });




// Route::get('/', ['uses' => 'GithubController@index', 'as' => 'index']);

// Route::get('/finder', ['uses' => 'GithubController@finder', 'as' => 'finder']);

// Route::get('/edit', ['uses' => 'GithubController@edit', 'as' => 'edit_file']);

// Route::post('/update', ['uses' => 'GithubController@update', 'as' => 'update_file']);

// Route::get('/commits', ['uses' => 'GithubController@commits', 'as' => 'commits']);

Auth::routes();

Route::get('/{any}', 'AppController@index')->where('any', '.*');

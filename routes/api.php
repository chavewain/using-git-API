<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/repo', ['uses' => 'AppController@index', 'as' => 'index']);

// Route::get('/finder', ['uses' => 'GithubController@finder', 'as' => 'finder']);

// Route::get('/edit', ['uses' => 'GithubController@edit', 'as' => 'edit_file']);

// Route::post('/update', ['uses' => 'GithubController@update', 'as' => 'update_file']);

// Route::get('/commits', ['uses' => 'GithubController@commits', 'as' => 'commits']);


Route::get('/repos', 'AppController@repos');
Route::get('/find', 'AppController@finder');


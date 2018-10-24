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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('users', 'UsersController@index');
Route::get('@{u}', 'UsersController@show');
Route::get('user/{u}', 'UsersController@lookup');
Route::get('lists', 'WordListsController@index');
Route::post('lists', 'WordListsController@store');
Route::get('list/{slug}', 'WordListsController@show');
Route::get('@{u}/{slug}', 'WordListsController@show');
Route::delete('list/{slug}', 'WordListsController@delete');
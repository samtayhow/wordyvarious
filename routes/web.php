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


Route::get('/', 'PagesController@index');
Route::get('@{u}', 'PagesController@user');
Route::get('@{u}/{slug}', 'PagesController@wordList');
Route::get('lists', 'PagesController@wordLists');
Route::get('play', 'PagesController@play');
Route::get('create', 'PagesController@create');
Route::get('search', 'PagesController@search');
Route::get('about', 'PagesController@about');
Route::get('users', 'PagesController@users');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
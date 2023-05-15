<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('/','MainpageController');
Route::get('movie/popular','FrontContentsController@popular')->name('movie.popular');
Route::resource('movie','FrontContentsController');
Route::get('/contentsadmin/recent','ContentsController@recent')->name('contentsadmin.recent');
Route::get('/contentsadmin/popular','ContentsController@popular')->name('contentsadmin.popular');
Route::resource('contentsadmin','ContentsController');
Route::get('search', 'SearchController@search');

Route::resource('genre','GenreController');

Route::get('movie/{id}','FrontContentsController@show')->name('show');
Route::get('genre/{genre1}','GenreController@show')->name('genre.show');





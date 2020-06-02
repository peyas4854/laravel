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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts', 'PostController@index')->name('post');

Route::get('/comments', 'PostController@comment');
Route::get('/phones', 'PostController@phone');
//Route::get('/users', 'PostController@user');

Route::get('/category', 'PostController@category');
Route::get('/pdf', 'PDFController@generatepdf');

Route::get('/importExportview', 'ImportController@importExportview');
Route::get('/export', 'ImportController@export');
Route::post('/import', 'ImportController@import');

Route::get('/comment_import', 'ImportController@CommentData');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

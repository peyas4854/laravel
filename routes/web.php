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
Auth::routes();
Route::get('/', function () {

//    App::setLocale('es');

    return view('welcome');
})->middleware('web');

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);




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
//github login
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
//redirect url in provider api . [set in service.app ]
Route::get('/callback/{provider}', 'SocialController@callback');

//chart
Route::Resource('/chart', 'UserChartController');

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

use Ladumor\OneSignal\OneSignal;


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
//github login
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
//redirect url in provider api . [set in service.app ]
Route::get('/callback/{provider}', 'SocialController@callback');

//chart
Route::Resource('/chart', 'UserChartController');


Route::get('/testing',function(){
    $fields['include_player_ids'] = ['xxxxxxxx-xxxx-xxx-xxxx-yyyyy'];
$message = 'hey!! This is a test push.!';
OneSignal::sendPush($fields, $message);
return 'sending success.';

});

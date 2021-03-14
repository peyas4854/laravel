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
use Twilio\Rest\Client;



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


Route::get('/sms',function(){
    $receiverNumber = '+8801677528939';
    $message = "Hello!  Please turn off your room light before sleep.";


    try {

        $account_sid = 'ACde0284244296bb29515cb5ccdd19c404';
        $auth_token = 'da9be20f4a8d6fa9428a802df8668293';
        $twilio_number = '+14243757894';

        $client = new Client($account_sid, $auth_token);
        $client->messages->create($receiverNumber, [
            'from' => $twilio_number,
            'body' => $message]);

        dd('SMS Sent Successfully.');

    } catch (Exception $e) {
        dd("Error: ". $e->getMessage());
    }

});

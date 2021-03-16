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

Route::get('/nexmo-sms', 'SmsController@nexmo');


Route::get('/sms',function(){
    $receiverNumber = 'whatsapp:+8801677528939';
    $message = "Hello!  Please turn off your room light before sleep.";
    try {
        $account_sid = 'ACf116f9b6eb5b14a201c3f448f0981d15';
        $auth_token = '923ca86ac2b9ee470ffb56068cf04152';
        $twilio_number = 'whatsapp:+14155238886';
        $client = new Client($account_sid, $auth_token);
        $client->messages->create($receiverNumber, [
            'from' => $twilio_number,
            'body' => $message]);

        dd('SMS Sent Successfully.');

    } catch (Exception $e) {
        dd("Error: ". $e->getMessage());
    }

});



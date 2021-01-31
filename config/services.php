<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'github' => [
        'client_id' => '957bacb5df3ad22e6132',
        'client_secret' => '5c7864e4fe35fb3be69545b6156717e5eeee58c7',
        //redirect url in provider api
        'redirect' => 'http://127.0.0.1:8000/callback/github',
    ],

    'google' => [
        'client_id' => '303130435465-oqadga9o66i0qoprociakna03e4a20dh.apps.googleusercontent.com',
        'client_secret' => 'gG0APy7o90NoLrT3CUmwT6E4',
        //redirect url in provider api
        'redirect' => 'http://127.0.0.1:8000/callback/google',
    ],
    'facebook' => [
        'client_id' => '387360199030203',
        'client_secret' => '4fc9da029193a1e0f233c77de7fd234c',
        //redirect url in provider api
//        'redirect' => 'http://127.0.0.1:8000/callback/facebook',

    // http://127.0.0.1:8000 not support in facebook apps
        'redirect' => 'http://localhost:8000/callback/facebook',
    ],

    'linkedin' => [
        'client_id' => '868s9shnf7p24y',
        'client_secret' => 'TavpvAWAs3J9DjVQ',
        'redirect' => 'https://localhost:8000/callback/linkedin',
    ],
    
];

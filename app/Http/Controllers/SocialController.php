<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Redirect, Response, File;
use Socialite;
use App\User;

class SocialController extends Controller
{
    //redirect to provider
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    //callback form provider api
    public function callback($provider)
    {

        $getInfo = Socialite::driver($provider)->user();

        $user = $this->createUser($getInfo, $provider);
        auth()->login($user);
        return redirect()->to('/home');
    }

    public function createUser($getInfo, $provider)
    {

        $user = User::where('provider_id', $getInfo->id)->first();
        //if no user found
        if (!$user) {
            //insert user info
            $user = User::create([
                'name' => $getInfo->name,
                'email' => $getInfo->email,
                'provider' => $provider,
                'provider_id' => $getInfo->id
            ]);
        }
        return $user;


    }

}

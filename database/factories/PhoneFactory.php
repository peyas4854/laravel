<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\User;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        'title'=>$word,
        // 'user_id'=>function(){
        // return User::all()->random();
        // },
    ];
});

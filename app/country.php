<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    //
    public function posts()
    {
        return $this->hasManyThrough(
            Post::class,
            User::class,
            'country_id', // Foreign key on users table...
            'user_id', // Foreign key on posts table...
            'id', // Local key on countries table...
            'id' // Local key on users table...
        );
    }

    public function useroncountry(){
        return $this->hasMany(User::class,'country_id');
    }
}

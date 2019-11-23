<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{

	protected $fillable = ['name','created_at'];
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}

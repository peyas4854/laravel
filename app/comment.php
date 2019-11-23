<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable = ['post_id', 'comment', 'created_at'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}

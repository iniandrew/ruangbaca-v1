<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['post_id','user_id','pesan'];

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}

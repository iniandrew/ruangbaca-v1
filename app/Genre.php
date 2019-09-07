<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    protected $fillable = ['name'];
}

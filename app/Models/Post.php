<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function post(){
        return $this->belongsTo('App\Profile');
        return $this->hasMany('App\Comment');
    }

    use HasFactory;
}

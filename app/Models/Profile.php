<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function profile(){
        return $this->hasMany('App\Post');
        return $this->belongsTo('App\User');
    }
    
    use HasFactory;
}

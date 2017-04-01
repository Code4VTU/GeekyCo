<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = ['title', 'description', 'city', 'phone', 'zip', 'address', 'isAnonymous'];
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}

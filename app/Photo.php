<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $fillable = ['issue_id', 'photo'];

    public function issue()
    {
        return $this->belongsTo('App\Issue');
    }
}

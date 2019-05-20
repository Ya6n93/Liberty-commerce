<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    protected $table = 'bill';

    public function profile()
    {
        return $this->belongsTo('App\Model\profile');
    }

    public function cart()
    {
        return $this->hasMany('App\Model\cart');
    }
}


<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class opinion extends Model
{
    protected $table = 'opinion';

    public function product()
    {
        return $this->belongsToMany('App\Model\product');
    }

    public function profile()
    {
        return $this->belongsToMany('App\Model\profile');
    }

}


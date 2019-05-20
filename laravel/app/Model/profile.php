<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table = 'profile';

    public function users()
    {
        return $this->belongsTo('App\Model\users');
    }

    public function bill()
    {
        return $this->hasOne('App\Model\bill');
    }

    public function opinion()
    {
        return $this->belongsToMany('App\Model\opinion');
    }

}


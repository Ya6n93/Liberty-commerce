<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';

    public function cart()
    {
        return $this->belongsToMany('App\Model\cart');
    }

    public function opinion()
    {
        return $this->belongsToMany('App\Model\opinion');
    }

    public function category()
    {
        return $this->belongsTo('App\Model\category');
    }

    public function newsletter()
    {
        return $this->hasOne('App\Model\newsletter');
    }
}


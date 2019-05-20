<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = 'cart';

    public function bill()
    {
        return $this->belongsTo('App\Model\bill');
    }

    public function product()
    {
        return $this->belongsToMany('App\Model\product');
    }
}


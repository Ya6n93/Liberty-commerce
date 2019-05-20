<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class newsletter extends Model
{
    protected $table = 'newsletter';

    public function product()
    {
        return $this->belongsTo('App\Model\product');
    }

}


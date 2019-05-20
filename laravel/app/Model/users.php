<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = 'users';

    public function roles()
    {
        return $this->hasMany('App\Model\roles');
    }

    public function profile()
    {
        return $this->hasOne('App\Model\profile');
    }
}


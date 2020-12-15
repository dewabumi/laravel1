<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutletModel extends Model
{
    protected $table = 'outlet';

    public function program()
    {
        return $this->hasMany('App\ProgramModel');
    }
}

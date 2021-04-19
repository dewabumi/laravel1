<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'kota';

    public function jadwal()
    {
        return $this->hasMany('App/Jadwal');
    }
}

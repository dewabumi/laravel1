<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $tabel = 'regencies';

    public function jadwal()
    {
        return $this->hasMany('App/Jadwal');
    }
}

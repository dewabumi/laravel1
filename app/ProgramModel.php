<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramModel extends Model
{
    protected $table = 'program';

    public function outlet()
    {
        return $this->belongsTo('App\OutletModel');
    }

    public function jadwal()
    {
        return $this->hasOne('App/Jadwal');
    }
}

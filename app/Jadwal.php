<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'tabel_jadwal';

    public function outlet()
    {
        return $this->belongsTo('App/OutletModel');
    }

    public function kota()
    {
        return $this->belongsTo('App/Kota');
    }

    public function program()
    {
        return $this->belongsTo('App/ProgramModel');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendaftarModel extends Model
{
    protected $table = 'pendaftar_tabel';
    protected $guarded = [];

    Public function orders () 
    {
    return $this->hasOne('App\orderModel', 'id_pendaftar', 'pendaftarid');
    }
}


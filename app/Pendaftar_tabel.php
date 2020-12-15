<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftar_tabel extends Model
{
    protected $table = 'pendaftar_tabel';
    protected $fillable = ['id_pendaftar','pendaftar_nama','pendaftar_jenis_kelamin','pendaftar_email','pendaftar_telepon','pendaftar_alamat_jalan','pendaftar_alamat_kota','pendaftar_alamat_postal','pendaftar_lahir_kota','pendaftar_lahir','pendaftar_ibu','pendaftar_sekolah'];
}

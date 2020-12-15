<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftar_tabel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pendaftar_nama', 50);
            $table->enum('pendaftar_jenis_kelamin', ['Pria', 'Wanita']);
            $table->string('pendaftar_email', 25);
            $table->string('pendaftar_telepon', 12);
            $table->string('pendaftar_alamat_jalan', 50);
            $table->string('pendaftar_alamat_kota', 40);
            $table->string('pendaftar_alamat_kecamatan', 40);
            $table->string('pendaftar_alamat_kelurahan', 40);
            $table->string('pendaftar_alamat_postal', 20);
            $table->string('pendaftar_lahir_kota', 40);
            $table->date('pendaftar_lahir');
            $table->string('pendaftar_ibu', 50);
            $table->string('pendaftar_sekolah', 40);
            $table->boolean('pendaftar_pernah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftar_tabel');
    }
}

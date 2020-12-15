<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_jadwal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_kota');
            $table->integer('id_outlet');
            $table->integer('id_program');
            $table->string('nama_kelas', 50);
            $table->date('jadwal_kelas');
            $table->time('jam_kelas');
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
        Schema::dropIfExists('tabel_jadwal');
    }
}

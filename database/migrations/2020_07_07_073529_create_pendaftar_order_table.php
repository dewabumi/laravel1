<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftar_order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pendaftar');
            $table->integer('id_program');
            $table->string('pendaftar_invoice', 50);
            $table->float('pendaftar_tagihan');
            $table->boolean('pendaftar_status_bayar');
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
        Schema::dropIfExists('pendaftar_order');
    }
}

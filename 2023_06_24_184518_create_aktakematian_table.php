<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAktakematianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aktakematian', function (Blueprint $table) {
            $table->id();
            $table->string('user_nik');
            $table->string('name');
            $table->integer('user_id');
            $table->text('alamat');
            $table->string('image');
            $table->string('email');
            $table->string('nama_alm');
            $table->date('tanggal_mati');
            $table->string('status')->default('Belum di Proses');
            $table->string('perihal')->default('Pengajuan Akta Kematian');
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
        Schema::dropIfExists('aktakematian');
    }
}

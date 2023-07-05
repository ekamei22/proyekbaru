<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuankkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuankk', function (Blueprint $table) {
            $table->id();
            $table->string('user_nik');
            $table->string('name');
            $table->integer('user_id');
            $table->text('alamat');
            $table->string('image');
            $table->string('email');
            $table->string('kepala_keluarga');
            $table->date('tanggal_lahir');
            $table->string('anggota1_nama')->nullable();
            $table->date('anggota1_tanggal_lahir')->nullable();
            $table->string('anggota2_nama')->nullable();
            $table->date('anggota2_tanggal_lahir')->nullable();
            $table->string('anggota3_nama')->nullable();
            $table->date('anggota3_tanggal_lahir')->nullable();
            $table->string('anggota4_nama')->nullable();
            $table->date('anggota4_tanggal_lahir')->nullable();
            $table->string('anggota5_nama')->nullable();
            $table->date('anggota5_tanggal_lahir')->nullable();
            $table->string('anggota6_nama')->nullable();
            $table->date('anggota6_tanggal_lahir')->nullable();
            $table->string('status')->default('Belum di Proses');
            $table->string('perihal')->default('Pengajuan KK');
            $table->softDeletes();
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
        Schema::dropIfExists('pengajuankk');
    }
}

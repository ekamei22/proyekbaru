<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanktp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuanktp', function (Blueprint $table) {
            $table->id();
            $table->string('user_nik');
            $table->string('name');
            $table->integer('user_id');
            $table->text('alamat');
            $table->string('image');
            $table->string('email');
            $table->string('status')->default('Belum di Proses');
            $table->string('perihal')->default('Pengajuan KTP');
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
        Schema::dropIfExists('pengajuanktp');
    }
}

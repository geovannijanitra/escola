<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalimuridTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('walimurid', function (Blueprint $table) {
            $table->increments('idWalimurid')->unsigned();
            $table->integer('siswa_id')->unsigned();
            $table->foreign('siswa_id')->references('idSiswa')->on('siswa')->onUpdate('cascade');
            $table->string('namaayah');
            $table->string('notelpayah');
            $table->string('tempatayah');
            $table->string('tgllahirayah');
            $table->string('namaibu');
            $table->string('notelpibu');
            $table->string('tempatibu');
            $table->string('tgllahiribu');
            $table->string('namawali');
            $table->string('notelpwali');
            $table->string('tempatwali');
            $table->string('tgllahirwali');
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
        Schema::dropIfExists('walimurid');
    }
}

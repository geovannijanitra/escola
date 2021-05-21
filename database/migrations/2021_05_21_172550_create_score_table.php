<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score', function (Blueprint $table) {
            $table->increments('idScore')->unsigned();
            $table->integer('siswa_id')->unsigned();
            $table->foreign('siswa_id')->references('idSiswa')->on('siswa')->onUpdate('cascade');
            $table->integer('mapel_id')->unsigned();
            $table->foreign('mapel_id')->references('idMapel')->on('mapel')->onUpdate('cascade');
            $table->string('nilai');
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
        Schema::dropIfExists('score');
    }
}

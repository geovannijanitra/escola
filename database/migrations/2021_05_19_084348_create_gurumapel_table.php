<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurumapelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurumapel', function (Blueprint $table) {
            $table->increments('idGurumapel')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('idUser')->on('users')->onUpdate('cascade');
            $table->integer('mapel_id')->unsigned();
            $table->foreign('mapel_id')->references('idMapel')->on('mapel')->onUpdate('cascade');
            $table->string('nama');
            $table->string('notelp');
            $table->string('tempat');
            $table->string('tgllahir');
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
        Schema::dropIfExists('gurumapel');
    }
}

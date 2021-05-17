<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapel', function (Blueprint $table) {
            $table->increments('idMapel')->unsigned();
            $table->integer('gurumapel_id')->unsigned();
            $table->foreign('gurumapel_id')->references('idGurumapel')->on('gurumapel')->onUpdate('cascade');
            $table->string('kode');
            $table->string('matkul');
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
        Schema::dropIfExists('mapel');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurubkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurubk', function (Blueprint $table) {
            $table->increments('idGurubk');
            $table->string('nama');
            $table->string('notelp');
            $table->string('tempat');
            $table->string('tgllahir');
            $table->string('kelas');
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
        Schema::dropIfExists('gurubk');
    }
}

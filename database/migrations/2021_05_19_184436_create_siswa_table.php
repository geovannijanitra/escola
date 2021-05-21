<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('idSiswa')->unsigned();
            
            
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('idUser')->on('users')->onUpdate('cascade');


            $table->string('nama');
            $table->string('alamat');
            $table->string('tempat');
            $table->string('tgllahir');
            $table->string('kelamin');
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
        Schema::dropIfExists('siswa');
    }
}

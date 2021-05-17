<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table ='siswa';
    protected $primaryKey ='idSiswa';
    protected $fillable = ['nama', 'alamat', 'tempat','tgllahir' ,'kelamin' ,'kelas'];

    public function walimurid(){
        return $this->hasOne('App\Walimurid', 'siswa_id');
    }
}

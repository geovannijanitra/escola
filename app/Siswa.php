<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table ='siswa';
    protected $primaryKey ='idSiswa';
    protected $fillable = ['user_id','nama', 'alamat', 'tempat','tgllahir' ,'kelamin' ,'kelas'];

    
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
    public function score(){
        return $this->hasMany('App\Score', 'siswa_id');
    }

}

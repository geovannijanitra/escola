<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';
    protected $primarykey = 'idMapel';
    protected $fillable = ['matkul'];

    public function gurumapel(){
        return $this->hasMany('App\Gurumapel', 'mapel_id');
    }

    public function tugas(){
        return $this->hasMany('App\Tugas', 'mapel_id');
    }

    public function score(){
        return $this->hasMany('App\Score', 'mapel_id');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    protected $table = 'tugas';
    protected $primaryKey = 'idTugas';
    protected $fillable = ['mapel_id','judul','deskripsi'];

    public function mapel(){
        return $this->belongsTo('App\Mapel', 'user_id');
    }

}

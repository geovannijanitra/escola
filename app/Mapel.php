<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';
    protected $primarykey = 'idMapel';
    protected $fillable = ['kode', 'matkul', 'gurumapel_id'];
    
    public function gurumapel(){
        return $this->belongsTo('App\Gurumapel', 'gurumapel_id');
    }
}

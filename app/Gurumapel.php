<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gurumapel extends Model
{
    protected $table ='gurumapel';
    protected $primaryKey ='idGurumapel';
    protected $fillable = ['nama', 'notelp', 'tempat','tgllahir'];

    public function mapel(){
        return $this->hasOne('App\Mapel', 'gurumapel_id');
    }
}

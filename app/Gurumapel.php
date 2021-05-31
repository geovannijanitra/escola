<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gurumapel extends Model
{
    protected $table ='gurumapel';
    protected $primaryKey ='idGurumapel';
    protected $fillable = ['user_id','mapel_id','nama', 'notelp', 'tempat','tgllahir'];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function mapel(){
        return $this->belongsTo('App\Mapel', 'user_id');
    }

}

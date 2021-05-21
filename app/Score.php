<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $table ='score';
    protected $primaryKey ='idScore';
    protected $fillable = ['siswa_id','mapel_id','nilai'];

    public function siswa(){
        return $this->belongsTo('App\Siswa', 'siswa_id');
    }

    public function mapel(){
        return $this->belongsTo('App\Mapel', 'mapel_id');
    }
}

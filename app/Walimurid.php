<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Walimurid extends Model
{
    protected $table = 'walimurid';
    protected $primaryKey = 'idWalimurid';
    protected $fillable = [
             'siswa_id',
             'namaayah',
             'notelpayah',
             'tempatayah',
             'tgllahirayah',
             'namaibu',
             'notelpibu',
             'tempatibu',
             'tgllahiribu',
             'namawali',
             'notelpwali',
             'tempatwali',
             'tgllahirwali'
    ];

    public function siswa(){
        return $this->belongsTo('App\Siswa', 'siswa_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table ='kegiatan';
    protected $primaryKey ='idKegiatan';
    protected $fillable = ['judul' , 'deskripsi' , 'gambar'];
}

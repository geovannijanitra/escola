<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table ='pengumuman';
    protected $primaryKey ='idPengumuman';
    protected $fillable = ['judul', 'file'];
}

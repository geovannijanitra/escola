<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pointbk extends Model
{
    protected $table ='pointbk';
    protected $primaryKey ='idPointbk';
    protected $fillable = ['jenis', 'pelanggaran', 'point'];
}

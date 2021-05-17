<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gurubk extends Model
{
    protected $table ='gurubk';
    protected $primaryKey ='idGurubk';
    protected $fillable = ['nama', 'notelp', 'tempat','tgllahir', 'kelas'];
}

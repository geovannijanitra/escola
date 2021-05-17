<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kritik extends Model
{
    protected $table ='kritik';
    protected $primaryKey ='idKritik';
    protected $fillable = ['sender', 'isi', 'saran'];
}

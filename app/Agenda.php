<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = ['nama_kegiatan', 'tempat', 'waktu', 'pengirim'];
}

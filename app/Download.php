<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $fillable = [
        'keterangan',
        'file',
        'judul',
        'no_katalog',
        'no_publikasi',
        'issn',
        'tgl_publikasi',
        'gambar'
    ];
}

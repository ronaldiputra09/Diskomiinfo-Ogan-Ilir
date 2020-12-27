<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['judul', 'slug', 'kategori_id', 'konten', 'gambar', 'user_id'];

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'kategori_gambar',
        'deskripsi_gambar',
        'link_gambar',
    ];
}

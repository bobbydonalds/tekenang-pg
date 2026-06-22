<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'judul_tentang',
        'deskripsi_tentang',
        'gambar_1',
        'gambar_2',
        'gambar_3',
    ];
}

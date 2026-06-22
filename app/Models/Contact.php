<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'alamat',
        'nomor_telepon',
        'link_wa',
        'alamat_email',
    ];
}

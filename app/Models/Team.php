<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'nama_anggota',
        'jabatan',
        'foto_profil',
    ];
}

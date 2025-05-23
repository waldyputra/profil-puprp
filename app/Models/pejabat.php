<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pejabat extends Model
{
    use HasFactory;
    protected $fillable = [
        'jabatan',
        'namapejabat',
        'nip',
        'tempatlahir',
        'tanggallahir',
        'agama',
        'pangkat',
        'pendidikan',
        'foto'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Truk extends Model
{
    protected $table = 'truk';
    protected $fillable = [
        'id_truk',
        'nama_truk',
        'plat_nomor',
        'kapasitas',
        'status',
    ];

   
}

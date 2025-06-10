<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = [
        'kd_barang',
        'nama_minuman',
        'harga',
        'ukuran',
        'stok',
        'berat',
        'gambar',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
     protected $table = 'mitra';

     protected $fillable =[
        'nama_pemilik',
        'no_telepon',
        'no_ktp',
        'no_npwp',
        'alamat_toko',
        'nama_toko',

     ];
}

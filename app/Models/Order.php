<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\user;
use App\Models\Barang;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = [
        'no_order',
        'nama_pembeli',
        'nama_barang',
        'jumlah_beli',
        'metode',
        'alamat',
        'no_telepon',
    ];

    public function user()
    {
        return $this->belongsTo(user::class, 'id_user', 'id_user');
        
}
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'kd_barang', 'kd_barang');
    }
}
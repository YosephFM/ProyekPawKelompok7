<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pelanggan;
use App\Models\Barang;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = [
        'id_order',
        'id_pelanggan',
        'kd_barang',
        'jumlah',
        'total_harga',
        'status',
        'tanggal_order',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan', 'id_pelanggan');
        
}
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'kd_barang', 'kd_barang');
    }
}
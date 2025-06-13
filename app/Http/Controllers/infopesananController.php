<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Truk;
use Illuminate\Support\Facades\Auth;

class infopesananController extends Controller
{
    // Menampilkan daftar semua pesanan user yang login & data truk
    public function index()
    {
        $orders = Order::with('barang')
            ->where('nama_pembeli', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        $truks = Truk::all();

        return view('infopesanan.index', compact('orders', 'truks'));
    }

    // Menampilkan detail satu pesanan
    public function show($id)
    {
        $order = Order::with('barang')
            ->where('id', $id)
            ->where('nama_pembeli', Auth::id())
            ->firstOrFail();

        return view('infopesanan.show', compact('order'));
    }
}
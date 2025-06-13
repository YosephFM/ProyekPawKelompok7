<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller{
    
    public function index()
    {
        $pembayaran = DB::table('pembayaran')->get();
        return view('pembayaran.index', compact('pembayaran'));
    }

    public function create()
    {
        return view('pembayaran.create');
    }

    public function store(Request $request)
    {
        DB::table('pembayaran')->insert([
            'nama' => $request->nama,
            'jumlah_beli' => $request->jumlah_beli,
            'tanggal' => $request->tanggal,
        ]);
        return redirect()->route('pembayaran.index');
    }

    public function show($orderId)
    {
        $order = \App\Models\Order::with('barang')->findOrFail($orderId);
        $total = $order->barang->harga * $order->jumlah_beli;
        return view('pembayaran.show', compact('order', 'total'));
    }

    public function bayar($orderId)
    {
        // Proses pembayaran (misal update status)
        // ...

        // Redirect kembali ke halaman pembayaran dengan pesan sukses
        return redirect()->route('order.index', $orderId)->with('success', 'Anda berhasil membayar');
    }
}
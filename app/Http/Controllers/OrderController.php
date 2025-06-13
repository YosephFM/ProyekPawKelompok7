<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $barangs = Barang::all();
        $metodeList = ['Debit', 'Kredit'];
        $selectedProduk = $request->nama_barang;

        return view('order.index', compact('barangs', 'metodeList', 'selectedProduk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barangs = Barang::all();
        $metodeList = ['Debit', 'Kredit'];

        return view('order.create', compact('barangs', 'metodeList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|exists:barang,id', // validasi id barang
            'jumlah_beli' => 'required|integer|min:1',
            'metode'      => 'required|string|in:Debit,Kredit',
            'alamat'      => 'required|string|max:255',
            'no_telepon'  => 'required|string|max:20',
        ]);

        // Generate no_order otomatis
        $lastOrder = Order::orderBy('id', 'desc')->first();
        $nextId = $lastOrder ? $lastOrder->id + 1 : 1;
        $no_order = 'ORD' . date('Ymd') . str_pad($nextId, 3, '0', STR_PAD_LEFT);

        $order = new Order();
        $order->no_order      = $no_order; // <-- tambahkan baris ini!
        $order->nama_pembeli  = Auth::user()->id;
        $order->nama_barang   = $request->nama_barang; 
        $order->jumlah_beli   = $request->jumlah_beli;
        $order->metode        = $request->metode;
        $order->alamat        = $request->alamat;
        $order->no_telepon    = $request->no_telepon;
        $order->save();

        // Redirect ke halaman pembayaran
        return redirect()->route('pembayaran.show', $order->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}

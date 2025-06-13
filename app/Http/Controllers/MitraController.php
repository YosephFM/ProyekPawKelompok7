<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mitra = Mitra::all();

        return view('mitra.index', compact('mitra'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Tampilkan form tambah mitra
        return view('mitra.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_pemilik'  => 'required|string|max:255',
            'no_telepon'    => 'required|string|max:20',
            'nama_toko'     => 'required|string|max:255',
            'alamat_toko'   => 'required|string|max:255',
            'no_ktp'      => 'required|string|max:16|unique:mitra,no_ktp',
            'no_npwp'     => 'required|string|max:15|unique:mitra,no_npwp',
        ]);

        // Simpan data mitra baru
        Mitra::create([
            'nama_pemilik'  => $request->nama_pemilik,
            'no_telepon'    => $request->no_telepon,
            'nama_toko'     => $request->nama_toko,
            'alamat_toko'   => $request->alamat_toko,
            'no_ktp'        => $request->no_ktp,
            'no_npwp'       => $request->no_npwp,
        ]);

        // Redirect ke halaman daftar mitra dengan pesan sukses
        return redirect()->route('mitra.index')->with('success', 'Mitra berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mitra $mitra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mitra $mitra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mitra $mitra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mitra $mitra)
    {
        //
    }
}

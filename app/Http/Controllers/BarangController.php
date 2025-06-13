<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('Barang.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kd_barang'     => 'required|unique:barang,kd_barang|max:255',
            'nama_minuman'  => 'required|max:255',
            'harga'         => 'required|numeric',
            'ukuran'        => 'required|max:100',
            'stok'          => 'required|integer',
            'berat'         => 'required|numeric',
            'gambar'        => 'nullable|image|max:2048',
        ]);

        $data = $request->only([
            'kd_barang',
            'nama_minuman',
            'harga',
            'ukuran',
            'stok',
            'berat',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $data['gambar'] = $filename;
        }

        Barang::create($data);

        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        return view('Barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'kd_barang'     => 'required|max:255|unique:barang,kd_barang,' . $barang->id,
            'nama_minuman'  => 'required|max:255',
            'harga'         => 'required|numeric',
            'ukuran'        => 'required|max:100',
            'stok'          => 'required|integer',
            'berat'         => 'required|numeric',
            'gambar'        => 'nullable|image|max:2048',
        ]);

        $data = $request->only([
            'kd_barang',
            'nama_minuman',
            'harga',
            'ukuran',
            'stok',
            'berat',
        ]);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($barang->gambar && file_exists(public_path('images/' . $barang->gambar))) {
                unlink(public_path('images/' . $barang->gambar));
            }
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $data['gambar'] = $filename;
        }

        $barang->update($data);

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        // Hapus file gambar jika ada
        if ($barang->gambar && file_exists(public_path('images/' . $barang->gambar))) {
            unlink(public_path('images/' . $barang->gambar));
        }

        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus!');
    }
}

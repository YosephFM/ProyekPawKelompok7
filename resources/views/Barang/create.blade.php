@extends('layout.main')
@section('content')

<div class="container py-4">
    <h2 class="mb-4" style="color: #000;">Tambah Barang</h2>
    <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="kd_barang" class="form-label" style="color: #000;">Kode Barang</label>
            <input type="text" class="form-control" id="kd_barang" name="kd_barang" value="{{ old('kd_barang') }}" required style="color: #000;">
            @error('kd_barang')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nama_minuman" class="form-label" style="color: #000;">Nama Minuman</label>
            <input type="text" class="form-control" id="nama_minuman" name="nama_minuman" value="{{ old('nama_minuman') }}" required style="color: #000;">
            @error('nama_minuman')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label" style="color: #000;">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga') }}" required style="color: #000;">
            @error('harga')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="ukuran" class="form-label" style="color: #000;">Ukuran</label>
            <input type="text" class="form-control" id="ukuran" name="ukuran" value="{{ old('ukuran') }}" required style="color: #000;">
            @error('ukuran')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label" style="color: #000;">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" value="{{ old('stok') }}" required style="color: #000;">
            @error('stok')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="berat" class="form-label" style="color: #000;">Berat (gram)</label>
            <input type="number" class="form-control" id="berat" name="berat" value="{{ old('berat') }}" required style="color: #000;">
            @error('berat')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label" style="color: #000;">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" style="color: #000;" accept="image/*">
            @error('gambar')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>

@endsection
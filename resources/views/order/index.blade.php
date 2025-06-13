@extends('layout.main')
@section('content')

<h1 class="text-dark">Order Produk</h1>

<div class="row">
    <div class="col-12">
        <!-- Default box -->
        <div class="card card-primary card-outline mb-4">
            <div class="card-header">
                <div class="card-title text-dark">Form Pemesanan</div>
            </div>
            <form action="{{ route('order.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    {{-- Tampilkan nama pembeli (user yang login) --}}
                    <div class="mb-3">
                        <label class="form-label" style="color:#000;">Nama Pembeli</label>
                        <input type="text" class="form-control" value="{{ auth()->user()->name }}" disabled>
                    </div>
                    {{-- No Order akan di-generate otomatis di controller, tidak perlu diinput --}}
                    <div class="mb-3">
                        <label for="barang_id" class="form-label" style="color:#000;">Produk</label>
                        <select class="form-select" name="nama_barang" required>
                            <option value="">-- Pilih Produk --</option>
                            @foreach($barangs as $barang)
                                <option value="{{ $barang->id }}"
                                    {{ (old('nama_barang', $selectedProduk ?? '') == $barang->id) ? 'selected' : '' }}>
                                    {{ $barang->nama_minuman }}
                                </option>
                            @endforeach
                        </select>
                        @error('barang_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_beli" class="form-label" style="color:#000;">Jumlah</label>
                        <input type="number" class="form-control" name="jumlah_beli" value="{{ old('jumlah_beli') }}" min="1" required>
                        @error('jumlah_beli')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="metode" class="form-label" style="color:#000;">Metode Pembayaran</label>
                        <select class="form-select" name="metode" required>
                            <option value="">-- Pilih Metode --</option>
                            <option value="Debit" {{ old('metode') == 'Debit' ? 'selected' : '' }}>Debit</option>
                            <option value="Kredit" {{ old('metode') == 'Kredit' ? 'selected' : '' }}>Kredit</option>
                        </select>
                        @error('metode')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label" style="color:#000;">Alamat Pengiriman</label>
                        <textarea class="form-control" name="alamat" rows="2" required>{{ old('alamat') }}</textarea>
                        @error('alamat')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="no_telepon" class="form-label" style="color:#000;">No Telepon</label>
                        <input type="text" class="form-control" name="no_telepon" value="{{ old('no_telepon') }}" required>
                        @error('no_telepon')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-danger">ORDER</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection
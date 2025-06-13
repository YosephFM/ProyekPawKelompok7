
@extends('layout.main')
@section('content')

<h2 class="mb-4 text-dark">Info Pesanan & Data Truk</h2>

<div class="card mb-4">
    <div class="card-body">
        <h4 class="mb-3">Daftar Pesanan</h4>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>No Order</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Metode</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    
                </tr>
            </thead>
            <tbody>
                @forelse($orders as $order)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $order->no_order }}</td>
                    <td>{{ $order->barang->nama_minuman ?? '-' }}</td>
                    <td>{{ $order->jumlah_beli }}</td>
                    <td>{{ $order->metode }}</td>
                    <td>{{ $order->alamat }}</td>
                    <td>{{ $order->no_telepon }}</td>
                    
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="text-center">Belum ada pesanan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h4 class="mb-3">Data Truk</h4>
        <table class="table table-bordered table-striped">
            <thead class="table-success">
                <tr>
                    <th>No</th>
                    <th>Nomor Polisi</th>
                    <th>Nama Supir</th>
                    <th>Jenis Truk</th>
                    <th>Muatan Maksimal</th>
                </tr>
            </thead>
            <tbody>
                @forelse($truks as $truk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $truk->nopolisi }}</td>
                    <td>{{ $truk->merek_truk }}</td>
                    <td>{{ $truk->warna_truk }}</td>
                    <td>{{ $truk->tujuan_kota }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data truk.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
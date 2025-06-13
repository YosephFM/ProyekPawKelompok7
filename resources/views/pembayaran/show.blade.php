@extends('layout.main')
@section('content')
<h2 class="text-dark">Pembayaran</h2>
<div class="card">
    <div class="card-body">
        <p><strong>No Order:</strong> {{ $order->no_order }}</p>
        <p><strong>Produk:</strong> {{ $order->barang->nama_minuman }}</p>
        <p><strong>Harga Satuan:</strong> Rp{{ number_format($order->barang->harga,0,',','.') }}</p>
        <p><strong>Jumlah:</strong> {{ $order->jumlah_beli }}</p>
        <p><strong>Total Harga:</strong> <span class="text-success">Rp{{ number_format($total,0,',','.') }}</span></p>
        <p><strong>Metode Pembayaran:</strong> {{ $order->metode }}</p>
        <p><strong>Alamat:</strong> {{ $order->alamat }}</p>
        <p><strong>No Telepon:</strong> {{ $order->no_telepon }}</p>
        <!-- Tombol Bayar -->
        <form action="{{ route('pembayaran.bayar', $order->id) }}" method="POST" class="mt-3">
            @csrf
            <button type="submit" class="btn btn-success">Bayar</button>
        </form>
    </div>
</div>


@if(session('success'))
<script>
    alert("{{ session('success') }}");
</script>
@endif
@endsection
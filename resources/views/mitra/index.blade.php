@extends('layout.main')
@section('content')
<style>
    .about-text {
        color: #222;
        font-size: 1.1rem;
        line-height: 1.8;
        
        padding: 24px 28px;
        margin-bottom: 2rem;
        
    }
</style>
<div class="d-flex justify-content-center mb-4 gap-4">
    <img src="{{ asset('images/Gudang1.jpg') }}" alt="" class="img-fluid" style="border-radius: 16px; height: 350px; object-fit: cover;">
    <img src="{{ asset('images/Gudang2.jpg') }}" alt="" class="img-fluid" style="border-radius: 18px; height: 350px; object-fit: cover;">
</div>


<div class="card">
    <div class="card-body">
        <h2 class="mb-4 text-dark">Daftar Mitra</h2>
        <table class="table table-bordered table-striped" style="background-color:rgb(255, 38, 0);">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Anggota Mitra</th>
                    <th>No Telepon</th>
                    <th>Nama Toko</th>
                    <th>Alamat Toko</th>
                </tr>
            </thead>
            <tbody>
                @forelse($mitra as $mitra)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mitra->nama_pemilik }}</td>
                    <td>{{ $mitra->no_telepon }}</td>
                    <td>{{ $mitra->nama_toko }}</td>
                    <td>{{ $mitra->alamat_toko }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data mitra.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        
    </div>
</div>
<div class="about-text">
    <strong>Keuntungan Menjadi Mitra Kami</strong>
    <ul>
        <li>Produk berkualitas tinggi dengan harga bersaing.</li>
        <li>Dukungan pemasaran dan promosi untuk meningkatkan penjualan.</li>
        <li>Akses ke berbagai produk minuman yang selalu diperbarui.</li>
        <li>Pelayanan pelanggan yang responsif dan profesional.</li>
    </ul>
    <div class="mt-4 text-left">
        <a href="{{ route('mitra.create') }}" class="btn btn-success btn-lg">
            Gabung Mitra 
        </a>
    </div>
</div>




@endsection
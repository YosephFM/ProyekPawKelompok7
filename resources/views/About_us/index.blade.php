@extends('layout.main')
@section('content')

<style>
    .about-title {
        color: #000;
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }
    .about-text {
        color: #222;
        font-size: 1.1rem;
        line-height: 1.8;
        background:rgb(230, 230, 230);
        border-radius: 10px;
        padding: 24px 28px;
        margin-bottom: 2rem;
        box-shadow: 0 2px 8px rgba(54, 54, 54, 0.04);
    }
    .about-call {
         color:rgb(226, 0, 0);
        font-size: 1.1rem;
        line-height: 1.8;
        background:rgb(230, 230, 230);
        border-radius: 10px;
        padding: 24px 28px;
        margin-bottom: 2rem;
        box-shadow: 0 2px 8px rgba(54, 54, 54, 0.04);
        font-family: 'Courier New', Courier, monospace;
        font: bold;
    }
</style>

<h1 class="about-title">About Us</h1>
<div class="about-text">
    <p>
        <a href="{{ route('dashboard') }}" class="fw-bold text-decoration-none" style="color:#222">PT. Bintang Suryasindo</a> adalah perusahaan distribusi minuman yang didirikan pada tahun 2000 dengan tujuan menyediakan produk minuman berkualitas tinggi kepada konsumen di berbagai daerah. Berpusat di Jl. H. Abdul Rozak No.99E, 8 Ilir Tim. II, Kota Palembang, perusahaan ini berkomitmen untuk menjadi mitra terpercaya bagi produsen dan pengecer dalam mendistribusikan berbagai jenis minuman, mulai dari air mineral, minuman ringan, hingga minuman energi dan kesehatan.
    </p>
    <p>
        Dengan jaringan distribusi yang luas dan sistem logistik yang efisien, PT. Bintang Suryasindo mampu menjangkau berbagai segmen pasar, termasuk ritel modern, toko grosir, restoran, kafe, dan hotel. Perusahaan ini juga terus berinovasi dalam menyediakan layanan terbaik dengan menerapkan teknologi terbaru dalam manajemen rantai pasok dan sistem pemesanan berbasis digital.
    </p>
    <p>
        Didukung oleh tim profesional yang berpengalaman di bidang distribusi dan pemasaran, PT. Bintang Suryasindo berkomitmen untuk menjaga kepuasan pelanggan dengan menyediakan produk berkualitas, layanan pengiriman yang cepat, serta dukungan pemasaran yang efektif. Dengan visi untuk menjadi distributor minuman terkemuka di Indonesia, PT. Bintang Suryasindo terus memperluas jaringan bisnis dan menjalin kemitraan strategis dengan berbagai produsen minuman terkemuka.
    </p>
</div>
<h1 class="about-title">Visi Dan Misi</h1>
<div class="about-text">
    <p>
            <strong>Visi:</strong>
        Menjadi distributor minuman terkemuka yang menyediakan produk berkualitas dan layanan terbaik bagi pelanggan
    </p>
    <p>
        <strong>Misi:</strong>
            Menyediakan berbagai pilihan minuman berkualitas sesuai dengan kebutuhan pasar.
    Mengembangkan jaringan distribusi yang efisien dan handal.
    Menjalin hubungan yang kuat dengan produsen dan pelanggan untuk pertumbuhan bisnis yang berkelanjutan.
    Mengutamakan kepuasan pelanggan melalui pelayanan yang cepat dan profesional.

    </p>
    
</div>
<div class="about-call">
    <strong>Telp</strong> : 0711 - 710481
</div>

@endsection
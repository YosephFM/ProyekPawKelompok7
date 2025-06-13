@extends('layout.main')
@section('content')
<marquee class="text-marqee text-dark" direction="left" scrollamount="15"> 
    <h2 class="big-title">PT BINTANG SURYASINDO</h2>
</marquee>

<div class="row justify-content-center">
    @foreach($barangs as $barang)
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex align-items-stretch">
        <div class="card shadow-sm w-100 h-100" style="border-radius: 16px;">
            <img src="{{ asset('images/' . $barang->gambar) }}" class="card-img-top p-3" alt="{{ $barang->nama_minuman }}" style="object-fit:contain; height:170px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title text-center mb-3" style="color:#000;">{{ $barang->nama_minuman }}</h5>
                <div class="d-flex justify-content-center mt-auto gap-2">
                    <button 
                        class="btn btn-primary btn-sm" 
                        data-bs-toggle="modal" 
                        data-bs-target="#detailModal{{ $barang->id }}">
                        Detail
                    </button>
                    <a href="{{ route('order.index', ['nama_barang' => $barang->id]) }}" class="btn btn-success btn-sm">
                        Pesan
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail -->
    <div class="modal fade" id="detailModal{{ $barang->id }}" tabindex="-1" aria-labelledby="detailModalLabel{{ $barang->id }}" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="detailModalLabel{{ $barang->id }}" style="color:#000;">Detail Minuman</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="{{ asset('images/' . $barang->gambar) }}" class="img-fluid mb-3" alt="{{ $barang->nama_minuman }}">
            <ul class="list-group">
                <li class="list-group-item" style="color:#000;"><strong>Kode Barang:</strong> {{ $barang->kd_barang }}</li>
                <li class="list-group-item" style="color:#000;"><strong>Nama Minuman:</strong> {{ $barang->nama_minuman }}</li>
                <li class="list-group-item" style="color:#000;"><strong>Harga:</strong> Rp{{ number_format($barang->harga,0,',','.') }}</li>
                <li class="list-group-item" style="color:#000;"><strong>Ukuran:</strong> {{ $barang->ukuran }}</li>
                <li class="list-group-item" style="color:#000;"><strong>Stok:</strong> {{ $barang->stok }}</li>
                <li class="list-group-item" style="color:#000;"><strong>Berat:</strong> {{ $barang->berat }} gr</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    @endforeach
</div>
@endsection


@extends('layout.main')
@section('content')


<div class="mb-4">
    <a href="{{ route('barang.create') }}" class="btn btn-success">
        <i class="bi bi-plus"></i> Tambah Barang
    </a>
</div>

<div class="row justify-content-center">
    @foreach($barangs as $barang)
    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
        <div class="card" style="width: 14rem;">
            <img src="{{ asset('images/' . $barang->gambar) }}" class="card-img-top" alt="{{ $barang->nama_minuman }}">
            <div class="card-body">
                <h5 class="card-title">{{ $barang->nama_minuman }}</h5>
                <div class="d-flex justify-content-between">
                    <button 
                        class="btn btn-primary btn-sm" 
                        data-bs-toggle="modal" 
                        data-bs-target="#detailModal{{ $barang->id }}">
                        Detail
                    </button>
                    <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus barang ini?')" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="detailModal{{ $barang->id }}" tabindex="-1" aria-labelledby="detailModalLabel{{ $barang->id }}" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="detailModalLabel{{ $barang->id }}">Detail Minuman</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="{{ asset('images/' . $barang->gambar) }}" class="img-fluid mb-3" alt="{{ $barang->nama_minuman }}">
            <ul class="list-group">
                <li class="list-group-item"><strong>Kode Barang:</strong> {{ $barang->kd_barang }}</li>
                <li class="list-group-item"><strong>Nama Minuman:</strong> {{ $barang->nama_minuman }}</li>
                <li class="list-group-item"><strong>Harga:</strong> Rp{{ number_format($barang->harga,0,',','.') }}</li>
                <li class="list-group-item"><strong>Ukuran:</strong> {{ $barang->ukuran }}</li>
                <li class="list-group-item"><strong>Stok:</strong> {{ $barang->stok }}</li>
                <li class="list-group-item"><strong>Berat:</strong> {{ $barang->berat }} gr</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    @endforeach
</div>

@endsection
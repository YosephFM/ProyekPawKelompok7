@extends('layout.main')
@section('content')


<div class="mb-4">
    
    <a href="{{ route('barang.create') }}" class="btn btn-success">
        <i class="bi bi-plus"></i> Tambah Barang
    </a>
    
</div>

<div class="row g-4 justify-content-center">
    @foreach($barangs as $barang)
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
        <div class="card shadow-sm w-100 h-100" style="border-radius: 16px;">
            <img src="{{ asset('images/' . $barang->gambar) }}" class="card-img-top p-3" alt="{{ $barang->nama_minuman }}" style="object-fit:contain; height:170px;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title text-center mb-3" style="color:#000;">{{ $barang->nama_minuman }}</h5>
                <div class="d-flex justify-content-between mt-auto gap-2">
                    <button 
                        class="btn btn-primary btn-sm" 
                        data-bs-toggle="modal" 
                        data-bs-target="#detailModal{{ $barang->id }}">
                        Detail
                    </button>
                    @can('update',$barang)
                    <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>
                    @endcan

                    @can('delete',$barang)
                    <button 
                        class="btn btn-danger btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#deleteModal{{ $barang->id }}">
                        Delete
                    </button>
                    @endcan
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
                <li class="list-group-item" style="color:#000;"><strong>Berat:</strong> {{ $barang->berat }} Kg</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Konfirmasi Delete -->
    <div class="modal fade" id="deleteModal{{ $barang->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $barang->id }}" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-danger text-white">
            <h5 class="modal-title" id="deleteModalLabel{{ $barang->id }}">Konfirmasi Hapus</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center" style="color:#000;">
            <i class="bi bi-exclamation-triangle display-4 text-danger mb-3"></i>
            <p>Apakah Anda yakin ingin menghapus <strong>{{ $barang->nama_minuman }}</strong>?</p>
          </div>
          <div class="modal-footer">
            <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Ya, Hapus</button>
            </form>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          </div>
        </div>
      </div>
    </div>
    @endforeach
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/non-cartesian-zoom.js"></script>
<script src="https://code.highcharts.com/modules/mouse-wheel-zoom.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        Pie charts are very popular for showing a compact overview of a
        composition or comparison. While they can be harder to read than
        column charts, they remain a popular choice for small datasets.
    </p>
</figure>

<style>
.highcharts-figure,
.highcharts-data-table table {
    min-width: 320px;
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tbody tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

input[type="number"] {
    min-width: 50px;
}

.highcharts-description {
    margin: 0.3rem 10px;
}
</style>

<script>
Highcharts.chart('container', {
    chart: {
        type: 'pie',
        zooming: {
            type: 'xy'
        },
        panning: {
            enabled: true,
            type: 'xy'
        },
        panKey: 'shift'
    },
    title: {
        text: 'Komposisi Stok Barang'
    },
    tooltip: {
        valueSuffix: ' unit'
    },
    subtitle: {
        text: 'Sumber: Data Barang'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: [{
                enabled: true,
                distance: 20
            }, {
                enabled: true,
                distance: -40,
                format: '{point.percentage:.1f}%',
                style: {
                    fontSize: '1.2em',
                    textOutline: 'none',
                    opacity: 0.7
                },
                filter: {
                    operator: '>',
                    property: 'percentage',
                    value: 10
                }
            }]
        }
    },
    series: [
        {
            name: 'Stok',
            colorByPoint: true,
            data: [
                @foreach($barangs as $barang)
                {
                    name: "{{ $barang->nama_minuman }}",
                    y: {{ $barang->stok }}
                }@if(!$loop->last)
                ,@endif
                @endforeach
            ]
        }
    ]
});
</script>

@endsection
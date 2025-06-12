@extends('layout.main')
@section('content')

<div class="container py-4">
    <h2 class="mb-4 text-dark">Daftar Jadwal Jam Bisnis</h2>
    <table class="table table-bordered table-striped bg-white">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Hari</th>
                <th>Jam</th>

            </tr>
        </thead>
        <tbody>
            @forelse($jadwal as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->Hari }}</td>
                <td>{{ $item->jam }}</td>
                
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">Tidak ada data jadwal.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
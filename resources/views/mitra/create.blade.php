@extends('layout.main')
@section('content')

<div class="container mt-4">
    <h2 class="mb-4 text-dark">Form Pendaftaran Mitra</h2>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('mitra.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                    <input type="text" class="form-control" name="nama_pemilik" value="{{ old('nama_pemilik') }}" required>
                    @error('nama_pemilik')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="no_telepon" class="form-label">No Telepon</label>
                    <input type="text" class="form-control" name="no_telepon" value="{{ old('no_telepon') }}" required>
                    @error('no_telepon')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nama_toko" class="form-label">Nama Toko</label>
                    <input type="text" class="form-control" name="nama_toko" value="{{ old('nama_toko') }}" required>
                    @error('nama_toko')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat_toko" class="form-label">Alamat Toko</label>
                    <textarea class="form-control" name="alamat_toko" rows="2" required>{{ old('alamat_toko') }}</textarea>
                    @error('alamat_toko')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="no_ktp" class="form-label">No KTP</label>
                    <input type="text" class="form-control" name="no_ktp" value="{{ old('no_ktp') }}" required>
                    @error('no_ktp')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="no_npwp" class="form-label">No NPWP</label>
                    <input type="text" class="form-control" name="no_npwp" value="{{ old('no_npwp') }}" required>
                    @error('no_npwp')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Daftar Mitra</button>
                <a href="{{ route('mitra.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@if(session('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Selamat Bergabung',
            text: "{{ session('success') }}",
            confirmButtonColor: '#198754'
        });
    </script>
@endif


@endsection
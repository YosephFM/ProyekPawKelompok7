@extends('layout.main')
@section('content')

<h1 class="text-dark">Hello
</h1>

<!--begin::Row-->
     <div class="row">
              <div class="col-12">
                <!-- Default box -->
                <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title text-dark">Buat Order</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="{{ route('order.store')}}" method="POST">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                      <div class="mb-3">
                        <label for="singkatan" class="form-label">Produk</label>
                        <input type="text" class="form-control" name="singkatan" value="{{ old('singkatan') }}">
                        @error('singkatan')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="dekan" class="form-label">Jumlah</label>
                        <input type="text" class="form-control" name="dekan" value="{{ old('dekan') }}">
                        @error('dekan')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                      <div class="mb-3">
                        <label for="wakil_dekan" class="form-label">Metode Pembayaran</label>
                        <input type="text" class="form-control" name="wakil_dekan" value="{{ old('wakil_dekan') }}">
                        @error('wakil_dekan')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-danger">ORDER</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
                <!-- /.card -->
              </div>
            </div>
            <!--end::Row-->
@endsection
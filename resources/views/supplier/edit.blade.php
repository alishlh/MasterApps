@extends('layout.master-admin')
@section('content')

<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4 uppercase text-center">FORM EDIT BARANG</h5>
       
            <form action="{{ url('supplier/titipan/update/' . $titipan->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" value="{{auth()->user()->name}}" placeholder="Nama Lengkap" name="name" disabled enabled required>
                    @error('name')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="barang" class="form-label">Barang</label>
                    <input type="text" name="barang" class="form-control @error('barang') is-invalid @enderror" value="{{$titipan->barang}}" placeholder="Masukkan Barang ..." id="barang"required>
                    @error('name')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{$titipan->jumlah}}" placeholder="Masukkan Jumlah ..." id="jumlah"required>
                    @error('jumlah')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                  </div>
              <div class="mb-3">
                <label for="satuan" class="form-label">satuan</label>
                <input type="text" name="satuan" class="form-control @error('satuan') is-invalid @enderror" value="{{$titipan->satuan}}" placeholder="Masukkan satuan" id="satuan" required>
                @error('satuan')
                <div class="invalid-feedback">{{$satuan}}</div>
                @enderror
              </div>
            
              <div class="mb-3">
                <label for="total_harga" class="form-label">Harga</label>
                <input type="number" name="total_harga" class="form-control @error('total_harga') is-invalid @enderror" placeholder="Masukkan Harga ..." value="{{$titipan->total_harga}}" id="total_harga"required>
                @error('total_harga')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         
      </div>
    </div>
    <div class="py-6 px-6 text-center">
      <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
          class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com/" target="_blank"
          class="pe-1 text-primary text-decoration-underline">ThemeWagon</a></p>
    </div>
</div>
    
@endsection
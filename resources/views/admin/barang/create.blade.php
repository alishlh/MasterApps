@extends('layout.master-admin')
@section('content')
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center text-uppercase fw-semibold mb-4">Form Transaksi</h5>
        
          <div class="card-body">
            <form method="POST" action="{{route('admin.barang.store')}}">
            @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Barang</label>
                <input type="text" name="name" class="form-control" id="name" >
              </div>
              <div class="mb-3">
                <label for="stok" class="form-label">Jumlah</label>
                <input type="number" name="stok" class="form-control" id="stok">
              </div>
              <div class="mb-3">
                <label for="harga_jual" class="form-label">Harga</label>
                <input type="number" name="harga_jual" class="form-control" id="harga_jual" >
              </div>
              <div class="mb-3">
                <label for="satuan" class="form-label">Satuan</label>
                <input type="text"  name="satuan" class="form-control" id="satuan" >
              </div>
              <div class="mb-3">
                <label for="user" class="form-label">User</label>
                <select class="form-select" name="user_id"  id="user_id" aria-label="Default select example">
                  @foreach ($user as $item)
                  <option class="item-select" onclick="" value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
              </div>
             
              {{-- <div class="mb-3">
                <label for="img" class="form-label">Total</label>
                <input type="number" name="total_harga" class="form-control" id="total_harga">
              </div> --}}
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
      </div>
    </div>
    <div class="py-6 px-6 text-center">
      <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
          class="pe-1 text-primary text-decoration-underline">Al Ishlah</a> Distributed by <a href="https://themewagon.com/" target="_blank"
          class="pe-1 text-primary text-decoration-underline">Ishlah Academy</a></p>
    </div>
</div>
@endsection

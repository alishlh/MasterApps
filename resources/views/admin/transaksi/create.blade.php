@extends('layout.master-admin')
@section('content')
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Form Transaksi</h5>
        
          <div class="card-body">
            <form action="{{route('admin.transaksi.input')}}" method="POST">
                @csrf
              <div class="mb-3">
                <label for="barang" class="form-label">Barang</label>
               
                <select class="form-select" name="barang_id" id="barang_id" aria-label="Default select example">
                  @foreach ($data as $item)
                  <option class="item-select" value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Harga</label>
                <input type="text" name="harga_jual" class="form-control" id="harga_jual" >
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Jumlah</label>
                <input type="number" name="jumlah" class="form-control" id="jumlah">
              </div>
              <div class="mb-3">
                <label for="img" class="form-label">Satuan</label>
                <input type="text" name="satuan" class="form-control" id="satuan">
              </div>
             
              {{-- <div class="mb-3">
                <label for="img" class="form-label">Total</label>
                <input type="number" name="total_harga" class="form-control" id="total_harga">
              </div> --}}
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <hr class="my-5">
            <div>
              <h5 class="card-title fw-semibold mb-4">Forms Transaksi</h5>

              <table class="table text-nowrap align-middle mb-0">
                <thead>
                    <tr>
                      <th>Kode Transaksi</th>
                      <th>Tanggal</th>
                      <th>kode Barang</th>
                      <th>Barang</th>
                      <th>Jumlah</th>
                      <th>Satuan</th>
                      <th>Harga</th>
                      <th>Total</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($data as $item)
                      <td>{{$item->kode}}</td>                       
                   @endforeach
                </tbody>
              </table>
            </div>
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
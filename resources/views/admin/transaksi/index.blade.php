@extends('layout.master-admin')
@section('content')



<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center mb-3">Form Transaksi</h5>
        <a href="{{route('admin.transaksi.create')}}" class="btn btn-primary">+</a>
        <div class="table-responsive">
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
               @foreach ($data as $value)
                  <tr>
                    <td>{{$value->kode}}</td>
                    <td>{{$value->tgl_transaksi}}</td>
                    <td>{{$value->barang_id}}</td>
                    <td>{{$value->barang->name}}</td>
                    <td>{{$value->jumlah}}</td>
                    <td>{{$value->barang->satuan}}</td>
                    <td>{{$value->barang->harga_jual}}</td>
                    <td>{{$value->total_harga}}</td>
                    <td>
                        <a href="">detail</a>
                    </td>
                      
                  </tr>                   
               @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="py-6 px-6 text-center">
      <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
          class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com/" target="_blank"
          class="pe-1 text-primary text-decoration-underline">ThemeWagon</a></p>
    </div>
</div>

@endsection
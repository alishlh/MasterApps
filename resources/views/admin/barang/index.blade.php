@extends('layout.master-admin')
@section('content')

<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center mb-3">Form Data Barang</h5>
        <div class="table-responsive">
          <table class="table text-nowrap align-middle mb-0">
            <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Stok</th>
                  <th>Harga</th>
                  <th>Satuan</th>
                  <th>Supplier</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $barang)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$barang->name}}</td> 
                    <td>{{$barang->stok}}</td>
                    <td>{{$barang->harga_jual}}</td>
                    <td>{{$barang->satuan}}</td>
                    <td>{{$barang->user->name}}</td>
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


@extends('layout.master-admin')
@section('content')



<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-uppercase tracking-wide text-center mb-3">Form Transaksi</h5>
        <a href="{{route('admin.transaksi.create')}}" class=" btn btn-primary">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-folder-plus">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 19h-7a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2h4l3 3h7a2 2 0 0 1 2 2v3.5" />
            <path d="M16 19h6" />
            <path d="M19 16v6" />
          </svg>
        </a>
        <div class="table-responsive">
          <table class="table text-nowrap align-middle mb-0">
            <thead>
                <tr class="text-center">
                  <th>Kode Transaksi</th>
                  <th>Tanggal</th>
                  <th>kode Barang</th>
                  <th>Barang</th>
                  <th>Jumlah</th>
                  <th>Harga</th>
                  <th>Total</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($data as $value)
                  <tr class="text-center">
                    <td>{{$value->id}}</td>
                    <td>{{$value->created_at}}</td>
                    <td>{{$value->barang_id}}</td>
                    <td>{{$value->barang->name}}</td>
                    <td>{{$value->jumlah}} {{$value->barang->satuan}}</td>
                    <td>Rp. {{$value->barang->harga_jual}}</td>
                    <td>Rp. {{$value->jumlah * $value->barang->harga_jual}}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-search">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h4.5m7.5 -10v-4a2 2 0 0 0 -2 -2h-2" />
                          <path d="M9 5a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2" />
                          <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                          <path d="M20.2 20.2l1.8 1.8" />
                        </svg></a>
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
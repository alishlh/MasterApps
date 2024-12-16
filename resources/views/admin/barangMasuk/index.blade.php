@extends('layout.master-admin')
@section('content')

<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-uppercase tracking-wide text-center mb-3">Form Barang</h5> 
        <div class="table-responsive">
          <table class="table text-nowrap align-middle mb-0">
            <thead>
                <tr class="text-center">
                  <th>No.</th>
                  <th>Supplier</th>
                  <th>Barang</th>
                  <th>Jumlah</th>
                  <th>Harga Total</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($value as $value)
                   @csrf
                   <tr class="text-center">
                     <td>{{$loop->iteration}} .</td>
                     <td>{{$value->user->name}}</td>
                     <td>{{$value->barang}}</td>
                     <td>{{$value->jumlah}}

                      {{$value->satuan}}</td>
                     <td>Rp. {{$value->total_harga}}</td>
                     <td>
                       <a href="{{route('admin.barang.create')}}" class="btn btn-sm btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 5l0 14" />
                        <path d="M5 12l14 0" />
                      </svg>
                    </a>
                   
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


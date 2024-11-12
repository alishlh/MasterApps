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
                  <th>Supplier</th>
                  <th>Barang</th>
                  <th>Jumlah</th>
                  <th>satuan</th>
                  <th>Harga Total</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($value as $value)
                   @csrf
                   <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{{$value->user->name}}</td>
                     <td>{{$value->barang}}</td>
                     <td>{{$value->jumlah}}</td>
                     <td>{{$value->satuan}}</td>
                     <td>{{$value->total_harga}}</td>
                     <td>
                       <a href="" class="btn btn-secondary">Tambahkan</a>
                       <a class="btn btn-sm btn-primary show_barang_details"
                           data-bs-toggle="modal"
                           data-bs-target="#BarangDetailsModal"
                           data-supplier ="{{ $value->user->name }}"
                           data-barang="{{ $value->name }}"
                           data-jumlah="{{ $value->jumlah }}"
                           data-satuan="{{ $value->satuan }}"
                           data-total_harga="{{ $value->total_harga }}"
                           href="#">
                            View Details
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
    @include('admin.supplier.detail-modal')

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    @include('admin.supplier.supplier-detail-js')
</div>
@endsection


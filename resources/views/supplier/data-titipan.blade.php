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
                  <th>Barang</th>
                  <th>Jumlah</th>
                  <th>satuan</th>
                  <th>Harga Total</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($data as $value)
                   @csrf
                   <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{{$value->barang}}</td>
                     <td>{{$value->jumlah}}</td>
                     <td>{{$value->satuan}}</td>
                     <td>{{$value->total_harga}}</td>
                     <td>
                       <a href="" class="btn btn-secondary">Tambahkan</a>
                       <div class="btn btn-primary" href="{{route('supplier.detail',$value->id)}}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Detail
                      </div>
                      
                      <div class="modal" id="exampleModal" tabindex="-1">
                        <div class="modal-dialog modal-sm" role="document">
                          <div class="modal-content">
                            <button type="button" class="btn-close w-5 pl-5" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="modal-status bg-success"></div>
                            <div class="modal-body text-center text-success py-10">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-green icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="12" r="9" />
                                <path d="M9 12l2 2l4 -4" />
                              </svg>
                              <h3 class="text-primary">Detail</h3>
                            </div>
                            <div class="modal-footer">
                              <div class="w-100 flex">
                                <div class="flex">
                                  <p>Supplier : <span class="text-muted">{{$value->user->name}}</span></p> 
                                  <p>Barang : <span class="text-muted">{{$value->barang}}</span></p> 
                                  <p>Jumlah : <span class="text-muted">{{$value->jumlah}}</span> </p> 
                                  <p>Satuan : <span class="text-muted">{{$value->satuan}}</span></p> 
                                  <p>Harga : <span class="text-muted">{{$value->total_harga}}</span></p> 
                  
                                </div>
                              
                                  <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                              
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
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


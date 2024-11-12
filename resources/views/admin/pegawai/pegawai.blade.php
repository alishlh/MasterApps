@extends('layout.master-admin')
@section('content')

<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center mb-3">Form Data Supplier</h5>
        <div class="table-responsive">
          <table class="table text-nowrap align-middle mb-0">
            <thead>
                <tr>
                  <th>No.</th>
                  <th>Img</th>
                  <th>Name</th>
                  <th>email</th>
                  <th>alamat</th>
                  <th>Telp</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($data as $value)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>tyui</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->alamat}}</td>
                    <td>{{$value->telp}}</td>
                    <td>
                      {{$value->status}}
                    </td>
                    <td>
                      
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


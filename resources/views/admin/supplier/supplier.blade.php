@extends('layout.master-admin')
@section('content')

<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Form Data Supplier</h5>
        <div class="table-responsive">
          <button class="btn btn-primary m-1" type="button"><a class="text-white " href="{{route('supplier.create')}}">Create</a></button>
          <table class="table text-nowrap align-middle mb-0">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Alamat</th>
                    <th>Telp</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($data as $value)
                  <tr>
                      <td>{{$loop->iteration}}.</td>
                      <td>{{$value->name}}</td>
                      <td>{{$value->alamat}}</td>
                      <td>{{$value->telp}}</td>
                      <td>
                        <form action="{{route('supplier.delete',$value->id)}}" method="POST">
                          @csrf
                          <button  type="submit" href="" class="btn btn-danger" onclick="return confirn('Apakah anda yakin akan menghapus data')">Delete</button>                        </form>

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


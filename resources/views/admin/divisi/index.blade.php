@extends('layout.master-admin')

@section('content')

<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-uppercase tracking-wide text-center mb-3">Form Data Divisi</h5>
        <div class="table-responsive">
          <table class="table text-nowrap align-middle mb-0">
            <thead>
                <tr class="text-center">
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr class="text-center">
                        <td>{{$loop->iteration}} .</td>
                        <td>{{$item->name}}</td>

                        <td>{{$item->jabatan->jabatan}}</td>
                        <td><span class="badge" style="background-color: 
                        @if($item->status == 'non-aktif') #ff7976
                        @else($item->status == 'aktif') #5ddab4
                        @endif">{{$item->status}}</span></td>
                        
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
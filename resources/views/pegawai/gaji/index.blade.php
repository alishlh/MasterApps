@extends('layout.master-admin')

@section('content')

<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-uppercase tracking-wide text-center mb-3">Form Gaji</h5>
        <div class="table-responsive">
          <table class="table text-nowrap align-middle mb-0">
            <thead>
                <tr class="text-center">
                  <th>No.</th>
                  <th>Pegawai</th>
                  <th>Jabatan</th>
                  <th>Gaji</th>
                  <th>No Rekening</th>
                  <th>Status</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($gaji as $value)
                  <tr class="text-center">
                    <td>{{$loop->iteration}} .</td>
                    <td>{{$value->user->name}}</td>
                    <td>{{$value->jabatan->jabatan}}</td>
                    <td>Rp. {{$value->gaji}}</td>
                    
                    <td><span class="">{{$value->noRek}}</span></td>
                    <td><span style="background-color: 
                    @if($value->pemabayaran == 'tertunda') #ff7976
                    @else($value->pemabayaran == 'selesai') #5ddab4
                    @endif" class="badge">{{$value->pemabayaran}}</span></td>
                    
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
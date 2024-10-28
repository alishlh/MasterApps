@extends('layout.master-admin')
@section('content')
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Forms</h5>
        <div class="card">
          <div class="card-body">
            <form action="{{route('admin.supplier.update', $value->id)}}" method="POST">
                @csrf
                {{ method_field('PUT') }}
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" value="{{$value->name}}" class="form-control" id="name"required>
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" value="{{$value->alamat}}" class="form-control" id="alamat"required>
              </div>
              <div class="mb-3">
                <label for="telp" class="form-label">Telp</label>
                <input type="number" name="telp" value="{{$value->telp}}" class="form-control" id="telp"required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
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

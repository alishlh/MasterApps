@extends('layout.master-admin')
@section('content')
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center text-uppercase fw-semibold mb-4">Form Divisi</h5>
        
          <div class="card-body">
            <form action="{{url('admin/divisi/update/'. $pegawai->id)}}" method="POST">
              @csrf
              @method('PUT') {{-- Untuk mendukung HTTP PUT pada formulir --}}
              
              <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" value="{{$pegawai->name}}" class="form-control" id="name" readonly>
              </div>
              
              <div class="mb-3">
                <label for="jabatan"  class="form-label">Jabatan</label>
                <select class="form-select" name="jabatan_id" id="jabatan_id" arial-label="Default select example">
                    <option value="">- Jabatan -</option>
                    @foreach ($jabatan as $item)
                    <option class="item-select" value="{{$item->id}}">{{$item->jabatan}}</option>    
                    @endforeach
                </select>
            </div>
              <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" name="status" class="form-control" value="{{$pegawai->status}}" id="status"readonly>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
      </div>
    </div>

    
    
    <div class="py-6 px-6 text-center">
      <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
          class="pe-1 text-primary text-decoration-underline">Al Ishlah</a> Distributed by <a href="https://themewagon.com/" target="_blank"
          class="pe-1 text-primary text-decoration-underline">Ishlah Academy</a></p>
    </div>
</div>
@endsection

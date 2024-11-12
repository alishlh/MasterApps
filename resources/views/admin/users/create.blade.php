@extends('layout.master-admin')

@section('content')
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Forms</h5>
        <div class="card">
          <div class="card-body">
            <form action="{{route('admin.users.store')}}" method="POST">
                @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="email">
              </div>
              <div class="mb-3">
                <label for="img" class="form-label">Img</label>
                <input type="file" name="img" class="form-control" id="img">
              </div>
              <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select name="role" class="form-control" id="role">
                    <option value="">-- Role --</option>
                    <option value="admin">Admin</option>
                    <option value="supplier">Supplier</option>
                    <option value="pegawai">Pegawai</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat">
              </div>
              <div class="mb-3">
                <label for="telp" class="form-label">No Telpon</label>
                <input type="number" name="telp" class="form-control" id="telp">
              </div>
              <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
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
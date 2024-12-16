@extends('layout.master-admin')

@section('content')
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Forms Edit</h5>
        <div class="card">
          <div class="card-body">
            <form action="{{url('/admin/users/update/'. $user->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT') {{-- Untuk mendukung HTTP PUT pada formulir --}}
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" value="{{$user->name}}" name="name" class="form-control" id="name">
              </div>
              
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" value="{{$user->email}}" name="email" class="form-control" id="email">
              </div>
             
              <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select name="role" class="form-select" id="role">
                    <option value="">-- Role --</option>
                    <option value="admin">Admin</option>
                    <option value="supplier">Supplier</option>
                    <option value="pegawai">Pegawai</option>
                </select>
              </div>
             
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" value="{{$user->alamat}}" name="alamat" class="form-control" id="alamat">
              </div>
              <div class="mb-3">
                <label for="telp" class="form-label">No Telpon</label>
                <input type="number" value="{{$user->telp}}" name="telp" class="form-control" id="telp">
              </div>
              <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" value="{{$user->tgl_lahir}}" name="tgl_lahir" class="form-control" id="tgl_lahir">
              </div>
              <div class="mb-3">
                <label for="status" style="display: none" class="form-label">Status</label>
                <select name="status" class="form-select" style="display: none"  id="status">
                    <option value="">-- Status --</option>
                    <option value="aktif">Aktif</option>
                    <option value="non-aktif">Non - Aktif</option>
                </select>
              </div>
             

              
              <div class="mb-3">
                <label for="jabatan" style="display: none" class="form-label">Jabatan</label>
                <select class="form-select" name="jabatan_id" style="display: none" id="jabatan_id" arial-label="Default select example">
                    <option value="">- Jabatan -</option>
                    @foreach ($data as $item)
                    <option class="item-select" value="{{$item->id}}">{{$item->jabatan}}</option>    
                    @endforeach
                </select>
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

@section('script')
<script>


  document.getElementById('role').addEventListener('change', function () {
    const selectedValue = this.value;

    const jabatanLabel = document.querySelector('label[for="jabatan"]');
    const jabatanSelect = document.getElementById('jabatan_id');
    const statusLabel = document.querySelector('label[for="status"]');
    const statusSelect = document.getElementById('status');

    jabatanLabel.style.display = 'none';
    jabatanSelect.style.display = 'none';
    statusLabel.style.display = 'none';
    statusSelect.style.display = 'none';

    if (selectedValue === 'pegawai') {
      jabatanLabel.style.display = 'block';
      jabatanSelect.style.display = 'block';
      statusLabel.style.display = 'block';
      statusSelect.style.display = 'block';
    }
  })


</script>
@endsection
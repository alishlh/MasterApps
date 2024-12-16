@extends('layout.master-admin')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Tambah User Baru</h5>
                    <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Input Nama" id="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Input Email" id="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Input Password" id="password">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <select name="role" class="form-select" id="role">
                                <option value="">-- Role --</option>
                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="supplier" {{ old('role') == 'supplier' ? 'selected' : '' }}>Supplier</option>
                                <option value="pegawai" {{ old('role') == 'pegawai' ? 'selected' : '' }}>Pegawai</option>
                            </select>
                            @error('role')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Input Alamat" id="alamat" value="{{ old('alamat') }}">
                            @error('alamat')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="telp" class="form-label">No Telp</label>
                            <input type="number" name="telp" class="form-control" placeholder="Input No Telp" id="telp" value="{{ old('telp') }}">
                            @error('telp')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" placeholder="Input Tanggal Lahir" id="tgl_lahir" value="{{ old('tgl_lahir') }}">
                            @error('tgl_lahir')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="status" style="display: none" class="form-label">Status</label>
                            <select name="status" class="form-select" style="display: none"  id="status">
                                <option value="">-- Status --</option>
                                <option value="aktif">Aktif</option>
                                <option value="non-aktif">Non-Aktif</option>
                            </select>
                            @error('status')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jabatan_id" style="display: none" class="form-label">Jabatan</label>
                            <select class="form-select" name="jabatan_id" style="display: none" id="jabatan_id" aria-label="Default select example">
                                <option value="">- Jabatan -</option>
                                @foreach ($data as $item)
                                    <option class="item-select" value="{{ $item->id }}" {{ old('jabatan_id') == $item->id ? 'selected' : '' }}>{{ $item->jabatan }}</option>
                                @endforeach
                            </select>
                            @error('jabatan_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
        </div>
    </div>

    <div class="py-6 px-6 text-center">
        <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">Al Ishlah</a> Distributed by <a href="https://themewagon.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">Ishlah Academy</a></p>
    </div>
</div>
@endsection

@section('script')
<script>
    document.getElementById('role').addEventListener('change', function () {
        const selectedValue = this.value;

        const jabatanLabel = document.querySelector('label[for="jabatan_id"]');
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
    });
</script>
@endsection

@extends('layout.master-admin')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center text-uppercase fw-semibold mb-4">Form Barang</h5>
            <form method="POST" action="{{ url('admin/barang/update/'. $barang->id) }}">
                @csrf
                @method('PUT') {{-- Untuk mendukung HTTP PUT pada formulir --}}
                
                <div class="mb-3">
                    <label for="supplier" class="form-label">Supplier</label>
                    <input type="text" name="supplier" value="{{ $barang->user->name }}" class="form-control" id="supplier" readonly>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Nama Barang</label>
                    <input type="text" name="name" value="{{ $barang->name }}" class="form-control" id="name" readonly>
                </div>

                <div class="mb-3">
                    <label for="stok" class="form-label">Jumlah Stok</label>
                    <input type="number" name="stok" value="{{ $barang->stok }}" class="form-control" id="stok" required>
                </div>

                <div class="mb-3">
                    <label for="harga_jual" class="form-label">Harga Jual</label>
                    <input type="number" name="harga_jual" value="{{ $barang->harga_jual }}" class="form-control" id="harga_jual" required>
                </div>

                <div class="mb-3">
                    <label for="satuan" class="form-label">Satuan</label>
                    <input type="text" name="satuan" value="{{ $barang->satuan }}" class="form-control" id="satuan" required>
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

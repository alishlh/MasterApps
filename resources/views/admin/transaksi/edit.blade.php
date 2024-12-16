@extends('layout.master-admin')
@section('content')
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center text-uppercase fw-semibold mb-4">Form Transaksi</h5>
        
        <div class="card-body">
            <form method="POST" action="{{ url('admin/transaksi/update/' . $transaksi->id) }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Barang</label>
                    <input type="text" name="name" value="{{ $transaksi->barang->name }}" class="form-control" id="name" readonly>
                </div>
                <div class="mb-3">
                    <label for="harga_jual" class="form-label">Harga</label>
                    <input type="number" value="{{ $transaksi->barang->harga_jual }}" name="harga_jual" class="form-control" id="harga_jual" readonly>
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" value="{{ $transaksi->jumlah }}" name="jumlah" class="form-control" id="jumlah" required>
                </div>
                <div class="mb-3">
                    <label for="satuan" class="form-label">Satuan</label>
                    <input type="text" value="{{ $transaksi->barang->satuan }}" name="satuan" class="form-control" id="satuan" readonly>
                </div>
                <div class="mb-3">
                    <label for="total" class="form-label">Total</label>
                    <input type="number" value="{{ $transaksi->total }}" name="total" class="form-control" id="total" readonly>
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

@section('script')
<script>
    document.getElementById('jumlah').addEventListener('input', function () {
        const jumlah = parseFloat(this.value) || 0; // Jumlah dari input
        const harga = parseFloat(document.getElementById('harga_jual').value) || 0; // Harga dari DOM
        const total = jumlah * harga; // Menghitung total

        document.getElementById('total').value = total.toFixed(0); // Menampilkan hasil
    });
</script>
@endsection

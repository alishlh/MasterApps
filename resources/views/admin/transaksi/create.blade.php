@extends('layout.master-admin')

@section('content')
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center text-uppercase fw-semibold mb-4">Form Transaksi</h5>
        
        <div class="card-body">
            <form id="dataForm" method="POST" action="{{ route('admin.transaksi.store') }}">
              @csrf
              
              <div class="mb-3">
                <label for="barang" class="form-label">Barang</label>
                <select class="form-select" name="barang_id" id="barang_id" aria-label="Pilih Barang">
                  <option value="">- Pilih Barang -</option>
                  @foreach ($barang as $item)
                    <option value="{{ $item->id }}" data-harga="{{ $item->harga_jual }}" data-satuan="{{ $item->satuan }}">
                        {{ $item->name }}
                    </option>
                  @endforeach
                </select>
              </div>

              <div class="mb-3">
                <label for="harga_jual" class="form-label">Harga</label>
                <input type="number" name="harga_jual" class="form-control" id="harga_jual" readonly>
              </div>

              <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" name="jumlah" class="form-control" id="jumlah">
              </div>

              <div class="mb-3">
                <label for="satuan" class="form-label">Satuan</label>
                <input type="text" name="satuan" class="form-control" id="satuan" readonly>
              </div>

              <div class="mb-3">
                <label for="total_harga" class="form-label">Total Harga</label>
                <input type="number" name="total" class="form-control" id="total" readonly>
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
@endsection

@section('script')
<script>
   // Event listener ketika memilih barang
   document.getElementById('barang_id').addEventListener('change', function () {
    const selectedOption = this.options[this.selectedIndex];
    const harga_jual = selectedOption.getAttribute('data-harga');
    const satuan = selectedOption.getAttribute('data-satuan');

    // Update harga dan satuan sesuai dengan pilihan barang
    document.getElementById('harga_jual').value = harga_jual || '';
    document.getElementById('satuan').value = satuan || '';
    
    // Reset total harga
    document.getElementById('total').value = '';
   });

   // Event listener untuk menghitung total harga
   document.getElementById('jumlah').addEventListener('input', function () {
    const jumlah = parseFloat(this.value) || 0;  // Ambil jumlah barang
    const harga = parseFloat(document.getElementById('harga_jual').value) || 0;  // Ambil harga barang
    const total = jumlah * harga;  // Hitung total harga
    document.getElementById('total').value = total;  // Tampilkan total harga di field
});
</script>
@endsection

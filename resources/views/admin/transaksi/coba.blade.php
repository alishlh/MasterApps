@extends('layout.master-admin')
@section('content')
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center text-uppercase fw-semibold mb-4">Form Transaksi</h5>
        
          <div class="card-body">
            <form id="dataForm">
              <div class="mb-3">
                <label for="tgl_transaksi" class="form-label">Tanggal Transaksi</label>
                <input type="date" name="tgl_transaksi" class="form-control" id="tgl_transaksi">
              </div>
              <div class="mb-3">
                <label for="barang" class="form-label">Barang</label>
               
                <select class="form-select" name="barang_id"  id="barang_id" aria-label="Default select example">
                  @foreach ($data as $item)
                  <option class="item-select" onclick="" value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Harga</label>
                <input type="number" name="harga_jual" class="form-control" id="harga_jual" readonly>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Jumlah</label>
                <input type="number" name="jumlah" class="form-control" id="jumlah">
              </div>
              <div class="mb-3">
                <label for="img" class="form-label">Satuan</label>
                <input type="text" name="satuan" class="form-control" id="satuan" readonly>
              </div>
              <div class="mb-3">
                <label for="img" class="form-label">total</label>
                <input type="text"  name="total_harga" class="form-control" id="total_harga" readonly>
              </div>
             
              {{-- <div class="mb-3">
                <label for="img" class="form-label">Total</label>
                <input type="number" name="total_harga" class="form-control" id="total_harga">
              </div> --}}
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        
        <h5 class="card-title text-center text-uppercase fw-semibold mb-4">Forms Transaksi</h5>
  <form method="POST" action="{{route('admin.transaksi.store')}}">
    @csrf
    <button type="submit" class="btn btn-primary">+</button>
        <table class="table text-nowrap align-middle mb-0">
          <thead>
              <tr>
                <th>Tgl.</th>
                <th>Kode Transaksi</th>
                <th>kode Barang</th>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Harga</th>
                <th>Total</th>
                <th>Action</th>
              </tr>
          </thead>
          <tbody id="dataTable">
          </tbody>
        </table>
      </div>
    </div>
  </form>
    
    <div class="py-6 px-6 text-center">
      <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
          class="pe-1 text-primary text-decoration-underline">Al Ishlah</a> Distributed by <a href="https://themewagon.com/" target="_blank"
          class="pe-1 text-primary text-decoration-underline">Ishlah Academy</a></p>
    </div>
</div>
@endsection

@section('script')
<script>
   document.getElementById('barang_id').addEventListener('change', function () {
    const barangId = this.value; // Ambil ID barang dari dropdown

    if (barangId) {
        fetch(`/get-barang/${barangId}`) // Pastikan URL endpoint sesuai
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Isi field dengan data yang diterima
                    document.getElementById('harga_jual').value = data.data.harga_jual || '';
                    document.getElementById('satuan').value = data.data.satuan || '';
                } else {
                    alert('Data tidak ditemukan!');
                }
            })
            .catch(error => console.error('Error:', error));
    } else {
        // Reset field jika tidak ada barang yang dipilih
        document.getElementById('harga_jual').value = '';
        document.getElementById('satuan').value = '';
    }
});

const form = document.getElementById('dataForm');
const tableBody = document.getElementById('dataTable');
let counter = 1;

form.addEventListener('submit', function (event) {
    event.preventDefault();   // Mencegah form refresh halaman

    // Ambil nilai dari form
    const barang = document.getElementById('barang_id');
    const barangId = barang.value;
    const namaBarang = barang.options[barang.selectedIndex].text;  
    const jumlah = document.getElementById('jumlah').value || 0;
    const satuan = document.getElementById('satuan').value || '-';
    const hargaJual = document.getElementById('harga_jual').value || 0;
    const total = document.getElementById('total_harga').value || 0;
    const tglTransaksi = document.getElementById('tgl_transaksi').value;

    // Validasi input
    if (!barangId || jumlah <= 0 || hargaJual <= 0 || !tglTransaksi) {
        alert('Harap lengkapi semua field');
        return;
    }

    // Kirim data ke backend menggunakan AJAX
    fetch('{{ route('admin.transaksi.store') }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            tgl_transaksi: tglTransaksi,
            barang_id: barangId,
            jumlah: jumlah,
            harga_jual: hargaJual,
            total_harga: total
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Transaksi berhasil disimpan');

            // Tambahkan data ke tabel jika berhasil
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${tglTransaksi}</td>
                <td>${counter}</td>
                <td>${barangId}</td>
                <td>${namaBarang}</td>
                <td>${jumlah}</td>
                <td>${satuan}</td>
                <td>${hargaJual}</td>
                <td>${total}</td>
                <td>
                    <button class="btn btn-danger btn-sm" onclick="this.closest('tr').remove()">Hapus</button>
                </td>
            `;
            tableBody.appendChild(row);

            // Reset form
            form.reset();
            document.getElementById('total_harga').value = ''; // Reset field total
        } else {
            alert('Terjadi kesalahan saat menyimpan data');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Terjadi kesalahan. Silakan coba lagi.');
    });
});

document.getElementById('jumlah').addEventListener('input', function () {
    const jumlah = parseFloat(this.value) || 0; // Ambil nilai jumlah
    const harga = parseFloat(document.getElementById('harga_jual').value) || 0; // Ambil nilai harga
    const total = jumlah * harga; // Hitung total
    document.getElementById('total_harga').value = total; // Tampilkan di field total
});



</script>
@endsection
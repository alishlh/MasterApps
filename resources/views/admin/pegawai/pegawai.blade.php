@extends('layout.master-admin')
@section('content')

<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center mb-3">Form Data Pegawai</h5>
        <div class="table-responsive">
          <table class="table text-nowrap align-middle mb-0">
            <thead>
                <tr>
                  <th>No.</th>
                  <th>Img</th>
                  <th>Name</th>
                  
                  <th>Status</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($data as $value)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>tyui</td>
                    <td>{{$value->name}}</td>
                    
                    <td>
                      <span style="background-color: 
                      @if($value->status =='non-aktif') #ff7976
                      @else($value->status == 'aktif') #5ddab4
                      @endif" class="badge">{{ strtoupper ($value->status)}}</span>
                    </td>
                    <td>
                      <button type="button" class="btn btn-primary btn-sm" 
                          onclick="showPegawaiDetail({{ $value->id }})"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-search">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h4.5m7.5 -10v-4a2 2 0 0 0 -2 -2h-2" />
                            <path d="M9 5a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2" />
                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M20.2 20.2l1.8 1.8" />
                          </svg></button>

                          <div class="modal fade" id="detailModal" tabindex="-10" aria-labelledby="detailModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="detailModalLabel">Detail Barang</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Image:</strong> <span id="imgPegawai"></span></p>
                                        <p><strong>Nama :</strong> <span id="PegawaiName"></span></p>
                                        <p><strong>Jabatan :</strong> <span id="Jabatan"></span></p>
                                        <p><strong>Email :</strong> <span id="email"></span></p>
                                        <p><strong>Tanggal Lahir :</strong> <span id="tglLahir"></span></p>
                                        <p><strong>Alamat :</strong> <span id="alamat"></span></p>
                                        <p><strong>Telp :</strong> <span id="telp"></span></p>
                                        <p><strong>Status :</strong> <span id="status"></span></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </td>
                      
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

@section('script')
    <script>
      function showPegawaiDetail(id) {
    fetch(`/get-user/${id}`)
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Isi data ke dalam modal
               
                document.getElementById('imgPegawai').textContent = data.data.img;
                document.getElementById('PegawaiName').textContent = data.data.name;
                document.getElementById('email').textContent = data.data.email;
                document.getElementById('tglLahir').textContent = data.data.tgl_lahir;
                document.getElementById('alamat').textContent = data.data.alamat;
                document.getElementById('telp').textContent = data.data.telp;
                document.getElementById('status').textContent = data.data.status;

                if (data.data.jabatan) {
                    document.getElementById('Jabatan').textContent = data.data.jabatan.jabatan;
                } else {
                    document.getElementById('Jabatan').textContent = 'Tidak ada data';
                }

                
                // Tampilkan modal
                const detailModal = new bootstrap.Modal(document.getElementById('detailModal'));
                detailModal.show();
            } else {
                alert('Data tidak ditemukan');
            }
        })
        .catch(error => console.error('Error:', error));
}
function showBarangDetail(id) {
    $.ajax({
        url: `/get-user/${id}`,
        method: 'GET',
        success: function (response) {
            if (response.success) {
                $('#imgPegawai').text(response.data.name);
                $('#PegawaiName').text(response.data.harga_jual);
                $('#email').text(response.data.satuan);
                $('#tglLahir').text(response.data.tgl_lahir);
                $('#alamat').text(response.data.alamat);
                $('#telp').text(response.data.telp);
                $('#status').text(response.data.status);


                if (response.data.jabatan) {
                    $('#Jabatan').text(response.data.jabatan.jabatan);
                } else {
                    $('#Jabatan').text('Tidak ada data');
                }

                $('#detailModal').modal('show');
            } else {
                alert('Data tidak ditemukan');
            }
        },
        error: function (xhr) {
            console.error(xhr.responseText);
        }
    });
}

    </script>
@endsection


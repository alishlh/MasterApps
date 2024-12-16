@extends('layout.master-admin')

@section('content')
    <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Form Gaji</h5>
        
          <div class="card-body">
            <form action="{{route('admin.gaji.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                   
                    <select class="form-select" name="user_id" id="user_id" aria-label="Default select example">
                      <option value="">- Pilih Pegawai -</option>
                      @foreach ($users as $item)
                      <option class="item-select" onclick="" value="{{$item->id}}">{{$item->name}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                  <select class="form-select" name="jabatan_id" id="jabatan_id" aria-label="Default select example" readonly>
                    @foreach ($jabatan as $item)
                    <option disabled class="item-select" onclick="" value="{{$item->id}}">{{$item->jabatan}}</option>
                    @endforeach
                  </select>
                  </div>
                  <div class="mb-3">
                    <label for="gaji" class="form-label">Gaji</label>
                    <input type="number" class="form-control" id="gaji" name="gaji" value="{{ old('gaji') }}" required>
                </div>

                <div class="mb-3">
                    <label for="noRek" class="form-label">Nomor Rekening</label>
                    <input type="text" class="form-control" id="noRek" name="noRek" value="{{ old('noRek') }}" required>
                </div>

    
              <div class="mb-3">
                <label for="pemabayaran" class="form-label">Status</label>
                <select name="pemabayaran" class="form-select" id="pemabayaran">
                    <option value="">- Pilih Status -</option>
                    <option value="tertunda">Tertunda</option>
                    <option value="selesai">Selesai</option>
                </select>
              </div>
             
              
              <button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-download">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                <path d="M7 11l5 5l5 -5" />
                <path d="M12 4l0 12" />
              </svg></button>
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
        document.getElementById('user_id').addEventListener('change', function () {
          const userId = this.value; //ambiil id dari dropdown

          if (userId) {
            fetch(`/get-user/${userId}`)
              .then(response => response.json())
              .then(data => {
                if (data.success) {
                  document.getElementById('jabatan_id').value = data.data.jabatan_id || '';
                }else{
                  alert('Data tidak ditemukan!');
                }
              })
              .catch(error => console.error('Error:', error));
          }else{
            document.getElementById('jabatan_id').value = '';
          }

        });
    </script>
@endsection


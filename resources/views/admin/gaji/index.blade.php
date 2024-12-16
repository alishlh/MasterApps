@extends('layout.master-admin')

@section('content')

<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
        <h5 class="card-title text-uppercase tracking-wide text-center mb-3">Form Data Gaji</h5>

        <a href="{{route('admin.gaji.create')}}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-folder-plus">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M12 19h-7a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2h4l3 3h7a2 2 0 0 1 2 2v3.5" />
          <path d="M16 19h6" />
          <path d="M19 16v6" />
        </svg></a>
        <div class="table-responsive">
          <table class="table text-nowrap align-middle mb-0">
            <thead>
                <tr class="text-center">
                  <th>No.</th>
                  <th>Tanggal.</th>
                  <th>Pegawai</th>
                  <th>Jabatan</th>
                  <th>Gaji</th>
                  <th>No Rekening</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($gaji as $value)
                  <tr class="text-center">
                    <td>{{$loop->iteration}} .</td>
                    <td>{{$value->created_at}} .</td>
                    <td>{{$value->user->name}}</td>
                    <td>{{$value->jabatan->jabatan}}</td>
                    <td>Rp. {{$value->gaji}}</td>
                    
                    <td><span class="">{{$value->noRek}}</span></td>
                    <td><span style="background-color: 
                    @if($value->pemabayaran == 'tertunda') #ff7976
                    @else($value->pemabayaran == 'selesai') #5ddab4
                    @endif" class="badge">{{$value->pemabayaran}}</span></td>
                    <td>
                      <form method="POST" action="{{route('admin.gaji.destroy', $value->id )}}">
                        @csrf  
                        <button type="submit" class="btn btn-sm btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M4 7l16 0" />
                          <path d="M10 11l0 6" />
                          <path d="M14 11l0 6" />
                          <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                          <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                        </svg></button>
                        <a href="{{route('admin.gaji.edit', $value->id)}}" type="button" class="btn btn-sm btn-warning">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                            <path d="M16 5l3 3" />
                          </svg>
                        </a>
                      </form>
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

document.querySelectorAll('[data-bs-toggle="modal"]').forEach((button) => {
    button.addEventListener("click", (e) => {
        const userId = button.dataset.userId;
        const modalId = `#editGajiModal${userId}`;
        const modal = document.querySelector(modalId);
        if (modal) {
            // Isi data ke dalam modal
            const user = JSON.parse(button.dataset.user);
            populateModal(modal, user);
        }
    });
});
    </script>
@endsection
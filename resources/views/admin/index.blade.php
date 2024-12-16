@extends('layout.master-admin')

@section('content')
<div class="container-fluid d-flex gap-2">
<div class="card col-md-6">
    <div class="card-body">
        <h3>All Users</h3>
        <h3>5</h3>
    </div>
</div>
<div class="card col-md-6">
    <div class="card-body">

        <h3>Supplier</h3>
        <div class="d-flex gap-3">

        
        <div class="bg-primary rounded px-2 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
              </svg>
        </div>
        <h1>10</h1>
    </div>
    </div>
</div>
</div>
<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <div class="container mt-5">
            <h2 class="text-center">Pie Chart Bootstrap dengan Chart.js</h2>
            <div class="row justify-content-center">
              <div class="col-md-6">
                <!-- Canvas untuk Pie Chart -->
                <canvas id="myPieChart"></canvas>
              </div>
            </div>
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
        // Script untuk menggambar Pie Chart menggunakan Chart.js
        var ctx = document.getElementById('myPieChart').getContext('2d');
        var myPieChart = new Chart(ctx, {
          type: 'pie', // Jenis chart: pie chart
          data: {
            labels: ['Red', 'Blue', 'Yellow'], // Label untuk masing-masing bagian
            datasets: [{
              label: 'Pie Chart Example',
              data: [300, 50, 100], // Nilai untuk masing-masing bagian
              backgroundColor: ['#FF0000', '#0000FF', '#FFFF00'], // Warna masing-masing bagian
              borderColor: ['#FF0000', '#0000FF', '#FFFF00'], // Warna border bagian
              borderWidth: 1
            }]
          },
          options: {
            responsive: true, // Menyesuaikan ukuran chart dengan ukuran layar
            plugins: {
              legend: {
                position: 'top', // Posisi legenda chart
              },
              tooltip: {
                callbacks: {
                  label: function(tooltipItem) {
                    return tooltipItem.label + ': ' + tooltipItem.raw + ' units';
                  }
                }
              }
            }
          }
        });
    </script>
@endsection

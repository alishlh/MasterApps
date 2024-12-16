@extends('layout.master-admin')
@section('content')
<script src=
"https://d3js.org/d3.v4.min.js"></script>
<script src=
"https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.js"></script>
<link rel="stylesheet"
      href=
"https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.css" />
<link rel=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
      type="text/css" />
 
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
</script>
 
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.1/Chart.min.js">
</script>
 
<div class="container-fluid">
  <div class="row">
    <div class="row">
      <div class="col-sm-3 mb-3 mb-sm-0">
        <div class="card shadow">
          <div class="card-body d-flex gap-5">
            <div class="">
              <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
              </svg>
            </div>
           
            <div class="col-xs-12">
              <h5 class="card-title" style="color: blue">Users</h5>
              <h5 style="color: blue">{{$users->count()}}</h5>
            </div>
            

          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card shadow">
          <div class="card-body d-flex gap-5">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" style="color: rgb(0, 191, 255)" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-building-bank">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 21l18 0" />
                <path d="M3 10l18 0" />
                <path d="M5 6l7 -3l7 3" />
                <path d="M4 10l0 11" />
                <path d="M20 10l0 11" />
                <path d="M8 14l0 3" />
                <path d="M12 14l0 3" />
                <path d="M16 14l0 3" />
              </svg>
            </div>
            <div>
              <div>
                <h5 style="color: rgb(0, 191, 255)" class="card-title">Supplier</h5>
                <h5 style="color: rgb(0, 191, 255)">{{$supplier}}</h5>
              </div>
              
            </div>
           
           
          </div>
        </div>
      </div>
     
    </div>
    
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="col-xs-12 text-center">
            <h2>Donut Chart</h2>
        </div>
     
        <div id="donut-chart"></div>
     
        <script>
            let chart = bb.generate({
                data: {
                    columns: [
                        ["users", <?= $users->count() ?> ],
                        ["supplier", <?= $supplier ?>],
                    ],
                    type: "donut",
                    onclick: function (d, i) {
                        console.log("onclick", d, i);
                    },
                    onover: function (d, i) {
                        console.log("onover", d, i);
                    },
                },
                donut: {
                    title: "{{$users->count()}}",
                },
                bindto: "#donut-chart",
            });
        </script>
        </div>
      </div>
    </div>

    
   
   
    <div class="py-6 px-6 text-center">
      <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
          class="pe-1 text-primary text-decoration-underline">AdminMart.com</a>Distributed by <a
          href="https://themewagon.com/" target="_blank"
          class="pe-1 text-primary text-decoration-underline">ThemeWagon</a></p>
    </div>
</div>
  @endsection
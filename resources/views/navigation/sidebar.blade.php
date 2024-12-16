<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="{{route('admin.index')}}" class="d-flex text-nowrap logo-img">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-building-store">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M3 21l18 0" />
            <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
            <path d="M5 21l0 -10.15" />
            <path d="M19 21l0 -10.15" />
            <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
          </svg> 
         <div>
          <h4 class="text-uppercase tracking-wide">Master</h4>
         </div>
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <hr class="mx-3">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
            <span class="hide-menu">Mall</span>
          </li>
          <li class="sidebar-item {{request()->routeIs('admin.index') ? 'active' : ''}}">
            <a class="sidebar-link" href="{{route('admin.index')}}" aria-expanded="false">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-home">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                  <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                  <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                </svg>
              <span class="hide-menu"> Dashboard</span>
            </a>
          </li>
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
            <span class="hide-menu">Data</span>
          </li>
          <li class="sidebar-item {{request()->routeIs('users') ? 'active' : ''}}">
            <a class="sidebar-link" href="{{route('users')}}" aria-expanded="false">
              <span>
               
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                  <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                  <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                </svg>
              </span>
              <span class="hide-menu">Users</span>
            </a>
          </li>
          <li class="sidebar-item {{ request()->routeIs('admin.pegawai.pegawai') }}">
            <a class="sidebar-link" href="{{route('admin.pegawai.pegawai')}}" aria-expanded="false">
              <span>

                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                  </svg>
              </span>
              <span class="hide-menu">Pegawai</span>
            </a>
          </li>
          <li class="sidebar-item {{ request()->routeIs('users.supplier') ? 'active' : '' }} ">
            <a class="sidebar-link" href="{{route('users.supplier')}}" aria-expanded="false">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-building-bank">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M3 21l18 0" />
                  <path d="M3 10l18 0" />
                  <path d="M5 6l7 -3l7 3" />
                  <path d="M4 10l0 11" />
                  <path d="M20 10l0 11" />
                  <path d="M8 14l0 3" />
                  <path d="M12 14l0 3" />
                  <path d="M16 14l0 3" />
                </svg>              </span>
              <span class="hide-menu">Supplier</span>
            </a>
          </li>
          
         
          <li class="nav-small-cap">
            <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-6" class="fs-6"></iconify-icon>
            <span class="hide-menu">Barang</span>
          </li>
          <li class="sidebar-item {{request()->routeIs('admin.barang.index') ? 'active' : ''}}">
            <a class="sidebar-link" href="{{route('admin.barang.index')}}" aria-expanded="false">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-packages">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M7 16.5l-5 -3l5 -3l5 3v5.5l-5 3z" />
                  <path d="M2 13.5v5.5l5 3" />
                  <path d="M7 16.545l5 -3.03" />
                  <path d="M17 16.5l-5 -3l5 -3l5 3v5.5l-5 3z" />
                  <path d="M12 19l5 3" />
                  <path d="M17 16.5l5 -3" />
                  <path d="M12 13.5v-5.5l-5 -3l5 -3l5 3v5.5" />
                  <path d="M7 5.03v5.455" />
                  <path d="M12 8l5 -3" />
                </svg>
              </span>
              <span class="hide-menu">Stok</span>
            </a>
          </li>
          <li class="sidebar-item {{request()->routeIs('admin.barangMasuk.index') ? 'active' : ''}}">
            <a class="sidebar-link" href="{{route('admin.barangMasuk.index')}}" aria-expanded="false">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-package-import">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M12 21l-8 -4.5v-9l8 -4.5l8 4.5v4.5" />
                  <path d="M12 12l8 -4.5" />
                  <path d="M12 12v9" />
                  <path d="M12 12l-8 -4.5" />
                  <path d="M22 18h-7" />
                  <path d="M18 15l-3 3l3 3" />
                </svg>
              </span>
              <span class="hide-menu">Barang masuk</span>
            </a>
          </li>
          <li class="sidebar-item {{ request()->routeIs('admin.transaksi') ? 'active' : '' }}">
            <a class="sidebar-link " href="{{route('admin.transaksi')}}" aria-expanded="false">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-credit-card">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M3 5m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
                  <path d="M3 10l18 0" />
                  <path d="M7 15l.01 0" />
                  <path d="M11 15l2 0" />
                </svg>
              </span>
              <span class="hide-menu">Transaksi</span>
            </a>
          </li>
          <li class="nav-small-cap">
            <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4" class="fs-6"></iconify-icon>
            <span class="hide-menu">Administrasi</span>
          </li>
          <li class="sidebar-item {{request()->routeIs('admin.gaji') ? 'active' : ''}}">
            <a class="sidebar-link" href="{{route('admin.gaji')}}" aria-expanded="false">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-moneybag">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M9.5 3h5a1.5 1.5 0 0 1 1.5 1.5a3.5 3.5 0 0 1 -3.5 3.5h-1a3.5 3.5 0 0 1 -3.5 -3.5a1.5 1.5 0 0 1 1.5 -1.5z" />
                  <path d="M4 17v-1a8 8 0 1 1 16 0v1a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                </svg>
              </span>
              <span class="hide-menu">Gaji</span>
            </a>
          </li>
          <li class="sidebar-item {{request()->routeIs('admin.divisi.index') ? 'active' : ''}}">
            <a class="sidebar-link" href="{{route('admin.divisi.index')}}" aria-expanded="false">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-password-user">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M12 17v4" />
                  <path d="M10 20l4 -2" />
                  <path d="M10 18l4 2" />
                  <path d="M5 17v4" />
                  <path d="M3 20l4 -2" />
                  <path d="M3 18l4 2" />
                  <path d="M19 17v4" />
                  <path d="M17 20l4 -2" />
                  <path d="M17 18l4 2" />
                  <path d="M9 6a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                  <path d="M7 14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2" />
                </svg>
              </span>
              <span class="hide-menu">Pembagian pekerjaan</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-exclamation-circle">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                  <path d="M12 9v4" />
                  <path d="M12 16v.01" />
                </svg>
              </span>
              <span class="hide-menu">Report</span>
            </a>
          </li>
        </ul>
        
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>
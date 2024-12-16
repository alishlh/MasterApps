<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="{{route('pegawai.dashboard')}}" class="text-nowrap logo-img">
          <img src="../assets/images/logos/logo-light.svg" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
            <span class="hide-menu">Mall</span>
          </li>
          <li class="sidebar-item {{ request()->routeIs('pegawai.dashboard') ? 'active' : '' }}">
            <a class="sidebar-link" href="{{route('pegawai.dashboard')}}" aria-expanded="false">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-home">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                  <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                  <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                </svg>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
            <span class="hide-menu">Data</span>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link" href="{{route('pegawai.data')}}" aria-expanded="false">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-user">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" />
                  <path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z" />
                </svg>
              </span>
              <span class="hide-menu">Your Data</span>
            </a>
          </li>
          <li class="sidebar-item  {{ request()->routeIs('pegawai.gaji.index') ? 'active' : '' }}">
            <a class="sidebar-link" href="{{route('pegawai.gaji.index')}}" aria-expanded="false">
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
              </span>
              <span class="hide-menu">Gaji</span>
            </a>
          </li>
          <li class="sidebar-item {{ request()->routeIs('pegawai.transaksi.index') ? 'active' : '' }}">
            <a class="sidebar-link" href="{{route('pegawai.transaksi.index')}}" aria-expanded="false">
              <span>
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-credit-card">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M3 5m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
                  <path d="M3 10l18 0" />
                  <path d="M7 15l.01 0" />
                  <path d="M11 15l2 0" />
                </svg>
              </span>
              </span>
              <span class="hide-menu">Transaksi</span>
            </a>
          </li>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="{{route('admin.index')}}" class="text-nowrap logo-img">
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
          <li class="sidebar-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">
            <a class="sidebar-link" href="{{route('admin.index')}}" aria-expanded="false">
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
            <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-6" class="fs-6"></iconify-icon>
            <span class="hide-menu">Titipan</span>
          </li>
          <li class="sidebar-item {{ request()->routeIs('supplier.data-titipan') ? 'active' : '' }}">
            <a class="sidebar-link" href="{{route('supplier.data-titipan')}}" aria-expanded="false">
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
              </span>
              <span class="hide-menu">Barang</span>
            </a>
          </li>
          <li class="sidebar-item {{ request()->routeIs('supplier.create') ? 'active' : '' }}">
            <a class="sidebar-link" href="{{route('supplier.create')}}" aria-expanded="false">
              <span>
                <iconify-icon icon="solar:login-3-bold-duotone" class="fs-6"></iconify-icon>
              </span>
              <span class="hide-menu">Ajukan Titipan</span>
            </a>
          </li>
         
          <li class="nav-small-cap">
            <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4" class="fs-6"></iconify-icon>
            <span class="hide-menu">Administrasi</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
              <span>
                <iconify-icon icon="solar:sticker-smile-circle-2-bold-duotone" class="fs-6"></iconify-icon>
              </span>
              <span class="hide-menu">Story</span>
            </a>
          </li>
          
        </ul>
      
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>
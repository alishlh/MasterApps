<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="./index.html" class="text-nowrap logo-img">
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
                <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
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
                <iconify-icon icon="solar:login-3-bold-duotone" class="fs-6"></iconify-icon>
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
              <span class="hide-menu">Pembukuan Keuangan</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
              <span>
                <iconify-icon icon="solar:planet-3-bold-duotone" class="fs-6"></iconify-icon>
              </span>
              <span class="hide-menu">Pembagian pekerjaan</span>
            </a>
          </li>
        </ul>
      
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daddy Kost | Dashboard</title>
  <link rel="shortcut icon" type="image/png" href="backend/images/logos/logo.jpeg" />
  <link rel="stylesheet" href="{{ asset ('backend/css/styles.min.css')}}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="{{ asset ('backend/images/logos/ok.jpg')}}" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ URL::to('home')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Data</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ URL::to('admin/kategori/')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-category-2"></i>
                </span>
                <span class="hide-menu">Kategori</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ URL::to('admin/kamar/')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-bed"></i>
                </span>
                <span class="hide-menu">Kamar</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ URL::to('admin/penghuni/')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-users"></i>
                </span>
                <span class="hide-menu">Penghuni</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ URL::to('admin/transaksi/')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-file-dollar"></i>
                </span>
                <span class="hide-menu">Transaksi</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ URL::to('admin/inventaris/')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-box"></i>
                </span>
                <span class="hide-menu">Inventaris</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ URL::to('admin/menu/')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-salad"></i>
                </span>
                <span class="hide-menu">Menu Makanan</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ URL::to('admin/pesanan/')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-clipboard-list"></i>
                </span>
                <span class="hide-menu">Pesanan</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Alert</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ URL::to('admin/pengaduan/')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-triangle"></i>
                </span>
                <span class="hide-menu">Pengaduan</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    @yield('content')
  </div>
  <script src="https://kit.fontawesome.com/1bfb16cd9a.js" crossorigin="anonymous"></script>
  <script src="{{ asset ('backend/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset ('backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset ('backend/js/sidebarmenu.js')}}"></script>
  <script src="{{ asset ('backend/js/app.min.js')}}"></script>
  <script src="{{ asset ('backend/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{ asset ('backend/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{ asset ('backend/js/dashboard.js')}}"></script>
</body>

</html>
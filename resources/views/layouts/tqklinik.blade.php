<!DOCTYPE html><!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io/product/free-bootstrap-admin-template/
* Copyright (c) 2023 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
--><!-- Breadcrumb-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Aplikasi Web Klinik</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('qklinik') }}/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('qklinik') }}/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('qklinik') }}/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('qklinik') }}/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('qklinik') }}/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('qklinik') }}/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('qklinik') }}/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('qklinik') }}/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('qklinik') }}/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('qklinik') }}/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('qklinik') }}/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('qklinik') }}/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('qklinik') }}/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('qklinik') }}/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{ asset('qklinik') }}/vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="{{ asset('qklinik') }}/css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="{{ asset('qklinik') }}/css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="{{ asset('qklinik') }}/css/examples.css" rel="stylesheet">
    <link href="{{ asset('qklinik') }}/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
  </head>
  <body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        
          <h3>Aplikasi Klinik</h3>

      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="home">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('qklinik') }}/vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
            </svg> Dashboard</a></li>
       
        <li class="nav-title">Data</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              
            </svg> Data Klinik</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="dokter"><span class="nav-icon"></span> Data Dokter</a></li>
            <li class="nav-item"><a class="nav-link" href="obat"><span class="nav-icon"></span> Data Obat</a></li>
            <li class="nav-item"><a class="nav-link" href="pemeriksaan"><span class="nav-icon"></span> Laporan Hasil Pemeriksaan</a></li>            
          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
         
            </svg> Data Pasien</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="pasien"><span class="nav-icon"></span> Data Pasien</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><span class="nav-icon"></span> Tambah Pasien</a></li>            
          </ul>
        </li>
        
        
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="{{ asset('qklinik') }}/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
          </button><a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="{{ asset('qklinik') }}/assets/brand/coreui.svg#full"></use>
            </svg></a>
          <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="home">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
          </ul>
          <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="{{ asset('qklinik') }}/vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="{{ asset('qklinik') }}/vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="{{ asset('qklinik') }}/vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                </svg></a></li>
          </ul>
          <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="{{ asset('qklinik') }}/assets/img/avatars/2.jpg" alt="user@email.com"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                    <svg class="icon me-2">
                    <use xlink:href="{{ asset('qklinik') }}/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                  </svg> Account</a><a class="dropdown-item" href="#">
                  </a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{ asset('qklinik') }}/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                  </svg> Lock Account</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{ asset('qklinik') }}/vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                  </svg> Logout</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
              </li>
              <li class="breadcrumb-item active"><span>Dashboard</span></li>
            </ol>
          </nav>
        </div>
      </header>

      <!--start body line-->
      <div class="container-fluid">
        @yield('mda')
      </div>
      <br>
      <!--end body line-->
      
      <footer class="footer">
        
        <h6>Base template: CoreUi Bootstrap v.5 </h6>      
        <br>
        <br>
        <h6>Completion time finishing the project from base to meet requirements: 4 hours</h6>
        
      </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('qklinik') }}/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="{{ asset('qklinik') }}/vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('qklinik') }}/vendors/chart.js/js/chart.min.js"></script>
    <script src="{{ asset('qklinik') }}/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="{{ asset('qklinik') }}/vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="{{ asset('qklinik') }}/js/main.js"></script>
    <script>
    </script>

  </body>
</html>
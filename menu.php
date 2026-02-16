<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Top Navigation</title>  
 <!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- AdminLTE CSS (v3 tetap bisa dipakai, tapi JS harus diubah nanti) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

<!-- overlayScrollbars -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.3/css/OverlayScrollbars.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<style>
    /* ===== CONTENT ===== */

    .menu-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
      gap: 20px;
    }

    .menu-card {
      background: #ffffff;
      border-radius: 12px;
      padding: 24px;
      text-align: center;
      cursor: pointer;
      box-shadow: 0 6px 18px rgba(0,0,0,0.06);
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .menu-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 28px rgba(0,0,0,0.1);
    }

    .menu-card h3 {
      margin: 0;
      font-size: 16px;
      font-weight: 600;
    }

    .menu-card p {
      margin-top: 6px;
      font-size: 13px;
      color: #6b7280;
    }

    /* ===== FOOTER ===== */
    .footer {
      text-align: center;
      padding: 20px;
      font-size: 12px;
      color: #9ca3af;
    }
  </style>
  <style type="text/css">
    .menu-card {
  display: block;
  text-decoration: none;
  color: inherit;
  background: #ffffff;
  border-radius: 12px;
  padding: 24px;
  text-align: center;
  cursor: pointer;
  box-shadow: 0 6px 18px rgba(0,0,0,0.06);
  transition: transform 0.2s, box-shadow 0.2s;
}

.menu-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 10px 28px rgba(0,0,0,0.1);
}

  </style>
        <style>
          /* ====== BOTTOM SECTION ====== */
.bottom-section {
  min-height: 450px;
  text-align: center;
}

.description {
  font-size: 0.95rem;
  color: #4a5568;
}

        </style>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
                 <h5>MENU UTAMA</h5>
        </ul>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Cahaya / Mode -->
        <li class="nav-item">
          <a class="nav-link" href="#" role="button" title="Cahaya / Mode">
            <i class="fas fa-sun"></i>
          </a>
        </li>

        <!-- Bahasa -->
        <li class="nav-item">
          <a class="nav-link" href="#" role="button" title="Bahasa">
            <i class="fas fa-language"></i>
          </a>
        </li>
        <!-- Notifications Dropdown Menu -->
        <!-- <li class="nav-item dropdown">
          <a class="nav-link" data-bs-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a href="#" class="dropdown-item"><i class="fas fa-envelope mr-2"></i> 4 new messages</a></li>
            <li><a href="#" class="dropdown-item"><i class="fas fa-list mr-2"></i> 8 required action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a href="#" class="dropdown-item dropdown-footer">See All Notifications</a></li>
          </ul>
        </li> -->
        <!-- User Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-bs-toggle="dropdown" href="#">
            <i class="fas fa-user"></i> <span class="d-none d-md-inline">DisplayName</span> <i class="fas fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a href="../Profile.html" class="dropdown-item"><i class="fas fa-user-circle me-2"></i>Profile</a></li>
            <li><a href="../activity-log.html" class="dropdown-item"><i class="fas fa-cog me-2"></i>Activity Log</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a href="index.php" class="dropdown-item text-danger"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
     <!-- Bottom Section -->
  <div class="bottom-section container ">
    <!-- <h1>MENU UTAMA</h1> -->
    <p class="description">[Pengguna Aktif] Silahkan pilih sistem informasi atau proses bisnis yang ingin diakses</p>
    <div class="row g-4 justify-content-center menu-grid">

      <a href="sso/" class="menu-card">
        <h3>SSO</h3>
        <p>Single Sign-On</p>
      </a>
      
      <div class="menu-card"><h3>Proses A</h3><p>Modul Proses A</p></div>
      <div class="menu-card"><h3>Proses B</h3><p>Modul Proses B</p></div>
      <div class="menu-card"><h3>Akad</h3><p>Manajemen Akad</p></div>

      <a href="loa/" class="menu-card">
        <h3>LOA</h3>
        <p>Learning Outcome Assessment</p>
      </a>

      <a href="pta/" class="menu-card">
        <h3>PTA</h3>
        <p>Pengelolaan Tugas Akhir</p>
      </a>

      <div class="menu-card"><h3>LAB</h3><p>Manajemen Laboratorium</p></div>
      <div class="menu-card"><h3>CME</h3><p>Conference Management Eventr</p></div>

      <div class="menu-card"><h3>Marketing</h3><p>Divisi Pemasaran</p></div>
      <div class="menu-card"><h3>Sales</h3><p>Divisi Penjualan</p></div>
      <div class="menu-card"><h3>Operation</h3><p>Operasional</p></div>
      <div class="menu-card"><h3>Finance</h3><p>Keuangan</p></div>

      <div class="menu-card"><h3>Office</h3><p>Administrasi Kantor</p></div>
      <a href="sekolah/" class="menu-card">
        <h3>School</h3>
        <p>Pengelolaan Sekolah</p>
      </a>
 <a href="sqa/" class="menu-card">
        <h3>SQA</h3>
        <p>Test QA</p>
      </a>


      
    </div>
  </div>
   
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery dulu (untuk AdminLTE) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- OverlayScrollbars -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.3/js/jquery.overlayScrollbars.min.js"></script>

<!-- Bootstrap 5 Bundle (JS + Popper) harus **sebelum** AdminLTE -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE v3 -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>


<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
</body>
</html>

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

body {
  background: #f8f9fc;
  font-family: 'Segoe UI', sans-serif;
}

/* ===== Top Bar ===== */
.top-bar {
  background: white;
  height: 70px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 30px;
  border-bottom: 1px solid #e9ecef;
}

.top-bar h1 {
  font-size: 1.25rem;
  font-weight: 600;
  margin: 0;
  color: #343a40;
}

/* ===== Menu Section ===== */
.menu-wrapper {
  padding: 20px 20px;
}

.menu-description {
  color: #6c757d;
  font-size: 0.95rem;
  margin-bottom: 20px;
}

/* Default (tidak hover) */
.menu-card {
  background: white;
  border-radius: 16px;
  padding: 35px 20px;
  text-decoration: none;
  color: #6c757d; /* abu-abu */
  transition: all 0.25s ease;
  border: 1px solid #f1f3f5;
}

.menu-card i {
  font-size: 26px;
  margin-bottom: 15px;
  color: #6c757d; /* abu-abu */
  transition: color 0.25s ease;
}

.menu-card h6 {
  font-weight: 600;
  margin: 0;
  font-size: 0.95rem;
  color: inherit; /* ikut warna parent */
  transition: color 0.25s ease;
}

/* Hover */
.menu-card:hover {
  background: #007bff;
  transform: translateY(-6px);
  box-shadow: 0 15px 35px rgba(0,0,0,0.06);
  border-color: #dee2e6;
  color: white; /* ubah semua jadi white */
}

/* Paksa icon ikut berubah */
.menu-card:hover i {
  color: white;
}

.dropdown-toggle {
  border-radius: 30px;
  padding: 6px 14px;
  font-size: 0.9rem;
}
    /* ===== FOOTER ===== */
    .footer {
      text-align: center;
      padding: 20px;
      font-size: 12px;
      color: #9ca3af;
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
   
<!-- ===== Menu Section ===== -->
<div class="menu-wrapper container text-center">
  <p class="menu-description">
    Silahkan pilih sistem informasi atau proses bisnis yang ingin diakses
  </p>

  <div class="row g-4 justify-content-center">

    <div class="col-md-3 col-6">
      <a href="sso/" class="menu-card d-block">
        <i class="fas fa-network-wired"></i>
        <h6>SI-SSO</h6>
      </a>
    </div>
  <!-- Proses A -->
  <div class="col-md-3 col-6">
    <a href="#" class="menu-card d-block">
      <i class="fas fa-cogs"></i>
      <h6>Proses A</h6>
    </a>
  </div>

  <!-- Proses B -->
  <div class="col-md-3 col-6">
    <a href="#" class="menu-card d-block">
      <i class="fas fa-cogs"></i>
      <h6>Proses B</h6>
    </a>
  </div>
  <!-- AKAD -->
  <div class="col-md-3 col-6">
    <a href="akad/" class="menu-card d-block">
      <i class="fas fa-network-wired"></i>
      <h6>SI-AKAD</h6>
    </a>
  </div>


    <div class="col-md-3 col-6">
      <a href="loa/" class="menu-card d-block">
        <i class="fas fa-tv"></i>
        <h6>SI-LOA</h6>
      </a>
    </div>

    <div class="col-md-3 col-6">
      <a href="pta/" class="menu-card d-block">
        <i class="fas fa-tv"></i>
        <h6>SI-PTA</h6>
      </a>
    </div>
    <div class="col-md-3 col-6">
      <a href="cme/" class="menu-card d-block">
        <i class="fas fa-desktop"></i>
        <h6>SI-CME</h6>
      </a>
    </div>
    <div class="col-md-3 col-6">
      <a href="mlab/" class="menu-card d-block">
        <i class="fas fa-laptop"></i>
        <h6>SI-MLAB</h6>
      </a>
    </div>


  <!-- Marketing -->
  <div class="col-md-3 col-6">
    <a href="#" class="menu-card d-block">
      <i class="fas fa-bullhorn"></i>
      <h6>Marketing</h6>
    </a>
  </div>

  <!-- Sales -->
  <div class="col-md-3 col-6">
    <a href="#" class="menu-card d-block">
      <i class="fas fa-chart-line"></i>
      <h6>Sales</h6>
    </a>
  </div>

  <!-- Proses B -->
  <div class="col-md-3 col-6">
    <a href="#" class="menu-card d-block">
      <i class="fas fa-cogs"></i>
      <h6>Operation</h6>
    </a>
  </div>
  <!-- Finance -->
  <div class="col-md-3 col-6">
    <a href="#" class="menu-card d-block">
      <i class="fas fa-wallet"></i>
      <h6>Finance</h6>
    </a>
  </div>

  <!-- Office -->
  <div class="col-md-3 col-6">
    <a href="#" class="menu-card d-block">
      <i class="fas fa-building"></i>
      <h6>Office</h6>
    </a>
  </div>

  <!-- School -->
  <div class="col-md-3 col-6">
    <a href="sekolah/" class="menu-card d-block">
      <i class="fas fa-school"></i>
      <h6>School</h6>
    </a>
  </div>

  <!-- SQA -->
  <div class="col-md-3 col-6">
    <a href="sqa/" class="menu-card d-block">
      <i class="fas fa-vial"></i>
      <h6>SQA</h6>
    </a>
  </div>
   <!-- ORION -->
  <div class="col-md-3 col-6">
    <a href="orion/" class="menu-card d-block">
      <i class="fas fa-vial"></i>
      <h6>ORION</h6>
    </a>
  </div>


</div>
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

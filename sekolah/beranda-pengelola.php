<?php $page='beranda_pengelola';?>
<?php
include "1header.php"; 
?>

<?php
include "2navbar.php"; 
?>
 
<?php
include "3sidebar.php"; 
?>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
  <div class="container-fluid">
    <!-- Stat Box -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
          <div class="inner">
            <h3>12</h3>
            <p>Total Kelas</p>
          </div>
          <div class="icon"><i class="fas fa-school"></i></div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>350</h3>
            <p>Total Murid</p>
          </div>
          <div class="icon"><i class="fas fa-user-graduate"></i></div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>25</h3>
            <p>Guru & Staff</p>
          </div>
          <div class="icon"><i class="fas fa-chalkboard-teacher"></i></div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>5</h3>
            <p>Pending Registrasi</p>
          </div>
          <div class="icon"><i class="fas fa-user-clock"></i></div>
        </div>
      </div>
    </div>

    <!-- Grafik Kehadiran & Aktivitas -->
    <div class="row">
      <section class="col-lg-7 connectedSortable">
        <div class="card">
          <div class="card-header"><h3 class="card-title"><i class="fas fa-chart-bar mr-1"></i>Kehadiran Mingguan</h3></div>
          <div class="card-body"><canvas id="chartKehadiran" height="300"></canvas></div>
        </div>
      </section>

      <section class="col-lg-5 connectedSortable">
        <div class="card">
          <div class="card-header"><h3 class="card-title"><i class="fas fa-bell mr-1"></i>Notifikasi Terbaru</h3></div>
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item">Murid baru mendaftar: <strong>Ameera N.</strong></li>
              <li class="list-group-item">Update jadwal ujian kelas 5</li>
              <li class="list-group-item">Guru menambahkan rencana pembelajaran</li>
            </ul>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include "4footer.php"; 
?>
<?php
include "5script.php"; 
?>
<?php $page='beranda_administrator';?>
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

        <!-- Card Metric Laporan -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-clipboard-list mr-2"></i>
              Peran – Nama Sistem
            </h3>
          </div>

          <div class="card-body p-0">
            <table class="table table-bordered table-striped table-sm mb-0">
              <thead class="table-dark">
                <tr class="text-uppercase text-center">
                  <th style="width:25%;">Business Goal</th>
                  <th style="width:25%;">Metric</th>
                  <th style="width:20%;">Level of Detail</th>
                  <th style="width:30%;">Visual Type</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Memproses transaksi dengan cepat</td>
                  <td>Jumlah transaksi hari ini</td>
                  <td>Ringkasan harian</td>
                  <td>KPI Card</td>
                </tr>
                <tr>
                  <td>Memastikan nilai penjualan akurat</td>
                  <td>Total penjualan hari ini</td>
                  <td>Ringkasan harian</td>
                  <td>KPI Card</td>
                </tr>
                <tr>
                  <td>Mengetahui status transaksi berjalan</td>
                  <td>Jumlah transaksi sedang diproses</td>
                  <td>Real-time</td>
                  <td>Badge / Counter</td>
                </tr>
                <tr>
                  <td>Menghindari kesalahan input</td>
                  <td>Jumlah transaksi dibatalkan</td>
                  <td>Harian</td>
                  <td>Small Bar Chart</td>
                </tr>
                <tr>
                  <td>Memastikan pembayaran sukses</td>
                  <td>Status pembayaran per transaksi</td>
                  <td>Per transaksi</td>
                  <td>Icon Status</td>
                </tr>
                <tr>
                  <td>Memantau metode pembayaran</td>
                  <td>Persentase pembayaran (cash / QR / debit)</td>
                  <td>Harian</td>
                  <td>Donut Chart</td>
                </tr>
                <tr>
                  <td>Mengetahui produk terjual</td>
                  <td>Top 5 produk terjual hari ini</td>
                  <td>Ringkasan harian</td>
                  <td>Horizontal Bar Chart</td>
                </tr>
                <tr>
                  <td>Memantau stok saat transaksi</td>
                  <td>Stok tersisa produk aktif</td>
                  <td>Per item</td>
                  <td>Progress Bar</td>
                </tr>
                <tr>
                  <td>Menghindari selisih kas</td>
                  <td>Selisih kas akhir shift</td>
                  <td>Per shift</td>
                  <td>Alert / Highlight</td>
                </tr>
                <tr>
                  <td>Menutup shift dengan benar</td>
                  <td>Status closing shift</td>
                  <td>Per shift</td>
                  <td>Status Label</td>
                </tr>
                <tr>
                  <td>Mengetahui jam sibuk</td>
                  <td>Jumlah transaksi per jam</td>
                  <td>Harian</td>
                  <td>Line Chart</td>
                </tr>
                <tr>
                  <td>Mengurangi antrian</td>
                  <td>Rata-rata waktu transaksi</td>
                  <td>Harian</td>
                  <td>KPI Card</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="card-footer small text-muted">
            <strong>Lifecycle:</strong>
            Planning → Requirement → Design → Development → Testing → Deployment / Launching (BAST) → Maintenance / Subscription Service
          </div>
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
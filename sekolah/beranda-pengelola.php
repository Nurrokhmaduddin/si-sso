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
                  <th>No</th>
                  <th style="width:25%;">Business Goal</th>
                  <th style="width:25%;">Metric</th>
                  <th style="width:20%;">Level of Detail</th>
                  <th style="width:30%;">Visual Type</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">1</td>
                  <td>Memproses pembayaran SPP & biaya kegiatan</td>
                  <td>Jumlah pembayaran hari ini</td>
                  <td>Ringkasan harian</td>
                  <td>KPI Card</td>
                </tr>
                <tr>
                  <td class="text-center">2</td>
                  <td>Memastikan pembayaran tercatat akurat</td>
                  <td>Total penerimaan hari ini</td>
                  <td>Ringkasan harian</td>
                  <td>KPI Card</td>
                </tr>
                <tr>
                  <td class="text-center">3</td>
                  <td>Mengetahui status pembayaran siswa</td>
                  <td>Jumlah pembayaran pending / menunggu konfirmasi</td>
                  <td>Real-time</td>
                  <td>Badge / Counter</td>
                </tr>
                <tr>
                  <td class="text-center">4</td>
                  <td>Menghindari kesalahan input data siswa / keuangan</td>
                  <td>Jumlah koreksi transaksi / input salah</td>
                  <td>Harian</td>
                  <td>Small Bar Chart</td>
                </tr>
                <tr>
                  <td class="text-center">5</td>
                  <td>Memastikan semua pembayaran berhasil diverifikasi</td>
                  <td>Status verifikasi per pembayaran</td>
                  <td>Per transaksi</td>
                  <td>Icon Status</td>
                </tr>
                <tr>
                  <td class="text-center">6</td>
                  <td>Memantau metode pembayaran</td>
                  <td>Persentase pembayaran (cash / transfer bank / QR / e-wallet)</td>
                  <td>Harian</td>
                  <td>Donut Chart</td>
                </tr>
                <tr>
                  <td class="text-center">7</td>
                  <td>Mengetahui kegiatan atau program populer</td>
                  <td>Top 5 kegiatan / program yang paling banyak diikuti siswa hari ini</td>
                  <td>Ringkasan harian</td>
                  <td>Horizontal Bar Chart</td>
                </tr>
                <tr>
                  <td class="text-center">8</td>
                  <td>Memantau stok perlengkapan sekolah</td>
                  <td>Stok bahan ajar, alat praktek, atau logistik kegiatan</td>
                  <td>Per item</td>
                  <td>Progress Bar</td>
                </tr>
                <tr>
                  <td class="text-center">9</td>
                  <td>Menghindari selisih kas / dana kegiatan</td>
                  <td>Selisih kas harian / kas akhir shift</td>
                  <td>Per shift</td>
                  <td>Alert / Highlight</td>
                </tr>
                <tr>
                  <td class="text-center">10</td>
                  <td>Menutup shift administrasi dengan benar</td>
                  <td>Status closing shift administrasi</td>
                  <td>Per shift</td>
                  <td>Status Label</td>
                </tr>
                <tr>
                  <td class="text-center">11</td>
                  <td>Mengetahui jam sibuk pembayaran / layanan administrasi</td>
                  <td>Jumlah transaksi / layanan per jam</td>
                  <td>Harian</td>
                  <td>Line Chart</td>
                </tr>
                <tr>
      <td class="text-center">1</td>
      <td>Memantau kehadiran siswa di kelas</td>
      <td>Persentase kehadiran harian per kelas</td>
      <td>Ringkasan harian</td>
      <td>KPI Card / Donut Chart</td>
    </tr>
    <tr>
      <td class="text-center">2</td>
      <td>Mengetahui kegiatan pembelajaran yang sedang berjalan</td>
      <td>Jumlah kegiatan aktif per kelas</td>
      <td>Real-time</td>
      <td>Badge / Counter</td>
    </tr>
    <tr>
      <td class="text-center">3</td>
      <td>Memastikan evaluasi pembelajaran tercatat</td>
      <td>Jumlah evaluasi / eviden yang sudah diisi guru per kelas</td>
      <td>Harian</td>
      <td>Small Bar Chart</td>
    </tr>
    <tr>
      <td class="text-center">4</td>
      <td>Mengetahui progres kurikulum tiap kelas</td>
      <td>Persentase materi kurikulum yang telah selesai diajarkan</td>
      <td>Ringkasan mingguan</td>
      <td>Progress Bar / Line Chart</td>
    </tr>
    <tr>
      <td class="text-center">5</td>
      <td>Memantau performa guru</td>
      <td>Jumlah laporan aktivitas guru, keterlambatan, atau evaluasi peer review</td>
      <td>Mingguan</td>
      <td>KPI Card / Table</td>
    </tr>
    <tr>
      <td class="text-center">6</td>
      <td>Mengetahui kegiatan ekstra kurikuler siswa</td>
      <td>Jumlah kegiatan yang diikuti tiap siswa</td>
      <td>Harian / mingguan</td>
      <td>Horizontal Bar Chart</td>
    </tr>
    <tr>
      <td class="text-center">7</td>
      <td>Memastikan keamanan dan disiplin siswa</td>
      <td>Jumlah laporan insiden atau pelanggaran per hari</td>
      <td>Real-time</td>
      <td>Alert / Badge</td>
    </tr>
    <tr>
      <td class="text-center">8</td>
      <td>Memantau proyek dan kegiatan lapangan</td>
      <td>Jumlah proyek aktif per kelas / kelompok</td>
      <td>Harian / Mingguan</td>
      <td>Horizontal Bar Chart / Progress Bar</td>
    </tr>
    <tr>
      <td class="text-center">9</td>
      <td>Mengetahui tingkat partisipasi orang tua</td>
      <td>Persentase kehadiran orang tua di kegiatan sekolah</td>
      <td>Harian / Bulanan</td>
      <td>KPI Card / Donut Chart</td>
    </tr>
    <tr>
      <td class="text-center">10</td>
      <td>Memantau inventaris kelas dan alat belajar</td>
      <td>Jumlah barang yang tersedia / hilang / rusak</td>
      <td>Mingguan</td>
      <td>Progress Bar / Table</td>
    </tr>
    <tr>
      <td class="text-center">11</td>
      <td>Memastikan semua laporan administrasi sekolah lengkap</td>
      <td>Jumlah laporan yang belum dikirim / belum diverifikasi</td>
      <td>Harian / Mingguan</td>
      <td>Alert / Status Label</td>
    </tr>
              </tbody>
            </table>
          </div>

          <div class="card-footer small text-muted">
            <strong>Notes:</strong>
            Tabel ini menyajikan gambaran mengenai laporan-laporan yang diperlukan oleh pengelola sekolah dari sistem.
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
<?php $page='beranda_walimurid';?>
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
        <div class="col-lg-4 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>18</h3>
              <p>Jumlah Murid di Kelas</p>
            </div>
            <div class="icon"><i class="fas fa-user-graduate"></i></div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>15</h3>
              <p>Aktivitas Terakhir</p>
            </div>
            <div class="icon"><i class="fas fa-book-reader"></i></div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>5</h3>
              <p>Catatan Anak</p>
            </div>
            <div class="icon"><i class="fas fa-sticky-note"></i></div>
          </div>
        </div>
      </div>

      <!-- Kegiatan Anak -->
      <div class="row">
        <section class="col-lg-12 connectedSortable">
          <div class="card">
            <div class="card-header"><h3 class="card-title"><i class="fas fa-book mr-1"></i>Kegiatan Hari Ini</h3></div>
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item">07.30 - Welcoming</li>
                <li class="list-group-item">08.00 - Eksplorasi Alam</li>
                <li class="list-group-item">10.30 - Tahfidz</li>
                <li class="list-group-item">12.30 - Mengaji</li>
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
                Pengajuan izin dilakukan melalui unggah berkas.
               menerima Notifikasi informasi sekolah dikirim melalui WhatsApp.
               Wali murid akan menerima notifikasi apabila terdapat surat penting terkait muridnya.
                <tr>
                  <td></td>
                  <td>Mengetahui Kegiatan Sekolah orangtua</td>
                  <td>Jumlah kegiatan semester ini</td>
                  <td>Jadwal dan Persiapan</td>
                  <td>Tabel</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Mengetahui perkembangan pembelajaran hari ini</td>
                  <td>Catatan atas anaknya</td>
                  <td>Daftar report plan daily</td>
                  <td>KPI Card</td>
                </tr> 
                <tr>
                  <td></td>
                  <td>Mengetahui riwayat perkembangan pembelajaran anaknya</td>
                  <td>Akumulasi catatan atas anaknya</td>
                  <td>Daftar report plan daily/weekly/semester</td>
                  <td>KPI Card / Tabel</td>
                </tr> 
                <tr>
                  <td></td>
                  <td>Memastikan pembayaran tuntas</td>
                  <td>Status pembayaran per transaksi</td>
                  <td>Per transaksi</td>
                  <td>Icon Status</td>
                </tr>
                <tr>
      <td class="text-center">1</td>
      <td>Memantau kehadiran anak</td>
      <td>Persentase kehadiran harian anak</td>
      <td>Harian</td>
      <td>KPI Card / Donut Chart</td>
    </tr>
    <tr>
      <td class="text-center">2</td>
      <td>Mengetahui kegiatan harian anak</td>
      <td>Daftar kegiatan yang dilakukan anak hari ini</td>
      <td>Harian</td>
      <td>Table / Badge</td>
    </tr>
    <tr>
      <td class="text-center">3</td>
      <td>Memantau tugas atau evaluasi anak</td>
      <td>Status tugas/evaluasi (sudah/menunggu/terlambat)</td>
      <td>Harian / Mingguan</td>
      <td>Small Bar Chart / Status Label</td>
    </tr>
    <tr>
      <td class="text-center">4</td>
      <td>Memantau perilaku anak</td>
      <td>Catatan disiplin / prestasi anak</td>
      <td>Harian / Mingguan</td>
      <td>Badge / KPI Card</td>
    </tr>
    <tr>
      <td class="text-center">5</td>
      <td>Memeriksa notifikasi dari sekolah</td>
      <td>Jumlah notifikasi yang diterima dan dibaca</td>
      <td>Harian</td>
      <td>KPI Card / Table</td>
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
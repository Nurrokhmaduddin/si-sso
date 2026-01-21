<?php $page='beranda_murid';?>
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
        <div class="col-lg-6 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>18</h3>
              <p>Teman Kelas</p>
            </div>
            <div class="icon"><i class="fas fa-users"></i></div>
          </div>
        </div>
        <div class="col-lg-6 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>3</h3>
              <p>Kegiatan Hari Ini</p>
            </div>
            <div class="icon"><i class="fas fa-book"></i></div>
          </div>
        </div>
      </div>

      <?php
	// Ambil tanggal sekarang
      $now = new DateTime();	
	$tanggal = $now->format('d F Y'); // Contoh: 20 Januari 2026
	?>

  <!-- Jadwal Harian -->
  <div class="row">
   <section class="col-lg-12 connectedSortable">
    <div class="card">
     <div class="card-header">
      <h3 class="card-title">
       <i class="fas fa-calendar-day mr-1"></i>
       Jadwal Hari Ini - <?php echo $tanggal; ?>
     </h3>
   </div>
   <div class="card-body">
    <ul class="list-group">
     <li class="list-group-item">07.30 - Welcoming</li>
     <li class="list-group-item">08.00 - Eksplorasi Alam</li>
     <li class="list-group-item">10.30 - Tahfidz</li>
   </ul>
 </div>
 <div class="card-footer">
  <strong>Perlengkapan yang Dibawa:</strong>
  Baju seragam harian, sepatu sekolah
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
                  <td>Mengetahui rencana pembelajran hari ini</td>
                  <td>Info jadwal dan barang persiapan</td>
                  <td>Harian</td>
                  <td>Badge</td>
                </tr>                 
                <tr>
                  <td>Mengetahui riwayat perkembangan pembelajaran diri</td>
                  <td>Akumulasi catatan dari fasilitator</td>
                  <td>Daftar report plan daily/weekly/semester</td>
                  <td>KPI Card / Tabel</td>
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
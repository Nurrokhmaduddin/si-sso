<?php $page='beranda_walikelas';?>
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
              <h3>18</h3>
              <p>Total Murid Kelas</p>
            </div>
            <div class="icon"><i class="fas fa-user-graduate"></i></div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>12</h3>
              <p>Rencana Harian</p>
            </div>
            <div class="icon"><i class="fas fa-book"></i></div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>8</h3>
              <p>Evaluasi Harian</p>
            </div>
            <div class="icon"><i class="fas fa-clipboard-check"></i></div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>3</h3>
              <p>Catatan Khusus Murid</p>
            </div>
            <div class="icon"><i class="fas fa-sticky-note"></i></div>
          </div>
        </div>
      </div>

      <!-- Jadwal Harian & Dokumentasi -->
      <div class="row">
        <section class="col-lg-7 connectedSortable">
          <div class="card">
            <div class="card-header"><h3 class="card-title"><i class="fas fa-calendar-alt mr-1"></i>Rencana Harian</h3></div>
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item">07.30 - Welcoming</li>
                <li class="list-group-item">08.00 - Eksplorasi Alam</li>
                <li class="list-group-item">10.00 - Istirahat</li>
                <li class="list-group-item">10.30 - Tahfidz</li>
              </ul>
            </div>
          </div>
        </section>

        <section class="col-lg-5 connectedSortable">
          <div class="card">
            <div class="card-header"><h3 class="card-title"><i class="fas fa-image mr-1"></i>Dokumentasi Kegiatan</h3></div>
            <div class="card-body">
              <div class="row">
                <div class="col-6"><img src="https://via.placeholder.com/150" class="img-fluid rounded mb-2"></div>
                <div class="col-6"><img src="https://via.placeholder.com/150" class="img-fluid rounded mb-2"></div>
              </div>
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
                  <td>Upload Plan Daily</td>
                  <td></td>
                  <td>Ringkasan harian</td>
                  <td>KPI Card</td>
                </tr>
                
                <tr>
                  <td>Upload Report Daily</td>
                  <td></td>
                  <td>Per shift</td>
                  <td>Status Label</td>
                </tr>
                <tr>
                  <td>Mengetahui Persentasi Plan dalam satu semester</td>
                  <td></td>
                  <td></td>
                  <td>Tabel</td>
                </tr>
                <tr>
                  <td>Mengetahui Perkembangan Pembelajaran Murid di kelasnya</td>
                  <td></td>
                  <td></td>
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
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
        <section class="col-lg-6 connectedSortable">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h3 class="card-title mb-0">
                <i class="fas fa-calendar-alt me-1"></i> Rencana Kelas Neptunus Hari ini
              </h3>
              <button class="btn btn-outline-primary btn-sm"
              data-bs-toggle="modal"
              data-bs-target="#modalEditReport">
              <i class="fas fa-edit"></i> Report
            </button>
          </div>
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item">07.30 - Welcoming</li>
              <li class="list-group-item">07.45 - Sholat Dhuha</li>
              <li class="list-group-item">08.00 - Farming</li>
              <li class="list-group-item">11.30 - Dhuhur & Lunch</li>
              <li class="list-group-item">12.30 - Tahfidz</li>
              <li class="list-group-item">13.00 - Mengaji</li>
              <li class="list-group-item">14.15 - Closing</li>
            </ul>
          </div>
        </div>
      </section>

      <section class="col-lg-6 connectedSortable">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0"><i class="fas fa-calendar-alt me-1"></i>Rencana Kelas Merkurius Hari inii</h5>
            <div class="card-tools ms-auto">
              <button class="btn btn-outline-info btn-sm" 
              onclick="window.location.href='monev-kbm-harian-do-detail.php'">
              Report
            </button>
          </div>
        </div>
        
        <div class="card-body">
          <ul class="list-group">
            <li class="list-group-item">07.30 - Welcoming</li>
            <li class="list-group-item">07.45 - Sholat Dhuha</li>
            <li class="list-group-item">08.00 - Eksplorasi Alam</li>
            <li class="list-group-item">11.30 - Dhuhur & Lunch</li>
            <li class="list-group-item">12.30 - Tahfidz</li>
            <li class="list-group-item">13.00 - Mengaji</li>
            <li class="list-group-item">14.15 - Closing</li>
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
      Wali Kelas – Dashboard Wali Kelas (Sistem Monitoring)
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
          <td></td>
          <td>Mengetahui persentase plan dalam satu semester</td>
          <td>Persentase keterlaksanaan rencana pembelajaran</td>
          <td>Semester</td>
          <td>Tabel / Progress Chart</td>
        </tr>

        <tr>
          <td></td>
          <td>Mengetahui perkembangan pembelajaran murid di kelasnya</td>
          <td>Rata-rata capaian kompetensi dan nilai siswa</td>
          <td>Mingguan / Bulanan</td>
          <td>KPI Card</td>
        </tr>

        <tr>
          <td></td>
          <td>Upload Plan Daily</td>
          <td>Jumlah daily plan yang dibuat per hari</td>
          <td>Ringkasan harian</td>
          <td>KPI Card</td>
        </tr>

        <tr>
          <td></td>
          <td>Upload Report Daily</td>
          <td>Status laporan harian (terkirim / pending / revisi)</td>
          <td>Per sesi / harian</td>
          <td>Status Label</td>
        </tr>

        <tr>
          <td class="text-center">1</td>
          <td>Memantau kehadiran siswa</td>
          <td>Persentase kehadiran harian per kelas</td>
          <td>Harian</td>
          <td>KPI Card / Donut Chart</td>
        </tr>

        <tr>
          <td class="text-center">2</td>
          <td>Membuat rencana pembelajaran harian</td>
          <td>Jumlah rencana pembelajaran yang dibuat</td>
          <td>Harian</td>
          <td>KPI Card / Badge</td>
        </tr>

        <tr>
          <td class="text-center">3</td>
          <td>Memastikan eviden kegiatan lengkap</td>
          <td>Jumlah kegiatan terdokumentasi vs total kegiatan</td>
          <td>Harian</td>
          <td>Progress Bar / Tabel</td>
        </tr>

        <tr>
          <td class="text-center">4</td>
          <td>Memantau perilaku siswa</td>
          <td>Jumlah catatan disiplin dan prestasi siswa</td>
          <td>Harian / Mingguan</td>
          <td>Badge / KPI Card</td>
        </tr>

        <tr>
          <td class="text-center">5</td>
          <td>Memastikan komunikasi dengan orang tua</td>
          <td>Persentase pesan/notifikasi yang terkirim dan terbaca</td>
          <td>Harian</td>
          <td>Tabel / KPI Card</td>
        </tr>

        <tr>
          <td class="text-center">6</td>
          <td>Memantau partisipasi siswa di kegiatan kelas</td>
          <td>Jumlah siswa aktif dalam kegiatan pembelajaran</td>
          <td>Harian</td>
          <td>Horizontal Bar Chart / Progress Bar</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="card-footer small text-muted">
    <strong>Notes:</strong>
    Tabel ini menyajikan kebutuhan monitoring dan dashboard Wali Kelas dalam Sistem Informasi Sekolah,
    sebagai dasar visualisasi KPI, laporan harian, serta evaluasi pembelajaran.
  </div>
</div>


</div>
</section>


  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "4footer.php"; ?>

<div class="modal fade" id="modalEditReport" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">

      <!-- HEADER -->
      <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h5 class="modal-title mb-0">
          <i class="fas fa-edit me-1"></i> Edit Evaluasi & Laporan Harian
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <!-- BODY -->
      <div class="modal-body">

        <!-- 1. Evaluasi KBM -->
        <div class="card card-outline card-primary mb-3">
          <div class="card-header">
            <h6 class="mb-0">Evaluasi KBM Harian</h6>
          </div>
          <div class="card-body">
            <textarea class="form-control"
              name="evaluasi_kbm"
              rows="3"
              placeholder="Tuliskan evaluasi KBM harian..."></textarea>
          </div>
        </div>

        <!-- 2. Kehadiran & Catatan -->
        <div class="card card-outline card-info mb-3">
          <div class="card-header">
            <h6 class="mb-0">Kehadiran & Jurnal Per Murid</h6>
          </div>
          <div class="card-body table-responsive">
            <table class="table table-bordered table-sm align-middle">
              <thead class="table-light text-center">
                <tr>
                  <th style="width:5%">No</th>
                  <th style="width:25%">Nama Murid</th>
                  <th style="width:15%">Kehadiran</th>
                  <th>Catatan Fasilitator</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">1</td>
                  <td>Ameera Nur Fauziyyah</td>
                  <td>
                    <select class="form-select form-select-sm">
                      <option value="hadir">Present</option>
                      <option value="alfa">Absent</option>
                    </select>
                  </td>
                  <td>
                    <input type="text" class="form-control form-control-sm"
                      placeholder="Catatan murid...">
                  </td>
                </tr>

                <tr>
                  <td class="text-center">2</td>
                  <td>Ramadatiya Leo Pradana</td>
                  <td>
                    <select class="form-select form-select-sm">
                      <option value="hadir">Present</option>
                      <option value="alfa">Absent</option>
                    </select>
                  </td>
                  <td>
                    <input type="text" class="form-control form-control-sm"
                      placeholder="Catatan murid...">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- 3. Catatan Harian Kelas -->
        <div class="card card-outline card-success mb-3">
          <div class="card-header">
            <h6 class="mb-0">Catatan Harian Kelas</h6>
          </div>
          <div class="card-body">
            <textarea class="form-control"
              name="catatan_harian"
              rows="3"
              placeholder="Catatan umum perkembangan kelas hari ini..."></textarea>
          </div>
        </div>

        <!-- 4. Upload Dokumentasi (MULTIPLE) -->
        <div class="card card-outline card-warning">
          <div class="card-header">
            <h6 class="mb-0">Upload Dokumentasi Kegiatan</h6>
          </div>
          <div class="card-body">
            <label class="form-label">Pilih File Gambar</label>
            <input type="file"
              class="form-control"
              name="uploadFile[]"
              accept="image/*"
              multiple>

            <small class="text-muted d-block mt-1">
              ✔ Bisa upload lebih dari satu gambar  
              ✔ Format: JPG, PNG, GIF  
              ✔ Disarankan max 5 file
            </small>
          </div>
        </div>

      </div>

      <!-- FOOTER -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Batal
        </button>
        <button type="submit" class="btn btn-primary">
          <i class="fas fa-save me-1"></i> Simpan
        </button>
      </div>

    </div>
  </div>
</div>




<?php include "5script.php"; ?>
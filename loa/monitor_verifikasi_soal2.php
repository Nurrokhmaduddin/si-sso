<?php $page = 'monitor_verifikasi_soal2'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <!-- ===================================================== -->
  <!-- CONTENT HEADER -->
  <!-- ===================================================== -->
  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Monitor Verifikasi Soal Ujian

        <button type="button"
        class="btn btn-tool"
        data-bs-toggle="modal"
        data-bs-target="#modalBantuan"
        title="Bantuan">
        <i class="fas fa-question-circle"></i>
      </button>

    </h3>

    <p class="text-muted mb-0">
      Dosen.Monitoring proses upload, revisi, verifikasi, dan persetujuan soal ujian oleh dosen dan verifikator.
    </p>

  </div>
</section>

<!-- ===================================================== -->
<!-- MAIN CONTENT -->
<!-- ===================================================== -->
<section class="content">
  <div class="container-fluid">

  
    <!-- ===================================================== -->
    <!-- FILTER CARD -->
    <!-- ===================================================== -->
    <div class="card">

      <div class="card-body">

        <div class="row">

          <div class="col-md-4">
            <b>Periode Akademik:</b> 2025/2026 - Ganjil
          </div>

          <div class="col-md-4">
            <b>Mata Kuliah:</b> Semua
          </div>
           <div class="col-md-4">
            <b>Status:</b> Semua
          </div>

          <div class="col-md-4">
            <b>Dosen:</b> Hanya saya
          </div>
              <div class="col-md-4">
            <b>Validator:</b> Hanya saya
          </div>
        
        </div>

      </div>

      <div class="card-footer">

        <div class="card-tools ms-auto">

          <button class="btn btn-outline-info btn-sm"
          data-bs-toggle="modal"
          data-bs-target="#modalFilter">
          <i class="fas fa-filter me-1"></i> Filter
        </button>

        <button class="btn btn-outline-success btn-sm">
          <i class="fas fa-file-excel me-1"></i> Export
        </button>

        <button class="btn btn-outline-secondary btn-sm">
          <i class="fas fa-sync me-1"></i> Refresh
        </button>
        <button 
          type="button"
          class="btn btn-outline-secondary btn-sm"
          onclick="window.location.href='monitor_verifikasi_soal.php'">
          <i class="fas fa-sync me-1"></i> Tampilan Admin
        </button>
      </div>

    </div>

  </div>

<!-- ===================================================== -->
<!-- NAVIGATION TAB -->
<!-- ===================================================== -->

<ul class="nav nav-tabs" id="tabMonitoringVerifikasi" role="tablist">

  <!-- TAB 1 -->
  <li class="nav-item" role="presentation">

    <button 
      class="nav-link "
      id="tab-soal-ujianku"
      data-bs-toggle="tab"
      data-bs-target="#content-soal-ujianku"
      type="button"
      role="tab">

      <!-- <i class="fas fa-file-upload me-1"></i> -->
      Soal Ujianku

    </button>

  </li>

  <!-- TAB 2 -->
  <li class="nav-item" role="presentation">

    <button 
      class="nav-link active"
      id="tab-validator"
      data-bs-toggle="tab"
      data-bs-target="#content-validator"
      type="button"
      role="tab">

      <!-- <i class="fas fa-clipboard-check me-1"></i> -->
      Tugas Validator

    </button>

  </li>

</ul>
<!-- ===================================================== -->
<!-- TAB CONTENT -->
<!-- ===================================================== -->

<div class="tab-content">

  <!-- ================================================= -->
  <!-- TAB : SOAL UJIKU -->
  <!-- ================================================= -->

  <div 
    class="tab-pane fade "
    id="content-soal-ujianku"
    role="tabpanel">

    <!-- ISI TABLE SOAL UJIKU -->
    
    <div class="card">
      <div class="card-body">

        Konten tabel soal ujian milik dosen di sini.
<div class="table-responsive">
              <table class="table table-bordered table-striped table-sm datatables1">

                <thead>
                  <tr class="text-center text-uppercase">
                    <th>No</th>
                    <th>Kelas Perkuliahan</th>
                    <th>Soal Ujian</th>
                    <th>Verifikasi Soal</th>
                    <th>Last Update</th>
                    <th>Aksi</th>
                  </tr>
                </thead>

                <tbody>

                  <!-- ROW 1 -->
                  <tr>
                    <td class="text-center">1</td>

                    <td>
                      Dosen Pengampu: <b>Harun Ruddin</b> <br>
                      Kelas: Pemrograman Web Lanjut (IF402) - IF-A
                    </td>

                    <td>
                      Tanggal Ujian: <b>12 Mei 2026</b><br>
                      Keterangan: Ujian Tengah Semester<br>
                     
                      <span class="badge badge-info">soal_uts_if402.pdf</span>
                    </td>

                    <td>
                      Verifikator: <b>Dr. Ahmad Fauzi</b><br>

                      Komentar:
                      <small class="text-warning">
                        Mohon revisi CPMK nomor 3 dan typo halaman 2.
                      </small>
                      <br>

                     
                      <span class="badge badge-warning">
                        Proses Revisi
                      </span>
                    </td>

                    <td>
                      10 Mei 2026 <br>
                      09:20 WIB
                    </td>

                    <td class="text-center">

                      <!-- DETAIL -->

                      <button class="btn btn-sm btn-outline-info"

                      data-bs-toggle="modal"
                      data-bs-target="#modalDetail"

                      data-kodemk="IF402"
                      data-mk="Pemrograman Web Lanjut"
                      data-dosen="<b>Harun Ruddin</b>"
                      data-validator="Dr. Ahmad Fauzi"
                      data-status="Revisi"

                      data-timeline='[
                      {"tanggal":"08 Mei 2026","aktivitas":"Upload soal oleh dosen"},
                      {"tanggal":"09 Mei 2026","aktivitas":"Admin menunjuk verifikator"},
                      {"tanggal":"10 Mei 2026","aktivitas":"Validator meminta revisi CPMK"}
                      ]'

                      onclick="showDetail(this)">

                      <i class="fas fa-eye"></i>

                    </button>

                    <!-- VERIFIKASI -->

                    <button class="btn btn-sm btn-outline-success"

                    data-bs-toggle="modal"
                    data-bs-target="#modalVerifikasi">

                    <i class="fas fa-check"></i>

                  </button>

                  <!-- UPLOAD -->

                  <button class="btn btn-sm btn-outline-primary">

                    <i class="fas fa-upload"></i>

                  </button>

                </td>
              </tr>

              <!-- ROW 2 -->
              <tr>
                <td class="text-center">2</td>

                <td>
                  Dosen Pengampu: <b>Harun Ruddin</b> <br>
                  Kelas: Basis Data (IF301) - IF-B
                </td>

                <td>
                  Tanggal Ujian: <b>15 Mei 2026</b><br>
                  Keterangan: Ujian Akhir Semester<br>
                  File:
                  <small>uas_basisdata.pdf</small>
                </td>

                <td>
                  Verifikator: <b>Dr. Rina Kurnia</b><br>

                  Komentar:
                  <small class="text-success">
                    Soal sudah sesuai CPMK.
                  </small>
                  <br>

                  Status:
                  <span class="badge badge-success">
                    Approved
                  </span>
                </td>

                <td>
                  11 Mei 2026 <br>
                  10:15 WIB
                </td>

                <td class="text-center">
                  <button class="btn btn-sm btn-outline-info"

                      data-bs-toggle="modal"
                      data-bs-target="#modalRiwayatVerifikasi"

                      onclick="showDetail(this)">

                      <i class="fas fa-eye"></i>

                    </button>

                  <button class="btn btn-sm btn-outline-success">
                    <i class="fas fa-check"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-upload"></i>
                  </button>
                </td>
              </tr>

              <!-- ROW 3 -->
              <tr>
                <td class="text-center">3</td>

                <td>
                  Dosen Pengampu: <b>Harun Ruddin</b> <br>
                  Kelas: Struktur Data (IF220) - IF-C
                </td>

                <td>
                  Tanggal Ujian: <b>20 Mei 2026</b><br>
                  Keterangan: Ujian Tengah Semester<br>
                  File:
                  <small>uts_strukturdata.pdf</small>
                </td>

                <td>
                  Verifikator: <b>Admin Prodi</b><br>

                  Komentar:
                  <small class="text-info">
                    Menunggu proses verifikasi.
                  </small>
                  <br>

                  Status:
                  <span class="badge badge-warning">
                    Proses Revisi
                  </span>
                </td>

                <td>
                  11 Mei 2026 <br>
                  14:10 WIB
                </td>

                <td class="text-center">
                  <button class="btn btn-sm btn-outline-info">
                    <i class="fas fa-eye"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-success">
                    <i class="fas fa-check"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-upload"></i>
                  </button>
                </td>
              </tr>

              <!-- ROW 4 -->
              <tr>
                <td class="text-center">4</td>

                <td>
                  Dosen Pengampu: <b>Harun Ruddin</b> <br>
                  Kelas: Algoritma Pemrograman (IF101) - IF-A
                </td>

                <td>
                  Tanggal Ujian: <b>18 Mei 2026</b><br>
                  Keterangan: Ujian Tengah Semester<br>
                  File:
                  <small>algoritma_uts.pdf</small>
                </td>

                <td>
                  Verifikator: <b>Dr. Yuniarti</b><br>

                  Komentar:
                  <small class="text-danger">
                    Kisi-kisi belum lengkap.
                  </small>
                  <br>

                  Status:
                  <span class="badge badge-danger">
                    Rejected
                  </span>
                </td>

                <td>
                  12 Mei 2026 <br>
                  08:30 WIB
                </td>

                <td class="text-center">
                  <button class="btn btn-sm btn-outline-info">
                    <i class="fas fa-eye"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-success">
                    <i class="fas fa-check"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-upload"></i>
                  </button>
                </td>
              </tr>

              <!-- ROW 5 -->
              <tr>
                <td class="text-center">5</td>

                <td>
                  Dosen Pengampu: <b>Harun Ruddin</b> <br>
                  Kelas: Sistem Operasi (IF305) - IF-D
                </td>

                <td>
                  Tanggal Ujian: <b>21 Mei 2026</b><br>
                  Keterangan: UAS<br>
                  File:
                  <small>uas_so.pdf</small>
                </td>

                <td>
                  Verifikator: <b>Dr. Lina Marlina</b><br>

                  Komentar:
                  <small class="text-success">
                    Sudah memenuhi standar.
                  </small>
                  <br>

                  Status:
                  <span class="badge badge-success">
                    Approved
                  </span>
                </td>

                <td>
                  13 Mei 2026 <br>
                  13:00 WIB
                </td>

                <td class="text-center">
                  <button class="btn btn-sm btn-outline-info">
                    <i class="fas fa-eye"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-success">
                    <i class="fas fa-check"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-upload"></i>
                  </button>
                </td>
              </tr>

              <!-- ROW 6 -->
              <tr>
                <td class="text-center">6</td>

                <td>
                  Dosen Pengampu: <b>Harun Ruddin</b> <br>
                  Kelas: Rekayasa Perangkat Lunak (IF410) - IF-B
                </td>

                <td>
                  Tanggal Ujian: <b>22 Mei 2026</b><br>
                  Keterangan: UTS<br>
                  File:
                  <small>rpl_uts.pdf</small>
                </td>

                <td>
                  Verifikator: <b>Dr. Budi Hartono</b><br>

                  Komentar:
                  <small class="text-warning">
                    Revisi format penilaian.
                  </small>
                  <br>

                  Status:
                  <span class="badge badge-warning">
                    Proses Revisi
                  </span>
                </td>

                <td>
                  13 Mei 2026 <br>
                  15:45 WIB
                </td>

                <td class="text-center">
                  <button class="btn btn-sm btn-outline-info">
                    <i class="fas fa-eye"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-success">
                    <i class="fas fa-check"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-upload"></i>
                  </button>
                </td>
              </tr>

              <!-- ROW 7 -->
              <tr>
                <td class="text-center">7</td>

                <td>
                  Dosen Pengampu: <b>Harun Ruddin</b> <br>
                  Kelas: Kecerdasan Buatan (IF501) - IF-A
                </td>

                <td>
                  Tanggal Ujian: <b>24 Mei 2026</b><br>
                  Keterangan: UAS<br>
                  File:
                  <small>uas_ai.pdf</small>
                </td>

                <td>
                  Verifikator: <b>Dr. Andi Wijaya</b><br>

                  Komentar:
                  <small class="text-info">
                    Sedang ditinjau validator.
                  </small>
                  <br>

                  Status:
                  <span class="badge badge-info">
                    Proses Verifikasi
                  </span>
                </td>

                <td>
                  14 Mei 2026 <br>
                  09:10 WIB
                </td>

                <td class="text-center">
                  <button class="btn btn-sm btn-outline-info">
                    <i class="fas fa-eye"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-success">
                    <i class="fas fa-check"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-upload"></i>
                  </button>
                </td>
              </tr>

              <!-- ROW 8 -->
              <tr>
                <td class="text-center">8</td>

                <td>
                  Dosen Pengampu: <b>Harun Ruddin</b> <br>
                  Kelas: Jaringan Komputer (IF330) - IF-C
                </td>

                <td>
                  Tanggal Ujian: <b>25 Mei 2026</b><br>
                  Keterangan: UTS<br>
                  File:
                  <small>uts_jaringan.pdf</small>
                </td>

                <td>
                  Verifikator: <b>Dr. Rahmat</b><br>

                  Komentar:
                  <small class="text-success">
                    Siap digunakan.
                  </small>
                  <br>

                  Status:
                  <span class="badge badge-success">
                    Approved
                  </span>
                </td>

                <td>
                  14 Mei 2026 <br>
                  11:00 WIB
                </td>

                <td class="text-center">
                  <button class="btn btn-sm btn-outline-info">
                    <i class="fas fa-eye"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-success">
                    <i class="fas fa-check"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-upload"></i>
                  </button>
                </td>
              </tr>

              <!-- ROW 9 -->
              <tr>
                <td class="text-center">9</td>

                <td>
                  Dosen Pengampu: <b>Harun Ruddin</b> <br>
                  Kelas: Data Mining (IF520) - IF-D
                </td>

                <td>
                  Tanggal Ujian: <b>27 Mei 2026</b><br>
                  Keterangan: UAS<br>
                  File:
                  <small>uas_datamining.pdf</small>
                </td>

                <td>
                  Verifikator: <b>Dr. Hasan Basri</b><br>

                  Komentar:
                  <small class="text-warning">
                    Revisi indikator penilaian.
                  </small>
                  <br>

                  Status:
                  <span class="badge badge-warning">
                    Proses Revisi
                  </span>
                </td>

                <td>
                  15 Mei 2026 <br>
                  08:20 WIB
                </td>

                <td class="text-center">
                  <button class="btn btn-sm btn-outline-info">
                    <i class="fas fa-eye"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-success">
                    <i class="fas fa-check"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-upload"></i>
                  </button>
                </td>
              </tr>

              <!-- ROW 10 -->
              <tr>
                <td class="text-center">10</td>

                <td>
                  Dosen Pengampu: <b>Harun Ruddin</b> <br>
                  Kelas: Mobile Programming (IF450) - IF-E
                </td>

                <td>
                  Tanggal Ujian: <b>28 Mei 2026</b><br>
                  Keterangan: UTS<br>
                  File:
                  <small>mobile_uts.pdf</small>
                </td>

                <td>
                  Verifikator: <b>Dr. Suryani</b><br>

                  Komentar:
                  <small class="text-success">
                    Tidak ada revisi.
                  </small>
                  <br>

                  Status:
                  <span class="badge badge-success">
                    Approved
                  </span>
                </td>

                <td>
                  15 Mei 2026 <br>
                  10:45 WIB
                </td>

                <td class="text-center">
                  <button class="btn btn-sm btn-outline-info">
                    <i class="fas fa-eye"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-success">
                    <i class="fas fa-check"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-upload"></i>
                  </button>
                </td>
              </tr>

              <!-- ROW 11 -->
              <tr>
                <td class="text-center">11</td>

                <td>
                  Dosen Pengampu: <b>Harun Ruddin</b> <br>
                  Kelas: Cloud Computing (IF550) - IF-F
                </td>

                <td>
                  Tanggal Ujian: <b>30 Mei 2026</b><br>
                  Keterangan: UAS<br>
                  File:
                  <small>uas_cloud.pdf</small>
                </td>

                <td>
                  Verifikator: <b>Dr. Agus Salim</b><br>

                  Komentar:
                  <small class="text-info">
                    Menunggu validasi akhir.
                  </small>
                  <br>

                  Status:
                  <span class="badge badge-info">
                    Proses Verifikasi
                  </span>
                </td>

                <td>
                  16 Mei 2026 <br>
                  09:30 WIB
                </td>

                <td class="text-center">
                  <button class="btn btn-sm btn-outline-info">
                    <i class="fas fa-eye"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-success">
                    <i class="fas fa-check"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-upload"></i>
                  </button>
                </td>
              </tr>

            </tbody>

          </table>




        </div>
      </div>
    </div>

  </div>

  <!-- ================================================= -->
  <!-- TAB : TUGAS VALIDATOR -->
  <!-- ================================================= -->

  <div 
    class="tab-pane fade show active"
    id="content-validator"
    role="tabpanel">

    <!-- ISI TABLE VALIDATOR -->

    <div class="card">
      <div class="card-body">

        Konten tabel tugas validator di sini.
        <!-- ===================================================== -->
        <!-- TABLE CARD -->
        <!-- ===================================================== -->
        <div class="card">
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-bordered table-striped table-sm datatables1">

                <thead>
                  <tr class="text-center text-uppercase">
                    <th>No</th>
                    <th>Kelas Perkuliahan</th>
                    <th>Soal Ujian</th>
                    <th>Verifikasi Soal</th>
                    <th>Last Update</th>
                    <th>Aksi</th>
                  </tr>
                </thead>

                <tbody>

                  <!-- ROW 1 -->
                  <tr>
                    <td class="text-center">1</td>

                    <td>
                      Dosen Pengampu: Dr. Nisa F <br>
                      Kelas: Pemrograman Web Lanjut (IF402) - IF-A
                    </td>

                    <td>
                      Tanggal Ujian: <b>12 Mei 2026</b><br>
                      Keterangan: Ujian Tengah Semester<br>
                     
                      <span class="badge badge-info">soal_uts_if402.pdf</span>
                    </td>

                    <td>
                      Verifikator: <b><b>Harun Ruddin</b></b><br>

                      Komentar:
                      <small class="text-warning">
                        Mohon revisi CPMK nomor 3 dan typo halaman 2.
                      </small>
                      <br>

                     
                      <span class="badge badge-warning">
                        Proses Revisi
                      </span>
                    </td>

                    <td>
                      10 Mei 2026 <br>
                      09:20 WIB
                    </td>

                    <td class="text-center">

                      <!-- DETAIL -->

                      <button class="btn btn-sm btn-outline-info"

                      data-bs-toggle="modal"
                      data-bs-target="#modalDetail"

                      data-kodemk="IF402"
                      data-mk="Pemrograman Web Lanjut"
                      data-dosen="<b>Harun Ruddin</b>"
                      data-validator="Dr. Ahmad Fauzi"
                      data-status="Revisi"

                      data-timeline='[
                      {"tanggal":"08 Mei 2026","aktivitas":"Upload soal oleh dosen"},
                      {"tanggal":"09 Mei 2026","aktivitas":"Admin menunjuk verifikator"},
                      {"tanggal":"10 Mei 2026","aktivitas":"Validator meminta revisi CPMK"}
                      ]'

                      onclick="showDetail(this)">

                      <i class="fas fa-eye"></i>

                    </button>

                    <!-- VERIFIKASI -->

                    <button class="btn btn-sm btn-outline-success"

                    data-bs-toggle="modal"
                    data-bs-target="#modalVerifikasi">

                    <i class="fas fa-check"></i>

                  </button>

                  <!-- UPLOAD -->

                  <button class="btn btn-sm btn-outline-primary">

                    <i class="fas fa-upload"></i>

                  </button>

                </td>
              </tr>

              <!-- ROW 2 -->
              <tr>
                <td class="text-center">2</td>

                <td>
                  Dosen Pengampu: Siti Rahmah <br>
                  Kelas: Basis Data (IF301) - IF-B
                </td>

                <td>
                  Tanggal Ujian: <b>15 Mei 2026</b><br>
                  Keterangan: Ujian Akhir Semester<br>
                  File:
                  <small>uas_basisdata.pdf</small>
                </td>

                <td>
                  Verifikator: <b><b>Harun Ruddin</b></b><br>

                  Komentar:
                  <small class="text-success">
                    Soal sudah sesuai CPMK.
                  </small>
                  <br>

                  Status:
                  <span class="badge badge-success">
                    Approved
                  </span>
                </td>

                <td>
                  11 Mei 2026 <br>
                  10:15 WIB
                </td>

                <td class="text-center">
                  <button class="btn btn-sm btn-outline-info"

                      data-bs-toggle="modal"
                      data-bs-target="#modalRiwayatVerifikasi"

                      onclick="showDetail(this)">

                      <i class="fas fa-eye"></i>

                    </button>

                  <button class="btn btn-sm btn-outline-success">
                    <i class="fas fa-check"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-upload"></i>
                  </button>
                </td>
              </tr>

              <!-- ROW 3 -->
              <tr>
                <td class="text-center">3</td>

                <td>
                  Dosen Pengampu: Nur Azizah <br>
                  Kelas: Struktur Data (IF220) - IF-C
                </td>

                <td>
                  Tanggal Ujian: <b>20 Mei 2026</b><br>
                  Keterangan: Ujian Tengah Semester<br>
                  File:
                  <small>uts_strukturdata.pdf</small>
                </td>

                <td>
                  Verifikator: <b><b>Harun Ruddin</b></b><br>

                  Komentar:
                  <small class="text-info">
                    Menunggu proses verifikasi.
                  </small>
                  <br>

                  Status:
                  <span class="badge badge-warning">
                    Proses Revisi
                  </span>
                </td>

                <td>
                  11 Mei 2026 <br>
                  14:10 WIB
                </td>

                <td class="text-center">
                  <button class="btn btn-sm btn-outline-info">
                    <i class="fas fa-eye"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-success">
                    <i class="fas fa-check"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-upload"></i>
                  </button>
                </td>
              </tr>

              <!-- ROW 4 -->
              <tr>
                <td class="text-center">4</td>

                <td>
                  Dosen Pengampu: Dedi Saputra <br>
                  Kelas: Algoritma Pemrograman (IF101) - IF-A
                </td>

                <td>
                  Tanggal Ujian: <b>18 Mei 2026</b><br>
                  Keterangan: Ujian Tengah Semester<br>
                  File:
                  <small>algoritma_uts.pdf</small>
                </td>

                <td>
                  Verifikator: <b><b>Harun Ruddin</b></b><br>

                  Komentar:
                  <small class="text-danger">
                    Kisi-kisi belum lengkap.
                  </small>
                  <br>

                  Status:
                  <span class="badge badge-danger">
                    Rejected
                  </span>
                </td>

                <td>
                  12 Mei 2026 <br>
                  08:30 WIB
                </td>

                <td class="text-center">
                  <button class="btn btn-sm btn-outline-info">
                    <i class="fas fa-eye"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-success">
                    <i class="fas fa-check"></i>
                  </button>

                  <button class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-upload"></i>
                  </button>
                </td>
              </tr>            

            </tbody>

          </table>




        </div>

      </div>
    </div>

  </div>

</div>

</div>

</div>

</div>
</section>
</div>

<!-- ===================================================== -->
<!-- MODAL FILTER -->
<!-- ===================================================== -->

<div class="modal fade" id="modalFilter" tabindex="-1">

  <div class="modal-dialog modal-lg modal-dialog-scrollable">

    <div class="modal-content border-0 shadow-lg rounded-4">

      <!-- =============================================== -->
      <!-- HEADER -->
      <!-- =============================================== -->

      <div class="modal-header bg-info text-white rounded-top-4">

        <div>
          <h5 class="modal-title fw-bold mb-1">
            <i class="fas fa-filter me-2"></i>
            Filter Monitoring Verifikasi Soal Ujian
          </h5>

          <small class="opacity-75">
            Gunakan filter untuk mempersempit data monitoring verifikasi soal ujian.
          </small>
        </div>

        <button class="btn-close btn-close-white"
        data-bs-dismiss="modal"></button>

      </div>

      <!-- =============================================== -->
      <!-- FORM -->
      <!-- =============================================== -->

      <form>

        <div class="modal-body bg-light-subtle">

          <div class="row g-3">

            <!-- ========================================= -->
            <!-- FILTER AKADEMIK -->
            <!-- ========================================= -->

            <div class="col-12 mt-1">
              <div class="border-bottom pb-2 mb-1">

                <h6 class="fw-bold mb-1">
                  <i class="fas fa-university text-info me-2"></i>
                  Filter Akademik
                </h6>

                <small class="text-muted">
                  Filter berdasarkan identitas kelas perkuliahan dan mata kuliah.
                </small>

              </div>
            </div>

            <!-- PERIODE AKADEMIK -->
            <div class="col-md-6">

              <label class="form-label fw-semibold">
                Periode Akademik
              </label>

              <select class="form-select">

                <option>Semua</option>
                <option>2025/2026 - Ganjil</option>
                <option>2025/2026 - Genap</option>

              </select>

            </div>

            <!-- MATA KULIAH -->
            <div class="col-md-6">

              <label class="form-label fw-semibold">
                Mata Kuliah
              </label>

              <input type="text"
              class="form-control"
              placeholder="Cari mata kuliah...">

            </div>

            <!-- DOSEN -->
            <div class="col-md-6">

              <label class="form-label fw-semibold">
                Dosen Pengampu
              </label>

              <input type="text"
              class="form-control"
              placeholder="Cari dosen pengampu...">

            </div>

            <!-- VALIDATOR -->
            <div class="col-md-6">

              <label class="form-label fw-semibold">
                Validator
              </label>

              <input type="text"
              class="form-control"
              placeholder="Cari validator...">

            </div>

            <!-- ========================================= -->
            <!-- FILTER WORKFLOW -->
            <!-- ========================================= -->

            <div class="col-12 mt-3">

              <div class="border-bottom pb-2 mb-1">

                <h6 class="fw-bold mb-1">
                  <i class="fas fa-project-diagram text-warning me-2"></i>
                  Filter Workflow Verifikasi
                </h6>

                <small class="text-muted">
                  Filter berdasarkan status proses verifikasi soal ujian.
                </small>

              </div>

            </div>

            <!-- STATUS -->
            <div class="col-md-6">

              <label class="form-label fw-semibold">
                Status Workflow
              </label>

              <select class="form-select">

                <option>Semua</option>
                <option>Penugasan Validator</option>
                <option>Proses Verifikasi</option>
                <option>Proses Revisi</option>
                <option>Approved</option>

              </select>

            </div>

            <!-- ========================================= -->
            <!-- FILTER WAKTU -->
            <!-- ========================================= -->

            <!-- <div class="col-12 mt-3">

              <div class="border-bottom pb-2 mb-1">

                <h6 class="fw-bold mb-1">
                  <i class="fas fa-calendar-alt text-success me-2"></i>
                  Filter Waktu
                </h6>

                <small class="text-muted">
                  Filter berdasarkan tanggal upload atau revisi soal ujian.
                </small>

              </div>

            </div>


            <div class="col-md-6">

              <label class="form-label fw-semibold">
                Tanggal Upload Awal
              </label>

              <input type="date"
              class="form-control">

            </div>


            <div class="col-md-6">

              <label class="form-label fw-semibold">
                Tanggal Upload Akhir
              </label>

              <input type="date"
              class="form-control">

            </div> -->

          </div>

        </div>

        <!-- =============================================== -->
        <!-- FOOTER -->
        <!-- =============================================== -->

        <div class="modal-footer bg-white rounded-bottom-4">

          <button type="reset"
          class="btn btn-outline-secondary">

          <i class="fas fa-undo me-1"></i>
          Reset Filter

        </button>

        <button type="button"
        class="btn btn-light border"
        data-bs-dismiss="modal">

        Tutup

      </button>

      <button type="submit"
      class="btn btn-info text-white">

      <i class="fas fa-search me-1"></i>
      Terapkan Filter

    </button>

  </div>

</form>

</div>

</div>

</div>

<!-- ===================================================== -->
<!-- MODAL DETAIL -->
<!-- ===================================================== -->

<div class="modal fade" id="modalDetail" tabindex="-1">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-info text-white">

        <h5 class="modal-title">
          Detail Workflow Verifikasi
        </h5>

        <button class="btn-close btn-close-white"
        data-bs-dismiss="modal"></button>

      </div>

      <div class="modal-body">

        <table class="table table-bordered">

          <tr>
            <th width="200">Kode MK</th>
            <td id="detailKodeMK"></td>
          </tr>

          <tr>
            <th>Mata Kuliah</th>
            <td id="detailMK"></td>
          </tr>

          <tr>
            <th>Dosen</th>
            <td id="detailDosen"></td>
          </tr>

          <tr>
            <th>Validator</th>
            <td id="detailValidator"></td>
          </tr>

          <tr>
            <th>Status</th>
            <td id="detailStatus"></td>
          </tr>

        </table>

        <h6 class="mt-4">
          Timeline Workflow
        </h6>

        <table class="table table-bordered">

          <thead>

            <tr>
              <th width="200">Tanggal</th>
              <th>Aktivitas</th>
            </tr>

          </thead>

          <tbody id="timelineBody">

          </tbody>

        </table>

      </div>

    </div>

  </div>

</div>

<!-- ========================================================= -->
<!-- MODAL RIWAYAT VERIFIKASI SOAL UJIAN -->
<!-- FULL WORKFLOW HISTORY -->
<!-- ========================================================= -->

<div class="modal fade" id="modalRiwayatVerifikasi" tabindex="-1">

  <div class="modal-dialog modal-xl modal-dialog-scrollable">

    <div class="modal-content border-0 rounded-4">

      <!-- ===================================================== -->
      <!-- MODAL HEADER -->
      <!-- ===================================================== -->

      <div class="modal-header border-bottom bg-white">

        <div>

          <h5 class="modal-title fw-bold">
            <i class="fas fa-history text-primary me-2"></i>
            Riwayat Verifikasi Soal Ujian
          </h5>

          <small class="text-muted">
            Histori upload soal, penugasan validator, revisi, dan approval akhir.
          </small>

        </div>

        <button type="button"
          class="btn-close"
          data-bs-dismiss="modal"></button>

      </div>

      <!-- ===================================================== -->
      <!-- MODAL BODY -->
      <!-- ===================================================== -->

      <div class="modal-body bg-light-subtle">

        <!-- ================================================= -->
        <!-- INFORMASI UMUM -->
        <!-- ================================================= -->

        <div class="card border-0 shadow-sm rounded-4 mb-4">

          <div class="card-body">

            <div class="row g-4">

              <div class="col-md-4">
                <div class="small text-muted">Mata Kuliah</div>
                <div class="fw-semibold">
                  Metode Pelaksanaan Bangunan (STS704)
                </div>
              </div>

              <div class="col-md-4">
                <div class="small text-muted">Kelas</div>
                <div class="fw-semibold">
                  A
                </div>
              </div>

              <div class="col-md-4">
                <div class="small text-muted">Periode Akademik</div>
                <div class="fw-semibold">
                  2024/2025 - Gasal
                </div>
              </div>

              <div class="col-md-6">
                <div class="small text-muted">Dosen Pengampu</div>
                <div class="fw-semibold">
                  Tri Nugroho Sulistyantoro, S.T., M.T.
                </div>
              </div>

              <div class="col-md-6">
                <div class="small text-muted">Soal Ujian</div>
                <div class="fw-semibold">
                  Ujian Akhir Semester
                </div>
              </div>

            </div>

          </div>

        </div>

        <!-- ================================================= -->
        <!-- TIMELINE -->
        <!-- ================================================= -->

        <div class="timeline-workflow">

          <!-- ============================================= -->
          <!-- 1. DOSEN UPLOAD -->
          <!-- ============================================= -->

          <div class="card border-0 shadow-sm rounded-4 mb-3">

            <div class="card-body">

              <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">

                <div>

                  <div class="fw-bold fs-5">
                    Dosen Pengampu
                  </div>

                  <div class="text-muted small">
                    Tri Nugroho Sulistyantoro, S.T., M.T.
                  </div>

                </div>

                <div class="text-end">

                  <span class="badge bg-primary-subtle text-dark border">
                    Penugasan Validator
                  </span>

                  <div class="small text-muted mt-1">
                    09 Mei 2026 08:10 WIB
                  </div>

                </div>

              </div>

              <hr>

              <div class="mb-3">

                <div class="small text-muted mb-1">
                  Aktivitas
                </div>

                <div>
                  Dosen mengupload soal ujian awal untuk proses verifikasi.
                </div>

              </div>

              <div class="row g-3">
                <div class="col-md-6">

                  <div class="small text-muted">
                    File Upload
                  </div>

                  <a href="#" class="text-decoration-none">
                    soal-uts-metode-pelaksanaan-v1.pdf
                  </a>

                </div>

                <div class="col-md-6">

                  <div class="small text-muted">
                    State Workflow
                  </div>

                  <div class="fw-semibold">
                    NULL → created
                  </div>

                </div>

              </div>

            </div>

          </div>

          <!-- ============================================= -->
          <!-- 2. PENUGASAN VALIDATOR -->
          <!-- ============================================= -->

          <div class="card border-0 shadow-sm rounded-4 mb-3">

            <div class="card-body">

              <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">

                <div>

                  <div class="fw-bold fs-5">
                    Admin Prodi
                  </div>

                  <div class="text-muted small">
                    Admin Teknik Sipil
                  </div>

                </div>

                <div class="text-end">

                  <span class="badge bg-info-subtle text-dark border">
                    Proses Verifikasi
                  </span>

                  <div class="small text-muted mt-1">
                    09 Mei 2026 09:00 WIB
                  </div>

                </div>

              </div>

              <hr>

              <div class="mb-3">

                <div class="small text-muted mb-1">
                  Aktivitas
                </div>

                <div>
                  Validator ditugaskan untuk melakukan verifikasi soal ujian.
                </div>

              </div>

              <div class="row g-3">
                
                <div class="col-md-6">

                  <div class="small text-muted">
                    Validator Ditugaskan
                  </div>

                  <div class="fw-semibold">
                    Hasan, ST, MT.
                  </div>

                </div>
<div class="col-md-6">

                  <div class="small text-muted">
                    State Workflow
                  </div>

                  <div class="fw-semibold">
                    created → validator_assigned
                  </div>

                </div>
              </div>

            </div>

          </div>

          <!-- ============================================= -->
          <!-- 3. REVISI -->
          <!-- ============================================= -->

          <div class="card border-0 shadow-sm rounded-4 mb-3">

            <div class="card-body">

              <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">

                <div>

                  <div class="fw-bold fs-5">
                    Validator
                  </div>

                  <div class="text-muted small">
                    Hasan, ST, MT.
                  </div>

                </div>

                <div class="text-end">

                  <span class="badge bg-warning-subtle text-dark border">
                    Proses Revisi
                  </span>

                  <div class="small text-muted mt-1">
                    10 Mei 2026 14:30 WIB
                  </div>

                </div>

              </div>

              <hr>

              <div class="mb-3">

                <div class="small text-muted mb-1">
                  Komentar Verifikasi
                </div>

                <div>
                  Tambahkan kisi-kisi CPMK dan revisi bobot penilaian pada soal nomor 4.
                </div>

              </div>

              <div class="row g-3">

                

                <div class="col-md-6">

                  <div class="small text-muted">
                    File Diverifikasi
                  </div>

                  <a href="#" class="text-decoration-none">
                    soal-uts-metode-pelaksanaan-v1.pdf
                  </a>

                </div>
<div class="col-md-6">

                  <div class="small text-muted">
                    State Workflow
                  </div>

                  <div class="fw-semibold">
                    validator_assigned → revision_required
                  </div>

                </div>
              </div>

            </div>

          </div>

          <!-- ============================================= -->
          <!-- 4. DOSEN REVISI -->
          <!-- ============================================= -->

          <div class="card border-0 shadow-sm rounded-4 mb-3">

            <div class="card-body">

              <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">

                <div>

                  <div class="fw-bold fs-5">
                    Dosen Pengampu
                  </div>

                  <div class="text-muted small">
                    Tri Nugroho Sulistyantoro, S.T., M.T.
                  </div>

                </div>

                <div class="text-end">

                  <span class="badge bg-info-subtle text-dark border">
                    Proses Verifikasi
                  </span>

                  <div class="small text-muted mt-1">
                    11 Mei 2026 08:15 WIB
                  </div>

                </div>

              </div>

              <hr>

              <div class="mb-3">

                <div class="small text-muted mb-1">
                  Aktivitas
                </div>

                <div>
                  Dosen melakukan upload ulang file soal hasil revisi sesuai komentar validator.
                </div>

              </div>

              <div class="row g-3">

                

                <div class="col-md-6">

                  <div class="small text-muted">
                    File Revisi
                  </div>

                  <a href="#" class="text-decoration-none">
                    soal-uts-metode-pelaksanaan-v2.pdf
                  </a>

                </div>
<div class="col-md-6">

                  <div class="small text-muted">
                    State Workflow
                  </div>

                  <div class="fw-semibold">
                    revision_required → validator_assigned
                  </div>

                </div>
              </div>

            </div>

          </div>

          <!-- ============================================= -->
          <!-- 5. APPROVED -->
          <!-- ============================================= -->

          <div class="card border-0 shadow-sm rounded-4">

            <div class="card-body">

              <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">

                <div>

                  <div class="fw-bold fs-5">
                    Validator
                  </div>

                  <div class="text-muted small">
                    Hasan, ST, MT.
                  </div>

                </div>

                <div class="text-end">

                  <span class="badge bg-success-subtle text-dark border">
                    Approved
                  </span>

                  <div class="small text-muted mt-1">
                    11 Mei 2026 10:42 WIB
                  </div>

                </div>

              </div>

              <hr>

              <div class="mb-3">

                <div class="small text-muted mb-1">
                  Keputusan Verifikasi
                </div>

                <div>
                  Soal ujian telah sesuai dengan format, CPMK, dan standar akademik program studi.
                </div>

              </div>

              <div class="row g-3">

                

                <div class="col-md-6">

                  <div class="small text-muted">
                    Final File
                  </div>

                  <a href="#" class="text-decoration-none">
                    soal-uts-metode-pelaksanaan-final.pdf
                  </a>

                </div>
<div class="col-md-6">

                  <div class="small text-muted">
                    State Workflow
                  </div>

                  <div class="fw-semibold">
                    validator_assigned → approved
                  </div>

                </div>
              </div>

            </div>

          </div>

        </div>

      </div>

      <!-- ===================================================== -->
      <!-- MODAL FOOTER -->
      <!-- ===================================================== -->

      <div class="modal-footer bg-white border-top">

        <button class="btn btn-light border"
          data-bs-dismiss="modal">
          Tutup
        </button>

      </div>

    </div>

  </div>

</div>

<!-- ===================================================== -->
<!-- MODAL VERIFIKASI -->
<!-- ===================================================== -->

<div class="modal fade" id="modalVerifikasi" tabindex="-1">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header bg-success text-white">

        <h5 class="modal-title">
          Verifikasi Soal
        </h5>

        <button class="btn-close btn-close-white"
        data-bs-dismiss="modal"></button>

      </div>

      <form>

        <div class="modal-body">

          <div class="mb-3">

            <label>Status Verifikasi</label>

            <select class="form-select">

              <option>Disetujui</option>
              <option>Revisi</option>

            </select>

          </div>

          <div class="mb-3">

            <label>Komentar Verifikasi</label>

            <textarea class="form-control"
            rows="5"
            placeholder="Tulis komentar verifikasi atau revisi"></textarea>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button"
          class="btn btn-secondary"
          data-bs-dismiss="modal">
          Batal
        </button>

        <button class="btn btn-success">
          Simpan Verifikasi
        </button>

      </div>

    </form>

  </div>

</div>

</div>

<!-- ===================================================== -->
<!-- MODAL BANTUAN -->
<!-- ===================================================== -->

<div class="modal fade" id="modalBantuan" tabindex="-1">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-primary text-white">

        <h5 class="modal-title">
          Bantuan Monitor Verifikasi
        </h5>

        <button class="btn-close btn-close-white"
        data-bs-dismiss="modal"></button>

      </div>

      <div class="modal-body">

        <p>
          Halaman ini digunakan untuk memonitor proses upload, revisi, verifikasi, dan persetujuan soal ujian.
        </p>

        <ul>

          <li>
            Dosen dapat upload dan revisi soal.
          </li>

          <li>
            Admin Prodi dapat menentukan validator.
          </li>

          <li>
            Validator dapat menyetujui atau meminta revisi.
          </li>

          <li>
            Kaprodi dapat melihat monitoring dan detail workflow.
          </li>

        </ul>

      </div>

    </div>

  </div>

</div>

<!-- ===================================================== -->
<!-- SCRIPT -->
<!-- ===================================================== -->

<script>

  function showDetail(el){

    document.getElementById('detailKodeMK').innerHTML = el.dataset.kodemk;
    document.getElementById('detailMK').innerHTML = el.dataset.mk;
    document.getElementById('detailDosen').innerHTML = el.dataset.dosen;
    document.getElementById('detailValidator').innerHTML = el.dataset.validator;
    document.getElementById('detailStatus').innerHTML = el.dataset.status;

    const timeline = JSON.parse(el.dataset.timeline || "[]");

    let html = '';

    timeline.forEach(function(item){

      html += `
      <tr>
      <td>${item.tanggal}</td>
      <td>${item.aktivitas}</td>
      </tr>
      `;

    });

    document.getElementById('timelineBody').innerHTML = html;

  }

</script>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
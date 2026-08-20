<?php $page = 'evaluasi_prodi'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>
<style>
  body { background: #f4f6f9; }
  .kpi { border-radius: 10px; padding: 18px; color: #fff; }
  .kpi .big { font-size: 1.6rem; font-weight:700; }
  .kpi .small { font-size: 0.85rem; opacity: .9; }
  .card { border-radius:10px; }
  .status-dot { display:inline-block; width:10px; height:10px; border-radius:50%; margin-right:6px; vertical-align:middle; }
  .status-green { background:#28a745; }
  .status-yellow { background:#ffc107; }
  .status-red { background:#dc3545; }
  .ewstable td, .ewstable th { vertical-align: middle; }
  .table-fixed-height { max-height: 360px; overflow:auto; }
</style>
  
<style>
  .chart-container {
      position: relative;
      height: 300px;
  }
</style>
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Evaluasi Kurikulum
      <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modalBantuan" title="Bantuan"><i class="fas fa-info-circle"></i>
        </button>
      </h3>
        <p class="text-muted mb-0">Keterangan singkat cara baca informasi halaman ini</p>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Main row -->
      <div class="row">
        <div class="col-md-12">

<!-- ========== CARD : Filter & Export ========== -->
          <div class="card">
            <div class="card-body ">
              <div class="row">
                <!-- <div class="col-md-6">
                  <b>Jenis[mandatory]:</b> Kurikulum/Sistem
                </div>
                              
                <div class="col-md-6">
                  <b>Modul ref[Pilih]:</b> Monev Angkatan
                </div> -->
              <div class="col-md-6">
                <b>Prioritas [pilih]:</b> Semua
              </div>
              <div class="col-md-6">
                <b>Status [pilih]:</b> Semua
              </div>
                
              </div>
            </div>
            <div class="card-footer">
              <div class="card-tools ml-auto">
                <button class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#modalFilter">
                  <i class="fas fa-filter mr-1"></i> Filter
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalTambahTemuan">
                  <i class="fas fa-plus mr-1"></i> Temuan Evaluasi
                </button>    
                <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalTambahAksi">
                  <i class="fas fa-plus mr-1"></i> Aksi Evaluasi
                </button> 
                <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalImpor">
                  <i class="fas fa-file-upload mr-1"></i> Import
                </button>  
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download mr-1"></i> Export
                </button>
                <button class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#modalModel">
                  <i class="fas fa-info-circle"></i></i> Model
                </button>
                <button class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#modalRangkuman">
                  <i class="fas fa-info-circle"></i> Rangkuman
                </button>
                <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#modalActionPlan">
                  <i class="fas fa-tasks mr-1"></i> Action Plan
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modalActionPlanSimple">
                  <i class="fas fa-plus mr-1"></i> Action Plan
                </button>
              </div>
            </div>
          </div>

<!-- ========== CARD : Tabel Granular ========== -->
          <div class="card">
            <div class="card-header">
                  Daftar modalActionPlanSimple
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm datatables1">

                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Temuan Evaluasi </th>
                      <th>Deskripsi Aksi (Specific)*</th>
                      <th>Target (Measurable)*</th>
                      <th>PIC (Achieveable)*</th>
                      <th>Prioritas (Relevansi)*</th>
                      <th>Deadline (Time)*</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>AP-01</td>
                      <td>
                        Hasil evaluasi capaian CPL (Capaian Pembelajaran Lulusan) Semester Gasal 2025/2026 menunjukkan:  
                        - 2 dari 6 CPL program studi belum mencapai ≥ 80% rata-rata capaian mahasiswa.  
                        - Indikator yang belum tercapai: kemampuan analisis data, keterampilan komunikasi teknis, dan kerja tim.  
                        - Data diperoleh dari evaluasi hasil ujian akhir, proyek mata kuliah, dan asesmen rubrik OBE.  
                      </td>
                      <td>Workshop intensif revisi RPS dan modul pembelajaran berbasis OBE untuk mata kuliah terkait, serta pendampingan dosen pengampu.</td>
                      <td>≥ 85% mahasiswa mencapai indikator CPL yang ditargetkan.</td>
                      <td>Ketua Prodi & Koordinator MK terkait</td>
                      <td><span class="badge badge-danger">Top</span></td>
                      <td>2026-06-30</td>
                      <td>Planned</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-primary mr-1" data-toggle="modal"  data-target="#modalActionPlanSimple2"><i class="fas fa-tasks"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>AP-02</td>
                      <td>CPL belum tercapai optimal</td>
                      <td>Workshop revisi RPS</td>
                      <td>≥ 90% sesuai OBE</td>
                      <td>Ketua Prodi</td>
                      <td><span class="badge badge-danger">Top</span></td>
                      <td>2025-02-15</td>
                      <td>Ongoing</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-primary mr-1" data-toggle="modal"  data-target="#modalActionPlanSimple2"><i class="fas fa-tasks"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>AP-03</td>
                      <td>Variansi nilai antar kelas tinggi</td>
                      <td>Standarisasi rubrik penilaian</td>
                      <td>Selisih ≤ 10%</td>
                      <td>Koordinator MK</td>
                      <td><span class="badge badge-warning text-dark">Mid</span></td>
                      <td>2025-03-01</td>
                      <td>Planned</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-primary mr-1" data-toggle="modal"  data-target="#modalActionPlanSimple2"><i class="fas fa-tasks"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>AP-04</td>
                      <td>Mahasiswa lemah prasyarat</td>
                      <td>Pembuatan modul dasar</td>
                      <td>≥ 80% lulus pre-test</td>
                      <td>Dosen Pengampu</td>
                      <td><span class="badge badge-success">Low</span></td>
                      <td>2025-02-20</td>
                      <td>Completed</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-primary mr-1" data-toggle="modal"  data-target="#modalActionPlanSimple2"><i class="fas fa-tasks"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>AP-05</td>
                      <td>CPL belum tercapai optimal</td>
                      <td>Workshop revisi RPS</td>
                      <td>≥ 90% sesuai OBE</td>
                      <td>Ketua Prodi</td>
                      <td><span class="badge badge-danger" title="Strategis / Critical">Top</span></td>
                      <td>2025-02-15</td>
                      <td> Delayed</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-primary mr-1" data-toggle="modal"  data-target="#modalActionPlanSimple2"><i class="fas fa-tasks"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>AP-06</td>
                      <td>Variansi nilai antar kelas tinggi</td>
                      <td>Standarisasi rubrik penilaian</td>
                      <td>Selisih ≤ 10%</td>
                      <td>Koordinator MK</td>
                      <td><span class="badge badge-warning text-dark" title="Penting">Mid</span></td>
                      <td>2025-03-01</td>
                      <td>Ineffective</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-primary mr-1" data-toggle="modal"  data-target="#modalActionPlanSimple2"><i class="fas fa-tasks"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>AP-07</td>
                      <td>Mahasiswa lemah prasyarat</td>
                      <td>Pembuatan modul dasar</td>
                      <td>≥ 80% lulus pre-test</td>
                      <td>Dosen Pengampu</td>
                      <td><span class="badge badge-success" title="Pendukung">Low</span></td>
                      <td>2025-02-20</td>
                      <td>Completed</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-primary mr-1" data-toggle="modal"  data-target="#modalActionPlanSimple2"><i class="fas fa-tasks"></i></button>
                      </td>
                    </tr>
                  </tbody>

                </table>
              </div>
            </div>
            <!-- /.card-body -->
          </div>

         
        <!-- ========== CARD : Tabel Granular ========== -->
          <div class="card">
            <div class="card-header">
                  Daftar modalActionPlan
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm datatables1">

                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Temuan</th>
                      <th>Specific (Aksi)</th>
                      <th>Measurable</th>
                      <th>Achievable</th>
                      <th>Relevant</th>
                      <th>Penanggung Jawab</th>
                      <th>Deadline</th>
                      <th>Status</th>
                      <th>Dibuat Oleh</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>AP-001</td>
                      <td>CPL-03 tidak tercapai pada 40% mahasiswa</td>
                      <td>Workshop redesign RPS berbasis OBE</td>
                      <td>≥ 90% RPS sesuai OBE</td>
                      <td>Tim Kurikulum + 5 dosen</td>
                      <td>Peningkatan CPL Prodi</td>
                      <td>Ketua Prodi</td>
                      <td>2025-02-15</td>
                      <td>Ongoing</td>
                      <td>Admin Prodi</td>
                    </tr>

                    <tr>
                      <td>AP-002</td>
                      <td>Variansi nilai antar kelas tinggi</td>
                      <td>Standarisasi rubrik penilaian</td>
                      <td>Selisih nilai antar kelas ≤ 10%</td>
                      <td>Koordinator MK</td>
                      <td>Standarisasi evaluasi</td>
                      <td>GKM</td>
                      <td>2025-03-01</td>
                      <td>Planned</td>
                      <td>Admin Prodi</td>
                    </tr>

                    <tr>
                      <td>AP-003</td>
                      <td>Mahasiswa lemah pada prasyarat konsep dasar</td>
                      <td>Penyusunan modul prasyarat</td>
                      <td>≥ 80% mahasiswa lulus pre-test</td>
                      <td>Dosen Pengampu</td>
                      <td>Peningkatan kesiapan mahasiswa</td>
                      <td>Wakil Ketua Akademik</td>
                      <td>2025-02-20</td>
                      <td>Ongoing</td>
                      <td>Admin Prodi</td>
                    </tr>

                    <tr>
                      <td>AP-004</td>
                      <td>Instrumen asesmen terlalu sulit</td>
                      <td>Review dan simplifikasi soal</td>
                      <td>Nilai rata-rata naik ≥ 10%</td>
                      <td>Tim Evaluasi</td>
                      <td>Perbaikan instrumen</td>
                      <td>Koordinator MK</td>
                      <td>2025-02-28</td>
                      <td>Completed</td>
                      <td>Admin Prodi</td>
                    </tr>

                    <tr>
                      <td>AP-005</td>
                      <td>CPMK tidak terukur dengan baik</td>
                      <td>Workshop penyusunan CPMK terukur</td>
                      <td>100% CPMK memiliki indikator</td>
                      <td>Tim Kurikulum</td>
                      <td>Perbaikan desain kurikulum</td>
                      <td>Ketua Prodi</td>
                      <td>2025-03-10</td>
                      <td>Planned</td>
                      <td>Admin Prodi</td>
                    </tr>

                    <tr>
                      <td>AP-006</td>
                      <td>Keterlambatan input nilai dosen</td>
                      <td>Sosialisasi deadline & reminder sistem</td>
                      <td>95% dosen input tepat waktu</td>
                      <td>Admin Akademik</td>
                      <td>Disiplin administrasi</td>
                      <td>BAAK</td>
                      <td>2025-02-25</td>
                      <td>Ongoing</td>
                      <td>Admin Prodi</td>
                    </tr>

                    <tr>
                      <td>AP-007</td>
                      <td>Partisipasi mahasiswa rendah</td>
                      <td>Penerapan metode pembelajaran aktif</td>
                      <td>≥ 75% kehadiran aktif</td>
                      <td>Dosen MK</td>
                      <td>Peningkatan engagement</td>
                      <td>Koordinator MK</td>
                      <td>2025-03-05</td>
                      <td>Ongoing</td>
                      <td>Admin Prodi</td>
                    </tr>

                    <tr>
                      <td>AP-008</td>
                      <td>Ketidaksesuaian RPS antar kelas</td>
                      <td>Standarisasi template RPS</td>
                      <td>100% RPS seragam</td>
                      <td>Tim Kurikulum</td>
                      <td>Konsistensi pembelajaran</td>
                      <td>Ketua Prodi</td>
                      <td>2025-02-18</td>
                      <td>Completed</td>
                      <td>Admin Prodi</td>
                    </tr>

                    <tr>
                      <td>AP-009</td>
                      <td>Tidak ada monitoring berkala CPL</td>
                      <td>Membangun dashboard monitoring CPL</td>
                      <td>Dashboard aktif & digunakan</td>
                      <td>Tim IT + GKM</td>
                      <td>Digitalisasi monitoring</td>
                      <td>Wakil Ketua</td>
                      <td>2025-03-15</td>
                      <td>Planned</td>
                      <td>Admin Prodi</td>
                    </tr>
                  </tbody>

                </table>
              </div>
            </div>
            <!-- /.card-body -->
          </div>



          <!-- TAB NAV  -->
           <ul class="nav nav-tabs">
            <li class="nav-item" onclick="window.location='evaluasi-kurikulum.php'"><a class="nav-link active">Temuan Evaluasi</a></li>
            <li class="nav-item" onclick="window.location='evaluasi-kurikulum2.php'"><a class="nav-link ">Aksi Evaluasi</a></li>
          </ul>

        <!-- ========== CARD : Tabel Granular ========== -->
          <div class="card">
            <!-- <div class="card-header">
                  Daftar Temuan/Aksi Evaluasi OBE
            </div> -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm datatables1">
                 
 
                

  <thead>
    <tr>
      <th>id_temuan (PK)</th>
      <th>reference_module</th>
      <th>reference_id</th>
      <th>jenis_evaluasi</th>
      <th>objek</th>
      <th>periode</th>
      <th>deskripsi_temuan</th>
      <th>tingkat_prioritas</th>
      <th>dibuat_oleh</th>
      <th>tanggal_temuan</th>

      <!-- Impact (Kuning) -->
      <th style="background-color:#fff3cd;">indikator_sebelum</th>
      <th style="background-color:#fff3cd;">indikator_sesudah</th>
      <th style="background-color:#fff3cd;">analisis_dampak</th>
      <th style="background-color:#fff3cd;">kesimpulan_dampak</th>
      <th style="background-color:#fff3cd;">tanggal_review</th>

      <!-- Governance (Merah) -->
      <th style="background-color:#f8d7da;">status_temuan</th>
      <th style="background-color:#f8d7da;">disetujui_oleh</th>
      <th style="background-color:#f8d7da;">tanggal_persetujuan</th>
      <th style="background-color:#f8d7da;">tanggal_penutupan</th>
      <th style="background-color:#f8d7da;">arsip</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>TM-2025-001</td>
      <td>Kurikulum</td>
      <td>KRK-OBE-03</td>
      <td>Sistem</td>
      <td>RPS Semester 3</td>
      <td>Ganjil 2024/2025</td>
      <td>40% RPS belum mengacu pada standar OBE terutama pada CPMK dan asesmen.</td>
      <td>Tinggi</td>
      <td>Ketua GKM</td>
      <td>10-01-2025</td>

      <!-- Impact (Kuning) -->
      <td style="background-color:#fff3cd;">60% RPS sesuai OBE</td>
      <td style="background-color:#fff3cd;">95% RPS sesuai OBE</td>
      <td style="background-color:#fff3cd;">Peningkatan signifikan setelah workshop dan revisi template.</td>
      <td style="background-color:#fff3cd;">Target tercapai dan efektif.</td>
      <td style="background-color:#fff3cd;">15-03-2025</td>

      <!-- Governance (Merah) -->
      <td style="background-color:#f8d7da;">Ditutup</td>
      <td style="background-color:#f8d7da;">Ketua Prodi</td>
      <td style="background-color:#f8d7da;">12-01-2025</td>
      <td style="background-color:#f8d7da;">20-03-2025</td>
      <td style="background-color:#f8d7da;">Tidak</td>
    </tr>
  </tbody>
                </table>
              </div>
            </div>
          </div>












        </div>
      </div>
    </div>
  </section>
  </div>
  <!-- /.content-wrapper -->

<?php include('4footer.php'); ?>

<!-- Modal Filter -->
<div class="modal fade" id="modalFilter" tabindex="-1" aria-labelledby="modalFilterLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="modalFilterLabel">Filter Data</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form action="" method="GET">

        <div class="modal-body">
          <!-- Catatan penting -->
          <div class="alert alert-warning mb-3" role="alert" style="font-size: 0.9rem;">
            <b>Informasi:</b> Halaman ini otomatis menampilkan data angkatan terbaru saat pertama dibuka. Data awal yang tampil adalah angkatan [2025].
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select name="angkatan" id="angkatan" class="custom-select">
              <option value="">-- Pilih Angkatan --</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="custom-select">
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="NonAktif">NonAktif</option>
            </select>
          </div>
       
       </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info">Terapkan Filter</button>
        </div>

      </form>
    </div>
  </div>
</div>




<!-- Modal Tambah Evaluasi OBE -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahData" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content rounded-3 shadow">
      
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalTambahEvaluasiLabel">Tambah Data Evaluasi OBE</h5>
        <button type="button" class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <form action="" method="POST">
        <div class="modal-body">

          <!-- Informasi -->
          <div class="alert alert-warning py-2 small">
            Semua field bertanda <span class="text-danger">*</span> wajib diisi. <a href="https://chatgpt.com/s/t_69a015fb4e208191b98adad854a9d153">Ref</a>
          </div>

          <!-- ================= CORE FIELD ================= -->
          <h6 class="fw-bold text-primary border-bottom pb-2">Core Information</h6>

          <div class="row">
            <div class="col-md-4 mb-3">
              <label class="form-label">Reference Module <span class="text-danger">*</span></label>
              <select name="reference_module" class="custom-select" required>
                <option value="">-- Pilih Modul Monev --</option>
                <option>Monev Kelas</option>
                <option>Monev Semester</option>
                <option>Monev Tahunan</option>
                <option>Monev Individu</option>
                <option>Monev Angkatan</option>
                <option>Monev Yudisium</option>
              </select>
            </div>

            <div class="col-md-4 mb-3">
              <label class="form-label">Reference ID <span class="text-danger">*</span></label>
              <input type="text" name="reference_id" class="form-control" placeholder="ID Data Monev" required>
            </div>

            <div class="col-md-4 mb-3">
              <label class="form-label">Periode <span class="text-danger">*</span></label>
              <input type="text" name="periode" class="form-control" placeholder="Contoh: 2024 / 2024-1" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 mb-3">
              <label class="form-label">Jenis Evaluasi <span class="text-danger">*</span></label>
              <select name="jenis_evaluasi" class="custom-select" required>
                <option value="">-- Pilih Jenis --</option>
                <option>Proses</option>
                <option>Perkembangan</option>
                <option>Outcome</option>
                <option>Sistem</option>
              </select>
            </div>

            <div class="col-md-4 mb-3">
              <label class="form-label">Objek Evaluasi <span class="text-danger">*</span></label>
              <input type="text" name="objek" class="form-control" placeholder="Contoh: CPL 4 - Angk 2021" required>
            </div>

            <div class="col-md-4 mb-3">
              <label class="form-label">Tingkat Prioritas <span class="text-danger">*</span></label>
              <select name="tingkat_prioritas" class="custom-select" required>
                <option value="">-- Pilih Prioritas --</option>
                <option>Low</option>
                <option>Medium</option>
                <option>High</option>
                <option>Critical</option>
              </select>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Deskripsi Temuan <span class="text-danger">*</span></label>
            <textarea name="deskripsi_temuan" class="form-control" rows="3" required></textarea>
          </div>

          <!-- ================= ACTION FIELD ================= -->
          <h6 class="fw-bold text-success border-bottom pb-2 mt-4">Action Plan</h6>

          <div class="mb-3">
            <label class="form-label">Deskripsi Aksi Perbaikan <span class="text-danger">*</span></label>
            <textarea name="deskripsi_aksi" class="form-control" rows="3" required></textarea>
          </div>

          <div class="row">
            <div class="col-md-4 mb-3">
              <label class="form-label">Penanggung Jawab <span class="text-danger">*</span></label>
              <input type="text" name="penanggung_jawab" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
              <label class="form-label">Target Waktu <span class="text-danger">*</span></label>
              <input type="date" name="target_waktu" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
              <label class="form-label">Target Indikator <span class="text-danger">*</span></label>
              <input type="text" name="target_indikator" class="form-control" placeholder="Contoh: CPL ≥ 75%" required>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Status Aksi <span class="text-danger">*</span></label>
            <select name="status_aksi" class="custom-select" required>
              <option value="">-- Pilih Status --</option>
              <option>Planned</option>
              <option>Ongoing</option>
              <option>Completed</option>
              <option>Ineffective</option>
            </select>
          </div>

          <!-- ================= IMPACT FIELD ================= -->
          <h6 class="fw-bold text-warning border-bottom pb-2 mt-4">Impact Review</h6>

          <div class="row">
            <div class="col-md-4 mb-3">
              <label class="form-label">Indikator Sebelum</label>
              <input type="text" name="indikator_sebelum" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
              <label class="form-label">Indikator Sesudah</label>
              <input type="text" name="indikator_sesudah" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
              <label class="form-label">Tanggal Review</label>
              <input type="date" name="tanggal_review" class="form-control">
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Analisis Dampak</label>
            <textarea name="analisis_dampak" class="form-control" rows="2"></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label">Kesimpulan Dampak</label>
            <select name="kesimpulan_dampak" class="custom-select">
              <option value="">-- Pilih Kesimpulan --</option>
              <option>Effective</option>
              <option>Partially Effective</option>
              <option>Ineffective</option>
            </select>
          </div>

          <!-- ================= GOVERNANCE FIELD ================= -->
          <h6 class="fw-bold text-danger border-bottom pb-2 mt-4">Governance</h6>

          <div class="row">
            <div class="col-md-4 mb-3">
              <label class="form-label">Status Evaluasi <span class="text-danger">*</span></label>
              <select name="status_evaluasi" class="custom-select" required>
                <option value="">-- Pilih Status --</option>
                <option>Draft</option>
                <option>Final</option>
                <option>Approved</option>
                <option>Closed</option>
              </select>
            </div>

            <div class="col-md-4 mb-3">
              <label class="form-label">Disetujui Oleh</label>
              <input type="text" name="disetujui_oleh" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
              <label class="form-label">Tanggal Persetujuan</label>
              <input type="date" name="tanggal_persetujuan" class="form-control">
            </div>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan Evaluasi</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Bantuan -->
<div class="modal fade" id="modalBantuan" tabindex="-1" aria-labelledby="modalBantuanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalBantuanLabel">Bantuan Tabel</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>
          Membandingkan pencapaian MK antar tahun akademik, denga  parameter CPMK di MK tersebut. Dari sekelompok mahasiswa berbeda tiap tahunnya. shg abaikan faktor angkatan mahasiswa. fokuskan pada kelas perkuliahan di Periode A dan Periode B.
        </p>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- ========== Modal : pola pikir ========== -->
<div class="modal fade" id="modalModel" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">
          Matriks Unit vs Periode Evaluasi
        </h5>
        <button type="button" class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">
          <table class="table table-bordered table-hover text-center align-middle">
            <thead class="table-dark">
              <tr>
                <th>Unit</th>
                <th>Semester</th>
                <th>Tahunan</th>
                <th>Longitudinal</th>
                <th>Periodik</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td class="text-left">Kelas</td>
                <td>✔</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
              </tr>

              <tr>
                <td class="text-left">Mata Kuliah</td>
                <td>✔</td>
                <td>✔</td>
                <td>-</td>
                <td>-</td>
              </tr>

              <tr>
                <td class="text-left">Angkatan</td>
                <td>-</td>
                <td>✔</td>
                <td>✔</td>
                <td>-</td>
              </tr>

              <tr>
                <td class="text-left">Yudisium</td>
                <td>-</td>
                <td>✔</td>
                <td>✔</td>
                <td>-</td>
              </tr>

              <tr>
                <td class="text-left">Prodi</td>
                <td>-</td>
                <td>✔</td>
                <td>✔</td>
                <td>-</td>
              </tr>

              <tr>
                <td class="text-left">Kurikulum</td>
                <td>-</td>
                <td>-</td>
                <td>✔</td>
                <td>✔</td>
              </tr>
            </tbody>
          </table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
          Tutup
        </button>
      </div>

    </div>
  </div>
</div>
<!-- ====== Modal : Ringkasan Refleksi Kelas untuk Tim Kurikulum ====== -->
<div class="modal fade" id="modalRangkuman" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">
          Ringkasan Refleksi Kelas – Analisis Kurikulum
        </h5>
        <span class="badge badge-light text-dark ml-3">
          Semester Ganjil 2024/2025
        </span>
        <button type="button" class="close text-white ml-auto" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">

        <!-- TAG UTAMA -->
        <div class="mb-4">
          <h5 class="text-primary"><strong>TAG Utama Kelas</strong></h5>
          <span class="badge badge-danger">#CPMK_Tidak_Tercapai</span>
          <span class="badge badge-warning text-dark">#Variansi_Tinggi</span>
          <span class="badge badge-info">#Prasyarat_Lemah</span>
          <span class="badge badge-secondary">#Instrumen_Terlalu_Sulit</span>
          <span class="badge badge-primary">#Butuh_Pemecahan_Materi</span>
        </div>

        <hr>

        <!-- Ringkasan OBE -->
        <div class="mb-4">
          <h5 class="text-primary"><strong>1. Ringkasan Ketercapaian OBE</strong></h5>
          <p>
            CPMK 1 dan 2 relatif tercapai secara konsisten, namun CPMK 3 menunjukkan penurunan signifikan.
            Mahasiswa mulai tertinggal pada tahap analisis kasus lanjutan.
            Distribusi nilai menunjukkan variansi tinggi antara mahasiswa kuat dan lemah.
          </p>
        </div>

        <!-- Metode -->
        <div class="mb-4">
          <h5 class="text-primary"><strong>2. Temuan Metode Pembelajaran</strong></h5>
          <ul>
            <li>Studi kasus efektif meningkatkan pemahaman konseptual.</li>
            <li>Ceramah murni kurang efektif untuk CPMK analitis.</li>
            <li>Project akhir menjadi bottleneck utama kelas.</li>
          </ul>
        </div>

        <!-- Evaluasi -->
        <div class="mb-4">
          <h5 class="text-primary"><strong>3. Evaluasi Instrumen Penilaian</strong></h5>
          <ul>
            <li>Rubrik belum dipahami mahasiswa secara merata.</li>
            <li>Instrumen cenderung mengukur teknis, bukan kedalaman analisis.</li>
            <li>Bobot tugas akhir terlalu dominan.</li>
          </ul>
        </div>

        <!-- Pola -->
        <div class="mb-4">
          <h5 class="text-primary"><strong>4. Pola Mahasiswa</strong></h5>
          <p>
            Kelemahan dominan pada prasyarat konseptual.
            Mahasiswa dengan kemampuan mandiri tinggi berkembang pesat,
            namun mahasiswa dengan ketergantungan contoh mengalami stagnasi.
          </p>
        </div>

        <div class="alert alert-warning">
          <strong>Isu Prioritas:</strong>
          <ul class="mb-0">
            <li>Lonjakan kesulitan pada CPMK 3</li>
            <li>Prasyarat mahasiswa belum merata</li>
            <li>Desain instrumen perlu evaluasi ulang</li>
          </ul>
        </div>

        <div class="alert alert-info">
          <strong>Rekomendasi untuk Prodi:</strong>
          <ul class="mb-0">
            <li>Pengembangan modul prasyarat sebelum CPMK 3</li>
            <li>Workshop penyusunan rubrik berbasis OBE</li>
            <li>Pengadaan software simulasi untuk analisis kasus</li>
          </ul>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-outline-primary btn-sm">
          Unduh Ringkasan
        </button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
          Tutup
        </button>
      </div>

    </div>
  </div>
</div>

<!-- Modal Tambah Temuan Evaluasi -->
<div class="modal fade" id="modalTambahTemuan" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content rounded-3 shadow">
      
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Tambah Temuan Evaluasi</h5>
        <button type="button" class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <form method="POST">
        <div class="modal-body">

          <div class="alert alert-warning py-2">
            Semua field bertanda <span class="text-danger">*</span> wajib diisi.
          </div>

          <!-- ID Sistem -->
          <div class="mb-3">
            <label class="form-label">ID Temuan</label>
            <input type="text" class="form-control" name="id_temuan" value="Auto Generate" disabled>
          </div>

          <!-- CORE FIELD -->
          <h6 class="mt-3 text-primary">Core Information</h6>

          <div class="mb-3">
            <label class="form-label">Reference Module <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="reference_module" required placeholder="monev setahun">
          </div>

          <div class="mb-3">
            <label class="form-label">Reference ID</label>
            <input type="text" class="form-control" name="reference_id" placeholder="http://localhost/si-sso/loa/monev-rekap-tahunan.php">
          </div>

          <div class="mb-3">
            <label class="form-label">Jenis Evaluasi <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="jenis_evaluasi" required placeholder="evaluasi kurikulum">
          </div>

          <div class="mb-3">
            <label class="form-label">Objek <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="objek" required placeholder="CPL-06">
          </div>

          <div class="mb-3">
            <label class="form-label">Periode <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="periode" required placeholder="2024/2025">
          </div>

          <div class="mb-3">
            <label class="form-label">Deskripsi Temuan <span class="text-danger">*</span></label>
            <textarea class="form-control" name="deskripsi_temuan" rows="3" required></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label">Tingkat Prioritas <span class="text-danger">*</span></label>
            <select class="custom-select" name="tingkat_prioritas" required>
              <option value="">-- Pilih --</option>
              <option value="Rendah">Rendah</option>
              <option value="Sedang">Sedang</option>
              <option value="Tinggi">Tinggi</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Dibuat Oleh</label>
            <input type="text" class="form-control" value="Login User" disabled>
          </div>

          <div class="mb-3">
            <label class="form-label">Tanggal Temuan</label>
            <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" disabled>
          </div>

          <!-- IMPACT FIELD -->
          <h6 class="mt-4 text-warning">Impact Review (Diisi Saat Review)</h6>

          <div class="mb-3">
            <label class="form-label">Indikator Sebelum</label>
            <textarea class="form-control" disabled></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label">Indikator Sesudah</label>
            <textarea class="form-control" disabled></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label">Analisis Dampak</label>
            <textarea class="form-control" disabled></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label">Kesimpulan Dampak</label>
            <textarea class="form-control" disabled></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label">Tanggal Review</label>
            <input type="date" class="form-control" disabled>
          </div>

          <!-- GOVERNANCE -->
          <h6 class="mt-4 text-danger">Governance</h6>

          <div class="mb-3">
            <label class="form-label">Status Temuan</label>
            <input type="text" class="form-control" value="Terbuka" disabled>
          </div>

          <div class="mb-3">
            <label class="form-label">Disetujui Oleh</label>
            <input type="text" class="form-control" disabled>
          </div>

          <div class="mb-3">
            <label class="form-label">Tanggal Persetujuan</label>
            <input type="date" class="form-control" disabled>
          </div>

          <div class="mb-3">
            <label class="form-label">Tanggal Penutupan</label>
            <input type="date" class="form-control" disabled>
          </div>

          <div class="mb-3">
            <label class="form-label">Arsip</label>
            <input type="text" class="form-control" value="Tidak" disabled>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan Temuan</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!-- Modal Tambah Aksi Evaluasi -->
<div class="modal fade" id="modalTambahAksi" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-success text-white">
        <h5 class="modal-title">Tambah Aksi Evaluasi</h5>
        <button type="button" class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <form method="POST">
        <div class="modal-body">

          <div class="alert alert-warning py-2">
            Field bertanda <span class="text-danger">*</span> wajib diisi.
          </div>

          <div class="mb-3">
            <label class="form-label">ID Aksi</label>
            <input type="text" class="form-control" value="Auto Generate" disabled>
          </div>

          <div class="mb-3">
            <label class="form-label">ID Temuan</label>
            <input type="text" class="form-control" value="TM-XXXX" disabled>
          </div>

          <div class="mb-3">
            <label class="form-label">Deskripsi Aksi <span class="text-danger">*</span></label>
            <textarea class="form-control" name="deskripsi_aksi" required></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label">Penanggung Jawab <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="penanggung_jawab" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Target Waktu <span class="text-danger">*</span></label>
            <input type="date" class="form-control" name="target_waktu" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Target Indikator <span class="text-danger">*</span></label>
            <textarea class="form-control" name="target_indikator" required></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label">Status Aksi</label>
            <input type="text" class="form-control" value="Draft" disabled>
          </div>

          <div class="mb-3">
            <label class="form-label">Tanggal Mulai</label>
            <input type="date" class="form-control" disabled>
          </div>

          <div class="mb-3">
            <label class="form-label">Tanggal Selesai</label>
            <input type="date" class="form-control" disabled>
          </div>

          <div class="mb-3">
            <label class="form-label">Catatan Progres</label>
            <textarea class="form-control"></textarea>
          </div>

          <hr>

          <h6 class="text-danger">Governance Aksi</h6>

          <div class="mb-3">
            <label class="form-label">Disetujui Oleh</label>
            <input type="text" class="form-control" disabled>
          </div>

          <div class="mb-3">
            <label class="form-label">Tanggal Persetujuan</label>
            <input type="date" class="form-control" disabled>
          </div>

          <div class="mb-3">
            <label class="form-label">Tanggal Verifikasi</label>
            <input type="date" class="form-control" disabled>
          </div>

          <div class="mb-3">
            <label class="form-label">Status Validasi</label>
            <input type="text" class="form-control" value="Menunggu" disabled>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success">Simpan Aksi</button>
        </div>
      </form>

    </div>
  </div>
</div>
<div class="modal fade" id="modalActionPlan" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content rounded-3 shadow">

      <!-- HEADER -->
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title">Form Action Plan Prodi (SMART)</h5>
        <button type="button" class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <form method="POST">
        <div class="modal-body">

          <div class="alert alert-info">
            Form ini menggabungkan <b>Temuan Evaluasi</b> dan <b>Aksi Perbaikan (SMART)</b>.
          </div>

          <!-- ================= TEMUAN ================= -->
          <h6 class="text-primary fw-bold border-bottom pb-2">1. Temuan Evaluasi</h6>

          <div class="mb-3">
            <label class="form-label">Deskripsi Temuan *</label>
            <textarea class="form-control" name="deskripsi_temuan" required></textarea>
          </div>

          <div class="row">
            <div class="col-md-4 mb-3">
              <label class="form-label">Objek Evaluasi *</label>
              <input type="text" class="form-control" name="objek" required placeholder="Contoh: CPL-03 / RPS MK A">
            </div>

            <div class="col-md-4 mb-3">
              <label class="form-label">Periode *</label>
              <input type="text" class="form-control" name="periode" required placeholder="2024/2025">
            </div>

            <div class="col-md-4 mb-3">
              <label class="form-label">Prioritas *</label>
              <select class="custom-select" name="prioritas" required>
                <option value="">-- Pilih --</option>
                <option>Tinggi</option>
                <option>Sedang</option>
                <option>Rendah</option>
              </select>
            </div>
          </div>

          <!-- ================= SMART ACTION ================= -->
          <h6 class="text-success fw-bold border-bottom pb-2 mt-4">2. Action Plan (SMART)</h6>

          <!-- S -->
          <div class="mb-3">
            <label class="form-label">Specific (Apa aksi yang dilakukan?) *</label>
            <textarea class="form-control" name="specific" required placeholder="Contoh: Workshop redesign RPS berbasis OBE"></textarea>
          </div>

          <!-- M -->
          <div class="mb-3">
            <label class="form-label">Measurable (Indikator keberhasilan) *</label>
            <input type="text" class="form-control" name="measurable" required placeholder="Contoh: ≥ 90% RPS sesuai OBE">
          </div>

          <div class="row">
            <!-- A -->
            <div class="col-md-4 mb-3">
              <label class="form-label">Achievable (Sumber daya)</label>
              <input type="text" class="form-control" name="achievable" placeholder="Contoh: Tim kurikulum + 5 dosen">
            </div>

            <!-- R -->
            <div class="col-md-4 mb-3">
              <label class="form-label">Relevant (Tujuan strategis) *</label>
              <input type="text" class="form-control" name="relevant" required placeholder="Contoh: Peningkatan CPL Prodi">
            </div>

            <!-- T -->
            <div class="col-md-4 mb-3">
              <label class="form-label">Time-bound (Deadline) *</label>
              <input type="date" class="form-control" name="deadline" required>
            </div>
          </div>

          <!-- ================= PENANGGUNG JAWAB ================= -->
          <h6 class="text-dark fw-bold border-bottom pb-2 mt-4">3. Penanggung Jawab</h6>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Penanggung Jawab Aksi *</label>
              <input type="text" class="form-control" name="penanggung_jawab" required placeholder="Nama / Jabatan">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Tim Pendukung</label>
              <input type="text" class="form-control" name="tim" placeholder="Opsional">
            </div>
          </div>

          <!-- ================= TRACKING ================= -->
          <h6 class="text-danger fw-bold border-bottom pb-2 mt-4">4. Tracking & Governance</h6>

          <div class="row">
            <div class="col-md-4 mb-3">
              <label class="form-label">Dibuat Oleh</label>
              <input type="text" class="form-control" value="Login User" disabled>
            </div>

            <div class="col-md-4 mb-3">
              <label class="form-label">Tanggal Dibuat</label>
              <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" disabled>
            </div>

            <div class="col-md-4 mb-3">
              <label class="form-label">Status Aksi</label>
              <select class="custom-select" name="status_aksi">
                <option>Planned</option>
                <option>Ongoing</option>
                <option>Completed</option>
              </select>
            </div>
          </div>

          <!-- ================= SMART CHECK (OPSIONAL KEREN) ================= -->
          <div class="alert alert-warning mt-3">
            <b>Checklist SMART:</b><br>
            ✔ Specific jelas<br>
            ✔ Measurable ada indikator<br>
            ✔ Achievable realistis<br>
            ✔ Relevant sesuai tujuan prodi<br>
            ✔ Time-bound ada deadline
          </div>

        </div>

        <!-- FOOTER -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success">Simpan Action Plan</button>
        </div>

      </form>
    </div>
  </div>
</div>

<!-- MODAL ACTION PLAN SIMPLE-->
<div class="modal fade" id="modalActionPlanSimple" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">

      <!-- HEADER -->
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Action Plan (SMART)</h5>
        <button type="button" class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <form method="POST">
        <div class="modal-body">

          <div class="alert alert-info small">
            Field dengan tanda <b style="color:red">*</b> wajib diisi.
          </div>

          <!-- TEMUAN -->
          <div class="mb-3">
            <label for="temuan" class="form-label">Temuan Evaluasi<b style="color:red">*</b></label>
            <textarea id="temuan" class="form-control" name="temuan" required placeholder="Tuliskan temuan evaluasi"></textarea>
          </div>

          <!-- AKSI (S) -->
          <div class="mb-3">
            <label for="aksi" class="form-label">Deskripsi Aksi (Specific)<b style="color:red">*</b></label>
            <textarea id="aksi" class="form-control" name="aksi" required placeholder="Apa yang akan dilakukan?"></textarea>
          </div>

          <!-- TARGET (M) -->
          <div class="mb-3">
            <label for="target" class="form-label">Indikator Target (Measurable)<b style="color:red">*</b></label>
            <input id="target" type="text" class="form-control" name="target" required placeholder="Contoh: ≥ 80% lulus pre-test">
          </div>

          <!-- PJ + DEADLINE + PRIORITAS -->
          <div class="row">
            <div class="col-md-12 mb-3">
              <label for="pj" class="form-label">Penanggung Jawab (Achieveable)<b style="color:red">*</b></label>
              <input id="pj" type="text" class="form-control" name="pj" required placeholder="Nama PIC / Penanggung Jawab">
            </div>

            <div class="col-md-6 mb-3">
              <label for="prioritas" class="form-label">Prioritas (Relevansi)<b style="color:red">*</b></label>
              <select id="prioritas" class="custom-select" name="prioritas_relevansi" required>
                <option value="">-- Pilih --</option>
                <option value="Top" title="Strategis / Critical">Top</option>
                <option value="Mid" title="Penting">Mid</option>
                <option value="Low" title="Pendukung">Low</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label for="deadline" class="form-label">Deadline (Time-Bound)<b style="color:red">*</b></label>
              <input id="deadline" type="date" class="form-control" name="deadline" required>
            </div>
          </div>

          <!-- STATUS -->
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select id="status" class="custom-select" name="status">
              <option value="Planned">Planned</option>
              <option value="Ongoing">Ongoing</option>
              <option value="Completed">Completed</option>
              <option value="Ineffective">Ineffective</option>
              <option value="Delayed">Delayed</option>
            </select>
          </div>

          <!-- TRACKING -->
          <div class="mb-2">
            <label class="form-label">Dibuat Oleh</label>
            <input type="text" class="form-control" value="Login User" disabled>
          </div>

          <!-- SMART INFO -->
          <div class="alert alert-warning small mt-3">
            konsep <b>SMART:</b> Specific (aksi jelas) • Measurable (ada angka) • Achievable • Relevant • Time-bound
          </div>

        </div>

        <!-- FOOTER -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!-- MODAL ACTION PLAN SIMPLE-->
<div class="modal fade" id="modalActionPlanSimple2" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">

      <!-- HEADER -->
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Action Plan (SMART)</h5>
        <button type="button" class="close text-white" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <form method="POST">
        <div class="modal-body">

          <div class="alert alert-info small">
            Field dengan tanda <b style="color:red">*</b> wajib diisi.
          </div>

          <!-- TEMUAN -->
          <div class="mb-3">
            <label for="temuan" class="form-label">Temuan Evaluasi<b style="color:red">*</b></label>
            <textarea id="temuan" class="form-control" name="temuan" disabled placeholder="Tuliskan temuan evaluasi"></textarea>
          </div>

          <!-- AKSI (S) -->
          <div class="mb-3">
            <label for="aksi" class="form-label">Deskripsi Aksi (Specific)<b style="color:red">*</b></label>
            <textarea id="aksi" class="form-control" name="aksi" disabled placeholder="Apa yang akan dilakukan?"></textarea>
          </div>

          <!-- TARGET (M) -->
          <div class="mb-3">
            <label for="target" class="form-label">Indikator Target (Measurable)<b style="color:red">*</b></label>
            <input id="target" type="text" class="form-control" name="target" disabled placeholder="Contoh: ≥ 80% lulus pre-test">
          </div>

          <!-- PJ + DEADLINE + PRIORITAS -->
          <div class="row">
            <div class="col-md-12 mb-3">
              <label for="pj" class="form-label">Penanggung Jawab (Achieveable)<b style="color:red">*</b></label>
              <input id="pj" type="text" class="form-control" name="pj" disabled placeholder="Nama PIC / Penanggung Jawab">
            </div>

            <div class="col-md-6 mb-3">
              <label for="prioritas" class="form-label">Prioritas (Relevansi)<b style="color:red">*</b></label>
              <select id="prioritas" class="custom-select" name="prioritas_relevansi" disabled>
                <option value="">-- Pilih --</option>
                <option value="Top" title="Strategis / Critical">Top</option>
                <option value="Mid" title="Penting">Mid</option>
                <option value="Low" title="Pendukung">Low</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label for="deadline" class="form-label">Deadline (Time-Bound)<b style="color:red">*</b></label>
              <input id="deadline" type="date" class="form-control" name="deadline" disabled>
            </div>
          </div>

          <!-- STATUS -->
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select id="status" class="custom-select" name="status">
              <option value="Planned">Planned</option>
              <option value="Ongoing">Ongoing</option>
              <option value="Completed">Completed</option>
              <option value="Ineffective">Ineffective</option>
              <option value="Delayed">Delayed</option>
            </select>
          </div>

          <!-- TRACKING -->
          <div class="mb-2">
            <label class="form-label">Dibuat Oleh</label>
            <input type="text" class="form-control" value="Login User" disabled>
          </div>

          <!-- SMART INFO -->
          <div class="alert alert-warning small mt-3">
            konsep <b>SMART:</b> Specific (aksi jelas) • Measurable (ada angka) • Achievable • Relevant • Time-bound
          </div>

        </div>

        <!-- FOOTER -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>

    </div>
  </div>
</div>
<?php include('5script.php'); ?>



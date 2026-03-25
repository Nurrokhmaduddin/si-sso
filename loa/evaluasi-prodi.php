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
      <h3 class="mb-0">Evaluasi & Action Plan Prodi
      <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-info-circle"></i>
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
                <div class="col-md-6">
                  <b>Prioritas [pilih]:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Status [pilih]:</b> Semua
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalActionPlanSimple">
                  <i class="fas fa-plus me-1"></i> Action Plan
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
                      <td><span class="badge bg-danger">Top</span></td>
                      <td>2026-06-30</td>
                      <td>Planned</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal"  data-bs-target="#modalActionPlanSimple2"><i class="fas fa-tasks"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>AP-02</td>
                      <td>CPL belum tercapai optimal</td>
                      <td>Workshop revisi RPS</td>
                      <td>≥ 90% sesuai OBE</td>
                      <td>Ketua Prodi</td>
                      <td><span class="badge bg-danger">Top</span></td>
                      <td>2025-02-15</td>
                      <td>Ongoing</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal"  data-bs-target="#modalActionPlanSimple2"><i class="fas fa-tasks"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>AP-03</td>
                      <td>Variansi nilai antar kelas tinggi</td>
                      <td>Standarisasi rubrik penilaian</td>
                      <td>Selisih ≤ 10%</td>
                      <td>Koordinator MK</td>
                      <td><span class="badge bg-warning text-dark">Mid</span></td>
                      <td>2025-03-01</td>
                      <td>Planned</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal"  data-bs-target="#modalActionPlanSimple2"><i class="fas fa-tasks"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>AP-04</td>
                      <td>Mahasiswa lemah prasyarat</td>
                      <td>Pembuatan modul dasar</td>
                      <td>≥ 80% lulus pre-test</td>
                      <td>Dosen Pengampu</td>
                      <td><span class="badge bg-success">Low</span></td>
                      <td>2025-02-20</td>
                      <td>Completed</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal"  data-bs-target="#modalActionPlanSimple2"><i class="fas fa-tasks"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>AP-05</td>
                      <td>CPL belum tercapai optimal</td>
                      <td>Workshop revisi RPS</td>
                      <td>≥ 90% sesuai OBE</td>
                      <td>Ketua Prodi</td>
                      <td><span class="badge bg-danger" title="Strategis / Critical">Top</span></td>
                      <td>2025-02-15</td>
                      <td> Delayed</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal"  data-bs-target="#modalActionPlanSimple2"><i class="fas fa-tasks"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>AP-06</td>
                      <td>Variansi nilai antar kelas tinggi</td>
                      <td>Standarisasi rubrik penilaian</td>
                      <td>Selisih ≤ 10%</td>
                      <td>Koordinator MK</td>
                      <td><span class="badge bg-warning text-dark" title="Penting">Mid</span></td>
                      <td>2025-03-01</td>
                      <td>Ineffective</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal"  data-bs-target="#modalActionPlanSimple2"><i class="fas fa-tasks"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>AP-07</td>
                      <td>Mahasiswa lemah prasyarat</td>
                      <td>Pembuatan modul dasar</td>
                      <td>≥ 80% lulus pre-test</td>
                      <td>Dosen Pengampu</td>
                      <td><span class="badge bg-success" title="Pendukung">Low</span></td>
                      <td>2025-02-20</td>
                      <td>Completed</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal"  data-bs-target="#modalActionPlanSimple2"><i class="fas fa-tasks"></i></button>
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
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="GET">

        <div class="modal-body">
          <!-- Catatan penting -->
          <div class="alert alert-warning mb-3" role="alert" style="font-size: 0.9rem;">
            <b>Informasi:</b> Halaman ini otomatis menampilkan data angkatan terbaru saat pertama dibuka. Data awal yang tampil adalah angkatan [2025].
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Prioritas --</option>
              <option value="Top" title="Strategis / Critical">Top (Strategis / Critical)</option>
                <option value="Mid" title="Penting">Mid (Penting)</option>
                <option value="Low" title="Pendukung">Low (Pendukung)</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
              <option value="">-- Pilih Status --</option>
              <option value="Planned">Planned</option>
              <option value="Ongoing">Ongoing</option>
              <option value="Completed">Completed</option>
              <option value="Ineffective">Ineffective</option>
              <option value="Delayed">Delayed</option>
            </select>
          </div>

       </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info">Terapkan Filter</button>
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
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          Membandingkan pencapaian MK antar tahun akademik, denga  parameter CPMK di MK tersebut. Dari sekelompok mahasiswa berbeda tiap tahunnya. shg abaikan faktor angkatan mahasiswa. fokuskan pada kelas perkuliahan di Periode A dan Periode B.
        </p>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
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
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
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
              <select id="prioritas" class="form-select" name="prioritas_relevansi" required>
                <option value="">-- Pilih --</option>
                <option value="Top" title="Strategis / Critical">Top (Strategis / Critical)</option>
                <option value="Mid" title="Penting">Mid (Penting)</option>
                <option value="Low" title="Pendukung">Low (Pendukung)</option>
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
            <select id="status" class="form-select" name="status">
              <option value="Planned">Planned</option>
              <option value="Ongoing">Ongoing</option>
              <option value="Completed">Completed</option>
              <option value="Ineffective">Ineffective</option>
              <option value="Delayed">Delayed</option>
            </select>
          </div>

          <!-- SMART INFO -->
          <div class="alert alert-warning small mt-3">
            konsep <b>SMART:</b> Specific (aksi jelas) • Measurable (ada angka) • Achievable • Relevant • Time-bound
          </div>

        </div>

        <!-- FOOTER -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
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
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
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
              <select id="prioritas" class="form-select" name="prioritas_relevansi" disabled>
                <option value="">-- Pilih --</option>
                <option value="Top" title="Strategis / Critical">Top (Strategis / Critical)</option>
                <option value="Mid" title="Penting">Mid (Penting)</option>
                <option value="Low" title="Pendukung">Low (Pendukung)</option>
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
            <select id="status" class="form-select" name="status">
              <option value="Planned">Planned</option>
              <option value="Ongoing">Ongoing</option>
              <option value="Completed">Completed</option>
              <option value="Ineffective">Ineffective</option>
              <option value="Delayed">Delayed</option>
            </select>
          </div>

          <!-- TRACKING -->
          <div class="row">
            <div class="col-md-4">
              <label class="form-label">Dibuat Oleh</label>
              <input type="text" class="form-control" value="Login User" disabled>
            </div>
            <div class="col-md-4">
              <label class="form-label">Tanggal Dibuat</label>
              <input id="deadline" type="date" class="form-control" name="deadline" disabled>
            </div>
            <div class="col-md-4">
              <label class="form-label">Terakhir Update</label>
              <input id="deadline" type="date" class="form-control" name="deadline" disabled>
            </div>
          </div>

          <!-- SMART INFO -->
          <div class="alert alert-warning small mt-3">
            konsep <b>SMART:</b> Specific (aksi jelas) • Measurable (ada angka) • Achievable • Relevant • Time-bound
          </div>

        </div>

        <!-- FOOTER -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>

    </div>
  </div>
</div>
<?php include('5script.php'); ?>



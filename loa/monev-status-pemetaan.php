<?php $page = 'status_pemetaan'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Rekapitulasi Pemetaan
      <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
                <i class="fas fa-question-circle"></i>
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
                <div class="col-md-4">
                  <p class="mb-0"><strong>Kurikulum:</strong> KT-6 (K20) Kurikulum 2025</p>
                </div>
                <div class="col-md-4">
                  <p class="mb-0"><strong>Set Pemetaan :</strong> full stage</p>
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
              </div>
            </div>
          </div>


<!-- ========== CARD 3: KPI row ========== -->    
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
        <div class="row g-3 mb-3">
          <div class="col-md-3">
            <div class="kpi bg-primary">
              <div class="small">CPMK Mapping Completion</div>
              <div class="big" id="kpiAvg">60%</div>
              <div class="small">yang sudah dipetakan ke IK dan CPL.</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="kpi " style="background:#20c997;">
              <div class="small">Fully Mapped Courses (MK)</div>
              <div class="big" id="kpiGap">78% </div>
              <div class="small">seluruh CPMK-nya sudah terpetakan 100%</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="kpi" style="background:#ff7f0e;">
              <div class="small">CPL Coverage Strength</div>
              <div class="big" id="kpiReached">90%</div>
              <div class="small">yang memiliki IK dan CPMK pendukung</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="kpi bg-danger">
              <div class="small">CPL Support Distribution</div>
              <div class="big" id="kpiRisk">CPL-1 (4 CPMK)</div>
              <div class="small">Strongest: CPL-3 (18 CPMK)</div>
            </div>
          </div>
        </div>
        


    <!-- ========== CARD 4: Stacked Bar Chart — Proporsi ========== -->
    <style>
  .chart-container {
      position: relative;
      height: 300px;
  }
</style>
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i> Stacked Bar Chart — Proporsi (%)</h5>
            <div class="card-tools">
              <small class="text-muted">Set Pemetaan Terpilih</small>
            </div>
          </div>

          <div class="card-body chart-container d-flex flex-column">

            <!-- Bagian Chart -->
            <div class="flex-grow-1">
              <canvas id="stackedChart" width="100%" height="22"></canvas>
            </div>

            <!-- Bagian Tombol -->
            <div class="row text-center mt-3">
              <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL43">
                  Overview Pemetaan MK–CPMK
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL41">
                  Overview Pemetaan IK–CPMK
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL42">
                  Overview Pemetaan CPL–IK
                </button>
              </div>
              <!-- <div class="col">
                <button class="btn btn-outline-danger btn-sm w-100" onclick="openAllRisikoPreview()">
                  Performa Risiko
                </button>
              </div> -->
            </div>

          </div>
        </div>

        <!-- Table IK–CPMK Overview -->
        <div class="card collapse" id="daftarIKCPL41" >
          <!-- Table IK–CPMK Overview -->
          <div class="card mb-4">
            <div class="card-header bg-light">
              <strong>Overview Pemetaan IK–CPMK</strong>
            </div>
            <div class="card-body p-0">
              <table class="table table-bordered table-striped mb-0">
                <thead class="thead-light text-center">
                  <tr>
                    <th>Indikator Kinerja (IK)</th>
                    <th>Jumlah CPMK Terkait</th>
                    <th>Linked CPL</th>
                    <th>Status Mapping</th>
                    <th>Catatan</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <tr>
                    <td>IK-01</td>
                    <td>8</td>
                    <td>CPL-2</td>
                    <td><span class="badge badge-success">Lengkap</span></td>
                    <td>Mapping stabil</td>
                  </tr>
                  <tr>
                    <td>IK-04</td>
                    <td>3</td>
                    <td>CPL-1</td>
                    <td><span class="badge badge-warning">Kurang</span></td>
                    <td>Butuh tambahan CPMK</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Table CPL–IK Overview -->
        <div class="card collapse" id="daftarIKCPL42" >          
          <div class="card mb-4">
            <div class="card-header bg-light">
              <strong>Overview Pemetaan CPL–IK</strong>
            </div>
            <div class="card-body p-0">
              <table class="table table-bordered table-striped mb-0">
                <thead class="thead-light text-center">
                  <tr>
                    <th>CPL</th>
                    <th>Jumlah IK Pendukung</th>
                    <th>Total CPMK Turunan</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <tr>
                    <td>CPL-1</td>
                    <td>4</td>
                    <td>12</td>
                    <td><span class="badge badge-success">Kuat</span></td>
                  </tr>
                  <tr>
                    <td>CPL-3</td>
                    <td>2</td>
                    <td>4</td>
                    <td><span class="badge badge-danger">Lemah</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>        
        <!-- daftar min/max/rerate -->
        <div class="card collapse" >
          <div class="card-header d-flex align-items-center">
            <h5 class="card-title mb-0"><i class="fas fa-table me-2"></i> Tabel Pencapaian</h5>
            <div class="card-tools ms-auto">
              <!-- <small class="text-muted">Klik angka Min/Max untuk melihat 1 mahasiswa (NIM / Nama / Nilai)</small> -->
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="tblCplStats" class="table table-hover table-bordered table-sm">
                <thead class="table-light">
                  <tr>
                    <th style="width: 40px">#</th>
                    <th>CPMK Code</th>
                    <th class="text-center">Nilai</th>
                    <th class="text-center">Status</th>
                  </tr>
                </thead>
                <tbody>                
                  <tr>
                    <td>1</td>
                    <td>SKS982: Pemahaman Dasar Polimer</td>
                    <td class="text-center">72.14%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>SKS917: Teori Komposit</td>
                    <td class="text-center">71.50%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>UNI902: Aplikasi Polimer</td>
                    <td class="text-center">76.80%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>UNI912: Proses Produksi</td>
                    <td class="text-center">76.80%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>SKS234: Analisis Material</td>
                    <td class="text-center">75.30%</td>
                   <td class="text-center">🟨 Cukup</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>SKS812: Keselamatan & Etika</td>
                     <td class="text-center">76.80%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>SKS908: Desain Proses</td>                    
                    <td class="text-center">73.40%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>SKS111: Metode Eksperimental</td>
                    <td class="text-center">71.50%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>SKS113: Statistik & Analisis Data</td>
                    <td class="text-center">71.50%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>SKS932: Komunikasi Teknis</td>                    
                    <td class="text-center">75.00%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>                 
        </div>
       

        <!-- Table MK–CPMK Overview -->
        <div class="card mb-4 collapse" id="daftarIKCPL43" >

          <div class="card mb-4">
            <div class="card-header bg-light">
              <strong>Overview Pemetaan MK–CPMK</strong>
            </div>
            <div class="card-body p-0">
              <table class="table table-bordered table-striped mb-0">
                <thead class="thead-light text-center">
                  <tr>
                    <th>Mata Kuliah (MK)</th>
                    <th>Jumlah CPMK</th>
                    <th>CPMK Mapped</th>
                    <th>CPMK Unmapped</th>
                    <th>% Mapped</th>
                    <th>Catatan</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <tr>
                    <td>Pemrograman Web</td>
                    <td>6</td>
                    <td>5</td>
                    <td>1</td>
                    <td><span class="badge badge-warning">83%</span></td>
                    <td>1 CPMK belum dipetakan</td>
                  </tr>
                  <tr>
                    <td>Basis Data</td>
                    <td>5</td>
                    <td>5</td>
                    <td>0</td>
                    <td><span class="badge badge-success">100%</span></td>
                    <td>Lengkap</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>





 <!-- ========== CARD 4: Overview Pemetaan ========== -->

        <div class="card">
          <div class="card-header">
            Overview Pemetaan
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped table-sm">
                <thead class="table-dark text-center">
                  <!-- Baris 1: CPL -->
                  <tr>
                    <!-- <th rowspan="2">Kode MK</th> -->
                    <th rowspan="2" colspan="2">CPMK</th>
                    <th colspan="2" data-bs-toggle="tooltip" title="CPL 1: Bertakwa kepada Tuhan Yang Maha Esa dan berperilaku islami">CPL 1</th>
                    <th colspan="2">CPL 2</th>
                    <th colspan="3">CPL 3</th>
                    <th colspan="2">CPL 4</th>
                    <th colspan="2">CPL 5</th>
                    <th colspan="2">CPL 6</th>
                    <th colspan="2">CPL 7</th>
                    <th>CPL 8</th>
                    <th colspan="2">CPL 9</th>
                    <th>CPL 10</th>
                  </tr>
                  <!-- Baris 2: IK -->
                  <tr>
                    <th data-bs-toggle="tooltip" title="IK 1: Menunjukkan perilaku islami pada setiap peran yang dijalani (50%)">IK 1 (50%)</th>
                    <th>IK 2 (50%)</th>
                    <th>IK 3 (30%)</th>
                    <th>IK 4 (70%)</th>
                    <th>IK 5 (40%)</th>
                    <th>IK 6 (30%)</th>
                    <th>IK 7 (30%)</th>
                    <th>IK 8 (50%)</th>
                    <th>IK 9 (50%)</th>
                    <th>IK 10</th>
                    <th>IK 11</th>
                    <th>IK 12</th>
                    <th>IK 13</th>
                    <th>IK 14</th>
                    <th>IK 15</th>
                    <th>IK 16 (100%)</th>
                    <th>IK 17 (65%)</th>
                    <th>IK 18 (35%)</th>
                    <th>IK 19 (100%)</th>
                  </tr>
                </thead>

                <tbody>
                  <!-- Semester 1 -->
                  <tr class="table-primary text-center">
                    <td colspan="23"><strong>Semester 1</strong></td>
                  </tr>
                  <tr>
                    <td>STE120</td>
                    <td data-bs-toggle="tooltip" title="Deskripsi CPMK 1">1</td>
                    <td class="text-center">60%</td><td></td>
                    <td></td><td></td>
                    <td></td><td></td><td></td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td></td>
                    <td></td><td></td><td></td>
                  </tr>
                  <tr>
                    <td>STE120</td>
                    <td>2</td>
                    <td></td><td class="text-center">100%</td>
                    <td></td><td></td>
                    <td></td><td></td><td></td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td></td>
                    <td></td><td></td><td></td>
                  </tr>
                  <tr>
                    <td>STE121</td>
                    <td>1</td>
                    <td></td><td></td>
                    <td class="text-center">100%</td><td></td>
                    <td></td><td></td><td></td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td></td>
                    <td></td><td></td><td></td>
                  </tr>

                  <!-- Semester 2 -->
                  <tr class="table-primary text-center">
                    <td colspan="23"><strong>Semester 2</strong></td>
                  </tr>
                  <tr>
                    <td>STE122</td>
                    <td>1</td>
                    <td></td><td></td>
                    <td></td><td class="text-center">100%</td>
                    <td></td><td></td><td></td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td></td>
                    <td></td><td></td><td></td>
                  </tr>
                  <tr>
                    <td>STE123</td>
                    <td>1</td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td class="text-center">100%</td><td></td><td></td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td></td>
                    <td></td><td></td><td></td>
                  </tr>

                  <!-- Semester 8 -->
                  <tr class="table-primary text-center">
                    <td colspan="23"><strong>Semester 8</strong></td>
                  </tr>
                  <tr>
                    <td>STE124</td>
                    <td>1</td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td></td><td></td><td></td>
                    <td class="text-center">100%</td><td></td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td></td>
                    <td></td><td></td><td></td>
                  </tr>
                  <tr>
                    <td>STE124</td>
                    <td>2</td>
                    <td class="text-center">40%</td><td></td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td></td><td></td><td></td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td></td><td></td>
                    <td></td>
                    <td></td><td></td><td></td>
                  </tr>
                </tbody>
              </table>
            </div>  
          </div>
        </div>
 <!-- ========== CARD 4: Distribusi Pemetaan CPMK → IK → CPL ========== -->
 <div class="card mb-4">
          <div class="card-header bg-light">
            <strong>Distribusi Pemetaan CPMK → IK → CPL</strong>
          </div>

          <table class="table table-bordered text-center mb-0">
            <thead class="thead-light">
              <tr>
                  <th>Jumlah</th>
                  <th>Kategori</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>10</strong></td>
                  <td>CPMK memetakan ke 1 IK</td>
                  <td>CPMK sederhana, hanya terkait 1 IK</td>
                </tr>
                <tr>
                  <td><strong>4</strong></td>
                  <td>CPMK memetakan ke >1 IK</td>
                  <td>CPMK kompleks (multi-IK)</td>
                </tr>
                <tr>
                  <td><strong>7</strong></td>
                  <td>IK memetakan ke >1 CPL</td>
                  <td>IK lintas-CPL (perlu dicek konsistensinya)</td>
                </tr>
              </tbody>
          </table>
        </div>


 <!-- ========== CARD 4: Beban Pemetaan Per CPL ========== -->
        <div class="card mb-4">
          <div class="card-header bg-light">
            <strong>Beban Pemetaan Per CPL</strong>
          </div>

          <table class="table table-bordered text-center mb-0">
            <thead class="thead-light">
              <tr>
                <th>CPL</th>
                <th>Jumlah CPMK Masuk</th>
                <th>Status</th>
                <th>Catatan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>CPL-A</td>
                <td>8</td>
                <td><span class="badge badge-danger">Over-Mapped</span></td>
                <td>Perlu evaluasi, terlalu banyak CPMK</td>
              </tr>
              <tr>
                <td>CPL-B</td>
                <td>2</td>
                <td><span class="badge badge-warning">Under-Mapped</span></td>
                <td>Minimal 3 CPMK untuk aman audit</td>
              </tr>
              <tr>
                <td>CPL-C</td>
                <td>5</td>
                <td><span class="badge badge-success">Ideal</span></td>
                <td>Sebaran normal</td>
              </tr>
            </tbody>
          </table>
        </div>
 <!-- ========== CARD 4: Beban Pemetaan Per Mata Kuliah ========== -->
        <div class="card mb-4">
          <div class="card-header bg-light">
            <strong>Beban Pemetaan Per Mata Kuliah</strong>
          </div>

          <table class="table table-bordered text-center mb-0">
            <thead class="thead-light">
              <tr>
                <th>Mata Kuliah</th>
                <th>Jumlah CPMK</th>
                <th>Jumlah IK Terkait</th>
                <th>Kompleksitas</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Pemrograman Web</td>
                <td>7</td>
                <td>12</td>
                <td><span class="badge badge-danger">Tinggi</span></td>
                <td>Perlu penyederhanaan</td>
              </tr>
              <tr>
                <td>Basis Data</td>
                <td>4</td>
                <td>5</td>
                <td><span class="badge badge-warning">Sedang</span></td>
                <td>Normal</td>
              </tr>
              <tr>
                <td>Kewirausahaan</td>
                <td>2</td>
                <td>2</td>
                <td><span class="badge badge-success">Rendah</span></td>
                <td>Mudah diaudit</td>
              </tr>
            </tbody>
          </table>
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
              <option value="">-- Pilih Angkatan --</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="NonAktif">NonAktif</option>
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



<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalTambahDataLabel">Tambah Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="modal-body">

          <!-- Informasi -->
          <div class="alert alert-warning mb-3 py-2" role="alert" style="font-size: 0.9rem;">
            <i class="fas fa-info-circle me-1"></i>
            <strong>Catatan:</strong> Semua field yang diberi tanda <span class="text-danger">*</span> wajib diisi.
          </div>

          <!-- Form Inputs -->
          <div class="mb-3">
            <label for="username" class="form-label">NIM <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
          </div>

          <div class="mb-3">
            <label for="displayname" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="displayname" name="displayname" placeholder="Masukkan Nama Lengkap" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
          </div>

          <div class="mb-3">
            <label for="hp" class="form-label">Nomor HP <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="hp" name="hp" placeholder="Masukkan Nomor HP" required>
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Angkatan --</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Peminatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Peminatan --</option>
              <option value="2025">A</option>
              <option value="2024">B</option>
              <option value="2023">C</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
            <select class="form-select" id="status" name="status" required>
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="NonAktif">NonAktif</option>
              <option value="Cuti">Cuti</option>
              <option value="Skors">Skors</option>
              <option value="PassedOut">Passed Out</option>
              <option value="DropOut">Drop Out</option>
              <option value="Lulus">Lulus</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="foto" class="form-label">Foto <span class="text-danger">*</span></label>
            <input type="file" class="form-control" id="foto" name="foto" required>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
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
          Halaman ini menampilkan rekap satu set pemetaan OBE, menilai kelengkapan hubungan CPL–IK–CPMK–MK dan keserataan beban pemetaan. (Mockup data statis)<br>
          Halaman ini menampilkan rekapitulasi satu set pemetaan OBE yang telah dirancang, dengan fokus pada dua aspek utama: <b>pertama,</b> kelengkapan pemetaan (mapping completeness), untuk memeriksa apakah CPL, IK, CPMK, dan MK telah terhubung secara lengkap; <b>kedua,</b> keserataan beban pemetaan (mapping balance), untuk melihat distribusi dukungan dan identifikasi gap antara elemen yang paling kuat dan paling lemah di tiap level
        </p>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<script>
    // ===============================
    // LABELS & DATA PEMETAAN
    // ===============================

    const labels = ["CPL", "IK", "CPMK", "MK"];

    // ---- Isi data mapping di sini ----
    const kosong = [3, 5, 12, 1]; // belum terpetakan
    const ada = [10, 20, 45, 12]; // sudah terpetakan

    // ===============================
    // HITUNG PERSENTASE
    // ===============================
    const persentaseKosong = kosong.map((k, i) =>
        ((k / (k + ada[i])) * 100).toFixed(1)
    );

    const persentaseAda = ada.map((a, i) =>
        ((a / (kosong[i] + a)) * 100).toFixed(1)
    );

    // ===============================
    // HORIZONTAL STACKED BAR CHART
    // ===============================
    new Chart(document.getElementById("stackedChart"), {
        type: "bar",
        data: {
            labels: labels,
            datasets: [
                {
                    label: "Mapped (%)",
                    data: persentaseAda,
                    backgroundColor: "rgba(75, 192, 192, 0.8)",
                    borderColor: "rgba(75, 192, 192, 1)",
                    borderWidth: 2
                },
                {
                    label: "Unmapped (%)",
                    data: persentaseKosong,
                    backgroundColor: "rgba(255, 255, 255, 1)",
                    borderColor: "rgba(75, 192, 192, 1)",
                    borderWidth: 2
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            indexAxis: "y", // horizontal
            scales: {
                x: { stacked: true, max: 100, beginAtZero: true },
                y: { stacked: true }
            },
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function (context) {
                            const index = context.dataIndex;
                            const value = context.raw;
                            const label = context.dataset.label;

                            // menunjukkan data absolut juga
                            if (label === "Mapped (%)") {
                                return `${label}: ${value}% ( ${ada[index]} )`;
                            } else {
                                return `${label}: ${value}% ( ${kosong[index]} )`;
                            }
                        }
                    }
                }
            }
        }
    });
</script>
<?php include('5script.php'); ?>
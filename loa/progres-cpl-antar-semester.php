<?php $page = 'monev_progress_cpl_ik'; ?>
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
  :root{
    --green:#2ecc71;
    --yellow:#f1c40f;
    --red:#e74c3c;
    --cell-padding:8px 10px;
  }
  body { }
  .container { max-width:1100px; margin-top:28px; margin-bottom:40px; }
  .heatmap-card { border-radius:10px; box-shadow:0 6px 18px rgba(0,0,0,.06); }
  .heatmap-table th, .heatmap-table td { vertical-align: middle; text-align:center; white-space:nowrap; }
  .heat-cell { color:#fff; font-weight:600; border-radius:6px; padding:var(--cell-padding); display:inline-block; min-width:58px; }

  /* 3 kategori warna */
  .heat-high { background: linear-gradient(0deg, rgba(0,0,0,0.08), rgba(0,0,0,0.04)), var(--green); }   /* >=80 */
  .heat-mid  { background: linear-gradient(0deg, rgba(0,0,0,0.06), rgba(0,0,0,0.03)), var(--yellow); color:#222; } /* 60-79 */
  .heat-low  { background: linear-gradient(0deg, rgba(0,0,0,0.06), rgba(0,0,0,0.03)), var(--red); }     /* <60 */

  .legend .item { display:inline-flex; align-items:center; gap:8px; margin-right:16px; margin-bottom:8px; }
  .legend .swatch { width:22px; height:14px; border-radius:4px; display:inline-block; }
  .sw-green { background:var(--green); }
  .sw-yellow { background:var(--yellow); }
  .sw-red { background:var(--red); }
  .table-responsive { overflow:auto; }
  thead th { position: sticky; top:0; background:#fff; z-index:2; }
  .small-note { font-size:0.9rem; color:#555; }
  @media (max-width:720px){
    .heat-cell { min-width:48px; padding:6px 8px; font-size:0.85rem; }
  }
</style>

<!-- Content Wrapper -->
  <div class="content-wrapper" style="min-height: 700px;">
    <!-- Content Header -->
    <div class="content-header">
      <div class="container-fluid">
        <h3 class="mb-0">Progress CPL — IK</h3>
        <p class="text-muted mb-0">Ringkasan capaian CPL per Lulusan Yudisium, tren perkembangan, peringatan dini (EWS), dan data granular. (Mockup data statis)</p>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- ========== CARD 1: Header & Description ========== -->
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0"><i class="fas fa-info-circle me-2"></i> Ringkasan Halaman</h5>
            <div class="card-tools">
              <button class="btn btn-tool" title="Bantuan"><i class="fas fa-question-circle"></i></button>
            </div>
          </div>
          <div class="card-body">
            <p class="mb-0">
              Perhitungan Capaian Pembelajaran Lulusan (CPL) dilakukan memperbandingkan 2 waktu periode. <br>
              Ambil nilai CPMK dari periode A dan Periode B, bentuk nilai IKnya. abaikan faktor angkatan mahasiswa. fokuskan pada kelas perkuliahan di Periode A dan Periode B. Fungsinya untuk membandingkan pencapaian IK antara dua periode. 
            </p>
          </div>
        </div>

        <!-- ========== CARD 2: Filter & Export ========== -->
        <div class="card">
          <div class="card-header d-flex align-items-center">
            <h5 class="card-title mb-0"><i class="fas fa-filter me-2"></i> Filter & Ekspor</h5>
            <div class="card-tools ms-auto">
              <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalFilter">
                <i class="fas fa-filter me-1"></i> Filter
              </button>
              <button id="btnExportCsv" class="btn btn-sm btn-success">
                <i class="fas fa-file-csv me-1"></i> Export CSV (Tabel CPL)
              </button>
            </div>
          </div>
          <div class="card-body">
            <!-- ringkasan singkat pilihan filter -->
            <div class="row">
              <div class="col-md-4">
                <b>Set Pemetaan:</b> KT-6 (K20) Kurikulum 2025 full stage &nbsp;
              </div>
              <div class="col-md-4">
                <b>Periode A:</b> 2024-Genap
              </div>
              <div class="col-md-4">
                <b>Periode B:</b> 2025-Genap
              </div>
              <!-- <div class="col-md-3">
                <b>Peminatan:</b> Teknik Kimia Reguler
              </div> -->
              <!-- <div class="col-md-2 text-end">
                <button class="btn btn-sm btn-outline-secondary" onclick="applyDummyFilter()">Terapkan (dummy)</button>
              </div> -->
            </div>
          </div>
        </div>

        <!-- ========== CARD 3.1: KPI row ========== -->        
        <!-- <div class="row g-3 mb-3">
          <div class="col-md-3">
            <div class="kpi bg-primary">
              <div class="small">Rata-rata CPL</div>
              <div class="big" id="kpiAvg">75.2</div>
              <div class="small">dari 12 CPL</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="kpi" style="background:#ff7f0e;">
              <div class="small">Gap vs Target</div>
              <div class="big" id="kpiGap">-4.8%</div>
              <div class="small">Target CPL: 80%</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="kpi" style="background:#20c997;">
              <div class="small">% CPL Tercapai</div>
              <div class="big" id="kpiReached">7 / 12</div>
              <div class="small">(>= target threshold)</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="kpi bg-danger">
              <div class="small">Mahasiswa Risiko</div>
              <div class="big" id="kpiRisk">23</div>
              <div class="small">nilai CPL < 50%</div>
            </div>
          </div>
        </div> -->

        <!-- ========== CARD 4: Chart CPL-IK ========== -->     
        <div class="card">   
          <!-- CARD HEADER -->  
          <div class="card-header ">         
            <h5 class="card-title mb-0">
              <button class="btn btn-sm btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#chartCPLIK1">
                <i class="fas fa-expand"></i>
              </button>
              CPL 1 – Kemampuan berkomunikasi secara efektif baik lisan maupun tulisan
            </h5>
          </div>
          <!-- CARD BODY -->
          <div class="card-body " id="chartCPLIK1">
            <!-- Chart Container -->
            <div class="chart-container">
              <canvas id="chartCPL1" width="100%" height="30"></canvas>
            </div>
            <h6 class="font-weight-bold">Daftar Indikator Kinerja (IK)</h6>
            <div class="table-responsive">
              <table class="table table-sm table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th style="width: 80px;">Kode IK</th>
                    <th>Deskripsi IK</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>IK 1</td>
                    <td>Mahasiswa mampu menyampaikan informasi secara lisan secara runtut, jelas, dan mudah dipahami.</td>
                  </tr>
                  <tr>
                    <td>IK 2</td>
                    <td>Mahasiswa mampu menulis laporan/tulisan akademik sesuai kaidah bahasa dan struktur penulisan yang baik.</td>
                  </tr>
                  <tr>
                    <td>IK 3</td>
                    <td>Mahasiswa mampu berkomunikasi secara profesional dalam konteks akademik dan industri, termasuk etika komunikasi digital.</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>          
        </div>

         <!-- ========== CARD 4: Chart CPL-IK ========== -->     
         <div class="card">   
          <!-- CARD HEADER -->  
          <div class="card-header ">         
            <h5 class="card-title mb-0">
              <button class="btn btn-sm btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#chartCPLIK2">
                <i class="fas fa-expand"></i>
              </button>
              CPL 2 – Kemampuan untuk menginternalisasi semangat kemandirian dan Kewirausahaan
            </h5>
          </div>
          <!-- CARD BODY -->
          <div class="card-body collapse" id="chartCPLIK2">
            <!-- Chart Container -->
            <div class="chart-container">
              <canvas id="chartCPL2" width="100%" height="30"></canvas>
            </div>
          </div>
          <!-- CARD FOOTER -->
          <div class="card-footer collapse" id="chartCPLIK2">
            <h6 class="font-weight-bold">Daftar Indikator Kinerja (IK)</h6>
            <div class="table-responsive">
              <table class="table table-sm table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th style="width: 80px;">Kode IK</th>
                    <th>Deskripsi IK</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>IK 1</td>
                    <td>Mahasiswa mampu menyampaikan informasi secara lisan secara runtut, jelas, dan mudah dipahami.</td>
                  </tr>
                  <tr>
                    <td>IK 2</td>
                    <td>Mahasiswa mampu menulis laporan/tulisan akademik sesuai kaidah bahasa dan struktur penulisan yang baik.</td>
                  </tr>
                  <tr>
                    <td>IK 3</td>
                    <td>Mahasiswa mampu berkomunikasi secara profesional dalam konteks akademik dan industri, termasuk etika komunikasi digital.</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        
        
      </div>
      



        

         
      </div><!-- /.container-fluid -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->
</div>

<?php include('4footer.php'); ?>

 <!-- Modal: Filter -->
  <div class="modal fade" id="modalFilter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <form id="formFilter" class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><i class="fa fa-filter me-2"></i> Filter Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Set Pemetaan / Kurikulum</label>
            <select id="filterSet" class="form-select">
              <option value="KT-6">KT-6 (K20)</option>
              <option value="KT-2">KT-2 (Kurikulum Lama)</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Angkatan</label>
            <select id="filterAngkatan" class="form-select">
              <option>2025</option>
              <option selected>2024</option>
              <option>2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Program Studi</label>
            <select id="filterProdi" class="form-select">
              <option>Teknik Kimia Reguler</option>
              <option>Teknik Kimia Internasional</option>
              <option>Teknik Industri</option>
            </select>
          </div>
          <div class="alert alert-info small mb-0">
            Filter di mockup ini bekerja secara dummy. Dalam implementasi nyata, filter akan memicu permintaan ke server (API).
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary btn-sm">Terapkan</button>
        </div>
      </form>
    </div>
  </div>

<!-- Chart Script -->
<script>
  const dataCPL = [
  {
    idCanvas: 'chartCPL1',
    namaCPL: 'CPL 1 – Kemampuan berkomunikasi secara efektif baik lisan maupun tulisan',
    target: 85,
    IKs: [
      { kode: 'IK 1', deskripsi: 'Mampu menyampaikan informasi lisan secara runtut, jelas, mudah dipahami', nilaiA: 82, nilaiB: 90 },
      { kode: 'IK 2', deskripsi: 'Mampu menulis laporan/tulisan akademik sesuai kaidah bahasa dan struktur', nilaiA: 75, nilaiB: 80 },
      { kode: 'IK 3', deskripsi: 'Mampu berkomunikasi profesional dalam konteks akademik dan industri', nilaiA: 88, nilaiB: 92 },
    ]
  },
  {
    idCanvas: 'chartCPL2',
    namaCPL: 'CPL 2 – Kemampuan menginternalisasi semangat kemandirian dan kewirausahaan',
    target: 80,
    IKs: [
      { kode: 'IK 1', deskripsi: 'Mampu membuat perencanaan usaha sederhana', nilaiA: 70, nilaiB: 78 },
      { kode: 'IK 2', deskripsi: 'Mampu melakukan analisis risiko', nilaiA: 72, nilaiB: 82 },
      { kode: 'IK 3', deskripsi: 'Mampu mempresentasikan ide kewirausahaan', nilaiA: 75, nilaiB: 85 },
      { kode: 'IK 4', deskripsi: 'Mampu bekerja sama dalam tim kewirausahaan', nilaiA: 78, nilaiB: 88 },
    ]
  },
  // Tambahkan CPL berikutnya
];

</script>


<!-- Font Awesome (optional icons) -->
<script src="https://kit.fontawesome.com/a2d9d6a04c.js" crossorigin="anonymous"></script>
<?php include('5script.php'); ?>
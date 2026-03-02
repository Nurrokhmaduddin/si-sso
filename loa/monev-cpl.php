<?php $page = 'monev_cpl'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Rekapitulasi CPL Semester
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
            <!-- <div class="card-header">
              <h5 class="card-title mb-0"><i class="fas fa-filter "></i> Judul Tabel yang terdampak tombol aksi ini </h5>              
            </div> -->
            <div class="card-body ">
              <div class="row">

                <div class="col-md-6">
                <b>Kurikulum:</b> 2023 &nbsp;
                </div>                
                <div class="col-md-6">
                <b>Set Pemetaan:</b> KT-6 (K20) Kurikulum 2025 full stage &nbsp;
                </div>
                <div class="col-md-6">
                <b>Tahun Akademik:</b> 2024/2025 &nbsp;
                </div> 
                <div class="col-md-6">
                <b>Semester Akademik:</b> Gasal  &nbsp;
                </div>
                <!-- <div class="col-md-6">
                <b>Angkatan Mahasiswa:</b> Semua  &nbsp;
                </div>  -->
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
              <div class="small">Rata-rata CPL</div>
              <div class="big" id="kpiAvg">75.2</div>
              <div class="small">dari 12 CPL</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="kpi " style="background:#20c997;">
              <div class="small">% CPMK Tercapai</div>
              <div class="big" id="kpiGap">85% </div>
              <div class="small">dari 258 CPMK (nilai rerata ≥ 65)</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="kpi" style="background:#ff7f0e;">
              <div class="small"> MK Mencapai Target</div>
              <div class="big" id="kpiReached">54 / 78</div>
              <div class="small">nilai rerata ≥ 65</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="kpi bg-danger">
              <div class="small">Rerata CPMK Terendah</div>
              <div class="big" id="kpiRisk">STS190-6</div>
              <div class="small">nama mata kuliah</div>
            </div>
          </div>
        </div>
             






<!-- ========== CARD 4:  Grafik Radar CPL & Progress ========== --> 
<style>
  .chart-box {
  position: relative;
  width: 100%;
}

.radar-box {
  height: 400px;   /* Radar lebih besar */
}

.small-box {
  height: 190px;   /* Bar chart lebih proporsional */
}

canvas {
  width: 100% !important;
  height: 100% !important;
}

</style>
<div class="card p-3">
  <div class="row">

    <!-- KIRI: Radar Chart -->
    <div class="col-lg-8">
      <div class="chart-box radar-box">
        <canvas id="radarCPL"></canvas>
      </div>

      <!-- Tombol -->
      <div class="d-flex gap-2 mt-2">
        <button class="btn btn-outline-info btn-sm flex-fill" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL11">
          Rangking Performa
        </button>
        <button class="btn btn-outline-info btn-sm flex-fill" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL13">
          Daftar CPL
        </button>
        <button class="btn btn-outline-danger btn-sm flex-fill" onclick="openAllRisikoPreview()">
          Performa Risiko
        </button>
      </div>
    </div>


    <!-- KANAN: Dua Bar Chart -->
    <div class="col-lg-4 d-flex flex-column">

      <!-- BAR CHART 1 -->
      <div class="d-flex flex-column flex-grow-1">
        <div class="flex-grow-1 mb-2">
          <canvas id="chartIK"></canvas>
        </div>

        <!-- Tombol -->
        <div class="d-flex gap-2 mt-2">
          <!-- <button class="btn btn-outline-info btn-sm flex-fill" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL21">Rangking</button>
          <button class="btn btn-outline-info btn-sm flex-fill" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL23">Daftar IK</button> -->
          <button class="btn btn-outline-danger btn-sm flex-fill" onclick="openAllRisikoPreview()">IK Belum Tuntas</button>
        </div>
      </div>


      <!-- BAR CHART 2 -->
      <div class="d-flex flex-column flex-grow-1">
        <div class="flex-grow-1 mb-2">
          <canvas id="chartCPMK"></canvas>
        </div>

        <!-- Tombol -->
        <div class="d-flex gap-2 mt-2">
         <!--  <button class="btn btn-outline-info btn-sm flex-fill" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL31">Rangking</button>
          <button class="btn btn-outline-info btn-sm flex-fill" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL33">Daftar CPMK</button> -->
          <button class="btn btn-outline-danger btn-sm flex-fill" onclick="openAllRisikoPreview()">CPMK Belum Tuntas</button>
        </div>
      </div>

    </div>
  </div>
</div>


        <!-- ========== CARD 4: Tabel CPL Min/Max/Rerata ========== -->   
        <!-- Rangking Performa -->
        <div class="row collapse" id="daftarIKCPL11">
          <!-- Card Lowest -->
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">🔽 Top 5 CPL Performa Terendah</h5>
              </div>
              <div class="card-body">
                <h3>Lowest 5</h3>
                <table border="1" cellpadding="8" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Ranking</th>
                      <th class="text-center">Nilai</th>
                      <th>CPL</th>
                      <th>Deskripsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:10%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">20</span></td>
                      <td>CPL-01</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:25%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">30</span></td>
                      <td>CPL-04</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:35%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">50</span></td>
                      <td>CPL-05</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:50%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">51</span></td>
                      <td>CPL-09</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:70%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">57</span></td>
                      <td>CPL-10</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Card Highest -->
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">🔼 Top 5 CPL Nilai Tertinggi</h5>
              </div>
              <div class="card-body">
                <h3>Highest 5</h3>
                <table border="1" cellpadding="8" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                       <th>Ranking</th>
                      <th class="text-center">Nilai</th>
                      <th>CPL</th>
                      <th>Deskripsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>                      
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:95%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">95</span></td>
                        <td>CPL-12</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:85%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">90</span></td>
                      <td>CPL-06</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:78%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                     <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">85</span></td>
                      <td>CPL-07</td>
                     <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:65%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                     <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">70</span></td>
                      <td>CPL-02</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:50%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">70</span></td>
                      <td>CPL-11</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- daftar min/max/rerate -->
        <div class="card collapse" id="daftarIKCPL13" >
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
                    <th>CPL Code</th>
                    <th class="text-center">Capaian</th>
                    <th class="text-center">Status</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>1</td>
                    <td>CPL-01: Pemahaman Dasar Polimer</td>
                    <td class="text-center">72.14%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>2</td>
                    <td>CPL-02: Teori Komposit</td>
                    <td class="text-center">77.86%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>3</td>
                    <td>CPL-03: Aplikasi Polimer</td>
                    <td class="text-center">76.14%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>4</td>
                    <td>CPL-04: Proses Produksi</td>
                    <td class="text-center">74.00%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>5</td>
                    <td>CPL-05: Analisis Material</td>
                    <td class="text-center">75.30%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>6</td>
                    <td>CPL-06: Keselamatan & Etika</td>
                    <td class="text-center">78.20%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>7</td>
                    <td>CPL-07: Desain Proses</td>
                    <td class="text-center">73.40%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>8</td>
                    <td>CPL-08: Metode Eksperimental</td>
                    <td class="text-center">76.80%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>9</td>
                    <td>CPL-09: Statistik & Analisis Data</td>
                    <td class="text-center">71.50%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>10</td>
                    <td>CPL-10: Komunikasi Teknis</td>
                    <td class="text-center">75.00%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>        
          <div class="card-footer d-flex justify-content-between">            
          </div>
        </div>

        <!-- ========== CARD 4: tabel IK Min/Max/Rerata ========== -->        
        <!-- Rangking Performa -->
        <div class="row collapse" id="daftarIKCPL21">
          <!-- Card Lowest -->
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">🔽 Top 5 IK Performa Terendah</h5>
              </div>
              <div class="card-body">
                <h3>Lowest 5</h3>
                <table border="1" cellpadding="8" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Ranking</th>
                      <th class="text-center">Nilai</th>
                      <th>IK</th>
                      <th>Deskripsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:10%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">20</span></td>
                      <td>IK-01</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:25%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">30</span></td>
                      <td>IK-04</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:35%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">50</span></td>
                      <td>IK-05</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:50%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">51</span></td>
                      <td>IK-09</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:70%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">57</span></td>
                      <td>IK-10</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Card Highest -->
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">🔼 Top 5 IK Nilai Tertinggi</h5>
              </div>
              <div class="card-body">
                <h3>Highest 5</h3>
                <table border="1" cellpadding="8" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                       <th>Ranking</th>
                      <th class="text-center">Nilai</th>
                      <th>IK</th>
                      <th>Deskripsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>                      
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:95%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">95</span></td>
                        <td>IK-12</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:85%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">90</span></td>
                      <td>IK-06</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:78%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                     <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">85</span></td>
                      <td>IK-07</td>
                     <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:65%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                     <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">70</span></td>
                      <td>IK-02</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:50%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">70</span></td>
                      <td>IK-11</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- daftar min/max/rerate -->
        <div class="card collapse" id="daftarIKCPL23" >
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
                    <th>IK Code</th>
                    <th class="text-center">Capaian</th>
                    <th class="text-center">Status</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>1</td>
                    <td>IK-01: Pemahaman Dasar Polimer</td>
                    <td class="text-center">72.14%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>2</td>
                    <td>IK-02: Teori Komposit</td>
                    <td class="text-center">77.86%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>3</td>
                    <td>IK-03: Aplikasi Polimer</td>
                    <td class="text-center">76.14%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>4</td>
                    <td>IK-04: Proses Produksi</td>
                    <td class="text-center">74.00%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>5</td>
                    <td>IK-05: Analisis Material</td>
                    <td class="text-center">75.30%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>6</td>
                    <td>IK-06: Keselamatan & Etika</td>
                    <td class="text-center">78.20%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>7</td>
                    <td>IK-07: Desain Proses</td>
                    <td class="text-center">73.40%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>8</td>
                    <td>IK-08: Metode Eksperimental</td>
                    <td class="text-center">76.80%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>9</td>
                    <td>IK-09: Statistik & Analisis Data</td>
                    <td class="text-center">71.50%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>10</td>
                    <td>IK-10: Komunikasi Teknis</td>
                    <td class="text-center">75.00%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>        
          <div class="card-footer d-flex justify-content-between">            
          </div>
        </div>

        <!-- ========== CARD 4: tabel CPMK Min/Max/Rerata ========== -->       
        <!-- Rangking Performa -->
        <div class="row collapse" id="daftarIKCPL31" >
          <!-- Card Lowest -->
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">🔽 Top 5 CPMK Performa Terendah</h5>
              </div>
              <div class="card-body">
                <h3>Lowest 5</h3>
                <table border="1" cellpadding="8" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Ranking</th>
                      <th class="text-center">Nilai</th>
                      <th>CPMK</th>
                      <th>Deskripsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:10%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">20</span></td>
                      <td>SKS198-1</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:25%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">30</span></td>
                      <td>SKT911-4</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:35%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">50</span></td>
                      <td>SKS123-5</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:50%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">51</span></td>
                      <td>SKS345-9</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:70%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">57</span></td>
                      <td>UNI901-1</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Card Highest -->
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">🔼 Top 5 CPMK Nilai Tertinggi</h5>
              </div>
              <div class="card-body">
                <h3>Highest 5</h3>
                <table border="1" cellpadding="8" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                       <th>Ranking</th>
                      <th class="text-center">Nilai</th>
                      <th>CPMK</th>
                      <th>Deskripsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>                      
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:95%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">95</span></td>
                        <td>SKS834-2</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:85%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">90</span></td>
                      <td>SKS923-6</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:78%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                     <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">85</span></td>
                      <td>SKS723-7</td>
                     <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:65%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                     <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">70</span></td>
                      <td>SKS523-2</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:50%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">70</span></td>
                      <td>SKS843-1</td>
                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- daftar min/max/rerate -->
        <div class="card collapse" id="daftarIKCPL33" >
          <div class="card-header d-flex align-items-center">
            <h5 class="card-title mb-0"><i class="fas fa-table me-2"></i> Tabel CPL — Min / Max / Rerata</h5>
            <div class="card-tools ms-auto">
              <small class="text-muted">Klik angka Min/Max untuk melihat 1 mahasiswa (NIM / Nama / Nilai)</small>
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
                    <td>SKS982-1: Pemahaman Dasar Polimer</td>
                    <td class="text-center">72.14%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>SKS912-2: Teori Komposit</td>
                    <td class="text-center">71.50%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>UNI902-3: Aplikasi Polimer</td>
                    <td class="text-center">76.80%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>UNI912-4: Proses Produksi</td>
                    <td class="text-center">76.80%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>SKS234-5: Analisis Material</td>
                    <td class="text-center">75.30%</td>
                   <td class="text-center">🟨 Cukup</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>SKS812-6: Keselamatan & Etika</td>
                     <td class="text-center">76.80%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>SKS908-7: Desain Proses</td>                    
                    <td class="text-center">73.40%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>SKS111-8: Metode Eksperimental</td>
                    <td class="text-center">71.50%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>SKS113-9: Statistik & Analisis Data</td>
                    <td class="text-center">71.50%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>SKS932-1: Komunikasi Teknis</td>                    
                    <td class="text-center">75.00%</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>        
          <div class="card-footer d-flex justify-content-between">            
          </div>
        </div>




<!-- ========== CARD : Table Daftar Mata Kuliah ========== -->
        <div class="card">
          <div class="card-header">
              <h5 class="card-title mb-0"> Daftar Mata Kuliah</h5>
              <div class="card-tools">
                <small class="text-muted">Semester Terpilih</small>
              </div>
            </div>
        
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table1 table-bordered table-striped table-sm datatables1">
                <thead>
                  <tr class="text-uppercase text-center">
                    <th width="5px">No.</th>
                    <th>Kode Set Pemetaan</th>
                    <th>Kode MK</th>
                    <th>Nama MK</th>                    
                    <th>Jenis</th>
                    <th>Semester Tempuh</th>
                    <th>Jumlah CPMK</th>
                    <th>Jumlah SKS</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">ST-24</td>
                    <td>STS704</td>
                    <td>Metode Pelaksanaan Bangunan</td>
                    <td class="text-center"><span class="badge badge-success">Wajib</span></td>
                    <td class="text-center">1</td>
                    <td>3</td>
                    <td>3</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailMK">
                        📄 Detail
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">2</td>
                    <td class="text-center">ST-24</td>
                    <td>STS913</td>
                    <td>Struktur Komposit</td>
                    <td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                    <td class="text-center">1</td>
                    <td>3</td>
                    <td>3</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailMK">
                        📄 Detail
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">3</td>
                    <td class="text-center">ST-24</td>
                    <td>51175111</td>
                    <td>Building Structures Design</td>                   
                    <td class="text-center"><span class="badge badge-success">Wajib</span></td>
                    <td class="text-center">2</td>
                    <td>3</td>
                    <td>3</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailMK">
                        📄 Detail
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">4</td>
                    <td class="text-center">ST-24</td>
                    <td>STS-101</td>
                    <td>Engineering Statistics</td>                    
                    <td class="text-center"><span class="badge badge-success">Wajib</span></td>
                    <td class="text-center">2</td>
                    <td>2</td>
                    <td>3</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailMK">
                        📄 Detail
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">5</td>
                    <td class="text-center">ST-24</td>
                    <td>STS307</td>
                    <td>Bahan Perkerasan Jalan (+Pr)</td>
                    <td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                    <td class="text-center">3</td>
                    <td>4</td>
                    <td>3</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailMK">
                        📄 Detail
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">6</td>
                    <td class="text-center">ST-24</td>
                    <td>STS702</td>
                    <td>Struktur Baja</td>
                    <td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                    <td class="text-center">4</td>
                    <td>3</td>
                    <td>3</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailMK">
                        📄 Detail
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">7</td>
                    <td class="text-center">ST-24</td>
                    <td>51195142</td>
                    <td>Perancangan Struktur Jembatan</td>
                    <td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                    <td class="text-center">5</td>
                    <td>2</td>
                    <td>2</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailMK">
                        📄 Detail
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">8</td>
                    <td class="text-center">ST-24</td>
                    <td>51155081</td>
                    <td>Introduction to Earthquake Engineering</td>
                    <td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                    <td class="text-center">6</td>
                    <td>3</td>
                    <td>2</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailMK">
                        📄 Detail
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">9</td>
                    <td class="text-center">ST-24</td>
                    <td>STS904</td>
                    <td>BIM untuk Manajemen Konstruksi</td>
                    <td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                    <td class="text-center">7</td>
                    <td>2</td>
                    <td>3</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailMK">
                        📄 Detail
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">10</td>
                    <td class="text-center">ST-24</td>
                    <td>51153061</td>
                    <td>Water Structures Design</td>
                    <td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                    <td class="text-center">8</td>
                    <td>3</td>
                    <td>3</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalDetailMK">
                        📄 Detail
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
          Ringkasan capaian CPL per Individu Mahasiswa, perkembangan, peringatan dini (EWS), disajikan dalam bentuk grafik dan tabel (Mockup data statis)
        </p>     
        <p>
          untuk audit implementasi dan atau audit kurikulum
        </p>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


  <!-- Modal: Preview Risk Performance -->
  <div class="modal fade" id="modalRisikoAll" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-secondary text-white">
          <h6 class="modal-title">Preview Performa Risiko (sample)</h6>
          <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table table-sm table-bordered">
            <thead class="table-light"><tr><th>#</th><th>Kode</th><th>Deskripsi</th><th>Nilai Performa</th></tr></thead>
            <tbody>
              <tr><td>1</td><td>CPL-01</td><td>lorem ipsum</td><td>61 </td></tr>
              <tr><td>2</td><td>CPL-04</td><td>lorem ipsum</td><td>48 </td></tr>
              <tr><td>3</td><td>CPL-06</td><td>Contoh Lain</td><td>45 </td></tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Show single student (on clicking min/max) -->
  <div class="modal fade" id="modalStudent" tabindex="-1" aria-labelledby="modalStudentLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header bg-info text-white">
          <h5 class="modal-title" id="modalStudentLabel"><i class="fas fa-user-graduate me-2"></i> Detil Mahasiswa</h5>
          <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <dl class="row mb-0">
            <dt class="col-5">NIM</dt><dd class="col-7" id="stuNim">-</dd>
            <dt class="col-5">Nama</dt><dd class="col-7" id="stuName">-</dd>
            <dt class="col-5">Jenis</dt><dd class="col-7" id="stuType">-</dd>
            <dt class="col-5">Nilai</dt><dd class="col-7" id="stuValue">-</dd>
          </dl>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>



<!-- Modal Detail MK -->
  <div class="modal fade" id="modalDetailMK" tabindex="-1" role="dialog" aria-labelledby="detailMKTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

        <!-- Header -->
        <div class="modal-header bg-info text-white">
          <h5 class="modal-title" id="detailMKTitle">Detail Kelas Mata Kuliah</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <!-- Body -->
        <div class="modal-body">

          <!-- Informasi Umum -->
          <h6 class="mb-2"><b>Informasi Umum</b></h6>
          <table class="table table-sm table-bordered mb-4">
            <tr>
              <th style="width: 180px;">Mata Kuliah</th>
              <td>SKT1239 — Dasar Matematika</td>
            </tr>
            <tr>
              <th style="width: 180px;">Periode Akademik</th>
              <td>2024/2025 Gasal</td>
            </tr>
          </table>

          <!-- Tabel Detail Kelas -->
          <h6 class="mb-2"><b>Informasi Kelas</b></h6>

          <div class="table-responsive">
            <table class="table table-bordered table-sm">
              <thead class="thead-light">
                <tr class="text-center">
                  <th>Kelas</th>
                  <th>Dosen Pengampu</th>
                  <th>Rerata Nilai MK</th>
                  <th>Rerata CPMK 1</th>
                  <th>Rerata Remidi CPMK 1</th>
                  <th>Rerata CPMK 2</th>
                  <th>Rerata Remidi CPMK 2</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-center">
                  <td>A</td>
                  <td>Hasan, ST, MT.</td>
                  <td>78</td>
                  <td>78</td>
                  <td>0</td>
                  <td>78</td>
                  <td>0</td>
                </tr>
                <tr class="text-center">
                 <td>C</td>
                  <td>Rendi, ST, MT.</td>
                  <td>78</td>
                  <td>78</td>
                  <td>0</td>
                  <td>78</td>
                  <td>0</td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>

        <!-- Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>

      </div>
    </div>
  </div>
  <script>     
    // -------------------------
    // Populate tables & KPI
    // -------------------------
    function populateRekap() {
      const tbody = document.getElementById('tableRekapBody');
      tbody.innerHTML = '';
      CPLS.forEach((c,i) => {
        const gap = (c.avg - c.target).toFixed(2);
        const status = gap >= 0 ? 'green' : (gap >= -10 ? 'yellow' : 'red');
        const tr = document.createElement('tr');
        tr.style.cursor = 'pointer';
        tr.innerHTML = `
          <td>${i+1}</td>
          <td><strong>${c.code}</strong><div class="small text-muted">${c.name}</div></td>
          <td class="text-center">${c.avg}</td>
          <td class="text-center">${c.target}</td>
          <td class="text-center">${gap}%</td>
          <td class="text-center"><span class="status-dot ${status==='green'?'status-green':status==='yellow'?'status-yellow':'status-red'}"></span></td>
        `;
        tr.addEventListener('click', ()=> {
          // highlight and scroll to granular - simple behavior: filter detail rows by sample
          alert('Buka drilldown CPL: ' + c.code + '\\n(Mockup) — men-scroll ke tabel detail');
          document.getElementById('tblDetail').scrollIntoView({behavior:'smooth'});
        });
        tbody.appendChild(tr);
      });

      // KPI summary
      const avgAll = (CPLS.reduce((s,x)=>s+x.avg,0) / CPLS.length).toFixed(2);
      document.getElementById('kpiAvg').textContent = avgAll;
      const reached = CPLS.filter(x=>x.avg >= x.target).length;
      document.getElementById('kpiReached').textContent = reached + ' / ' + CPLS.length;
      const gapAvg = (avgAll - 80).toFixed(2);
      document.getElementById('kpiGap').textContent = (gapAvg>0?('+'):'') + gapAvg + '%';
      const riskCount = detailRows.filter(r=>r.value < 50).length;
      document.getElementById('kpiRisk').textContent = riskCount;
      document.getElementById('summaryShort').textContent = `Rata-rata CPL: ${avgAll} — Gap vs Target: ${gapAvg}%`;
    }

    
    function populateDetail() {
      const tbody = document.getElementById('tblDetailBody');
      tbody.innerHTML = '';
      detailRows.forEach(r => {
        const tdValue = `<a href="#" class="link-primary text-decoration-none value-link" data-nim="${r.nim}" data-name="${r.name}" data-ik="${r.ik}" data-cpmk="${r.cpmk}" data-value="${r.value}" data-doc="${r.doc}">${r.value}</a>`;
        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td>${r.nim}</td>
          <td>${r.name}</td>
          <td>${r.ik}</td>
          <td>${r.cpmk}</td>
          <td class="text-center">${tdValue}</td>
          <td class="text-center">${r.prog}</td>
          <td><a class="btn btn-sm btn-outline-secondary" href="${r.doc}">Dokumen</a></td>
        `;
        tbody.appendChild(tr);
      });

      // attach click handlers for value links
      document.querySelectorAll('.value-link').forEach(el=>{
        el.addEventListener('click', function(ev){
          ev.preventDefault();
          const nim = this.dataset.nim;
          const name = this.dataset.name;
          const ik = this.dataset.ik;
          const cpmk = this.dataset.cpmk;
          const value = this.dataset.value;
          document.getElementById('modalValueTitle').textContent = `${cpmk} — Nilai`;
          document.getElementById('mdNim').textContent = nim;
          document.getElementById('mdName').textContent = name;
          document.getElementById('mdIk').textContent = ik;
          document.getElementById('mdCpmk').textContent = cpmk;
          document.getElementById('mdValue').textContent = value;
          document.getElementById('viewDocBtn').href = this.dataset.doc || '#';
          const modal = new bootstrap.Modal(document.getElementById('modalValueDetail'));
          modal.show();
        });
      });
    }

      
    // -------------------------
    // UI helpers
    // -------------------------
    function openAllStudentsPreview(){ const modal = new bootstrap.Modal(document.getElementById('modalPreviewAll')); modal.show(); }
    function openAllRisikoPreview(){ const modal = new bootstrap.Modal(document.getElementById('modalRisikoAll')); modal.show(); }

    function applyDummyFilter(){
      // apply values from modal inputs when user clicks "Terapkan"
      const set = document.getElementById('filterSet').value || 'KT-6 (K20)';
      const ang = document.getElementById('filterAngkatan').value || '2024';
      const prodi = document.getElementById('filterProdi').value || 'Teknik Kimia Reguler';
      document.getElementById('summarySet').textContent = set;
      document.getElementById('summaryAngkatan').textContent = ang;
      document.getElementById('summaryProdi').textContent = prodi;
      // close modal if open
      const modalEl = document.getElementById('modalFilter');
      const bs = bootstrap.Modal.getInstance(modalEl);
      if(bs) bs.hide();
      // in real app, perform XHR to backend to update data. Here we simply repopulate with same dummy.
      populateRekap();
      populateEws();
      populateDetail();
      renderCharts();
      alert('Filter diterapkan (mock). Data dummy tetap sama.');
    }

    // Attach filter form submit
    document.getElementById('formFilter').addEventListener('submit', function(e){
      e.preventDefault();
      applyDummyFilter();
    });

    // Export button
    document.getElementById('btnExportAll').addEventListener('click', function(){
      downloadCSV('rekap_cpl_all.csv', tableToCSVArray_());
    });

    // On page load populate
    (function init(){
      populateRekap();
      populateEws();
      populateDetail();
      renderCharts();
    })();

    // detail export wrapper
    function downloadCSVDetail(){
      downloadCSV('detail_mhs.csv', detailTableToCSVArray());
    }

    // link functions used in buttons elsewhere
    window.downloadCSV = downloadCSV;
    window.tableToCSVArray = tableToCSVArray_;
    window.detailTableToCSVArray = detailTableToCSVArray;
    window.openAllStudentsPreview = openAllStudentsPreview;
    window.applyDummyFilter = applyDummyFilter;
    window.downloadCSVDetail = downloadCSVDetail;

  </script>
<script>
// -------------------------------------------------
// 1) GENERATOR DATA DUMMY SECARA OTOMATIS
// -------------------------------------------------

// 11 CPL
const cplLabels = Array.from({length: 11}, (_, i) => `CPL-${String(i+1).padStart(2,'0')}`);
const cplAverages = cplLabels.map(() => randomScore());

// 24 IK
const ikLabels = Array.from({length: 24}, (_, i) => `IK-${String(i+1).padStart(2,'0')}`);
const ikAverages = ikLabels.map(() => randomScore());

// 258 CPMK  (format: STKxxx-n)
const cpmkLabels = Array.from({length: 258}, (_, i) => {
    const mkCode = `STK${String(500 + Math.floor(i/5)).padStart(3,'0')}`;
    const num = (i % 5) + 1;
    return `${mkCode}-${num}`;
});
const cpmkAverages = cpmkLabels.map(() => randomScore());

// 78 MK
const mkLabels = Array.from({length: 78}, (_, i) => `STK${String(600 + i).padStart(3,'0')}`);
const mkAverages = mkLabels.map(() => randomScore());

// -------------------------------------------------
// 2) FUNCTION RANDOM SCORE
// -------------------------------------------------
function randomScore() {
    return Number((0 + Math.random()*100).toFixed(2)); // rentang 0–100
}

// -------------------------------------------------
// 3) FUNGSI GENERATOR BARCHART UMUM
// -------------------------------------------------

function generateBarChart(canvasId, labels, data, labelName, color) {
    const ctx = document.getElementById(canvasId).getContext("2d");
    new Chart(ctx, {
        type: "bar",
        data: {
            labels: labels,
            datasets: [{
                label: labelName,
                data: data,
                backgroundColor: color.bg,
                borderColor: color.border,
                borderWidth: 2
            }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            x: {
              ticks: {
                display: false   // ⬅️ MATIKAN LABEL BAWAH
              },
              grid: {
                display: false   // (opsional) hilangkan garis grid vertikal
              }
            },
            y: {
              beginAtZero: true,
              max: 100
            }
          }
        }

    });
}

// -------------------------------------------------
// 4) GENERATE 4 BARCHART
// -------------------------------------------------



generateBarChart("chartIK", ikLabels, ikAverages, "Capaian IK", {
    bg: "rgba(255, 159, 64, 0.7)", border: "rgb(255, 159, 64)"     // oranye
});

generateBarChart("chartCPMK", cpmkLabels, cpmkAverages, "Capaian CPMK", {
    bg: "rgba(255, 99, 132, 0.7)", border: "rgb(255, 99, 132)"     // merah
});

generateBarChart("chartMK", mkLabels, mkAverages, "Capaian MK", {
    bg: "rgba(54, 162, 235, 0.7)", border: "rgb(54, 162, 235)"     // biru
});

</script>

<script>
// ------------------------------------------------------------
// 1) TEMPAT INPUT DATA CPMK
// Cukup edit bagian ini saja!
// Format: { code: "STKxxx-n", value: 0-100 }
// ------------------------------------------------------------
const cpmkData = [
    { code: "STK623-1", value: 72.5 },
    { code: "STK623-2", value: 81.2 },
    { code: "STK623-3", value: 66.7 },
    { code: "STK610-4", value: 90.1 },
    { code: "STK611-2", value: 58.3 },
    { code: "STK615-1", value: 77.4 },
    { code: "STK620-3", value: 69.8 },
    { code: "STK620-4", value: 82.6 },
    { code: "STK621-1", value: 94.0 },
    { code: "STK622-3", value: 88.2 },
    // ... lanjutkan data asli kamu
];

// ------------------------------------------------------------
// 2) PROSES DATA: URUTKAN & PILIH 10 TERENDAH / 10 TERTINGGI
// ------------------------------------------------------------
const sortedData = [...cpmkData].sort((a, b) => a.value - b.value);

const lowest10 = sortedData.slice(0, 10);
const highest10 = sortedData.slice(-10).reverse(); // highest → descending

// ------------------------------------------------------------
// 3) FUNGSI GENERATOR CHART HORIZONTAL
// ------------------------------------------------------------
function generateHorizontalChart(canvasId, labels, values, bgColor, borderColor) {
    const ctx = document.getElementById(canvasId).getContext("2d");

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: labels,
            datasets: [{
                label: "Nilai CPMK",
                data: values,
                backgroundColor: bgColor,
                borderColor: borderColor,
                borderWidth: 2
            }]
        },
        options: {
            indexAxis: "y", // Membuat horizontal
            responsive: true,
            scales: {
                x: { beginAtZero: true, max: 100 }
            }
        }
    });
}

// ------------------------------------------------------------
// 4) PANGGIL CHART KIRI & KANAN
// ------------------------------------------------------------
generateHorizontalChart(
    "chartLowest",
    lowest10.map(d => d.code),
    lowest10.map(d => d.value),
    "rgba(255, 99, 132, 0.7)",   // merah lembut
    "rgb(255, 99, 132)"
);

generateHorizontalChart(
    "chartHighest",
    highest10.map(d => d.code),
    highest10.map(d => d.value),
    "rgba(75, 192, 75, 0.7)",   // hijau lembut
    "rgb(75, 192, 75)"
);

</script>
<script>
// ----- Radar CPL -----
  const radarCtx = document.getElementById('radarCPL').getContext('2d');
  const radarCPL = new Chart(radarCtx, {
    type: 'radar',
    data: {
      labels: ['CPL 1', 'CPL 2', 'CPL 3', 'CPL 4', 'CPL 5', 'CPL 6', 'CPL 7', 'CPL 8', 'CPL 9', 'CPL 10', 'CPL 11'],
      datasets: [{
        label: 'Capaian CPL',
        data: [80, 90, 75, 85, 88,65, 67, 70, 55, 30, 23],
            // Warna hijau lembut (lebih nyaman di mata)
        backgroundColor: 'rgba(80, 200, 120, 0.35)',
        borderColor: 'rgba(60, 160, 95, 0.9)',
        borderWidth: 2,
        pointBackgroundColor: 'rgba(60, 160, 95, 1)'
      }]
    },
    options: {
      responsive: true,
    maintainAspectRatio: false,
      scales: {
        r: {
          min: 0,
          max: 100,
          ticks: { stepSize: 10 }
        }
      }
    }
  });

    // ----- Progress CPL Keseluruhan -----
    const progressCtx = document.getElementById('progressCPL').getContext('2d');
    const progressCPL = new Chart(progressCtx, {
        type: 'bar',
        data: {
            labels: ['CPL A', 'CPL B', 'CPL C'],
            datasets: [{
                label: 'Progress %',
                data: [74, 78, 82],
                backgroundColor: ['#007bff','#28a745','#ffc107']
            }]
        },
        options: {
            indexAxis: 'y',
            responsive: true,
    maintainAspectRatio: false,
            scales: {
                x: { max: 100, ticks: { callback: function(val){ return val + '%'; } } }
            },
            plugins: {
                legend: { display: false }
            }
        }
    });

    // ----- Grafik Batang CPMK Top 10 -----
    const barCtx = document.getElementById('barCPMK').getContext('2d');
    const barCPMK = new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: ['CPMK1','CPMK2','CPMK3','CPMK4','CPMK5','CPMK6','CPMK7','CPMK8','CPMK9','CPMK10'],
            datasets: [{
                label: 'Capaian %',
                data: [62, 65, 67, 68, 70, 72, 74, 75, 77, 78],
                backgroundColor: 'rgba(255, 99, 132, 0.7)'
            }]
        },
        options: {
          responsive: true,
    maintainAspectRatio: false,
            scales: {
                y: { beginAtZero: true, max: 100, ticks: { callback: function(val){ return val + '%'; } } }
            }
        }
    });
</script>
<?php include('5script.php'); ?>
<?php $page = 'monev_kelas'; ?>
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
      <h3 class="mb-0">Rekapitulasi Kelas Perkuliahan
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
                  <b>Kurikulum:</b> 2023 &nbsp;
                </div>                
                <!-- <div class="col-md-6">
                <b>Set Pemetaan:</b> KT-6 (K20) Kurikulum 2025 full stage &nbsp;
              </div> -->
              <div class="col-md-6">
                  <b>Periode Akademik:</b> 2024/2025 - Gasal  &nbsp;
                </div> 
                
              </div>
            </div>
            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button> -->
                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button> -->  
                <!-- <button type="button" class="btn btn-outline-warning btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import from Gateway UII
                </button>  -->             
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <a href="https://tsipil-loa.tmidev.my.id/loa/portofolio_cpmk/ekspor_hasil_assessmen_data/ZFVwUVMwRnZNd1ZVRUVneFZ6bEZNZ3dGMDAwMDk" type="button" class="btn btn-sm btn-success"><i class="fas fa-file-excel"></i> Ekspor Hasil Assessmen</a>
              <a href="https://tsipil-loa.tmidev.my.id/loa/portofolio_cpmk/ekspor_data_hasil_evaluasi/UWpoalVHVkJSekJWQkNPTGpNVWM1ZWpNZDNjMG1wdzAwMDEy" target="_blank" type="button" class="btn btn-sm btn-success"><i class="fas fa-file-excel"></i> Ekspor Hasil Evaluasi</a>
              <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export Nilai Akhir
                </button>
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export Nilai Kosong
                </button>
                <!-- <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button> -->    
              </div>
            </div>
          </div>


 <!-- ========== CARD : KPI row ========== -->        
        <div class="row g-3 mb-3">
          <div class="col-md-3">
            <div class="kpi bg-primary">
              <div class="small">Total Kelas</div>
              <div class="big" id="kpiAvg">97</div>
              <div class="small">pada semester ini</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="kpi " style="background:#20c997;">
              <div class="small">Total Eviden Masuk</div>
              <div class="big" id="kpiGap">253 </div>
              <div class="small">78% dari total kelas</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="kpi" style="background:#ff7f0e;">
              <div class="small">Rata-rata Kelengkapan</div>
              <div class="big" id="kpiReached">78%</div>
              <div class="small">dari total kelas</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="kpi bg-danger">
              <div class="small">Kategori Terlemah</div>
              <div class="big" id="kpiRisk">CQI</div>
              <div class="small">dari 6 kategori</div>
            </div>
          </div>
        </div>

<!-- ========== CARD 4: Stacked Bar Chart — Proporsi ========== -->
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i> Stacked Bar Chart — Proporsi (%)</h5>
            <div class="card-tools">
              <small class="text-muted">Semester Terpilih</small>
            </div>
          </div>

          <div class="card-body chart-container d-flex flex-column">

            <!-- Bagian Chart -->
            <div class="flex-grow-1">
              <canvas id="stackedChart" width="100%" height="22"></canvas>
            </div>

            <!-- Bagian Tombol -->
            <div class="row text-center mt-3">
              <!-- <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL41">
                  Rangking Performa
                </button>
              </div> -->
              <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL43">
                  Overview Kelas
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-danger btn-sm w-100" onclick="openAllRisikoPreview()">
                  Kelas Risiko
                </button>
              </div>
            </div>

          </div>
        

        <!-- Rangking Performa -->
        <div class="row collapse" id="daftarIKCPL41" >
          <!-- Card Lowest -->
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">🔽 Top 5 MK Performa Terendah</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="tblCplStats" class="table table-hover table-bordered table-sm">
                    <thead class="table-light">
                      <tr>
                        <th>Ranking</th>
                        <th class="text-center" style="width: 140px">Rerata Nilai Akhir</th>
                        <th>MK</th>
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
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">20</span></td>
                        <td>STK314</td>
                        <td>Fisika Dasar 2</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:25%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">30</span></td>
                        <td>STK114</td>
                        <td>Azas Teknik Kimia 1</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:35%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">50</span></td>
                        <td>STK115</td>
                        <td>Aljabar Linear</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:50%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">51</span></td>
                        <td>STK116</td>
                        <td>Bahasa Inggris</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:70%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">57</span></td>
                        <td>STK144</td>
                        <td>Perancangan Alat Proses</td>
                      </tr>
                    </tbody>
                  </table>
                </div>               
              </div>
            </div>
          </div>
          <!-- Card Highest -->
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">🔼 Top 5 MK Performa Tertinggi</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="tblCplStats" class="table table-hover table-bordered table-sm">
                    <thead class="table-light">
                      <tr>
                        <th>Ranking</th>
                        <th class="text-center" style="width: 140px">Rerata Nilai Akhir</th>
                        <th>MK</th>
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
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">95</span></td>
                        <td>STS911</td>
                        <td>Bahasa Inggris</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:85%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">90</span></td>
                        <td>STS916</td>
                        <td>Ekonomi Teknik</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:78%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">85</span></td>
                        <td>UNI913</td>
                        <td>Kuliah Kerja Nyata</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:65%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">70</span></td>
                        <td>STS991</td>
                        <td>Fisika Dasar</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:50%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">70</span></td>
                        <td>STS914</td>
                        <td>Islam Ulil Albab</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                
              </div>
            </div>
          </div>
        </div>
        <!-- Rangking Mahasiswa -->
        <div class="row collapse" id="daftarIKCPL42" >
          <!-- Card Lowest -->
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">🔽 Top 10 MK Nilai Terendah</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="tblCplStats" class="table table-hover table-bordered table-sm">
                    <thead class="table-light">
                      <tr>
                        <th>Ranking</th>
                        <th class="text-center" style="width: 100px">Nilai Akhir</th>
                        <th>MK</th>
                        <th>NIM</th>
                        <th>NAMA</th>
                      </tr>
                    </thead>
                    <tbody>                
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:10%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">20</span></td>
                        <td>STK114</td>
                        <td>20241099</td>
                        <td>Andi Saputra</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:22%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">30</span></td>
                        <td>STK115</td>
                        <td>20241002</td>
                        <td>Siti Rahma</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:25%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">44</span></td>
                        <td>STK119</td>
                        <td>20241055</td>
                        <td>Budi Santoso</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:35%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">45</span></td>
                        <td>STK116</td>
                        <td>20241077</td>
                        <td>Nina Lestari</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:37%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">49</span></td>
                        <td>STK144</td>
                        <td>20241011</td>
                        <td>Rian Kurnia</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:40%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">50</span></td>
                        <td>STK521</td>
                        <td>20241099</td>
                        <td>Andi Saputra</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:45%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">50</span></td>
                        <td>STK911</td>
                        <td>20241002</td>
                        <td>Siti Rahma</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:45%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">56</span></td>
                        <td>STK914</td>
                        <td>20241055</td>
                        <td>Budi Santoso</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:50%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">56</span></td>
                        <td>STK921</td>
                        <td>20241077</td>
                        <td>Nina Lestari</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:70%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">57</span></td>
                        <td>STK925</td>
                        <td>20241011</td>
                        <td>Rian Kurnia</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Card Highest -->
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">🔼 Top 10 MK Nilai Tertinggi</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="tblCplStats" class="table table-hover table-bordered table-sm">
                    <thead class="table-light">
                      <tr>
                        <th>Ranking</th>
                        <th class="text-center" style="width: 100px">Nilai Akhir</th>
                        <th>MK</th>
                        <th>NIM</th>
                        <th>NAMA</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>                      
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:95%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">95</span></td>
                        <td>STS911</td>
                        <td>20241099</td>
                        <td>Andi Saputra</td>
                      </tr>
                      <tr>                      
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:95%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">94</span></td>
                        <td>STS981</td>
                        <td>20241099</td>
                        <td>Andi Saputra</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:85%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">90</span></td>
                        <td>STS916</td>
                        <td>20241099</td>
                        <td>Andi Saputra</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:85%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">89</span></td>
                        <td>STS916</td>
                        <td>20241002</td>
                        <td>Siti Rahma</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:78%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">85</span></td>
                        <td>STS913</td>
                        <td>20241099</td>
                        <td>Andi Saputra</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:78%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">85</span></td>
                        <td>STS913</td>
                        <td>13521171</td>
                        <td>Taufik Kusuma</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:65%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">70</span></td>
                        <td>STS991</td>
                        <td>20241099</td>
                        <td>Andi Saputra</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:65%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">68</span></td>
                        <td>STS991</td>
                        <td>13521143</td>
                        <td>Ega Nur Hidayat</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:50%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">67</span></td>
                        <td>STS914</td>
                        <td>20241002</td>
                        <td>Siti Rahma</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:50%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">67</span></td>
                        <td>STS914</td>
                        <td>16521014</td>
                        <td>Satya Aditya</td>
                      </tr>
                    </tbody>
                  </table>
                </div>


              </div>
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
       

        <!-- Table Overview Eviden -->
        <div class="card mb-4 collapse" id="daftarIKCPL43" >
          <div class="card-header bg-dark">
            <strong>Overview Kelengkapan Eviden</strong>
          </div>
          <div class="card-body p-0">
            <table class="table table-bordered table-striped mb-0">
              <thead class="thead-light text-center">
                <tr>
                  <th>Kategori Eviden</th>
                  <th>Kosong Eviden</th>
                  <th>Ada Eviden</th>
                  <th>Kelengkapan (%)</th>
                  <th>Aksi</th>
                  <th>Contoh File</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <tr>
                  <td>Perencanaan</td>
                  <td>23</td>
                  <td>46</td>
                  <td><span class="badge badge-success">74%</span></td>
                  <td><button class="btn btn-sm btn-outline-danger" onclick="openAllStudentsPreview()">Lihat Daftar Kosong</button></td>
                  <td>RPS, Kontrak, Mapping CPL</td> 
                </tr>
                <tr>
                  <td>Pelaksanaan</td>
                  <td>35</td>
                  <td>34</td>
                  <td><span class="badge badge-warning">49%</span></td>
                  <td><a href="#" class="btn btn-sm btn-info">Lihat Daftar Kosong</a></td>
                  <td>Presensi, Materi, Log LMS</td>
                </tr>
                <tr>
                  <td>Penugasan</td>
                  <td>28</td>
                  <td>41</td>
                  <td><span class="badge badge-warning">59%</span></td>
                  <td><a href="#" class="btn btn-sm btn-info">Lihat Daftar Kosong</a></td>
                  <td>Soal, Rubrik, Sample Tugas</td>
                </tr>
                <tr>
                  <td>Penilaian</td>
                  <td>42</td>
                  <td>27</td>
                  <td><span class="badge badge-danger">39%</span></td>
                  <td><a href="#" class="btn btn-sm btn-info">Lihat Daftar Kosong</a></td>
                  <td>UTS, UAS, Rubrik, Nilai CPMK</td>
                </tr>
                <tr>
                  <td>Capaian</td>
                  <td>18</td>
                  <td>51</td>
                  <td><span class="badge badge-success">73%</span></td>
                  <td><a href="#" class="btn btn-sm btn-info">Lihat Daftar Kosong</a></td>
                  <td>Rekap CPMK & IK</td>
                </tr>
                <tr>
                  <td>CQI</td>
                  <td>52</td>
                  <td>17</td>
                  <td><span class="badge badge-danger">25%</span></td>
                  <td><a href="#" class="btn btn-sm btn-info">Lihat Daftar Kosong</a></td>
                  <td>Analisis Gap, RTM</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

</div><!-- end card grafik -->
        <!-- ========== CARD : Tabel Granular ========== -->
          <div class="card">
            <div class="card-header">
              <h5 class="card-title mb-0"> Daftar Kelas Perkuliahan</h5>
              <div class="card-tools">
                <small class="text-muted">Semester Terpilih</small>
              </div>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm datatables1">
                  <thead>
                    <tr class="text-uppercase">
                      <th width="5px">No.</th>
                      <th>Dosen Pengampu</th>
                      <th>Mata Kuliah</th>
                      <th style="text-align: center;">Kelas</th>
                      <th style="text-align: center;">CPMK</th>
                      <th style="text-align: center;">Mahasiswa</th>
                      <th style="text-align: center;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td align="center">1</td>
                      <td>Tri Nugroho Sulistyantoro, S.T., M.T.<br>
                      <small><b>(195110502)</b></small>
                    </td>
                    <td>Metode Pelaksanaan Bangunan<br>
                      <small><b>(STS704)</b></small>
                    </td>
                    <td align="center">A</td>
                    <td align="center">5</td>
                    <td align="center"><b>27</b></td>                                         
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" onclick="window.location='monev-rekap-kelas-detail.php'"><i class="fas fa-info-circle"></i></button>
                      <a href="data-portofolio-cpmk.pdf" download class="btn btn-sm btn-outline-success"><i class="fas fa-download"></i></a>
                    </td>
                  </td>
                  </tr>

                  <tr>
                    <td align="center">2</td>
                    <td>
                      Tri Nugroho Sulistyantoro, S.T., M.T.<br>
                      <small><b>(195110502)</b></small>
                    </td>
                    <td>
                      Metode Pelaksanaan Bangunan<br>
                      <small><b>(STS704)</b></small>
                    </td>
                    <td align="center">C</td>
                    <td align="center">5</td>
                    <td align="center"><b>33</b></td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" onclick="window.location='monev-rekap-kelas-detail.php'"><i class="fas fa-info-circle"></i></button>
                      <a href="data-portofolio-cpmk.pdf" download class="btn btn-sm btn-outline-success"><i class="fas fa-download"></i></a>
                    </td>
                  </tr>

                  <tr>
                    <td align="center">3</td>
                    <td>
                      Andi Purnomo, S.T., M.T.<br>
                      <small><b>(065110501)</b></small>
                    </td>
                    <td>
                      Metode Pelaksanaan Bangunan<br>
                      <small><b>(STS704)</b></small>
                    </td>
                    <td align="center">B</td>
                    <td align="center">5</td>
                    <td align="center"><b>26</b></td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" onclick="window.location='monev-rekap-kelas-detail.php'"><i class="fas fa-info-circle"></i></button>
                      <a href="data-portofolio-cpmk.pdf" download class="btn btn-sm btn-outline-success"><i class="fas fa-download"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">4</td>
                    <td>
                      Vendie Abma, S.T., M.T.<br>
                      <small><b>(155111310)</b></small>
                    </td>
                    <td>
                      Metode Pelaksanaan Bangunan<br>
                      <small><b>(STS704)</b></small>
                    </td>
                    <td align="center">D</td>
                    <td align="center">5</td>
                    <td align="center"><b>23</b></td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" onclick="window.location='monev-rekap-kelas-detail.php'"><i class="fas fa-info-circle"></i></button>
                      <a href="data-portofolio-cpmk.pdf" download class="btn btn-sm btn-outline-success"><i class="fas fa-download"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">5</td>
                    <td>
                      Rizki Budiman, S.T., M.T.<br>
                      <small><b>(245111203)</b></small>
                    </td>
                    <td>
                      Metode Pelaksanaan Bangunan<br>
                      <small><b>(STS704)</b></small>
                    </td>
                    <td align="center">F</td>
                    <td align="center">5</td>
                    <td align="center"><b>25</b></td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" onclick="window.location='monev-rekap-kelas-detail.php'"><i class="fas fa-info-circle"></i></button>
                      <a href="data-portofolio-cpmk.pdf" download class="btn btn-sm btn-outline-success"><i class="fas fa-download"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">6</td>
                    <td>
                      Vendie Abma, S.T., M.T.<br>
                      <small><b>(155111310)</b></small>
                    </td>
                    <td>
                      Metode Pelaksanaan Bangunan<br>
                      <small><b>(STS704)</b></small>
                    </td>
                    <td align="center">E</td>
                    <td align="center">5</td>
                    <td align="center"><b>22</b></td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" onclick="window.location='monev-rekap-kelas-detail.php'"><i class="fas fa-info-circle"></i></button>
                      <a href="data-portofolio-cpmk.pdf" download class="btn btn-sm btn-outline-success"><i class="fas fa-download"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">7</td>
                    <td>
                      Miftahul Fauziah, S.T., M.T., Ph.D.<br>
                      <small><b>(955110103)</b></small>
                    </td>
                    <td>
                      Bahan Perkerasan Jalan (+Pr)<br>
                      <small><b>(STS307)</b></small>
                    </td>
                    <td align="center">F</td>
                    <td align="center">9</td>
                    <td align="center"><b>24</b></td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" onclick="window.location='monev-rekap-kelas-detail.php'"><i class="fas fa-info-circle"></i></button>
                      <a href="data-portofolio-cpmk.pdf" download class="btn btn-sm btn-outline-success"><i class="fas fa-download"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">8</td>
                    <td>
                      Prayogo Afang Prayitno, S.T., M.Sc.<br>
                      <small><b>(205111303)</b></small>
                    </td>
                    <td>
                      Bahan Perkerasan Jalan (+Pr)<br>
                      <small><b>(STS307)</b></small>
                    </td>
                    <td align="center">C</td>
                    <td align="center">9</td>
                    <td align="center"><b>20</b></td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" onclick="window.location='monev-rekap-kelas-detail.php'"><i class="fas fa-info-circle"></i></button>
                      <a href="data-portofolio-cpmk.pdf" download class="btn btn-sm btn-outline-success"><i class="fas fa-download"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">9</td>
                    <td>
                      Ir. Berlian Kushari, S.T., M.Eng., IPM, ASEAN Eng.<br>
                      <small><b>(015110101)</b></small>
                    </td>
                    <td>
                      Bahan Perkerasan Jalan (+Pr)<br>
                      <small><b>(STS307)</b></small>
                    </td>
                    <td align="center">G</td>
                    <td align="center">9</td>
                    <td align="center"><b>24</b></td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" onclick="window.location='monev-rekap-kelas-detail.php'"><i class="fas fa-info-circle"></i></button>
                      <a href="data-portofolio-cpmk.pdf" download class="btn btn-sm btn-outline-success"><i class="fas fa-download"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">10</td>
                    <td>
                      Ir. Mochammad Sigit Darmosudiharjo, M.T.<br>
                      <small><b>(885110103)</b></small>
                    </td>
                    <td>
                      Bahan Perkerasan Jalan (+Pr)<br>
                      <small><b>(STS307)</b></small>
                    </td>
                    <td align="center">E</td>
                    <td align="center">9</td>
                    <td align="center"><b>22</b></td>
                   <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" onclick="window.location='monev-rekap-kelas-detail.php'"><i class="fas fa-info-circle"></i></button>
                      <a href="data-portofolio-cpmk.pdf" download class="btn btn-sm btn-outline-success"><i class="fas fa-download"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">11</td>
                    <td>
                      Muhamad Abdul Hadi, S.T., M.T.<br>
                      <small><b>(215111307)</b></small>
                    </td>
                    <td>
                      Bahan Perkerasan Jalan (+Pr)<br>
                      <small><b>(STS307)</b></small>
                    </td>
                    <td align="center">D</td>
                    <td align="center">9</td>
                    <td align="center"><b>24</b></td>
                   <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" onclick="window.location='monev-rekap-kelas-detail.php'"><i class="fas fa-info-circle"></i></button>
                      <a href="data-portofolio-cpmk.pdf" download class="btn btn-sm btn-outline-success"><i class="fas fa-download"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">12</td>
                    <td>
                      Muhamad Abdul Hadi, S.T., M.T.<br>
                      <small><b>(215111307)</b></small>
                    </td>
                    <td>
                      Bahan Perkerasan Jalan (+Pr)<br>
                      <small><b>(STS307)</b></small>
                    </td>
                    <td align="center">B</td>
                    <td align="center">9</td>
                    <td align="center"><b>24</b></td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" onclick="window.location='monev-rekap-kelas-detail.php'"><i class="fas fa-info-circle"></i></button>
                      <a href="data-portofolio-cpmk.pdf" download class="btn btn-sm btn-outline-success"><i class="fas fa-download"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">13</td>
                    <td>
                      Miftahul Fauziah, S.T., M.T., Ph.D.<br>
                      <small><b>(955110103)</b></small>
                    </td>
                    <td>
                      Bahan Perkerasan Jalan (+Pr)<br>
                      <small><b>(STS307)</b></small>
                    </td>
                    <td align="center">A</td>
                    <td align="center">9</td>
                    <td align="center"><b>21</b></td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" onclick="window.location='monev-rekap-kelas-detail.php'"><i class="fas fa-info-circle"></i></button>
                      <a href="data-portofolio-cpmk.pdf" download class="btn btn-sm btn-outline-success"><i class="fas fa-download"></i></a>
                    </td>
                  </tr>

                  <tr>
                    <td align="center">14</td>
                    <td>
                      Ir. Subarkah, M.T.<br>
                      <small><b>(865110101)</b></small>
                    </td>
                    <td>
                      Bahan Perkerasan Jalan (+Pr)<br>
                      <small><b>(STS307)</b></small>
                    </td>
                    <td align="center">H</td>
                    <td align="center">9</td>
                    <td align="center"><b>24</b></td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info" onclick="window.location='monev-rekap-kelas-detail.php'"><i class="fas fa-info-circle"></i></button>
                      <a href="data-portofolio-cpmk.pdf" download class="btn btn-sm btn-outline-success"><i class="fas fa-download"></i></a>
                    </td>
                  </tr>

                </tbody>
              </table>


              </div>
            </div>
            <!-- /.card-body -->
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


<!-- Modal Impor -->
<div class="modal fade" id="modalImpor" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Impor Data</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">   
        <div class="alert alert-warning mb-3 py-2" role="alert" style="font-size: 0.9rem;">
          <i class="fas fa-exclamation-triangle me-1"></i>
          <strong>Penting:</strong> Pastikan file yang akan diimpor menggunakan <strong>template resmi</strong> yang sudah disediakan. Menggunakan file lain atau format berbeda dapat menyebabkan <strong>kesalahan impor</strong>.
        </div>     

        <label class="form-label">Pilih File:</label>
        <input type="file" class="form-control mb-3" accept=".xlsx,.xls">

        <a href="template-impor-mahasiswa.xls" class="btn btn-sm btn-outline-success w-100">Download Template</a>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Impor</button>
      </div>

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
          Halaman ini menampilkan rekapitulasi satu set pemetaan OBE yang telah dirancang, menyoroti kelengkapan pemetaan (mapping completeness) untuk memeriksa apakah CPL, IK, CPMK, dan MK telah terhubung secara lengkap, sekaligus keserataan beban pemetaan (mapping balance) untuk menilai distribusi dukungan dan mengidentifikasi gap antara elemen terkuat dan terlemah di tiap level.
        </p>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<?php include('5script.php'); ?>







<script>
    // Data
    // const labels = ["Perencanaan", "Pelaksanaan", "Penugasan", "Penilaian", "Capaian", "CQI"];
    const labels = ["RPS", "Materi Ajar", "Penugasan", "Soal Ujian", "Nilai CPMK", "EDOM"];
    const kosong = [23, 35, 28, 42, 18, 52];
    const ada = [46, 34, 41, 27, 51, 17];

    const persentaseKosong = kosong.map((k, i) => (k / (k + ada[i]) * 100).toFixed(1));
    const persentaseAda = ada.map((a, i) => (a / (kosong[i] + a) * 100).toFixed(1));

    // ===============================
    // HORIZONTAL STACKED BAR
    // ===============================
    new Chart(document.getElementById("stackedChart"), {
        type: "bar",
        data: {
            labels: labels,
            datasets: [
                {
                    label: "Ada (%)",
                    data: persentaseAda,
                    backgroundColor: "rgba(255, 99, 132, 0.7)",
                    borderColor: "rgb(255, 99, 132)",
                    borderWidth: 2
                },
                {
                    label: "Kosong (%)",
                    data: persentaseKosong,
                    backgroundColor: "rgba(255, 255, 255, 1)",
                    borderColor: "rgb(255, 99, 132)",
                    borderWidth: 2
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            indexAxis: 'y', // <= bikin horizontal
            scales: {
                x: { stacked: true, max: 100, beginAtZero: true },
                y: { stacked: true }
            }
        }
    });
</script>



  <!-- Modal: Student detail (when clicking a value) -->
  <div class="modal fade" id="modalValueDetail" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header bg-info text-white">
          <h6 class="modal-title" id="modalValueTitle">Detail Nilai</h6>
          <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <dl class="row mb-0">
            <dt class="col-5">NIM</dt><dd class="col-7" id="mdNim">-</dd>
            <dt class="col-5">Nama</dt><dd class="col-7" id="mdName">-</dd>
            <dt class="col-5">IK</dt><dd class="col-7" id="mdIk">-</dd>
            <dt class="col-5">CPMK</dt><dd class="col-7" id="mdCpmk">-</dd>
            <dt class="col-5">Nilai</dt><dd class="col-7" id="mdValue">-</dd>
          </dl>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
          <a id="viewDocBtn" class="btn btn-primary btn-sm" href="#" target="_blank">Lihat Dokumen</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Preview Risk Students -->
  <div class="modal fade" id="modalPreviewAll" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-secondary text-white">
          <h6 class="modal-title">Daftar Kelas Kosong Eviden</h6>
          <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table table-sm table-bordered table-striped">
            <thead class="table-light text-center">
              <tr>
                <th width="5%">No</th>
                <th>Kode Jalur</th>
                <th>Kode MK</th>
                <th>Nama MK</th>
                <th>Kelas</th>
                <th>Daftar Dosen Pengampu</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">1</td>
                <td class="text-center">REG-A</td>
                <td class="text-center">STS704</td>
                <td>Metode Pelaksanaan Bangunan</td>
                <td class="text-center">A</td>
                <td>
                  Dr. Ir. Budi Santoso, M.T.<br>
                  Ir. Sari Wulandari, M.T.
                </td>
              </tr>

              <tr>
                <td class="text-center">2</td>
                <td class="text-center">REG-B</td>
                <td class="text-center">STS913</td>
                <td>Struktur Komposit</td>
                <td class="text-center">B</td>
                <td>
                  Dr. Ahmad Fauzi, M.Sc.<br>
                  Ir. Lina Marlina, M.T.
                </td>
              </tr>

              <tr>
                <td class="text-center">3</td>
                <td class="text-center">INT-A</td>
                <td class="text-center">STS702</td>
                <td>Struktur Baja</td>
                <td class="text-center">A</td>
                <td>
                  Prof. Dr. Ir. Hendra Wijaya, M.Eng.
                </td>
              </tr>
            </tbody>
          </table>

        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Preview Risk Performance -->
  <div class="modal fade" id="modalRisikoAll" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-secondary text-white">
          <h6 class="modal-title">Daftar Kelas Kosong Kelengkapan</h6>
          <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table table-sm table-bordered table-striped">
            <thead class="table-light text-center">
              <tr>
                <th width="5%">No</th>
                <th>Kode Jalur</th>
                <th>Kode MK</th>
                <th>Nama MK</th>
                <th>Kelas</th>
                <th>Daftar Dosen Pengampu</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">1</td>
                <td class="text-center">REG-A</td>
                <td class="text-center">STS704</td>
                <td>Metode Pelaksanaan Bangunan</td>
                <td class="text-center">A</td>
                <td>
                  Dr. Ir. Budi Santoso, M.T.<br>
                  Ir. Sari Wulandari, M.T.
                </td>
              </tr>

              <tr>
                <td class="text-center">2</td>
                <td class="text-center">REG-B</td>
                <td class="text-center">STS913</td>
                <td>Struktur Komposit</td>
                <td class="text-center">B</td>
                <td>
                  Dr. Ahmad Fauzi, M.Sc.<br>
                  Ir. Lina Marlina, M.T.
                </td>
              </tr>

              <tr>
                <td class="text-center">3</td>
                <td class="text-center">INT-A</td>
                <td class="text-center">STS702</td>
                <td>Struktur Baja</td>
                <td class="text-center">A</td>
                <td>
                  Prof. Dr. Ir. Hendra Wijaya, M.Eng.
                </td>
              </tr>
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

  <script>
/* ========== Clickable min/max handler (show modal with single student) ========== */
    $(document).on('click', '.clickable', function() {
      const cpl = $(this).data('cpl');
  const type = $(this).data('type'); // 'min' atau 'max'
  const value = $(this).data('value');

  // dummy student selection logic (for mockup)
  let student;
  if(type === 'min') {
    student = { nim: '20241099', name: 'Mahasiswa Minimal', value: value, type: 'Min' };
  } else {
    student = { nim: '20241002', name: 'Mahasiswa Maksimal', value: value, type: 'Max' };
  }

  $('#modalStudentLabel').text(cpl + ' — ' + (type === 'min' ? 'Minimum' : 'Maximum'));
  $('#stuNim').text(student.nim);
  $('#stuName').text(student.name);
  $('#stuValue').text(student.value);
  $('#stuType').text(student.type);

  var modal = new bootstrap.Modal(document.getElementById('modalStudent'));
  modal.show();
});

/* ========== Export CSV (from table tblCplStats) ========== */
    function tableToCSV(filename = 'cpl_stats.csv') {
      const rows = [];
      $('#tblCplStats thead tr').each(function() {
        const cols = $(this).find('th').map((i, th) => $(th).text().trim()).get();
        rows.push(cols.join(','));
      });
      $('#tblCplStats tbody tr').each(function() {
        const cols = $(this).find('td').map((i, td) => {
      // remove inner tags (like span)
      return $(td).text().trim().replace(/,/g, ''); // crude comma remove
    }).get();
        rows.push(cols.join(','));
      });

      const csvString = rows.join('\n');
      const blob = new Blob([csvString], { type: 'text/csv' });
      const link = document.createElement('a');
      link.href = URL.createObjectURL(blob);
      link.download = filename;
      document.body.appendChild(link);
      link.click();
      link.remove();
    }
    $('#btnExportCsv').on('click', function(){ tableToCSV(); });

/* ========== Filter modal: apply dummy filter ========== */
    $('#formFilter').on('submit', function(e){
      e.preventDefault();
  // read values (dummy)
      const set = $('#filterSet').val();
      const angkatan = $('#filterAngkatan').val();
      const peminatan = $('#filterPeminatan').val();

  // just display in header row, or apply to chart/table if dynamic back-end
      alert('Filter diterapkan:\\nSet: ' + set + '\\nAngkatan: ' + angkatan + '\\nPeminatan: ' + peminatan);
      $('#modalFilter').modal('hide');
    });

/* ========== Utility: openAllStudentsPreview (dummy) ========== */
    function openAllStudentsPreview(){
      var modal = new bootstrap.Modal(document.getElementById('modalPreviewAll'));
      modal.show();
    }

/* ========== small helper for demo: applyDummyFilter ========== */
    function applyDummyFilter(){
      alert('Filter dummy diterapkan (preview).');
    }

/* ========== (Optional) Prepare CSV export for other tables if needed ========== */

  </script>

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
            scales: {
                x: { ticks: { maxRotation: 90, minRotation: 45 } },
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

generateBarChart("chartMK", mkLabels, mkAverages, "Rata-rata MK", {
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

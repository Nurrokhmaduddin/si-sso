<?php $page = 'monev_individu'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev CPL Individu
        <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modalBantuan" title="Bantuan">
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
              <table class="table table-sm table-hover table-bordered table-striped deta">
                <tbody>
                  <tr>
                    <td width="30%"><b> Kurikulum</b></td>
                    <td>2023</td>
                  </tr>
                  <tr>
                    <td width="30%"><b> Set Pemetaan:</b></td>
                    <td>Peta v1.0</td>
                  </tr>
                  <tr>
                    <td width="30%"><b> Mahasiswa</b></td>
                    <td>VEGA AYU CENTYA (20521098)</td>
                  </tr>
                  <tr>
                    <td width="30%"><b> Angkatan</b></td>
                    <td>2024</td>
                  </tr>
                  <tr>
                    <td width="30%"><b> Status</b></td>
                    <td>Aktif</td>
                  </tr>

                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <div class="card-tools ml-auto">
                <button type="button" class="btn btn-outline-secondary btn-sm" onclick="window.location.href='monev-rekap-individual-.php'">
                  <i class="fas fa-reply mr-1"></i> Kembali
                </button>
                <button class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#modalFilter">
                  <i class="fas fa-search mr-1"></i> Pencarian
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download mr-1"></i> Export
                </button>   
              </div>
            </div>
          </div>

        
        
  <!-- ========== CARD 3: KPI row ========== --> 
<!--   <style>
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
        <div class="small">Jumlah CPL</div>
        <div class="big" id="kpiAvg">5 dari 10</div>
        <div class="small">capai ketuntasan</div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="kpi bg-primary">
        <div class="small">Rata-rata CPL</div>
        <div class="big" id="kpiAvg">75.65</div>
        <div class="small">dari 10 CPL</div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="kpi " style="background:#20c997;">
        <div class="small">Rata-rata IK</div>
        <div class="big" id="kpiGap">85 </div>
        <div class="small">dari 24 IK</div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="kpi" style="background:#ff7f0e;">
        <div class="small">Rata-rata CPMK</div>
        <div class="big" id="kpiReached">78</div>
        <div class="small">dari 258</div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="kpi bg-danger">
        <div class="small">Rata-rata Nilai Akhir MK</div>
        <div class="big" id="kpiRisk">78</div>
        <div class="small">dari 78 MK</div>
      </div>
    </div>
  </div> -->


  <!-- TAB NAV  -->
  <ul class="nav nav-tabs">   
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail.php'"><a class="nav-link ">Grafik</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail2.php'"><a class="nav-link ">Tabel</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail4.php'"><a class="nav-link ">Riwayat CPL</a></li>
    <!-- <li class="nav-item" onclick="window.location='monev-rekap-individual-detail5.php'"><a class="nav-link ">Riwayat IK</a></li> -->
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail3.php'"><a class="nav-link ">Riwayat MK</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail6.php'"><a class="nav-link active"> KHS</a></li>
    <!-- <li class="nav-item" onclick="window.location='monev-rekap-individual-detail7.php'"><a class="nav-link ">IPK</a></li> -->
  </ul>





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
<div class="card d-none p-3">
  <div class="row">

    <!-- KIRI: Radar Chart -->
    <div class="col-lg-8">
      <div class="chart-box radar-box">
        <canvas id="radarCPL"></canvas>
      </div>

      <!-- Tombol -->
      <div class="d-flex gap-2 mt-2">
        <button class="btn btn-outline-info btn-sm flex-fill" data-toggle="collapse" data-target="#daftarIKCPL11">
          Rangking Performa
        </button>
        <button class="btn btn-outline-info btn-sm flex-fill" data-toggle="collapse" data-target="#daftarIKCPL13">
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
          <button class="btn btn-outline-info btn-sm flex-fill" data-toggle="collapse" data-target="#daftarIKCPL21">Rangking</button>
          <button class="btn btn-outline-info btn-sm flex-fill" data-toggle="collapse" data-target="#daftarIKCPL23">Daftar IK</button>
          <button class="btn btn-outline-danger btn-sm flex-fill" onclick="openAllRisikoPreview()">Risiko</button>
        </div>
      </div>


      <!-- BAR CHART 2 -->
      <div class="d-flex flex-column flex-grow-1">
        <div class="flex-grow-1 mb-2">
          <canvas id="chartCPMK"></canvas>
        </div>

        <!-- Tombol -->
        <div class="d-flex gap-2 mt-2">
          <button class="btn btn-outline-info btn-sm flex-fill" data-toggle="collapse" data-target="#daftarIKCPL31">Rangking</button>
          <button class="btn btn-outline-info btn-sm flex-fill" data-toggle="collapse" data-target="#daftarIKCPL33">Daftar CPMK</button>
          <button class="btn btn-outline-danger btn-sm flex-fill" onclick="openAllRisikoPreview()">Risiko</button>
        </div>
      </div>

    </div>
  </div>
</div>



        <!-- ========== CARD : Chart MK ========== -->
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0"><i class="fas fa-chart-bar mr-2"></i> MK - Rata-rata Capaian (Biru)</h5>
            <div class="card-tools">
              <small class="text-muted">Angkatan Terpilih</small>
            </div>
          </div>
          <div class="card-body chart-container">
            <canvas id="chartMK" width="100%" height="22"></canvas>
            <div class="row text-center mt-3">
              <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-toggle="collapse" data-target="#daftarIKCPL41">
                  Rangking Performa
                </button>
              </div>
             
              <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-toggle="collapse" data-target="#daftarIKCPL43">
                  Daftar MK
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-danger btn-sm w-100" data-toggle="collapse" onclick="openAllRisikoPreview()">
                  Performa Risiko
                </button>
              </div>
              
            </div>
          </div>      
        </div>
        <!-- Rangking Performa -->
        <div class="row collapse" id="daftarIKCPL41" >
          
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
                        <th class="text-center" style="width: 140px"> Nilai Akhir</th>
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
                        <th class="text-center" style="width: 140px"> Nilai Akhir</th>
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
        </div>
        <!-- daftar MK -->
        <div class="card " id="daftarIKCPL43" >
          <div class="card-header d-flex align-items-center">
            <h5 class="card-title mb-0"><i class="fas fa-table mr-2"></i> Tabel Pencapaian</h5>
            <div class="card-tools ml-auto">
              <!-- <small class="text-muted">Klik angka Min/Max untuk melihat 1 mahasiswa (NIM / Nama / Nilai)</small> -->
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="tblCplStats" class="table table-hover table-bordered table-sm">
                <thead class="table-light">
                  <tr>
                    <th style="width: 40px">#</th>
                    <th>Mata Kuliah</th>
                    <th class="text-center">Nilai (Angka)</th>
                    <th class="text-center">Nilai (Huruf)</th>
                    <th class="text-center">Status</th>
                  </tr>
                </thead>

                <tbody>

                  <!-- Tahap Formatif -->
                  <tr><td colspan="5" class="text-center fw-bold table-secondary">Tahap Formatif / Semester Tempuh 1</td></tr>

                  <tr>
                    <td>1</td>
                    <td>SKS982: Pemahaman Dasar Polimer</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#modalStudentMK">72.14</button>
                    </td>
                    <td class="text-center">B</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>2</td>
                    <td>SKS917: Teori Komposit</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#modalStudentMK">71</button>
                    </td>
                    <td class="text-center">B+</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>3</td>
                    <td>UNI902: Aplikasi Polimer</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#modalStudentMK">76.80</button>
                    </td>
                    <td class="text-center">B+</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>4</td>
                    <td>UNI912: Proses Produksi</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#modalStudentMK">76.80</button>
                    </td>
                    <td class="text-center">B+</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>


                  <!-- Tahap Intermediate -->
                  <tr><td colspan="5" class="text-center fw-bold table-secondary">Tahap Intermediate / Semester Tempuh 5</td></tr>

                  <tr>
                    <td>5</td>
                    <td>SKS234: Analisis Material</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#modalStudentMK">75.30</button>
                    </td>
                    <td class="text-center">B+</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>6</td>
                    <td>SKS812: Keselamatan & Etika</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#modalStudentMK">76.80</button>
                    </td>
                    <td class="text-center">B+</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>7</td>
                    <td>SKS908: Desain Proses</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modalStudentMK">-</button>
                    </td>
                    <td class="text-center"></td>
                    <td class="text-center"><i>Menunggu Penilaian</i></td>
                  </tr>


                  <!-- Tahap Profesional -->
                  <tr><td colspan="5" class="text-center fw-bold table-secondary">Tahap Profesional / Semester Tempuh 7</td></tr>

                  <tr>
                    <td>8</td>
                    <td>SKS111: Metode Eksperimental</td>
                    <td class="text-center">
                    </td>
                    <td class="text-center"></td>
                    <td class="text-center"><i>Belum Diambil</i></td>
                  </tr>

                  <tr>
                    <td>9</td>
                    <td>SKS113: Statistik & Analisis Data</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#modalStudentMK">71.50</button>
                    </td>
                    <td class="text-center">B</td>
                    <td class="text-center">🟨 Cukup</td>
                  </tr>

                  <tr>
                    <td>10</td>
                    <td>SKS932: Komunikasi Teknis</td>
                    <td class="text-center">
                      <button class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#modalStudentMK">59.00</button>
                    </td>
                    <td class="text-center">C</td>
                    <td class="text-center">🟥 Kurang</td>
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
        <h5 class="modal-title" id="modalFilterLabel"> Pencarian Mahasiswa</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <form action="" method="GET">

        <div class="modal-body">

          <!-- Informasi -->
          <div class="alert alert-info mb-3" role="alert" style="font-size: 0.9rem;">
            <b>Informasi:</b> Masukkan NIM mahasiswa yang ingin dicari. 
            Anda dapat mengisi sebagian NIM untuk pencarian lebih fleksibel.
          </div>

          <div class="mb-3">
            <label for="nim" class="form-label">NIM Mahasiswa</label>
            <input 
              type="text" 
              name="nim" 
              id="nim" 
              class="form-control" 
              placeholder="Contoh: 20231001"
              value="<?= isset($_GET['nim']) ? htmlspecialchars($_GET['nim']) : '' ?>"
            >
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Batal
          </button>
          <button type="submit" class="btn btn-info">
             Cari 
          </button>
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
          Ringkasan capaian CPL per Individu Mahasiswa, perkembangan, peringatan dini (EWS), disajikan dalam bentuk grafik dan tabel (Mockup data statis)
        </p>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
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
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
          <h5 class="modal-title" id="modalStudentLabel"><i class="fas fa-user-graduate mr-2"></i> Detil Mahasiswa</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
      $('#modalFilter').modal('hide');
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

<!-- Modal: Detail MK Student -->
<div class="modal fade" id="modalStudentMK" tabindex="-1" aria-labelledby="modalStudentMKLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- HEADER -->
      <div class="modal-header bg-info text-white py-2">
        <h6 class="modal-title mb-0" id="modalStudentMKLabel">
          <i class="fas fa-book-open mr-2"></i> Detail MK Student
        </h6>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <!-- BODY -->
      <div class="modal-body small pb-1">

        <!-- INFORMASI UMUM -->
        <div class="mb-3">
          <dl class="row mb-0">
            <dt class="col-4">Set Pemetaan</dt>
            <dd class="col-8" id="mkSetPemetaan">SKO 24</dd>

            <dt class="col-4">NIM</dt>
            <dd class="col-8" id="mkNim">129873691</dd>

            <dt class="col-4">Mata Kuliah</dt>
            <dd class="col-8" id="mkNamaMk">SKS119 Pengantar Pancasila</dd>
          </dl>
        </div>

        <!-- INFORMASI DETAIL -->
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-sm mb-0">
            <thead class="text-center bg-light">
              <tr class="text-uppercase small">
                <th>Periode</th>
                <th>Angka</th>
                <th>Huruf</th>
                <th>CPMK 1</th>
                <th>Perb. 1</th>
                <th>CPMK 2</th>
                <th>Perb. 2</th>
                <th>CPMK 3</th>
                <th>Perb. 3</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>2021/2022 Genap</td>
                <td>71</td>
                <td>B+</td>
                <td>76</td>
                <td></td>
                <td>78</td>
                <td></td>
                <td>67</td>
                <td></td>
              </tr>
              <tr>
                <td>2020/2021 Genap</td>
                <td>56</td>
                <td>D+</td>
                <td>58</td>
                <td>69</td>
                <td>59</td>
                <td>69</td>
                <td>70</td>
                <td>70</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- FOOTER -->
      <div class="modal-footer py-2">
        <button class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>
<?php include('5script.php'); ?>
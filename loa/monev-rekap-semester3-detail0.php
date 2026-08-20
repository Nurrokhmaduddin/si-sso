<?php $page = 'monev_semester3'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev Semester 
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
          <div class="card card-outline card-info">
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

              </div>
            </div>
            <div class="card-footer">
              <div class="card-tools ml-auto">
                <button class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#modalFilter">
                  <i class="fas fa-filter mr-1"></i> Filter
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download mr-1"></i> Export
                </button>    
                <a class="btn btn-sm btn-outline-primary" href="formulir-evaluasi.php" target="_blank"><i class="fas fa-clipboard-list mr-1"> </i>Catat Temuan </a>             
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
                <div class="small">Rerata CPL Tertinggi</div>
                <div class="big" id="kpiGap">CPL 1 (87.2)</div>
                <div class="small">dari 254 kelas</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="kpi" style="background:#ff7f0e;">
                <div class="small">Jumlah IK Risiko</div>
                <div class="big" id="kpiReached">5 IK</div>
                <div class="small">konsisten rerata < 65</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="kpi bg-danger">
                <div class="small">Rerata CPL Terendah</div>
                <div class="big" id="kpiRisk">CPL 6 (56.2)</div>
                <div class="small">dari 254 kelas</div>
              </div>
            </div>
          </div>

  <!-- TAB NAV  -->
  <ul class="nav nav-tabs">   
    <li class="nav-item" onclick="window.location='monev-rekap-semester3-.php'"><a class="nav-link ">Ringkasan</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-semester3-detail0.php'"><a class="nav-link active">IK</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-semester3-detail1.php'"><a class="nav-link ">CPMK</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-semester3-detail2.php'"><a class="nav-link ">Mata Kuliah</a></li>
  </ul>

<!-- ========== CARD 4: Chart CPL 1 ========== -->    
<div class="card">
  <!-- CARD HEADER -->
  <div class="card-header">
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#tabelCPL1">
        <i class="fas fa-expand"></i>
      </button>
      kode CPL pertama (perbandingan %mahasiswa tuntas IK, periode A vs B)
    </h5>
  </div>
  <!-- CARD BODY -->
  <div class="card-body " id="tabelCPL1">
    <!-- Chart Container -->
    <div class="chart-container">
      <canvas id="chartCPL1" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Indikator Kompetensi (IK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr>
            <th style="width: 80px;">Kode IK</th>
            <th>Deskripsi IK</th>
            <th>Periode A</th>
            <th>Periode B</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>IK 1.1</td>
            <td>Mahasiswa mampu menyampaikan informasi secara lisan secara runtut, jelas, dan mudah dipahami.</td>
            <td><a href="progres-cpl-semester3.php">78</a></td>
            <td><a href="progres-cpl-semester3.php">80</a></td>
          </tr>
          <tr>
            <td>IK 1.2</td>
            <td>Mahasiswa mampu menulis laporan/tulisan akademik sesuai kaidah bahasa dan struktur penulisan yang baik.</td>
            <td><a href="progres-cpl-semester3.php">68</a></td>
            <td><a href="progres-cpl-semester3.php">70</a></td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>CPL 1</td>
            <td>Mahasiswa mampu menyampaikan informasi dan menulis laporan sesuai kaidah akademik.</td>
            <td><a href="progres-cpl-semester3.php">73</a></td>
            <td><a href="progres-cpl-semester3.php">75</a></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<!-- ========== CARD 4: Chart CPL 2 ========== -->
<div class="card">
  <!-- CARD HEADER -->
  <div class="card-header">
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#tabelCPL2">
        <i class="fas fa-expand"></i>
      </button>
      kode CPL kedua (perbandingan %mahasiswa tuntas IK, periode A vs B)
    </h5>
  </div>
  <!-- CARD BODY -->
  <div class="card-body collapse" id="tabelCPL2">
    <!-- Chart Container -->
    <div class="chart-container">
      <canvas id="chartCPL2" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Indikator Kompetensi (IK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr>
            <th style="width: 80px;">Kode IK</th>
            <th>Deskripsi IK</th>
            <th>Periode A</th>
            <th>Periode B</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>IK 2.1</td>
            <td>Mahasiswa mampu menganalisis masalah secara logis dan sistematis.</td>
            <td><a href="progres-cpl-semester3.php">72</a></td>
            <td><a href="progres-cpl-semester3.php">75</a></td>
          </tr>
          <tr>
            <td>IK 2.2</td>
            <td>Mahasiswa mampu merancang solusi kreatif berdasarkan analisis data.</td>
            <td><a href="progres-cpl-semester3.php">68</a></td>
            <td><a href="progres-cpl-semester3.php">70</a></td>
          </tr>
          <tr>
            <td>IK 2.3</td>
            <td>Mahasiswa mampu menyajikan hasil analisis secara jelas dan komunikatif.</td>
            <td><a href="progres-cpl-semester3.php">75</a></td>
            <td><a href="progres-cpl-semester3.php">77</a></td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>CPL 2</td>
            <td>Mahasiswa mampu menganalisis dan menyajikan solusi kreatif secara logis.</td>
            <td><a href="progres-cpl-semester3.php">72</a></td>
            <td><a href="progres-cpl-semester3.php">74</a></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
<!-- ========== CARD 4: Chart CPL 3 ========== -->
<div class="card">
  <!-- CARD HEADER -->
  <div class="card-header">
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#tabelCPL3">
        <i class="fas fa-expand"></i>
      </button>
      kode CPL ketiga (perbandingan %mahasiswa tuntas IK, periode A vs B)
    </h5>
  </div>
  <!-- CARD BODY -->
  <div class="card-body collapse" id="tabelCPL3">
    <div class="chart-container">
      <canvas id="chartCPL3" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Indikator Kompetensi (IK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr>
            <th style="width: 80px;">Kode IK</th>
            <th>Deskripsi IK</th>
            <th>Periode A</th>
            <th>Periode B</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>IK 3.1</td>
            <td>Mahasiswa mampu berkomunikasi secara profesional dalam konteks akademik.</td>
            <td><a href="progres-cpl-semester3.php">65</a></td>
            <td><a href="progres-cpl-semester3.php">68</a></td>
          </tr>
          <tr>
            <td>IK 3.2</td>
            <td>Mahasiswa mampu menggunakan etika komunikasi digital dalam tugas akademik.</td>
            <td><a href="progres-cpl-semester3.php">70</a></td>
            <td><a href="progres-cpl-semester3.php">72</a></td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>CPL 3</td>
            <td>Mahasiswa mampu berkomunikasi profesional dan sesuai etika digital.</td>
            <td><a href="progres-cpl-semester3.php">68</a></td>
            <td><a href="progres-cpl-semester3.php">70</a></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
<!-- ========== CARD 4: Chart CPL 4 ========== -->
<div class="card">
  <!-- CARD HEADER -->
  <div class="card-header">
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#tabelCPL4">
        <i class="fas fa-expand"></i>
      </button>
      kode CPL keempat (perbandingan %mahasiswa tuntas IK, periode A vs B)
    </h5>
  </div>
  <!-- CARD BODY -->
  <div class="card-body collapse" id="tabelCPL4">
    <div class="chart-container">
      <canvas id="chartCPL4" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Indikator Kompetensi (IK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr>
            <th style="width: 80px;">Kode IK</th>
            <th>Deskripsi IK</th>
            <th>Periode A</th>
            <th>Periode B</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>IK 4.1</td>
            <td>Mahasiswa mampu menerapkan konsep dasar dalam penyelesaian masalah.</td>
            <td><a href="progres-cpl-semester3.php">78</a></td>
            <td><a href="progres-cpl-semester3.php">80</a></td>
          </tr>
          <tr>
            <td>IK 4.2</td>
            <td>Mahasiswa mampu mengevaluasi hasil pekerjaan berdasarkan kriteria yang ditetapkan.</td>
            <td><a href="progres-cpl-semester3.php">74</a></td>
            <td><a href="progres-cpl-semester3.php">77</a></td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>CPL 4</td>
            <td>Mahasiswa mampu menerapkan dan mengevaluasi konsep dasar dalam penyelesaian masalah.</td>
            <td><a href="progres-cpl-semester3.php">76</a></td>
            <td><a href="progres-cpl-semester3.php">78</a></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
<!-- ========== CARD 4: Chart CPL 5 ========== -->
<div class="card">
  <!-- CARD HEADER -->
  <div class="card-header">
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#tabelCPL5">
        <i class="fas fa-expand"></i>
      </button>
      kode CPL kelima (perbandingan %mahasiswa tuntas IK, periode A vs B)
    </h5>
  </div>
  <!-- CARD BODY -->
  <div class="card-body collapse" id="tabelCPL5">
    <div class="chart-container">
      <canvas id="chartCPL5" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Indikator Kompetensi (IK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr>
            <th style="width: 80px;">Kode IK</th>
            <th>Deskripsi IK</th>
            <th>Periode A</th>
            <th>Periode B</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>IK 5.1</td>
            <td>Mahasiswa mampu merancang solusi sederhana untuk permasalahan teknis.</td>
            <td><a href="progres-cpl-semester3.php">72</a></td>
            <td><a href="progres-cpl-semester3.php">75</a></td>
          </tr>
          <tr>
            <td>IK 5.2</td>
            <td>Mahasiswa mampu menilai efektivitas solusi yang telah diterapkan.</td>
            <td><a href="progres-cpl-semester3.php">70</a></td>
            <td><a href="progres-cpl-semester3.php">73</a></td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>CPL 5</td>
            <td>Mahasiswa mampu merancang dan menilai solusi teknis sederhana.</td>
            <td><a href="progres-cpl-semester3.php">71</a></td>
            <td><a href="progres-cpl-semester3.php">74</a></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
<!-- ========== CARD 4: Chart CPL 6 ========== -->
<div class="card">
  <!-- CARD HEADER -->
  <div class="card-header">
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#tabelCPL6">
        <i class="fas fa-expand"></i>
      </button>
      kode CPL keenam (perbandingan %mahasiswa tuntas IK, periode A vs B)
    </h5>
  </div>
  <!-- CARD BODY -->
  <div class="card-body collapse" id="tabelCPL6">
    <div class="chart-container">
      <canvas id="chartCPL6" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Indikator Kompetensi (IK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr>
            <th style="width: 80px;">Kode IK</th>
            <th>Deskripsi IK</th>
            <th>Periode A</th>
            <th>Periode B</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>IK 6.1</td>
            <td>Mahasiswa mampu menyelesaikan tugas secara mandiri dengan tepat waktu.</td>
            <td><a href="progres-cpl-semester3.php">80</a></td>
            <td><a href="progres-cpl-semester3.php">82</a></td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>CPL 6</td>
            <td>Mahasiswa mampu menyelesaikan tugas mandiri dengan tepat waktu.</td>
            <td><a href="progres-cpl-semester3.php">80</a></td>
            <td><a href="progres-cpl-semester3.php">82</a></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
<!-- ========== CARD 4: Chart CPL 9 ========== -->
<div class="card">
  <!-- CARD HEADER -->
  <div class="card-header">
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#tabelCPL9">
        <i class="fas fa-expand"></i>
      </button>
      kode CPL kesembilan (perbandingan %mahasiswa tuntas IK, periode A vs B)
    </h5>
  </div>
  <!-- CARD BODY -->
  <div class="card-body collapse" id="tabelCPL9">
    <div class="chart-container">
      <canvas id="chartCPL9" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Indikator Kompetensi (IK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr>
            <th style="width: 80px;">Kode IK</th>
            <th>Deskripsi IK</th>
            <th>Periode A</th>
            <th>Periode B</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>IK 9.1</td>
            <td>Mahasiswa mampu mengidentifikasi risiko dalam proyek sederhana.</td>
            <td><a href="progres-cpl-semester3.php">65</a></td>
            <td><a href="progres-cpl-semester3.php">68</a></td>
          </tr>
          <tr>
            <td>IK 9.2</td>
            <td>Mahasiswa mampu menyusun langkah mitigasi risiko yang sesuai.</td>
            <td><a href="progres-cpl-semester3.php">60</a></td>
            <td><a href="progres-cpl-semester3.php">63</a></td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>CPL 9</td>
            <td>Mahasiswa mampu mengidentifikasi dan menangani risiko proyek sederhana.</td>
            <td><a href="progres-cpl-semester3.php">63</a></td>
            <td><a href="progres-cpl-semester3.php">66</a></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
<!-- ========== CARD 4: Chart CPL 10 ========== -->
<div class="card">
  <!-- CARD HEADER -->
  <div class="card-header">
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#tabelCPL10">
        <i class="fas fa-expand"></i>
      </button>
      kode CPL kesepuluh (perbandingan %mahasiswa tuntas IK, periode A vs B)
    </h5>
  </div>
  <!-- CARD BODY -->
  <div class="card-body collapse" id="tabelCPL10">
    <div class="chart-container">
      <canvas id="chartCPL10" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Indikator Kompetensi (IK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr>
            <th style="width: 80px;">Kode IK</th>
            <th>Deskripsi IK</th>
            <th>Periode A</th>
            <th>Periode B</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>IK 10.1</td>
            <td>Mahasiswa mampu mengaplikasikan konsep desain dalam proyek sederhana.</td>
            <td><a href="progres-cpl-semester3.php">75</a></td>
            <td><a href="progres-cpl-semester3.php">77</a></td>
          </tr>
          <tr>
            <td>IK 10.2</td>
            <td>Mahasiswa mampu mengevaluasi hasil desain secara kritis.</td>
            <td><a href="progres-cpl-semester3.php">70</a></td>
            <td><a href="progres-cpl-semester3.php">72</a></td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>CPL 10</td>
            <td>Mahasiswa mampu menerapkan dan mengevaluasi konsep desain.</td>
            <td><a href="progres-cpl-semester3.php">73</a></td>
            <td><a href="progres-cpl-semester3.php">75</a></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
<!-- ========== CARD 4: Chart CPL 11 ========== -->
<div class="card">
  <!-- CARD HEADER -->
  <div class="card-header">
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#tabelCPL11">
        <i class="fas fa-expand"></i>
      </button>
      kode CPL kesebelas (perbandingan %mahasiswa tuntas IK, periode A vs B)
    </h5>
  </div>
  <!-- CARD BODY -->
  <div class="card-body collapse" id="tabelCPL11">
    <div class="chart-container">
      <canvas id="chartCPL11" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Indikator Kompetensi (IK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr>
            <th style="width: 80px;">Kode IK</th>
            <th>Deskripsi IK</th>
            <th>Periode A</th>
            <th>Periode B</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>IK 11.1</td>
            <td>Mahasiswa mampu melakukan analisis data kuantitatif sederhana.</td>
            <td><a href="progres-cpl-semester3.php">72</a></td>
            <td><a href="progres-cpl-semester3.php">74</a></td>
          </tr>
          <tr>
            <td>IK 11.2</td>
            <td>Mahasiswa mampu menyusun laporan analisis data dengan jelas dan sistematis.</td>
            <td><a href="progres-cpl-semester3.php">70</a></td>
            <td><a href="progres-cpl-semester3.php">72</a></td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>CPL 11</td>
            <td>Mahasiswa mampu menganalisis dan melaporkan data kuantitatif sederhana.</td>
            <td><a href="progres-cpl-semester3.php">71</a></td>
            <td><a href="progres-cpl-semester3.php">73</a></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
<!-- ========== CARD 4: Chart CPL 12 ========== -->
<div class="card">
  <!-- CARD HEADER -->
  <div class="card-header">
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#tabelCPL12">
        <i class="fas fa-expand"></i>
      </button>
      kode CPL kedua belas (perbandingan %mahasiswa tuntas IK, periode A vs B)
    </h5>
  </div>
  <!-- CARD BODY -->
  <div class="card-body collapse" id="tabelCPL12">
    <div class="chart-container">
      <canvas id="chartCPL12" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Indikator Kompetensi (IK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr>
            <th style="width: 80px;">Kode IK</th>
            <th>Deskripsi IK</th>
            <th>Periode A</th>
            <th>Periode B</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>IK 12.1</td>
            <td>Mahasiswa mampu melakukan presentasi ilmiah dengan tepat.</td>
            <td><a href="progres-cpl-semester3.php">78</a></td>
            <td><a href="progres-cpl-semester3.php">80</a></td>
          </tr>
          <tr>
            <td>IK 12.2</td>
            <td>Mahasiswa mampu menjawab pertanyaan dan berdiskusi terkait topik presentasi.</td>
            <td><a href="progres-cpl-semester3.php">75</a></td>
            <td><a href="progres-cpl-semester3.php">77</a></td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>CPL 12</td>
            <td>Mahasiswa mampu menyampaikan dan mendiskusikan presentasi ilmiah dengan baik.</td>
            <td><a href="progres-cpl-semester3.php">77</a></td>
            <td><a href="progres-cpl-semester3.php">78</a></td>
          </tr>
        </tfoot>
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



<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalTambahDataLabel">Tambah Data</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="modal-body">

          <!-- Informasi -->
          <div class="alert alert-warning mb-3 py-2" role="alert" style="font-size: 0.9rem;">
            <i class="fas fa-info-circle mr-1"></i>
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
            <select name="angkatan" id="angkatan" class="custom-select">
              <option value="">-- Pilih Angkatan --</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Peminatan</label>
            <select name="angkatan" id="angkatan" class="custom-select">
              <option value="">-- Pilih Peminatan --</option>
              <option value="2025">A</option>
              <option value="2024">B</option>
              <option value="2023">C</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
            <select class="custom-select" id="status" name="status" required>
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
        <button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">   
        <div class="alert alert-warning mb-3 py-2" role="alert" style="font-size: 0.9rem;">
          <i class="fas fa-exclamation-triangle mr-1"></i>
          <strong>Penting:</strong> Pastikan file yang akan diimpor menggunakan <strong>template resmi</strong> yang sudah disediakan. Menggunakan file lain atau format berbeda dapat menyebabkan <strong>kesalahan impor</strong>.
        </div>     

        <label class="form-label">Pilih File:</label>
        <input type="file" class="form-control mb-3" accept=".xlsx,.xls">

        <a href="template-impor-mahasiswa.xls" class="btn btn-sm btn-outline-success w-100">Download Template</a>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>
          Halaman ini menampilkan rekapitulasi satu set pemetaan OBE yang telah dirancang, menyoroti kelengkapan pemetaan (mapping completeness) untuk memeriksa apakah CPL, IK, CPMK, dan MK telah terhubung secara lengkap, sekaligus keserataan beban pemetaan (mapping balance) untuk menilai distribusi dukungan dan mengidentifikasi gap antara elemen terkuat dan terlemah di tiap level.
        </p>      
        <p>
          1️⃣ Monitoring Operasional Semester

Perlu sampai CPL atau cukup CPMK?

Untuk monitoring operasional semester:

✔ Fokus utama cukup sampai CPMK.

Kenapa?

Karena semester itu level implementasi:

Dosen mengajar

Kelas berjalan

Instrumen dipakai

Penilaian dilakukan

Unit kendali dosen adalah:

Aktivitas pembelajaran

Penilaian CPMK

Hasil kelas

CPL adalah agregasi lintas MK dan lintas semester.
Jika dipaksakan tampil penuh di semester view, akan muncul:

CPL terlihat “kosong”

CPL tampak rendah

Interpretasi keliru karena belum semua MK kontribusi

Rekomendasi Desain
📘 Semester View (Operasional)

Tampilkan:

Capaian CPMK per kelas

Distribusi nilai per kelas

Evaluasi kelas

Konsistensi antar kelas

Evaluasi MK (agregasi semua kelas dalam semester itu)

CPL boleh ditampilkan, tetapi:

Sebagai indikasi parsial

Diberi label “kontribusi sementara”

2️⃣ Evaluasi MK Cocok di Semester atau Tahun Akademik?

Jawabannya:

✔ Evaluasi MK operasional → Semester view
✔ Evaluasi MK struktural → Tahun akademik view

Bedanya:

Semester:

Apakah kelas berjalan baik?

Apakah ada perbedaan antar dosen?

Tahun akademik:

Apakah MK konsisten sepanjang tahun?

Apakah CPMK stabil antar semester?

Apakah ada masalah sistemik?

Jadi evaluasi MK bisa muncul di dua view, tapi konteksnya berbeda.
        </p>  
        <p>
          Buat Apa Membaca Konsistensi Antar Dosen (Antar Kelas)?

Ini bukan untuk “mengadili dosen”.
Ini untuk menjaga keadilan dan validitas sistem.

Bayangkan:

MK Algoritma – CPMK 1

Kelas A → 88% tercapai

Kelas B → 64% tercapai

Pertanyaannya:

Apakah kualitas pengajaran beda jauh?

Apakah instrumen berbeda?

Apakah standar koreksi tidak sama?

Kalau gap terlalu besar, berarti:

👉 Sistem belum terkendali
👉 Assessment belum terkalibrasi

Dalam OBE, outcome harus konsisten terlepas dari siapa dosennya.

Kalau tidak, maka:

CPL tidak mencerminkan sistem, tapi mencerminkan individu.

Itu bahaya untuk mutu jangka panjang.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<script>
const ctxCPL1 = document.getElementById("chartCPL1");

new Chart(ctxCPL1, {
  type: 'bar',
  data: {
    labels: ['IK 1.1','IK 1.2','CPL 1'],
    datasets: [
      {
        label: 'Target Treshold (> 80%)',
        type: 'line',
        yMin: 80,
        yMax: 80,
        backgroundColor: 'rgba(255,255,255,0.7)',
        borderColor: 'red',
        borderWidth: 2,
        borderDash: [6, 6],
      },
      {
        label: 'Previous Periode (%)',
        data: [78,68,73],
        backgroundColor: '#6c757d',
        borderColor: '#6c757d',
        borderWidth: 1
      },
      {
        label: 'Selected Periode (%)',
        data: [80,70,75],
        backgroundColor: '#007bff',
        borderColor: '#007bff',
        borderWidth: 1
      }
    ]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { position: 'top' },
      annotation: {
        annotations: {
          targetLine: {
            type: 'line',
            yMin: 80,
            yMax: 80,
            borderColor: 'red',
            borderWidth: 2,
            borderDash: [6, 6],
            label: {
              display: true,
              content: 'Target % Mahasiswa = 80',
              position: 'start',
              color: 'red',
              backgroundColor: 'rgba(255,255,255,0.7)',
              padding: 4
            }
          }
        }
      }
    },
    scales: {
      y: {
        beginAtZero: true,
        max: 100
      }
    }
  }
});
</script>
<script>
const ctxCPL2 = document.getElementById("chartCPL2");

new Chart(ctxCPL2, {
  type: 'bar',
  data: {
    labels: ['IK 2.1','IK 2.2','IK 2.3','CPL 2'],
    datasets: [
      {
        label: 'Target Treshold (> 80%)',
        type: 'line',
        yMin: 80,
        yMax: 80,
        backgroundColor: 'rgba(255,255,255,0.7)',
        borderColor: 'red',
        borderWidth: 2,
        borderDash: [6, 6],
      },
      {
        label: 'Previous Periode (%)',
        data: [72,68,75,72],
        backgroundColor: '#6c757d',
        borderColor: '#6c757d',
        borderWidth: 1
      },
      {
        label: 'Selected Periode (%)',
        data: [75,70,77,74],
        backgroundColor: '#007bff',
        borderColor: '#007bff',
        borderWidth: 1
      }
    ]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { position: 'top' },
      annotation: {
        annotations: {
          targetLine: {
            type: 'line',
            yMin: 80,
            yMax: 80,
            borderColor: 'red',
            borderWidth: 2,
            borderDash: [6, 6],
            label: {
              display: true,
              content: 'Target % Mahasiswa = 80',
              position: 'start',
              color: 'red',
              backgroundColor: 'rgba(255,255,255,0.7)',
              padding: 4
            }
          }
        }
      }
    },
    scales: {
      y: {
        beginAtZero: true,
        max: 100
      }
    }
  }
});
</script>
<script>
const ctxCPL3 = document.getElementById("chartCPL3");

new Chart(ctxCPL3, {
  type: 'bar',
  data: {
    labels: ['IK 3.1','IK 3.2','CPL 3'],
    datasets: [
      {
        label: 'Target Treshold (> 80%)',
        type: 'line',
        yMin: 80,
        yMax: 80,
        backgroundColor: 'rgba(255,255,255,0.7)',
        borderColor: 'red',
        borderWidth: 2,
        borderDash: [6, 6],
      },
      {
        label: 'Previous Periode (%)',
        data: [65,70,68],
        backgroundColor: '#6c757d',
        borderColor: '#6c757d',
        borderWidth: 1
      },
      {
        label: 'Selected Periode (%)',
        data: [68,72,70],
        backgroundColor: '#007bff',
        borderColor: '#007bff',
        borderWidth: 1
      }
    ]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { position: 'top' },
      annotation: {
        annotations: {
          targetLine: {
            type: 'line',
            yMin: 80,
            yMax: 80,
            borderColor: 'red',
            borderWidth: 2,
            borderDash: [6, 6],
            label: {
              display: true,
              content: 'Target % Mahasiswa = 80',
              position: 'start',
              color: 'red',
              backgroundColor: 'rgba(255,255,255,0.7)',
              padding: 4
            }
          }
        }
      }
    },
    scales: {
      y: {
        beginAtZero: true,
        max: 100
      }
    }
  }
});
</script>
<script>
const ctxCPL4 = document.getElementById("chartCPL4");

new Chart(ctxCPL4, {
  type: 'bar',
  data: {
    labels: ['IK 4.1','IK 4.2','CPL 4'],
    datasets: [
      {
        label: 'Target Treshold (> 80%)',
        type: 'line',
        yMin: 80,
        yMax: 80,
        backgroundColor: 'rgba(255,255,255,0.7)',
        borderColor: 'red',
        borderWidth: 2,
        borderDash: [6, 6],
      },
      {
        label: 'Previous Periode (%)',
        data: [78,74,76],
        backgroundColor: '#6c757d',
        borderColor: '#6c757d',
        borderWidth: 1
      },
      {
        label: 'Selected Periode (%)',
        data: [80,77,78],
        backgroundColor: '#007bff',
        borderColor: '#007bff',
        borderWidth: 1
      }
    ]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { position: 'top' },
      annotation: {
        annotations: {
          targetLine: {
            type: 'line',
            yMin: 80,
            yMax: 80,
            borderColor: 'red',
            borderWidth: 2,
            borderDash: [6, 6],
            label: {
              display: true,
              content: 'Target % Mahasiswa = 80',
              position: 'start',
              color: 'red',
              backgroundColor: 'rgba(255,255,255,0.7)',
              padding: 4
            }
          }
        }
      }
    },
    scales: {
      y: {
        beginAtZero: true,
        max: 100
      }
    }
  }
});
</script>
<script>
const ctxCPL5 = document.getElementById("chartCPL5");

new Chart(ctxCPL5, {
  type: 'bar',
  data: {
    labels: ['IK 5.1','IK 5.2','CPL 5'],
    datasets: [
      {
        label: 'Target Treshold (> 80%)',
        type: 'line',
        yMin: 80,
        yMax: 80,
        backgroundColor: 'rgba(255,255,255,0.7)',
        borderColor: 'red',
        borderWidth: 2,
        borderDash: [6, 6],
      },
      {
        label: 'Previous Periode (%)',
        data: [72,70,71],
        backgroundColor: '#6c757d',
        borderColor: '#6c757d',
        borderWidth: 1
      },
      {
        label: 'Selected Periode (%)',
        data: [75,73,74],
        backgroundColor: '#007bff',
        borderColor: '#007bff',
        borderWidth: 1
      }
    ]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { position: 'top' },
      annotation: {
        annotations: {
          targetLine: {
            type: 'line',
            yMin: 80,
            yMax: 80,
            borderColor: 'red',
            borderWidth: 2,
            borderDash: [6, 6],
            label: {
              display: true,
              content: 'Target % Mahasiswa = 80',
              position: 'start',
              color: 'red',
              backgroundColor: 'rgba(255,255,255,0.7)',
              padding: 4
            }
          }
        }
      }
    },
    scales: {
      y: { beginAtZero: true, max: 100 }
    }
  }
});
</script>
<script>
const ctxCPL6 = document.getElementById("chartCPL6");

new Chart(ctxCPL6, {
  type: 'bar',
  data: {
    labels: ['IK 6.1','CPL 6'],
    datasets: [
      {
        label: 'Target Treshold (> 80%)',
        type: 'line',
        yMin: 80,
        yMax: 80,
        backgroundColor: 'rgba(255,255,255,0.7)',
        borderColor: 'red',
        borderWidth: 2,
        borderDash: [6, 6],
      },
      {
        label: 'Previous Periode (%)',
        data: [80,80],
        backgroundColor: '#6c757d',
        borderColor: '#6c757d',
        borderWidth: 1
      },
      {
        label: 'Selected Periode (%)',
        data: [82,82],
        backgroundColor: '#007bff',
        borderColor: '#007bff',
        borderWidth: 1
      }
    ]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { position: 'top' },
      annotation: {
        annotations: {
          targetLine: {
            type: 'line',
            yMin: 80,
            yMax: 80,
            borderColor: 'red',
            borderWidth: 2,
            borderDash: [6, 6],
            label: {
              display: true,
              content: 'Target % Mahasiswa = 80',
              position: 'start',
              color: 'red',
              backgroundColor: 'rgba(255,255,255,0.7)',
              padding: 4
            }
          }
        }
      }
    },
    scales: {
      y: { beginAtZero: true, max: 100 }
    }
  }
});
</script>
<script>
const ctxCPL9 = document.getElementById("chartCPL9");

new Chart(ctxCPL9, {
  type: 'bar',
  data: {
    labels: ['IK 9.1','IK 9.2','CPL 9'],
    datasets: [
      {
        label: 'Target Treshold (> 80%)',
        type: 'line',
        yMin: 80,
        yMax: 80,
        backgroundColor: 'rgba(255,255,255,0.7)',
        borderColor: 'red',
        borderWidth: 2,
        borderDash: [6, 6],
      },
      {
        label: 'Previous Periode (%)',
        data: [65,60,63],
        backgroundColor: '#6c757d',
        borderColor: '#6c757d',
        borderWidth: 1
      },
      {
        label: 'Selected Periode (%)',
        data: [68,63,66],
        backgroundColor: '#007bff',
        borderColor: '#007bff',
        borderWidth: 1
      }
    ]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { position: 'top' },
      annotation: {
        annotations: {
          targetLine: {
            type: 'line',
            yMin: 80,
            yMax: 80,
            borderColor: 'red',
            borderWidth: 2,
            borderDash: [6, 6],
            label: {
              display: true,
              content: 'Target % Mahasiswa = 80',
              position: 'start',
              color: 'red',
              backgroundColor: 'rgba(255,255,255,0.7)',
              padding: 4
            }
          }
        }
      }
    },
    scales: { y: { beginAtZero: true, max: 100 } }
  }
});
</script>
<script>
const ctxCPL10 = document.getElementById("chartCPL10");

new Chart(ctxCPL10, {
  type: 'bar',
  data: {
    labels: ['IK 10.1','IK 10.2','CPL 10'],
    datasets: [
      {
        label: 'Target Treshold (> 80%)',
        type: 'line',
        yMin: 80,
        yMax: 80,
        backgroundColor: 'rgba(255,255,255,0.7)',
        borderColor: 'red',
        borderWidth: 2,
        borderDash: [6, 6],
      },
      {
        label: 'Previous Periode (%)',
        data: [75,70,73],
        backgroundColor: '#6c757d',
        borderColor: '#6c757d',
        borderWidth: 1
      },
      {
        label: 'Selected Periode (%)',
        data: [77,72,75],
        backgroundColor: '#007bff',
        borderColor: '#007bff',
        borderWidth: 1
      }
    ]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { position: 'top' },
      annotation: {
        annotations: {
          targetLine: {
            type: 'line',
            yMin: 80,
            yMax: 80,
            borderColor: 'red',
            borderWidth: 2,
            borderDash: [6, 6],
            label: {
              display: true,
              content: 'Target % Mahasiswa = 80',
              position: 'start',
              color: 'red',
              backgroundColor: 'rgba(255,255,255,0.7)',
              padding: 4
            }
          }
        }
      }
    },
    scales: { y: { beginAtZero: true, max: 100 } }
  }
});
</script>
<script>
const ctxCPL11 = document.getElementById("chartCPL11");

new Chart(ctxCPL11, {
  type: 'bar',
  data: {
    labels: ['IK 11.1','IK 11.2','CPL 11'],
    datasets: [
      {
        label: 'Target Treshold (> 80%)',
        type: 'line',
        yMin: 80,
        yMax: 80,
        backgroundColor: 'rgba(255,255,255,0.7)',
        borderColor: 'red',
        borderWidth: 2,
        borderDash: [6, 6],
      },
      {
        label: 'Previous Periode (%)',
        data: [72,70,71],
        backgroundColor: '#6c757d',
        borderColor: '#6c757d',
        borderWidth: 1
      },
      {
        label: 'Selected Periode (%)',
        data: [74,72,73],
        backgroundColor: '#007bff',
        borderColor: '#007bff',
        borderWidth: 1
      }
    ]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { position: 'top' },
      annotation: {
        annotations: {
          targetLine: {
            type: 'line',
            yMin: 80,
            yMax: 80,
            borderColor: 'red',
            borderWidth: 2,
            borderDash: [6, 6],
            label: {
              display: true,
              content: 'Target % Mahasiswa = 80',
              position: 'start',
              color: 'red',
              backgroundColor: 'rgba(255,255,255,0.7)',
              padding: 4
            }
          }
        }
      }
    },
    scales: { y: { beginAtZero: true, max: 100 } }
  }
});
</script>
<script>
const ctxCPL12 = document.getElementById("chartCPL12");

new Chart(ctxCPL12, {
  type: 'bar',
  data: {
    labels: ['IK 12.1','IK 12.2','CPL 12'],
    datasets: [
      {
        label: 'Target Treshold (> 80%)',
        type: 'line',
        yMin: 80,
        yMax: 80,
        backgroundColor: 'rgba(255,255,255,0.7)',
        borderColor: 'red',
        borderWidth: 2,
        borderDash: [6, 6],
      },
      {
        label: 'Previous Periode (%)',
        data: [78,75,77],
        backgroundColor: '#6c757d',
        borderColor: '#6c757d',
        borderWidth: 1
      },
      {
        label: 'Selected Periode (%)',
        data: [80,77,78],
        backgroundColor: '#007bff',
        borderColor: '#007bff',
        borderWidth: 1
      }
    ]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { position: 'top' },
      annotation: {
        annotations: {
          targetLine: {
            type: 'line',
            yMin: 80,
            yMax: 80,
            borderColor: 'red',
            borderWidth: 2,
            borderDash: [6, 6],
            label: {
              display: true,
              content: 'Target % Mahasiswa = 80',
              position: 'start',
              color: 'red',
              backgroundColor: 'rgba(255,255,255,0.7)',
              padding: 4
            }
          }
        }
      }
    },
    scales: { y: { beginAtZero: true, max: 100 } }
  }
});
</script>
<?php include('5script.php'); ?>




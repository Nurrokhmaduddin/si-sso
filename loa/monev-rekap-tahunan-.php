<?php $page = 'monev_tahunan'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev Setahun Prodi
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
                  <b>Tahun Akademik:</b> 2024/2025  &nbsp;
                </div>
                <div class="col-md-6">
                  <b>MK Tempuh saat(selektif):</b> Semester 1 saja atau semua  &nbsp;
                </div> 
                
              </div>
            </div>
            monev ini tidak relevan, karena prodi sudah punya habit evaluasi tiap semester, bukan tiap tahun. kemudian parameternya hingga IK saja, yg  merupakan agregat CPMK. tidak hingga CPL.
            <div class="card-footer">
              <div class="card-tools ml-auto">
                <button class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#modalFilter">
                  <i class="fas fa-filter mr-1"></i> Filter
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download mr-1"></i> Export
                </button>    
                <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalTambahTemuan">
                  <i class="fas fa-clipboard-list mr-1"></i> Catat Temuan
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
    <div class="col-lg-7">
      <div class="chart-box radar-box">
        <canvas id="radarCPL"></canvas>
      </div>

     
    </div>


    <!-- KANAN: Dua Bar Chart -->
    <div class="col-lg-5 d-flex flex-column">

      <!-- BAR CHART 1 -->
      <div class="d-flex flex-column flex-grow-1">
        <div class="flex-grow-1 mb-2">
          <canvas id="chartIK"></canvas>
        </div>
      </div>


      <!-- BAR CHART 2 -->
      <div class="d-flex flex-column flex-grow-1">
        <div class="flex-grow-1 mb-2">
          <canvas id="chartCPMK"></canvas>
        </div>
      </div>
      
    </div>
  </div>
  <!-- Tombol -->
<!--       <div class="d-flex gap-2 mt-2">
        <button class="btn btn-outline-danger btn-sm flex-fill col-7" onclick="openAllRisikoPreview()">
          CPL Belum Tuntas
        </button>
        <button class="btn btn-outline-danger btn-sm flex-fill col-5" onclick="openAllRisikoPreview()">CPMK Belum Tuntas</button>
      </div> -->
</div>
<!-- ================= CARD: Perbandingan Periode ================= -->
<div class="card" id="cardGrafik">
  <div class="card-header">
    <h3 class="card-title">Grafik Radar Rata-rata semua CPL</h3>
    <div class="card-tools">
      <small class="text-muted">3 Tahun Terakhir</small>
      <button class="btn btn-sm btn-outline-primary" onclick="showTabel()">
       Versi Tabel
     </button>
   </div>
 </div>
 <div class="card-body">

  <canvas id="radarPeriode" height="450px"></canvas>
</div>
</div>
<!-- ========== CARD 4: tabel tren 3 periode ========== -->  
<div class="card d-none" id="cardTabel">
  <div class="card-header">
    <h5 class="card-title mb-0">Tabel Tren Rata-rata semua CPL</h5>
    <div class="card-tools">
      <small class="text-muted">3 Tahun Terakhir</small>
      <button class="btn btn-sm btn-outline-primary" onclick="showGrafik()">
       Versi Grafik
     </button>
   </div>
 </div>
  <div class="card-body">
    <table class="table table-bordered table-striped table-sm ">
      <thead class="table-light">
        <tr>
          <th>Aksi</th>
          <!-- <th>No</th> -->
          <th>Kode CPL</th>
          <th>2 Year Prior</th>
          <th>1 Year Prior</th>
          <th>Selected Year</th>
          <th>Status Tren</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><a href="monev-rekap-tahunan-detail.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td>
          <!-- <td>1</td> -->
          <td>CPL-01</td>
          <td>72</td>
          <td>75</td>
          <td>80</td>
          <td><span class="badge-secondary">Menaik</span></td>
        </tr>
        <tr>
          <td><a href="monev-rekap-tahunan-detail.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td>
          <!-- <td>2</td> -->
          <td>CPL-02</td>
          <td>85</td>
          <td>82</td>
          <td>78</td>
          <td><span class="badge-danger">Menurun</span></td>
        </tr>
        <tr>
          <td><a href="monev-rekap-tahunan-detail.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td>
          <!-- <td>3</td> -->
          <td>CPL-03</td>
          <td>90</td>
          <td>88</td>
          <td>91</td>
          <td><span class="badge-warning text-dark">Fluktuatif</span></td>
        </tr>
        <tr>
          <td><a href="monev-rekap-tahunan-detail.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td>
          <!-- <td>4</td> -->
          <td>CPL-04</td>
          <td>78</td>
          <td>78</td>
          <td>79</td>
          <td><span class="badge-secondary">Stabil</span></td>
        </tr>
        <tr>
          <td><a href="monev-rekap-tahunan-detail.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td>
          <!-- <td>5</td> -->
          <td>CPL-05</td>
          <td>65</td>
          <td>70</td>
          <td>74</td>
          <td><span class="badge-secondary">Menaik</span></td>
        </tr>
        <tr>
          <td><a href="monev-rekap-tahunan-detail.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td>
          <!-- <td>6</td> -->
          <td>CPL-06</td>
          <td>88</td>
          <td>85</td>
          <td>83</td>
          <td><span class="badge-danger">Menurun</span></td>
        </tr>
        <tr>
          <td><a href="monev-rekap-tahunan-detail.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td>
          <!-- <td>7</td> -->
          <td>CPL-07</td>
          <td>70</td>
          <td>74</td>
          <td>73</td>
          <td><span class="badge-warning text-dark">Fluktuatif</span></td>
        </tr>
        <tr>
          <td><a href="monev-rekap-tahunan-detail.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td>
          <!-- <td>8</td> -->
          <td>CPL-08</td>
          <td>92</td>
          <td>92</td>
          <td>93</td>
          <td><span class="badge-secondary">Stabil</span></td>
        </tr>
        <tr>
          <td><a href="monev-rekap-tahunan-detail.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td>
          <!-- <td>9</td> -->
          <td>CPL-09</td>
          <td>76</td>
          <td>81</td>
          <td>84</td>
          <td><span class="badge-secondary">Menaik</span></td>
        </tr>
        <tr>
          <td><a href="monev-rekap-tahunan-detail.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td>
          <!-- <td>10</td> -->
          <td>CPL-10</td>
          <td>83</td>
          <td>79</td>
          <td>80</td>
          <td><span class="badge-warning text-dark">Fluktuatif</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>



<!-- ========== CARD: Tabel Tren 30 IK (3 Periode) ========== -->  
<div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0">Tren Capaian Rata-rata semua IK </h5>
    <div class="card-tools">
      <small class="text-muted">3 Tahun Terakhir</small>
    </div>
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped table-sm datatables1">
      <thead class="table-light">
        <tr>
          <th>Aksi</th>
          <th>No</th>
          <th>Kode IK</th>
          <th>2 Years Prior</th>
          <th>1 Year Prior</th>
          <th>Selected Year</th>
          <th>Status Tren</th>
        </tr>
      </thead>
      <tbody>

        <!-- IK 01 - 05 -->
        <tr>
          <td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td>
          <td>1</td><td>IK-01</td>
          <td>70</td><td>74</td><td>79</td>
          <td><span class="badge-secondary">Menaik</span></td>
        </tr>
        <tr>
          <td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td>
          <td>2</td><td>IK-02</td>
          <td>82</td><td>80</td><td>76</td>
          <td><span class="badge-danger">Menurun</span></td>
        </tr>
        <tr>
          <td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td>
          <td>3</td><td>IK-03</td>
          <td>88</td><td>90</td><td>89</td>
          <td><span class="badge-warning text-dark">Fluktuatif</span></td>
        </tr>
        <tr>
          <td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td>
          <td>4</td><td>IK-04</td>
          <td>78</td><td>78</td><td>79</td>
          <td><span class="badge-secondary">Stabil</span></td>
        </tr>
        <tr>
          <td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td>
          <td>5</td><td>IK-05</td>
          <td>65</td><td>69</td><td>73</td>
          <td><span class="badge-secondary">Menaik</span></td>
        </tr>

        <!-- IK 06 - 10 -->
        <tr>
          <td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td>
          <td>6</td><td>IK-06</td>
          <td>90</td><td>87</td><td>84</td>
          <td><span class="badge-danger">Menurun</span></td>
        </tr>
        <tr>
          <td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td>
          <td>7</td><td>IK-07</td>
          <td>72</td><td>75</td><td>74</td>
          <td><span class="badge-warning text-dark">Fluktuatif</span></td>
        </tr>
        <tr>
          <td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td>
          <td>8</td><td>IK-08</td>
          <td>91</td><td>92</td><td>93</td>
          <td><span class="badge-secondary">Stabil</span></td>
        </tr>
        <tr>
          <td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td>
          <td>9</td><td>IK-09</td>
          <td>75</td><td>80</td><td>83</td>
          <td><span class="badge-secondary">Menaik</span></td>
        </tr>
        <tr>
          <td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td>
          <td>10</td><td>IK-10</td>
          <td>84</td><td>81</td><td>79</td>
          <td><span class="badge-danger">Menurun</span></td>
        </tr>

        <!-- IK 11 - 20 -->
        <!-- Pola dibuat variasi agar realistis -->

        <tr><td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td><td>11</td><td>IK-11</td><td>77</td><td>79</td><td>82</td><td><span class="badge-secondary">Menaik</span></td></tr>
        <tr><td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td><td>12</td><td>IK-12</td><td>86</td><td>84</td><td>83</td><td><span class="badge-danger">Menurun</span></td></tr>
        <tr><td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td><td>13</td><td>IK-13</td><td>73</td><td>73</td><td>74</td><td><span class="badge-secondary">Stabil</span></td></tr>
        <tr><td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td><td>14</td><td>IK-14</td><td>68</td><td>72</td><td>76</td><td><span class="badge-secondary">Menaik</span></td></tr>
        <tr><td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td><td>15</td><td>IK-15</td><td>92</td><td>90</td><td>88</td><td><span class="badge-danger">Menurun</span></td></tr>
        <tr><td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td><td>16</td><td>IK-16</td><td>80</td><td>82</td><td>81</td><td><span class="badge-warning text-dark">Fluktuatif</span></td></tr>
        <tr><td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td><td>17</td><td>IK-17</td><td>71</td><td>75</td><td>78</td><td><span class="badge-secondary">Menaik</span></td></tr>
        <tr><td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td><td>18</td><td>IK-18</td><td>89</td><td>88</td><td>90</td><td><span class="badge-warning text-dark">Fluktuatif</span></td></tr>
        <tr><td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td><td>19</td><td>IK-19</td><td>76</td><td>78</td><td>78</td><td><span class="badge-secondary">Stabil</span></td></tr>
        <tr><td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td><td>20</td><td>IK-20</td><td>69</td><td>72</td><td>75</td><td><span class="badge-secondary">Menaik</span></td></tr>

        <!-- IK 21 - 30 -->

        <tr><td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td><td>21</td><td>IK-21</td><td>83</td><td>80</td><td>77</td><td><span class="badge-danger">Menurun</span></td></tr>
        <tr><td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td><td>22</td><td>IK-22</td><td>74</td><td>77</td><td>80</td><td><span class="badge-secondary">Menaik</span></td></tr>
        <tr><td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td><td>23</td><td>IK-23</td><td>90</td><td>91</td><td>92</td><td><span class="badge-secondary">Stabil</span></td></tr>
        <tr><td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td><td>24</td><td>IK-24</td><td>67</td><td>70</td><td>73</td><td><span class="badge-secondary">Menaik</span></td></tr>
        <tr><td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td><td>25</td><td>IK-25</td><td>85</td><td>83</td><td>82</td><td><span class="badge-danger">Menurun</span></td></tr>
        <tr><td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td><td>26</td><td>IK-26</td><td>79</td><td>79</td><td>80</td><td><span class="badge-secondary">Stabil</span></td></tr>
        <tr><td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td><td>27</td><td>IK-27</td><td>72</td><td>76</td><td>75</td><td><span class="badge-warning text-dark">Fluktuatif</span></td></tr>
        <tr><td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td><td>28</td><td>IK-28</td><td>88</td><td>86</td><td>85</td><td><span class="badge-danger">Menurun</span></td></tr>
        <tr><td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td><td>29</td><td>IK-29</td><td>75</td><td>78</td><td>82</td><td><span class="badge-secondary">Menaik</span></td></tr>
        <tr><td><a href="monev-rekap-tahunan-detail2.php" class="btn btn-sm btn-outline-info">📄 Detail</a></td><td>30</td><td>IK-30</td><td>91</td><td>90</td><td>89</td><td><span class="badge-warning text-dark">Fluktuatif</span></td></tr>

      </tbody>
    </table>
  </div>
</div>

<!-- ========== CARD : Detail info per Mata Kuliah ========== -->
<!-- <div class="card shadow-sm">
  <div class="card-header bg-info text-white">
    <h5 class="mb-0">Detail info per CPL</h5>
  </div>

  <div class="card-body">


    <h6><b>Identitas CPL</b></h6>
    <table class="table table-sm table-bordered mb-4">
      <tr>
        <th>Kurikulum</th>
        <td>Merdeka Belajar</td>
      </tr>
      <tr>
        <th>Tahun Akademik</th>
        <td>2024/2025</td>
      </tr>
      <tr>
        <th style="width:200px;">Kode CPL</th>
        <td>CPL 1</td>
      </tr>
      <tr>
        <th>Deskripsi</th>
        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</td>
      </tr>
      <tr>
        <th>Jumlah IK</th>
        <td>3</td>
      </tr>
      <tr>
        <th>Jumlah CPMK</th>
        <td>12</td>
      </tr>
    </table>

    <canvas id="chartCPL1" width="100%" height="30"></canvas>
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
</div> -->

<!-- ========== CARD 4: Chart CPL-IK ========== -->     
<!--         <div class="card">   
          <div class="card-header ">         
            <h5 class="card-title mb-0">
              <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK1">
                <i class="fas fa-expand"></i>
              </button>
              CPL 1 – Kemampuan berkomunikasi secara efektif baik lisan maupun tulisan
            </h5>
          </div>
          <div class="card-body " id="chartCPLIK1">
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
        </div> -->

         <!-- ========== CARD 4: Chart IK ========== -->     
       <!--  <div class="card">   
          <div class="card-header ">         
            <h5 class="card-title mb-0">
              <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK2">
                <i class="fas fa-expand"></i>
              </button>
              IK 1 – Kemampuan untuk menginternalisasi semangat kemandirian dan Kewirausahaan
            </h5>
          </div>

            <div class="chart-container">
              <canvas id="chartCPL2" width="100%" height="30"></canvas>
            </div>
          </div>
          <div class="card-footer collapse" id="chartCPLIK2"  >
            <h6 class="font-weight-bold">Daftar CPMK</h6>
            <div class="table-responsive">
              <table class="table table-sm table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th style="width: 80px;">Kode CPMK</th>
                    <th>Deskripsi CPMK</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> STS900-2</td>
                    <td>Mahasiswa mampu menyampaikan informasi secara lisan secara runtut, jelas, dan mudah dipahami.</td>
                  </tr>
                  <tr>
                    <td> STS544-2</td>
                    <td>Mahasiswa mampu menulis laporan/tulisan akademik sesuai kaidah bahasa dan struktur penulisan yang baik.</td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div> -->

 <!-- ========== CARD 4: Chart IK ========== -->     
        <!-- <div class="card">   
          <div class="card-header ">         
            <h5 class="card-title mb-0">
              <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK3">
                <i class="fas fa-expand"></i>
              </button>
              IK 2 – Kemampuan untuk menginternalisasi semangat kemandirian dan Kewirausahaan
            </h5>
          </div>
          <div class="card-body collapse" id="chartCPLIK3">
            <div class="chart-container">
              <canvas id="chartCPL3" width="100%" height="30"></canvas>
            </div>
          </div>
          <div class="card-footer collapse" id="chartCPLIK3">
            <h6 class="font-weight-bold">Daftar CPMK</h6>
            <div class="table-responsive">
              <table class="table table-sm table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th style="width: 80px;">Kode CPMK</th>
                    <th>Deskripsi CPMK</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> STS901-3</td>
                    <td>Mahasiswa mampu menyampaikan informasi secara lisan secara runtut, jelas, dan mudah dipahami.</td>
                  </tr>
                  <tr>
                    <td> STS521-2</td>
                    <td>Mahasiswa mampu menulis laporan/tulisan akademik sesuai kaidah bahasa dan struktur penulisan yang baik.</td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div> -->

 <!-- ========== CARD 4: Chart IK ========== -->     
        <!-- <div class="card">   
          <div class="card-header ">         
            <h5 class="card-title mb-0">
              <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK4">
                <i class="fas fa-expand"></i>
              </button>
              IK 3 – Kemampuan untuk menginternalisasi semangat kemandirian dan Kewirausahaan
            </h5>
          </div>
          <div class="card-body collapse" id="chartCPLIK4">
            <div class="chart-container">
              <canvas id="chartCPL4" width="100%" height="30"></canvas>
            </div>
          </div>
          <div class="card-footer collapse" id="chartCPLIK4">
            <h6 class="font-weight-bold">Daftar CPMK</h6>
            <div class="table-responsive">
              <table class="table table-sm table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th style="width: 80px;">Kode CPMK</th>
                    <th>Deskripsi CPMK</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> UKU444-2</td>
                    <td>Mahasiswa mampu menyampaikan informasi secara lisan secara runtut, jelas, dan mudah dipahami.</td>
                  </tr>
                  <tr>
                    <td> UKU922-2</td>
                    <td>Mahasiswa mampu menulis laporan/tulisan akademik sesuai kaidah bahasa dan struktur penulisan yang baik.</td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div> -->






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
          Ambil dari nilai CPMK pada kelas yang diselenggarakan di tahun akademik tersebut saja.. Fokus untuk menganalisis selueuh CPL dan IK sebagai pelaksanaan sistemmik. mengukur stabilitas capaian CPL sistemik dan IK sistemik, dari tahun ke tahun. Ringkasan capaian CPL per Individu Mahasiswa, perkembangan, peringatan dini (EWS), disajikan dalam bentuk grafik dan tabel (Mockup data statis)
        </p>        
        <p>
          untuk audit implementasi dan atau audit kurikulum
        </p>
        <p>
          apakah CPL di 2025-ganjil turun dibanding 2024-ganjil? apakah ada masalah implementasi di semester terpilih? apakah dosen konsisten dalam menilai CPMK?
        </p>
        <p>
          bahan evaluasi kurikulum satu tahun, dg parameter CPL-IK, dengan detail di MK-kelas perkuliahan(cpmk).
        </p> 
        <p>
          Metrik yang Perlu Dievaluasi
1. Ketercapaian CPL per Tahun

Rata-rata kontribusi dari semua MK

Contoh:

CPL 1 = 82%
CPL 2 = 74%
2. Tren 3 Tahun

Naik, turun, stagnan?

Minimal 3 tahun untuk baca pola.

3. Distribusi Kontributor

Mata kuliah mana paling kuat kontribusinya?

Mana yang lemah?

Kalau satu CPL hanya kuat di 1 MK → itu riskan.

4. Konsistensi Antar Dosen

Apakah ada gap besar antar kelas?

Misal:

Kelas A → 85%

Kelas B → 68%

Ini bisa berarti:

Perbedaan metode

Perbedaan instrumen

5. Gap Target vs Realisasi

Jika target CPL = 80%
Realisasi = 74%

Gap ini harus dianalisis:

Kurikulum?

Beban SKS?

Metode?

Assessment?

6. Analisis Mapping

Evaluasi:

Apakah distribusi RPS terlalu berat di satu CPL?

Apakah ada CPL kurang disentuh?

Ini evaluasi kurikulum, bukan dosen.
---------
Level Prodi

Rata-rata CPL

Tren 3 Tahun

Gap Target

Konsistensi Antar MK

Keseimbangan Mapping
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


  <!-- Modal Tambah Temuan Evaluasi -->
<div class="modal fade" id="modalTambahTemuan" tabindex="-1">
  <div class="modal-dialog modal-md">
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
            <input type="text" class="form-control" name="reference_module" required value="monev setahun" disabled>
          </div>

          <div class="mb-3">
            <label class="form-label">Reference ID</label>
            <input type="text" class="form-control" name="reference_id" value="http://localhost/si-sso/loa/monev-rekap-tahunan.php" disabled>
          </div>


            <div class="mb-3">
              <label class="form-label">Jenis Evaluasi <span class="text-danger">*</span></label>
              <select name="jenis_evaluasi" class="custom-select" required>
                <option value="">-- Pilih Jenis --</option>
                <option>Pembelajaran(Proses)</option>
                <option>Kemajuan(Perkembangan)</option>
                <option>Lulusan(Outcome)</option>
                <option>Kurikulum(Sistem)</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label">Objek Evaluasi <span class="text-danger">*</span></label>
              <input type="text" name="objek" class="form-control" placeholder="Contoh: CPL 4 - Angk 2021" required>
            </div>

          <div class="mb-3">
            <label class="form-label">Periode <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="periode" required placeholder="Contoh: 2024/2025">
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

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan Temuan</button>
        </div>
      </form>

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



generateBarChart("chartIK", ikLabels, ikAverages, "Rerata Nilai IK", {
    bg: "rgba(255, 159, 64, 0.7)", border: "rgb(255, 159, 64)"     // oranye
});

generateBarChart("chartCPMK", cpmkLabels, cpmkAverages, "Rerata Nilai CPMK", {
    bg: "rgba(255, 99, 132, 0.7)", border: "rgb(255, 99, 132)"     // merah
});

generateBarChart("chartMK", mkLabels, mkAverages, "Rerata Nilai MK", {
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
        label: 'Rerata Nilai CPL ',
        data: [90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90],
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






<!-- Chart Script -->
<script>
const ctx = document.getElementById("chartCPL1");

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['IK 1', 'IK 2', 'IK 3', 'CPL 1'],
        datasets: [{
            label: 'Capaian',
            data: [90, 80, 92, 87.33], // satu periode saja
            backgroundColor: [
                '#6c757d', // IK 1 (abu-abu)
                '#6c757d', // IK 2
                '#6c757d', // IK 3
                '#007bff'  // CPL (biru)
            ],
            borderColor: [
                '#6c757d',
                '#6c757d',
                '#6c757d',
                '#007bff'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: false },
            // annotation: {
            //     annotations: {
            //         targetLine: {
            //             type: 'line',
            //             yMin: 85,
            //             yMax: 85,
            //             borderColor: 'red',
            //             borderWidth: 2,
            //             borderDash: [6, 6],
            //             label: {
            //                 display: true,
            //                 content: 'Target 85',
            //                 position: 'start',
            //                 color: 'red',
            //                 backgroundColor: 'rgba(255,255,255,0.7)',
            //                 padding: 4
            //             }
            //         }
            //     }
            // }
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
const ctx2 = document.getElementById("chartCPL2");

new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['STS900-2','STS900-4', 'STS544-2', 'IK 1'],
        datasets: [{
            label: 'Capaian',
            data: [90, 80,81, 87.33],
            backgroundColor: [
                '#6c757d', // IK 4
                '#6c757d', // IK 5
                '#6c757d', // IK 5
                '#007bff'  // CPL 2
            ],
            borderColor: [
              '#6c757d',
              '#6c757d',
              '#6c757d',
              '#007bff'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: false },
            // annotation: {
            //     annotations: {
            //         targetLine: {
            //             type: 'line',
            //             yMin: 85,
            //             yMax: 85,
            //             borderColor: 'red',
            //             borderWidth: 2,
            //             borderDash: [6, 6],
            //             label: {
            //                 display: true,
            //                 content: 'Target 85',
            //                 position: 'start',
            //                 color: 'red',
            //                 backgroundColor: 'rgba(255,255,255,0.7)',
            //                 padding: 4
            //             }
            //         }
            //     }
            // }
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
const ctx3 = document.getElementById("chartCPL3");

new Chart(ctx3, {
    type: 'bar',
    data: {
        labels: ['STS901-3', 'STS521-1','STS521-2', 'IK 2'],
        datasets: [{
            label: 'Capaian',
            data: [90, 80,70, 87.33],
            backgroundColor: [
                '#6c757d', // IK 4
                '#6c757d', // IK 5
                '#6c757d', // IK 5
                '#007bff'  // CPL 2
            ],
            borderColor: [
              '#6c757d',
              '#6c757d',
              '#6c757d',
              '#007bff'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: false },
            // annotation: {
            //     annotations: {
            //         targetLine: {
            //             type: 'line',
            //             yMin: 85,
            //             yMax: 85,
            //             borderColor: 'red',
            //             borderWidth: 2,
            //             borderDash: [6, 6],
            //             label: {
            //                 display: true,
            //                 content: 'Target 85',
            //                 position: 'start',
            //                 color: 'red',
            //                 backgroundColor: 'rgba(255,255,255,0.7)',
            //                 padding: 4
            //             }
            //         }
            //     }
            // }
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
const ctx4 = document.getElementById("chartCPL4");

new Chart(ctx4, {
    type: 'bar',
    data: {
        labels: ['STS900-2', 'STS544-2','UKU111-2', 'IK 1'],
        datasets: [{
            label: 'Capaian',
            data: [90, 80,88, 87.33],
            backgroundColor: [
                '#6c757d', // IK 4
                '#6c757d', // IK 5
                '#6c757d', // IK 5
                '#007bff'  // CPL 2
            ],
            borderColor: [
              '#6c757d',
              '#6c757d',
              '#6c757d',
              '#007bff'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: false },
            // annotation: {
            //     annotations: {
            //         targetLine: {
            //             type: 'line',
            //             yMin: 85,
            //             yMax: 85,
            //             borderColor: 'red',
            //             borderWidth: 2,
            //             borderDash: [6, 6],
            //             label: {
            //                 display: true,
            //                 content: 'Target 85',
            //                 position: 'start',
            //                 color: 'red',
            //                 backgroundColor: 'rgba(255,255,255,0.7)',
            //                 padding: 4
            //             }
            //         }
            //     }
            // }
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

// ===============================
// DATA DUMMY (Ganti sesuai kebutuhan)
// ===============================

const labelsCPL = [
  'CPL 1','CPL 2','CPL 3','CPL 4','CPL 5',
  'CPL 6','CPL 7','CPL 8','CPL 9','CPL 10','CPL 11'
];

const periodeA = [75, 82, 70, 88, 90, 65, 72, 60, 55, 45, 50];
const periodeB = [80, 85, 78, 90, 92, 70, 76, 68, 60, 55, 58];
const periodeC = [90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90];


// ===============================
// 1️⃣ RADAR CHART (2 Periode)
// ===============================

const radarCth = document.getElementById('radarPeriode').getContext('2d');

new Chart(radarCth, {
  type: 'radar',
  data: {
    labels: labelsCPL,
    datasets: [
      {
        label: '2 Year Prior',
        data: periodeA,
        backgroundColor: 'rgba(108,117,125,0.20)',
        borderColor: 'rgba(108,117,125,0.85)',
        borderWidth: 2,
        pointBackgroundColor: 'rgba(108,117,125,1)'
      },
      {
        label: '1 Year Prior',
        data: periodeB,
        backgroundColor: 'rgba(13,110,253,0.22)',
        borderColor: 'rgba(13,110,253,0.95)',
        borderWidth: 2,
        pointBackgroundColor: 'rgba(13,110,253,1)'
      },
      // {
      //   label: '1 Year Prior',
      //   data: periodeB,
      //   backgroundColor: 'rgba(255,152,0,0.22)',
      //   borderColor: 'rgba(245,124,0,0.95)',
      //   borderWidth: 2,
      //   pointBackgroundColor: 'rgba(245,124,0,1)'
      // },
      // {
      //   label: 'Selected Year',
      //   data: periodeC,
      //   backgroundColor: 'rgba(13,110,253,0.22)',
      //   borderColor: 'rgba(13,110,253,0.95)',
      //   borderWidth: 3,
      //   pointBackgroundColor: 'rgba(13,110,253,1)'
      // }
      {
      label: 'Selected Year',
      data: periodeC,
      backgroundColor: 'rgba(80, 200, 120, 0.35)',
      borderColor: 'rgba(60, 160, 95, 0.9)',
      borderWidth: 3,
      pointBackgroundColor: 'rgba(60, 160, 95, 1)'
    }
    ]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      r: {
        min: 0,
        max: 100,
        ticks: { stepSize: 20 }
      }
    },
    plugins: {
      legend: {
        position: 'top'
      }
    }
  }
});
</script>
<script>
function showTabel() {
  document.getElementById('cardGrafik').classList.add('d-none');
  document.getElementById('cardTabel').classList.remove('d-none');
}

function showGrafik() {
  document.getElementById('cardTabel').classList.add('d-none');
  document.getElementById('cardGrafik').classList.remove('d-none');
}
</script>
<?php include('5script.php'); ?>
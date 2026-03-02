<?php $page = 'monev_angkatan'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev CPL Angkatan
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
          <!-- ========== CARD : Filter & Identitas ========== -->
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
                  <b>Angkatan :</b> 2024 
                </div>
              <!-- <div class="col-md-6">
                <b>Status Mahasiswa:</b> Semua
              </div> -->
                <div class="col-md-6">
                  <b>MK Tempuh hingga(kumulatif):</b> Semester 1 saja atau semua  &nbsp;
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
                <a class="btn btn-sm btn-outline-primary" href="formulir-evaluasi.php" target="_blank"><i class="fas fa-clipboard-list me-1"> </i>Catat Temuan </a>               
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
              <div class="big" id="kpiAvg">33.15</div>
              <div class="small">dari 10 CPL</div>
            </div>
          </div>
          <!-- <div class="col-md-3">
            <div class="kpi bg-primary">
              <div class="small">CPL yang Memenuhi Standar</div>
              <div class="big" id="kpiAvg">7 dari 10 CPL</div>
              <div class="small">70% mencapai standar</div>
            </div>
          </div> -->

          <div class="col-md-3">
            <div class="kpi" style="background:#20c997;">
              <div class="small">Rerata CPL Tertinggi</div>
              <div class="big" id="kpiReached">CPL 1 (57.2)</div>
              <div class="small">dari 120 mahasiswa</div>
            </div>
          </div>
          <!--<div class="col-md-3">
            <div class="kpi " style="background:#ff7f0e;">
              <div class="small">Mahasiswa Lulus</div>
              <div class="big" id="kpiGap">60%</div>
              <div class="small">60 dari 100 Mahasiswa</div>
            </div>
          </div> 
          <div class="col-md-3">
            <div class="kpi " style="background:#ff7f0e;">
              <div class="small">Pemerataan Ketercapaian CPL</div>
              <div class="big" id="kpiGap">Gap 30% | 0.56</div>
              <div class="small">Kategori: Cukup Stabil</div>
            </div>
          </div> 
          <div class="col-md-3">
            <div class="kpi bg-danger">
              <div class="small">CPL Terlemah</div>
              <div class="big" id="kpiRisk">CPL 4</div>
              <div class="small">50% mencapai tuntas</div>
            </div>
          </div>-->
        <!-- </div>

        <div class="row g-3 mb-3"> -->
          <!-- <div class="col-md-3">
            <div class="kpi bg-primary">
              <div class="small">Rata-rata CPL keseluruhan</div>
              <div class="big" id="kpiAvg">78</div>
              <div class="small">dari 10 CPL</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="kpi" style="background:#20c997;">
              <div class="small"> Masa Studi Angkatan</div>
              <div class="big" id="kpiReached">7 Semester</div>
              <div class="small">saat 2025/2026 - Gasal</div>
            </div>
          </div> -->
          <div class="col-md-3">
            <div class="kpi " style="background:#ff7f0e;">
              <div class="small">Jumlah CPL Risiko</div>
              <div class="big" id="kpiGap">3 CPL</div>
              <div class="small">perlu di intervensi</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="kpi bg-danger">
              <div class="small">Jumlah IK Risiko</div>
              <div class="big" id="kpiRisk">5 IK</div>
              <div class="small">< 65 selama 4 semester</div>
            </div>
          </div>
        </div>
<!-- ========== CARD :  Grafik Radar CPL & Progress ========== --> 
<!-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<div class="card p-3">
  <div class="row">

    <div class="col-lg-6">
      <div id="radarCPL" class="chart-box "></div>
    </div>


    <div class="col-lg-6 d-flex flex-column">
      <div class="flex-grow-1">
        <div id="chartIK" class="chart-box"></div>
      </div>
      <div class="flex-grow-1">
        <div id="chartCPMK" class="chart-box"></div>
      </div>


    </div>
  </div>
</div> -->


<!-- ========== CARD :  Grafik Radar CPL & Progress ========== --> 
<div class="card p-3">
  <div class="row">

    <!-- KIRI: Radar Chart -->
    <div class="col-lg-6">
      <canvas id="chartStatusAngkatan2" width="100%" height="180"></canvas>
    </div>

    <!-- KANAN -->
    <div class="col-lg-6 d-flex flex-column">

      <!-- BAR CHART 1 -->
      <div class="d-flex flex-column flex-grow-1">
        <div class="flex-grow-1 mb-2">
          <canvas id="chartCPL"></canvas>
        </div>
      </div>


      <!-- BAR CHART 2 -->
      <div class="d-flex flex-column flex-grow-1">
        <div class="flex-grow-1 mb-2">
          <canvas id="chartIK2"></canvas>
        </div>
      </div>


    </div>
  </div>
</div>
        <!-- ========== CARD : Rekap per Angkatan ========== -->
          <!-- <div class="card mt-3">
            <div class="card-header">
              <h3 class="card-title">Rekap Status Mahasiswa per Angkatan</h3>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-bordered table-hover">
                <thead class="thead-light">
                  <tr>
                    <th>Angkatan</th>
                    <th>Total</th>
                    <th>Aktif</th>
                    <th>Cuti</th>
                    <th>Drop Out</th>
                    <th>Passed Out</th>
                    <th>Lulus</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2024</td>
                    <td>300</td>
                    <td>240</td>
                    <td>18</td>
                    <td>20</td>
                    <td>12</td>
                    <td>8</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div> -->
          
        <!-- ========== CARD : Tabel pemerataan target CPL ========== -->
        <!-- <div class="card">
          <div class="card-body">
            <table class="table table-hover table-bordered table-sm">
              <thead style="background-color: #f2f2f2;">
                <tr>
                  <th>Indikator</th>
                  <th>Nilai</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>CPL Tertinggi</td>
                  <td>85%</td>
                  <td>Persentase mahasiswa mencapai tuntas pada CPL 1</td>
                </tr>
                <tr>
                  <td>CPL Terendah</td>
                  <td>50%</td>
                  <td>Persentase mahasiswa mencapai tuntas pada CPL 8</td>
                </tr>
                <tr>
                  <td>Gap (Selisih)</td>
                  <td>30%</td>
                  <td>Selisih antara CPL tertinggi dan terendah</td>
                </tr>
                <tr>
                  <td>CPL Batas Standar</td>
                  <td>80%</td>
                  <td>Persentase mahasiswa mencapai tuntas pada CPL tersebut</td>
                </tr>
                <tr>
                  <td>Indeks Pemerataan</td>
                  <td>0.56</td>
                  <td>Dihitung sebagai 1 - (Gap / Batas Standar)</td>
                </tr>
                <tr>
                  <td>Kategori Stabilitas</td>
                  <td style="color: orange; font-weight: bold;">Cukup Stabil</td>
                  <td>Indeks 0.50 – 0.64</td>
                </tr>
              </tbody>
              <tfoot style="background-color: #f9f9f9; font-weight: bold;">
                <tr>
                  <td colspan="3">
                    <i>Interpretasi:</i> Kesenjangan ketercapaian antar CPL sebesar 30% menunjukkan adanya ketimpangan kompetensi pada angkatan ini. 
                    Dengan Indeks Pemerataan sebesar 0.56, profil kompetensi mahasiswa tergolong cukup stabil namun masih memerlukan upaya perbaikan untuk meningkatkan pemerataan antar CPL.
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div> -->

        <!-- ========== CARD : grafik detail 10 CPL ========== -->
        <div class="card " id="cardGrafik">
          <div class="card-header">
            <h3 class="card-title">Grafik rerata 10 CPL sepanjang max.9 semester</h3>
            <div class="card-tools">
              <small class="text-muted">Angkatan Terpilih</small>
              <button class="btn btn-sm btn-outline-primary" onclick="showTabel()">
                 Versi Tabel
              </button>
            </div>
          </div>
          <div class="card-body">
            <canvas id="chartCPLSemester" style="width:100%; height:400px;"></canvas>
          </div>
        </div>
        <!-- ========== CARD : Tabel detail 10 CPL ========== -->
        <div class="card d-none" id="cardTabel">
          <div class="card-header">
            <h3 class="card-title">Detail rerata 10 CPL sepanjang max.9 semester</h3>
            <div class="card-tools">
              <small class="text-muted">Angkatan Terpilih</small>
              <button class="btn btn-sm btn-outline-primary" onclick="showGrafik()">
                 Versi Grafik
              </button>
            </div>            
          </div>
          <div class="card-body p-0">
            <table class="table table-hover table-bordered table-sm">
              <thead style="background-color: #f2f2f2;">
                <tr>
                  <th width="220px">Periode Semester</th>
                  <th>CPL 1</th>
                  <th>CPL 2</th>
                  <th>CPL 3</th>
                  <th>CPL 4</th>
                  <th>CPL 5</th>
                  <th>CPL 6</th>
                  <th>CPL 7</th>
                  <th>CPL 8</th>
                  <th>CPL 9</th>
                  <th>CPL 10</th>
                </tr>
              </thead>
      <tbody>
        <tr>
          <td>sem1 [2024/2025 - Ganjil]</td>
          <td>24</td><td>12</td><td>09</td><td>06</td><td>02</td><td>12</td><td>23</td><td>13</td><td>24</td><td>5</td>
        </tr>
        <tr>
          <td>sem2 [2024/2025 - Genap]</td>
          <td>70</td><td>75</td><td>72</td><td>78</td><td>80</td><td>82</td><td>85</td><td>84</td><td>83</td><td>5</td>
        </tr>
        <tr>
          <td><a href="#detailallCPL" class="btn btn-sm btn-outline-info">sem3 [2025/2026 - Ganjil]</a></td>
          <td><a href="#detailCPL1" class="btn btn-sm btn-outline-info">65</a></td><td>68</td><td>70</td><td>74</td><td>76</td><td>78</td><td>80</td><td>82</td><td>81</td><td>5</td>
        </tr>
        <tr>
          <td>sem4 [2025/2026 - Genap]</td>
          <td>85</td><td>87</td><td>86</td><td>88</td><td>90</td><td>92</td><td>91</td><td>93</td><td>94</td><td>5</td>
        </tr>
        <tr>
          <td>>sem5 [2026/2027 - Ganjil]</td>
          <td>72</td><td>74</td><td>76</td><td>78</td><td>79</td><td>81</td><td>83</td><td>84</td><td>86</td><td>9</td>
        </tr>
        <tr>
          <td>sem6 [2026/2027 - Genap]</td>
          <td>60</td><td>65</td><td>68</td><td>70</td><td>72</td><td>75</td><td>77</td><td>79</td><td>80</td><td>9</td>
        </tr>
        <tr>
          <td>sem7 [2027/2028 - Ganjil]</td>
          <td>88</td><td>85</td><td>87</td><td>89</td><td>90</td><td>91</td><td>92</td><td>93</td><td>94</td><td>9</td>
        </tr>
        <tr>
          <td>sem8 [2027/2028 - Genap]</td>
          <td>75</td><td>78</td><td>80</td><td>82</td><td>83</td><td>85</td><td>87</td><td>88</td><td>90</td><td>9</td>
        </tr>
        <tr>
          <td><button  class="btn btn-sm btn-outline-info"onclick="window.location.href='monev-rekap-angkatan-detail.php'">sem9 [2028/2029 - Ganjil]</button></td>
          <td>68</td><td>70</td><td><button  class="btn btn-sm btn-outline-info"onclick="window.location.href='monev-rekap-angkatan-detail2.php'">73</button></td><td>75</td><td>77</td><td>79</td><td>81</td><td>82</td><td>84</td><td>9</td>
        </tr>
        <tr>
          <td>Perkembangan Tren </td>
          <td>fluktuatif</td><td>stagnan</td><td>menaik</td><td>menurun</td><td>menaik</td><td>fluktiatif</td><td>menaik</td><td>menurun</td><td>menurun</td><td>stagnan</td>
        </tr>
      </tbody>
      <tfoot style="background-color: #f9f9f9; font-weight: bold;">
        <tr>
          <td colspan="11">
            <i>Sebanyak</i> 8 dari 10 CPL (80%) <i>menunjukkan tren peningkatan capaian dari semester awal hingga semester akhir.
            Evaluasi dilakukan dengan melihat rerata capaian tiap semester serta konsistensi nilai ≥75 sebagai batas standar ketuntasan CPL.</i>baris status, dapat di 'klik', untuk melihat lebih detail.atau kolom semester,dapat di 'klik', untuk melihat lebih detail.
          </td>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
                <!-- ========== CARD : Tabel detail 30 IK ========== -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Detail rerata semua IK sepanjang max.9 semester</h3>
            <div class="card-tools">
              <small class="text-muted">Angkatan Terpilih</small>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-hover table-bordered table-sm">
              <thead style="background-color: #f2f2f2;">
                <tr>
                  <th width="190px">Periode Semester</th>
                  <th>IK 1</th>
                  <th>IK 2</th>
                  <th>IK 3</th>
                  <th>IK 4</th>
                  <th>IK 5</th>
                  <th>IK 6</th>
                  <th>IK 7</th>
                  <th>IK 8</th>
                  <th>IK 9</th>
                  <th>IK 10</th>
                  <th>IK(n)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>sem1 [2024/2025 - Ganjil]</td>
                  <td>24</td><td>12</td><td>09</td><td>06</td><td>02</td><td>12</td><td>23</td><td>13</td><td>24</td><td>5</td><td>...</td>
                </tr>
                <tr>
                  <td>sem2 [2024/2025 - Genap]</td>
                  <td>70</td><td>75</td><td>72</td><td>78</td><td>80</td><td>82</td><td>85</td><td>84</td><td>83</td><td>5</td><td>...</td>
                </tr>
                <tr>
                  <td>sem3 [2025/2026 - Ganjil]</td>
                  <td>65</td><td>68</td><td>70</td><td><a href="#detailIK1" class="btn btn-sm btn-outline-info">74</a></td><td>76</td><td>78</td><td>80</td><td>82</td><td>81</td><td>5</td><td>...</td>
                </tr>
                <tr>
                  <td>sem4 [2025/2026 - Genap]</td>
                  <td>85</td><td>87</td><td>86</td><td>88</td><td>90</td><td>92</td><td>91</td><td>93</td><td>94</td><td>5</td><td>...</td>
                </tr>
                <tr>
                  <td>sem5 [2026/2027 - Ganjil]</td>
                  <td>72</td><td>74</td><td>76</td><td>78</td><td>79</td><td>81</td><td>83</td><td>84</td><td>86</td><td>9</td><td>...</td>
                </tr>
                <tr>
                  <td>sem6 [2026/2027 - Genap]</td>
                  <td>60</td><td>65</td><td>68</td><td>70</td><td>72</td><td>75</td><td>77</td><td>79</td><td>80</td><td>9</td><td>...</td>
                </tr>
                <tr>
                  <td>sem7 [2027/2028 - Ganjil]</td>
                  <td>88</td><td>85</td><td>87</td><td>89</td><td>90</td><td>91</td><td>92</td><td>93</td><td>94</td><td>9</td><td>...</td>
                </tr>
                <tr>
                  <td>sem8 [2027/2028 - Genap]</td>
                  <td>75</td><td>78</td><td>80</td><td>82</td><td>83</td><td>85</td><td>87</td><td>88</td><td>90</td><td>9</td><td>...</td>
                </tr>
                <tr>
                  <td>sem9 [2028/2029 - Ganjil]</td>
                  <td>68</td><td>70</td><td><button  class="btn btn-sm btn-outline-info"onclick="window.location.href='monev-rekap-angkatan-detail3.php'">73</button></td><td>75</td><td>77</td><td>79</td><td>81</td><td>82</td><td>84</td><td>9</td><td>...</td>
                </tr>
                <tr>
                  <td>Perkembangan Tren </td>
                  <td>fluktuatif</td><td>stagnan</td><td>menaik</td><td>menurun</td><td>menaik</td><td>fluktiatif</td><td>menaik</td><td>menurun</td><td>menurun</td><td>stagnan</td><td>...</td>
                </tr>
              </tbody>
              <tfoot style="background-color: #f9f9f9; font-weight: bold;">
                <tr>
                  <td colspan="12">
                    <i>Sebanyak</i> 7 dari 10 IK (70%) <i>memenuhi standar, dengan kriteria bahwa minimal 80% mahasiswa pada angkatan mencapai skor ≥75 pada masing-masing IK tersebut.</i> baris status, dapat di 'klik', untuk melihat lebih detail. atau kolom semester,dapat di 'klik', untuk melihat lebih detail.
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
<!-- ========== CARD : tabel distribusi mahasiswa ========== -->  
<!-- <table class="table table-hover table-bordered table-sm">
  <thead>
    <tr>
    <th>%sangat baik (>80)</th>
    <th>%cukup (65-79)</th>
    <th>%belum tuntas (<65)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>65</td><td>45</td><td>75</td>
    </tr>
  </tbody>
</table>
 -->

<!-- ===== CARD : Detail info per Periode Semester (all CPL)  ======= -->
<!-- <div class="card shadow-sm" id="detailallCPL">
  <div class="card-header bg-info text-white">
    <h5 class="mb-0">Detail info per Periode Semester (all CPL)</h5>
  </div>
  <div class="card-body">
    <h6><b>Identitas Periode Semester - Angkatan</b></h6>
    <table class="table table-sm table-bordered mb-4">
      <tr>
        <th>Kurikulum</th>
        <td>Merdeka Belajar</td>
      </tr>
      <tr>
        <th>Angkatan</th>
        <td>2024</td>
      </tr>
      <tr>
        <th>Periode Semester</th>
        <td>sem3 [2025/2026 - Ganjil]</td>
      </tr>
    </table>
    <canvas id="chartCPL1" width="100%" height="30" class="mb-4"></canvas>

    <h6><b>Perbandingan %CPL <i>Antar Angkatan</i></b> </h6>
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm text-center">
        <thead class="table-dark">
          <tr>
            <th>Angkatan</th>
            <th>CPL 1</th>
            <th>CPL 2</th>
            <th>CPL 3</th>
            <th>CPL 4</th>
            <th>CPL 5</th>
            <th>CPL 6</th>
            <th>CPL 7</th>
            <th>CPL 8</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>% CPL Angkatan 2022</td>
            <td>68</td>
            <td>70</td>
            <td>74</td>
            <td>78</td>
            <td>80</td>
            <td>83</td>
            <td>85</td>
            <td>87</td>
          </tr>
          <tr>
            <td>% CPL Angkatan 2023</td>
            <td>72</td>
            <td>69</td>
            <td>76</td>
            <td>75</td>
            <td>82</td>
            <td>85</td>
            <td>82</td>
            <td>89</td>
          </tr>
          <tr>
            <td>% CPL Angkatan 2024</td>
            <td>75</td>
            <td>71</td>
            <td>80</td>
            <td>75</td>
            <td>79</td>
            <td>88</td>
            <td>78</td>
            <td>90</td>
          </tr>
          <tr>
            <td>Perkembangan Tren</td>
            <td><span class="badge bg-success">Menaik</span></td>
            <td><span class="badge bg-warning text-dark">Fluktuatif</span></td>
            <td><span class="badge bg-success">Menaik</span></td>
            <td><span class="badge bg-secondary">Stagnan</span></td>
            <td><span class="badge bg-warning text-dark">Fluktuatif</span></td>
            <td><span class="badge bg-success">Menaik</span></td>
            <td><span class="badge bg-danger">Menurun</span></td>
            <td><span class="badge bg-success">Menaik</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div> -->


<!-- ========== CARD 4: Chart CPL-IK ========== -->     
        <!-- <div class="card">   

          <div class="card-header ">         
            <h5 class="card-title mb-0">
              <button class="btn btn-sm btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#chartCPLIK1">
                <i class="fas fa-expand"></i>
              </button>
              <i class="fas fa-chart-bar me-2"></i>
              CPL angkatan terpilih
            </h5>
          </div>

          <div class="card-body " id="chartCPLIK1">

            <div class="chart-container">
              <canvas id="chartCPL1" width="100%" height="30"></canvas>
            </div>
            
          </div> 
          <div class="card-footer">
            <i>Interpretasi:</i> garis merah adalah batas target CPL
          </div>         
        </div> -->
<!-- ========== CARD : Tabel ketuntasan tiap CPL ========== -->
       <!--  <div class="card">
          <div class="card-header">
              <h3 class="card-title">Capaian 10 CPL</h3>
            </div>
          <div class="card-body">
            <table class="table table-hover table-bordered table-sm">
              <thead style="background-color: #f2f2f2;">
                <tr>
                  <th>CPL</th>
                  <th>Rerata Skor</th>
                  <th>% Mahasiswa Tuntas (>60)</th>
                  <th>Status Standar (>80%)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>CPL 1</td>
                  <td>82</td>
                  <td>85%</td>
                  <td style="color: green; font-weight: bold;">Memenuhi</td>
                </tr>
                <tr>
                  <td>CPL 2</td>
                  <td>80</td>
                  <td>81%</td>
                  <td style="color: green; font-weight: bold;">Memenuhi</td>
                </tr>
                <tr>
                  <td>CPL 3</td>
                  <td>79</td>
                  <td>82%</td>
                  <td style="color: green; font-weight: bold;">Memenuhi</td>
                </tr>
                <tr>
                  <td>CPL 4</td>
                  <td>83</td>
                  <td>84%</td>
                  <td style="color: green; font-weight: bold;">Memenuhi</td>
                </tr>
                <tr>
                  <td>CPL 5</td>
                  <td>78</td>
                  <td>80%</td>
                  <td style="color: green; font-weight: bold;">Memenuhi</td>
                </tr>
                <tr>
                  <td>CPL 6</td>
                  <td>81</td>
                  <td>81%</td>
                  <td style="color: green; font-weight: bold;">Memenuhi</td>
                </tr>
                <tr>
                  <td>CPL 7</td>
                  <td>77</td>
                  <td>80%</td>
                  <td style="color: green; font-weight: bold;">Memenuhi</td>
                </tr>
                <tr>
                  <td>CPL 8</td>
                  <td>72</td>
                  <td>61%</td>
                  <td style="color: red; font-weight: bold;">Tidak Memenuhi</td>
                </tr>
                <tr>
                  <td>CPL 9</td>
                  <td>70</td>
                  <td>50%</td>
                  <td style="color: red; font-weight: bold;">Tidak Memenuhi</td>
                </tr>
                <tr>
                  <td>CPL 10</td>
                  <td>74</td>
                  <td>67%</td>
                  <td style="color: red; font-weight: bold;">Tidak Memenuhi</td>
                </tr>
              </tbody>
              <tfoot style="background-color: #f9f9f9; font-weight: bold;">
                <tr>
                  <td colspan="4">
                    <i>Sebanyak</i> 7 dari 10 CPL (70%) <i>memenuhi standar, dengan kriteria bahwa minimal 80% mahasiswa pada angkatan mencapai skor ≥75 pada masing-masing CPL tersebut.</i>
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div> -->
        <!-- ========== CARD : tabel tren antar angkatan ========== -->  
<!-- <div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0">Histogram Perbandingan %CPL (3 Angkatan Terakhir) pada semester tersebut</h5>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm text-center">
        <thead class="table-light">
          <tr>
            <th>Angkatan</th>
            <th>CPL 1</th>
            <th>CPL 2</th>
            <th>CPL 3</th>
            <th>CPL 4</th>
            <th>CPL 5</th>
            <th>CPL 6</th>
            <th>CPL 7</th>
            <th>CPL 8</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>% CPL Angkatan 2022</td>
            <td>68</td>
            <td>70</td>
            <td>74</td>
            <td>78</td>
            <td>80</td>
            <td>83</td>
            <td>85</td>
            <td>87</td>
          </tr>

          <tr>
            <td>% CPL Angkatan 2023</td>
            <td>72</td>
            <td>69</td>
            <td>76</td>
            <td>75</td>
            <td>82</td>
            <td>85</td>
            <td>82</td>
            <td>89</td>
          </tr>

          <tr>
            <td>% CPL Angkatan 2024</td>
            <td>75</td>
            <td>71</td>
            <td>80</td>
            <td>75</td>
            <td>79</td>
            <td>88</td>
            <td>78</td>
            <td>90</td>
          </tr>

          <tr>
            <td>Perkembangan Tren</td>
            <td><span class="badge bg-success">Menaik</span></td>
            <td><span class="badge bg-warning text-dark">Fluktuatif</span></td>
            <td><span class="badge bg-success">Menaik</span></td>
            <td><span class="badge bg-secondary">Stagnan</span></td>
            <td><span class="badge bg-warning text-dark">Fluktuatif</span></td>
            <td><span class="badge bg-success">Menaik</span></td>
            <td><span class="badge bg-danger">Menurun</span></td>
            <td><span class="badge bg-success">Menaik</span></td>
          </tr>

          <tr>
            <td>Aksi</td>
            <td><a href="detail.php" class="btn btn-sm btn-outline-info">Detail</a></td>
            <td><a href="detail.php" class="btn btn-sm btn-outline-info">Detail</a></td>
            <td><a href="detail.php" class="btn btn-sm btn-outline-info">Detail</a></td>
            <td><a href="detail.php" class="btn btn-sm btn-outline-info">Detail</a></td>
            <td><a href="detail.php" class="btn btn-sm btn-outline-info">Detail</a></td>
            <td><a href="detail.php" class="btn btn-sm btn-outline-info">Detail</a></td>
            <td><a href="detail.php" class="btn btn-sm btn-outline-info">Detail</a></td>
            <td><a href="detail.php" class="btn btn-sm btn-outline-info">Detail</a></td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
</div> -->

<!-- ========== CARD : Detail info per Mata Kuliah ========== -->
<!-- <div class="card shadow-sm" id="detailCPL1">
  <div class="card-header bg-info text-white">
    <h5 class="mb-0">Detail info per Periode Semester (each CPL)</h5>
  </div>
  <div class="card-body">
    <h6><b>Identitas CPL </b></h6>
    <table class="table table-sm table-bordered mb-4">
      <tr>
        <th>Kurikulum</th>
        <td>Merdeka Belajar</td>
      </tr>
      <tr>
        <th>Angkatan</th>
        <td>2024</td>
      </tr>
      <tr>
        <th>Periode Semester</th>
        <td>sem3 [2025/2026 - Ganjil]</td>
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
    <canvas id="chartCPL2" width="100%" height="30"></canvas>
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
    <h6><b>Perbandingan Capaian <i>Antar Angkatan</i></b> </h6>
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm text-center">
        <thead class="table-dark">
          <tr>
            <th>Angkatan</th>
            <th>IK 4</th>
            <th>IK 5</th>
            <th>CPL 2</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>% CPL Angkatan 2022</td>
            <td>68</td>
            <td>70</td>
            <td>74</td>
          </tr>
          <tr>
            <td>% CPL Angkatan 2023</td>
            <td>72</td>
            <td>69</td>
            <td>76</td>
          </tr>
          <tr>
            <td>% CPL Angkatan 2024</td>
            <td>75</td>
            <td>71</td>
            <td>80</td>
          </tr>
          <tr>
            <td>Perkembangan Tren</td>
            <td><span class="badge bg-success">Menaik</span></td>
            <td><span class="badge bg-warning text-dark">Fluktuatif</span></td>
            <td><span class="badge bg-secondary">Stagnan</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div> -->





         <!-- ========== CARD 4: Chart CPL-IK ========== -->     
        <!-- <div class="card">  
          <div class="card-header ">         
            <h5 class="card-title mb-0">
              <button class="btn btn-sm btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#chartCPLIK2">
                <i class="fas fa-expand"></i>
              </button>
              CPL 1 – Kemampuan untuk menginternalisasi semangat kemandirian dan Kewirausahaan
            </h5>
          </div>
          <div class="card-body " >
            <div class="chart-container">
              <canvas id="chartCPL2" width="100%" height="30"></canvas>
            </div>
          </div>
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
                    <td>IK 5</td>
                    <td>Mahasiswa mampu menyampaikan informasi secara lisan secara runtut, jelas, dan mudah dipahami.</td>
                  </tr>
                  <tr>
                    <td>IK 6</td>
                    <td>Mahasiswa mampu menulis laporan/tulisan akademik sesuai kaidah bahasa dan struktur penulisan yang baik.</td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div> -->
<!-- ========== CARD : Detail info per Mata Kuliah ========== -->
<!-- <div class="card shadow-sm" id="detailIK1">
  <div class="card-header bg-info text-white">
    <h5 class="mb-0">Detail info per Periode Semester (each IK)</h5>
  </div>
  <div class="card-body">
    <h6><b>Identitas IK </b></h6>
    <table class="table table-sm table-bordered mb-4">
      <tr>
        <th>Kurikulum</th>
        <td>Merdeka Belajar</td>
      </tr>
      <tr>
        <th>Angkatan</th>
        <td>2024</td>
      </tr>
      <tr>
        <th>Periode Semester</th>
        <td>sem3 [2025/2026 - Ganjil]</td>
      </tr>
      <tr>
        <th style="width:200px;">Kode CPL</th>
        <td>IK 4</td>
      </tr>
      <tr>
        <th>Deskripsi</th>
        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</td>
      </tr>
      <tr>
        <th>Jumlah CPMK</th>
        <td>4</td>
      </tr>
    </table>
    <canvas id="chartCPL4" width="100%" height="30"></canvas>
    <h6 class="font-weight-bold">Daftar Capaian Pembelajaran Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr>
            <th style="width: 80px;">Kode </th>
            <th>Deskripsi </th>
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
          <tr>
            <td> UKU111-2</td>
            <td>Mahasiswa mampu menulis laporan/tulisan akademik sesuai kaidah bahasa dan struktur penulisan yang baik.</td>
          </tr>
        </tbody>
      </table>
    </div>
    <h6><b>Perbandingan Capaian <i>Antar Angkatan</i></b> </h6>
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm text-center">
        <thead class="table-dark">
          <tr>
            <th>Angkatan</th>
            <th>STS900-2</th>
            <th>STS544-2</th>
            <th>UKU111-2</th>
            <th>IK 4</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>% CPL Angkatan 2022</td>
            <td>68</td>
            <td>70</td>
            <td>40</td>
            <td>74</td>
          </tr>

          <tr>
            <td>% CPL Angkatan 2023</td>
            <td>72</td>
            <td>69</td>
            <td>40</td>
            <td>76</td>
          </tr>

          <tr>
            <td>% CPL Angkatan 2024</td>
            <td>75</td>
            <td>71</td>
            <td>40</td>
            <td>80</td>
          </tr>

          <tr>
            <td>Perkembangan Tren</td>
            <td><span class="badge bg-success">Menaik</span></td>
            <td><span class="badge bg-warning text-dark">Fluktuatif</span></td>
            <td><span class="badge bg-secondary">Stagnan</span></td>
            <td><span class="badge bg-success">Menaik</span></td>
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
          
          rangkumasn berfungsi untuk fokus pada evaluasi kurikulum, untuk bisa membuat benchmark proses penempuhan kurikulum
        </p>
        <p>
          Ringkasan capaian CPL per Kelompok Mahasiswa, perkembangan, peringatan dini (EWS), disajikan dalam bentuk grafik dan tabel (Mockup data statis)
        </p> 
        <p>
          laporan halaman ini untuk menjawab 'apakah kurikulum bekerja untuk angkatan ini'
        </p>
        <p>
          halama inin untuk menjaslakn/memberikan informasi ringkasan, deteksi, dan investigasi atas proses kurikulum berlangsung, pada suatu angkatan mahasiswa. unit ukur analisis adalah para mahasiswa dalam satu angkatan masuk yang sama.
        </p>
        <p>
           snapshot CPL by angkatan masuk(cohort) adalah gambaran capaian CPL suatu angkatan mahasiswa yang masuk pada tahun yang sama dan dianalisis sebagi suatu kelompok homogen yang mengalami kurikulum serta konteks sistem yang relati  sama; tujuannya adalah mengevaluasi efektivitas kurikulum dan stbilitas mutu antar angkatan, sehingga informasi yang perlu disajikan meliputi jumlah mahasiswa dalam cohort total dan yan g sudah lulus), rerata dan distribusi tiap CPL,persentasi ketuntasan CPL, progres studi (misalnya % tepat waktu), serta jika perlu perbandingan dengan cohort sebelumnya dalam kurikulum yang sama.singkatnya, snapshop cohort menjaawab "apakah kurikulum efektif bagi satu angkatan?"
           untuk evaluasi perkembangan mahasiswa
        </p>      
        <p>
          jumlah semester yang ditempuh angkatan ini:
semester akademik a, semester akademik b, c, dst....
        apakah angkatan X berkembang menuju CPL secara progresif?
        IK mana yang konsisten lemah pada angkatan ini?
        apakah ada pola masalah sistemik?
        apakah distribusi capaian antar semester stabil?
        apakah ada gap signifikan dibanding angkatan lain?
        rata-rata capaian CPL angkatan,
        IK terlemah,
        IK terkuat,
        distribusi capaian,
        tren semester ke semester,
        Fokus ukur CPL angkatan dari semester 1 hingga akhir.
        </p> 
        <p>snapshot dulu, ceritakan mengenai angkatan ini. dari semester ke semester.

        tren antar angkatan, akan melihat dengan cara pandang sama dengan snapshot, hanya tidak terlalu detail datanya.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


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
          <h6 class="modal-title">Preview Mahasiswa Risiko (sample)</h6>
          <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table table-sm table-bordered">
            <thead class="table-light"><tr><th>#</th><th>NIM</th><th>Nama</th><th>CP Lower</th></tr></thead>
            <tbody>
              <tr><td>1</td><td>20241099</td><td>Mahasiswa Minimal</td><td>61 (CPL-01)</td></tr>
              <tr><td>2</td><td>20241077</td><td>Siswa Risiko</td><td>48 (CPL-04)</td></tr>
              <tr><td>3</td><td>20241055</td><td>Contoh Lain</td><td>45 (CPL-09)</td></tr>
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
const ctx = document.getElementById("chartCPL1");

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [
      'CPL 1','CPL 2','CPL 3','CPL 4','CPL 5',
      'CPL 6','CPL 7','CPL 8','CPL 9','CPL 10'
    ],
    datasets: [
      {
        label: 'Batas Standar',
        type: 'line',
        yMin: 80, 
        yMax: 80,
        backgroundColor: 'rgba(255,255,255,0.7)',
        borderColor: 'red',
        borderWidth: 2,
        borderDash: [6, 6],
      },
      {
        label: 'Rerata Skor',
        data: [82, 80, 79, 83, 78, 81, 77, 72, 70, 74],
        backgroundColor: '#6c757d',
        borderColor: '#6c757d',
        borderWidth: 1
      },
      {
        label: '% Mahasiswa Tuntas',
        data: [85, 81, 82, 84, 80, 81, 80, 61, 50, 67],
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
              content: 'Target % Mahasiswa = 60',
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
  const ctx2 = document.getElementById("chartCPL2");

  new Chart(ctx2, {
    type: 'bar',
    data: {
      labels: ['IK 4', 'IK 5',  'CPL2'],
      datasets: [
        {
          label: 'Rerata Skor',
          data: [82, 75,  81.66],
          backgroundColor: '#6c757d',
          borderColor: '#6c757d',
          borderWidth: 1
        },
        {
          label: '% Mahasiswa Tuntas',
          data: [90, 80, 87.33],
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
              yMin: 85,      // <<< TARGET CAPAIAN
              yMax: 85,
              borderColor: 'red',
              borderWidth: 2,
              borderDash: [6, 6],
              label: {
                display: true,
                content: 'Target 85',
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
          beginAtZero: true
        }
      }
    }
  });


</script>


             

<script>

// ================================
// DATA DUMMY
// ================================

// 11 CPL
const cplLabels = Array.from({length: 10}, (_, i) => `CPL-${i+1}`);
const cplAverages = cplLabels.map(() => randomScore());

const ikLabels = Array.from({length: 24}, (_, i) => `IK-${i+1}`);
const ikAverages = ikLabels.map(() => randomScore());

const cpmkLabels = Array.from({length: 72}, (_, i) => `CPMK-${i+1}`);
const cpmkAverages = cpmkLabels.map(() => randomScore());

function randomScore() {
  return Number((Math.random() * 100).toFixed(0));
}

// ================================
// 2️⃣ RADAR CPL
// ================================

var radarOptions = {
  series: [{
    name: 'Rerata Nilai CPL',
    data: cplAverages
  }],
  chart: {
    type: 'radar',
    height: 400
  },
  colors: ['#4CAF50'],
  xaxis: {
    categories: cplLabels,
    labels: { show: true },   // ❌ sembunyikan label
  },
  yaxis: {
    min: 0,
    max: 100
  },
  fill: {
    opacity: 0.4
  },
  stroke: {
    width: 2
  },
  // title: {
  //   text: 'Radar CPL'
  // }
};

new ApexCharts(document.querySelector("#radarCPL"), radarOptions).render();


// ================================
// BAR IK (Horizontal)
// ================================

var ikOptions = {
  series: [{
    name: 'Rerata Nilai IK',
    data: ikAverages ,
  }],
  chart: {
    type: 'bar',
    height: 210,
    toolbar: { show: true }
  },
  legend: {
  show: true,
  position: 'top',
  horizontalAlign: 'left',
  fontSize: '13px',
  markers: {
    width: 12,
    height: 12,
    radius: 2
  }
},
  plotOptions: {
    bar: {
      horizontal: false
    }
  },
  colors: ['#FF9F40'],
  xaxis: {
    categories: ikLabels,
    min: 0,
    max: 100,
    labels: { show: false },   // ❌ sembunyikan angka X
    axisBorder: { show: true },
    axisTicks: { show: false }
  },
  yaxis: {
    labels: { show: true }    // ❌ sembunyikan label IK
  },
  grid: {
    show: true
  },
  tooltip: {
    enabled: true   // ✅ tetap aktif saat hover
  },
  dataLabels: {
    enabled: false
  },
  // title: {
  //   text: 'Barchart IK'
  // },
  fill: {
    opacity: 0.4
  },
  stroke: {
    width: 2
  }
};

new ApexCharts(document.querySelector("#chartIK"), ikOptions).render();


// ================================
// BAR CPMK (Axis Hidden)
// ================================

var cpmkOptions = {
  series: [{
    name: 'Rerata Nilai CPMK',
    data: cpmkAverages
  }],
  chart: {
    type: 'bar',
    height: 190,
    toolbar: { show: true }
  },
  legend: {
    show: false
  },
  plotOptions: {
    bar: {
      horizontal: false
    }
  },
  colors: ['#FF6384'],
  xaxis: {
    categories: cpmkLabels,
    min: 0,
    max: 100,
    labels: { show: false },   // ❌ sembunyikan label CPMK
    axisBorder: { show: true },
    axisTicks: { show: false }
  },
  yaxis: {
    labels: { show: false } ,   // ❌ sembunyikan angka X
    axisBorder: { show: false },
    axisTicks: { show: false }
  },
  grid: {
    show: true
  },
  tooltip: {
    enabled: true   // ✅ tetap muncul saat hover
  },
  dataLabels: {
    enabled: false
  },
  // title: {
  //   text: 'Barchart CPMK'
  // }
};

new ApexCharts(document.querySelector("#chartCPMK"), cpmkOptions).render();

</script>





<script>
  var ctx11 = document.getElementById('chartStatusAngkatan2').getContext('2d');
  new Chart(ctx11, {
    type: 'pie',
    data: {
      labels: ['Aktif', 'Cuti', 'Skors', 'Passed Out', 'Drop Out', 'Lulus'],
      datasets: [{
            data: [950, 70, 120, 40, 4, 2300], // contoh data
            
            // Warna custom tiap slice
            backgroundColor: [
                '#28a745', // aktif - biru
                '#ff9800', // cuti - orange
                '#dc3545', // skors - merah
                '#6c757d', // tidak aktif/passed out - abu
                '#343a40',  // DO - hitam
                '#007bff' // lulus - hijau
                ],

            borderColor: '#ffffff',
            borderWidth: 2
          }]
    },
    options: {
      plugins: {
        legend: {
          position: 'top'
        }
      }
    }
  });
</script>
<script>
// -------------------------------------------------
// 1) GENERATOR DATA DUMMY SECARA OTOMATIS
// -------------------------------------------------

// 11 CPL
const cplLabels2 = Array.from({length: 11}, (_, i) => `CPL-${String(i+1).padStart(2,'0')}`);
const cplAverages2 = cplLabels2.map(() => randomScore());

// 24 IK
const ikLabels2 = Array.from({length: 24}, (_, i) => `IK-${String(i+1).padStart(2,'0')}`);
const ikAverages2 = ikLabels2.map(() => randomScore());

// 258 CPMK  (format: STKxxx-n)
const cpmkLabels2 = Array.from({length: 258}, (_, i) => {
    const mkCode = `STK${String(500 + Math.floor(i/5)).padStart(3,'0')}`;
    const num = (i % 5) + 1;
    return `${mkCode}-${num}`;
});
const cpmkAverages2 = cpmkLabels2.map(() => randomScore());

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

generateBarChart("chartCPL", cplLabels, cplAverages, "Rerata Skor CPL", {
    bg: "rgba(75, 192, 75, 0.7)", border: "rgb(75, 192, 75)"       // hijau
});

generateBarChart("chartIK2", ikLabels, ikAverages, "Rerata Skor IK", {
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
const ctx4 = document.getElementById("chartCPL4");

new Chart(ctx4, {
    type: 'bar',
    data: {
      labels: ['STS900-2', 'STS544-2','UKU111-2', 'IK 1'],

      datasets: [{
        label: '% Mahasiswa Tuntas',
        data: [90, 80, 88, 87.33],
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
            annotation: {
                annotations: {
                    targetLine: {
                        type: 'line',
                        yMin: 85,
                        yMax: 85,
                        borderColor: 'red',
                        borderWidth: 2,
                        borderDash: [6, 6],
                        label: {
                            display: true,
                            content: 'Target 85',
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
const ctxCPL = document.getElementById('chartCPLSemester').getContext('2d');

new Chart(ctxCPL, {
  type: 'line',
  data: {
    labels: [
      'CPL 1','CPL 2','CPL 3','CPL 4','CPL 5',
      'CPL 6','CPL 7','CPL 8','CPL 9','CPL 10'
    ],


    datasets: [
      {
        label: 'Sem 1 (2024/2025 - Ganjil)',
        data: [53,40,48,51,49,53,50,47,52,49],
        borderColor: '#6c757d',
        backgroundColor: '#6c757d',
        tension: 0.3
      },

      {
        label: 'Sem 2 (2024/2025 - Genap)',
        data: [55,57,53,56,54,58,55,52,57,54],
        borderColor: '#6c757d',
        backgroundColor: '#6c757d',
        tension: 0.3
      },

      {
        label: 'Sem 3 (2025/2026 - Ganjil)',
        data: [60,62,58,61,59,59,60,57,62,59],
        borderColor: '#dc3545',
        backgroundColor: '#dc3545',
        tension: 0.3
      },

      {
        label: 'Sem 4 (2025/2026 - Genap)',
        data: [65,67,63,61,64,62,65,62,67,64],
        borderColor: '#dc3545',
        backgroundColor: '#dc3545',
        tension: 0.3
      },

      {
        label: 'Sem 5 (2026/2027 - Ganjil)',
        data: [70,72,68,68,69,73,70,67,72,69],
        borderColor: '#ff9800',
        backgroundColor: '#ff9800',
        tension: 0.3
      },

      {
        label: 'Sem 6 (2026/2027 - Genap)',
        data: [75,77,73,76,74,78,75,72,77,74],
        borderColor: '#ff9800',
        backgroundColor: '#ff9800',
        tension: 0.3
      },

      {
        label: 'Sem 7 (2027/2028 - Ganjil)',
        data: [80,82,78,81,79,83,80,77,82,79],
        borderColor: '#4aa6ff',
        backgroundColor: '#4aa6ff',
        tension: 0.3
      },

      {
        label: 'Sem 8 (2027/2028 - Genap)',
        data: [85,87,83,86,84,88,80,82,87,84],
        borderColor: '#4aa6ff',
        backgroundColor: '#4aa6ff',
        tension: 0.3
      },

      {
        label: 'Sem 9 (2028/2029 - Ganjil)',
        data: [90,92,88,91,89,93,82,87,92,89],
        borderColor: '#007bff',
        backgroundColor: '#007bff',
        tension: 0.3,
        borderWidth: 3
      }

    ]
  },
  options: {
    responsive: true,
    maintainAspectRatio: true,
    plugins: {
      legend: {
        position: 'bottom'
      },
      title: {
        display: false,
        text: 'Detail Rerata 10 CPL Sepanjang Maks. 9 Semester'
      }
    },
    scales: {
      y: {
        beginAtZero: false,
        max: 100
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
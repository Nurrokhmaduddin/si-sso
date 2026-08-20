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
            <!-- <div class="card-header">
              <h5 class="card-title mb-0"><i class="fas fa-filter "></i> Judul Tabel yang terdampak tombol aksi ini </h5>              
            </div> -->
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
  <!-- <div class="row g-3 mb-3">
    <div class="col-md-3">
      <div class="kpi bg-primary">
        <div class="small">Rata-rata CPL</div>
        <div class="big" id="kpiAvg">75.2</div>
        <div class="small">dari 12 CPL</div>
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
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail4.php'"><a class="nav-link active">Riwayat CPL</a></li>
    <!-- <li class="nav-item" onclick="window.location='monev-rekap-individual-detail5.php'"><a class="nav-link ">Riwayat IK</a></li> -->
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail3.php'"><a class="nav-link ">Riwayat MK</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail6.php'"><a class="nav-link "> KHS</a></li>
    <!-- <li class="nav-item" onclick="window.location='monev-rekap-individual-detail7.php'"><a class="nav-link ">IPK</a></li> -->
  </ul>


        <!-- ========== CARD : grafik detail 10 CPL ========== -->
        <div class="card " id="cardGrafik">
          <div class="card-header">
            <h3 class="card-title">Grafik Line Kemajuan semua CPL</h3>
            <div class="card-tools">
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
            <h3 class="card-title">Tabel Data Kemajuan semua CPL</h3>
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
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
                <!-- <div class="col-md-6">
                  <b>MK Tempuh hingga(kumulatif):</b> Semester 1 saja atau semua  &nbsp;
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
<div class="card">
<div class="card-body ">
  <div class="row">


    <div class="col-lg-8">
      <canvas id="chartCPL3" width="100%" height="50" class="mb-4"></canvas>
    </div>


    <div class="col-lg-4 d-flex flex-column">
      <div class="d-flex flex-column flex-grow-1">
        <div class="flex-grow-1 mb-2">
          <canvas id="chartStatusAngkatan2"></canvas>
        </div>
      </div>
    </div>
  </div>

    <table class="table table-bordered table-striped table-sm ">
    <thead>
        <tr>
            <th>Kode CPL</th>
            <th>Deskripsi CPL</th>
            <th>Skor CPL (avg)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>CPL 1</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut l</td>
            <td>90</td>
        </tr>
        <tr>
            <td>CPL 2</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut l</td>
            <td>65</td>
        </tr>
        <tr>
            <td>CPL 3</td>
           <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut l</td>
            <td style="color:black;">88</td>
        </tr>
        <tr>
            <td>CPL 4</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut l</td>
            <td>91</td>
        </tr>
        <tr>
            <td>CPL 5</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut l</td>
            <td>89</td>
        </tr>
        <tr>
            <td>CPL 6</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut l</td>
            <td>93</td>
        </tr>
        <tr>
            <td>CPL 7</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut l</td>
            <td>82</td>
        </tr>
        <tr>
            <td>CPL 8</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut l</td>
            <td>87</td>
        </tr>
        <tr>
            <td>CPL 9</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut l</td>
            <td>92</td>
        </tr>
        <tr>
            <td>CPL 10</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut l</td>
            <td style="color:black;">94</td>
        </tr>
    </tbody>
</table>
  </div>
</div>

        <!-- ========== CARD : grafik detail 10 CPL ========== -->
        <div class="card " id="cardGrafik">
          <div class="card-header">
            <h3 class="card-title">Grafik Line Kemajuan semua CPL</h3>
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
          <td><button  class="btn btn-sm btn-info"onclick="window.location.href='monev-rekap-tahunan-detail.php'">87</button></td><td>75</td><td>72</td><td>78</td><td>80</td><td>82</td><td>85</td><td>84</td><td>83</td><td>5</td>
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
        data: [0,0,5,8,6,4,10,7,5,3],
        borderColor: '#6c757d',
        backgroundColor: '#6c757d',
        tension: 0.3
      },

      {
        label: 'Sem 2 (2024/2025 - Genap)',
        data: [10,8,12,15,14,13,18,12,16,14],
        borderColor: '#6c757d',
        backgroundColor: '#6c757d',
        tension: 0.3
      },

      {
        label: 'Sem 3 (2025/2026 - Ganjil)',
        data: [22,18,24,26,23,25,24,21,27,24],
        borderColor: '#dc3545',
        backgroundColor: '#dc3545',
        tension: 0.3
      },

      {
        label: 'Sem 4 (2025/2026 - Genap)',
        data: [35,30,38,40,37,39,42,34,41,38],
        borderColor: '#dc3545',
        backgroundColor: '#dc3545',
        tension: 0.3
      },

      {
        label: 'Sem 5 (2026/2027 - Ganjil)',
        data: [48,44,52,55,51,54,56,47,55,52],
        borderColor: '#ff9800',
        backgroundColor: '#ff9800',
        tension: 0.3
      },

      {
        label: 'Sem 6 (2026/2027 - Genap)',
        data: [60,55,63,66,62,65,67,58,66,63],
        borderColor: '#ff9800',
        backgroundColor: '#ff9800',
        tension: 0.3
      },

      {
        label: 'Sem 7 (2027/2028 - Ganjil)',
        data: [80,62,74,74,74,83,82,77,82,70],
        borderColor: '#4aa6ff',
        backgroundColor: '#4aa6ff',
        tension: 0.3
      },

      {
        label: 'Sem 8 (2027/2028 - Genap)',
        data: [80,62,80,83,81,84,82,77,82,82],
        borderColor: '#4aa6ff',
        backgroundColor: '#4aa6ff',
        tension: 0.3
      },

      {
        label: 'Sem 9 (2028/2029 - Ganjil)',
        data: [90,65,88,91,89,93,82,87,92,94],
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
        beginAtZero: true,
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

<script>
const ctx3 = document.getElementById("chartCPL3");

new Chart(ctx3, {
  type: 'bar',
  data: {
    labels: [
      'CPL 1','CPL 2','CPL 3','CPL 4','CPL 5',
      'CPL 6','CPL 7','CPL 8','CPL 9','CPL 10'
    ],
    datasets: [
      // {
      //   label: 'Batas Standar',
      //   type: 'line',
      //   yMin: 80, 
      //   yMax: 80,
      //   backgroundColor: 'rgba(255,255,255,0.7)',
      //   borderColor: 'red',
      //   borderWidth: 2,
      //   borderDash: [6, 6],
      // },
      {
        label: 'Rerata Nilai CPL',
         data: [90,65,88,91,89,93,82,87,92,94],
        backgroundColor: 'rgba(75, 192, 75, 0.7)',
        borderColor: 'rgb(75, 192, 75)',
        borderWidth: 2
      }
    ]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { position: 'top' },
      annotation: {
        annotations: {
          // targetLine: {
          //   type: 'line',
          //   yMin: 80,
          //   yMax: 80,
          //   borderColor: 'red',
          //   borderWidth: 2,
          //   borderDash: [6, 6],
          //   label: {
          //     display: true,
          //     content: 'Target % Mahasiswa = 60',
          //     position: 'start',
          //     color: 'red',
          //     backgroundColor: 'rgba(255,255,255,0.7)',
          //     padding: 4
          //   }
          // }
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
<?php include('5script.php'); ?>
<?php $page = 'monev_kelas'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>
  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Rekapitulasi - Kelas Perkuliahan 
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
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
            <!-- <div class="card-header bg-secondary">
              <h5 class="card-title mb-0">
                <i class="fas fa-database"></i> Data Produk/Barang        
              </h5>
              <div class="card-tools ms-auto">
                               
              </div>
            </div> -->

            <div class="card-body ">
              <div class="row">   
                <div class="col-lg-7">
                  <table class="table table-sm table-hover table-bordered table-striped deta">
                    <tbody>
                      <tr>
                        <td width="30%"><b> Kurikulum</b></td>
                        <td>2023</td>
                      </tr>
                      <tr>
                        <td width="30%"><b> Periode Akademik</b></td>
                        <td>2024/2025 - Gasal</td>
                      </tr>
                      <tr>
                        <td width="30%"><b> Dosen Pengampu</b></td>
                        <td>Tri Nugroho Sulistyantoro, S.T., M.T. - (195110502)</td>
                      </tr>
                     
                      <!-- <tr>
                        <td width="30%"><b> Tanggal Posting </b></td>
                        <td>23 Januari 2024</td>
                      </tr> -->
                    </tbody>
                  </table>
                </div>
                <div class="col-lg-5">
                  <table class="table table-sm table-hover table-bordered table-striped deta">
                    <tbody>
                      <tr>
                        <td width="30%"><b> Jalur Kelas</b></td>
                        <td>Civil Engineering Regular - (511)</td>
                      </tr>
                       <tr>
                        <td width="30%"><b> Mata Kuliah</b></td>
                        <td>Metode Pelaksanaan Bangunan - (STS704)</td>
                      </tr>
                      <tr>
                        <td width="30%"><b> Kelas</b></td>
                        <td>A</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>

            <div class="card-footer">
              <div class="card-tools ms-auto">
                 <button type="button" 
                class="btn btn-outline-secondary btn-sm"
                onclick="window.location.href='monev-rekap-kelas.php'">
                <span class="fas fa-reply me-1"></span> Kembali
              </button>

                <!-- <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button> -->
               <!--  <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button> -->
                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>  
                <button type="button" class="btn btn-outline-warning btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import from Gateway UII
                </button> -->              
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <!-- <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button> -->    
              </div>
            </div>

          </div>

          <!-- TAB NAV (Semester) -->
           <ul class="nav nav-tabs">
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail.php'"><a class="nav-link active">Final</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail4.php'"><a class="nav-link ">Remedial</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail3.php'"><a class="nav-link ">Portofolio</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail2.php'"><a class="nav-link ">Mahasiswa</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail6.php'"><a class="nav-link ">Refleksi</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail5.php'"><a class="nav-link ">OBE</a></li>
          </ul>
     


<!-- ========== CARD : tabel rekap CPMK ========== -->
<div class="card">
  <div class="card-body">
    <div class="table-responsive">

      <table class="table table-bordered table-sm table-hover table-striped example1" border="1">
        <thead>
          <tr>
            <th colspan="2" rowspan="2" style="vertical-align: middle; text-align: center;">Daftar CPMK (Capaian)</th>
            <th><center>Rerata</center></th>
            <th><center>Tertinggi</center></th>
            <th><center>Terendah</center></th>
            <th><center>Ketuntasan (%)</center></th>
            <th><center>Jumlah Mahasiswa</center></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="width: 10px;">1</td>
            <td style="width: 40%;">Mahasiswa mengerti dan memahami dasar-dasar polimer, hubungan antara sifat dengan struktur dan perilaku prosesnya.</td>
            <td align="center">72,14                      </td>
            <td align="center">80,00                      </td>
            <td align="center">0,00                      </td>
            <td align="center">56,00                      </td>
            <td align="center">40</td>
          </tr>
          <tr>
            <td style="width: 10px;">2</td>
            <td style="width: 40%;">Mahasiswa mengerti dan memahami dasar-dasar komposit, hubungan antara sifat dengan struktur dan perilaku prosesnya.</td>
            <td align="center">77,86                      </td>
            <td align="center">85,00                      </td>
            <td align="center">0,00                      </td>
            <td align="center">67,00                      </td>
            <td align="center">40</td>
          </tr>
          <tr>
            <td style="width: 10px;">3</td>
            <td style="width: 40%;">Mahasiswa mampu mengembangkan aplikasi polimer</td>
            <td align="center">76,14                      </td>
            <td align="center">80,00                      </td>
            <td align="center">0,00                      </td>
            <td align="center">67,00                      </td>
            <td align="center">40</td>
          </tr>
          <tr>
            <td style="width: 10px;">4</td>
            <td style="width: 40%;">Mahasiswa mampu mengembangkan aplikasi komposit</td>
            <td align="center">76,14                      </td>
            <td align="center">0,00                      </td>
            <td align="center">80,00                      </td>
            <td align="center">78,00                      </td>
            <td align="center">40</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- ========== CARD : visualisasi grafis capaian CPMK ========== -->
<div class="card">
  <div class="card-body">
    <canvas id="chartCpmk" width="400" height="100"></canvas>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      const ctx = document.getElementById('chartCpmk').getContext('2d');
      const chartCpmk = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['CPMK 1','CPMK 2','CPMK 3','CPMK 4'],
          datasets: [{
            label: 'Rerata Capaian (%)',
            data: [72.14, 77.86, 76.14, 76.14], 
            backgroundColor: 'rgba(54, 162, 235, 0.6)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: { beginAtZero: true, max: 100 }
          },
          plugins: {
            legend: { display: false },
            title: {
              display: true,
              text: 'Rerata Nilai CPMK pada Kelas Perkuliahan'
            }
          }
        }
      });
    </script>

  </div>
</div>

<!-- ========== CARD : Chart Row CPMK ========== -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fas fa-chart-area mr-1"></i>
      Distribusi & Capaian Pembelajaran
    </h3>
  </div>
  <div class="card-body">
    <!-- Bar Chart CPMK -->
    <div class="chart-container" style="height:220px;">
      <canvas id="barChartCPMK"></canvas>
    </div>

    <!-- Bar Chart CPMK -->
    <div class="chart-container" style="height:220px;">
      <canvas id="barChartCPMK2"></canvas>
    </div>
  </div>
</div>
<!-- ========== CARD : tabel distribusi rentang ========== -->
<div class="card shadow">
  <div class="card-header bg-info text-white">
    <h5 class="mb-0">Distribusi Rentang Nilai CPMK (Total 40 Mahasiswa)</h5>
  </div>

  <div class="card-body">
    <canvas id="stackedCPMKChart" height="120"></canvas>
  </div>
</div>



      </div>
    </div>
  </div>
</section>
</div>
<!-- ./content-wrapper -->

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

          <!-- Pilihan -->
          <div class="mb-3">
            <label for="lembaga" class="form-label">Periode Akademik</label>
            <select name="lembaga" id="lembaga" class="form-select">
              <option value="PA019" selected>2024/2025 - Gasal - (Aktif)</option><option value="PA018" >2023/2024 - Genap</option><option value="PA017" >2023/2024 - Gasal</option><option value="PA016" >2022/2023 - Genap</option><option value="PA015" >2022/2023 - Gasal</option><option value="PA014" >2021/2022 - Genap</option><option value="PA013" >2021/2022 - Gasal</option><option value="PA012" >2020/2021 - Genap</option><option value="PA011" >2020/2021 - Gasal</option><option value="PA010" >2019/2020 - Genap</option><option value="PA009" >2019/2020 - Gasal</option><option value="PA008" >2018/2019 - Genap</option><option value="PA007" >2018/2019 - Gasal</option><option value="PA006" >2017/2018 - Genap</option><option value="PA005" >2017/2018 - Gasal</option><option value="PA004" >2016/2017 - Genap</option><option value="PA003" >2016/2017 - Gasal</option><option value="PA002" >2015/2016 - Genap</option><option value="PA001" >2015/2016 - Gasal</option> 
            </select>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-info">Terapkan Filter</button>
          </div>
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
          Ideal hasil ekspor kelas berdasarkan:
kurikulum, set pemetaan, mata kuliah(satu,beberapa, semua)
kolom: kode MK, mata kuliah, mahasiswa, nilai akhir(huruf),nilai akhir(angka), cpmk 1,2,3,4,5
jika ada kesamaan NIM di satu mata kuliah(artinya mahasiswa tempuh >1 kali MK tsb) ambil nilai tertinggi
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<script>
// Generate label CPMK 1 - 256
const labelsCPMK = Array.from({ length: 40 }, (_, i) => `NIM ${i + 1}`);

// Contoh nilai CPMK (0 - 100)
const nilaiCPMK = Array.from({ length: 40 }, () =>
  Math.floor(Math.random() * 101)
);

const cty = document.getElementById('barChartCPMK').getContext('2d');

new Chart(cty, {
  type: 'bar',
  data: {
    labels: labelsCPMK,
    datasets: [{
      label: 'Nilai CPMK 1',
      data: nilaiCPMK,
      backgroundColor: 'rgba(220, 53, 69, 0.8)', // merah (Bootstrap danger)
      borderColor: 'rgba(220, 53, 69, 1)',
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      // title: {
      //   display: true,
      //   text: 'Capaian CPMK',
      //   font: {
      //     size: 18
      //   }
      // },
      legend: {
        position: 'top'
      },
      tooltip: {
        callbacks: {
          label: function(context) {
            return `Nilai: ${context.raw}`;
          }
        }
      }
    },
    scales: {
      y: {
        min: 0,
        max: 100,
        // title: {
        //   display: true,
        //   text: 'Nilai (0–100)'
        // }
      },
      x: {
        ticks: {
          autoSkip: true,
          maxTicksLimit: 30 // supaya tidak overload
        },
        title: {
          display: true,
          // text: 'CPMK'
        }
      }
    }
  }
});
</script>



<script>
// Generate label CPMK 1 - 256
const labelsCPMK2 = Array.from({ length: 40 }, (_, i) => `NIM ${i + 1}`);

// Contoh nilai CPMK (0 - 100)
const nilaiCPMK2 = Array.from({ length: 40 }, () =>
  Math.floor(Math.random() * 101)
);

const cty2 = document.getElementById('barChartCPMK2').getContext('2d');

new Chart(cty2, {
  type: 'bar',
  data: {
    labels: labelsCPMK2,
    datasets: [{
      label: 'Nilai CPMK 2',
      data: nilaiCPMK2,
      backgroundColor: 'rgba(220, 53, 69, 0.8)', // merah (Bootstrap danger)
      borderColor: 'rgba(220, 53, 69, 1)',
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      // title: {
      //   display: true,
      //   text: 'Capaian CPMK',
      //   font: {
      //     size: 18
      //   }
      // },
      legend: {
        position: 'top'
      },
      tooltip: {
        callbacks: {
          label: function(context) {
            return `Nilai: ${context.raw}`;
          }
        }
      }
    },
    scales: {
      y: {
        min: 0,
        max: 100,
        // title: {
        //   display: true,
        //   text: 'Nilai (0–100)'
        // }
      },
      x: {
        ticks: {
          autoSkip: true,
          maxTicksLimit: 30 // supaya tidak overload
        },
        title: {
          display: true,
          // text: 'CPMK'
        }
      }
    }
  }
});
</script>

<script>
  const ctx3 = document.getElementById('stackedCPMKChart').getContext('2d');

  const data = {
    labels: ['CPMK 1', 'CPMK 2', 'CPMK 3', 'CPMK 4'],
    datasets: [
      {
        label: 'Unsatisfactory (0-30)',
        data: [3, 2, 1, 2],
        backgroundColor: '#F59999'
      },
      {
        label: 'Developing (30.01-55)',
        data: [5, 6, 4, 5],
        backgroundColor: '#B7C9FC'
      },
      {
        label: 'Competent (55.01-70)',
        data: [10, 8, 9, 7],
        backgroundColor: '#9AE5CA'
      },
      {
        label: 'Accomplished (70.01-85)',
        data: [12, 14, 13, 15],
        backgroundColor: '#A2EDD2'
      },
      {
        label: 'Exemplary (85.01-100)',
        data: [10, 10, 13, 11],
        backgroundColor: '#6FD3C3'
      }
    ]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'bottom'
        },
        tooltip: {
          mode: 'index',
          intersect: false
        }
      },
      scales: {
        x: {
          stacked: true
        },
        y: {
          stacked: true,
          beginAtZero: true,
          max: 40,
          title: {
            display: true,
            text: 'Jumlah Mahasiswa'
          }
        }
      }
    }
  };

  new Chart(ctx3, config);
</script>

<?php include('5script.php'); ?>
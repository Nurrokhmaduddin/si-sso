<?php $page = 'progress_kelas'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Progress - Kelas Perkuliahan
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
                        <td width="30%"><b> Tahun Akademik</b></td>
                        <td>2024/2025 - Gasal</td>
                      </tr>
                      <tr>
                        <td width="30%"><b> Dosen Pengampu</b></td>
                        <td>Tri Nugroho Sulistyantoro, S.T., M.T. - (195110502)</td>
                      </tr>
                      <tr>
                        <td width="30%"><b> Mata Kuliah</b></td>
                        <td>Metode Pelaksanaan Bangunan - (STS704)</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-lg-5">
                  <table class="table table-sm table-hover table-bordered table-striped deta">
                    <tbody>
                      <tr>
                        <td width="30%"><b> Jumlah CPMK</b></td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td width="30%"><b> Peminatan</b></td>
                        <td>Civil Engineering Regular - (511)</td>
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
            <li class="nav-item" onclick="window.location='progres-kelas-semester-detail.php'"><a class="nav-link active">Progres(Grafik/Tabel)</a></li>
            <!-- <li class="nav-item" onclick="window.location='monev_portfolio_cpmk_detail2.php'"><a class="nav-link ">Mahasiswa</a></li>
            <li class="nav-item" onclick="window.location='monev_portfolio_cpmk_detail3.php'"><a class="nav-link ">Portofolio</a></li> -->
            <li class="nav-item" onclick="window.location='progres-kelas-semester-detail4.php'"><a class="nav-link ">Pengembangan</a></li>
          </ul>


<!-- ========== CARD : Chart CPL-IK ========== -->     
        <div class="card">   
          <!-- CARD HEADER -->  
          <div class="card-header ">         
            <h5 class="card-title mb-0">
              <button class="btn btn-sm btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#chartCPLIK1">
                <i class="fas fa-expand"></i>
              </button>
              Progress Rerata CPMK Kelas Perkuliahan antar Periode
            </h5>
          </div>
          <!-- CARD BODY -->
          <div class="card-body " id="chartCPLIK1">
            <!-- Chart Container -->
            <div class="chart-container">
              <canvas id="chartCPL2" width="100%" height="30"></canvas>
            </div>
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
                    <td>CPMK 1</td>
                    <td>Mahasiswa mampu menyampaikan informasi secara lisan secara runtut, jelas, dan mudah dipahami.</td>
                  </tr>
                  <tr>
                    <td>CPMK 2</td>
                    <td>Mahasiswa mampu menulis laporan/tulisan akademik sesuai kaidah bahasa dan struktur penulisan yang baik.</td>
                  </tr>
                  <tr>
                    <td>CPMK 3</td>
                    <td>Mahasiswa mampu berkomunikasi secara profesional dalam konteks akademik dan industri, termasuk etika komunikasi digital.</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>          
        </div>

              
<!-- ========== CARD : tabel asesmen========== -->
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              
              <table class="table table-bordered table-sm table-hover table-striped example1" border="1">
                <thead>
                  <tr>
                    <th colspan="2" rowspan="2" style="vertical-align: middle; text-align: center;">Hasil Assessmen CPMK</th>
                    <th colspan="2"><center>Rerata</center></th>
                    <th colspan="2"><center>Tertinggi</center></th>
                    <th colspan="2"><center>Terendah</center></th>
                  </tr>
                  <tr>
                    <th>Capaian</th>
                    <th>Remidi</th>
                    <th>Capaian</th>
                    <th>Remidi</th>
                    <th>Capaian</th>
                    <th>Remidi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width: 10px;">1</td>
                    <td style="width: 40%;">Mahasiswa mengerti dan memahami dasar-dasar polimer, hubungan antara sifat dengan struktur dan perilaku prosesnya.</td>
                    <td align="center">
                    72,14                      </td>
                    <td align="center">
                    0,00                      </td>
                    <td align="center">
                    80,00                      </td>
                    <td align="center">
                    0,00                      </td>
                    <td align="center">
                    70,00                      </td>
                    <td align="center">
                    0,00                      </td>
                  </tr>
                  <tr>
                    <td style="width: 10px;">2</td>
                    <td style="width: 40%;">Mahasiswa mengerti dan memahami dasar-dasar komposit, hubungan antara sifat dengan struktur dan perilaku prosesnya.</td>
                    <td align="center">
                    77,86                      </td>
                    <td align="center">
                    0,00                      </td>
                    <td align="center">
                    85,00                      </td>
                    <td align="center">
                    0,00                      </td>
                    <td align="center">
                    70,00                      </td>
                    <td align="center">
                    0,00                      </td>
                  </tr>
                  <tr>
                    <td style="width: 10px;">3</td>
                    <td style="width: 40%;">Mahasiswa mampu mengembangkan aplikasi polimer</td>
                    <td align="center">
                    76,14                      </td>
                    <td align="center">
                    0,00                      </td>
                    <td align="center">
                    80,00                      </td>
                    <td align="center">
                    0,00                      </td>
                    <td align="center">
                    75,00                      </td>
                    <td align="center">
                    0,00                      </td>
                  </tr>
                  <tr>
                    <td style="width: 10px;">4</td>
                    <td style="width: 40%;">Mahasiswa mampu mengembangkan aplikasi komposit</td>
                    <td align="center">
                    76,14                      </td>
                    <td align="center">
                    0,00                      </td>
                    <td align="center">
                    80,00                      </td>
                    <td align="center">
                    0,00                      </td>
                    <td align="center">
                    75,00                      </td>
                    <td align="center">
                    0,00                      </td>
                  </tr>
                </tbody>
              </table>

              <!-- visualisasi grafis capaian CPMK -->
             <!--  <canvas id="chartCpmk" width="400" height="150"></canvas>
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
                        text: 'Progres Capaian CPMK Kelas'
                      }
                    }
                  }
                });
              </script> -->

            </div>
          </div>
        </div>
          
        <!-- ========== CARD : visualisasi grafis capaian CPMK ========== -->
       <!--  <div class="card">
          <div class="card-body">
              <canvas id="chartCpmk" width="400" height="150"></canvas>
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
                        text: 'Progres Capaian CPMK Kelas'
                      }
                    }
                  }
                });
              </script>

          </div>
        </div> -->










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
<?php include('5script.php'); ?>
















        

        
     

<!-- <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-annotation@1.3.1/dist/chartjs-plugin-annotation.min.js"></script> -->

<!-- Chart Script -->
<script>
    const ctx2 = document.getElementById("chartCPL2");

    new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['CPMK 1', 'CPMK 2', 'CPMK 3'],
            datasets: [
                {
                    label: 'Periode A',
                    data: [82, 75,  81.66],
                    backgroundColor: '#6c757d',
                    borderColor: '#6c757d',
                    borderWidth: 1
                },
                {
                    label: 'Periode B',
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
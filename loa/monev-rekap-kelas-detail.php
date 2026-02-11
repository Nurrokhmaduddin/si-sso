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

    

          <!-- ========== CARD : identitas kelas ========== --> 
          <div class="card">
            <div class="card-body">
              <div class="row">   
                <div class="col-lg-6">
                  <table id="tbl" name="tbl" class="table table-sm table-hover table-bordered table-striped deta">
                    <tbody>
                      <tr>
                        <td width="30%"><b> Periode Akademik</b></td>
                        <td>2024/2025 - Semester Genap</td>
                      </tr>
                      <tr>
                        <td width="30%"><b> Dosen Pengampu</b></td>
                        <td>155211304 - Tintin Mutiara, S.T., M.Eng., Dr.</td>
                      </tr>
                      <tr>
                        <td width="30%"><b> Mata Kuliah</b></td>
                        <td>
                        Teknologi Polimer dan Komposit                         - (MTK907)                      </td>
                      </tr>
                      <tr>
                        <td width="30%"><b> Kelas</b></td>
                        <td>A - <i>Jadwal (hari, jam, ruang)</i></td>
                      </tr>
                      <tr>
                        <td width="30%"><b> Peminatan</b></td>
                        <td>Teknik Kimia Program Magister</td>
                      </tr>     
                      <tr>
                        <td width="30%"><b>Jumlah Mahasiswa</b></td>
                        <td>40 </td>
                      </tr>                      
                    </tbody>
                  </table>
                </div>
                <div class="col-lg-6">
                  <table id="tbl" name="tbl" class="table table-sm table-hover table-bordered table-striped deta">
                    <tbody>
                      <tr>
                        <td> 
                          Dokumen RPS <span class="badge badge-success">Valid</span></td>
                          <td width="40%">
                            <a href="#" target="_blank" title="Unduh RPS">
                              <button type="button" class="btn btn-xs btn-success" ><i class="fas fa-file"></i> Download</button>
                            </a> <i>update_at</i>
                          </td>
                        </tr>
                        <tr>
                          <td> 
                          Materi Pembelajaran (slides, modul, bahan ajar) </td>
                          <td width="40%">
                            <a href="#" target="_blank">
                              <button type="button" class="btn btn-xs btn-info"><i class="fas fa-link"></i> Download</button>
                            </a> <i>update_at</i>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Dokumen Penugasan Mahasiswa <span class="badge badge-secondary">Proses</span></td>
                            <td width="40%">
                              <a href="https://drive.google.com/drive/folders/1Ba6yZ2KLWZC992tVO7wxpcfxaOYb8Eyi?usp=drive_link" target="_blank">
                                <button type="button" class="btn btn-xs btn-info"><i class="fas fa-link"></i> Download</button>
                              </a> <i>updated 19 sep 2025</i>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Soal Ujian UTS/UAS <span class="badge badge-danger">Rejected</span> (dengan validasi prodi)</td>
                              <td width="40%">
                                <a href="https://drive.google.com/drive/folders/1Ba6yZ2KLWZC992tVO7wxpcfxaOYb8Eyi?usp=drive_link" target="_blank">
                                  <button type="button" class="btn btn-xs btn-info"><i class="fas fa-link"></i> Download</button>
                                </a> <i>update_at</i>
                              </td>
                            </tr>
                            <tr>
                              <td>
                              Evaluasi Dosen oleh Mahasiswa</td>
                              <td width="40%">
                                <a href="portfolio_cpmk_detail2.php" target="_blank">
                                  <button type="button" class="btn btn-xs btn-info"><i class="fas fa-link"></i> Download</button>
                                </a> <i>update_at</i>
                              </td>
                            </tr>
                          </tbody>
                      </table>
                </div>
              </div>
            </div>
          
            <div class="card-footer">
              <div class="table-responsive">
                <table>
                  <tr>
                    <td style="border: 0px;">
                      <a href="perkuliahan-portofolio-kelas.php">
                        <button type="button" class="btn bg-gray" style="background-color: #6c757d;">
                          <span class="fas fa-reply"></span> 
                        Kembali                      </button>
                      </a>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>

             <!-- TAB NAV (Semester) -->
        <ul class="nav nav-tabs">
           <ul class="nav nav-tabs">
          <li class="nav-item" onclick="window.location='monev_portfolio_cpmk_detail1.php'"><a class="nav-link active">Laporan(Grafik/Tabel)</a></li>
           <li class="nav-item" onclick="window.location='monev_portfolio_cpmk_detail2.php'"><a class="nav-link ">Mahasiswa</a></li>
           <li class="nav-item" onclick="window.location='monev_portfolio_cpmk_detail3.php'"><a class="nav-link ">Portofolio</a></li>
           <li class="nav-item" onclick="window.location='monev_portfolio_cpmk_detail4.php'"><a class="nav-link ">Pengembangan</a></li>
        </ul>
        </ul>

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
<div class="card">
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
<?php include('5script.php'); ?>
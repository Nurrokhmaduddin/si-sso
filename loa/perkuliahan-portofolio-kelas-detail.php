<?php $page = 'portofolio_kelas'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Portofolio - Kelas Perkuliahan [lembar kerja dosen]
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
              <br>
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
                    <!-- <tr>
                      <td width="30%" colspan="2"><b> Dokumen Lampiran  :</b></td>
                    </tr> -->
                    <tr>
                      <td><button type="button" class="btn btn-xs btn-primary" ><i class="fas fa-edit"></i></button> 
                        Dokumen RPS <span class="badge badge-success">Valid</span></td>
                        <td width="40%">
                          <a href="#" target="_blank" title="Unduh RPS">
                            <button type="button" class="btn btn-xs btn-success" ><i class="fas fa-file"></i> Download</button>
                          </a> <i>update_at</i>
                        </td>
                      </tr>
                      <tr>
                        <td><button type="button" class="btn btn-xs btn-primary" ><i class="fas fa-edit"></i></button> 
                        Materi Pembelajaran (slides, modul, bahan ajar) </td>
                        <td width="40%">
                          <a href="#" target="_blank">
                            <button type="button" class="btn btn-xs btn-info"><i class="fas fa-link"></i> Download</button>
                          </a> <i>update_at</i>
                        </td>
                      </tr>
                      <tr>
                        <td><button type="button" class="btn btn-xs btn-primary" ><i class="fas fa-edit"></i></button>
                          Dokumen Penugasan Mahasiswa <span class="badge badge-secondary">Proses</span></td>
                          <td width="40%">
                            <a href="https://drive.google.com/drive/folders/1Ba6yZ2KLWZC992tVO7wxpcfxaOYb8Eyi?usp=drive_link" target="_blank">
                              <button type="button" class="btn btn-xs btn-info"><i class="fas fa-link"></i> Download</button>
                            </a> <i>updated 19 sep 2025</i>
                          </td>
                        </tr>
                        <tr>
                          <td><button type="button" class="btn btn-xs btn-primary" ><i class="fas fa-edit"></i></button>
                            Soal Ujian UTS/UAS <span class="badge badge-danger">Rejected</span> (dengan validasi prodi)</td>
                            <td width="40%">
                              <a href="https://drive.google.com/drive/folders/1Ba6yZ2KLWZC992tVO7wxpcfxaOYb8Eyi?usp=drive_link" target="_blank">
                                <button type="button" class="btn btn-xs btn-info"><i class="fas fa-link"></i> Download</button>
                              </a> <i>update_at</i>
                            </td>
                          </tr>
                          <tr>
                            <td><button type="button" class="btn btn-xs btn-primary" ><i class="fas fa-edit"></i></button>
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
              </div>

              <!-- ========== CARD : riwayat catatan pengembangan ========== -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Catatan Evaluasi MK-Portfolio </h5>

            <div class="mb-2">
              <button class="btn btn-info btn-sm" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL2">Open/Close</button>
            </div>

            <div id="daftarIKCPL2" class="collapse show table-responsive">
             <table class="table table1 table-bordered table-striped table-sm datatables1">
              <thead>

                <tr class="text-uppercase text-center">
                  <th width="5px">No.</th>
                  <th>Tahun akademik</th>
                  <th>Kelas</th>
                  <th>Evaluasi Pembelajaran</th>
                  <th>Rencana Pengembangan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">1</td>
                  <td>2025 - Gasal</td>
                  <td>A</td>                    
                  <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. </td>
                  <td>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                  <td class="text-center">                     
                   <button class="btn btn-sm btn-outline-info" onclick="window.location.href='.php'">🔍 Grafik/Tabel</button>
                   <button class="btn btn-sm btn-outline-info" onclick="window.location.href='portfolio_cpmk_detail.php'">🔍 DetailPortfolio</button>
                 </td>
               </tr>
               <tr>
                <td class="text-center">2</td>
                <td>2025 - Gasal</td>
                <td>B</td>
                <td>
                  Materi telah tersampaikan sesuai rencana pembelajaran, namun beberapa mahasiswa
                  membutuhkan penjelasan tambahan pada topik tertentu. Partisipasi kelas cukup baik.
                </td>
                <td>
                  Menambahkan sesi konsultasi mingguan, menyediakan contoh studi kasus tambahan,
                  serta memperbaiki alur penyampaian pada pertemuan awal.
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-outline-info" onclick="window.location.href='.php'">🔍 Grafik/Tabel</button>
                  <button class="btn btn-sm btn-outline-info" onclick="window.location.href='portfolio_cpmk_detail.php'">🔍 DetailPortfolio</button>
                </td>
              </tr>

              <tr>
                <td class="text-center">3</td>
                <td>2024 - Genap</td>
                <td>A</td>
                <td>
                  Ketercapaian materi berada pada kategori baik. Praktikum berjalan lancar meskipun ada
                  beberapa kendala kecil terkait perangkat laboratorium.
                </td>
                <td>
                  Melakukan koordinasi dengan laboran, memperbarui panduan praktikum, dan
                  menambah materi pemantapan untuk pertemuan terakhir.
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-outline-info" onclick="window.location.href='.php'">🔍 Grafik/Tabel</button>
                  <button class="btn btn-sm btn-outline-info" onclick="window.location.href='portfolio_cpmk_detail.php'">🔍 DetailPortfolio</button>
                </td>
              </tr>

              <tr>
                <td class="text-center">4</td>
                <td>2024 - Gasal</td>
                <td>C</td>
                <td>
                  Interaksi kelas masih perlu ditingkatkan. Sebagian mahasiswa kurang aktif berdiskusi
                  dan ketepatan waktu pengumpulan tugas masih rendah.
                </td>
                <td>
                  Menerapkan metode pembelajaran berbasis proyek kecil, memberikan reward aktif
                  partisipasi, dan memperjelas timeline tugas.
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-outline-info" onclick="window.location.href='.php'">🔍 Grafik/Tabel</button>
                  <button class="btn btn-sm btn-outline-info" onclick="window.location.href='portfolio_cpmk_detail.php'">🔍 DetailPortfolio</button>
                </td>
              </tr>


              <!-- Lanjutkan hingga baris ke-20 sesuai data -->
            </tbody>
          </table>
        </div>

      </div>
    </div>
          
<!-- ========== CARD : rekap nilai CPMK ========== -->
<div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <button type="button" class="btn btn-info btn-block" onclick="window.location.href='nilai_cpmk_isi.php'">Penilaian CPMK Mhasiswa</button>

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
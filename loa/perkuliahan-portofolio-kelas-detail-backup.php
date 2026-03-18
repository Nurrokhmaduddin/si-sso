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
                        <td>Tri Nugroho Sulistyantoro, S.T., M.T. - (195110502) <i class="fas fa-star"></i></td> 
                      </tr>
                      <tr>
                        <td width="30%"><b></b></td>
                        <td>Hasan, ST, MT. - (198888502)</td>
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
                onclick="window.location.href='perkuliahan-portofolio-kelas.php'">
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
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail.php'"><a class="nav-link active">Portofolio</a></li>
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail4.php'"><a class="nav-link ">Soal Ujian</a></li>
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail2.php'"><a class="nav-link ">Penilaian Mahasiswa</a></li>
            <!-- <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail3.php'"><a class="nav-link ">Laporan(Grafik/Tabel)</a></li> -->
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail5.php'"><a class="nav-link ">Refleksi Kelas</a></li>
          </ul>


          
          <!-- ========== CARD : Portfolio========== --> 

          <div class="card">
            <div class="card-body">
              <table id="tbl" name="tbl" class="table table-sm table-hover table-bordered table-striped deta">
                  <tbody>
                    <tr>
                      <td><button type="button" class="btn btn-xs btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditData"><i class="fas fa-edit"></i></button> 
                        Dokumen RPS <span class="badge badge-success">Valid</span></td>
                        <td width="40%">
                          <a href="#" target="_blank" title="Unduh RPS">
                            <button type="button" class="btn btn-xs btn-success" ><i class="fas fa-file"></i> Download</button>
                          </a> <i>update_at</i>
                        </td>
                      </tr>
                      <tr>
                        <td><button type="button" class="btn btn-xs btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditData"><i class="fas fa-edit"></i></button>
                        Materi Pembelajaran (slides, modul, bahan ajar) </td>
                        <td width="40%">
                          <a href="#" target="_blank">
                            <button type="button" class="btn btn-xs btn-info"><i class="fas fa-link"></i> Download</button>
                          </a> <i>update_at</i>
                        </td>
                      </tr>
                      <tr>
                        <td><button type="button" class="btn btn-xs btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditData"><i class="fas fa-edit"></i></button>
                          Dokumen Penugasan Mahasiswa <span class="badge badge-secondary">Proses</span></td>
                          <td width="40%">
                            <a href="https://drive.google.com/drive/folders/1Ba6yZ2KLWZC992tVO7wxpcfxaOYb8Eyi?usp=drive_link" target="_blank">
                              <button type="button" class="btn btn-xs btn-info"><i class="fas fa-link"></i> Download</button>
                            </a> <i>updated 19 sep 2025</i>
                          </td>
                        </tr>
                        <!-- <tr>
                          <td><button type="button" class="btn btn-xs btn-primary" ><i class="fas fa-edit"></i></button>
                            Soal Ujian UTS/UAS <span class="badge badge-danger">Rejected</span> (dengan validasi prodi)</td>
                            <td width="40%">
                              <a href="https://drive.google.com/drive/folders/1Ba6yZ2KLWZC992tVO7wxpcfxaOYb8Eyi?usp=drive_link" target="_blank">
                                <button type="button" class="btn btn-xs btn-info"><i class="fas fa-link"></i> Download</button>
                              </a> <i>update_at</i>
                            </td>
                          </tr> -->
                          <tr>
                            <td><button type="button" class="btn btn-xs btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditData"><i class="fas fa-edit"></i></button>
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



<!-- ========== CARD : Catatan Evaluasi MK-Portfolio========== --> 
<div class="card">
  <div class="card-header">
    <h5>Catatan Evaluasi dan Perencanaan</h5>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No.</th>
            <th>Tahun Akademik</th>
            <th>Refleksi Dosen</th>
            <th>Analisis Kendala</th>
            <th>Rencana Perbaikan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>2025 - Gasal</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
            <td>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
            <td></td>
          </tr>
          <tr>
            <td>2</td>
            <td>2025 - Gasal</td>
            <td>Materi telah tersampaikan sesuai rencana pembelajaran, namun beberapa mahasiswa membutuhkan penjelasan tambahan pada topik tertentu. Partisipasi kelas cukup baik.</td>
            <td>-</td>
            <td>Menambahkan sesi konsultasi mingguan, menyediakan contoh studi kasus tambahan, serta memperbaiki alur penyampaian pada pertemuan awal.</td>
          </tr>
          <tr>
            <td>3</td>
            <td>2024 - Genap</td>
            <td>Ketercapaian materi berada pada kategori baik. Praktikum berjalan lancar meskipun ada beberapa kendala kecil terkait perangkat laboratorium.</td>
            <td>-</td>
            <td>Melakukan koordinasi dengan laboran, memperbarui panduan praktikum, dan menambah materi pemantapan untuk pertemuan terakhir.</td>
          </tr>
          <tr>
            <td>4</td>
            <td>2024 - Gasal</td>
            <td>Interaksi kelas masih perlu ditingkatkan. Sebagian mahasiswa kurang aktif berdiskusi dan ketepatan waktu pengumpulan tugas masih rendah.</td>
            <td>-</td>
            <td>Menerapkan metode pembelajaran berbasis proyek kecil, memberikan reward aktif partisipasi, dan memperjelas timeline tugas.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- ========== CARD : Catatan Evaluasi MK-Portfolio========== --> 
        
        <div class="card">
          <div class="card-header ">         
            <h5 class="card-title mb-0">
              <button class="btn btn-sm btn-outline-info" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL2">
                <i class="fas fa-expand"></i>
              </button>
              Catatan Evaluasi dan Perencanaan 
            </h5>
          </div>

          <div class="card-body">
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
<!-- ================= Card  : Catatan evaluasi dan pengembangan) ============== -->
          <div class="row mb-4">
            <div class="col-12">
              <h4 class="mb-1">Catatan Evaluasi dan Perencanaan</h4>
              <small class="text-muted">
                Kolom kiri menampilkan catatan <strong>Periode A</strong> (arsip/sebelumnya).  
                Kolom kanan digunakan untuk mengisi dan menyimpan catatan <strong>Periode B</strong>.
              </small>
            </div>
          </div>


          <!-- ROW 1 : EVALUASI  -->
          <div class="row mb-4">

            <!-- KIRI : Periode A -->
            <div class="col-lg-6">
              <div class="card h-100 shadow-sm">
                <div class="card-header bg-secondary text-white">
                  <h5 class="mb-0">
                    <i class="fas fa-clipboard-list me-2"></i>
                    Evaluasi Hasil Pembelajaran
                  </h5>
                  <small>Periode A</small>
                </div>
                <div class="card-body">
                  <p class="mb-0">
                    secara keseluruhan pembelajaran telah berjalan dengan baik
                  </p>
                </div>
              </div>
            </div>


            <!-- KANAN : Periode B -->
            <div class="col-lg-6">
              <div class="card h-100 shadow-sm border-primary">
                <div class="card-header bg-primary text-white">
                  <h5 class="mb-0">
                    <i class="fas fa-edit me-2"></i>
                    Evaluasi Hasil Pembelajaran
                  </h5>
                  <small>Periode B</small>
                </div>

                <form action="https://loa.simtekim-uii.id/loa/portofolio_cpmk/edit_evaluasi_hasil"
                method="POST">
                <input type="hidden" name="id" value="4100">

                <div class="card-body">
                  <textarea class="form-control"
                  name="evaluasi_hasil"
                  placeholder="Tuliskan evaluasi periode B..."
                  style="min-height:200px;"></textarea>
                </div>

                <div class="card-footer bg-white">
                  <button type="submit" class="btn btn-primary w-100">
                    <i class="fas fa-save me-1"></i> Simpan Evaluasi Periode B
                  </button>
                </div>
              </form>

            </div>
          </div>
          </div>
          <!--  ROW 2 : RENCANA  -->
          <div class="row mb-4">

            <!-- KIRI : Periode A -->
            <div class="col-lg-6">
              <div class="card h-100 shadow-sm">
                <div class="card-header bg-secondary text-white">
                  <h5 class="mb-0">
                    <i class="fas fa-chart-line me-2"></i>
                    Rencana Pengembangan Perkuliahan
                  </h5>
                  <small>Periode A</small>
                </div>
                <div class="card-body">
                  <p class="mb-0">
                    perlu meningkatkan interaksi
                  </p>
                </div>
              </div>
            </div>


            <!-- KANAN : Periode B -->
            <div class="col-lg-6">
              <div class="card h-100 shadow-sm border-primary">
                <div class="card-header bg-primary text-white">
                  <h5 class="mb-0">
                    <i class="fas fa-edit me-2"></i>
                    Rencana Pengembangan Perkuliahan
                  </h5>
                  <small>Periode B</small>
                </div>

                <form action="https://loa.simtekim-uii.id/loa/portofolio_cpmk/edit_rencana_pengembangan"
                method="POST">
                <input type="hidden" name="id" value="4100">

                <div class="card-body">
                  <textarea class="form-control"
                  name="rencana_pengembangan"
                  placeholder="Tuliskan rencana periode B..."
                  style="min-height:200px;"></textarea>
                </div>

                <div class="card-footer bg-white">
                  <button type="submit" class="btn btn-primary w-100">
                    <i class="fas fa-save me-1"></i> Simpan Rencana Periode B
                  </button>
                </div>
              </form>

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
          yang input hanya koordinaor dosen pengampu, selain itu hanya view.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit Data -->
<div class="modal fade" id="modalEditData" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content border-0 shadow">

      <!-- Header -->
      <div class="modal-header bg-light">
        <h5 class="modal-title fw-semibold">
          <i class="fas fa-plus-circle text-primary me-2"></i>
          Input Portofolio (nama dokumen)
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Body -->
      <div class="modal-body">
        <form id="formTambahSoal">

          <!-- Pilih Tipe -->
          <div class="mb-3">
            <label class="form-label d-block">Tipe Lampiran</label>
            
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="tipeSoal" id="pilihFile" value="file" checked>
              <label class="form-check-label" for="pilihFile">Upload File</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="tipeSoal" id="pilihLink" value="link">
              <label class="form-check-label" for="pilihLink">Input Link</label>
            </div>
          </div>

          <!-- Input File -->
          <div class="mb-3" id="inputFileWrapper">
            <label class="form-label">Upload File Soal</label>
            <input type="file" class="form-control">
            <small class="text-muted">Format: PDF / DOC / DOCX</small>
          </div>

          <!-- Input Link -->
          <div class="mb-3 d-none" id="inputLinkWrapper">
            <label class="form-label">Link Soal</label>
            <input type="url" class="form-control" placeholder="https://...">
          </div>

        </form>
      </div>

      <!-- Footer -->
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Batal
        </button>
        <button type="submit" class="btn btn-primary" form="formTambahSoal">
          <i class="fas fa-save me-1"></i> Simpan
        </button>
      </div>

    </div>
  </div>
</div>
<?php include('5script.php'); ?>
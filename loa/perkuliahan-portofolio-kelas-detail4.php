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
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button>
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
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail.php'"><a class="nav-link ">Portofolio</a></li>
            <!-- <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail4.php'"><a class="nav-link active">Soal Ujian</a></li> -->
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail2.php'"><a class="nav-link ">Penilaian Mahasiswa</a></li>
            <!-- <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail3.php'"><a class="nav-link ">Laporan(Grafik/Tabel)</a></li> -->
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail5.php'"><a class="nav-link ">Refleksi Kelas</a></li>
          </ul>


      <!--     <td><button type="button" class="btn btn-xs btn-primary" ><i class="fas fa-edit"></i></button>
                            Soal Ujian UTS/UAS <span class="badge badge-danger">Rejected</span> (dengan validasi prodi)</td>
                            <td width="40%">
                              <a href="https://drive.google.com/drive/folders/1Ba6yZ2KLWZC992tVO7wxpcfxaOYb8Eyi?usp=drive_link" target="_blank">
                                <button type="button" class="btn btn-xs btn-info"><i class="fas fa-link"></i> Download</button>
                              </a> <i>update_at</i>
                            </td> -->
          <!-- ========== CARD : soal ujian========== --> 
<div class="card">
  <!-- <div class="card-header">
    <h5 class="mb-0">Daftar Soal Ujian</h5>
  </div> -->
  <div class="card-body">

    <div class="table-responsive">
      <table class="table table-sm table-hover table-bordered table-striped deta">
        <thead>
          <tr class="text-uppercase">
            <th width="50">No</th>
            <th width="150">Tanggal Ujian</th>
            <th>Keterangan</th>
            <th width="100" class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>1</td>
            <td>10 Maret 2025</td>
            <td>Ujian Tengah Semester - Mekanika Tanah. UTS Semester Genap 2024/2025</td>
            <td class="text-center"><button class="btn btn-sm btn-outline-success">
                <i class="fas fa-download"></i>
              </button>
              <button class="btn btn-sm btn-outline-danger">
                <i class="fas fa-trash"></i>
              </button>
            </td>
          </tr>

          <tr>
            <td>2</td>
            <td>25 Juni 2025</td>
            <td>Ujian Akhir Semester - Struktur Beton. UAS Semester Genap 2024/2025</td>
            <td class="text-center"><button class="btn btn-sm btn-outline-info">
                <i class="fas fa-paperclip"></i>
              </button>
              <button class="btn btn-sm btn-outline-danger">
                <i class="fas fa-trash"></i>
              </button>
            </td>
          </tr>

          <tr>
            <td>3</td>
            <td>5 April 2025</td>
            <td>Kuis 1 - Geoteknik. Evaluasi Bab 1 dan 2</td>
            <td class="text-center"><button class="btn btn-sm btn-outline-success">
                <i class="fas fa-download"></i>
              </button>
              <button class="btn btn-sm btn-outline-danger">
                <i class="fas fa-trash"></i>
              </button>
            </td>
          </tr>

          <tr>
            <td>4</td>
            <td>20 April 2025</td>
            <td>Kuis 2 - Analisis Struktur. Evaluasi Bab 3 dan 4</td>
            <td class="text-center"><button class="btn btn-sm btn-outline-success">
                <i class="fas fa-download"></i>
              </button>
              <button class="btn btn-sm btn-outline-danger">
                <i class="fas fa-trash"></i>
              </button>
            </td>
          </tr>

          <tr>
            <td>5</td>
            <td>30 Maret 2025</td>
            <td>Remedial UTS - Mekanika Tanah. Khusus mahasiswa yang belum tuntas</td>
            <td class="text-center"><button class="btn btn-sm btn-outline-success">
                <i class="fas fa-download"></i>
              </button>
              <button class="btn btn-sm btn-outline-danger">
                <i class="fas fa-trash"></i>
              </button>
            </td>
          </tr>

        </tbody>
      </table>
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


<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content border-0 shadow">

      <!-- Header -->
      <div class="modal-header bg-light">
        <h5 class="modal-title fw-semibold">
          <i class="fas fa-plus-circle text-primary me-2"></i>
          Tambah Soal Ujian
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Body -->
      <div class="modal-body">
        <form id="formTambahSoal">

          <!-- Tanggal Ujian -->
          <div class="mb-3">
            <label class="form-label">Tanggal Ujian</label>
            <input type="date" class="form-control" required>
          </div>

          <!-- Keterangan -->
          <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea class="form-control" rows="3" placeholder="Masukkan keterangan ujian..." required></textarea>
          </div>

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
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
                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
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
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail.php'"><a class="nav-link ">Portofolio</a></li>
            <!-- <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail4.php'"><a class="nav-link ">Soal Ujian</a></li> -->
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail2.php'"><a class="nav-link ">Penilaian Mahasiswa</a></li>
            <!-- <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail3.php'"><a class="nav-link ">Laporan(Grafik/Tabel)</a></li> -->
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail5.php'"><a class="nav-link active">Refleksi Dosen</a></li>
          </ul>


<!-- card-card refleksi -->
<!-- Satu card besar -->
<div class="card card-info">
  <div class="card-header">
    <h5 class="mb-0">
      Refleksi Penyelenggaraan Kelas
    </h5>
    <small class="text-light">
      Mendokumentasikan kondisi pelaksanaan pembelajaran pada kelas ini sebagai bahan evaluasi penyelenggaraan.
    </small>
  </div>
  <div class="card-body">
    <div class="alert alert-light border">
      <strong>Tujuan Refleksi</strong>
      <div class="small mt-2">
        Fokuskan jawaban pada proses pembelajaran yang terjadi selama perkuliahan, seperti dinamika kelas, partisipasi mahasiswa, pelaksanaan asesmen, metode pembelajaran, fasilitas, maupun hambatan yang memengaruhi penyelenggaraan kelas.
        <br><br>
        <strong>Tidak perlu memberikan usulan perubahan kurikulum atau rencana perbaikan pribadi.</strong>
      </div>
    </div>

    <!-- ============================= -->
    <!-- Refleksi Penyelenggaraan Kelas -->
    <!-- ============================= -->

    <div class="mb-4">

      <!-- Q1 -->
      <div class="mb-4">
        <h6>
          1. Bagaimana keterlaksanaan pembelajaran sesuai RPS pada kelas ini?
        </h6>
        <div class="btn-group mt-2" role="group">
          <input type="radio" class="btn-check" name="q1" id="q1a">
          <label class="btn btn-outline-success" for="q1a">Sangat Sesuai</label>
          <input type="radio" class="btn-check" name="q1" id="q1b">
          <label class="btn btn-outline-success" for="q1b">Sesuai</label>
          <input type="radio" class="btn-check" name="q1" id="q1c">
          <label class="btn btn-outline-warning" for="q1c">Sebagian</label>
          <input type="radio" class="btn-check" name="q1" id="q1d">
          <label class="btn btn-outline-danger" for="q1d">Kurang Sesuai</label>
        </div>
      </div>


      <!-- Q2 -->
      <div class="mb-4">
        <h6>
          2. Faktor apa yang paling mempengaruhi jalannya pembelajaran pada kelas ini?
        </h6>
        <div class="mt-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">Partisipasi mahasiswa</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">Kesiapan mahasiswa</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">Metode pembelajaran</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">Media pembelajaran</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">Alokasi waktu</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">Fasilitas pembelajaran</label>
          </div>
        </div>
      </div>


      <!-- Q3 -->
      <div class="mb-4">
        <h6>
          3. Secara umum, bagaimana tingkat partisipasi mahasiswa selama pembelajaran?
        </h6>
        <select class="form-select mt-2">
          <option>-- Pilih --</option>
          <option>Sangat Aktif</option>
          <option>Aktif</option>
          <option>Cukup Aktif</option>
          <option>Kurang Aktif</option>
        </select>
      </div>


      <!-- Q4 -->
      <div class="mb-4">
        <h6>
          4. Praktik pembelajaran apa yang menurut Anda paling efektif pada kelas ini?
        </h6>
        <textarea class="form-control mt-2"
        rows="4"
        placeholder="Contoh: Praktikum setiap pertemuan membuat mahasiswa lebih cepat memahami implementasi konsep dibandingkan ceramah penuh."></textarea>
      </div>


      <!-- Q5 -->
      <div>
        <h6>
          5. Catatan lain mengenai penyelenggaraan kelas (opsional)
        </h6>
        <textarea class="form-control mt-2"
        rows="3"
        placeholder="Tuliskan apabila terdapat kondisi khusus yang belum tercakup pada pertanyaan sebelumnya."></textarea>
      </div>

    </div>

  </div>
  <div class="card-footer">
    <button class="btn btn-outline-primary">Simpan Catatan & Evaluasi</button>
  </div>
</div>


<div class="card card-warning">
  <div class="card-header">
    <h5 class="mb-0">
      Masukan Strategis untuk Program Studi
    </h5>
    <small class="text-dark">
      Memberikan masukan bagi Program Studi dalam melakukan Continuous Quality Improvement (CQI) terhadap kurikulum, mata kuliah, maupun penyelenggaraan akademik.
    </small>
  </div>
  <div class="card-body">
    <div class="alert alert-light border">
      <strong>Tujuan Refleksi</strong>
      <div class="small mt-2">
        Fokuskan jawaban pada hal-hal yang menurut Anda perlu menjadi perhatian Program Studi, seperti struktur kurikulum, CPMK, CPL, prasyarat mata kuliah, laboratorium, referensi, perangkat pembelajaran, maupun kebijakan akademik.
        <br><br>
        <strong>Tidak perlu menjelaskan kembali proses pembelajaran di kelas maupun rencana perbaikan pribadi.</strong>
      </div>
    </div>

    <!-- ============================= -->
    <!-- Masukan Strategis Program Studi -->
    <!-- ============================= -->

    <div class="mb-4">

      <!-- Q1 -->
      <div class="mb-4">
        <h6>
          1. Menurut Anda, apakah capaian pembelajaran (CPMK) pada mata kuliah ini sudah realistis untuk dicapai mahasiswa?
        </h6>
        <select class="form-select mt-2">
          <option>-- Pilih --</option>
          <option>Sangat Realistis</option>
          <option>Realistis</option>
          <option>Cukup Realistis</option>
          <option>Kurang Realistis</option>
        </select>
      </div>

      <!-- Q2 -->
      <div class="mb-4">
        <h6>
          2. Aspek apa yang menurut Anda perlu menjadi perhatian Program Studi?
        </h6>
        <div class="mt-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">Kurikulum</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">Urutan Mata Kuliah</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">Mata Kuliah Prasyarat</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">Laboratorium</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">Perangkat Lunak</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">Referensi Pembelajaran</label>
          </div>
        </div>
      </div>


      <!-- Q3 -->
      <div class="mb-4">
        <h6>
          3. Seberapa besar kebutuhan perbaikan terhadap aspek yang dipilih?
        </h6>
        <div class="btn-group mt-2">
          <input type="radio" class="btn-check" name="priority" id="p1">
          <label class="btn btn-outline-success" for="p1">Rendah</label>
          <input type="radio" class="btn-check" name="priority" id="p2">
          <label class="btn btn-outline-warning" for="p2">Sedang</label>
          <input type="radio" class="btn-check" name="priority" id="p3">
          <label class="btn btn-outline-danger" for="p3">Tinggi</label>
        </div>
      </div>


      <!-- Q4 -->
      <div class="mb-4">
        <h6>
          4. Jelaskan masukan atau rekomendasi yang ingin Anda sampaikan kepada Program Studi.
        </h6>
        <textarea class="form-control mt-2"
        rows="4"
        placeholder="Contoh: Materi Basis Data sebaiknya dipindahkan sebelum mata kuliah Pemrograman Web agar mahasiswa memiliki bekal yang lebih memadai."></textarea>
      </div>


      <!-- Q5 -->
      <div>
        <h6>
          5. Masukan tambahan untuk pengembangan Program Studi (opsional)
        </h6>
        <textarea class="form-control mt-2"
        rows="3"
        placeholder="Tuliskan apabila terdapat usulan lain yang belum tercakup pada pertanyaan sebelumnya."></textarea>
      </div>
    </div>

  </div>
  <div class="card-footer">
    <button class="btn btn-outline-primary">Kirim Masukan & Insight</button>
  </div>
</div>



  

<!-- Satu card besar -->
<div class="card card-secondary">
  <div class="card-header "> 
    <h5>Jurnal Refleksi CQI Pengajaran Mata Kuliah (Personal)<br></h5>
    <small>Deskripsi: Catatan refleksi ini bersifat pribadi dan hanya dapat diakses oleh Anda. Tujuannya adalah membantu mengevaluasi proses pembelajaran serta menjadi referensi dalam meningkatkan kualitas penyelenggaraan mata kuliah pada semester berikutnya. </small> pengisian text area bisa seperti rich text sehingga bisa bullet poin.
  </div>
  <div class="card-body">

    <!-- Q1 -->
    <h5>Q1. Menurut Anda, praktik pembelajaran apa yang <b>paling efektif</b> membantu pencapaian CPMK/CPL pada mata kuliah ini? <small class="text-muted"></small></h5>
    <textarea class="form-control mb-3" rows="6" placeholder="Tuliskan metode, strategi, media, aktivitas pembelajaran, atau bentuk asesmen yang menurut Anda paling efektif. Fokuskan pada hal-hal yang benar-benar membantu mahasiswa memahami materi atau mencapai CPMK/CPL.
    Contoh:
    • Studi kasus nyata membuat mahasiswa lebih mudah memahami konsep.
    • Praktikum setiap pertemuan meningkatkan kemampuan implementasi.
    • Diskusi kelompok membantu mahasiswa lebih aktif dalam menganalisis permasalahan."></textarea>

    <!-- Q2 -->
    <h5>Q2. Menurut Anda, faktor apa yang <b>paling menghambat</b> atau memengaruhi ketercapaian CPMK/CPL pada mata kuliah ini? <small class="text-muted"></small></h5>
    <textarea class="form-control mb-3" rows="6" placeholder="Jelaskan faktor yang menurut Anda paling berpengaruh terhadap proses pembelajaran maupun hasil belajar mahasiswa. Faktor dapat berasal dari mahasiswa, materi, metode pembelajaran, media, asesmen, alokasi waktu, maupun faktor lainnya.
    Contoh:
    • Mahasiswa belum menguasai materi prasyarat sehingga kesulitan mengikuti praktikum.
    • Waktu praktikum kurang untuk menyelesaikan studi kasus.
    • Rubrik penilaian perlu dibuat lebih jelas agar ekspektasi mahasiswa lebih terarah."></textarea>

    <!-- Q3 -->
    <h5>Q3. Berdasarkan pengalaman pada semester ini, apa <b>tindakan perbaikan</b> (maksimal 3) yang akan Anda terapkan pada penyelenggaraan mata kuliah berikutnya? <small class="text-muted"></small></h5>
    <textarea class="form-control mb-3" rows="6" placeholder="Tuliskan rencana perbaikan yang konkret dan realistis untuk meningkatkan proses pembelajaran atau ketercapaian CPMK/CPL pada penyelenggaraan berikutnya.
    Contoh:
    • Menambahkan pre-test pada awal perkuliahan.
    • Mengurangi porsi ceramah dan memperbanyak diskusi studi kasus.
    • Menyusun ulang urutan materi agar konsep dasar dipahami lebih dahulu."></textarea>

  </div>
  <div class="card-footer">
    <button class="btn btn-outline-primary">Simpan Catatan Refleksi</button>
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
          
            Flow mental dosen:<br>

            “Di kelas tadi terjadi apa ya?”
            👉 isi Catatan Kelas<br>

            “Ini kayaknya perlu disampaikan ke prodi”
            👉 isi Insight Prodi<br>

            “Kalau saya ngajar lagi, harusnya gimana ya?”
            👉 isi Catatan Pribadi

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
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
   <div class="card">
    <div class="card-header bg-primary text-white">
      <h5>Catatan & Evaluasi Kelas (utama & wajib diisi - Kolaboratif)<br></h5>
    <small>Deskripsi: Formulir ini mencatat evaluasi satu kelas yang Anda ampu. Hasil isian dibagikan ke seluruh tim pengampu satu kelas dan direkap untuk prodi.</small>
    </div>
    <div class="card-body">

      <!-- 1️⃣ Select Pertanyaan: Capaian CPMK -->
      <h5>1. Apakah capaian CPMK pada kelas ini tercapai? <small class="text-muted">(Wajib)</small></h5>
      <select class="form-select mb-3" name="cpmk_tercapai">
        <option value="" selected disabled>Pilih status capaian CPMK</option>
        <option value="Tercapai Kuat">Tercapai Kuat</option>
        <option value="Tercapai Minimal">Tercapai Minimal</option>
        <option value="Tidak Tercapai">Tidak Tercapai</option>
      </select>

      <!-- 2️⃣ Select Pertanyaan: Tingkat Partisipasi Mahasiswa -->
      <h5>2. Bagaimana tingkat partisipasi mahasiswa dalam kelas? <small class="text-muted">(Wajib)</small></h5>
      <select class="form-select mb-3" name="partisipasi_mahasiswa">
        <option value="" selected disabled>Pilih tingkat partisipasi</option>
        <option value="Sangat Aktif">Sangat Aktif</option>
        <option value="Cukup Aktif">Cukup Aktif</option>
        <option value="Kurang Aktif">Kurang Aktif</option>
        <option value="Pasif">Pasif</option>
      </select>

      <hr>

      <!-- 3️⃣ Scale Pertanyaan: Efektivitas Metode -->
      <h5>3. Seberapa efektif metode pengajaran yang digunakan? <small class="text-muted">(1 = Tidak Efektif, 5 = Sangat Efektif)</small></h5>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="efektivitas_metode" id="scale_metode_1" value="1">
        <label class="form-check-label" for="scale_metode_1">1</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="efektivitas_metode" id="scale_metode_2" value="2">
        <label class="form-check-label" for="scale_metode_2">2</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="efektivitas_metode" id="scale_metode_3" value="3">
        <label class="form-check-label" for="scale_metode_3">3</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="efektivitas_metode" id="scale_metode_4" value="4">
        <label class="form-check-label" for="scale_metode_4">4</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="efektivitas_metode" id="scale_metode_5" value="5">
        <label class="form-check-label" for="scale_metode_5">5</label>
      </div>
      <hr>

      <!-- 4️⃣ Scale Pertanyaan: Kesesuaian Penilaian -->
      <h5>4. Seberapa sesuai penilaian dengan kemampuan mahasiswa? <small class="text-muted">(1 = Tidak Sesuai, 5 = Sangat Sesuai)</small></h5>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="kesesuaian_penilaian" id="scale_penilaian_1" value="1">
        <label class="form-check-label" for="scale_penilaian_1">1</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="kesesuaian_penilaian" id="scale_penilaian_2" value="2">
        <label class="form-check-label" for="scale_penilaian_2">2</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="kesesuaian_penilaian" id="scale_penilaian_3" value="3">
        <label class="form-check-label" for="scale_penilaian_3">3</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="kesesuaian_penilaian" id="scale_penilaian_4" value="4">
        <label class="form-check-label" for="scale_penilaian_4">4</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="kesesuaian_penilaian" id="scale_penilaian_5" value="5">
        <label class="form-check-label" for="scale_penilaian_5">5</label>
      </div>

      <hr>

      <!-- 5️⃣ Tagging Pertanyaan: Kendala Utama -->
      <h5>5. Kendala utama selama perkuliahan <small class="text-muted">(Pilih semua yang relevan)</small></h5>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Koneksi Internet" id="kendala1">
        <label class="form-check-label" for="kendala1">Koneksi Internet</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Partisipasi Rendah" id="kendala2">
        <label class="form-check-label" for="kendala2">Partisipasi Rendah</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Materi Kompleks" id="kendala3">
        <label class="form-check-label" for="kendala3">Materi Kompleks</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Waktu Terbatas" id="kendala4">
        <label class="form-check-label" for="kendala4">Waktu Terbatas</label>
      </div>

      <!-- 6️⃣ Tagging Pertanyaan: Metode Paling Efektif -->
      <h5>6. Metode pengajaran yang paling efektif <small class="text-muted">(Pilih semua yang relevan)</small></h5>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Diskusi" id="metode1">
        <label class="form-check-label" for="metode1">Diskusi</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Praktikum" id="metode2">
        <label class="form-check-label" for="metode2">Praktikum</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Studi Kasus" id="metode3">
        <label class="form-check-label" for="metode3">Studi Kasus</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Project Based Learning" id="metode4">
        <label class="form-check-label" for="metode4">Project Based Learning</label>
      </div>

      <hr>

      <!-- 7️⃣ Open Text Pertanyaan: Catatan Dinamika Kelas -->
      <h5>7. Catatan dinamika kelas <small class="text-muted">(Wajib)</small></h5>
      <textarea class="form-control mb-3" rows="4" placeholder="Tuliskan kondisi nyata di kelas, interaksi mahasiswa, dan hal-hal penting yang terjadi selama perkuliahan."></textarea>

      <!-- 8️⃣ Open Text Pertanyaan: Rekomendasi Perbaikan -->
      <h5>8. Rekomendasi perbaikan <small class="text-muted">(Wajib)</small></h5>
      <textarea class="form-control mb-3" rows="4" placeholder="Tuliskan saran perbaikan metode, kegiatan, atau strategi untuk meningkatkan kualitas pembelajaran."></textarea>

    </div>
    <div class="card-footer">
      <button class="btn btn-primary">Simpan Catatan & Evaluasi</button>
    </div>
  </div> 

<!-- Satu card besar -->
<div class="card">
  <div class="card-header bg-warning text-white">
    <h5>Masukan & Insight untuk Prodi (lanjutan dari kelas - Strategis)<br></h5>
    <small>Deskripsi: Formulir ini mencatat masukan, insight, dan rekomendasi dosen pada mata kuliah ini kepada program studi untuk evaluasi dan pengambilan keputusan</small>
  </div>
  <div class="card-body">


    <!-- 1️⃣ Kesiapan Mahasiswa -->
    <h5>Kesiapan Mahasiswa</h5>
    <select class="form-select mb-3" name="kesiapan_mahasiswa">
      <option value="" selected disabled>Pilih Kesiapan Mahasiswa</option>
      <option value="Cukup">Cukup</option>
      <option value="Kurang">Kurang</option>
      <option value="Sangat Lemah">Sangat Lemah</option>
    </select>

    <hr>

    <!-- 4️⃣ CPMK Tercapai -->
    <h5>CPMK Tercapai</h5>
    <select class="form-select mb-3" name="cpmk">
      <option value="" selected disabled>Pilih Status CPMK</option>
      <option value="Tercapai Kuat">Tercapai Kuat</option>
      <option value="Tercapai Minimal">Tercapai Minimal</option>
      <option value="Tidak Tercapai">Tidak Tercapai</option>
    </select>

    <hr>
    <!-- 1️⃣ Scale Pertanyaan: Kesiapan Mahasiswa -->
    <h5>1. Kesiapan Mahasiswa</h5>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="scale_kesiapan" id="scale1_1" value="1">
      <label class="form-check-label" for="scale1_1">1</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="scale_kesiapan" id="scale1_2" value="2">
      <label class="form-check-label" for="scale1_2">2</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="scale_kesiapan" id="scale1_3" value="3">
      <label class="form-check-label" for="scale1_3">3</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="scale_kesiapan" id="scale1_4" value="4">
      <label class="form-check-label" for="scale1_4">4</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="scale_kesiapan" id="scale1_5" value="5">
      <label class="form-check-label" for="scale1_5">5</label>
    </div>
    <div class="scale-labels">
      <span>Sangat Lemah</span>
      <span>-----</span>
      <span>Sangat Kuat</span>
    </div>
    <hr>
    <!-- 2️⃣ Scale Pertanyaan: Efektivitas Metode Pembelajaran -->
    <h5>2. Efektivitas Metode Pembelajaran</h5>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="scale_metode" id="scale2_1" value="1">
      <label class="form-check-label" for="scale2_1">1</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="scale_metode" id="scale2_2" value="2">
      <label class="form-check-label" for="scale2_2">2</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="scale_metode" id="scale2_3" value="3">
      <label class="form-check-label" for="scale2_3">3</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="scale_metode" id="scale2_4" value="4">
      <label class="form-check-label" for="scale2_4">4</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="scale_metode" id="scale2_5" value="5">
      <label class="form-check-label" for="scale2_5">5</label>
    </div>
    <div class="scale-labels">
      <span>Sangat Tidak Efektif</span>
      <span>-----</span>
      <span>Sangat Efektif</span>
    </div>
    <hr>
    <!-- 2️⃣ Kesesuaian Kurikulum -->
    <h5>Kesesuaian Kurikulum</h5>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Gap Materi" id="kurikulum1">
      <label class="form-check-label" for="kurikulum1">Gap Materi</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Tumpang Tindih" id="kurikulum2">
      <label class="form-check-label" for="kurikulum2">Tumpang Tindih Materi</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="CPMK Ambisius" id="kurikulum3">
      <label class="form-check-label" for="kurikulum3">CPMK Terlalu Ambisius</label>
    </div>
    <textarea class="form-control mt-2" rows="2" placeholder="Catatan tambahan terkait kurikulum..."></textarea>

    <hr>

    <!-- 3️⃣ Efektivitas Metode Pembelajaran -->
    <h5>Efektivitas Metode Pembelajaran</h5>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Ceramah Tidak Cukup" id="metode1">
      <label class="form-check-label" for="metode1">Ceramah Tidak Cukup</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Diskusi Efektif" id="metode2">
      <label class="form-check-label" for="metode2">Diskusi Efektif</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Studi Kasus Efektif" id="metode3">
      <label class="form-check-label" for="metode3">Studi Kasus Efektif</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Praktikum Menguatkan CPMK" id="metode4">
      <label class="form-check-label" for="metode4">Praktikum Menguatkan CPMK</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="Project Based Learning Efektif" id="metode5">
      <label class="form-check-label" for="metode5">Project Based Learning Efektif</label>
    </div>
    <textarea class="form-control mt-2" rows="2" placeholder="Catatan tambahan terkait metode pembelajaran..."></textarea>
    <hr>

    <!-- 6️⃣ Refleksi Mahasiswa -->
    <h5>Insight Evaluasi</h5>
    <textarea class="form-control mb-2" rows="2" placeholder="Apa yang sudah baik dan Apa kendala umum..."></textarea>
    <hr>
    <!-- 7️⃣ Rekomendasi & Action Plan -->
    <h5>Rekomendasi & Action Plan</h5>
    <textarea class="form-control mb-2" rows="2" placeholder="Hal yang diubah jika diajar ulang..."></textarea>
    <textarea class="form-control mb-2" rows="2" placeholder="Perubahan kecil semester depan..."></textarea>
    <textarea class="form-control mb-2" rows="2" placeholder="Pengadaan / alat / bahan yang dapat meningkatkan CPMK..."></textarea>
    <textarea class="form-control mb-2" rows="2" placeholder="Rekomendasi kurikulum / sistem..."></textarea>
    <textarea class="form-control" rows="2" placeholder="Rekomendasi pedagogis..."></textarea>

  </div>
  <div class="card-footer">
    <button class="btn btn-primary">Kirim Masukan & Insight</button>
  </div>
</div>

  

<!-- Satu card besar -->
<div class="card">
  <div class="card-header ">
    <h5>Jurnal CQI Pengajaran Mata Kuliah (Refleksi Dosen - Personal)<br></h5>
    <small>Deskripsi: Catatan ini hanya dapat diakses oleh Anda dan bertujuan membantu persiapan pengajaran yang lebih baik di semester berikutnya di mata kuliah ini.</small>
  </div>
  <div class="card-body">

    <!-- Q1 -->
    <h5>Q1. Apa yang berjalan baik dalam perkuliahan ini? <small class="text-muted">(Opsional)</small></h5>
    <textarea class="form-control mb-3" rows="4" placeholder="Jelaskan metode, strategi, atau pendekatan yang menurut Anda efektif. Contoh: Praktikum langsung membuat mahasiswa lebih cepat memahami konsep."></textarea>

    <!-- Q2 -->
    <h5>Q2. Apa kendala atau hal yang kurang efektif? <small class="text-muted">(Opsional)</small></h5>
    <textarea class="form-control mb-3" rows="4" placeholder="Sebutkan hambatan, kesulitan, atau hal yang tidak berjalan efektif. Contoh: Penjelasan teori terlalu panjang sehingga mahasiswa kurang fokus."></textarea>

    <!-- Q3 -->
    <h5>Q3. Apa 1–3 perubahan utama yang akan Anda lakukan pada perkuliahan berikutnya? <small class="text-muted">(Opsional)</small></h5>
    <textarea class="form-control mb-3" rows="4" placeholder="Tuliskan rencana perbaikan konkret untuk pertemuan atau semester berikutnya. Contoh: Mengurangi teori dan menambah sesi praktik di awal pertemuan."></textarea>

  </div>
  <div class="card-footer">
    <button class="btn btn-primary">Simpan Jurnal CQI</button>
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
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
            <li class="nav-item" onclick="window.location='progres-kelas-semester-detail.php'"><a class="nav-link ">Progres(Grafik/Tabel)</a></li>
            <!-- <li class="nav-item" onclick="window.location='monev_portfolio_cpmk_detail2.php'"><a class="nav-link ">Mahasiswa</a></li>
            <li class="nav-item" onclick="window.location='monev_portfolio_cpmk_detail3.php'"><a class="nav-link ">Portofolio</a></li> -->
            <li class="nav-item" onclick="window.location='progres-kelas-semester-detail4.php'"><a class="nav-link active">Pengembangan</a></li>
          </ul>

        
          <!-- ========== CARD 3: Tabel saja ========== -->
          <div class="card shadow-sm">
            <div class="card-body">
              <div class="table-responsive">
                <table id="tbl" class="table table-sm table-bordered table-hover align-middle mb-0">
                  <thead class="table-dark text-center">
                    <tr>
                      <th>Lampiran</th>
                      <th>Periode A</th>
                      <th>Periode B</th>
                    </tr>
                  </thead>

                  <tbody>

                    <tr>
                      <td>
                        Dokumen RPS 
                        <span class="badge bg-success">Valid</span>
                      </td>
                      <td>
                        <a href="#" target="_blank" title="Unduh RPS">
                          <button type="button" class="btn btn-xs btn-success">
                            <i class="fas fa-file me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>update_at</i></small>
                      </td>
                      <td>
                        <a href="#" target="_blank" title="Unduh RPS">
                          <button type="button" class="btn btn-xs btn-success">
                            <i class="fas fa-file me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>update_at</i></small>
                      </td>
                    </tr>

                    <tr>
                      <td>Materi Pembelajaran (slides, modul, bahan ajar)</td>
                      <td>
                        <a href="#" target="_blank">
                          <button type="button" class="btn btn-xs btn-info">
                            <i class="fas fa-link me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>update_at</i></small>
                      </td>
                      <td>
                        <a href="#" target="_blank">
                          <button type="button" class="btn btn-xs btn-info">
                            <i class="fas fa-link me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>update_at</i></small>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Dokumen Penugasan Mahasiswa 
                        <span class="badge bg-secondary">Proses</span>
                      </td>
                      <td>
                        <a href="https://drive.google.com/drive/folders/1Ba6yZ2KLWZC992tVO7wxpcfxaOYb8Eyi?usp=drive_link" target="_blank">
                          <button type="button" class="btn btn-xs btn-info">
                            <i class="fas fa-link me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>updated 19 Sep 2025</i></small>
                      </td>
                      <td>
                        <a href="https://drive.google.com/drive/folders/1Ba6yZ2KLWZC992tVO7wxpcfxaOYb8Eyi?usp=drive_link" target="_blank">
                          <button type="button" class="btn btn-xs btn-info">
                            <i class="fas fa-link me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>updated 19 Sep 2025</i></small>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Soal Ujian UTS/UAS 
                        <span class="badge bg-danger">Rejected</span>
                        <small class="text-muted ms-1">(dengan validasi prodi)</small>
                      </td>
                      <td>
                        <a href="https://drive.google.com/drive/folders/1Ba6yZ2KLWZC992tVO7wxpcfxaOYb8Eyi?usp=drive_link" target="_blank">
                          <button type="button" class="btn btn-xs btn-info">
                            <i class="fas fa-link me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>update_at</i></small>
                      </td>
                      <td>
                        <a href="https://drive.google.com/drive/folders/1Ba6yZ2KLWZC992tVO7wxpcfxaOYb8Eyi?usp=drive_link" target="_blank">
                          <button type="button" class="btn btn-xs btn-info">
                            <i class="fas fa-link me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>update_at</i></small>
                      </td>
                    </tr>

                    <tr>
                      <td>Penilaian CPMK oleh Dosen</td>
                      <td>
                        <a href="monev-rekap-kelas-detail2.php">
                          <button type="button" class="btn btn-xs btn-info">
                            <i class="fas fa-link me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>update_at 21 Jan 2024</i></small>
                      </td>
                      <td>
                        <a href="monev-rekap-kelas-detail2.php">
                          <button type="button" class="btn btn-xs btn-info">
                            <i class="fas fa-link me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>update_at 21 Jan 2024</i></small>
                      </td>
                    </tr>

                    <tr>
                      <td>Evaluasi Dosen oleh Mahasiswa</td>
                      <td>
                        <a href="portfolio_cpmk_detail2.php" target="_blank">
                          <button type="button" class="btn btn-xs btn-info">
                            <i class="fas fa-link me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>update_at</i></small>
                      </td>
                      <td>
                        <a href="portfolio_cpmk_detail2.php" target="_blank">
                          <button type="button" class="btn btn-xs btn-info">
                            <i class="fas fa-link me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>update_at</i></small>
                      </td>
                    </tr>

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

<!-- ========== CARD : Form Pengisian TAG Kelas oleh Dosen ========== -->
<div class="card card-primary">

  <div class="card-header">
    <h3 class="card-title">
      <i class="fas fa-tags mr-1"></i>
      Form Pengisian TAG Generalisasi Kelas (Berbasis OBE & CPMK)
    </h3>
  </div>

  <form action="#" method="post">
    <div class="card-body">

      <!-- ================= 1. KETERcapaian CPMK ================= -->
      <h5 class="text-primary"><strong>1. Ketercapaian CPMK (Core OBE)</strong></h5>

      <div class="form-group">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="c1" name="tag[]" value="CPMK_Tercapai_Kuat">
          <label class="custom-control-label" for="c1">#CPMK_Tercapai_Kuat</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="c2" name="tag[]" value="CPMK_Tercapai_Minimal">
          <label class="custom-control-label" for="c2">#CPMK_Tercapai_Minimal</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="c3" name="tag[]" value="CPMK_Tidak_Tercapai">
          <label class="custom-control-label" for="c3">#CPMK_Tidak_Tercapai</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="c4" name="tag[]" value="Variansi_Tinggi">
          <label class="custom-control-label" for="c4">#Variansi_Tinggi</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="c5" name="tag[]" value="Dominan_Nilai_Menengah">
          <label class="custom-control-label" for="c5">#Dominan_Nilai_Menengah</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="c6" name="tag[]" value="CPMK_Tergantung_Tugas">
          <label class="custom-control-label" for="c6">#CPMK_Tergantung_Tugas</label>
        </div>
      </div>

      <hr>

      <!-- ================= 2. BEBAN KOGNITIF ================= -->
      <h5 class="text-primary"><strong>2. Beban Kognitif & Kompleksitas</strong></h5>

      <div class="form-group">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="c7" name="tag[]" value="Materi_Terlalu_Padat">
          <label class="custom-control-label" for="c7">#Materi_Terlalu_Padat</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="c8" name="tag[]" value="Lonjakan_Kesulitan">
          <label class="custom-control-label" for="c8">#Lonjakan_Kesulitan</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="c9" name="tag[]" value="Prasyarat_Lemah">
          <label class="custom-control-label" for="c9">#Prasyarat_Lemah</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="c10" name="tag[]" value="Butuh_Pemecahan_Materi">
          <label class="custom-control-label" for="c10">#Butuh_Pemecahan_Materi</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="c11" name="tag[]" value="Butuh_Pengayaan">
          <label class="custom-control-label" for="c11">#Butuh_Pengayaan</label>
        </div>
      </div>

      <hr>

      <!-- ================= 3. METODE ================= -->
      <h5 class="text-primary"><strong>3. Metode & Aktivitas Pembelajaran</strong></h5>

      <div class="form-group">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="c12" name="tag[]" value="Diskusi_Tidak_Efektif">
          <label class="custom-control-label" for="c12">#Diskusi_Tidak_Efektif</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="c13" name="tag[]" value="Studi_Kasus_Efektif">
          <label class="custom-control-label" for="c13">#Studi_Kasus_Efektif</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="c14" name="tag[]" value="Praktikum_Menguatkan_CPMK">
          <label class="custom-control-label" for="c14">#Praktikum_Menguatkan_CPMK</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="c15" name="tag[]" value="Ceramah_Tidak_Cukup">
          <label class="custom-control-label" for="c15">#Ceramah_Tidak_Cukup</label>
        </div>

        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="c16" name="tag[]" value="Project_Based_Learning_Efektif">
          <label class="custom-control-label" for="c16">#Project_Based_Learning_Efektif</label>
        </div>
      </div>

      <hr>

      <!-- ================= CATATAN TAMBAHAN ================= -->
      <h5 class="text-primary"><strong>Catatan Tambahan (Opsional)</strong></h5>

      <div class="form-group">
        <textarea class="form-control" rows="3" name="catatan_tag"
          placeholder="Tambahkan penjelasan singkat jika diperlukan..."></textarea>
      </div>

    </div>

    <div class="card-footer text-right">
      <button type="submit" class="btn btn-primary">
        <i class="fas fa-save mr-1"></i> Simpan TAG
      </button>
    </div>

  </form>

</div>


<!-- ========== CARD : Form Refleksi Akhir Semester Dosen ========== -->
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fas fa-clipboard-check mr-1"></i>
      Formulir Refleksi Akhir Semester Dosen
    </h3>
  </div>

  <form action="#" method="post">
    <div class="card-body">

      <!-- ================= 1. Refleksi Ketercapaian OBE ================= -->
      <h5 class="mb-3 text-primary"><strong>1. Refleksi Ketercapaian OBE</strong></h5>

      <div class="form-group">
        <label>CPMK mana yang paling konsisten tercapai? Mengapa?</label>
        <textarea class="form-control" rows="3" name="ref_cpmk_konsisten"></textarea>
      </div>

      <div class="form-group">
        <label>CPMK mana yang paling bermasalah? Pada bagian apa mahasiswa mulai tertinggal?</label>
        <textarea class="form-control" rows="3" name="ref_cpmk_bermasalah"></textarea>
      </div>

      <div class="form-group">
        <label>Apakah CPMK terlalu ambisius untuk kondisi mahasiswa saat ini?</label>
        <textarea class="form-control" rows="2" name="ref_cpmk_ambisius"></textarea>
      </div>

      <hr>

      <!-- ================= 2. Refleksi Metode Pembelajaran ================= -->
      <h5 class="mb-3 text-primary"><strong>2. Refleksi Metode Pembelajaran</strong></h5>

      <div class="form-group">
        <label>Aktivitas pembelajaran apa yang paling berdampak pada pencapaian CPMK?</label>
        <textarea class="form-control" rows="3" name="ref_metode_efektif"></textarea>
      </div>

      <div class="form-group">
        <label>Metode apa yang terasa tidak bekerja?</label>
        <textarea class="form-control" rows="2" name="ref_metode_tidak_efektif"></textarea>
      </div>

      <div class="form-group">
        <label>Apakah ada momen kelas yang menjadi turning point (positif/negatif)?</label>
        <textarea class="form-control" rows="2" name="ref_turning_point"></textarea>
      </div>

      <hr>

      <!-- ================= 3. Refleksi Penilaian ================= -->
      <h5 class="mb-3 text-primary"><strong>3. Refleksi Penilaian & Instrumen</strong></h5>

      <div class="form-group">
        <label>Apakah instrumen benar-benar mengukur CPMK?</label>
        <textarea class="form-control" rows="3" name="ref_instrumen_validitas"></textarea>
      </div>

      <div class="form-group">
        <label>Bagian rubrik mana yang sering disalahpahami mahasiswa?</label>
        <textarea class="form-control" rows="2" name="ref_rubrik"></textarea>
      </div>

      <div class="form-group">
        <label>Apakah bobot penilaian sudah proporsional?</label>
        <textarea class="form-control" rows="2" name="ref_bobot"></textarea>
      </div>

      <hr>

      <!-- ================= 4. Refleksi Mahasiswa ================= -->
      <h5 class="mb-3 text-primary"><strong>4. Refleksi Mahasiswa</strong></h5>

      <div class="form-group">
        <label>Pola kelemahan mahasiswa yang paling dominan?</label>
        <textarea class="form-control" rows="3" name="ref_pola_kelemahan"></textarea>
      </div>

      <div class="form-group">
        <label>Sumber kelemahan: prasyarat, motivasi, atau desain pembelajaran?</label>
        <textarea class="form-control" rows="2" name="ref_sumber_kelemahan"></textarea>
      </div>

      <div class="form-group">
        <label>Mahasiswa tipe apa yang paling terbantu? Siapa yang tertinggal?</label>
        <textarea class="form-control" rows="2" name="ref_tipe_mahasiswa"></textarea>
      </div>

      <hr>

      <!-- ================= 5. Refleksi Diri Dosen ================= -->
      <h5 class="mb-3 text-primary"><strong>5. Refleksi Diri Dosen</strong></h5>

      <div class="form-group">
        <label>Bagian mana dari perkuliahan yang paling melelahkan secara mental?</label>
        <textarea class="form-control" rows="2" name="ref_kelelahan"></textarea>
      </div>

      <div class="form-group">
        <label>Materi apa yang perlu dikuasai lebih dalam sebelum mengajar lagi?</label>
        <textarea class="form-control" rows="2" name="ref_penguasaan_materi"></textarea>
      </div>

      <div class="form-group">
        <label>Keputusan pedagogis apa yang akan diubah jika diulang?</label>
        <textarea class="form-control" rows="2" name="ref_keputusan_ubah"></textarea>
      </div>

      <hr>

      <!-- ================= 6. Refleksi ke Depan (Action Plan) ================= -->
      <h5 class="mb-3 text-primary"><strong>6. Refleksi ke Depan (Action Plan)</strong></h5>

      <div class="form-group">
        <label>Jika kelas ini diajar ulang, 1 hal apa yang pasti diubah?</label>
        <textarea class="form-control" rows="2" name="ref_ubah_pasti"></textarea>
      </div>

      <div class="form-group">
        <label>Perubahan kecil paling realistis semester depan?</label>
        <textarea class="form-control" rows="2" name="ref_perubahan_realistis"></textarea>
      </div>

      <div class="form-group">
        <label>Pengadaan apa yang paling berdampak meningkatkan CPMK?</label>
        <textarea class="form-control" rows="2" name="ref_pengadaan"></textarea>
      </div>

    </div>

    <div class="card-footer text-right">
      <button type="submit" class="btn btn-primary">
        <i class="fas fa-save mr-1"></i> Simpan Refleksi
      </button>
    </div>
  </form>
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
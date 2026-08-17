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
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail4.php'"><a class="nav-link ">Soal Ujian</a></li>
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail2.php'"><a class="nav-link ">Penilaian Mahasiswa</a></li>
            <!-- <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail3.php'"><a class="nav-link ">Laporan(Grafik/Tabel)</a></li> -->
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail5.php'"><a class="nav-link active">Refleksi Dosen</a></li>
          </ul>


      <!--     <td><button type="button" class="btn btn-xs btn-primary" ><i class="fas fa-edit"></i></button>
                            Soal Ujian UTS/UAS <span class="badge badge-danger">Rejected</span> (dengan validasi prodi)</td>
                            <td width="40%">
                              <a href="https://drive.google.com/drive/folders/1Ba6yZ2KLWZC992tVO7wxpcfxaOYb8Eyi?usp=drive_link" target="_blank">
                                <button type="button" class="btn btn-xs btn-info"><i class="fas fa-link"></i> Download</button>
                              </a> <i>update_at</i>
                            </td> -->
          <!-- ========== CARD : refleksi kelas ========== --> 
<!-- ========== CARD : Form Pengisian TAG Kelas oleh Dosen ========== -->
<div class="card ">

 <!--  <div class="card-header">
    <h3 class="card-title">
      <i class="fas fa-tags mr-1"></i>
      Form Pengisian TAG Generalisasi Kelas (Berbasis OBE & CPMK)
    </h3>
  </div> -->

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
      Formulir Refleksi Akhir Semester
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

<!-- ========== CARD : refleksi idea ========== -->
<!-- Evaluasi Mata Kuliah (per dosen, terpisah) -->
<div class="card shadow mb-3" id="cardEvalMK">
  <div class="card-header bg-warning">
    <h3 class="card-title">
      Evaluasi Mata Kuliah (Dosen)
      <small class="badge bg-warning" id="statusEvalMK">Belum diisi</small>
    </h3>
  </div>
  <div class="card-body">
    <!-- CPMK -->
    <h6>Refleksi CPMK</h6>
    <div class="mb-2">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="cpmkKuat" value="#CPMK_Tercapai_Kuat">
        <label class="form-check-label" for="cpmkKuat">#CPMK_Tercapai_Kuat</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="cpmkMinimal" value="#CPMK_Tercapai_Minimal">
        <label class="form-check-label" for="cpmkMinimal">#CPMK_Tercapai_Minimal</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="cpmkTidak" value="#CPMK_Tidak_Tercapai">
        <label class="form-check-label" for="cpmkTidak">#CPMK_Tidak_Tercapai</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="cpmkVariansi" value="#Variansi_Tinggi">
        <label class="form-check-label" for="cpmkVariansi">#Variansi_Tinggi</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="cpmkDominan" value="#Dominan_Nilai_Menengah">
        <label class="form-check-label" for="cpmkDominan">#Dominan_Nilai_Menengah</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="cpmkTugas" value="#CPMK_Tergantung_Tugas">
        <label class="form-check-label" for="cpmkTugas">#CPMK_Tergantung_Tugas</label>
      </div>
    </div>
    <textarea class="form-control mb-2" placeholder="Catatan tambahan..." rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)"></textarea>

    <!-- Beban Kognitif -->
    <h6>Beban Kognitif & Kompleksitas</h6>
    <div class="mb-2">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="materiPadat" value="#Materi_Terlalu_Padat">
        <label class="form-check-label" for="materiPadat">#Materi_Terlalu_Padat</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="lonjakanKesulitan" value="#Lonjakan_Kesulitan">
        <label class="form-check-label" for="lonjakanKesulitan">#Lonjakan_Kesulitan</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="prasyaratLemah" value="#Prasyarat_Lemah">
        <label class="form-check-label" for="prasyaratLemah">#Prasyarat_Lemah</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="pemecahanMateri" value="#Butuh_Pemecahan_Materi">
        <label class="form-check-label" for="pemecahanMateri">#Butuh_Pemecahan_Materi</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="pengayaan" value="#Butuh_Pengayaan">
        <label class="form-check-label" for="pengayaan">#Butuh_Pengayaan</label>
      </div>
    </div>
    <textarea class="form-control mb-2" placeholder="Catatan tambahan..." rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)"></textarea>

    <!-- Metode & Aktivitas -->
    <h6>Metode & Aktivitas Pembelajaran</h6>
    <div class="mb-2">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="diskusiTidakEfektif" value="#Diskusi_Tidak_Efektif">
        <label class="form-check-label" for="diskusiTidakEfektif">#Diskusi_Tidak_Efektif</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="studiKasusEfektif" value="#Studi_Kasus_Efektif">
        <label class="form-check-label" for="studiKasusEfektif">#Studi_Kasus_Efektif</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="praktikumMenguatkan" value="#Praktikum_Menguatkan_CPMK">
        <label class="form-check-label" for="praktikumMenguatkan">#Praktikum_Menguatkan_CPMK</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="ceramahTidakCukup" value="#Ceramah_Tidak_Cukup">
        <label class="form-check-label" for="ceramahTidakCukup">#Ceramah_Tidak_Cukup</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="projectBased" value="#Project_Based_Learning_Efektif">
        <label class="form-check-label" for="projectBased">#Project_Based_Learning_Efektif</label>
      </div>
    </div>
    <textarea class="form-control mb-2" placeholder="Catatan tambahan..." rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)"></textarea>
  </div>
  <div class="card-footer d-flex justify-content-end">
    <button class="btn btn-outline-secondary btn-sm me-2" onclick="clearCard(this)">Reset</button>
    <button class="btn btn-outline-primary btn-sm me-2" onclick="saveCard(this)">Simpan</button>
    <button class="btn btn-success btn-sm" onclick="markDoneCard(this)">Tandai Selesai</button>
  </div>
</div>

<!-- Fungsi Auto-expand Textarea -->
<script>
function autoExpand(field) {
  field.style.height = 'auto';
  field.style.height = (field.scrollHeight) + 'px';
}

// Tombol aksi (placeholder, implementasi sesuai backend)
function clearCard(btn){
  const card = btn.closest('.card');
  card.querySelectorAll('input[type="checkbox"]').forEach(cb=>cb.checked=false);
  card.querySelectorAll('textarea').forEach(t=>{t.value=''; autoExpand(t);});
  updateCardStatus(card);
}

function saveCard(btn){
  const card = btn.closest('.card');
  // simpan data ke backend / local storage
  updateCardStatus(card, 'review');
}

function markDoneCard(btn){
  const card = btn.closest('.card');
  // simpan status selesai
  updateCardStatus(card, 'done');
}


function updateCardStatus(card, status){
  const header = card.querySelector('.card-header');      // Card header
  const badge = card.querySelector('#statusEvalMK');      // Badge status

  if(status==='review'){
    header.className = 'card-header bg-primary text-white d-flex justify-content-between align-items-center';
    badge.className = 'text-white badge bg-primary';
    badge.innerText = 'Perlu Review';
  } else if(status==='done'){
    header.className = 'card-header bg-success text-white d-flex justify-content-between align-items-center';
    badge.className = 'text-white badge bg-success';
    badge.innerText = 'Selesai';
  } else {
    header.className = 'card-header bg-warning text-dark d-flex justify-content-between align-items-center';
    badge.className = 'text-dark badge bg-warning';
    badge.innerText = 'Belum diisi';
  }
}

// Tombol aksi (placeholder)
function saveCard(btn){
  const card = btn.closest('.card');
  // simpan data
  updateCardStatus(card,'review');
}

function markDoneCard(btn){
  const card = btn.closest('.card');
  // simpan status selesai
  updateCardStatus(card,'done');
}

function clearCard(btn){
  const card = btn.closest('.card');
  card.querySelectorAll('input[type="checkbox"]').forEach(cb=>cb.checked=false);
  card.querySelectorAll('textarea').forEach(t=>{t.value=''; t.style.height='auto';});
  updateCardStatus(card,''); // kembalikan ke Belum diisi
}
</script>

<!-- ========== CARD : Refleksi ke Depan / Action Plan ========== -->
<div class="card shadow mb-3" id="cardActionPlan">
  <div class="card-header bg-warning">
    <h3 class="card-title">
      Refleksi ke Depan / Action Plan
      <small class="badge bg-warning" id="statusActionPlan">Belum diisi</small>
    </h3>
  </div>

  <div class="card-body">
    <!-- Hal yang diubah jika diajar ulang -->
    <h6>Hal yang diubah jika diajar ulang</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan hal yang pasti diubah..." rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)"></textarea>

    <!-- Perubahan kecil semester depan -->
    <h6>Perubahan kecil paling realistis semester depan</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan perubahan kecil..." rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)"></textarea>

    <!-- Pengadaan yang berdampak -->
    <h6>Pengadaan yang paling berdampak meningkatkan CPMK</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan pengadaan / alat / bahan..." rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)"></textarea>
  </div>

  <div class="card-footer d-flex justify-content-end">
    <button class="btn btn-outline-secondary btn-sm me-2" onclick="clearCard(this)">Reset</button>
    <button class="btn btn-outline-primary btn-sm me-2" onclick="saveCard(this)">Simpan</button>
    <button class="btn btn-success btn-sm" onclick="markDoneCard(this)">Tandai Selesai</button>
  </div>
</div>

<script>
// Fungsi Auto-expand Textarea (gunakan yang sama dari card CPMK)
function autoExpand(field) {
  field.style.height = 'auto';
  field.style.height = (field.scrollHeight) + 'px';
}

// Update status card (sama seperti card sebelumnya)
function updateCardStatus(card, status){
  const header = card.querySelector('.card-header');
  const badge = card.querySelector('.badge');

  if(status==='review'){
    header.className = 'card-header bg-primary text-white d-flex justify-content-between align-items-center';
    badge.className = 'text-white badge bg-primary';
    badge.innerText = 'Perlu Review';
  } else if(status==='done'){
    header.className = 'card-header bg-success text-white d-flex justify-content-between align-items-center';
    badge.className = 'text-white badge bg-success';
    badge.innerText = 'Selesai';
  } else {
    header.className = 'card-header bg-warning text-dark d-flex justify-content-between align-items-center';
    badge.className = 'text-dark badge bg-warning';
    badge.innerText = 'Belum diisi';
  }
}

// Tombol aksi (sama dengan card CPMK)
function saveCard(btn){
  const card = btn.closest('.card');
  // simpan data ke backend / local storage
  updateCardStatus(card, 'review');
}

function markDoneCard(btn){
  const card = btn.closest('.card');
  // simpan status selesai
  updateCardStatus(card, 'done');
}

function clearCard(btn){
  const card = btn.closest('.card');
  card.querySelectorAll('textarea').forEach(t=>{t.value=''; autoExpand(t);});
  updateCardStatus(card,''); // kembalikan ke Belum diisi
}
</script>

<!-- ========== CARD : Refleksi Mahasiswa ========== -->
<div class="card shadow mb-3" id="cardRefMahasiswa">
  <div class="card-header bg-warning">
    <h3 class="card-title">
      Refleksi Mahasiswa
      <small class="badge bg-warning" id="statusRefMahasiswa">Belum diisi</small>
    </h3>
  </div>
  <div class="card-body">
    <!-- Pola Kelemahan Mahasiswa -->
    <h6>Pola kelemahan mahasiswa yang dominan</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan pola kelemahan..." rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)"></textarea>

    <!-- Sumber Kelemahan -->
    <h6>Sumber kelemahan (prasyarat, motivasi, desain pembelajaran)</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan sumber kelemahan..." rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)"></textarea>

    <!-- Tipe Mahasiswa -->
    <h6>Mahasiswa tipe yang paling terbantu / tertinggal</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan tipe mahasiswa..." rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)"></textarea>
  </div>
  <div class="card-footer d-flex justify-content-end">
    <button class="btn btn-outline-secondary btn-sm me-2" onclick="clearCard(this)">Reset</button>
    <button class="btn btn-outline-primary btn-sm me-2" onclick="saveCard(this)">Simpan</button>
    <button class="btn btn-success btn-sm" onclick="markDoneCard(this)">Tandai Selesai</button>
  </div>
</div>

<!-- ========== CARD : Refleksi Penilaian & Instrumen ========== -->
<div class="card shadow mb-3" id="cardRefPenilaian">
  <div class="card-header bg-warning">
    <h3 class="card-title">
      Refleksi Penilaian & Instrumen
      <small class="badge bg-warning" id="statusRefPenilaian">Belum diisi</small>
    </h3>
  </div>
  <div class="card-body">
    <h6>Instrumen & Rubrik CPMK</h6>
    <textarea class="form-control mb-2" placeholder="Apakah instrumen mengukur CPMK?" rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)"></textarea>

    <h6>Bagian rubrik yang sering disalahpahami mahasiswa</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan bagian rubrik..." rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)"></textarea>

    <h6>Bobot penilaian sudah proporsional?</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan evaluasi bobot..." rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)"></textarea>
  </div>
  <div class="card-footer d-flex justify-content-end">
    <button class="btn btn-outline-secondary btn-sm me-2" onclick="clearCard(this)">Reset</button>
    <button class="btn btn-outline-primary btn-sm me-2" onclick="saveCard(this)">Simpan</button>
    <button class="btn btn-success btn-sm" onclick="markDoneCard(this)">Tandai Selesai</button>
  </div>
</div>

<!-- ========== CARD : Refleksi Diri Dosen ========== -->
<div class="card shadow mb-3" id="cardRefDosen">
  <div class="card-header bg-warning">
    <h3 class="card-title">
      Refleksi Diri Dosen
      <small class="badge bg-warning" id="statusRefDosen">Belum diisi</small>
    </h3>
  </div>
  <div class="card-body">
    <h6>Bagian perkuliahan yang paling melelahkan secara mental</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan bagian sulit..." rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)"></textarea>

    <h6>Materi yang perlu dikuasai lebih dalam sebelum mengajar lagi</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan materi..." rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)"></textarea>

    <h6>Keputusan pedagogis yang akan diubah jika diulang</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan keputusan pedagogis..." rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)"></textarea>
  </div>
  <div class="card-footer d-flex justify-content-end">
    <button class="btn btn-outline-secondary btn-sm me-2" onclick="clearCard(this)">Reset</button>
    <button class="btn btn-outline-primary btn-sm me-2" onclick="saveCard(this)">Simpan</button>
    <button class="btn btn-success btn-sm" onclick="markDoneCard(this)">Tandai Selesai</button>
  </div>
</div>

<!-- Fungsi JS Auto-expand & Status (sama untuk semua card) -->
<script>
function autoExpand(field) {
  field.style.height = 'auto';
  field.style.height = (field.scrollHeight) + 'px';
}

function updateCardStatus(card, status){
  const header = card.querySelector('.card-header');
  const badge = card.querySelector('.badge');

  if(status==='review'){
    header.className = 'card-header bg-primary text-white d-flex justify-content-between align-items-center';
    badge.className = 'text-white badge bg-primary';
    badge.innerText = 'Perlu Review';
  } else if(status==='done'){
    header.className = 'card-header bg-success text-white d-flex justify-content-between align-items-center';
    badge.className = 'text-white badge bg-success';
    badge.innerText = 'Selesai';
  } else {
    header.className = 'card-header bg-warning text-dark d-flex justify-content-between align-items-center';
    badge.className = 'text-dark badge bg-warning';
    badge.innerText = 'Belum diisi';
  }
}

function saveCard(btn){
  const card = btn.closest('.card');
  // simpan data ke backend / local storage
  updateCardStatus(card, 'review');
}

function markDoneCard(btn){
  const card = btn.closest('.card');
  // simpan status selesai
  updateCardStatus(card, 'done');
}

function clearCard(btn){
  const card = btn.closest('.card');
  card.querySelectorAll('textarea').forEach(t=>{t.value=''; autoExpand(t);});
  card.querySelectorAll('input[type="checkbox"]').forEach(cb=>cb.checked=false);
  updateCardStatus(card,''); // kembalikan ke Belum diisi
}
</script>







<h1>card-card yang sudah dikategorikan</h1>
<!-- ================= CARD : Evaluasi Mata Kuliah (per Dosen) ================= -->
<div class="card shadow mb-3" id="cardEvalMK">
  <div class="card-header bg-warning">
    <h3 class="card-title">
      Evaluasi Mata Kuliah (Dosen)
      <small class="badge bg-warning" id="statusEvalMK">Belum diisi</small>
    </h3>
  </div>

  <div class="card-body">
    <!-- CPMK (Level: Kelas, Dosen, MK, Prodi) -->
    <h6>Refleksi CPMK</h6>
    <div class="mb-2">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="cpmkKuat" value="#CPMK_Tercapai_Kuat" data-level="kelas,dosen,mk,prodi">
        <label class="form-check-label" for="cpmkKuat">#CPMK_Tercapai_Kuat [Kelas][Dosen][MK][Prodi]</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="cpmkMinimal" value="#CPMK_Tercapai_Minimal" data-level="kelas,dosen,mk,prodi">
        <label class="form-check-label" for="cpmkMinimal">#CPMK_Tercapai_Minimal [Kelas][Dosen][MK][Prodi]</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="cpmkTidak" value="#CPMK_Tidak_Tercapai" data-level="kelas,dosen,mk,prodi">
        <label class="form-check-label" for="cpmkTidak">#CPMK_Tidak_Tercapai [Kelas][Dosen][MK][Prodi]</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="cpmkVariansi" value="#Variansi_Tinggi" data-level="kelas,dosen,mk,prodi">
        <label class="form-check-label" for="cpmkVariansi">#Variansi_Tinggi [Kelas][Dosen][MK][Prodi]</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="cpmkDominan" value="#Dominan_Nilai_Menengah" data-level="kelas,dosen,mk,prodi">
        <label class="form-check-label" for="cpmkDominan">#Dominan_Nilai_Menengah [Kelas][Dosen][MK][Prodi]</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="cpmkTugas" value="#CPMK_Tergantung_Tugas" data-level="kelas,dosen,mk,prodi">
        <label class="form-check-label" for="cpmkTugas">#CPMK_Tergantung_Tugas [Kelas][Dosen][MK][Prodi]</label>
      </div>
    </div>
    <textarea class="form-control mb-2" placeholder="Catatan tambahan (Level: Kelas, Dosen, MK, Prodi)" rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)" data-level="kelas,dosen,mk,prodi"></textarea>

    <!-- Beban Kognitif (Level: Kelas, Dosen, MK, Prodi) -->
    <h6>Beban Kognitif & Kompleksitas</h6>
    <div class="mb-2">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="materiPadat" value="#Materi_Terlalu_Padat" data-level="kelas,dosen,mk,prodi">
        <label class="form-check-label" for="materiPadat">#Materi_Terlalu_Padat [Kelas][Dosen][MK][Prodi]</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="lonjakanKesulitan" value="#Lonjakan_Kesulitan" data-level="kelas,dosen,mk,prodi">
        <label class="form-check-label" for="lonjakanKesulitan">#Lonjakan_Kesulitan [Kelas][Dosen][MK][Prodi]</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="prasyaratLemah" value="#Prasyarat_Lemah" data-level="kelas,dosen,mk,prodi">
        <label class="form-check-label" for="prasyaratLemah">#Prasyarat_Lemah [Kelas][Dosen][MK][Prodi]</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="pemecahanMateri" value="#Butuh_Pemecahan_Materi" data-level="kelas,dosen,mk,prodi">
        <label class="form-check-label" for="pemecahanMateri">#Butuh_Pemecahan_Materi [Kelas][Dosen][MK][Prodi]</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="pengayaan" value="#Butuh_Pengayaan" data-level="kelas,dosen,mk,prodi">
        <label class="form-check-label" for="pengayaan">#Butuh_Pengayaan [Kelas][Dosen][MK][Prodi]</label>
      </div>
    </div>
    <textarea class="form-control mb-2" placeholder="Catatan tambahan (Level: Kelas, Dosen, MK, Prodi)" rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)" data-level="kelas,dosen,mk,prodi"></textarea>

    <!-- Metode & Aktivitas (Level: Kelas, Dosen, MK, Prodi) -->
    <h6>Metode & Aktivitas Pembelajaran</h6>
    <div class="mb-2">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="diskusiTidakEfektif" value="#Diskusi_Tidak_Efektif" data-level="kelas,dosen,mk,prodi">
        <label class="form-check-label" for="diskusiTidakEfektif">#Diskusi_Tidak_Efektif [Kelas][Dosen][MK][Prodi]</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="studiKasusEfektif" value="#Studi_Kasus_Efektif" data-level="kelas,dosen,mk,prodi">
        <label class="form-check-label" for="studiKasusEfektif">#Studi_Kasus_Efektif [Kelas][Dosen][MK][Prodi]</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="praktikumMenguatkan" value="#Praktikum_Menguatkan_CPMK" data-level="kelas,dosen,mk,prodi">
        <label class="form-check-label" for="praktikumMenguatkan">#Praktikum_Menguatkan_CPMK [Kelas][Dosen][MK][Prodi]</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="ceramahTidakCukup" value="#Ceramah_Tidak_Cukup" data-level="kelas,dosen,mk,prodi">
        <label class="form-check-label" for="ceramahTidakCukup">#Ceramah_Tidak_Cukup [Kelas][Dosen][MK][Prodi]</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="projectBased" value="#Project_Based_Learning_Efektif" data-level="kelas,dosen,mk,prodi">
        <label class="form-check-label" for="projectBased">#Project_Based_Learning_Efektif [Kelas][Dosen][MK][Prodi]</label>
      </div>
    </div>
    <textarea class="form-control mb-2" placeholder="Catatan tambahan (Level: Kelas, Dosen, MK, Prodi)" rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)" data-level="kelas,dosen,mk,prodi"></textarea>
  </div>

  <div class="card-footer d-flex justify-content-end">
    <button class="btn btn-outline-secondary btn-sm me-2" onclick="clearCard(this)">Reset</button>
    <button class="btn btn-outline-primary btn-sm me-2" onclick="saveCard(this)">Simpan</button>
    <button class="btn btn-success btn-sm" onclick="markDoneCard(this)">Tandai Selesai</button>
  </div>
</div>
<!-- ================= CARD : Refleksi ke Depan / Action Plan ================= -->
<div class="card shadow mb-3" id="cardActionPlan">
  <div class="card-header bg-warning">
    <h3 class="card-title">
      Refleksi ke Depan / Action Plan
      <small class="badge bg-warning" id="statusActionPlan">Belum diisi</small>
    </h3>
  </div>

  <div class="card-body">
    <!-- Hal yang diubah jika diajar ulang (Level: Dosen, MK) -->
    <h6>Hal yang diubah jika diajar ulang</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan hal yang pasti diubah (Level: Dosen, MK)" rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)" data-level="dosen,mk"></textarea>

    <!-- Perubahan kecil semester depan (Level: Dosen, MK, Prodi) -->
    <h6>Perubahan kecil paling realistis semester depan</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan perubahan kecil (Level: Dosen, MK, Prodi)" rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)" data-level="dosen,mk,prodi"></textarea>

    <!-- Pengadaan yang berdampak (Level: Dosen, MK, Prodi) -->
    <h6>Pengadaan yang paling berdampak meningkatkan CPMK</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan pengadaan/alat/bahan (Level: Dosen, MK, Prodi)" rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)" data-level="dosen,mk,prodi"></textarea>
  </div>

  <div class="card-footer d-flex justify-content-end">
    <button class="btn btn-outline-secondary btn-sm me-2" onclick="clearCard(this)">Reset</button>
    <button class="btn btn-outline-primary btn-sm me-2" onclick="saveCard(this)">Simpan</button>
    <button class="btn btn-success btn-sm" onclick="markDoneCard(this)">Tandai Selesai</button>
  </div>
</div>

<!-- ================= CARD : Refleksi Mahasiswa ================= -->
<div class="card shadow mb-3" id="cardRefMahasiswa">
  <div class="card-header bg-warning">
    <h3 class="card-title">
      Refleksi Mahasiswa
      <small class="badge bg-warning" id="statusRefMahasiswa">Belum diisi</small>
    </h3>
  </div>
  <div class="card-body">
    <!-- Pola Kelemahan Mahasiswa (Level: Kelas, Dosen) -->
    <h6>Pola kelemahan mahasiswa yang dominan</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan pola kelemahan (Level: Kelas, Dosen)" rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)" data-level="kelas,dosen"></textarea>

    <!-- Sumber Kelemahan (Level: Kelas, Dosen) -->
    <h6>Sumber kelemahan (prasyarat, motivasi, desain pembelajaran)</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan sumber kelemahan (Level: Kelas, Dosen)" rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)" data-level="kelas,dosen"></textarea>

    <!-- Tipe Mahasiswa (Level: Kelas, Dosen) -->
    <h6>Mahasiswa tipe yang paling terbantu / tertinggal</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan tipe mahasiswa (Level: Kelas, Dosen)" rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)" data-level="kelas,dosen"></textarea>
  </div>
  <div class="card-footer d-flex justify-content-end">
    <button class="btn btn-outline-secondary btn-sm me-2" onclick="clearCard(this)">Reset</button>
    <button class="btn btn-outline-primary btn-sm me-2" onclick="saveCard(this)">Simpan</button>
    <button class="btn btn-success btn-sm" onclick="markDoneCard(this)">Tandai Selesai</button>
  </div>
</div>

<!-- ================= CARD : Refleksi Penilaian & Instrumen ================= -->
<div class="card shadow mb-3" id="cardRefPenilaian">
  <div class="card-header bg-warning">
    <h3 class="card-title">
      Refleksi Penilaian & Instrumen
      <small class="badge bg-warning" id="statusRefPenilaian">Belum diisi</small>
    </h3>
  </div>
  <div class="card-body">
    <h6>Instrumen & Rubrik CPMK</h6>
    <textarea class="form-control mb-2" placeholder="Apakah instrumen mengukur CPMK? (Level: Kelas, Dosen, MK)" rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)" data-level="kelas,dosen,mk"></textarea>

    <h6>Bagian rubrik yang sering disalahpahami mahasiswa</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan bagian rubrik (Level: Kelas, Dosen, MK)" rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)" data-level="kelas,dosen,mk"></textarea>

    <h6>Bobot penilaian sudah proporsional?</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan evaluasi bobot (Level: Kelas, Dosen, MK)" rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)" data-level="kelas,dosen,mk"></textarea>
  </div>
  <div class="card-footer d-flex justify-content-end">
    <button class="btn btn-outline-secondary btn-sm me-2" onclick="clearCard(this)">Reset</button>
    <button class="btn btn-outline-primary btn-sm me-2" onclick="saveCard(this)">Simpan</button>
    <button class="btn btn-success btn-sm" onclick="markDoneCard(this)">Tandai Selesai</button>
  </div>
</div>

<!-- ================= CARD : Refleksi Diri Dosen ================= -->
<div class="card shadow mb-3" id="cardRefDosen">
  <div class="card-header bg-warning">
    <h3 class="card-title">
      Refleksi Diri Dosen
      <small class="badge bg-warning" id="statusRefDosen">Belum diisi</small>
    </h3>
  </div>
  <div class="card-body">
    <h6>Bagian perkuliahan yang paling melelahkan secara mental</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan bagian sulit (Level: Dosen)" rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)" data-level="dosen"></textarea>

    <h6>Materi yang perlu dikuasai lebih dalam sebelum mengajar lagi</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan materi (Level: Dosen)" rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)" data-level="dosen"></textarea>

    <h6>Keputusan pedagogis yang akan diubah jika diulang</h6>
    <textarea class="form-control mb-2" placeholder="Tuliskan keputusan pedagogis (Level: Dosen)" rows="1" style="resize:none;overflow:hidden" oninput="autoExpand(this)" data-level="dosen"></textarea>
  </div>
  <div class="card-footer d-flex justify-content-end">
    <button class="btn btn-outline-secondary btn-sm me-2" onclick="clearCard(this)">Reset</button>
    <button class="btn btn-outline-primary btn-sm me-2" onclick="saveCard(this)">Simpan</button>
    <button class="btn btn-success btn-sm" onclick="markDoneCard(this)">Tandai Selesai</button>
  </div>
</div>

<!-- ================= Fungsi JS untuk semua card ================= -->
<script>
function autoExpand(field) {
  field.style.height = 'auto';
  field.style.height = (field.scrollHeight) + 'px';
}

function updateCardStatus(card, status){
  const header = card.querySelector('.card-header');
  const badge = card.querySelector('.badge');

  if(status==='review'){
    header.className = 'card-header bg-primary text-white d-flex justify-content-between align-items-center';
    badge.className = 'text-white badge bg-primary';
    badge.innerText = 'Perlu Review';
  } else if(status==='done'){
    header.className = 'card-header bg-success text-white d-flex justify-content-between align-items-center';
    badge.className = 'text-white badge bg-success';
    badge.innerText = 'Selesai';
  } else {
    header.className = 'card-header bg-warning text-dark d-flex justify-content-between align-items-center';
    badge.className = 'text-dark badge bg-warning';
    badge.innerText = 'Belum diisi';
  }
}

function saveCard(btn){
  const card = btn.closest('.card');
  updateCardStatus(card,'review');
}

function markDoneCard(btn){
  const card = btn.closest('.card');
  updateCardStatus(card,'done');
}

function clearCard(btn){
  const card = btn.closest('.card');
  card.querySelectorAll('textarea').forEach(t=>{t.value=''; autoExpand(t);});
  card.querySelectorAll('input[type="checkbox"]').forEach(cb=>cb.checked=false);
  updateCardStatus(card,''); // kembali ke Belum diisi
}
</script>






<!-- card-card refleksi -->
<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h5 class="card-title mb-0">Catatan & Evaluasi Kelas</h5>
      <small class="text-light">(utama & wajib diisi - Kolaboratif)</small>
    </div>

    <div class="card-body">
      Deskripsi:(untuk team teaching & rekap kelas)

Formulir ini digunakan untuk mencatat hasil evaluasi pelaksanaan perkuliahan pada kelas yang Anda ampu. Isian mencakup capaian pembelajaran, dinamika kelas, metode pengajaran, serta kendala yang dihadapi selama proses pembelajaran.

Catatan yang Anda tuliskan dapat dilihat oleh dosen lain dalam tim pengampu (team teaching) sebagai bahan berbagi pengalaman dan perbaikan bersama. Data ini juga akan direkap untuk memberikan gambaran umum kondisi pembelajaran kepada program studi.
      <p>
        Formulir ini digunakan untuk mencatat hasil pelaksanaan perkuliahan pada kelas yang Anda ampu. 
        Isian mencakup capaian pembelajaran, dinamika kelas, metode pengajaran, serta kendala selama proses belajar.
      </p>

      <p>
        Catatan ini dapat dilihat oleh tim dosen pengampu dan akan direkap sebagai gambaran umum kondisi pembelajaran untuk program studi.
      </p>

      <hr>
👉 Arah pengisian:
Fokuskan pada kondisi nyata di kelas, apa yang terjadi, apa yang berhasil, dan apa yang perlu diperbaiki.
      <strong>Arahan Pengisian:</strong>
      <ul>
        <li>Fokus pada kondisi nyata di kelas</li>
        <li>Catat apa yang berhasil dan tidak</li>
        <li>Sertakan kendala yang terjadi</li>
      </ul>

      <hr>

      <strong>Contoh Hal yang Ditanyakan:</strong>
      <ul>
        <li>Apakah capaian pembelajaran (CPMK) tercapai?</li>
        <li>Bagaimana tingkat partisipasi mahasiswa?</li>
        <li>Metode apa yang paling efektif?</li>
        <li>Kendala utama selama perkuliahan?</li>
        <li>Apakah penilaian sudah mencerminkan kemampuan mahasiswa?</li>
      </ul>

    </div>

    <div class="card-footer d-flex justify-content-between">
      <button class="btn btn-primary">Isi Evaluasi</button>
      <button class="btn btn-outline-secondary">Lihat Catatan Tim</button>
    </div>
  </div>
</div>



<div class="col-md-12">
  <div class="card card-purple">
    <div class="card-header">
      <h5 class="card-title mb-0">Masukan & Insight untuk Program Studi</h5>
      <small class="text-light">(lanjutan dari kelas - Strategis)</small>
    </div>

    <div class="card-body">
      Deskripsi:(untuk strategic input ke prodi)

Formulir ini digunakan untuk menyampaikan masukan, insight, dan rekomendasi Anda kepada program studi berdasarkan pengalaman mengajar pada mata kuliah dan kelas yang diampu.

Isian dapat mencakup kesiapan mahasiswa, kesesuaian kurikulum, efektivitas metode pembelajaran, hingga kebutuhan dukungan atau perbaikan sistem akademik. Masukan dari seluruh dosen akan direkap sebagai bahan evaluasi dan pengambilan keputusan di tingkat program studi.
      <p>
        Formulir ini digunakan untuk menyampaikan masukan, insight, dan rekomendasi kepada program studi berdasarkan pengalaman mengajar.
      </p>

      <p>
        Masukan Anda akan direkap bersama dosen lain sebagai bahan evaluasi dan pengambilan keputusan di tingkat program studi.
      </p>

      <hr>
👉 Arah pengisian:
Sampaikan hal-hal penting yang menurut Anda perlu diketahui oleh program studi, terutama yang berdampak pada peningkatan kualitas pembelajaran secara keseluruhan.
      <strong>Arahan Pengisian:</strong>
      <ul>
        <li>Sampaikan hal yang berdampak luas</li>
        <li>Fokus pada perbaikan sistem atau kurikulum</li>
        <li>Hindari hanya menceritakan kejadian kelas</li>
      </ul>

      <hr>

      <strong>Contoh Hal yang Ditanyakan:</strong>
      <ul>
        <li>Apakah mahasiswa memiliki prasyarat yang cukup?</li>
        <li>Apakah terdapat gap atau tumpang tindih materi?</li>
        <li>Apakah kurikulum sudah sesuai kebutuhan?</li>
        <li>Apa yang perlu diperbaiki di tingkat prodi?</li>
        <li>Rekomendasi konkret untuk peningkatan kualitas pembelajaran?</li>
      </ul>

    </div>

    <div class="card-footer d-flex justify-content-between">
      <button class="btn btn-purple">Sampaikan Masukan</button>
      <button class="btn btn-outline-secondary">Lihat Rekap Prodi</button>
    </div>
  </div>
</div>


<div class="col-md-12">
  <div class="card card-success">
    <div class="card-header">
      <h5 class="card-title mb-0">Jurnal CQI Pengajaran Mata Kuliah </h5>
      <small class="text-light">(refleksi dosen - Personal)</small>
    </div>

    <div class="card-body">
      Deskripsi:(untuk personal reuse & improvement)

Formulir ini digunakan sebagai catatan pribadi Anda dalam mengevaluasi pengalaman mengajar pada mata kuliah yang diampu. Isian mencakup penilaian terhadap metode pengajaran, materi, penilaian (assessment), serta rencana perbaikan untuk pelaksanaan di semester berikutnya.

Catatan ini bersifat pribadi dan hanya dapat diakses oleh Anda. Tujuannya adalah membantu Anda mempersiapkan pengajaran yang lebih baik ketika mengampu mata kuliah yang sama di masa mendatang.
      <p>
        Formulir ini digunakan sebagai catatan pribadi Anda dalam mengevaluasi pengalaman mengajar pada mata kuliah yang diampu.
      </p>

      <p>
        Catatan ini hanya dapat diakses oleh Anda dan bertujuan membantu persiapan pengajaran yang lebih baik di semester berikutnya.
      </p>

      <hr>
👉 Arah pengisian:
Tuliskan secara jujur hal-hal yang menurut Anda berhasil, kurang efektif, serta ide perbaikan yang ingin Anda lakukan di semester berikutnya.
      <strong>Arahan Pengisian:</strong>
      <ul>
        <li>Isi secara jujur dan reflektif</li>
        <li>Fokus pada pengalaman pribadi mengajar</li>
        <li>Tuliskan rencana perbaikan konkret</li>
      </ul>

      <hr>

      <strong>Contoh Hal yang Ditanyakan:</strong>
      <ul>
        <li>Apa yang berjalan baik dalam pengajaran saya?</li>
        <li>Apa yang tidak berjalan sesuai harapan?</li>
        <li>Metode apa yang akan saya pertahankan?</li>
        <li>Apa yang perlu saya ubah di semester berikutnya?</li>
        <li>Hal apa yang tidak boleh terulang?</li>
      </ul>

    </div>

    <div class="card-footer d-flex justify-content-between">
      <button class="btn btn-success">Isi Catatan</button>
      <button class="btn btn-outline-secondary">Lihat Riwayat Saya</button>
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
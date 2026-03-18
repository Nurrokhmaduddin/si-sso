<?php $page = 'konfigurasi_kuesioner'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Template Kuesioner Refleksi 
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
                <div class="col-md-6">
                  <label>Berlaku untuk Semester</label>
                  <select class="form-control">
                    <option>2025 Genap</option>
                    <option>2025 Ganjil</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label>Status</label>
                  <select class="form-control">
                    <option>Draft</option>
                    <option>Aktif</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button type="button" 
                class="btn btn-outline-secondary btn-sm"
                onclick="window.location.href='konfigurasi-kuesioner.php'">
                <span class="fas fa-reply me-1"></span> Kembali
              </button>
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
              </div>
            </div>

          </div>


<!-- ========== CARD 3: formula pertanyaan card refleksi ========== -->
<div class="col-md-12">
  <div class="card card-primary">

    <!-- HEADER -->
    <div class="card-header">
      <h5 class="card-title mb-0">Builder Catatan & Evaluasi Kelas</h5>
      <small class="text-light">
        Konfigurasi pertanyaan evaluasi kelas • Kolaboratif & terstruktur
      </small>
    </div>

    <!-- BODY -->
    <div class="card-body">

      <!-- ITEM 1: SELECTION -->
      <div class="card mb-3">
        <div class="card-body">

          <div class="d-flex justify-content-between">
            <strong>Q1. Kondisi Umum Kelas</strong>
            <span class="badge badge-primary">Selection</span>
          </div>

          <small class="text-muted">
            Pilih kondisi yang paling menggambarkan situasi kelas secara umum
          </small>

          <div class="mt-2">
            <div class="form-check">
              <input class="form-check-input" type="radio" disabled>
              <label class="form-check-label">Sangat Kondusif</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" disabled>
              <label class="form-check-label">Cukup Kondusif</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" disabled>
              <label class="form-check-label">Kurang Kondusif</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" disabled>
              <label class="form-check-label">Tidak Kondusif</label>
            </div>
          </div>

          <div class="mt-3 d-flex justify-content-between">
            <div>
              <button 
              class="btn btn-xs btn-outline-primary btn-edit"
              data-question="Kondisi Umum Kelas"
              data-type="selection"
              data-options="Sangat Kondusif,Cukup Kondusif,Kurang Kondusif,Tidak Kondusif"
              data-required="1"
              >
              Edit
            </button>
              <button class="btn btn-xs btn-outline-danger">Hapus</button>
            </div>
            <small class="text-muted">Wajib diisi</small>
          </div>

        </div>
      </div>


      <!-- ITEM 2: TAGGING -->
      <div class="card mb-3">
        <div class="card-body">

          <div class="d-flex justify-content-between">
            <strong>Q2. Kendala Utama di Kelas</strong>
            <span class="badge badge-info">Tagging</span>
          </div>

          <small class="text-muted">
            Pilih satu atau lebih kondisi yang paling sering terjadi
          </small>

          <div class="mt-2">
            <span class="badge badge-light">Mahasiswa belum siap</span>
            <span class="badge badge-light">Waktu tidak cukup</span>
            <span class="badge badge-light">Metode kurang efektif</span>
            <span class="badge badge-light">Materi terlalu padat</span>
          </div>

          <div class="mt-3 d-flex justify-content-between">
            <div>
              <button 
              class="btn btn-xs btn-outline-primary btn-edit"
              data-question="Kendala Utama di Kelas"
              data-type="tagging"
              data-options="Mahasiswa belum siap,Waktu tidak cukup,Metode kurang efektif,Materi terlalu padat"
              data-required="1"
              >
              Edit
            </button>
              <button class="btn btn-xs btn-outline-danger">Hapus</button>
            </div>
            <small class="text-muted">Wajib diisi</small>
          </div>

        </div>
      </div>

      <!-- ITEM 3: SCALE -->
      <div class="card mb-3">
        <div class="card-body">

          <div class="d-flex justify-content-between">
            <strong>Q3. Tingkat Partisipasi Mahasiswa</strong>
            <span class="badge badge-warning">Skala 1–5</span>
          </div>

          <small class="text-muted">
            Nilai tingkat keaktifan mahasiswa selama pembelajaran
          </small>

          <div class="mt-2">
            <span class="badge badge-secondary">1</span>
            <span class="badge badge-secondary">2</span>
            <span class="badge badge-secondary">3</span>
            <span class="badge badge-secondary">4</span>
            <span class="badge badge-secondary">5</span>
          </div>

          <div class="mt-3 d-flex justify-content-between">
            <div>
              <button 
              class="btn btn-xs btn-outline-primary btn-edit"
              data-question="Tingkat Partisipasi Mahasiswa"
              data-type="scale"
              data-min="1"
              data-max="5"
              data-required="1"
              >
              Edit
            </button>
              <button class="btn btn-xs btn-outline-danger">Hapus</button>
            </div>
            <small class="text-muted">Wajib diisi</small>
          </div>

        </div>
      </div>

      <!-- ITEM 4: GUIDED TEXT -->
      <div class="card mb-3">
        <div class="card-body">

          <div class="d-flex justify-content-between">
            <strong>Q4. Apa yang Berjalan Baik?</strong>
            <span class="badge badge-success">Guided Text</span>
          </div>

          <small class="text-muted">
            Jelaskan hal positif selama pembelajaran berlangsung
          </small>

          <div class="mt-2">
            <textarea class="form-control" rows="2" disabled placeholder="Jawaban dosen..."></textarea>
          </div>

          <div class="mt-3 d-flex justify-content-between">
            <div>
              <button 
              class="btn btn-xs btn-outline-primary btn-edit"
              data-question="Apa yang Berjalan Baik?"
              data-type="guided"
              data-required="1"
              >
              Edit
            </button>
              <button class="btn btn-xs btn-outline-danger">Hapus</button>
            </div>
            <small class="text-muted">Wajib diisi</small>
          </div>

        </div>
      </div>

      <!-- ITEM 5: OPTIONAL TEXT -->
      <div class="card mb-3">
        <div class="card-body">

          <div class="d-flex justify-content-between">
            <strong>Q5. Catatan Tambahan</strong>
            <span class="badge badge-secondary">Opsional</span>
          </div>

          <small class="text-muted">
            Catatan bebas yang tidak tercakup pada pertanyaan lain
          </small>

          <div class="mt-2">
            <textarea class="form-control" rows="2" disabled></textarea>
          </div>

          <div class="mt-3 d-flex justify-content-between">
            <div>
              <button class="btn btn-xs btn-outline-primary">Edit</button>
              <button class="btn btn-xs btn-outline-danger">Hapus</button>
            </div>
            <small class="text-muted">Tidak wajib</small>
          </div>

        </div>
      </div>

      <!-- ADD QUESTION -->
      <div class="text-center mt-4">
        <button class="btn btn-primary" id="btnAddQuestion">
          + Tambah Pertanyaan
        </button>
      </div>

    </div>

    <!-- FOOTER -->
    <div class="card-footer d-flex justify-content-between">

      <div>
        <button class="btn btn-success">Simpan Draft</button>
        <button class="btn btn-primary">Aktifkan Form</button>
      </div>

      <div>
        <button class="btn btn-outline-secondary">Preview</button>
        <button class="btn btn-outline-danger">Reset</button>
      </div>

    </div>

  </div>
</div>







<!-- ========== CARD 3: formula pertanyaan card refleksi ========== -->
<div class="col-md-12">
  <div class="card card-danger">

    <!-- HEADER -->
    <div class="card-header">
      <h5 class="card-title mb-0">Builder Masukan & Insight Prodi</h5>
      <small class="text-light">
        Konfigurasi masukan strategis dosen • Insight & rekomendasi berbasis kelas
      </small>
    </div>

    <!-- BODY -->
    <div class="card-body">


      <!-- ITEM 1: TAGGING -->
      <div class="card mb-3">
        <div class="card-body">

          <div class="d-flex justify-content-between">
            <strong>Q1. Kategori Masalah</strong>
            <span class="badge badge-info">Tagging (Wajib)</span>
          </div>

          <small class="text-muted">
            Pilih kategori utama yang menjadi sumber permasalahan
          </small>

          <div class="mt-2">
            <span class="badge badge-light">Kurikulum</span>
            <span class="badge badge-light">Mahasiswa</span>
            <span class="badge badge-light">Assessment</span>
            <span class="badge badge-light">Infrastruktur</span>
          </div>

          <div class="mt-3 d-flex justify-content-between">
            <div>
              <button class="btn btn-xs btn-outline-primary">Edit</button>
              <button class="btn btn-xs btn-outline-danger">Hapus</button>
            </div>
            <small class="text-muted">Wajib diisi</small>
          </div>

        </div>
      </div>

      <!-- ITEM 2: GUIDED TEXT MASALAH -->
      <div class="card mb-3">
        <div class="card-body">

          <div class="d-flex justify-content-between">
            <strong>Q2. Masalah Utama</strong>
            <span class="badge badge-success">Guided Text (Wajib)</span>
          </div>

          <small class="text-muted">
            Jelaskan masalah utama yang perlu perhatian prodi
          </small>

          <div class="mt-2">
            <textarea class="form-control" rows="2" disabled placeholder="Contoh: Mahasiswa kesulitan mengikuti materi lanjutan karena dasar belum kuat"></textarea>
          </div>

          <div class="mt-3 d-flex justify-content-between">
            <div>
              <button class="btn btn-xs btn-outline-primary">Edit</button>
              <button class="btn btn-xs btn-outline-danger">Hapus</button>
            </div>
            <small class="text-muted">Wajib diisi</small>
          </div>

        </div>
      </div>

      <!-- ITEM 3: GUIDED TEXT DAMPAK -->
      <div class="card mb-3">
        <div class="card-body">

          <div class="d-flex justify-content-between">
            <strong>Q3. Dampak dari Masalah</strong>
            <span class="badge badge-success">Guided Text (Wajib)</span>
          </div>

          <small class="text-muted">
            Jelaskan dampak terhadap proses pembelajaran atau capaian mahasiswa
          </small>

          <div class="mt-2">
            <textarea class="form-control" rows="2" disabled placeholder="Contoh: Capaian CPMK tidak maksimal, banyak mahasiswa tertinggal"></textarea>
          </div>

          <div class="mt-3 d-flex justify-content-between">
            <div>
              <button class="btn btn-xs btn-outline-primary">Edit</button>
              <button class="btn btn-xs btn-outline-danger">Hapus</button>
            </div>
            <small class="text-muted">Wajib diisi</small>
          </div>

        </div>
      </div>

      <!-- ITEM 4: ACTION INPUT -->
      <div class="card mb-3">
        <div class="card-body">

          <div class="d-flex justify-content-between">
            <strong>Q4. Rekomendasi untuk Prodi</strong>
            <span class="badge badge-danger">Action Input (Wajib)</span>
          </div>

          <small class="text-muted">
            Tuliskan rekomendasi konkret yang dapat dilakukan oleh prodi
          </small>

          <div class="mt-2">
            <textarea class="form-control" rows="2" disabled placeholder="Contoh: Tambahkan mata kuliah pengantar di semester awal"></textarea>
          </div>

          <div class="mt-3 d-flex justify-content-between">
            <div>
              <button class="btn btn-xs btn-outline-primary">Edit</button>
              <button class="btn btn-xs btn-outline-danger">Hapus</button>
            </div>
            <small class="text-muted">Wajib diisi</small>
          </div>

        </div>
      </div>

      <!-- ITEM 5: OPTIONAL EVIDENCE -->
      <div class="card mb-3">
        <div class="card-body">

          <div class="d-flex justify-content-between">
            <strong>Q5. Evidence / Konteks Pendukung</strong>
            <span class="badge badge-secondary">Opsional</span>
          </div>

          <small class="text-muted">
            Sertakan contoh kasus, kelas, atau pengalaman yang mendukung
          </small>

          <div class="mt-2">
            <textarea class="form-control" rows="2" disabled placeholder="Contoh: Terjadi di kelas TI-3A pada pertemuan ke-5"></textarea>
          </div>

          <div class="mt-3 d-flex justify-content-between">
            <div>
              <button class="btn btn-xs btn-outline-primary">Edit</button>
              <button class="btn btn-xs btn-outline-danger">Hapus</button>
            </div>
            <small class="text-muted">Tidak wajib</small>
          </div>

        </div>
      </div>

      <!-- ADD QUESTION -->
      <div class="text-center mt-4">
        <button class="btn btn-danger">
          + Tambah Pertanyaan Strategis
        </button>
      </div>

    </div>

    <!-- FOOTER -->
    <div class="card-footer d-flex justify-content-between">

      <div>
        <button class="btn btn-success">Simpan Draft</button>
        <button class="btn btn-danger">Aktifkan Form</button>
      </div>

      <div>
        <button class="btn btn-outline-secondary">Preview</button>
        <button class="btn btn-outline-dark">Export Template</button>
      </div>

    </div>

  </div>
</div>

<!-- ========== CARD 3: formula pertanyaan card refleksi ========== -->

<div class="col-md-12">
  <div class="card card-success">

    <!-- HEADER -->
    <div class="card-header">
      <h5 class="card-title mb-0">Builder Catatan Pengajaran Dosen</h5>
      <small class="text-light">
        Refleksi personal dosen • Untuk pengembangan berkelanjutan
      </small>
    </div>

    <!-- BODY -->
    <div class="card-body">

      <!-- Q1: BERHASIL -->
      <div class="card mb-3">
        <div class="card-body">

          <div class="d-flex justify-content-between">
            <strong>Q1. Apa yang berjalan baik dalam perkuliahan ini?</strong>
            <span class="badge badge-secondary">Opsional</span>
          </div>

          <small class="text-muted">
            Jelaskan metode, strategi, atau pendekatan yang menurut Anda efektif. 
          </small>

          <div class="mt-2">
            <textarea class="form-control" rows="2" disabled placeholder="Contoh: Praktikum langsung membuat mahasiswa lebih cepat memahami konsep."></textarea>
          </div>

          <div class="mt-3 d-flex justify-content-between">
            <div>
              <button class="btn btn-xs btn-outline-primary">Edit</button>
              <button class="btn btn-xs btn-outline-danger">Hapus</button>
            </div>
            <small class="text-muted">Tidak wajib</small>
          </div>

        </div>
      </div>

      <!-- Q2: GAGAL -->
      <div class="card mb-3">
        <div class="card-body">

          <div class="d-flex justify-content-between">
            <strong>Q2. Apa kendala atau hal yang kurang efektif?</strong>
            <span class="badge badge-secondary">Opsional</span>
          </div>

          <small class="text-muted">
            Sebutkan hambatan, kesulitan, atau hal yang tidak berjalan efektif. 
          </small>

          <div class="mt-2">
            <textarea class="form-control" rows="2" disabled placeholder="Contoh: Penjelasan teori terlalu panjang sehingga mahasiswa kurang fokus."></textarea>
          </div>

          <div class="mt-3 d-flex justify-content-between">
            <div>
              <button class="btn btn-xs btn-outline-primary">Edit</button>
              <button class="btn btn-xs btn-outline-danger">Hapus</button>
            </div>
            <small class="text-muted">Tidak wajib</small>
          </div>

        </div>
      </div>

      <!-- Q3: ACTION -->
      <div class="card mb-3">
        <div class="card-body">

          <div class="d-flex justify-content-between">
            <strong>Q3. Apa 1–3 perubahan utama yang akan Anda lakukan pada perkuliahan berikutnya?</strong>
            <span class="badge badge-secondary">Opsional</span>
          </div>

          <small class="text-muted">
            Tuliskan rencana perbaikan konkret untuk pertemuan atau semester berikutnya. 
          </small>

          <div class="mt-2">
            <textarea class="form-control" rows="2" disabled placeholder="Contoh: Mengurangi teori dan menambah sesi praktik di awal pertemuan."></textarea>
          </div>

          <div class="mt-3 d-flex justify-content-between">
            <div>
              <button class="btn btn-xs btn-outline-primary">Edit</button>
              <button class="btn btn-xs btn-outline-danger">Hapus</button>
            </div>
            <small class="text-muted">Tidak wajib</small>
          </div>

        </div>
      </div>

     

      <!-- ADD -->
      <div class="text-center mt-4">
        <button class="btn btn-success">
          + Tambah Refleksi
        </button>
      </div>

    </div>

    <!-- FOOTER -->
    <div class="card-footer d-flex justify-content-between">

      <div>
        <button class="btn btn-success">Simpan Catatan</button>
        <button class="btn btn-outline-primary">Duplikasi Semester Depan</button>
      </div>

      <div>
        <button class="btn btn-outline-secondary">Preview</button>
        <button class="btn btn-outline-dark">Export PDF</button>
      </div>

    </div>

  </div>
</div>


<!-- CARD : Tabel Jenis Input & Strategi Rekapitulasi -->
<div class="card-body">
<table class="table table-bordered table-striped">
  <thead class="bg-primary">
    <tr>
      <th>Input Mode</th>
      <th>Input Type</th>
      <th>Contoh</th>
      <th>Data Type</th>
      <th>Kelebihan</th>
      <th>Kekurangan</th>
      <th>Aggregation Method (Algoritma)</th>
      <th>Output Dashboard</th>
    </tr>
  </thead>
  <tbody>

    <!-- CLOSED - BASIC -->
    <tr>
      <td><strong>Closed</strong></td>
      <td><strong>Selection</strong></td>
      <td>Radio, Dropdown</td>
      <td>Enum (single)</td>
      <td>Mudah dianalisis, cepat diisi</td>
      <td>Insight terbatas</td>
      <td>
        - Count per option<br>
        - Persentase distribusi<br>
        - Ranking pilihan
      </td>
      <td>
        - Pie chart<br>
        - Bar chart<br>
        - Top pilihan
      </td>
    </tr>

    <!-- CLOSED - SCALE -->
    <tr>
      <td><strong>Closed</strong></td>
      <td><strong>Scale</strong></td>
      <td>Skala 1–5</td>
      <td>Integer</td>
      <td>Bisa jadi KPI, mudah divisualisasikan</td>
      <td>Tidak ada alasan</td>
      <td>
        - Mean (rata-rata)<br>
        - Min / Max<br>
        - Tren waktu
      </td>
      <td>
        - KPI score<br>
        - Line chart tren<br>
        - Distribusi nilai
      </td>
    </tr>

    <!-- CLOSED - TAGGING -->
    <tr>
      <td><strong>Closed</strong></td>
      <td><strong>Tagging</strong></td>
      <td>Multi-issue selection</td>
      <td>Array (multi enum)</td>
      <td>Cepat, cocok agregasi populis</td>
      <td>Tidak ada konteks detail</td>
      <td>
        - Count per tag<br>
        - Persentase kemunculan<br>
        - Top issue ranking
      </td>
      <td>
        - Ranking isu<br>
        - Heatmap masalah<br>
        - Distribusi kategori
      </td>
    </tr>



    <!-- OPEN - GUIDED -->
    <tr>
      <td><strong>Open</strong></td>
      <td><strong>Guided Text</strong></td>
      <td>Pertanyaan terarah</td>
      <td>Text</td>
      <td>Lebih konsisten & terstruktur</td>
      <td>Tetap perlu olah</td>
      <td>
        - Group by tema<br>
        - Mapping ke kategori<br>
        - Ringkasan per pertanyaan<br>
        ⚙️ Cara olah:<br>
Grouping per pertanyaan<br>
Mapping ke kategori<br>
Summarization per topik
      </td>
      <td>
        - Insight per kategori<br>
        - Ringkasan per topik<br>
        
      </td>
    </tr>

   

  </tbody>
  <tfoot class="table-secondary">

  <!-- KOMBINASI IDEAL -->
  <tr>
    <td colspan="8">
      <strong>🔥 Kombinasi Ideal untuk Sistem</strong>
      <div class="table-responsive mt-2">
        <table class="table table-sm table-bordered mb-0">
          <thead class="bg-secondary text-white">
            <tr>
              <th>Tujuan</th>
              <th>Input Type</th>
              <th>Output</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Statistik Cepat</td>
              <td>Tagging + Closed</td>
              <td><span class="badge badge-info">Top Issue</span></td>
            </tr>
            <tr>
              <td>KPI</td>
              <td>Scaled</td>
              <td><span class="badge badge-success">Grafik</span></td>
            </tr>
            <tr>
              <td>Insight</td>
              <td>Guided / Open</td>
              <td><span class="badge badge-warning">Narasi</span></td>
            </tr>
            <tr>
              <td>Keputusan</td>
              <td>Action</td>
              <td><span class="badge badge-danger">Rekomendasi</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </td>
  </tr>

  <!-- PIPELINE DATA -->
  <tr>
    <td colspan="8">
      <strong>🔥 Pipeline Data (Alur Pengolahan)</strong>

      <div class="d-flex justify-content-between text-center mt-3 flex-wrap">

        <div class="p-2">
          <div><strong>Input Dosen ⬇️</strong></div>
        </div>



        <div class="p-2">
          <span class="badge badge-info">Tagging</span><br>
          <small>Statistik</small>
        </div>

        <div class="p-2">
          <span class="badge badge-success">Scaled</span><br>
          <small>KPI</small>
        </div>

        <div class="p-2">
          <span class="badge badge-warning">Text</span><br>
          <small>Insight</small>
        </div>

        <div class="p-2">
          <span class="badge badge-danger">Action</span><br>
          <small>Keputusan</small>
        </div>

      </div>
    </td>
  </tr>



  <!-- RULE ENGINE -->
  <tr>
    <td colspan="8">
      <strong>⚙️ Aturan Pengolahan Data (Rules Engine)</strong>

      <div class="mt-2">

        <ul class="mb-1">
          <li><strong>Selection</strong> → Hitung distribusi & ranking pilihan</li>
          <li><strong>Scale</strong> → Hitung rata-rata (KPI) & tren waktu</li>
          <li><strong>Tagging</strong> → Identifikasi top issue & persentase kemunculan</li>
          <li><strong>Guided Text</strong> → Kelompokkan berdasarkan tema & ringkas insight</li>
        </ul>

      </div>
    </td>
  </tr>

  <!-- PIPELINE KONTEKSTUAL -->
  <tr>
    <td colspan="8">
      <strong>🔁 Pipeline Data Kontekstual</strong>

      <div class="mt-3 text-center">

        <span class="badge badge-info">Tagging</span>
        <small>Identifikasi Masalah</small>

        ➜

        <span class="badge badge-warning">Guided Text</span>
        <small>Penjelasan Konteks</small>

        ➜

        <span class="badge badge-success">Scale</span>
        <small>Pengukuran Dampak</small>

        ➜

        <span class="badge badge-danger">Action</span>
        <small>Rekomendasi Perbaikan</small>

      </div>
    </td>
  </tr>

</tfoot>
</table>
</div>





















        </div>
        </div>
      </div>
    </div>
  </section>



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
            <label for="lembaga" class="form-label">Status</label>
            <select name="lembaga" id="lembaga" class="form-select">
              <option value="">-- Pilih --</option>
              <option value="IABEE" >pilihan 1</option>
              <option value="LAM TEKNIK" >pilihan 2</option>
              <option value="BATAP" >pilihan 3</option>
              <option value="EDUSQUAD">pilihan 4</option>
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
          
          Modul Konfigurasi digunakan untuk pengaturan sistem yang bersifat administratif, seperti pengaturan (set), pengeditan template, serta pengaktifan atau penonaktifan fitur tertentu. Perubahan yang dilakukan pada modul ini akan memengaruhi perilaku dan mekanisme kerja sistem ke depannya.

Perlu dipahami bahwa perubahan konfigurasi tidak mengubah atau menghapus data historis yang telah tersimpan sebelumnya. Penyesuaian hanya berlaku pada aturan, tampilan, atau proses sistem setelah konfigurasi diterapkan.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>











<!-- MODAL EDIT PERTANYAAN -->
<div class="modal fade" id="modalEditQuestion" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Edit Pertanyaan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <!-- Pertanyaan -->
        <div class="mb-3">
          <label class="form-label">Judul Pertanyaan</label>
          <input type="text" id="edit_question_text" class="form-control">
        </div>

        <!-- Tipe -->
        <div class="mb-3">
          <label class="form-label">Tipe Jawaban</label>
          <select id="edit_type" class="form-select">
            <option value="selection">Selection</option>
            <option value="tagging">Tagging</option>
            <option value="scale">Skala</option>
            <option value="guided">Guided Text</option>
            <!-- <option value="open">Open Text</option> -->
          </select>
        </div>

        <!-- OPSI -->
        <div class="mb-3" id="edit_options_group">
          <label class="form-label">Opsi Jawaban</label>
          <textarea id="edit_options" class="form-control"></textarea>
        </div>

        <!-- SCALE -->
        <div class="mb-3" id="edit_scale_group">
          <label class="form-label">Range Skala</label>
          <div class="d-flex">
            <input type="number" id="scale_min" class="form-control me-2">
            <input type="number" id="scale_max" class="form-control">
          </div>
        </div>

        <!-- REQUIRED -->
        <div class="mb-3">
          <label class="form-label">Status</label>
          <select id="edit_required" class="form-select">
            <option value="1">Wajib</option>
            <option value="0">Opsional</option>
          </select>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-primary" id="btnSaveEdit">Simpan Perubahan</button>
      </div>

    </div>
  </div>
</div>


<script>
$(document).on("click", ".btn-edit", function () {

  let q = $(this).data("question");
  let type = $(this).data("type");
  let options = $(this).data("options") || "";
  let required = $(this).data("required");
  let min = $(this).data("min") || "";
  let max = $(this).data("max") || "";

  if (required === undefined) required = "1";

  $("#edit_question_text").val(q);
  $("#edit_type").val(type);
  $("#edit_options").val(options);
  $("#edit_required").val(required);
  $("#scale_min").val(min);
  $("#scale_max").val(max);

  toggleField(type);

  let modal = new bootstrap.Modal(document.getElementById('modalEditQuestion'));
  modal.show();
});

// toggle
function toggleField(type) {
  if (type === "selection" || type === "tagging") {
    $("#edit_options_group").show();
    $("#edit_scale_group").hide();
  } else if (type === "scale") {
    $("#edit_options_group").hide();
    $("#edit_scale_group").show();
  } else {
    $("#edit_options_group").hide();
    $("#edit_scale_group").hide();
  }
}

$("#edit_type").on("change", function () {
  toggleField($(this).val());
});

</script>















<div class="modal fade" id="modalAddQuestion" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Tambah Pertanyaan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <!-- Judul -->
        <div class="mb-3">
          <label class="form-label">Judul Pertanyaan</label>
          <input type="text" id="add_question_text" class="form-control">
        </div>

        <!-- Tipe -->
        <div class="mb-3">
          <label class="form-label">Tipe Jawaban</label>
          <select id="add_type" class="form-select">
            <option value="">-- Pilih --</option>
            <option value="selection">Selection</option>
            <option value="tagging">Tagging</option>
            <option value="scale">Skala</option>
            <option value="guided">Guided Text</option>
          </select>
        </div>

        <!-- OPSI -->
        <div class="mb-3 d-none" id="add_options_group">
          <label class="form-label">Opsi Jawaban</label>
          <textarea id="add_options" class="form-control" placeholder="Pisahkan dengan koma / baris baru"></textarea>
        </div>

        <!-- SCALE -->
        <div class="mb-3 d-none" id="add_scale_group">
          <label class="form-label">Range Skala</label>
          <div class="d-flex">
            <input type="number" id="add_scale_min" class="form-control me-2" placeholder="Min">
            <input type="number" id="add_scale_max" class="form-control" placeholder="Max">
          </div>
        </div>

        <!-- GUIDED -->
        <div class="mb-3 d-none" id="add_guided_group">
          <label class="form-label">Topik / Tema</label>
          <input type="text" id="add_guided_topic" class="form-control">
        </div>

        <!-- STATUS -->
        <div class="mb-3">
          <label class="form-label">Status</label>
          <select id="add_required" class="form-select">
            <option value="1">Wajib</option>
            <option value="0">Opsional</option>
          </select>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-primary" id="btnSaveAdd">Simpan</button>
      </div>

    </div>
  </div>
</div>
<script>
  // buka modal
$("#btnAddQuestion").on("click", function () {

  // reset semua field
  $("#add_question_text").val("");
  $("#add_type").val("");
  $("#add_options").val("");
  $("#add_scale_min").val("");
  $("#add_scale_max").val("");
  $("#add_guided_topic").val("");
  $("#add_required").val("1");

  toggleAddField("");

  let modal = new bootstrap.Modal(document.getElementById('modalAddQuestion'));
  modal.show();
});


// toggle field berdasarkan tipe
function toggleAddField(type) {

  $("#add_options_group").addClass("d-none");
  $("#add_scale_group").addClass("d-none");
  $("#add_guided_group").addClass("d-none");

  if (type === "selection" || type === "tagging") {
    $("#add_options_group").removeClass("d-none");
  } 
  else if (type === "scale") {
    $("#add_scale_group").removeClass("d-none");
  } 
  else if (type === "guided") {
    $("#add_guided_group").removeClass("d-none");
  }
}


// trigger saat type berubah
$("#add_type").on("change", function () {
  toggleAddField($(this).val());
});


//osional (OPSIONAL) Validasi sebelum simpan
$("#btnSaveAdd").on("click", function () {

  let type = $("#add_type").val();

  if (!$("#add_question_text").val()) {
    alert("Judul pertanyaan wajib diisi");
    return;
  }

  if (!type) {
    alert("Pilih tipe jawaban");
    return;
  }

  if ((type === "selection" || type === "tagging") && !$("#add_options").val()) {
    alert("Opsi jawaban harus diisi");
    return;
  }

  if (type === "scale") {
    let min = parseInt($("#add_scale_min").val());
    let max = parseInt($("#add_scale_max").val());

    if (isNaN(min) || isNaN(max) || min >= max) {
      alert("Range skala tidak valid");
      return;
    }
  }

  if (type === "guided" && !$("#add_guided_topic").val()) {
    alert("Topik harus diisi");
    return;
  }

  // lanjut submit (AJAX / form)
  alert("Data siap disimpan!");
});
</script>
<?php include('5script.php'); ?>
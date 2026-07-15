<?php $page = 'pustaka_tugas_akhir'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar--.php'); ?>


<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Pustaka Tugas Akhir
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
            <!-- <div class="card-body">
              <div class="row">

                <div class="col-md-4">
                  <b>Tahun Akademik:</b> 2025 - Genap
                </div>
                <div class="col-md-4">
                  <b>Topik Tugas Akhir:</b> Semua
                </div>
                <div class="col-md-4">
                  <b>Jenis TA:</b> Semua
                </div>

              </div>
            </div> -->

            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalResetData">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>
              </div>
            </div>

          </div>


          <!-- ========== CARD : Tabel Granular ========== -->
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm datatables1">
                  <thead>
                    <tr class="text-uppercase text-center">
                      <th width="5px">No.</th>
                      <th>Tahun Akademik</th>
                      <th>Topik Tugas Akhir</th>
                      <th>Judul</th>
                      <th>Jenis TA</th>
                      <th>Dosen Pembimbing</th>
                      <th>Mahasiswa</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td class="text-center">1</td>
                      <td class="text-center">2025 - Genap</td>
                      <td>Manajemen Sumber Daya Manusia</td>
                      <td>PENGARUH REKRUTMEN, SELEKSI KARYAWAN, DAN PELATIHAN KERJA TERHADAP KINERJA TUGAS DAN KINERJA ADAPTIF KARYAWAN</td>
                      <td class="text-center"><span class="badge badge-info">Skripsi</span></td>
                      <td>143110401<br>Muafi, Prof., Dr., S.E., M.Si.</td>
                      <td>21311231<br>Abdan Tsany Mufid Musyaffa'</td>
                    </tr>

                    <tr>
                      <td class="text-center">2</td>
                      <td class="text-center">2025 - Genap</td>
                      <td>Manajemen Keuangan</td>
                      <td>Dampak piutang terhadap kelancaran operasional dan stabilitas kas perusahaan</td>
                      <td class="text-center"><span class="badge badge-warning">Magang</span></td>
                      <td>883110109<br>Sri Mulyati, Dra., M.Si.</td>
                      <td>22311247<br>Angga Reksa Bahari</td>
                      
                    </tr>

                    <tr>
                      <td class="text-center">3</td>
                      <td class="text-center">2025 - Genap</td>
                      <td>Manajemen Keuangan</td>
                      <td>Analisis Penerapan Fungsi Actuating dan Controlling dalam Menangani Kasus Double Transfer pada Unit Bendahara Rumah Sakit JIH Yogyakarta</td>
                      <td class="text-center"><span class="badge badge-warning">Magang</span></td>
                      <td>863110101<br>Nurfauziah, Dra., M.M.</td>
                      <td>22311341<br>Anisah Indriani</td>
                      
                    </tr>

                    <tr>
                      <td class="text-center">4</td>
                      <td class="text-center">2025 - Genap</td>
                      <td>Manajemen Sumber Daya Manusia</td>
                      <td>PENGARUH KOMPETENSI DAN KOMITMEN ORGANISASI TERHADAP KINERJA KARYAWAN PADA PT. BPR BKK KEBUMEN</td>
                      <td class="text-center"><span class="badge badge-warning">Magang</span></td>
                      <td>133111102<br>Fereshti Nurdiana Dihan, S.E., M.M.</td>
                      <td>20311414<br>Sandi Ariyanto Putra</td>
                      
                    </tr>

                    <tr>
                      <td class="text-center">5</td>
                      <td class="text-center">2025 - Genap</td>
                      <td>Manajemen Sumber Daya Manusia</td>
                      <td>PENGARUH DIGITAL ORGANIZATIONAL CULTURE TERHADAP INNOVATIVE WORK BEHAVIOR PADA KARYAWAN E-COMMERCE DENGAN DIMEDIASI OLEH DIGITAL SELF-EFFICACY DAN DIGITAL TECHNOLOGY DEPENDENCE</td>
                      <td class="text-center"><span class="badge badge-info">Skripsi</span></td>
                      <td>243111205<br>Nabila Kharimah Vedy, S.I.A, M.S.M</td>
                      <td>18311499<br>Muhammad Rayhan Al Farizi</td>
                      
                    </tr>

                    <tr>
                      <td class="text-center">6</td>
                      <td class="text-center">2025 - Genap</td>
                      <td>Manajemen Pemasaran</td>
                      <td>Analysis of the Implementation of Digital Content Marketing through Instagram for Tour and Travel Organizer Services</td>
                      <td class="text-center"><span class="badge badge-warning">Magang</span></td>
                      <td>-</td>
                      <td>22311509<br>Salaisa Amany Fatiha</td>
                      
                    </tr>

                    <tr>
                      <td class="text-center">7</td>
                      <td class="text-center">2025 - Genap</td>
                      <td>Manajemen Sumber Daya Manusia</td>
                      <td>&ldquo;PERAN FUNGSI HUMAN CAPITAL DALAM MENINGKATKAN SUMBER DAYA MANUSIA PADA PT. PERTAMINA PATRA NIAGA&rdquo;</td>
                      <td class="text-center"><span class="badge badge-warning">Magang</span></td>
                      <td>143110401<br>Muafi, Prof., Dr., S.E., M.Si.</td>
                      <td>21311422<br>Arya Julizar Saputra</td>
                      
                    </tr>

                    <tr>
                      <td class="text-center">8</td>
                      <td class="text-center">2025 - Genap</td>
                      <td>Manajemen Pemasaran</td>
                      <td>Interaktivitas Live Streaming E-Commerce Sebagai Pemicu Perilaku Pembelian Impulsif (Urge To Buy Impulsively) Pada Konsumen E-Commerce Shopee</td>
                      <td class="text-center"><span class="badge badge-info">Skripsi</span></td>
                      <td>113110409<br>Raden Roro Ratna Roostika, S.E., MAC., Ph.D</td>
                      <td>22311032<br>Yousi Kurnia Artha</td>
                      
                    </tr>

                    <tr>
                      <td class="text-center">9</td>
                      <td class="text-center">2025 - Genap</td>
                      <td>Manajemen Operasi</td>
                      <td>Implementasi Sistem Manajemen Digital Berbasis Power Apps di Departemen Quality Assurance untuk Meningkatkan Efisiensi dan Efektivitas Kerja</td>
                      <td class="text-center"><span class="badge badge-warning">Magang</span></td>
                      <td>169111301<br>Dessy Isfianadewi, Dr., S.E., M.M.</td>
                      <td>22311457<br>Wahyu Dwi Prasetya</td>
                      
                    </tr>

                    <tr>
                      <td class="text-center">10</td>
                      <td class="text-center">2025 - Genap</td>
                      <td>Manajemen Pemasaran</td>
                      <td>Brand Experience dan Brand Love Mengoptimalkan Brand Loyalty Melalui Self-Determination Pada Industri Game Online</td>
                      <td class="text-center"><span class="badge badge-info">Skripsi</span></td>
                      <td>183111301<br>Endy Gunanto Marsasi, Dr., R., M.M.</td>
                      <td>22311495<br>Muhammad Dzakiy Al Fuadi</td>
                      
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
<!-- /.content-wrapper -->

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
            <b>Informasi:</b> Halaman ini otomatis menampilkan data tahun akademik terbaru saat pertama dibuka. Data awal yang tampil adalah tahun akademik [2025 - Genap].
          </div>
          <div class="mb-3">
            <label for="tahun_akademik" class="form-label">Tahun Akademik</label>
            <select name="tahun_akademik" id="tahun_akademik" class="form-select">
              <option value="">-- Pilih Tahun Akademik --</option>
              <option value="2025-genap">2025 - Genap</option>
              <option value="2025-ganjil">2025 - Ganjil</option>
              <option value="2024-genap">2024 - Genap</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="topik" class="form-label">Topik Tugas Akhir</label>
            <select name="topik" id="topik" class="form-select">
              <option value="">-- Pilih Topik --</option>
              <option value="SDM">Manajemen Sumber Daya Manusia</option>
              <option value="Keuangan">Manajemen Keuangan</option>
              <option value="Pemasaran">Manajemen Pemasaran</option>
              <option value="Operasi">Manajemen Operasi</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="jenis_ta" class="form-label">Jenis TA</label>
            <select name="jenis_ta" id="jenis_ta" class="form-select">
              <option value="">-- Pilih Jenis TA --</option>
              <option value="Skripsi">Skripsi</option>
              <option value="Magang">Magang</option>
            </select>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info">Terapkan Filter</button>
        </div>

      </form>
    </div>
  </div>
</div>


<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalTambahDataLabel">Tambah Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="modal-body">

          <!-- Informasi -->
          <div class="alert alert-warning mb-3 py-2" role="alert" style="font-size: 0.9rem;">
            <i class="fas fa-info-circle me-1"></i>
            <strong>Catatan:</strong> Semua field yang diberi tanda <span class="text-danger">*</span> wajib diisi.
          </div>

          <!-- Form Inputs -->
          <div class="mb-3">
            <label for="tahun_akademik" class="form-label">Tahun Akademik <span class="text-danger">*</span></label>
            <select class="form-select" id="tahun_akademik" name="tahun_akademik" required>
              <option value="">-- Pilih Tahun Akademik --</option>
              <option value="2025-genap">2025 - Genap</option>
              <option value="2025-ganjil">2025 - Ganjil</option>
              <option value="2024-genap">2024 - Genap</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="topik" class="form-label">Topik Tugas Akhir <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="topik" name="topik" placeholder="Masukkan Topik Tugas Akhir" required>
          </div>

          <div class="mb-3">
            <label for="judul" class="form-label">Judul <span class="text-danger">*</span></label>
            <textarea class="form-control" id="judul" name="judul" rows="3" placeholder="Masukkan Judul Tugas Akhir" required></textarea>
          </div>

          <div class="mb-3">
            <label for="jenis_ta" class="form-label">Jenis TA <span class="text-danger">*</span></label>
            <select class="form-select" id="jenis_ta" name="jenis_ta" required>
              <option value="">-- Pilih Jenis TA --</option>
              <option value="Skripsi">Skripsi</option>
              <option value="Magang">Magang</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="kode_dosen" class="form-label">Kode Dosen Pembimbing <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="kode_dosen" name="kode_dosen" placeholder="Masukkan Kode Dosen Pembimbing" required>
          </div>

          <div class="mb-3">
            <label for="nim" class="form-label">NIM Mahasiswa <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM Mahasiswa" required>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Impor -->
<div class="modal fade" id="modalImpor" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Impor Data</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <div class="alert alert-warning mb-3 py-2" role="alert" style="font-size: 0.9rem;">
          <i class="fas fa-exclamation-triangle me-1"></i>
          <strong>Penting:</strong> Pastikan file yang akan diimpor menggunakan <strong>template resmi</strong> yang sudah disediakan. Menggunakan file lain atau format berbeda dapat menyebabkan <strong>kesalahan impor</strong>.
        </div>

        <label class="form-label">Pilih File:</label>
        <input type="file" class="form-control mb-3" accept=".xlsx,.xls">

        <a href="template-impor-tugas-akhir.xls" class="btn btn-sm btn-outline-success w-100">Download Template</a>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Impor</button>
      </div>

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
          Halaman ini menampilkan daftar Pustaka Tugas Akhir mahasiswa Program Studi Manajemen,
          mencakup topik, judul, jenis tugas akhir (Skripsi/Magang), dosen pembimbing, dan
          mahasiswa penyusun.
        </p>
        <p>
          Misalnya:
          - Tombol Filter digunakan untuk memfilter data berdasarkan tahun akademik, topik, dan jenis TA.
          - Tombol Impor digunakan untuk memasukkan data dari file Excel.
          - Tombol Reset akan menghapus semua data di tabel, gunakan dengan hati-hati.
        </p>
        <p>
          Anda bisa menambahkan banyak paragraf atau daftar sesuai kebutuhan.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalResetData" tabindex="-1" aria-labelledby="modalResetDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Konfirmasi Reset Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form action="proses_reset_tugas_akhir.php" method="POST">
        <div class="modal-body text-center">

          <!-- ID disimpan sebagai hidden input -->
          <input type="hidden" name="id_ta" id="hapus_id_ta">

          <p class="fs-5">Apakah Anda yakin ingin menghapus semua data ini?</p>

        </div>

        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger">Hapus</button>
        </div>

      </form>
    </div>
  </div>
</div>


<?php include('5script.php'); ?>

<?php $page = 'pemetaan_cpmk'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Daftar Capaian Mata Kuliah  per Set Pemetaan
      <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
                <i class="fas fa-question-circle"></i>
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
            <div class="card-header">
              <h5 class="card-title mb-0"><i class="fas fa-filter "></i> Judul Tabel yang terdampak tombol aksi ini </h5>
              
            </div>
            <div class="card-body ">
              <div class="row">

                <div class="col-md-6">
                  <b>Angkatan:</b> 2023 &nbsp;
                </div>                
                <div class="col-md-6">
                  <b>Peminatan:</b> Peminatan B
                </div>
                <div class="col-md-6">
                  <b>Jalur:</b> Reguler
                </div>
                <div class="col-md-6">
                  <b>Status:</b> Aktif
                </div>

              </div>
            </div>
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
                 <!-- <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button> -->
                
              </div>
            </div>
          </div>

          <!-- ========== CARD : Tabel granular ========== -->
<div class="card">
             <div class="card-body">
              <div class="table-responsive">
              <table class="table table1 table-bordered table-striped table-sm datatables1">
                  <thead>
                    <tr class="text-uppercase text-center">
                      <th width="5px">No.</th>
                      <th>Kurikulum</th>
                      <th>Kode MK</th>
                      <th>Nama MK</th>                    
                      <th>Jenis</th>
                      <th>Semester Tempuh</th>
                      <!-- <th>Level Perkembangan</th> -->
                      <th>Jumlah CPMK</th>
                      <!-- <th>Jumlah SKS</th> -->
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td class="text-center">SP01</td>
                      <td>STS704</td>
                      <td>Metode Pelaksanaan Bangunan</td>
                      <td class="text-center"><span class="badge badge-success">Wajib</span></td>
                      <td class="text-center">1</td>
                      <!-- <td class="text-center">Introductory</td> -->
                      <td>3</td>
                      <!-- <td>3</td> -->
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalDeskripsiCPMK">🔑 Deskripsi CPMK</button>

                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEditAkun">✏️</button>
                        <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalHapusAkun">🗑️</button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">2</td>
                      <td class="text-center">SP01</td>
                      <td>STS913</td>
                      <td>Struktur Komposit</td>
                      <td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                      <td class="text-center">1</td>
                      <!-- <td class="text-center">Introductory</td> -->
                      <td>3</td>
                      <!-- <td>3</td> -->
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-warning">🔑 Deskripsi CPMK</button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEditAkun">✏️</button>
                        <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalHapusAkun">🗑️</button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">3</td>
                      <td class="text-center">SP01</td>
                      <td>51175111</td>
                      <td>Building Structures Design</td>                   
                      <td class="text-center"><span class="badge badge-success">Wajib</span></td>
                      <td class="text-center">2</td>
                      <!-- <td class="text-center">Reinforcement</td> -->
                      <td>3</td>
                      <!-- <td>3</td> -->
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-warning">🔑 Deskripsi CPMK</button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEditAkun">✏️</button>
                        <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalHapusAkun">🗑️</button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">4</td>
                      <td class="text-center">SP01</td>
                      <td>STS-101</td>
                      <td>Engineering Statistics</td>                    
                      <td class="text-center"><span class="badge badge-success">Wajib</span></td>
                      <td class="text-center">2</td>
                      <!-- <td class="text-center">Reinforcement</td> -->
                      <td>2</td>
                      <!-- <td>3</td> -->
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-warning">🔑 Deskripsi CPMK</button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEditAkun">✏️</button>
                        <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalHapusAkun">🗑️</button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">5</td>
                      <td class="text-center">SP01</td>
                      <td>STS307</td>
                      <td>Bahan Perkerasan Jalan (+Pr)</td>
                      <td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                      <td class="text-center">3</td>
                      <!-- <td class="text-center">Reinforcement</td> -->
                      <td>4</td>
                      <!-- <td>3</td> -->
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-warning">🔑 Deskripsi CPMK</button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEditAkun">✏️</button>
                        <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalHapusAkun">🗑️</button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">6</td>
                      <td class="text-center">SP01</td>
                      <td>STS702</td>
                      <td>Struktur Baja</td>
                      <td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                      <td class="text-center">4</td>
                      <!-- <td class="text-center">Reinforcement</td> -->
                      <td>3</td>
                      <!-- <td>3</td> -->
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-warning">🔑 Deskripsi CPMK</button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEditAkun">✏️</button>
                        <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalHapusAkun">🗑️</button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">7</td>
                      <td class="text-center">SP01</td>
                      <td>51195142</td>
                      <td>Perancangan Struktur Jembatan</td>
                      <td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                      <td class="text-center">5</td>
                      <!-- <td class="text-center">Reinforcement</td> -->
                      <td>2</td>
                      <!-- <td>2</td> -->
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-warning">🔑 Deskripsi CPMK</button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEditAkun">✏️</button>
                        <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalHapusAkun">🗑️</button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">8</td>
                      <td class="text-center">SP01</td>
                      <td>51155081</td>
                      <td>Introduction to Earthquake Engineering</td>
                      <td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                      <td class="text-center">6</td>
                      <!-- <td class="text-center">Mastery</td> -->
                      <td>3</td>
                      <!-- <td>2</td> -->
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-warning">🔑 Deskripsi CPMK</button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEditAkun">✏️</button>
                        <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalHapusAkun">🗑️</button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">9</td>
                      <td class="text-center">SP01</td>
                      <td>STS904</td>
                      <td>BIM untuk Manajemen Konstruksi</td>
                      <td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                      <td class="text-center">7</td>
                      <!-- <td class="text-center">Mastery</td> -->
                      <td>2</td>
                      <!-- <td>3</td> -->
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-warning">🔑 Deskripsi CPMK</button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEditAkun">✏️</button>
                        <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalHapusAkun">🗑️</button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">10</td>
                      <td class="text-center">SP01</td>
                      <td>51153061</td>
                      <td>Water Structures Design</td>
                      <td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                      <td class="text-center">8</td>
                      <!-- <td class="text-center">Mastery</td> -->
                      <td>3</td>
                      <!-- <td>3</td> -->
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-warning">🔑 Deskripsi CPMK</button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEditAkun">✏️</button>
                        <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalHapusAkun">🗑️</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card-body -->
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
            <b>Informasi:</b> Halaman ini otomatis menampilkan data angkatan terbaru saat pertama dibuka. Data awal yang tampil adalah angkatan [2025].
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Angkatan --</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="NonAktif">NonAktif</option>
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



<!-- ================= MODAL TAMBAH DESKRIPSI CPMK ================= -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Header -->
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalTambahDataLabel">
          ➕ Tambah Deskripsi CPMK
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Form -->
      <form id="formTambahCPMK">
        <div class="modal-body">

          <!-- Informasi -->
          <div class="alert alert-warning mb-4" style="font-size: 0.9rem;">
            <b>Perhatian:</b> Pastikan kurikulum, set pemetaan, dan mata kuliah sudah sesuai sebelum menambahkan deskripsi CPMK.
            Kolom bertanda <span class="text-danger">*</span> wajib diisi.
          </div>

          <!-- Pilih Kurikulum -->
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label">
              Kurikulum <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <select class="form-select" name="kurikulum" required>
                <option value="" selected disabled>-- Pilih Kurikulum --</option>
                <option value="2020">Kurikulum 2020</option>
                <option value="2022">Kurikulum 2022</option>
                <option value="2024">Kurikulum 2024</option>
              </select>
            </div>
          </div>

          <!-- Pilih Set Pemetaan -->
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label">
              Set Pemetaan <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <select class="form-select" name="set_pemetaan" required>
                <option value="" selected disabled>-- Pilih Set Pemetaan --</option>
                <option value="SET-SP01-01">SET-SP01-01</option>
                <option value="SET-SP01-02">SET-SP01-02</option>
                <option value="SET-SP01-03">SET-SP01-03</option>
              </select>
            </div>
          </div>

          <!-- Pilih Mata Kuliah -->
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label">
              Mata Kuliah <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <select class="form-select" name="mata_kuliah" required>
                <option value="" selected disabled>-- Pilih Mata Kuliah --</option>
                <option value="STS704">STS704 - Metode Pelaksanaan Bangunan</option>
                <option value="STS913">STS913 - Struktur Komposit</option>
                <option value="STS702">STS702 - Struktur Baja</option>
              </select>
            </div>
          </div>

          <!-- Pilih CPMK ke- -->
          <div class="row mb-3">
            <label for="jumlah_cpmk" class="col-sm-3 col-form-label">
              Jumlah CPMK <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <input 
              type="number" 
              class="form-control" 
              id="jumlah_cpmk" 
              name="jumlah_cpmk" 
              min="1" 
              placeholder="Masukkan jumlah CPMK" 
              required>
            </div>
          </div>


         

        </div>

        <!-- Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Batal
          </button>
          <button type="submit" class="btn btn-primary">
            💾 Simpan Deskripsi
          </button>
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

        <a href="template-impor-mahasiswa.xls" class="btn btn-sm btn-outline-success w-100">Download Template</a>
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
          data yang tampil secara default, merupakan daftar mata kuliah di kurikulum yg <i>show</i> dari set pemetaan. Dibuat default, jumlah CPMK 10, namun yg aktif adalah yang di definisikan di kolom 'Jumlah CPMK'
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal modalDeskripsiCPMK -->
<div class="modal fade" id="modalDeskripsiCPMK" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <!-- HEADER -->
            <div class="modal-header bg-warning">
                <h5 class="modal-title">Deskripsi CPMK |  Metode Pelaksanaan Bangunan - STS704 (3 CPMK)</h5>
                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            </div>

            <!-- FORM START -->
            <form action="simpan_deskripsi_cpmk.php" method="POST">

                <div class="modal-body">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="bg-light">
                                <tr>
                                    <th style="width: 60px;">CPMK</th>
                                    <th>Deskripsi (IDN)</th>
                                    <th>Deskripsi (EN)</th>
                                    <!-- <th style="width: 120px;">Status</th> -->
                                </tr>
                            </thead>

                            <tbody>
                                <!-- CPMK 1 -->
                                <tr>
                                    <td>
                                        1
                                        <input type="hidden" name="cpmk_id[]" value="1">
                                    </td>
                                    <td>
                                        <input type="text" name="deskripsi_idn[]" class="form-control" 
                                               value="Mahasiswa mampu menjelaskan tentang proses adsorpsi dan karakteristik material adsorben">
                                    </td>
                                    <td>
                                        <input type="text" name="deskripsi_en[]" class="form-control" placeholder="Description in English">
                                    </td>
                                   <!--  <td>
                                        <select name="status[]" class="form-control">
                                            <option value="Aktif" selected>Aktif</option>
                                            <option value="Nonaktif">Nonaktif</option>
                                        </select>
                                    </td> -->
                                </tr>

                                <!-- CPMK 2 -->
                                <tr>
                                    <td>
                                        2
                                        <input type="hidden" name="cpmk_id[]" value="2">
                                    </td>
                                    <td>
                                        <input type="text" name="deskripsi_idn[]" class="form-control" 
                                               value="Mahasiswa mampu menyelesaikan persamaan isotherm adsorpsi berdasarkan data yang tersedia">
                                    </td>
                                    <td>
                                        <input type="text" name="deskripsi_en[]" class="form-control" placeholder="Description in English">
                                    </td>
                                   <!--  <td>
                                        <select name="status[]" class="form-control">
                                            <option value="Aktif" selected>Aktif</option>
                                            <option value="Nonaktif">Nonaktif</option>
                                        </select>
                                    </td> -->
                                </tr>

                                <!-- CPMK 3 -->
                                <tr>
                                    <td>
                                        3
                                        <input type="hidden" name="cpmk_id[]" value="3">
                                    </td>
                                    <td>
                                        <input type="text" name="deskripsi_idn[]" class="form-control" 
                                               value="Mahasiswa mampu menjelaskan tentang aplikasi adsorpsi dalam industri kimia">
                                    </td>
                                    <td>
                                        <input type="text" name="deskripsi_en[]" class="form-control" placeholder="Description in English">
                                    </td>
                                    <!-- <td>
                                        <select name="status[]" class="form-control">
                                            <option value="Aktif" selected>Aktif</option>
                                            <option value="Nonaktif">Nonaktif</option>
                                        </select>
                                    </td> -->
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>

                <!-- FOOTER -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                </div>

            </form>
            <!-- FORM END -->

        </div>
    </div>
</div>
<?php include('5script.php'); ?>
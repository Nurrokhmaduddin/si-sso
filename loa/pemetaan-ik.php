<?php $page = 'pemetaan_ik'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Daftar Indikator Kompetensi
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
            
            <div class="card-body ">
              <div class="row">

                <div class="col-md-6">
                  <b>Kurikulum:</b> Merdeka Belajar &nbsp;
                </div>                
               <!--  <div class="col-md-6">
                  <b>Set Pemetaan:</b> Peta B
                </div> -->

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
                      <th>kurikulum </th>
                      <th>Kode IK</th>
                      <th>Deskripsi IK</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td class="text-center">K25 full stage</td>
                      <td>IK 12.1</td>
                      <td>Mampu memahami perlunya pengembangan profesi yang terus menerus</td>
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-warning">🔑</button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">2</td>
                      <td class="text-center">K25 full stage</td>
                      <td>IK 12.2</td>
                      <td>Mampu untuk memperoleh informasi dan pengetahuan terbaru</td>
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-warning">🔑</button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">3</td>
                      <td class="text-center">K25 full stage</td>
                      <td>IK 11.2</td>
                      <td>Mampu menganalisis dan mengartikan data hasil eksperimen</td>  
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-warning">🔑</button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">4</td>
                      <td class="text-center">K25 full stage</td>
                      <td>IK 4.2</td>
                      <td>Mampu menulis ide/gagasan/laporan sesuai kaidah ilmiah dalam bahasa Indonesia dan bahasa Inggris</td>   
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-warning">🔑</button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">5</td>
                      <td class="text-center">K25 full stage</td>
                      <td>IK 4.1</td>
                      <td>Mampu melakukan presentasi yang efektif dalam bahasa Indonesia dan bahasa Inggris</td>
                      <td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-warning">🔑</button>
                        <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
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



<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalTambahDataLabel">➕ Tambah Data</h5>
        <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="formTambahData" enctype="multipart/form-data">
        <div class="modal-body">

          <!-- Catatan wajib isi -->
          <div class="alert alert-warning mb-3" role="alert" style="font-size: 0.9rem;">
            <b>Penting:</b> Kolom dengan bintang merah (<span class="text-danger">*</span>) wajib diisi!
          </div>
          
          <div class="row mb-3">
            <label for="username" class="col-sm-3 col-form-label">Username <span class="text-danger">*</span></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
            </div>
          </div>

          <!-- Profile Name -->
          <div class="row mb-3">
            <label for="displayName" class="col-sm-3 col-form-label">Fullname <span class="text-danger">*</span></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="displayName" name="displayName" placeholder="Masukkan nama pengguna" required>
            </div>
          </div>

          <!-- Email -->
          <div class="row mb-3">
            <label for="email" class="col-sm-3 col-form-label">Email <span class="text-danger">*</span></label>
            <div class="col-sm-9">
              <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
            </div>
          </div>

          <!-- Nomor HP -->
          <div class="row mb-3">
            <label for="nomorHP" class="col-sm-3 col-form-label">Nomor HP <span class="text-danger">*</span></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nomorHP" name="nomorHP" placeholder="Masukkan nomor HP/WA" required>
            </div>
          </div>

          <!-- Username -->

          <!-- Status -->
          <div class="row mb-3">
            <label for="status" class="col-sm-3 col-form-label">Status <span class="text-danger">*</span></label>
            <div class="col-sm-9">
              <select class="form-select" id="status" name="status" required>
                <option value="Aktif" selected>Aktif</option>
                <option value="Nonaktif">Nonaktif</option>
              </select>
            </div>
          </div>

          <!-- Password -->
          <div class="row mb-3">
            <label for="password" class="col-sm-3 col-form-label">Password <span class="text-danger">*</span></label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
              <small class="text-muted">
                Ketentuan Pembuatan Password:<br>
                1. Minimal 8 karakter.<br>
                2. Mengandung huruf besar, huruf kecil, angka, dan simbol.<br>
                3. Hindari nama pribadi, tanggal lahir, atau pola mudah ditebak.<br>
                <strong>#Ubah password secara berkala (disarankan tiap 6 bulan).</strong>
              </small>
            </div>
          </div>

          <!-- Konfirmasi Password -->
          <div class="row mb-3">
            <label for="confirmPassword" class="col-sm-3 col-form-label">Konfirmasi Password <span class="text-danger">*</span></label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Ulangi password" required>
            </div>
          </div>

          <!-- Foto -->
          <div class="row mb-3">
            <label for="foto" class="col-sm-3 col-form-label">Foto</label>
            <div class="col-sm-9">
              <input class="form-control" type="file" id="foto" name="foto" accept="image/*">
              <small class="text-muted">Opsional. Maks 2MB</small>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
          data yang tampil secara default, merupakan daftar mata kuliah di kurikulum yg <i>show</i> dari set pemetaan
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<?php include('5script.php'); ?>
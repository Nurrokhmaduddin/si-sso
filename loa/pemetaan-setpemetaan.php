<?php $page = 'pemetaan_set'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Daftar Set Pemetaan
      <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modalBantuan" title="Bantuan">
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

              </div>
            </div>
            <div class="card-footer">
              <div class="card-tools ml-auto">
                <button class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#modalFilter">
                  <i class="fas fa-filter mr-1"></i> Filter
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalTambahData">
                  <i class="fas fa-plus mr-1"></i> Add
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalImpor">
                  <i class="fas fa-file-upload mr-1"></i> Import
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download mr-1"></i> Export
                </button>
                 <!-- <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban mr-1"></i> Reset
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
                  <tr class="text-uppercase">
                    <th width="5px">No.</th>
                    <th>Kurikulum</th>
                    <th>Kode Pemetaan</th>
                    <th>Set Pemetaan</th>
                    <th>Deskripsi Profile Lulusan</th>
                    <th>Status</th>
                    <th style="text-align: center;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td align="center">1</td>
                    <td>KT-2</td>                    
                    <td>SP01</td>
                    <td>Kurikulum 2025 Profesional stage</td>
                    <td>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </td>
                    <td><span class="badge badge-secondary">Hide</span></td>
                    <td align="center">
                      <!-- <button type="button" class="btn btn-sm btn-outline-warning">🔑 </button> -->
                      <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                      <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">2</td>
                    <td>KT-2</td>
                    <td>SP02</td>
                    <td>K25 full stage</td>
                    <td>
                      Kurikulum 2025 full stage (formatif,reinforcement dan profesional stage)
                    </td>
                    <td><span class="badge badge-info">Show</span></td>
                    <td align="center">
                      <!-- <button type="button" class="btn btn-sm btn-outline-warning">🔑 </button> -->
                      <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                      <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                      <button class="btn btn-sm btn-outline-info" onclick="window.location.href='pemetaan_mk.php'">📄MK</button>
                      <button class="btn btn-sm btn-outline-info" onclick="window.location.href='preview_pemetaan.php'">📄Preview</button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">3</td>
                    <td>KT-2</td>
                    <td>SP03</td>
                    <td>Kurikulum 2025 stage formatif</td>
                    <td>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </td>
                    <td><span class="badge badge-secondary">Hide</span></td>
                    <td align="center">
                      <!-- <button type="button" class="btn btn-sm btn-outline-warning">🔑 </button> -->
                      <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                      <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">4</td>
                    <td>KT-2</td>                    
                    <td>ST24</td>
                    <td>Kurikulum 2018 Imtermediate stage</td>
                    <td>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     
                    </td>
                    <td><span class="badge badge-secondary">Hide</span></td>
                    <td align="center">
                      <!-- <button type="button" class="btn btn-sm btn-outline-warning">🔑 </button> -->
                      <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                      <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                    </td>
                  </tr>
                  <!-- Tambahkan baris lainnya sesuai kebutuhan -->
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
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form action="" method="GET">

        <div class="modal-body">
          <!-- Catatan penting -->
          <div class="alert alert-warning mb-3" role="alert" style="font-size: 0.9rem;">
            <b>Informasi:</b> Halaman ini otomatis menampilkan data angkatan terbaru saat pertama dibuka. Data awal yang tampil adalah angkatan [2025].
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select name="angkatan" id="angkatan" class="custom-select">
              <option value="">-- Pilih Angkatan --</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="custom-select">
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="NonAktif">NonAktif</option>
            </select>
          </div>
       
       </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form id="formTambahData" enctype="multipart/form-data">
        <div class="modal-body">

          <!-- Catatan wajib isi -->
          <div class="alert alert-warning mb-3" role="alert" style="font-size: 0.9rem;">
            <b>Penting:</b> Kolom dengan bintang merah (<span class="text-danger">*</span>) wajib diisi!
          </div>
          
          <div class="row mb-3">
            <label for="kurikulum" class="col-sm-3 col-form-label">Kurikulum <span class="text-danger">*</span></label>
            <div class="col-sm-9">
              <select class="custom-select" id="kurikulum" name="kurikulum" required>
                <option value="">Pilih Kurikulum</option>
                <option value="2018">Kurikulum 2018</option>
                <option value="2025">Kurikulum 2025</option>
              </select>
            </div>
          </div>

          <div class="row mb-3">
            <label for="username" class="col-sm-3 col-form-label">Kode Pemetaan<span class="text-danger">*</span></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="username" name="username" placeholder="...." required>
            </div>
          </div>

          <!-- Profile Name -->
          <div class="row mb-3">
            <label for="displayName" class="col-sm-3 col-form-label">Nama Pemetaan<span class="text-danger">*</span></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="displayName" name="displayName" placeholder="...." required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="Deskripsi" class="col-sm-3 col-form-label">
              Deskripsi Pemetaan <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <textarea class="form-control" id="Deskripsi" name="Deskripsi" rows="3" placeholder="..." required></textarea>
            </div>
          </div>

          <!-- Status -->
          <div class="form-group row">
            <label for="status" class="col-sm-3 col-form-label">
              Status <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <select class="form-control select" id="status" name="status" required>
                <option value="Aktif" selected>Show</option>
                <option value="Nonaktif">Hide</option>
              </select>
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
        <button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">   
        <div class="alert alert-warning mb-3 py-2" role="alert" style="font-size: 0.9rem;">
          <i class="fas fa-exclamation-triangle mr-1"></i>
          <strong>Penting:</strong> Pastikan file yang akan diimpor menggunakan <strong>template resmi</strong> yang sudah disediakan. Menggunakan file lain atau format berbeda dapat menyebabkan <strong>kesalahan impor</strong>.
        </div>     

        <label class="form-label">Pilih File:</label>
        <input type="file" class="form-control mb-3" accept=".xlsx,.xls">

        <a href="template-impor-mahasiswa.xls" class="btn btn-sm btn-outline-success w-100">Download Template</a>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>
          Ini adalah penjelasan panjang tentang tabel. Anda bisa menuliskan informasi detail,
          petunjuk penggunaan tombol, cara membaca data, dan tips penting lainnya di sini.
        </p>
        <p>
          Misalnya:  
          - Tombol Filter digunakan untuk memfilter data berdasarkan kolom.  
          - Tombol Impor digunakan untuk memasukkan data dari file Excel.  
          - Tombol Reset akan menghapus semua data di tabel, gunakan dengan hati-hati.  
        </p>
        <p>
          Anda bisa menambahkan banyak paragraf atau daftar sesuai kebutuhan.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<?php include('5script.php'); ?>
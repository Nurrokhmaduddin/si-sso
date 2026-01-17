<?php $page = 'master_mahasiswa'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Judul halaman ini (Mahasiswa)</h3>
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
              <h5 class="card-title mb-0"><i class="fas fa-filter "></i> Judul Tabel yang terdampak tombol aksi ini<button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
                <i class="fas fa-question-circle"></i>
              </button> </h5>
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
          </div>


        <!-- ========== CARD : Tabel  ========== -->
          <div class="card">
            <!-- <div class="card-header d-flex align-items-center">
              <h5 class="card-title mb-0">Judul tabel ini</h5>    
              <div class="ms-auto">                
                <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm ">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
              </div>
            </div> -->

            <div class="card-body">
              <div class="table-responsive">
               <table class="table table1 table-bordered table-striped table-sm datatables1">
                <thead>
                  <!-- BARIS FILTER -->
                  <!-- <tr class="filters">
                    <th></th>
                    <th><input type="text" class="form-control form-control-sm" placeholder="Search Username"></th>
                    <th><input type="text" class="form-control form-control-sm" placeholder="Search Name"></th>
                    <th><input type="text" class="form-control form-control-sm" placeholder="Search Email/HP"></th>
                    <th></th>
                    <th>
                      <select class="form-control form-control-sm">
                        <option value="">All</option>
                        <option value="Aktif">Aktif</option>
                        <option value="NonAktif">NonAktif</option>
                      </select>
                    </th>
                    <th></th>
                  </tr> -->
                  <tr class="text-uppercase text-center">
                    <th width="5px">No.</th>
                    <th>Username</th>
                    <th>DisplayName</th>
                    <th>Email/Nomor HP</th>
                    <th>Foto</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td>19312137</td>
                    <td>Pramita Widyadari</td>
                    <td>pramita.widyadari@univ.ac.id</td>
                    <td class="text-center"><img style="width: 40px;" alt="Foto"></td>
                    <td class="text-center"><span class="badge bg-info">Aktif</span></td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-warning">
                        <i class="fas fa-key"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-danger">
                        <i class="fas fa-trash"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">2</td>
                    <td>19312376</td>
                    <td>Ho Aldika Novaldy Sumampow</td>
                    <td>aldika.sumampow@univ.ac.id</td>
                    <td class="text-center"><img style="width: 40px;" alt="Foto"></td>
                    <td class="text-center"><span class="badge bg-info">Aktif</span></td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info">
                        <i class="fas fa-info-circle"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-upload"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-success">
                        <i class="fas fa-download"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">3</td>
                    <td>19312406</td>
                    <td>Annisa Regita Sintowati</td>
                    <td>annisa.sintowati@univ.ac.id</td>
                    <td class="text-center"><img style="width: 40px;" alt="Foto"></td>
                    <td class="text-center"><span class="badge bg-info">Aktif</span></td>
                    <td class="text-center">
                      <div class="btn-group">
                        <!-- Tombol utama (View) -->
                        <a href="portfolio_cpmk_detail2.php" target="_blank" 
                        class="btn btn-sm btn-outline-info">
                        <i class="fas fa-external-link-alt"></i> View
                      </a>

                      <!-- Tombol dropdown -->
                      <button type="button" 
                      class="btn btn-sm btn-outline-info dropdown-toggle dropdown-toggle-split"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>

                    <!-- Menu dropdown -->
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="#">
                          <i class="fas fa-edit text-primary"></i> Edit Link
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          <i class="fas fa-trash-alt text-danger"></i> Hapus Data
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          <i class="fas fa-key text-warning"></i> Ubah Password
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">
                          <i class="fas fa-upload text-primary"></i> Upload File
                        </a>
                      </li>

                      <li><hr class="dropdown-divider"></li>

                      <li>
                        <a class="dropdown-item" href="#">
                          <i class="fas fa-download text-success"></i> Download File
                        </a>
                      </li>
                    </ul>
                  </div>

</td>
                  </tr>
                  <tr>
                    <td class="text-center">4</td>
                    <td>19312418</td>
                    <td>Claudia Monica Aditama</td>
                    <td>claudia.aditama@univ.ac.id</td>
                    <td class="text-center"><img style="width: 40px;" alt="Foto"></td>
                    <td class="text-center"><span class="badge bg-info">Aktif</span></td>
                    <td class="text-center"><button type="button" class="btn btn-sm btn-outline-warning">🔑</button></td>
                  </tr>
                  <tr>
                    <td class="text-center">5</td>
                    <td>19312424</td>
                    <td>Filza Aliyah Tasya</td>
                    <td>filza.tasya@univ.ac.id</td>
                    <td class="text-center"><img style="width: 40px;" alt="Foto"></td>
                    <td class="text-center"><span class="badge bg-info">Aktif</span></td>
                    <td class="text-center"><button type="button" class="btn btn-sm btn-outline-warning">🔑</button></td>
                  </tr>
                  <tr>
                    <td class="text-center">6</td>
                    <td>19312479</td>
                    <td>Asep Sunandar</td>
                    <td>asep.sunandar@univ.ac.id</td>
                    <td class="text-center"><img style="width: 40px;" alt="Foto"></td>
                    <td class="text-center"><span class="badge bg-info">Aktif</span></td>
                    <td class="text-center"><button type="button" class="btn btn-sm btn-outline-warning">🔑</button></td>
                  </tr>
                  <tr>
                    <td class="text-center">7</td>
                    <td>19312484</td>
                    <td>Fitri Dwi Astuti</td>
                    <td>fitri.astuti@univ.ac.id</td>
                    <td class="text-center"><img style="width: 40px;" alt="Foto"></td>
                    <td class="text-center"><span class="badge bg-info">Aktif</span></td>
                    <td class="text-center"><button type="button" class="btn btn-sm btn-outline-warning">🔑</button></td>
                  </tr>
                  <tr>
                    <td class="text-center">8</td>
                    <td>19312486</td>
                    <td>Dynda Agustina Tiara Putri</td>
                    <td>dynda.putri@univ.ac.id</td>
                    <td class="text-center"><img style="width: 40px;" alt="Foto"></td>
                    <td class="text-center"><span class="badge bg-info">Aktif</span></td>
                    <td class="text-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle" 
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-ellipsis-h"></i> Action
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-edit text-primary"></i> Edit Link</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt text-danger"></i> Hapus Data</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-key text-warning"></i> Ubah Password</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-upload text-success"></i> Upload File</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="portfolio_cpmk_detail2.php" target="_blank">
                          <i class="fas fa-external-link-alt text-info"></i> View Link</a></li>
                          <li><a class="dropdown-item" href="#"><i class="fas fa-download text-success"></i> Download File</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">9</td>
                    <td>19320088</td>
                    <td>Ridho Adi Kurnianto</td>
                    <td>ridho.kurnianto@univ.ac.id</td>
                    <td class="text-center"><img style="width: 40px;" alt="Foto"></td>
                    <td class="text-center"><span class="badge bg-info">Aktif</span></td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-warning">
                        <i class="fas fa-key"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-edit"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-danger">
                        <i class="fas fa-trash"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">10</td>
                    <td>19321025</td>
                    <td>Freyendo Al Farrel Sibarani</td>
                    <td>freyendo.sibarani@univ.ac.id</td>
                    <td class="text-center"><img style="width: 40px;" alt="Foto"></td>
                    <td class="text-center"><span class="badge bg-info">Aktif</span></td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info">
                        <i class="fas fa-info-circle"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-upload"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-success">
                        <i class="fas fa-download"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">11</td>
                    <td>19321026</td>
                    <td>Al Farrel Sibarani</td>
                    <td>sibarani@univ.ac.id</td>
                    <td class="text-center"><img style="width: 40px;" alt="Foto"></td>
                    <td class="text-center"><span class="badge bg-info">Aktif</span></td>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-outline-info">
                        <i class="fas fa-info-circle"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-upload"></i>
                      </button>
                      <button type="button" class="btn btn-sm btn-outline-success">
                        <i class="fas fa-download"></i>
                      </button>
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
            <label for="username" class="form-label">NIM <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
          </div>

          <div class="mb-3">
            <label for="displayname" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="displayname" name="displayname" placeholder="Masukkan Nama Lengkap" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
          </div>

          <div class="mb-3">
            <label for="hp" class="form-label">Nomor HP <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="hp" name="hp" placeholder="Masukkan Nomor HP" required>
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
            <label for="angkatan" class="form-label">Peminatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Peminatan --</option>
              <option value="2025">A</option>
              <option value="2024">B</option>
              <option value="2023">C</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
            <select class="form-select" id="status" name="status" required>
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="NonAktif">NonAktif</option>
              <option value="Cuti">Cuti</option>
              <option value="Skors">Skors</option>
              <option value="PassedOut">Passed Out</option>
              <option value="DropOut">Drop Out</option>
              <option value="Lulus">Lulus</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="foto" class="form-label">Foto <span class="text-danger">*</span></label>
            <input type="file" class="form-control" id="foto" name="foto" required>
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

      <form action="proses_hapus_akun.php" method="POST">
        <div class="modal-body text-center">

          <!-- ID disimpan sebagai hidden input -->
          <input type="hidden" name="id_akun" id="hapus_id_akun">

          <p class="fs-5">Apakah Anda yakin ingin menghapus semua data ini?</p>

          <!-- Tampilkan kode dan nama akun -->
         <!--  <p class="text-muted mb-0 d-flex justify-content-center gap-2">
            <span id="hapus_kode_akun"></span>
            <span>|</span>
            <strong id="hapus_nama_akun"></strong>
          </p> -->

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
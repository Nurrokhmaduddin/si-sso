<?php $page = 'pemetaan_cpmk'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Daftar Capaian Pembelajaran Mata Kuliah 
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
                <div class="col-md-6">
                  <b>Jalur Kelas:</b> Reguler
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
                 <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban mr-1"></i> Reset
                </button>
                
              </div>
            </div>
          </div>
<!-- TAB NAV  -->
  <ul class="nav nav-tabs">   
    <li class="nav-item" onclick="window.location='pemetaan-matakuliah2.php'"><a class="nav-link active">Mata Kuliah</a></li>
    <li class="nav-item" onclick="window.location='pemetaan-cpmk2.php'"><a class="nav-link ">CPMK</a></li>
  </ul>

        <!-- ========== CARD : Tabel  ========== -->
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
            					<th>Sifat Pengambilan</th>
                      <th>Semester Tempuh</th>                
            					<th>Jumlah SKS</th>
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
            					<td>3</td>
            					<td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#modalDeskripsiCPMK">🔑 Deskripsi CPMK</button>
            						<button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
            						<button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
            					</td>
            				</tr>
            				<tr>
            					<td class="text-center">2</td>
            					<td class="text-center">SP01</td>
            					<td>STS913</td>
            					<td>Struktur Komposit</td>
            					<td class="text-center"><span class="badge badge-info">Pilihan</span></td>
                      <td class="text-center">1</td>
            					<td>3</td>
            					<td class="text-center">
                        <button type="button" class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#modalDeskripsiCPMK">🔑 Deskripsi CPMK</button>
            						<button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
            						<button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
            					</td>
            				</tr>
            				<tr>
            					<td class="text-center">3</td>
            					<td class="text-center">SP01</td>
            					<td>51175111</td>
            					<td>Building Structures Design</td>                   
            					<td class="text-center"><span class="badge badge-success">Wajib</span></td>
                      <td class="text-center">1</td>
            					<td>3</td>
            					<td class="text-center">

            						<button type="button" class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#modalDeskripsiCPMK">🔑 Deskripsi CPMK</button>
            						<button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
            						<button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
            					</td>
            				</tr>
            				<tr>
            					<td class="text-center">4</td>
            					<td class="text-center">SP01</td>
            					<td>STS-101</td>
            					<td>Engineering Statistics</td>                    
            					<td class="text-center"><span class="badge badge-success">Wajib</span></td>
                      <td class="text-center">2</td>
            					<td>3</td>
            					<td class="text-center">

            						<button type="button" class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#modalDeskripsiCPMK">🔑 Deskripsi CPMK</button>
            						<button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
            						<button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
            					</td>
            				</tr>
            				<tr>
            					<td class="text-center">5</td>
            					<td class="text-center">SP01</td>
            					<td>STS307</td>
            					<td>Bahan Perkerasan Jalan (+Pr)</td>
            					<td class="text-center"><span class="badge badge-info">Pilihan</span></td>
            					<td class="text-center">2</td>
                      <td>3</td>
            					<td class="text-center">

            						<button type="button" class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#modalDeskripsiCPMK">🔑 Deskripsi CPMK</button>
            						<button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
            						<button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
            					</td>
            				</tr>
            				<tr>
            					<td class="text-center">6</td>
            					<td class="text-center">SP01</td>
            					<td>STS702</td>
            					<td>Struktur Baja</td>
            					<td class="text-center"><span class="badge badge-info">Pilihan</span></td>
            					<td class="text-center">2</td>
                      <td>3</td>
            					<td class="text-center">

            						<button type="button" class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#modalDeskripsiCPMK">🔑 Deskripsi CPMK</button>
            						<button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
            						<button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
            					</td>
            				</tr>
            				<tr>
            					<td class="text-center">7</td>
            					<td class="text-center">SP01</td>
            					<td>51195142</td>
            					<td>Perancangan Struktur Jembatan</td>
            					<td class="text-center"><span class="badge badge-info">Pilihan</span></td>
            					<td class="text-center">2</td>
                      <td>2</td>
            					<td class="text-center">

            						<button type="button" class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#modalDeskripsiCPMK">🔑 Deskripsi CPMK</button>
            						<button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
            						<button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
            					</td>
            				</tr>
            				<tr>
            					<td class="text-center">8</td>
            					<td class="text-center">SP01</td>
            					<td>51155081</td>
            					<td>Introduction to Earthquake Engineering</td>
            					<td class="text-center"><span class="badge badge-info">Pilihan</span></td>
            					<td class="text-center">2</td>
                      <td>2</td>
            					<td class="text-center">

            						<button type="button" class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#modalDeskripsiCPMK">🔑 Deskripsi CPMK</button>
            						<button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
            						<button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
            					</td>
            				</tr>
            				<tr>
            					<td class="text-center">9</td>
            					<td class="text-center">SP01</td>
            					<td>STS904</td>
            					<td>BIM untuk Manajemen Konstruksi</td>
            					<td class="text-center"><span class="badge badge-info">Pilihan</span></td>
            					<td class="text-center">2</td>
                      <td>3</td>
            					<td class="text-center">

            						<button type="button" class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#modalDeskripsiCPMK">🔑 Deskripsi CPMK</button>
            						<button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
            						<button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
            					</td>
            				</tr>
            				<tr>
            					<td class="text-center">10</td>
            					<td class="text-center">SP01</td>
            					<td>51153061</td>
            					<td>Water Structures Design</td>
            					<td class="text-center"><span class="badge badge-info">Pilihan</span></td>
            					<td class="text-center">3</td>
                      <td>3</td>
            					<td class="text-center">

            						<button type="button" class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#modalDeskripsiCPMK">🔑 Deskripsi CPMK</button>
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
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalTambahDataLabel">➕ Tambah Data Mata Kuliah</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form id="formTambahData" enctype="multipart/form-data">
        <div class="modal-body">

         <!-- Catatan wajib isi -->
          <div class="alert alert-warning mb-3" role="alert" style="font-size: 0.9rem;">
            <b>Penting:</b> Kolom dengan bintang merah (<span class="text-danger">*</span>) wajib diisi!
          </div>

          <!-- Kurikulum -->
          <div class="form-group row mb-2">
            <label for="kurikulum" class="col-sm-3 col-form-label">
              Kurikulum <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <select class="form-control select2" id="kurikulum" name="kurikulum" required>
                <option value="">-- Pilih Kurikulum --</option>
                <option value="2018">Kurikulum 2018</option>
                <option value="2025">Kurikulum 2025</option>
                <option value="2023">Kurikulum Merdeka</option>
              </select>
            </div>
          </div>

          <!-- Kode MK -->
          <div class="form-group row mb-2">
            <label for="kode_mk" class="col-sm-3 col-form-label">
              Kode MK <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="kode_mk" name="kode_mk" placeholder="Contoh: STS704" required>
            </div>
          </div>

          <!-- Nama MK -->
          <div class="form-group row mb-2">
            <label for="nama_mk" class="col-sm-3 col-form-label">
              Nama MK (IDN) <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nama_mk" name="nama_mk" placeholder="Contoh: Matematika 1" required>
            </div>
          </div>

          <div class="form-group row mb-2">
            <label for="nama_mk" class="col-sm-3 col-form-label">
              Nama MK (EN)
            </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nama_mk" name="nama_mk" placeholder="Contoh: Mathematic 1" required>
            </div>
          </div>

          <!-- Jenis -->
          <div class="form-group row mb-2">
            <label for="jenis" class="col-sm-3 col-form-label">
              Jenis <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <select class="form-control select2" id="jenis" name="jenis" required>
                <option value="">-- Pilih Jenis --</option>
                <option value="Wajib">Wajib</option>
                <option value="Pilihan">Pilihan</option>
              </select>
            </div>
          </div>

          <!-- Jumlah SKS -->
          <div class="form-group row mb-2">
            <label for="jumlah_sks" class="col-sm-3 col-form-label">
              Jumlah SKS <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="jumlah_sks" name="jumlah_sks" placeholder="Contoh: 3" required>
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
          data yang tampil daftar mata kuliah untuk tiap kurikulum, belum ada pendefinisian jumlah dan deskripsi CPMK
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalTambahDataLabel">➕ Tambah Data Mata Kuliah</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form id="formTambahData" enctype="multipart/form-data">
        <div class="modal-body">

          <!-- Catatan wajib isi -->
          <div class="alert alert-warning mb-3" role="alert" style="font-size: 0.9rem;">
            <b>Penting:</b> Kolom dengan bintang merah (<span class="text-danger">*</span>) wajib diisi!
          </div>

          <!-- Kurikulum -->
          <div class="form-group row mb-2">
            <label for="kurikulum" class="col-sm-3 col-form-label">
              Kurikulum <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <select class="form-control select2" id="kurikulum" name="kurikulum" required>
                <option value="">-- Pilih Kurikulum --</option>
                <option value="2018">Kurikulum 2018</option>
                <option value="2025">Kurikulum 2025</option>
                <option value="2023">Kurikulum Merdeka</option>
              </select>
            </div>
          </div>

          <!-- Kode MK -->
          <div class="form-group row mb-2">
            <label for="kode_mk" class="col-sm-3 col-form-label">
              Kode MK <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="kode_mk" name="kode_mk" placeholder="Contoh: STS704" required>
            </div>
          </div>

          <!-- Nama MK -->
          <div class="form-group row mb-2">
            <label for="nama_mk" class="col-sm-3 col-form-label">
              Nama MK <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nama_mk" name="nama_mk" placeholder="Contoh: Metode Pelaksanaan Bangunan" required>
            </div>
          </div>

          <!-- Jenis -->
          <div class="form-group row mb-2">
            <label for="jenis" class="col-sm-3 col-form-label">
              Jenis <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <select class="form-control select2" id="jenis" name="jenis" required>
                <option value="">-- Pilih Jenis --</option>
                <option value="Wajib">Wajib</option>
                <option value="Pilihan">Pilihan</option>
              </select>
            </div>
          </div>

          <!-- Jumlah SKS -->
          <div class="form-group row mb-2">
            <label for="jumlah_sks" class="col-sm-3 col-form-label">
              Jumlah SKS <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="jumlah_sks" name="jumlah_sks" placeholder="Contoh: 3" required>
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
<!-- modalDeskripsiCPMK --> 
<div class="modal fade" id="modalDeskripsiCPMK" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <!-- HEADER -->
            <div class="modal-header bg-warning">
                <h5 class="modal-title">Deskripsi CPMK |  Metode Pelaksanaan Bangunan - STS704 (3 CPMK)</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
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
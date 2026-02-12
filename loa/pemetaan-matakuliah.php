<?php $page = 'master_mahasiswa'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Daftar Mata Kuliah</h3>
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
                 <button type="button" class="btn btn-outline-danger btn-sm">
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
            				<tr class="text-uppercase text-center">
            					<th width="5px">No.</th>
            					<th>Kurikulum</th>
            					<th>Kode MK</th>
            					<th>Nama MK</th>
            					<th>Sifat Pengambilan</th>
            					<th>Semester Tempuh</th>
            					<th>Jumlah CPMK</th>
            					<th>Jumlah SKS</th>
            					<th width="100px">Aksi</th>
            				</tr>

            			</thead>
            			<tbody>
            				<tr>
            					<td class="text-center">1</td>
            					<td>OBE 2024</td>
            					<td>IF101</td>
            					<td>Pengantar Teknologi Informasi</td>
            					<td>Wajib</td>
            					<td class="text-center">1</td>
            					<td class="text-center">5</td>
            					<td class="text-center">2</td>
            					<td class="text-center">
            						<button type="button" class="btn btn-sm btn-outline-info">
            							<i class="fas fa-info-circle"></i>
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
            					<td>OBE 2024</td>
            					<td>IF102</td>
            					<td>Algoritma dan Pemrograman</td>
            					<td>Wajib</td>
            					<td class="text-center">1</td>
            					<td class="text-center">7</td>
            					<td class="text-center">3</td>
            					<td class="text-center">
            						<button type="button" class="btn btn-sm btn-outline-info">
            							<i class="fas fa-info-circle"></i>
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
            					<td class="text-center">3</td>
            					<td>OBE 2024</td>
            					<td>IF201</td>
            					<td>Struktur Data</td>
            					<td>Wajib</td>
            					<td class="text-center">2</td>
            					<td class="text-center">6</td>
            					<td class="text-center">3</td>
            					<td class="text-center">
            						<button type="button" class="btn btn-sm btn-outline-info">
            							<i class="fas fa-info-circle"></i>
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
            					<td class="text-center">4</td>
            					<td>OBE 2024</td>
            					<td>IF202</td>
            					<td>Basis Data</td>
            					<td>Wajib</td>
            					<td class="text-center">2</td>
            					<td class="text-center">6</td>
            					<td class="text-center">3</td>
            					<td class="text-center">
            						<button type="button" class="btn btn-sm btn-outline-info">
            							<i class="fas fa-info-circle"></i>
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
            					<td class="text-center">5</td>
            					<td>OBE 2024</td>
            					<td>IF301</td>
            					<td>Pemrograman Web</td>
            					<td>Wajib</td>
            					<td class="text-center">3</td>
            					<td class="text-center">8</td>
            					<td class="text-center">3</td>
            					<td class="text-center">
            						<button type="button" class="btn btn-sm btn-outline-info">
            							<i class="fas fa-info-circle"></i>
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
            					<td class="text-center">6</td>
            					<td>OBE 2024</td>
            					<td>IF302</td>
            					<td>Rekayasa Perangkat Lunak</td>
            					<td>Wajib</td>
            					<td class="text-center">3</td>
            					<td class="text-center">7</td>
            					<td class="text-center">3</td>
            					<td class="text-center">
            						<button type="button" class="btn btn-sm btn-outline-info">
            							<i class="fas fa-info-circle"></i>
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
            					<td class="text-center">7</td>
            					<td>OBE 2024</td>
            					<td>IF401</td>
            					<td>Keamanan Informasi</td>
            					<td>Pilihan</td>
            					<td class="text-center">4</td>
            					<td class="text-center">5</td>
            					<td class="text-center">2</td>
            					<td class="text-center">
            						<button type="button" class="btn btn-sm btn-outline-info">
            							<i class="fas fa-info-circle"></i>
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
            					<td class="text-center">8</td>
            					<td>OBE 2024</td>
            					<td>IF402</td>
            					<td>Data Mining</td>
            					<td>Pilihan</td>
            					<td class="text-center">4</td>
            					<td class="text-center">6</td>
            					<td class="text-center">3</td>
            					<td class="text-center">
            						<button type="button" class="btn btn-sm btn-outline-info">
            							<i class="fas fa-info-circle"></i>
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
            					<td class="text-center">9</td>
            					<td>OBE 2024</td>
            					<td>IF501</td>
            					<td>Metodologi Penelitian</td>
            					<td>Wajib</td>
            					<td class="text-center">5</td>
            					<td class="text-center">4</td>
            					<td class="text-center">2</td>
            					<td class="text-center">
            						<button type="button" class="btn btn-sm btn-outline-info">
            							<i class="fas fa-info-circle"></i>
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
            					<td>OBE 2024</td>
            					<td>IF502</td>
            					<td>Kerja Praktik</td>
            					<td>Wajib</td>
            					<td class="text-center">6</td>
            					<td class="text-center">3</td>
            					<td class="text-center">2</td>
            					<td class="text-center">
            						<button type="button" class="btn btn-sm btn-outline-info">
            							<i class="fas fa-info-circle"></i>
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
            					<td class="text-center">11</td>
            					<td>OBE 2024</td>
            					<td>IF601</td>
            					<td>Skripsi</td>
            					<td>Wajib</td>
            					<td class="text-center">8</td>
            					<td class="text-center">6</td>
            					<td class="text-center">6</td>
            					<td class="text-center">
            						<button type="button" class="btn btn-sm btn-outline-info">
            							<i class="fas fa-info-circle"></i>
            						</button>
            						<button type="button" class="btn btn-sm btn-outline-primary">
            							<i class="fas fa-edit"></i>
            						</button>
            						<button type="button" class="btn btn-sm btn-outline-danger">
            							<i class="fas fa-trash"></i>
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
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalTambahDataLabel">➕ Tambah Data Mata Kuliah</h5>
        <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
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
                <option value="Teori">Wajib</option>
                <option value="Praktikum">Pilihan</option>
              </select>
            </div>
          </div>

          <!-- Semester Tempuh -->
          <div class="form-group row mb-2">
            <label for="semester" class="col-sm-3 col-form-label">
              Semester Tempuh <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="semester" name="semester" placeholder="Contoh: 4" required>
            </div>
          </div>

          <!-- Jumlah CPMK -->
          <div class="form-group row mb-2">
            <label for="jumlah_cpmk" class="col-sm-3 col-form-label">
              Jumlah CPMK <span class="text-danger">*</span>
            </label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="jumlah_cpmk" name="jumlah_cpmk" placeholder="Contoh: 5" required>
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

<?php include('5script.php'); ?>
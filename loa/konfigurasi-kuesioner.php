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
                <div class="col-md-4">
                  <label>Berlaku untuk Semester</label>
                  <select class="form-control">
                    <option>2025 Genap</option>
                    <option>2025 Ganjil</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label>Jenis Refleksi</label>
                  <select class="form-control">
                    <option>Builder Catatan & Evaluasi Kelas</option>
                    <option>Builder Masukan & Insight Prodi</option>
                    <option>Builder Catatan Pengajaran Dosen</option>
                  </select>
                </div>
                <div class="col-md-4">
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
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button> -->
                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button> -->
                <!-- <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>   -->  
              </div>
            </div>

          </div>


<!-- ========== CARD 3: Tabel saja ========== -->
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
                 <thead class="text-uppercase">
                <tr>
                  <!-- <th width="20px">No</th> -->
                  <th>Semester</th>
                  <th>jenis refleksi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <!-- <td>1</td> -->
                  <td>24/25-ganjil</td>
                  <td>catatan & evaluasi kelas</td>
                  <td>
                    <a href="konfigurasi-kuesioner-detail.php" 
                    class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-edit"></i></a>
                  </td>
                </tr>
<tr>
                  <!-- <td>3</td> -->
                   <td>25/25-ganjil</td>
                  <td>catatan & evaluasi kelas</td>
                  <td>
                    <a href="konfigurasi-kuesioner-detail.php" 
                    class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-edit"></i></a>
                  </td>
                </tr>

                <tr>
                  <!-- <td>2</td> -->
                  <td>24/25-ganjil</td>
                  <td>rekomendasi untuk prodi</td>
                  <td>
                    <a href="konfigurasi-kuesioner-detail.php" 
                    class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-edit"></i></a>
                  </td>
                </tr>
<tr>
                  <!-- <td>4</td> -->
                   <td>25/25-ganjil</td>
                  <td>rekomendasi untuk prodi</td>
                  <td>
                    <a href="konfigurasi-kuesioner-detail.php" 
                    class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-edit"></i></a>
                  </td>
                </tr>

                <tr>
                  <!-- <td>1</td> -->
                  <td>24/25-genap</td>
                  <td>catatan & evaluasi kelas</td>
                  <td>
                    <a href="konfigurasi-kuesioner-detail.php" 
                    class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-edit"></i></a>
                  </td>
                </tr>
<tr>
                  <!-- <td>3</td> -->
                   <td>25/25-genap</td>
                  <td>catatan & evaluasi kelas</td>
                  <td>
                    <a href="konfigurasi-kuesioner-detail.php" 
                    class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-edit"></i></a>
                  </td>
                </tr>

                <tr>
                  <!-- <td>2</td> -->
                  <td>24/25-genap</td>
                  <td>rekomendasi untuk prodi</td>
                  <td>
                    <a href="konfigurasi-kuesioner-detail.php" 
                    class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-edit"></i></a>
                  </td>
                </tr>
<tr>
                  <!-- <td>4</td> -->
                   <td>25/25-genap</td>
                  <td>rekomendasi untuk prodi</td>
                  <td>
                    <a href="konfigurasi-kuesioner-detail.php" 
                    class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-edit"></i></a>
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


<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content border-0 shadow">

      <!-- Header -->
      <div class="modal-header bg-light">
        <h5 class="modal-title fw-semibold">
          <i class="fas fa-bullhorn me-2 text-primary"></i>
          Tambah Pengumuman Akademik
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Body -->
      <div class="modal-body">
        <form action="#" method="POST">

          <!-- Judul -->
          <div class="mb-3">
            <label class="form-label fw-medium">Judul Pengumuman</label>
            <input type="text" class="form-control" placeholder="Masukkan judul pengumuman" required>
          </div>

          <!-- Isi -->
          <div class="mb-3">
            <label class="form-label fw-medium">Isi Pengumuman</label>
            <textarea class="form-control" rows="5" placeholder="Tulis isi pengumuman..." required></textarea>
          </div>

          <!-- Status -->
          <div class="mb-3">
            <label class="form-label fw-medium">Status</label>
            <select class="form-select">
              <option value="publish">Publish</option>
              <option value="draft">Draft</option>
            </select>
          </div>

          <!-- Tanggal Publish -->
          <div class="mb-3">
            <label class="form-label fw-medium">Tanggal Publish</label>
            <input type="date" class="form-control">
            <small class="text-muted">Kosongkan jika status Draft</small>
          </div>

        </form>
      </div>

      <!-- Footer -->
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Batal
        </button>
        <button type="submit" class="btn btn-primary">
          <i class="fas fa-save me-2"></i>Simpan
        </button>
      </div>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>
<?php $page = 'konfigurasi_notifikasi'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Template Notifikasi 
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

            <!-- <div class="card-body ">
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
            </div> -->

            <div class="card-footer">
              <div class="card-tools ms-auto">
                <!-- <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button> -->
                <button type="button" 
                class="btn btn-outline-secondary btn-sm"
                onclick="window.location.href='konfigurasi-notifikasi.php'">
                <span class="fas fa-reply me-1"></span> Kembali
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
  <div class="card-body">
    <form action="https://tsipil-loa.tmidev.my.id/loa/soal_ujian/edit_notifikasi_proses" method="POST" class="form-inputdata myForm-1" enctype="multipart/form-data">
      <input type="hidden" name="id" value="dm24o805vs2368173405ou54494dwue3">
      <div class="callout callout-info">
        <b>Note:</b> Kolom dengan bintang merah ( <b class="text-red">*</b> ) wajib diisi!
      </div>              
      <div class="card">
        <div class="card-body">
          <div class="form-group">
            <label>Subject / Judul <b class="text-danger">*</b></label>
            <input type="text" name="subject" class="form-control" placeholder="..." value="Segera Upload Soal Ujian" required>
          </div>
          <div class="form-group">
            <label>Pesan Notifikasi <b class="text-danger">*</b></label>
            <textarea name="pesan_email" class="form-control summernote" placeholder="..."><p>Silahkan segera melakukan pengunggahan soal ujian pada kelas mata kuliah berikut:</p>
              <table style="height: 74px; width: 436px;">
                <tbody>
                  <tr style="height: 13.8px;">
                    <td style="width: 145px;">Mata Kuliah</td>
                    <td style="width: 275px;">__mata_kuliah__ , __kode_mata_kuliah__</td>
                  </tr>
                  <tr style="height: 13px;">
                    <td style="width: 145px;">Kelas</td>
                    <td style="width: 275px;">__kelas__</td>
                  </tr>
                  <tr style="height: 13px;">
                    <td style="width: 145px;">Dosen Pengampu</td>
                    <td style="width: 275px;">__nama_dosen__ , __nidn__</td>
                  </tr>
                  <tr style="height: 13px;">
                    <td style="width: 145px;">Peminatan</td>
                    <td style="width: 275px;">__peminatan__ , __kode_peminatan__</td>
                  </tr>
                </tbody>
              </table>
            </textarea>
          </div>
          <div class="form-group">
            <label>Data Relasi</label>
            <textarea disabled class="form-control" placeholder="...">__mata_kuliah__, __kode_mata_kuliah__, __kelas__, __nama_dosen__, __nidn__, __peminatan__, __kode_peminatan__</textarea>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-submit-1"><i class="fas fa-check"></i> Simpan</button>
    </form>
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



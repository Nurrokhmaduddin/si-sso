<?php $page = 'pengaturan_log'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Audit Log
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
            <div class="card-body ">
              <div class="row">

                <div class="col-md-6">
                  <b>Rentang Waktu:</b> 11 Mar 2026 - 12 Mar 2026 &nbsp;
                </div> 
                 <div class="col-md-6">
                  <b>Peran:</b> Semua
                </div>  
                <div class="col-md-6">
                  <b>Aksi:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Modul:</b> Semua
                </div>

              </div>
            </div>

            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
              </div>
            </div>
          </div>


          <!-- ========== CARD 3: Tabel saja ========== -->
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table1 table-bordered table-striped table-sm datatables1">
                  <thead class="text-uppercase">
                    <tr class="text-center">
                      <th title="Nomor urut baris data">No</th>
                      <th title="Tanggal dan waktu aksi dilakukan">Waktu</th>
                      <th title="Nama lengkap pengguna yang melakukan aksi">User</th>
                      <th title="Tipe aksi: create, update, delete, view, login, logout, export, upload, dll.">Aksi</th>
                      <th title="Nama modul atau halaman tempat aksi dilakukan">Modul</th>
                      <th title="Ringkasan singkat aktivitas yang dilakukan">Deskripsi</th>
                      <!-- <th title="Data sebelum perubahan (jika diperlukan)">Data Sebelum</th> -->
                      <!-- <th title="Data sesudah perubahan (jika diperlukan)">Data Sesudah</th> -->
                      <th title="IP address perangkat pengguna saat aksi dilakukan">IP Address</th>
                      <th title="User agent / jenis device & browser yang digunakan">User Agent</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1</td>
                      <td>2026-03-19 08:15</td>
                      <td>Andi Prasetyo</td>
                      <td>login</td>
                      <td>Auth</td>
                      <td>User berhasil masuk ke sistem</td>
                      <!-- <td>—</td> -->
                      <!-- <td>—</td> -->
                      <td>103.24.56.12</td>
                      <td>Chrome / Windows 10</td>
                    </tr>
                    <tr>
                      <td class="text-center">2</td>
                      <td>2026-03-19 08:22</td>
                      <td>Andi Prasetyo</td>
                      <td>create</td>
                      <td>Nilai</td>
                      <td>Menambahkan data nilai mahasiswa pada mata kuliah Algoritma</td>
                      <!-- <td>null</td> -->
                      <!-- <td>{"nilai":"85"}</td> -->
                      <td>103.24.56.12</td>
                      <td>Chrome / Windows 10</td>
                    </tr>
                    <tr>
                      <td class="text-center">3</td>
                      <td>2026-03-19 09:10</td>
                      <td>Dewi Anggraini</td>
                      <td>verifikasi</td>
                      <td>Penganggaran</td>
                      <td>Menyetujui usulan anggaran operasional semester berjalan</td>
                      <!-- <td>—</td> -->
                      <!-- <td>—</td> -->
                      <td>36.75.90.14</td>
                      <td>Edge / Windows 11</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div><!-- /.card-body -->
          </div>


















        </div>
      </div>
    </div>
  </section>
</div>


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
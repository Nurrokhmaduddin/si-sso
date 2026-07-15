<?php $page = 'master_mahasiswa'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar--.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Pengumuman
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
            <!-- <div class="card-body ">
              <div class="row">

                <div class="col-md-6">
                  <b>Angkatan:</b> 2023 &nbsp;
                </div>   
                <div class="col-md-6">
                  <b>Jalur:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Status:</b> Semua
                </div>

              </div>
            </div>
 -->
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
                <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>    
              </div>
            </div>
            
          </div>


         <!-- ========== CARD : Tabel  Granular ========== -->
<div class="card">
<!--   <div class="card-header d-flex align-items-center">
    <h5 class="card-title mb-0">Daftar Mahasiswa</h5>    
  </div>
 -->
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm datatables1">
        <thead>
          <tr class="text-uppercase text-center">
            <th width="5%">No.</th>
            <th>Pengumuman</th>
            <th>Klasifikasi</th>
            <th width="10%">Status</th>
            <th width="15%">Aksi</th>
          </tr>
        </thead>
        <tbody>

          <?php

          $rows = [

            [
              'Panduan SITA',
              'Panduan penggunaan Sistem Informasi Tugas Akhir (SITA) untuk mahasiswa Program Studi Manajemen, FBE UII. Panduan ini mencakup langkah-langkah penggunaan SITA.<br><br><strong>Link Panduan SITA :</strong> https://bit.ly/panduan-sita',
              '-',
              'Publish'
            ],

            [
              'Rubrik Penilaian Pelaksanaan RBB - Reguler',
              'Pengumuman prosedur penilaian pelaksanaan RBB beserta kriteria penilaian, persyaratan, dan ketentuan pelaksanaan.<br><br><strong>Link Rubrik :</strong> https://s.id/RUBRIK-RBB',
              'Implementasi RBB',
              'Publish'
            ],

            [
              'Rubrik Penilaian Pelaksanaan Magang - Reguler',
              'Pengumuman prosedur penilaian pelaksanaan Magang, kriteria penilaian, serta persyaratan pelaksanaan.<br><br><strong>Link Rubrik :</strong> https://s.id/RUBRIK-MAGANG',
              'Pelaksanaan Magang',
              'Publish'
            ],

            [
              'Pengumuman Proses Tutup Teori Mahasiswa',
              'Informasi mengenai persyaratan tutup teori, nilai minimal C, CEPT, dan kewajiban mengisi history bimbingan di SITA.',
              '-',
              'Publish'
            ],

            [
              'Pengumuman Pendaftaran Ujian TA - Reguler',
              'Pendaftaran Ujian TA dilakukan melalui SITA dan Website Akademik FBE. Jadwal pendaftaran setiap tanggal 1–20 setiap bulan.',
              '-',
              'Publish'
            ],

            [
              'Rubrik Penilaian Ujian Tugas Akhir',
              'Rubrik penilaian ujian Skripsi, Magang, dan RBB.<br><br><strong>Link Rubrik :</strong> https://s.id/RUBRIK-UJIAN-TA',
              'Bimbingan & Ujian TA',
              'Publish'
            ],

            [
              'Buku Saku Tugas Akhir',
              'Buku saku berisi ringkasan panduan penulisan tugas akhir, tips penyusunan laporan, dan tahapan penyelesaian TA.<br><br><strong>Link Buku :</strong> https://s.id/SAKU-TA',
              'Bimbingan & Ujian TA',
              'Publish'
            ],

            [
              'Buku Panduan Implementasi RBB',
              'Panduan lengkap pelaksanaan RBB mulai dari perencanaan, implementasi, hingga evaluasi.<br><br><strong>Link Buku :</strong> https://s.id/RBB-REG',
              'Implementasi RBB',
              'Publish'
            ],

            [
              'Buku Panduan Pelaksanaan Magang',
              'Panduan pelaksanaan magang, hak dan kewajiban mahasiswa, serta format laporan magang.<br><br><strong>Link Buku :</strong> https://s.id/MAGANG-REG',
              'Pelaksanaan Magang',
              'Publish'
            ],

            [
              'Buku Panduan Penulisan Tugas Akhir',
              'Panduan lengkap penulisan Tugas Akhir Program Studi Manajemen.<br><br><strong>Link Buku :</strong> https://s.id/TA-REG',
              'Bimbingan & Ujian TA',
              'Publish'
            ],

          ];

          $no = 1;

          foreach($rows as $r):

            ?>

            <tr>

              <td class="text-center"><?= $no++; ?></td>

              <td>
                <strong><?= htmlspecialchars($r[0]); ?></strong>
                <br><br>
                <?= $r[1]; ?>
              </td>

              <td class="text-center">
                <?= $r[2] == '-' ? '-' : htmlspecialchars($r[2]); ?>
              </td>

              <td class="text-center">
                <span class="badge badge-success"><?= $r[3]; ?></span>
              </td>

              <td class="text-center">

                <a href="#" class="btn btn-xs btn-info">
                  <i class="fas fa-eye"></i>
                </a>

                <a href="#" class="btn btn-xs btn-warning">
                  <i class="fas fa-edit"></i>
                </a>

                <a href="#" class="btn btn-xs btn-danger">
                  <i class="fas fa-trash"></i>
                </a>

              </td>

            </tr>

          <?php endforeach; ?>

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

            <form action="" method="POST">

                <!-- Header -->
                <div class="modal-header bg-primary justify-content-center">

                    <h4 class="modal-title text-white font-weight-bold" id="modalTambahDataLabel">
                        Tambah Data Admin
                    </h4>

                    <button type="button"
                            class="close text-white position-absolute"
                            style="right:20px;"
                            data-dismiss="modal"
                            aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <!-- Body -->
                <div class="modal-body">

                    <div class="form-group">

                        <label>Username</label>

                        <input
                            type="text"
                            name="username"
                            class="form-control"
                            placeholder="Username"
                            required>

                    </div>

                    <div class="form-group">

                        <label>Nama</label>

                        <input
                            type="text"
                            name="nama"
                            class="form-control"
                            placeholder="Nama"
                            required>

                    </div>

                    <div class="form-group">

                        <label>Role</label>

                        <select
                            name="role"
                            class="form-control"
                            required>

                            <option value="">Pilih Role</option>

                            <option value="Admin">Admin</option>

                            <option value="Kaprodi">Kaprodi</option>

                            <option value="Sekprodi">Sekprodi</option>

                            <option value="Prodi">Prodi</option>

                            <option value="Fakultas">Fakultas</option>

                        </select>

                    </div>
                    <div class="form-group">

                      <label>Password</label>

                      <input
                      type="password"
                      id="password"
                      name="password"
                      class="form-control"
                      placeholder="Masukkan Password"
                      required>

                    </div>

                </div>

                <!-- Footer -->
                <div class="modal-footer">

                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal">

                        Batal

                    </button>

                    <button
                        type="submit"
                        class="btn btn-success">

                        Simpan

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

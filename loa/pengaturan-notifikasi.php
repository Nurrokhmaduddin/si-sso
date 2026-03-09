<?php $page = 'pengaturan_notifikasi'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Daftar Notifikasi 
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
                    <th>id</th>
                    <th>type_id</th>
                    <th>category</th>
                    <th>default_title</th>
                    <th>default_message</th>
                    <th>default_method</th>
                    <th>default_trigger</th>
                    <th>default_target</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>1 - Info</td>
                    <td>Informasi dasar</td>
                    <td>Format:</td>
                    <td class="small">Format: docx, pdf, png. Ukuran Maks: 5MB</td>
                    <td>Banner, Kolom-Tabel</td>
                    <td>[no trigger]</td>
                    <td>Seluruh pengguna</td>
                    <td class="nowrap">Inactive</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>1 - Info</td>
                    <td>Tenggat Waktu</td>
                    <td>Kolom Deadline:</td>
                    <td class="small">Kolom Deadline: -1 Hari, Kolom Deadline: 24 Jan 2025</td>
                    <td>Banner, Kolom-Tabel</td>
                    <td>[no trigger]</td>
                    <td>Pemohon/Admin</td>
                    <td class="nowrap">Request</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Pengumuman</td>
                    <td>Pengumuman Publik</td>
                    <td>Pengumuman:</td>
                    <td class="small">Pengumuman: Perubahan kebijakan berlaku mulai hari ini.</td>
                    <td>Banner Dashboard, Email</td>
                    <td>Publish oleh otoritas</td>
                    <td>Seluruh pengguna, otoritas</td>
                    <td class="nowrap">Working</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>4 - Peringatan</td>
                    <td>Konfirmasi CRUD</td>
                    <td>Warning:</td>
                    <td class="small">Warning: Aksi ini tidak dapat dibatalkan.</td>
                    <td>Pop-up</td>
                    <td>Aksi berisiko tinggi (delete/edit)</td>
                    <td>Admin/Direksi</td>
                    <td class="nowrap">Active</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>4 - Peringatan</td>
                    <td>Pesan Berhasil</td>
                    <td>Success:</td>
                    <td class="small">Success: Data baru telah ditambahkan. Cek detail.</td>
                    <td>Pop-up, banner</td>
                    <td>Insert/update sukses</td>
                    <td>Pengguna terkait</td>
                    <td class="nowrap">Working</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>1 - Info</td>
                    <td>Tips Penggunaan</td>
                    <td>Tip:</td>
                    <td class="small">Tip: Gunakan browser terbaru untuk performa optimal.</td>
                    <td>Banner</td>
                    <td>[no trigger]</td>
                    <td>Seluruh pengguna</td>
                    <td class="nowrap">Request</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>1 - Info</td>
                    <td>Informasi Maintenance</td>
                    <td>Info:</td>
                    <td class="small">Sistem akan maintenance pada Sabtu 10:00-12:00 WIB.</td>
                    <td>Banner, Email</td>
                    <td>[no trigger]</td>
                    <td>Seluruh pengguna</td>
                    <td class="nowrap">Request</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>2 - Pemberitahuan</td>
                    <td>Update Modul</td>
                    <td>Update:</td>
                    <td class="small">Modul Pemetaan OBE telah diperbarui ke versi terbaru.</td>
                    <td>Banner, Pop-up</td>
                    <td>[on update]</td>
                    <td>Pengguna terkait</td>
                    <td class="nowrap">Working</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>2 - Pemberitahuan</td>
                    <td>Jadwal Webinar</td>
                    <td>Info:</td>
                    <td class="small">Webinar Monitoring OBE akan dilaksanakan 3 Desember 2025.</td>
                    <td>Email, Banner</td>
                    <td>[no trigger]</td>
                    <td>Seluruh pengguna</td>
                    <td class="nowrap">Working</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>3 - Pengumuman</td>
                    <td>Perubahan Kebijakan</td>
                    <td>Pengumuman:</td>
                    <td class="small">Mulai 1 Januari 2026, sistem login SSO wajib menggunakan MFA.</td>
                    <td>Banner Dashboard, Email</td>
                    <td>Publish oleh admin</td>
                    <td>Seluruh pengguna</td>
                    <td class="nowrap">Working</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>3 - Pengumuman</td>
                    <td>Jadwal Libur</td>
                    <td>Pengumuman:</td>
                    <td class="small">Libur nasional: 25 Desember 2025, semua layanan tidak aktif.</td>
                    <td>Banner, Email</td>
                    <td>[no trigger]</td>
                    <td>Seluruh pengguna</td>
                    <td class="nowrap">Request</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>4 - Peringatan</td>
                    <td>Hapus Data</td>
                    <td>Warning:</td>
                    <td class="small">Anda akan menghapus data mahasiswa. Proses ini tidak dapat dibatalkan.</td>
                    <td>Pop-up</td>
                    <td>[on delete]</td>
                    <td>Admin</td>
                    <td class="nowrap">Active</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>4 - Peringatan</td>
                    <td>Password Expired</td>
                    <td>Warning:</td>
                    <td class="small">Password Anda akan kadaluarsa dalam 3 hari. Segera ubah password.</td>
                    <td>Pop-up, Email</td>
                    <td>[no trigger]</td>
                    <td>Pengguna terkait</td>
                    <td class="nowrap">Working</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>5 - Alarm</td>
                    <td>System Down</td>
                    <td>Alarm:</td>
                    <td class="small">Sistem Monitoring OBE sedang tidak aktif. Tim IT sedang menanganinya.</td>
                    <td>Pop-up, Email, Banner</td>
                    <td>[system down]</td>
                    <td>Admin, Tim IT</td>
                    <td class="nowrap">Active</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>5 - Alarm</td>
                    <td>Kesalahan Sistem</td>
                    <td>Alarm:</td>
                    <td class="small">Terjadi kesalahan sistem kritis, segera lakukan pemeriksaan.</td>
                    <td>Pop-up, Email</td>
                    <td>[system error]</td>
                    <td>Admin, Tim IT</td>
                    <td class="nowrap">Active</td>
                  </tr>
                 
                  <tr>
                    <td>11</td>
                    <td>4 - Peringatan</td>
                    <td>Reset Password</td>
                    <td>Reset Password</td>
                    <td class="small">Link reset password Anda telah dibuat. Silakan ikuti tautan berikut.</td>
                    <td>Email, WA</td>
                    <td>User klik "Forgot Password"</td>
                    <td>Seluruh pengguna</td>
                    <td class="nowrap">Active</td>
                  </tr>

                  <tr>
                    <td>12</td>
                    <td>4 - Peringatan</td>
                    <td>OTP Login</td>
                    <td>OTP Login</td>
                    <td class="small">Kode OTP login Anda: {{otp}} (berlaku 2 menit).</td>
                    <td>WA / SMS</td>
                    <td>User login dengan MFA</td>
                    <td>Mahasiswa & Dosen</td>
                    <td class="nowrap">Active</td>
                  </tr>

                  <tr>
                    <td>13</td>
                    <td>2 - Pemberitahuan</td>
                    <td>Pesan Perwalian</td>
                    <td>Pesan Perwalian</td>
                    <td class="small">Anda menerima pesan dari Dosen Wali. Silakan cek halaman perwalian.</td>
                    <td>Banner, WA</td>
                    <td>Dosen wali mengirim pesan</td>
                    <td>Mahasiswa</td>
                    <td class="nowrap">Working</td>
                  </tr>
                  
                  <tr>
                    <td>21</td>
                    <td>2 - Pemberitahuan</td>
                    <td>Reminder Upload RPS</td>
                    <td>Reminder Upload RPS</td>
                    <td class="small">Anda belum mengunggah RPS. Harap unggah sebelum batas waktu.</td>
                    <td>Email, Banner</td>
                    <td>H-3 deadline RPS</td>
                    <td>Dosen pengampu</td>
                    <td class="nowrap">Working</td>
                  </tr>
                  <tr>
                    <td>22</td>
                    <td>2 - Pemberitahuan</td>
                    <td>Reminder Upload Soal</td>
                    <td>Reminder Upload Soal</td>
                    <td class="small">Segera unggah soal ujian Anda.</td>
                    <td>Email, Banner</td>
                    <td>H-2 deadline soal</td>
                    <td>Dosen pengampu</td>
                    <td class="nowrap">Working</td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td>2 - Pemberitahuan</td>
                    <td>Tugas Verifikator</td>
                    <td>Tugas Verifikator</td>
                    <td class="small">Anda memiliki soal yang harus diverifikasi.</td>
                    <td>Email, Pop-up</td>
                    <td>Soal dikirim ke verifikator</td>
                    <td>Dosen verifikator</td>
                    <td class="nowrap">Active</td>
                  </tr>

                  <tr>
                    <td>24</td>
                    <td>2 - Pemberitahuan</td>
                    <td>Reminder Upload Nilai</td>
                    <td>Reminder Nilai</td>
                    <td class="small">Anda belum mengunggah nilai. Harap lengkapi sebelum deadline.</td>
                    <td>Email, Banner</td>
                    <td>H-3 deadline nilai</td>
                    <td>Dosen</td>
                    <td class="nowrap">Working</td>
                  </tr>

                  <tr>
                    <td>25</td>
                    <td>2 - Pemberitahuan</td>
                    <td>Reminder Portofolio</td>
                    <td>Portofolio MK</td>
                    <td class="small">Portofolio belum lengkap. Harap lengkapi dokumen yang diperlukan.</td>
                    <td>Banner, Email</td>
                    <td>Setelah MK selesai</td>
                    <td>Dosen / QA</td>
                    <td class="nowrap">Request</td>
                  </tr>
                  
                  <tr>
                    <td>31</td>
                    <td>4 - Peringatan</td>
                    <td>Reset Password Mahasiswa</td>
                    <td>Reset Password</td>
                    <td class="small">Link reset password telah dikirim ke email kampus Anda.</td>
                    <td>Email</td>
                    <td>Klik lupa password</td>
                    <td>Mahasiswa</td>
                    <td class="nowrap">Active</td>
                  </tr>

                  <tr>
                    <td>32</td>
                    <td>4 - Peringatan</td>
                    <td>Tagihan ReWorkingi</td>
                    <td>Tagihan ReWorkingi</td>
                    <td class="small">Anda memiliki tagihan reWorkingi yang harus diselesaikan.</td>
                    <td>Email, Banner</td>
                    <td>Nilai < KKD / ReWorkingi dijadwalkan</td>
                    <td>Mahasiswa</td>
                    <td class="nowrap">Active</td>
                  </tr>

                  <!-- notifikasi umum -->
                  <tr>
                    <td>1</td>
                    <td>1 - Info</td>
                    <td>Informasi Umum</td>
                    <td>Info:</td>
                    <td class="small">Sistem akan maintenance pada Sabtu 10:00-12:00 WIB.</td>
                    <td>Banner, Email</td>
                    <td>[no trigger]</td>
                    <td>Seluruh pengguna</td>
                    <td class="nowrap">Request</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>1 - Info</td>
                    <td>Tips Penggunaan</td>
                    <td>Tip:</td>
                    <td class="small">Gunakan browser terbaru untuk performa optimal.</td>
                    <td>Banner</td>
                    <td>[no trigger]</td>
                    <td>Seluruh pengguna</td>
                    <td class="nowrap">Request</td>
                  </tr>
                  <!-- notifikasi akademik -->
                  <tr>
                    <td>3</td>
                    <td>2 - Pemberitahuan</td>
                    <td>Reminder Upload RPS</td>
                    <td>Reminder:</td>
                    <td class="small">Upload RPS H-1 sebelum batas waktu.</td>
                    <td>Banner, Email, WA</td>
                    <td>[schedule]</td>
                    <td>Dosen, Verifikator</td>
                    <td class="nowrap">Working</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>2 - Pemberitahuan</td>
                    <td>Reminder Nilai</td>
                    <td>Reminder:</td>
                    <td class="small">Upload nilai H+1 setelah verifikasi soal.</td>
                    <td>Banner, Email</td>
                    <td>[schedule]</td>
                    <td>Dosen</td>
                    <td class="nowrap">Working</td>
                  </tr>
                  <!-- notifikasi mahasiswa -->
                  <tr>
                    <td>5</td>
                    <td>1 - Info</td>
                    <td>Reset Password</td>
                    <td>Reset:</td>
                    <td class="small">Permintaan reset password akun mahasiswa.</td>
                    <td>Email, WA</td>
                    <td>[user_request]</td>
                    <td>Mahasiswa</td>
                    <td class="nowrap">Working</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>1 - Info</td>
                    <td>Tagihan ReWorkingi</td>
                    <td>Info:</td>
                    <td class="small">Pengingat tagihan reWorkingi untuk mahasiswa tertentu.</td>
                    <td>Email, WA</td>
                    <td>[schedule]</td>
                    <td>Mahasiswa</td>
                    <td class="nowrap">Working</td>
                  </tr>

                </tbody>
                <tfoot>
                   <tr class="table-secondary">
                    <td colspan="9">A. Notifikasi Sistem (Umum / Semua Pengguna)</td>
                  </tr>
                  <tr class="table-secondary">
                    <td colspan="9">B. Reminder Akademik (RPS, Soal, Nilai, Portofolio, Verifikator)</td>
                  </tr>
                  <tr class="table-secondary">
                    <td colspan="9">C. Notifikasi Khusus Mahasiswa</td>
                  </tr>
                </tfoot>
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
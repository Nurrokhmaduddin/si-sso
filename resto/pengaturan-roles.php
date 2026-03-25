<?php $page = 'pengaturan-roles'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Roles
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
                  <b>Jalur:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Status:</b> Semua
                </div>

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


        <!-- ========== CARD : Tabel  ========== -->
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table-bordered table-striped table-sm datatables1">
                <thead>
                  <tr class="text-uppercase">
                   <th title="INT • Primary key">id</th>
                   <th title="VARCHAR(100) • Role code/name">name</th>
                   <th title="VARCHAR(150) • Label">display_name</th>
                   <th title="TEXT • Penjelasan">description</th>
                   <th style="width: 80px;">aksi</th>
                 </tr>
               </thead>
               <tbody>
                <tr>
                  <td>1</td>
                  <td>superadmin</td>
                  <td>Superadmin</td>
                  <td>Hak akses:

Manage semua user & role
Setting sistem (outlet, pajak, dll)
Akses semua modul

Contoh:

Tim IT / vendor</td>
                  <td>
                    <a href="pengaturan-roles-detail.php" class="btn btn-sm btn-outline-primary" title="Pengaturan Hak Akses Peran">
                      🔐
                    </a>
                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>admin</td>
                  <td>Admin Operational</td>
                  <td>Hak akses:

Setup menu & harga
Setup resep (BOM)
Setup stok & supplier
Kelola user (kasir, kitchen, dll)

Contoh:

Admin restoran / supervisor</td>
                  <td>
                    <a href="pengaturan-roles-detail.php" class="btn btn-sm btn-outline-primary" title="Pengaturan Hak Akses Peran">
                      🔐
                    </a>
                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>manajerial</td>
                  <td>Manajerial</td>
                  <td>Hak akses:

Lihat dashboard (omset, profit, stok)
Approve:
pembelian bahan
penyesuaian stok
Monitoring operasional

Contoh:

Owner
Manager outlet</td>
                  <td>
                    <a href="pengaturan-roles-detail.php" class="btn btn-sm btn-outline-primary" title="Pengaturan Hak Akses Peran">
                      🔐
                    </a>
                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>fungsional</td>
                  <td>Fungsional</td>
                  <td>🧾 a. Kasir (Sales)

Hak akses:

Input transaksi
Terima pembayaran
Cetak struk
Kirim order ke kitchen
🍳 b. Kitchen Staff

Hak akses:

Lihat order masuk
Update status:
To Do → Cooking → Ready
📦 c. Gudang / Inventory Staff

Hak akses:

Input stok masuk
Stock opname
Update stok
Request pembelian
🚚 d. Purchasing

Hak akses:

Buat PO (purchase order)
Input pembelian bahan
Kelola supplier</td>
                  <td>
                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>stakeholder</td>
                  <td>Stakeholder</td>
                  <td>Hak akses:

Lihat laporan:
omset
stok
penjualan
Tidak bisa edit

Contoh:

Investor
Partner bisnis</td>
                  <td>
                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                  </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>auditor</td>
                  <td>Auditor</td>
                  <td>Hak akses:

Akses audit trail:
siapa edit transaksi
siapa hapus data
Lihat log aktivitas
Read-only

Contoh:

Internal audit
Akuntan eksternal</td>
                  <td>
                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                  </td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>integrator</td>
                  <td>Integrator</td>
                  <td>Hak akses:

API access

Contoh integrasi:

Payment gateway (QRIS, EDC)
Aplikasi delivery (GoFood, GrabFood)
Sistem akuntansi lain</td>
                  <td>
                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                  </td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>guest</td>
                  <td>Guest</td>
                  <td>Hak akses:

Demo sistem
View terbatas

Contoh:

Calon client
Training user baru</td>
                  <td>
                    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
                    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
                  </td>
                </tr>

                <tr>
  <td>11</td>
  <td>admin</td>
  <td>Admin / Owner</td>
  <td>Hak akses:<br>
      Dashboard, Laporan Penjualan, Laporan Stok, Master Data (Produk, Bahan, Resep), User Management, Setting Sistem</td>
  <td>
    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
  </td>
</tr>

<tr>
  <td>12</td>
  <td>kasir</td>
  <td>Kasir</td>
  <td>Hak akses:<br>
      Dashboard, Transaksi Penjualan (POS), Pembayaran, Closing Shift, Laporan Harian</td>
  <td>
    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
  </td>
</tr>

<tr>
  <td>13</td>
  <td>gudang</td>
  <td>Gudang / Inventory</td>
  <td>Hak akses:<br>
      Dashboard, Stok Masuk, Stok Keluar, Stok Bahan, Stok Opname / Penyesuaian, Pembelian Bahan</td>
  <td>
    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
  </td>
</tr>

<tr>
  <td>14</td>
  <td>kitchen</td>
  <td>Kitchen / Chef</td>
  <td>Hak akses:<br>
      Dashboard, Kitchen Display, Proses Masak, Resep / BOM, Stok Bahan</td>
  <td>
    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
  </td>
</tr>

<tr>
  <td>15</td>
  <td>finance</td>
  <td>Finance</td>
  <td>Hak akses:<br>
      Dashboard, Verifikasi Pembayaran, Invoice, Laporan Keuangan, Pengeluaran / Expense</td>
  <td>
    <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
    <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
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
          Modul Pengaturan digunakan untuk mengelola preferensi dan konfigurasi umum sistem yang bersifat teknis maupun administratif. Pengaturan pada modul ini tidak secara langsung memengaruhi proses bisnis inti dari sistem informasi, melainkan mendukung aspek operasional dan tata kelola aplikasi secara keseluruhan.

Perubahan pada modul ini umumnya berkaitan dengan pengaturan lingkungan aplikasi, preferensi penggunaan, atau parameter sistem yang menunjang jalannya aplikasi. Penyesuaian tersebut bertujuan untuk memastikan aplikasi berjalan sesuai kebutuhan organisasi tanpa mengubah alur utama proses bisnis yang telah ditetapkan.
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
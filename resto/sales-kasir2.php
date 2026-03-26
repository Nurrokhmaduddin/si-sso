

<?php $page = 'sales-kasir';   ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Daftar Order Meja
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
                  <b>Angkatan:</b> 2023 &nbsp;
                </div>                
                <div class="col-md-6">
                  <b>Peminatan:</b> Peminatan B
                </div>
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
                <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>    
                <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalGagal">
                  <i class="fas fa-exclamation-triangle me-1"></i> ErrorHandler
                </button>
              </div>
            </div>
            
          </div>


         <!-- ========== CARD : Tabel  Granular ========== -->
         <style>




  .status {
    font-weight: bold;
    padding: 0.2rem 0.5rem;
    border-radius: 4px;
    font-size: 0.85rem;
    text-transform: uppercase;
    display: inline-block;
  }

  .pending { background-color: #FFC107; color: white; }
  .proses { background-color: #03A9F4; color: white; }
  .siap { background-color: #4CAF50; color: white; }
  .paid { background-color: #9E9E9E; color: white; }

  button {
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: all 0.2s ease;
    font-size: 0.85rem;
  }

  .btn-detail { background-color: #03A9F4; color: white; }
  .btn-detail:hover { background-color: #0288D1; }

  .btn-bayar { background-color: #4CAF50; color: white; }
  .btn-bayar:hover { background-color: #388E3C; }

</style>
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm datatables1">
  <thead>
    <tr>
      <th>No</th>
      <th>Kode Meja</th>
      <th>Nama Meja</th>
      <th>Area</th>
      <th>Kapasitas</th>
      <th>Nama Pemesan</th>
      <th>Waktu Pesan</th>
      <th>Status</th>
      <th>Total</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>T01</td>
      <td>Meja Depan</td>
      <td>Indoor</td>
      <td>4</td>
      <td>Andi</td>
      <td>14:30</td>
      <td><span class="status pending">Pending</span></td>
      <td>Rp 50.000</td>
      <td>
        <button class="btn-detail" onclick="window.location='sales-kasir2-detail.php'">Detail</button>
        <button class="btn-bayar">Bayar</button>
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>T02</td>
      <td>Meja Kasir</td>
      <td>Indoor</td>
      <td>2</td>
      <td>Budi</td>
      <td>14:45</td>
      <td><span class="status proses">Proses</span></td>
      <td>Rp 35.000</td>
      <td>
        <button class="btn-detail">Detail</button>
        <button class="btn-bayar">Bayar</button>
      </td>
    </tr>
    <tr>
      <td>3</td>
      <td>T03</td>
      <td>Meja Tengah 1</td>
      <td>Indoor</td>
      <td>4</td>
      <td>Citra</td>
      <td>14:50</td>
      <td><span class="status siap">Siap</span></td>
      <td>Rp 70.000</td>
      <td>
        <button class="btn-detail">Detail</button>
        <button class="btn-bayar">Bayar</button>
      </td>
    </tr>
  </tbody>

    </table>
    </div>
  </div>
</div>
----------------
<table class="table table-bordered table-striped">
  <thead class="table-dark text-center">
    <tr>
      <th>No</th>
      <th>Meja</th>
      <th>Order ID</th>
      <th>Status Bill</th>
      <th>Total</th>
      <th>Waktu</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>MEJA01</td>
      <td>ORD-001</td>
      <td><span class="badge bg-warning">OPEN</span></td>
      <td>Rp 85.000</td>
      <td>12:01</td>
      <td>
        <button class="btn btn-sm btn-info" onclick="window.location='sales-kasir2-detail.php'">Detail</button>
        <button class="btn btn-sm btn-success">Bayar</button>
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>MEJA02</td>
      <td>ORD-002</td>
      <td><span class="badge bg-warning">OPEN</span></td>
      <td>Rp 120.000</td>
      <td>12:05</td>
      <td>
        <button class="btn btn-sm btn-info" onclick="window.location='sales-kasir2-detail.php'">Detail</button>
        <button class="btn btn-sm btn-success">Bayar</button>
      </td>
    </tr>
    <tr>
      <td>3</td>
      <td>MEJA03</td>
      <td>ORD-003</td>
      <td><span class="badge bg-success">READY</span></td>
      <td>Rp 95.000</td>
      <td>11:50</td>
      <td>
        <button class="btn btn-sm btn-info" onclick="window.location='sales-kasir2-detail.php'">Detail</button>
        <button class="btn btn-sm btn-success">Bayar</button>
      </td>
    </tr>
    <tr>
      <td>4</td>
      <td>MEJA04</td>
      <td>ORD-004</td>
      <td><span class="badge bg-danger">CLOSED</span></td>
      <td>Rp 150.000</td>
      <td>11:30</td>
      <td>
        <button class="btn btn-sm btn-secondary" disabled>Selesai</button>
      </td>
    </tr>
    <tr>
      <td>5</td>
      <td>MEJA05</td>
      <td>ORD-005</td>
      <td><span class="badge bg-warning">OPEN</span></td>
      <td>Rp 60.000</td>
      <td>12:10</td>
      <td>
        <button class="btn btn-sm btn-info" onclick="window.location='sales-kasir2-detail.php'">Detail</button>
        <button class="btn btn-sm btn-success">Bayar</button>
      </td>
    </tr>
    <tr>
      <td>6</td>
      <td>MEJA06</td>
      <td>ORD-006</td>
      <td><span class="badge bg-primary">PARTIAL</span></td>
      <td>Rp 110.000</td>
      <td>12:00</td>
      <td>
        <button class="btn btn-sm btn-info" onclick="window.location='sales-kasir2-detail.php'">Detail</button>
        <button class="btn btn-sm btn-success">Bayar</button>
      </td>
    </tr>
    <tr>
      <td>7</td>
      <td>MEJA07</td>
      <td>ORD-007</td>
      <td><span class="badge bg-success">READY</span></td>
      <td>Rp 200.000</td>
      <td>11:40</td>
      <td>
        <button class="btn btn-sm btn-info" onclick="window.location='sales-kasir2-detail.php'">Detail</button>
        <button class="btn btn-sm btn-success">Bayar</button>
      </td>
    </tr>
    <tr>
      <td>8</td>
      <td>MEJA08</td>
      <td>ORD-008</td>
      <td><span class="badge bg-danger">CLOSED</span></td>
      <td>Rp 175.000</td>
      <td>11:20</td>
      <td>
        <button class="btn btn-sm btn-secondary" disabled>Selesai</button>
      </td>
    </tr>
    <tr>
      <td>9</td>
      <td>MEJA09</td>
      <td>ORD-009</td>
      <td><span class="badge bg-warning">OPEN</span></td>
      <td>Rp 45.000</td>
      <td>12:15</td>
      <td>
        <button class="btn btn-sm btn-info" onclick="window.location='sales-kasir2-detail.php'">Detail</button>
        <button class="btn btn-sm btn-success">Bayar</button>
      </td>
    </tr>
  </tbody>
<tfoot>
  <tr>
    <th>Status</th>
    <th>Arti</th>
  </tr>
  <tr>
    <td>🟡 OPEN</td>
    <td>Masih aktif (bisa tambah order)</td>
  </tr>
  <tr>
    <td>🔵 PARTIAL SERVED</td>
    <td>Sebagian item sudah selesai</td>
  </tr>
  <tr>
    <td>🟢 READY TO PAY</td>
    <td>Semua item sudah selesai</td>
  </tr>
  <tr>
    <td>🔴 CLOSED</td>
    <td>Sudah dibayar</td>
  </tr>
</tfoot>
</table>
----------------
          




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

<div class="modal fade" id="modalGagal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalGagalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-danger border-2 shadow">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="modalGagalLabel"><i class="fas fa-times-circle me-2"></i>Oops! Terjadi Kesalahan</h5>
      </div>
      <div class="modal-body">
        <p><strong>❌ Masalah:</strong><br> 
          <span id="errorAction">Upload file gagal.</span></p>

        <p><strong>⚠️ Penyebab:</strong><br> 
          <span id="errorReason">Format file tidak sesuai (.pdf/.docx) atau ukuran melebihi 5MB.</span></p>

        <p><strong>💡 Solusi:</strong><br> 
          <span id="errorSolution">Pastikan file sesuai format, ukuran < 5MB, lalu coba unggah lagi.</span></p>

        <p><i>Jika masih gagal, hubungi admin untuk bantuan atau tips lebih lanjut.</i></p>

        <!-- Optional: reward tip gamified -->
        <div class="alert alert-warning mt-3" role="alert">
          🔹 Tip: Setiap percobaan upload berhasil akan menambah EXP +20! Jangan menyerah! 🚀
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" id="closeGagal" data-bs-dismiss="modal"><i class="fas fa-check me-1"></i> Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php include('5script.php'); ?>
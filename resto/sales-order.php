
<?php $page = 'sales-order';   ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Dashboard ORDER MASUK (Monitoring / Waiter View)
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
                  <b>Kategori:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Rentang Harga Acuan:</b> Semua
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
              </div>
            </div>
            
          </div>


          <!-- ========== CARD : grid  order on kitchen ========== -->
          <style>
.status-badge {
  padding: 5px 10px;
  border-radius: 8px;
  font-size: 12px;
  font-weight: 500;
}

.status-baru {
  background: #fff3cd;
  color: #856404;
}

.status-dimasak {
  background: #cce5ff;
  color: #004085;
}

.status-selesai {
  background: #d4edda;
  color: #155724;
}


</style>

<div class="card">
  <!-- <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">📥 Order Masuk</h5>

    <input type="text" class="form-control form-control-sm w-25" placeholder="Cari order...">
  </div> -->

  <div class="card-body ">
    <table class="table table-sm table-hover datatables1">
      <thead>
        <tr>
          <th>#Order</th>
          <th>Meja</th>
          <th>Menu</th>
          <th>Status</th>
          <th>Waktu</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

        <tr>
          <td>#101</td>
          <td>3</td>
          <td>Nasi Goreng x2, Es Teh x2</td>
          <td><span class="status-badge status-baru">🟡 Baru</span></td>
          <td>12:01</td>
          <td>
            <button class="btn btn-sm btn-outline-primary">Detail</button>
          </td>
        </tr>

        <tr>
          <td>#102</td>
          <td>1</td>
          <td>Mie Ayam x1</td>
          <td><span class="status-badge status-dimasak">🔵 Dimasak</span></td>
          <td>12:03</td>
          <td>
            <button class="btn btn-sm btn-outline-primary">Detail</button>
          </td>
        </tr>

        <tr>
          <td>#103</td>
          <td>5</td>
          <td>Es Teh x3</td>
          <td><span class="status-badge status-selesai">🟢 Selesai</span></td>
          <td>12:05</td>
          <td>
            <button class="btn btn-sm btn-outline-success">Sajikan</button>
          </td>
        </tr>

        <tr>
          <td>#104</td>
          <td>2</td>
          <td>Ayam Bakar x1</td>
          <td><span class="status-badge status-dimasak">🔵 Dimasak</span></td>
          <td>12:07</td>
          <td>
            <button class="btn btn-sm btn-outline-primary">Detail</button>
          </td>
        </tr>

        <tr>
          <td>#105</td>
          <td>7</td>
          <td>Jus Mangga x2</td>
          <td><span class="status-badge status-baru">🟡 Baru</span></td>
          <td>12:10</td>
          <td>
            <button class="btn btn-sm btn-outline-primary">Detail</button>
          </td>
        </tr>

        <tr>
          <td>#106</td>
          <td>4</td>
          <td>Mie Goreng x1</td>
          <td><span class="status-badge status-selesai">🟢 Selesai</span></td>
          <td>12:12</td>
          <td>
            <button class="btn btn-sm btn-outline-success">Sajikan</button>
          </td>
        </tr>

      </tbody>
    </table>
  </div>

  <!-- <div class="card-footer text-end">
    <button class="btn btn-sm btn-outline-secondary">Refresh</button>
  </div> -->
</div>



------------------
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
        <h5 class="modal-title" id="modalTambahMenuLabel">Tambah Menu / Katalog</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="modal-body">

          <!-- Informasi -->
          <div class="alert alert-info mb-3 py-2" role="alert" style="font-size: 0.9rem;">
            <i class="fas fa-info-circle me-1"></i>
            <strong>Catatan:</strong> Semua field dengan <span class="text-danger">*</span> wajib diisi.
          </div>

          <!-- Form Inputs -->
          <div class="row g-3">

            <div class="col-md-6">
              <label for="menuName" class="form-label">Nama Menu <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="menuName" name="menuName" placeholder="Masukkan Nama Menu" required>
            </div>

            <div class="col-md-6">
              <label for="menuCategory" class="form-label">Kategori <span class="text-danger">*</span></label>
              <select id="menuCategory" name="menuCategory" class="form-select" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
                <option value="Dessert">Dessert</option>
                <option value="Snack">Snack</option>
              </select>
            </div>

            <div class="col-md-6">
              <label for="menuImage" class="form-label">Gambar Menu <span class="text-danger">*</span></label>
              <input type="file" class="form-control" id="menuImage" name="menuImage" required>
            </div>

            <div class="col-md-6">
              <label for="menuPrice" class="form-label" title="Harga acuan per menu, bisa disesuaikan di daftar harga">Harga Acuan <span class="text-danger">*</span></label>
              <input type="number" class="form-control" id="menuPrice" name="menuPrice" placeholder="Masukkan Harga Acuan" required>
            </div>

            <div class="col-md-6">
              <label for="menuBOM" class="form-label" title="Resep / BOM, diambil dari daftar resep">Resep (BOM)</label>
              <select id="menuBOM" name="menuBOM" class="form-select">
                <option value="">-- Pilih Resep --</option>
                <option value="R001">Nasi Goreng</option>
                <option value="R002">Mie Goreng</option>
                <option value="R003">Martabak Manis</option>
              </select>
            </div>

            <div class="col-md-6">
              <label for="menuStatus" class="form-label">Status Menu</label>
              <select id="menuStatus" name="menuStatus" class="form-select">
                <option value="Aktif">Aktif</option>
                <option value="NonAktif">Non Aktif</option>
              </select>
            </div>

            <div class="col-md-12">
              <label for="menuDesc" class="form-label">Deskripsi Menu</label>
              <textarea id="menuDesc" name="menuDesc" class="form-control" rows="3" placeholder="Deskripsi singkat menu"></textarea>
            </div>

            <div class="col-md-6">
              <label for="menuID" class="form-label">ID Menu (Otomatis)</label>
              <input type="text" class="form-control" id="menuID" name="menuID" placeholder="Diisi sistem" disabled>
            </div>

            <div class="col-md-6">
              <label for="menuCreated" class="form-label">Tanggal Ditambahkan</label>
              <input type="text" class="form-control" id="menuCreated" name="menuCreated" value="<?= date('Y-m-d') ?>" disabled>
            </div>

          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan Menu</button>
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
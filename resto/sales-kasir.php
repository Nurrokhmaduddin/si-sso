
<?php $page = 'sales-kasir';   ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">POS /Kasir
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
          <!-- <div class="card">
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
              </div>
            </div>
            
          </div> -->


          <!-- ========== CARD : grid  order on kitchen ========== -->
         <style>
.pos-container {
  display: flex;
  gap: 15px;
}

/* KIRI - KATEGORI */
.pos-category {
  width: 20%;
  background: #f4f6f9;
  border-radius: 10px;
  padding: 10px;
}

.pos-category button {
  width: 100%;
  margin-bottom: 8px;
  border-radius: 8px;
}

/* TENGAH - MENU */
.pos-menu {
  width: 50%;
}

.menu-card {
  border-radius: 10px;
  cursor: pointer;
  transition: 0.2s;
}

.menu-card:hover {
  transform: scale(1.03);
}

/* KANAN - CART */
.pos-cart {
  width: 30%;
  background: #fff;
  border-radius: 10px;
  padding: 15px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.08);
}

.cart-item {
  display: flex;
  justify-content: space-between;
  margin-bottom: 8px;
}

.qty-btn {
  border: none;
  background: #eee;
  border-radius: 5px;
  width: 25px;
  height: 25px;
}

.total-box {
  font-size: 18px;
  font-weight: bold;
}
</style>

<div class="pos-container">

  <!-- ================= KATEGORI ================= -->
  <div class="pos-category">
    <h6 class="mb-3">Kategori</h6>
    <button class="btn btn-outline-primary btn-sm">Semua</button>
    <button class="btn btn-outline-primary btn-sm">Makanan</button>
    <button class="btn btn-outline-primary btn-sm">Minuman</button>
    <button class="btn btn-outline-primary btn-sm">Snack</button>
    <button class="btn btn-outline-primary btn-sm">Dessert</button>
  </div>


  <!-- ================= MENU ================= -->
  <div class="pos-menu">
    <div class="row g-3">

      <div class="col-md-4">
        <div class="card menu-card p-2 text-center">
          <img src="nasi-goreng.jpg" style="height:100px;object-fit:cover;">
          <h6 class="mt-2">Nasi Goreng</h6>
          <small class="text-success">Rp 25.000</small>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card menu-card p-2 text-center">
          <img src="mie-goreng.jpg" style="height:100px;object-fit:cover;">
          <h6 class="mt-2">Mie Goreng</h6>
          <small class="text-success">Rp 22.000</small>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card menu-card p-2 text-center">
          <img src="es-teh.jpg" style="height:100px;object-fit:cover;">
          <h6 class="mt-2">Es Teh</h6>
          <small class="text-success">Rp 8.000</small>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card menu-card p-2 text-center">
          <img src="jus.jpg" style="height:100px;object-fit:cover;">
          <h6 class="mt-2">Jus Mangga</h6>
          <small class="text-success">Rp 12.000</small>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card menu-card p-2 text-center">
          <img src="ayam.jpg" style="height:100px;object-fit:cover;">
          <h6 class="mt-2">Ayam Bakar</h6>
          <small class="text-success">Rp 30.000</small>
        </div>
      </div>

    </div>
  </div>


  <!-- ================= CART ================= -->
  <div class="pos-cart">

    <h6>Order</h6>
    <p class="mb-2">Meja: <b>3</b></p>
    <hr>

    <!-- ITEM -->
    <div class="cart-item">
      <div>
        Nasi Goreng
        <div>
          <button class="qty-btn">-</button>
          <span class="mx-1">2</span>
          <button class="qty-btn">+</button>
        </div>
      </div>
      <div>50k</div>
    </div>

    <div class="cart-item">
      <div>
        Es Teh
        <div>
          <button class="qty-btn">-</button>
          <span class="mx-1">2</span>
          <button class="qty-btn">+</button>
        </div>
      </div>
      <div>16k</div>
    </div>

    <hr>

    <!-- TOTAL -->
    <div class="d-flex justify-content-between total-box">
      <span>Total</span>
      <span>Rp 66.000</span>
    </div>

    <!-- BUTTON -->
    <button class="btn btn-success w-100 mt-3">
      💳 BAYAR
    </button>

  </div>

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
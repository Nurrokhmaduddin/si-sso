

<?php $page = 'operation-beli-bahan2';   ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Daftar Pembelian Bahan (source harga)
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
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm datatables1">


  <thead >
    <tr>
      <th title="Nomor urut pembelian">No</th>
      <th title="Tanggal pembelian bahan">Tanggal</th>
      <th title="Nama supplier atau pemasok">Supplier</th>
      <th title="Kode unik untuk setiap bahan">Kode Bahan</th>
      <th title="Nama bahan yang dibeli">Nama Bahan</th>
      <th title="Jumlah bahan yang dibeli">Qty</th>
      <th title="Satuan bahan, misal kg, liter">Satuan</th>
      <th title="Harga beli per satuan bahan (Rp)">Harga Satuan (Rp)</th>
      <th title="Total harga pembelian (Qty x Harga Satuan)">Total Harga (Rp)</th>
      <th title="Stok bahan sebelum pembelian">Stok Awal</th>
      <th title="Stok bahan setelah pembelian">Stok Akhir</th>
      <th title="HPP terbaru bahan, dihitung dari moving average cost">HPP Terbaru</th>
      <th title="Catatan tambahan / nomor faktur / invoice">Catatan / Invoice</th>
      <th title="Aksi untuk edit atau hapus data">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>2026-03-01</td>
      <td>PT. FreshFood</td>
      <td>B001</td>
      <td>Tomat</td>
      <td>10</td>
      <td>kg</td>
      <td>20,000</td>
      <td>200,000</td>
      <td>5</td>
      <td>15</td>
      <td>20,000</td>
      <td>Faktur #001</td>
      <td>
        <button class="btn btn-sm btn-outline-primary">✏️</button>
        <button class="btn btn-sm btn-outline-danger">🗑️</button>
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>2026-03-02</td>
      <td>CV. BahanSegar</td>
      <td>B002</td>
      <td>Ayam Fillet</td>
      <td>5</td>
      <td>kg</td>
      <td>50,000</td>
      <td>250,000</td>
      <td>3</td>
      <td>8</td>
      <td>50,000</td>
      <td>Faktur #002</td>
      <td>
        <button class="btn btn-sm btn-outline-primary">✏️</button>
        <button class="btn btn-sm btn-outline-danger">🗑️</button>
      </td>
    </tr>
    <tr>
      <td>3</td>
      <td>2026-03-05</td>
      <td>PT. FreshFood</td>
      <td>B001</td>
      <td>Tomat</td>
      <td>15</td>
      <td>kg</td>
      <td>22,000</td>
      <td>330,000</td>
      <td>15</td>
      <td>30</td>
      <td>21,333</td>
      <td>Faktur #003</td>
      <td>
        <button class="btn btn-sm btn-outline-primary">✏️</button>
        <button class="btn btn-sm btn-outline-danger">🗑️</button>
      </td>
    </tr>
    <!-- Baris berikut bisa ditambahkan sesuai kebutuhan -->
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
  <div class="modal-dialog modal-xl">
    <div class="modal-content rounded-3 shadow">

      <!-- HEADER -->
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Tambah Pembelian Bahan Baku</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form method="POST">

        <div class="modal-body">

          <!-- INFO -->
          <div class="alert alert-warning py-2 mb-3">
            <strong>Catatan:</strong> 1 transaksi dapat berisi banyak bahan baku dari 1 supplier.
          </div>

          <!-- ================= HEADER TRANSAKSI ================= -->
          <div class="row">

            <div class="col-md-3 mb-3">
              <label>Tanggal <span class="text-danger">*</span></label>
              <input type="date" class="form-control" name="tanggal" required>
            </div>

            <div class="col-md-3 mb-3">
              <label>Supplier <span class="text-danger">*</span></label>
              <select class="form-select" name="supplier" required>
                <option value="">-- Pilih Supplier --</option>
                <option>PT FreshFood</option>
                <option>CV BahanSegar</option>
                <option>UD Makmur Jaya</option>
              </select>
            </div>

            <div class="col-md-3 mb-3">
              <label>Metode Pembayaran</label>
              <select class="form-select" name="metode_bayar">
                <option value="cash">Cash</option>
                <option value="hutang">Hutang</option>
              </select>
            </div>
            <div class="col-md-3 mb-3">
            	<label class="form-label">COA (atas metode pembayaran)</label>

            	<select class="form-select" name="coa_kas" required>
            		<option value="">-- Pilih Akun  --</option>

            		<option value="kas">Kas</option>
            		<option value="petty_cash">Petty Cash</option>
            		<option value="bank_bca">Bank BCA</option>
            		<option value="bank_mandiri">Bank Mandiri</option>
            		<option value="bank_bni">Bank BNI</option>
            		<option value="gopay">E-Wallet - GoPay</option>
            		<option value="ovo">E-Wallet - OVO</option>
            		<option value="dana">E-Wallet - DANA</option>
            	</select>

            	<small class="text-muted">
            		menentukan akun kredit dalam jurnal otomatis
            	</small>
            </div>

          </div>

          <hr>

          <!-- ================= DETAIL ITEM ================= -->
          <h6 class="mb-2">Detail Bahan Baku</h6>

          <table class="table table-bordered" id="tableItem">

  <thead class="table-light text-center">
    <tr>
      <th>Bahan Baku</th>
      <th width="120">Qty</th>
      <th width="140">Satuan</th>
      <th width="160">Harga</th>
      <th width="160">Subtotal</th>
      <th width="80">Aksi</th>
    </tr>
  </thead>

  <tbody id="itemBody">
    <!-- row pertama -->
    <tr>
      <td>
        <select class="form-select" name="bahan[]">
          <option value="">-- Pilih Bahan --</option>
          <option>Roti Burger</option>
          <option>Chicken Fillet</option>
          <option>Keju</option>
        </select>
      </td>

      <td>
        <input type="number" class="form-control qty" name="qty[]" value="1">
      </td>

      <td>
        <select class="form-select" name="satuan[]">
          <option>pcs</option>
          <option>kg</option>
          <option>gram</option>
        </select>
      </td>

      <td>
        <input type="number" class="form-control harga" name="harga[]" value="0">
      </td>

      <td class="text-end subtotal">0</td>

      <td class="text-center">
        <button type="button" class="btn btn-danger btn-sm btn-remove">🗑</button>
      </td>
    </tr>
  </tbody>

</table>

<!-- BUTTON -->
<button type="button" class="btn btn-success w-100 mt-2" id="btnAddRow">
  + Tambah Baris Bahan Baku
</button>

          <script>
document.getElementById('btnAddRow').addEventListener('click', function () {

    let row = `
    <tr>
      <td>
        <select class="form-select" name="bahan[]">
          <option value="">-- Pilih Bahan --</option>
          <option>Roti Burger</option>
          <option>Chicken Fillet</option>
          <option>Keju</option>
        </select>
      </td>

      <td>
        <input type="number" class="form-control qty" name="qty[]" value="1">
      </td>

      <td>
        <select class="form-select" name="satuan[]">
          <option>pcs</option>
          <option>kg</option>
          <option>gram</option>
        </select>
      </td>

      <td>
        <input type="number" class="form-control harga" name="harga[]" value="0">
      </td>

      <td class="text-end subtotal">0</td>

      <td class="text-center">
        <button type="button" class="btn btn-danger btn-sm btn-remove">🗑</button>
      </td>
    </tr>
    `;

    document.getElementById('itemBody').insertAdjacentHTML('beforeend', row);
});
</script>
<script>
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('btn-remove')) {
        e.target.closest('tr').remove();
    }
});
</script>
          <!-- ================= TOTAL ================= -->
          <div class="row mt-3">

            <div class="col-md-8"></div>

            <div class="col-md-4">
              <div class="border p-3 rounded bg-light">
                <div class="d-flex justify-content-between">
                  <strong>Total</strong>
                  <strong>Rp 0</strong>
                </div>
              </div>
            </div>

          </div>

          <!-- ================= COA AUTO PREVIEW ================= -->
<div class="mt-3 border rounded p-3 bg-light">

  <h6 class="mb-3">📊 Auto Journal (COA Preview)</h6>

  <div class="row">

    <div class="col-md-4">
      <label class="form-label">Debit (Akun)</label>
      <input type="text" class="form-control" value="Inventory Bahan Baku" readonly>
    </div>

    <div class="col-md-4">
      <label class="form-label">Kredit (Cash / Hutang)</label>
      <input type="text" class="form-control" value="Kas / Hutang Supplier" readonly>
    </div>

    <div class="col-md-4">
      <label class="form-label">Sumber Transaksi</label>
      <input type="text" class="form-control" value="Pembelian Bahan Baku" readonly>
    </div>

  </div>

  <small class="text-muted d-block mt-2">
    COA ini di-generate otomatis berdasarkan metode pembayaran dan jenis transaksi.
  </small>

</div>

        </div>

        <!-- FOOTER -->
        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-primary">Simpan Transaksi</button>
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

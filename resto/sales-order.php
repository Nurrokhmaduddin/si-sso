
<?php $page = 'sales-order';   ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">SALES ORDER
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
                  <b>Tanggal:</b> Today
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
              </div>
            </div>
            
          </div>


         <!-- ========== CARD : LIST SALES ORDER ========== -->

<style>
.status-badge {
  padding: 6px 12px;
  border-radius: 20px;
  font-size: 12px;
  font-weight: 600;
}

.status-draft {
  background: #fff3cd;
  color: #856404;
}

.status-open {
  background: #cce5ff;
  color: #004085;
}

.status-paid {
  background: #d4edda;
  color: #155724;
}

.status-cancel {
  background: #f8d7da;
  color: #721c24;
}

.table-item td {
  vertical-align: middle;
}
</style>

<div class="card">

  <div class="card-body">
    <table class="table table-bordered table-hover datatables1">
      <thead class="table-light">
        <tr>
          <th>No Nota</th>
          <th>Tanggal</th>
          <th>Meja</th>
          <th>Total Item</th>
          <th>Total Qty</th>
          <th>Grand Total</th>
          <th>Status</th>
          <th width="140">Aksi</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>SO-20260512-001</td>
          <td>12/05/2026</td>
          <td>Meja 3</td>
          <td>2 Item</td>
          <td>4</td>
          <td>Rp 85.000</td>
          <td>
            <span class="status-badge status-draft">
              Draft
            </span>
          </td>
          <td>
            <button class="btn btn-sm btn-outline-primary">
              Detail
            </button>
          </td>
        </tr>

        <tr>
          <td>SO-20260512-002</td>
          <td>12/05/2026</td>
          <td>Meja 1</td>
          <td>1 Item</td>
          <td>2</td>
          <td>Rp 40.000</td>
          <td>
            <span class="status-badge status-open">
              Open
            </span>
          </td>
          <td>
            <button class="btn btn-sm btn-outline-primary">
              Detail
            </button>
          </td>
        </tr>

        <tr>
          <td>SO-20260512-003</td>
          <td>12/05/2026</td>
          <td>Meja 5</td>
          <td>3 Item</td>
          <td>6</td>
          <td>Rp 120.000</td>
          <td>
            <span class="status-badge status-paid">
              Paid
            </span>
          </td>
          <td>
            <button class="btn btn-sm btn-outline-success">
              Print
            </button>
          </td>
        </tr>
<tr>
          <td>SO-20260512-004</td>
          <td>11/05/2026</td>
          <td>Meja 7</td>
          <td>2 Item</td>
          <td>4</td>
          <td>Rp 85.000</td>
          <td>
            <span class="status-badge status-cancel">
              Cancel
            </span>
          </td>
          <td>
            <button class="btn btn-sm btn-outline-primary">
              Detail
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- <div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">📥 Order Masuk</h5>

    <input type="text" class="form-control form-control-sm w-25" placeholder="Cari order...">
  </div>

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

  <div class="card-footer text-end">
    <button class="btn btn-sm btn-outline-secondary">Refresh</button>
  </div>
</div>



------------------ -->
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
<div class="modal fade" id="modalTambahData" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">
          Tambah Sales Order
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal"></button>
      </div>

      <form action="" method="POST">

        <div class="modal-body">

          <!-- IDENTITAS NOTA -->
          <div class="card mb-3">
            <div class="card-header">
              <b>Identitas Nota</b>
            </div>

            <div class="card-body">
              <div class="row g-3">

                <div class="col-md-4">
                  <label>No Nota</label>
                  <input type="text"
                  class="form-control"
                  value="AUTO"
                  readonly>
                </div>

                <div class="col-md-2">
                  <label>Tanggal Order</label>
                  <input type="date"
                  class="form-control"
                  value="<?= date('Y-m-d') ?>">
                </div>
                <div class="col-md-2">
                  <label>Waktu Order</label>
                  <input type="time"
                  class="form-control"
                  value="<?= date('HH:mm') ?>">
                </div>

                <div class="col-md-2">
                  <label>Meja</label>
                  <select class="form-select">
                    <option>Meja 1</option>
                    <option>Meja 2</option>
                    <option>Meja 3</option>
                    <option>Meja 4</option>
                  </select>
                </div>

                <div class="col-md-2">
                  <label>Status</label>
                  <select class="form-select">
                    <option>Draft</option>
                    <option>Open</option>
                    <option selected>Paid</option>
                    <option>Cancel</option>
                  </select>
                </div>

                
                <div class="col-md-4">
                  <label>Kasir</label>
                  <input type="text"
                  class="form-control"
                  value="Admin"
                  readonly>
                </div>
                <div class="col-md-4">
                  <label>Customer</label>
                  <input type="text"
                  class="form-control"
                  placeholder="Nama Customer">
                </div>


                <div class="col-md-4">
                  <label>Metode Bayar</label>
                  <select class="form-select">
                    <option>Cash</option>
                    <option>QRIS</option>
                    <option>Transfer</option>
                  </select>
                </div>
                

              </div>
            </div>
          </div>

          <!-- DAFTAR ITEM -->
          <div class="card mb-3">
            <div class="card-header d-flex justify-content-between">
              <b>Daftar Item</b>

             
            </div>

            <div class="card-body p-0">
              <table class="table table-bordered table-hover mb-0 table-item">

                <thead class="table-light">
                  <tr>
                    <th width="25%">Menu</th>
                    <th width="10%">Qty</th>
                    <th width="15%">Harga</th>
                    <th width="15%">Subtotal</th>
                    <th>Catatan</th>
                    <th width="10%">Aksi</th>
                  </tr>
                </thead>

                <tbody>

                  <tr>
                    <td>Nasi Goreng</td>
                    <td>2</td>
                    <td>25.000</td>
                    <td>50.000</td>
                    <td>Pedas</td>
                    <td>
                      <button class="btn btn-sm btn-danger">
                        Hapus
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td>Es Teh</td>
                    <td>2</td>
                    <td>5.000</td>
                    <td>10.000</td>
                    <td>Less Ice</td>
                    <td>
                      <button class="btn btn-sm btn-danger">
                        Hapus
                      </button>
                    </td>
                  </tr>

                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="6"><button type="button"
                      class="btn btn-sm btn-primary btn-block"
                      data-bs-toggle="modal"
                      data-bs-target="#modalTambahItem">

                <i class="fas fa-plus"></i>
                Tambah Item
              </button></td>
                  </tr>
                   
                </tfoot>
              </table>
            </div>
          </div>

          <!-- REKAP -->
          <div class="card">
            <div class="card-header">
              <b>Rekap Transaksi</b>
            </div>

            <div class="card-body">

              <div class="row justify-content-end">

                <div class="col-md-4">

                  <table class="table table-sm">

                    <tr>
                      <th>Total Qty</th>
                      <td class="text-end">4</td>
                    </tr>

                    <tr>
                      <th>Subtotal</th>
                      <td class="text-end">
                        Rp 60.000
                      </td>
                    </tr>

                    <tr>
                      <th>Pajak</th>
                      <td class="text-end">
                        Rp 6.000
                      </td>
                    </tr>

                    <tr>
                      <th>Diskon</th>
                      <td class="text-end">
                        Rp 0
                      </td>
                    </tr>

                    <tr class="table-primary">
                      <th>Grand Total</th>
                      <th class="text-end">
                        Rp 66.000
                      </th>
                    </tr>

                  </table>

                </div>

              </div>

            </div>
          </div>
     
          <!-- JURNAL TRANSAKSI -->
          <div class="card mt-3">

            <div class="card-header d-flex justify-content-between align-items-center">
              <b>Jurnal Transaksi</b>

              <span class="badge bg-info">
                Auto Generate
              </span>
            </div>

            <div class="card-body">

              <!-- Informasi -->
              <div class="alert alert-light border mb-3">
                <i class="fas fa-info-circle text-primary me-1"></i>
                Jurnal transaksi akan terbentuk otomatis berdasarkan transaksi penjualan yang dibuat.
                Nilai jurnal mengikuti grand total transaksi dan metode pembayaran.
              </div>

              <!-- HEADER JURNAL -->
              <div class="row g-3 mb-3">
                <div class="col-md-2">
                  <label class="form-label">User Input</label>

                  <input type="text"
                  class="form-control"
                         value="Admin"
                         readonly>
                </div>
                <div class="col-md-2">
                  <label class="form-label">No Referensi</label>
                  <input type="text"
                         class="form-control"
                         value="SO-20260424-001"
                         readonly>
                </div>

                <div class="col-md-2">
                  <label class="form-label">Tanggal Posting</label>
                  <input type="date"
                         class="form-control"
                         value="<?= date('Y-m-d') ?>"
                         readonly>
                </div>

                <div class="col-md-6">
                  <label class="form-label">Keterangan</label>
                  <input type="text"
                         class="form-control"
                         value="Penjualan Sales Order Meja 3"
                         readonly>
                </div>

              </div>

              <!-- DETAIL JURNAL -->
              <div class="table-responsive">
                <table class="table table-bordered table-sm align-middle">

                  <thead class="table-light">
                    <tr>
                      <th width="5%">#</th>
                      <th>Akun</th>
                      <th width="20%">Debit</th>
                      <th width="20%">Kredit</th>
                    </tr>
                  </thead>

                  <tbody>

                    <!-- Kas -->
                    <tr>
                      <td>1</td>
                      <td>
                        <b>Kas</b>
                        <div class="small text-muted">
                          Pembayaran diterima
                        </div>
                      </td>

                      <td class="text-end">
                        Rp 66.000
                      </td>

                      <td class="text-end">
                        -
                      </td>
                    </tr>

                    <!-- Penjualan -->
                    <tr>
                      <td>2</td>
                      <td>
                        <b>Pendapatan Penjualan</b>
                        <div class="small text-muted">
                          Pendapatan transaksi
                        </div>
                      </td>

                      <td class="text-end">
                        -
                      </td>

                      <td class="text-end">
                        Rp 60.000
                      </td>
                    </tr>

                    <!-- Pajak -->
                    <tr>
                      <td>3</td>
                      <td>
                        <b>Pajak Keluaran</b>
                        <div class="small text-muted">
                          Pajak transaksi
                        </div>
                      </td>

                      <td class="text-end">
                        -
                      </td>

                      <td class="text-end">
                        Rp 6.000
                      </td>
                    </tr>

                  </tbody>

                  <tfoot class="table-light">

                    <tr>
                      <th colspan="2" class="text-end">
                        Total
                      </th>

                      <th class="text-end">
                        Rp 66.000
                      </th>

                      <th class="text-end">
                        Rp 66.000
                      </th>
                    </tr>

                  </tfoot>

                </table>
              </div>

            </div>
          </div>

        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary"
                  data-bs-dismiss="modal">
            Batal
          </button>

          <button type="submit"
                  class="btn btn-primary">
            Simpan Transaksi
          </button>
        </div>

      </form>

    </div>
  </div>
</div>


<!-- Modal Tambah Item -->
<div class="modal fade" id="modalTambahItem" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">
          Tambah Item
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="mb-3">
            <label>Menu</label>

            <select class="form-select">
              <option value="">-- Pilih Menu --</option>
              <option>Nasi Goreng</option>
              <option>Mie Ayam</option>
              <option>Ayam Bakar</option>
              <option>Es Teh</option>
              <option>Jus Mangga</option>
            </select>
          </div>

          <div class="row">

            <div class="col-md-6 mb-3">
              <label>Qty</label>

              <input type="number"
                     class="form-control"
                     value="1">
            </div>

            <div class="col-md-6 mb-3">
              <label>Harga</label>

              <input type="number"
                     class="form-control"
                     placeholder="Harga">
            </div>

          </div>

          <div class="mb-3">
            <label>Catatan</label>

            <textarea class="form-control"
                      rows="3"
                      placeholder="Contoh: pedas, tanpa bawang, less ice"></textarea>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal">
            Batal
          </button>

          <button type="submit"
                  class="btn btn-primary">
            Tambahkan
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
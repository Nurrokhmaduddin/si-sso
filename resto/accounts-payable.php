<?php $page = 'accounts-payable'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">
        Accounts Payable (Hutang Usaha)
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>
      <p class="text-muted mb-0">
        Halaman Accounts Payable digunakan untuk memantau seluruh hutang usaha perusahaan kepada vendor/supplier, status pembayaran tagihan, jatuh tempo pembayaran, serta pengendalian kewajiban yang belum dilunasi.
      </p>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">

          <!-- CARD FILTER -->
          <div class="card">
            <div class="card-body">
              <div class="row">

                <div class="col-md-3">
                  <b>Periode:</b> Januari 2026
                </div>

                <div class="col-md-3">
                  <b>Status:</b> Semua
                </div>

                <div class="col-md-3">
                  <b>Vendor:</b> Semua Vendor
                </div>

                <div class="col-md-3">
                  <b>Mata Uang:</b> IDR
                </div>

              </div>
            </div>

            <div class="card-footer">
              <div class="card-tools ms-auto">

                <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>

                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button>

                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>

                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>

                <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalResetData">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>

                <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalGagal">
                  <i class="fas fa-exclamation-triangle me-1"></i> ErrorHandler
                </button>

              </div>
            </div>
          </div>

          <!-- CARD TABLE -->
          <div class="card">
            <div class="card-body">

              <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm datatables1">
                  <thead class="table-light">
                    <tr>
                      <th>No</th>
                      <th>Invoice Date</th>
                      <th>Invoice No</th>
                      <th>Vendor</th>
                      <th>Description</th>
                      <th>Due Date</th>
                      <th>Total Bill</th>
                      <th>Outstanding</th>
                      <th>Status</th>
                      <th width="140">Action</th>
                    </tr>
                  </thead>

                  <tbody>

                    <tr>
                      <td>1</td>
                      <td>2026-01-01</td>
                      <td>AP-INV-001</td>
                      <td>PT Maju Bersama</td>
                      <td>Pembelian bahan baku produksi</td>
                      <td>2026-01-30</td>
                      <td>Rp 12.500.000</td>
                      <td>Rp 12.500.000</td>
                      <td><span class="badge bg-danger">Unpaid</span></td>
                      <td>
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark" data-bs-toggle="modal" data-bs-target="#modalAksi"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>2</td>
                      <td>2026-01-02</td>
                      <td>AP-INV-002</td>
                      <td>CV Sumber Jaya</td>
                      <td>Pembelian perlengkapan kantor</td>
                      <td>2026-02-01</td>
                      <td>Rp 3.200.000</td>
                      <td>Rp 1.200.000</td>
                      <td><span class="badge bg-warning">Partial</span></td>
                      <td>
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>3</td>
                      <td>2026-01-03</td>
                      <td>AP-INV-003</td>
                      <td>PT Prima Logistik</td>
                      <td>Biaya pengiriman barang</td>
                      <td>2026-02-03</td>
                      <td>Rp 5.500.000</td>
                      <td>Rp 0</td>
                      <td><span class="badge bg-success">Paid</span></td>
                      <td>
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>4</td>
                      <td>2026-01-04</td>
                      <td>AP-INV-004</td>
                      <td>PT Sinar Teknologi</td>
                      <td>Pembelian perangkat server</td>
                      <td>2026-02-05</td>
                      <td>Rp 28.000.000</td>
                      <td>Rp 28.000.000</td>
                      <td><span class="badge bg-danger">Unpaid</span></td>
                      <td>
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>5</td>
                      <td>2026-01-05</td>
                      <td>AP-INV-005</td>
                      <td>CV Media Digital</td>
                      <td>Biaya iklan dan promosi</td>
                      <td>2026-02-06</td>
                      <td>Rp 7.250.000</td>
                      <td>Rp 2.250.000</td>
                      <td><span class="badge bg-warning">Partial</span></td>
                      <td>
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>6</td>
                      <td>2026-01-06</td>
                      <td>AP-INV-006</td>
                      <td>PT Karya Beton</td>
                      <td>Pembelian material proyek</td>
                      <td>2026-02-08</td>
                      <td>Rp 15.000.000</td>
                      <td>Rp 15.000.000</td>
                      <td><span class="badge bg-danger">Unpaid</span></td>
                      <td>
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>7</td>
                      <td>2026-01-07</td>
                      <td>AP-INV-007</td>
                      <td>PT Nusantara Energi</td>
                      <td>Tagihan listrik operasional</td>
                      <td>2026-02-09</td>
                      <td>Rp 4.700.000</td>
                      <td>Rp 0</td>
                      <td><span class="badge bg-success">Paid</span></td>
                      <td>
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>8</td>
                      <td>2026-01-08</td>
                      <td>AP-INV-008</td>
                      <td>CV Mitra Office</td>
                      <td>Pembelian alat tulis kantor</td>
                      <td>2026-02-10</td>
                      <td>Rp 1.450.000</td>
                      <td>Rp 1.450.000</td>
                      <td><span class="badge bg-danger">Unpaid</span></td>
                      <td>
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>9</td>
                      <td>2026-01-09</td>
                      <td>AP-INV-009</td>
                      <td>PT Global Packaging</td>
                      <td>Pembelian kemasan produk</td>
                      <td>2026-02-12</td>
                      <td>Rp 8.600.000</td>
                      <td>Rp 3.600.000</td>
                      <td><span class="badge bg-warning">Partial</span></td>
                      <td>
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>10</td>
                      <td>2026-01-10</td>
                      <td>AP-INV-010</td>
                      <td>PT Sentosa Furniture</td>
                      <td>Pembelian meja dan kursi kantor</td>
                      <td>2026-02-15</td>
                      <td>Rp 11.000.000</td>
                      <td>Rp 11.000.000</td>
                      <td><span class="badge bg-danger">Unpaid</span></td>
                      <td>
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>11</td>
                      <td>2026-01-11</td>
                      <td>AP-INV-011</td>
                      <td>PT Data Solution</td>
                      <td>Biaya langganan software ERP</td>
                      <td>2026-02-18</td>
                      <td>Rp 9.900.000</td>
                      <td>Rp 0</td>
                      <td><span class="badge bg-success">Paid</span></td>
                      <td>
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

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

<?php include('4footer.php'); ?>

<!-- MODAL FILTER -->
<div class="modal fade" id="modalFilter" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Filter Accounts Payable</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>
        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Status Pembayaran</label>
            <select class="form-select">
              <option>Semua</option>
              <option>Paid</option>
              <option>Partial</option>
              <option>Unpaid</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Vendor</label>
            <input type="text" class="form-control" placeholder="Masukkan nama vendor">
          </div>

          <div class="mb-3">
            <label class="form-label">Periode</label>
            <input type="month" class="form-control">
          </div>

        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-info">Terapkan Filter</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- MODAL TAMBAH -->
<div class="modal fade" id="modalTambahData" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Tambah Hutang Usaha</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>
        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Nomor Invoice</label>
            <input type="text" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Vendor</label>
            <input type="text" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Tanggal Invoice</label>
            <input type="date" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Jatuh Tempo</label>
            <input type="date" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Total Tagihan</label>
            <input type="number" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>

        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-primary">Simpan</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- MODAL IMPORT -->
<div class="modal fade" id="modalImpor" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Import Accounts Payable</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-warning">
          Pastikan file menggunakan template import Accounts Payable yang sesuai.
        </div>

        <input type="file" class="form-control">

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Import</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL VIEW -->
<div class="modal fade" id="modalView" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Detail Hutang Usaha</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <table class="table table-bordered">
          <tr>
            <th>Invoice</th>
            <td>AP-INV-001</td>
          </tr>
          <tr>
            <th>Vendor</th>
            <td>PT Maju Bersama</td>
          </tr>
          <tr>
            <th>Total</th>
            <td>Rp 12.500.000</td>
          </tr>
          <tr>
            <th>Status</th>
            <td>Unpaid</td>
          </tr>
        </table>
      </div>

    </div>
  </div>
</div>

<!-- MODAL EDIT -->
<div class="modal fade" id="modalEdit" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Edit Data Hutang</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label class="form-label">Vendor</label>
          <input type="text" class="form-control" value="PT Maju Bersama">
        </div>

        <div class="mb-3">
          <label class="form-label">Outstanding</label>
          <input type="text" class="form-control" value="12500000">
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Update</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL AKSI -->
<div class="modal fade" id="modalAksi" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title">Aksi Data</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body d-grid gap-2">
        <button class="btn btn-success">
          <i class="fas fa-money-bill-wave me-1"></i> Bayar Hutang
        </button>

        <button class="btn btn-warning text-dark">
          <i class="fas fa-print me-1"></i> Cetak Invoice
        </button>

        <button class="btn btn-danger">
          <i class="fas fa-trash me-1"></i> Hapus Data
        </button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL BANTUAN -->
<div class="modal fade" id="modalBantuan" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Bantuan Halaman Accounts Payable</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <p>
          Halaman Accounts Payable digunakan untuk mengelola seluruh hutang usaha perusahaan kepada supplier atau vendor.
          Data yang ditampilkan membantu tim finance memonitor invoice yang belum dibayar, sudah dibayar sebagian,
          maupun yang telah lunas.
        </p>

        <hr>

        <h6><b>Cara Membaca Tabel</b></h6>

        <ul>
          <li><b>Invoice Date</b> = tanggal invoice diterbitkan vendor.</li>
          <li><b>Invoice No</b> = nomor dokumen tagihan supplier.</li>
          <li><b>Due Date</b> = batas akhir pembayaran hutang.</li>
          <li><b>Total Bill</b> = total nilai invoice.</li>
          <li><b>Outstanding</b> = sisa hutang yang belum dibayar.</li>
          <li><b>Status</b> = kondisi pembayaran invoice.</li>
        </ul>

        <hr>

        <h6><b>Fungsi Tombol Aksi</b></h6>

        <ul>
          <li><b>View</b> untuk melihat detail invoice hutang.</li>
          <li><b>Edit</b> untuk mengubah data hutang usaha.</li>
          <li><b>Aksi</b> untuk melakukan pembayaran, cetak invoice, atau hapus data.</li>
          <li><b>Filter</b> digunakan menyaring data berdasarkan vendor, periode, dan status.</li>
          <li><b>Import</b> digunakan memasukkan data hutang massal dari file Excel.</li>
          <li><b>Export</b> digunakan mengunduh data AP ke Excel/PDF.</li>
        </ul>

        <hr>

        <div class="alert alert-info mb-0">
          Halaman ini sangat penting untuk menjaga kontrol cashflow perusahaan,
          menghindari keterlambatan pembayaran vendor,
          serta membantu proses audit dan rekonsiliasi hutang usaha.
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL RESET -->
<div class="modal fade" id="modalResetData" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Reset Data Accounts Payable</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">
        <p>Apakah Anda yakin ingin mereset seluruh data hutang usaha?</p>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-danger">Reset</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL ERROR -->
<div class="modal fade" id="modalGagal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content border-danger border-2 shadow">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">
          <i class="fas fa-times-circle me-2"></i>Oops! Terjadi Kesalahan
        </h5>
      </div>

      <div class="modal-body">

        <p>
          <strong>❌ Masalah:</strong><br>
          Upload file gagal.
        </p>

        <p>
          <strong>⚠️ Penyebab:</strong><br>
          Format file tidak sesuai atau template salah.
        </p>

        <p>
          <strong>💡 Solusi:</strong><br>
          Gunakan template import Accounts Payable resmi dan ulangi proses import.
        </p>

        <div class="alert alert-warning">
          Pastikan format file .xlsx dan ukuran file tidak melebihi batas sistem.
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-dark" data-bs-dismiss="modal">
          <i class="fas fa-check me-1"></i> Tutup
        </button>
      </div>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>
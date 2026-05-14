<?php $page = 'inventory-stock-in'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">

  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">

      <div class="d-flex justify-content-between align-items-start flex-wrap">
        <div>
          <h3 class="mb-1">
            Inventory Stock In
            <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
              <i class="fas fa-question-circle"></i>
            </button>
          </h3>

          <p class="text-muted mb-0">
            Halaman Inventory Stock In digunakan untuk mencatat seluruh barang masuk ke gudang,
            baik dari proses pembelian supplier, retur produksi, transfer antar gudang,
            maupun penambahan stok manual. Halaman ini membantu monitoring ketersediaan stok secara real-time.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- Main Content -->
  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">

          <!-- CARD FILTER -->
          <div class="card">
            <div class="card-body">

              <div class="row">

                <div class="col-md-3 mb-2">
                  <b>Periode:</b> Januari 2026
                </div>

                <div class="col-md-3 mb-2">
                  <b>Status:</b> Semua
                </div>

                <div class="col-md-3 mb-2">
                  <b>Gudang:</b> Semua Gudang
                </div>

                <div class="col-md-3 mb-2">
                  <b>Kategori:</b> Semua Barang
                </div>

              </div>

            </div>

            <div class="card-footer">
              <div class="card-tools ms-auto d-flex flex-wrap gap-2">

                <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>

                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add Stock-In
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

            <div class="card-header">
              <h3 class="card-title">
                Daftar Inventory Stock In
              </h3>
            </div>

            <div class="card-body">

              <div class="table-responsive">

                <table class="table table-bordered table-striped table-hover table-sm datatables1 align-middle">

                  <thead class="table-light">
                    <tr class="text-center">
                      <th width="5%">No</th>
                      <th>Tanggal</th>
                      <th>Stock-In ID</th>
                      <th>Nama Barang</th>
                      <th>Supplier</th>
                      <th>Gudang</th>
                      <th>Qty Masuk</th>
                      <th>Satuan</th>
                      <th>Status</th>
                      <th width="18%">Aksi</th>
                    </tr>
                  </thead>

                  <tbody>

                    <tr>
                      <td class="text-center">1</td>
                      <td>2026-01-01</td>
                      <td>SI-2026-001</td>
                      <td>Laptop ASUS Pro</td>
                      <td>PT Digital Komputer</td>
                      <td>Gudang Utama</td>
                      <td class="text-center">25</td>
                      <td>Unit</td>
                      <td><span class="badge bg-success">Received</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalView">
                          <i class="fas fa-eye"></i>
                        </button>

                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEdit">
                          <i class="fas fa-edit"></i>
                        </button>

                        <button class="btn btn-sm btn-outline-dark" data-bs-toggle="modal" data-bs-target="#modalAksi">
                          <i class="fas fa-cogs"></i>
                        </button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">2</td>
                      <td>2026-01-02</td>
                      <td>SI-2026-002</td>
                      <td>Mouse Wireless</td>
                      <td>CV Teknologi Jaya</td>
                      <td>Gudang A</td>
                      <td class="text-center">100</td>
                      <td>Pcs</td>
                      <td><span class="badge bg-warning">Pending</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">3</td>
                      <td>2026-01-03</td>
                      <td>SI-2026-003</td>
                      <td>Keyboard Mechanical</td>
                      <td>PT Input Device</td>
                      <td>Gudang Utama</td>
                      <td class="text-center">40</td>
                      <td>Unit</td>
                      <td><span class="badge bg-success">Received</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">4</td>
                      <td>2026-01-03</td>
                      <td>SI-2026-004</td>
                      <td>Printer Epson L3210</td>
                      <td>CV Office Supply</td>
                      <td>Gudang B</td>
                      <td class="text-center">15</td>
                      <td>Unit</td>
                      <td><span class="badge bg-info">Checking</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">5</td>
                      <td>2026-01-04</td>
                      <td>SI-2026-005</td>
                      <td>Monitor LED 24"</td>
                      <td>PT Visual Elektronik</td>
                      <td>Gudang Utama</td>
                      <td class="text-center">30</td>
                      <td>Unit</td>
                      <td><span class="badge bg-success">Received</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">6</td>
                      <td>2026-01-04</td>
                      <td>SI-2026-006</td>
                      <td>Kabel LAN CAT6</td>
                      <td>PT Network Solution</td>
                      <td>Gudang A</td>
                      <td class="text-center">500</td>
                      <td>Meter</td>
                      <td><span class="badge bg-warning">Pending</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">7</td>
                      <td>2026-01-05</td>
                      <td>SI-2026-007</td>
                      <td>Harddisk External 1TB</td>
                      <td>PT Storage Data</td>
                      <td>Gudang B</td>
                      <td class="text-center">20</td>
                      <td>Unit</td>
                      <td><span class="badge bg-success">Received</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">8</td>
                      <td>2026-01-05</td>
                      <td>SI-2026-008</td>
                      <td>Tinta Printer Black</td>
                      <td>CV Ink Solution</td>
                      <td>Gudang Utama</td>
                      <td class="text-center">75</td>
                      <td>Botol</td>
                      <td><span class="badge bg-info">Checking</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">9</td>
                      <td>2026-01-06</td>
                      <td>SI-2026-009</td>
                      <td>Router Mikrotik</td>
                      <td>PT Jaringan Nusantara</td>
                      <td>Gudang A</td>
                      <td class="text-center">12</td>
                      <td>Unit</td>
                      <td><span class="badge bg-success">Received</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">10</td>
                      <td>2026-01-06</td>
                      <td>SI-2026-010</td>
                      <td>SSD 512GB</td>
                      <td>PT Memory Teknologi</td>
                      <td>Gudang Utama</td>
                      <td class="text-center">60</td>
                      <td>Unit</td>
                      <td><span class="badge bg-warning">Pending</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">11</td>
                      <td>2026-01-07</td>
                      <td>SI-2026-011</td>
                      <td>UPS 1200VA</td>
                      <td>PT Power Backup</td>
                      <td>Gudang B</td>
                      <td class="text-center">10</td>
                      <td>Unit</td>
                      <td><span class="badge bg-success">Received</span></td>
                      <td class="text-center">
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
        <h5 class="modal-title">Filter Inventory Stock In</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Periode</label>
            <input type="month" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Status</label>
            <select class="form-select">
              <option>Semua</option>
              <option>Received</option>
              <option>Pending</option>
              <option>Checking</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Gudang</label>
            <select class="form-select">
              <option>Semua Gudang</option>
              <option>Gudang Utama</option>
              <option>Gudang A</option>
              <option>Gudang B</option>
            </select>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info">Terapkan</button>
        </div>

      </form>

    </div>
  </div>
</div>

<!-- MODAL VIEW -->
<div class="modal fade" id="modalView" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Detail Inventory Stock In</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <table class="table table-bordered">
          <tr>
            <th width="35%">Stock-In ID</th>
            <td>SI-2026-001</td>
          </tr>
          <tr>
            <th>Tanggal</th>
            <td>2026-01-01</td>
          </tr>
          <tr>
            <th>Nama Barang</th>
            <td>Laptop ASUS Pro</td>
          </tr>
          <tr>
            <th>Supplier</th>
            <td>PT Digital Komputer</td>
          </tr>
          <tr>
            <th>Qty Masuk</th>
            <td>25 Unit</td>
          </tr>
          <tr>
            <th>Status</th>
            <td>Received</td>
          </tr>
        </table>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL EDIT -->
<div class="modal fade" id="modalEdit" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Edit Inventory Stock In</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label class="form-label">Qty Masuk</label>
          <input type="number" class="form-control" value="25">
        </div>

        <div class="mb-3">
          <label class="form-label">Status</label>
          <select class="form-select">
            <option>Received</option>
            <option>Pending</option>
            <option>Checking</option>
          </select>
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
        <h5 class="modal-title">Aksi Inventory Stock In</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body d-grid gap-2">

        <button class="btn btn-outline-success">
          <i class="fas fa-check-circle me-1"></i> Verifikasi Barang
        </button>

        <button class="btn btn-outline-warning">
          <i class="fas fa-box-open me-1"></i> Proses QC Barang
        </button>

        <button class="btn btn-outline-primary">
          <i class="fas fa-print me-1"></i> Cetak Dokumen
        </button>

        <button class="btn btn-outline-danger">
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
        <h5 class="modal-title">Bantuan Halaman Inventory Stock In</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <h5>Fungsi Halaman</h5>
        <p>
          Halaman Inventory Stock In digunakan untuk mencatat seluruh aktivitas barang masuk
          ke dalam gudang perusahaan dari supplier, retur, produksi, maupun transfer stok.
        </p>

        <hr>

        <h5>Cara Membaca Data</h5>

        <ul>
          <li><b>Stock-In ID</b> → kode unik transaksi barang masuk.</li>
          <li><b>Nama Barang</b> → nama item inventory yang diterima.</li>
          <li><b>Supplier</b> → pemasok atau sumber barang.</li>
          <li><b>Gudang</b> → lokasi penyimpanan barang.</li>
          <li><b>Qty Masuk</b> → jumlah stok yang diterima.</li>
          <li><b>Status</b> → status penerimaan dan pengecekan barang.</li>
        </ul>

        <hr>

        <h5>Penjelasan Tombol Aksi</h5>

        <ul>
          <li><b>View</b> → melihat detail data barang masuk.</li>
          <li><b>Edit</b> → mengubah data transaksi stock-in.</li>
          <li><b>Aksi</b> → verifikasi, QC, cetak dokumen, dan hapus data.</li>
          <li><b>Filter</b> → menyaring data berdasarkan periode, gudang, dan status.</li>
          <li><b>Import</b> → upload data stock-in massal menggunakan template.</li>
          <li><b>Export</b> → download laporan stock-in.</li>
        </ul>

        <hr>

        <h5>Manfaat Halaman</h5>

        <p>
          Membantu tim warehouse dan inventory dalam memonitor stok masuk,
          menjaga akurasi persediaan barang, mempercepat proses audit stok,
          serta mendukung pengendalian inventory perusahaan secara terstruktur.
        </p>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>
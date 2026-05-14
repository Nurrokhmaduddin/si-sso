<?php $page = 'cash-in'; ?>
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
            Cash In Management
            <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
              <i class="fas fa-question-circle "></i>
            </button>
          </h3>

          <p class="text-muted mb-0">
            Halaman ini digunakan untuk mencatat seluruh transaksi kas masuk (cash-in) perusahaan seperti pembayaran customer,
            penerimaan invoice, pelunasan piutang, pemasukan operasional, dan penerimaan lainnya.
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
                  <b>Metode:</b> Semua
                </div>

                <div class="col-md-3 mb-2">
                  <b>Account:</b> Semua Kas & Bank
                </div>

              </div>

            </div>

            <div class="card-footer">
              <div class="card-tools ms-auto d-flex flex-wrap gap-2">

                <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>

                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add Cash-In
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
                Daftar Transaksi Cash-In
              </h3>
            </div>

            <div class="card-body">

              <div class="table-responsive">

                <table class="table table-bordered table-striped table-hover table-sm datatables1 align-middle">

                  <thead class="table-light">
                    <tr class="text-center">
                      <th width="5%">No</th>
                      <th>Tanggal</th>
                      <th>Cash-In ID</th>
                      <th>Customer / Sumber Dana</th>
                      <th>Kategori</th>
                      <th>Metode</th>
                      <th>Total</th>
                      <th>Status</th>
                      <th width="18%">Aksi</th>
                    </tr>
                  </thead>

                  <tbody>

                    <tr>
                      <td class="text-center">1</td>
                      <td>2026-01-01</td>
                      <td>CI-2026-001</td>
                      <td>PT Sinar Abadi</td>
                      <td>Pembayaran Invoice</td>
                      <td>Transfer Bank</td>
                      <td class="text-end">Rp 15.000.000</td>
                      <td><span class="badge bg-success">Verified</span></td>
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
                      <td>CI-2026-002</td>
                      <td>CV Berkah Jaya</td>
                      <td>Pelunasan Piutang</td>
                      <td>Cash</td>
                      <td class="text-end">Rp 7.500.000</td>
                      <td><span class="badge bg-success">Verified</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">3</td>
                      <td>2026-01-03</td>
                      <td>CI-2026-003</td>
                      <td>Toko Maju Makmur</td>
                      <td>Penjualan Tunai</td>
                      <td>QRIS</td>
                      <td class="text-end">Rp 2.350.000</td>
                      <td><span class="badge bg-warning">Pending</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">4</td>
                      <td>2026-01-03</td>
                      <td>CI-2026-004</td>
                      <td>PT Mitra Teknologi</td>
                      <td>Down Payment</td>
                      <td>Transfer Bank</td>
                      <td class="text-end">Rp 12.000.000</td>
                      <td><span class="badge bg-success">Verified</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">5</td>
                      <td>2026-01-04</td>
                      <td>CI-2026-005</td>
                      <td>PT Sentosa Mandiri</td>
                      <td>Pembayaran Kontrak</td>
                      <td>Virtual Account</td>
                      <td class="text-end">Rp 25.000.000</td>
                      <td><span class="badge bg-success">Verified</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">6</td>
                      <td>2026-01-04</td>
                      <td>CI-2026-006</td>
                      <td>CV Indo Supplier</td>
                      <td>Refund Vendor</td>
                      <td>Transfer Bank</td>
                      <td class="text-end">Rp 3.200.000</td>
                      <td><span class="badge bg-info">Review</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">7</td>
                      <td>2026-01-05</td>
                      <td>CI-2026-007</td>
                      <td>PT Nusantara Group</td>
                      <td>Pembayaran Project</td>
                      <td>Giro</td>
                      <td class="text-end">Rp 45.000.000</td>
                      <td><span class="badge bg-success">Verified</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">8</td>
                      <td>2026-01-05</td>
                      <td>CI-2026-008</td>
                      <td>Retail Store A01</td>
                      <td>Setoran Penjualan</td>
                      <td>Cash</td>
                      <td class="text-end">Rp 1.850.000</td>
                      <td><span class="badge bg-warning">Pending</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">9</td>
                      <td>2026-01-06</td>
                      <td>CI-2026-009</td>
                      <td>PT Digital Solusi</td>
                      <td>Pembayaran Lisensi</td>
                      <td>Transfer Bank</td>
                      <td class="text-end">Rp 8.750.000</td>
                      <td><span class="badge bg-success">Verified</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">10</td>
                      <td>2026-01-06</td>
                      <td>CI-2026-010</td>
                      <td>Customer Marketplace</td>
                      <td>Penerimaan Online</td>
                      <td>E-Wallet</td>
                      <td class="text-end">Rp 950.000</td>
                      <td><span class="badge bg-info">Review</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">11</td>
                      <td>2026-01-07</td>
                      <td>CI-2026-011</td>
                      <td>PT Karya Utama</td>
                      <td>Pembayaran Maintenance</td>
                      <td>Transfer Bank</td>
                      <td class="text-end">Rp 18.500.000</td>
                      <td><span class="badge bg-success">Verified</span></td>
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
        <h5 class="modal-title">Filter Cash-In</h5>
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
              <option>Verified</option>
              <option>Pending</option>
              <option>Review</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Metode Pembayaran</label>
            <select class="form-select">
              <option>Semua</option>
              <option>Cash</option>
              <option>Transfer Bank</option>
              <option>QRIS</option>
              <option>E-Wallet</option>
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

<!-- MODAL TAMBAH -->
<div class="modal fade" id="modalTambahData" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Tambah Cash-In</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="alert alert-warning">
            Pastikan nominal cash-in dan sumber dana sesuai dengan bukti transaksi.
          </div>

          <div class="row">

            <div class="col-md-6 mb-3">
              <label class="form-label">Tanggal</label>
              <input type="date" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Cash-In ID</label>
              <input type="text" class="form-control" placeholder="CI-2026-012">
            </div>

            <div class="col-md-12 mb-3">
              <label class="form-label">Customer / Sumber Dana</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Kategori</label>
              <select class="form-select">
                <option>Pembayaran Invoice</option>
                <option>Pelunasan Piutang</option>
                <option>Penjualan Tunai</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Metode Pembayaran</label>
              <select class="form-select">
                <option>Transfer Bank</option>
                <option>Cash</option>
                <option>QRIS</option>
                <option>E-Wallet</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Nominal</label>
              <input type="number" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Status</label>
              <select class="form-select">
                <option>Pending</option>
                <option>Verified</option>
                <option>Review</option>
              </select>
            </div>

            <div class="col-md-12 mb-3">
              <label class="form-label">Keterangan</label>
              <textarea class="form-control" rows="3"></textarea>
            </div>

          </div>

        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-primary">Simpan Data</button>
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
        <h5 class="modal-title">Detail Cash-In</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <table class="table table-bordered">
          <tr>
            <th width="35%">Cash-In ID</th>
            <td>CI-2026-001</td>
          </tr>
          <tr>
            <th>Tanggal</th>
            <td>2026-01-01</td>
          </tr>
          <tr>
            <th>Customer</th>
            <td>PT Sinar Abadi</td>
          </tr>
          <tr>
            <th>Nominal</th>
            <td>Rp 15.000.000</td>
          </tr>
          <tr>
            <th>Status</th>
            <td>Verified</td>
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
        <h5 class="modal-title">Edit Cash-In</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label class="form-label">Nominal</label>
          <input type="number" class="form-control" value="15000000">
        </div>

        <div class="mb-3">
          <label class="form-label">Status</label>
          <select class="form-select">
            <option>Verified</option>
            <option>Pending</option>
            <option>Review</option>
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
        <h5 class="modal-title">Aksi Data Cash-In</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body d-grid gap-2">

        <button class="btn btn-outline-success">
          <i class="fas fa-check-circle me-1"></i> Verifikasi Data
        </button>

        <button class="btn btn-outline-warning">
          <i class="fas fa-print me-1"></i> Cetak Receipt
        </button>

        <button class="btn btn-outline-primary">
          <i class="fas fa-file-export me-1"></i> Export PDF
        </button>

        <button class="btn btn-outline-danger">
          <i class="fas fa-trash me-1"></i> Hapus Data
        </button>

      </div>

    </div>
  </div>
</div>

<!-- MODAL IMPOR -->
<div class="modal fade" id="modalImpor" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Import Data Cash-In</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-warning">
          Gunakan template import resmi agar proses import data cash-in berjalan dengan benar.
        </div>

        <input type="file" class="form-control mb-3">

        <button class="btn btn-outline-success w-100">
          Download Template Import
        </button>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Import</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL BANTUAN -->
<div class="modal fade" id="modalBantuan" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Bantuan Halaman Cash-In</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <h5>Fungsi Halaman</h5>
        <p>
          Halaman Cash-In digunakan untuk memonitor seluruh transaksi uang masuk perusahaan.
          Semua penerimaan dana dari customer, project, invoice, marketplace, maupun sumber lainnya
          dicatat pada halaman ini.
        </p>

        <hr>

        <h5>Cara Membaca Data</h5>

        <ul>
          <li><b>Cash-In ID</b> → kode unik transaksi kas masuk.</li>
          <li><b>Customer / Sumber Dana</b> → pihak yang melakukan pembayaran.</li>
          <li><b>Kategori</b> → jenis transaksi pemasukan.</li>
          <li><b>Metode</b> → media pembayaran yang digunakan.</li>
          <li><b>Total</b> → nominal uang yang diterima.</li>
          <li><b>Status</b> → kondisi validasi transaksi.</li>
        </ul>

        <hr>

        <h5>Penjelasan Tombol Aksi</h5>

        <ul>
          <li><b>View</b> → melihat detail transaksi.</li>
          <li><b>Edit</b> → mengubah data transaksi.</li>
          <li><b>Aksi</b> → verifikasi, export, print, dan hapus data.</li>
          <li><b>Filter</b> → menyaring data berdasarkan periode atau status.</li>
          <li><b>Import</b> → upload data massal menggunakan template.</li>
          <li><b>Export</b> → download data laporan.</li>
        </ul>

        <hr>

        <h5>Manfaat Halaman</h5>

        <p>
          Membantu finance dan accounting memonitor arus kas masuk,
          mempercepat rekonsiliasi pembayaran, serta mempermudah audit dan pelaporan keuangan.
        </p>

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
        <h5 class="modal-title">Reset Semua Data</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">
        <p class="mb-0">
          Apakah Anda yakin ingin mereset seluruh data cash-in?
        </p>
      </div>

      <div class="modal-footer justify-content-center">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-danger">Reset Data</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL ERROR -->
<div class="modal fade" id="modalGagal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content border-danger border-2">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">
          <i class="fas fa-times-circle me-1"></i> Error Handler
        </h5>
      </div>

      <div class="modal-body">

        <p><b>Masalah:</b><br> Gagal menyimpan transaksi cash-in.</p>

        <p><b>Penyebab:</b><br>
          Nominal transaksi kosong atau bukti pembayaran belum diupload.
        </p>

        <p><b>Solusi:</b><br>
          Lengkapi semua field wajib dan upload dokumen pendukung transaksi.
        </p>

        <div class="alert alert-warning mb-0">
          Pastikan data cash-in sudah diverifikasi sebelum disimpan permanen.
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-dark" data-bs-dismiss="modal">
          Tutup
        </button>
      </div>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>
<?php $page = 'cash-out'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">

  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Cash Out Management
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>

      <p class="text-muted mb-0">
        Halaman ini digunakan untuk mencatat dan memonitor seluruh transaksi pengeluaran kas (cash-out)
        perusahaan seperti pembayaran vendor, biaya operasional, pembelian aset, gaji karyawan,
        dan pengeluaran lainnya.
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
                  <i class="fas fa-plus me-1"></i> Add Cash-Out
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
                Daftar Transaksi Cash-Out
              </h3>
            </div>

            <div class="card-body">

              <div class="table-responsive">

                <table class="table table-bordered table-striped table-hover table-sm datatables1 align-middle">

                  <thead class="table-light">
                    <tr class="text-center">
                      <th width="5%">No</th>
                      <th>Tanggal</th>
                      <th>Cash-Out ID</th>
                      <th>Penerima / Vendor</th>
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
                      <td>CO-2026-001</td>
                      <td>PT Maju Bersama</td>
                      <td>Pembelian Barang</td>
                      <td>Transfer Bank</td>
                      <td class="text-end">Rp 12.500.000</td>
                      <td><span class="badge bg-success">Approved</span></td>
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
                      <td>CO-2026-002</td>
                      <td>CV Sumber Rejeki</td>
                      <td>Pembayaran Vendor</td>
                      <td>Cash</td>
                      <td class="text-end">Rp 4.800.000</td>
                      <td><span class="badge bg-warning">Pending</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">3</td>
                      <td>2026-01-02</td>
                      <td>CO-2026-003</td>
                      <td>PLN Indonesia</td>
                      <td>Biaya Listrik</td>
                      <td>Virtual Account</td>
                      <td class="text-end">Rp 2.150.000</td>
                      <td><span class="badge bg-success">Approved</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">4</td>
                      <td>2026-01-03</td>
                      <td>CO-2026-004</td>
                      <td>PDAM Kota</td>
                      <td>Biaya Air</td>
                      <td>Transfer Bank</td>
                      <td class="text-end">Rp 750.000</td>
                      <td><span class="badge bg-success">Approved</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">5</td>
                      <td>2026-01-03</td>
                      <td>CO-2026-005</td>
                      <td>PT Digital Media</td>
                      <td>Biaya Iklan</td>
                      <td>E-Wallet</td>
                      <td class="text-end">Rp 6.500.000</td>
                      <td><span class="badge bg-info">Review</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">6</td>
                      <td>2026-01-04</td>
                      <td>CO-2026-006</td>
                      <td>Karyawan Operasional</td>
                      <td>Reimburse</td>
                      <td>Cash</td>
                      <td class="text-end">Rp 1.250.000</td>
                      <td><span class="badge bg-warning">Pending</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">7</td>
                      <td>2026-01-04</td>
                      <td>CO-2026-007</td>
                      <td>PT Sejahtera Teknik</td>
                      <td>Pembelian Sparepart</td>
                      <td>Transfer Bank</td>
                      <td class="text-end">Rp 18.000.000</td>
                      <td><span class="badge bg-success">Approved</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">8</td>
                      <td>2026-01-05</td>
                      <td>CO-2026-008</td>
                      <td>Seluruh Karyawan</td>
                      <td>Payroll Gaji</td>
                      <td>Transfer Bank</td>
                      <td class="text-end">Rp 75.000.000</td>
                      <td><span class="badge bg-success">Approved</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">9</td>
                      <td>2026-01-05</td>
                      <td>CO-2026-009</td>
                      <td>PT Office Stationery</td>
                      <td>ATK Kantor</td>
                      <td>Cash</td>
                      <td class="text-end">Rp 980.000</td>
                      <td><span class="badge bg-info">Review</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">10</td>
                      <td>2026-01-06</td>
                      <td>CO-2026-010</td>
                      <td>Bank Nusantara</td>
                      <td>Angsuran Pinjaman</td>
                      <td>Auto Debit</td>
                      <td class="text-end">Rp 9.500.000</td>
                      <td><span class="badge bg-success">Approved</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">11</td>
                      <td>2026-01-07</td>
                      <td>CO-2026-011</td>
                      <td>PT Konstruksi Prima</td>
                      <td>Pembelian Aset</td>
                      <td>Transfer Bank</td>
                      <td class="text-end">Rp 125.000.000</td>
                      <td><span class="badge bg-success">Approved</span></td>
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
    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Filter Cash-Out</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="alert alert-warning">
            Gunakan filter untuk mempercepat pencarian transaksi pengeluaran kas.
          </div>

          <div class="mb-3">
            <label class="form-label">Periode</label>
            <input type="month" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Status</label>
            <select class="form-select">
              <option>Semua</option>
              <option>Approved</option>
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
              <option>Auto Debit</option>
              <option>E-Wallet</option>
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

<!-- MODAL TAMBAH -->
<div class="modal fade" id="modalTambahData" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Tambah Cash-Out</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="alert alert-warning">
            Pastikan data pengeluaran sesuai dengan bukti transaksi dan approval perusahaan.
          </div>

          <div class="row">

            <div class="col-md-6 mb-3">
              <label class="form-label">Tanggal</label>
              <input type="date" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Cash-Out ID</label>
              <input type="text" class="form-control" placeholder="CO-2026-012">
            </div>

            <div class="col-md-12 mb-3">
              <label class="form-label">Vendor / Penerima</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Kategori</label>
              <select class="form-select">
                <option>Pembelian Barang</option>
                <option>Biaya Operasional</option>
                <option>Payroll</option>
                <option>Pembelian Aset</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Metode Pembayaran</label>
              <select class="form-select">
                <option>Transfer Bank</option>
                <option>Cash</option>
                <option>Auto Debit</option>
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
                <option>Approved</option>
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
        <h5 class="modal-title">Detail Cash-Out</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <table class="table table-bordered">
          <tr>
            <th width="35%">Cash-Out ID</th>
            <td>CO-2026-001</td>
          </tr>
          <tr>
            <th>Tanggal</th>
            <td>2026-01-01</td>
          </tr>
          <tr>
            <th>Vendor</th>
            <td>PT Maju Bersama</td>
          </tr>
          <tr>
            <th>Nominal</th>
            <td>Rp 12.500.000</td>
          </tr>
          <tr>
            <th>Status</th>
            <td>Approved</td>
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
        <h5 class="modal-title">Edit Cash-Out</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label class="form-label">Nominal</label>
          <input type="number" class="form-control" value="12500000">
        </div>

        <div class="mb-3">
          <label class="form-label">Status</label>
          <select class="form-select">
            <option>Approved</option>
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
        <h5 class="modal-title">Aksi Data Cash-Out</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body d-grid gap-2">

        <button class="btn btn-outline-success">
          <i class="fas fa-check-circle me-1"></i> Approve Transaksi
        </button>

        <button class="btn btn-outline-warning">
          <i class="fas fa-print me-1"></i> Cetak Bukti
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
        <h5 class="modal-title">Import Data Cash-Out</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-warning">
          Pastikan file import menggunakan template resmi agar struktur data pengeluaran sesuai sistem.
        </div>

        <label class="form-label">Pilih File:</label>
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
        <h5 class="modal-title">Bantuan Halaman Cash-Out</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <h5>Fungsi Halaman</h5>
        <p>
          Halaman Cash-Out digunakan untuk mencatat seluruh pengeluaran kas perusahaan,
          baik pengeluaran operasional, pembayaran vendor, biaya utilitas,
          payroll, maupun pembelian aset.
        </p>

        <hr>

        <h5>Cara Membaca Data</h5>

        <ul>
          <li><b>Cash-Out ID</b> → kode unik transaksi pengeluaran.</li>
          <li><b>Penerima / Vendor</b> → pihak penerima pembayaran.</li>
          <li><b>Kategori</b> → jenis pengeluaran.</li>
          <li><b>Metode</b> → metode pembayaran yang digunakan.</li>
          <li><b>Total</b> → jumlah nominal pengeluaran.</li>
          <li><b>Status</b> → status approval transaksi.</li>
        </ul>

        <hr>

        <h5>Penjelasan Tombol</h5>

        <ul>
          <li><b>View</b> → melihat detail transaksi.</li>
          <li><b>Edit</b> → mengubah data transaksi.</li>
          <li><b>Aksi</b> → approve, export, print, atau hapus data.</li>
          <li><b>Filter</b> → memfilter data berdasarkan periode/status.</li>
          <li><b>Import</b> → upload data massal.</li>
          <li><b>Export</b> → download laporan transaksi.</li>
        </ul>

        <hr>

        <h5>Manfaat Halaman</h5>

        <p>
          Membantu tim finance memonitor arus kas keluar,
          mengontrol pengeluaran perusahaan,
          mempermudah audit transaksi,
          dan meningkatkan akurasi laporan keuangan.
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
    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Konfirmasi Reset Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">
        <p class="fs-5">
          Apakah Anda yakin ingin menghapus seluruh data cash-out?
        </p>
      </div>

      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger">Hapus</button>
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
          <i class="fas fa-times-circle me-2"></i>
          Oops! Terjadi Kesalahan
        </h5>
      </div>

      <div class="modal-body">

        <p>
          <strong>❌ Masalah:</strong><br>
          Gagal menyimpan transaksi cash-out.
        </p>

        <p>
          <strong>⚠️ Penyebab:</strong><br>
          Nominal kosong atau data vendor belum lengkap.
        </p>

        <p>
          <strong>💡 Solusi:</strong><br>
          Lengkapi seluruh field wajib dan pastikan approval tersedia sebelum menyimpan.
        </p>

        <div class="alert alert-warning mt-3">
          🔹 Tip: Selalu lakukan verifikasi bukti pembayaran sebelum approval transaksi.
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">
          <i class="fas fa-check me-1"></i> Tutup
        </button>
      </div>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>
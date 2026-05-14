<?php $page = 'accounts-receivable'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">

  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">
        Accounts Receivable (Piutang Usaha)
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>
      <p class="text-muted mb-0">
        Halaman Accounts Receivable digunakan untuk memantau seluruh piutang pelanggan, status pembayaran invoice, umur piutang (aging), serta histori tagihan yang belum lunas maupun yang sudah dibayar sebagian.
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
                  <b>Customer:</b> Semua Customer
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
                  <i class="fas fa-plus me-1"></i> Tambah Invoice
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
                Daftar Piutang Customer
              </h3>
            </div>

            <div class="card-body">
              <div class="table-responsive">

                <table class="table table-bordered table-striped table-sm datatables1">
                  <thead class="table-light">
                    <tr class="text-center">
                      <th>No</th>
                      <th>Tanggal Invoice</th>
                      <th>No Invoice</th>
                      <th>Customer</th>
                      <th>Jatuh Tempo</th>
                      <th>Total Tagihan</th>
                      <th>Terbayar</th>
                      <th>Sisa Piutang</th>
                      <th>Status</th>
                      <th width="150">Aksi</th>
                    </tr>
                  </thead>

                  <tbody>

                    <tr>
                      <td>1</td>
                      <td>2026-01-01</td>
                      <td>INV-AR-001</td>
                      <td>PT Sumber Makmur</td>
                      <td>2026-01-30</td>
                      <td>Rp 12.500.000</td>
                      <td>Rp 5.000.000</td>
                      <td>Rp 7.500.000</td>
                      <td><span class="badge bg-warning">Partial</span></td>
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
                      <td>2</td>
                      <td>2026-01-02</td>
                      <td>INV-AR-002</td>
                      <td>CV Mitra Jaya</td>
                      <td>2026-02-01</td>
                      <td>Rp 8.750.000</td>
                      <td>Rp 0</td>
                      <td>Rp 8.750.000</td>
                      <td><span class="badge bg-danger">Outstanding</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>3</td>
                      <td>2026-01-03</td>
                      <td>INV-AR-003</td>
                      <td>PT Nusantara Abadi</td>
                      <td>2026-02-02</td>
                      <td>Rp 4.200.000</td>
                      <td>Rp 4.200.000</td>
                      <td>Rp 0</td>
                      <td><span class="badge bg-success">Paid</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>4</td>
                      <td>2026-01-04</td>
                      <td>INV-AR-004</td>
                      <td>PT Sentosa Prima</td>
                      <td>2026-02-03</td>
                      <td>Rp 16.900.000</td>
                      <td>Rp 6.900.000</td>
                      <td>Rp 10.000.000</td>
                      <td><span class="badge bg-warning">Partial</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>5</td>
                      <td>2026-01-05</td>
                      <td>INV-AR-005</td>
                      <td>CV Cipta Karya</td>
                      <td>2026-02-05</td>
                      <td>Rp 3.500.000</td>
                      <td>Rp 0</td>
                      <td>Rp 3.500.000</td>
                      <td><span class="badge bg-danger">Outstanding</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>6</td>
                      <td>2026-01-06</td>
                      <td>INV-AR-006</td>
                      <td>PT Digital Solusi</td>
                      <td>2026-02-06</td>
                      <td>Rp 22.400.000</td>
                      <td>Rp 10.000.000</td>
                      <td>Rp 12.400.000</td>
                      <td><span class="badge bg-warning">Partial</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>7</td>
                      <td>2026-01-07</td>
                      <td>INV-AR-007</td>
                      <td>PT Global Teknik</td>
                      <td>2026-02-08</td>
                      <td>Rp 7.250.000</td>
                      <td>Rp 7.250.000</td>
                      <td>Rp 0</td>
                      <td><span class="badge bg-success">Paid</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>8</td>
                      <td>2026-01-08</td>
                      <td>INV-AR-008</td>
                      <td>CV Karya Bersama</td>
                      <td>2026-02-09</td>
                      <td>Rp 14.300.000</td>
                      <td>Rp 4.000.000</td>
                      <td>Rp 10.300.000</td>
                      <td><span class="badge bg-warning">Partial</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>9</td>
                      <td>2026-01-09</td>
                      <td>INV-AR-009</td>
                      <td>PT Indo Pangan</td>
                      <td>2026-02-10</td>
                      <td>Rp 5.800.000</td>
                      <td>Rp 0</td>
                      <td>Rp 5.800.000</td>
                      <td><span class="badge bg-danger">Outstanding</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>10</td>
                      <td>2026-01-10</td>
                      <td>INV-AR-010</td>
                      <td>PT Prima Elektrik</td>
                      <td>2026-02-12</td>
                      <td>Rp 11.000.000</td>
                      <td>Rp 11.000.000</td>
                      <td>Rp 0</td>
                      <td><span class="badge bg-success">Paid</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-cogs"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>11</td>
                      <td>2026-01-11</td>
                      <td>INV-AR-011</td>
                      <td>CV Mandiri Sejahtera</td>
                      <td>2026-02-15</td>
                      <td>Rp 18.750.000</td>
                      <td>Rp 8.000.000</td>
                      <td>Rp 10.750.000</td>
                      <td><span class="badge bg-warning">Partial</span></td>
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

          <!-- DETAIL TABLE -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Detail Piutang / Aging Receivable</h3>
            </div>

            <div class="card-body table-responsive">

              <table class="table table-bordered table-sm">
                <thead class="table-light">
                  <tr>
                    <th>No Invoice</th>
                    <th>Customer</th>
                    <th>0-30 Hari</th>
                    <th>31-60 Hari</th>
                    <th>61-90 Hari</th>
                    <th>> 90 Hari</th>
                    <th>Total</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>INV-AR-001</td>
                    <td>PT Sumber Makmur</td>
                    <td>Rp 7.500.000</td>
                    <td>Rp 0</td>
                    <td>Rp 0</td>
                    <td>Rp 0</td>
                    <td>Rp 7.500.000</td>
                  </tr>

                  <tr>
                    <td>INV-AR-002</td>
                    <td>CV Mitra Jaya</td>
                    <td>Rp 8.750.000</td>
                    <td>Rp 0</td>
                    <td>Rp 0</td>
                    <td>Rp 0</td>
                    <td>Rp 8.750.000</td>
                  </tr>

                  <tr>
                    <td>INV-AR-011</td>
                    <td>CV Mandiri Sejahtera</td>
                    <td>Rp 10.750.000</td>
                    <td>Rp 0</td>
                    <td>Rp 0</td>
                    <td>Rp 0</td>
                    <td>Rp 10.750.000</td>
                  </tr>
                </tbody>

              </table>

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
        <h5 class="modal-title">Filter Accounts Receivable</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Periode</label>
            <input type="month" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Status Pembayaran</label>
            <select class="form-select">
              <option>Semua</option>
              <option>Paid</option>
              <option>Outstanding</option>
              <option>Partial</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Customer</label>
            <input type="text" class="form-control" placeholder="Cari customer">
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
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Tambah Invoice Piutang</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="row">

            <div class="col-md-6 mb-3">
              <label class="form-label">Tanggal Invoice</label>
              <input type="date" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">No Invoice</label>
              <input type="text" class="form-control" placeholder="INV-AR-XXX">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Customer</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Jatuh Tempo</label>
              <input type="date" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Total Tagihan</label>
              <input type="number" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Status</label>
              <select class="form-select">
                <option>Outstanding</option>
                <option>Partial</option>
                <option>Paid</option>
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
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Detail Invoice</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <table class="table table-bordered">
          <tr>
            <th>No Invoice</th>
            <td>INV-AR-001</td>
          </tr>
          <tr>
            <th>Customer</th>
            <td>PT Sumber Makmur</td>
          </tr>
          <tr>
            <th>Total Tagihan</th>
            <td>Rp 12.500.000</td>
          </tr>
          <tr>
            <th>Sisa Piutang</th>
            <td>Rp 7.500.000</td>
          </tr>
          <tr>
            <th>Status</th>
            <td><span class="badge bg-warning">Partial</span></td>
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
        <h5 class="modal-title">Edit Data Piutang</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label class="form-label">Customer</label>
          <input type="text" class="form-control" value="PT Sumber Makmur">
        </div>

        <div class="mb-3">
          <label class="form-label">Total Tagihan</label>
          <input type="text" class="form-control" value="12500000">
        </div>

        <div class="mb-3">
          <label class="form-label">Status</label>
          <select class="form-select">
            <option selected>Partial</option>
            <option>Paid</option>
            <option>Outstanding</option>
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
        <h5 class="modal-title">Aksi Data</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="d-grid gap-2">
          <button class="btn btn-outline-success">
            <i class="fas fa-check-circle me-1"></i> Tandai Lunas
          </button>

          <button class="btn btn-outline-warning">
            <i class="fas fa-paper-plane me-1"></i> Kirim Reminder
          </button>

          <button class="btn btn-outline-danger">
            <i class="fas fa-trash me-1"></i> Hapus Invoice
          </button>
        </div>

      </div>

    </div>
  </div>
</div>

<!-- MODAL IMPOR -->
<div class="modal fade" id="modalImpor" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Import Data Piutang</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-warning">
          Pastikan file menggunakan template resmi accounts receivable agar proses import berhasil.
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

<!-- MODAL BANTUAN -->
<div class="modal fade" id="modalBantuan" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Bantuan Accounts Receivable</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-info">
          Halaman ini digunakan untuk mengelola dan memonitor piutang pelanggan secara menyeluruh.
        </div>

        <h6><b>Fungsi Halaman</b></h6>
        <ul>
          <li>Memantau invoice customer yang belum dibayar.</li>
          <li>Mengetahui sisa piutang yang masih outstanding.</li>
          <li>Membantu proses penagihan dan reminder pembayaran.</li>
          <li>Mengelola status pembayaran customer.</li>
          <li>Menampilkan aging receivable untuk analisa keterlambatan pembayaran.</li>
        </ul>

        <hr>

        <h6><b>Cara Membaca Data</b></h6>
        <ul>
          <li><b>Total Tagihan</b> = total invoice customer.</li>
          <li><b>Terbayar</b> = nominal yang sudah dibayarkan customer.</li>
          <li><b>Sisa Piutang</b> = saldo yang masih harus dibayar.</li>
          <li><b>Outstanding</b> = belum ada pembayaran.</li>
          <li><b>Partial</b> = pembayaran sebagian.</li>
          <li><b>Paid</b> = invoice sudah lunas.</li>
        </ul>

        <hr>

        <h6><b>Keterangan Tombol</b></h6>
        <ul>
          <li><b>Filter</b> : menyaring data berdasarkan periode dan status.</li>
          <li><b>Tambah Invoice</b> : menambahkan data invoice baru.</li>
          <li><b>Export</b> : mengunduh data ke Excel/PDF.</li>
          <li><b>Import</b> : upload data piutang massal.</li>
          <li><b>Reset</b> : menghapus filter pencarian.</li>
          <li><b>View</b> : melihat detail invoice.</li>
          <li><b>Edit</b> : mengubah data invoice.</li>
          <li><b>Aksi</b> : menjalankan proses tambahan seperti reminder atau pelunasan.</li>
        </ul>

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
        <h5 class="modal-title">Reset Filter Data</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">
        Apakah Anda yakin ingin mereset seluruh filter pencarian data piutang?
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-danger">Reset</button>
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
          <i class="fas fa-times-circle me-2"></i>Oops! Terjadi Kesalahan
        </h5>
      </div>

      <div class="modal-body">

        <p>
          <strong>❌ Masalah:</strong><br>
          Gagal melakukan import data piutang.
        </p>

        <p>
          <strong>⚠️ Penyebab:</strong><br>
          Format file tidak sesuai template accounts receivable.
        </p>

        <p>
          <strong>💡 Solusi:</strong><br>
          Gunakan template resmi lalu upload ulang file import.
        </p>

        <div class="alert alert-warning">
          Pastikan seluruh kolom wajib telah terisi dengan benar.
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
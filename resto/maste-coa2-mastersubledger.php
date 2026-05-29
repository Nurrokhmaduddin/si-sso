<?php $page = 'master_subledger_rules'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">

  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">
        master_subledger_rules
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>

      <p class="text-muted mb-0">
        Halaman Master COA digunakan untuk mengelola daftar Chart Of Accounts (COA) perusahaan sebagai dasar pencatatan seluruh transaksi akuntansi. 
        Data akun digunakan dalam jurnal, buku besar, laporan laba rugi, neraca, arus kas, dan seluruh proses accounting lainnya.
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
                  <b>Tahun Buku:</b> 2026
                </div>

                <div class="col-md-3">
                  <b>Kategori:</b> Semua Akun
                </div>

                <div class="col-md-3">
                  <b>Status:</b> Aktif
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
                  <i class="fas fa-plus me-1"></i> Tambah COA
                </button>

                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>

                <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalExport">
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
                Daftar Master Subledger
              </h3>
            </div>

            <div class="card-body">

              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover align-middle">

                  <thead class="table-light text-center">
                    <tr>
                      <th width="25%">Subledger Type</th>
                      <th width="35%">Fungsi</th>
                      <th width="40%">Contoh Dipakai Pada Akun</th>
                    </tr>
                  </thead>

                  <tbody>

                    <tr>
                      <td><code>customer</code></td>
                      <td>Pelanggan / piutang customer</td>
                      <td>Piutang Usaha, Pendapatan Penjualan</td>
                    </tr>

                    <tr>
                      <td><code>vendor</code></td>
                      <td>Supplier / pemasok</td>
                      <td>Hutang Usaha, Pembelian</td>
                    </tr>

                    <tr>
                      <td><code>employee</code></td>
                      <td>Karyawan</td>
                      <td>Piutang Karyawan, Hutang Gaji</td>
                    </tr>

                    <tr>
                      <td><code>bank</code></td>
                      <td>Rekening bank</td>
                      <td>Kas Bank, Hutang Bank</td>
                    </tr>

                    <tr>
                      <td><code>cash</code></td>
                      <td>Kas kecil / kas fisik</td>
                      <td>Kas</td>
                    </tr>

                    <tr>
                      <td><code>inventory</code></td>
                      <td>Barang persediaan</td>
                      <td>Persediaan Barang</td>
                    </tr>

                    <tr>
                      <td><code>warehouse</code></td>
                      <td>Gudang penyimpanan</td>
                      <td>Persediaan Gudang</td>
                    </tr>

                    <tr>
                      <td><code>asset</code></td>
                      <td>Aset tetap</td>
                      <td>Aset Tetap</td>
                    </tr>

                    <tr>
                      <td><code>vehicle</code></td>
                      <td>Kendaraan</td>
                      <td>Kendaraan Operasional</td>
                    </tr>

                    <tr>
                      <td><code>investor</code></td>
                      <td>Pemilik modal / investor</td>
                      <td>Modal Pemilik</td>
                    </tr>

                    <tr>
                      <td><code>project</code></td>
                      <td>Proyek tertentu</td>
                      <td>Beban Project, Pendapatan Project</td>
                    </tr>

                    <tr>
                      <td><code>branch</code></td>
                      <td>Cabang perusahaan</td>
                      <td>Beban Cabang</td>
                    </tr>

                    <tr>
                      <td><code>division</code></td>
                      <td>Divisi/departemen</td>
                      <td>Beban Marketing</td>
                    </tr>

                    <tr>
                      <td><code>tax</code></td>
                      <td>Pajak</td>
                      <td>Hutang Pajak</td>
                    </tr>

                    <tr>
                      <td><code>loan</code></td>
                      <td>Pinjaman</td>
                      <td>Hutang Pinjaman</td>
                    </tr>

                    <tr>
                      <td><code>insurance</code></td>
                      <td>Asuransi</td>
                      <td>Beban Asuransi</td>
                    </tr>

                    <tr>
                      <td><code>expense_claim</code></td>
                      <td>Klaim biaya karyawan</td>
                      <td>Beban Reimburse</td>
                    </tr>

                    <tr>
                      <td><code>fixed_asset</code></td>
                      <td>Detail aset tetap</td>
                      <td>Akumulasi Penyusutan</td>
                    </tr>

                    <tr>
                      <td><code>depreciation</code></td>
                      <td>Penyusutan aset</td>
                      <td>Beban Penyusutan</td>
                    </tr>

                    <tr>
                      <td><code>fund</code></td>
                      <td>Dana tertentu</td>
                      <td>Dana Operasional</td>
                    </tr>

                    <tr>
                      <td><code>partner</code></td>
                      <td>Mitra bisnis</td>
                      <td>Bagi Hasil</td>
                    </tr>

                    <tr>
                      <td><code>student</code></td>
                      <td>Mahasiswa</td>
                      <td>Piutang Mahasiswa</td>
                    </tr>




                    <tr>
                      <td><code>unit</code></td>
                      <td>Unit bisnis</td>
                      <td>Profit Center</td>
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
        <h5 class="modal-title">Filter Master COA</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="mb-3">
            <label class="form-label">Kategori Akun</label>
            <select class="form-select">
              <option>Semua</option>
              <option>Asset</option>
              <option>Liability</option>
              <option>Equity</option>
              <option>Revenue</option>
              <option>Expense</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Status</label>
            <select class="form-select">
              <option>Semua</option>
              <option>Aktif</option>
              <option>Nonaktif</option>
            </select>
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
        <h5 class="modal-title">Tambah Master COA</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="row">

            <div class="col-md-6 mb-3">
              <label class="form-label">Kode Akun</label>
              <input type="text" class="form-control" placeholder="Contoh : 1101">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Nama Akun</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Kategori</label>
              <select class="form-select">
                <option>Asset</option>
                <option>Liability</option>
                <option>Equity</option>
                <option>Revenue</option>
                <option>Expense</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Sub Kategori</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Normal Balance</label>
              <select class="form-select">
                <option>Debit</option>
                <option>Credit</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Status</label>
              <select class="form-select">
                <option>Aktif</option>
                <option>Nonaktif</option>
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
        <h5 class="modal-title">Detail COA</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <table class="table table-bordered">
          <tr>
            <th>Kode Akun</th>
            <td>1101</td>
          </tr>
          <tr>
            <th>Nama Akun</th>
            <td>Kas</td>
          </tr>
          <tr>
            <th>Kategori</th>
            <td>Asset</td>
          </tr>
          <tr>
            <th>Normal Balance</th>
            <td>Debit</td>
          </tr>
          <tr>
            <th>Status</th>
            <td><span class="badge bg-success">Aktif</span></td>
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
        <h5 class="modal-title">Edit Master COA</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label class="form-label">Nama Akun</label>
          <input type="text" class="form-control" value="Kas">
        </div>

        <div class="mb-3">
          <label class="form-label">Kategori</label>
          <select class="form-select">
            <option selected>Asset</option>
            <option>Liability</option>
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
        <h5 class="modal-title">Aksi Data COA</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="d-grid gap-2">
          <button class="btn btn-outline-success">
            <i class="fas fa-check-circle me-1"></i> Aktifkan Akun
          </button>

          <button class="btn btn-outline-warning">
            <i class="fas fa-lock me-1"></i> Nonaktifkan Akun
          </button>

          <button class="btn btn-outline-danger">
            <i class="fas fa-trash me-1"></i> Hapus COA
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
        <h5 class="modal-title">Import Master COA</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-warning">
          Pastikan file menggunakan template resmi Master COA.
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

<!-- MODAL EXPORT -->
<div class="modal fade" id="modalExport" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-success text-white">
        <h5 class="modal-title">Export Data COA</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <p>Pilih format export data:</p>

        <div class="d-grid gap-2">
          <button class="btn btn-outline-success">
            <i class="fas fa-file-excel me-1"></i> Export Excel
          </button>

          <button class="btn btn-outline-danger">
            <i class="fas fa-file-pdf me-1"></i> Export PDF
          </button>
        </div>

      </div>

    </div>
  </div>
</div>

<!-- MODAL BANTUAN -->
<div class="modal fade" id="modalBantuan" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Bantuan Master COA</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-info">
          Halaman ini digunakan sebagai pusat pengelolaan seluruh akun akuntansi perusahaan.
        </div>

        <h6><b>Fungsi Halaman</b></h6>

        <ul>
          <li>Mengelola struktur Chart Of Accounts perusahaan.</li>
          <li>Menjadi dasar pencatatan jurnal transaksi.</li>
          <li>Mengelompokkan akun berdasarkan kategori accounting.</li>
          <li>Membantu proses penyusunan laporan keuangan.</li>
          <li>Menjaga konsistensi kode akun dalam sistem.</li>
        </ul>

        <hr>

        <h6><b>Cara Membaca Data</b></h6>

        <ul>
          <li><b>Kode Akun</b> = kode unik akun accounting.</li>
          <li><b>Nama Akun</b> = nama akun yang digunakan dalam jurnal.</li>
          <li><b>Kategori</b> = kelompok akun utama seperti Asset, Liability, Equity, Revenue, Expense.</li>
          <li><b>Sub Kategori</b> = rincian kelompok akun.</li>
          <li><b>Normal Balance</b> = posisi saldo normal akun (Debit/Credit).</li>
          <li><b>Status</b> = kondisi akun apakah masih aktif digunakan atau tidak.</li>
        </ul>

        <hr>

        <h6><b>Keterangan Tombol</b></h6>

        <ul>
          <li><b>Filter</b> : menyaring data berdasarkan kategori dan status akun.</li>
          <li><b>Tambah COA</b> : menambahkan akun baru ke sistem.</li>
          <li><b>Import</b> : upload data akun secara massal.</li>
          <li><b>Export</b> : mengunduh data COA ke Excel/PDF.</li>
          <li><b>View</b> : melihat detail akun.</li>
          <li><b>Edit</b> : mengubah data akun.</li>
          <li><b>Aksi</b> : menjalankan proses tambahan seperti aktivasi/nonaktif akun.</li>
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
        <h5 class="modal-title">Reset Filter</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body text-center">
        Apakah Anda yakin ingin mereset seluruh filter data Master COA?
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
          Gagal melakukan import Master COA.
        </p>

        <p>
          <strong>⚠️ Penyebab:</strong><br>
          Format file tidak sesuai template sistem.
        </p>

        <p>
          <strong>💡 Solusi:</strong><br>
          Gunakan template resmi lalu upload ulang file import.
        </p>

        <div class="alert alert-warning">
          Pastikan seluruh kolom wajib pada file telah terisi dengan benar.
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
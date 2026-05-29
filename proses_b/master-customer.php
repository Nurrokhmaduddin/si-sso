<?php
$page = 'master-customer';

include('koneksi.php');
include('1header.php');
include('2navbar.php');
include('3sidebar.php');
?>

<div class="content-wrapper">

<!-- HEADER -->
<section class="content-header">
  <div class="container-fluid">

    <h3 class="mb-0">
      Master Customer
      <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
        <i class="fas fa-question-circle"></i>
      </button>
    </h3>

    <p class="text-muted mb-0">
      Halaman ini digunakan untuk mengelola data <b>Customer</b> yang mencakup identitas pelanggan, kontak, alamat, dan tipe customer (Individual atau Company).
      Data ini digunakan pada modul Sales, Invoice, dan laporan penjualan.
    </p>

  </div>
</section>

<!-- CONTENT -->
<section class="content">
<div class="container-fluid">
      <!-- FILTER CARD -->
      <div class="card">

        <div class="card-body">
          <div class="row">

            <div class="col-md-3"><b>Tipe Vendor:</b> Semua</div>
            <div class="col-md-3"><b>Status:</b> Aktif</div>
            <div class="col-md-3"><b>Payment Terms:</b> 30 Hari</div>
            <div class="col-md-3"><b>Data:</b> Master Vendor</div>

          </div>
        </div>

        <div class="card-footer">
          <div class="card-tools ms-auto">

            <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalFilter">
              <i class="fas fa-filter me-1"></i> Filter
            </button>

            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambahData">
              <i class="fas fa-plus me-1"></i> Tambah Vendor
            </button>

            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalImpor">
              <i class="fas fa-file-upload me-1"></i> Import
            </button>

            <button class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalExport">
              <i class="fas fa-file-download me-1"></i> Export
            </button>

            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalResetData">
              <i class="fas fa-ban me-1"></i> Reset
            </button>

          </div>
        </div>

      </div>
<!-- CARD TABLE -->
<div class="card">

  <div class="card-header">
    <h3 class="card-title">Daftar Customer</h3>
  </div>

  <div class="card-body">

    <div class="table-responsive">

<?php
$query = mysqli_query($conn, "
  SELECT *
  FROM customers
  ORDER BY id ASC
");
?>

<table class="table table-bordered table-striped table-sm datatables1">

<thead class="table-light">
<tr class="text-center">
  <th>No</th>
  <th>Customer Code</th>
  <th>Customer Name</th>
  <th>Phone</th>
  <th>Email</th>
  <th>City</th>
  <th>Type</th>
  <th>Status</th>
  <th>Aksi</th>
</tr>
</thead>

<tbody>

<?php
$no = 1;
while($data = mysqli_fetch_assoc($query)) :
?>

<tr>

  <td class="text-center"><?= $no++; ?></td>

  <td><?= $data['customer_code']; ?></td>
  <td><?= $data['customer_name']; ?></td>
  <td><?= $data['phone']; ?></td>
  <td><?= $data['email']; ?></td>
  <td><?= $data['city']; ?></td>

  <td>
    <?= $data['customer_type']; ?>
  </td>

  <td>
    <?php if($data['is_active'] == 1){ ?>
      <span class="badge bg-success">ACTIVE</span>
    <?php } else { ?>
      <span class="badge bg-secondary">INACTIVE</span>
    <?php } ?>
  </td>

  <td class="text-center">

    <button class="btn btn-sm btn-outline-info">
      <i class="fas fa-eye"></i>
    </button>

    <button class="btn btn-sm btn-outline-primary">
      <i class="fas fa-edit"></i>
    </button>

    <button class="btn btn-sm btn-outline-danger">
      <i class="fas fa-trash"></i>
    </button>

  </td>

</tr>

<?php endwhile; ?>

</tbody>

</table>

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
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">

      <!-- HEADER -->
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Bantuan Master Customer</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <!-- BODY -->
      <div class="modal-body">

        <!-- INTRO -->
        <div class="alert alert-info">
          <b>Informasi:</b><br>
          Halaman ini digunakan untuk mengelola data <b>Customer</b> (pelanggan) yang akan digunakan dalam transaksi penjualan, invoice, dan laporan keuangan perusahaan.
        </div>

        <!-- DATA FIELD -->
        <div class="card mb-3">
          <div class="card-header bg-light fw-bold">
            Struktur Data Customer
          </div>

          <div class="card-body">

            <table class="table table-bordered table-sm">
              <thead class="table-light">
                <tr>
                  <th>Field</th>
                  <th>Tipe</th>
                  <th>Penjelasan</th>
                </tr>
              </thead>

              <tbody>

                <tr>
                  <td><b>Customer Code</b></td>
                  <td>Text</td>
                  <td>Kode unik pelanggan (contoh: CUST001).</td>
                </tr>

                <tr>
                  <td><b>Customer Name</b></td>
                  <td>Text</td>
                  <td>Nama pelanggan atau perusahaan.</td>
                </tr>

                <tr>
                  <td><b>Phone</b></td>
                  <td>Text</td>
                  <td>Nomor telepon pelanggan (opsional).</td>
                </tr>

                <tr>
                  <td><b>Email</b></td>
                  <td>Text</td>
                  <td>Alamat email pelanggan.</td>
                </tr>

                <tr>
                  <td><b>Address</b></td>
                  <td>Textarea</td>
                  <td>Alamat lengkap pelanggan.</td>
                </tr>

                <tr>
                  <td><b>City</b></td>
                  <td>Text</td>
                  <td>Kota domisili pelanggan.</td>
                </tr>

                <tr>
                  <td><b>Tax Number</b></td>
                  <td>Text</td>
                  <td>Nomor NPWP atau pajak pelanggan (jika ada).</td>
                </tr>

                <tr>
                  <td><b>Customer Type</b></td>
                  <td>Select</td>
                  <td>
                    Tipe pelanggan:
                    <ul class="mb-0">
                      <li>INDIVIDUAL → perorangan</li>
                      <li>COMPANY → perusahaan</li>
                    </ul>
                  </td>
                </tr>

                <tr>
                  <td><b>Status</b></td>
                  <td>Boolean</td>
                  <td>
                    Status aktif pelanggan:
                    <ul class="mb-0">
                      <li>1 = ACTIVE</li>
                      <li>0 = INACTIVE</li>
                    </ul>
                  </td>
                </tr>

              </tbody>
            </table>

          </div>
        </div>

        <!-- FUNGSI -->
        <div class="card">
          <div class="card-header bg-light fw-bold">
            Fungsi Data Customer dalam Sistem
          </div>

          <div class="card-body">

            <ul class="mb-0">
              <li>Digunakan pada modul penjualan (Sales & Invoice).</li>
              <li>Menjadi dasar histori transaksi pelanggan.</li>
              <li>Digunakan untuk laporan revenue per customer.</li>
              <li>Mendukung CRM (Customer Relationship Management).</li>
              <li>Filtering analisa pelanggan aktif dan tidak aktif.</li>
            </ul>

          </div>
        </div>

      </div>

      <!-- FOOTER -->
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
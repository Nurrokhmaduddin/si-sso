<?php
$page = 'master-branch';

include('koneksi.php');

include('1header.php');
include('2navbar.php');
include('3sidebar.php');
?>

<div class="content-wrapper" style="min-height: 626.4px;">

  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">
     <h3 class="mb-0">
  Master Branch
  <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
    <i class="fas fa-question-circle"></i>
  </button>
</h3>

<p class="text-muted mb-0">
  Halaman ini digunakan untuk mengelola data cabang perusahaan seperti kode cabang, nama cabang, alamat, dan status operasional.
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
                Daftar Master COA
              </h3>
            </div>

            <div class="card-body">

              <div class="table-responsive">
          <?php

          $query = mysqli_query($conn, "
    SELECT *
    FROM branches
    ORDER BY id ASC
");

            ?>
                <table class="table table-bordered table-striped table-sm datatables1">

                  <thead class="table-light">
<tr class="text-center">
  <th>No</th>
  <th>Kode Branch</th>
  <th>Nama Branch</th>
  <th>Alamat</th>
  <th>Kota</th>
  <th>Telepon</th>
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

  <td><?= $data['branch_code']; ?></td>

  <td><?= $data['branch_name']; ?></td>

  <td><?= $data['address']; ?></td>

  <td><?= $data['city']; ?></td>

  <td><?= $data['phone']; ?></td>

  <td>
    <?php if($data['is_active'] == '1') { ?>
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
        <h5 class="modal-title">
          Bantuan Master Branch
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <!-- BODY -->
      <div class="modal-body">

        <!-- INTRO -->
        <div class="alert alert-info">
          <b>Informasi:</b><br>
          Halaman ini digunakan untuk mengelola data <b>Branch (Cabang Perusahaan)</b> yang menjadi struktur organisasi operasional perusahaan.
          Setiap branch dapat digunakan dalam transaksi akuntansi, penjualan, pembelian, inventory, dan laporan keuangan.
        </div>

        <!-- ====================== -->
        <!-- 1. DATA UTAMA BRANCH -->
        <!-- ====================== -->
        <div class="card mb-3">
          <div class="card-header bg-light fw-bold">
            1. Data Utama Branch
          </div>

          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-bordered table-sm align-middle">
                <thead class="table-light">
                  <tr>
                    <th width="25%">Field</th>
                    <th width="25%">Tipe</th>
                    <th width="50%">Penjelasan</th>
                  </tr>
                </thead>

                <tbody>

                  <tr>
                    <td><b>Branch Code</b></td>
                    <td>Text</td>
                    <td>
                      Kode unik cabang perusahaan. Contoh: <code>JKT01</code>, <code>BDG01</code>.
                      Digunakan untuk identifikasi dalam sistem.
                    </td>
                  </tr>

                  <tr>
                    <td><b>Branch Name</b></td>
                    <td>Text</td>
                    <td>
                      Nama cabang perusahaan. Contoh: <i>Jakarta Pusat</i>, <i>Bandung Office</i>.
                    </td>
                  </tr>

                  <tr>
                    <td><b>Address</b></td>
                    <td>Textarea</td>
                    <td>
                      Alamat lengkap cabang perusahaan.
                    </td>
                  </tr>

                  <tr>
                    <td><b>City</b></td>
                    <td>Text</td>
                    <td>
                      Kota lokasi cabang berada.
                    </td>
                  </tr>

                  <tr>
                    <td><b>Phone</b></td>
                    <td>Text</td>
                    <td>
                      Nomor telepon cabang untuk komunikasi operasional.
                    </td>
                  </tr>

                  <tr>
                    <td><b>Status</b></td>
                    <td>Select</td>
                    <td>
                      Status operasional cabang:
                      <ul class="mb-0">
                        <li><b>ACTIVE</b> → cabang aktif digunakan</li>
                        <li><b>INACTIVE</b> → cabang tidak digunakan</li>
                      </ul>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>

          </div>
        </div>

        <!-- ====================== -->
        <!-- 2. FUNGSI SYSTEM -->
        <!-- ====================== -->
        <div class="card mb-3">
          <div class="card-header bg-light fw-bold">
            2. Fungsi Data Branch dalam Sistem
          </div>

          <div class="card-body">

            <ul class="mb-0">
              <li>Digunakan sebagai dimensi dalam jurnal akuntansi.</li>
              <li>Menjadi dasar laporan per cabang (branch performance).</li>
              <li>Mendukung multi-lokasi operasional perusahaan.</li>
              <li>Digunakan pada transaksi sales, purchase, dan inventory.</li>
              <li>Menjadi filter dalam laporan keuangan dan dashboard.</li>
            </ul>

          </div>
        </div>

        <!-- ====================== -->
        <!-- 3. CONTOH DATA -->
        <!-- ====================== -->
        <div class="card">
          <div class="card-header bg-light fw-bold">
            3. Contoh Data Branch
          </div>

          <div class="card-body">

            <table class="table table-bordered table-sm">
              <thead class="table-light">
                <tr>
                  <th>Branch Code</th>
                  <th>Branch Name</th>
                  <th>City</th>
                  <th>Status</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>JKT01</td>
                  <td>Jakarta Pusat</td>
                  <td>Jakarta</td>
                  <td><span class="badge bg-success">ACTIVE</span></td>
                </tr>

                <tr>
                  <td>BDG01</td>
                  <td>Bandung Office</td>
                  <td>Bandung</td>
                  <td><span class="badge bg-success">ACTIVE</span></td>
                </tr>

                <tr>
                  <td>SBY01</td>
                  <td>Surabaya Branch</td>
                  <td>Surabaya</td>
                  <td><span class="badge bg-success">ACTIVE</span></td>
                </tr>

                <tr>
                  <td>MDN01</td>
                  <td>Medan Branch</td>
                  <td>Medan</td>
                  <td><span class="badge bg-secondary">INACTIVE</span></td>
                </tr>

              </tbody>
            </table>

          </div>
        </div>

      </div>

      <!-- FOOTER -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Tutup
        </button>
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
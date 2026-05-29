<?php
$page = 'master-coa';

include('koneksi.php');

include('1header.php');
include('2navbar.php');
include('3sidebar.php');
?>
<?php

// ======================================================
// PROSES SIMPAN DATA COA
// ======================================================

if (isset($_POST['simpan_coa'])) {

    $kode_akun    = mysqli_real_escape_string($conn, $_POST['kode_akun']);
    $nama_akun    = mysqli_real_escape_string($conn, $_POST['nama_akun']);
    $tipe_akun    = strtoupper(mysqli_real_escape_string($conn, $_POST['tipe_akun']));
    $saldo_normal = strtoupper(mysqli_real_escape_string($conn, $_POST['saldo_normal']));
    $deskripsi    = mysqli_real_escape_string($conn, $_POST['deskripsi']);

    $status = 'ACTIVE';

    // VALIDASI
    if (
        empty($kode_akun) ||
        empty($nama_akun) ||
        empty($tipe_akun) ||
        empty($saldo_normal)
    ) {

        echo "
        <script>
            alert('Semua field wajib diisi!');
            window.location='master-coa.php';
        </script>
        ";

    } else {

        // CEK DUPLIKAT KODE AKUN
        $cek = mysqli_query($conn, "
            SELECT id
            FROM coa
            WHERE kode_akun = '$kode_akun'
        ");

        if (mysqli_num_rows($cek) > 0) {

            echo "
            <script>
                alert('Kode akun sudah digunakan!');
                window.location='master-coa.php';
            </script>
            ";

        } else {

            // INSERT DATA
            $insert = mysqli_query($conn, "
                INSERT INTO coa
                (
                    kode_akun,
                    nama_akun,
                    tipe_akun,
                    saldo_normal,
                    deskripsi,
                    status,
                    created_at,
                    updated_at
                )
                VALUES
                (
                    '$kode_akun',
                    '$nama_akun',
                    '$tipe_akun',
                    '$saldo_normal',
                    '$deskripsi',
                    '$status',
                    NOW(),
                    NOW()
                )
            ");

            if ($insert) {

                echo "
                <script>
                    alert('Data COA berhasil disimpan!');
                    window.location='master-coa.php';
                </script>
                ";

            } else {

                echo "
                <script>
                    alert('Gagal menyimpan data!');
                    window.location='master-coa.php';
                </script>
                ";

            }

        }

    }

}

?>
<div class="content-wrapper" style="min-height: 626.4px;">

  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">
        Master COA2 (Chart Of Accounts)
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
                Daftar Master COA
              </h3>
            </div>

            <div class="card-body">

              <div class="table-responsive">
          <?php

          $query = mysqli_query($conn, "

            SELECT *
            FROM coa
            ORDER BY kode_akun ASC

            ");

            ?>
                <table class="table table-bordered table-striped table-sm datatables1">

                  <thead class="table-light">
  <tr class="text-center">
    <th>No</th>
    <th>Kode Akun</th>
    <th>Nama Akun</th>
    <th>Tipe Akun</th>
    <th>Saldo Normal</th>
    <th>Subledger Type</th>
    <th width="170">Aksi</th>
  </tr>
</thead>

<tbody>

<?php
$no = 1;

while($data = mysqli_fetch_assoc($query)) :
?>

<tr>

    <td class="text-center">
        <?= $no++; ?>
    </td>

    <td>
        <?= $data['kode_akun']; ?>
    </td>

    <td>
        <?= $data['nama_akun']; ?>
    </td>

    <td>
        <?= $data['tipe_akun']; ?>
    </td>

    <td>
        <?= $data['saldo_normal']; ?>
    </td>

    <td>
        <?= $data['subledger_type']; ?>
    </td>

    <td class="text-center">

        <button
            class="btn btn-sm btn-outline-info">

            <i class="fas fa-eye"></i>

        </button>

        <button
            class="btn btn-sm btn-outline-primary">

            <i class="fas fa-edit"></i>

        </button>

        <button
            class="btn btn-sm btn-outline-dark">

            <i class="fas fa-cogs"></i>

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

      <form method="POST">

    <div class="modal-body">

        <div class="row">

            <!-- KODE AKUN -->
            <div class="col-md-6 mb-3">

                <label class="form-label">
                    Kode Akun
                </label>

                <input
                    type="text"
                    name="kode_akun"
                    class="form-control"
                    placeholder="Contoh : 1101"
                    required>

            </div>

            <!-- NAMA AKUN -->
            <div class="col-md-6 mb-3">

                <label class="form-label">
                    Nama Akun
                </label>

                <input
                    type="text"
                    name="nama_akun"
                    class="form-control"
                    required>

            </div>

            <!-- TIPE AKUN -->
            <div class="col-md-6 mb-3">

                <label class="form-label">
                    Tipe Akun
                </label>

                <select
                    name="tipe_akun"
                    class="form-select"
                    required>

                    <option value="">
                        -- Pilih --
                    </option>

                    <option value="ASSET">
                        Asset
                    </option>

                    <option value="LIABILITY">
                        Liability
                    </option>

                    <option value="EQUITY">
                        Equity
                    </option>

                    <option value="REVENUE">
                        Revenue
                    </option>

                    <option value="EXPENSE">
                        Expense
                    </option>

                </select>

            </div>

            <!-- NORMAL BALANCE -->
            <div class="col-md-6 mb-3">

                <label class="form-label">
                    Normal Balance
                </label>

                <select
                    name="saldo_normal"
                    class="form-select"
                    required>

                    <option value="">
                        -- Pilih --
                    </option>

                    <option value="DEBIT">
                        Debit
                    </option>

                    <option value="CREDIT">
                        Credit
                    </option>

                </select>

            </div>

            <!-- STATUS -->
            <div class="col-md-12 mb-3">

                <label class="form-label">
                    Status
                </label>

                <input
                    type="text"
                    class="form-control"
                    value="ACTIVE"
                    readonly>

            </div>

            <!-- DESKRIPSI -->
            <div class="col-md-12 mb-3">

                <label class="form-label">
                    Keterangan
                </label>

                <textarea
                    name="deskripsi"
                    class="form-control"
                    rows="3"></textarea>

            </div>

        </div>

    </div>

    <div class="modal-footer">

        <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal">

            Batal

        </button>

        <button
            type="submit"
            name="simpan_coa"
            class="btn btn-primary">

            Simpan Data

        </button>

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
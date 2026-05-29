<?php
$page = 'master-vendor';

include('koneksi.php');
include('1header.php');
include('2navbar.php');
include('3sidebar.php');
?>

<div class="content-wrapper">

  <!-- CONTENT HEADER -->
  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Master Vendor
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>

      <p class="text-muted mb-0">
        Halaman ini digunakan untuk mengelola data vendor/supplier seperti kode vendor, nama vendor, kontak, alamat, dan informasi pembayaran.
      </p>

    </div>
  </section>

  <!-- MAIN CONTENT -->
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

      <!-- TABLE -->
      <div class="card">

        <div class="card-header">
          <h3 class="card-title">Daftar Master Vendor</h3>
        </div>

        <div class="card-body">

          <div class="table-responsive">

            <?php
            $query = mysqli_query($conn, "SELECT * FROM vendors ORDER BY id ASC");
            ?>

            <table class="table table-bordered table-striped table-sm datatables1">

              <thead class="table-light">
                <tr class="text-center">
                  <th>No</th>
                  <th>Kode Vendor</th>
                  <th>Nama Vendor</th>
                  <th>Telepon</th>
                  <th>Email</th>
                  <th>Kota</th>
                  <th>Tipe</th>
                  <th>Payment Terms</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>
                <?php $no = 1; while($data = mysqli_fetch_assoc($query)) : ?>

                <tr>
                  <td class="text-center"><?= $no++; ?></td>
                  <td><?= $data['vendor_code']; ?></td>
                  <td><?= $data['vendor_name']; ?></td>
                  <td><?= $data['phone']; ?></td>
                  <td><?= $data['email']; ?></td>
                  <td><?= $data['city']; ?></td>
                  <td><?= $data['vendor_type']; ?></td>
                  <td><?= $data['payment_terms']; ?> Hari</td>

                  <td class="text-center">
                    <?php if($data['is_active'] == 1) { ?>
                      <span class="badge bg-success">ACTIVE</span>
                    <?php } else { ?>
                      <span class="badge bg-secondary">INACTIVE</span>
                    <?php } ?>
                  </td>

                  <td class="text-center">
                    <button class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
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
<div class="modal fade" id="modalBantuan" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Bantuan Master Vendor</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-info">
          <b>Informasi:</b><br>
          Halaman ini digunakan untuk mengelola data <b>Vendor / Supplier</b> yang digunakan dalam proses pembelian, hutang usaha, dan operasional perusahaan.
        </div>

        <!-- DATA VENDOR -->
        <div class="card mb-3">
          <div class="card-header bg-light fw-bold">1. Data Utama Vendor</div>

          <div class="card-body">
            <table class="table table-bordered table-sm">

              <tr>
                <th>Vendor Code</th>
                <td>Kode unik vendor (contoh: VND001)</td>
              </tr>

              <tr>
                <th>Vendor Name</th>
                <td>Nama perusahaan atau individu vendor</td>
              </tr>

              <tr>
                <th>Phone</th>
                <td>Nomor kontak vendor</td>
              </tr>

              <tr>
                <th>Email</th>
                <td>Email vendor untuk komunikasi</td>
              </tr>

              <tr>
                <th>Address</th>
                <td>Alamat lengkap vendor</td>
              </tr>

              <tr>
                <th>City</th>
                <td>Kota lokasi vendor</td>
              </tr>

              <tr>
                <th>Vendor Type</th>
                <td>INDIVIDUAL atau COMPANY</td>
              </tr>

              <tr>
                <th>Payment Terms</th>
                <td>Jangka waktu pembayaran (contoh: 30 hari)</td>
              </tr>

              <tr>
                <th>Status</th>
                <td>ACTIVE / INACTIVE</td>
              </tr>

            </table>
          </div>
        </div>

        <!-- FUNGSI -->
        <div class="card mb-3">
          <div class="card-header bg-light fw-bold">2. Fungsi Vendor dalam Sistem</div>

          <div class="card-body">
            <ul>
              <li>Digunakan pada transaksi pembelian (purchase).</li>
              <li>Dasar pencatatan hutang usaha (accounts payable).</li>
              <li>Monitoring pembayaran vendor.</li>
              <li>Analisis performa supplier.</li>
            </ul>
          </div>
        </div>

        <!-- CONTOH -->
        <div class="card">
          <div class="card-header bg-light fw-bold">3. Contoh Vendor</div>

          <div class="card-body">
            <table class="table table-bordered table-sm">
              <tr>
                <th>Code</th>
                <th>Name</th>
                <th>City</th>
                <th>Status</th>
              </tr>
              <tr>
                <td>VND001</td>
                <td>PT Sumber Jaya</td>
                <td>Jakarta</td>
                <td><span class="badge bg-success">ACTIVE</span></td>
              </tr>
              <tr>
                <td>VND002</td>
                <td>CV Mitra Sejahtera</td>
                <td>Bandung</td>
                <td><span class="badge bg-secondary">INACTIVE</span></td>
              </tr>
            </table>
          </div>

        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>
<?php include('5script.php'); ?>
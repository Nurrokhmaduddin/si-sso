<?php
$page = 'master-investor';

include('koneksi.php');
include('1header.php');
include('2navbar.php');
include('3sidebar.php');
?>

<div class="content-wrapper">

<!-- ========================================================= -->
<!-- HEADER -->
<!-- ========================================================= -->

<section class="content-header">

  <div class="container-fluid">

    <h3 class="mb-0">

      Master Investor

      <button type="button"
              class="btn btn-tool"
              data-bs-toggle="modal"
              data-bs-target="#modalBantuan">

        <i class="fas fa-question-circle"></i>

      </button>

    </h3>

    <p class="text-muted mb-0">

      Halaman ini digunakan untuk mengelola data <b>Investor</b>
      perusahaan yang mencakup identitas investor, tipe investasi,
      nilai investasi, persentase kepemilikan, dan status investor.

    </p>

  </div>

</section>

<!-- ========================================================= -->
<!-- CONTENT -->
<!-- ========================================================= -->

<section class="content">

<div class="container-fluid">

<!-- ========================================================= -->
<!-- FILTER CARD -->
<!-- ========================================================= -->

<div class="card">

  <div class="card-body">

    <div class="row">

      <div class="col-md-3">
        <b>Tipe Investor:</b> Semua
      </div>

      <div class="col-md-3">
        <b>Status:</b> ACTIVE
      </div>

      <div class="col-md-3">
        <b>Tipe Investasi:</b> SHAREHOLDER
      </div>

      <div class="col-md-3">
        <b>Data:</b> Master Investor
      </div>

    </div>

  </div>

  <div class="card-footer">

    <div class="card-tools ms-auto">

      <button class="btn btn-outline-info btn-sm"
              data-bs-toggle="modal"
              data-bs-target="#modalFilter">

        <i class="fas fa-filter me-1"></i>
        Filter

      </button>

      <button class="btn btn-outline-primary btn-sm"
              data-bs-toggle="modal"
              data-bs-target="#modalTambahData">

        <i class="fas fa-plus me-1"></i>
        Tambah Investor

      </button>

      <button class="btn btn-outline-primary btn-sm"
              data-bs-toggle="modal"
              data-bs-target="#modalImpor">

        <i class="fas fa-file-upload me-1"></i>
        Import

      </button>

      <button class="btn btn-outline-success btn-sm"
              data-bs-toggle="modal"
              data-bs-target="#modalExport">

        <i class="fas fa-file-download me-1"></i>
        Export

      </button>

      <button class="btn btn-outline-danger btn-sm"
              data-bs-toggle="modal"
              data-bs-target="#modalResetData">

        <i class="fas fa-ban me-1"></i>
        Reset

      </button>

    </div>

  </div>

</div>

<!-- ========================================================= -->
<!-- CARD TABLE -->
<!-- ========================================================= -->

<div class="card">

  <div class="card-header">

    <h3 class="card-title">
      Daftar Investor
    </h3>

  </div>

  <div class="card-body">

    <div class="table-responsive">

<?php
$query = mysqli_query($conn, "
  SELECT *
  FROM investors
  ORDER BY id ASC
");
?>

<table class="table table-bordered table-striped table-sm datatables1">

<thead class="table-light">

<tr class="text-center">

  <th>No</th>
  <th>Kode Investor</th>
  <th>Nama Investor</th>
  <th>Tipe Investor</th>
  <th>Tipe Investasi</th>
  <th>Total Investasi</th>
  <th>Ownership</th>
  <th>Kota</th>
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

  <td class="text-center">
    <?= $no++; ?>
  </td>

  <td>
    <?= $data['investor_code']; ?>
  </td>

  <td>
    <?= $data['investor_name']; ?>
  </td>

  <td>
    <?= $data['investor_type']; ?>
  </td>

  <td>
    <?= $data['investment_type']; ?>
  </td>

  <td class="text-end">

    Rp <?= number_format($data['total_investment'],0,',','.'); ?>

  </td>

  <td class="text-center">

    <?= $data['ownership_percentage']; ?>%

  </td>

  <td>
    <?= $data['city']; ?>
  </td>

  <td>

    <?php if($data['investor_status'] == 'ACTIVE'){ ?>

      <span class="badge bg-success">
        ACTIVE
      </span>

    <?php } else { ?>

      <span class="badge bg-secondary">
        INACTIVE
      </span>

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

<!-- ========================================================= -->
<!-- MODAL FILTER -->
<!-- ========================================================= -->

<div class="modal fade" id="modalFilter" tabindex="-1">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header bg-info text-white">

  <h5 class="modal-title">
    Filter Master Investor
  </h5>

  <button type="button"
          class="btn-close btn-close-white"
          data-bs-dismiss="modal"></button>

</div>

<form>

<div class="modal-body">

  <div class="mb-3">

    <label class="form-label">
      Tipe Investor
    </label>

    <select class="form-select">

      <option>Semua</option>
      <option>INDIVIDUAL</option>
      <option>COMPANY</option>
      <option>VENTURE_CAPITAL</option>
      <option>ANGEL_INVESTOR</option>

    </select>

  </div>

  <div class="mb-3">

    <label class="form-label">
      Status Investor
    </label>

    <select class="form-select">

      <option>Semua</option>
      <option>ACTIVE</option>
      <option>INACTIVE</option>

    </select>

  </div>

</div>

<div class="modal-footer">

  <button class="btn btn-secondary"
          data-bs-dismiss="modal">

    Batal

  </button>

  <button class="btn btn-info">

    Terapkan Filter

  </button>

</div>

</form>

</div>

</div>

</div>

<!-- ========================================================= -->
<!-- MODAL TAMBAH -->
<!-- ========================================================= -->

<div class="modal fade" id="modalTambahData" tabindex="-1">

<div class="modal-dialog modal-lg">

<div class="modal-content">

<div class="modal-header bg-primary text-white">

  <h5 class="modal-title">
    Tambah Investor
  </h5>

  <button class="btn-close btn-close-white"
          data-bs-dismiss="modal"></button>

</div>

<form>

<div class="modal-body">

<div class="row">

  <div class="col-md-6 mb-3">

    <label class="form-label">
      Kode Investor
    </label>

    <input type="text"
           class="form-control"
           placeholder="INV001">

  </div>

  <div class="col-md-6 mb-3">

    <label class="form-label">
      Nama Investor
    </label>

    <input type="text"
           class="form-control">

  </div>

  <div class="col-md-6 mb-3">

    <label class="form-label">
      Tipe Investor
    </label>

    <select class="form-select">

      <option>INDIVIDUAL</option>
      <option>COMPANY</option>
      <option>VENTURE_CAPITAL</option>
      <option>ANGEL_INVESTOR</option>

    </select>

  </div>

  <div class="col-md-6 mb-3">

    <label class="form-label">
      Tipe Investasi
    </label>

    <select class="form-select">

      <option>SHAREHOLDER</option>
      <option>LENDER</option>
      <option>PARTNER</option>

    </select>

  </div>

  <div class="col-md-6 mb-3">

    <label class="form-label">
      Total Investasi
    </label>

    <input type="number"
           class="form-control">

  </div>

  <div class="col-md-6 mb-3">

    <label class="form-label">
      Persentase Kepemilikan
    </label>

    <input type="number"
           class="form-control"
           step="0.01">

  </div>

  <div class="col-md-6 mb-3">

    <label class="form-label">
      Telepon
    </label>

    <input type="text"
           class="form-control">

  </div>

  <div class="col-md-6 mb-3">

    <label class="form-label">
      Email
    </label>

    <input type="email"
           class="form-control">

  </div>

  <div class="col-md-6 mb-3">

    <label class="form-label">
      Kota
    </label>

    <input type="text"
           class="form-control">

  </div>

  <div class="col-md-6 mb-3">

    <label class="form-label">
      Tanggal Bergabung
    </label>

    <input type="date"
           class="form-control">

  </div>

  <div class="col-md-12 mb-3">

    <label class="form-label">
      Alamat
    </label>

    <textarea class="form-control"
              rows="3"></textarea>

  </div>

  <div class="col-md-12 mb-3">

    <label class="form-label">
      Catatan
    </label>

    <textarea class="form-control"
              rows="3"></textarea>

  </div>

</div>

</div>

<div class="modal-footer">

  <button class="btn btn-secondary"
          data-bs-dismiss="modal">

    Batal

  </button>

  <button class="btn btn-primary">

    Simpan Data

  </button>

</div>

</form>

</div>

</div>

</div>

<?php include('5script.php'); ?>
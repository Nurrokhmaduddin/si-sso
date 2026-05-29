
<?php
$page = 'master-employee';

include('koneksi.php');
include('1header.php');
include('2navbar.php');
include('3sidebar.php');
?>

<div class="content-wrapper">

<!-- ========================================================= -->
<!-- CONTENT HEADER -->
<!-- ========================================================= -->
<section class="content-header">
  <div class="container-fluid">

    <h3 class="mb-0">
      Master Employees

      <button type="button"
              class="btn btn-tool"
              data-bs-toggle="modal"
              data-bs-target="#modalBantuan">

        <i class="fas fa-question-circle"></i>

      </button>

    </h3>

    <p class="text-muted mb-0">
      Halaman ini digunakan untuk mengelola data karyawan perusahaan
      yang mencakup identitas pegawai, jabatan, departemen,
      cabang penempatan, status kerja, dan informasi dasar HR.
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
        <b>Status:</b> Semua
      </div>

      <div class="col-md-3">
        <b>Department:</b> Semua
      </div>

      <div class="col-md-3">
        <b>Branch:</b> Semua
      </div>

      <div class="col-md-3">
        <b>Data:</b> Employee Master
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
        Tambah Employee

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
      Daftar Employees
    </h3>

  </div>

  <div class="card-body">

    <div class="table-responsive">

<?php
$query = mysqli_query($conn, "
  SELECT
    e.*,
    b.branch_name
  FROM employees e
  LEFT JOIN branches b
    ON b.id = e.branch_id
  ORDER BY e.id ASC
");
?>

<table class="table table-bordered table-striped table-sm datatables1">

<thead class="table-light">

<tr class="text-center">

  <th>No</th>
  <th>Employee Code</th>
  <th>Employee Name</th>
  <th>Department</th>
  <th>Position</th>
  <th>Branch</th>
  <th>Phone</th>
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
    <?= $data['employee_code']; ?>
  </td>

  <td>
    <?= $data['employee_name']; ?>
  </td>

  <td>
    <?= $data['department']; ?>
  </td>

  <td>
    <?= $data['position']; ?>
  </td>

  <td>
    <?= $data['branch_name']; ?>
  </td>

  <td>
    <?= $data['phone']; ?>
  </td>

  <td class="text-center">

    <?php if($data['employee_status'] == 'ACTIVE'){ ?>

      <span class="badge bg-success">
        ACTIVE
      </span>

    <?php } elseif($data['employee_status'] == 'INACTIVE'){ ?>

      <span class="badge bg-secondary">
        INACTIVE
      </span>

    <?php } else { ?>

      <span class="badge bg-danger">
        RESIGNED
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
          Filter Master Employee
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal"></button>

      </div>

      <form>

        <div class="modal-body">

          <div class="mb-3">

            <label class="form-label">
              Department
            </label>

            <select class="form-select">

              <option>Semua</option>
              <option>Finance</option>
              <option>HRD</option>
              <option>IT</option>
              <option>Marketing</option>
              <option>Warehouse</option>

            </select>

          </div>

          <div class="mb-3">

            <label class="form-label">
              Status
            </label>

            <select class="form-select">

              <option>Semua</option>
              <option>ACTIVE</option>
              <option>INACTIVE</option>
              <option>RESIGNED</option>

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
    Tambah Employee
  </h5>

  <button class="btn-close btn-close-white"
          data-bs-dismiss="modal"></button>

</div>

<form>

<div class="modal-body">

<div class="row">

  <div class="col-md-6 mb-3">

    <label class="form-label">
      Employee Code
    </label>

    <input type="text"
           class="form-control"
           placeholder="EMP001">

  </div>

  <div class="col-md-6 mb-3">

    <label class="form-label">
      Employee Name
    </label>

    <input type="text"
           class="form-control">

  </div>

  <div class="col-md-6 mb-3">

    <label class="form-label">
      Phone
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
      Department
    </label>

    <input type="text"
           class="form-control">

  </div>

  <div class="col-md-6 mb-3">

    <label class="form-label">
      Position
    </label>

    <input type="text"
           class="form-control">

  </div>

  <div class="col-md-6 mb-3">

    <label class="form-label">
      Branch
    </label>

    <select class="form-select">

      <option>-- Pilih Branch --</option>

      <?php
      $branch = mysqli_query($conn,"
        SELECT *
        FROM branches
        ORDER BY branch_name ASC
      ");

      while($b = mysqli_fetch_assoc($branch)) :
      ?>

      <option value="<?= $b['id']; ?>">
        <?= $b['branch_name']; ?>
      </option>

      <?php endwhile; ?>

    </select>

  </div>

  <div class="col-md-6 mb-3">

    <label class="form-label">
      Hire Date
    </label>

    <input type="date"
           class="form-control">

  </div>

  <div class="col-md-6 mb-3">

    <label class="form-label">
      Salary
    </label>

    <input type="number"
           class="form-control">

  </div>

  <div class="col-md-6 mb-3">

    <label class="form-label">
      Employee Status
    </label>

    <select class="form-select">

      <option>ACTIVE</option>
      <option>INACTIVE</option>
      <option>RESIGNED</option>

    </select>

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

<!-- ========================================================= -->
<!-- MODAL VIEW -->
<!-- ========================================================= -->
<div class="modal fade" id="modalView" tabindex="-1">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header bg-info text-white">

  <h5 class="modal-title">
    Detail Employee
  </h5>

  <button class="btn-close btn-close-white"
          data-bs-dismiss="modal"></button>

</div>

<div class="modal-body">

<table class="table table-bordered">

<tr>
  <th>Employee Code</th>
  <td>EMP001</td>
</tr>

<tr>
  <th>Employee Name</th>
  <td>John Doe</td>
</tr>

<tr>
  <th>Department</th>
  <td>Finance</td>
</tr>

<tr>
  <th>Position</th>
  <td>Accountant</td>
</tr>

<tr>
  <th>Status</th>
  <td>
    <span class="badge bg-success">
      ACTIVE
    </span>
  </td>
</tr>

</table>

</div>

<div class="modal-footer">

  <button class="btn btn-secondary"
          data-bs-dismiss="modal">

    Tutup

  </button>

</div>

</div>

</div>

</div>

<!-- ========================================================= -->
<!-- MODAL IMPORT -->
<!-- ========================================================= -->
<div class="modal fade" id="modalImpor" tabindex="-1">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header bg-primary text-white">

  <h5 class="modal-title">
    Import Master Employee
  </h5>

  <button class="btn-close btn-close-white"
          data-bs-dismiss="modal"></button>

</div>

<div class="modal-body">

<div class="alert alert-warning">

  Pastikan file menggunakan template resmi
  Master Employee.

</div>

<input type="file"
       class="form-control">

</div>

<div class="modal-footer">

<button class="btn btn-secondary"
        data-bs-dismiss="modal">

  Batal

</button>

<button class="btn btn-primary">
  Import
</button>

</div>

</div>

</div>

</div>

<!-- ========================================================= -->
<!-- MODAL EXPORT -->
<!-- ========================================================= -->
<div class="modal fade" id="modalExport" tabindex="-1">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header bg-success text-white">

  <h5 class="modal-title">
    Export Data Employee
  </h5>

  <button class="btn-close btn-close-white"
          data-bs-dismiss="modal"></button>

</div>

<div class="modal-body">

<p>Pilih format export data:</p>

<div class="d-grid gap-2">

<button class="btn btn-outline-success">

  <i class="fas fa-file-excel me-1"></i>
  Export Excel

</button>

<button class="btn btn-outline-danger">

  <i class="fas fa-file-pdf me-1"></i>
  Export PDF

</button>

</div>

</div>

</div>

</div>

</div>

<!-- ========================================================= -->
<!-- MODAL BANTUAN -->
<!-- ========================================================= -->
<div class="modal fade"
     id="modalBantuan"
     tabindex="-1">

<div class="modal-dialog modal-lg modal-dialog-scrollable">

<div class="modal-content">

<div class="modal-header bg-primary text-white">

  <h5 class="modal-title">
    Bantuan Master Employee
  </h5>

  <button type="button"
          class="btn-close btn-close-white"
          data-bs-dismiss="modal"></button>

</div>

<div class="modal-body">

<div class="alert alert-info">

  Halaman ini digunakan untuk mengelola
  data master karyawan perusahaan.

</div>

<div class="card mb-3">

<div class="card-header bg-light fw-bold">
  Struktur Data Employee
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
  <td><b>Employee Code</b></td>
  <td>Text</td>
  <td>Kode unik identitas karyawan.</td>
</tr>

<tr>
  <td><b>Employee Name</b></td>
  <td>Text</td>
  <td>Nama lengkap karyawan.</td>
</tr>

<tr>
  <td><b>Department</b></td>
  <td>Text</td>
  <td>Divisi atau departemen karyawan.</td>
</tr>

<tr>
  <td><b>Position</b></td>
  <td>Text</td>
  <td>Jabatan atau posisi kerja.</td>
</tr>

<tr>
  <td><b>Branch</b></td>
  <td>Relation</td>
  <td>Cabang tempat karyawan bekerja.</td>
</tr>

<tr>
  <td><b>Salary</b></td>
  <td>Decimal</td>
  <td>Nominal gaji dasar karyawan.</td>
</tr>

<tr>
  <td><b>Employee Status</b></td>
  <td>Enum</td>
  <td>
    ACTIVE, INACTIVE, atau RESIGNED.
  </td>
</tr>

</tbody>

</table>

</div>

</div>

<div class="card">

<div class="card-header bg-light fw-bold">
  Fungsi Data Employee
</div>

<div class="card-body">

<ul class="mb-0">

  <li>Digunakan untuk modul HR dan payroll.</li>
  <li>Digunakan untuk approval workflow.</li>
  <li>Digunakan untuk monitoring manpower.</li>
  <li>Digunakan untuk analisa biaya SDM.</li>
  <li>Menjadi referensi user internal perusahaan.</li>

</ul>

</div>

</div>

</div>

<div class="modal-footer">

<button class="btn btn-secondary"
        data-bs-dismiss="modal">

  Tutup

</button>

</div>

</div>

</div>

</div>

<!-- ========================================================= -->
<!-- MODAL RESET -->
<!-- ========================================================= -->
<div class="modal fade" id="modalResetData" tabindex="-1">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header bg-danger text-white">

  <h5 class="modal-title">
    Reset Filter
  </h5>

  <button class="btn-close btn-close-white"
          data-bs-dismiss="modal"></button>

</div>

<div class="modal-body text-center">

  Apakah Anda yakin ingin mereset seluruh
  filter data Employee?

</div>

<div class="modal-footer">

<button class="btn btn-secondary"
        data-bs-dismiss="modal">

  Batal

</button>

<button class="btn btn-danger">
  Reset
</button>

</div>

</div>

</div>

</div>

<?php include('5script.php'); ?>


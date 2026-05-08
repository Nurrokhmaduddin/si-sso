<?php $page = 'f-mata-anggaran'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">
    <h3>Mata Anggaran (Master Data)</h3>
    <p class="text-muted">Referensi item budgeting yang digunakan dalam perencanaan biaya perusahaan</p>
  </div>
</section>

<section class="content">
<div class="container-fluid">

<!-- CARD CONTROL -->
<div class="card">
  <div class="card-body">

    <!-- 
      DESIGN NOTE:
      Master Data = struktur item budgeting
      Tidak ada nilai uang, hanya definisi biaya
    -->

    <button class="btn btn-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
      + Tambah Mata Anggaran
    </button>

    <div class="table-responsive">
      <table class="table table-bordered table-sm datatables1">

        <thead class="text-center text-uppercase">
          <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Mata Anggaran</th>
            <th>Kategori</th>
            <th>Cost Center</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>

          <tr>
            <td class="text-center">1</td>
            <td>MA-001</td>
            <td>Gaji Karyawan</td>
            <td>OPEX</td>
            <td>HRD</td>
            <td><span class="badge bg-success">Active</span></td>
            <td class="text-center">
              <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
              <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
            </td>
          </tr>

          <tr>
            <td class="text-center">2</td>
            <td>MA-002</td>
            <td>Sewa Kantor</td>
            <td>OPEX</td>
            <td>GENERAL</td>
            <td><span class="badge bg-success">Active</span></td>
            <td class="text-center">
              <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
              <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
            </td>
          </tr>

          <tr>
            <td class="text-center">3</td>
            <td>MA-003</td>
            <td>Marketing Campaign</td>
            <td>OPEX</td>
            <td>MARKETING</td>
            <td><span class="badge bg-warning text-dark">Hold</span></td>
            <td class="text-center">
              <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
              <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
            </td>
          </tr>

        </tbody>

      </table>
    </div>

  </div>
</div>

</div>
</section>
</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
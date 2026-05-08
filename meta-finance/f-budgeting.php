<?php $page = 'f-budgeting'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">
    <h3>Budgeting Planning</h3>
    <p class="text-muted">Penentuan alokasi anggaran berdasarkan mata anggaran</p>
  </div>
</section>

<section class="content">
<div class="container-fluid">

<!-- SUMMARY KPI -->
<div class="row mb-3">

  <div class="col-md-3">
    <div class="card bg-primary text-white">
      <div class="card-body">
        <h5>Total Budget</h5>
        <h3>Rp 500.000.000</h3>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card bg-success text-white">
      <div class="card-body">
        <h5>Allocated</h5>
        <h3>Rp 320.000.000</h3>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card bg-warning text-dark">
      <div class="card-body">
        <h5>Remaining</h5>
        <h3>Rp 180.000.000</h3>
      </div>
    </div>
  </div>

</div>

<!-- TABLE -->
<div class="card">
  <div class="card-body">

    <!-- DESIGN NOTE:
      Budgeting = mapping Mata Anggaran + nilai uang + periode
    -->

    <button class="btn btn-primary btn-sm mb-3">
      + Set Budget
    </button>

    <div class="table-responsive">
      <table class="table table-bordered table-sm datatables1">

        <thead class="text-center text-uppercase">
          <tr>
            <th>No</th>
            <th>Mata Anggaran</th>
            <th>Periode</th>
            <th>Budget</th>
            <th>Realisasi</th>
            <th>Variance</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>

          <tr>
            <td class="text-center">1</td>
            <td>Gaji Karyawan</td>
            <td>2025</td>
            <td>Rp 120.000.000</td>
            <td>Rp 110.000.000</td>
            <td class="text-success">+10.000.000</td>
            <td><span class="badge bg-success">On Track</span></td>
            <td class="text-center">
              <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
            </td>
          </tr>

          <tr>
            <td class="text-center">2</td>
            <td>Marketing</td>
            <td>2025</td>
            <td>Rp 80.000.000</td>
            <td>Rp 95.000.000</td>
            <td class="text-danger">-15.000.000</td>
            <td><span class="badge bg-danger">Over Budget</span></td>
            <td class="text-center">
              <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
            </td>
          </tr>

          <tr>
            <td class="text-center">3</td>
            <td>Sewa Kantor</td>
            <td>2025</td>
            <td>Rp 60.000.000</td>
            <td>Rp 60.000.000</td>
            <td class="text-muted">0</td>
            <td><span class="badge bg-success">On Track</span></td>
            <td class="text-center">
              <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
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
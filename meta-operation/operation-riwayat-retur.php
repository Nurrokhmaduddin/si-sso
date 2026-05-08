<!-- FILE : operation-riwayat-retur.php -->

<?php $page = 'operation-riwayat-retur'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height:100vh;">

<!-- ===================================================== -->
<!-- HEADER -->
<!-- ===================================================== -->
<section class="content-header">
  <div class="container-fluid">

    <h3>Riwayat Retur Barang</h3>

    <p class="text-muted">
      Audit lengkap proses retur: alasan retur, kondisi barang, dan status approval.
    </p>

  </div>
</section>

<!-- ===================================================== -->
<!-- CONTENT -->
<!-- ===================================================== -->
<section class="content">
<div class="container-fluid">

<style>
.audit-card{
  border-radius:14px;
  box-shadow:0 2px 10px rgba(0,0,0,.08);
  margin-bottom:20px;
}
.badge-soft{
  font-size:11px;
  padding:5px 8px;
  border-radius:8px;
}
</style>

<!-- KPI SUMMARY -->
<div class="row">

  <div class="col-md-3">
    <div class="card audit-card">
      <div class="card-body">
        <h4 class="text-danger">18</h4>
        <small>Total Retur</small>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card audit-card">
      <div class="card-body">
        <h4 class="text-warning">7</h4>
        <small>Pending Approval</small>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card audit-card">
      <div class="card-body">
        <h4 class="text-success">11</h4>
        <small>Approved Retur</small>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card audit-card">
      <div class="card-body">
        <h4 class="text-primary">Rp 85 JT</h4>
        <small>Total Value Retur</small>
      </div>
    </div>
  </div>

</div>

<!-- TABLE -->
<div class="card audit-card">

  <div class="card-header bg-danger text-white">
    Retur Transaction Log
  </div>

  <div class="card-body table-responsive">

    <table class="table table-bordered table-hover align-middle">

      <thead class="table-dark text-center">
        <tr>
          <th>Retur ID</th>
          <th>Customer</th>
          <th>SKU</th>
          <th>Qty</th>
          <th>Reason</th>
          <th>Condition</th>
          <th>Status</th>
          <th>Created By</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>RT-001</td>
          <td>PT Maju Jaya</td>
          <td>FG-001</td>
          <td>5</td>
          <td>Barang rusak saat delivery</td>
          <td>Damaged</td>
          <td><span class="badge bg-warning text-dark">Pending</span></td>
          <td>Sales A</td>
        </tr>

        <tr>
          <td>RT-002</td>
          <td>CV Teknik Abadi</td>
          <td>FG-010</td>
          <td>2</td>
          <td>Salah kirim item</td>
          <td>Good</td>
          <td><span class="badge bg-success">Approved</span></td>
          <td>Sales B</td>
        </tr>

      </tbody>

    </table>

  </div>

</div>

</div>
</section>

</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
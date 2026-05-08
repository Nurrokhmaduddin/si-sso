<!-- FILE : operation-riwayat-stock-adjustment.php -->

<?php $page = 'operation-riwayat-stock-adjustment'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height:100vh;">

<!-- ===================================================== -->
<!-- HEADER -->
<!-- ===================================================== -->
<section class="content-header">
  <div class="container-fluid">

    <h3>Riwayat Stock Adjustment</h3>

    <p class="text-muted">
      Audit trail perubahan stok: penyesuaian manual, koreksi, dan validasi gudang.
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
.timeline-badge{
  font-size:11px;
  padding:5px 8px;
  border-radius:8px;
}
</style>

<!-- TABLE -->
<div class="card audit-card">

  <div class="card-header bg-dark text-white">
    Stock Adjustment Log
  </div>

  <div class="card-body table-responsive">

    <table class="table table-bordered table-hover align-middle">

      <thead class="table-dark text-center">
        <tr>
          <th>Waktu</th>
          <th>User</th>
          <th>SKU</th>
          <th>Before</th>
          <th>After</th>
          <th>Reason</th>
          <th>Type</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>2026-05-01 08:12</td>
          <td>Admin Gudang</td>
          <td>FG-001</td>
          <td>120</td>
          <td>115</td>
          <td>Stock opname correction</td>
          <td><span class="badge bg-warning text-dark">Adjustment</span></td>
        </tr>

        <tr>
          <td>2026-05-02 10:40</td>
          <td>Supervisor</td>
          <td>FG-002</td>
          <td>80</td>
          <td>85</td>
          <td>Barang ditemukan selisih</td>
          <td><span class="badge bg-info">Correction</span></td>
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
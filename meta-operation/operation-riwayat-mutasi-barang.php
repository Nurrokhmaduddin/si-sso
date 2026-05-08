<!-- FILE : operation-riwayat-mutasi-barang.php -->

<?php $page = 'operation-riwayat-mutasi-barang'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height:100vh;">

<section class="content-header">
  <div class="container-fluid">

    <h3>Riwayat Mutasi Barang</h3>

    <p class="text-muted">
      Histori perpindahan barang antar gudang / lokasi.
    </p>

  </div>
</section>

<section class="content">
<div class="container-fluid">

<style>
.audit-card{
  border-radius:14px;
  box-shadow:0 2px 10px rgba(0,0,0,.08);
}
</style>

<div class="card audit-card">

  <div class="card-header bg-primary text-white">
    Stock Transfer Log
  </div>

  <div class="card-body table-responsive">

    <table class="table table-bordered table-hover align-middle">

      <thead class="table-dark text-center">
        <tr>
          <th>Tanggal</th>
          <th>SKU</th>
          <th>From</th>
          <th>To</th>
          <th>Qty</th>
          <th>User</th>
          <th>Status</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>2026-05-03</td>
          <td>FG-003</td>
          <td>Gudang A</td>
          <td>Gudang B</td>
          <td>50</td>
          <td>Operator 1</td>
          <td><span class="badge bg-success">Completed</span></td>
        </tr>

        <tr>
          <td>2026-05-04</td>
          <td>FG-010</td>
          <td>Gudang B</td>
          <td>Outlet Jakarta</td>
          <td>20</td>
          <td>Logistic</td>
          <td><span class="badge bg-warning text-dark">Pending QC</span></td>
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
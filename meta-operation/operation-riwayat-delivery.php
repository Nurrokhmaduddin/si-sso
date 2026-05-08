<!-- FILE : operation-riwayat-delivery.php -->

<?php $page = 'operation-riwayat-delivery'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height:100vh;">

<section class="content-header">
  <div class="container-fluid">

    <h3>Riwayat Delivery Barang</h3>

    <p class="text-muted">
      Audit pengiriman barang: status, waktu, dan tracking distribusi.
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

  <div class="card-header bg-success text-white">
    Delivery History Log
  </div>

  <div class="card-body table-responsive">

    <table class="table table-bordered table-hover align-middle">

      <thead class="table-dark text-center">
        <tr>
          <th>DO Number</th>
          <th>Customer</th>
          <th>SKU</th>
          <th>Qty</th>
          <th>Driver</th>
          <th>Status</th>
          <th>Timestamp</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>DO-001</td>
          <td>PT Maju Jaya</td>
          <td>FG-001</td>
          <td>10</td>
          <td>Andi</td>
          <td><span class="badge bg-success">Delivered</span></td>
          <td>2026-05-05 14:22</td>
        </tr>

        <tr>
          <td>DO-002</td>
          <td>CV Global Teknik</td>
          <td>FG-002</td>
          <td>5</td>
          <td>Budi</td>
          <td><span class="badge bg-warning text-dark">On Route</span></td>
          <td>2026-05-05 16:10</td>
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
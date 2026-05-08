<!-- FILE : sales-audit-price-change.php -->
<?php $page = 'sales-audit-price-change'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">
    <h3>Audit Perubahan Harga</h3>
    <p class="text-muted">Tracking perubahan harga & diskon produk.</p>
  </div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
  <div class="card-header bg-warning">
    Price Change Log
  </div>

  <div class="card-body table-responsive">

    <table class="table table-bordered table-hover">
      <thead class="table-dark text-center">
        <tr>
          <th>Produk</th>
          <th>Harga Lama</th>
          <th>Harga Baru</th>
          <th>User</th>
          <th>Waktu</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>Produk A</td>
          <td>Rp 100.000</td>
          <td>Rp 95.000</td>
          <td>Admin</td>
          <td>11:00</td>
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
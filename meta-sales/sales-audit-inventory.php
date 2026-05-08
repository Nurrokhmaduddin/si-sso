<!-- FILE : sales-audit-inventory.php -->
<?php $page = 'sales-audit-inventory'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">
    <h3>Audit Inventory Movement</h3>
    <p class="text-muted">Jejak keluar masuk barang dari transaksi sales.</p>
  </div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
  <div class="card-header bg-dark text-white">
    Inventory Movement Log
  </div>

  <div class="card-body table-responsive">

    <table class="table table-bordered table-hover">
      <thead class="table-dark text-center">
        <tr>
          <th>Produk</th>
          <th>Type</th>
          <th>Qty</th>
          <th>Reference</th>
          <th>Waktu</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>Produk A</td>
          <td>OUT</td>
          <td>5</td>
          <td>SO-001</td>
          <td>13:00</td>
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
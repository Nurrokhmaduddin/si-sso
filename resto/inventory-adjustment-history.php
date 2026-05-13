<?php $page = 'inventory-adjustment-history'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">
    <h3>Adjustment History</h3>
    <p class="text-muted">Catatan koreksi stok (manual adjustment).</p>
  </div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
<div class="card-body table-responsive">

<table class="table table-bordered table-sm">

<thead class="table-dark text-center">
<tr>
  <th>Waktu</th>
  <th>Item</th>
  <th>Type</th>
  <th>Qty</th>
  <th>Alasan</th>
  <th>User</th>
</tr>
</thead>

<tbody>
<tr>
  <td>2026-05-04</td>
  <td>Ayam</td>
  <td>Minus</td>
  <td>-5</td>
  <td>Rusak</td>
  <td>Admin</td>
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
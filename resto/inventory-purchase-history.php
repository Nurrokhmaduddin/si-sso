<?php $page = 'inventory-purchase-history'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">
    <h3>Purchase History</h3>
    <p class="text-muted">Riwayat semua transaksi pembelian (PO → GRN).</p>
  </div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
<div class="card-body table-responsive">

<table class="table table-sm table-striped">

<thead class="table-dark text-center">
<tr>
  <th>Waktu</th>
  <th>PO Number</th>
  <th>Supplier</th>
  <th>Total</th>
  <th>Status</th>
</tr>
</thead>

<tbody>
<tr>
  <td>2026-05-05 09:00</td>
  <td>PO-001</td>
  <td>PT Sumber Ayam</td>
  <td>4.200.000</td>
  <td><span class="badge bg-success">Received</span></td>
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
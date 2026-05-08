<!-- FILE : sales-laporan-inventory-movement.php -->
<?php $page = 'sales-laporan-inventory-movement'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Laporan Inventory Movement</h3>
<p class="text-muted">
Pergerakan stok barang masuk dan keluar.
</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">

<div class="card-header bg-warning">
Inventory Movement
</div>

<div class="card-body table-responsive">

<table class="table table-bordered">

<thead class="table-dark">
<tr>
<th>Tanggal</th>
<th>Produk</th>
<th>IN</th>
<th>OUT</th>
<th>Saldo</th>
</tr>
</thead>

<tbody>

<tr>
<td>08/05/2026</td>
<td>Laptop Asus</td>
<td>20</td>
<td>5</td>
<td>55</td>
</tr>

<tr>
<td>08/05/2026</td>
<td>Printer Epson</td>
<td>10</td>
<td>2</td>
<td>28</td>
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
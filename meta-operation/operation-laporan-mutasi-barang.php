<!-- FILE : operation-laporan-mutasi-barang.php -->
<?php $page = 'operation-laporan-mutasi-barang'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Laporan Mutasi Barang</h3>
<p class="text-muted">Pergerakan barang antar gudang dan transaksi keluar masuk.</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
<div class="card-header bg-dark text-white">
Stock Movement Log
</div>

<div class="card-body table-responsive">

<table class="table table-bordered">
<thead class="table-dark text-center">
<tr>
<th>Tanggal</th>
<th>SKU</th>
<th>From</th>
<th>To</th>
<th>Qty</th>
</tr>
</thead>

<tbody>
<tr>
<td>01/05</td>
<td>P-001</td>
<td>Gudang A</td>
<td>Gudang B</td>
<td>50</td>
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
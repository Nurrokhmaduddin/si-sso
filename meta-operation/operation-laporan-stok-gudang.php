<!-- FILE : operation-laporan-stok-gudang.php -->
<?php $page = 'operation-laporan-stok-gudang'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Laporan Stok Gudang</h3>
<p class="text-muted">Rekap posisi stok akhir periode di seluruh warehouse.</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
<div class="card-header bg-success text-white">
Inventory Summary
</div>

<div class="card-body table-responsive">

<table class="table table-bordered">
<thead class="table-dark text-center">
<tr>
<th>SKU</th>
<th>Product</th>
<th>Stock</th>
<th>Warehouse</th>
</tr>
</thead>

<tbody>
<tr>
<td>P-001</td>
<td>Pump Industrial</td>
<td>120</td>
<td>Gudang Utama</td>
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
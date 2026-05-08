<!-- FILE : operation-laporan-stock-aging.php -->
<?php $page = 'operation-laporan-stock-aging'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Laporan Stock Aging</h3>
<p class="text-muted">Analisis umur stok untuk identifikasi slow moving inventory.</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
<div class="card-header bg-danger text-white">
Stock Aging Analysis
</div>

<div class="card-body table-responsive">

<table class="table table-bordered">
<thead class="table-dark text-center">
<tr>
<th>SKU</th>
<th>Product</th>
<th>Age</th>
<th>Status</th>
</tr>
</thead>

<tbody>
<tr>
<td>P-001</td>
<td>Pump Industrial</td>
<td>120 Hari</td>
<td><span class="badge bg-danger">Slow Moving</span></td>
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
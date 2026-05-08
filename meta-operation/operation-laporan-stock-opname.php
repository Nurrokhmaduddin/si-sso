<!-- FILE : operation-laporan-stock-opname.php -->
<?php $page = 'operation-laporan-stock-opname'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Laporan Stock Opname</h3>
<p class="text-muted">Hasil perhitungan fisik vs sistem stok.</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
<div class="card-header bg-warning text-dark">
Stock Audit Result
</div>

<div class="card-body table-responsive">

<table class="table table-bordered">
<thead class="table-dark text-center">
<tr>
<th>SKU</th>
<th>System</th>
<th>Physical</th>
<th>Selisih</th>
</tr>
</thead>

<tbody>
<tr>
<td>P-001</td>
<td>100</td>
<td>98</td>
<td class="text-danger">-2</td>
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
<!-- FILE : operation-laporan-stock-valuation.php -->
<?php $page = 'operation-laporan-stock-valuation'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Laporan Stock Valuation</h3>
<p class="text-muted">Nilai total inventory berdasarkan metode valuation.</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
<div class="card-header bg-primary text-white">
Inventory Valuation Report
</div>

<div class="card-body table-responsive">

<table class="table table-bordered">
<thead class="table-dark text-center">
<tr>
<th>SKU</th>
<th>Qty</th>
<th>Cost</th>
<th>Total Value</th>
</tr>
</thead>

<tbody>
<tr>
<td>P-001</td>
<td>100</td>
<td>Rp 1.000.000</td>
<td>Rp 100 JT</td>
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
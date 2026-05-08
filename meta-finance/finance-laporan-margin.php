<!-- FILE : finance-laporan-margin.php -->

<?php $page = 'finance-laporan-margin'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3>Laporan Margin</h3>
<p class="text-muted">
Analisa margin keuntungan per unit bisnis.
</p>

</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">

<div class="card-header bg-primary text-white d-flex justify-content-between">

<h5 class="mb-0">
Margin Report
</h5>

<div>
<button class="btn btn-success btn-sm">Excel</button>
<button class="btn btn-danger btn-sm">PDF</button>
</div>

</div>

<div class="card-body table-responsive">

<table class="table table-bordered">

<thead class="table-dark">
<tr>
<th>Unit Bisnis</th>
<th>Revenue</th>
<th>Expense</th>
<th>Margin</th>
</tr>
</thead>

<tbody>

<tr>
<td>Cafe</td>
<td class="text-success fw-bold">320.000.000</td>
<td class="text-danger fw-bold">180.000.000</td>
<td><span class="badge bg-success">43%</span></td>
</tr>

<tr>
<td>Retail</td>
<td class="text-success fw-bold">280.000.000</td>
<td class="text-danger fw-bold">210.000.000</td>
<td><span class="badge bg-warning text-dark">25%</span></td>
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
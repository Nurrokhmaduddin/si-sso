<!-- FILE : finance-analisa-cashflow.php -->

<?php $page = 'finance-analisa-cashflow'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3>Analisa Cashflow</h3>

<p class="text-muted">
Analisa pola arus kas perusahaan dan kestabilan cashflow.
</p>

</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">

<div class="card-header bg-primary text-white d-flex justify-content-between">

<h5 class="mb-0">
Cashflow Analysis
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
<th>Periode</th>
<th>Cash In</th>
<th>Cash Out</th>
<th>Net Cashflow</th>
</tr>
</thead>

<tbody>

<tr>
<td>Jan 2026</td>
<td class="text-success fw-bold">220.000.000</td>
<td class="text-danger fw-bold">150.000.000</td>
<td class="fw-bold">70.000.000</td>
</tr>

<tr>
<td>Feb 2026</td>
<td class="text-success fw-bold">280.000.000</td>
<td class="text-danger fw-bold">190.000.000</td>
<td class="fw-bold">90.000.000</td>
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
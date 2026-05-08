<!-- FILE : finance-analisa-profit.php -->

<?php $page = 'finance-analisa-profit'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3>Analisa Profit</h3>

<p class="text-muted">
Analisa profitabilitas perusahaan berdasarkan unit bisnis.
</p>

</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">

<div class="card-header bg-success text-white d-flex justify-content-between">

<h5 class="mb-0">
Profit Analysis
</h5>

<div>
<button class="btn btn-light btn-sm">Excel</button>
<button class="btn btn-danger btn-sm">PDF</button>
</div>

</div>

<div class="card-body table-responsive">

<table class="table table-bordered">

<thead class="table-dark">
<tr>
<th>Bisnis</th>
<th>Revenue</th>
<th>Profit</th>
<th>Margin</th>
</tr>
</thead>

<tbody>

<tr>
<td>Cafe</td>
<td>500.000.000</td>
<td class="text-success fw-bold">180.000.000</td>
<td>36%</td>
</tr>

<tr>
<td>Retail</td>
<td>300.000.000</td>
<td class="text-success fw-bold">75.000.000</td>
<td>25%</td>
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
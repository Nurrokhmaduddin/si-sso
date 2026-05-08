<!-- FILE : finance-analisa-cost.php -->

<?php $page = 'finance-analisa-cost'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3>Analisa Cost</h3>

<p class="text-muted">
Analisa biaya operasional perusahaan.
</p>

</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">

<div class="card-header bg-danger text-white d-flex justify-content-between">

<h5 class="mb-0">
Cost Analysis
</h5>

<div>
<button class="btn btn-light btn-sm">Excel</button>
<button class="btn btn-warning btn-sm">PDF</button>
</div>

</div>

<div class="card-body table-responsive">

<table class="table table-bordered">

<thead class="table-dark">
<tr>
<th>Kategori</th>
<th>Biaya</th>
<th>Persentase</th>
</tr>
</thead>

<tbody>

<tr>
<td>Payroll</td>
<td class="text-danger fw-bold">220.000.000</td>
<td>43%</td>
</tr>

<tr>
<td>Operasional</td>
<td class="text-danger fw-bold">110.000.000</td>
<td>21%</td>
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
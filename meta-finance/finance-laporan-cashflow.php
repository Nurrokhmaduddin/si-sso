<!-- ========================================================= -->
<!-- FILE : finance-laporan-cashflow.php -->
<!-- STYLE : HYBRID REPORT -->
<!-- FOKUS :
- cashflow perusahaan
- cash in vs cash out
- saldo akhir kas
========================================================= -->

<?php $page = 'finance-laporan-cashflow'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3 class="mb-0">
  Laporan Cashflow
</h3>

<p class="text-muted mb-0">
  Monitoring arus kas masuk dan keluar perusahaan.
</p>

</div>
</section>

<section class="content">
<div class="container-fluid">

<style>
.report-card{
border-radius:14px;
overflow:hidden;
box-shadow:0 2px 10px rgba(0,0,0,.08);
}
</style>

<div class="card report-card">

<div class="card-header bg-success text-white">

<div class="d-flex justify-content-between align-items-center">

<h5 class="mb-0">
Cashflow Report
</h5>

<div>
<button class="btn btn-light btn-sm">
Export Excel
</button>

<button class="btn btn-danger btn-sm">
PDF
</button>
</div>

</div>

</div>

<div class="card-body table-responsive">

<table class="table table-bordered">

<thead class="table-dark text-center">
<tr>
<th>Periode</th>
<th>Cash In</th>
<th>Cash Out</th>
<th>Saldo</th>
</tr>
</thead>

<tbody>

<tr>
<td>Januari 2026</td>
<td class="text-success fw-bold">220.000.000</td>
<td class="text-danger fw-bold">120.000.000</td>
<td><b>100.000.000</b></td>
</tr>

<tr>
<td>Februari 2026</td>
<td class="text-success fw-bold">280.000.000</td>
<td class="text-danger fw-bold">150.000.000</td>
<td><b>130.000.000</b></td>
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
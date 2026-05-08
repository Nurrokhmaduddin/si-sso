<!-- ========================================================= -->
<!-- FILE : finance-laporan-revenue.php -->
<!-- FOKUS :
- laporan pendapatan
- revenue source
- business income
========================================================= -->

<?php $page = 'finance-laporan-revenue'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3 class="mb-0">
  Laporan Revenue
</h3>

<p class="text-muted mb-0">
  Analisa sumber pendapatan perusahaan.
</p>

</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">

<div class="card-header bg-info text-white d-flex justify-content-between">

<h5 class="mb-0">
Revenue Report
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
<th>Sumber Revenue</th>
<th>Nominal</th>
<th>Kontribusi</th>
</tr>
</thead>

<tbody>

<tr>
<td>Penjualan Retail</td>
<td class="text-success fw-bold">420.000.000</td>
<td>49%</td>
</tr>

<tr>
<td>Penjualan Online</td>
<td class="text-success fw-bold">280.000.000</td>
<td>33%</td>
</tr>

<tr>
<td>Project Client</td>
<td class="text-success fw-bold">150.000.000</td>
<td>18%</td>
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
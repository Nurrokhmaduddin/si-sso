<!-- FILE : sales-laporan-penjualan-bulanan.php -->
<?php $page = 'sales-laporan-penjualan-bulanan'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Laporan Penjualan Bulanan</h3>
<p class="text-muted">
Summary performa penjualan bulanan.
</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="row">

<div class="col-md-3">
<div class="small-box bg-success">
<div class="inner">
<h3>Rp 2.4 M</h3>
<p>Total Sales</p>
</div>
<div class="icon">
<i class="fas fa-chart-line"></i>
</div>
</div>
</div>

<div class="col-md-3">
<div class="small-box bg-info">
<div class="inner">
<h3>418</h3>
<p>Total Invoice</p>
</div>
<div class="icon">
<i class="fas fa-file-invoice"></i>
</div>
</div>
</div>

</div>

<div class="card">
<div class="card-header bg-primary text-white">
Trend Penjualan Bulanan
</div>

<div class="card-body">

<div class="alert alert-info">
Area Chart :
Jan - Dec Revenue Trend
</div>

<table class="table table-bordered">

<thead class="table-dark">
<tr>
<th>Bulan</th>
<th>Total Sales</th>
<th>Growth</th>
</tr>
</thead>

<tbody>

<tr>
<td>April</td>
<td>Rp 2.1 M</td>
<td class="text-success">+12%</td>
</tr>

<tr>
<td>Mei</td>
<td>Rp 2.4 M</td>
<td class="text-success">+15%</td>
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
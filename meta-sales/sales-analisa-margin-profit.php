<!-- FILE : sales-analisa-margin-profit.php -->
<?php $page = 'sales-analisa-margin-profit'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3>Analisa Margin Profit</h3>

<p class="text-muted">
Analisa profitabilitas penjualan dan margin bisnis.
</p>

</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="row">

<div class="col-md-4">

<div class="small-box bg-success">
<div class="inner">
<h3>31.8%</h3>
<p>Gross Margin</p>
</div>
<div class="icon">
<i class="fas fa-chart-line"></i>
</div>
</div>

</div>

<div class="col-md-4">

<div class="small-box bg-info">
<div class="inner">
<h3>Rp 840 JT</h3>
<p>Total Profit</p>
</div>
<div class="icon">
<i class="fas fa-wallet"></i>
</div>
</div>

</div>

<div class="col-md-4">

<div class="small-box bg-warning">
<div class="inner">
<h3>12%</h3>
<p>Discount Ratio</p>
</div>
<div class="icon">
<i class="fas fa-percent"></i>
</div>
</div>

</div>

</div>

<div class="card">

<div class="card-header bg-dark text-white">
Margin Analysis by Product
</div>

<div class="card-body table-responsive">

<table class="table table-bordered">

<thead class="table-dark">
<tr>
<th>Produk</th>
<th>Revenue</th>
<th>COGS</th>
<th>Profit</th>
<th>Margin</th>
</tr>
</thead>

<tbody>

<tr>
<td>Laptop Asus</td>
<td>Rp 520 JT</td>
<td>Rp 390 JT</td>
<td class="text-success">Rp 130 JT</td>
<td class="text-success">25%</td>
</tr>

<tr>
<td>Monitor LG</td>
<td>Rp 240 JT</td>
<td>Rp 198 JT</td>
<td class="text-success">Rp 42 JT</td>
<td class="text-warning">17%</td>
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
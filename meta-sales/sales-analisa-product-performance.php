<!-- FILE : sales-analisa-product-performance.php -->
<?php $page = 'sales-analisa-product-performance'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3>Analisa Product Performance</h3>

<p class="text-muted">
Analisa performa produk best seller vs slow moving.
</p>

</div>
</section>

<section class="content">
<div class="container-fluid">

<style>

.analysis-card{
  border-radius:14px;
  box-shadow:0 2px 10px rgba(0,0,0,.08);
  margin-bottom:24px;
}

.metric-box{
  border-radius:12px;
  padding:20px;
  color:#fff;
}

</style>

<div class="row">

<div class="col-md-3">
<div class="metric-box bg-success">
<h3>142</h3>
<p>Best Seller SKU</p>
</div>
</div>

<div class="col-md-3">
<div class="metric-box bg-danger">
<h3>18</h3>
<p>Slow Moving</p>
</div>
</div>

<div class="col-md-3">
<div class="metric-box bg-info">
<h3>82%</h3>
<p>Sell Through Rate</p>
</div>
</div>

<div class="col-md-3">
<div class="metric-box bg-warning text-dark">
<h3>Rp 4.2 M</h3>
<p>Total Revenue</p>
</div>
</div>

</div>

<div class="card analysis-card">

<div class="card-header bg-primary text-white">
Trend Product Performance
</div>

<div class="card-body">

<div class="alert alert-info">
Chart Area :
Top Product Revenue Contribution.
</div>

<table class="table table-bordered table-hover">

<thead class="table-dark">
<tr>
<th>Produk</th>
<th>Qty</th>
<th>Revenue</th>
<th>Growth</th>
<th>Status</th>
</tr>
</thead>

<tbody>

<tr>
<td>Laptop Asus</td>
<td>122</td>
<td>Rp 1.2 M</td>
<td class="text-success">+18%</td>
<td>
<span class="badge bg-success">
Best Seller
</span>
</td>
</tr>

<tr>
<td>Printer Epson</td>
<td>12</td>
<td>Rp 88 JT</td>
<td class="text-danger">-12%</td>
<td>
<span class="badge bg-danger">
Slow Moving
</span>
</td>
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
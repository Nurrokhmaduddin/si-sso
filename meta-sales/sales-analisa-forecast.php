<!-- FILE : sales-analisa-forecast.php -->
<?php $page = 'sales-analisa-forecast'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3>Forecast Penjualan</h3>

<p class="text-muted">
Prediksi penjualan dan revenue mendatang.
</p>

</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="row">

<div class="col-md-4">

<div class="card bg-success">

<div class="card-body">

<h3>Rp 3.2 M</h3>
<p>Forecast Revenue Next Month</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card bg-info">

<div class="card-body">

<h3>18%</h3>
<p>Projected Growth</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card bg-warning">

<div class="card-body">

<h3>84%</h3>
<p>Forecast Accuracy</p>

</div>

</div>

</div>

</div>

<div class="card">

<div class="card-header bg-dark text-white">
Sales Forecast Analysis
</div>

<div class="card-body">

<div class="alert alert-info">
Line Chart :
Forecast Revenue 6 Bulan Mendatang.
</div>

<table class="table table-bordered">

<thead class="table-dark">
<tr>
<th>Bulan</th>
<th>Forecast</th>
<th>Growth</th>
</tr>
</thead>

<tbody>

<tr>
<td>Juni</td>
<td>Rp 3.2 M</td>
<td class="text-success">+18%</td>
</tr>

<tr>
<td>Juli</td>
<td>Rp 3.6 M</td>
<td class="text-success">+12%</td>
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
<!-- FILE : sales-laporan-salesperson.php -->
<?php $page = 'sales-laporan-salesperson'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Laporan Sales Person</h3>
<p class="text-muted">
Performa penjualan masing-masing sales.
</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="row">

<div class="col-md-4">
<div class="small-box bg-success">
<div class="inner">
<h3>18</h3>
<p>Total Sales Active</p>
</div>
<div class="icon">
<i class="fas fa-users"></i>
</div>
</div>
</div>

</div>

<div class="card">

<div class="card-header bg-dark text-white">
Performa Sales
</div>

<div class="card-body table-responsive">

<table class="table table-bordered">

<thead class="table-dark">
<tr>
<th>Sales</th>
<th>Total SO</th>
<th>Revenue</th>
<th>Target</th>
<th>Achievement</th>
</tr>
</thead>

<tbody>

<tr>
<td>Budi</td>
<td>48</td>
<td>Rp 820.000.000</td>
<td>Rp 700.000.000</td>
<td class="text-success">117%</td>
</tr>

<tr>
<td>Andi</td>
<td>31</td>
<td>Rp 520.000.000</td>
<td>Rp 600.000.000</td>
<td class="text-warning">86%</td>
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
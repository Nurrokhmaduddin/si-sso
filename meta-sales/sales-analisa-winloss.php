<!-- FILE : sales-analisa-winloss.php -->
<?php $page = 'sales-analisa-winloss'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3>Analisa Win / Loss Sales</h3>

<p class="text-muted">
Analisa peluang deal berhasil dan gagal.
</p>

</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="row">

<div class="col-md-6">

<div class="card card-success">

<div class="card-header">
Won Deals
</div>

<div class="card-body">

<h2 class="text-success">68%</h2>

<p>
Total quotation berhasil closing.
</p>

</div>

</div>

</div>

<div class="col-md-6">

<div class="card card-danger">

<div class="card-header">
Lost Deals
</div>

<div class="card-body">

<h2 class="text-danger">32%</h2>

<p>
Peluang deal gagal closing.
</p>

</div>

</div>

</div>

</div>

<div class="card">

<div class="card-header bg-primary text-white">
Reason Analysis
</div>

<div class="card-body table-responsive">

<table class="table table-bordered">

<thead class="table-dark">
<tr>
<th>Reason</th>
<th>Total</th>
<th>Percentage</th>
</tr>
</thead>

<tbody>

<tr>
<td>Harga Kompetitor</td>
<td>22</td>
<td>44%</td>
</tr>

<tr>
<td>Budget Customer</td>
<td>14</td>
<td>28%</td>
</tr>

<tr>
<td>Delivery Lama</td>
<td>8</td>
<td>16%</td>
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
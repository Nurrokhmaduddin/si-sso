<!-- FILE : operation-monitor-understock.php -->
<?php $page = 'operation-monitor-understock'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Understock Monitoring</h3>
<p class="text-muted">Monitoring permintaan tinggi dengan stok tidak mencukupi.</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="row">

<div class="col-md-4">
<div class="alert alert-danger">
<h4>15 SKU</h4>
Critical Demand
</div>
</div>

<div class="col-md-4">
<div class="alert alert-warning">
<h4>28 SKU</h4>
Stock Below Demand
</div>
</div>

<div class="col-md-4">
<div class="alert alert-success">
<h4>Reorder Active</h4>
Auto Procurement
</div>
</div>

</div>

<div class="card">
<div class="card-header bg-danger text-white">Understock List</div>
<div class="card-body table-responsive">

<table class="table table-bordered">
<thead class="table-dark text-center">
<tr>
<th>Product</th>
<th>Stock</th>
<th>Demand</th>
<th>Status</th>
</tr>
</thead>
<tbody>

<tr>
<td>Industrial Pump</td>
<td class="text-danger">5</td>
<td>50</td>
<td><span class="badge bg-danger">UNDERSTOCK</span></td>
</tr>

<tr>
<td>Motor Gear</td>
<td class="text-warning">12</td>
<td>40</td>
<td><span class="badge bg-warning text-dark">LOW</span></td>
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
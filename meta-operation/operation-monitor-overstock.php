<!-- FILE : operation-monitor-overstock.php -->
<?php $page = 'operation-monitor-overstock'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Overstock Monitoring</h3>
<p class="text-muted">Deteksi barang menumpuk di gudang (slow moving risk).</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="row">

<div class="col-md-4">
<div class="alert alert-danger">
<h4>21 SKU</h4>
Overstock High Risk
</div>
</div>

<div class="col-md-4">
<div class="alert alert-warning">
<h4>35 SKU</h4>
Slow Moving
</div>
</div>

<div class="col-md-4">
<div class="alert alert-info">
<h4>Low Turnover</h4>
Inventory Risk
</div>
</div>

</div>

<div class="card">
<div class="card-header bg-danger text-white">Overstock Items</div>
<div class="card-body table-responsive">

<table class="table table-bordered">
<thead class="table-dark text-center">
<tr>
<th>Product</th>
<th>Stock</th>
<th>Sales Velocity</th>
<th>Risk</th>
</tr>
</thead>
<tbody>

<tr>
<td>Valve Steel</td>
<td>1.200</td>
<td>Low</td>
<td><span class="badge bg-danger">OVERSTOCK</span></td>
</tr>

<tr>
<td>Pump X</td>
<td>900</td>
<td>Medium</td>
<td><span class="badge bg-warning text-dark">SLOW</span></td>
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
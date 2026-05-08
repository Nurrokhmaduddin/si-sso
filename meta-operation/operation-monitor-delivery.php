<!-- FILE : operation-monitor-delivery.php -->
<?php $page = 'operation-monitor-delivery'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Delivery Monitoring</h3>
<p class="text-muted">Kontrol status pengiriman realtime.</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="row">

<div class="col-md-4">
<div class="alert alert-success">
<h4>92%</h4>
On Time Delivery
</div>
</div>

<div class="col-md-4">
<div class="alert alert-danger">
<h4>11</h4>
Late Shipment
</div>
</div>

<div class="col-md-4">
<div class="alert alert-warning">
<h4>25</h4>
In Transit Delay Risk
</div>
</div>

</div>

<div class="card">
<div class="card-header bg-primary text-white">Shipment Tracking</div>
<div class="card-body table-responsive">

<table class="table table-bordered">
<thead class="table-dark text-center">
<tr>
<th>DO</th>
<th>Customer</th>
<th>Status</th>
<th>ETA</th>
</tr>
</thead>
<tbody>

<tr>
<td>DO-001</td>
<td>PT Maju Jaya</td>
<td><span class="badge bg-warning text-dark">In Transit</span></td>
<td>Today</td>
</tr>

<tr>
<td>DO-002</td>
<td>CV Indo Steel</td>
<td><span class="badge bg-danger">Delayed</span></td>
<td>+2 Days</td>
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
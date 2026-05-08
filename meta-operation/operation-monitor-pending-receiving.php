<!-- FILE : operation-monitor-pending-receiving.php -->
<?php $page = 'operation-monitor-pending-receiving'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Pending Receiving</h3>
<p class="text-muted">Monitoring barang incoming yang belum diterima gudang.</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
<div class="card-header bg-warning text-dark">Pending GRN</div>
<div class="card-body table-responsive">

<table class="table table-bordered">
<thead class="table-dark text-center">
<tr>
<th>PO</th>
<th>Supplier</th>
<th>ETA</th>
<th>Status</th>
</tr>
</thead>
<tbody>

<tr>
<td>PO-001</td>
<td>PT Supplier A</td>
<td>Today</td>
<td><span class="badge bg-warning text-dark">Not Received</span></td>
</tr>

<tr>
<td>PO-002</td>
<td>PT Supplier B</td>
<td>Yesterday</td>
<td><span class="badge bg-danger">Late Receiving</span></td>
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
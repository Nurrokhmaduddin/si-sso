<!-- FILE : operation-laporan-sales-delivery.php -->
<?php $page = 'operation-laporan-sales-delivery'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Laporan Sales Delivery</h3>
<p class="text-muted">Rekap pengiriman berdasarkan order sales.</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
<div class="card-header bg-success text-white">
Delivery Summary
</div>

<div class="card-body table-responsive">

<table class="table table-bordered">
<thead class="table-dark text-center">
<tr>
<th>DO</th>
<th>Customer</th>
<th>Status</th>
<th>Value</th>
</tr>
</thead>

<tbody>
<tr>
<td>DO-001</td>
<td>PT Maju Jaya</td>
<td><span class="badge bg-success">Delivered</span></td>
<td>Rp 120 JT</td>
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
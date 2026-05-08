<!-- FILE : operation-laporan-return-barang.php -->
<?php $page = 'operation-laporan-return-barang'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Laporan Return Barang</h3>
<p class="text-muted">Rekap barang retur dari customer.</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
<div class="card-header bg-warning text-dark">
Return Summary
</div>

<div class="card-body table-responsive">

<table class="table table-bordered">
<thead class="table-dark text-center">
<tr>
<th>Return ID</th>
<th>Customer</th>
<th>Reason</th>
<th>Status</th>
</tr>
</thead>

<tbody>
<tr>
<td>RT-001</td>
<td>PT Maju Jaya</td>
<td>Defect</td>
<td><span class="badge bg-danger">Rejected</span></td>
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
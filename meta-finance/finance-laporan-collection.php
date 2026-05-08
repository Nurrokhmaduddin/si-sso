<!-- FILE : finance-laporan-collection.php -->

<?php $page = 'finance-laporan-collection'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3>Laporan Collection</h3>

<p class="text-muted">
Monitoring performa penagihan piutang client.
</p>

</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">

<div class="card-header bg-warning d-flex justify-content-between">

<h5 class="mb-0 text-dark">
Collection Report
</h5>

<div>
<button class="btn btn-success btn-sm">Excel</button>
<button class="btn btn-danger btn-sm">PDF</button>
</div>

</div>

<div class="card-body table-responsive">

<table class="table table-bordered">

<thead class="table-dark">
<tr>
<th>Client</th>
<th>Invoice</th>
<th>Outstanding</th>
<th>Status</th>
</tr>
</thead>

<tbody>

<tr>
<td>PT Alpha</td>
<td>INV-001</td>
<td class="text-danger fw-bold">15.000.000</td>
<td><span class="badge bg-warning text-dark">Reminder</span></td>
</tr>

<tr>
<td>PT Beta</td>
<td>INV-002</td>
<td class="text-success fw-bold">0</td>
<td><span class="badge bg-success">Paid</span></td>
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
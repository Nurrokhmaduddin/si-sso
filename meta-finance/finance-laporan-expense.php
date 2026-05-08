<!-- FILE : finance-laporan-expense.php -->

<?php $page = 'finance-laporan-expense'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3>Laporan Expense</h3>
<p class="text-muted">
Monitoring seluruh pengeluaran perusahaan.
</p>

</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">

<div class="card-header bg-danger text-white d-flex justify-content-between">

<h5 class="mb-0">Expense Report</h5>

<div>
<button class="btn btn-light btn-sm">Excel</button>
<button class="btn btn-warning btn-sm">PDF</button>
</div>

</div>

<div class="card-body table-responsive">

<table class="table table-bordered">

<thead class="table-dark">
<tr>
<th>Kategori</th>
<th>Nominal</th>
<th>Status</th>
</tr>
</thead>

<tbody>

<tr>
<td>Gaji Karyawan</td>
<td class="text-danger fw-bold">220.000.000</td>
<td><span class="badge bg-success">Paid</span></td>
</tr>

<tr>
<td>Operasional</td>
<td class="text-danger fw-bold">110.000.000</td>
<td><span class="badge bg-warning text-dark">Pending</span></td>
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
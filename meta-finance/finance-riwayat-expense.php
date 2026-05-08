<!-- ========================================================= -->
<!-- FILE: finance-riwayat-expense.php -->
<!-- ========================================================= -->

<?php $page = 'finance-riwayat-expense'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3 class="mb-0">
Riwayat Expense
<button class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalExpense">
<i class="fas fa-filter"></i>
</button>
</h3>

<p class="text-muted">
Histori pengeluaran operasional dan audit expense finance.
</p>

</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card audit-card">

<div class="card-header bg-danger text-white">

<div class="d-flex justify-content-between">

<h5 class="mb-0">
Expense Audit Trail
</h5>

<div class="d-flex gap-2">

<button class="btn btn-light btn-sm"
data-bs-toggle="modal"
data-bs-target="#modalExpense">
Filter
</button>

<button class="btn btn-success btn-sm">
Excel
</button>

</div>

</div>

</div>

<div class="card-body table-responsive">

<table class="table table-bordered table-hover">

<thead class="table-dark text-center">
<tr>
<th>Tanggal</th>
<th>Expense ID</th>
<th>Kategori</th>
<th>Keterangan</th>
<th>Nominal</th>
<th>Status</th>
<th>User</th>
</tr>
</thead>

<tbody>

<tr>
<td>01/05/2026</td>
<td>EXP-001</td>
<td>Operasional</td>
<td>Pembelian ATK</td>
<td class="text-danger fw-bold">
Rp 2.500.000
</td>
<td class="text-center">
<span class="badge bg-success">
Approved
</span>
</td>
<td>finance01</td>
</tr>

<tr>
<td>03/05/2026</td>
<td>EXP-002</td>
<td>Transport</td>
<td>BBM Operasional</td>
<td class="text-danger fw-bold">
Rp 1.200.000
</td>
<td class="text-center">
<span class="badge bg-warning text-dark">
Pending
</span>
</td>
<td>finance02</td>
</tr>

</tbody>

</table>

</div>
</div>

</div>
</section>
</div>

<!-- MODAL -->
<div class="modal fade" id="modalExpense">

<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header bg-danger text-white">
<h5 class="modal-title">
Filter Expense
</h5>
</div>

<div class="modal-body">

<div class="mb-3">
<label>Periode Awal</label>
<input type="date" class="form-control">
</div>

<div class="mb-3">
<label>Periode Akhir</label>
<input type="date" class="form-control">
</div>

</div>

<div class="modal-footer">

<button class="btn btn-secondary" data-bs-dismiss="modal">
Tutup
</button>

<button class="btn btn-danger">
Terapkan
</button>

</div>

</div>
</div>

</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
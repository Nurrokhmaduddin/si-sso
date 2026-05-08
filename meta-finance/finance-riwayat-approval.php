<!-- ========================================================= -->
<!-- FILE: finance-riwayat-approval.php -->
<!-- ========================================================= -->

<?php $page = 'finance-riwayat-approval'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3 class="mb-0">
Riwayat Approval Finance
<button class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalApproval">
<i class="fas fa-filter"></i>
</button>
</h3>

<p class="text-muted">
Audit approval budgeting, expense, invoice dan pengeluaran perusahaan.
</p>

</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card audit-card">

<div class="card-header bg-warning">

<h5 class="mb-0 text-dark">
Approval Audit Ledger
</h5>

</div>

<div class="card-body table-responsive">

<table class="table table-bordered table-hover">

<thead class="table-dark text-center">
<tr>
<th>Tanggal</th>
<th>Dokumen</th>
<th>Jenis</th>
<th>Requester</th>
<th>Approver</th>
<th>Status</th>
<th>Catatan</th>
</tr>
</thead>

<tbody>

<tr>
<td>05/05/2026</td>
<td>EXP-001</td>
<td>Expense</td>
<td>Purchasing</td>
<td>Manager Finance</td>
<td class="text-center">
<span class="badge bg-success">
Approved
</span>
</td>
<td>Budget tersedia</td>
</tr>

<tr>
<td>06/05/2026</td>
<td>BDG-003</td>
<td>Budget</td>
<td>Marketing</td>
<td>Director</td>
<td class="text-center">
<span class="badge bg-danger">
Rejected
</span>
</td>
<td>Melebihi limit budget</td>
</tr>

</tbody>

</table>

</div>
</div>

</div>
</section>
</div>

<!-- MODAL -->
<div class="modal fade" id="modalApproval">

<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header bg-warning">
<h5 class="modal-title">
Filter Approval
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

<button class="btn btn-warning">
Filter
</button>

</div>

</div>
</div>

</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
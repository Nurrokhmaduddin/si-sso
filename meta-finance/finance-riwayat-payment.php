<!-- ========================================================= -->
<!-- FILE: finance-riwayat-payment.php -->
<!-- ========================================================= -->

<?php $page = 'finance-riwayat-payment'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3 class="mb-0">
Riwayat Payment
<button class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalFilterPayment">
<i class="fas fa-filter"></i>
</button>
</h3>

<p class="text-muted">
Audit trail seluruh pembayaran client dan settlement transaksi finance.
</p>

</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card audit-card">

<div class="card-header bg-success text-white">

<div class="d-flex justify-content-between">

<h5 class="mb-0">
Riwayat Payment Ledger
</h5>

<div class="d-flex gap-2">

<button class="btn btn-light btn-sm"
data-bs-toggle="modal"
data-bs-target="#modalFilterPayment">
Filter
</button>

<button class="btn btn-danger btn-sm">
PDF
</button>

</div>

</div>

</div>

<div class="card-body table-responsive">

<table class="table table-bordered table-hover">

<thead class="table-dark text-center">
<tr>
<th>Tanggal</th>
<th>Payment ID</th>
<th>Invoice</th>
<th>Client</th>
<th>Metode</th>
<th>Jumlah</th>
<th>Status</th>
<th>User</th>
</tr>
</thead>

<tbody>

<tr>
<td>02/05/2026</td>
<td>PAY-001</td>
<td>INV-001</td>
<td>PT Aroma</td>
<td>Transfer</td>
<td class="text-success fw-bold">
Rp 15.000.000
</td>
<td class="text-center">
<span class="badge bg-success">
Success
</span>
</td>
<td>finance01</td>
</tr>

<tr>
<td>04/05/2026</td>
<td>PAY-002</td>
<td>INV-004</td>
<td>PT Nusantara</td>
<td>VA BCA</td>
<td class="text-success fw-bold">
Rp 8.500.000
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
<div class="modal fade" id="modalFilterPayment">

<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header bg-success text-white">
<h5 class="modal-title">
Filter Payment
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

<button class="btn btn-success">
Filter
</button>
</div>

</div>
</div>

</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
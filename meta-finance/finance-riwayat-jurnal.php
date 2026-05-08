<!-- ========================================================= -->
<!-- FILE: finance-riwayat-jurnal.php -->
<!-- ========================================================= -->

<?php $page = 'finance-riwayat-jurnal'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3 class="mb-0">
Riwayat Jurnal
<button class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalJurnal">
<i class="fas fa-filter"></i>
</button>
</h3>

<p class="text-muted">
Ledger audit jurnal umum, transaksi debit kredit dan histori posting accounting.
</p>

</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card audit-card">

<div class="card-header bg-primary text-white">

<div class="d-flex justify-content-between">

<h5 class="mb-0">
General Journal Audit Trail
</h5>

<div class="d-flex gap-2">

<button class="btn btn-light btn-sm"
data-bs-toggle="modal"
data-bs-target="#modalJurnal">
Filter
</button>

<button class="btn btn-success btn-sm">
Excel
</button>

<button class="btn btn-danger btn-sm">
PDF
</button>

</div>

</div>

</div>

<div class="card-body table-responsive">

<table class="table table-bordered table-hover align-middle">

<thead class="table-dark text-center">
<tr>
<th>Tanggal</th>
<th>Ref</th>
<th>COA</th>
<th>Keterangan</th>
<th>Debit</th>
<th>Kredit</th>
<th>User</th>
<th>Status</th>
</tr>
</thead>

<tbody>

<tr>
<td>01/05/2026</td>
<td>JU-001</td>
<td>Kas</td>
<td>Penerimaan pembayaran client</td>
<td class="text-success fw-bold">
Rp 12.000.000
</td>
<td>-</td>
<td>finance01</td>
<td class="text-center">
<span class="badge bg-success">
Posted
</span>
</td>
</tr>

<tr>
<td>02/05/2026</td>
<td>JU-002</td>
<td>Beban Operasional</td>
<td>Pembayaran listrik kantor</td>
<td>-</td>
<td class="text-danger fw-bold">
Rp 2.500.000
</td>
<td>finance02</td>
<td class="text-center">
<span class="badge bg-info">
Verified
</span>
</td>
</tr>

</tbody>

</table>

</div>

</div>

</div>
</section>
</div>

<!-- MODAL -->
<div class="modal fade" id="modalJurnal">

<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header bg-primary text-white">

<h5 class="modal-title">
Filter Riwayat Jurnal
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

<button class="btn btn-primary">
Filter
</button>

</div>

</div>
</div>

</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
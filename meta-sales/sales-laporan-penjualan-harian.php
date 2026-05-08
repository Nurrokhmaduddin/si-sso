<!-- FILE : sales-laporan-penjualan-harian.php -->
<?php $page = 'sales-laporan-penjualan-harian'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">
    <h3>Laporan Penjualan Harian</h3>
    <p class="text-muted">
      Rekap transaksi penjualan harian berdasarkan tanggal transaksi.
    </p>
  </div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
<div class="card-header bg-primary text-white">
  Rekap Penjualan Harian
</div>

<div class="card-body">

<div class="row mb-3">

<div class="col-md-3">
<input type="date" class="form-control">
</div>

<div class="col-md-3">
<button class="btn btn-primary">
<i class="fas fa-search"></i> Filter
</button>

<button class="btn btn-success">
<i class="fas fa-file-excel"></i> Export
</button>
</div>

</div>

<div class="table-responsive">

<table class="table table-bordered table-hover">

<thead class="table-dark text-center">
<tr>
<th>Tanggal</th>
<th>Total SO</th>
<th>Qty</th>
<th>Total Penjualan</th>
<th>Retur</th>
<th>Net Sales</th>
</tr>
</thead>

<tbody>

<tr>
<td>08/05/2026</td>
<td>32</td>
<td>210</td>
<td class="text-success fw-bold">Rp 128.000.000</td>
<td class="text-danger">Rp 3.000.000</td>
<td class="fw-bold">Rp 125.000.000</td>
</tr>

<tr>
<td>07/05/2026</td>
<td>28</td>
<td>184</td>
<td class="text-success fw-bold">Rp 102.000.000</td>
<td class="text-danger">Rp 1.500.000</td>
<td class="fw-bold">Rp 100.500.000</td>
</tr>

</tbody>

</table>

</div>

</div>
</div>

</div>
</section>
</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
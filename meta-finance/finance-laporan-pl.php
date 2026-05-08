<!-- ========================================================= -->
<!-- FILE : finance-laporan-pl.php -->
<!-- STYLE : HYBRID (KPI + LEDGER TABLE) -->
<!-- FOKUS :
- laporan laba rugi
- executive summary
- detail akun pendapatan & beban
========================================================= -->

<?php $page = 'finance-laporan-pl'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3 class="mb-0">
  Laporan Profit & Loss
</h3>

<p class="text-muted mb-0">
  Ringkasan profitabilitas perusahaan beserta detail laporan laba rugi.
</p>

</div>
</section>

<section class="content">
<div class="container-fluid">

<style>
.report-card{
  border-radius:14px;
  overflow:hidden;
  box-shadow:0 2px 10px rgba(0,0,0,.08);
  margin-bottom:24px;
}

.summary-box{
  border-radius:12px;
  padding:18px;
  color:#fff;
  margin-bottom:16px;
}

.summary-box h3{
  margin:0;
  font-weight:700;
}
</style>

<!-- KPI -->
<div class="row">

<div class="col-md-3">
<div class="summary-box bg-success">
<h3>Rp 850 Jt</h3>
<p>Total Revenue</p>
</div>
</div>

<div class="col-md-3">
<div class="summary-box bg-danger">
<h3>Rp 510 Jt</h3>
<p>Total Expense</p>
</div>
</div>

<div class="col-md-3">
<div class="summary-box bg-primary">
<h3>Rp 340 Jt</h3>
<p>Net Profit</p>
</div>
</div>

<div class="col-md-3">
<div class="summary-box bg-info">
<h3>40%</h3>
<p>Profit Margin</p>
</div>
</div>

</div>

<!-- REPORT -->
<div class="card report-card">

<div class="card-header bg-primary text-white">

<div class="d-flex justify-content-between align-items-center">

<h5 class="mb-0">
Laporan Laba Rugi
</h5>

<div>
<button class="btn btn-success btn-sm">
<i class="fas fa-file-excel me-1"></i> Export Excel
</button>

<button class="btn btn-danger btn-sm">
<i class="fas fa-file-pdf me-1"></i> Export PDF
</button>
</div>

</div>

</div>

<div class="card-body table-responsive">

<!--
DESAIN:
- hybrid dashboard + ledger
- atas KPI
- bawah laporan detail
- cocok untuk ERP finance
-->

<table class="table table-bordered">

<thead class="table-dark text-center">
<tr>
<th>Akun</th>
<th>Kategori</th>
<th>Nominal</th>
</tr>
</thead>

<tbody>

<tr>
<td>Pendapatan Penjualan</td>
<td><span class="badge bg-success">Revenue</span></td>
<td class="fw-bold text-success">850.000.000</td>
</tr>

<tr>
<td>Beban Operasional</td>
<td><span class="badge bg-danger">Expense</span></td>
<td class="fw-bold text-danger">510.000.000</td>
</tr>

<tr class="table-primary">
<td colspan="2"><b>Net Profit</b></td>
<td><b>340.000.000</b></td>
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
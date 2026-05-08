<!-- ========================================================= -->
<!-- FILE : finance-monitor-overdue.php -->
<!-- STYLE : REALTIME WARNING MONITOR -->
<!-- FOKUS :
- overdue invoice
- overdue payable
- aging warning
- finance risk
========================================================= -->

<?php $page = 'finance-monitor-overdue'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">

    <h3 class="mb-0">
      Monitor Overdue
    </h3>

    <p class="text-muted mb-0">
      Monitoring invoice dan kewajiban yang melewati jatuh tempo.
    </p>

  </div>
</section>

<section class="content">
<div class="container-fluid">

<style>
.monitor-card{
  border-radius:14px;
  overflow:hidden;
  box-shadow:0 2px 10px rgba(0,0,0,.08);
}
</style>

<div class="card monitor-card">

<div class="card-header bg-warning">
  <h5 class="mb-0 text-dark">
    Overdue Monitoring Table
  </h5>
</div>

<div class="card-body table-responsive">

<!--
DESAIN:
- fokus warning dan urgency
- warna warning & danger dominan
- cocok untuk finance controller
-->

<table class="table table-bordered table-hover">

<thead class="table-dark text-center">
<tr>
<th>Ref</th>
<th>Jenis</th>
<th>Partner</th>
<th>Due Date</th>
<th>Overdue</th>
<th>Nominal</th>
<th>Status</th>
</tr>
</thead>

<tbody>

<tr>
<td>INV-001</td>
<td><span class="badge bg-info">Invoice</span></td>
<td>PT Gamma</td>
<td>01/05/2026</td>
<td class="text-danger fw-bold">7 Hari</td>
<td>15.000.000</td>
<td><span class="badge bg-danger">Critical</span></td>
</tr>

<tr>
<td>AP-022</td>
<td><span class="badge bg-secondary">Payable</span></td>
<td>Supplier B</td>
<td>03/05/2026</td>
<td class="text-warning fw-bold">5 Hari</td>
<td>7.000.000</td>
<td><span class="badge bg-warning text-dark">Warning</span></td>
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
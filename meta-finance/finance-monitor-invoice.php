<!-- ========================================================= -->
<!-- FILE : finance-monitor-invoice.php -->
<!-- STYLE : REALTIME MONITORING TABLE -->
<!-- FOKUS :
- monitoring invoice berjalan
- unpaid invoice
- overdue invoice
- payment progress
========================================================= -->

<?php $page = 'finance-monitor-invoice'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">

    <h3 class="mb-0">
      Monitor Invoice
    </h3>

    <p class="text-muted mb-0">
      Monitoring status invoice client secara realtime.
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

<div class="row">

  <div class="col-md-3">
    <div class="summary-box bg-info">
      <h3>182</h3>
      <p>Total Invoice</p>
    </div>
  </div>

  <div class="col-md-3">
    <div class="summary-box bg-success">
      <h3>145</h3>
      <p>Paid Invoice</p>
    </div>
  </div>

  <div class="col-md-3">
    <div class="summary-box bg-warning text-dark">
      <h3>21</h3>
      <p>Overdue</p>
    </div>
  </div>

  <div class="col-md-3">
    <div class="summary-box bg-danger">
      <h3>16</h3>
      <p>Unpaid</p>
    </div>
  </div>

</div>

<div class="card monitor-card">

  <div class="card-header bg-info text-white">
    <h5 class="mb-0">
      Invoice Monitoring Realtime
    </h5>
  </div>

  <div class="card-body table-responsive">

    <!--
    DESAIN:
    - tabel dominan
    - realtime invoice visibility
    - cocok untuk collection team
    -->

    <table class="table table-bordered table-hover">

      <thead class="table-dark text-center">
        <tr>
          <th>Invoice</th>
          <th>Client</th>
          <th>Due Date</th>
          <th>Nominal</th>
          <th>Status</th>
          <th>Progress</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>INV-2026-001</td>
          <td>PT Alpha</td>
          <td>12/05/2026</td>
          <td class="fw-bold">50.000.000</td>
          <td><span class="badge bg-warning text-dark">Overdue</span></td>
          <td>80%</td>
        </tr>

        <tr>
          <td>INV-2026-002</td>
          <td>PT Beta</td>
          <td>18/05/2026</td>
          <td class="fw-bold">22.000.000</td>
          <td><span class="badge bg-success">Paid</span></td>
          <td>100%</td>
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
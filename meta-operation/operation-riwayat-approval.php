<!-- FILE : operation-riwayat-approval.php -->

<?php $page = 'operation-riwayat-approval'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height:100vh;">

<!-- ===================================================== -->
<!-- HEADER -->
<!-- ===================================================== -->
<section class="content-header">
  <div class="container-fluid">

    <h3>Riwayat Approval Operasional</h3>

    <p class="text-muted">
      Tracking semua proses persetujuan: PO, retur, mutasi, dan adjustment.
    </p>

  </div>
</section>

<!-- ===================================================== -->
<!-- CONTENT -->
<!-- ===================================================== -->
<section class="content">
<div class="container-fluid">

<style>
.audit-card{
  border-radius:14px;
  box-shadow:0 2px 10px rgba(0,0,0,.08);
}
.timeline-box{
  border-left:3px solid #dee2e6;
  padding-left:15px;
}
</style>

<!-- KPI -->
<div class="row">

  <div class="col-md-4">
    <div class="card audit-card">
      <div class="card-body">
        <h4 class="text-primary">42</h4>
        <small>Total Approval</small>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card audit-card">
      <div class="card-body">
        <h4 class="text-success">31</h4>
        <small>Approved</small>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card audit-card">
      <div class="card-body">
        <h4 class="text-danger">11</h4>
        <small>Rejected / Pending</small>
      </div>
    </div>
  </div>

</div>

<!-- TABLE -->
<div class="card audit-card">

  <div class="card-header bg-primary text-white">
    Approval Audit Log
  </div>

  <div class="card-body table-responsive">

    <table class="table table-bordered table-hover align-middle">

      <thead class="table-dark text-center">
        <tr>
          <th>Request ID</th>
          <th>Type</th>
          <th>Requester</th>
          <th>Approver</th>
          <th>Action</th>
          <th>Before</th>
          <th>After</th>
          <th>Timestamp</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>AP-001</td>
          <td>Purchase Order</td>
          <td>Admin Gudang</td>
          <td>Manager</td>
          <td><span class="badge bg-success">Approved</span></td>
          <td>Draft</td>
          <td>Approved</td>
          <td>2026-05-06 09:10</td>
        </tr>

        <tr>
          <td>AP-002</td>
          <td>Stock Adjustment</td>
          <td>Supervisor</td>
          <td>Manager</td>
          <td><span class="badge bg-danger">Rejected</span></td>
          <td>Pending</td>
          <td>Rejected</td>
          <td>2026-05-06 11:22</td>
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
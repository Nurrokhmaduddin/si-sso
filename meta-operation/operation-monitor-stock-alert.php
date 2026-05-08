<!-- FILE : operation-monitor-stock-alert.php -->
<?php $page = 'operation-monitor-stock-alert'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height:100vh;">

<section class="content-header">
  <div class="container-fluid">
    <h3>Stock Alert Monitoring</h3>
    <p class="text-muted">Monitoring realtime kondisi stok kritis dan risiko stockout.</p>
  </div>
</section>

<section class="content">
<div class="container-fluid">

<style>
.alert-box{border-radius:14px;padding:18px;color:#fff;margin-bottom:15px;position:relative}
.alert-box i{position:absolute;right:15px;bottom:10px;opacity:.2;font-size:40px}
.table thead th{font-size:13px}
.table tbody td{font-size:13px}
</style>

<div class="row">

  <div class="col-md-3">
    <div class="alert-box bg-danger">
      <h4>18 SKU</h4>
      <p>Stock Out Risk</p>
      <i class="fas fa-times-circle"></i>
    </div>
  </div>

  <div class="col-md-3">
    <div class="alert-box bg-warning text-dark">
      <h4>42 SKU</h4>
      <p>Low Stock</p>
      <i class="fas fa-exclamation-triangle"></i>
    </div>
  </div>

  <div class="col-md-3">
    <div class="alert-box bg-info">
      <h4>312 SKU</h4>
      <p>Normal Stock</p>
      <i class="fas fa-boxes"></i>
    </div>
  </div>

  <div class="col-md-3">
    <div class="alert-box bg-success">
      <h4>8</h4>
      <p>Auto Reorder Trigger</p>
      <i class="fas fa-sync"></i>
    </div>
  </div>

</div>

<div class="card">
<div class="card-header bg-danger text-white">Critical Stock List</div>
<div class="card-body table-responsive">

<table class="table table-bordered">
<thead class="table-dark text-center">
<tr>
<th>SKU</th>
<th>Product</th>
<th>Stock</th>
<th>Min Stock</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<tr>
<td>P-001</td>
<td>Industrial Pump</td>
<td class="text-danger fw-bold">3</td>
<td>20</td>
<td><span class="badge bg-danger">CRITICAL</span></td>
</tr>
<tr>
<td>P-002</td>
<td>Valve Steel</td>
<td class="text-warning fw-bold">12</td>
<td>25</td>
<td><span class="badge bg-warning text-dark">LOW</span></td>
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
<!-- FILE : operation-laporan-fast-moving.php -->

<?php $page = 'operation-laporan-fast-moving'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height:100vh;">

<!-- ===================================================== -->
<!-- HEADER -->
<!-- ===================================================== -->
<section class="content-header">
  <div class="container-fluid">

    <h3>
      Analisa Fast Moving Item
      <button class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
        <i class="fas fa-question-circle"></i>
      </button>
    </h3>

    <p class="text-muted mb-0">
      Analisa produk dengan perputaran stok tercepat untuk optimasi inventory & reorder.
    </p>

  </div>
</section>

<!-- ===================================================== -->
<!-- CONTENT -->
<!-- ===================================================== -->
<section class="content">
<div class="container-fluid">

<style>
.analysis-card{
  border-radius:14px;
  border:none;
  box-shadow:0 2px 10px rgba(0,0,0,.08);
  margin-bottom:20px;
}
.kpi-box{
  background:#fff;
  border-radius:12px;
  border:1px solid #e9ecef;
  padding:15px;
}
.kpi-box h4{
  margin:0;
  font-weight:700;
}
.chart-placeholder{
  height:300px;
  background:#f8f9fa;
  border:2px dashed #ced4da;
  border-radius:12px;
  display:flex;
  align-items:center;
  justify-content:center;
  color:#6c757d;
  font-weight:600;
}
</style>

<!-- KPI -->
<div class="row">

  <div class="col-md-3">
    <div class="kpi-box">
      <small>Top Fast Moving SKU</small>
      <h4 class="text-success">128 Item</h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="kpi-box">
      <small>Avg Turnover</small>
      <h4 class="text-primary">18 Hari</h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="kpi-box">
      <small>Contribution Sales</small>
      <h4 class="text-warning">64%</h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="kpi-box">
      <small>Reorder Alert</small>
      <h4 class="text-danger">22 Item</h4>
    </div>
  </div>

</div>

<!-- CHART -->
<div class="card analysis-card">
  <div class="card-header bg-success text-white">
    Trend Fast Moving
  </div>
  <div class="card-body">
    <div class="chart-placeholder">
      TREND PENJUALAN FAST MOVING ITEM
    </div>
  </div>
</div>

<!-- TABLE -->
<div class="card analysis-card">
  <div class="card-header bg-dark text-white">
    Top Fast Moving Products
  </div>

  <div class="card-body table-responsive">
    <table class="table table-bordered table-hover">
      <thead class="table-dark text-center">
        <tr>
          <th>SKU</th>
          <th>Produk</th>
          <th>Qty Terjual</th>
          <th>Turnover</th>
          <th>Trend</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>FG-001</td>
          <td>Industrial Pump X1</td>
          <td>1.240</td>
          <td>12 Hari</td>
          <td class="text-success">↑ Naik</td>
        </tr>
        <tr>
          <td>FG-002</td>
          <td>Valve Steel A2</td>
          <td>980</td>
          <td>15 Hari</td>
          <td class="text-success">↑ Naik</td>
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
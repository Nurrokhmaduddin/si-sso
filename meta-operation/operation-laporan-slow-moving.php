<!-- FILE : operation-laporan-slow-moving.php -->

<?php $page = 'operation-laporan-slow-moving'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height:100vh;">

<section class="content-header">
  <div class="container-fluid">

    <h3>Analisa Slow Moving Item</h3>
    <p class="text-muted">
      Identifikasi stok yang perputarannya lambat untuk optimasi gudang & cashflow.
    </p>

  </div>
</section>

<section class="content">
<div class="container-fluid">

<style>
.analysis-card{border-radius:14px;box-shadow:0 2px 10px rgba(0,0,0,.08);margin-bottom:20px;}
</style>

<div class="row">

  <div class="col-md-4">
    <div class="card analysis-card">
      <div class="card-body">
        <h4 class="text-warning">74 Item</h4>
        <small>Slow Moving SKU</small>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card analysis-card">
      <div class="card-body">
        <h4 class="text-danger">Rp 420 JT</h4>
        <small>Value Tertahan</small>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card analysis-card">
      <div class="card-body">
        <h4 class="text-primary">120 Hari</h4>
        <small>Avg Idle Time</small>
      </div>
    </div>
  </div>

</div>

<div class="card analysis-card">
  <div class="card-header bg-warning text-dark">
    Slow Moving Items
  </div>

  <div class="card-body table-responsive">

    <table class="table table-bordered">
      <thead class="table-dark text-center">
        <tr>
          <th>SKU</th>
          <th>Produk</th>
          <th>Stock</th>
          <th>Idle Days</th>
          <th>Action Suggestion</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>SL-101</td>
          <td>Spare Part Motor X</td>
          <td>320</td>
          <td>180</td>
          <td>Diskon / Bundling</td>
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
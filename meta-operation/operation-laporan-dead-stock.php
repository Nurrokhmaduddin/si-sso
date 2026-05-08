<!-- FILE : operation-laporan-dead-stock.php -->

<?php $page = 'operation-laporan-dead-stock'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height:100vh;">

<section class="content-header">
  <div class="container-fluid">

    <h3>Analisa Dead Stock</h3>
    <p class="text-muted">
      Barang tidak bergerak yang berpotensi menjadi kerugian inventory.
    </p>

  </div>
</section>

<section class="content">
<div class="container-fluid">

<style>
.dead-card{
  border-radius:14px;
  box-shadow:0 2px 10px rgba(0,0,0,.08);
  margin-bottom:20px;
}
</style>

<div class="row">

  <div class="col-md-4">
    <div class="card dead-card">
      <div class="card-body">
        <h3 class="text-danger">18 Item</h3>
        <small>Dead Stock</small>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card dead-card">
      <div class="card-body">
        <h3 class="text-danger">Rp 210 JT</h3>
        <small>Potensi Loss Value</small>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card dead-card">
      <div class="card-body">
        <h3 class="text-warning">>365 Hari</h3>
        <small>Tanpa Pergerakan</small>
      </div>
    </div>
  </div>

</div>

<div class="card dead-card">
  <div class="card-header bg-danger text-white">
    Dead Stock List
  </div>

  <div class="card-body table-responsive">

    <table class="table table-bordered">
      <thead class="table-dark text-center">
        <tr>
          <th>SKU</th>
          <th>Produk</th>
          <th>Stock</th>
          <th>Last Movement</th>
          <th>Recommendation</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>DS-001</td>
          <td>Old Valve Series A</td>
          <td>120</td>
          <td>480 Hari</td>
          <td>Clearance / Write Off</td>
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
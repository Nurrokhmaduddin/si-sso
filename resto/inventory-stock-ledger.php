<?php $page = 'inventory-stock-ledger'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">
    <h3>Stock Ledger</h3>
    <p class="text-muted">Riwayat pergerakan stok per item secara kronologis.</p>
  </div>
</section>

<section class="content">
<div class="container-fluid">

<!-- FILTER -->
<div class="card">
  <div class="card-body row">

    <div class="col-md-3">
      <label>Item</label>
      <select class="form-control">
        <option>Semua Item</option>
      </select>
    </div>

    <div class="col-md-3">
      <label>Gudang</label>
      <select class="form-control">
        <option>Semua Gudang</option>
      </select>
    </div>

    <div class="col-md-3">
      <label>Dari</label>
      <input type="date" class="form-control">
    </div>

    <div class="col-md-3">
      <label>Sampai</label>
      <input type="date" class="form-control">
    </div>

  </div>
</div>

<!-- TABLE -->
<div class="card">
<div class="card-body table-responsive">

<table class="table table-sm table-bordered">
<thead class="table-dark text-center">
<tr>
  <th>Waktu</th>
  <th>Item</th>
  <th>Jenis</th>
  <th>Qty In</th>
  <th>Qty Out</th>
  <th>Saldo</th>
  <th>Referensi</th>
</tr>
</thead>

<tbody>
<tr>
  <td>2026-05-05 10:10</td>
  <td>Ayam</td>
  <td>IN</td>
  <td>100</td>
  <td>-</td>
  <td>500</td>
  <td>PO-001</td>
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
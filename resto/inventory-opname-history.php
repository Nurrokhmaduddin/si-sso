<?php $page = 'inventory-opname-history'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">
    <h3>Stock Opname History</h3>
    <p class="text-muted">Riwayat proses stock opname dan hasil selisih.</p>
  </div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
<div class="card-body table-responsive">

<table class="table table-sm table-hover">

<thead class="table-dark text-center">
<tr>
  <th>Waktu</th>
  <th>Gudang</th>
  <th>Penanggung Jawab</th>
  <th>Total Item</th>
  <th>Selisih</th>
  <th>Status</th>
  <th>Aksi</th>
</tr>
</thead>

<tbody>
<tr>
  <td>2026-05-05 10:00</td>
  <td>Purwokerto</td>
  <td>AMRI</td>
  <td>120</td>
  <td>-3</td>
  <td><span class="badge bg-warning">Mismatch</span></td>
  <td>
    <button class="btn btn-sm btn-info">
      <i class="fas fa-eye"></i>
    </button>
  </td>
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
<!-- FILE : operation-laporan-pembelian.php -->
<?php $page = 'operation-laporan-pembelian'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Laporan Pembelian</h3>
<p class="text-muted">Rekap seluruh transaksi pembelian barang dagang per periode.</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
<div class="card-header bg-primary text-white">
Export & Summary Pembelian
</div>

<div class="card-body table-responsive">

<table class="table table-bordered">
<thead class="table-dark text-center">
<tr>
<th>PO</th>
<th>Tanggal</th>
<th>Supplier</th>
<th>Total</th>
<th>Status</th>
</tr>
</thead>

<tbody>
<tr>
<td>PO-001</td>
<td>01/05</td>
<td>PT Supplier A</td>
<td>Rp 120 JT</td>
<td><span class="badge bg-success">Completed</span></td>
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
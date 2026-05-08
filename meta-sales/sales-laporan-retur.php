<!-- FILE : sales-laporan-retur.php -->
<?php $page = 'sales-laporan-retur'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Laporan Retur Penjualan</h3>
<p class="text-muted">
Rekap retur barang customer.
</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">

<div class="card-header bg-secondary text-white">
Retur Penjualan
</div>

<div class="card-body table-responsive">

<table class="table table-bordered">

<thead class="table-dark">
<tr>
<th>No Retur</th>
<th>Customer</th>
<th>Produk</th>
<th>Qty</th>
<th>Alasan</th>
<th>Status</th>
</tr>
</thead>

<tbody>

<tr>
<td>RTR-001</td>
<td>PT Maju Bersama</td>
<td>Laptop Asus</td>
<td>2</td>
<td>Unit Rusak</td>
<td>
<span class="badge bg-success">
Completed
</span>
</td>
</tr>

<tr>
<td>RTR-002</td>
<td>CV Abadi</td>
<td>Printer Epson</td>
<td>1</td>
<td>Salah Kirim</td>
<td>
<span class="badge bg-warning text-dark">
Process
</span>
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
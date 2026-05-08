<!-- FILE : sales-laporan-penjualan-produk.php -->
<?php $page = 'sales-laporan-penjualan-produk'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Laporan Penjualan per Produk</h3>
<p class="text-muted">
Rekap penjualan berdasarkan produk.
</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">

<div class="card-header bg-success text-white">
Penjualan Produk
</div>

<div class="card-body table-responsive">

<table class="table table-bordered table-striped">

<thead class="table-dark text-center">
<tr>
<th>Kode</th>
<th>Produk</th>
<th>Qty</th>
<th>Total Sales</th>
<th>Margin</th>
</tr>
</thead>

<tbody>

<tr>
<td>PRD001</td>
<td>Laptop Asus</td>
<td>32</td>
<td>Rp 480.000.000</td>
<td class="text-success">28%</td>
</tr>

<tr>
<td>PRD002</td>
<td>Printer Epson</td>
<td>18</td>
<td>Rp 92.000.000</td>
<td class="text-success">22%</td>
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
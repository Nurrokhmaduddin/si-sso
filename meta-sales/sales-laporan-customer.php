<!-- FILE : sales-laporan-customer.php -->
<?php $page = 'sales-laporan-customer'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Laporan Customer</h3>
<p class="text-muted">
Rekap transaksi penjualan berdasarkan customer.
</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">

<div class="card-header bg-info text-white">
Penjualan per Customer
</div>

<div class="card-body table-responsive">

<table class="table table-bordered table-hover">

<thead class="table-dark">
<tr>
<th>Customer</th>
<th>Total Order</th>
<th>Total Transaksi</th>
<th>Last Order</th>
</tr>
</thead>

<tbody>

<tr>
<td>PT Maju Bersama</td>
<td>42</td>
<td>Rp 780.000.000</td>
<td>08/05/2026</td>
</tr>

<tr>
<td>CV Sinar Abadi</td>
<td>21</td>
<td>Rp 210.000.000</td>
<td>07/05/2026</td>
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
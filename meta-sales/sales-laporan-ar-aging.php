<!-- FILE : sales-laporan-ar-aging.php -->
<?php $page = 'sales-laporan-ar-aging'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Laporan Piutang (AR Aging)</h3>
<p class="text-muted">
Monitoring umur piutang customer.
</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">

<div class="card-header bg-danger text-white">
AR Aging Report
</div>

<div class="card-body table-responsive">

<table class="table table-bordered table-hover">

<thead class="table-dark text-center">
<tr>
<th>Customer</th>
<th>0-30 Hari</th>
<th>31-60 Hari</th>
<th>>60 Hari</th>
<th>Total</th>
</tr>
</thead>

<tbody>

<tr>
<td>PT Maju Bersama</td>
<td>Rp 42 JT</td>
<td>Rp 8 JT</td>
<td>Rp 2 JT</td>
<td class="fw-bold">Rp 52 JT</td>
</tr>

<tr>
<td>CV Abadi</td>
<td>Rp 18 JT</td>
<td>Rp 5 JT</td>
<td>Rp 1 JT</td>
<td class="fw-bold">Rp 24 JT</td>
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
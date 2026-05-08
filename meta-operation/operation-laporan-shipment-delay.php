<!-- FILE : operation-laporan-shipment-delay.php -->
<?php $page = 'operation-laporan-shipment-delay'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Laporan Shipment Delay</h3>
<p class="text-muted">Analisis keterlambatan pengiriman.</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
<div class="card-header bg-danger text-white">
Delay Report
</div>

<div class="card-body table-responsive">

<table class="table table-bordered">
<thead class="table-dark text-center">
<tr>
<th>DO</th>
<th>Customer</th>
<th>Delay (Hari)</th>
<th>Reason</th>
</tr>
</thead>

<tbody>
<tr>
<td>DO-002</td>
<td>CV Indo Steel</td>
<td>3</td>
<td>Transport Issue</td>
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
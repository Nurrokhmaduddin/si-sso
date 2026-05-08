<!-- FILE : operation-laporan-delivery-performance.php -->
<?php $page = 'operation-laporan-delivery-performance'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Laporan Delivery Performance</h3>
<p class="text-muted">Evaluasi performa ketepatan pengiriman.</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
<div class="card-header bg-info text-white">
Delivery KPI Report
</div>

<div class="card-body table-responsive">

<table class="table table-bordered">
<thead class="table-dark text-center">
<tr>
<th>Total Delivery</th>
<th>On Time</th>
<th>Late</th>
<th>Performance</th>
</tr>
</thead>

<tbody>
<tr>
<td>1.200</td>
<td>1.110</td>
<td>90</td>
<td>92.5%</td>
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
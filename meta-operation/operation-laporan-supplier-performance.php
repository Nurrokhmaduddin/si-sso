<!-- FILE : operation-laporan-supplier-performance.php -->
<?php $page = 'operation-laporan-supplier-performance'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<h3>Laporan Supplier Performance</h3>
<p class="text-muted">Evaluasi kinerja supplier berdasarkan ketepatan & kualitas supply.</p>
</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
<div class="card-header bg-info text-white">
Supplier Rating Summary
</div>

<div class="card-body table-responsive">

<table class="table table-bordered">
<thead class="table-dark text-center">
<tr>
<th>Supplier</th>
<th>On Time</th>
<th>Quality</th>
<th>Score</th>
</tr>
</thead>

<tbody>
<tr>
<td>PT Supplier A</td>
<td>95%</td>
<td>Good</td>
<td>A+</td>
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
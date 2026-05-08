<!-- FILE : finance-analisa-client.php -->

<?php $page = 'finance-analisa-client'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3>Analisa Client Revenue</h3>

<p class="text-muted">
Analisa kontribusi revenue dari client perusahaan.
</p>

</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">

<div class="card-header bg-info text-white d-flex justify-content-between">

<h5 class="mb-0">
Client Revenue Analysis
</h5>

<div>
<button class="btn btn-light btn-sm">Excel</button>
<button class="btn btn-danger btn-sm">PDF</button>
</div>

</div>

<div class="card-body table-responsive">

<table class="table table-bordered">

<thead class="table-dark">
<tr>
<th>Client</th>
<th>Revenue</th>
<th>Invoice</th>
<th>Collection Rate</th>
</tr>
</thead>

<tbody>

<tr>
<td>PT Alpha</td>
<td class="text-success fw-bold">250.000.000</td>
<td>18</td>
<td>98%</td>
</tr>

<tr>
<td>PT Beta</td>
<td class="text-success fw-bold">180.000.000</td>
<td>12</td>
<td>91%</td>
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
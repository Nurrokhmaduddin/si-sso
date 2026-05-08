<!-- FILE : sales-analisa-sales-cycle.php -->
<?php $page = 'sales-analisa-sales-cycle'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3>Analisa Sales Cycle</h3>

<p class="text-muted">
Analisa durasi proses lead hingga closing.
</p>

</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="row">

<div class="col-md-4">
<div class="info-box bg-info">
<span class="info-box-icon">
<i class="fas fa-clock"></i>
</span>

<div class="info-box-content">
<span class="info-box-text">
Average Closing
</span>
<span class="info-box-number">
14 Hari
</span>
</div>

</div>
</div>

<div class="col-md-4">
<div class="info-box bg-success">
<span class="info-box-icon">
<i class="fas fa-check"></i>
</span>

<div class="info-box-content">
<span class="info-box-text">
Fastest Deal
</span>
<span class="info-box-number">
3 Hari
</span>
</div>

</div>
</div>

<div class="col-md-4">
<div class="info-box bg-danger">
<span class="info-box-icon">
<i class="fas fa-times"></i>
</span>

<div class="info-box-content">
<span class="info-box-text">
Longest Deal
</span>
<span class="info-box-number">
41 Hari
</span>
</div>

</div>
</div>

</div>

<div class="card">

<div class="card-header bg-dark text-white">
Sales Funnel Analysis
</div>

<div class="card-body">

<div class="alert alert-secondary">
Chart Funnel :
Lead → Quotation → Negotiation → Closing.
</div>

<table class="table table-bordered">

<thead class="table-dark">
<tr>
<th>Stage</th>
<th>Total</th>
<th>Conversion</th>
</tr>
</thead>

<tbody>

<tr>
<td>Lead</td>
<td>320</td>
<td>100%</td>
</tr>

<tr>
<td>Quotation</td>
<td>182</td>
<td>57%</td>
</tr>

<tr>
<td>Closing</td>
<td>92</td>
<td>28%</td>
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
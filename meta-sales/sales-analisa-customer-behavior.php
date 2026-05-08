<!-- FILE : sales-analisa-customer-behavior.php -->
<?php $page = 'sales-analisa-customer-behavior'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3>Analisa Customer Behavior</h3>

<p class="text-muted">
Analisa pola pembelian dan loyalitas customer.
</p>

</div>
</section>

<section class="content">
<div class="container-fluid">

<div class="row">

<div class="col-md-3">

<div class="small-box bg-success">
<div class="inner">
<h3>72%</h3>
<p>Repeat Order</p>
</div>
<div class="icon">
<i class="fas fa-sync"></i>
</div>
</div>

</div>

<div class="col-md-3">

<div class="small-box bg-info">
<div class="inner">
<h3>148</h3>
<p>Active Customer</p>
</div>
<div class="icon">
<i class="fas fa-users"></i>
</div>
</div>

</div>

<div class="col-md-3">

<div class="small-box bg-warning">
<div class="inner">
<h3>Rp 8.2 JT</h3>
<p>Avg Transaction</p>
</div>
<div class="icon">
<i class="fas fa-wallet"></i>
</div>
</div>

</div>

</div>

<div class="card">

<div class="card-header bg-primary text-white">
Customer Segment Analysis
</div>

<div class="card-body table-responsive">

<table class="table table-bordered">

<thead class="table-dark">
<tr>
<th>Segment</th>
<th>Customer</th>
<th>Revenue</th>
<th>Behavior</th>
</tr>
</thead>

<tbody>

<tr>
<td>Corporate</td>
<td>42</td>
<td>Rp 2.1 M</td>
<td>Repeat High Volume</td>
</tr>

<tr>
<td>Retail</td>
<td>106</td>
<td>Rp 480 JT</td>
<td>Price Sensitive</td>
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
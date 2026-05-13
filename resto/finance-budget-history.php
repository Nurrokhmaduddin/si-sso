<?php $page = 'finance-budget-history'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">

<div class="container-fluid">

<h3>History Budget & Monitoring</h3>

<p class="text-muted">
Monitoring penggunaan budget dan realisasi pengeluaran tiap departemen.
</p>

</div>

</section>

<section class="content">

<div class="container-fluid">

<!-- KPI -->
<div class="row">

<div class="col-md-3">
<div class="small-box bg-primary">
<div class="inner">
<h3>Rp 2.5B</h3>
<p>Total Budget</p>
</div>
</div>
</div>

<div class="col-md-3">
<div class="small-box bg-success">
<div class="inner">
<h3>Rp 1.8B</h3>
<p>Used Budget</p>
</div>
</div>
</div>

<div class="col-md-3">
<div class="small-box bg-info">
<div class="inner">
<h3>Rp 700M</h3>
<p>Remaining Budget</p>
</div>
</div>
</div>

<div class="col-md-3">
<div class="small-box bg-danger">
<div class="inner">
<h3>5 Dept</h3>
<p>Over Budget</p>
</div>
</div>
</div>

</div>

<!-- TABLE -->
<div class="card">

<div class="card-body table-responsive p-0">

<table class="table table-bordered table-hover">

<thead class="table-dark text-center">

<tr>
<th>Budget Code</th>
<th>Department</th>
<th>COA</th>
<th>Budget Period</th>
<th>Budget Amount</th>
<th>Actual Usage</th>
<th>Remaining</th>
<th>Utilization</th>
<th>Status</th>
</tr>

</thead>

<tbody>

<tr>
<td>BDG-001</td>
<td>Marketing</td>
<td>521-001</td>
<td>May 2026</td>
<td>100.000.000</td>
<td>92.000.000</td>
<td>8.000.000</td>
<td width="180">

<div class="progress">
<div class="progress-bar bg-warning"
     style="width:92%">
92%
</div>
</div>

</td>

<td>
<span class="badge bg-warning">
Warning
</span>
</td>

</tr>

<tr>

<td>BDG-002</td>
<td>IT</td>
<td>522-001</td>
<td>May 2026</td>
<td>50.000.000</td>
<td>55.000.000</td>
<td class="text-danger">-5.000.000</td>

<td>

<div class="progress">
<div class="progress-bar bg-danger"
     style="width:100%">
110%
</div>
</div>

</td>

<td>
<span class="badge bg-danger">
Over Budget
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
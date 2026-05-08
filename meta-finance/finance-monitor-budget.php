<!-- ========================================================= -->
<!-- FILE : finance-monitor-budget.php -->
<!-- STYLE : REALTIME BUDGET CONTROL -->
<!-- FOKUS :
- monitoring penggunaan budget
- over budget warning
- approval expense
========================================================= -->

<?php $page = 'finance-monitor-budget'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3 class="mb-0">
  Monitor Budget
</h3>

<p class="text-muted mb-0">
  Monitoring penggunaan budget dan kontrol realisasi biaya operasional.
</p>

</div>
</section>

<section class="content">
<div class="container-fluid">

<style>
.monitor-card{
border-radius:14px;
overflow:hidden;
box-shadow:0 2px 10px rgba(0,0,0,.08);
}
.progress{
height:18px;
}
</style>

<div class="card monitor-card">

<div class="card-header bg-primary text-white">
<h5 class="mb-0">
  Budget Usage Monitoring
</h5>
</div>

<div class="card-body table-responsive">

<!--
DESAIN:
- monitoring realtime budget
- visual progress usage
- warning jika melebihi budget
-->

<table class="table table-bordered">

<thead class="table-dark text-center">
<tr>
<th>Department</th>
<th>Budget</th>
<th>Realisasi</th>
<th>Usage</th>
<th>Status</th>
</tr>
</thead>

<tbody>

<tr>
<td>Marketing</td>
<td>100.000.000</td>
<td>72.000.000</td>
<td>
<div class="progress">
<div class="progress-bar bg-primary" style="width:72%">
72%
</div>
</div>
</td>
<td><span class="badge bg-success">Safe</span></td>
</tr>

<tr>
<td>Operation</td>
<td>80.000.000</td>
<td>78.000.000</td>
<td>
<div class="progress">
<div class="progress-bar bg-warning" style="width:97%">
97%
</div>
</div>
</td>
<td><span class="badge bg-warning text-dark">Warning</span></td>
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
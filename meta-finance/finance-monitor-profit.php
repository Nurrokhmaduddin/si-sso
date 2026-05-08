<!-- ========================================================= -->
<!-- FILE : finance-monitor-profit.php -->
<!-- STYLE : REALTIME PROFITABILITY MONITOR -->
<!-- FOKUS :
- monitoring laba realtime
- margin monitoring
- operational profitability
========================================================= -->

<?php $page = 'finance-monitor-profit'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<h3 class="mb-0">
  Monitor Profitability
</h3>

<p class="text-muted mb-0">
  Monitoring profit, margin, dan performa keuntungan bisnis secara realtime.
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
margin-bottom:24px;
}

.summary-box{
border-radius:12px;
padding:18px;
color:#fff;
margin-bottom:16px;
}

.summary-box h3{
margin:0;
font-weight:700;
}
</style>

<div class="row">

<div class="col-md-3">
<div class="summary-box bg-success">
<h3>38%</h3>
<p>Gross Margin</p>
</div>
</div>

<div class="col-md-3">
<div class="summary-box bg-primary">
<h3>21%</h3>
<p>Net Margin</p>
</div>
</div>

<div class="col-md-3">
<div class="summary-box bg-danger">
<h3>12 Jt</h3>
<p>Operational Cost</p>
</div>
</div>

<div class="col-md-3">
<div class="summary-box bg-info">
<h3>58 Jt</h3>
<p>Net Profit</p>
</div>
</div>

</div>

<div class="card monitor-card">

<div class="card-header bg-success text-white">
<h5 class="mb-0">
Realtime Profit Monitoring
</h5>
</div>

<div class="card-body table-responsive">

<!--
DESAIN:
- executive realtime profitability
- monitoring laba cepat
- cocok untuk owner & finance manager
-->

<table class="table table-bordered table-hover">

<thead class="table-dark text-center">
<tr>
<th>Unit Bisnis</th>
<th>Revenue</th>
<th>Expense</th>
<th>Profit</th>
<th>Margin</th>
<th>Status</th>
</tr>
</thead>

<tbody>

<tr>
<td>Cafe Utama</td>
<td class="text-success fw-bold">120.000.000</td>
<td class="text-danger fw-bold">78.000.000</td>
<td class="fw-bold">42.000.000</td>
<td>35%</td>
<td><span class="badge bg-success">Healthy</span></td>
</tr>

<tr>
<td>Online Store</td>
<td class="text-success fw-bold">45.000.000</td>
<td class="text-danger fw-bold">39.000.000</td>
<td class="fw-bold">6.000.000</td>
<td>13%</td>
<td><span class="badge bg-warning text-dark">Low Margin</span></td>
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
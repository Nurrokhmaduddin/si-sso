<?php $page = 'finance-journal-history'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">

    <h3>History Jurnal Accounting</h3>

    <p class="text-muted">
      Menampilkan seluruh histori jurnal accounting baik manual maupun auto journal.
    </p>

  </div>
</section>

<section class="content">

<div class="container-fluid">

<!-- KPI -->
<div class="row">

<div class="col-md-3">
<div class="small-box bg-info">
<div class="inner">
<h3>1.245</h3>
<p>Total Journal</p>
</div>
<div class="icon">
<i class="fas fa-book"></i>
</div>
</div>
</div>

<div class="col-md-3">
<div class="small-box bg-warning">
<div class="inner">
<h3>45</h3>
<p>Draft Journal</p>
</div>
<div class="icon">
<i class="fas fa-edit"></i>
</div>
</div>
</div>

<div class="col-md-3">
<div class="small-box bg-success">
<div class="inner">
<h3>1.120</h3>
<p>Posted Journal</p>
</div>
<div class="icon">
<i class="fas fa-check"></i>
</div>
</div>
</div>

<div class="col-md-3">
<div class="small-box bg-danger">
<div class="inner">
<h3>8</h3>
<p>Unbalanced Journal</p>
</div>
<div class="icon">
<i class="fas fa-exclamation-triangle"></i>
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
<th>Tanggal</th>
<th>No Journal</th>
<th>Reference</th>
<th>Description</th>
<th>Total Amount</th>
<th>Created By</th>
<th>Approved By</th>
<th>Status</th>
<th>Journal Type</th>
<th>Branch</th>
</tr>

</thead>

<tbody>

<tr>
<td>01 Mei 2026</td>
<td><a href="#">JR-0001</a></td>
<td>INV-001</td>
<td>Penerimaan invoice customer</td>
<td>20.000.000</td>
<td>finance01</td>
<td>manager.finance</td>
<td><span class="badge bg-success">Posted</span></td>
<td>Manual</td>
<td>Head Office</td>
</tr>

<tr>
<td>02 Mei 2026</td>
<td><a href="#">JR-0002</a></td>
<td>EXP-001</td>
<td>Biaya operasional</td>
<td>15.000.000</td>
<td>admin.finance</td>
<td>-</td>
<td><span class="badge bg-warning">Draft</span></td>
<td>Auto</td>
<td>Cabang Medan</td>
</tr>

<tr>
<td>03 Mei 2026</td>
<td><a href="#">JR-0003</a></td>
<td>PAY-002</td>
<td>Pembayaran vendor</td>
<td>8.500.000</td>
<td>finance02</td>
<td>manager.finance</td>
<td><span class="badge bg-danger">Unbalance</span></td>
<td>Manual</td>
<td>Head Office</td>
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
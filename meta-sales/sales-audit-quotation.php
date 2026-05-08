<!-- FILE : sales-audit-quotation.php -->
<?php $page = 'sales-audit-quotation'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">
    <h3>Audit Quotation</h3>
    <p class="text-muted">Riwayat perubahan penawaran harga customer.</p>
  </div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
  <div class="card-header bg-info text-white">
    Quotation History
  </div>

  <div class="card-body table-responsive">

    <table class="table table-bordered table-hover">
      <thead class="table-dark text-center">
        <tr>
          <th>Quotation</th>
          <th>Customer</th>
          <th>Action</th>
          <th>User</th>
          <th>Waktu</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>QT-001</td>
          <td>PT XYZ</td>
          <td>Revised Price</td>
          <td>Sales B</td>
          <td>10:00</td>
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
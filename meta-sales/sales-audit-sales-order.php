<!-- FILE : sales-audit-sales-order.php -->
<?php $page = 'sales-audit-sales-order'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">
    <h3>Riwayat Sales Order</h3>
    <p class="text-muted">Tracking perubahan dan aktivitas sales order.</p>
  </div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
  <div class="card-header bg-primary text-white">
    History Sales Order
  </div>

  <div class="card-body table-responsive">

    <table class="table table-bordered table-hover">
      <thead class="table-dark text-center">
        <tr>
          <th>SO Number</th>
          <th>Customer</th>
          <th>Status</th>
          <th>Updated By</th>
          <th>Waktu</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>SO-001</td>
          <td>PT ABC</td>
          <td>Approved</td>
          <td>Manager</td>
          <td>09:00</td>
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
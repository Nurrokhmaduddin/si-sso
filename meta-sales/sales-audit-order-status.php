<!-- FILE : sales-audit-order-status.php -->
<?php $page = 'sales-audit-order-status'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">
    <h3>Audit Status Order</h3>
    <p class="text-muted">Perubahan status dari SO → Invoice → Delivery.</p>
  </div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
  <div class="card-header bg-success text-white">
    Order Status History
  </div>

  <div class="card-body table-responsive">

    <table class="table table-bordered table-hover">
      <thead class="table-dark text-center">
        <tr>
          <th>Order</th>
          <th>Status Lama</th>
          <th>Status Baru</th>
          <th>User</th>
          <th>Waktu</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>SO-001</td>
          <td>Pending</td>
          <td>Approved</td>
          <td>Manager</td>
          <td>12:00</td>
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
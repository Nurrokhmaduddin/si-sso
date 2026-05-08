<!-- FILE : sales-audit-log-user.php -->
<?php $page = 'sales-audit-log-user'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">
    <h3>Audit Log User</h3>
    <p class="text-muted">Rekam aktivitas semua user dalam sistem sales.</p>
  </div>
</section>

<section class="content">
<div class="container-fluid">

<div class="card">
  <div class="card-header bg-dark text-white">
    Log Aktivitas User
  </div>

  <div class="card-body table-responsive">

    <table class="table table-bordered table-hover">
      <thead class="table-dark text-center">
        <tr>
          <th>Waktu</th>
          <th>User</th>
          <th>Aktivitas</th>
          <th>Modul</th>
          <th>IP Address</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>08:10</td>
          <td>Sales A</td>
          <td>Login Sistem</td>
          <td>Auth</td>
          <td>192.168.1.10</td>
        </tr>
        <tr>
          <td>08:15</td>
          <td>Sales A</td>
          <td>Create Order</td>
          <td>Sales Order</td>
          <td>192.168.1.10</td>
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
<!-- ========================================================= -->
<!-- PAGE : finance-approval.php -->
<!-- STYLE : Executive Dashboard (Gaya A) -->
<!-- FOKUS :
     - Approval finance
     - Expense approval
     - Budget authorization
-->
<!-- ========================================================= -->

<?php $page = 'finance-approval'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Approval Finance Dashboard
      </h3>

      <p class="text-muted mb-0">
        Monitoring approval transaksi finance dan otorisasi pengeluaran perusahaan.
      </p>

    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <div class="row">

        <div class="col-md-3">
          <div class="alert alert-warning">
            <h4>18</h4>
            Pending Approval
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-success">
            <h4>82</h4>
            Approved
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-danger">
            <h4>7</h4>
            Rejected
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-info">
            <h4>107</h4>
            Total Request
          </div>
        </div>

      </div>

      <div class="card">

        <div class="card-header bg-dark text-white">
          <h5 class="mb-0">
            Daftar Approval Finance
          </h5>
        </div>

        <div class="card-body table-responsive">

          <!--
            Desain:
            - Approval workflow ERP
            - Fokus otorisasi transaksi
            - Tracking status approval realtime
          -->

          <table class="table table-bordered table-striped align-middle">

            <thead class="table-dark text-center">

              <tr>
                <th>Tanggal</th>
                <th>Requester</th>
                <th>Jenis</th>
                <th>Nominal</th>
                <th>Approver</th>
                <th>Status</th>
              </tr>

            </thead>

            <tbody>

              <tr>
                <td>08/05/2026</td>
                <td>Divisi Operasional</td>
                <td>Expense Request</td>
                <td>Rp 12.000.000</td>
                <td>Finance Manager</td>
                <td>
                  <span class="badge bg-warning text-dark">
                    Pending
                  </span>
                </td>
              </tr>

              <tr>
                <td>08/05/2026</td>
                <td>Marketing</td>
                <td>Budget Approval</td>
                <td>Rp 35.000.000</td>
                <td>Director</td>
                <td>
                  <span class="badge bg-success">
                    Approved
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
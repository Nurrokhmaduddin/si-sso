<!-- ========================================================= -->
<!-- PAGE : finance-refund.php -->
<!-- STYLE : Executive Dashboard (Gaya A) -->
<!-- Fokus:
     - Refund customer
     - Adjustment transaksi
     - Approval refund
-->
<!-- ========================================================= -->

<?php $page = 'finance-refund'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Refund & Adjustment Dashboard
      </h3>

      <p class="text-muted mb-0">
        Monitoring refund transaksi, adjustment invoice, dan approval finance.
      </p>

    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <div class="row">

        <div class="col-md-3">
          <div class="alert alert-danger">
            <h4>Rp 24 JT</h4>
            Total Refund
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-warning">
            <h4>8</h4>
            Pending Approval
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-success">
            <h4>32</h4>
            Approved Refund
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-info">
            <h4>5</h4>
            Adjustment Invoice
          </div>
        </div>

      </div>

      <div class="card">

        <div class="card-header bg-dark text-white">
          <h5 class="mb-0">
            Riwayat Refund & Adjustment
          </h5>
        </div>

        <div class="card-body table-responsive">

          <!--
            Desain:
            - Refund dianggap cash out
            - Dominasi danger untuk nilai pengeluaran
            - Tetap ada approval tracking
          -->

          <table class="table table-bordered table-striped align-middle">

            <thead class="table-dark text-center">
              <tr>
                <th>Tanggal</th>
                <th>Client</th>
                <th>Ref Refund</th>
                <th>Jenis</th>
                <th>Nominal</th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody>

              <tr>
                <td>06/05/2026</td>
                <td>PT Sinar Abadi</td>
                <td>RF-001</td>
                <td>Refund Invoice</td>
                <td class="text-danger fw-bold">
                  Rp 4.500.000
                </td>
                <td>
                  <span class="badge bg-success">
                    Approved
                  </span>
                </td>
              </tr>

              <tr>
                <td>07/05/2026</td>
                <td>CV Berkah</td>
                <td>RF-002</td>
                <td>Adjustment</td>
                <td class="text-danger fw-bold">
                  Rp 1.200.000
                </td>
                <td>
                  <span class="badge bg-warning text-dark">
                    Pending
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
<!-- ========================================================= -->
<!-- PAGE : finance-expense.php -->
<!-- STYLE : Executive Dashboard (Gaya A) -->
<!-- FOKUS :
     - Expense management
     - Operational spending
     - Cost monitoring
-->
<!-- ========================================================= -->

<?php $page = 'finance-expense'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Expense Management Dashboard
      </h3>

      <p class="text-muted mb-0">
        Monitoring seluruh pengeluaran operasional perusahaan.
      </p>

    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <div class="row">

        <div class="col-md-3">
          <div class="alert alert-danger">
            <h4>Rp 842 JT</h4>
            Total Expense
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-warning">
            <h4>22</h4>
            Pending Expense
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-success">
            <h4>Rp 210 JT</h4>
            Approved
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-info">
            <h4>124</h4>
            Total Transaksi
          </div>
        </div>

      </div>

      <div class="card">

        <div class="card-header bg-danger text-white">
          <h5 class="mb-0">
            Detail Expense Operasional
          </h5>
        </div>

        <div class="card-body table-responsive">

          <!--
            Desain:
            - Expense = cash out
            - Dominan warna danger
            - Visual operasional finance
          -->

          <table class="table table-bordered table-hover align-middle">

            <thead class="table-dark text-center">

              <tr>
                <th>Tanggal</th>
                <th>Kategori</th>
                <th>Keterangan</th>
                <th>Nominal</th>
                <th>Status</th>
              </tr>

            </thead>

            <tbody>

              <tr>
                <td>08/05/2026</td>
                <td>Transport</td>
                <td>Operasional Sales</td>
                <td class="text-danger fw-bold">
                  Rp 2.500.000
                </td>
                <td>
                  <span class="badge bg-success">
                    Approved
                  </span>
                </td>
              </tr>

              <tr>
                <td>08/05/2026</td>
                <td>Maintenance</td>
                <td>Service Mesin</td>
                <td class="text-danger fw-bold">
                  Rp 8.000.000
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
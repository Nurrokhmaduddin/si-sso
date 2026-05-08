<!-- ========================================================= -->
<!-- PAGE : finance-aging.php -->
<!-- STYLE : Executive Dashboard (Gaya A) -->
<!-- FOKUS :
     - Aging receivable
     - Overdue monitoring
     - Financial collection analysis
-->
<!-- ========================================================= -->

<?php $page = 'finance-aging'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Aging Piutang Dashboard
      </h3>

      <p class="text-muted mb-0">
        Monitoring umur piutang pelanggan berdasarkan aging category.
      </p>

    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <!-- KPI -->
      <div class="row">

        <div class="col-md-3">
          <div class="alert alert-success">
            <h4>Rp 420 JT</h4>
            0 - 30 Hari
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-warning">
            <h4>Rp 180 JT</h4>
            31 - 60 Hari
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-danger">
            <h4>Rp 98 JT</h4>
            > 60 Hari
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-info">
            <h4>18</h4>
            Client Overdue
          </div>
        </div>

      </div>

      <!-- TABLE -->
      <div class="card">

        <div class="card-header bg-warning">
          <h5 class="mb-0 text-dark">
            Aging Detail Piutang
          </h5>
        </div>

        <div class="card-body table-responsive">

          <!--
            Desain:
            - Fokus aging receivable
            - Highlight overdue risk
            - Warna warning & danger dominan
          -->

          <table class="table table-bordered table-hover align-middle">

            <thead class="table-dark text-center">

              <tr>
                <th>Client</th>
                <th>Total Piutang</th>
                <th>0-30 Hari</th>
                <th>31-60 Hari</th>
                <th>>60 Hari</th>
                <th>Status Risiko</th>
              </tr>

            </thead>

            <tbody>

              <tr>
                <td>PT Sinar Abadi</td>
                <td>Rp 80.000.000</td>
                <td class="text-success fw-bold">
                  Rp 50.000.000
                </td>
                <td class="text-warning fw-bold">
                  Rp 20.000.000
                </td>
                <td class="text-danger fw-bold">
                  Rp 10.000.000
                </td>
                <td>
                  <span class="badge bg-warning text-dark">
                    Medium Risk
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
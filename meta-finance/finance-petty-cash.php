<!-- ========================================================= -->
<!-- PAGE : finance-petty-cash.php -->
<!-- ========================================================= -->

<?php $page = 'finance-petty-cash'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Dashboard Petty Cash
      </h3>

      <p class="text-muted mb-0">
        Monitoring kas kecil operasional,
        pengeluaran harian, dan refill petty cash.
      </p>

    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <style>

        .finance-card{
          border-radius:14px;
          overflow:hidden;
          box-shadow:0 2px 10px rgba(0,0,0,.08);
          margin-bottom:24px;
        }

        .summary-box{
          border-radius:12px;
          padding:20px;
          color:#fff;
          margin-bottom:16px;
        }

        .summary-box h3{
          margin:0;
          font-weight:700;
        }

      </style>

      <!-- ================================================= -->
      <!-- KPI -->
      <!-- ================================================= -->

      <div class="row">

        <div class="col-md-3">
          <div class="summary-box bg-warning text-dark">
            <h3>Rp 18 JT</h3>
            <p>Saldo Kas Kecil</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-danger">
            <h3>Rp 2.1 JT</h3>
            <p>Pengeluaran Hari Ini</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-success">
            <h3>Rp 25 JT</h3>
            <p>Limit Kas</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-info">
            <h3>3</h3>
            <p>Refill Request</p>
          </div>
        </div>

      </div>

      <!-- ================================================= -->
      <!-- CARD -->
      <!-- ================================================= -->

      <div class="card finance-card">

        <div class="card-header bg-warning">

          <h5 class="mb-0 text-dark">
            Petty Cash Activity
          </h5>

        </div>

        <div class="card-body">

          <!-- ============================================= -->
          <!-- DESIGN :
               petty cash dibuat visual operasional,
               karena biasanya dipakai admin harian.
          ============================================== -->

          <div class="table-responsive">

            <table class="table table-bordered table-striped align-middle">

              <thead class="table-dark text-center">

                <tr>
                  <th>Tanggal</th>
                  <th>Ref</th>
                  <th>Keterangan</th>
                  <th>User</th>
                  <th>Nominal</th>
                </tr>

              </thead>

              <tbody>

                <tr>

                  <td>08/05/2026</td>
                  <td>PC-001</td>
                  <td>Beli ATK</td>
                  <td>Admin</td>

                  <td class="text-danger fw-bold">
                    Rp 250.000
                  </td>

                </tr>

                <tr>

                  <td>08/05/2026</td>
                  <td>PC-002</td>
                  <td>Transport Kurir</td>
                  <td>Operasional</td>

                  <td class="text-danger fw-bold">
                    Rp 150.000
                  </td>

                </tr>

              </tbody>

            </table>

          </div>

        </div>

      </div>

    </div>
  </section>

</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
<!-- ========================================================= -->
<!-- PAGE : finance-bank.php -->
<!-- ========================================================= -->

<?php $page = 'finance-bank'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Dashboard Bank Management
      </h3>

      <p class="text-muted mb-0">
        Monitoring saldo bank, cash positioning,
        mutasi rekening, dan rekonsiliasi bank.
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

        <div class="col-md-4">
          <div class="summary-box bg-primary">
            <h3>Rp 1.8 M</h3>
            <p>Total Saldo Bank</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="summary-box bg-success">
            <h3>5</h3>
            <p>Bank Active</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="summary-box bg-warning text-dark">
            <h3>2</h3>
            <p>Pending Reconciliation</p>
          </div>
        </div>

      </div>

      <!-- ================================================= -->
      <!-- BANK TABLE -->
      <!-- ================================================= -->

      <div class="card finance-card">

        <div class="card-header bg-primary text-white">

          <h5 class="mb-0">
            Bank Position Monitoring
          </h5>

        </div>

        <div class="card-body">

          <!-- ============================================= -->
          <!-- DESIGN :
               dibuat ala treasury dashboard ERP
               untuk monitoring posisi kas realtime
          ============================================== -->

          <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

              <thead class="table-dark text-center">

                <tr>
                  <th>Bank</th>
                  <th>No Rekening</th>
                  <th>Saldo</th>
                  <th>Last Transaction</th>
                  <th>Status</th>
                </tr>

              </thead>

              <tbody>

                <tr>

                  <td>BCA</td>

                  <td>
                    998-123-111
                  </td>

                  <td class="text-success fw-bold">
                    Rp 580.000.000
                  </td>

                  <td>
                    08/05/2026 14:20
                  </td>

                  <td class="text-center">
                    <span class="badge bg-success">
                      Connected
                    </span>
                  </td>

                </tr>

                <tr>

                  <td>Mandiri</td>

                  <td>
                    888-222-777
                  </td>

                  <td class="text-success fw-bold">
                    Rp 320.000.000
                  </td>

                  <td>
                    08/05/2026 12:00
                  </td>

                  <td class="text-center">
                    <span class="badge bg-info">
                      Active
                    </span>
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
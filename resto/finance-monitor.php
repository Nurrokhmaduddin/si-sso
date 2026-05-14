<!-- ========================================================= -->
<!-- PAGE : finance-monitoring.php -->
<!-- STYLE : Realtime Finance Monitoring Dashboard -->
<!-- FOKUS :
     - Cash flow monitoring
     - Cash in & cash out activity
     - AR/AP follow up
     - Financial operational monitoring
-->
<!-- ========================================================= -->

<?php $page = 'finance-monitor'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <!-- ===================================================== -->
  <!-- CONTENT HEADER -->
  <!-- ===================================================== -->

  <section class="content-header">

    <div class="container-fluid">

      <div class="d-flex justify-content-between align-items-center">

        <div>

          <h3 class="mb-0">

            Finance Monitoring 

            <button type="button"
                    class="btn btn-tool"
                    data-bs-toggle="modal"
                    data-bs-target="#modalBantuan"
                    title="Bantuan">

              <i class="fas fa-question-circle"></i>

            </button>

          </h3>

          <p class="text-muted mb-0">
            Monitoring realtime today cash flow, AR/AP outstanding,
            dan aktivitas operasional finance.
          </p>

        </div>

        <div>

          <button class="btn btn-success btn-sm">

            <i class="fas fa-sync-alt me-1"></i>
            Refresh Realtime

          </button>

          <button class="btn btn-primary btn-sm">

            <i class="fas fa-download me-1"></i>
            Export

          </button>

        </div>

      </div>

    </div>

  </section>

  <!-- ===================================================== -->
  <!-- MAIN CONTENT -->
  <!-- ===================================================== -->

  <section class="content">

    <div class="container-fluid">

      <!-- ================================================= -->
      <!-- KPI -->
      <!-- ================================================= -->

      <div class="row">

        <!-- CASH POSITION -->
        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-success">

            <div class="inner">

              <h3>Rp 2.4B</h3>

              <p>Cash Position</p>

            </div>

            <div class="icon">
              <i class="fas fa-wallet"></i>
            </div>

          </div>

        </div>

        <!-- CASH IN -->
        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-info">

            <div class="inner">

              <h3>Rp 845M</h3>

              <p>Cash In</p>

            </div>

            <div class="icon">
              <i class="fas fa-arrow-down"></i>
            </div>

          </div>

        </div>

        <!-- CASH OUT -->
        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-warning">

            <div class="inner">

              <h3>Rp 628M</h3>

              <p>Cash Out</p>

            </div>

            <div class="icon">
              <i class="fas fa-arrow-up"></i>
            </div>

          </div>

        </div>

        <!-- CASH MOVEMENT -->
        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-danger">

            <div class="inner">

              <h3>+ Rp 217M</h3>

              <p>Cash Movement</p>

            </div>

            <div class="icon">
              <i class="fas fa-chart-line"></i>
            </div>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- AR & AP -->
      <!-- ================================================= -->

      <div class="row">

        <!-- AR -->
        <div class="col-md-6">

          <div class="card card-primary">

            <div class="card-header">

              <h3 class="card-title">
                AR Need Follow Up
              </h3>

            </div>

            <div class="card-body">

              <table class="table table-bordered table-striped">

                <thead class="table-dark text-center">

                  <tr>
                    <th>Invoice</th>
                    <th>Customer</th>
                    <th>Due Date</th>
                    <th>Outstanding</th>
                    <th>Status</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td>INV-1001</td>
                    <td>PT Maju Jaya</td>
                    <td>10 Mei</td>
                    <td>Rp 12.000.000</td>
                    <td>
                      <span class="badge bg-danger">
                        Overdue
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>INV-1002</td>
                    <td>PT Sentosa</td>
                    <td>13 Mei</td>
                    <td>Rp 8.500.000</td>
                    <td>
                      <span class="badge bg-warning text-dark">
                        Reminder
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>INV-1003</td>
                    <td>PT Global</td>
                    <td>15 Mei</td>
                    <td>Rp 5.700.000</td>
                    <td>
                      <span class="badge bg-primary">
                        Upcoming
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>INV-1004</td>
                    <td>PT Nusantara</td>
                    <td>09 Mei</td>
                    <td>Rp 15.400.000</td>
                    <td>
                      <span class="badge bg-danger">
                        Critical
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>INV-1005</td>
                    <td>PT Karya</td>
                    <td>13 Mei</td>
                    <td>Rp 4.800.000</td>
                    <td>
                      <span class="badge bg-info">
                        Follow Up
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>INV-1006</td>
                    <td>PT Sinar</td>
                    <td>14 Mei</td>
                    <td>Rp 9.200.000</td>
                    <td>
                      <span class="badge bg-warning text-dark">
                        Pending
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>INV-1007</td>
                    <td>PT Abadi</td>
                    <td>16 Mei</td>
                    <td>Rp 6.500.000</td>
                    <td>
                      <span class="badge bg-success">
                        Scheduled
                      </span>
                    </td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

        <!-- AP -->
        <div class="col-md-6">

          <div class="card card-danger">

            <div class="card-header">

              <h3 class="card-title">
                AP Need Follow Up
              </h3>

            </div>

            <div class="card-body">

              <table class="table table-bordered table-striped">

                <thead class="table-dark text-center">

                  <tr>
                    <th>Voucher</th>
                    <th>Vendor</th>
                    <th>Due Date</th>
                    <th>Amount</th>
                    <th>Status</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td>AP-2001</td>
                    <td>PT Supplier</td>
                    <td>13 Mei</td>
                    <td>Rp 18.000.000</td>
                    <td>
                      <span class="badge bg-danger">
                        Unpaid
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>AP-2002</td>
                    <td>PT Logistic</td>
                    <td>15 Mei</td>
                    <td>Rp 7.500.000</td>
                    <td>
                      <span class="badge bg-warning text-dark">
                        Waiting
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>AP-2003</td>
                    <td>PT Hosting</td>
                    <td>16 Mei</td>
                    <td>Rp 2.300.000</td>
                    <td>
                      <span class="badge bg-primary">
                        Scheduled
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>AP-2004</td>
                    <td>PT Printing</td>
                    <td>11 Mei</td>
                    <td>Rp 5.100.000</td>
                    <td>
                      <span class="badge bg-danger">
                        Overdue
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>AP-2005</td>
                    <td>PT Digital</td>
                    <td>17 Mei</td>
                    <td>Rp 1.900.000</td>
                    <td>
                      <span class="badge bg-info">
                        Review
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>AP-2006</td>
                    <td>PT Transport</td>
                    <td>18 Mei</td>
                    <td>Rp 6.700.000</td>
                    <td>
                      <span class="badge bg-warning text-dark">
                        Pending
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>AP-2007</td>
                    <td>PT Utility</td>
                    <td>10 Mei</td>
                    <td>Rp 9.800.000</td>
                    <td>
                      <span class="badge bg-danger">
                        Critical
                      </span>
                    </td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- CASH IN & CASH OUT -->
      <!-- ================================================= -->

      <div class="row">

        <!-- CASH IN -->
        <div class="col-md-6">

          <div class="card card-success">

            <div class="card-header">

              <h3 class="card-title">
                Cash In Activity
              </h3>

            </div>

            <div class="card-body">

              <table class="table table-bordered table-striped">

                <thead class="table-dark text-center">

                  <tr>
                    <th>Date</th>
                    <th>Reference</th>
                    <th>Customer</th>
                    <th>Amount</th>
                    <th>Status</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td>13 Mei</td>
                    <td>RCV-3001</td>
                    <td>PT Maju</td>
                    <td>Rp 12.000.000</td>
                    <td>
                      <span class="badge bg-success">
                        Received
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>13 Mei</td>
                    <td>RCV-3002</td>
                    <td>PT Sentosa</td>
                    <td>Rp 8.500.000</td>
                    <td>
                      <span class="badge bg-warning text-dark">
                        Pending
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>12 Mei</td>
                    <td>RCV-3003</td>
                    <td>PT ABC</td>
                    <td>Rp 2.300.000</td>
                    <td>
                      <span class="badge bg-primary">
                        Verified
                      </span>
                    </td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

        <!-- CASH OUT -->
        <div class="col-md-6">

          <div class="card card-warning">

            <div class="card-header">

              <h3 class="card-title">
                Cash Out Activity
              </h3>

            </div>

            <div class="card-body">

              <table class="table table-bordered table-striped">

                <thead class="table-dark text-center">

                  <tr>
                    <th>Date</th>
                    <th>Voucher</th>
                    <th>Vendor</th>
                    <th>Amount</th>
                    <th>Status</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td>13 Mei</td>
                    <td>PAY-4001</td>
                    <td>PT Supplier</td>
                    <td>Rp 18.000.000</td>
                    <td>
                      <span class="badge bg-success">
                        Paid
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>13 Mei</td>
                    <td>PAY-4002</td>
                    <td>PT Hosting</td>
                    <td>Rp 2.500.000</td>
                    <td>
                      <span class="badge bg-warning text-dark">
                        Waiting
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>12 Mei</td>
                    <td>PAY-4003</td>
                    <td>PLN</td>
                    <td>Rp 4.200.000</td>
                    <td>
                      <span class="badge bg-danger">
                        Overdue
                      </span>
                    </td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
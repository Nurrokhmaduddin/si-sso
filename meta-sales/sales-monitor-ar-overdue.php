<!-- FILE : sales-monitor-ar-overdue.php -->

<?php $page = 'sales-monitor-ar-overdue'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-1">
        Monitor AR Overdue | Invoice & Payment (AR Overdue)
      </h3>

      <p class="text-muted mb-0">
        Monitoring invoice overdue, piutang customer,
        dan aging receivable secara realtime.
      </p>

    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <div class="row">

        <div class="col-md-4">

          <div class="small-box bg-danger">

            <div class="inner">

              <h3>12</h3>
              <p>Overdue Invoice</p>

            </div>

            <div class="icon">
              <i class="fas fa-file-invoice-dollar"></i>
            </div>

          </div>

        </div>

        <div class="col-md-4">

          <div class="small-box bg-warning">

            <div class="inner">

              <h3>Rp 820 JT</h3>
              <p>Total Outstanding</p>

            </div>

            <div class="icon">
              <i class="fas fa-wallet"></i>
            </div>

          </div>

        </div>

        <div class="col-md-4">

          <div class="small-box bg-success">

            <div class="inner">

              <h3>67%</h3>
              <p>Collection Rate</p>

            </div>

            <div class="icon">
              <i class="fas fa-chart-line"></i>
            </div>

          </div>

        </div>

      </div>

      <div class="card shadow-sm border-0 rounded-4">

        <div class="card-header bg-danger text-white">
          Aging Receivable Monitoring
        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-hover">

            <thead class="table-dark text-center">

              <tr>
                <th>Invoice</th>
                <th>Customer</th>
                <th>Due Date</th>
                <th>Outstanding</th>
                <th>Aging</th>
                <th>Status</th>
              </tr>

            </thead>

            <tbody>

              <tr>

                <td>INV-00128</td>
                <td>PT Surya Mandiri</td>
                <td>01 Mei 2026</td>

                <td class="fw-bold text-danger">
                  Rp 120 JT
                </td>

                <td>38 Hari</td>

                <td class="text-center">
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
  </section>

</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
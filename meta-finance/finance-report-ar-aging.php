<!-- ========================================================= -->
<!-- PAGE : finance-ar-aging.php -->
<!-- STYLE : AR Aging Schedule -->
<!-- FOKUS :
     - Aging receivable
     - Overdue monitoring
     - Collection analysis
-->
<!-- ========================================================= -->

<?php $page = 'finance-ar-aging'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        AR Aging Schedule
      </h3>

      <p class="text-muted">
        Monitoring umur piutang customer berdasarkan aging category.
      </p>

    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <!-- ================================================ -->
      <!-- KPI -->
      <!-- ================================================ -->

      <div class="row">

        <div class="col-md-3">
          <div class="alert alert-success">
            <h4>Rp 320 JT</h4>
            Current
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-info">
            <h4>Rp 210 JT</h4>
            0 - 30 Days
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-warning">
            <h4>Rp 98 JT</h4>
            31 - 60 Days
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-danger">
            <h4>Rp 45 JT</h4>
            > 60 Days
          </div>
        </div>

      </div>

      <!-- ================================================ -->
      <!-- TABLE -->
      <!-- ================================================ -->

      <!--
        AGING FORMULA:

        DATEDIFF(
          CURRENT_DATE,
          invoice_due_date
        )

        lalu dikelompokkan:
        current
        0-30
        31-60
        61-90
        >90
      -->

      <div class="card card-warning">

        <div class="card-header">
          <h5 class="mb-0">
            Aging Receivable Detail
          </h5>
        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-hover">

            <thead class="table-dark text-center">

              <tr>
                <th>Customer</th>
                <th>Total AR</th>
                <th>Current</th>
                <th>0-30</th>
                <th>31-60</th>
                <th>>60</th>
                <th>Risk</th>
              </tr>

            </thead>

            <tbody>

              <tr>

                <td>PT Kuliner Nusantara</td>

                <td>
                  Rp 85.000.000
                </td>

                <td class="text-success fw-bold">
                  Rp 30.000.000
                </td>

                <td class="text-info fw-bold">
                  Rp 25.000.000
                </td>

                <td class="text-warning fw-bold">
                  Rp 20.000.000
                </td>

                <td class="text-danger fw-bold">
                  Rp 10.000.000
                </td>

                <td>
                  <span class="badge bg-warning">
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
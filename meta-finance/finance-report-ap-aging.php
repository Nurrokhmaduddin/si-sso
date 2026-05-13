<!-- ========================================================= -->
<!-- PAGE : finance-ap-aging.php -->
<!-- STYLE : AP Aging Schedule -->
<!-- FOKUS :
     - Supplier payable aging
     - Debt maturity
     - Payable pressure monitoring
-->
<!-- ========================================================= -->

<?php $page = 'finance-ap-aging'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        AP Aging Schedule
      </h3>

      <p class="text-muted">
        Monitoring umur hutang supplier berdasarkan aging category.
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
            <h4>Rp 180 JT</h4>
            Current
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-info">
            <h4>Rp 95 JT</h4>
            0 - 30 Days
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-warning">
            <h4>Rp 42 JT</h4>
            31 - 60 Days
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-danger">
            <h4>Rp 12 JT</h4>
            > 60 Days
          </div>
        </div>

      </div>

      <!-- ================================================ -->
      <!-- TABLE -->
      <!-- ================================================ -->

      <!--
        AGING HUTANG:

        CURRENT_DATE - due_date

        Tujuan:
        melihat tekanan hutang jatuh tempo.
      -->

      <div class="card card-danger">

        <div class="card-header">
          <h5 class="mb-0">
            Aging Payable Detail
          </h5>
        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-hover">

            <thead class="table-dark text-center">

              <tr>
                <th>Supplier</th>
                <th>Total AP</th>
                <th>Current</th>
                <th>0-30</th>
                <th>31-60</th>
                <th>>60</th>
                <th>Status</th>
              </tr>

            </thead>

            <tbody>

              <tr>

                <td>PT Sumber Pangan</td>

                <td>
                  Rp 42.000.000
                </td>

                <td class="text-success fw-bold">
                  Rp 20.000.000
                </td>

                <td class="text-info fw-bold">
                  Rp 10.000.000
                </td>

                <td class="text-warning fw-bold">
                  Rp 8.000.000
                </td>

                <td class="text-danger fw-bold">
                  Rp 4.000.000
                </td>

                <td>
                  <span class="badge bg-danger">
                    High Pressure
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
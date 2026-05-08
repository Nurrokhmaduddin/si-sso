<!-- ========================================================= -->
<!-- PAGE : finance-budget.php -->
<!-- STYLE : Executive Dashboard (Gaya A) -->
<!-- FOKUS :
     - Budget planning
     - Budget vs realization
     - Financial control
-->
<!-- ========================================================= -->

<?php $page = 'finance-budget'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Budget Management Dashboard
      </h3>

      <p class="text-muted mb-0">
        Monitoring budget perusahaan dan realisasi pengeluaran operasional.
      </p>

    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <div class="row">

        <div class="col-md-4">
          <div class="alert alert-primary">
            <h4>Rp 2.8 M</h4>
            Total Budget
          </div>
        </div>

        <div class="col-md-4">
          <div class="alert alert-success">
            <h4>Rp 1.9 M</h4>
            Realisasi
          </div>
        </div>

        <div class="col-md-4">
          <div class="alert alert-warning">
            <h4>68%</h4>
            Budget Usage
          </div>
        </div>

      </div>

      <div class="card">

        <div class="card-header bg-primary text-white">
          <h5 class="mb-0">
            Budget Allocation
          </h5>
        </div>

        <div class="card-body table-responsive">

          <!--
            Desain:
            - Fokus budgeting operasional
            - KPI usage budget
            - ERP planning style
          -->

          <table class="table table-bordered table-striped align-middle">

            <thead class="table-dark text-center">

              <tr>
                <th>Departemen</th>
                <th>Budget</th>
                <th>Realisasi</th>
                <th>Sisa</th>
                <th>Persentase</th>
              </tr>

            </thead>

            <tbody>

              <tr>
                <td>Marketing</td>
                <td>Rp 500.000.000</td>
                <td class="text-danger fw-bold">
                  Rp 420.000.000
                </td>
                <td class="text-success fw-bold">
                  Rp 80.000.000
                </td>
                <td>84%</td>
              </tr>

              <tr>
                <td>Operasional</td>
                <td>Rp 800.000.000</td>
                <td class="text-danger fw-bold">
                  Rp 520.000.000
                </td>
                <td class="text-success fw-bold">
                  Rp 280.000.000
                </td>
                <td>65%</td>
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
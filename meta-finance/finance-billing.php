<!-- ========================================================= -->
<!-- PAGE : finance-billing.php -->
<!-- STYLE : Executive Dashboard (Gaya A) -->
<!-- Fokus:
     - Jadwal billing
     - Reminder tagihan
     - Monitoring penagihan periodik
-->
<!-- ========================================================= -->

<?php $page = 'finance-billing'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Billing Schedule Dashboard
      </h3>

      <p class="text-muted mb-0">
        Monitoring jadwal billing client dan reminder invoice otomatis.
      </p>

    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <style>
        .billing-card{
          border-radius:14px;
          overflow:hidden;
          box-shadow:0 2px 10px rgba(0,0,0,.08);
          margin-bottom:24px;
        }

        .billing-box{
          border-radius:14px;
          padding:18px;
          color:#fff;
          margin-bottom:16px;
        }
      </style>

      <!-- KPI -->
      <div class="row">

        <div class="col-md-3">
          <div class="billing-box bg-info">
            <h3>82</h3>
            <p>Billing Bulan Ini</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="billing-box bg-success">
            <h3>58</h3>
            <p>Sudah Ditagih</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="billing-box bg-warning text-dark">
            <h3>14</h3>
            <p>Jatuh Tempo Minggu Ini</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="billing-box bg-danger">
            <h3>10</h3>
            <p>Terlambat Billing</p>
          </div>
        </div>

      </div>

      <!-- TABLE -->
      <div class="card billing-card">

        <div class="card-header bg-primary text-white">
          <h5 class="mb-0">
            Jadwal Billing Client
          </h5>
        </div>

        <div class="card-body table-responsive">

          <!--
            Desain:
            - Fokus timeline billing
            - Menampilkan jadwal tagihan berkala
            - ERP style finance collection
          -->

          <table class="table table-bordered table-striped align-middle">

            <thead class="table-dark text-center">
              <tr>
                <th>Client</th>
                <th>Periode</th>
                <th>Billing Date</th>
                <th>Nominal</th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody>

              <tr>
                <td>PT Sinar Abadi</td>
                <td>Mei 2026</td>
                <td>10/05/2026</td>
                <td>Rp 15.000.000</td>
                <td class="text-center">
                  <span class="badge bg-success">
                    Sent
                  </span>
                </td>
              </tr>

              <tr>
                <td>PT Makmur Jaya</td>
                <td>Mei 2026</td>
                <td>14/05/2026</td>
                <td>Rp 22.000.000</td>
                <td class="text-center">
                  <span class="badge bg-warning text-dark">
                    Upcoming
                  </span>
                </td>
              </tr>

              <tr>
                <td>CV Berkah</td>
                <td>April 2026</td>
                <td>28/04/2026</td>
                <td>Rp 9.500.000</td>
                <td class="text-center">
                  <span class="badge bg-danger">
                    Late
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
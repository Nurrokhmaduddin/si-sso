<!-- ========================================================= -->
<!-- PAGE : finance-payment.php -->
<!-- STYLE : Executive Dashboard (Gaya A) -->
<!-- Fokus:
     - Payment received
     - Cash inflow
     - Monitoring pembayaran masuk
-->
<!-- ========================================================= -->

<?php $page = 'finance-payment'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Payment Received Dashboard
      </h3>

      <p class="text-muted mb-0">
        Monitoring pembayaran pelanggan dan cash inflow perusahaan.
      </p>

    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <style>
        .payment-card{
          border-radius:14px;
          overflow:hidden;
          box-shadow:0 2px 10px rgba(0,0,0,.08);
          margin-bottom:24px;
        }
      </style>

      <!-- KPI -->
      <div class="row">

        <div class="col-md-4">
          <div class="alert alert-success">
            <h4 class="mb-1">Rp 1.2 M</h4>
            Total Payment Masuk
          </div>
        </div>

        <div class="col-md-4">
          <div class="alert alert-info">
            <h4 class="mb-1">148</h4>
            Total Transaksi Payment
          </div>
        </div>

        <div class="col-md-4">
          <div class="alert alert-warning">
            <h4 class="mb-1">12</h4>
            Pending Verification
          </div>
        </div>

      </div>

      <!-- TABLE -->
      <div class="card payment-card">

        <div class="card-header bg-success text-white">
          <h5 class="mb-0">
            Riwayat Payment Received
          </h5>
        </div>

        <div class="card-body table-responsive">

          <!--
            Desain:
            - Fokus cash inflow realtime
            - Success dominan karena payment = pemasukan
            - Tabel operasional finance
          -->

          <table class="table table-bordered table-hover align-middle">

            <thead class="table-dark text-center">
              <tr>
                <th>Tanggal</th>
                <th>Client</th>
                <th>Invoice</th>
                <th>Metode</th>
                <th>Nominal</th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody>

              <tr>
                <td>08/05/2026</td>
                <td>PT Sinar Abadi</td>
                <td>INV-001</td>
                <td>Transfer Bank</td>
                <td class="fw-bold text-success">
                  Rp 18.000.000
                </td>
                <td class="text-center">
                  <span class="badge bg-success">
                    Verified
                  </span>
                </td>
              </tr>

              <tr>
                <td>08/05/2026</td>
                <td>CV Berkah</td>
                <td>INV-008</td>
                <td>Cash</td>
                <td class="fw-bold text-success">
                  Rp 7.500.000
                </td>
                <td class="text-center">
                  <span class="badge bg-info">
                    Received
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
<!-- ========================================================= -->
<!-- PAGE : finance-invoice.php -->
<!-- STYLE : Executive Dashboard (Gaya A) -->
<!-- Fokus:
     - KPI Invoice
     - Monitoring tagihan
     - Status invoice realtime
     - Visual finance operasional
-->
<!-- ========================================================= -->

<?php $page = 'finance-invoice'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Dashboard Invoice Client
      </h3>

      <p class="text-muted mb-0">
        Monitoring invoice pelanggan, status pembayaran, jatuh tempo, dan cash collection.
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
          border-radius:14px;
          padding:20px;
          color:#fff;
          margin-bottom:18px;
        }

        .summary-box h3{
          margin:0;
          font-weight:700;
        }

        .summary-box p{
          margin:0;
          opacity:.9;
        }
      </style>

      <!-- KPI -->
      <div class="row">

        <div class="col-md-3">
          <div class="summary-box bg-info">
            <h3>248</h3>
            <p>Total Invoice</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-success">
            <h3>Rp 842 JT</h3>
            <p>Invoice Paid</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-warning text-dark">
            <h3>18</h3>
            <p>Overdue Invoice</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-danger">
            <h3>Rp 120 JT</h3>
            <p>Outstanding</p>
          </div>
        </div>

      </div>

      <!-- TABLE -->
      <div class="card finance-card">

        <div class="card-header bg-info text-white">
          <h5 class="mb-0">
            Daftar Invoice Client
          </h5>
        </div>

        <div class="card-body table-responsive">

          <!--
            Desain:
            - Fokus monitoring invoice operasional
            - Warna info = invoice
            - Warning = overdue
            - Success = paid
            - Cocok untuk dashboard finance harian
          -->

          <table class="table table-bordered table-hover align-middle">

            <thead class="table-dark text-center">
              <tr>
                <th>No Invoice</th>
                <th>Tanggal</th>
                <th>Client</th>
                <th>Nominal</th>
                <th>Jatuh Tempo</th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody>

              <tr>
                <td>INV-2026-001</td>
                <td>01/05/2026</td>
                <td>PT Sinar Abadi</td>
                <td class="fw-bold">Rp 18.000.000</td>
                <td>15/05/2026</td>
                <td class="text-center">
                  <span class="badge bg-success">
                    Paid
                  </span>
                </td>
              </tr>

              <tr>
                <td>INV-2026-002</td>
                <td>03/05/2026</td>
                <td>CV Global Mandiri</td>
                <td class="fw-bold">Rp 12.500.000</td>
                <td>17/05/2026</td>
                <td class="text-center">
                  <span class="badge bg-warning text-dark">
                    Overdue
                  </span>
                </td>
              </tr>

              <tr>
                <td>INV-2026-003</td>
                <td>05/05/2026</td>
                <td>PT Multi Niaga</td>
                <td class="fw-bold">Rp 24.000.000</td>
                <td>20/05/2026</td>
                <td class="text-center">
                  <span class="badge bg-info">
                    Open Invoice
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
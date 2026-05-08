<!-- ========================================================= -->
<!-- PAGE : finance-ar.php -->
<!-- STYLE : Executive Dashboard (Gaya A) -->
<!-- FOKUS :
     - Accounts Receivable
     - Monitoring piutang pelanggan
     - Cashflow incoming
     - Aging receivable summary
-->
<!-- ========================================================= -->

<?php $page = 'finance-ar'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Accounts Receivable Dashboard
      </h3>

      <p class="text-muted mb-0">
        Monitoring piutang pelanggan, saldo outstanding, dan status pembayaran invoice.
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

      </style>

      <!-- ================================================= -->
      <!-- KPI -->
      <!-- ================================================= -->

      <div class="row">

        <div class="col-md-3">
          <div class="summary-box bg-info">
            <h3>Rp 1.2 M</h3>
            <p>Total Piutang</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-success">
            <h3>Rp 842 JT</h3>
            <p>Pembayaran Masuk</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-warning text-dark">
            <h3>18</h3>
            <p>Invoice Overdue</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-danger">
            <h3>Rp 320 JT</h3>
            <p>Outstanding</p>
          </div>
        </div>

      </div>

      <!-- ================================================= -->
      <!-- TABLE -->
      <!-- ================================================= -->

      <div class="card finance-card">

        <div class="card-header bg-primary text-white">
          <h5 class="mb-0">
            Daftar Accounts Receivable
          </h5>
        </div>

        <div class="card-body table-responsive">

          <!--
            Desain:
            - Fokus operasional finance
            - Menampilkan piutang aktif
            - Warna warning untuk overdue
            - Warna success untuk pembayaran masuk
          -->

          <table class="table table-bordered table-hover align-middle">

            <thead class="table-dark text-center">

              <tr>
                <th>Client</th>
                <th>Invoice</th>
                <th>Tanggal</th>
                <th>Jatuh Tempo</th>
                <th>Nominal</th>
                <th>Terbayar</th>
                <th>Sisa Piutang</th>
                <th>Status</th>
              </tr>

            </thead>

            <tbody>

              <tr>
                <td>PT Sinar Abadi</td>
                <td>INV-001</td>
                <td>01/05/2026</td>
                <td>15/05/2026</td>
                <td>Rp 18.000.000</td>
                <td class="text-success fw-bold">
                  Rp 10.000.000
                </td>
                <td class="text-danger fw-bold">
                  Rp 8.000.000
                </td>
                <td class="text-center">
                  <span class="badge bg-warning text-dark">
                    Partial
                  </span>
                </td>
              </tr>

              <tr>
                <td>CV Global Mandiri</td>
                <td>INV-003</td>
                <td>02/05/2026</td>
                <td>18/05/2026</td>
                <td>Rp 25.000.000</td>
                <td class="text-success fw-bold">
                  Rp 25.000.000
                </td>
                <td>Rp 0</td>
                <td class="text-center">
                  <span class="badge bg-success">
                    Paid
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
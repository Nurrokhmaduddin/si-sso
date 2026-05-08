<!-- ========================================================= -->
<!-- FILE : finance-monitor-cashflow.php -->
<!-- STYLE : REALTIME MONITORING TABLE -->
<!-- FOKUS :
- monitoring cashflow realtime
- transaksi masuk / keluar hari ini
- warning saldo minimum
- operational finance visibility
========================================================= -->

<?php $page = 'finance-monitor-cashflow'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Monitor Cashflow Realtime
      </h3>

      <p class="text-muted mb-0">
        Monitoring arus kas masuk dan keluar secara realtime untuk menjaga stabilitas cashflow perusahaan.
      </p>

    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <style>
        .monitor-card{
          border-radius:14px;
          overflow:hidden;
          box-shadow:0 2px 10px rgba(0,0,0,.08);
          margin-bottom:24px;
        }

        .summary-box{
          border-radius:12px;
          padding:18px;
          color:#fff;
          margin-bottom:16px;
        }

        .summary-box h3{
          margin:0;
          font-weight:700;
        }

        .summary-box p{
          margin:0;
          opacity:.9;
        }

        .table td,
        .table th{
          vertical-align:middle;
          font-size:13px;
        }
      </style>

      <!-- KPI -->
      <div class="row">

        <div class="col-md-3">
          <div class="summary-box bg-success">
            <h3>Rp 128 Jt</h3>
            <p>Cash In Hari Ini</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-danger">
            <h3>Rp 73 Jt</h3>
            <p>Cash Out Hari Ini</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-primary">
            <h3>Rp 1.8 M</h3>
            <p>Saldo Bank Aktif</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-warning text-dark">
            <h3>3</h3>
            <p>Warning Cashflow</p>
          </div>
        </div>

      </div>

      <!-- REALTIME TABLE -->
      <div class="card monitor-card">

        <div class="card-header bg-primary text-white">
          <h5 class="mb-0">
            Realtime Cashflow Activity
          </h5>
        </div>

        <div class="card-body table-responsive">

          <!--
          DESAIN:
          - fokus realtime movement
          - user finance dapat melihat transaksi berjalan
          - cocok untuk operational monitoring
          -->

          <table class="table table-bordered table-hover">

            <thead class="table-dark text-center">
              <tr>
                <th>Jam</th>
                <th>Ref</th>
                <th>Jenis</th>
                <th>Keterangan</th>
                <th>Masuk</th>
                <th>Keluar</th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody>

              <tr>
                <td>08:15</td>
                <td>INV-2026-001</td>
                <td><span class="badge bg-info">Invoice</span></td>
                <td>Pembayaran Client A</td>
                <td class="text-success fw-bold">25.000.000</td>
                <td>-</td>
                <td><span class="badge bg-success">Received</span></td>
              </tr>

              <tr>
                <td>09:10</td>
                <td>EXP-001</td>
                <td><span class="badge bg-danger">Expense</span></td>
                <td>Pembayaran Supplier</td>
                <td>-</td>
                <td class="text-danger fw-bold">12.000.000</td>
                <td><span class="badge bg-success">Approved</span></td>
              </tr>

              <tr>
                <td>10:30</td>
                <td>PAY-022</td>
                <td><span class="badge bg-primary">Transfer</span></td>
                <td>Transfer Antar Bank</td>
                <td>-</td>
                <td class="text-danger fw-bold">7.500.000</td>
                <td><span class="badge bg-warning text-dark">Pending</span></td>
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
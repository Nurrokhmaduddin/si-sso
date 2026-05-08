<?php $page = 'finance-dashboard'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">

  <!-- ===================================================== -->
  <!-- CONTENT HEADER -->
  <!-- ===================================================== -->
  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Dashboard Finance
        <button type="button"
                class="btn btn-tool"
                data-bs-toggle="modal"
                data-bs-target="#modalBantuan">

          <i class="fas fa-question-circle"></i>
        </button>
      </h3>

      <p class="text-muted mb-0">
        Monitoring cashflow, revenue, expense, invoice, AP/AR, dan profitabilitas bisnis secara realtime.
      </p>

    </div>
  </section>

  <!-- ===================================================== -->
  <!-- MAIN CONTENT -->
  <!-- ===================================================== -->
  <section class="content">
    <div class="container-fluid">

      <style>

        .finance-card{
          border-radius:14px;
          overflow:hidden;
          box-shadow:0 2px 10px rgba(0,0,0,0.08);
          margin-bottom:24px;
        }

        .finance-card .card-header{
          padding:16px 20px;
          font-weight:600;
        }

        .finance-summary-box{
          border-radius:14px;
          padding:20px;
          color:#fff;
          position:relative;
          overflow:hidden;
          margin-bottom:20px;
        }

        .finance-summary-box h3{
          margin:0;
          font-size:28px;
          font-weight:700;
        }

        .finance-summary-box p{
          margin:0;
          opacity:.9;
        }

        .finance-summary-box i{
          position:absolute;
          right:18px;
          bottom:15px;
          font-size:42px;
          opacity:.2;
        }

        .finance-table thead th{
          vertical-align:middle;
          white-space:nowrap;
          font-size:13px;
        }

        .finance-table tbody td{
          vertical-align:middle;
          font-size:13px;
        }

        .finance-mini-box{
          border-radius:12px;
          border:1px solid #e9ecef;
          padding:14px;
          background:#fff;
          height:100%;
        }

        .finance-mini-box small{
          color:#6c757d;
        }

        .finance-mini-box h5{
          margin-top:5px;
          margin-bottom:0;
          font-weight:700;
        }

        .finance-progress{
          height:10px;
          border-radius:20px;
        }

        .badge-soft{
          padding:6px 10px;
          border-radius:8px;
          font-size:11px;
        }

      </style>

      <!-- ===================================================== -->
      <!-- KPI SUMMARY -->
      <!-- ===================================================== -->
      <div class="row">

        <div class="col-md-3">
          <div class="finance-summary-box bg-success">

            <h3>Rp 245JT</h3>
            <p>Total Cash In</p>

            <i class="fas fa-arrow-down"></i>

          </div>
        </div>

        <div class="col-md-3">
          <div class="finance-summary-box bg-danger">

            <h3>Rp 168JT</h3>
            <p>Total Cash Out</p>

            <i class="fas fa-arrow-up"></i>

          </div>
        </div>

        <div class="col-md-3">
          <div class="finance-summary-box bg-info">

            <h3>42</h3>
            <p>Outstanding Invoice</p>

            <i class="fas fa-file-invoice"></i>

          </div>
        </div>

        <div class="col-md-3">
          <div class="finance-summary-box bg-warning text-dark">

            <h3>Rp 77JT</h3>
            <p>Net Profit</p>

            <i class="fas fa-chart-line"></i>

          </div>
        </div>

      </div>

      <!-- ===================================================== -->
      <!-- CASHFLOW OVERVIEW -->
      <!-- ===================================================== -->
      <div class="card finance-card">

        <div class="card-header bg-primary text-white">

          <div class="d-flex justify-content-between align-items-center flex-wrap">

            <div>
              <h5 class="mb-1">
                <i class="fas fa-wallet me-2"></i>
                Cashflow Overview
              </h5>

              <small>
                Ringkasan arus kas perusahaan bulan berjalan.
              </small>
            </div>

            <div class="d-flex gap-2">

              <button class="btn btn-light btn-sm">
                <i class="fas fa-filter me-1"></i>
                Filter
              </button>

              <button class="btn btn-success btn-sm">
                <i class="fas fa-file-excel me-1"></i>
                Export
              </button>

            </div>

          </div>

        </div>

        <div class="card-body">

          <div class="row mb-4">

            <div class="col-md-3">
              <div class="finance-mini-box">

                <small>Saldo Bank</small>
                <h5 class="text-primary">
                  Rp 512.450.000
                </h5>

              </div>
            </div>

            <div class="col-md-3">
              <div class="finance-mini-box">

                <small>Petty Cash</small>
                <h5 class="text-success">
                  Rp 12.200.000
                </h5>

              </div>
            </div>

            <div class="col-md-3">
              <div class="finance-mini-box">

                <small>Total Piutang</small>
                <h5 class="text-warning">
                  Rp 89.000.000
                </h5>

              </div>
            </div>

            <div class="col-md-3">
              <div class="finance-mini-box">

                <small>Total Hutang</small>
                <h5 class="text-danger">
                  Rp 41.500.000
                </h5>

              </div>
            </div>

          </div>

          <!-- TABLE -->
          <div class="table-responsive">

            <table class="table table-bordered table-hover finance-table align-middle">

              <thead class="table-dark text-center">
                <tr>
                  <th>Tanggal</th>
                  <th>Kategori</th>
                  <th>Deskripsi</th>
                  <th>Cash In</th>
                  <th>Cash Out</th>
                  <th>Balance</th>
                  <th>Status</th>
                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>01/05/2026</td>

                  <td>
                    <span class="badge bg-success badge-soft">
                      Sales Revenue
                    </span>
                  </td>

                  <td>Pembayaran Invoice INV-001</td>

                  <td class="text-success fw-bold">
                    + Rp 15.000.000
                  </td>

                  <td>-</td>

                  <td class="fw-bold">
                    Rp 210.000.000
                  </td>

                  <td class="text-center">
                    <span class="badge bg-success">
                      Received
                    </span>
                  </td>
                </tr>

                <tr>
                  <td>02/05/2026</td>

                  <td>
                    <span class="badge bg-danger badge-soft">
                      Operational Expense
                    </span>
                  </td>

                  <td>Pembayaran Supplier</td>

                  <td>-</td>

                  <td class="text-danger fw-bold">
                    - Rp 8.500.000
                  </td>

                  <td class="fw-bold">
                    Rp 201.500.000
                  </td>

                  <td class="text-center">
                    <span class="badge bg-danger">
                      Paid
                    </span>
                  </td>
                </tr>

                <tr>
                  <td>03/05/2026</td>

                  <td>
                    <span class="badge bg-warning text-dark badge-soft">
                      Overdue Invoice
                    </span>
                  </td>

                  <td>Invoice INV-009 belum dibayar</td>

                  <td>-</td>

                  <td>-</td>

                  <td class="fw-bold">
                    Rp 201.500.000
                  </td>

                  <td class="text-center">
                    <span class="badge bg-warning text-dark">
                      Overdue
                    </span>
                  </td>
                </tr>

                <tr>
                  <td>05/05/2026</td>

                  <td>
                    <span class="badge bg-info badge-soft">
                      Client Invoice
                    </span>
                  </td>

                  <td>Generate Invoice Project</td>

                  <td class="text-info fw-bold">
                    Rp 22.000.000
                  </td>

                  <td>-</td>

                  <td class="fw-bold">
                    Rp 223.500.000
                  </td>

                  <td class="text-center">
                    <span class="badge bg-info">
                      Invoice
                    </span>
                  </td>
                </tr>

              </tbody>

            </table>

          </div>

        </div>

      </div>

      <!-- ===================================================== -->
      <!-- QUICK MONITORING -->
      <!-- ===================================================== -->
      <div class="row">

        <!-- AP -->
        <div class="col-md-4">

          <div class="card finance-card">

            <div class="card-header bg-danger text-white">
              Accounts Payable
            </div>

            <div class="card-body">

              <h3 class="text-danger fw-bold">
                Rp 41.500.000
              </h3>

              <p class="text-muted mb-3">
                Total hutang supplier aktif.
              </p>

              <div class="progress finance-progress mb-2">
                <div class="progress-bar bg-danger"
                     style="width:72%">
                </div>
              </div>

              <small class="text-muted">
                72% jatuh tempo minggu ini
              </small>

            </div>

          </div>

        </div>

        <!-- AR -->
        <div class="col-md-4">

          <div class="card finance-card">

            <div class="card-header bg-warning text-dark">
              Accounts Receivable
            </div>

            <div class="card-body">

              <h3 class="text-warning fw-bold">
                Rp 89.000.000
              </h3>

              <p class="text-muted mb-3">
                Piutang customer belum tertagih.
              </p>

              <div class="progress finance-progress mb-2">
                <div class="progress-bar bg-warning"
                     style="width:48%">
                </div>
              </div>

              <small class="text-muted">
                48% invoice belum dibayar
              </small>

            </div>

          </div>

        </div>

        <!-- PROFIT -->
        <div class="col-md-4">

          <div class="card finance-card">

            <div class="card-header bg-success text-white">
              Profitability
            </div>

            <div class="card-body">

              <h3 class="text-success fw-bold">
                31.4%
              </h3>

              <p class="text-muted mb-3">
                Margin keuntungan bulan berjalan.
              </p>

              <div class="progress finance-progress mb-2">
                <div class="progress-bar bg-success"
                     style="width:31%">
                </div>
              </div>

              <small class="text-muted">
                Profit meningkat dari bulan lalu
              </small>

            </div>

          </div>

        </div>

      </div>

      <!-- ===================================================== -->
      <!-- FINANCE ACTIVITY -->
      <!-- ===================================================== -->
      <div class="card finance-card">

        <div class="card-header bg-dark text-white">

          <h5 class="mb-0">
            <i class="fas fa-history me-2"></i>
            Recent Finance Activity
          </h5>

        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-striped finance-table align-middle">

            <thead class="table-dark text-center">
              <tr>
                <th>Jam</th>
                <th>User</th>
                <th>Aktivitas</th>
                <th>Ref</th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody>

              <tr>
                <td>08:12</td>
                <td>Finance Admin</td>
                <td>Create Invoice Client</td>
                <td>INV-2026-001</td>

                <td class="text-center">
                  <span class="badge bg-info">
                    Invoice
                  </span>
                </td>
              </tr>

              <tr>
                <td>09:20</td>
                <td>Finance Manager</td>
                <td>Approve Expense Marketing</td>
                <td>EXP-0021</td>

                <td class="text-center">
                  <span class="badge bg-success">
                    Approved
                  </span>
                </td>
              </tr>

              <tr>
                <td>10:11</td>
                <td>System</td>
                <td>Invoice Overdue Reminder</td>
                <td>INV-009</td>

                <td class="text-center">
                  <span class="badge bg-warning text-dark">
                    Reminder
                  </span>
                </td>
              </tr>

              <tr>
                <td>11:00</td>
                <td>Cashier</td>
                <td>Petty Cash Withdrawal</td>
                <td>PC-0008</td>

                <td class="text-center">
                  <span class="badge bg-danger">
                    Cash Out
                  </span>
                </td>
              </tr>

            </tbody>

          </table>

        </div>

      </div>
-----------
      <style>

        .finance-card{
          border-radius:14px;
          overflow:hidden;
          box-shadow:0 2px 10px rgba(0,0,0,.08);
          margin-bottom:24px;
        }

        .summary-box{
          border-radius:12px;
          padding:20px;
          color:#fff;
          margin-bottom:16px;
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
          <div class="summary-box bg-success">
            <h3>Rp 2.8 M</h3>
            <p>Total Revenue</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-danger">
            <h3>Rp 1.9 M</h3>
            <p>Total Expense</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-info">
            <h3>148</h3>
            <p>Total Invoice</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-warning text-dark">
            <h3>12</h3>
            <p>Overdue Invoice</p>
          </div>
        </div>

      </div>

      <!-- ================================================= -->
      <!-- DASHBOARD -->
      <!-- ================================================= -->

      <div class="card finance-card">

        <div class="card-header bg-primary text-white">

          <h5 class="mb-0">
            Executive Financial Monitoring
          </h5>

        </div>

        <div class="card-body">

          <!-- ============================================= -->
          <!-- DESIGN :
               halaman utama finance harus:
               - visual
               - cepat dipahami owner
               - KPI oriented
               - monitoring cepat
          ============================================== -->

          <div class="alert alert-info">

            Area chart:
            Revenue vs Expense vs Profit Trend.

          </div>

          <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

              <thead class="table-dark text-center">

                <tr>
                  <th>Metric</th>
                  <th>Hari Ini</th>
                  <th>Bulan Ini</th>
                  <th>Status</th>
                </tr>

              </thead>

              <tbody>

                <tr>

                  <td>Total Cash In</td>

                  <td class="text-success fw-bold">
                    Rp 28 JT
                  </td>

                  <td class="text-success fw-bold">
                    Rp 842 JT
                  </td>

                  <td class="text-center">
                    <span class="badge bg-success">
                      Healthy
                    </span>
                  </td>

                </tr>

                <tr>

                  <td>Total Cash Out</td>

                  <td class="text-danger fw-bold">
                    Rp 12 JT
                  </td>

                  <td class="text-danger fw-bold">
                    Rp 482 JT
                  </td>

                  <td class="text-center">
                    <span class="badge bg-warning text-dark">
                      Controlled
                    </span>
                  </td>

                </tr>

                <tr>

                  <td>Overdue Invoice</td>

                  <td class="text-warning fw-bold">
                    2 Invoice
                  </td>

                  <td class="text-warning fw-bold">
                    12 Invoice
                  </td>

                  <td class="text-center">
                    <span class="badge bg-danger">
                      Warning
                    </span>
                  </td>

                </tr>

              </tbody>

            </table>

          </div>

        </div>

      </div>




    </div>
  </section>
</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
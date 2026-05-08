<?php $page = 'sales-dashboard-sales-kpi'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height:100vh;">

  <!-- ===================================================== -->
  <!-- CONTENT HEADER -->
  <!-- ===================================================== -->
  <section class="content-header">

    <div class="container-fluid">

      <div class="d-flex justify-content-between align-items-center flex-wrap">

        <div>

          <h3 class="mb-1">

            Dashboard Sales KPI

            <button type="button"
                    class="btn btn-tool"
                    data-bs-toggle="modal"
                    data-bs-target="#modalBantuan">

              <i class="fas fa-question-circle"></i>

            </button>

          </h3>

          <p class="text-muted mb-0">
            Executive dashboard untuk monitoring performa sales, revenue,
            pipeline, conversion, dan aktivitas closing secara realtime.
          </p>

        </div>

        <div>

          <button class="btn btn-primary btn-sm">
            <i class="fas fa-sync-alt mr-1"></i>
            Refresh Dashboard
          </button>

        </div>

      </div>

    </div>

  </section>

  <!-- ===================================================== -->
  <!-- MAIN CONTENT -->
  <!-- ===================================================== -->
  <section class="content">

    <div class="container-fluid">

      <!-- ===================================================== -->
      <!-- STYLE -->
      <!-- ===================================================== -->
      <style>

        .sales-card{
          border-radius:14px;
          overflow:hidden;
          border:none;
          box-shadow:0 2px 10px rgba(0,0,0,.08);
          margin-bottom:24px;
        }

        .sales-card .card-header{
          padding:16px 20px;
          font-weight:600;
        }

        .summary-box{
          border-radius:14px;
          padding:20px;
          color:#fff;
          position:relative;
          overflow:hidden;
          margin-bottom:20px;
        }

        .summary-box h3{
          margin:0;
          font-size:28px;
          font-weight:700;
        }

        .summary-box p{
          margin:0;
          opacity:.9;
        }

        .summary-box i{
          position:absolute;
          right:15px;
          bottom:10px;
          font-size:42px;
          opacity:.18;
        }

        .mini-box{
          border:1px solid #e9ecef;
          border-radius:12px;
          padding:15px;
          background:#fff;
          height:100%;
        }

        .mini-box small{
          color:#6c757d;
        }

        .mini-box h5{
          margin-top:6px;
          margin-bottom:0;
          font-weight:700;
        }

        .dashboard-table thead th{
          white-space:nowrap;
          font-size:13px;
          vertical-align:middle;
        }

        .dashboard-table tbody td{
          font-size:13px;
          vertical-align:middle;
        }

        .progress{
          height:10px;
          border-radius:20px;
        }

        .chart-placeholder{
          height:320px;
          border-radius:12px;
          border:2px dashed #ced4da;
          background:#f8f9fa;
          display:flex;
          align-items:center;
          justify-content:center;
          color:#6c757d;
          font-size:18px;
          font-weight:600;
        }

        .badge-soft{
          padding:6px 10px;
          border-radius:8px;
          font-size:11px;
        }

      </style>

      <!-- ===================================================== -->
      <!-- KPI SUMMARY -->
      <!-- DASHBOARD = RINGKAS, VISUAL, HIGH LEVEL -->
      <!-- ===================================================== -->
      <div class="row">

        <div class="col-md-3">

          <div class="summary-box bg-primary">

            <h3>Rp 1.24 M</h3>
            <p>Total Revenue Bulan Ini</p>

            <i class="fas fa-wallet"></i>

          </div>

        </div>

        <div class="col-md-3">

          <div class="summary-box bg-success">

            <h3>148</h3>
            <p>Total Closing Deal</p>

            <i class="fas fa-handshake"></i>

          </div>

        </div>

        <div class="col-md-3">

          <div class="summary-box bg-warning text-dark">

            <h3>62%</h3>
            <p>Conversion Rate</p>

            <i class="fas fa-chart-pie"></i>

          </div>

        </div>

        <div class="col-md-3">

          <div class="summary-box bg-danger">

            <h3>21</h3>
            <p>Outstanding Quotation</p>

            <i class="fas fa-file-signature"></i>

          </div>

        </div>

      </div>

      <!-- ===================================================== -->
      <!-- TARGET VS REALISASI -->
      <!-- DASHBOARD HARUS ADA KPI & TARGET -->
      <!-- ===================================================== -->
      <div class="card sales-card">

        <div class="card-header bg-primary text-white">

          <div class="d-flex justify-content-between align-items-center flex-wrap">

            <div>

              <h5 class="mb-1">
                <i class="fas fa-bullseye mr-2"></i>
                Revenue Target Achievement
              </h5>

              <small>
                Perbandingan target dan realisasi sales bulan berjalan.
              </small>

            </div>

            <div>

              <button class="btn btn-light btn-sm">

                <i class="fas fa-filter mr-1"></i>
                Filter Period

              </button>

            </div>

          </div>

        </div>

        <div class="card-body">

          <div class="row">

            <div class="col-md-3">

              <div class="mini-box">

                <small>Target Revenue</small>

                <h5 class="text-primary">
                  Rp 2.000.000.000
                </h5>

              </div>

            </div>

            <div class="col-md-3">

              <div class="mini-box">

                <small>Actual Revenue</small>

                <h5 class="text-success">
                  Rp 1.240.000.000
                </h5>

              </div>

            </div>

            <div class="col-md-3">

              <div class="mini-box">

                <small>Achievement</small>

                <h5 class="text-warning">
                  62%
                </h5>

              </div>

            </div>

            <div class="col-md-3">

              <div class="mini-box">

                <small>Growth vs Last Month</small>

                <h5 class="text-danger">
                  +18%
                </h5>

              </div>

            </div>

          </div>

          <hr>

          <div class="mb-2 d-flex justify-content-between">

            <span class="fw-bold">
              Revenue Progress
            </span>

            <span class="fw-bold text-primary">
              62%
            </span>

          </div>

          <div class="progress">

            <div class="progress-bar bg-primary"
                 style="width:62%">
            </div>

          </div>

        </div>

      </div>

      <!-- ===================================================== -->
      <!-- SALES PERFORMANCE CHART -->
      <!-- DASHBOARD = VISUAL -->
      <!-- ===================================================== -->
      <div class="card sales-card">

        <div class="card-header bg-info text-white">

          <h5 class="mb-0">

            <i class="fas fa-chart-line mr-2"></i>
            Sales Performance Trend

          </h5>

        </div>

        <div class="card-body">

          <div class="chart-placeholder">

            AREA CHART PLACEHOLDER
            <br>
            Revenue vs Closing vs Pipeline

          </div>

        </div>

      </div>

      <!-- ===================================================== -->
      <!-- QUICK HIGHLIGHT -->
      <!-- DASHBOARD = HIGHLIGHT PERFORMA -->
      <!-- ===================================================== -->
      <div class="row">

        <div class="col-md-4">

          <div class="card sales-card">

            <div class="card-header bg-success text-white">

              Top Sales Person

            </div>

            <div class="card-body">

              <h3 class="text-success fw-bold">
                Michael Tan
              </h3>

              <p class="text-muted mb-2">
                Revenue tertinggi bulan ini.
              </p>

              <div class="progress mb-2">

                <div class="progress-bar bg-success"
                     style="width:88%">
                </div>

              </div>

              <small class="text-muted">
                Achievement target: 88%
              </small>

            </div>

          </div>

        </div>

        <div class="col-md-4">

          <div class="card sales-card">

            <div class="card-header bg-warning text-dark">

              Top Product

            </div>

            <div class="card-body">

              <h3 class="text-warning fw-bold">
                Industrial Pump X1
              </h3>

              <p class="text-muted mb-2">
                Produk paling banyak closing.
              </p>

              <div class="progress mb-2">

                <div class="progress-bar bg-warning"
                     style="width:73%">
                </div>

              </div>

              <small class="text-muted">
                Contribution revenue: 73%
              </small>

            </div>

          </div>

        </div>

        <div class="col-md-4">

          <div class="card sales-card">

            <div class="card-header bg-danger text-white">

              Warning Alert

            </div>

            <div class="card-body">

              <h3 class="text-danger fw-bold">
                21 Quotation
              </h3>

              <p class="text-muted mb-2">
                Belum follow up lebih dari 7 hari.
              </p>

              <div class="progress mb-2">

                <div class="progress-bar bg-danger"
                     style="width:41%">
                </div>

              </div>

              <small class="text-muted">
                Membutuhkan tindakan sales segera.
              </small>

            </div>

          </div>

        </div>

      </div>

      <!-- ===================================================== -->
      <!-- EXECUTIVE SUMMARY -->
      <!-- DASHBOARD = HIGH LEVEL TABLE -->
      <!-- ===================================================== -->
      <div class="card sales-card">

        <div class="card-header bg-dark text-white">

          <div class="d-flex justify-content-between align-items-center flex-wrap">

            <div>

              <h5 class="mb-1">

                <i class="fas fa-chart-bar mr-2"></i>
                Executive Sales Summary

              </h5>

              <small>
                Ringkasan performa sales berdasarkan kategori bisnis.
              </small>

            </div>

            <div>

              <button class="btn btn-success btn-sm">

                <i class="fas fa-file-excel mr-1"></i>
                Export Excel

              </button>

            </div>

          </div>

        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-hover dashboard-table align-middle">

            <thead class="table-dark text-center">

              <tr>

                <th>Kategori</th>
                <th>Hari Ini</th>
                <th>Bulan Ini</th>
                <th>Target</th>
                <th>Achievement</th>
                <th>Status</th>

              </tr>

            </thead>

            <tbody>

              <tr>

                <td>Total Revenue</td>

                <td class="text-success fw-bold">
                  Rp 48 JT
                </td>

                <td class="text-success fw-bold">
                  Rp 1.24 M
                </td>

                <td>
                  Rp 2 M
                </td>

                <td class="fw-bold">
                  62%
                </td>

                <td class="text-center">

                  <span class="badge bg-success">
                    Good
                  </span>

                </td>

              </tr>

              <tr>

                <td>Closing Deal</td>

                <td class="fw-bold">
                  8 Deal
                </td>

                <td class="fw-bold">
                  148 Deal
                </td>

                <td>
                  200 Deal
                </td>

                <td class="fw-bold">
                  74%
                </td>

                <td class="text-center">

                  <span class="badge bg-info">
                    Stable
                  </span>

                </td>

              </tr>

              <tr>

                <td>Outstanding Quotation</td>

                <td class="text-danger fw-bold">
                  3
                </td>

                <td class="text-danger fw-bold">
                  21
                </td>

                <td>
                  Max 10
                </td>

                <td class="fw-bold">
                  210%
                </td>

                <td class="text-center">

                  <span class="badge bg-danger">
                    Warning
                  </span>

                </td>

              </tr>

              <tr>

                <td>Conversion Rate</td>

                <td class="text-primary fw-bold">
                  61%
                </td>

                <td class="text-primary fw-bold">
                  62%
                </td>

                <td>
                  70%
                </td>

                <td class="fw-bold">
                  88%
                </td>

                <td class="text-center">

                  <span class="badge bg-warning text-dark">
                    Need Improvement
                  </span>

                </td>

              </tr>

            </tbody>

          </table>

        </div>

      </div>

      <!-- ===================================================== -->
      <!-- RECENT SALES ACTIVITY -->
      <!-- DASHBOARD = RINGKAS ACTIVITY -->
      <!-- ===================================================== -->
      <div class="card sales-card">

        <div class="card-header bg-secondary text-white">

          <h5 class="mb-0">

            <i class="fas fa-history mr-2"></i>
            Recent Sales Activity

          </h5>

        </div>

        <div class="card-body table-responsive">

          <table class="table table-striped table-bordered dashboard-table align-middle">

            <thead class="table-dark text-center">

              <tr>

                <th>Jam</th>
                <th>Sales</th>
                <th>Aktivitas</th>
                <th>Customer</th>
                <th>Status</th>

              </tr>

            </thead>

            <tbody>

              <tr>

                <td>08:11</td>

                <td>Rudi</td>

                <td>Create Quotation</td>

                <td>PT Maju Teknik</td>

                <td class="text-center">

                  <span class="badge bg-info">
                    Quotation
                  </span>

                </td>

              </tr>

              <tr>

                <td>09:30</td>

                <td>Sarah</td>

                <td>Closing Deal</td>

                <td>CV Indo Pump</td>

                <td class="text-center">

                  <span class="badge bg-success">
                    Closed Won
                  </span>

                </td>

              </tr>

              <tr>

                <td>10:20</td>

                <td>Michael</td>

                <td>Follow Up Client</td>

                <td>PT Energi Jaya</td>

                <td class="text-center">

                  <span class="badge bg-warning text-dark">
                    Follow Up
                  </span>

                </td>

              </tr>

              <tr>

                <td>11:02</td>

                <td>System</td>

                <td>Quotation Overdue Alert</td>

                <td>PT Mega Industrial</td>

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

  </section>

</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
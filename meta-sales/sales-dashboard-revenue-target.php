<!-- FILE : sales-dashboard-revenue-target.php -->

<?php $page = 'sales-dashboard-revenue-target'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <!-- ===================================================== -->
  <!-- CONTENT HEADER -->
  <!-- ===================================================== -->
  <section class="content-header">
    <div class="container-fluid">

      <div class="d-flex justify-content-between align-items-center flex-wrap">

        <div>
          <h3 class="mb-1">
            Dashboard Revenue & Target

            <button type="button"
                    class="btn btn-tool"
                    data-bs-toggle="modal"
                    data-bs-target="#modalBantuan">

              <i class="fas fa-question-circle"></i>

            </button>
          </h3>

          <p class="text-muted mb-0">
            Monitoring pencapaian omzet penjualan, target sales, growth revenue,
            dan performa realisasi bisnis secara realtime.
          </p>
        </div>

        <div>
          <button class="btn btn-success btn-sm">
            <i class="fas fa-file-excel me-1"></i>
            Export Dashboard
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

      <style>

        .sales-card{
          border-radius:14px;
          overflow:hidden;
          box-shadow:0 2px 10px rgba(0,0,0,.08);
          margin-bottom:24px;
          border:none;
        }

        .sales-summary{
          border-radius:14px;
          padding:22px;
          color:#fff;
          position:relative;
          overflow:hidden;
          margin-bottom:20px;
        }

        .sales-summary h3{
          margin:0;
          font-size:28px;
          font-weight:700;
        }

        .sales-summary p{
          margin:0;
          opacity:.9;
        }

        .sales-summary i{
          position:absolute;
          right:18px;
          bottom:12px;
          font-size:42px;
          opacity:.18;
        }

        .sales-mini-box{
          border:1px solid #e9ecef;
          border-radius:12px;
          padding:16px;
          background:#fff;
          height:100%;
        }

        .sales-mini-box small{
          color:#6c757d;
        }

        .sales-mini-box h5{
          margin-top:6px;
          margin-bottom:0;
          font-weight:700;
        }

        .sales-progress{
          height:10px;
          border-radius:30px;
        }

        .sales-table thead th{
          font-size:13px;
          white-space:nowrap;
          vertical-align:middle;
        }

        .sales-table tbody td{
          font-size:13px;
          vertical-align:middle;
        }

      </style>

      <!-- ===================================================== -->
      <!-- KPI SUMMARY -->
      <!-- ===================================================== -->
      <div class="row">

        <div class="col-md-3">

          <div class="sales-summary bg-success">

            <h3>Rp 4.2 M</h3>
            <p>Total Revenue Bulan Ini</p>

            <i class="fas fa-wallet"></i>

          </div>

        </div>

        <div class="col-md-3">

          <div class="sales-summary bg-primary">

            <h3>82%</h3>
            <p>Pencapaian Target</p>

            <i class="fas fa-bullseye"></i>

          </div>

        </div>

        <div class="col-md-3">

          <div class="sales-summary bg-warning text-dark">

            <h3>+14%</h3>
            <p>Growth Revenue</p>

            <i class="fas fa-chart-line"></i>

          </div>

        </div>

        <div class="col-md-3">

          <div class="sales-summary bg-danger">

            <h3>Rp 920 JT</h3>
            <p>Sisa Target</p>

            <i class="fas fa-exclamation-triangle"></i>

          </div>

        </div>

      </div>

      <!-- ===================================================== -->
      <!-- TARGET VS REALIZATION -->
      <!-- ===================================================== -->
      <div class="card sales-card">

        <div class="card-header bg-primary text-white">

          <div class="d-flex justify-content-between align-items-center flex-wrap">

            <div>
              <h5 class="mb-1">
                <i class="fas fa-chart-bar me-2"></i>
                Revenue vs Target
              </h5>

              <small>
                Monitoring pencapaian omzet penjualan terhadap target bisnis.
              </small>
            </div>

            <div>

              <button class="btn btn-light btn-sm">
                <i class="fas fa-filter me-1"></i>
                Filter Periode
              </button>

            </div>

          </div>

        </div>

        <div class="card-body">

          <div class="row mb-4">

            <div class="col-md-3">

              <div class="sales-mini-box">

                <small>Target Tahunan</small>

                <h5 class="text-primary">
                  Rp 48 M
                </h5>

              </div>

            </div>

            <div class="col-md-3">

              <div class="sales-mini-box">

                <small>Realisasi Saat Ini</small>

                <h5 class="text-success">
                  Rp 39.4 M
                </h5>

              </div>

            </div>

            <div class="col-md-3">

              <div class="sales-mini-box">

                <small>Average Revenue / Bulan</small>

                <h5 class="text-info">
                  Rp 3.2 M
                </h5>

              </div>

            </div>

            <div class="col-md-3">

              <div class="sales-mini-box">

                <small>Forecast Akhir Tahun</small>

                <h5 class="text-warning">
                  Rp 51.8 M
                </h5>

              </div>

            </div>

          </div>

          <div class="alert alert-info">

            Area chart:
            Revenue Actual vs Target per bulan.

          </div>

          <div class="table-responsive">

            <table class="table table-bordered table-hover sales-table align-middle">

              <thead class="table-dark text-center">

                <tr>
                  <th>Bulan</th>
                  <th>Target</th>
                  <th>Realisasi</th>
                  <th>Achievement</th>
                  <th>Growth</th>
                  <th>Status</th>
                </tr>

              </thead>

              <tbody>

                <tr>

                  <td>Januari</td>

                  <td>Rp 3.5 M</td>

                  <td class="text-success fw-bold">
                    Rp 3.8 M
                  </td>

                  <td>

                    <div class="progress sales-progress">

                      <div class="progress-bar bg-success"
                           style="width:108%">
                      </div>

                    </div>

                    <small>108%</small>

                  </td>

                  <td class="text-success fw-bold">
                    +12%
                  </td>

                  <td class="text-center">

                    <span class="badge bg-success">
                      Above Target
                    </span>

                  </td>

                </tr>

                <tr>

                  <td>Februari</td>

                  <td>Rp 3.7 M</td>

                  <td class="text-primary fw-bold">
                    Rp 3.4 M
                  </td>

                  <td>

                    <div class="progress sales-progress">

                      <div class="progress-bar bg-warning"
                           style="width:92%">
                      </div>

                    </div>

                    <small>92%</small>

                  </td>

                  <td class="text-danger fw-bold">
                    -4%
                  </td>

                  <td class="text-center">

                    <span class="badge bg-warning text-dark">
                      Near Target
                    </span>

                  </td>

                </tr>

                <tr>

                  <td>Maret</td>

                  <td>Rp 4.0 M</td>

                  <td class="text-danger fw-bold">
                    Rp 3.1 M
                  </td>

                  <td>

                    <div class="progress sales-progress">

                      <div class="progress-bar bg-danger"
                           style="width:77%">
                      </div>

                    </div>

                    <small>77%</small>

                  </td>

                  <td class="text-danger fw-bold">
                    -11%
                  </td>

                  <td class="text-center">

                    <span class="badge bg-danger">
                      Under Target
                    </span>

                  </td>

                </tr>

                <tr>

                  <td>April</td>

                  <td>Rp 4.1 M</td>

                  <td class="text-success fw-bold">
                    Rp 4.5 M
                  </td>

                  <td>

                    <div class="progress sales-progress">

                      <div class="progress-bar bg-success"
                           style="width:110%">
                      </div>

                    </div>

                    <small>110%</small>

                  </td>

                  <td class="text-success fw-bold">
                    +18%
                  </td>

                  <td class="text-center">

                    <span class="badge bg-success">
                      Excellent
                    </span>

                  </td>

                </tr>

              </tbody>

            </table>

          </div>

        </div>

      </div>

      <!-- ===================================================== -->
      <!-- SALES CHANNEL PERFORMANCE -->
      <!-- ===================================================== -->
      <div class="row">

        <div class="col-md-4">

          <div class="card sales-card">

            <div class="card-header bg-success text-white">
              Retail Channel
            </div>

            <div class="card-body">

              <h3 class="fw-bold text-success">
                Rp 1.8 M
              </h3>

              <p class="text-muted">
                Kontribusi revenue dari penjualan retail.
              </p>

              <div class="progress sales-progress mb-2">

                <div class="progress-bar bg-success"
                     style="width:72%">
                </div>

              </div>

              <small class="text-muted">
                72% dari target retail tercapai
              </small>

            </div>

          </div>

        </div>

        <div class="col-md-4">

          <div class="card sales-card">

            <div class="card-header bg-info text-white">
              Corporate Channel
            </div>

            <div class="card-body">

              <h3 class="fw-bold text-info">
                Rp 1.4 M
              </h3>

              <p class="text-muted">
                Penjualan project dan corporate customer.
              </p>

              <div class="progress sales-progress mb-2">

                <div class="progress-bar bg-info"
                     style="width:61%">
                </div>

              </div>

              <small class="text-muted">
                Corporate deal masih berkembang
              </small>

            </div>

          </div>

        </div>

        <div class="col-md-4">

          <div class="card sales-card">

            <div class="card-header bg-warning text-dark">
              Marketplace Channel
            </div>

            <div class="card-body">

              <h3 class="fw-bold text-warning">
                Rp 980 JT
              </h3>

              <p class="text-muted">
                Penjualan online marketplace & ecommerce.
              </p>

              <div class="progress sales-progress mb-2">

                <div class="progress-bar bg-warning"
                     style="width:88%">
                </div>

              </div>

              <small class="text-muted">
                Marketplace growth sangat baik
              </small>

            </div>

          </div>

        </div>

      </div>

      <!-- ===================================================== -->
      <!-- EXECUTIVE HIGHLIGHT -->
      <!-- ===================================================== -->
      <div class="card sales-card">

        <div class="card-header bg-dark text-white">

          <h5 class="mb-0">
            <i class="fas fa-lightbulb me-2"></i>
            Executive Highlight
          </h5>

        </div>

        <div class="card-body">

          <div class="row">

            <div class="col-md-6">

              <div class="alert alert-success">

                <h6 class="fw-bold">
                  Revenue Growth Positif
                </h6>

                Revenue meningkat 14% dibanding periode sebelumnya.
                Produk kategori elektronik menjadi penyumbang tertinggi.

              </div>

            </div>

            <div class="col-md-6">

              <div class="alert alert-warning">

                <h6 class="fw-bold">
                  Perlu Perhatian
                </h6>

                Target regional timur masih di bawah 80%.
                Dibutuhkan peningkatan follow up sales project.

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
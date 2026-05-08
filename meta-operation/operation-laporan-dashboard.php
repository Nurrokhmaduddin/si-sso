<!-- FILE : operation-laporan-dashboard.php -->
<?php $page = 'operation-laporan-dashboard'; ?>
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

            Operation Dashboard (Dagang)

            <button type="button"
                    class="btn btn-tool"
                    data-bs-toggle="modal"
                    data-bs-target="#modalBantuan">

              <i class="fas fa-question-circle"></i>

            </button>

          </h3>

          <p class="text-muted mb-0">
            Ringkasan operasional perusahaan dagang: pembelian, stok gudang,
            pengiriman, dan fulfillment order secara high level.
          </p>

        </div>

        <div>

          <button class="btn btn-primary btn-sm">
            <i class="fas fa-sync-alt mr-1"></i>
            Refresh
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

        .op-card{
          border-radius:14px;
          overflow:hidden;
          border:none;
          box-shadow:0 2px 10px rgba(0,0,0,.08);
          margin-bottom:24px;
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

        .chart-placeholder{
          height:300px;
          border-radius:12px;
          border:2px dashed #ced4da;
          background:#f8f9fa;
          display:flex;
          align-items:center;
          justify-content:center;
          color:#6c757d;
          font-weight:600;
        }

        .table thead th{
          font-size:13px;
          white-space:nowrap;
        }

        .table tbody td{
          font-size:13px;
          vertical-align:middle;
        }

        .badge-soft{
          padding:6px 10px;
          border-radius:8px;
          font-size:11px;
        }

      </style>

      <!-- ===================================================== -->
      <!-- KPI SUMMARY (HIGH LEVEL OPERASIONAL DAGANG) -->
      <!-- ===================================================== -->
      <div class="row">

        <div class="col-md-3">

          <div class="summary-box bg-primary">

            <h3>1.240</h3>
            <p>Total Sales Order</p>

            <i class="fas fa-shopping-cart"></i>

          </div>

        </div>

        <div class="col-md-3">

          <div class="summary-box bg-success">

            <h3>98.2%</h3>
            <p>Order Fulfillment Rate</p>

            <i class="fas fa-boxes"></i>

          </div>

        </div>

        <div class="col-md-3">

          <div class="summary-box bg-warning text-dark">

            <h3>312</h3>
            <p>Stock SKU Active</p>

            <i class="fas fa-warehouse"></i>

          </div>

        </div>

        <div class="col-md-3">

          <div class="summary-box bg-danger">

            <h3>47</h3>
            <p>Backorder / Pending</p>

            <i class="fas fa-exclamation-triangle"></i>

          </div>

        </div>

      </div>

      <!-- ===================================================== -->
      <!-- OPERATION CORE (PURCHASE - STOCK - DELIVERY) -->
      <!-- ===================================================== -->
      <div class="card op-card">

        <div class="card-header bg-dark text-white">

          <h5 class="mb-0">
            <i class="fas fa-cubes mr-2"></i>
            Core Operational Flow (Purchase → Stock → Delivery)
          </h5>

        </div>

        <div class="card-body">

          <div class="row">

            <div class="col-md-4">

              <div class="mini-box">

                <small>Purchase Order Incoming</small>
                <h5 class="text-primary">Rp 2.8 M</h5>

                <small class="text-muted">
                  Barang masuk dari supplier bulan ini
                </small>

              </div>

            </div>

            <div class="col-md-4">

              <div class="mini-box">

                <small>Inventory Value</small>
                <h5 class="text-success">Rp 5.6 M</h5>

                <small class="text-muted">
                  Total nilai stok gudang saat ini
                </small>

              </div>

            </div>

            <div class="col-md-4">

              <div class="mini-box">

                <small>Goods Shipped</small>
                <h5 class="text-warning">Rp 3.1 M</h5>

                <small class="text-muted">
                  Nilai barang keluar ke customer
                </small>

              </div>

            </div>

          </div>

          <hr>

          <div class="chart-placeholder">
            CHART: STOCK FLOW (IN - OUT - BALANCE)
          </div>

        </div>

      </div>

      <!-- ===================================================== -->
      <!-- WAREHOUSE PERFORMANCE -->
      <!-- ===================================================== -->
      <div class="card op-card">

        <div class="card-header bg-info text-white">

          <h5 class="mb-0">
            <i class="fas fa-warehouse mr-2"></i>
            Warehouse Performance
          </h5>

        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-hover">

            <thead class="table-dark text-center">

              <tr>
                <th>Warehouse</th>
                <th>Capacity</th>
                <th>Utilization</th>
                <th>Stock Aging</th>
                <th>Status</th>
              </tr>

            </thead>

            <tbody>

              <tr>

                <td>Gudang Utama</td>
                <td>10.000 SKU</td>
                <td>82%</td>
                <td>Normal</td>

                <td class="text-center">
                  <span class="badge bg-success">Optimal</span>
                </td>

              </tr>

              <tr>

                <td>Gudang Cabang A</td>
                <td>5.000 SKU</td>
                <td>91%</td>
                <td>High Aging</td>

                <td class="text-center">
                  <span class="badge bg-warning text-dark">Warning</span>
                </td>

              </tr>

              <tr>

                <td>Gudang Transit</td>
                <td>2.000 SKU</td>
                <td>65%</td>
                <td>Normal</td>

                <td class="text-center">
                  <span class="badge bg-info">Stable</span>
                </td>

              </tr>

            </tbody>

          </table>

        </div>

      </div>

      <!-- ===================================================== -->
      <!-- DELIVERY PERFORMANCE -->
      <!-- ===================================================== -->
      <div class="card op-card">

        <div class="card-header bg-success text-white">

          <h5 class="mb-0">
            <i class="fas fa-truck mr-2"></i>
            Delivery Performance
          </h5>

        </div>

        <div class="card-body">

          <div class="row">

            <div class="col-md-3">

              <div class="mini-box">

                <small>On-Time Delivery</small>
                <h5 class="text-success">94%</h5>

              </div>

            </div>

            <div class="col-md-3">

              <div class="mini-box">

                <small>Late Delivery</small>
                <h5 class="text-danger">6%</h5>

              </div>

            </div>

            <div class="col-md-3">

              <div class="mini-box">

                <small>Avg Delivery Time</small>
                <h5 class="text-primary">2.3 Hari</h5>

              </div>

            </div>

            <div class="col-md-3">

              <div class="mini-box">

                <small>Shipment Today</small>
                <h5 class="text-warning">128 Order</h5>

              </div>

            </div>

          </div>

        </div>

      </div>

      <!-- ===================================================== -->
      <!-- EXECUTIVE SUMMARY TABLE -->
      <!-- ===================================================== -->
      <div class="card op-card">

        <div class="card-header bg-secondary text-white">

          <h5 class="mb-0">
            <i class="fas fa-chart-bar mr-2"></i>
            Executive Operation Summary
          </h5>

        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-hover">

            <thead class="table-dark text-center">

              <tr>
                <th>Metric</th>
                <th>Today</th>
                <th>This Month</th>
                <th>Status</th>
              </tr>

            </thead>

            <tbody>

              <tr>
                <td>Order Processed</td>
                <td>48</td>
                <td>1.240</td>
                <td><span class="badge bg-success">Good</span></td>
              </tr>

              <tr>
                <td>Stock Mutation</td>
                <td>112</td>
                <td>3.820</td>
                <td><span class="badge bg-info">Stable</span></td>
              </tr>

              <tr>
                <td>Backorder</td>
                <td>5</td>
                <td>47</td>
                <td><span class="badge bg-danger">Attention</span></td>
              </tr>

              <tr>
                <td>Delivery Success</td>
                <td>96%</td>
                <td>98.2%</td>
                <td><span class="badge bg-success">Excellent</span></td>
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
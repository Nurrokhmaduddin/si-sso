<?php $page = 'finance-cash-in'; ?>
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

      <!-- ========================================================= -->
      <!-- PAGE : CASH IN -->
      <!-- STYLE : A. EXECUTIVE DASHBOARD -->
      <!-- FOKUS :
           - monitoring pemasukan realtime
           - total cash in
           - payment source
           - daily collection
           - trend pemasukan
      ========================================================= -->

      <div class="card finance-card">
        <div class="card-header bg-success text-white">

          <div class="d-flex justify-content-between align-items-center flex-wrap">

            <div>
              <h5 class="mb-1">
                <i class="fas fa-arrow-circle-down me-2"></i>
                Cash In Dashboard
              </h5>

              <small>
                Monitoring realtime seluruh pemasukan perusahaan.
              </small>
            </div>

            <div class="d-flex gap-2">
              <button class="btn btn-light btn-sm">
                <i class="fas fa-filter me-1"></i>
                Filter
              </button>

              <button class="btn btn-dark btn-sm">
                <i class="fas fa-sync-alt me-1"></i>
                Live Update
              </button>
            </div>

          </div>

        </div>

        <div class="card-body">

          <!-- ===================================================== -->
          <!-- KPI SUMMARY -->
          <!-- ===================================================== -->

          <div class="row mb-4">

            <div class="col-md-3">
              <div class="summary-box bg-success">
                <h3>Rp 284 JT</h3>
                <p>Total Cash In</p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="summary-box bg-info">
                <h3>148</h3>
                <p>Total Invoice Masuk</p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="summary-box bg-primary">
                <h3>92%</h3>
                <p>Collection Rate</p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="summary-box bg-warning text-dark">
                <h3>12</h3>
                <p>Pending Payment</p>
              </div>
            </div>

          </div>

          <!-- ===================================================== -->
          <!-- CHART PLACEHOLDER
               Nantinya bisa diganti:
               - ApexCharts
               - ChartJS
               - Echarts
          ===================================================== -->

          <div class="alert alert-success">
            Area chart pemasukan harian / mingguan / bulanan.
          </div>

          <!-- ===================================================== -->
          <!-- QUICK MONITORING TABLE -->
          <!-- ===================================================== -->

          <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

              <thead class="table-dark text-center">
                <tr>
                  <th>Tanggal</th>
                  <th>Invoice</th>
                  <th>Customer</th>
                  <th>Metode</th>
                  <th>Nominal</th>
                  <th>Status</th>
                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>08/05/2026</td>
                  <td>INV-001</td>
                  <td>PT Maju Jaya</td>
                  <td>Transfer Bank</td>
                  <td class="text-success fw-bold">
                    Rp 12.500.000
                  </td>
                  <td class="text-center">
                    <span class="badge bg-success">
                      Paid
                    </span>
                  </td>
                </tr>

                <tr>
                  <td>08/05/2026</td>
                  <td>INV-002</td>
                  <td>CV Nusantara</td>
                  <td>Cash</td>
                  <td class="text-success fw-bold">
                    Rp 8.000.000
                  </td>
                  <td class="text-center">
                    <span class="badge bg-info">
                      Incoming
                    </span>
                  </td>
                </tr>

              </tbody>

            </table>

          </div>

        </div>
      </div>

      <!-- ========================================================= -->
      <!-- PAGE : CASH OUT -->
      <!-- STYLE : A. EXECUTIVE DASHBOARD -->
      <!-- FOKUS :
           - monitoring pengeluaran
           - biaya operasional
           - pengeluaran terbesar
           - kontrol cashflow
      ========================================================= -->

      <div class="card finance-card">
        <div class="card-header bg-danger text-white">

          <h5 class="mb-0">
            <i class="fas fa-arrow-circle-up me-2"></i>
            Cash Out Dashboard
          </h5>

        </div>

        <div class="card-body">

          <div class="row mb-4">

            <div class="col-md-3">
              <div class="summary-box bg-danger">
                <h3>Rp 182 JT</h3>
                <p>Total Pengeluaran</p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="summary-box bg-warning text-dark">
                <h3>48</h3>
                <p>Expense Pending</p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="summary-box bg-primary">
                <h3>21</h3>
                <p>Approved Expense</p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="summary-box bg-info">
                <h3>8</h3>
                <p>Waiting Approval</p>
              </div>
            </div>

          </div>

          <!-- ===================================================== -->
          <!-- DESIGN NOTE :
               Fokus dashboard finance operasional
               supaya owner langsung tahu:
               - uang keluar terbesar
               - divisi paling boros
               - expense realtime
          ===================================================== -->

          <div class="table-responsive">

            <table class="table table-bordered table-striped align-middle">

              <thead class="table-dark text-center">
                <tr>
                  <th>Tanggal</th>
                  <th>Ref</th>
                  <th>Kategori</th>
                  <th>Divisi</th>
                  <th>Nominal</th>
                  <th>Status</th>
                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>08/05/2026</td>
                  <td>EXP-001</td>
                  <td>Operasional</td>
                  <td>Gudang</td>
                  <td class="text-danger fw-bold">
                    Rp 5.000.000
                  </td>
                  <td class="text-center">
                    <span class="badge bg-success">
                      Approved
                    </span>
                  </td>
                </tr>

                <tr>
                  <td>08/05/2026</td>
                  <td>EXP-002</td>
                  <td>Maintenance</td>
                  <td>Produksi</td>
                  <td class="text-danger fw-bold">
                    Rp 12.000.000
                  </td>
                  <td class="text-center">
                    <span class="badge bg-warning text-dark">
                      Pending
                    </span>
                  </td>
                </tr>

              </tbody>

            </table>

          </div>

        </div>
      </div>

      <!-- ========================================================= -->
      <!-- PAGE : BANK MANAGEMENT -->
      <!-- STYLE : A. EXECUTIVE DASHBOARD -->
      <!-- FOKUS :
           - saldo seluruh bank
           - cash positioning
           - bank monitoring
      ========================================================= -->

      <div class="card finance-card">
        <div class="card-header bg-primary text-white">

          <h5 class="mb-0">
            <i class="fas fa-university me-2"></i>
            Bank Management Dashboard
          </h5>

        </div>

        <div class="card-body">

          <!-- ===================================================== -->
          <!-- KPI BANK -->
          <!-- ===================================================== -->

          <div class="row mb-4">

            <div class="col-md-4">
              <div class="summary-box bg-primary">
                <h3>Rp 1.2 M</h3>
                <p>Total Saldo Bank</p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="summary-box bg-success">
                <h3>4</h3>
                <p>Bank Active</p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="summary-box bg-warning text-dark">
                <h3>2</h3>
                <p>Rekonsiliasi Pending</p>
              </div>
            </div>

          </div>

          <!-- ===================================================== -->
          <!-- DESIGN :
               tabel dibuat seperti treasury dashboard
               agar finance mudah monitoring cash position
          ===================================================== -->

          <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

              <thead class="table-dark text-center">
                <tr>
                  <th>Bank</th>
                  <th>No Rekening</th>
                  <th>Saldo</th>
                  <th>Last Transaction</th>
                  <th>Status</th>
                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>BCA</td>
                  <td>123-998-001</td>
                  <td class="fw-bold text-success">
                    Rp 450.000.000
                  </td>
                  <td>08/05/2026 14:20</td>
                  <td class="text-center">
                    <span class="badge bg-success">
                      Connected
                    </span>
                  </td>
                </tr>

                <tr>
                  <td>Mandiri</td>
                  <td>998-111-888</td>
                  <td class="fw-bold text-success">
                    Rp 320.000.000
                  </td>
                  <td>08/05/2026 12:00</td>
                  <td class="text-center">
                    <span class="badge bg-info">
                      Active
                    </span>
                  </td>
                </tr>

              </tbody>

            </table>

          </div>

        </div>
      </div>

      <!-- ========================================================= -->
      <!-- PAGE : PETTY CASH -->
      <!-- STYLE : A. EXECUTIVE DASHBOARD -->
      <!-- FOKUS :
           - kas kecil operasional
           - pengeluaran harian
           - limit kas kecil
      ========================================================= -->

      <div class="card finance-card">
        <div class="card-header bg-warning">

          <h5 class="mb-0 text-dark">
            <i class="fas fa-wallet me-2"></i>
            Petty Cash Monitoring
          </h5>

        </div>

        <div class="card-body">

          <div class="row mb-4">

            <div class="col-md-3">
              <div class="summary-box bg-warning text-dark">
                <h3>Rp 12 JT</h3>
                <p>Saldo Kas Kecil</p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="summary-box bg-danger">
                <h3>Rp 4 JT</h3>
                <p>Pengeluaran Hari Ini</p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="summary-box bg-success">
                <h3>Rp 20 JT</h3>
                <p>Limit Kas</p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="summary-box bg-info">
                <h3>3</h3>
                <p>Request Refill</p>
              </div>
            </div>

          </div>

          <!-- ===================================================== -->
          <!-- DESIGN NOTE :
               petty cash harus cepat dibaca,
               karena biasanya dipakai harian operasional
          ===================================================== -->

          <div class="table-responsive">

            <table class="table table-bordered table-striped align-middle">

              <thead class="table-dark text-center">
                <tr>
                  <th>Tanggal</th>
                  <th>Ref</th>
                  <th>Keterangan</th>
                  <th>User</th>
                  <th>Nominal</th>
                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>08/05/2026</td>
                  <td>PC-001</td>
                  <td>Beli ATK</td>
                  <td>Admin</td>
                  <td class="text-danger fw-bold">
                    Rp 250.000
                  </td>
                </tr>

                <tr>
                  <td>08/05/2026</td>
                  <td>PC-002</td>
                  <td>Transport Kurir</td>
                  <td>Operasional</td>
                  <td class="text-danger fw-bold">
                    Rp 150.000
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
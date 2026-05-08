<?php $page = 'finance-jurnal'; ?>
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
        Dashboard Jurnal Transaksi

        <button
          type="button"
          class="btn btn-tool"
          data-bs-toggle="modal"
          data-bs-target="#modalBantuan">

          <i class="fas fa-question-circle"></i>
        </button>
      </h3>

      <p class="text-muted mb-0">
        Monitoring jurnal transaksi realtime, validasi accounting flow,
        cashflow accounting, dan audit pencatatan transaksi finance.
      </p>

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

        /*
        =========================================================
        STYLE CONCEPT :
        - executive accounting dashboard
        - visual operasional finance
        - clean ERP style
        =========================================================
        */

        .finance-card {
          border-radius: 14px;
          overflow: hidden;
          box-shadow: 0 2px 10px rgba(0,0,0,0.08);
          margin-bottom: 24px;
        }

        .finance-card .card-header {
          padding: 16px 20px;
        }

        .summary-box {
          border-radius: 12px;
          padding: 20px;
          color: #fff;
          margin-bottom: 16px;
        }

        .summary-box h3 {
          margin: 0;
          font-weight: 700;
        }

        .summary-box p {
          margin: 0;
          opacity: .9;
        }

        .journal-info-box {
          border-radius: 12px;
          padding: 16px;
          background: #f8f9fa;
          border: 1px solid #e9ecef;
          height: 100%;
        }

        .journal-info-box small {
          color: #6c757d;
        }

        .journal-info-box h5 {
          margin-top: 5px;
          margin-bottom: 0;
          font-weight: 700;
        }

        .table-journal thead th {
          vertical-align: middle;
          white-space: nowrap;
          font-size: 13px;
        }

        .table-journal tbody td {
          vertical-align: middle;
          font-size: 13px;
        }

        .badge-journal {
          font-size: 11px;
          padding: 6px 10px;
          border-radius: 8px;
        }

        .table-journal tbody tr:hover {
          background: #f8fbff;
        }

      </style>

      <!-- ===================================================== -->
      <!-- CARD : EXECUTIVE JOURNAL DASHBOARD -->
      <!-- STYLE :
           A. EXECUTIVE DASHBOARD
      ===================================================== -->

      <div class="card finance-card">

        <!-- ================================================= -->
        <!-- HEADER -->
        <!-- ================================================= -->

        <div class="card-header bg-primary text-white">

          <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

            <div>

              <h4 class="mb-1">
                <i class="fas fa-book me-2"></i>
                Executive Journal Dashboard
              </h4>

              <small>
                Dashboard monitoring jurnal umum,
                validasi debit kredit,
                dan transaksi accounting realtime.
              </small>

            </div>

            <div class="d-flex gap-2">

              <button class="btn btn-light btn-sm">
                <i class="fas fa-filter me-1"></i>
                Filter
              </button>

              <button class="btn btn-success btn-sm">
                <i class="fas fa-file-excel me-1"></i>
                Export Excel
              </button>

              <button class="btn btn-danger btn-sm">
                <i class="fas fa-file-pdf me-1"></i>
                PDF
              </button>

            </div>

          </div>

        </div>

        <!-- ================================================= -->
        <!-- BODY -->
        <!-- ================================================= -->

        <div class="card-body">

          <!-- ============================================= -->
          <!-- DESIGN COMMENT
               KPI dipasang di atas agar owner langsung
               melihat kondisi accounting realtime.
          ============================================== -->

          <div class="row mb-4">

            <div class="col-md-3">

              <div class="summary-box bg-success">
                <h3>Rp 842 JT</h3>
                <p>Total Debit</p>
              </div>

            </div>

            <div class="col-md-3">

              <div class="summary-box bg-danger">
                <h3>Rp 842 JT</h3>
                <p>Total Kredit</p>
              </div>

            </div>

            <div class="col-md-3">

              <div class="summary-box bg-info">
                <h3>128</h3>
                <p>Total Jurnal</p>
              </div>

            </div>

            <div class="col-md-3">

              <div class="summary-box bg-warning text-dark">
                <h3>3</h3>
                <p>Unbalanced Journal</p>
              </div>

            </div>

          </div>

          <!-- ============================================= -->
          <!-- INFO PANEL
          ============================================== -->

          <div class="row mb-4">

            <div class="col-md-4">

              <div class="journal-info-box">

                <small>Periode Aktif</small>
                <h5>Mei 2026</h5>

              </div>

            </div>

            <div class="col-md-4">

              <div class="journal-info-box">

                <small>Status Posting</small>
                <h5 class="text-success">
                  Posted & Balanced
                </h5>

              </div>

            </div>

            <div class="col-md-4">

              <div class="journal-info-box">

                <small>Last Sync</small>
                <h5>
                  08/05/2026 14:25 WIB
                </h5>

              </div>

            </div>

          </div>

          <!-- ============================================= -->
          <!-- ALERT DESIGN
               Area ini cocok dipakai warning realtime
               accounting validation.
          ============================================== -->

          <div class="alert alert-warning">

            <i class="fas fa-exclamation-triangle me-1"></i>

            Terdapat 3 jurnal yang belum balanced
            dan memerlukan validasi accounting.

          </div>

          <!-- ============================================= -->
          <!-- TABLE JOURNAL
               STYLE :
               semi-ledger + operational ERP
          ============================================== -->

          <div class="table-responsive">

            <table class="table table-bordered table-hover table-journal align-middle">

              <thead class="table-dark text-center">

                <tr>

                  <th>Tanggal</th>
                  <th>Ref</th>
                  <th>Jenis</th>
                  <th>Keterangan</th>
                  <th>Account Debit</th>
                  <th>Account Kredit</th>
                  <th>Debit</th>
                  <th>Kredit</th>
                  <th>Status</th>

                </tr>

              </thead>

              <tbody>

                <!-- ===================================== -->
                <!-- TRANSACTION -->
                <!-- ===================================== -->

                <tr>

                  <td>08/05/2026</td>

                  <td>
                    <b>JR-001</b>
                  </td>

                  <td>

                    <span class="badge bg-info badge-journal">
                      Invoice
                    </span>

                  </td>

                  <td>
                    Invoice Penjualan PT Maju Jaya
                  </td>

                  <td>
                    Piutang Usaha
                  </td>

                  <td>
                    Pendapatan Penjualan
                  </td>

                  <td class="text-success fw-bold">
                    Rp 12.500.000
                  </td>

                  <td class="text-danger fw-bold">
                    Rp 12.500.000
                  </td>

                  <td class="text-center">

                    <span class="badge bg-success">
                      Balanced
                    </span>

                  </td>

                </tr>

                <!-- ===================================== -->
                <!-- TRANSACTION -->
                <!-- ===================================== -->

                <tr>

                  <td>08/05/2026</td>

                  <td>
                    <b>JR-002</b>
                  </td>

                  <td>

                    <span class="badge bg-success badge-journal">
                      Cash In
                    </span>

                  </td>

                  <td>
                    Pelunasan Invoice INV-001
                  </td>

                  <td>
                    Kas Bank BCA
                  </td>

                  <td>
                    Piutang Usaha
                  </td>

                  <td class="text-success fw-bold">
                    Rp 8.000.000
                  </td>

                  <td class="text-danger fw-bold">
                    Rp 8.000.000
                  </td>

                  <td class="text-center">

                    <span class="badge bg-success">
                      Posted
                    </span>

                  </td>

                </tr>

                <!-- ===================================== -->
                <!-- WARNING JOURNAL -->
                <!-- ===================================== -->

                <tr class="table-warning">

                  <td>08/05/2026</td>

                  <td>
                    <b>JR-003</b>
                  </td>

                  <td>

                    <span class="badge bg-warning text-dark badge-journal">
                      Adjustment
                    </span>

                  </td>

                  <td>
                    Penyesuaian stok opname
                  </td>

                  <td>
                    Beban Selisih Stok
                  </td>

                  <td>
                    Persediaan Barang
                  </td>

                  <td class="text-success fw-bold">
                    Rp 2.000.000
                  </td>

                  <td class="text-danger fw-bold">
                    Rp 1.800.000
                  </td>

                  <td class="text-center">

                    <span class="badge bg-danger">
                      Unbalanced
                    </span>

                  </td>

                </tr>

              </tbody>

            </table>

          </div>

          <!-- ============================================= -->
          <!-- FOOTNOTE
          ============================================== -->

          <div class="mt-3">

            <small class="text-muted">

              <i class="fas fa-info-circle me-1"></i>

              Dashboard jurnal transaksi digunakan untuk monitoring realtime
              validitas pencatatan accounting dan audit transaksi finance ERP.

            </small>

          </div>

        </div>

      </div>

    </div>
  </section>
</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
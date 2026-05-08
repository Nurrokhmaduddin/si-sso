<!-- ========================================================= -->
<!-- FILE: finance-riwayat-invoice.php -->
<!-- STYLE: Ledger / Audit Trail -->
<!-- ========================================================= -->

<?php $page = 'finance-riwayat-invoice'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Riwayat Invoice
        <button class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalFilterInvoice">
          <i class="fas fa-filter"></i>
        </button>
      </h3>

      <p class="text-muted mb-0">
        Audit trail histori invoice client, perubahan status, approval dan pembayaran.
      </p>

    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <!--
      =========================================================
      DESAIN HALAMAN
      =========================================================
      Fokus:
      - histori transaksi invoice
      - audit trail finance
      - status invoice realtime
      - tracking approval & pembayaran
      =========================================================
      -->

      <style>
        .audit-card{
          border-radius:14px;
          overflow:hidden;
          box-shadow:0 2px 10px rgba(0,0,0,.08);
          margin-bottom:24px;
        }

        .summary-box{
          border-radius:12px;
          padding:18px;
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

        .badge-soft{
          border-radius:10px;
          padding:6px 10px;
          font-size:12px;
        }

        .table thead th{
          white-space:nowrap;
          vertical-align:middle;
        }
      </style>

      <!-- KPI -->
      <div class="row">

        <div class="col-md-3">
          <div class="summary-box bg-info">
            <h3>142</h3>
            <p>Total Invoice</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-success">
            <h3>Rp 845 JT</h3>
            <p>Invoice Paid</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-warning text-dark">
            <h3>18</h3>
            <p>Outstanding</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-danger">
            <h3>5</h3>
            <p>Invoice Overdue</p>
          </div>
        </div>

      </div>

      <!-- TABLE -->
      <div class="card audit-card">

        <div class="card-header bg-dark text-white">

          <div class="d-flex justify-content-between align-items-center">

            <h5 class="mb-0">
              Ledger Riwayat Invoice
            </h5>

            <div class="d-flex gap-2">

              <button class="btn btn-light btn-sm"
                      data-bs-toggle="modal"
                      data-bs-target="#modalFilterInvoice">
                <i class="fas fa-filter me-1"></i>
                Filter
              </button>

              <button class="btn btn-success btn-sm">
                <i class="fas fa-file-excel me-1"></i>
                Excel
              </button>

              <button class="btn btn-danger btn-sm">
                <i class="fas fa-file-pdf me-1"></i>
                PDF
              </button>

            </div>

          </div>

        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-hover align-middle">

            <thead class="table-dark text-center">
              <tr>
                <th>Tanggal</th>
                <th>No Invoice</th>
                <th>Client</th>
                <th>Total</th>
                <th>Status</th>
                <th>Pembayaran</th>
                <th>User</th>
                <th>Log Aktivitas</th>
              </tr>
            </thead>

            <tbody>

              <tr>
                <td>01/05/2026</td>
                <td>INV-2026-001</td>
                <td>PT Aroma Kopi</td>
                <td class="fw-bold">Rp 12.500.000</td>
                <td class="text-center">
                  <span class="badge bg-info badge-soft">
                    Invoice
                  </span>
                </td>
                <td class="text-center">
                  <span class="badge bg-success badge-soft">
                    Paid
                  </span>
                </td>
                <td>finance01</td>
                <td>Invoice dibuat dan dibayar</td>
              </tr>

              <tr>
                <td>04/05/2026</td>
                <td>INV-2026-004</td>
                <td>PT Nusantara</td>
                <td class="fw-bold">Rp 8.700.000</td>
                <td class="text-center">
                  <span class="badge bg-warning text-dark badge-soft">
                    Outstanding
                  </span>
                </td>
                <td class="text-center">
                  <span class="badge bg-warning text-dark badge-soft">
                    Pending
                  </span>
                </td>
                <td>finance02</td>
                <td>Menunggu pembayaran client</td>
              </tr>

              <tr>
                <td>08/05/2026</td>
                <td>INV-2026-008</td>
                <td>CV Sukses Makmur</td>
                <td class="fw-bold">Rp 17.200.000</td>
                <td class="text-center">
                  <span class="badge bg-danger badge-soft">
                    Overdue
                  </span>
                </td>
                <td class="text-center">
                  <span class="badge bg-danger badge-soft">
                    Unpaid
                  </span>
                </td>
                <td>finance03</td>
                <td>Invoice melewati jatuh tempo</td>
              </tr>

            </tbody>

          </table>

        </div>

      </div>

    </div>
  </section>
</div>

<!-- MODAL FILTER -->
<div class="modal fade" id="modalFilterInvoice">

  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">
          Filter Periode Invoice
        </h5>

        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label>Periode Awal</label>
          <input type="date" class="form-control">
        </div>

        <div class="mb-3">
          <label>Periode Akhir</label>
          <input type="date" class="form-control">
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">
          Tutup
        </button>

        <button class="btn btn-primary">
          Terapkan Filter
        </button>
      </div>

    </div>
  </div>

</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
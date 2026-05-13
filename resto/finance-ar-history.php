# finance-ar-history.php

```php
<!-- ========================================================= -->
<!-- PAGE : finance-ar-history.php -->
<!-- DESCRIPTION : Account Receivable Ledger History -->
<!-- ========================================================= -->
<?php $page = 'finance-ar-history'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">
        Accounts Receivable Ledger
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>
      <p class="text-muted mb-0">
      Menampilkan detail mutasi piutang customer berdasarkan transaksi invoice, pembayaran, penyesuaian, dan saldo berjalan piutang per customer.
    </p>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <!-- ========================================================= -->
      <!-- FILTER -->
      <!-- ========================================================= -->

      <div class="card card-outline card-info">

        <div class="card-body">

          <div class="row">

            <div class="col-md-4 mb-2">
              <b>Customer :</b> PT Maju Jaya Abadi
            </div>

            <div class="col-md-4 mb-2">
              <b>Periode :</b> 1 Mei 2026 - 31 Mei 2026
            </div>

            <div class="col-md-4 mb-2">
              <b>Status :</b> Semua Transaksi
            </div>

          </div>

        </div>

        <div class="card-footer">

          <div class="card-tools ms-auto">

            <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalFilter">
              <i class="fas fa-filter me-1"></i> Filter
            </button>

            <button class="btn btn-outline-success btn-sm">
              <i class="fas fa-file-download me-1"></i> Export
            </button>

          </div>

        </div>

      </div>

      <!-- ========================================================= -->
      <!-- CUSTOMER INFORMATION -->
      <!-- ========================================================= -->

      <!-- <div class="card">

        <div class="card-header bg-info">
          <h3 class="card-title text-white">
            Informasi Customer
          </h3>
        </div>

        <div class="card-body">

          <div class="row">

            <div class="col-md-3 mb-3">
              <small class="text-muted">Customer Code</small>
              <h6>CUST-001</h6>
            </div>

            <div class="col-md-3 mb-3">
              <small class="text-muted">Customer Name</small>
              <h6>PT Maju Jaya Abadi</h6>
            </div>

            <div class="col-md-3 mb-3">
              <small class="text-muted">Saldo Awal Piutang</small>
              <h6 class="text-primary">Rp 145.000.000</h6>
            </div>

            <div class="col-md-3 mb-3">
              <small class="text-muted">Saldo Akhir Piutang</small>
              <h6 class="text-danger">Rp 82.500.000</h6>
            </div>

          </div>

        </div>

      </div> -->

      <!-- ========================================================= -->
      <!-- KPI -->
      <!-- ========================================================= -->

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>Rp 145JT</h3>
              <p>Opening Receivable</p>
            </div>
            <div class="icon">
              <i class="fas fa-file-invoice-dollar"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>Rp 62JT</h3>
              <p>Total Payment</p>
            </div>
            <div class="icon">
              <i class="fas fa-money-check-alt"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>5 Invoice</h3>
              <p>Outstanding Invoice</p>
            </div>
            <div class="icon">
              <i class="fas fa-exclamation-circle"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>Rp 82JT</h3>
              <p>Ending Receivable</p>
            </div>
            <div class="icon">
              <i class="fas fa-wallet"></i>
            </div>
          </div>
        </div>

      </div>

      <!-- ========================================================= -->
      <!-- RECEIVABLE LEDGER -->
      <!-- ========================================================= -->

      <div class="card card-outline card-primary">

        <div class="card-header bg-orange">
          <h3 class="card-title text-white">
            Buku Besar Piutang Customer
          </h3>
        </div>

        <div class="card-body table-responsive p-0">

          <table class="table table-bordered table-hover">

            <thead class="table-dark text-center">

              <tr>
                <th>Tanggal</th>
                <th>No Invoice</th>
                <th>Reference</th>
                <th>Description</th>
                <th>Debit</th>
                <th>Credit</th>
                <th>Saldo Piutang</th>
                <th>Status</th>
              </tr>

            </thead>

            <tbody>

              <tr class="table-secondary fw-bold">
                <td colspan="6" class="text-end">
                  SALDO AWAL PIUTANG
                </td>
                <td>Rp 145.000.000</td>
                <td>-</td>
              </tr>

              <tr>
                <td>01 Mei 2026</td>
                <td>INV-2026-001</td>
                <td>SO-1101</td>
                <td>Penjualan Project Website</td>
                <td class="text-success">Rp 25.000.000</td>
                <td>-</td>
                <td>Rp 170.000.000</td>
                <td>
                  <span class="badge bg-primary">Posted</span>
                </td>
              </tr>

              <tr>
                <td>03 Mei 2026</td>
                <td>PAY-001</td>
                <td>RCV-2026-002</td>
                <td>Pembayaran Termin 1</td>
                <td>-</td>
                <td class="text-danger">Rp 50.000.000</td>
                <td>Rp 120.000.000</td>
                <td>
                  <span class="badge bg-success">Paid</span>
                </td>
              </tr>

              <tr>
                <td>07 Mei 2026</td>
                <td>INV-2026-004</td>
                <td>SO-1107</td>
                <td>Penjualan Hosting Tahunan</td>
                <td class="text-success">Rp 12.500.000</td>
                <td>-</td>
                <td>Rp 132.500.000</td>
                <td>
                  <span class="badge bg-primary">Posted</span>
                </td>
              </tr>

              <tr>
                <td>10 Mei 2026</td>
                <td>PAY-004</td>
                <td>RCV-2026-005</td>
                <td>Pembayaran Invoice Hosting</td>
                <td>-</td>
                <td class="text-danger">Rp 20.000.000</td>
                <td>Rp 112.500.000</td>
                <td>
                  <span class="badge bg-success">Paid</span>
                </td>
              </tr>

              <tr>
                <td>15 Mei 2026</td>
                <td>CN-001</td>
                <td>ADJ-001</td>
                <td>Credit Note Retur</td>
                <td>-</td>
                <td class="text-danger">Rp 5.000.000</td>
                <td>Rp 107.500.000</td>
                <td>
                  <span class="badge bg-warning text-dark">Adjustment</span>
                </td>
              </tr>

              <tr>
                <td>20 Mei 2026</td>
                <td>PAY-007</td>
                <td>RCV-2026-008</td>
                <td>Pembayaran Pelunasan</td>
                <td>-</td>
                <td class="text-danger">Rp 25.000.000</td>
                <td>Rp 82.500.000</td>
                <td>
                  <span class="badge bg-success">Paid</span>
                </td>
              </tr>

              <tr class="table-secondary fw-bold">
                <td colspan="6" class="text-end">
                  SALDO AKHIR PIUTANG
                </td>
                <td>Rp 82.500.000</td>
                <td>-</td>
              </tr>

            </tbody>

          </table>

        </div>

      </div>

    </div>
  </section>

</div>

<?php include('4footer.php'); ?>

<!-- ========================================================= -->
<!-- MODAL FILTER -->
<!-- ========================================================= -->

<div class="modal fade" id="modalFilter" tabindex="-1">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Filter History Piutang</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="row">

            <div class="col-md-6 mb-3">
              <label class="form-label">Customer</label>
              <select class="form-select">
                <option>PT Maju Jaya Abadi</option>
                <option>PT Nusantara Digital</option>
                <option>PT Sentosa Teknologi</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Status Invoice</label>
              <select class="form-select">
                <option>Semua</option>
                <option>Outstanding</option>
                <option>Paid</option>
                <option>Overdue</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Tanggal Awal</label>
              <input type="date" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Tanggal Akhir</label>
              <input type="date" class="form-control">
            </div>

          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-info">Terapkan Filter</button>
        </div>

      </form>

    </div>

  </div>

</div>

<!-- ========================================================= -->
<!-- MODAL BANTUAN -->
<!-- ========================================================= -->

<div class="modal fade" id="modalBantuan" tabindex="-1">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Bantuan Halaman</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <p>
          Halaman ini digunakan untuk memonitor histori piutang customer secara detail berdasarkan lawan transaksi/customer.
        </p>

        <p>
          Konsep halaman ini menyerupai buku besar (general ledger), namun fokus mikro datanya adalah customer, bukan akun COA.
        </p>

        <p>
          Finance dapat melihat:
        </p>

        <ul>
          <li>Saldo awal piutang customer</li>
          <li>Mutasi penambahan piutang dari invoice</li>
          <li>Pembayaran customer</li>
          <li>Adjustment / credit note</li>
          <li>Saldo akhir piutang customer</li>
        </ul>

        <p>
          Kolom saldo piutang menampilkan balance berjalan (running balance) sehingga memudahkan audit histori piutang dari awal hingga akhir periode.
        </p>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>

    </div>

  </div>

</div>

<?php include('5script.php'); ?>

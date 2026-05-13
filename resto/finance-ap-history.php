
<!-- ========================================================= -->
<!-- PAGE : finance-ap-history.php -->
<!-- DESCRIPTION : Account Payable Ledger History -->
<!-- ========================================================= -->
<?php $page = 'finance-ap-history'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">
        Accounts Payable Ledger
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>
      <p class="text-muted mb-0">
      Menampilkan detail mutasi hutang vendor berdasarkan transaksi pembelian, pembayaran hutang, penyesuaian, dan saldo berjalan hutang per vendor.
    </p>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <!-- FILTER -->

      <div class="card card-outline card-info">

        <div class="card-body">

          <div class="row">

            <div class="col-md-4 mb-2">
              <b>Vendor :</b> PT Supplier Indonesia
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

      <!-- VENDOR INFO -->

      <!-- <div class="card">

        <div class="card-header bg-danger">
          <h3 class="card-title text-white">
            Informasi Vendor
          </h3>
        </div>

        <div class="card-body">

          <div class="row">

            <div class="col-md-3 mb-3">
              <small class="text-muted">Vendor Code</small>
              <h6>VND-001</h6>
            </div>

            <div class="col-md-3 mb-3">
              <small class="text-muted">Vendor Name</small>
              <h6>PT Supplier Indonesia</h6>
            </div>

            <div class="col-md-3 mb-3">
              <small class="text-muted">Saldo Awal Hutang</small>
              <h6 class="text-primary">Rp 210.000.000</h6>
            </div>

            <div class="col-md-3 mb-3">
              <small class="text-muted">Saldo Akhir Hutang</small>
              <h6 class="text-danger">Rp 96.500.000</h6>
            </div>

          </div>

        </div>

      </div> -->

      <!-- KPI -->

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>Rp 210JT</h3>
              <p>Opening Payable</p>
            </div>
            <div class="icon">
              <i class="fas fa-file-invoice"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>Rp 113JT</h3>
              <p>Total Payment</p>
            </div>
            <div class="icon">
              <i class="fas fa-money-bill-wave"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>7 Bill</h3>
              <p>Outstanding Bill</p>
            </div>
            <div class="icon">
              <i class="fas fa-exclamation-triangle"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>Rp 96JT</h3>
              <p>Ending Payable</p>
            </div>
            <div class="icon">
              <i class="fas fa-wallet"></i>
            </div>
          </div>
        </div>

      </div>

      <!-- AP LEDGER -->

      <div class="card card-outline card-danger">

        <div class="card-header bg-orange">
          <h3 class="card-title text-white">
            Buku Besar Hutang Vendor
          </h3>
        </div>

        <div class="card-body table-responsive p-0">

          <table class="table table-bordered table-hover">

            <thead class="table-dark text-center">

              <tr>
                <th>Tanggal</th>
                <th>No Bill</th>
                <th>Reference</th>
                <th>Description</th>
                <th>Debit</th>
                <th>Credit</th>
                <th>Saldo Hutang</th>
                <th>Status</th>
              </tr>

            </thead>

            <tbody>

              <tr class="table-secondary fw-bold">
                <td colspan="6" class="text-end">
                  SALDO AWAL HUTANG
                </td>
                <td>Rp 210.000.000</td>
                <td>-</td>
              </tr>

              <tr>
                <td>01 Mei 2026</td>
                <td>BILL-001</td>
                <td>PO-2026-001</td>
                <td>Pembelian Server</td>
                <td>-</td>
                <td class="text-danger">Rp 35.000.000</td>
                <td>Rp 245.000.000</td>
                <td>
                  <span class="badge bg-primary">Posted</span>
                </td>
              </tr>

              <tr>
                <td>05 Mei 2026</td>
                <td>PAY-001</td>
                <td>BANK-001</td>
                <td>Pembayaran Vendor Tahap 1</td>
                <td class="text-success">Rp 50.000.000</td>
                <td>-</td>
                <td>Rp 195.000.000</td>
                <td>
                  <span class="badge bg-success">Paid</span>
                </td>
              </tr>

              <tr>
                <td>08 Mei 2026</td>
                <td>BILL-003</td>
                <td>PO-2026-008</td>
                <td>Pembelian Network Device</td>
                <td>-</td>
                <td class="text-danger">Rp 24.500.000</td>
                <td>Rp 219.500.000</td>
                <td>
                  <span class="badge bg-primary">Posted</span>
                </td>
              </tr>

              <tr>
                <td>12 Mei 2026</td>
                <td>PAY-003</td>
                <td>BANK-005</td>
                <td>Pembayaran Pelunasan Invoice</td>
                <td class="text-success">Rp 75.000.000</td>
                <td>-</td>
                <td>Rp 144.500.000</td>
                <td>
                  <span class="badge bg-success">Paid</span>
                </td>
              </tr>

              <tr>
                <td>18 Mei 2026</td>
                <td>DN-001</td>
                <td>ADJ-001</td>
                <td>Debit Note Adjustment</td>
                <td class="text-success">Rp 8.000.000</td>
                <td>-</td>
                <td>Rp 136.500.000</td>
                <td>
                  <span class="badge bg-warning text-dark">Adjustment</span>
                </td>
              </tr>

              <tr>
                <td>25 Mei 2026</td>
                <td>PAY-009</td>
                <td>BANK-010</td>
                <td>Pembayaran Vendor Bulanan</td>
                <td class="text-success">Rp 40.000.000</td>
                <td>-</td>
                <td>Rp 96.500.000</td>
                <td>
                  <span class="badge bg-success">Paid</span>
                </td>
              </tr>

              <tr class="table-secondary fw-bold">
                <td colspan="6" class="text-end">
                  SALDO AKHIR HUTANG
                </td>
                <td>Rp 96.500.000</td>
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

<!-- MODAL FILTER -->

<div class="modal fade" id="modalFilter" tabindex="-1">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Filter History Hutang</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="row">

            <div class="col-md-6 mb-3">
              <label class="form-label">Vendor</label>
              <select class="form-select">
                <option>PT Supplier Indonesia</option>
                <option>PT Hosting Nusantara</option>
                <option>PT Infrastruktur Digital</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Status Bill</label>
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

<!-- MODAL BANTUAN -->

<div class="modal fade" id="modalBantuan" tabindex="-1">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Bantuan Halaman</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <p>
          Halaman ini digunakan untuk memonitor histori hutang vendor secara detail berdasarkan lawan transaksi/vendor.
        </p>

        <p>
          Konsep halaman ini menyerupai buku besar (general ledger), namun fokus mikro datanya adalah vendor, bukan akun COA.
        </p>

        <p>
          Finance dapat melihat:
        </p>

        <ul>
          <li>Saldo awal hutang vendor</li>
          <li>Mutasi penambahan hutang dari bill/purchase</li>
          <li>Pembayaran hutang vendor</li>
          <li>Adjustment / debit note</li>
          <li>Saldo akhir hutang vendor</li>
        </ul>

        <p>
          Kolom saldo hutang menampilkan balance berjalan (running balance) sehingga memudahkan audit histori hutang dari awal hingga akhir periode.
        </p>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>

    </div>

  </div>

</div>

<?php include('5script.php'); ?>
<?php $page = 'inventory-purchase-report'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <!-- ===================================================== -->
  <!-- HEADER -->
  <!-- ===================================================== -->
  <section class="content-header">
    <div class="container-fluid">

      <div class="d-flex justify-content-between align-items-center">

        <div>
          <h3 class="mb-0">
            Purchase Report
          </h3>
          <p class="text-muted mb-0">
            Analisis pembelian berdasarkan supplier, item, dan periode.
          </p>
        </div>

        <div>
          <button class="btn btn-success">
            <i class="fas fa-file-download"></i>
            Export
          </button>
        </div>

      </div>

    </div>
  </section>

  <!-- ===================================================== -->
  <!-- FILTER CARD -->
  <!-- ===================================================== -->
  <section class="content">
    <div class="container-fluid">

      <div class="card">

        <div class="card-body">
          <div class="row">

            <div class="col-md-3">
              <label>Periode</label>
              <input type="date" class="form-control">
            </div>

            <div class="col-md-3">
              <label>Sampai</label>
              <input type="date" class="form-control">
            </div>

            <div class="col-md-3">
              <label>Supplier</label>
              <select class="form-control">
                <option>Semua Supplier</option>
                <option>PT Sumber Ayam</option>
                <option>CV Mitra Food</option>
              </select>
            </div>

            <div class="col-md-3">
              <label>Item</label>
              <select class="form-control">
                <option>Semua Item</option>
                <option>Ayam</option>
                <option>Daging Sapi</option>
              </select>
            </div>

          </div>
        </div>

        <div class="card-footer">
          <button class="btn btn-primary btn-sm">
            <i class="fas fa-filter"></i> Apply Filter
          </button>
          <button class="btn btn-secondary btn-sm">
            Reset
          </button>
        </div>

      </div>

      <!-- ===================================================== -->
      <!-- KPI PURCHASE -->
      <!-- ===================================================== -->
      <div class="row">

        <div class="col-md-3">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>Rp 125M</h3>
              <p>Total Purchase Value</p>
            </div>
            <div class="icon">
              <i class="fas fa-shopping-cart"></i>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>320</h3>
              <p>Total PO</p>
            </div>
            <div class="icon">
              <i class="fas fa-file-invoice"></i>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>45</h3>
              <p>Active Supplier</p>
            </div>
            <div class="icon">
              <i class="fas fa-truck"></i>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>Rp 8M</h3>
              <p>Outstanding Payment</p>
            </div>
            <div class="icon">
              <i class="fas fa-exclamation-triangle"></i>
            </div>
          </div>
        </div>

      </div>

      <!-- ===================================================== -->
      <!-- TABLE REPORT -->
      <!-- ===================================================== -->
      <div class="card">

        <div class="card-header">
          <h3 class="card-title">
            Purchase Summary
          </h3>
        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-striped table-sm">

            <thead class="table-dark text-center">
              <tr>
                <th>Tanggal</th>
                <th>Supplier</th>
                <th>Item</th>
                <th>Qty</th>
                <th>Unit Price</th>
                <th>Total</th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody>

              <tr>
                <td>2026-05-05 10:20:00</td>
                <td>PT Sumber Ayam</td>
                <td>Ayam Potong</td>
                <td>120</td>
                <td>35.000</td>
                <td>4.200.000</td>
                <td><span class="badge bg-success">Received</span></td>
              </tr>

              <tr>
                <td>2026-05-04 09:10:00</td>
                <td>CV Mitra Food</td>
                <td>Daging Sapi</td>
                <td>80</td>
                <td>120.000</td>
                <td>9.600.000</td>
                <td><span class="badge bg-warning">Pending</span></td>
              </tr>

            </tbody>

          </table>

        </div>

      </div>

    </div>
  </section>

</div>

<!-- ===================================================== -->
<!-- MODAL BANTUAN -->
<!-- ===================================================== -->
<div class="modal fade" id="modalBantuan" tabindex="-1">
  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Bantuan Purchase Report</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <p>
          Halaman ini digunakan untuk menganalisis seluruh aktivitas pembelian barang dari supplier.
        </p>

        <hr>

        <h6>Fungsi Utama:</h6>
        <ul>
          <li>Monitoring total nilai pembelian</li>
          <li>Analisa supplier paling aktif</li>
          <li>Tracking item paling sering dibeli</li>
          <li>Kontrol pembayaran outstanding</li>
        </ul>

        <hr>

        <h6>Penjelasan Kolom Status:</h6>
        <ul>
          <li><b>Pending</b> → PO sudah dibuat, belum diterima</li>
          <li><b>Received</b> → Barang sudah diterima</li>
          <li><b>Partial</b> → Barang diterima sebagian</li>
          <li><b>Cancelled</b> → Transaksi dibatalkan</li>
        </ul>

        <hr>

        <h6>Mode Monitoring:</h6>
        <p>
          Fokus halaman ini adalah <b>operasional control</b>, bukan hanya laporan.
        </p>

        <ul>
          <li>Realtime purchase tracking</li>
          <li>Alert pembelian tinggi</li>
          <li>Supplier performance monitoring</li>
        </ul>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>

    </div>

  </div>
</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
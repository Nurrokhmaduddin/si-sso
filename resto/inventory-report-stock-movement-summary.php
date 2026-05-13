<!-- ========================================================= -->
<!-- PAGE : inventory-report-stock-movement-summary.php -->
<!-- STYLE : Inventory Monitoring Report -->
<!-- FOKUS :
     - Ringkasan mutasi stok
     - Monitoring pergerakan barang
     - Kontrol operasional inventory
     - Analisa stok masuk & keluar
-->
<!-- ========================================================= -->

<?php $page = 'inventory-report-stock-movement-summary'; ?>

<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <!-- ===================================================== -->
  <!-- CONTENT HEADER -->
  <!-- ===================================================== -->
  <section class="content-header">
    <div class="container-fluid">

      <div class="d-flex justify-content-between align-items-center">

        <div>
          <h3 class="mb-0">
            Stock Movement Summary
            <button type="button"
                    class="btn btn-tool"
                    data-bs-toggle="modal"
                    data-bs-target="#modalBantuan"
                    title="Bantuan">
              <i class="fas fa-question-circle"></i>
            </button>
          </h3>

          <p class="text-muted mb-0">
            Monitoring ringkasan mutasi stok masuk, keluar, dan adjustment secara realtime.
          </p>
        </div>

        <div>
          <button class="btn btn-success">
            <i class="fas fa-file-excel me-1"></i>
            Export Report
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

      <!-- ================================================= -->
      <!-- FILTER MONITORING -->
      <!-- ================================================= -->

      <div class="card">

        <div class="card-body">

          <div class="row">

            <div class="col-md-3">
              <b>Periode:</b><br>
              01-May-2026 00:00 s/d 31-May-2026 23:59
            </div>

            <div class="col-md-3">
              <b>Gudang:</b><br>
              Semua Gudang
            </div>

            <div class="col-md-3">
              <b>Kategori Item:</b><br>
              Semua Kategori
            </div>

            <div class="col-md-3">
              <b>Tipe Mutasi:</b><br>
              Semua Mutasi
            </div>

          </div>

        </div>

        <div class="card-footer">

          <div class="card-tools ms-auto">

            <button class="btn btn-outline-info btn-sm"
                    data-bs-toggle="modal"
                    data-bs-target="#modalFilter">
              <i class="fas fa-filter me-1"></i>
              Filter
            </button>

            <button class="btn btn-outline-success btn-sm">
              <i class="fas fa-file-download me-1"></i>
              Export
            </button>

            <button class="btn btn-outline-danger btn-sm">
              <i class="fas fa-sync-alt me-1"></i>
              Reset
            </button>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- KPI MONITORING -->
      <!-- ================================================= -->

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-success">

            <div class="inner">
              <h3>12.480</h3>
              <p>Total Qty Masuk</p>
            </div>

            <div class="icon">
              <i class="fas fa-arrow-down"></i>
            </div>

          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-danger">

            <div class="inner">
              <h3>10.245</h3>
              <p>Total Qty Keluar</p>
            </div>

            <div class="icon">
              <i class="fas fa-arrow-up"></i>
            </div>

          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-warning">

            <div class="inner">
              <h3>248</h3>
              <p>Total Adjustment</p>
            </div>

            <div class="icon">
              <i class="fas fa-random"></i>
            </div>

          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-info">

            <div class="inner">
              <h3>684</h3>
              <p>Total Transaksi</p>
            </div>

            <div class="icon">
              <i class="fas fa-exchange-alt"></i>
            </div>

          </div>
        </div>

      </div>

      <!-- ================================================= -->
      <!-- ALERT MONITORING -->
      <!-- ================================================= -->

      <div class="alert alert-warning">

        <h5>
          <i class="icon fas fa-exclamation-triangle"></i>
          Monitoring Alert
        </h5>

        Terdapat kenaikan mutasi keluar sebesar 18% dibanding periode sebelumnya.
        Periksa item dengan movement tertinggi untuk menghindari stock shortage.

      </div>

      <!-- ================================================= -->
      <!-- TABLE SUMMARY -->
      <!-- ================================================= -->

      <div class="card card-outline card-primary">

        <div class="card-header">
          <h3 class="card-title">
            Summary Pergerakan Stok
          </h3>
        </div>

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered table-striped table-sm datatables1">

              <thead class="table-dark text-center">

                <tr>
                  <th>No.</th>
                  <th>Item Code</th>
                  <th>Nama Item</th>
                  <th>Gudang</th>
                  <th>Qty Masuk</th>
                  <th>Qty Keluar</th>
                  <th>Adjustment</th>
                  <th>Net Movement</th>
                  <th>Last Movement</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>

              </thead>

              <tbody>

                <tr>
                  <td>1</td>
                  <td>RM-001</td>
                  <td>Daging Ayam Fillet</td>
                  <td>Purwokerto</td>
                  <td class="text-success text-end">2.500</td>
                  <td class="text-danger text-end">2.150</td>
                  <td class="text-warning text-end">0</td>
                  <td class="text-primary text-end">350</td>
                  <td>2026-05-10 14:32:18</td>
                  <td>
                    <span class="badge bg-success">
                      Normal
                    </span>
                  </td>
                  <td class="text-center">

                    <a href="inventory-history-stock-ledger.php"
                       class="btn btn-sm btn-info">
                      <i class="fas fa-eye"></i>
                    </a>

                  </td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>RM-002</td>
                  <td>Minyak Goreng</td>
                  <td>Purwokerto</td>
                  <td class="text-success text-end">1.800</td>
                  <td class="text-danger text-end">2.240</td>
                  <td class="text-warning text-end">-20</td>
                  <td class="text-danger text-end">-460</td>
                  <td>2026-05-10 13:08:11</td>
                  <td>
                    <span class="badge bg-danger">
                      High Outflow
                    </span>
                  </td>
                  <td class="text-center">

                    <a href="inventory-history-stock-ledger.php"
                       class="btn btn-sm btn-info">
                      <i class="fas fa-eye"></i>
                    </a>

                  </td>
                </tr>

                <tr>
                  <td>3</td>
                  <td>RM-003</td>
                  <td>Tepung Terigu</td>
                  <td>Gudang Utama</td>
                  <td class="text-success text-end">3.200</td>
                  <td class="text-danger text-end">2.980</td>
                  <td class="text-warning text-end">15</td>
                  <td class="text-primary text-end">235</td>
                  <td>2026-05-10 10:22:49</td>
                  <td>
                    <span class="badge bg-success">
                      Stabil
                    </span>
                  </td>
                  <td class="text-center">

                    <a href="inventory-history-stock-ledger.php"
                       class="btn btn-sm btn-info">
                      <i class="fas fa-eye"></i>
                    </a>

                  </td>
                </tr>

                <tr>
                  <td>4</td>
                  <td>RM-004</td>
                  <td>Beras Premium</td>
                  <td>Gudang Barat</td>
                  <td class="text-success text-end">900</td>
                  <td class="text-danger text-end">1.420</td>
                  <td class="text-warning text-end">0</td>
                  <td class="text-danger text-end">-520</td>
                  <td>2026-05-09 17:41:03</td>
                  <td>
                    <span class="badge bg-warning">
                      Warning
                    </span>
                  </td>
                  <td class="text-center">

                    <a href="inventory-history-stock-ledger.php"
                       class="btn btn-sm btn-info">
                      <i class="fas fa-eye"></i>
                    </a>

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

<!-- ===================================================== -->
<!-- MODAL FILTER -->
<!-- ===================================================== -->

<div class="modal fade"
     id="modalFilter"
     tabindex="-1"
     aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-info text-white">

        <h5 class="modal-title">
          Filter Stock Movement Summary
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
        </button>

      </div>

      <form action="" method="GET">

        <div class="modal-body">

          <div class="alert alert-warning mb-3">

            <b>Informasi:</b>
            Filter digunakan untuk monitoring movement stok berdasarkan periode,
            gudang, kategori item, dan tipe mutasi inventory.

          </div>

          <div class="mb-3">
            <label class="form-label">
              Tanggal Awal
            </label>

            <input type="datetime-local"
                   name="tanggal_awal"
                   class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">
              Tanggal Akhir
            </label>

            <input type="datetime-local"
                   name="tanggal_akhir"
                   class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">
              Gudang
            </label>

            <select class="form-select" name="gudang">
              <option value="">Semua Gudang</option>
              <option>Purwokerto</option>
              <option>Gudang Utama</option>
              <option>Gudang Barat</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">
              Tipe Mutasi
            </label>

            <select class="form-select" name="mutasi">
              <option value="">Semua Mutasi</option>
              <option>Masuk</option>
              <option>Keluar</option>
              <option>Adjustment</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">
              Status Monitoring
            </label>

            <select class="form-select" name="status">
              <option value="">Semua Status</option>
              <option>Normal</option>
              <option>Warning</option>
              <option>High Outflow</option>
              <option>Stabil</option>
            </select>
          </div>

        </div>

        <div class="modal-footer">

          <button type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal">
            Batal
          </button>

          <button type="submit"
                  class="btn btn-info">
            Terapkan Filter
          </button>

        </div>

      </form>

    </div>

  </div>

</div>

<!-- ===================================================== -->
<!-- MODAL BANTUAN -->
<!-- ===================================================== -->

<div class="modal fade"
     id="modalBantuan"
     tabindex="-1"
     aria-hidden="true">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-primary text-white">

        <h5 class="modal-title">
          Bantuan Stock Movement Summary
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
        </button>

      </div>

      <div class="modal-body">

        <div class="alert alert-info">

          Halaman ini digunakan untuk monitoring ringkasan pergerakan stok inventory
          secara operasional dan realtime.

        </div>

        <h6 class="fw-bold">
          Fungsi Halaman
        </h6>

        <ul>
          <li>Melihat total stok masuk dan keluar.</li>
          <li>Monitoring item dengan movement tinggi.</li>
          <li>Melihat adjustment stok inventory.</li>
          <li>Mendeteksi warning movement tidak normal.</li>
          <li>Membantu analisa operasional gudang.</li>
        </ul>

        <hr>

        <h6 class="fw-bold">
          Penjelasan Kolom
        </h6>

        <table class="table table-bordered table-sm">

          <thead class="table-light">
            <tr>
              <th>Kolom</th>
              <th>Penjelasan</th>
            </tr>
          </thead>

          <tbody>

            <tr>
              <td>Qty Masuk</td>
              <td>Total barang masuk selama periode filter.</td>
            </tr>

            <tr>
              <td>Qty Keluar</td>
              <td>Total barang keluar selama periode filter.</td>
            </tr>

            <tr>
              <td>Adjustment</td>
              <td>Koreksi stok manual akibat selisih atau penyesuaian.</td>
            </tr>

            <tr>
              <td>Net Movement</td>
              <td>Selisih total stok masuk dan keluar.</td>
            </tr>

            <tr>
              <td>Last Movement</td>
              <td>Timestamp transaksi movement terakhir.</td>
            </tr>

            <tr>
              <td>Status</td>
              <td>Status monitoring movement item.</td>
            </tr>

          </tbody>

        </table>

        <hr>

        <h6 class="fw-bold">
          Penjelasan Status
        </h6>

        <ul>

          <li>
            <span class="badge bg-success">
              Normal
            </span>
            = movement masih dalam batas aman.
          </li>

          <li>
            <span class="badge bg-warning">
              Warning
            </span>
            = movement perlu perhatian karena mendekati limit.
          </li>

          <li>
            <span class="badge bg-danger">
              High Outflow
            </span>
            = stok keluar terlalu tinggi.
          </li>

          <li>
            <span class="badge bg-info">
              Stabil
            </span>
            = movement konsisten dan aman.
          </li>

        </ul>

      </div>

      <div class="modal-footer">

        <button type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal">
          Tutup
        </button>

      </div>

    </div>

  </div>

</div>

<?php include('5script.php'); ?>
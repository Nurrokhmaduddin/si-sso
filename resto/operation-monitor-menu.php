<?php $page = 'operation-monitor-menu'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">
        Dashboard Inventory Movement
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>

      <p class="text-muted mb-0">
        Monitoring riwayat stok, mutasi barang, inventory ledger, dan movement dashboard.
      </p>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <style>
        .inventory-card {
          border-radius: 12px;
          overflow: hidden;
          box-shadow: 0 2px 8px rgba(0,0,0,0.08);
          margin-bottom: 24px;
        }

        .inventory-card .card-header {
          font-weight: 600;
        }

        .table thead th {
          vertical-align: middle;
          white-space: nowrap;
        }

        .badge-soft {
          padding: 6px 10px;
          border-radius: 8px;
          font-size: 12px;
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
      </style>

    <!-- ===================================================== -->
    <!-- MONITOR STOK BAHAN BAKU -->
    <!-- ===================================================== -->
    <div class="card inventory-card collapse">

      <div class="card-header bg-success text-white">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
          
          <div>
            <h5 class="mb-0">
              <i class="fas fa-boxes me-2"></i>
              Monitor Stok Bahan Baku
            </h5>

            <small>
              Monitoring stok realtime, HPP, nilai persediaan, dan alert minimum stok.
            </small>
          </div>

          <div class="d-flex gap-2">

            <button class="btn btn-light btn-sm">
              <i class="fas fa-filter me-1"></i>
              Filter
            </button>

            <button class="btn btn-warning btn-sm">
              <i class="fas fa-file-excel me-1"></i>
              Export
            </button>

          </div>

        </div>
      </div>

      <div class="card-body">

        <!-- SUMMARY -->
        <div class="row mb-4">

          <div class="col-md-3">
            <div class="summary-box bg-success">
              <h3>128</h3>
              <p>Stok Aman</p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="summary-box bg-warning">
              <h3>18</h3>
              <p>Minimum</p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="summary-box bg-danger">
              <h3>7</h3>
              <p>Kritis</p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="summary-box bg-dark">
              <h3>2</h3>
              <p>Habis</p>
            </div>
          </div>

        </div>

        <!-- TABLE -->
        <div class="table-responsive">

          <table class="table table-bordered table-hover align-middle">

            <thead class="table-dark text-center">
              <tr>
                <th>Kode</th>
                <th>Nama Bahan</th>
                <th>Kategori</th>
                <th>Satuan</th>
                <th>Saldo Stok</th>
                <th>Minimum Stok</th>
                <th>Status</th>
                <th>HPP Saat Ini</th>
                <th>Nilai Persediaan</th>
                <th>Last Movement</th>
              </tr>
            </thead>

            <tbody>

              <tr>
                <td>BB-001</td>
                <td>Kopi Arabica</td>
                <td>Biji Kopi</td>
                <td>gr</td>
                <td class="fw-bold text-success">5000</td>
                <td>1000</td>

                <td class="text-center">
                  <span class="badge bg-success">
                    Aman
                  </span>
                </td>

                <td>120</td>
                <td class="fw-bold">600.000</td>

                <td>
                  <span class="badge bg-primary">
                    Penjualan
                  </span>
                </td>
              </tr>

              <tr>
                <td>BB-002</td>
                <td>Susu Fresh Milk</td>
                <td>Dairy</td>
                <td>ml</td>
                <td class="fw-bold text-warning">2000</td>
                <td>3000</td>

                <td class="text-center">
                  <span class="badge bg-warning text-dark">
                    Minimum
                  </span>
                </td>

                <td>15</td>
                <td class="fw-bold">30.000</td>

                <td>
                  <span class="badge bg-warning text-dark">
                    Produksi
                  </span>
                </td>
              </tr>

              <tr>
                <td>BB-003</td>
                <td>Gula Aren</td>
                <td>Sweetener</td>
                <td>gr</td>
                <td class="fw-bold text-success">10000</td>
                <td>2000</td>

                <td class="text-center">
                  <span class="badge bg-success">
                    Aman
                  </span>
                </td>

                <td>8</td>
                <td class="fw-bold">80.000</td>

                <td>
                  <span class="badge bg-success">
                    Pembelian
                  </span>
                </td>
              </tr>

              <tr>
                <td>BB-004</td>
                <td>Cup Plastik</td>
                <td>Packaging</td>
                <td>pcs</td>
                <td class="fw-bold text-danger">50</td>
                <td>500</td>

                <td class="text-center">
                  <span class="badge bg-danger">
                    Kritis
                  </span>
                </td>

                <td>700</td>
                <td class="fw-bold">35.000</td>

                <td>
                  <span class="badge bg-primary">
                    Penjualan
                  </span>
                </td>
              </tr>

              <tr>
                <td>BB-005</td>
                <td>Espresso Shot</td>
                <td>Coffee Base</td>
                <td>shot</td>
                <td class="fw-bold text-dark">0</td>
                <td>100</td>

                <td class="text-center">
                  <span class="badge bg-dark">
                    Habis
                  </span>
                </td>

                <td>3.000</td>
                <td class="fw-bold">0</td>

                <td>
                  <span class="badge bg-danger">
                    Produksi
                  </span>
                </td>
              </tr>

            </tbody>

          </table>

        </div>

      </div>

      <div class="card-footer bg-light">

        <div class="row">

          <div class="col-md-3">
            <small class="text-muted">
              <b>Aman</b><br>
              Stok di atas minimum
            </small>
          </div>

          <div class="col-md-3">
            <small class="text-muted">
              <b>Minimum</b><br>
              Stok mulai menipis
            </small>
          </div>

          <div class="col-md-3">
            <small class="text-muted">
              <b>Kritis</b><br>
              Harus segera restock
            </small>
          </div>

          <div class="col-md-3">
            <small class="text-muted">
              <b>Habis</b><br>
              Tidak tersedia
            </small>
          </div>

        </div>

      </div>

    </div>



    <!-- ===================================================== -->
    <!-- MONITOR KESANGGUPAN MENU -->
    <!-- ===================================================== -->
    <div class="card inventory-card">

      <div class="card-header bg-primary text-white">

        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">

          <div>
            <h5 class="mb-0">
              <i class="fas fa-utensils me-2"></i>
              Monitor Kesanggupan Menu Resep
            </h5>

            <small>
              Monitoring kemampuan produksi menu berdasarkan stok bahan baku realtime.
            </small>
          </div>

          <div class="d-flex gap-2">

            <button class="btn btn-light btn-sm">
              <i class="fas fa-filter me-1"></i>
              Filter
            </button>

            <button class="btn btn-success btn-sm">
              <i class="fas fa-sync-alt me-1"></i>
              Refresh
            </button>

          </div>

        </div>

      </div>

      <div class="card-body">

        <!-- SUMMARY -->
        <div class="row mb-4">

          <div class="col-md-4">
            <div class="summary-box bg-success">
              <h3>87</h3>
              <p>Bisa Produksi</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="summary-box bg-warning">
              <h3>12</h3>
              <p>Hampir Habis</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="summary-box bg-danger">
              <h3>5</h3>
              <p>Tidak Bisa Produksi</p>
            </div>
          </div>

        </div>

        <!-- TABLE -->
        <div class="table-responsive">

          <table class="table table-bordered table-striped align-middle">

            <thead class="table-dark text-center">
              <tr>
                <th>Menu</th>
                <th>Kategori</th>
                <th>Max Produksi</th>
                <th>Bahan Penghambat</th>
                <th>Status Produksi</th>
                <th>Estimasi HPP Menu</th>
                <th>Margin</th>
              </tr>
            </thead>

            <tbody>

              <tr>
                <td>Es Kopi Susu</td>
                <td>Coffee</td>

                <td class="fw-bold text-warning">
                  13
                </td>

                <td>
                  Susu Fresh Milk
                </td>

                <td class="text-center">
                  <span class="badge bg-warning text-dark">
                    Minimum
                  </span>
                </td>

                <td class="fw-bold">
                  8.500
                </td>

                <td class="text-success fw-bold">
                  16.500
                </td>
              </tr>

              <tr>
                <td>Cappuccino</td>
                <td>Coffee</td>

                <td class="fw-bold text-success">
                  16
                </td>

                <td>
                  Susu Fresh Milk
                </td>

                <td class="text-center">
                  <span class="badge bg-success">
                    Aman
                  </span>
                </td>

                <td class="fw-bold">
                  9.000
                </td>

                <td class="text-success fw-bold">
                  18.000
                </td>
              </tr>

              <tr>
                <td>Latte</td>
                <td>Coffee</td>

                <td class="fw-bold text-danger">
                  0
                </td>

                <td>
                  Espresso Shot
                </td>

                <td class="text-center">
                  <span class="badge bg-danger">
                    Tidak Bisa Produksi
                  </span>
                </td>

                <td class="fw-bold">
                  10.000
                </td>

                <td class="text-muted fw-bold">
                  -
                </td>
              </tr>

              <tr>
                <td>Brown Sugar Milk</td>
                <td>Non Coffee</td>

                <td class="fw-bold text-warning">
                  7
                </td>

                <td>
                  Gula Aren
                </td>

                <td class="text-center">
                  <span class="badge bg-warning text-dark">
                    Minimum
                  </span>
                </td>

                <td class="fw-bold">
                  7.000
                </td>

                <td class="text-success fw-bold">
                  15.000
                </td>
              </tr>

              <tr>
                <td>Americano</td>
                <td>Coffee</td>

                <td class="fw-bold text-success">
                  45
                </td>

                <td>
                  Kopi Arabica
                </td>

                <td class="text-center">
                  <span class="badge bg-success">
                    Aman
                  </span>
                </td>

                <td class="fw-bold">
                  5.500
                </td>

                <td class="text-success fw-bold">
                  19.500
                </td>
              </tr>

            </tbody>

          </table>

        </div>

      </div>

      <div class="card-footer bg-light">

        <div class="row">

          <div class="col-md-4">
            <small class="text-muted">
              <b>Max Produksi</b><br>
              Jumlah maksimal menu yang masih bisa dibuat
            </small>
          </div>

          <div class="col-md-4">
            <small class="text-muted">
              <b>Bahan Penghambat</b><br>
              Ingredient dengan stok paling kritis
            </small>
          </div>

          <div class="col-md-4">
            <small class="text-muted">
              <b>Status Produksi</b><br>
              Kondisi kemampuan produksi menu saat ini
            </small>
          </div>

        </div>

      </div>

    </div>







    </div>
  </section>
</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
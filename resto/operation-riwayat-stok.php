<?php $page = 'operation-riwayat-stok'; ?>
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
      <!-- 1. KARTU STOK -->
      <!-- ===================================================== -->
      <div class="card inventory-card">
        <div class="card-header bg-primary text-white">
          <h5 class="mb-0">
            1. Kartu Stok — Kopi Arabica 1Kg
          </h5>
        </div>

        <div class="card-body table-responsive">

          <div class="alert alert-info">
            Fokus pada histori pergerakan untuk <b>1 produk tertentu</b>.
          </div>

          <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark text-center">
              <tr>
                <th>Tanggal</th>
                <th>Referensi</th>
                <th>Keterangan</th>
                <th>Masuk</th>
                <th>Keluar</th>
                <th>Saldo</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>01/05/2026</td>
                <td>PO-001</td>
                <td>Pembelian Supplier</td>
                <td class="text-success fw-bold">10</td>
                <td>0</td>
                <td><b>10</b></td>
              </tr>

              <tr>
                <td>02/05/2026</td>
                <td>PK-001</td>
                <td>Pemakaian Dapur</td>
                <td>0</td>
                <td class="text-danger fw-bold">2</td>
                <td><b>8</b></td>
              </tr>

              <tr>
                <td>03/05/2026</td>
                <td>RJ-001</td>
                <td>Retur Penjualan</td>
                <td class="text-success fw-bold">1</td>
                <td>0</td>
                <td><b>9</b></td>
              </tr>

              <tr>
                <td>04/05/2026</td>
                <td>WS-001</td>
                <td>Barang Rusak</td>
                <td>0</td>
                <td class="text-danger fw-bold">1</td>
                <td><b>8</b></td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>

      <!-- ===================================================== -->
      <!-- 2. STOCK MOVEMENT -->
      <!-- ===================================================== -->
      <div class="card inventory-card">
        <div class="card-header bg-success text-white">
          <h5 class="mb-0">
            2. Stock Movement
          </h5>
        </div>

        <div class="card-body table-responsive">

          <div class="alert alert-success">
            Menampilkan semua aktivitas pergerakan stok dari semua produk.
          </div>

          <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark text-center">
              <tr>
                <th>Tanggal</th>
                <th>Produk</th>
                <th>Jenis</th>
                <th>Referensi</th>
                <th>Qty</th>
                <th>Gudang</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>01/05/2026</td>
                <td>Kopi Arabica</td>
                <td><span class="badge bg-success">Pembelian</span></td>
                <td>PO-001</td>
                <td class="text-success fw-bold">+10</td>
                <td>Gudang Utama</td>
              </tr>

              <tr>
                <td>01/05/2026</td>
                <td>Susu UHT</td>
                <td><span class="badge bg-success">Pembelian</span></td>
                <td>PO-001</td>
                <td class="text-success fw-bold">+20</td>
                <td>Gudang Utama</td>
              </tr>

              <tr>
                <td>02/05/2026</td>
                <td>Kopi Arabica</td>
                <td><span class="badge bg-warning text-dark">Pemakaian</span></td>
                <td>PK-001</td>
                <td class="text-danger fw-bold">-2</td>
                <td>Dapur</td>
              </tr>

              <tr>
                <td>03/05/2026</td>
                <td>Gula</td>
                <td><span class="badge bg-info">Transfer</span></td>
                <td>TF-001</td>
                <td class="text-danger fw-bold">-5</td>
                <td>Gudang Utama</td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>

      <!-- ===================================================== -->
      <!-- 3. INVENTORY LEDGER -->
      <!-- ===================================================== -->
      <div class="card inventory-card">
        <div class="card-header bg-warning">
          <h5 class="mb-0 text-dark">
            3. Inventory Ledger
          </h5>
        </div>

        <div class="card-body table-responsive">

          <div class="alert alert-warning">
            Inventory ledger digunakan untuk kebutuhan akuntansi dan nilai persediaan.
          </div>

          <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark text-center">
              <tr>
                <th>Tanggal</th>
                <th>Produk</th>
                <th>Masuk</th>
                <th>Keluar</th>
                <th>Saldo Qty</th>
                <th>Harga Pokok</th>
                <th>Nilai Persediaan</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>01/05/2026</td>
                <td>Kopi Arabica</td>
                <td class="text-success fw-bold">10</td>
                <td>0</td>
                <td>10</td>
                <td>100.000</td>
                <td class="fw-bold">1.000.000</td>
              </tr>

              <tr>
                <td>02/05/2026</td>
                <td>Kopi Arabica</td>
                <td>0</td>
                <td class="text-danger fw-bold">2</td>
                <td>8</td>
                <td>100.000</td>
                <td class="fw-bold">800.000</td>
              </tr>

              <tr>
                <td>03/05/2026</td>
                <td>Kopi Arabica</td>
                <td class="text-success fw-bold">1</td>
                <td>0</td>
                <td>9</td>
                <td>100.000</td>
                <td class="fw-bold">900.000</td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>

      <!-- ===================================================== -->
      <!-- 4. STOCK LEDGER -->
      <!-- ===================================================== -->
      <div class="card inventory-card">
        <div class="card-header bg-dark text-white">
          <h5 class="mb-0">
            4. Stock Ledger
          </h5>
        </div>

        <div class="card-body table-responsive">

          <div class="alert alert-secondary">
            Format buku besar stok ala ERP / Manufacturing.
          </div>

          <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark text-center">
              <tr>
                <th>Ref</th>
                <th>Tanggal</th>
                <th>Produk</th>
                <th>Transaksi</th>
                <th>Debit Qty</th>
                <th>Kredit Qty</th>
                <th>Balance</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>PO-001</td>
                <td>01/05/2026</td>
                <td>Kopi Arabica</td>
                <td>Pembelian</td>
                <td class="text-success fw-bold">10</td>
                <td>0</td>
                <td><b>10</b></td>
              </tr>

              <tr>
                <td>PK-001</td>
                <td>02/05/2026</td>
                <td>Kopi Arabica</td>
                <td>Pemakaian</td>
                <td>0</td>
                <td class="text-danger fw-bold">2</td>
                <td><b>8</b></td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>

      <!-- ===================================================== -->
      <!-- 5. INVENTORY MOVEMENT -->
      <!-- ===================================================== -->
      <div class="card inventory-card">
        <div class="card-header bg-info text-white">
          <h5 class="mb-0">
            5. Inventory Movement Dashboard
          </h5>
        </div>

        <div class="card-body">

          <div class="alert alert-info">
            Ringkasan mutasi stok untuk monitoring cepat operasional.
          </div>

          <!-- Summary -->
          <div class="row">

            <div class="col-md-3">
              <div class="summary-box bg-success">
                <h3>25</h3>
                <p>Pembelian</p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="summary-box bg-primary">
                <h3>122</h3>
                <p>Penjualan</p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="summary-box bg-warning">
                <h3>80</h3>
                <p>Pemakaian</p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="summary-box bg-danger">
                <h3>3</h3>
                <p>Waste</p>
              </div>
            </div>

          </div>

          <!-- Detail -->
          <div class="table-responsive mt-3">

            <table class="table table-bordered table-striped align-middle">
              <thead class="table-dark text-center">
                <tr>
                  <th>Tanggal</th>
                  <th>Jenis</th>
                  <th>Produk</th>
                  <th>Qty</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>01/05/2026</td>
                  <td><span class="badge bg-success">IN</span></td>
                  <td>Kopi</td>
                  <td>10</td>
                </tr>

                <tr>
                  <td>02/05/2026</td>
                  <td><span class="badge bg-danger">OUT</span></td>
                  <td>Kopi</td>
                  <td>2</td>
                </tr>

                <tr>
                  <td>03/05/2026</td>
                  <td><span class="badge bg-warning text-dark">ADJ</span></td>
                  <td>Kopi</td>
                  <td>-1</td>
                </tr>
              </tbody>

            </table>

          </div>

        </div>
      </div>

      <!-- ===================================================== -->
      <!-- CARD : RIWAYAT STOK PERPETUAL INVENTORY LEDGER -->
      <!-- ===================================================== -->

      <style>
        .inventory-ledger-card {
          border-radius: 14px;
          overflow: hidden;
          box-shadow: 0 3px 10px rgba(0,0,0,0.08);
          margin-bottom: 24px;
        }

        .inventory-ledger-card .card-header {
          padding: 14px 18px;
        }

        .inventory-ledger-card .table thead th {
          vertical-align: middle;
          white-space: nowrap;
          font-size: 13px;
        }

        .inventory-ledger-card .table tbody td {
          vertical-align: middle;
          font-size: 13px;
        }

        .inventory-ledger-card .table tfoot td {
          font-weight: 700;
          background: #f8f9fa;
        }

        .ledger-summary-box {
          border-radius: 12px;
          padding: 14px;
          background: #f8f9fa;
          border: 1px solid #e9ecef;
          height: 100%;
        }

        .ledger-summary-box small {
          color: #6c757d;
        }

        .ledger-summary-box h5 {
          margin: 4px 0 0;
          font-weight: 700;
        }

        .ledger-opening {
          background: #eef7ff !important;
        }

        .ledger-closing {
          background: #ecfff2 !important;
        }

        .badge-jenis {
          font-size: 11px;
          padding: 6px 10px;
          border-radius: 8px;
        }

        .text-money {
          white-space: nowrap;
        }

        .sticky-ledger-header thead th {
          position: sticky;
          top: 0;
          z-index: 2;
        }
      </style>

      <div class="card inventory-ledger-card">

        <!-- HEADER -->
        <div class="card-header bg-dark text-white">

          <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">

            <div>
              <h5 class="mb-1">
                <i class="fas fa-boxes me-2"></i>
                Riwayat Stok — Perpetual Inventory Ledger
              </h5>

              <small class="text-light">
                Histori stok + HPP berjalan + nilai persediaan realtime
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

        <!-- BODY -->
        <div class="card-body">

          <!-- FILTER INFO -->
          <div class="alert alert-info mb-4">
            <div class="row">

              <div class="col-md-3">
                <b>Produk:</b><br>
                Kopi Arabica 1Kg
              </div>

              <div class="col-md-3">
                <b>Gudang:</b><br>
                Gudang Utama
              </div>

              <div class="col-md-3">
                <b>Periode:</b><br>
                Mei 2026
              </div>

              <div class="col-md-3">
                <b>Metode HPP:</b><br>
                Moving Average
              </div>

            </div>
          </div>

          <!-- SUMMARY -->
          <div class="row mb-4">

            <div class="col-md-3 mb-3">
              <div class="ledger-summary-box">
                <small>Saldo Awal</small>
                <h5>10 Qty</h5>
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="ledger-summary-box">
                <small>Saldo Akhir</small>
                <h5>63 Qty</h5>
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="ledger-summary-box">
                <small>HPP Aktif</small>
                <h5>Rp 100.276</h5>
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <div class="ledger-summary-box">
                <small>Nilai Persediaan</small>
                <h5>Rp 6.317.388</h5>
              </div>
            </div>

          </div>

          <!-- TABLE -->
          <div class="table-responsive sticky-ledger-header">

            <table class="table table-bordered table-hover align-middle">

              <thead class="table-dark text-center">
                <tr>
                  <th>Tanggal</th>
                  <th>Ref</th>
                  <th>Jenis Transaksi</th>
                  <th>Keterangan</th>
                  <th>Masuk</th>
                  <th>Keluar</th>
                  <th>Saldo Stok</th>
                  <th>Harga Transaksi</th>
                  <th>HPP Update</th>
                  <th>Nilai Persediaan</th>
                </tr>
              </thead>

              <tbody>

                <!-- OPENING -->
                <tr class="ledger-opening">
                  <td class="text-center">-</td>
                  <td><b>SALDO AWAL</b></td>
                  <td>
                    <span class="badge bg-info badge-jenis">
                      Opening Balance
                    </span>
                  </td>
                  <td>Saldo Awal Periode</td>
                  <td class="text-center">-</td>
                  <td class="text-center">-</td>
                  <td class="text-center fw-bold">10</td>
                  <td class="text-center">-</td>
                  <td class="text-money">100.000</td>
                  <td class="text-money fw-bold">1.000.000</td>
                </tr>

                <!-- TRANSACTION -->
                <tr>
                  <td>01/05/2026</td>
                  <td>PO-001</td>
                  <td>
                    <span class="badge bg-secondary badge-jenis">
                      Pembelian
                    </span>
                  </td>
                  <td>Supplier A</td>
                  <td class="text-success fw-bold text-center">10</td>
                  <td class="text-center">0</td>
                  <td class="text-center fw-bold">20</td>
                  <td class="text-money">100.000</td>
                  <td class="text-money">100.000</td>
                  <td class="text-money fw-bold">2.000.000</td>
                </tr>

                <tr>
                  <td>03/05/2026</td>
                  <td>PK-001</td>
                  <td>
                    <span class="badge bg-secondary text-dark badge-jenis">
                      Pemakaian
                    </span>
                  </td>
                  <td>Produksi Cafe</td>
                  <td class="text-center">0</td>
                  <td class="text-danger fw-bold text-center">2</td>
                  <td class="text-center fw-bold">18</td>
                  <td class="text-center">-</td>
                  <td class="text-money">100.000</td>
                  <td class="text-money fw-bold">1.800.000</td>
                </tr>

                <tr>
                  <td>05/05/2026</td>
                  <td>PO-002</td>
                  <td>
                    <span class="badge bg-secondary badge-jenis">
                      Pembelian
                    </span>
                  </td>
                  <td>Supplier B</td>
                  <td class="text-success fw-bold text-center">20</td>
                  <td class="text-center">0</td>
                  <td class="text-center fw-bold">38</td>
                  <td class="text-money">120.000</td>
                  <td class="text-money">110.526</td>
                  <td class="text-money fw-bold">4.199.988</td>
                </tr>

                <tr>
                  <td>06/05/2026</td>
                  <td>WS-001</td>
                  <td>
                    <span class="badge bg-secondary badge-jenis">
                      Waste
                    </span>
                  </td>
                  <td>Kopi Rusak</td>
                  <td class="text-center">0</td>
                  <td class="text-danger fw-bold text-center">1</td>
                  <td class="text-center fw-bold">37</td>
                  <td class="text-center">-</td>
                  <td class="text-money">110.526</td>
                  <td class="text-money fw-bold">4.089.462</td>
                </tr>

                <tr>
                  <td>07/05/2026</td>
                  <td>PJ-001</td>
                  <td>
                    <span class="badge bg-secondary badge-jenis">
                      Penjualan
                    </span>
                  </td>
                  <td>Penjualan Menu</td>
                  <td class="text-center">0</td>
                  <td class="text-danger fw-bold text-center">5</td>
                  <td class="text-center fw-bold">32</td>
                  <td class="text-center">-</td>
                  <td class="text-money">110.526</td>
                  <td class="text-money fw-bold">3.536.832</td>
                </tr>

                <tr>
                  <td>08/05/2026</td>
                  <td>OP-001</td>
                  <td>
                    <span class="badge bg-secondary badge-jenis">
                      Stock Opname
                    </span>
                  </td>
                  <td>Koreksi Fisik</td>
                  <td class="text-success fw-bold text-center">1</td>
                  <td class="text-center">0</td>
                  <td class="text-center fw-bold">33</td>
                  <td class="text-center">-</td>
                  <td class="text-money">110.526</td>
                  <td class="text-money fw-bold">3.647.358</td>
                </tr>

                <tr>
                  <td>10/05/2026</td>
                  <td>PO-003</td>
                  <td>
                    <span class="badge bg-secondary badge-jenis">
                      Pembelian
                    </span>
                  </td>
                  <td>Supplier C</td>
                  <td class="text-success fw-bold text-center">30</td>
                  <td class="text-center">0</td>
                  <td class="text-center fw-bold">63</td>
                  <td class="text-money">90.000</td>
                  <td class="text-money">100.276</td>
                  <td class="text-money fw-bold">6.317.388</td>
                </tr>

                <!-- CLOSING -->
                <tr class="ledger-closing">
                  <td class="text-center">-</td>
                  <td><b>SALDO AKHIR</b></td>
                  <td>
                    <span class="badge bg-info badge-jenis">
                      Closing Balance
                    </span>
                  </td>
                  <td>Saldo Akhir Periode</td>
                  <td class="text-center">-</td>
                  <td class="text-center">-</td>
                  <td class="text-center fw-bold">63</td>
                  <td class="text-center">-</td>
                  <td class="text-money">100.276</td>
                  <td class="text-money fw-bold">6.317.388</td>
                </tr>

              </tbody>

            </table>

          </div>

        </div>

        <!-- FOOTER -->
        <div class="card-footer bg-light">

          <div class="row">

            <div class="col-md-3">
              <small class="text-muted">
                <b>Opening Balance</b><br>
                Saldo awal periode
              </small>
            </div>

            <div class="col-md-3">
              <small class="text-muted">
                <b>HPP Update</b><br>
                HPP aktif setelah transaksi
              </small>
            </div>

            <div class="col-md-3">
              <small class="text-muted">
                <b>Nilai Persediaan</b><br>
                Saldo × HPP aktif
              </small>
            </div>

            <div class="col-md-3">
              <small class="text-muted">
                <b>Metode</b><br>
                Moving Average Costing
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
<!-- ========================================================= -->
<!-- PAGE : inventory-report.php -->
<!-- STYLE : Inventory Monitoring & Operational Report -->
<!-- FOKUS :
     - Monitoring stok operasional
     - Realtime inventory control
     - Alert & warning stock
     - Fast filtering
     - Actionable monitoring
-->
<!-- ========================================================= -->

<?php $page = 'inventory-report'; ?>

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
            Inventory Report

            <button
              type="button"
              class="btn btn-tool"
              data-bs-toggle="modal"
              data-bs-target="#modalBantuan"
              title="Bantuan">

              <i class="fas fa-question-circle"></i>

            </button>

          </h3>

          <p class="text-muted mb-0">
            Monitoring kondisi inventory, stok aktif, warning stok, dan pergerakan inventory realtime.
          </p>
        </div>

        <div>
          <button class="btn btn-success btn-sm">
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
      <!-- FILTER SUMMARY -->
      <!-- ================================================= -->
      <div class="card">

        <div class="card-body">

          <div class="row">

            <div class="col-md-3">
              <b>Gudang:</b> Semua Gudang
            </div>

            <div class="col-md-3">
              <b>Kategori:</b> Semua Kategori
            </div>

            <div class="col-md-3">
              <b>Status Stok:</b> Semua
            </div>

            <div class="col-md-3">
              <b>Periode:</b> 2026-05-01 00:00 s/d 2026-05-31 23:59
            </div>

          </div>

        </div>

        <div class="card-footer">

          <div class="card-tools ms-auto">

            <button
              class="btn btn-outline-info btn-sm"
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
              <i class="fas fa-sync me-1"></i>
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

          <div class="small-box bg-primary">

            <div class="inner">
              <h3>1,248</h3>
              <p>Total Item Aktif</p>
            </div>

            <div class="icon">
              <i class="fas fa-boxes"></i>
            </div>

          </div>

        </div>

        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-warning">

            <div class="inner">
              <h3>86</h3>
              <p>Low Stock Warning</p>
            </div>

            <div class="icon">
              <i class="fas fa-exclamation-triangle"></i>
            </div>

          </div>

        </div>

        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-danger">

            <div class="inner">
              <h3>21</h3>
              <p>Out of Stock</p>
            </div>

            <div class="icon">
              <i class="fas fa-times-circle"></i>
            </div>

          </div>

        </div>

        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-success">

            <div class="inner">
              <h3>Rp 428 Jt</h3>
              <p>Total Inventory Value</p>
            </div>

            <div class="icon">
              <i class="fas fa-coins"></i>
            </div>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- ALERT SECTION -->
      <!-- ================================================= -->
      <div class="row">

        <div class="col-md-12">

          <div class="alert alert-warning">

            <h5>
              <i class="icon fas fa-exclamation-triangle"></i>
              Warning Monitoring
            </h5>

            Terdapat 21 item stok habis dan 86 item mendekati minimum stock.
            Segera lakukan restock untuk menghindari gangguan operasional.

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- TABLE MONITORING -->
      <!-- ================================================= -->
      <div class="card card-outline card-primary">

        <div class="card-header">

          <h3 class="card-title">
            Inventory Monitoring Table
          </h3>

        </div>

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered table-striped table-hover table-sm datatables1">

              <thead class="table-dark text-center">

                <tr>
                  <th>No.</th>
                  <th>Kode Item</th>
                  <th>Nama Item</th>
                  <th>Gudang</th>
                  <th>Kategori</th>
                  <th>Stok Saat Ini</th>
                  <th>Minimum Stock</th>
                  <th>Satuan</th>
                  <th>Status</th>
                  <th>Last Update</th>
                  <th>Aksi</th>
                </tr>

              </thead>

              <tbody>

                <tr>
                  <td>1</td>
                  <td>INV-001</td>
                  <td>Ayam Fillet</td>
                  <td>Gudang Purwokerto</td>
                  <td>Bahan Baku</td>
                  <td class="text-end">120</td>
                  <td class="text-end">50</td>
                  <td>Kg</td>
                  <td>
                    <span class="badge bg-success">
                      Aman
                    </span>
                  </td>
                  <td>2026-05-06 08:45:11</td>
                  <td class="text-center">

                    <a
                      href="inventory-stock-ledger.php"
                      class="btn btn-sm btn-info">

                      <i class="fas fa-eye"></i>

                    </a>

                  </td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>INV-002</td>
                  <td>Minyak Goreng</td>
                  <td>Gudang Purwokerto</td>
                  <td>Bahan Baku</td>
                  <td class="text-end">18</td>
                  <td class="text-end">25</td>
                  <td>Liter</td>
                  <td>
                    <span class="badge bg-warning">
                      Low Stock
                    </span>
                  </td>
                  <td>2026-05-06 09:14:22</td>
                  <td class="text-center">

                    <a
                      href="inventory-stock-ledger.php"
                      class="btn btn-sm btn-info">

                      <i class="fas fa-eye"></i>

                    </a>

                  </td>
                </tr>

                <tr>
                  <td>3</td>
                  <td>INV-003</td>
                  <td>Tepung Terigu</td>
                  <td>Gudang Purwokerto</td>
                  <td>Bahan Baku</td>
                  <td class="text-end">0</td>
                  <td class="text-end">15</td>
                  <td>Kg</td>
                  <td>
                    <span class="badge bg-danger">
                      Out Of Stock
                    </span>
                  </td>
                  <td>2026-05-06 09:32:44</td>
                  <td class="text-center">

                    <a
                      href="inventory-stock-ledger.php"
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
<div
  class="modal fade"
  id="modalFilter"
  tabindex="-1"
  aria-labelledby="modalFilterLabel"
  aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-info text-white">

        <h5 class="modal-title" id="modalFilterLabel">
          Filter Inventory Report
        </h5>

        <button
          type="button"
          class="btn-close btn-close-white"
          data-bs-dismiss="modal">
        </button>

      </div>

      <form action="" method="GET">

        <div class="modal-body">

          <div class="alert alert-warning">

            Gunakan filter untuk mempersempit data monitoring inventory
            berdasarkan gudang, status stok, kategori, dan periode transaksi.

          </div>

          <div class="mb-3">

            <label class="form-label">
              Gudang
            </label>

            <select class="form-select" name="gudang">

              <option value="">
                Semua Gudang
              </option>

              <option>
                Gudang Purwokerto
              </option>

              <option>
                Gudang Jakarta
              </option>

            </select>

          </div>

          <div class="mb-3">

            <label class="form-label">
              Kategori Item
            </label>

            <select class="form-select" name="kategori">

              <option value="">
                Semua Kategori
              </option>

              <option>
                Bahan Baku
              </option>

              <option>
                Packaging
              </option>

              <option>
                Frozen
              </option>

            </select>

          </div>

          <div class="mb-3">

            <label class="form-label">
              Status Stok
            </label>

            <select class="form-select" name="status">

              <option value="">
                Semua Status
              </option>

              <option>
                Aman
              </option>

              <option>
                Low Stock
              </option>

              <option>
                Out Of Stock
              </option>

            </select>

          </div>

          <div class="mb-3">

            <label class="form-label">
              Tanggal Awal
            </label>

            <input
              type="datetime-local"
              class="form-control"
              name="tanggal_awal">

          </div>

          <div class="mb-3">

            <label class="form-label">
              Tanggal Akhir
            </label>

            <input
              type="datetime-local"
              class="form-control"
              name="tanggal_akhir">

          </div>

        </div>

        <div class="modal-footer">

          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal">

            Batal

          </button>

          <button
            type="submit"
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
<div
  class="modal fade"
  id="modalBantuan"
  tabindex="-1"
  aria-labelledby="modalBantuanLabel"
  aria-hidden="true">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-primary text-white">

        <h5 class="modal-title" id="modalBantuanLabel">
          Bantuan Inventory Report
        </h5>

        <button
          type="button"
          class="btn-close btn-close-white"
          data-bs-dismiss="modal">
        </button>

      </div>

      <div class="modal-body">

        <div class="alert alert-info">

          Halaman ini digunakan untuk monitoring inventory operasional secara realtime.
          Fokus utama halaman ini adalah membantu tim operasional mengetahui item
          yang perlu segera ditindaklanjuti.

        </div>

        <h5>Cara Menggunakan Halaman</h5>

        <ul>

          <li>
            Gunakan tombol <b>Filter</b> untuk memfilter data berdasarkan gudang,
            kategori item, status stok, dan periode waktu.
          </li>

          <li>
            Gunakan tombol <b>Export</b> untuk mengunduh laporan inventory.
          </li>

          <li>
            Gunakan tombol <b>Detail</b> pada kolom aksi untuk melihat histori
            kartu stok item.
          </li>

        </ul>

        <hr>

        <h5>Penjelasan Kolom Tabel</h5>

        <table class="table table-bordered table-sm">

          <thead class="table-dark">

            <tr>
              <th>Kolom</th>
              <th>Keterangan</th>
            </tr>

          </thead>

          <tbody>

            <tr>
              <td>Kode Item</td>
              <td>Kode unik item inventory.</td>
            </tr>

            <tr>
              <td>Nama Item</td>
              <td>Nama bahan, produk, atau inventory.</td>
            </tr>

            <tr>
              <td>Gudang</td>
              <td>Lokasi penyimpanan inventory.</td>
            </tr>

            <tr>
              <td>Stok Saat Ini</td>
              <td>Total stok realtime saat ini.</td>
            </tr>

            <tr>
              <td>Minimum Stock</td>
              <td>Batas minimum stok aman.</td>
            </tr>

            <tr>
              <td>Last Update</td>
              <td>Timestamp terakhir stok berubah.</td>
            </tr>

          </tbody>

        </table>

        <hr>

        <h5>Penjelasan Status</h5>

        <table class="table table-bordered table-sm">

          <thead class="table-dark">

            <tr>
              <th>Status</th>
              <th>Arti</th>
            </tr>

          </thead>

          <tbody>

            <tr>
              <td>
                <span class="badge bg-success">
                  Aman
                </span>
              </td>

              <td>
                Stok masih dalam batas aman operasional.
              </td>

            </tr>

            <tr>
              <td>
                <span class="badge bg-warning">
                  Low Stock
                </span>
              </td>

              <td>
                Stok mendekati batas minimum dan perlu segera restock.
              </td>

            </tr>

            <tr>
              <td>
                <span class="badge bg-danger">
                  Out Of Stock
                </span>
              </td>

              <td>
                Stok habis dan berpotensi mengganggu operasional.
              </td>

            </tr>

          </tbody>

        </table>

      </div>

      <div class="modal-footer">

        <button
          type="button"
          class="btn btn-secondary"
          data-bs-dismiss="modal">

          Tutup

        </button>

      </div>

    </div>

  </div>

</div>

<?php include('5script.php'); ?>
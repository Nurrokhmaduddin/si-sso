<!-- ========================================================= -->
<!-- PAGE : inventory-report-stock-opname.php -->
<!-- STYLE : Inventory Monitoring Report -->
<!-- FOKUS :
     - Monitoring hasil stock opname
     - Analisa selisih stok
     - Kontrol akurasi inventory
     - Audit operasional gudang
-->
<!-- ========================================================= -->

<?php $page = 'inventory-report-stock-opname'; ?>

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
            Stock Opname Report

            <button type="button"
                    class="btn btn-tool"
                    data-bs-toggle="modal"
                    data-bs-target="#modalBantuan"
                    title="Bantuan">

              <i class="fas fa-question-circle"></i>

            </button>
          </h3>

          <p class="text-muted mb-0">
            Monitoring hasil stock opname dan analisa selisih stok inventory.
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
      <!-- FILTER -->
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
              <b>Status SO:</b><br>
              Semua Status
            </div>

            <div class="col-md-3">
              <b>Penanggung Jawab:</b><br>
              Semua PIC
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

              <i class="fas fa-download me-1"></i>
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
      <!-- KPI -->
      <!-- ================================================= -->

      <div class="row">

        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-info">

            <div class="inner">
              <h3>48</h3>
              <p>Total Stock Opname</p>
            </div>

            <div class="icon">
              <i class="fas fa-clipboard-check"></i>
            </div>

          </div>

        </div>

        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-success">

            <div class="inner">
              <h3>92%</h3>
              <p>Akurasi Stok</p>
            </div>

            <div class="icon">
              <i class="fas fa-check-circle"></i>
            </div>

          </div>

        </div>

        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-warning">

            <div class="inner">
              <h3>124</h3>
              <p>Item Selisih</p>
            </div>

            <div class="icon">
              <i class="fas fa-exclamation-triangle"></i>
            </div>

          </div>

        </div>

        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-danger">

            <div class="inner">
              <h3>18</h3>
              <p>SO Bermasalah</p>
            </div>

            <div class="icon">
              <i class="fas fa-times-circle"></i>
            </div>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- ALERT -->
      <!-- ================================================= -->

      <div class="alert alert-warning">

        <h5>
          <i class="icon fas fa-exclamation-triangle"></i>
          Monitoring Alert
        </h5>

        Terdapat peningkatan selisih stok pada gudang Purwokerto sebesar 14%
        dibanding periode sebelumnya. Periksa item dengan discrepancy tertinggi.

      </div>

      <!-- ================================================= -->
      <!-- TABLE -->
      <!-- ================================================= -->

      <div class="card card-outline card-primary">

        <div class="card-header">

          <h3 class="card-title">
            Summary Stock Opname
          </h3>

        </div>

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered table-striped table-sm datatables1">

              <thead class="table-dark text-center">

                <tr>
                  <th>No.</th>
                  <th>Kode SO</th>
                  <th>Gudang</th>
                  <th>Tanggal SO</th>
                  <th>Penanggung Jawab</th>
                  <th>Jumlah Item Dicek</th>
                  <th>Item Selisih</th>
                  <th>Total Selisih Qty</th>
                  <th>Status</th>
                  <th>Catatan</th>
                  <th>Aksi</th>
                </tr>

              </thead>

              <tbody>

                <tr>
                  <td>1</td>
                  <td>SO-202605-001</td>
                  <td>Purwokerto</td>
                  <td>2026-05-05 14:12:45</td>
                  <td>AMRI</td>
                  <td class="text-end">248</td>
                  <td class="text-end text-warning">12</td>
                  <td class="text-end text-danger">-24</td>

                  <td>
                    <span class="badge bg-warning">
                      Selisih Minor
                    </span>
                  </td>

                  <td>Selisih pada item frozen food.</td>

                  <td class="text-center">

                    <a href="inventory-history-stock-opname.php"
                       class="btn btn-sm btn-info">

                      <i class="fas fa-eye"></i>

                    </a>

                  </td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>SO-202605-002</td>
                  <td>Gudang Utama</td>
                  <td>2026-05-03 09:21:11</td>
                  <td>SOLY</td>
                  <td class="text-end">512</td>
                  <td class="text-end text-success">0</td>
                  <td class="text-end text-success">0</td>

                  <td>
                    <span class="badge bg-success">
                      Sesuai
                    </span>
                  </td>

                  <td>Tidak ada selisih.</td>

                  <td class="text-center">

                    <a href="inventory-history-stock-opname.php"
                       class="btn btn-sm btn-info">

                      <i class="fas fa-eye"></i>

                    </a>

                  </td>
                </tr>

                <tr>
                  <td>3</td>
                  <td>SO-202605-003</td>
                  <td>Gudang Barat</td>
                  <td>2026-05-02 18:40:02</td>
                  <td>IMAM</td>
                  <td class="text-end">186</td>
                  <td class="text-end text-danger">38</td>
                  <td class="text-end text-danger">-85</td>

                  <td>
                    <span class="badge bg-danger">
                      Selisih Besar
                    </span>
                  </td>

                  <td>Banyak item tidak sesuai sistem.</td>

                  <td class="text-center">

                    <a href="inventory-history-stock-opname.php"
                       class="btn btn-sm btn-info">

                      <i class="fas fa-eye"></i>

                    </a>

                  </td>
                </tr>

                <tr>
                  <td>4</td>
                  <td>SO-202605-004</td>
                  <td>Purwokerto</td>
                  <td>2026-05-01 07:14:19</td>
                  <td>MAIL</td>
                  <td class="text-end">320</td>
                  <td class="text-end text-warning">5</td>
                  <td class="text-end text-warning">-7</td>

                  <td>
                    <span class="badge bg-info">
                      Adjustment Needed
                    </span>
                  </td>

                  <td>Menunggu approval adjustment.</td>

                  <td class="text-center">

                    <a href="inventory-history-stock-opname.php"
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
          Filter Stock Opname Report
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
        </button>

      </div>

      <form action="" method="GET">

        <div class="modal-body">

          <div class="alert alert-warning">

            Filter digunakan untuk monitoring hasil stock opname
            berdasarkan periode, gudang, status SO, dan penanggung jawab.

          </div>

          <div class="mb-3">
            <label class="form-label">
              Tanggal Awal
            </label>

            <input type="datetime-local"
                   class="form-control"
                   name="tanggal_awal">
          </div>

          <div class="mb-3">
            <label class="form-label">
              Tanggal Akhir
            </label>

            <input type="datetime-local"
                   class="form-control"
                   name="tanggal_akhir">
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
              Status SO
            </label>

            <select class="form-select" name="status">

              <option value="">Semua Status</option>
              <option>Sesuai</option>
              <option>Selisih Minor</option>
              <option>Selisih Besar</option>
              <option>Adjustment Needed</option>

            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">
              Penanggung Jawab
            </label>

            <input type="text"
                   class="form-control"
                   name="penanggung_jawab"
                   placeholder="Masukkan nama PIC">
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
          Bantuan Stock Opname Report
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
        </button>

      </div>

      <div class="modal-body">

        <div class="alert alert-info">

          Halaman ini digunakan untuk monitoring hasil stock opname
          dan analisa selisih stok inventory secara operasional.

        </div>

        <h6 class="fw-bold">
          Fungsi Halaman
        </h6>

        <ul>

          <li>Monitoring hasil stock opname setiap gudang.</li>
          <li>Mendeteksi item yang memiliki selisih stok.</li>
          <li>Kontrol akurasi data inventory.</li>
          <li>Audit operasional stok fisik vs sistem.</li>
          <li>Monitoring kebutuhan adjustment inventory.</li>

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
              <td>Jumlah Item Dicek</td>
              <td>Total item yang diperiksa saat stock opname.</td>
            </tr>

            <tr>
              <td>Item Selisih</td>
              <td>Total item yang memiliki selisih stok.</td>
            </tr>

            <tr>
              <td>Total Selisih Qty</td>
              <td>Total kuantitas selisih antara fisik dan sistem.</td>
            </tr>

            <tr>
              <td>Status</td>
              <td>Status hasil stock opname.</td>
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
              Sesuai
            </span>
            = stok fisik sesuai dengan sistem.
          </li>

          <li>
            <span class="badge bg-warning">
              Selisih Minor
            </span>
            = terdapat selisih kecil namun masih toleransi.
          </li>

          <li>
            <span class="badge bg-danger">
              Selisih Besar
            </span>
            = terdapat selisih besar dan perlu investigasi.
          </li>

          <li>
            <span class="badge bg-info">
              Adjustment Needed
            </span>
            = memerlukan adjustment stok sistem.
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
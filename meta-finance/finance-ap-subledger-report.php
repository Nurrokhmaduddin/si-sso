<?php $page = 'ap-subledger-report'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <!-- HEADER -->
  <section class="content-header">
    <div class="container-fluid">

      <div class="d-flex justify-content-between align-items-start">

        <div>
          <h3 class="mb-1">
            Riwayat Utang Usaha (Subledger)
            <button type="button"
                    class="btn btn-tool"
                    data-bs-toggle="modal"
                    data-bs-target="#modalBantuan">
              <i class="fas fa-question-circle"></i>
            </button>
          </h3>

          <p class="text-muted mb-0">
            Laporan histori utang usaha berdasarkan vendor dan akun utang.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- CONTENT -->
  <section class="content">
    <div class="container-fluid">

      <!-- FILTER -->
      <div class="card card-primary card-outline">

        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-filter me-1"></i> Filter Laporan
          </h3>
        </div>

        <div class="card-body">

          <form action="" method="GET">

            <div class="row">

              <!-- DATE FROM -->
              <div class="col-md-3 mb-3">
                <label class="form-label">Tanggal Awal</label>

                <input type="date"
                       class="form-control"
                       name="date_from">
              </div>

              <!-- DATE TO -->
              <div class="col-md-3 mb-3">
                <label class="form-label">Tanggal Akhir</label>

                <input type="date"
                       class="form-control"
                       name="date_to">
              </div>

              <!-- ACCOUNT -->
              <div class="col-md-3 mb-3">

                <label class="form-label">
                  Akun Utang Usaha
                </label>

                <select class="form-select" name="coa_id">

                  <option value="">
                    -- Pilih Akun --
                  </option>

                  <option>
                    2101 - Utang Usaha
                  </option>

                  <option>
                    2102 - Utang Vendor Lokal
                  </option>

                  <option>
                    2103 - Utang Vendor Project
                  </option>

                </select>

              </div>

              <!-- VENDOR -->
              <div class="col-md-3 mb-3">

                <label class="form-label">
                  Vendor / Supplier
                </label>

                <select class="form-select" name="vendor_id">

                  <option value="">
                    -- Pilih Vendor --
                  </option>

                  <option>
                    VND-001 - PT Supplier Makmur
                  </option>

                  <option>
                    VND-002 - CV Sumber Baja
                  </option>

                  <option>
                    VND-003 - PT Material Nusantara
                  </option>

                </select>

              </div>

            </div>

            <!-- BUTTON -->
            <div class="d-flex gap-2">

              <button type="submit"
                      class="btn btn-primary">

                <i class="fas fa-search me-1"></i>
                Preview

              </button>

              <button type="button"
                      class="btn btn-success">

                <i class="fas fa-file-excel me-1"></i>
                Export Excel

              </button>

              <button type="button"
                      class="btn btn-danger">

                <i class="fas fa-file-pdf me-1"></i>
                Export PDF

              </button>

              <button type="button"
                      class="btn btn-secondary"
                      onclick="window.print()">

                <i class="fas fa-print me-1"></i>
                Print

              </button>

            </div>

          </form>

        </div>
      </div>

      <!-- REPORT -->
      <div class="card card-success card-outline">

        <div class="card-header">

          <div class="d-flex justify-content-between align-items-center">

            <h3 class="card-title">
              <i class="fas fa-book me-1"></i>
              Buku Besar Utang Usaha
            </h3>

            <div>

              <span class="badge bg-primary">
                Vendor :
                PT Supplier Makmur
              </span>

              <span class="badge bg-success">
                Akun :
                2101 - Utang Usaha
              </span>

            </div>

          </div>

        </div>

        <div class="card-body">

          <!-- INFO -->
          <div class="row mb-3">

            <div class="col-md-4">

              <table class="table table-sm table-borderless">

                <tr>
                  <td width="140">
                    <strong>Vendor</strong>
                  </td>

                  <td>
                    : PT Supplier Makmur
                  </td>
                </tr>

                <tr>
                  <td>
                    <strong>Periode</strong>
                  </td>

                  <td>
                    : 01/09/2025 - 30/09/2025
                  </td>
                </tr>

                <tr>
                  <td>
                    <strong>Akun Utang</strong>
                  </td>

                  <td>
                    : 2101 - Utang Usaha
                  </td>
                </tr>

              </table>

            </div>

            <!-- SALDO -->
            <div class="col-md-4 offset-md-4">

              <table class="table table-bordered">

                <tr>

                  <th>
                    Saldo Awal
                  </th>

                  <td class="text-end">
                    Rp 7.500.000
                  </td>

                </tr>

              </table>

            </div>

          </div>

          <!-- TABLE -->
          <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle text-nowrap">

              <thead class="table-light">

                <tr class="text-center">

                  <th width="120">
                    Tanggal
                  </th>

                  <th width="180">
                    No Dokumen
                  </th>

                  <th>
                    Deskripsi
                  </th>

                  <th width="150">
                    Debit
                  </th>

                  <th width="150">
                    Kredit
                  </th>

                  <th width="170">
                    Saldo Berjalan
                  </th>

                </tr>

              </thead>

              <tbody>

                <!-- ROW -->
                <tr>

                  <td>
                    02/09/2025
                  </td>

                  <td>
                    BILL-2025-0001
                  </td>

                  <td>
                    Pembelian Material Baja
                  </td>

                  <td class="text-end">
                    0
                  </td>

                  <td class="text-end">
                    5.000.000
                  </td>

                  <td class="text-end fw-bold">
                    12.500.000
                  </td>

                </tr>

                <!-- ROW -->
                <tr>

                  <td>
                    05/09/2025
                  </td>

                  <td>
                    PAY-2025-0002
                  </td>

                  <td>
                    Pembayaran Vendor Tahap 1
                  </td>

                  <td class="text-end">
                    2.000.000
                  </td>

                  <td class="text-end">
                    0
                  </td>

                  <td class="text-end fw-bold">
                    10.500.000
                  </td>

                </tr>

                <!-- ROW -->
                <tr>

                  <td>
                    12/09/2025
                  </td>

                  <td>
                    BILL-2025-0005
                  </td>

                  <td>
                    Pembelian Bahan Produksi
                  </td>

                  <td class="text-end">
                    0
                  </td>

                  <td class="text-end">
                    3.500.000
                  </td>

                  <td class="text-end fw-bold">
                    14.000.000
                  </td>

                </tr>

                <!-- ROW -->
                <tr>

                  <td>
                    20/09/2025
                  </td>

                  <td>
                    PAY-2025-0007
                  </td>

                  <td>
                    Pelunasan Vendor
                  </td>

                  <td class="text-end">
                    4.000.000
                  </td>

                  <td class="text-end">
                    0
                  </td>

                  <td class="text-end fw-bold">
                    10.000.000
                  </td>

                </tr>

              </tbody>

              <!-- FOOTER -->
              <tfoot class="table-light">

                <tr>

                  <th colspan="3" class="text-end">
                    TOTAL
                  </th>

                  <th class="text-end">
                    6.000.000
                  </th>

                  <th class="text-end">
                    8.500.000
                  </th>

                  <th class="text-end">
                    10.000.000
                  </th>

                </tr>

              </tfoot>

            </table>

          </div>

        </div>
      </div>

    </div>
  </section>

</div>

<?php include('4footer.php'); ?>

<!-- MODAL BANTUAN -->
<div class="modal fade"
     id="modalBantuan"
     tabindex="-1"
     aria-hidden="true">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-primary text-white">

        <h5 class="modal-title">
          Bantuan Laporan Utang Usaha
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
        </button>

      </div>

      <div class="modal-body">

        <p>
          Halaman ini digunakan untuk melihat histori transaksi
          utang usaha berdasarkan vendor dan akun utang.
        </p>

        <ul>

          <li>
            Filter berdasarkan rentang tanggal transaksi.
          </li>

          <li>
            Filter berdasarkan akun utang usaha.
          </li>

          <li>
            Filter berdasarkan vendor/supplier tertentu.
          </li>

          <li>
            Saldo berjalan dihitung otomatis setiap transaksi.
          </li>

          <li>
            Dapat dilakukan export Excel, PDF, dan print laporan.
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
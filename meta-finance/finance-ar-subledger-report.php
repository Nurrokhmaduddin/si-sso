<?php $page = 'ar-subledger-report'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">

      <div class="d-flex justify-content-between align-items-start">

        <div>
          <h3 class="mb-1">
            Riwayat Piutang Usaha (Subledger)
            <button type="button"
                    class="btn btn-tool"
                    data-bs-toggle="modal"
                    data-bs-target="#modalBantuan">
              <i class="fas fa-question-circle"></i>
            </button>
          </h3>

          <p class="text-muted mb-0">
            Laporan histori piutang usaha berdasarkan customer dan akun piutang.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Main content -->
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

              <!-- Tanggal Awal -->
              <div class="col-md-3 mb-3">
                <label class="form-label">Tanggal Awal</label>
                <input type="date"
                       class="form-control"
                       name="date_from">
              </div>

              <!-- Tanggal Akhir -->
              <div class="col-md-3 mb-3">
                <label class="form-label">Tanggal Akhir</label>
                <input type="date"
                       class="form-control"
                       name="date_to">
              </div>

              <!-- Akun Piutang -->
              <div class="col-md-3 mb-3">
                <label class="form-label">Akun Piutang Usaha</label>

                <select class="form-select" name="coa_id">
                  <option value="">-- Pilih Akun --</option>
                  <option>1101 - Piutang Usaha</option>
                  <option>1102 - Piutang Customer Retail</option>
                  <option>1103 - Piutang Customer Project</option>
                </select>
              </div>

              <!-- Customer -->
              <div class="col-md-3 mb-3">
                <label class="form-label">Customer</label>

                <select class="form-select" name="customer_id">
                  <option value="">-- Pilih Customer --</option>
                  <option>CUST-001 - PT Maju Bersama</option>
                  <option>CUST-002 - CV Sumber Rejeki</option>
                  <option>CUST-003 - Toko Makmur Jaya</option>
                </select>
              </div>

            </div>

            <!-- BUTTON -->
            <div class="d-flex gap-2">

              <button type="submit" class="btn btn-primary">
                <i class="fas fa-search me-1"></i> Preview
              </button>

              <button type="button" class="btn btn-success">
                <i class="fas fa-file-excel me-1"></i> Export Excel
              </button>

              <button type="button" class="btn btn-danger">
                <i class="fas fa-file-pdf me-1"></i> Export PDF
              </button>

              <button type="button"
                      onclick="window.print()"
                      class="btn btn-secondary">
                <i class="fas fa-print me-1"></i> Print
              </button>

            </div>

          </form>

        </div>
      </div>

      <!-- LAPORAN -->
      <div class="card card-success card-outline">

        <div class="card-header">

          <div class="d-flex justify-content-between align-items-center">

            <h3 class="card-title">
              <i class="fas fa-book me-1"></i>
              Buku Besar Piutang Usaha
            </h3>

            <div>
              <span class="badge bg-primary">
                Customer :
                PT Maju Bersama
              </span>

              <span class="badge bg-success">
                Akun :
                1101 - Piutang Usaha
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
                  <td width="140"><strong>Customer</strong></td>
                  <td>: PT Maju Bersama</td>
                </tr>

                <tr>
                  <td><strong>Periode</strong></td>
                  <td>: 01/09/2025 - 30/09/2025</td>
                </tr>

                <tr>
                  <td><strong>Akun Piutang</strong></td>
                  <td>: 1101 - Piutang Usaha</td>
                </tr>

              </table>
            </div>

            <div class="col-md-4 offset-md-4">

              <table class="table table-bordered">

                <tr>
                  <th>Saldo Awal</th>
                  <td class="text-end">
                    Rp 5.000.000
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

                  <th width="120">Tanggal</th>
                  <th width="180">No Dokumen</th>
                  <th>Deskripsi</th>
                  <th width="150">Debit</th>
                  <th width="150">Kredit</th>
                  <th width="170">Saldo Berjalan</th>

                </tr>

              </thead>

              <tbody>

                <!-- ROW -->
                <tr>

                  <td>01/09/2025</td>
                  <td>INV-2025-0001</td>
                  <td>Penjualan Barang Customer</td>

                  <td class="text-end">
                    3.000.000
                  </td>

                  <td class="text-end">
                    0
                  </td>

                  <td class="text-end fw-bold">
                    8.000.000
                  </td>

                </tr>

                <!-- ROW -->
                <tr>

                  <td>05/09/2025</td>
                  <td>RCV-2025-0003</td>
                  <td>Pembayaran Customer</td>

                  <td class="text-end">
                    0
                  </td>

                  <td class="text-end">
                    2.000.000
                  </td>

                  <td class="text-end fw-bold">
                    6.000.000
                  </td>

                </tr>

                <!-- ROW -->
                <tr>

                  <td>12/09/2025</td>
                  <td>INV-2025-0008</td>
                  <td>Penjualan Project September</td>

                  <td class="text-end">
                    4.500.000
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

                  <td>18/09/2025</td>
                  <td>RCV-2025-0009</td>
                  <td>Pembayaran Termin Customer</td>

                  <td class="text-end">
                    0
                  </td>

                  <td class="text-end">
                    1.500.000
                  </td>

                  <td class="text-end fw-bold">
                    9.000.000
                  </td>

                </tr>

              </tbody>

              <tfoot class="table-light">

                <tr>

                  <th colspan="3" class="text-end">
                    TOTAL
                  </th>

                  <th class="text-end">
                    7.500.000
                  </th>

                  <th class="text-end">
                    3.500.000
                  </th>

                  <th class="text-end">
                    9.000.000
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
          Bantuan Laporan Piutang Usaha
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal"></button>

      </div>

      <div class="modal-body">

        <p>
          Halaman ini digunakan untuk melihat histori transaksi piutang usaha
          berdasarkan customer dan akun piutang.
        </p>

        <ul>
          <li>Filter berdasarkan rentang tanggal.</li>
          <li>Filter berdasarkan akun piutang usaha.</li>
          <li>Filter berdasarkan customer tertentu.</li>
          <li>Saldo berjalan dihitung otomatis setiap transaksi.</li>
          <li>Dapat dilakukan export Excel, PDF, dan print.</li>
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
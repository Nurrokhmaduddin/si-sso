<!-- ========================================================= -->
<!-- PAGE : sales-history.php -->
<!-- STYLE : Sales Transaction History -->
<!-- FOKUS :
     - Detail transaksi penjualan
     - Riwayat pembayaran
     - Tracking cashier
     - audit trail, riwayat per invoice, histori status.
-->
<!-- ========================================================= -->

<?php $page = 'sales-history'; ?>
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
            Sales History
            <button type="button"
                    class="btn btn-tool"
                    data-bs-toggle="modal"
                    data-bs-target="#modalBantuan"
                    title="Bantuan">
              <i class="fas fa-question-circle"></i>
            </button>
          </h3>

          <p class="text-muted mb-0">
            Riwayat lengkap transaksi penjualan dan pembayaran customer.
          </p>
        </div>

        <div>
          <button class="btn btn-success btn-sm">
            <i class="fas fa-file-excel me-1"></i>
            Export Excel
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
      <!-- FILTER INFORMATION -->
      <!-- ================================================= -->

      <div class="card">

        <div class="card-body">

          <div class="row">

            <div class="col-md-3">
              <b>Periode:</b> Mei 2026
            </div>

            <div class="col-md-3">
              <b>Shift:</b> Semua Shift
            </div>

            <div class="col-md-3">
              <b>Payment:</b> Semua Metode
            </div>

            <div class="col-md-3">
              <b>Status:</b> Semua
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
      <!-- KPI HISTORY -->
      <!-- ================================================= -->

      <!-- <div class="row">

        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-success">

            <div class="inner">
              <h3>1.284</h3>
              <p>Total Transaction</p>
            </div>

            <div class="icon">
              <i class="fas fa-shopping-cart"></i>
            </div>

          </div>

        </div>

        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-primary">

            <div class="inner">
              <h3>Rp 128 Jt</h3>
              <p>Total Revenue</p>
            </div>

            <div class="icon">
              <i class="fas fa-wallet"></i>
            </div>

          </div>

        </div>

        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-warning">

            <div class="inner">
              <h3>48</h3>
              <p>Pending Payment</p>
            </div>

            <div class="icon">
              <i class="fas fa-clock"></i>
            </div>

          </div>

        </div>

        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-danger">

            <div class="inner">
              <h3>12</h3>
              <p>Void Transaction</p>
            </div>

            <div class="icon">
              <i class="fas fa-ban"></i>
            </div>

          </div>

        </div>

      </div> -->

      <!-- ================================================= -->
      <!-- SALES HISTORY TABLE -->
      <!-- ================================================= -->

      <div class="card card-outline card-primary">

        <div class="card-header">

          <h3 class="card-title">
            Transaction History
          </h3>

        </div>

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered table-striped table-sm datatables1">

              <thead class="table-dark text-center">

                <tr>
                  <th>No Invoice</th>
                  <th>Tanggal</th>
                  <th>Meja</th>
                  <th>Cashier</th>
                  <th>Customer</th>
                  <th>Total</th>
                  <th>Payment</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>

              </thead>

              <tbody>

                <tr>

                  <td>INV-20260512-001</td>
                  <td>12 Mei 2026 12:30</td>
                  <td>A-01</td>
                  <td>Rina</td>
                  <td>Walk In</td>
                  <td>Rp 245.000</td>

                  <td>
                    <span class="badge bg-success">
                      QRIS
                    </span>
                  </td>

                  <td>
                    <span class="badge bg-success">
                      Paid
                    </span>
                  </td>

                  <td class="text-center">

                    <button class="btn btn-outline-primary btn-sm">
                      <i class="fas fa-eye"></i>
                    </button>

                    <button class="btn btn-outline-success btn-sm">
                      <i class="fas fa-print"></i>
                    </button>

                  </td>

                </tr>

                <tr>

                  <td>INV-20260512-002</td>
                  <td>12 Mei 2026 12:45</td>
                  <td>B-03</td>
                  <td>Andi</td>
                  <td>Member</td>
                  <td>Rp 520.000</td>

                  <td>
                    <span class="badge bg-primary">
                      Debit
                    </span>
                  </td>

                  <td>
                    <span class="badge bg-warning">
                      Pending
                    </span>
                  </td>

                  <td class="text-center">

                    <button class="btn btn-outline-primary btn-sm">
                      <i class="fas fa-eye"></i>
                    </button>

                    <button class="btn btn-outline-danger btn-sm">
                      <i class="fas fa-times"></i>
                    </button>

                  </td>

                </tr>

                <tr>

                  <td>INV-20260512-003</td>
                  <td>12 Mei 2026 13:00</td>
                  <td>C-02</td>
                  <td>Salsa</td>
                  <td>Walk In</td>
                  <td>Rp 120.000</td>

                  <td>
                    <span class="badge bg-dark">
                      Cash
                    </span>
                  </td>

                  <td>
                    <span class="badge bg-danger">
                      Void
                    </span>
                  </td>

                  <td class="text-center">

                    <button class="btn btn-outline-primary btn-sm">
                      <i class="fas fa-eye"></i>
                    </button>

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
     aria-labelledby="modalFilterLabel"
     aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-info text-white">

        <h5 class="modal-title" id="modalFilterLabel">
          Filter Sales History
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
        </button>

      </div>

      <form action="" method="GET">

        <div class="modal-body">

          <div class="alert alert-warning">

            Halaman ini menampilkan histori transaksi penjualan berdasarkan
            filter periode, shift, metode pembayaran, dan status transaksi.

          </div>

          <div class="mb-3">

            <label class="form-label">
              Periode
            </label>

            <input type="month"
                   class="form-control"
                   name="periode">

          </div>

          <div class="mb-3">

            <label class="form-label">
              Shift
            </label>

            <select class="form-select" name="shift">

              <option value="">-- Semua Shift --</option>
              <option>Pagi</option>
              <option>Siang</option>
              <option>Malam</option>

            </select>

          </div>

          <div class="mb-3">

            <label class="form-label">
              Payment Method
            </label>

            <select class="form-select" name="payment_method">

              <option value="">-- Semua Metode --</option>
              <option>Cash</option>
              <option>QRIS</option>
              <option>Debit</option>
              <option>Transfer</option>

            </select>

          </div>

          <div class="mb-3">

            <label class="form-label">
              Status Transaksi
            </label>

            <select class="form-select" name="status">

              <option value="">-- Semua Status --</option>
              <option>Paid</option>
              <option>Pending</option>
              <option>Void</option>
              <option>Refund</option>

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
     aria-labelledby="modalBantuanLabel"
     aria-hidden="true">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-primary text-white">

        <h5 class="modal-title" id="modalBantuanLabel">
          Bantuan Sales History
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
        </button>

      </div>

      <div class="modal-body">

        <div class="alert alert-info">

          Halaman ini digunakan untuk melihat seluruh riwayat transaksi
          penjualan restoran/kafe secara detail dan realtime.

        </div>

        <h5>Cara Menggunakan Halaman</h5>

        <ul>

          <li>
            Gunakan tombol <b>Filter</b> untuk menyaring data transaksi.
          </li>

          <li>
            Gunakan tombol <b>Export</b> untuk mengunduh laporan transaksi.
          </li>

          <li>
            Klik tombol <b>Detail</b> untuk melihat rincian item transaksi.
          </li>

          <li>
            Klik tombol <b>Print</b> untuk mencetak invoice transaksi.
          </li>

        </ul>

        <hr>

        <h5>Penjelasan Filter</h5>

        <table class="table table-bordered">

          <thead class="table-light">

            <tr>
              <th>Filter</th>
              <th>Keterangan</th>
            </tr>

          </thead>

          <tbody>

            <tr>
              <td>Periode</td>
              <td>
                Menampilkan transaksi berdasarkan bulan tertentu.
              </td>
            </tr>

            <tr>
              <td>Shift</td>
              <td>
                Memfilter transaksi berdasarkan jam kerja operasional.
              </td>
            </tr>

            <tr>
              <td>Payment Method</td>
              <td>
                Memfilter transaksi berdasarkan metode pembayaran.
              </td>
            </tr>

            <tr>
              <td>Status</td>
              <td>
                Menampilkan status kondisi transaksi.
              </td>
            </tr>

          </tbody>

        </table>

        <hr>

        <h5>Penjelasan Status Transaksi</h5>

        <table class="table table-bordered">

          <thead class="table-light">

            <tr>
              <th>Status</th>
              <th>Arti</th>
            </tr>

          </thead>

          <tbody>

            <tr>
              <td>
                <span class="badge bg-success">Paid</span>
              </td>

              <td>
                Transaksi sudah dibayar dan selesai.
              </td>
            </tr>

            <tr>
              <td>
                <span class="badge bg-warning">Pending</span>
              </td>

              <td>
                Pembayaran belum selesai atau masih menunggu proses.
              </td>
            </tr>

            <tr>
              <td>
                <span class="badge bg-danger">Void</span>
              </td>

              <td>
                Transaksi dibatalkan oleh kasir atau supervisor.
              </td>
            </tr>

            <tr>
              <td>
                <span class="badge bg-secondary">Refund</span>
              </td>

              <td>
                Dana transaksi dikembalikan ke customer.
              </td>
            </tr>

          </tbody>

        </table>

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
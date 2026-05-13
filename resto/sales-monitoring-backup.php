<!-- ========================================================= -->
<!-- PAGE : sales-monitoring.php -->
<!-- STYLE : Realtime Sales Monitoring Dashboard -->
<!-- FOKUS :
     - Realtime transaksi
     - Monitoring operasional restoran
     - Waiter & cashier activity
     - Kitchen issue monitoring
-->
<!-- ========================================================= -->

<?php $page = 'sales-monitoring'; ?>
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
            Sales Monitoring Realtime

            <button type="button"
                    class="btn btn-tool"
                    data-bs-toggle="modal"
                    data-bs-target="#modalBantuan"
                    title="Bantuan">

              <i class="fas fa-question-circle"></i>

            </button>
          </h3>

          <p class="text-muted mb-0">
            Monitoring realtime transaksi, operasional service, cashier, dan kitchen.
          </p>
        </div>

        <div>
          <button class="btn btn-success btn-sm">
            <i class="fas fa-sync-alt me-1"></i>
            Refresh Realtime
          </button>

          <button class="btn btn-primary btn-sm">
            <i class="fas fa-download me-1"></i>
            Export
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

     <!--  <div class="card">

        <div class="card-body">

          <div class="row">

            <div class="col-md-3">
              <b>Branch:</b> Medan Center
            </div>

            <div class="col-md-3">
              <b>Shift:</b> Semua Shift
            </div>

            <div class="col-md-3">
              <b>Status Operasional:</b> Semua
            </div>

            <div class="col-md-3">
              <b>Tanggal:</b> 08 Mei 2026
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

            <button class="btn btn-outline-danger btn-sm">

              <i class="fas fa-ban me-1"></i>
              Reset

            </button>

            <button class="btn btn-outline-warning btn-sm"
                    data-bs-toggle="modal"
                    data-bs-target="#modalGagal">

              <i class="fas fa-exclamation-triangle me-1"></i>
              Error Handler

            </button>

          </div>

        </div>

      </div> -->

      <!-- ================================================= -->
      <!-- KPI -->
      <!-- ================================================= -->

      <div class="row">

        <!-- TRANSAKSI HARI INI -->
        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-success">

            <div class="inner">
              <h3>428</h3>
              <p>Transaksi Hari Ini</p>
            </div>

            <div class="icon">
              <i class="fas fa-cash-register"></i>
            </div>

          </div>

        </div>

        <!-- MEJA AKTIF -->
        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-info">

            <div class="inner">
              <h3>32</h3>
              <p>Meja Aktif</p>
            </div>

            <div class="icon">
              <i class="fas fa-chair"></i>
            </div>

          </div>

        </div>

        <!-- ORDER PENDING -->
        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-warning">

            <div class="inner">
              <h3>18</h3>
              <p>Order Pending</p>
            </div>

            <div class="icon">
              <i class="fas fa-clock"></i>
            </div>

          </div>

        </div>

        <!-- UNPAID BILL -->
        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-danger">

            <div class="inner">
              <h3>11</h3>
              <p>Unpaid Bill</p>
            </div>

            <div class="icon">
              <i class="fas fa-file-invoice-dollar"></i>
            </div>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- SECOND KPI -->
      <!-- ================================================= -->

      <div class="row">

        <!-- WAITING PAYMENT -->
        <div class="col-lg-3 col-md-6">

          <div class="info-box">

            <span class="info-box-icon bg-primary">
              <i class="fas fa-money-check-alt"></i>
            </span>

            <div class="info-box-content">

              <span class="info-box-text">
                Waiting Payment
              </span>

              <span class="info-box-number">
                9 Order
              </span>

            </div>

          </div>

        </div>

        <!-- KITCHEN DELAY -->
        <div class="col-lg-3 col-md-6">

          <div class="info-box">

            <span class="info-box-icon bg-danger">
              <i class="fas fa-fire"></i>
            </span>

            <div class="info-box-content">

              <span class="info-box-text">
                Kitchen Delay
              </span>

              <span class="info-box-number">
                6 Order
              </span>

            </div>

          </div>

        </div>

        <!-- PEAK HOUR -->
        <div class="col-lg-3 col-md-6">

          <div class="info-box">

            <span class="info-box-icon bg-warning">
              <i class="fas fa-chart-line"></i>
            </span>

            <div class="info-box-content">

              <span class="info-box-text">
                Peak Hour
              </span>

              <span class="info-box-number">
                19:00 - 20:30
              </span>

            </div>

          </div>

        </div>

        <!-- VOID TRANSACTION -->
        <div class="col-lg-3 col-md-6">

          <div class="info-box">

            <span class="info-box-icon bg-dark">
              <i class="fas fa-times-circle"></i>
            </span>

            <div class="info-box-content">

              <span class="info-box-text">
                Void Transaction
              </span>

              <span class="info-box-number">
                4 Void
              </span>

            </div>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- MONITORING -->
      <!-- ================================================= -->

      <div class="row">

        <!-- WAITER PERFORMANCE -->
        <div class="col-md-6">

          <div class="card card-primary">

            <div class="card-header">
              <h3 class="card-title">
                Waiter Performance
              </h3>
            </div>

            <div class="card-body">

              <table class="table table-bordered table-striped">

                <thead class="table-dark text-center">

                  <tr>
                    <th>Waiter</th>
                    <th>Table Handle</th>
                    <th>Order</th>
                    <th>Status</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td>Rizki</td>
                    <td>8</td>
                    <td>42</td>
                    <td>
                      <span class="badge bg-success">
                        Excellent
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>Fahmi</td>
                    <td>5</td>
                    <td>31</td>
                    <td>
                      <span class="badge bg-primary">
                        Good
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>Indah</td>
                    <td>3</td>
                    <td>15</td>
                    <td>
                      <span class="badge bg-warning">
                        Busy
                      </span>
                    </td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

        <!-- CASHIER ACTIVITY -->
        <div class="col-md-6">

          <div class="card card-success">

            <div class="card-header">
              <h3 class="card-title">
                Cashier Activity
              </h3>
            </div>

            <div class="card-body">

              <table class="table table-bordered table-striped">

                <thead class="table-dark text-center">

                  <tr>
                    <th>Cashier</th>
                    <th>Transaction</th>
                    <th>Cash In</th>
                    <th>Status</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td>Nadia</td>
                    <td>125</td>
                    <td>Rp 18.200.000</td>
                    <td>
                      <span class="badge bg-success">
                        Active
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>Putra</td>
                    <td>102</td>
                    <td>Rp 14.800.000</td>
                    <td>
                      <span class="badge bg-primary">
                        Stable
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>Rina</td>
                    <td>18</td>
                    <td>Rp 2.100.000</td>
                    <td>
                      <span class="badge bg-warning">
                        Shift Baru
                      </span>
                    </td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- DISCOUNT MONITORING -->
      <!-- ================================================= -->

      <div class="row">

        <div class="col-md-12">

          <div class="card card-warning">

            <div class="card-header">
              <h3 class="card-title">
                Discount Usage Realtime
              </h3>
            </div>

            <div class="card-body">

              <table class="table table-bordered table-striped">

                <thead class="table-dark text-center">

                  <tr>
                    <th>Discount Type</th>
                    <th>Total Usage</th>
                    <th>Total Amount</th>
                    <th>Approval</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td>Member Discount</td>
                    <td>42</td>
                    <td>Rp 2.400.000</td>
                    <td>Auto</td>
                  </tr>

                  <tr>
                    <td>Manual Discount</td>
                    <td>7</td>
                    <td>Rp 850.000</td>
                    <td>Manager</td>
                  </tr>

                  <tr>
                    <td>Promo Bundling</td>
                    <td>18</td>
                    <td>Rp 1.200.000</td>
                    <td>System</td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- ALERT -->
      <!-- ================================================= -->

      <div class="row">

        <div class="col-md-12">

          <div class="alert alert-danger">

            <h5>
              <i class="icon fas fa-exclamation-triangle"></i>
              Operational Warning
            </h5>

            Terdapat 6 order melewati SLA kitchen lebih dari 20 menit.
            Supervisor kitchen disarankan melakukan pengecekan antrian produksi.

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
          Filter Monitoring
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
        </button>

      </div>

      <form action="" method="GET">

        <div class="modal-body">

          <div class="alert alert-warning mb-3"
               role="alert"
               style="font-size:0.9rem;">

            <b>Informasi:</b>
            Dashboard akan otomatis menampilkan data realtime hari ini saat pertama dibuka.

          </div>

          <div class="mb-3">

            <label class="form-label">
              Branch
            </label>

            <select class="form-select" name="branch">

              <option value="">
                -- Semua Branch --
              </option>

              <option>
                Medan Center
              </option>

              <option>
                Medan Marelan
              </option>

              <option>
                Binjai
              </option>

            </select>

          </div>

          <div class="mb-3">

            <label class="form-label">
              Shift
            </label>

            <select class="form-select" name="shift">

              <option value="">
                -- Semua Shift --
              </option>

              <option>
                Morning
              </option>

              <option>
                Afternoon
              </option>

              <option>
                Night
              </option>

            </select>

          </div>

          <div class="mb-3">

            <label class="form-label">
              Status Operasional
            </label>

            <select class="form-select" name="status_operasional">

              <option value="">
                -- Semua Status --
              </option>

              <option>
                Normal
              </option>

              <option>
                Busy
              </option>

              <option>
                Overload
              </option>

              <option>
                Maintenance
              </option>

            </select>

          </div>

          <div class="mb-3">

            <label class="form-label">
              Tanggal Monitoring
            </label>

            <input type="date"
                   class="form-control"
                   name="tanggal">

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
          Bantuan Sales Monitoring
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
        </button>

      </div>

      <div class="modal-body">

        <div class="alert alert-info">

          Halaman ini digunakan untuk monitoring realtime aktivitas transaksi,
          waiter, cashier, kitchen, dan kondisi operasional restoran secara langsung.

        </div>

        <h5>Cara Menggunakan Halaman</h5>

        <ul>

          <li>
            Gunakan tombol <b>Filter</b> untuk menampilkan data berdasarkan branch, shift, tanggal, dan status operasional.
          </li>

          <li>
            Dashboard akan otomatis menampilkan data realtime hari berjalan.
          </li>

          <li>
            Gunakan tombol <b>Refresh Realtime</b> untuk memperbarui data terbaru.
          </li>

          <li>
            Gunakan tombol <b>Export</b> untuk mengunduh data monitoring.
          </li>

        </ul>

        <hr>

        <h5>Penjelasan Monitoring</h5>

        <table class="table table-bordered table-sm">

          <thead class="table-dark">

            <tr>
              <th>Monitoring</th>
              <th>Keterangan</th>
            </tr>

          </thead>

          <tbody>

            <tr>
              <td>Transaksi Hari Ini</td>
              <td>Total transaksi yang berhasil diproses hari ini.</td>
            </tr>

            <tr>
              <td>Meja Aktif</td>
              <td>Jumlah meja yang sedang digunakan customer.</td>
            </tr>

            <tr>
              <td>Order Pending</td>
              <td>Order yang belum selesai diproses kitchen atau waiter.</td>
            </tr>

            <tr>
              <td>Unpaid Bill</td>
              <td>Tagihan yang belum dibayarkan customer.</td>
            </tr>

            <tr>
              <td>Waiting Payment</td>
              <td>Order yang sedang menunggu pembayaran di cashier.</td>
            </tr>

            <tr>
              <td>Kitchen Delay</td>
              <td>Order kitchen yang melewati standar SLA waktu masak.</td>
            </tr>

            <tr>
              <td>Peak Hour</td>
              <td>Jam operasional paling padat berdasarkan transaksi.</td>
            </tr>

            <tr>
              <td>Void Transaction</td>
              <td>Jumlah transaksi yang dibatalkan atau dihapus.</td>
            </tr>

          </tbody>

        </table>

        <hr>

        <h5>Penjelasan Status Operasional</h5>

        <table class="table table-bordered table-striped table-sm">

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
                  Normal
                </span>
              </td>

              <td>
                Operasional berjalan stabil dan normal.
              </td>
            </tr>

            <tr>
              <td>
                <span class="badge bg-warning text-dark">
                  Busy
                </span>
              </td>

              <td>
                Aktivitas transaksi dan kitchen sedang tinggi.
              </td>
            </tr>

            <tr>
              <td>
                <span class="badge bg-danger">
                  Overload
                </span>
              </td>

              <td>
                Operasional terlalu padat dan mulai terjadi delay.
              </td>
            </tr>

            <tr>
              <td>
                <span class="badge bg-secondary">
                  Maintenance
                </span>
              </td>

              <td>
                Sistem atau operasional sedang dalam pemeliharaan.
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

<!-- ===================================================== -->
<!-- MODAL ERROR -->
<!-- ===================================================== -->

<div class="modal fade"
     id="modalGagal"
     data-bs-backdrop="static"
     data-bs-keyboard="false"
     tabindex="-1"
     aria-labelledby="modalGagalLabel"
     aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content border-danger border-2 shadow">

      <div class="modal-header bg-danger text-white">

        <h5 class="modal-title" id="modalGagalLabel">

          <i class="fas fa-times-circle me-2"></i>
          Oops! Terjadi Kesalahan

        </h5>

      </div>

      <div class="modal-body">

        <p>
          <strong>❌ Masalah:</strong><br>
          Data realtime gagal dimuat.
        </p>

        <p>
          <strong>⚠️ Penyebab:</strong><br>
          Koneksi server monitoring terputus atau timeout.
        </p>

        <p>
          <strong>💡 Solusi:</strong><br>
          Refresh dashboard beberapa saat lagi atau hubungi administrator sistem.
        </p>

        <div class="alert alert-warning mt-3">

          🔹 Tip:
          Pastikan koneksi internet stabil untuk monitoring realtime 🚀

        </div>

      </div>

      <div class="modal-footer">

        <button type="button"
                class="btn btn-dark"
                data-bs-dismiss="modal">

          <i class="fas fa-check me-1"></i>
          Tutup

        </button>

      </div>

    </div>

  </div>

</div>

<?php include('5script.php'); ?>
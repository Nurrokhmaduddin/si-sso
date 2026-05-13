<!-- ========================================================= -->
<!-- PAGE : kitchen-monitor-kds.php -->
<!-- STYLE : Kitchen Display System (KDS) -->
<!-- FOKUS :
     - Kitchen realtime monitoring
     - Cooking queue
     - SLA monitoring
     - Production operational control
-->
<!-- ========================================================= -->

<?php $page = 'kitchen-monitor'; ?>
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
            Kitchen Display System (KDS)

            <button type="button"
                    class="btn btn-tool"
                    data-bs-toggle="modal"
                    data-bs-target="#modalBantuan">

              <i class="fas fa-question-circle"></i>

            </button>

          </h3>

          <p class="text-muted mb-0">
            Monitoring realtime operasional kitchen dan proses produksi makanan.
          </p>
        </div>

        <div>

          <button class="btn btn-primary">
            <i class="fas fa-sync-alt"></i>
            Refresh Realtime
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

            <div class="col-md-4">
              <b>Shift:</b> Shift Pagi
            </div>

            <div class="col-md-4">
              <b>Status Order:</b> Semua
            </div>

            <div class="col-md-4">
              <b>Tanggal:</b> 12 Mei 2026
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

              <i class="fas fa-ban me-1"></i>
              Reset

            </button>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- KPI -->
      <!-- ================================================= -->

      <div class="row">

        <!-- KDS -->
        <div class="col-lg-4 col-md-6">

          <div class="small-box bg-primary">

            <div class="inner">

              <h3>128</h3>

              <p>Kitchen Display System (KDS)</p>

            </div>

            <div class="icon">
              <i class="fas fa-utensils"></i>
            </div>

          </div>

        </div>

        <!-- COOKING QUEUE -->
        <div class="col-lg-4 col-md-6">

          <div class="small-box bg-warning">

            <div class="inner">

              <h3>24</h3>

              <p>Cooking Queue</p>

            </div>

            <div class="icon">
              <i class="fas fa-stream"></i>
            </div>

          </div>

        </div>

        <!-- ORDER READY -->
        <div class="col-lg-4 col-md-6">

          <div class="small-box bg-success">

            <div class="inner">

              <h3>89</h3>

              <p>Order Ready</p>

            </div>

            <div class="icon">
              <i class="fas fa-check-circle"></i>
            </div>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- SECOND KPI -->
      <!-- ================================================= -->

      <div class="row">

        <!-- PENDING -->
        <div class="col-lg-4 col-md-6">

          <div class="info-box">

            <span class="info-box-icon bg-warning">
              <i class="fas fa-hourglass-half"></i>
            </span>

            <div class="info-box-content">

              <span class="info-box-text">
                Pending Production
              </span>

              <span class="info-box-number">
                11 Order
              </span>

            </div>

          </div>

        </div>

        <!-- DELAYED -->
        <div class="col-lg-4 col-md-6">

          <div class="info-box">

            <span class="info-box-icon bg-danger">
              <i class="fas fa-exclamation-triangle"></i>
            </span>

            <div class="info-box-content">

              <span class="info-box-text">
                Delayed Order
              </span>

              <span class="info-box-number">
                7 Order
              </span>

            </div>

          </div>

        </div>

        <!-- SLA -->
        <div class="col-lg-4 col-md-6">

          <div class="info-box">

            <span class="info-box-icon bg-info">
              <i class="fas fa-stopwatch"></i>
            </span>

            <div class="info-box-content">

              <span class="info-box-text">
                SLA Cooking Time
              </span>

              <span class="info-box-number">
                92%
              </span>

            </div>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- KITCHEN DISPLAY SYSTEM -->
      <!-- ================================================= -->

      <div class="card card-primary">

        <div class="card-header">

          <h3 class="card-title">
            Kitchen Display System (Realtime)
          </h3>

        </div>

        <div class="card-body p-0">

          <div class="table-responsive">

            <table class="table table-bordered table-striped table-sm mb-0">

              <thead class="table-dark text-center">

                <tr>

                  <th>No Order</th>
                  <th>Table</th>
                  <th>Menu</th>
                  <th>Qty</th>
                  <th>Status</th>
                  <th>Queue</th>
                  <th>Cooking Time</th>
                  <th>SLA</th>

                </tr>

              </thead>

              <tbody>

                <tr>

                  <td>ORD-2026-001</td>
                  <td>A-01</td>
                  <td>Nasi Goreng Seafood</td>
                  <td>2</td>

                  <td>
                    <span class="badge bg-warning">
                      Cooking
                    </span>
                  </td>

                  <td>1</td>
                  <td>12 Menit</td>

                  <td>
                    <span class="badge bg-success">
                      On Target
                    </span>
                  </td>

                </tr>

                <tr>

                  <td>ORD-2026-002</td>
                  <td>B-03</td>
                  <td>Mie Aceh</td>
                  <td>1</td>

                  <td>
                    <span class="badge bg-danger">
                      Delayed
                    </span>
                  </td>

                  <td>2</td>
                  <td>28 Menit</td>

                  <td>
                    <span class="badge bg-danger">
                      Over SLA
                    </span>
                  </td>

                </tr>

                <tr>

                  <td>ORD-2026-003</td>
                  <td>C-02</td>
                  <td>Ayam Bakar</td>
                  <td>3</td>

                  <td>
                    <span class="badge bg-success">
                      Ready
                    </span>
                  </td>

                  <td>-</td>
                  <td>10 Menit</td>

                  <td>
                    <span class="badge bg-success">
                      Completed
                    </span>
                  </td>

                </tr>

              </tbody>

            </table>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- COOKING QUEUE -->
      <!-- ================================================= -->

      <div class="row">

        <div class="col-md-6">

          <div class="card card-warning">

            <div class="card-header">

              <h3 class="card-title">
                Cooking Queue
              </h3>

            </div>

            <div class="card-body p-0">

              <table class="table table-bordered mb-0">

                <thead class="table-dark text-center">

                  <tr>
                    <th>Priority</th>
                    <th>Order</th>
                    <th>Menu</th>
                    <th>Status</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td>1</td>
                    <td>ORD-001</td>
                    <td>Nasi Goreng</td>

                    <td>
                      <span class="badge bg-warning">
                        Cooking
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>2</td>
                    <td>ORD-002</td>
                    <td>Mie Aceh</td>

                    <td>
                      <span class="badge bg-info">
                        Waiting
                      </span>
                    </td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

        <!-- ORDER READY -->
        <div class="col-md-6">

          <div class="card card-success">

            <div class="card-header">

              <h3 class="card-title">
                Order Ready
              </h3>

            </div>

            <div class="card-body p-0">

              <table class="table table-bordered mb-0">

                <thead class="table-dark text-center">

                  <tr>
                    <th>Order</th>
                    <th>Table</th>
                    <th>Menu</th>
                    <th>Ready Time</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td>ORD-090</td>
                    <td>A-02</td>
                    <td>Ayam Penyet</td>
                    <td>14:10</td>
                  </tr>

                  <tr>
                    <td>ORD-091</td>
                    <td>B-01</td>
                    <td>Sate Ayam</td>
                    <td>14:12</td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- SLA MONITORING -->
      <!-- ================================================= -->

      <div class="card card-danger">

        <div class="card-header">

          <h3 class="card-title">
            SLA Cooking Time Monitoring
          </h3>

        </div>

        <div class="card-body p-0">

          <table class="table table-bordered table-striped mb-0">

            <thead class="table-dark text-center">

              <tr>

                <th>Menu</th>
                <th>Standard SLA</th>
                <th>Actual Time</th>
                <th>Difference</th>
                <th>Status</th>

              </tr>

            </thead>

            <tbody>

              <tr>

                <td>Nasi Goreng Seafood</td>
                <td>15 Menit</td>
                <td>12 Menit</td>
                <td>-3 Menit</td>

                <td>
                  <span class="badge bg-success">
                    Sesuai SLA
                  </span>
                </td>

              </tr>

              <tr>

                <td>Mie Aceh</td>
                <td>15 Menit</td>
                <td>28 Menit</td>
                <td>+13 Menit</td>

                <td>
                  <span class="badge bg-danger">
                    Over SLA
                  </span>
                </td>

              </tr>

            </tbody>

          </table>

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
     tabindex="-1">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header bg-info text-white">

        <h5 class="modal-title">
          Filter Kitchen Monitoring
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal"></button>

      </div>

      <form>

        <div class="modal-body">

          <div class="alert alert-warning">

            Halaman ini secara default menampilkan data kitchen realtime hari ini.

          </div>

          <div class="mb-3">

            <label class="form-label">
              Shift
            </label>

            <select class="form-select">

              <option>Semua Shift</option>
              <option>Shift Pagi</option>
              <option>Shift Siang</option>
              <option>Shift Malam</option>

            </select>

          </div>

          <div class="mb-3">

            <label class="form-label">
              Status Order
            </label>

            <select class="form-select">

              <option>Semua</option>
              <option>Pending</option>
              <option>Cooking</option>
              <option>Ready</option>
              <option>Delayed</option>

            </select>

          </div>

          <div class="mb-3">

            <label class="form-label">
              Tanggal
            </label>

            <input type="date"
                   class="form-control">

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
     tabindex="-1">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-primary text-white">

        <h5 class="modal-title">
          Bantuan Kitchen Display System (KDS)
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal"></button>

      </div>

      <div class="modal-body">

        <h5>
          Cara Menggunakan Halaman
        </h5>

        <ul>

          <li>
            Halaman ini digunakan untuk monitoring realtime aktivitas kitchen.
          </li>

          <li>
            Semua order yang masuk dari kasir/POS akan tampil otomatis pada tabel Kitchen Display System.
          </li>

          <li>
            Gunakan tombol Filter untuk menyaring data berdasarkan shift, status order, atau tanggal tertentu.
          </li>

          <li>
            Gunakan tombol Refresh Realtime untuk memperbarui data operasional kitchen.
          </li>

        </ul>

        <hr>

        <h5>
          Penjelasan Status Order
        </h5>

        <table class="table table-bordered">

          <thead class="table-dark">

            <tr>
              <th>Status</th>
              <th>Penjelasan</th>
            </tr>

          </thead>

          <tbody>

            <tr>
              <td>Pending</td>
              <td>
                Order sudah masuk tetapi belum diproses kitchen.
              </td>
            </tr>

            <tr>
              <td>Cooking</td>
              <td>
                Order sedang dimasak oleh kitchen.
              </td>
            </tr>

            <tr>
              <td>Ready</td>
              <td>
                Order sudah selesai dimasak dan siap disajikan.
              </td>
            </tr>

            <tr>
              <td>Delayed</td>
              <td>
                Order melewati batas SLA cooking time.
              </td>
            </tr>

          </tbody>

        </table>

        <hr>

        <h5>
          Penjelasan Monitoring
        </h5>

        <ul>

          <li>
            <b>Cooking Queue</b> digunakan untuk melihat antrian produksi makanan.
          </li>

          <li>
            <b>Pending Production</b> menunjukkan backlog awal kitchen.
          </li>

          <li>
            <b>Delayed Order</b> digunakan sebagai indikator problem operasional kitchen.
          </li>

          <li>
            <b>SLA Cooking Time</b> digunakan untuk memonitor efisiensi waktu masak.
          </li>

        </ul>

      </div>

      <div class="modal-footer">

        <button class="btn btn-secondary"
                data-bs-dismiss="modal">

          Tutup

        </button>

      </div>

    </div>

  </div>

</div>

<?php include('5script.php'); ?>
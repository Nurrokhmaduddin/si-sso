<!-- ========================================================= -->
<!-- PAGE : kitchen-report.php -->
<!-- STYLE : Kitchen Operational Report -->
<!-- FOKUS :
     - Production Report
     - Order Completion Report
     - Average Cooking Time
     - Kitchen Efficiency
-->
<!-- ========================================================= -->

<?php $page = 'kitchen-report'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <!-- ===================================================== -->
  <!-- CONTENT HEADER -->
  <!-- ===================================================== -->
  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Kitchen Report
        <button type="button"
                class="btn btn-tool"
                data-bs-toggle="modal"
                data-bs-target="#modalBantuan"
                title="Bantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>

      <p class="text-muted mb-0">
        Ringkasan performa produksi kitchen berdasarkan periode dan shift.
      </p>

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
              <b>Periode:</b>
              01/05/2026 - 31/05/2026
            </div>

            <div class="col-md-3">
              <b>Shift:</b>
              Semua Shift
            </div>

            <div class="col-md-3">
              <b>Status Order:</b>
              Semua
            </div>

            <div class="col-md-3">
              <b>Kitchen Station:</b>
              Semua
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

              <i class="fas fa-file-excel me-1"></i>
              Export Excel

            </button>

            <button class="btn btn-outline-danger btn-sm">

              <i class="fas fa-file-pdf me-1"></i>
              Export PDF

            </button>

            <button class="btn btn-outline-secondary btn-sm">

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

          <div class="small-box bg-success">

            <div class="inner">
              <h3>1.248</h3>
              <p>Total Produksi</p>
            </div>

            <div class="icon">
              <i class="fas fa-utensils"></i>
            </div>

          </div>

        </div>

        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-primary">

            <div class="inner">
              <h3>1.180</h3>
              <p>Order Selesai</p>
            </div>

            <div class="icon">
              <i class="fas fa-check-circle"></i>
            </div>

          </div>

        </div>

        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-warning">

            <div class="inner">
              <h3>12 Menit</h3>
              <p>Average Cooking Time</p>
            </div>

            <div class="icon">
              <i class="fas fa-stopwatch"></i>
            </div>

          </div>

        </div>

        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-danger">

            <div class="inner">
              <h3>94%</h3>
              <p>Kitchen Efficiency</p>
            </div>

            <div class="icon">
              <i class="fas fa-chart-line"></i>
            </div>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- 🟢 PRODUCTION REPORT -->
      <!-- ================================================= -->
      <div class="card card-success">

        <div class="card-header">

          <h3 class="card-title">
            🟢 Production Report
          </h3>

        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-striped table-sm">

            <thead class="table-dark text-center">

              <tr>
                <th>Tanggal</th>
                <th>Shift</th>
                <th>Total Order</th>
                <th>Total Produksi</th>
                <th>Menu Terlaris</th>
              </tr>

            </thead>

            <tbody>

              <tr>
                <td>01/05/2026</td>
                <td>Pagi</td>
                <td>120</td>
                <td>135</td>
                <td>Nasi Goreng</td>
              </tr>

              <tr>
                <td>01/05/2026</td>
                <td>Malam</td>
                <td>180</td>
                <td>196</td>
                <td>Mie Ayam</td>
              </tr>

              <tr>
                <td>02/05/2026</td>
                <td>Pagi</td>
                <td>140</td>
                <td>148</td>
                <td>Ayam Geprek</td>
              </tr>

            </tbody>

          </table>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- 🟢 ORDER COMPLETION REPORT -->
      <!-- ================================================= -->
      <div class="card card-primary">

        <div class="card-header">

          <h3 class="card-title">
            🟢 Order Completion Report
          </h3>

        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-striped table-sm">

            <thead class="table-dark text-center">

              <tr>
                <th>Tanggal</th>
                <th>Order Masuk</th>
                <th>Order Selesai</th>
                <th>Pending</th>
                <th>Completion Rate</th>
              </tr>

            </thead>

            <tbody>

              <tr>
                <td>01/05/2026</td>
                <td>300</td>
                <td>289</td>
                <td>11</td>
                <td>96%</td>
              </tr>

              <tr>
                <td>02/05/2026</td>
                <td>270</td>
                <td>255</td>
                <td>15</td>
                <td>94%</td>
              </tr>

              <tr>
                <td>03/05/2026</td>
                <td>320</td>
                <td>305</td>
                <td>15</td>
                <td>95%</td>
              </tr>

            </tbody>

          </table>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- 🟡 AVERAGE COOKING TIME -->
      <!-- ================================================= -->
      <div class="card card-warning">

        <div class="card-header">

          <h3 class="card-title">
            🟡 Average Cooking Time
          </h3>

        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-striped table-sm">

            <thead class="table-dark text-center">

              <tr>
                <th>Menu</th>
                <th>Rata-rata Waktu</th>
                <th>Fastest</th>
                <th>Slowest</th>
                <th>Status Efficiency</th>
              </tr>

            </thead>

            <tbody>

              <tr>
                <td>Nasi Goreng</td>
                <td>8 Menit</td>
                <td>5 Menit</td>
                <td>14 Menit</td>
                <td>
                  <span class="badge bg-success">
                    Efficient
                  </span>
                </td>
              </tr>

              <tr>
                <td>Ayam Geprek</td>
                <td>14 Menit</td>
                <td>10 Menit</td>
                <td>20 Menit</td>
                <td>
                  <span class="badge bg-warning">
                    Medium
                  </span>
                </td>
              </tr>

              <tr>
                <td>Mie Ayam</td>
                <td>18 Menit</td>
                <td>12 Menit</td>
                <td>25 Menit</td>
                <td>
                  <span class="badge bg-danger">
                    Slow
                  </span>
                </td>
              </tr>

            </tbody>

          </table>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- EXECUTIVE ALERT -->
      <!-- ================================================= -->
      <div class="alert alert-warning">

        <h5>
          <i class="icon fas fa-exclamation-triangle"></i>
          Kitchen Operational Warning
        </h5>

        Average cooking time pada shift malam meningkat 18%
        dibanding minggu sebelumnya.
        Perlu evaluasi kapasitas kitchen dan workload cook.

      </div>

    </div>
  </section>

</div>

<?php include('4footer.php'); ?>

<!-- ========================================================= -->
<!-- MODAL FILTER -->
<!-- ========================================================= -->
<div class="modal fade"
     id="modalFilter"
     tabindex="-1"
     aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-info text-white">

        <h5 class="modal-title">
          Filter Kitchen Report
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal"></button>

      </div>

      <form action="" method="GET">

        <div class="modal-body">

          <div class="alert alert-warning">

            Data report default menampilkan periode bulan berjalan.

          </div>

          <div class="mb-3">

            <label class="form-label">
              Periode Awal
            </label>

            <input type="date"
                   class="form-control"
                   name="tanggal_awal">

          </div>

          <div class="mb-3">

            <label class="form-label">
              Periode Akhir
            </label>

            <input type="date"
                   class="form-control"
                   name="tanggal_akhir">

          </div>

          <div class="mb-3">

            <label class="form-label">
              Shift
            </label>

            <select class="form-select" name="shift">

              <option value="">
                Semua Shift
              </option>

              <option value="Pagi">
                Shift Pagi
              </option>

              <option value="Siang">
                Shift Siang
              </option>

              <option value="Malam">
                Shift Malam
              </option>

            </select>

          </div>

          <div class="mb-3">

            <label class="form-label">
              Status Order
            </label>

            <select class="form-select" name="status_order">

              <option value="">
                Semua Status
              </option>

              <option value="completed">
                Completed
              </option>

              <option value="pending">
                Pending
              </option>

              <option value="cancel">
                Cancel
              </option>

            </select>

          </div>

          <div class="mb-3">

            <label class="form-label">
              Kitchen Station
            </label>

            <select class="form-select" name="station">

              <option value="">
                Semua Station
              </option>

              <option value="hot-kitchen">
                Hot Kitchen
              </option>

              <option value="cold-kitchen">
                Cold Kitchen
              </option>

              <option value="beverage">
                Beverage
              </option>

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

<!-- ========================================================= -->
<!-- MODAL BANTUAN -->
<!-- ========================================================= -->
<div class="modal fade"
     id="modalBantuan"
     tabindex="-1"
     aria-hidden="true">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-primary text-white">

        <h5 class="modal-title">
          Bantuan Kitchen Report
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal"></button>

      </div>

      <div class="modal-body">

        <h5>Tujuan Halaman</h5>

        <p>
          Halaman ini digunakan untuk melihat performa operasional kitchen
          berdasarkan periode tertentu.
        </p>

        <hr>

        <h5>Cara Menggunakan Halaman</h5>

        <ul>
          <li>
            Gunakan tombol <b>Filter</b> untuk memilih periode, shift,
            dan status order.
          </li>

          <li>
            Gunakan tombol <b>Export Excel</b> atau
            <b>Export PDF</b> untuk mengunduh laporan.
          </li>

          <li>
            Gunakan tabel Production Report untuk melihat total produksi
            per shift atau per hari.
          </li>

          <li>
            Gunakan tabel Average Cooking Time untuk evaluasi efisiensi kitchen.
          </li>
        </ul>

        <hr>

        <h5>Penjelasan Status Order</h5>

        <table class="table table-bordered table-sm">

          <thead class="table-dark">

            <tr>
              <th>Status</th>
              <th>Keterangan</th>
            </tr>

          </thead>

          <tbody>

            <tr>
              <td>
                Completed
              </td>

              <td>
                Order selesai dimasak dan dikirim.
              </td>
            </tr>

            <tr>
              <td>
                Pending
              </td>

              <td>
                Order masih dalam antrian atau proses memasak.
              </td>
            </tr>

            <tr>
              <td>
                Cancel
              </td>

              <td>
                Order dibatalkan oleh kasir atau customer.
              </td>
            </tr>

          </tbody>

        </table>

        <hr>

        <h5>Penjelasan KPI</h5>

        <ul>
          <li>
            <b>Total Produksi</b>:
            total item makanan/minuman yang diproduksi.
          </li>

          <li>
            <b>Order Selesai</b>:
            jumlah order yang berhasil diselesaikan kitchen.
          </li>

          <li>
            <b>Average Cooking Time</b>:
            rata-rata waktu memasak per order.
          </li>

          <li>
            <b>Kitchen Efficiency</b>:
            persentase efektivitas penyelesaian order.
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
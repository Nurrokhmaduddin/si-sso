<!-- ========================================================= -->
<!-- PAGE : sales-report.php -->
<!-- STYLE : Sales Reporting Dashboard -->
<!-- FOKUS :
     - Sales Analytics
     - Grouping Report
     - Revenue Insight
     - Product & Payment Analysis
-->
<!-- ========================================================= -->

<?php $page = 'sales-report'; ?>
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
            Sales Report
            <button type="button"
                    class="btn btn-tool"
                    data-bs-toggle="modal"
                    data-bs-target="#modalBantuan"
                    title="Bantuan">
              <i class="fas fa-question-circle"></i>
            </button>
          </h3>

          <p class="text-muted mb-0">
            Laporan penjualan berdasarkan grouping, kategori, waktu, pembayaran, dan performa operasional.
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
              <b>Periode:</b> Juli 2026
            </div>

            <div class="col-md-3">
              <b>Outlet:</b> Semua Outlet
            </div>

            <div class="col-md-3">
              <b>Shift:</b> Semua Shift
            </div>

            <div class="col-md-3">
              <b>Payment:</b> Semua Metode
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
              Export Excel
            </button>

            <button class="btn btn-outline-danger btn-sm">
              <i class="fas fa-sync-alt me-1"></i>
              Reset
            </button>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- KPI SALES -->
      <!-- ================================================= -->

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-success">

            <div class="inner">
              <h3>Rp 48.5 Jt</h3>
              <p>Total Sales</p>
            </div>

            <div class="icon">
              <i class="fas fa-cash-register"></i>
            </div>

          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-primary">

            <div class="inner">
              <h3>1.284</h3>
              <p>Total Transaction</p>
            </div>

            <div class="icon">
              <i class="fas fa-receipt"></i>
            </div>

          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-warning">

            <div class="inner">
              <h3>Rp 37.800</h3>
              <p>Average Bill</p>
            </div>

            <div class="icon">
              <i class="fas fa-wallet"></i>
            </div>

          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-danger">

            <div class="inner">
              <h3>18%</h3>
              <p>Discount Ratio</p>
            </div>

            <div class="icon">
              <i class="fas fa-tags"></i>
            </div>

          </div>
        </div>

      </div>

      <!-- ================================================= -->
      <!-- REPORT BY PRODUCT -->
      <!-- ================================================= -->

      <div class="row">

        <div class="col-md-6">

          <div class="card card-primary">

            <div class="card-header">
              <h3 class="card-title">
                Report By Product
              </h3>
            </div>

            <div class="card-body table-responsive">

              <table class="table table-bordered table-striped table-sm">

                <thead class="table-dark text-center">
                  <tr>
                    <th>Product</th>
                    <th>Qty Sold</th>
                    <th>Revenue</th>
                  </tr>
                </thead>

                <tbody>

                  <tr>
                    <td>Ice Coffee Latte</td>
                    <td>382</td>
                    <td>Rp 11.460.000</td>
                  </tr>

                  <tr>
                    <td>French Fries</td>
                    <td>274</td>
                    <td>Rp 6.850.000</td>
                  </tr>

                  <tr>
                    <td>Chicken Burger</td>
                    <td>210</td>
                    <td>Rp 8.400.000</td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

        <!-- ============================================= -->

        <div class="col-md-6">

          <div class="card card-success">

            <div class="card-header">
              <h3 class="card-title">
                Report By Category
              </h3>
            </div>

            <div class="card-body table-responsive">

              <table class="table table-bordered table-striped table-sm">

                <thead class="table-dark text-center">
                  <tr>
                    <th>Category</th>
                    <th>Qty</th>
                    <th>Revenue</th>
                  </tr>
                </thead>

                <tbody>

                  <tr>
                    <td>Beverage</td>
                    <td>820</td>
                    <td>Rp 18.200.000</td>
                  </tr>

                  <tr>
                    <td>Food</td>
                    <td>640</td>
                    <td>Rp 24.800.000</td>
                  </tr>

                  <tr>
                    <td>Dessert</td>
                    <td>190</td>
                    <td>Rp 5.500.000</td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- REPORT BY TIME & SHIFT -->
      <!-- ================================================= -->

      <div class="row">

        <div class="col-md-6">

          <div class="card card-info">

            <div class="card-header">
              <h3 class="card-title">
                Report By Time
              </h3>
            </div>

            <div class="card-body table-responsive">

              <table class="table table-bordered table-striped table-sm">

                <thead class="table-dark text-center">
                  <tr>
                    <th>Period</th>
                    <th>Transaction</th>
                    <th>Revenue</th>
                  </tr>
                </thead>

                <tbody>

                  <tr>
                    <td>Daily</td>
                    <td>188</td>
                    <td>Rp 6.200.000</td>
                  </tr>

                  <tr>
                    <td>Weekly</td>
                    <td>1.042</td>
                    <td>Rp 34.500.000</td>
                  </tr>

                  <tr>
                    <td>Monthly</td>
                    <td>4.380</td>
                    <td>Rp 142.000.000</td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

        <!-- ============================================= -->

        <div class="col-md-6">

          <div class="card card-warning">

            <div class="card-header">
              <h3 class="card-title">
                Report By Shift
              </h3>
            </div>

            <div class="card-body table-responsive">

              <table class="table table-bordered table-striped table-sm">

                <thead class="table-dark text-center">
                  <tr>
                    <th>Shift</th>
                    <th>Transaction</th>
                    <th>Revenue</th>
                  </tr>
                </thead>

                <tbody>

                  <tr>
                    <td>Pagi</td>
                    <td>520</td>
                    <td>Rp 16.500.000</td>
                  </tr>

                  <tr>
                    <td>Malam</td>
                    <td>764</td>
                    <td>Rp 32.000.000</td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- CASHIER & TABLE -->
      <!-- ================================================= -->

      <div class="row">

        <div class="col-md-6">

          <div class="card card-danger">

            <div class="card-header">
              <h3 class="card-title">
                Report By Cashier
              </h3>
            </div>

            <div class="card-body table-responsive">

              <table class="table table-bordered table-striped table-sm">

                <thead class="table-dark text-center">
                  <tr>
                    <th>Cashier</th>
                    <th>Transaction</th>
                    <th>Revenue</th>
                  </tr>
                </thead>

                <tbody>

                  <tr>
                    <td>Siti</td>
                    <td>320</td>
                    <td>Rp 12.800.000</td>
                  </tr>

                  <tr>
                    <td>Andi</td>
                    <td>280</td>
                    <td>Rp 10.200.000</td>
                  </tr>

                  <tr>
                    <td>Rina</td>
                    <td>250</td>
                    <td>Rp 9.700.000</td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

        <!-- ============================================= -->

        <div class="col-md-6">

          <div class="card card-secondary">

            <div class="card-header">
              <h3 class="card-title">
                Report By Table
              </h3>
            </div>

            <div class="card-body table-responsive">

              <table class="table table-bordered table-striped table-sm">

                <thead class="table-dark text-center">
                  <tr>
                    <th>Table</th>
                    <th>Transaction</th>
                    <th>Revenue</th>
                  </tr>
                </thead>

                <tbody>

                  <tr>
                    <td>Table A01</td>
                    <td>82</td>
                    <td>Rp 3.400.000</td>
                  </tr>

                  <tr>
                    <td>Table B02</td>
                    <td>76</td>
                    <td>Rp 3.050.000</td>
                  </tr>

                  <tr>
                    <td>VIP 01</td>
                    <td>41</td>
                    <td>Rp 5.800.000</td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- PAYMENT & DISCOUNT -->
      <!-- ================================================= -->

      <div class="row">

        <div class="col-md-6">

          <div class="card card-success">

            <div class="card-header">
              <h3 class="card-title">
                Payment Method Report
              </h3>
            </div>

            <div class="card-body table-responsive">

              <table class="table table-bordered table-striped table-sm">

                <thead class="table-dark text-center">
                  <tr>
                    <th>Payment</th>
                    <th>Transaction</th>
                    <th>Total</th>
                  </tr>
                </thead>

                <tbody>

                  <tr>
                    <td>Cash</td>
                    <td>420</td>
                    <td>Rp 12.500.000</td>
                  </tr>

                  <tr>
                    <td>QRIS</td>
                    <td>610</td>
                    <td>Rp 24.700.000</td>
                  </tr>

                  <tr>
                    <td>Debit</td>
                    <td>254</td>
                    <td>Rp 11.300.000</td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

        <!-- ============================================= -->

        <div class="col-md-6">

          <div class="card card-warning">

            <div class="card-header">
              <h3 class="card-title">
                Discount Report
              </h3>
            </div>

            <div class="card-body table-responsive">

              <table class="table table-bordered table-striped table-sm">

                <thead class="table-dark text-center">
                  <tr>
                    <th>Promo</th>
                    <th>Usage</th>
                    <th>Total Discount</th>
                  </tr>
                </thead>

                <tbody>

                  <tr>
                    <td>Promo Lunch</td>
                    <td>182x</td>
                    <td>Rp 2.100.000</td>
                  </tr>

                  <tr>
                    <td>Buy 1 Get 1</td>
                    <td>144x</td>
                    <td>Rp 3.850.000</td>
                  </tr>

                  <tr>
                    <td>Member Discount</td>
                    <td>88x</td>
                    <td>Rp 1.200.000</td>
                  </tr>

                </tbody>

              </table>

            </div>

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
          Filter Sales Report
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
        </button>

      </div>

      <form action="" method="GET">

        <div class="modal-body">

          <div class="alert alert-warning mb-3"
               style="font-size:0.9rem;">

            <b>Informasi:</b>
            Report akan menampilkan data berdasarkan periode dan grouping yang dipilih.

          </div>

          <div class="mb-3">
            <label class="form-label">Periode</label>

            <select class="form-select" name="periode">
              <option>Hari Ini</option>
              <option>Minggu Ini</option>
              <option>Bulan Ini</option>
              <option>Tahun Ini</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Outlet</label>

            <select class="form-select" name="outlet">
              <option>Semua Outlet</option>
              <option>Outlet Medan</option>
              <option>Outlet Binjai</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Shift</label>

            <select class="form-select" name="shift">
              <option>Semua Shift</option>
              <option>Pagi</option>
              <option>Malam</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Payment Method</label>

            <select class="form-select" name="payment">
              <option>Semua</option>
              <option>Cash</option>
              <option>QRIS</option>
              <option>Debit</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Group Report</label>

            <select class="form-select" name="grouping">
              <option>By Product</option>
              <option>By Category</option>
              <option>By Cashier</option>
              <option>By Shift</option>
              <option>By Payment</option>
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
          Bantuan Sales Report
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
        </button>

      </div>

      <div class="modal-body">

        <div class="alert alert-info">
          Halaman ini digunakan untuk melihat laporan penjualan berdasarkan berbagai kategori dan grouping data.
        </div>

        <h6><b>Fungsi Tombol</b></h6>

        <ul>
          <li><b>Filter</b> → menyaring data report berdasarkan periode, outlet, shift, metode pembayaran, dan grouping.</li>
          <li><b>Export</b> → mengunduh laporan penjualan ke Excel/PDF.</li>
          <li><b>Reset</b> → mengembalikan filter ke kondisi default.</li>
        </ul>

        <hr>

        <h6><b>Penjelasan Group Report</b></h6>

        <table class="table table-bordered table-sm">

          <thead class="table-dark">
            <tr>
              <th>Grouping</th>
              <th>Keterangan</th>
            </tr>
          </thead>

          <tbody>

            <tr>
              <td>By Product</td>
              <td>Laporan berdasarkan produk/menu yang terjual.</td>
            </tr>

            <tr>
              <td>By Category</td>
              <td>Laporan berdasarkan kategori menu seperti food, beverage, dessert.</td>
            </tr>

            <tr>
              <td>By Time</td>
              <td>Laporan penjualan berdasarkan waktu harian, mingguan, atau bulanan.</td>
            </tr>

            <tr>
              <td>By Shift</td>
              <td>Laporan berdasarkan shift operasional.</td>
            </tr>

            <tr>
              <td>By Cashier</td>
              <td>Laporan performa transaksi masing-masing kasir.</td>
            </tr>

            <tr>
              <td>By Table</td>
              <td>Laporan meja paling aktif dan produktif.</td>
            </tr>

            <tr>
              <td>By Payment Method</td>
              <td>Laporan berdasarkan metode pembayaran.</td>
            </tr>

          </tbody>

        </table>

        <hr>

        <h6><b>Penjelasan Payment Method</b></h6>

        <ul>
          <li><b>Cash</b> → pembayaran tunai.</li>
          <li><b>QRIS</b> → pembayaran digital QRIS.</li>
          <li><b>Debit</b> → pembayaran menggunakan kartu debit.</li>
        </ul>

        <hr>

        <h6><b>Discount Report</b></h6>

        <p>
          Bagian ini digunakan untuk mengevaluasi promo atau diskon yang paling sering digunakan,
          total nilai diskon, dan efektivitas promo terhadap penjualan.
        </p>

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
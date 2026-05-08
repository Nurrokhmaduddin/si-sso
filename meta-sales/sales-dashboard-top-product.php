<!-- FILE : sales-dashboard-top-product.php -->

<?php $page = 'sales-dashboard-top-product'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-1">
        Dashboard Produk Terlaris
      </h3>

      <p class="text-muted mb-0">
        Monitoring performa produk, kontribusi penjualan,
        fast moving item, dan tren penjualan produk.
      </p>

    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <style>

        .sales-card{
          border-radius:14px;
          overflow:hidden;
          border:none;
          margin-bottom:24px;
          box-shadow:0 2px 10px rgba(0,0,0,.08);
        }

        .summary-box{
          border-radius:14px;
          padding:20px;
          color:#fff;
          margin-bottom:20px;
          position:relative;
        }

        .summary-box h3{
          font-weight:700;
          margin:0;
        }

      </style>

      <!-- KPI -->
      <div class="row">

        <div class="col-md-3">

          <div class="summary-box bg-success">

            <h3>1.248</h3>
            <p>Total Unit Sold</p>

          </div>

        </div>

        <div class="col-md-3">

          <div class="summary-box bg-primary">

            <h3>Rp 2.1 M</h3>
            <p>Revenue Produk</p>

          </div>

        </div>

        <div class="col-md-3">

          <div class="summary-box bg-warning text-dark">

            <h3>18</h3>
            <p>Fast Moving Item</p>

          </div>

        </div>

        <div class="col-md-3">

          <div class="summary-box bg-danger">

            <h3>7</h3>
            <p>Slow Moving Item</p>

          </div>

        </div>

      </div>

      <!-- TOP PRODUCT -->
      <div class="card sales-card">

        <div class="card-header bg-success text-white">

          <h5 class="mb-0">
            Top Product Performance
          </h5>

        </div>

        <div class="card-body">

          <div class="alert alert-info">

            Bar chart:
            Top 10 produk berdasarkan revenue dan quantity sold.

          </div>

          <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

              <thead class="table-dark text-center">

                <tr>
                  <th>Produk</th>
                  <th>Qty Sold</th>
                  <th>Revenue</th>
                  <th>Margin</th>
                  <th>Status</th>
                </tr>

              </thead>

              <tbody>

                <tr>

                  <td>Laptop Pro X1</td>

                  <td class="text-center">
                    218
                  </td>

                  <td class="fw-bold text-success">
                    Rp 842 JT
                  </td>

                  <td>31%</td>

                  <td class="text-center">

                    <span class="badge bg-success">
                      Best Seller
                    </span>

                  </td>

                </tr>

                <tr>

                  <td>Printer OfficeJet</td>

                  <td class="text-center">
                    142
                  </td>

                  <td class="fw-bold text-primary">
                    Rp 411 JT
                  </td>

                  <td>24%</td>

                  <td class="text-center">

                    <span class="badge bg-info">
                      Stable
                    </span>

                  </td>

                </tr>

                <tr>

                  <td>Scanner Mini A5</td>

                  <td class="text-center">
                    18
                  </td>

                  <td class="fw-bold text-danger">
                    Rp 24 JT
                  </td>

                  <td>12%</td>

                  <td class="text-center">

                    <span class="badge bg-danger">
                      Slow Moving
                    </span>

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
<?php include('5script.php'); ?>
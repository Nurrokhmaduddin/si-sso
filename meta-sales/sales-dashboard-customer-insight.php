<!-- FILE : sales-dashboard-customer-insight.php -->

<?php $page = 'sales-dashboard-customer-insight'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-1">
        Dashboard Customer Insight
      </h3>

      <p class="text-muted mb-0">
        Monitoring perilaku customer, repeat order,
        segmentasi client, dan customer contribution bisnis.
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
        }

        .summary-box h3{
          margin:0;
          font-weight:700;
        }

      </style>

      <!-- KPI -->
      <div class="row">

        <div class="col-md-3">

          <div class="summary-box bg-primary">

            <h3>428</h3>
            <p>Total Customer Aktif</p>

          </div>

        </div>

        <div class="col-md-3">

          <div class="summary-box bg-success">

            <h3>68%</h3>
            <p>Repeat Order Rate</p>

          </div>

        </div>

        <div class="col-md-3">

          <div class="summary-box bg-warning text-dark">

            <h3>92</h3>
            <p>New Customer</p>

          </div>

        </div>

        <div class="col-md-3">

          <div class="summary-box bg-danger">

            <h3>14</h3>
            <p>Inactive Customer</p>

          </div>

        </div>

      </div>

      <!-- CUSTOMER SEGMENT -->
      <div class="card sales-card">

        <div class="card-header bg-primary text-white">

          <h5 class="mb-0">
            Customer Segment Overview
          </h5>

        </div>

        <div class="card-body">

          <div class="row">

            <div class="col-md-4">

              <div class="alert alert-success">

                <h5 class="fw-bold">
                  Corporate
                </h5>

                42% kontribusi revenue berasal dari corporate client.

              </div>

            </div>

            <div class="col-md-4">

              <div class="alert alert-info">

                <h5 class="fw-bold">
                  Retail
                </h5>

                Volume transaksi retail paling tinggi bulan ini.

              </div>

            </div>

            <div class="col-md-4">

              <div class="alert alert-warning">

                <h5 class="fw-bold">
                  Marketplace
                </h5>

                Growth customer online meningkat signifikan.

              </div>

            </div>

          </div>

          <div class="alert alert-secondary mt-3">

            Pie chart:
            Segmentasi customer berdasarkan revenue contribution.

          </div>

        </div>

      </div>

      <!-- TOP CUSTOMER -->
      <div class="card sales-card">

        <div class="card-header bg-dark text-white">

          <h5 class="mb-0">
            Top Customer Contribution
          </h5>

        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-hover align-middle">

            <thead class="table-dark text-center">

              <tr>
                <th>Customer</th>
                <th>Total Order</th>
                <th>Revenue</th>
                <th>Repeat Order</th>
                <th>Status</th>
              </tr>

            </thead>

            <tbody>

              <tr>

                <td>PT Global Teknologi</td>

                <td class="text-center">
                  18
                </td>

                <td class="fw-bold text-success">
                  Rp 1.2 M
                </td>

                <td class="text-center">
                  92%
                </td>

                <td class="text-center">

                  <span class="badge bg-success">
                    Loyal
                  </span>

                </td>

              </tr>

              <tr>

                <td>CV Sinar Abadi</td>

                <td class="text-center">
                  9
                </td>

                <td class="fw-bold text-primary">
                  Rp 480 JT
                </td>

                <td class="text-center">
                  61%
                </td>

                <td class="text-center">

                  <span class="badge bg-info">
                    Active
                  </span>

                </td>

              </tr>

              <tr>

                <td>Toko Maju Bersama</td>

                <td class="text-center">
                  2
                </td>

                <td class="fw-bold text-danger">
                  Rp 24 JT
                </td>

                <td class="text-center">
                  8%
                </td>

                <td class="text-center">

                  <span class="badge bg-danger">
                    Risk
                  </span>

                </td>

              </tr>

            </tbody>

          </table>

        </div>

      </div>

    </div>
  </section>

</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
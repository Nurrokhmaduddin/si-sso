<!-- FILE : sales-monitor-order-delivery.php -->

<?php $page = 'sales-monitor-order-delivery'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-1">
        Monitor Order & Delivery Status
      </h3>

      <p class="text-muted mb-0">
        Monitoring status sales order,
        proses delivery, dan pengiriman barang customer.
      </p>

    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <div class="card shadow-sm border-0 rounded-4">

        <div class="card-header bg-success text-white">
          Delivery Status Monitoring
        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-hover">

            <thead class="table-dark text-center">

              <tr>
                <th>SO Number</th>
                <th>Customer</th>
                <th>Delivery Date</th>
                <th>Courier</th>
                <th>Status</th>
              </tr>

            </thead>

            <tbody>

              <tr>

                <td>SO-00129</td>
                <td>PT Nusantara Digital</td>
                <td>09 Mei 2026</td>
                <td>JNE Trucking</td>

                <td class="text-center">
                  <span class="badge bg-info">
                    Delivery
                  </span>
                </td>

              </tr>

              <tr>

                <td>SO-00135</td>
                <td>CV Sinar Baru</td>
                <td>10 Mei 2026</td>
                <td>Internal Courier</td>

                <td class="text-center">
                  <span class="badge bg-success">
                    Delivered
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
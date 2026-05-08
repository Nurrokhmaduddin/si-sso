<!-- FILE : sales-monitor-pipeline.php -->

<?php $page = 'sales-monitor-pipeline'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-1">
        Monitor Pipeline Aktif
      </h3>

      <p class="text-muted mb-0">
        Monitoring seluruh pipeline penjualan aktif,
        progress deal, dan potensi closing sales.
      </p>

    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <style>

        .monitor-card{
          border:none;
          border-radius:14px;
          overflow:hidden;
          margin-bottom:24px;
          box-shadow:0 2px 10px rgba(0,0,0,.08);
        }

      </style>

      <div class="card monitor-card">

        <div class="card-header bg-info text-white">
          Active Pipeline Monitoring
        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-hover">

            <thead class="table-dark text-center">

              <tr>
                <th>Customer</th>
                <th>Sales</th>
                <th>Value</th>
                <th>Stage</th>
                <th>Probability</th>
                <th>Status</th>
              </tr>

            </thead>

            <tbody>

              <tr>

                <td>PT Mega Solusi</td>
                <td>Doni</td>

                <td class="fw-bold text-success">
                  Rp 520 JT
                </td>

                <td>Negotiation</td>
                <td>82%</td>

                <td class="text-center">
                  <span class="badge bg-warning text-dark">
                    Progress
                  </span>
                </td>

              </tr>

              <tr>

                <td>CV Digital Nusantara</td>
                <td>Raka</td>

                <td class="fw-bold text-primary">
                  Rp 180 JT
                </td>

                <td>Closing</td>
                <td>95%</td>

                <td class="text-center">
                  <span class="badge bg-success">
                    Potential
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
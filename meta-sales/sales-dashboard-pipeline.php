<!-- FILE : sales-dashboard-pipeline.php -->

<?php $page = 'sales-dashboard-pipeline'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-1">
        Dashboard Pipeline Sales
      </h3>

      <p class="text-muted mb-0">
        Monitoring peluang penjualan aktif, progress deal, conversion rate,
        dan status pipeline sales realtime.
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
          box-shadow:0 2px 10px rgba(0,0,0,.08);
          margin-bottom:24px;
        }

        .summary-box{
          border-radius:14px;
          padding:20px;
          color:#fff;
          position:relative;
          overflow:hidden;
          margin-bottom:20px;
        }

        .summary-box h3{
          font-weight:700;
          margin:0;
        }

        .summary-box i{
          position:absolute;
          right:18px;
          bottom:12px;
          font-size:40px;
          opacity:.2;
        }

        .pipeline-stage{
          border-radius:12px;
          padding:18px;
          color:#fff;
          margin-bottom:15px;
        }

      </style>

      <!-- KPI -->
      <div class="row">

        <div class="col-md-3">
          <div class="summary-box bg-primary">

            <h3>128</h3>
            <p>Total Pipeline</p>

            <i class="fas fa-stream"></i>

          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-success">

            <h3>37</h3>
            <p>Deal Closing</p>

            <i class="fas fa-handshake"></i>

          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-warning text-dark">

            <h3>28%</h3>
            <p>Conversion Rate</p>

            <i class="fas fa-chart-pie"></i>

          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-danger">

            <h3>19</h3>
            <p>Pipeline Overdue</p>

            <i class="fas fa-exclamation-triangle"></i>

          </div>
        </div>

      </div>

      <!-- PIPELINE STAGE -->
      <div class="card sales-card">

        <div class="card-header bg-primary text-white">

          <h5 class="mb-0">
            Pipeline Stage Monitoring
          </h5>

        </div>

        <div class="card-body">

          <div class="row">

            <div class="col-md-3">

              <div class="pipeline-stage bg-info">

                <h4>42</h4>
                <p class="mb-0">
                  Prospect Lead
                </p>

              </div>

            </div>

            <div class="col-md-3">

              <div class="pipeline-stage bg-warning text-dark">

                <h4>31</h4>
                <p class="mb-0">
                  Negotiation
                </p>

              </div>

            </div>

            <div class="col-md-3">

              <div class="pipeline-stage bg-success">

                <h4>37</h4>
                <p class="mb-0">
                  Closing Deal
                </p>

              </div>

            </div>

            <div class="col-md-3">

              <div class="pipeline-stage bg-danger">

                <h4>18</h4>
                <p class="mb-0">
                  Lost Deal
                </p>

              </div>

            </div>

          </div>

          <div class="alert alert-info mt-3">

            Funnel chart:
            Lead → Prospect → Negotiation → Closing.

          </div>

        </div>

      </div>

      <!-- PIPELINE TABLE -->
      <div class="card sales-card">

        <div class="card-header bg-dark text-white">

          <h5 class="mb-0">
            Top Active Pipeline
          </h5>

        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-hover align-middle">

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

                <td>PT Sinar Jaya</td>
                <td>Rizky</td>

                <td class="fw-bold text-success">
                  Rp 420 JT
                </td>

                <td>Negotiation</td>

                <td>78%</td>

                <td class="text-center">
                  <span class="badge bg-warning text-dark">
                    Progress
                  </span>
                </td>

              </tr>

              <tr>

                <td>CV Makmur Abadi</td>
                <td>Fajar</td>

                <td class="fw-bold text-primary">
                  Rp 180 JT
                </td>

                <td>Closing</td>

                <td>92%</td>

                <td class="text-center">
                  <span class="badge bg-success">
                    Potential
                  </span>
                </td>

              </tr>

              <tr>

                <td>PT Karya Nusantara</td>
                <td>Doni</td>

                <td class="fw-bold text-danger">
                  Rp 95 JT
                </td>

                <td>Prospect</td>

                <td>40%</td>

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
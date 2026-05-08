<!-- FILE : sales-monitor-lead-followup.php -->

<?php $page = 'sales-monitor-lead-followup'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-1">
        Monitor Lead & Follow Up
      </h3>

      <p class="text-muted mb-0">
        Monitoring aktivitas lead sales, jadwal follow up,
        dan status prospek customer secara realtime.
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
          box-shadow:0 2px 10px rgba(0,0,0,.08);
          margin-bottom:24px;
        }

        .summary-box{
          border-radius:12px;
          padding:18px;
          color:#fff;
          margin-bottom:20px;
        }

      </style>

      <!-- SUMMARY -->
      <div class="row">

        <div class="col-md-3">
          <div class="summary-box bg-primary">
            <h3>142</h3>
            <p>Total Lead Aktif</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-warning text-dark">
            <h3>28</h3>
            <p>Pending Follow Up</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-danger">
            <h3>11</h3>
            <p>Overdue Follow Up</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-success">
            <h3>67%</h3>
            <p>Response Rate</p>
          </div>
        </div>

      </div>

      <!-- TABLE -->
      <div class="card monitor-card">

        <div class="card-header bg-primary text-white">
          Lead Activity Monitoring
        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-hover align-middle">

            <thead class="table-dark text-center">
              <tr>
                <th>Lead</th>
                <th>Sales</th>
                <th>Last Contact</th>
                <th>Next Follow Up</th>
                <th>Priority</th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody>

              <tr>

                <td>PT Sinar Elektronik</td>
                <td>Rizky</td>
                <td>08 Mei 2026</td>
                <td>10 Mei 2026</td>

                <td class="text-center">
                  <span class="badge bg-danger">
                    High
                  </span>
                </td>

                <td class="text-center">
                  <span class="badge bg-warning text-dark">
                    Waiting
                  </span>
                </td>

              </tr>

              <tr>

                <td>CV Nusantara Jaya</td>
                <td>Fajar</td>
                <td>09 Mei 2026</td>
                <td>09 Mei 2026</td>

                <td class="text-center">
                  <span class="badge bg-success">
                    Normal
                  </span>
                </td>

                <td class="text-center">
                  <span class="badge bg-success">
                    On Track
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
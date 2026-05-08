<!-- FILE : sales-monitor-sla-sales.php -->

<?php $page = 'sales-monitor-sla-sales'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-1">
        Monitor SLA Sales Activity
      </h3>

      <p class="text-muted mb-0">
        Monitoring SLA aktivitas sales,
        response time, dan performa follow up tim sales.
      </p>

    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <div class="card shadow-sm border-0 rounded-4">

        <div class="card-header bg-primary text-white">
          SLA Activity Monitoring
        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-hover align-middle">

            <thead class="table-dark text-center">

              <tr>
                <th>Sales</th>
                <th>Total Activity</th>
                <th>Avg Response</th>
                <th>SLA</th>
                <th>Performance</th>
              </tr>

            </thead>

            <tbody>

              <tr>

                <td>Rizky</td>
                <td>82</td>
                <td>1.2 Jam</td>

                <td class="text-success fw-bold">
                  98%
                </td>

                <td class="text-center">
                  <span class="badge bg-success">
                    Excellent
                  </span>
                </td>

              </tr>

              <tr>

                <td>Doni</td>
                <td>44</td>
                <td>5.6 Jam</td>

                <td class="text-warning fw-bold">
                  72%
                </td>

                <td class="text-center">
                  <span class="badge bg-warning text-dark">
                    Need Improve
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
<!-- FILE : sales-monitor-quotation-approval.php -->

<?php $page = 'sales-monitor-quotation-approval'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-1">
        Monitor Quotation Pending Approval
      </h3>

      <p class="text-muted mb-0">
        Monitoring quotation yang masih pending approval,
        revisi harga, dan persetujuan manajemen.
      </p>

    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <div class="card shadow-sm border-0 rounded-4">

        <div class="card-header bg-warning text-dark">
          Pending Approval List
        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-hover align-middle">

            <thead class="table-dark text-center">

              <tr>
                <th>No Quotation</th>
                <th>Customer</th>
                <th>Sales</th>
                <th>Nominal</th>
                <th>Approval</th>
                <th>Status</th>
              </tr>

            </thead>

            <tbody>

              <tr>

                <td>QT-2026-001</td>
                <td>PT Astra Digital</td>
                <td>Rizky</td>

                <td class="fw-bold text-primary">
                  Rp 180 JT
                </td>

                <td>Manager Sales</td>

                <td class="text-center">
                  <span class="badge bg-warning text-dark">
                    Pending
                  </span>
                </td>

              </tr>

              <tr>

                <td>QT-2026-009</td>
                <td>CV Karya Mandiri</td>
                <td>Doni</td>

                <td class="fw-bold text-success">
                  Rp 72 JT
                </td>

                <td>Director</td>

                <td class="text-center">
                  <span class="badge bg-danger">
                    Urgent
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
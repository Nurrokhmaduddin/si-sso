<!-- ========================================================= -->
<!-- PAGE : finance-cash-out.php -->
<!-- ========================================================= -->

<?php $page = 'finance-cash-out'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Dashboard Cash Out
      </h3>

      <p class="text-muted mb-0">
        Monitoring pengeluaran perusahaan, expense operasional,
        approval biaya, dan kontrol cashflow keluar.
      </p>

    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <style>

        /*
        =====================================================
        STYLE :
        Executive Finance Dashboard
        Fokus :
        - cepat dibaca owner
        - visual accounting
        - operasional realtime
        =====================================================
        */

        .finance-card{
          border-radius:14px;
          overflow:hidden;
          box-shadow:0 2px 10px rgba(0,0,0,.08);
          margin-bottom:24px;
        }

        .summary-box{
          border-radius:12px;
          padding:20px;
          color:#fff;
          margin-bottom:16px;
        }

        .summary-box h3{
          margin:0;
          font-weight:700;
        }

        .summary-box p{
          margin:0;
          opacity:.9;
        }

      </style>

      <!-- ================================================= -->
      <!-- KPI -->
      <!-- ================================================= -->

      <div class="row">

        <div class="col-md-3">
          <div class="summary-box bg-danger">
            <h3>Rp 482 JT</h3>
            <p>Total Cash Out</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-warning text-dark">
            <h3>18</h3>
            <p>Pending Approval</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-success">
            <h3>92%</h3>
            <p>Approved Expense</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="summary-box bg-info">
            <h3>7</h3>
            <p>Over Budget</p>
          </div>
        </div>

      </div>

      <!-- ================================================= -->
      <!-- CARD -->
      <!-- ================================================= -->

      <div class="card finance-card">

        <div class="card-header bg-danger text-white">

          <div class="d-flex justify-content-between align-items-center">

            <div>

              <h5 class="mb-1">
                Expense Monitoring
              </h5>

              <small>
                Monitoring realtime seluruh pengeluaran operasional.
              </small>

            </div>

            <div>

              <button class="btn btn-light btn-sm">
                Export
              </button>

            </div>

          </div>

        </div>

        <div class="card-body">

          <!-- ============================================= -->
          <!-- DESIGN NOTE :
               Tabel dibuat detail karena finance perlu
               melihat expense realtime secara cepat.
          ============================================== -->

          <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

              <thead class="table-dark text-center">

                <tr>
                  <th>Tanggal</th>
                  <th>Ref</th>
                  <th>Kategori</th>
                  <th>Divisi</th>
                  <th>Nominal</th>
                  <th>Status</th>
                </tr>

              </thead>

              <tbody>

                <tr>
                  <td>08/05/2026</td>
                  <td>EXP-001</td>
                  <td>Maintenance</td>
                  <td>Produksi</td>

                  <td class="text-danger fw-bold">
                    Rp 12.000.000
                  </td>

                  <td class="text-center">
                    <span class="badge bg-success">
                      Approved
                    </span>
                  </td>
                </tr>

                <tr>
                  <td>08/05/2026</td>
                  <td>EXP-002</td>
                  <td>Transport</td>
                  <td>Operasional</td>

                  <td class="text-danger fw-bold">
                    Rp 2.400.000
                  </td>

                  <td class="text-center">
                    <span class="badge bg-warning text-dark">
                      Pending
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
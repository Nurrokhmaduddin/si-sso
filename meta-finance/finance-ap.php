<!-- ========================================================= -->
<!-- PAGE : finance-ap.php -->
<!-- STYLE : Executive Dashboard (Gaya A) -->
<!-- FOKUS :
     - Accounts Payable
     - Hutang supplier
     - Kontrol cash out
-->
<!-- ========================================================= -->

<?php $page = 'finance-ap'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Accounts Payable Dashboard
      </h3>

      <p class="text-muted mb-0">
        Monitoring hutang supplier dan jadwal pembayaran perusahaan.
      </p>

    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <div class="row">

        <div class="col-md-3">
          <div class="alert alert-danger">
            <h4>Rp 620 JT</h4>
            Total Hutang
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-warning">
            <h4>12</h4>
            Jatuh Tempo
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-success">
            <h4>Rp 280 JT</h4>
            Sudah Dibayar
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-info">
            <h4>24</h4>
            Supplier Aktif
          </div>
        </div>

      </div>

      <div class="card">

        <div class="card-header bg-danger text-white">
          <h5 class="mb-0">
            Daftar Accounts Payable
          </h5>
        </div>

        <div class="card-body table-responsive">

          <!--
            Desain:
            - AP = pengeluaran perusahaan
            - Dominasi warna danger
            - Fokus cash out control
          -->

          <table class="table table-bordered table-striped align-middle">

            <thead class="table-dark text-center">

              <tr>
                <th>Supplier</th>
                <th>Ref Bill</th>
                <th>Tanggal</th>
                <th>Jatuh Tempo</th>
                <th>Nominal</th>
                <th>Status</th>
              </tr>

            </thead>

            <tbody>

              <tr>
                <td>PT Supplier Nusantara</td>
                <td>BILL-001</td>
                <td>01/05/2026</td>
                <td>12/05/2026</td>
                <td class="text-danger fw-bold">
                  Rp 42.000.000
                </td>
                <td class="text-center">
                  <span class="badge bg-warning text-dark">
                    Due Soon
                  </span>
                </td>
              </tr>

              <tr>
                <td>CV Pangan Jaya</td>
                <td>BILL-005</td>
                <td>03/05/2026</td>
                <td>20/05/2026</td>
                <td class="text-danger fw-bold">
                  Rp 18.000.000
                </td>
                <td class="text-center">
                  <span class="badge bg-success">
                    Paid
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
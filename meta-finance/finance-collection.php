<!-- ========================================================= -->
<!-- PAGE : finance-collection.php -->
<!-- STYLE : Executive Dashboard (Gaya A) -->
<!-- Fokus:
     - Collection piutang
     - Reminder penagihan
     - Monitoring overdue
-->
<!-- ========================================================= -->

<?php $page = 'finance-collection'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Collection Piutang Dashboard
      </h3>

      <p class="text-muted mb-0">
        Monitoring penagihan piutang dan follow up collection client.
      </p>

    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <div class="row">

        <div class="col-md-3">
          <div class="alert alert-danger">
            <h4>Rp 320 JT</h4>
            Total Overdue
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-warning">
            <h4>18</h4>
            Invoice Belum Bayar
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-success">
            <h4>Rp 80 JT</h4>
            Collection Minggu Ini
          </div>
        </div>

        <div class="col-md-3">
          <div class="alert alert-info">
            <h4>42</h4>
            Reminder Sent
          </div>
        </div>

      </div>

      <div class="card">

        <div class="card-header bg-danger text-white">
          <h5 class="mb-0">
            Monitoring Collection Piutang
          </h5>
        </div>

        <div class="card-body table-responsive">

          <!--
            Desain:
            - Warning & danger dominan
            - Menunjukkan tekanan overdue
            - Dashboard collection finance
          -->

          <table class="table table-bordered table-hover align-middle">

            <thead class="table-dark text-center">
              <tr>
                <th>Client</th>
                <th>Invoice</th>
                <th>Nominal</th>
                <th>Jatuh Tempo</th>
                <th>Umur Piutang</th>
                <th>Status Collection</th>
              </tr>
            </thead>

            <tbody>

              <tr>
                <td>PT Makmur Jaya</td>
                <td>INV-022</td>
                <td>Rp 48.000.000</td>
                <td>01/05/2026</td>
                <td>7 Hari</td>
                <td>
                  <span class="badge bg-warning text-dark">
                    Reminder 2
                  </span>
                </td>
              </tr>

              <tr>
                <td>CV Berkah</td>
                <td>INV-031</td>
                <td>Rp 18.500.000</td>
                <td>25/04/2026</td>
                <td>13 Hari</td>
                <td>
                  <span class="badge bg-danger">
                    Escalated
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
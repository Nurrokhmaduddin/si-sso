<!-- ========================================================= -->
<!-- PAGE : finance-dashboard.php -->
<!-- STYLE : Executive Financial Dashboard -->
<!-- FOKUS :
     - Financial KPI
     - Liquidity & profitability
     - Financial health monitoring
     - Executive insight
-->
<!-- ========================================================= -->

<?php $page = 'finance-dashboard'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <!-- ===================================================== -->
  <!-- CONTENT HEADER -->
  <!-- ===================================================== -->
  <section class="content-header">
    <div class="container-fluid">

      <div class="d-flex justify-content-between align-items-center">

        <div>
          <h3 class="mb-0">
            Finance Executive Dashboard
          </h3>

          <p class="text-muted mb-0">
            Monitoring kondisi keuangan perusahaan secara realtime dan periodik.
          </p>
        </div>

        <div>
          <button class="btn btn-primary">
            <i class="fas fa-download"></i>
            Export Dashboard
          </button>
        </div>

      </div>

    </div>
  </section>

  <!-- ===================================================== -->
  <!-- MAIN CONTENT -->
  <!-- ===================================================== -->
  <section class="content">
    <div class="container-fluid">

      <!-- ================================================= -->
      <!-- KPI FINANCIAL -->
      <!-- ================================================= -->

      <!--
        =====================================================
        CASH POSITION
        =====================================================

        FORMULA:
        cash + bank balance

        SUM(
          kas.saldo +
          bank.saldo
        )

        TUJUAN:
        melihat posisi uang tersedia saat ini.
      -->

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-success">

            <div class="inner">
              <h3>Rp 1.28 M</h3>
              <p>Cash Position</p>
            </div>

            <div class="icon">
              <i class="fas fa-wallet"></i>
            </div>

          </div>
        </div>

        <!--
          ===================================================
          CURRENT RATIO
          ===================================================

          current assets / current liabilities

          current ratio = 2.0
          artinya:
          aset lancar 2x lebih besar dari kewajiban lancar.

          Current Asset:
          - cash
          - bank
          - inventory
          - receivable

          Current Liability:
          - hutang usaha
          - hutang jangka pendek
        -->

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-info">

            <div class="inner">
              <h3>2.48</h3>
              <p>Current Ratio</p>
            </div>

            <div class="icon">
              <i class="fas fa-balance-scale"></i>
            </div>

          </div>
        </div>

        <!--
          ===================================================
          QUICK RATIO
          ===================================================

          (cash + bank + receivable)
          /
          current liabilities

          inventory tidak dihitung.

          Fokus:
          kemampuan bayar cepat.
        -->

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-warning">

            <div class="inner">
              <h3>1.72</h3>
              <p>Quick Ratio</p>
            </div>

            <div class="icon">
              <i class="fas fa-bolt"></i>
            </div>

          </div>
        </div>

        <!--
          ===================================================
          DER
          ===================================================

          debt / equity

          melihat tingkat hutang dibanding modal.
        -->

        <div class="col-lg-3 col-md-6">
          <div class="small-box bg-danger">

            <div class="inner">
              <h3>0.62</h3>
              <p>Debt to Equity Ratio</p>
            </div>

            <div class="icon">
              <i class="fas fa-chart-pie"></i>
            </div>

          </div>
        </div>

      </div>

      <!-- ================================================= -->
      <!-- SECOND KPI -->
      <!-- ================================================= -->

      <div class="row">

        <!--
          ===================================================
          GROSS MARGIN
          ===================================================

          (sales - HPP)
          /
          sales

          menunjukkan profit kotor.
        -->

        <div class="col-lg-3 col-md-6">
          <div class="info-box">

            <span class="info-box-icon bg-primary">
              <i class="fas fa-coins"></i>
            </span>

            <div class="info-box-content">
              <span class="info-box-text">
                Gross Margin
              </span>

              <span class="info-box-number">
                48%
              </span>
            </div>

          </div>
        </div>

        <!--
          ===================================================
          NET MARGIN
          ===================================================

          laba bersih / sales
        -->

        <div class="col-lg-3 col-md-6">
          <div class="info-box">

            <span class="info-box-icon bg-success">
              <i class="fas fa-money-bill-wave"></i>
            </span>

            <div class="info-box-content">
              <span class="info-box-text">
                Net Margin
              </span>

              <span class="info-box-number">
                18%
              </span>
            </div>

          </div>
        </div>

        <!--
          ===================================================
          ROI
          ===================================================

          laba bersih / investasi
        -->

        <div class="col-lg-3 col-md-6">
          <div class="info-box">

            <span class="info-box-icon bg-warning">
              <i class="fas fa-chart-line"></i>
            </span>

            <div class="info-box-content">
              <span class="info-box-text">
                ROI
              </span>

              <span class="info-box-number">
                22%
              </span>
            </div>

          </div>
        </div>

        <!--
          ===================================================
          EXPENSE RATIO
          ===================================================

          total expense / revenue
        -->

        <div class="col-lg-3 col-md-6">
          <div class="info-box">

            <span class="info-box-icon bg-danger">
              <i class="fas fa-file-invoice-dollar"></i>
            </span>

            <div class="info-box-content">
              <span class="info-box-text">
                Expense Ratio
              </span>

              <span class="info-box-number">
                31%
              </span>
            </div>

          </div>
        </div>

      </div>

      <!-- ================================================= -->
      <!-- FINANCIAL MONITORING -->
      <!-- ================================================= -->

      <div class="row">

        <div class="col-md-6">

          <div class="card card-danger">

            <div class="card-header">
              <h3 class="card-title">
                Receivable Monitoring
              </h3>
            </div>

            <div class="card-body">

              <table class="table table-bordered">

                <thead class="table-dark text-center">
                  <tr>
                    <th>Category</th>
                    <th>Total</th>
                  </tr>
                </thead>

                <tbody>

                  <tr>
                    <td>Overdue Invoice</td>
                    <td>Rp 120.000.000</td>
                  </tr>

                  <tr>
                    <td>Client Overdue</td>
                    <td>18 Client</td>
                  </tr>

                  <tr>
                    <td>High Risk Invoice</td>
                    <td>Rp 45.000.000</td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

        <div class="col-md-6">

          <div class="card card-warning">

            <div class="card-header">
              <h3 class="card-title">
                Payable Monitoring
              </h3>
            </div>

            <div class="card-body">

              <table class="table table-bordered">

                <thead class="table-dark text-center">
                  <tr>
                    <th>Category</th>
                    <th>Total</th>
                  </tr>
                </thead>

                <tbody>

                  <tr>
                    <td>Due Supplier Bill</td>
                    <td>Rp 85.000.000</td>
                  </tr>

                  <tr>
                    <td>Urgent Payment</td>
                    <td>Rp 20.000.000</td>
                  </tr>

                  <tr>
                    <td>Pending Approval</td>
                    <td>12 Bills</td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- EXECUTIVE ALERT -->
      <!-- ================================================= -->

      <div class="row">

        <div class="col-md-12">

          <div class="alert alert-warning">

            <h5>
              <i class="icon fas fa-exclamation-triangle"></i>
              Financial Warning
            </h5>

            Expense ratio meningkat 12% dibanding bulan lalu.
            Perlu kontrol operational cost dan purchase cost.

          </div>

        </div>

      </div>

    </div>
  </section>

</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
<!-- =========================================================
FILE : dashboard-sales.php
FOKUS HALAMAN:
1. Apakah penjualan hari ini sehat?
2. Target tercapai atau tidak?
3. Produk mana paling laku?
4. Customer mana paling aktif?
5. Piutang aman atau berbahaya?
6. Sales/order naik atau turun?
7. Area/cabang mana paling kuat?
8. Apa warning terbesar hari ini?
========================================================= -->

<?php $page='dashboard-sales';?>

<?php include "1header.php"; ?>
<?php include "2navbar.php"; ?>
<?php include "3sidebar.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>

.dashboard-title{
  font-size:28px;
  font-weight:700;
}

.dashboard-subtitle{
  color:#6c757d;
  font-size:14px;
}

.executive-card{
  border:none;
  border-radius:18px;
  overflow:hidden;
  transition:.25s;
}

.executive-card:hover{
  transform:translateY(-3px);
}

.kpi-value{
  font-size:28px;
  font-weight:700;
  line-height:1;
}

.kpi-label{
  font-size:13px;
  color:#6c757d;
  text-transform:uppercase;
  letter-spacing:.5px;
}

.kpi-trend{
  font-size:13px;
  font-weight:600;
}

.card-title-custom{
  font-size:16px;
  font-weight:600;
}

.warning-item{
  padding:12px;
  border-radius:12px;
  margin-bottom:10px;
}

.table td,
.table th{
  vertical-align:middle;
}

.progress{
  height:8px;
  border-radius:20px;
}

</style>

<!-- =========================================================
CONTENT WRAPPER
========================================================= -->
<div class="content-wrapper">

  <section class="content pt-3">
    <div class="container-fluid">

      <!-- =====================================================
      HEADER
      ====================================================== -->
      <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
          <div class="dashboard-title">
            📈 Sales Dashboard
          </div>

          <div class="dashboard-subtitle">
            Fokus membaca:
            kondisi penjualan, target, customer,
            piutang, dan performa bisnis penjualan.
          </div>
        </div>

        <div>
          <button class="btn btn-primary shadow-sm">
            <i class="fas fa-sync-alt mr-1"></i>
            Refresh Data
          </button>
        </div>

      </div>

      <!-- =====================================================
      KPI UTAMA
      ====================================================== -->
      <div class="row">

        <!-- SALES TODAY -->
        <div class="col-lg-3 col-md-6 mb-3">
          <div class="card executive-card shadow-sm">

            <div class="card-body">

              <div class="d-flex justify-content-between">

                <div>
                  <div class="kpi-label">
                    Penjualan Hari Ini
                  </div>

                  <div class="kpi-value text-success mt-2">
                    Rp 42,8 Jt
                  </div>

                  <div class="kpi-trend text-success mt-2">
                    ↑ +12.4% dari kemarin
                  </div>
                </div>

                <div class="text-success">
                  <i class="fas fa-cash-register fa-2x"></i>
                </div>

              </div>

            </div>

          </div>
        </div>

        <!-- ORDER -->
        <div class="col-lg-3 col-md-6 mb-3">
          <div class="card executive-card shadow-sm">

            <div class="card-body">

              <div class="d-flex justify-content-between">

                <div>
                  <div class="kpi-label">
                    Total Order Hari Ini
                  </div>

                  <div class="kpi-value text-primary mt-2">
                    186
                  </div>

                  <div class="kpi-trend text-primary mt-2">
                    ↑ 24 order baru
                  </div>
                </div>

                <div class="text-primary">
                  <i class="fas fa-shopping-cart fa-2x"></i>
                </div>

              </div>

            </div>

          </div>
        </div>

        <!-- PIUTANG -->
        <div class="col-lg-3 col-md-6 mb-3">
          <div class="card executive-card shadow-sm">

            <div class="card-body">

              <div class="d-flex justify-content-between">

                <div>
                  <div class="kpi-label">
                    Outstanding Piutang
                  </div>

                  <div class="kpi-value text-warning mt-2">
                    Rp 120 Jt
                  </div>

                  <div class="kpi-trend text-warning mt-2">
                    14 invoice jatuh tempo
                  </div>
                </div>

                <div class="text-warning">
                  <i class="fas fa-file-invoice-dollar fa-2x"></i>
                </div>

              </div>

            </div>

          </div>
        </div>

        <!-- TARGET -->
        <div class="col-lg-3 col-md-6 mb-3">
          <div class="card executive-card shadow-sm">

            <div class="card-body">

              <div class="d-flex justify-content-between">

                <div>
                  <div class="kpi-label">
                    Progress Target Bulan Ini
                  </div>

                  <div class="kpi-value text-info mt-2">
                    78%
                  </div>

                  <div class="progress mt-3">
                    <div class="progress-bar bg-info" style="width:78%"></div>
                  </div>
                </div>

                <div class="text-info">
                  <i class="fas fa-bullseye fa-2x"></i>
                </div>

              </div>

            </div>

          </div>
        </div>

      </div>

      <!-- =====================================================
      GRAFIK
      ====================================================== -->
      <div class="row">

        <!-- SALES TREND -->
        <div class="col-lg-8 mb-4">

          <div class="card shadow-sm executive-card">

            <div class="card-header bg-white border-0">

              <div class="card-title-custom">
                📊 Tren Penjualan 12 Bulan
              </div>

            </div>

            <div class="card-body">

              <canvas id="salesChart" height="110"></canvas>

            </div>

          </div>

        </div>

        <!-- WARNING -->
        <div class="col-lg-4 mb-4">

          <div class="card shadow-sm executive-card">

            <div class="card-header bg-white border-0">

              <div class="card-title-custom">
                ⚠ Warning Hari Ini
              </div>

            </div>

            <div class="card-body">

              <div class="warning-item bg-danger-light border">
                <b class="text-danger">
                  Piutang lewat jatuh tempo
                </b>
                <div class="small text-muted">
                  14 invoice belum dibayar > 30 hari
                </div>
              </div>

              <div class="warning-item bg-warning-light border">
                <b class="text-warning">
                  Penjualan area Barat turun
                </b>
                <div class="small text-muted">
                  Turun 18% dibanding minggu lalu
                </div>
              </div>

              <div class="warning-item bg-info-light border">
                <b class="text-info">
                  Stok produk fast moving menipis
                </b>
                <div class="small text-muted">
                  5 produk hampir habis
                </div>
              </div>

            </div>

          </div>

        </div>

      </div>

      <!-- =====================================================
      TABLE SECTION
      ====================================================== -->
      <div class="row">

        <!-- TOP PRODUCT -->
        <div class="col-lg-6 mb-4">

          <div class="card shadow-sm executive-card">

            <div class="card-header bg-white border-0 d-flex justify-content-between">

              <div class="card-title-custom">
                🥇 Produk Paling Laku
              </div>

              <small class="text-muted">
                Last 30 Days
              </small>

            </div>

            <div class="card-body p-0">

              <table class="table table-hover mb-0">

                <thead class="table-light">

                  <tr>
                    <th>Produk</th>
                    <th>Qty</th>
                    <th>Total</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td>PRD-001 - Oli Mesin</td>
                    <td>1.240</td>
                    <td>Rp 92 Jt</td>
                  </tr>

                  <tr>
                    <td>PRD-002 - Ban Motor</td>
                    <td>980</td>
                    <td>Rp 74 Jt</td>
                  </tr>

                  <tr>
                    <td>PRD-003 - Kampas Rem</td>
                    <td>860</td>
                    <td>Rp 58 Jt</td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

        <!-- TOP CUSTOMER -->
        <div class="col-lg-6 mb-4">

          <div class="card shadow-sm executive-card">

            <div class="card-header bg-white border-0 d-flex justify-content-between">

              <div class="card-title-custom">
                🏪 Customer Terbesar
              </div>

              <small class="text-muted">
                Last 30 Days
              </small>

            </div>

            <div class="card-body p-0">

              <table class="table table-hover mb-0">

                <thead class="table-light">

                  <tr>
                    <th>Customer</th>
                    <th>Transaksi</th>
                    <th>Total</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td>Toko Sinar Jaya</td>
                    <td>48</td>
                    <td>Rp 120 Jt</td>
                  </tr>

                  <tr>
                    <td>Toko Maju Motor</td>
                    <td>41</td>
                    <td>Rp 98 Jt</td>
                  </tr>

                  <tr>
                    <td>Toko Berkah Abadi</td>
                    <td>38</td>
                    <td>Rp 86 Jt</td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

      </div>

    </div>
  </section>

</div>

<script>

const ctx = document.getElementById('salesChart');

new Chart(ctx, {

  type: 'line',

  data: {

    labels: [
      'Jan','Feb','Mar','Apr',
      'Mei','Jun','Jul','Ags',
      'Sep','Okt','Nov','Des'
    ],

    datasets: [

      {
        label: 'Penjualan',
        data: [
          120,140,135,170,
          180,220,210,240,
          260,250,280,300
        ],
        borderColor:'#007bff',
        backgroundColor:'rgba(0,123,255,.1)',
        tension:.4,
        fill:true
      }

    ]

  },

  options: {

    responsive:true,

    plugins:{
      legend:{
        position:'top'
      }
    }

  }

});

</script>

<?php include "4footer.php"; ?>
<?php include "5script.php"; ?>
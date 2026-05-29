<!-- 
=========================================================
EXECUTIVE DASHBOARD
=========================================================

Fokus informasi executive:
1. Hari ini bisnis untung atau tidak?
2. Penjualan naik atau turun?
3. Cash aman?
4. Barang bergerak cepat?
5. Piutang berbahaya?
6. Cabang/toko mana terbaik?
7. Supplier mana dominan?
8. Warning terbesar hari ini?
=========================================================
-->

<?php $page='dashboard-executive';?>

<?php include "1header.php"; ?>
<?php include "2navbar.php"; ?>
<?php include('3sidebar.php');?>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="content-wrapper">

  <!-- ===================================================== -->
  <!-- CONTENT HEADER -->
  <!-- ===================================================== -->
  <section class="content-header">
    <div class="container-fluid">

      <div class="d-flex justify-content-between align-items-center">

        <div>
          <h1 class="mb-1">
            <i class="fas fa-chart-line mr-2 text-primary"></i>
            Executive Dashboard
          </h1>

          <p class="text-muted mb-0">
            Ringkasan kondisi bisnis realtime dan performa perusahaan.
          </p>
        </div>

        <div>
          <button class="btn btn-outline-primary btn-sm">
            <i class="fas fa-sync-alt mr-1"></i>
            Refresh Data
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

<style>

.exec-card{
  border:none;
  border-radius:18px;
  overflow:hidden;
  transition:.25s;
}

.exec-card:hover{
  transform:translateY(-3px);
  box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.exec-icon{
  width:55px;
  height:55px;
  border-radius:14px;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:22px;
}

.metric-value{
  font-size:1.6rem;
  font-weight:700;
  line-height:1.2;
}

.metric-label{
  font-size:.8rem;
  text-transform:uppercase;
  letter-spacing:.5px;
  color:#6c757d;
}

.warning-item{
  border-left:4px solid #dc3545;
  background:#fff5f5;
}

.good-item{
  border-left:4px solid #198754;
  background:#f4fff8;
}

.table td,
.table th{
  vertical-align:middle;
}

</style>

      <!-- ================================================= -->
      <!-- KPI SECTION -->
      <!-- ================================================= -->
      <div class="row">

        <!-- PROFIT TODAY -->
        <div class="col-lg-3 col-md-6">

          <div class="card exec-card shadow-sm">

            <div class="card-body">

              <div class="d-flex justify-content-between">

                <div>
                  <div class="metric-label">
                    Profit Hari Ini
                  </div>

                  <div class="metric-value text-success">
                    + Rp 12,5 Jt
                  </div>

                  <small class="text-success">
                    <i class="fas fa-arrow-up"></i>
                    +18% dari kemarin
                  </small>
                </div>

                <div class="exec-icon bg-success">
                  <i class="fas fa-wallet text-white"></i>
                </div>

              </div>

            </div>

          </div>

        </div>

        <!-- SALES -->
        <div class="col-lg-3 col-md-6">

          <div class="card exec-card shadow-sm">

            <div class="card-body">

              <div class="d-flex justify-content-between">

                <div>
                  <div class="metric-label">
                    Penjualan Hari Ini
                  </div>

                  <div class="metric-value text-primary">
                    Rp 82 Jt
                  </div>

                  <small class="text-primary">
                    <i class="fas fa-arrow-up"></i>
                    Trend naik
                  </small>
                </div>

                <div class="exec-icon bg-primary">
                  <i class="fas fa-shopping-cart text-white"></i>
                </div>

              </div>

            </div>

          </div>

        </div>

        <!-- CASH -->
        <div class="col-lg-3 col-md-6">

          <div class="card exec-card shadow-sm">

            <div class="card-body">

              <div class="d-flex justify-content-between">

                <div>
                  <div class="metric-label">
                    Cash Available
                  </div>

                  <div class="metric-value text-info">
                    Rp 245 Jt
                  </div>

                  <small class="text-success">
                    Cash aman
                  </small>
                </div>

                <div class="exec-icon bg-info">
                  <i class="fas fa-coins text-white"></i>
                </div>

              </div>

            </div>

          </div>

        </div>

        <!-- PIUTANG -->
        <div class="col-lg-3 col-md-6">

          <div class="card exec-card shadow-sm">

            <div class="card-body">

              <div class="d-flex justify-content-between">

                <div>
                  <div class="metric-label">
                    Piutang Jatuh Tempo
                  </div>

                  <div class="metric-value text-danger">
                    Rp 48 Jt
                  </div>

                  <small class="text-danger">
                    12 invoice overdue
                  </small>
                </div>

                <div class="exec-icon bg-danger">
                  <i class="fas fa-exclamation-triangle text-white"></i>
                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- CHART -->
      <!-- ================================================= -->
      <div class="row">

        <!-- SALES TREND -->
        <div class="col-lg-8">

          <div class="card shadow-sm">

            <div class="card-header bg-white border-0">

              <div class="d-flex justify-content-between align-items-center">

                <h3 class="card-title">
                  <i class="fas fa-chart-bar mr-1"></i>
                  Trend Penjualan vs Biaya
                </h3>

                <small class="text-muted">
                  Last 12 Months
                </small>

              </div>

            </div>

            <div class="card-body">

              <canvas id="executiveChart" height="120"></canvas>

            </div>

          </div>

        </div>

        <!-- WARNING PANEL -->
        <div class="col-lg-4">

          <div class="card shadow-sm">

            <div class="card-header bg-white border-0">

              <h3 class="card-title">
                <i class="fas fa-bell mr-1"></i>
                Executive Alert
              </h3>

            </div>

            <div class="card-body p-2">

              <div class="p-3 rounded mb-2 warning-item">
                <strong>Piutang Overdue Tinggi</strong><br>
                <small>
                  12 invoice melewati jatuh tempo.
                </small>
              </div>

              <div class="p-3 rounded mb-2 warning-item">
                <strong>Stok Menipis</strong><br>
                <small>
                  8 produk hampir habis.
                </small>
              </div>

              <div class="p-3 rounded mb-2 good-item">
                <strong>Penjualan Naik</strong><br>
                <small>
                  Penjualan naik 18% minggu ini.
                </small>
              </div>

              <div class="p-3 rounded good-item">
                <strong>Cabang Timur Terbaik</strong><br>
                <small>
                  Growth tertinggi bulan ini.
                </small>
              </div>

            </div>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- CONSOLIDATION TABLE -->
      <!-- ================================================= -->
      <div class="row">

        <!-- TOP BRANCH -->
        <div class="col-lg-6">

          <div class="card shadow-sm">

            <div class="card-header bg-white border-0 d-flex justify-content-between">

              <h3 class="card-title">
                <i class="fas fa-store mr-1"></i>
                Top Cabang / Toko
              </h3>

              <small class="text-muted">
                Monthly Revenue
              </small>

            </div>

            <div class="card-body p-0">

              <table class="table table-hover mb-0">

                <thead class="table-light">

                  <tr>
                    <th width="70">Rank</th>
                    <th>Cabang</th>
                    <th class="text-right">Revenue</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td><span class="badge bg-success">1</span></td>
                    <td>Cabang Jakarta</td>
                    <td class="text-right">Rp 420 Jt</td>
                  </tr>

                  <tr>
                    <td><span class="badge bg-primary">2</span></td>
                    <td>Cabang Bandung</td>
                    <td class="text-right">Rp 360 Jt</td>
                  </tr>

                  <tr>
                    <td><span class="badge bg-secondary">3</span></td>
                    <td>Cabang Surabaya</td>
                    <td class="text-right">Rp 310 Jt</td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

        <!-- TOP SUPPLIER -->
        <div class="col-lg-6">

          <div class="card shadow-sm">

            <div class="card-header bg-white border-0 d-flex justify-content-between">

              <h3 class="card-title">
                <i class="fas fa-truck mr-1"></i>
                Supplier Dominan
              </h3>

              <small class="text-muted">
                Purchase Value
              </small>

            </div>

            <div class="card-body p-0">

              <table class="table table-hover mb-0">

                <thead class="table-light">

                  <tr>
                    <th width="70">Rank</th>
                    <th>Supplier</th>
                    <th class="text-right">Total</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td><span class="badge bg-success">1</span></td>
                    <td>PT ABC Distribusi</td>
                    <td class="text-right">Rp 220 Jt</td>
                  </tr>

                  <tr>
                    <td><span class="badge bg-primary">2</span></td>
                    <td>PT Sumber Niaga</td>
                    <td class="text-right">Rp 180 Jt</td>
                  </tr>

                  <tr>
                    <td><span class="badge bg-secondary">3</span></td>
                    <td>CV Makmur Sentosa</td>
                    <td class="text-right">Rp 155 Jt</td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

      </div>

      <!-- ================================================= -->
      <!-- FAST MOVING -->
      <!-- ================================================= -->
      <div class="row">

        <div class="col-lg-12">

          <div class="card shadow-sm">

            <div class="card-header bg-white border-0 d-flex justify-content-between">

              <h3 class="card-title">
                <i class="fas fa-box-open mr-1"></i>
                Fast Moving Product
              </h3>

              <small class="text-muted">
                Last 30 Days
              </small>

            </div>

            <div class="card-body p-0">

              <table class="table table-hover mb-0">

                <thead class="table-light">

                  <tr>
                    <th>Produk</th>
                    <th>Qty Sold</th>
                    <th>Stock</th>
                    <th>Status</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td>PRD-001 - Oli Mesin</td>
                    <td>1.250</td>
                    <td>120</td>
                    <td>
                      <span class="badge bg-danger">
                        Restock Needed
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>PRD-002 - Ban Motor</td>
                    <td>980</td>
                    <td>340</td>
                    <td>
                      <span class="badge bg-success">
                        Stable
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>PRD-003 - Kampas Rem</td>
                    <td>860</td>
                    <td>90</td>
                    <td>
                      <span class="badge bg-warning">
                        Low Stock
                      </span>
                    </td>
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

<!-- ===================================================== -->
<!-- CHART SCRIPT -->
<!-- ===================================================== -->
<script>

const ctx = document.getElementById('executiveChart');

new Chart(ctx, {

    type: 'bar',

    data: {

        labels: [
          'Jan','Feb','Mar','Apr','Mei','Jun',
          'Jul','Agu','Sep','Okt','Nov','Des'
        ],

        datasets: [

          {
            label: 'Penjualan',
            data: [120,150,170,160,190,210,220,230,240,250,260,280],
            backgroundColor: 'rgba(13,110,253,.8)'
          },

          {
            label: 'Biaya',
            data: [80,90,100,95,120,130,140,150,155,160,170,180],
            backgroundColor: 'rgba(220,53,69,.8)'
          },

          {
            label: 'Profit',
            data: [40,60,70,65,70,80,80,80,85,90,90,100],
            backgroundColor: 'rgba(25,135,84,.8)'
          }

        ]
    },

    options: {

      responsive:true,

      plugins:{

        legend:{
          position:'top'
        }

      },

      scales:{
        y:{
          beginAtZero:true
        }
      }

    }

});

</script>

<?php include "4footer.php"; ?>
<?php include "5script.php"; ?>
<!-- =========================================================
FILE : dashboard-finance.php

FOKUS HALAMAN:
1. Bisnis untung atau rugi?
2. Cash flow aman?
3. Pengeluaran terbesar apa?
4. Piutang & hutang sehat?
5. Margin naik atau turun?
6. Beban operasional terlalu besar?
7. Cabang paling profit?
8. Warning keuangan hari ini apa?
========================================================= -->

<?php $page='dashboard-finance';?>

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

.finance-card{
  border:none;
  border-radius:18px;
  overflow:hidden;
  transition:.25s;
}

.finance-card:hover{
  transform:translateY(-3px);
}

.kpi-label{
  font-size:12px;
  text-transform:uppercase;
  color:#6c757d;
  letter-spacing:.5px;
}

.kpi-value{
  font-size:28px;
  font-weight:700;
  line-height:1;
}

.kpi-info{
  font-size:13px;
  font-weight:600;
}

.section-title{
  font-size:16px;
  font-weight:600;
}

.warning-box{
  border-radius:14px;
  padding:14px;
  margin-bottom:12px;
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
            💰 Finance Dashboard
          </div>

          <div class="dashboard-subtitle">
            Fokus membaca:
            profit, cash flow, biaya,
            piutang, hutang, dan kondisi kesehatan keuangan bisnis.
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
      KPI SECTION
      ====================================================== -->
      <div class="row">

        <!-- PROFIT -->
        <div class="col-lg-3 col-md-6 mb-3">

          <div class="card finance-card shadow-sm">

            <div class="card-body">

              <div class="d-flex justify-content-between">

                <div>

                  <div class="kpi-label">
                    Net Profit Bulan Ini
                  </div>

                  <div class="kpi-value text-success mt-2">
                    Rp 248 Jt
                  </div>

                  <div class="kpi-info text-success mt-2">
                    ↑ Naik 18% dari bulan lalu
                  </div>

                </div>

                <div class="text-success">
                  <i class="fas fa-chart-line fa-2x"></i>
                </div>

              </div>

            </div>

          </div>

        </div>

        <!-- CASH -->
        <div class="col-lg-3 col-md-6 mb-3">

          <div class="card finance-card shadow-sm">

            <div class="card-body">

              <div class="d-flex justify-content-between">

                <div>

                  <div class="kpi-label">
                    Cash Available
                  </div>

                  <div class="kpi-value text-primary mt-2">
                    Rp 1,2 M
                  </div>

                  <div class="kpi-info text-primary mt-2">
                    Cash flow masih aman
                  </div>

                </div>

                <div class="text-primary">
                  <i class="fas fa-wallet fa-2x"></i>
                </div>

              </div>

            </div>

          </div>

        </div>

        <!-- PIUTANG -->
        <div class="col-lg-3 col-md-6 mb-3">

          <div class="card finance-card shadow-sm">

            <div class="card-body">

              <div class="d-flex justify-content-between">

                <div>

                  <div class="kpi-label">
                    Outstanding Piutang
                  </div>

                  <div class="kpi-value text-warning mt-2">
                    Rp 420 Jt
                  </div>

                  <div class="kpi-info text-warning mt-2">
                    18 invoice belum lunas
                  </div>

                </div>

                <div class="text-warning">
                  <i class="fas fa-file-invoice-dollar fa-2x"></i>
                </div>

              </div>

            </div>

          </div>

        </div>

        <!-- BEBAN -->
        <div class="col-lg-3 col-md-6 mb-3">

          <div class="card finance-card shadow-sm">

            <div class="card-body">

              <div class="d-flex justify-content-between">

                <div>

                  <div class="kpi-label">
                    Beban Operasional
                  </div>

                  <div class="kpi-value text-danger mt-2">
                    Rp 182 Jt
                  </div>

                  <div class="kpi-info text-danger mt-2">
                    ↑ Naik 12% bulan ini
                  </div>

                </div>

                <div class="text-danger">
                  <i class="fas fa-money-bill-wave fa-2x"></i>
                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

      <!-- =====================================================
      GRAFIK & WARNING
      ====================================================== -->
      <div class="row">

        <!-- GRAFIK -->
        <div class="col-lg-8 mb-4">

          <div class="card finance-card shadow-sm">

            <div class="card-header bg-white border-0">

              <div class="section-title">
                📊 Grafik Profit vs Expense
              </div>

            </div>

            <div class="card-body">

              <canvas id="financeChart" height="110"></canvas>

            </div>

          </div>

        </div>

        <!-- WARNING -->
        <div class="col-lg-4 mb-4">

          <div class="card finance-card shadow-sm">

            <div class="card-header bg-white border-0">

              <div class="section-title">
                ⚠ Warning Finance
              </div>

            </div>

            <div class="card-body">

              <div class="warning-box border bg-light">

                <div class="font-weight-bold text-danger">
                  Cash out terlalu tinggi
                </div>

                <div class="small text-muted">
                  Pengeluaran minggu ini naik 24%
                </div>

              </div>

              <div class="warning-box border bg-light">

                <div class="font-weight-bold text-warning">
                  Piutang jatuh tempo
                </div>

                <div class="small text-muted">
                  8 customer belum bayar > 30 hari
                </div>

              </div>

              <div class="warning-box border bg-light">

                <div class="font-weight-bold text-info">
                  Margin cabang turun
                </div>

                <div class="small text-muted">
                  Cabang Barat margin turun 12%
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

        <!-- TOP EXPENSE -->
        <div class="col-lg-6 mb-4">

          <div class="card finance-card shadow-sm">

            <div class="card-header bg-white border-0 d-flex justify-content-between">

              <div class="section-title">
                💸 Pengeluaran Terbesar
              </div>

              <small class="text-muted">
                Last 30 Days
              </small>

            </div>

            <div class="card-body p-0">

              <table class="table table-hover mb-0">

                <thead class="table-light">

                  <tr>
                    <th>Kategori</th>
                    <th>Persentase</th>
                    <th>Total</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td>Pembelian Barang</td>
                    <td>48%</td>
                    <td>Rp 420 Jt</td>
                  </tr>

                  <tr>
                    <td>Gaji Karyawan</td>
                    <td>22%</td>
                    <td>Rp 180 Jt</td>
                  </tr>

                  <tr>
                    <td>Operasional Gudang</td>
                    <td>14%</td>
                    <td>Rp 94 Jt</td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

        <!-- CABANG -->
        <div class="col-lg-6 mb-4">

          <div class="card finance-card shadow-sm">

            <div class="card-header bg-white border-0 d-flex justify-content-between">

              <div class="section-title">
                🏪 Profit Cabang
              </div>

              <small class="text-muted">
                Last 30 Days
              </small>

            </div>

            <div class="card-body p-0">

              <table class="table table-hover mb-0">

                <thead class="table-light">

                  <tr>
                    <th>Cabang</th>
                    <th>Revenue</th>
                    <th>Net Profit</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td>Cabang Pusat</td>
                    <td>Rp 1,2 M</td>
                    <td class="text-success">
                      Rp 320 Jt
                    </td>
                  </tr>

                  <tr>
                    <td>Cabang Barat</td>
                    <td>Rp 840 Jt</td>
                    <td class="text-success">
                      Rp 180 Jt
                    </td>
                  </tr>

                  <tr>
                    <td>Cabang Timur</td>
                    <td>Rp 720 Jt</td>
                    <td class="text-warning">
                      Rp 82 Jt
                    </td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

      </div>

      <!-- =====================================================
      CASHFLOW
      ====================================================== -->
      <div class="row">

        <div class="col-lg-12 mb-4">

          <div class="card finance-card shadow-sm">

            <div class="card-header bg-white border-0 d-flex justify-content-between">

              <div class="section-title">
                💵 Cash Flow Monitoring
              </div>

              <small class="text-muted">
                Current Month
              </small>

            </div>

            <div class="card-body p-0">

              <table class="table table-hover mb-0">

                <thead class="table-light">

                  <tr>
                    <th>Keterangan</th>
                    <th>Cash In</th>
                    <th>Cash Out</th>
                    <th>Net</th>
                    <th>Progress</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>

                    <td>Operasional</td>
                    <td>Rp 820 Jt</td>
                    <td>Rp 610 Jt</td>

                    <td class="text-success">
                      + Rp 210 Jt
                    </td>

                    <td width="220">

                      <div class="progress">
                        <div class="progress-bar bg-success" style="width:82%"></div>
                      </div>

                    </td>

                  </tr>

                  <tr>

                    <td>Pembelian</td>
                    <td>Rp 120 Jt</td>
                    <td>Rp 280 Jt</td>

                    <td class="text-danger">
                      - Rp 160 Jt
                    </td>

                    <td>

                      <div class="progress">
                        <div class="progress-bar bg-danger" style="width:48%"></div>
                      </div>

                    </td>

                  </tr>

                  <tr>

                    <td>Investasi</td>
                    <td>Rp 40 Jt</td>
                    <td>Rp 90 Jt</td>

                    <td class="text-warning">
                      - Rp 50 Jt
                    </td>

                    <td>

                      <div class="progress">
                        <div class="progress-bar bg-warning" style="width:65%"></div>
                      </div>

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

<!-- =========================================================
CHART
========================================================= -->
<script>

const financeCtx = document.getElementById('financeChart');

new Chart(financeCtx, {

  type: 'line',

  data: {

    labels:[
      'Jan','Feb','Mar','Apr',
      'Mei','Jun','Jul','Ags',
      'Sep','Okt','Nov','Des'
    ],

    datasets:[

      {

        label:'Revenue',

        data:[
          120,140,180,200,
          220,240,250,280,
          300,320,340,360
        ],

        borderColor:'#007bff',
        backgroundColor:'rgba(0,123,255,.1)',
        fill:true,
        tension:.4

      },

      {

        label:'Expense',

        data:[
          80,90,110,120,
          140,150,160,170,
          180,200,210,220
        ],

        borderColor:'#dc3545',
        backgroundColor:'rgba(220,53,69,.08)',
        fill:true,
        tension:.4

      },

      {

        label:'Net Profit',

        data:[
          40,50,70,80,
          80,90,90,110,
          120,120,130,140
        ],

        borderColor:'#28a745',
        backgroundColor:'rgba(40,167,69,.08)',
        fill:true,
        tension:.4

      }

    ]

  },

  options:{

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
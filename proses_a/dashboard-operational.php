<!-- =========================================================
FILE : dashboard-operational.php

FOKUS HALAMAN:
1. Operasional lancar atau tidak?
2. Barang masuk & keluar normal?
3. Stok aman?
4. Gudang bermasalah?
5. Pengiriman terlambat?
6. Barang fast moving habis?
7. Supplier telat supply?
8. Apa warning operasional hari ini?
========================================================= -->

<?php $page='dashboard-operational';?>

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

.dashboard-card{
  border:none;
  border-radius:18px;
  transition:.25s;
  overflow:hidden;
}

.dashboard-card:hover{
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
  line-height:1.1;
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
            📦 Operational Dashboard
          </div>

          <div class="dashboard-subtitle">
            Fokus membaca:
            pergerakan stok, pengiriman,
            gudang, pembelian, dan warning operasional.
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

        <!-- STOCK -->
        <div class="col-lg-3 col-md-6 mb-3">

          <div class="card dashboard-card shadow-sm">

            <div class="card-body">

              <div class="d-flex justify-content-between">

                <div>

                  <div class="kpi-label">
                    Total Nilai Stok
                  </div>

                  <div class="kpi-value text-primary mt-2">
                    Rp 1,8 M
                  </div>

                  <div class="kpi-info text-primary mt-2">
                    12.480 item aktif
                  </div>

                </div>

                <div class="text-primary">
                  <i class="fas fa-boxes fa-2x"></i>
                </div>

              </div>

            </div>

          </div>

        </div>

        <!-- BARANG KELUAR -->
        <div class="col-lg-3 col-md-6 mb-3">

          <div class="card dashboard-card shadow-sm">

            <div class="card-body">

              <div class="d-flex justify-content-between">

                <div>

                  <div class="kpi-label">
                    Barang Keluar Hari Ini
                  </div>

                  <div class="kpi-value text-success mt-2">
                    1.280
                  </div>

                  <div class="kpi-info text-success mt-2">
                    ↑ 14% dibanding kemarin
                  </div>

                </div>

                <div class="text-success">
                  <i class="fas fa-dolly-flatbed fa-2x"></i>
                </div>

              </div>

            </div>

          </div>

        </div>

        <!-- PENGIRIMAN -->
        <div class="col-lg-3 col-md-6 mb-3">

          <div class="card dashboard-card shadow-sm">

            <div class="card-body">

              <div class="d-flex justify-content-between">

                <div>

                  <div class="kpi-label">
                    Pengiriman Hari Ini
                  </div>

                  <div class="kpi-value text-info mt-2">
                    86
                  </div>

                  <div class="kpi-info text-info mt-2">
                    79 selesai dikirim
                  </div>

                </div>

                <div class="text-info">
                  <i class="fas fa-truck fa-2x"></i>
                </div>

              </div>

            </div>

          </div>

        </div>

        <!-- WARNING -->
        <div class="col-lg-3 col-md-6 mb-3">

          <div class="card dashboard-card shadow-sm">

            <div class="card-body">

              <div class="d-flex justify-content-between">

                <div>

                  <div class="kpi-label">
                    Warning Operasional
                  </div>

                  <div class="kpi-value text-danger mt-2">
                    12
                  </div>

                  <div class="kpi-info text-danger mt-2">
                    Stok & pengiriman bermasalah
                  </div>

                </div>

                <div class="text-danger">
                  <i class="fas fa-exclamation-triangle fa-2x"></i>
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

          <div class="card dashboard-card shadow-sm">

            <div class="card-header bg-white border-0">

              <div class="section-title">
                📊 Pergerakan Barang Masuk & Keluar
              </div>

            </div>

            <div class="card-body">

              <canvas id="operationalChart" height="110"></canvas>

            </div>

          </div>

        </div>

        <!-- WARNING -->
        <div class="col-lg-4 mb-4">

          <div class="card dashboard-card shadow-sm">

            <div class="card-header bg-white border-0">

              <div class="section-title">
                ⚠ Warning Hari Ini
              </div>

            </div>

            <div class="card-body">

              <div class="warning-box border bg-light">

                <div class="font-weight-bold text-danger">
                  Stok produk hampir habis
                </div>

                <div class="small text-muted">
                  12 produk fast moving tersisa < 10 pcs
                </div>

              </div>

              <div class="warning-box border bg-light">

                <div class="font-weight-bold text-warning">
                  Pengiriman terlambat
                </div>

                <div class="small text-muted">
                  7 delivery belum terkirim > 24 jam
                </div>

              </div>

              <div class="warning-box border bg-light">

                <div class="font-weight-bold text-info">
                  Supplier telat supply
                </div>

                <div class="small text-muted">
                  3 supplier belum kirim PO minggu ini
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

        <!-- FAST MOVING -->
        <div class="col-lg-6 mb-4">

          <div class="card dashboard-card shadow-sm">

            <div class="card-header bg-white border-0 d-flex justify-content-between">

              <div class="section-title">
                🚀 Produk Fast Moving
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
                    <th>Keluar</th>
                    <th>Stok</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td>PRD-001 - Oli Mesin</td>
                    <td>1.240</td>
                    <td>
                      <span class="badge badge-danger">
                        8 pcs
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>PRD-002 - Ban Motor</td>
                    <td>980</td>
                    <td>
                      <span class="badge badge-warning">
                        24 pcs
                      </span>
                    </td>
                  </tr>

                  <tr>
                    <td>PRD-003 - Kampas Rem</td>
                    <td>860</td>
                    <td>
                      <span class="badge badge-success">
                        120 pcs
                      </span>
                    </td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

        <!-- GUDANG -->
        <div class="col-lg-6 mb-4">

          <div class="card dashboard-card shadow-sm">

            <div class="card-header bg-white border-0 d-flex justify-content-between">

              <div class="section-title">
                🏭 Aktivitas Gudang
              </div>

              <small class="text-muted">
                Today
              </small>

            </div>

            <div class="card-body p-0">

              <table class="table table-hover mb-0">

                <thead class="table-light">

                  <tr>
                    <th>Gudang</th>
                    <th>Inbound</th>
                    <th>Outbound</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>
                    <td>Gudang Utama</td>
                    <td>480</td>
                    <td>620</td>
                  </tr>

                  <tr>
                    <td>Gudang Barat</td>
                    <td>320</td>
                    <td>510</td>
                  </tr>

                  <tr>
                    <td>Gudang Timur</td>
                    <td>290</td>
                    <td>410</td>
                  </tr>

                </tbody>

              </table>

            </div>

          </div>

        </div>

      </div>

      <!-- =====================================================
      SUPPLIER PERFORMANCE
      ====================================================== -->
      <div class="row">

        <div class="col-lg-12 mb-4">

          <div class="card dashboard-card shadow-sm">

            <div class="card-header bg-white border-0 d-flex justify-content-between">

              <div class="section-title">
                🚚 Supplier Performance
              </div>

              <small class="text-muted">
                Last 30 Days
              </small>

            </div>

            <div class="card-body p-0">

              <table class="table table-hover mb-0">

                <thead class="table-light">

                  <tr>
                    <th>Supplier</th>
                    <th>PO</th>
                    <th>On Time</th>
                    <th>Keterlambatan</th>
                    <th>Performance</th>
                  </tr>

                </thead>

                <tbody>

                  <tr>

                    <td>PT Sumber Makmur</td>
                    <td>42</td>
                    <td>38</td>
                    <td>4</td>

                    <td width="220">

                      <div class="progress">
                        <div class="progress-bar bg-success" style="width:90%"></div>
                      </div>

                    </td>

                  </tr>

                  <tr>

                    <td>PT Abadi Jaya</td>
                    <td>35</td>
                    <td>27</td>
                    <td>8</td>

                    <td>

                      <div class="progress">
                        <div class="progress-bar bg-warning" style="width:75%"></div>
                      </div>

                    </td>

                  </tr>

                  <tr>

                    <td>PT Nusantara Supply</td>
                    <td>28</td>
                    <td>19</td>
                    <td>9</td>

                    <td>

                      <div class="progress">
                        <div class="progress-bar bg-danger" style="width:60%"></div>
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

const operationalCtx = document.getElementById('operationalChart');

new Chart(operationalCtx, {

  type: 'bar',

  data: {

    labels: [
      'Jan','Feb','Mar','Apr',
      'Mei','Jun','Jul','Ags',
      'Sep','Okt','Nov','Des'
    ],

    datasets: [

      {
        label:'Barang Masuk',
        data:[
          120,140,180,170,
          210,240,250,260,
          280,290,300,320
        ],
        backgroundColor:'rgba(0,123,255,.7)'
      },

      {
        label:'Barang Keluar',
        data:[
          100,130,160,150,
          200,220,230,240,
          250,270,290,310
        ],
        backgroundColor:'rgba(40,167,69,.7)'
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
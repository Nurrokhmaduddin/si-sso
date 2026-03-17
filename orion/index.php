<?php $page='';?>
<?php include "1header.php"; ?>
<?php include "2navbar.php"; ?>
<?php include "3sidebar.php"; ?>
 <!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Content Wrapper -->
  <div class="content-wrapper" style="min-height: 600px;">
    <div class="content-header">
      <!-- <div class="container-fluid"> -->
        <!-- <h2 class="mb-0"><i class="far fa-smile"></i> Selamat Datang, [nama pengguna]</h2> -->
        <!-- <p class="text-muted">Sistem Informasi - Single Sign On (SSO)</p>         -->
      <!-- </div> -->
    </div>
    <section class="content">
      <div class="container-fluid">

        <style>
  .kpi-card {
  transition: all 0.25s ease;
}

.kpi-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.08);
}

.kpi-icon {
  position: absolute;
  top: 16px;
  right: 16px;
  font-size: 2rem;
  opacity: 0.25;
}
</style>


<div class="content">

  <!-- HEADER -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
      <h2 class="page-title mb-0">📊 Dashboard Penjualan</h2>
      <p class="page-description text-muted">
        Ringkasan performa penjualan dan transaksi tahun berjalan.
      </p>
    </div>
    <button class="btn btn-sm btn-outline-primary shadow-sm">🔄 Refresh Data</button>
  </div>

  <!-- KPI CARDS -->
<div class="row g-3 mb-4">

  <!-- TOP PRODUCT -->
  <div class="col-md-3">
    <div class="card kpi-card border-0 shadow-sm rounded-4 bg-success-subtle">
      <div class="card-body position-relative">
        <i class="bi bi-box-seam kpi-icon text-success"></i>
        <small class="text-success fw-semibold text-uppercase">Top Terjual</small>
        <h5 class="fw-bold mb-1 mt-2">Nama Produk</h5>
        <span class="badge bg-success">Last 365 Days</span>
      </div>
    </div>
  </div>

  <!-- TOP SALES -->
  <!--   <div class="col-md-3">
    <div class="card kpi-card border-0 shadow-sm rounded-4 bg-info-subtle">
      <div class="card-body position-relative">
        <i class="bi bi-person-badge kpi-icon text-primary"></i>
        <small class="text-info fw-semibold text-uppercase">Top Sales (Insentif)</small>
        <h5 class="fw-bold mb-1 mt-2">Nama Sales</h5>
        <span class="badge bg-info">Last 365 Days</span>
      </div>
    </div>
  </div> -->

<!-- TOP SUPPLIER -->
  <div class="col-md-3">
    <div class="card kpi-card border-0 shadow-sm rounded-4 bg-info-subtle">
      <div class="card-body position-relative">
        <i class="bi bi-person-badge kpi-icon text-primary"></i>
        <small class="text-info fw-semibold text-uppercase">Top Supplier</small>
        <h5 class="fw-bold mb-1 mt-2">Nama Supplier</h5>
        <span class="badge bg-info">Last 365 Days</span>
      </div>
    </div>
  </div>

  <!-- TOP CUSTOMER -->
  <div class="col-md-3">
    <div class="card kpi-card border-0 shadow-sm rounded-4 bg-primary-subtle">
      <div class="card-body position-relative">
        <i class="bi bi-shop kpi-icon text-primary"></i>
        <small class="text-primary fw-semibold text-uppercase">
          Top Toko
        </small>
        <h5 class="fw-bold mb-1 mt-2">Nama Toko</h5>
        <span class="badge bg-primary">Last 365 Days</span>
      </div>
    </div>
  </div>

  <!-- TOP Penjualan -->
  <div class="col-md-3">
    <div class="card kpi-card border-0 shadow-sm rounded-4 bg-warning-subtle">
      <div class="card-body position-relative">
        <i class="bi bi-cart-check kpi-icon text-warning"></i>
        <small class="text-warning fw-semibold text-uppercase">Top Dibeli</small>
        <h5 class="fw-bold mb-1 mt-2">Nama Produk</h5>
        <span class="badge bg-warning text-dark">Last 365 Days</span>
      </div>
    </div>
  </div>

</div>


  <!-- TABLE SECTION -->
  <div class="row g-4">

    <!-- TOP SELL PRODUK -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm rounded-4">
        <div class="card-header bg-white fw-semibold d-flex justify-content-between align-items-center">
          <span>🥇 Top 5 Produk Terjual</span>
          <small class="text-muted">Last 30 Days</small>
        </div>
        <div class="card-body p-0">
          <table class="table table-hover table-striped mb-0 align-middle">
            <thead class="table-light">
              <tr>
                <th width="60">Rank</th>
                <th>Kode Produk</th>
                <th>Merek</th>
                <th class="text-end">Qty</th>
              </tr>
            </thead>
            <tbody>
              <tr><td><span class="badge bg-warning">1</span></td><td>PRD-001</td><td>BBC</td><td class="text-end">320</td></tr>
              <tr><td><span class="badge bg-secondary">2</span></td><td>PRD-002</td><td>BBC</td><td class="text-end">290</td></tr>
              <tr><td><span class="badge bg-secondary">3</span></td><td>PRD-003</td><td>BBC</td><td class="text-end">260</td></tr>
              <tr><td><span class="badge bg-secondary">4</span></td><td>PRD-004</td><td>BBC</td><td class="text-end">240</td></tr>
              <tr><td><span class="badge bg-secondary">5</span></td><td>PRD-005</td><td>BBC</td><td class="text-end">210</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- TOP BUY PRODUK -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm rounded-4">
        <div class="card-header bg-white fw-semibold d-flex justify-content-between align-items-center">
          <span>🛒 Top 5 Produk Dibeli</span>
          <small class="text-muted">Last 30 Days</small>
        </div>
        <div class="card-body p-0">
          <table class="table table-hover mb-0 align-middle">
            <thead class="table-secondary">
              <tr>
                <th width="60">Rank</th>
                <th>Kode Produk</th>
                <th>Merek</th>
                <th class="text-end">Qty</th>
              </tr>
            </thead>
            <tbody>
              <tr class="table- fw-bold">
                <td><span class="badge bg-warning">1</span></td><td>PRD-010</td><td>BBC</td><td class="text-end">410</td>
              </tr>
              <tr class="table-">
                <td><span class="badge bg-info">2</span></td><td>PRD-011</td><td>BBC</td><td class="text-end">380</td>
              </tr>
              <tr class="table-">
                <td><span class="badge bg-info">3</span></td><td>PRD-012</td><td>BBC</td><td class="text-end">350</td>
              </tr>
              <tr class="text-muted">
                <td><span class="badge bg-secondary">4</span></td><td>PRD-013</td><td>BBC</td><td class="text-end"><h9>330</h9></td>
              </tr>
              <tr class="text-muted">
                <td><span class="badge bg-secondary">5</span></td><td>PRD-014</td><td>BBC</td><td class="text-end">300</td>
              </tr>
              <!-- <tr><td><span class="badge bg-warning">1</span></td><td><b>PRD-010</b></td><td><b>BBC</b></td><td class="text-end"><b>410</b></td></tr>
              <tr><td><span class="badge bg-info">2</span></td><td>PRD-011</td><td>BBC</td><td class="text-end">380</td></tr>
              <tr><td><span class="badge bg-info">3</span></td><td>PRD-012</td><td>BBC</td><td class="text-end">350</td></tr>
              <tr><td><span class="badge bg-secondary">4</span></td><td><small>PRD-013</small></td><td><small>BBC</small></td><td class="text-end"><h9>330</h9></td></tr>
              <tr><td><span class="badge bg-secondary">5</span></td><td><small>PRD-014</small></td><td><small>BBC</small></td><td class="text-end"><small>300</small></td></tr> -->
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- TOP SALES -->
    <!--  <div class="col-md-6">
      <div class="card border-0 shadow-sm rounded-4">
        <div class="card-header bg-white fw-semibold d-flex justify-content-between align-items-center">
          <span>🧑‍💼 Top 5 Sales (Insentif)</span>
          <small class="text-muted">Last 30 Days</small>
        </div>
        <div class="card-body p-0">
          <table class="table table-hover table-striped mb-0 align-middle">
            <thead class="table-light">
              <tr>
                <th width="60">Rank</th>
                <th>Sales</th>
                <th class="text-end">Insentif</th>
              </tr>
            </thead>
            <tbody>
              <tr><td><span class="badge bg-warning">1</span></td><td>SLS-001</td><td class="text-end">Rp 25.000.000</td></tr>
              <tr><td><span class="badge bg-secondary">2</span></td><td>SLS-002</td><td class="text-end">Rp 22.000.000</td></tr>
              <tr><td><span class="badge bg-secondary">3</span></td><td>SLS-003</td><td class="text-end">Rp 19.500.000</td></tr>
              <tr><td>4</td><td>SLS-004</td><td class="text-end">Rp 17.000.000</td></tr>
              <tr><td>5</td><td>SLS-005</td><td class="text-end">Rp 15.000.000</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div> -->
   
    <!-- TOP TOKO -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm rounded-4">
        <div class="card-header bg-white fw-semibold d-flex justify-content-between align-items-center">
          <span>🏪 Top 5 Toko (Pembayaran)</span>
          <small class="text-muted">Last 30 Days</small>
        </div>
        <div class="card-body p-0">
          <table class="table table-hover table-striped mb-0 align-middle">
            <thead class="table-light">
              <tr>
                <th width="60">Rank</th>
                <th>Customer</th>
                <th class="text-end">Total Terbayar</th>
              </tr>
            </thead>
            <tbody>
              <tr><td><span class="badge bg-warning">1</span></td><td>TKO-001</td><td class="text-end">Rp 120.000.000</td></tr>
              <tr><td><span class="badge bg-secondary">2</span></td><td>TKO-002</td><td class="text-end">Rp 110.000.000</td></tr>
              <tr><td><span class="badge bg-secondary">3</span></td><td>TKO-003</td><td class="text-end">Rp 98.000.000</td></tr>
              <tr><td>4</td><td>TKO-004</td><td class="text-end">Rp 85.000.000</td></tr>
              <tr><td>5</td><td>TKO-005</td><td class="text-end">Rp 75.000.000</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- TOP Supplier -->
    <div class="col-md-6">
        <div class="card border-0 shadow-sm rounded-4">
          <div class="card-header bg-white fw-semibold d-flex justify-content-between align-items-center">
            <span>🧑‍💼 Top 5 Supplier (Pembelian)</span>
            <small class="text-muted">Last 30 Days</small>
          </div>
          <div class="card-body p-0">
            <table class="table table-hover table-striped mb-0 align-middle">
              <thead class="table-light">
                <tr>
                  <th width="60">Rank</th>
                  <th>Supplier</th>
                  <th class="text-end">Total Pembelian</th>
                </tr>
              </thead>
              <tbody>
                <tr><td><span class="badge bg-warning">1</span></td><td>SLS-001</td><td class="text-end">Rp 25.000.000</td></tr>
                <tr><td><span class="badge bg-secondary">2</span></td><td>SLS-002</td><td class="text-end">Rp 22.000.000</td></tr>
                <tr><td><span class="badge bg-secondary">3</span></td><td>SLS-003</td><td class="text-end">Rp 19.500.000</td></tr>
                <tr><td>4</td><td>SLS-004</td><td class="text-end">Rp 17.000.000</td></tr>
                <tr><td>5</td><td>SLS-005</td><td class="text-end">Rp 15.000.000</td></tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>

<!-- Grafik SECTION -->
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Grafik Perbandingan Keuangan Bulanan</h3>
  </div>
  <div class="card-body">
    <canvas id="keuanganChart" width="100%" height="30"></canvas>
  </div>
</div>

<script>

const ctx = document.getElementById('keuanganChart').getContext('2d');

// contoh label 1 bulan terakhir
const labels = [];
const now = new Date();

for (let i = 12; i >= 0; i--) {
  let d = new Date(now.getFullYear(), now.getMonth() - i, 1);

  let bulan = d.toLocaleString('id-ID', { month: 'short' });
  let tahun = d.getFullYear();

  labels.push(bulan + " " + tahun);
}

console.log(labels);

// contoh data (ganti dengan data asli dari database)
const dataPenjualan = [1200000,1500000,1700000,1400000,1800000,2000000,
  1200000,1500000,1700000,1400000,1800000,2000000,2100000];
const dataBiaya = [500000,600000,550000,650000,700000,750000,
  500000,600000,550000,650000,700000,750000,720000];
const dataLaba = dataPenjualan.map((p,i)=> p - dataBiaya[i]);

const keuanganChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [
        {
            label: 'Bruto',
            data: dataPenjualan,
            backgroundColor: 'rgba(40,167,69,0.8)'
        },
        {
            label: 'Biaya Operasional',
            data: dataBiaya,
            backgroundColor: 'rgba(220,53,69,0.8)'
        },
        {
            label: 'Net Margin',
            data: dataLaba,
            backgroundColor: 'rgba(0,123,255,0.8)'
        }
        ]
    },
    options: {
        responsive:true,
        plugins:{
            legend:{
                position:'top'
            },
            title:{
                display:false,
                text:'Perbandingan Keuangan 1 Bulan Terakhir'
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









  </div>



    </div>
  </section>
</div>

<?php include "4footer.php"; ?>


<?php include "5script.php"; ?>
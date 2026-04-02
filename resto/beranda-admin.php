<?php $page='beranda_admin';?>
<?php include "1header.php"; ?>
<?php include "2navbar.php"; ?>
<?php
$sidebar_file = "3sidebar-{$role}.php";
if (file_exists($sidebar_file)) {
    include($sidebar_file);
} else {
    include('3sidebar.php');
}
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="content-wrapper" style="min-height: 600px;">
  <section class="content">
    <div class="container-fluid">

<style>
.kpi-card { transition: all 0.25s ease; }
.kpi-card:hover { transform: translateY(-4px); box-shadow: 0 0.75rem 1.5rem rgba(0,0,0,0.08); }
.kpi-icon { position:absolute; top:16px; right:16px; font-size:2rem; opacity:0.25; }
</style>

<div class="content">

<!-- HEADER -->
<div class="d-flex justify-content-between align-items-center mb-4">
  <div>
    <h2 class="page-title mb-0">📊 Dashboard Operasional Restoran</h2>
    <p class="text-muted">Monitoring order, dapur, dan transaksi secara real-time</p>
  </div>
  <button class="btn btn-sm btn-outline-primary" onclick="refreshData()">🔄 Refresh Data</button>
</div>

<!-- KPI -->
<div class="row g-3 mb-4">

<div class="col-md-3">
  <div class="card kpi-card bg-primary-subtle">
    <div class="card-body position-relative">
      <i class="bi bi-receipt kpi-icon"></i>
      <small>Total Order</small>
      <h4 id="totalOrder">25</h4>
    </div>
  </div>
</div>

<div class="col-md-3">
  <div class="card kpi-card bg-warning-subtle">
    <div class="card-body position-relative">
      <i class="bi bi-clock kpi-icon"></i>
      <small>Order Aktif</small>
      <h4 id="activeOrder">8</h4>
    </div>
  </div>
</div>

<div class="col-md-3">
  <div class="card kpi-card bg-success-subtle">
    <div class="card-body position-relative">
      <i class="bi bi-cash kpi-icon"></i>
      <small>Total Pendapatan</small>
      <h4 id="revenue">Rp 3.500.000</h4>
    </div>
  </div>
</div>

<div class="col-md-3">
  <div class="card kpi-card bg-danger-subtle">
    <div class="card-body position-relative">
      <i class="bi bi-exclamation-triangle kpi-icon"></i>
      <small>Order Terlambat</small>
      <h4 id="lateOrder">2</h4>
    </div>
  </div>
</div>

</div>

<!-- ALERT -->
<div class="alert alert-danger">
⚠️ Ada order yang belum selesai lebih dari 15 menit
</div>

<!-- MONITORING ORDER -->
<div class="card shadow-sm mb-4">
  <div class="card-header fw-semibold">📋 Monitoring Order</div>
  <div class="card-body p-0">
    <table class="table table-hover mb-0">
      <thead class="table-light">
        <tr>
          <th>ID</th>
          <th>Meja</th>
          <th>Status</th>
          <th>Total</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>#001</td>
          <td>A1</td>
          <td><span class="badge bg-warning">Diproses</span></td>
          <td>Rp 120.000</td>
          <td>
            <button class="btn btn-sm btn-outline-danger" onclick="overrideStatus(this)">Override</button>
          </td>
        </tr>
        <tr>
          <td>#002</td>
          <td>B2</td>
          <td><span class="badge bg-secondary">Menunggu</span></td>
          <td>Rp 80.000</td>
          <td>
            <button class="btn btn-sm btn-outline-danger" onclick="overrideStatus(this)">Override</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- GRAFIK -->
<div class="card">
  <div class="card-header">📈 Grafik Pendapatan</div>
  <div class="card-body">
    <canvas id="chart"></canvas>
  </div>
</div>

</div>

</div>
</section>
</div>

<script>
function overrideStatus(btn){
  let row = btn.closest('tr');
  row.cells[2].innerHTML = '<span class="badge bg-success">Selesai (Override)</span>';
  alert('Status berhasil diubah oleh admin');
}

function refreshData(){
  alert('Data diperbarui (simulasi realtime)');
}

const ctx = document.getElementById('chart');
new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Jan','Feb','Mar','Apr','Mei','Jun'],
    datasets: [{
      label: 'Pendapatan',
      data: [1200000,1500000,1700000,1400000,1800000,2000000]
    }]
  }
});
</script>

<?php include "4footer.php"; ?>
<?php include "5script.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sales Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background:#f4f6f9; }
    .card { border-radius:12px; }
    .metric { font-size:22px; font-weight:bold; }
  </style>
</head>

<body>

<div class="container py-4">

  <h3 class="mb-4">☕ Sales Dashboard</h3>

  <!-- METRICS -->
  <div class="row mb-3">
    <div class="col-md-4">
      <div class="card p-3 shadow-sm">
        <div>Total Sales Today</div>
        <div class="metric text-success">Rp 2.450.000</div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card p-3 shadow-sm">
        <div>Orders</div>
        <div class="metric text-primary">128</div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card p-3 shadow-sm">
        <div>Avg Order</div>
        <div class="metric text-warning">Rp 19.200</div>
      </div>
    </div>
  </div>

  <!-- TABS -->
  <ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#monitor">Monitor</a></li>
    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#rekap">Rekap</a></li>
    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#riwayat">Riwayat</a></li>
  </ul>

  <div class="tab-content bg-white p-3 border">

    <!-- MONITOR -->
    <div class="tab-pane fade show active" id="monitor">
      <h5>Live Orders</h5>
      <div class="list-group">
        <div class="list-group-item">Order #1023 - Latte - Processing</div>
        <div class="list-group-item">Order #1024 - Americano - Ready</div>
        <div class="list-group-item">Order #1025 - Cappuccino - Paid</div>
      </div>
    </div>

    <!-- REKAP -->
    <div class="tab-pane fade" id="rekap">
      <h5>Sales Summary</h5>
      <table class="table table-bordered">
        <tr><th>Menu</th><th>Qty</th><th>Revenue</th></tr>
        <tr><td>Latte</td><td>50</td><td>Rp 750.000</td></tr>
        <tr><td>Americano</td><td>40</td><td>Rp 600.000</td></tr>
      </table>
    </div>

    <!-- RIWAYAT -->
    <div class="tab-pane fade" id="riwayat">
      <h5>Order History</h5>
      <table class="table table-striped">
        <tr><th>Order</th><th>Time</th><th>Total</th></tr>
        <tr><td>#1001</td><td>10:01</td><td>Rp 25.000</td></tr>
        <tr><td>#1002</td><td>10:05</td><td>Rp 18.000</td></tr>
      </table>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
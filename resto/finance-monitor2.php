<!DOCTYPE html>
<html>
<head>
  <title>Finance Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-4">

  <h3 class="mb-4">💰 Finance Dashboard</h3>

  <div class="row mb-3">
    <div class="col-md-4"><div class="card p-3">Cash Today <h4>Rp 1.250.000</h4></div></div>
    <div class="col-md-4"><div class="card p-3">Profit <h4>Rp 540.000</h4></div></div>
    <div class="col-md-4"><div class="card p-3">COGS <h4>Rp 610.000</h4></div></div>
  </div>

  <ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#m">Monitor</a></li>
    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#r">Rekap</a></li>
    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#h">Riwayat</a></li>
  </ul>

  <div class="tab-content bg-white p-3 border">

    <div class="tab-pane fade show active" id="m">
      <h5>Cashflow Today</h5>
      <ul class="list-group">
        <li class="list-group-item">+ Rp 25.000 (Order #1001)</li>
        <li class="list-group-item">+ Rp 18.000 (Order #1002)</li>
      </ul>
    </div>

    <div class="tab-pane fade" id="r">
      <h5>Profit & Loss</h5>
      <table class="table">
        <tr><th>Revenue</th><td>Rp 2.000.000</td></tr>
        <tr><th>Expense</th><td>Rp 1.200.000</td></tr>
      </table>
    </div>

    <div class="tab-pane fade" id="h">
      <h5>Journal History</h5>
      <table class="table table-striped">
        <tr><th>Journal</th><th>Amount</th></tr>
        <tr><td>Sales Entry</td><td>Rp 25.000</td></tr>
      </table>
    </div>

  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
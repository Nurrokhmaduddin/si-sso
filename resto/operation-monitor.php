<!DOCTYPE html>
<html>
<head>
  <title>Operation Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-4">

  <h3 class="mb-4">🍽️ Operation Dashboard</h3>

  <div class="row mb-3">
    <div class="col-md-4">
      <div class="card p-3 shadow-sm">
        <div>Orders In Kitchen</div>
        <h3>18</h3>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card p-3 shadow-sm">
        <div>Avg Prep Time</div>
        <h3>7 min</h3>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card p-3 shadow-sm">
        <div>Waste Items</div>
        <h3>3</h3>
      </div>
    </div>
  </div>

  <ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#mon">Monitor</a></li>
    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#rek">Rekap</a></li>
    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#riw">Riwayat</a></li>
  </ul>

  <div class="tab-content bg-white p-3 border">

    <div class="tab-pane fade show active" id="mon">
      <h5>Kitchen Queue</h5>
      <div class="list-group">
        <div class="list-group-item">#2001 Latte - In Progress</div>
        <div class="list-group-item">#2002 Croissant - Ready</div>
      </div>
    </div>

    <div class="tab-pane fade" id="rek">
      <h5>Usage Summary</h5>
      <table class="table">
        <tr><th>Bahan</th><th>Used</th></tr>
        <tr><td>Kopi</td><td>3 kg</td></tr>
      </table>
    </div>

    <div class="tab-pane fade" id="riw">
      <h5>Production Log</h5>
      <table class="table table-striped">
        <tr><th>Order</th><th>Status</th></tr>
        <tr><td>#1999</td><td>Completed</td></tr>
      </table>
    </div>

  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
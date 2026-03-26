<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Riwayat Kitchen - Tabel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body { background: #f8f9fa; font-family: Arial, sans-serif; }
    .card { border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); }
    .nav-tabs .nav-link.active { background-color: #0d6efd; color: #fff; border-radius: 8px; }
    table { font-size: 0.9rem; }
    th, td { vertical-align: middle; }
    .badge-status { font-size: 0.75rem; padding: 4px 8px; border-radius: 6px; }
</style>
</head>
<body>
<div class="container py-4">

    <h3 class="mb-4">Riwayat Kitchen Operations</h3>

    <ul class="nav nav-tabs mb-3" id="riwayatTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="per-order-tab" data-bs-toggle="tab" data-bs-target="#per-order" type="button">Per Order</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="per-menu-tab" data-bs-toggle="tab" data-bs-target="#per-menu" type="button">Per Menu</button>
      </li>
      <li class="nav-item" >
        <button class="nav-link" onclick="window.location='operation-kitchen-op2.php'" type="button">Grafik</button>
      </li>
    </ul>

    <div class="tab-content">
      <!-- ===== Per Order ===== -->
      <div class="tab-pane fade show active" id="per-order">
        <div class="card p-3">
          <div class="table-responsive">
            <table class="table table-hover align-middle">
              <thead class="table-light">
                <tr>
                  <th>No</th>
                  <th>Order ID</th>
                  <th>Meja</th>
                  <th>Menu</th>
                  <th>Qty</th>
                  <th>Start</th>
                  <th>Finish</th>
                  <th>Durasi</th>
                  <th>Status</th>
                  <th>Chef</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>#101</td>
                  <td>Meja 3</td>
                  <td>Nasi Goreng</td>
                  <td>2</td>
                  <td>10:01</td>
                  <td>10:06</td>
                  <td>5m</td>
                  <td><span class="badge bg-success badge-status">Selesai</span></td>
                  <td>Chef A</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>#101</td>
                  <td>Meja 3</td>
                  <td>Es Teh</td>
                  <td>2</td>
                  <td>10:01</td>
                  <td>10:03</td>
                  <td>2m</td>
                  <td><span class="badge bg-success badge-status">Selesai</span></td>
                  <td>Chef B</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>#102</td>
                  <td>Meja 5</td>
                  <td>Mie Goreng</td>
                  <td>1</td>
                  <td>10:05</td>
                  <td>10:09</td>
                  <td>4m</td>
                  <td><span class="badge bg-success badge-status">Selesai</span></td>
                  <td>Chef A</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>#103</td>
                  <td>Meja 2</td>
                  <td>Ayam Bakar</td>
                  <td>1</td>
                  <td>10:07</td>
                  <td>10:15</td>
                  <td>8m</td>
                  <td><span class="badge bg-warning badge-status">Telat</span></td>
                  <td>Chef C</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- ===== Per Menu ===== -->
      <div class="tab-pane fade" id="per-menu">
        <div class="card p-3">
          <div class="table-responsive">
            <table class="table table-hover align-middle">
              <thead class="table-light">
                <tr>
                  <th>No</th>
                  <th>Menu</th>
                  <th>Total Order</th>
                  <th>Rata-rata Durasi</th>
                  <th>Status Paling Lama</th>
                  <th>Chef Terkait</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Nasi Goreng</td>
                  <td>10</td>
                  <td>5m</td>
                  <td>Selesai</td>
                  <td>Chef A, B</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Mie Goreng</td>
                  <td>5</td>
                  <td>4m</td>
                  <td>Selesai</td>
                  <td>Chef A</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Ayam Bakar</td>
                  <td>7</td>
                  <td>7m</td>
                  <td>Telat</td>
                  <td>Chef C</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
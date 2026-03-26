<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Riwayat Kitchen - Grafik</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
    body { background: #f8f9fa; font-family: Arial, sans-serif; }
    .card { border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); margin-bottom: 20px; }
</style>
</head>
<body>
<div class="container py-4">
    <h3 class="mb-4">Riwayat Kitchen Operations - Grafik</h3>
<ul class="nav nav-tabs mb-3" id="riwayatTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link " onclick="window.location='operation-kitchen-op.php'" type="button">Per Order</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="per-menu-tab" data-bs-toggle="tab" data-bs-target="#per-menu" type="button">Per Menu</button>
      </li>
      <li class="nav-item" >
        <button class="nav-link active" onclick="window.location='operation-kitchen-op2.php'" type="button">Grafik</button>
      </li>
    </ul>
    <div class="row">
        <div class="col-md-6">
            <div class="card p-3">
                <h5>Durasi Rata-rata per Menu</h5>
                <canvas id="chartMenu"></canvas>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-3">
                <h5>Total Durasi per Order</h5>
                <canvas id="chartOrder"></canvas>
            </div>
        </div>
    </div>
</div>

<script>
    // ===== Chart Durasi per Menu =====
    const ctxMenu = document.getElementById('chartMenu').getContext('2d');
    const chartMenu = new Chart(ctxMenu, {
        type: 'bar',
        data: {
            labels: ['Nasi Goreng','Mie Goreng','Ayam Bakar','Es Teh','Jus Mangga'],
            datasets: [{
                label: 'Rata-rata Durasi (menit)',
                data: [5,4,7,3,4],
                backgroundColor: '#0d6efd'
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
                tooltip: { mode: 'index', intersect: false }
            },
            scales: {
                y: { beginAtZero: true, title: { display: true, text: 'Menit' } }
            }
        }
    });

    // ===== Chart Durasi per Order =====
    const ctxOrder = document.getElementById('chartOrder').getContext('2d');
    const chartOrder = new Chart(ctxOrder, {
        type: 'line',
        data: {
            labels: ['#101','#102','#103','#104','#105'],
            datasets: [{
                label: 'Total Durasi Order (menit)',
                data: [7,4,8,6,5],
                fill: true,
                backgroundColor: 'rgba(13,110,253,0.2)',
                borderColor: '#0d6efd',
                tension: 0.3,
                pointRadius: 5
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
                tooltip: { mode: 'index', intersect: false }
            },
            scales: {
                y: { beginAtZero: true, title: { display: true, text: 'Menit' } }
            }
        }
    });
</script>
</body>
</html>
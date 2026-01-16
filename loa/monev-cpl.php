Halaman ini menampilkan rekapitulasi satu set pemetaan OBE yang telah dirancang, menyoroti kelengkapan pemetaan (mapping completeness) untuk memeriksa apakah CPL, IK, CPMK, dan MK telah terhubung secara lengkap, sekaligus keserataan beban pemetaan (mapping balance) untuk menilai distribusi dukungan dan mengidentifikasi gap antara elemen terkuat dan terlemah di tiap level.”

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perbandingan 2 Set Pemetaan OBE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    .card-summary { text-align: center; }
    .status-new { color: green; font-weight: bold; }
    .status-removed { color: red; font-weight: bold; }
    .table-wrapper { overflow-x: auto; }
    .chart-container { width: 100%; max-width: 800px; margin: 20px auto; }
  </style>
</head>
<body>
  <div class="container my-4">
    <h2 class="mb-4">Perbandingan 2 Set Pemetaan OBE</h2>

    <!-- Metadata / Info Panel -->
    <div class="mb-4">
      <p><strong>Kurikumlum:</strong> Teknik Informatika 2025</p>
      <p><strong>Set Pemetaan A:</strong> v1.0 &nbsp; | &nbsp; <strong>Set Pemetaan B:</strong> v2.0</p>
      <p><strong>Revisi Terakhir:</strong> 1 Desember 2025 &nbsp; | &nbsp; <strong>Penanggung Jawab:</strong> Kaprodi</p>
    </div>


<!-- ========== CARD 2: Filter & Export ========== -->
<div class="card mb-4">
  <div class="card-header d-flex align-items-center">
    <h5 class="card-title mb-0"><i class="fas fa-filter me-2"></i> Filter & Ekspor</h5>
    <div class="card-tools ms-auto">
      <!-- Tombol Filter -->
      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalFilter">
        <i class="fas fa-filter me-1"></i> Filter
      </button>              
      <!-- Tombol Ekspor -->
      <a href="data-pemetaan234-kurikulumABC.xls" target="_blank" class="btn btn-sm btn-success">
        <i class="fas fa-file-excel me-1"></i> Ekspor Hasil Pemetaan
      </a>
    </div>
  </div>
  <div class="card-body">
    <!-- Ringkasan pilihan filter -->
    <div class="row mb-2">
      <div class="col-md-4">
        <p class="mb-0"><strong>Kurikulum:</strong> Teknik Informatika 2025</p>
      </div>
      <div class="col-md-4">
        <p class="mb-0"><strong>Set Pemetaan A:</strong> KT-6 (K20) Kurikulum 2025 full stage</p>
      </div>
      <div class="col-md-4">
        <p class="mb-0"><strong>Set Pemetaan B:</strong> KT-6 (K20) Kurikulum 2025 profesional stage</p>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-md-12 text-end">
        <button class="btn btn-sm btn-outline-secondary" onclick="applyDummyFilter()">
          Terapkan Filter
        </button>
      </div>
    </div>
  </div>
</div>


    <!-- Ringkasan Jumlah Total -->
    <div class="row mb-4">
      <div class="col-md-3">
        <div class="card card-summary">
          <div class="card-body">
            <h5 class="card-title">MK</h5>
            <p class="card-text">A: 12 | B: 13</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card card-summary">
          <div class="card-body">
            <h5 class="card-title">CPMK</h5>
            <p class="card-text">A: 45 | B: 47</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card card-summary">
          <div class="card-body">
            <h5 class="card-title">IK</h5>
            <p class="card-text">A: 18 | B: 19</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card card-summary">
          <div class="card-body">
            <h5 class="card-title">CPL</h5>
            <p class="card-text">A: 7 | B: 7</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Elemen Baru / Hilang -->
    <div class="mb-4">
      <h4>Elemen Baru / Hilang</h4>
      <div class="table-wrapper">
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>Elemen</th>
              <th>Tipe</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>MK: Struktur Data</td>
              <td>MK</td>
              <td class="status-new">Baru</td>
            </tr>
            <tr>
              <td>CPMK: Analisis Algoritma</td>
              <td>CPMK</td>
              <td class="status-removed">Hilang</td>
            </tr>
            <tr>
              <td>IK: Mampu menulis laporan</td>
              <td>IK</td>
              <td class="status-new">Baru</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Perubahan Status Pemetaan -->
    <div class="mb-4">
      <h4>Perubahan Status Pemetaan</h4>
      <div class="table-wrapper">
        <table class="table table-bordered table-hover">
          <thead class="table-secondary">
            <tr>
              <th>CPMK / IK / MK</th>
              <th>Status di Set A</th>
              <th>Status di Set B</th>
              <th>Perubahan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>CPMK: Analisis Sistem</td>
              <td>Mapped</td>
              <td>Unmapped</td>
              <td class="status-removed">Unmapped</td>
            </tr>
            <tr>
              <td>IK: Menguasai PHP</td>
              <td>Mapped</td>
              <td>Mapped</td>
              <td>Tidak berubah</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Gap & Keserataan Beban Pemetaan -->
    <div class="mb-4">
      <h4>Gap & Keserataan Beban Pemetaan</h4>
      <div class="chart-container">
        <canvas id="gapChart"></canvas>
      </div>
    </div>
  </div>

  <!-- Chart JS -->
  <script>
    const ctx = document.getElementById('gapChart').getContext('2d');
    const gapChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['CPL 1','CPL 2','CPL 3','IK 1','IK 2','CPMK 1','CPMK 2','MK 1','MK 2'],
        datasets: [{
          label: 'Set A',
          data: [5,4,3,6,5,4,3,7,5],
          backgroundColor: 'rgba(54, 162, 235, 0.6)'
        },
        {
          label: 'Set B',
          data: [6,4,3,5,6,4,2,6,6],
          backgroundColor: 'rgba(255, 99, 132, 0.6)'
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { position: 'top' },
          title: { display: true, text: 'Perbandingan Beban Pemetaan Set A vs Set B' }
        },
        scales: {
          y: { beginAtZero: true }
        }
      }
    });
  </script>
</body>
</html>

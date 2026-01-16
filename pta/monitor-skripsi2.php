<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Rekapitulasi Aktivitas 1 - SI-PTA</title>
  <!-- Bootstrap & AdminLTE CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css"/>

  <style>
    body { background: #f4f6f9; }
    .kpi { border-radius: 10px; padding: 18px; color: #fff; }
    .kpi .big { font-size: 1.6rem; font-weight:700; }
    .kpi .small { font-size: 0.85rem; opacity: .9; }
    .card { border-radius:10px; }
    .chart-container { position: relative; height: 300px; }
  </style>
</head>
<body class="sidebar-mini layout-fixed layout-navbar-fixed">
  <div class="wrapper">

    <!-- Content Wrapper -->
    <div class="content-wrapper" style="min-height:700px;">
      <div class="content-header">
        <div class="container-fluid">
          <h3 class="mb-0">Rekapitulasi Aktivitas 1</h3>
          <p class="text-muted mb-0">Ringkasan rekapitulasi kelas per semester, performa dosen, dan kelengkapan eviden per mata kuliah. (Mockup data statis)</p>
        </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">

          <!-- ========== KPI CARDS ========== -->
          <div class="row g-3 mb-3">
            <div class="col-md-3">
              <div class="kpi bg-primary">
                <div class="small">Total Mahasiswa Aktif</div>
                <div class="big">120</div>
                <div class="small">pada aktivitas ini</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="kpi" style="background:#20c997;">
                <div class="small">Rerata Beban Bimbingan per Dosen</div>
                <div class="big">15</div>
                <div class="small">pada aktivitas ini</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="kpi" style="background:#ff7f0e;">
                <div class="small">Durasi Penyelesaian (avg)</div>
                <div class="big">6 bln</div>
                <div class="small">pada aktivitas ini</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="kpi bg-danger">
                <div class="small">Mahasiswa Macet / Perpanjangan</div>
                <div class="big">5</div>
                <div class="small">pada aktivitas ini</div>
              </div>
            </div>
          </div>

          <!-- ========== CHART CARD ========== -->
          <div class="card">
            <div class="card-header">
              <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i> Progress Mahasiswa per Tahapan</h5>
            </div>
            <div class="card-body">
              <div class="chart-container">
                <canvas id="chartProgressStage"></canvas>
              </div>
            </div>
          </div>

          <!-- ========== TABLE GRANULAR ========== -->
          <div class="card mt-3">
            <div class="card-header">
              <strong>Tabel Granular</strong>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-sm table-bordered table-striped datatables1">
                  <thead class="table-dark text-center">
                    <tr>
                      <th>No</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Aktivitas</th>
                      <th>Stage Saat Ini</th>
                      <th>Status</th>
                      <th>Durasi</th>
                      <th>Perpanjangan</th>
                      <th>Dokumen Lengkap</th>
                      <th>Last Activity</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>19312418</td>
                      <td>Claudia Monica Aditama</td>
                      <td>Skripsi</td>
                      <td>Stage 2</td>
                      <td>Aktif</td>
                      <td>3 bln</td>
                      <td>0</td>
                      <td>Ya</td>
                      <td>2025-12-01</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>19312479</td>
                      <td>Asep Sunandar</td>
                      <td>Magang</td>
                      <td>Stage 3</td>
                      <td>Macet</td>
                      <td>6 bln</td>
                      <td>1</td>
                      <td>Tidak</td>
                      <td>2025-11-28</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div><!-- /.container-fluid -->
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- FOOTER -->
    <footer class="main-footer" style="font-size:10pt; background-color:#e5eaf0;">
      <center>
        <font color="#000000">
          SSO V 4.0 | Copyright © PT Tanjung Mulia Informatika <br>
          <small>Sesi akan berakhir dalam: <b id="count_down_text"><i class="fas fa-spinner fa-pulse"></i></b></small>
        </font>
      </center>
    </footer>
  </div><!-- /.wrapper -->

  <!-- JS -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    $(document).ready(function() {
      // DataTable
      $('.datatables1').DataTable({
        pageLength: 10,
        lengthChange: true,
        autoWidth: false,
        order: [[9, "desc"]] // urut berdasarkan Last Activity
      });

      // ChartJS Progress Stage
      const ctx = document.getElementById('chartProgressStage').getContext('2d');
      const chartProgressStage = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['Stage 1', 'Stage 2', 'Stage 3', 'Stage 4'],
          datasets: [
            { label: 'Periode 2024', data: [20,25,30,15], backgroundColor: '#0d6efd' },
            { label: 'Periode 2025', data: [15,20,25,10], backgroundColor: '#ffc107' }
          ]
        },
        options: {
          responsive: true,
          plugins: {
            legend: { position: 'top' },
            tooltip: { mode: 'index', intersect: false }
          },
          scales: {
            x: { stacked: true },
            y: { stacked: true, beginAtZero: true }
          }
        }
      });
    });
  </script>
</body>
</html>

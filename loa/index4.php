<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar2.php'); ?>
<!-- Content Wrapper -->
<div class="content-wrapper" style="min-height: 600px;">

  <!-- Content Header -->
  <div class="content-header"></div>

  <!-- Main Content -->
  <section class="content">
    <div id="cardsContainer">
      <div class="container-fluid">

        <!-- Welcome Card -->
        <div class="card">
          <div class="card-body">
            <h2 class="mb-0">
              <i class="far fa-smile"></i>
              Selamat Datang, [nama pengguna] <?php echo $q; ?>
            </h2>
            <p class="text-muted">
              Sistem Informasi Learning Outcome Assessment (LOA)
            </p>
          </div>
        </div>

        <!-- Info Cards -->
        <div class="row mb-3">

          <div class="col-md-4">
            <div class="card bg-primary text-white">
              <div class="card-body">
                <h5>Periode Akademik Aktif</h5>
                <h3>2025/2026 - Gasal</h3>
                <p class="mb-0">
                  <i class="fas fa-calendar-alt"></i>
                  Berlaku hingga: 30 Feb 2026
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card bg-success text-white">
              <div class="card-body">
                <h5>Progress Entri Nilai</h5>
                <h3>82%</h3>
                <p class="mb-0">
                  <i class="fas fa-edit"></i>
                  Dari total kelas Mata Kuliah semester ini.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card bg-warning text-white">
              <div class="card-body">
                <h5>Progress Unggah Portofolio</h5>
                <h3>20%</h3>
                <p class="mb-0">
                  <i class="fas fa-check"></i>
                  Dari total kelas Mata Kuliah semester ini.
                </p>
              </div>
            </div>
          </div>

        </div>

        <!-- Chart & Announcement -->
        <div class="row mb-3">

          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">
                  <i class="fas fa-chart-pie"></i>
                  Statistik Capaian LOA Mahasiswa Aktif
                </h5>
              </div>
              <div class="card-body">
                <canvas id="chartLOA" style="min-height: 250px;"></canvas>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">
                  <i class="fas fa-bullhorn"></i>
                  Pengumuman Terbaru
                </h5>
              </div>
              <div class="card-body" style="max-height: 400px; overflow-y:auto;">
                <ul class="list-group">
                  <li class="list-group-item">
                    Pengumuman 1: Jadwal asesmen Gasal 2025/2026
                  </li>
                  <li class="list-group-item">
                    Pengumuman 2: Perubahan format laporan LOA
                  </li>
                  <li class="list-group-item">
                    Pengumuman 3: Update sistem input capaian mahasiswa
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- ChartJS -->
  <script>
    var ctx = document.getElementById('chartLOA').getContext('2d');
    var chartLOA = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['CPL 1','CPL 2','CPL 3','CPL 4','CPL 5','CPL 6','CPL 7','CPL 8','CPL 9','CPL 10','CPL 11'],
        datasets: [{
          label: 'Persentase Capaian (%)',
          data: [80, 90, 75, 85, 88, 65, 67, 70, 55, 30, 23],
          backgroundColor: 'rgba(54,162,235,0.6)',
          borderColor: 'rgba(54,162,235,1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true,
            max: 100
          }
        }
      }
    });
  </script>

  <?php include('footer.php'); ?>

  <!-- CTA Modal -->
  <button
    type="button"
    class="btn btn-primary d-none"
    id="demoCTAbutton"
    data-toggle="modal"
    data-target="#demoModal">
  </button>

  <div class="modal fade" id="demoModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">🔒 Fitur Premium</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>

        <div class="modal-body">
          Fitur ini hanya tersedia di Paket Pro.<br>
          Nikmati akses penuh dengan upgrade sekarang.
        </div>

        <div class="modal-footer">
          <a href="#" class="btn btn-success">Upgrade Sekarang</a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Tutup
          </button>
        </div>

      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="main-footer" style="font-size:10pt;background:#e5eaf0;">
    <center>
      <font color="#000">
        LOA V 3.0 | Copyright © Program Studi Teknik Sipil UII Yogyakarta
        <br>
        <small>
          Sesi akan berakhir dalam:
          <b id="count_down_text">
            <i class="fas fa-spinner fa-pulse"></i>
          </b>
        </small>
      </font>
    </center>
  </footer>

</div>

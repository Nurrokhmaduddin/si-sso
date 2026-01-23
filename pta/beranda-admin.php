<?php $page='';?>
<?php include "1header.php"; ?>
<?php include "2navbar.php"; ?>
<?php include "3sidebar.php"; ?>
 

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

        <div class="card">
          <div class="card-body">
            <h2 class="mb-0"><i class="far fa-smile"></i> Selamat Datang, [nama pengguna]</h2>
            <p class="text-muted">Sistem Informasi Learning Outcome Assessment (LOA)</p>
          </div>
        </div>




      <!-- Periode Akademik -->
      <div class="row mb-3">
        <div class="col-md-4">
          <div class="card bg-primary text-white">
            <div class="card-body">
              <h5>Periode Akademik Aktif</h5>
              <h3>2025/2026 - Gasal</h3>
              <p class="mb-0"><i class="fas fa-calendar-alt"></i> Berlaku hingga: 30 Feb 2026</p>
            </div>
          </div>
        </div>

        <!-- Persentase Nilai CPMK Terinput -->
        <div class="col-md-4">
          <div class="card bg-success text-white">
            <div class="card-body">
              <h5>Progress Entri Nilai</h5>
              <h3>82%</h3>
              <p class="mb-0"><i class="fas fa-edit"></i> Dari total kelas Mata Kuliah semester ini.</p>
            </div>
          </div>
        </div>

        <!-- Jumlah Pengumuman -->
        <div class="col-md-4">
          <div class="card bg-warning text-white">
            <div class="card-body">
              <h5>Progress Unggah Portofolio</h5>
              <h3>20%</h3>
              <p class="mb-0"><i class="fas fa-check"></i> Dari total kelas Mata Kuliah semester ini.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Grafik Statistik LOA -->
      <div class="row mb-3">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title"><i class="fas fa-chart-pie"></i> Statistik Capaian LOA Mahasiswa Aktif</h5>
            </div>
            <div class="card-body">
              <canvas id="chartLOA" style="min-height: 250px;"></canvas>
            </div>
          </div>
        </div>

        <!-- Pengumuman List -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title"><i class="fas fa-bullhorn"></i> Pengumuman Terbaru</h5>
            </div>
            <div class="card-body" style="max-height: 400px; overflow-y:auto;">
              <ul class="list-group">
                <li class="list-group-item">Pengumuman 1: Jadwal asesmen Gasal 2025/2026</li>
                <li class="list-group-item">Pengumuman 2: Perubahan format laporan LOA</li>
                <li class="list-group-item">Pengumuman 3: Update sistem input capaian mahasiswa</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Quick Links / Tindakan Cepat -->
      <!-- <div class="row">
        <div class="col-md-3">
          <a href="#" class="text-decoration-none">
            <div class="card bg-info text-white text-center">
              <div class="card-body">
                <i class="fas fa-edit fa-2x mb-2"></i>
                <h6>Input Capaian</h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="text-decoration-none">
            <div class="card bg-secondary text-white text-center">
              <div class="card-body">
                <i class="fas fa-file-alt fa-2x mb-2"></i>
                <h6>Laporan LOA</h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="text-decoration-none">
            <div class="card bg-success text-white text-center">
              <div class="card-body">
                <i class="fas fa-user-check fa-2x mb-2"></i>
                <h6>Validasi Data</h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="text-decoration-none">
            <div class="card bg-warning text-white text-center">
              <div class="card-body">
                <i class="fas fa-bell fa-2x mb-2"></i>
                <h6>Pengumuman</h6>
              </div>
            </div>
          </a>
        </div>
      </div> -->

    </div>
  </section>

<?php include "4footer.php"; ?>

<!-- ChartJS Script -->
<script>
  var ctx = document.getElementById('chartLOA').getContext('2d');
  var chartLOA = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['CPL 1', 'CPL 2', 'CPL 3', 'CPL 4', 'CPL 5', 'CPL 6', 'CPL 7', 'CPL 8', 'CPL 9', 'CPL 10', 'CPL 11'],
      datasets: [{
        label: 'Persentase Capaian (%)',
        data: [80, 90, 75, 85, 88,65, 67, 70, 55, 30, 23],
        backgroundColor: 'rgba(54, 162, 235, 0.6)',
        borderColor: 'rgba(54, 162, 235, 1)',
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
<?php include "5script.php"; ?>
<?php $page = 'beranda_dosen'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>
<style>
  .chart-container {
      position: relative;
      height: 230px;
  }
</style>
<!-- Content Wrapper -->
<div class="content-wrapper" style="min-height: 600px;">

  <!-- Content Header -->
  <div class="content-header"></div>

  <!-- Main Content -->
  <section class="content">
    <div id="cardsContainer">
      <div class="container-fluid">

        <!-- Welcome Card -->
        <!-- <div class="card">
          <div class="card-body">
            <h2 class="mb-0">
              <i class="far fa-smile"></i>
              Selamat Datang, [nama pengguna] <?php echo $q; ?>
            </h2>
            <p class="text-muted">
              Sistem Informasi Learning Outcome Assessment (LOA)
            </p>
          </div>
        </div> -->

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
                <h5>CPMK Memenuhi Standar</h5>
                <h3>20 / 34 CPMK</h3>
                <p class="mb-0">
                  <i class="fas fa-chart-line"></i>
                  yaitu mahasiswa tuntas ≥ 65%
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card bg-warning text-white">
              <div class="card-body">
                <h5>Ketuntasan Mata Kuliah</h5>
                <h3>88% Mahasiswa</h3>
                <p class="mb-0">
                  <i class="fas fa-user-graduate"></i>
                    dengan nilai ≥ C pada semester ini.
                </p>
              </div>
            </div>
          </div>


        </div>

        <!-- Chart & Announcement -->
        <div class="row mb-3">

          <div class="col-md-8">
            <!-- <div class="card">
              <div class="card-header">
                <h5 class="card-title">
                  <i class="fas fa-chart-pie"></i>
                  Statistik Capaian LOA Periode Akademik Aktif
                </h5>
              </div>
              <div class="card-body">
                <canvas id="chartLOA" style="min-height: 250px;"></canvas>
              </div>
            </div> -->

            <!-- ========== CARD : Stacked Bar Chart ========== -->
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i> Stacked Bar Chart — Proporsi (%)</h5>
                <div class="card-tools">
                  <small class="text-muted">kelas diampu dosen</small>
                </div>
              </div>

              <div class="card-body chart-container d-flex flex-column">
                <div class="flex-grow-1">
                  <canvas id="stackedChart" width="100%" height="22"></canvas>
                </div>
              </div>
            </div>
            <!-- ========== CARD : tabel granular kelas ========== -->
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-sm datatables1">
                    <thead>
                      <tr class="text-uppercase">
                        <th width="5px">No.</th>
                        <th>Mata Kuliah</th>
                        <th style="text-align: center;">CPMK</th>
                        <th style="text-align: center;">Kelas</th>
                        <th style="text-align: center;">Mahasiswa</th>
                        <th style="text-align: center;">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td align="center">1</td>
                        <td>Pengantar Teknologi Informasi<br>
                          <!-- <small><b>(IF101)</b></small> -->
                        </td>
                        <td align="center">5</td>
                        <td align="center">A</td>
                        <td align="center"><b>27</b></td>                                         
                        <td class="text-center">
                          <button type="button" onclick="window.location='perkuliahan-portofolio-kelas-detail.php'" class="btn btn-xs btn-outline-info"> <i class='fas fa-info-circle'> </i></button>
                        </td>
                      </td>
                    </tr>

                    <tr>
                      <td align="center">2</td>
                      <td>
                        Algoritma dan Pemrograman <br>
                        <!-- <small><b>(IF102)</b></small> -->
                      </td>
                      <td align="center">5</td>
                      <td align="center">C</td>
                      <td align="center"><b>33</b></td>
                      <td class="text-center">
                        <button type="button" onclick="window.location='perkuliahan-portofolio-kelas-detail.php'" class="btn btn-xs btn-outline-info"> <i class='fas fa-info-circle'> </i></button>
                      </td>
                    </tr>

                    <tr>
                      <td align="center">3</td>
                      <td>
                        Metode Pelaksanaan Bangunan<br>
                        <!-- <small><b>(STS704)</b></small> -->
                      </td>
                      <td align="center">5</td>
                      <td align="center">B</td>
                      <td align="center"><b>26</b></td>
                      <td class="text-center">
                        <button type="button" onclick="window.location='perkuliahan-portofolio-kelas-detail.php'" class="btn btn-xs btn-outline-info"> <i class='fas fa-info-circle'> </i></button>
                      </td>
                    </tr>
                    <tr>
                      <td align="center">4</td>
                      <td>
                        Keamanan Informasi<br>
                        <!-- <small><b>(IF401)</b></small> -->
                      </td>
                      <td align="center">5</td>
                      <td align="center">D</td>
                      <td align="center"><b>23</b></td>
                      <td class="text-center">
                        <button type="button" onclick="window.location='perkuliahan-portofolio-kelas-detail.php'" class="btn btn-xs btn-outline-info"> <i class='fas fa-info-circle'> </i></button>
                      </td>
                    </tr>
                    <tr>
                      <td align="center">5</td>
                      <td>
                        Rekayasa Perangkat Lunak<br>
                        <!-- <small><b>(IF302)</b></small> -->
                      </td>
                      <td align="center">5</td>
                      <td align="center">F</td>
                      <td align="center"><b>25</b></td>
                      <td class="text-center">
                       <button type="button" onclick="window.location='perkuliahan-portofolio-kelas-detail.php'" class="btn btn-xs btn-outline-info"> <i class='fas fa-info-circle'> </i></button>
                      </td>
                    </tr>
                    <tr>
                      <td align="center">6</td>
                      <td>
                        Metode Pelaksanaan Bangunan<br>
                        <!-- <small><b>(STS704)</b></small> -->
                      </td>
                      <td align="center">5</td>
                      <td align="center">E</td>
                      <td align="center"><b>22</b></td>
                      <td class="text-center">
                        <button type="button" onclick="window.location='perkuliahan-portofolio-kelas-detail.php'" class="btn btn-xs btn-outline-info"> <i class='fas fa-info-circle'> </i></button>
                      </td>
                    </tr>
                    <tr>
                      <td align="center">7</td>
                      <td>
                        Bahan Perkerasan Jalan (+Pr)<br>
                        <!-- <small><b>(STS307)</b></small> -->
                      </td>
                      <td align="center">9</td>
                      <td align="center">F</td>
                      <td align="center"><b>24</b></td>
                      <td class="text-center">
                        <button type="button" onclick="window.location='perkuliahan-portofolio-kelas-detail.php'" class="btn btn-xs btn-outline-info"> <i class='fas fa-info-circle'> </i></button>
                      </td>
                    </tr>
                    <tr>
                      <td align="center">8</td>
                      <td>
                        Metodologi Penelitian<br>
                        <!-- <small><b>(IF501)</b></small> -->
                      </td>
                      <td align="center">9</td>
                      <td align="center">C</td>
                      <td align="center"><b>20</b></td>
                      <td class="text-center">
                        <button type="button" onclick="window.location='perkuliahan-portofolio-kelas-detail.php'" class="btn btn-xs btn-outline-info"> <i class='fas fa-info-circle'> </i></button>
                      </td>
                    </tr>
                    <tr>
                      <td align="center">9</td>
                      <td>
                        Skripsi<br>
                        <!-- <small><b>(IF601)</b></small> -->
                      </td>
                      <td align="center">9</td>
                      <td align="center">G</td>
                      <td align="center"><b>24</b></td>
                      <td class="text-center">
                        <button type="button" onclick="window.location='perkuliahan-portofolio-kelas-detail.php'" class="btn btn-xs btn-outline-info"> <i class='fas fa-info-circle'> </i></button>
                      </td>
                    </tr>
                    <tr>
                      <td align="center">10</td>
                      <td>
                        Bahan Perkerasan Jalan (+Pr)<br>
                        <!-- <small><b>(STS307)</b></small> -->
                      </td>
                      <td align="center">9</td>
                      <td align="center">E</td>
                      <td align="center"><b>22</b></td>
                      <td class="text-center">
                        <button type="button" onclick="window.location='perkuliahan-portofolio-kelas-detail.php'" class="btn btn-xs btn-outline-info"> <i class='fas fa-info-circle'> </i></button>
                      </td>
                    </tr>
                    <tr>
                      <td align="center">11</td>
                      <td>
                        Bahan Perkerasan Jalan (+Pr)<br>
                        <small><b>(STS307)</b></small>
                      </td>
                      <td align="center">9</td>
                      <td align="center">D</td>
                      <td align="center"><b>24</b></td>
                      <td class="text-center">
                        <button type="button" class="btn btn-xs btn-outline-info" onclick="window.location='progres-kelas-semester-detail.php'"><i class="fas fa-info-circle"></i></button>
                        <a href="data-portofolio-cpmk.pdf" download class="btn btn-xs btn-outline-success"><i class="fas fa-download"></i></a>
                      </td>
                    </tr>

                  </tbody>
                </table>


              </div>
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

  </div>

  <?php include('4footer.php'); ?>
  <!-- //modal dan skrip khusus di halaman ini -->
<script>
  const ctx = document.getElementById('chartLOA').getContext('2d');

  const chartLOA = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        'CPL-1', 'CPL-2', 'CPL-3', 'CPL-4',
        'CPL-5', 'CPL-6', 'CPL-7', 'CPL-8',
        'CPL-9', 'CPL-10', 'CPL-11', 'CPL-12'
      ],
      datasets: [{
        label: 'Persentase Capaian (%)',
        data: [85, 78, 90, 72, 88, 65, 70, 80, 60, 55, 92, 75],
        backgroundColor: 'rgba(54, 162, 235, 0.7)',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true,
          max: 100,
          title: {
            display: true,
            text: 'Persentase (%)'
          }
        },
        x: {
          title: {
            display: true,
            text: 'Capaian Pembelajaran Lulusan (CPL)'
          }
        }
      },
      plugins: {
        legend: {
          display: true,
          position: 'top'
        },
        tooltip: {
          enabled: true,
          callbacks: {
            label: function(context) {
              return context.parsed.y + '%';
            }
          }
        }
      }
    }
  });
</script>

<script>
    // Data
    // const labels = ["Perencanaan", "Pelaksanaan", "Penugasan", "Penilaian", "Capaian", "CQI"];
    const labels = ["RPS", "Materi Ajar", "Penugasan", "Soal Ujian", "Nilai CPMK", "EDOM"];
    const kosong = [23, 35, 28, 42, 18, 52];
    const ada = [46, 34, 41, 27, 51, 17];

    const persentaseKosong = kosong.map((k, i) => (k / (k + ada[i]) * 100).toFixed(1));
    const persentaseAda = ada.map((a, i) => (a / (kosong[i] + a) * 100).toFixed(1));

    // ===============================
    // HORIZONTAL STACKED BAR
    // ===============================
    new Chart(document.getElementById("stackedChart"), {
        type: "bar",
        data: {
            labels: labels,
            datasets: [
                {
                    label: "Ada (%)",
                    data: persentaseAda,
                    backgroundColor: "rgba(255, 99, 132, 0.7)",
                    borderColor: "rgb(255, 99, 132)",
                    borderWidth: 2
                },
                {
                    label: "Kosong (%)",
                    data: persentaseKosong,
                    backgroundColor: "rgba(255, 255, 255, 1)",
                    borderColor: "rgb(255, 99, 132)",
                    borderWidth: 2
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            indexAxis: 'y', // <= bikin horizontal
            scales: {
                x: { stacked: true, max: 100, beginAtZero: true },
                y: { stacked: true }
            }
        }
    });
</script>

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


</div>
  <?php include('5script.php'); ?>
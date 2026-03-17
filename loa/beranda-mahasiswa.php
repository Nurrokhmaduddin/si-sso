<?php $page = 'beranda_mahasiswa'; ?>
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
                <h5>CPMK Tuntas</h5>
                <h3>20 / 34 CPMK</h3>
                <p class="mb-0">
                  <i class="fas fa-chart-line"></i>
                  dengan skor ≥ 70
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card bg-warning text-white">
              <div class="card-body">
                <h5>Mata Kuliah Tuntas</h5>
                <h3>5 / 6 Mata Kuliah</h3>
                <p class="mb-0">
                  <i class="fas fa-user-graduate"></i>
                    dengan nilai akhir huruf ≥ C 
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
<!-- ========== CARD 4: Chart CPL-IK ========== -->     
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i>
      Bar Chart
    </h5>
    <div class="card-tools">
      <small class="text-muted">matakuliah ditempuh</small>
    </div>
  </div>
  <div class="card-body p-0">
  <div class="chart-container">
    <canvas id="chartCPL1" width="100%" height="30"></canvas>
  </div>     
  </div> 
</div>
            <!-- ========== CARD : Stacked Bar Chart ========== -->
            <!-- <div class="card">
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
            </div> -->
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


<!-- ========== CARD :  Grafik Radar CPL & Progress ========== --> 
<!-- <div class="card p-3">
  <div class="row">


    <div class="col-lg-12">
      <canvas id="chartCPL3" width="100%" height="50"></canvas>
    </div>


    
  </div>
</div> -->
        <!-- Card Action Capability -->
        <div class="card">

          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-clipboard-list mr-2"></i>
              User Capability Action (UX interaction)
            </h3>
          </div>

          <div class="card-body p-1">
            <table class="table table-bordered table-striped table-sm">
              <thead class="bg-light">
                <tr class="text-uppercase text-center">
                  <th style="width:25%;">Business Capability</th>
                  <th style="width:25%;">Action</th>
                  <th style="width:180px">Input</th>
                  <th style="width:150px">Event of Detail</th>
                  <th style="width:20%;">UX Interaction</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>Access System</td>
                  <td>Login ke sistem</td>
                  <td>username, password</td>
                  <td>USER_LOGIN</td>
                  <td>Submit form</td>
                </tr>

                <tr>
                  <td>Course Access</td>
                  <td>Mengakses kelas perkuliahan</td>
                  <td>mata kuliah, kelas</td>
                  <td>CLASS_OPENED</td>
                  <td>Klik daftar kelas</td>
                </tr>

                <tr>
                  <td>Learning Material</td>
                  <td>Mengunduh materi pembelajaran</td>
                  <td>file materi</td>
                  <td>LEARNING_MATERIAL_VIEWED</td>
                  <td>Klik download</td>
                </tr>

                <!-- <tr>
                  <td>Assignment Access</td>
                  <td>Melihat instruksi tugas</td>
                  <td>dokumen tugas</td>
                  <td>ASSIGNMENT_VIEWED</td>
                  <td>Klik dokumen</td>
                </tr> -->

                <!-- <tr>
                  <td>Assignment Submission</td>
                  <td>Mengunggah tugas</td>
                  <td>file tugas</td>
                  <td>ASSIGNMENT_SUBMITTED</td>
                  <td>Upload file</td>
                </tr>

                <tr>
                  <td>Quiz / Assessment</td>
                  <td>Mengerjakan kuis online</td>
                  <td>jawaban kuis</td>
                  <td>QUIZ_SUBMITTED</td>
                  <td>Submit form</td>
                </tr>

                <tr>
                  <td>Exam Participation</td>
                  <td>Mengikuti ujian</td>
                  <td>jawaban ujian</td>
                  <td>EXAM_SUBMITTED</td>
                  <td>Submit form</td>
                </tr> -->

                <tr>
                  <td>Learning Progress</td>
                  <td>Melihat progres pencapaian CPMK</td>
                  <td>data hasil penilaian</td>
                  <td>CPMK_PROGRESS_VIEWED</td>
                  <td>Klik dashboard</td>
                </tr>

                <tr>
                  <td>Grades Access</td>
                  <td>Melihat nilai</td>
                  <td>data nilai</td>
                  <td>GRADE_VIEWED</td>
                  <td>Klik tab nilai</td>
                </tr>

                <tr>
                  <td>Feedback Access</td>
                  <td>Melihat feedback dosen</td>
                  <td>komentar penilaian</td>
                  <td>FEEDBACK_VIEWED</td>
                  <td>Klik detail nilai</td>
                </tr>

                <!-- <tr>
                  <td>Discussion Participation</td>
                  <td>Berpartisipasi dalam diskusi</td>
                  <td>komentar diskusi</td>
                  <td>DISCUSSION_POSTED</td>
                  <td>Submit komentar</td>
                </tr> -->

                <tr>
                  <td>Announcement Access</td>
                  <td>Membaca pengumuman kelas</td>
                  <td>pengumuman</td>
                  <td>ANNOUNCEMENT_VIEWED</td>
                  <td>Klik pengumuman</td>
                </tr>

                <tr>
                  <td>Academic Advisory</td>
                  <td>Melihat data perwalian</td>
                  <td>data akademik</td>
                  <td>ADVISORY_DATA_VIEWED</td>
                  <td>Klik menu perwalian</td>
                </tr>

                <!-- <tr>
                  <td>Course Reflection</td>
                  <td>Mengisi refleksi pembelajaran</td>
                  <td>jawaban refleksi</td>
                  <td>COURSE_REFLECTION_SUBMITTED</td>
                  <td>Isi form</td>
                </tr> -->

                <tr>
                  <td>Profile Management</td>
                  <td>Memperbarui profil mahasiswa</td>
                  <td>data profil</td>
                  <td>PROFILE_UPDATED</td>
                  <td>Edit form</td>
                </tr>
              </tbody>
            </tbody>
          </table>
          </div>
          <div class="card-footer small text-muted">
            <strong>Lifecycle:</strong>
            Planning → Requirement → Design → Development → Testing → Deployment / Launching (BAST) → Maintenance / Subscription Service
          </div>
        </div>



        <!-- Card Metric Laporan -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-clipboard-list mr-2"></i>
              Dashboard / Reporting Spec(analytics layer)
            </h3>
          </div>

          <div class="card-body p-1">
            <table class="table table-bordered table-striped table-sm mb-0">
              <thead class="table-dark">
                <tr class="text-uppercase text-center">
                  <th style="width:25%;">Business Goal</th>
                  <th style="width:25%;">Metric</th>
                  <th style="width:20%;">Level of Detail</th>
                  <th style="width:30%;">Visual Type</th>
                </tr>
              </thead>
              <tbody>
                      <td>Memahami progres pembelajaran</td>
      <td>Persentase progres perkuliahan yang telah diselesaikan</td>
      <td>Per mata kuliah</td>
      <td>Progress Bar</td>
    </tr>

    <tr>
      <td>Memantau performa akademik</td>
      <td>Rata-rata nilai sementara</td>
      <td>Per mata kuliah</td>
      <td>KPI Card</td>
    </tr>

    <tr>
      <td>Mengetahui pencapaian learning outcome</td>
      <td>Status pencapaian CPMK</td>
      <td>Per CPMK</td>
      <td>Radar Chart</td>
    </tr>

    <tr>
      <td>Melihat perkembangan nilai</td>
      <td>Tren nilai dari setiap assessment</td>
      <td>Per assessment</td>
      <td>Line Chart</td>
    </tr>

    <tr>
      <td>Memantau distribusi nilai pribadi</td>
      <td>Perbandingan nilai mahasiswa dengan rata-rata kelas</td>
      <td>Per assessment</td>
      <td>Bar Chart</td>
    </tr>

    <!-- <tr>
      <td>Menghindari keterlambatan tugas</td>
      <td>Status pengumpulan tugas</td>
      <td>Per tugas</td>
      <td>Status Label</td>
    </tr>

    <tr>
      <td>Mengetahui tugas yang belum selesai</td>
      <td>Jumlah tugas yang belum dikumpulkan</td>
      <td>Per mata kuliah</td>
      <td>Badge / Counter</td>
    </tr> -->

    <tr>
      <td>Memahami kontribusi penilaian</td>
      <td>Bobot komponen penilaian (tugas, quiz, ujian)</td>
      <td>Per mata kuliah</td>
      <td>Donut Chart</td>
    </tr>

    <!-- <tr>
      <td>Mengevaluasi pemahaman materi</td>
      <td>Skor per topik pembelajaran</td>
      <td>Per topik</td>
      <td>Horizontal Bar Chart</td>
    </tr> -->

    <tr>
      <td>Mengidentifikasi kelemahan belajar</td>
      <td>CPMK yang belum tercapai</td>
      <td>Per CPMK</td>
      <td>Alert / Highlight</td>
    </tr>

    <!-- <tr>
      <td>Memantau aktivitas belajar</td>
      <td>Frekuensi akses materi pembelajaran</td>
      <td>Per minggu</td>
      <td>Line Chart</td>
    </tr> -->

    <tr>
      <td>Memahami feedback dosen</td>
      <td>Ringkasan komentar atau evaluasi dosen</td>
      <td>Per assessment</td>
      <td>Comment Panel</td>
    </tr>

    <!-- <tr>
      <td>Mempersiapkan ujian</td>
      <td>Daftar materi yang diujikan</td>
      <td>Per ujian</td>
      <td>Checklist List</td>
    </tr> -->

    <tr>
      <td>Memantau performa keseluruhan</td>
      <td>Ringkasan performa akademik semester</td>
      <td>Per semester</td>
      <td>Dashboard Summary</td>
    </tr>

    <tr>
      <td>Mengetahui risiko akademik</td>
      <td>Indikator peringatan dini (nilai rendah / CPMK belum tercapai)</td>
      <td>Per mata kuliah</td>
      <td>Alert Card</td>
    </tr>
                

                
<!-- 
                <tr>
                  <td>Memantau pengumpulan tugas</td>
                  <td>Persentase tugas terkumpul</td>
                  <td>Per tugas</td>
                  <td>Donut Chart</td>
                </tr> -->

                <!-- <tr>
                  <td>Mengidentifikasi keterlambatan</td>
                  <td>Jumlah tugas terlambat</td>
                  <td>Per tugas</td>
                  <td>Bar Chart</td>
                </tr> -->

                <tr>
                  <td>Menilai performa mahasiswa</td>
                  <td>Rata-rata nilai kelas</td>
                  <td>Per kelas</td>
                  <td>KPI Card</td>
                </tr>

                

                

                <!-- <tr>
                  <td>Memantau aktivitas diskusi</td>
                  <td>Jumlah partisipasi diskusi mahasiswa</td>
                  <td>Per kelas</td>
                  <td>Line Chart</td>
                </tr> -->

               <!--  <tr>
                  <td>Mengevaluasi proses belajar</td>
                  <td>Rata-rata waktu penyelesaian tugas</td>
                  <td>Per tugas</td>
                  <td>KPI Card</td>
                </tr> -->

                <tr>
                  <td>Mendukung evaluasi pembelajaran</td>
                  <td>Hasil refleksi mahasiswa</td>
                  <td>Per kelas</td>
                  <td>Word Cloud / Summary</td>
                </tr>

              </tbody>
            </table>
          </div>

          <div class="card-footer small text-muted">
            <strong>Lifecycle:</strong>
            Planning → Requirement → Design → Development → Testing → Deployment / Launching (BAST) → Maintenance / Subscription Service
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

<!-- Chart Script -->
<script>
    const ctx4 = document.getElementById("chartCPL1");

    new Chart(ctx4, {
        type: 'bar',
        data: {
            labels: ['Angka','CPMK 1', 'CPMK 2', 'CPMK 3', 'CPMK 4', 'CPMK 5'],
            // datasets: [
            //   {
            //     label: 'MK A',
            //     data: [90, 80, 88, 87.33],
            //     backgroundColor: [
            //       '#007bff',  
            //       '#6c757d', 
            //       '#6c757d', 
            //       '#6c757d'
            //     ],
            //     borderColor: [
            //       '#007bff',
            //       '#6c757d',
            //       '#6c757d',
            //       '#6c757d'
            //     ],
            //     borderWidth: 1
            //   },
            //   {
            //     label: 'MK B',
            //     data: [90, 80, 88, 87.33],
            //     backgroundColor: [
            //       '#007bff',  
            //       '#6c757d', 
            //       '#6c757d', 
            //       '#6c757d' 
            //     ],
            //     borderColor: [
            //       '#007bff',
            //       '#6c757d',
            //       '#6c757d',
            //       '#6c757d'
            //     ],
            //     borderWidth: 1
            //   }
            // ],

            datasets: [
                {
                    label: 'MK A',
                    data: [82, 75, 88, 81.66,90],
                    backgroundColor: '#9c057d',
                    borderColor: '#9c057d',
                    borderWidth: 1
                },
                {
                    label: 'MK B',
                    data: [82, 75, 88, 81.66,8,55],
                    backgroundColor: '#6c759d',
                    borderColor: '#6c759d',
                    borderWidth: 1
                },
                {
                    label: 'MK C',
                    data: [82, 75, 88, 81.66,67],
                    backgroundColor: '#6c757d',
                    borderColor: '#6c757d',
                    borderWidth: 1
                },
                {
                    label: 'MK D',
                    data: [90, 80, 92, 87.33],
                    backgroundColor: '#807bff',
                    borderColor: '#807bff',
                    borderWidth: 1
                },
                {
                    label: 'MK E',
                    data: [90, 80, 92, 87.33],
                    backgroundColor: '#007bff',
                    borderColor: '#007bff',
                    borderWidth: 1
                },
                {
                    label: 'MK F',
                    data: [90, 80, 92, 87.33],
                    backgroundColor: '#700766',
                    borderColor: '#700766',
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'top' },
                annotation: {
                    annotations: {
                        targetLine: {
                            type: 'line',
                            yMin: 65,      // <<< TARGET CAPAIAN
                            yMax: 65,
                            borderColor: 'red',
                            borderWidth: 2,
                            borderDash: [6, 6],
                            label: {
                                display: true,
                                content: 'Target 65',
                                position: 'start',
                                color: 'red',
                                backgroundColor: 'rgba(255,255,255,0.7)',
                                padding: 4
                            }
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<script>
const ctx3 = document.getElementById("chartCPL3");

new Chart(ctx3, {
  type: 'bar',
  data: {
    labels: [
      'ANgka',
      'CPMK 1','CPMK 2','CPMK 3','CPMK 4','CPMK 5'
    ],
    datasets: [
      {
        label: 'Rerata Nilai CPL',
         data: [90,65,88,91,89,93,82,87,92,94],
        backgroundColor: 'rgba(75, 192, 75, 0.7)',
        borderColor: 'rgb(75, 192, 75)',
        borderWidth: 2
      },
      {
        label: 'Rerata Nilai CPL',
         data: [90,65,88,91,89,93,82,87,92,94],
        backgroundColor: 'rgba(90, 90, 75, 0.7)',
        borderColor: 'rgb(75, 192, 75)',
        borderWidth: 2
      }
    ]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { position: 'top' },
      annotation: {
        annotations: {
          targetLine: {
            type: 'line',
            yMin: 80,
            yMax: 80,
            borderColor: 'red',
            borderWidth: 2,
            borderDash: [6, 6],
            label: {
              display: true,
              content: 'Target % Mahasiswa = 60',
              position: 'start',
              color: 'red',
              backgroundColor: 'rgba(255,255,255,0.7)',
              padding: 4
            }
          }
        }
      }
    },
    scales: {
      y: {
        beginAtZero: true,
        max: 100
      }
    }
  }
});
</script>
  <?php include('5script.php'); ?>
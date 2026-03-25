<?php 
$page = 'beranda_dosen';  
include('1header.php'); 
include('2navbar.php'); 
include('3sidebar-dosen.php'); 
?>
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
                    dengan nilai ≥ C pada semester ini
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
                <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i> 
                  Proporsi Portofolio Kelas Diampu (%)
                </h5>
                <div class="card-tools">
                  <small class="text-muted">Semester Terpilih</small>
                </div>
              </div>

              <div class="card-body  d-flex flex-column">
                <!-- <div class="flex-grow-1"> -->
                  <canvas id="stackedChart" width="100%" height="40"></canvas>
                <!-- </div> -->
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
                  <td rowspan="6">Class Portfolio Management</td>
                  <td>Mengakses portofolio kelas perkuliahan</td>
                  <td>kelas perkuliahan</td>
                  <td>CLASS_PORTFOLIO_OPENED</td>
                  <td>Klik menu portofolio</td>
                </tr>
                <tr>
                  <!-- <td>Course Planning</td> -->
                  <td>Upload RPS mata kuliah</td>
                  <td>deskripsi MK, metode, bobot nilai</td>
                  <td>RPS_UPLOADED</td>
                  <td>Upload file</td>
                </tr>
                <tr>
                  <!-- <td>Learning Material Management</td> -->
                  <td>Upload materi pembelajaran</td>
                  <td>file slides / modul / bahan ajar</td>
                  <td>LEARNING_MATERIAL_UPLOADED</td>
                  <td>Upload file</td>
                </tr>
                <tr>
                  <!-- <td>Assignment Management</td> -->
                  <td>Upload dokumen penugasan mahasiswa</td>
                  <td>file tugas / instruksi tugas</td>
                  <td>ASSIGNMENT_DOCUMENT_UPLOADED</td>
                  <td>Upload file</td>
                </tr>
                <tr>
                  <!-- <td>Exam Submission</td> -->
                  <td>Upload soal ujian</td>
                  <td>file soal UTS / UAS</td>
                  <td>EXAM_DOCUMENT_UPLOADED</td>
                  <td>Upload file</td>
                </tr>
                <!-- <tr>
                  <td>Assessment Setup</td>
                  <td>Membuat komponen penilaian</td>
                  <td>jenis assessment, bobot</td>
                  <td>ASSESSMENT_CREATED</td>
                  <td>Klik tambah assessment</td>
                </tr>
                <tr>
                  <td>Rubric Management</td>
                  <td>Menginput rubrik penilaian</td>
                  <td>kriteria, skor</td>
                  <td>RUBRIC_CREATED</td>
                  <td>Isi tabel rubrik</td>
                </tr> -->
                <!-- <tr>
                  <td rowspan="2">Student Assessment</td>
                  <td>Melihat penilaian mahasiswa</td>
                  <td>kelas, mahasiswa</td>
                  <td>STUDENT_GRADES_VIEWED</td>
                  <td>Klik tab penilaian</td>
                </tr> -->
                <tr>
                  <!-- <td>Grading</td> -->
                  <td>Input nilai cpmk mahasiswa</td>
                  <td>nilai CPMK</td>
                  <td>STUDENT_GRADES_INSERTED</td>
                  <td>Input tabel nilai</td>
                </tr>
                <!-- <tr>
                  <td>Grading</td>
                  <td>Penilaian berbasis rubrik</td>
                  <td>skor rubrik</td>
                  <td>RUBRIC_SCORE_SUBMITTED</td>
                  <td>Pilih skor</td>
                </tr> -->
                
                <!-- <tr>
                  <td>CLO Evaluation</td>
                  <td>Generate pencapaian CLO</td>
                  <td>data nilai assessment</td>
                  <td>CLO_ACHIEVEMENT_CALCULATED</td>
                  <td>Klik generate</td>
                </tr> -->
                <tr>
                  <td rowspan="5">Management Evaluation</td>
                  <td>Mengisi evaluasi mata kuliah</td>
                  <td>refleksi dosen</td>
                  <td>COURSE_EVALUATION_SUBMITTED</td>
                  <td>Isi form</td>
                </tr>
                <tr>
                  <!-- <td>Class Reflection</td> -->
                  <td>Mengisi refleksi kelas</td>
                  <td>tag refleksi CPMK</td>
                  <td>CLASS_REFLECTION_SUBMITTED</td>
                  <td>Checklist tag refleksi</td>
                </tr>
                <tr>
                  <!-- <td>Semester Reflection</td> -->
                  <td>Mengisi formulir refleksi akhir semester</td>
                  <td>jawaban refleksi dosen</td>
                  <td>SEMESTER_REFLECTION_SUBMITTED</td>
                  <td>Isi form refleksi</td>
                </tr>
                <tr>
                  <!-- <td>CQI Result</td> -->
                  <td>Menginput evaluasi Pembelajaran kelas</td>
                  <td>action hasil perbaikan</td>
                  <td>CQI_PLAN_CREATED</td>
                  <td>Submit form</td>
                </tr>
                <tr>
                  <!-- <td>CQI Action</td> -->
                  <td>Menginput rencana perbaikan </td>
                  <td>action plan matakuliah</td>
                  <td>CQI_ACTION_CREATED</td>
                  <td>Submit form</td>
                </tr>
                
                
                <!-- <tr>
                  <td>Announcement Management</td>
                  <td>Membuat pengumuman kelas</td>
                  <td>judul, isi pengumuman</td>
                  <td>ANNOUNCEMENT_CREATED</td>
                  <td>Submit form</td>
                </tr> -->


                
                
                <tr>
                  <td rowspan="4">OBE Monitoring</td>
                  <td>Melihat monitoring pencapaian kelas</td>
                  <td>filter by</td>
                  <td>MONEV_KELAS_VIEWED</td>
                  <td>Klik menu monev kelas</td>
                </tr>
                <tr>
                  <!-- <td>Reporting</td> -->
                  <td>Generate laporan OBE kelas</td>
                  <td>semester, mata kuliah, kelas</td>
                  <td>COURSE_REPORT_GENERATED</td>
                  <td>Klik generate report</td>
                </tr>
                <tr>
                  <!-- <td>OBE Monitoring</td> -->
                  <td>Melihat monitoring pencapaian CPMK per semester</td>
                  <td>filter by</td>
                  <td>MONEV_SEMESTER_VIEWED</td>
                  <td>Klik menu monev semester</td>
                </tr>
                <tr>
                  <!-- <td>Reporting</td> -->
                  <td>Generate laporan OBE mata kuliah</td>
                  <td>semester, mata kuliah, kelas</td>
                  <td>COURSE_REPORT_GENERATED</td>
                  <td>Klik generate report</td>
                </tr>
                
                <tr>
                  <td>Academic Advisory</td>
                  <td>Mengakses data perwalian mahasiswa</td>
                  <td>daftar mahasiswa bimbingan</td>
                  <td>ADVISORY_DATA_VIEWED</td>
                  <td>Klik menu perwalian</td>
                </tr>
                <tr>
                  <td>Graduation Review</td>
                  <td>Melihat data yudisium mahasiswa</td>
                  <td>status kelulusan mahasiswa</td>
                  <td>GRADUATION_DATA_VIEWED</td>
                  <td>Klik menu yudisium</td>
                </tr>
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
                <tr>
                  <td>Memantau keterlibatan mahasiswa</td>
                  <td>Persentase mahasiswa mengakses materi</td>
                  <td>Per materi</td>
                  <td>Bar Chart</td>
                </tr>
                <tr>
                  <td>Melihat distribusi nilai</td>
                  <td>Distribusi grade A–E</td>
                  <td>Per kelas</td>
                  <td>Histogram</td>
                </tr>
                <tr>
                  <td>Mengevaluasi pencapaian CPMK</td>
                  <td>Persentase mahasiswa mencapai CPMK</td>
                  <td>Per CPMK</td>
                  <td>Bar Chart</td>
                </tr>

                <tr>
                  <td>Mengidentifikasi mahasiswa berisiko</td>
                  <td>Jumlah mahasiswa tidak mencapai CPMK</td>
                  <td>Per CPMK</td>
                  <td>Alert / Highlight</td>
                </tr>

                <tr>
                  <td>Menganalisis efektivitas tugas</td>
                  <td>Kontribusi tugas terhadap pencapaian CPMK</td>
                  <td>Per assessment</td>
                  <td>Stacked Bar</td>
                </tr>
                <tr>
                  <td>Mengetahui performa mata kuliah</td>
                  <td>Jumlah mahasiswa terdaftar</td>
                  <td>Per kelas</td>
                  <td>KPI Card</td>
                </tr>
                <tr>
                  <td>Memastikan pencapaian learning outcome</td>
                  <td>Persentase pencapaian CLO</td>
                  <td>Per CLO</td>
                  <td>Bar Chart</td>
                </tr>
                <tr>
                  <td>Memantau kontribusi ke program studi</td>
                  <td>Pencapaian PLO dari mata kuliah</td>
                  <td>Per PLO</td>
                  <td>Radar Chart</td>
                </tr>
                <tr>
                  <td>Mengetahui performa mahasiswa</td>
                  <td>Rata-rata nilai kelas</td>
                  <td>Per kelas</td>
                  <td>KPI Card</td>
                </tr>
                <tr>
                  <td>Melihat distribusi nilai mahasiswa</td>
                  <td>Distribusi grade A–E</td>
                  <td>Per kelas</td>
                  <td>Histogram</td>
                </tr>
                <tr>
                  <td>Mengidentifikasi CLO bermasalah</td>
                  <td>CLO yang tidak mencapai target</td>
                  <td>Per CLO</td>
                  <td>Highlight Table</td>
                </tr>
                <tr>
                  <td>Menganalisis assessment</td>
                  <td>Kontribusi assessment terhadap CLO</td>
                  <td>Per assessment</td>
                  <td>Stacked Bar</td>
                </tr>
                <tr>
                  <td>Mengetahui performa mahasiswa per CLO</td>
                  <td>Persentase mahasiswa lulus CLO</td>
                  <td>Per CLO</td>
                  <td>Donut Chart</td>
                </tr>
                <tr>
                  <td>Memantau kualitas evaluasi</td>
                  <td>Rata-rata skor per assessment</td>
                  <td>Per assessment</td>
                  <td>Bar Chart</td>
                </tr>
                <tr>
                  <td>Melihat tren performa kelas</td>
                  <td>Perbandingan nilai semester sebelumnya</td>
                  <td>Per semester</td>
                  <td>Line Chart</td>
                </tr>
                <tr>
                  <td>Mendukung evaluasi kurikulum</td>
                  <td>Kontribusi mata kuliah ke PLO</td>
                  <td>Program studi</td>
                  <td>Radar Chart</td>
                </tr>
                <tr>
                  <td>Mendukung continuous improvement</td>
                  <td>Jumlah CQI action plan</td>
                  <td>Per semester</td>
                  <td>KPI Card</td>
                </tr>
                <tr>
                  <td>Mengidentifikasi mahasiswa berisiko</td>
                  <td>Mahasiswa gagal CLO</td>
                  <td>Per mahasiswa</td>
                  <td>Alert / Table</td>
                </tr>
                <tr>
                  <td>Memudahkan audit akademik</td>
                  <td>Status kelengkapan evidence</td>
                  <td>Per mata kuliah</td>
                  <td>Status Label</td>
                </tr>
                <tr>
                  <td>Mendukung akreditasi</td>
                  <td>Course Assessment Report</td>
                  <td>Per mata kuliah</td>
                  <td>Export PDF</td>
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
  <?php include('5script.php'); ?>
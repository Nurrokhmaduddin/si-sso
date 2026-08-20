<?php 
$page = 'beranda_manajer';  
include('1header.php'); 
include('2navbar.php'); 
include('3sidebar-manajer.php'); 
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
                <h5>Capaian IK Semester</h5>
                <h3>18 / 324 IK</h3>
                <p class="mb-0">
                  <i class="fas fa-chart-line"></i>
                  yang ≥ target standar
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card bg-warning text-white">
              <div class="card-body">
                <h5>Tindak Lanjut Evaluasi</h5>
                <h3>90%</h3>
                <p class="mb-0">
                  <i class="fas fa-tasks"></i>
                  yang sudah ditindaklanjuti
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

            <!-- ========== CARD 4: CHART 1 ========== -->    
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0"><i class="fas fa-chart-bar mr-2"></i>
                  Ringkasan Kuantitatif
                </h5>
                <div class="card-tools">
                  <small class="text-muted">Semester Terpilih</small>
                </div>
              </div>
              <div class="card-body d-flex flex-column">
                <canvas id="chartIKG" width="100%" height="40"></canvas>
                
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

          <div class="card-body p-0">
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
                  <td>Course Management</td>
                  <td>Memilih mata kuliah yang diajar</td>
                  <td>semester, kode MK</td>
                  <td>COURSE_SELECTED</td>
                  <td>Klik daftar mata kuliah</td>
                </tr>
                <tr>
                  <td>Course Planning</td>
                  <td>Menginput RPS mata kuliah</td>
                  <td>deskripsi MK, metode, bobot nilai</td>
                  <td>RPS_CREATED</td>
                  <td>Isi form</td>
                </tr>
                <tr>
                  <td>OBE Mapping</td>
                  <td>Mapping CLO ke PLO</td>
                  <td>daftar CLO, PLO</td>
                  <td>CLO_PLO_MAPPED</td>
                  <td>Drag & select mapping</td>
                </tr>
                <tr>
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
                </tr>
                <tr>
                  <td>Student Management</td>
                  <td>Import daftar mahasiswa</td>
                  <td>file Excel</td>
                  <td>STUDENT_IMPORTED</td>
                  <td>Upload file</td>
                </tr>
                <tr>
                  <td>Grading</td>
                  <td>Input nilai mahasiswa</td>
                  <td>nilai tugas/quiz/UTS/UAS</td>
                  <td>GRADE_INSERTED</td>
                  <td>Input tabel nilai</td>
                </tr>
                <tr>
                  <td>Grading</td>
                  <td>Penilaian berbasis rubrik</td>
                  <td>skor rubrik</td>
                  <td>RUBRIC_SCORE_SUBMITTED</td>
                  <td>Pilih skor</td>
                </tr>
                <tr>
                  <td>Assessment Submission</td>
                  <td>Upload soal / evidence</td>
                  <td>file dokumen</td>
                  <td>ASSESSMENT_EVIDENCE_UPLOADED</td>
                  <td>Upload file</td>
                </tr>
                <tr>
                  <td>CLO Evaluation</td>
                  <td>Generate pencapaian CLO</td>
                  <td>data nilai assessment</td>
                  <td>CLO_ACHIEVEMENT_CALCULATED</td>
                  <td>Klik generate</td>
                </tr>
                <tr>
                  <td>Course Evaluation</td>
                  <td>Mengisi evaluasi mata kuliah</td>
                  <td>refleksi dosen</td>
                  <td>COURSE_EVALUATION_SUBMITTED</td>
                  <td>Isi form</td>
                </tr>
                <tr>
                  <td>CQI Improvement</td>
                  <td>Menambahkan rencana perbaikan</td>
                  <td>action plan</td>
                  <td>CQI_ACTION_CREATED</td>
                  <td>Klik tambah CQI</td>
                </tr>
                <tr>
                  <td>Reporting</td>
                  <td>Generate laporan OBE</td>
                  <td>semester, mata kuliah</td>
                  <td>COURSE_REPORT_GENERATED</td>
                  <td>Klik generate report</td>
                </tr>
                <tr>
                  <td>Data Export</td>
                  <td>Export laporan</td>
                  <td>format PDF / Excel</td>
                  <td>REPORT_EXPORTED</td>
                  <td>Klik export</td>
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

          <div class="card-body p-0">
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
  const ctxG = document.getElementById('chartIKG').getContext('2d');

  const ikLabelsG = [
    'IK1.1','IK1.2','IK2.1','IK2.2','IK2.3','IK3.1','IK3.2',
    'IK4.1','IK4.2','IK5.1','IK5.2','IK6.1','IK7.1','IK7.2',
    'IK8.1','IK8.2','IK9.1','IK9.2','IK10.1','IK10.2',
    'IK11.1','IK11.2','IK12.1','IK12.2'
  ];

  const ikValuesG = {
    'IK1.1':82,'IK1.2':75,
    'IK2.1':70,'IK2.2':78,'IK2.3':83,
    'IK3.1':72,'IK3.2':76,
    'IK4.1':74,'IK4.2':79,
    'IK5.1':73,'IK5.2':77,
    'IK6.1':85,
    'IK7.1':80,'IK7.2':84,
    'IK8.1':78,'IK8.2':82,
    'IK9.1':75,'IK9.2':79,
    'IK10.1':76,'IK10.2':80,
    'IK11.1':82,'IK11.2':85,
    'IK12.1':88,'IK12.2':90
  };

  const ikToCPLG = {
    'IK1.1':[1],'IK1.2':[1],
    'IK2.1':[2],'IK2.2':[2],'IK2.3':[2],
    'IK3.1':[3],'IK3.2':[3],
    'IK4.1':[4],'IK4.2':[4],
    'IK5.1':[5],'IK5.2':[5,1],
    'IK6.1':[6],
    'IK7.1':[7],'IK7.2':[7],
    'IK8.1':[8],'IK8.2':[8],
    'IK9.1':[9],'IK9.2':[9],
    'IK10.1':[10],'IK10.2':[10],
    'IK11.1':[11],'IK11.2':[11],
    'IK12.1':[12],'IK12.2':[12]
  };

  const cplColorsG = {
    1:'#FF9F40B3',2:'#FFFFFF',3:'#FF9F40B3',4:'#FFFFFF',
    5:'#FF9F40B3',6:'#FFFFFF',7:'#FF9F40B3',8:'#FFFFFF',
    9:'#FF9F40B3',10:'#FFFFFF',11:'#FF9F40B3',12:'#FFFFFF'
  };
  const bdrColorsG = {
    1:'#FF9F40',2:'#FF9F40',3:'#FF9F40',4:'#FF9F40',
    5:'#FF9F40',6:'#FF9F40',7:'#FF9F40',8:'#FF9F40',
    9:'#FF9F40',10:'#FF9F40',11:'#FF9F40',12:'#FF9F40'
  };

    // Buat array entries "IK x CPL"
  const entriesG = [];
  ikLabelsG.forEach(ik => {
    ikToCPLG[ik].forEach(cpl => {
      entriesG.push({ ik, value: ikValuesG[ik], cpl });
    });
  });

    // Urutkan berdasarkan CPL
  entriesG.sort((a,b)=>a.cpl - b.cpl);

    // Label X ringkas (IK saja)
  const labelsXG = entriesG.map(e => ''+ e.ik);

    // Data dan warna
  const dataValuesG = entriesG.map(e => e.value);
  const barColorsG = entriesG.map(e => cplColorsG[e.cpl]);
  const borderColorsG = entriesG.map(e => bdrColorsG[e.cpl]);

  new Chart(ctxG, {
    type: 'bar',
    data: {
      labels: labelsXG,
      datasets: [{
        label: 'Nilai IK',
        data: dataValuesG,
        backgroundColor: barColorsG,
        borderColor: borderColorsG,
        borderWidth: 2
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: true,
          labels: {
            generateLabels: function(chart) {
              const cpls = Object.keys(cplColorsG);
              return cpls.map(cpl => ({
                text: 'CPL ' + cpl,
                fillStyle: cplColorsG[cpl],
                strokeStyle: bdrColorsG[cpl],
                hidden: false,
                index: cpl - 1
              }));
            }
          }
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              const idx = context.dataIndex;
                const e = entriesG[idx]; // referensi ke array entries
                return 'Rerata Nilai '+ e.ik + ' (CPL ' + e.cpl + '): ' + e.value;
              }
            }
          },
          title: { display: false, text: 'IK per CPL (IK bisa muncul di beberapa CPL) - G' }
        },
        scales: {
          x: { title: { display: false, text: 'IK' } },
          y: { beginAtZero:true, max:100, title: { display:false, text:'Nilai IK (%)' } }
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
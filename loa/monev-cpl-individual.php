<?php $page = 'monev_individu'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev CPL Individu
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>
        <p class="text-muted mb-0">Keterangan singkat cara baca informasi halaman ini</p>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Main row -->
      <div class="row">
        <div class="col-md-12">
          <!-- ========== CARD : Filter & Export ========== -->
          <div class="card">
            <!-- <div class="card-header">
              <h5 class="card-title mb-0"><i class="fas fa-filter "></i> Judul Tabel yang terdampak tombol aksi ini </h5>              
            </div> -->
            <div class="card-body ">
              <div class="row">

                <div class="col-md-4">
                  <b>Kurikulum:</b> 2023 &nbsp;
                </div>                
                <div class="col-md-4">
                  <b>Set Pemetaan:</b> v1.0
                </div>
                <div class="col-md-4">
                  <b>Mahasiswa:</b> 20521098 - VEGA AYU CENTYA
                </div>
                
              </div>
            </div>
            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>                
              </div>

            </div>
          </div>

        
  <!-- ========== CARD 3: KPI row ========== --> 
  <style>
    body { background: #f4f6f9; }
    .kpi { border-radius: 10px; padding: 18px; color: #fff; }
    .kpi .big { font-size: 1.6rem; font-weight:700; }
    .kpi .small { font-size: 0.85rem; opacity: .9; }
    .card { border-radius:10px; }
    .status-dot { display:inline-block; width:10px; height:10px; border-radius:50%; margin-right:6px; vertical-align:middle; }
    .status-green { background:#28a745; }
    .status-yellow { background:#ffc107; }
    .status-red { background:#dc3545; }
    .ewstable td, .ewstable th { vertical-align: middle; }
    .table-fixed-height { max-height: 360px; overflow:auto; }
  </style>       
  <div class="row g-3 mb-3">
    <div class="col-md-3">
      <div class="kpi bg-primary">
        <div class="small">Rata-rata CPL</div>
        <div class="big" id="kpiAvg">75.2</div>
        <div class="small">dari 12 CPL</div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="kpi " style="background:#20c997;">
        <div class="small">Rata-rata IK</div>
        <div class="big" id="kpiGap">85 </div>
        <div class="small">dari 24 IK</div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="kpi" style="background:#ff7f0e;">
        <div class="small">Rata-rata CPMK</div>
        <div class="big" id="kpiReached">78</div>
        <div class="small">dari 258</div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="kpi bg-danger">
        <div class="small">Rata-rata Nilai Akhir MK</div>
        <div class="big" id="kpiRisk">78</div>
        <div class="small">dari 78 MK</div>
      </div>
    </div>
  </div>


  <!-- TAB NAV  -->
  <ul class="nav nav-tabs">   
    <li class="nav-item" onclick="window.location='monev_individu1.php'"><a class="nav-link active">Grafik</a></li>
    <li class="nav-item" onclick="window.location='monev_individu2.php'"><a class="nav-link ">Tabel</a></li>
    <li class="nav-item" onclick="window.location='monev_individu3.php'"><a class="nav-link ">Riwayat</a></li>
  </ul>

<!--   <div style="text-align: left;" class="mr-2">
  	<button type="button"  onclick="window.location=;" class="btn btn-info btn-tab">Grafik</button>
  	<button type="button"  onclick="window.location=;" class="btn btn-default btn-tab">Tabel</button>
  	<button type="button"  onclick="window.location=;" class="btn btn-default btn-tab">Riwayat</button>
  </div> -->

 <!-- Chart Row -->
<div class="card">
  <!-- <div class="card-header">
    <h3 class="card-title">
      <i class="fas fa-chart-area mr-1"></i>
      Distribusi & Capaian Pembelajaran
    </h3>
  </div> -->
  <div class="card-body">
    <div class="row">

      <!-- KIRI : RADAR CPL -->
        <div class="chart-container col-md-8 d-flex justify-content-center align-items-center" style="height:420px; width:100%;">
          <canvas id="radarChartCPL" ></canvas>
        </div>


      <!-- KANAN : BAR CHART -->
      <div class="col-md-4">

       
        <!-- Bar Chart IK -->
        <div class="mb-4">          
          <div class="chart-container" style="height:220px;">
            <canvas id="barChartIK" ></canvas>
          </div>
        </div>

        <!-- Bar Chart CPMK -->
        <div class="mb-4">          
          <div class="chart-container" style="height:220px;">
            <canvas id="barChartCPMK"></canvas>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>



<!-- <div class="col-12 "> -->
<!--   <div class="card card-primary card-outline card-outline-tabs">
    <div class="card-header p-0 border-bottom-0">
      <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="custom-tabs-four-home-tab" data-bs-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">Grafik</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="custom-tabs-four-profile-tab" data-bs-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="true">Tabel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="custom-tabs-four-messages-tab" data-bs-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Riwayat</a>
        </li>        
      </ul>
    </div>
    <div class="card-body">
      <div class="tab-content" id="custom-tabs-four-tabContent">
        <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi, vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem. Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur.
       </div>
       <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
         Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
       </div>
       <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
         Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
       </div>
       <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
         Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
       </div>
     </div>
   </div>
 </div> -->
<!-- </div> -->





        </div>
      </div>
    </div>
  </section>
  </div>
  <!-- /.content-wrapper -->

<?php include('4footer.php'); ?>

<!-- Modal Filter -->
<div class="modal fade" id="modalFilter" tabindex="-1" aria-labelledby="modalFilterLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="modalFilterLabel">Filter Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="GET">

        <div class="modal-body">
          <!-- Catatan penting -->
          <div class="alert alert-warning mb-3" role="alert" style="font-size: 0.9rem;">
            <b>Informasi:</b> Halaman ini otomatis menampilkan data angkatan terbaru saat pertama dibuka. Data awal yang tampil adalah angkatan [2025].
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Angkatan --</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="NonAktif">NonAktif</option>
            </select>
          </div>
       
       </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info">Terapkan Filter</button>
        </div>

      </form>
    </div>
  </div>
</div>



<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalTambahDataLabel">Tambah Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="modal-body">

          <!-- Informasi -->
          <div class="alert alert-warning mb-3 py-2" role="alert" style="font-size: 0.9rem;">
            <i class="fas fa-info-circle me-1"></i>
            <strong>Catatan:</strong> Semua field yang diberi tanda <span class="text-danger">*</span> wajib diisi.
          </div>

          <!-- Form Inputs -->
          <div class="mb-3">
            <label for="username" class="form-label">NIM <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
          </div>

          <div class="mb-3">
            <label for="displayname" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="displayname" name="displayname" placeholder="Masukkan Nama Lengkap" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
          </div>

          <div class="mb-3">
            <label for="hp" class="form-label">Nomor HP <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="hp" name="hp" placeholder="Masukkan Nomor HP" required>
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Angkatan --</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Peminatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Peminatan --</option>
              <option value="2025">A</option>
              <option value="2024">B</option>
              <option value="2023">C</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
            <select class="form-select" id="status" name="status" required>
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="NonAktif">NonAktif</option>
              <option value="Cuti">Cuti</option>
              <option value="Skors">Skors</option>
              <option value="PassedOut">Passed Out</option>
              <option value="DropOut">Drop Out</option>
              <option value="Lulus">Lulus</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="foto" class="form-label">Foto <span class="text-danger">*</span></label>
            <input type="file" class="form-control" id="foto" name="foto" required>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Impor -->
<div class="modal fade" id="modalImpor" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Impor Data</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">   
        <div class="alert alert-warning mb-3 py-2" role="alert" style="font-size: 0.9rem;">
          <i class="fas fa-exclamation-triangle me-1"></i>
          <strong>Penting:</strong> Pastikan file yang akan diimpor menggunakan <strong>template resmi</strong> yang sudah disediakan. Menggunakan file lain atau format berbeda dapat menyebabkan <strong>kesalahan impor</strong>.
        </div>     

        <label class="form-label">Pilih File:</label>
        <input type="file" class="form-control mb-3" accept=".xlsx,.xls">

        <a href="template-impor-mahasiswa.xls" class="btn btn-sm btn-outline-success w-100">Download Template</a>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Impor</button>
      </div>

    </div>
  </div>
</div>

<!-- Modal Bantuan -->
<div class="modal fade" id="modalBantuan" tabindex="-1" aria-labelledby="modalBantuanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalBantuanLabel">Bantuan Tabel</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          Ringkasan capaian CPL per Individu Mahasiswa, perkembangan, peringatan dini (EWS), disajikan dalam bentuk grafik dan tabel (Mockup data statis)
        </p>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<script>
const labelsIK = [
  'IK 1','IK 2','IK 3','IK 4','IK 5',
  'IK 6','IK 7','IK 8','IK 9','IK 10',
  'IK 11','IK 12','IK 13','IK 14','IK 15',
  'IK 16','IK 17','IK 18','IK 19','IK 20',
  'IK 21','IK 22','IK 23','IK 24','IK 25'
];

const nilaiIK = [
  78, 65, 90, 55, 88,
  72, 60, 81, 69, 95,
  70, 85, 66, 74, 92,
  58, 80, 77, 68, 83,
  91, 62, 76, 87, 73
];

const ctx = document.getElementById('barChartIK').getContext('2d');

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: labelsIK,
    datasets: [{
      label: 'Nilai IK',
      data: nilaiIK,
      backgroundColor: 'rgba(255, 159, 64, 0.8)', // orange
      borderColor: 'rgba(255, 159, 64, 1)',
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      // title: {
      //   display: true,
      //   // text: 'Capaian IK',
      //   font: {
      //     size: 18
      //   }
      // },
      legend: {
       position: 'top'
      }
    },
    scales: {
      y: {
        min: 0,
        max: 100,
        // title: {
        //   display: true,
        //   text: 'Nilai (0–100)'
        // }
      },
      x: {
        title: {
          display: true,
          // text: 'Indikator Kinerja (IK)'
        }
      }
    }
  }
});
</script>

<script>
// Generate label CPMK 1 - 256
const labelsCPMK = Array.from({ length: 256 }, (_, i) => `CPMK ${i + 1}`);

// Contoh nilai CPMK (0 - 100)
const nilaiCPMK = Array.from({ length: 256 }, () =>
  Math.floor(Math.random() * 101)
);

const cty = document.getElementById('barChartCPMK').getContext('2d');

new Chart(cty, {
  type: 'bar',
  data: {
    labels: labelsCPMK,
    datasets: [{
      label: 'Nilai CPMK',
      data: nilaiCPMK,
      backgroundColor: 'rgba(220, 53, 69, 0.8)', // merah (Bootstrap danger)
      borderColor: 'rgba(220, 53, 69, 1)',
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      // title: {
      //   display: true,
      //   text: 'Capaian CPMK',
      //   font: {
      //     size: 18
      //   }
      // },
      legend: {
        position: 'top'
      },
      tooltip: {
        callbacks: {
          label: function(context) {
            return `Nilai: ${context.raw}`;
          }
        }
      }
    },
    scales: {
      y: {
        min: 0,
        max: 100,
        // title: {
        //   display: true,
        //   text: 'Nilai (0–100)'
        // }
      },
      x: {
        ticks: {
          autoSkip: true,
          maxTicksLimit: 30 // supaya tidak overload
        },
        title: {
          display: true,
          // text: 'CPMK'
        }
      }
    }
  }
});
</script>

<script>
// Label CPL 1 - 12
const labelCPL = [
  'CPL 1','CPL 2','CPL 3','CPL 4','CPL 5','CPL 6',
  'CPL 7','CPL 8','CPL 9','CPL 10','CPL 11','CPL 12'
];

// Contoh nilai CPL (0 - 100)
const nilaiCPL = [
  75, 80, 65, 90, 70, 85,
  78, 88, 72, 60, 83, 95
];

// Identifier canvas (bukan ctx/cty)
const radarCPLCanvas = document.getElementById('radarChartCPL').getContext('2d');

new Chart(radarCPLCanvas, {
  type: 'radar',
  data: {
    labels: labelCPL,
    datasets: [{
      label: 'Nilai CPL',
      data: nilaiCPL,
      backgroundColor: 'rgba(40, 167, 69, 0.3)', // hijau
      borderColor: 'rgba(40, 167, 69, 1)',
      borderWidth: 2,
      pointBackgroundColor: 'rgba(40, 167, 69, 1)'
    }]
  },
  options: {
    responsive: true,
    plugins: {
      // title: {
      //   display: true,
      //   text: 'Capaian CPL',
      //   font: {
      //     size: 18
      //   }
      // },
      legend: {
        position: 'top'
      }
    },
    scales: {
      r: {
        min: 0,
        max: 100,
        ticks: {
          stepSize: 20
        },
        pointLabels: {
          font: {
            size: 11
          }
        }
      }
    }
  }
});
</script>
<?php include('5script.php'); ?>
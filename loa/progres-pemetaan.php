<?php $page = 'progress_pemetaan'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Perbandingan 2 Set Pemetaan OBE
        <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modalBantuan" title="Bantuan">
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
                <p class="mb-0"><strong>Kurikulum:</strong> KT-6 (K20) Kurikulum 2025</p>
              </div>
              <div class="col-md-4">
                <p class="mb-0"><strong>Set Pemetaan A:</strong> full stage</p>
              </div>
              <div class="col-md-4">
                <p class="mb-0"><strong>Set Pemetaan B:</strong> profesional stage</p>
              </div>
                
              </div>
            </div>
            <div class="card-footer">
              <div class="card-tools ml-auto">
                <button class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#modalFilter">
                  <i class="fas fa-filter mr-1"></i> Filter
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download mr-1"></i> Export
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
              <div class="small">Mata Kuliah</div>
              <div class="big" id="kpiAvg">A: 12 | B: 13</div>
              <div class="small">Jumlah MK di masing-masing set pemetaan</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="kpi " style="background:#20c997;">
              <div class="small">CPMK</div>
              <div class="big fs-3 fw-bold">A: 45 | B: 47</div>
              <div class="small">Jumlah CPMK di masing-masing set pemetaan</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="kpi" style="background:#ff7f0e;">
              <div class="small">IK</div>
              <div class="big fs-3 fw-bold">A: 18 | B: 19</div>
              <div class="small">Jumlah IK di masing-masing set pemetaan</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="kpi bg-danger">
              <div class="small">CPL</div>
              <div class="big fs-3 fw-bold">A: 7 | B: 7</div>
              <div class="small">Jumlah CPL di masing-masing set pemetaan</div>
            </div>
          </div>
        </div>
             




  <!-- TAB NAV  -->
  <ul class="nav nav-tabs">   
    <li class="nav-item" onclick="window.location='monev_individu1.php'"><a class="nav-link active">Grafik</a></li>
    <li class="nav-item" onclick="window.location='monev_individu2.php'"><a class="nav-link ">Tabel</a></li>
    <li class="nav-item" onclick="window.location='monev_individu3.php'"><a class="nav-link ">Riwayat</a></li>
  </ul>




<!-- ========== CARD 4: Stacked Bar Chart — Proporsi ========== -->
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0"><i class="fas fa-chart-bar mr-2"></i> Gap & Keserataan Beban Pemetaan</h5>
            <div class="card-tools">
              <small class="text-muted">Set Pemetaan Terpilih</small>
            </div>
          </div>

          <div class="card-body chart-container d-flex flex-column">

            <!-- Bagian Chart -->
            <div class="flex-grow-1">
              <canvas id="gapChart" width="100%" height="22"></canvas>
            </div>

            <!-- Bagian Tombol -->
            <div class="row text-center mt-3">
              <!-- <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-toggle="collapse" data-target="#daftarIKCPL43">
                  Overview Pemetaan MK–CPMK
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-toggle="collapse" data-target="#daftarIKCPL41">
                  Overview Pemetaan IK–CPMK
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-toggle="collapse" data-target="#daftarIKCPL42">
                  Overview Pemetaan CPL–IK
                </button>
              </div> -->
            </div>

          </div>
        </div>


        <!-- ========== CARD 4: Tabel Elemen Baru / Hilang ========== -->  
        <div class="card">
        	<div class="mb-4">
        		<h4>Elemen Baru / Hilang</h4>
        		<div class="table-wrapper">
        			<table class="table table-bordered table-striped">
        				<thead class="table-dark">
        					<tr>
        						<th>Set Pemetaan A</th>
        						<th>Set Pemetaan B</th>
        					</tr>
        				</thead>
        				<tbody>
        					<!-- Elemen hanya ada di Set A (Hilang di B) -->
        					<tr class="status-hilang">
        						<td>MK: Struktur Data</td>
        						<td></td>
        					</tr>
        					<tr class="status-hilang">
        						<td>CPMK-1: Analisis Algoritma</td>
        						<td></td>
        					</tr>

        					<!-- Elemen hanya ada di Set B (Baru muncul) -->
        					<tr class="status-baru">
        						<td></td>
        						<td>MK: Pemrograman Lanjut</td>
        					</tr>
        					<tr class="status-baru">
        						<td></td>
        						<td>IK-7: Mampu menulis laporan</td>
        					</tr>
        				</tbody>
        			</table>
        		</div>
        	</div>
        </div>




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
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form action="" method="GET">

        <div class="modal-body">
          <!-- Catatan penting -->
          <div class="alert alert-warning mb-3" role="alert" style="font-size: 0.9rem;">
            <b>Informasi:</b> Halaman ini otomatis menampilkan data angkatan terbaru saat pertama dibuka. Data awal yang tampil adalah angkatan [2025].
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select name="angkatan" id="angkatan" class="custom-select">
              <option value="">-- Pilih Angkatan --</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="custom-select">
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="NonAktif">NonAktif</option>
            </select>
          </div>
       
       </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info">Terapkan Filter</button>
        </div>

      </form>
    </div>
  </div>
</div>


<!-- Modal Bantuan -->
<div class="modal fade" id="modalBantuan" tabindex="-1" aria-labelledby="modalBantuanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalBantuanLabel">Bantuan Tabel</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>
          Halaman ini menampilkan perbandingan antar dua set pemetaan dalam satu kurikulum yang sama, menyoroti perbedaan jumlah MK, CPMK, IK, dan CPL, elemen yang baru muncul atau hilang, serta status pemetaan masing-masing elemen untuk memudahkan monitoring dan analisis gap pemetaan.
        </p>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
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

<?php include('5script.php'); ?>
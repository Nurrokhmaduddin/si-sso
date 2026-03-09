<?php $page = 'monev_statistik'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>
  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev Statistik
      <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-info-circle"></i>
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
          <div class="card card-outline card-info">
            <div class="card-body ">
              <div class="row">
                 
                <label for="id_jenis" class="control-label">Jenis Statistik</label> 
                <div class="controls ">
                  <select name="jenis" class="select form-control" required="" id="id_jenis" fdprocessedid="1dlp4"> 
                    <option value="" selected="">---------</option> 
                    <option value="1" selected="">Jumlah Pelanggan (Akun) Total Pertahun</option>
                    <option value="2">Jumlah Pelanggan (Akun) Total Perbulan</option>
                    <option value="3">Jumlah Pelanggan (Akun) Internal UII Pertahun</option>
                    <option value="4">Jumlah Pelanggan (Akun) Internal UII Perbulan</option>
                    <option value="5">Jumlah Pelanggan (Akun) Eksternal UII Pertahun total</option>
                    <option value="6">Jumlah Pelanggan (Akun) Eksternal UII Perbulan total</option>
                    <option value="7">Jumlah Pelanggan (Akun) Eksternal UII Pertahun – Provinsi</option>
                    <option value="8">Jumlah Pelanggan (Akun) Eksternal UII Pertahun – Bidang Bisnis</option>
                  </select> 
                </div> 
                <div class="col-md-6">
                  <b>Awal Periode:</b> Semua &nbsp;
                </div>
                <div class="col-md-6">
                  <b>Akhir Periode:</b> Semua  &nbsp;
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
 <!--  <style>
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
    <div class="kpi bg-primary text-white">
      <div class="small">Jumlah Mahasiswa </div>
      <div class="big" id="mhsTahun1">600</div>
      <div class="small">berlangsung pembimbingan</div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="kpi text-white" style="background:#20c997;">
      <div class="small">Jumlah Dosen </div>
      <div class="big" id="mhsTahun2">52</div>
      <div class="small">berlangsung membimbing</div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="kpi text-white" style="background:#ff7f0e;">
      <div class="small">Mahasiswa Macet</div>
      <div class="big" id="mhsTahun3">7</div>
      <div class="small"> melebihi 1 semester</div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="kpi bg-danger text-white">
      <div class="small">Perpanjangan terbanyak</div>
      <div class="big" id="mhsTahun4">ke-4</div>
      <div class="small">berlangsung pembimbingan</div>
    </div>
  </div>

</div> -->
 <!-- TAB NAV (Semester) -->
           <ul class="nav nav-tabs">
            <li class="nav-item" onclick="window.location='monev-statistik.php'"><a class="nav-link ">Pelanggan</a></li>
            <li class="nav-item" onclick="window.location='monev-statistik1.php'"><a class="nav-link ">Order Instrumentasi</a></li>
            <li class="nav-item" onclick="window.location='monev-statistik2.php'"><a class="nav-link ">Order Kalibrasi</a></li>
            <li class="nav-item" onclick="window.location='monev-statistik3.php'"><a class="nav-link active">Pembatalan Order</a></li>
            <li class="nav-item" onclick="window.location='monev-statistik4.php'"><a class="nav-link ">Metode Pengujian</a></li>
            <li class="nav-item" onclick="window.location='monev-statistik5.php'"><a class="nav-link ">Parameter Pengujian</a></li>
            <li class="nav-item" onclick="window.location='monev-statistik6.php'"><a class="nav-link ">Kinerja</a></li>
          </ul>
          






  <!-- ========== CARD : Chart ========== --> 
<!--   <div class="card">
    <div class="card-header">
      <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i> Sebaran Jumlah Mahasiswa</h5>
      <div class="card-tools">
        <small class="text-muted"> Terpilih</small>
      </div>
    </div>

    <div class="card-body chart-container d-flex flex-column">

      <div class="flex-grow-1">
        <canvas id="chartMasaStudi" height="70"></canvas>
      </div>            

    </div>
  </div> -->
  <!-- ========== CARD : Daftar Dosen ========== --> 
  <div class="card">
    <!-- <div class="card-header">
      <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i>Daftar Dosen dan Beban Pembimbingan</h5>
      <div class="card-tools">
        <small class="text-muted">berlangsung</i></h5></small>
      </div>
    </div> -->
    <div class="card-body">

  </div>
</div>




<!-- ========== CARD : Tabel  Granular ========== -->
<div class="card">
  <div class="card-header d-flex align-items-center">
    <h5 class="card-title mb-0">Daftar Pembatalan Order</h5>    
    
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm datatables1">
       
  <thead>
    <tr>
      <th>No. Order</th>
      <th>Tanggal</th>
      <th>Kode Sampel</th>
      <th>Parameter Uji</th>
      <th>Jumlah</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>10550824</td>
      <td>27/08/2024</td>
      <td>FNS24.1</td>
      <td>Etanol</td>
      <td>1</td>
    </tr>
    <tr>
      <td>10550824</td>
      <td>27/08/2024</td>
      <td>B2.2</td>
      <td>Etanol</td>
      <td>1</td>
    </tr>
    <tr>
      <td>10550824</td>
      <td>27/08/2024</td>
      <td>B4.2</td>
      <td>Etanol</td>
      <td>1</td>
    </tr>
    <tr>
      <td>10550824</td>
      <td>27/08/2024</td>
      <td>C3.2</td>
      <td>Etanol</td>
      <td>1</td>
    </tr>
    <tr>
      <td>10550824</td>
      <td>27/08/2024</td>
      <td>FNS16.2</td>
      <td>Etanol</td>
      <td>1</td>
    </tr>
    <tr>
      <td>10550824</td>
      <td>27/08/2024</td>
      <td>FNS24.2</td>
      <td>Etanol</td>
      <td>1</td>
    </tr>
    <tr>
      <td>10550824</td>
      <td>27/08/2024</td>
      <td>FNS40.2</td>
      <td>Etanol</td>
      <td>1</td>
    </tr>
    <tr>
      <td>10550824</td>
      <td>27/08/2024</td>
      <td>FNS40.1</td>
      <td>Etanol</td>
      <td>1</td>
    </tr>
    <tr>
      <td>03090324</td>
      <td>25/03/2024</td>
      <td>Oud Silani Qadeem Anfar</td>
      <td>Ester</td>
      <td>1</td>
    </tr>
    <tr>
      <td>03090324</td>
      <td>25/03/2024</td>
      <td>Oud Silani Qadeem Anfar</td>
      <td>Minyak Atsiri</td>
      <td>1</td>
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
const ctx = document.getElementById('chartMasaStudi').getContext('2d');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            'Tahap 6+',
            'Tahap 5',
            'Tahap 4',
            'Tahap 3',
            'Tahap 2',
            'Tahap 1'
        ],
        datasets: [
            {
                label: 'Mahasiswa Aktif',
                data: [8, 20, 50, 40, 20, 8], // contoh data statis
                backgroundColor: 'rgba(13,110,253,0.8)', // primary
                borderColor: 'rgba(13,110,253,1)',
                borderWidth: 1
            },
            {
                label: 'Mahasiswa Pasif',
                data: [6, 15, 20, 15, 3, 1], // contoh data statis
                backgroundColor: 'rgba(255,193,7,0.8)', // warning
                borderColor: 'rgba(255,193,7,1)',
                borderWidth: 1
            },
            {
                label: 'Mahasiswa Macet',
                data: [6, 10, 10, 5, 2, 1], // contoh data statis
                backgroundColor: 'rgba(220,53,69,0.8)', // danger
                borderColor: 'rgba(220,53,69,1)',
                borderWidth: 1
            }
        ]
    },
    options: {
        indexAxis: 'y', // horizontal
        responsive: true,
        plugins: {
            legend: {
                display: true,
                position: 'top'
            },
            tooltip: {
                enabled: true
            }
        },
        scales: {
            x: {
                stacked: true, // WAJIB untuk stacked
                beginAtZero: true,
                title: {
                    display: false
                }
            },
            y: {
                stacked: true // WAJIB untuk stacked
            }
        }
    }
});
</script>
<script>
  var ctx12 = document.getElementById('chartLulusanBatch').getContext('2d');
  new Chart(ctx12, {
    type: 'pie',
    data: {
      labels: ['Angkatan 2020', 'Angkatan 2021', 'Angkatan 2019'],
      datasets: [{
        data: [50, 20, 10], // sesuai tabel

        backgroundColor: [
          '#007bff', // 2020 - biru
          '#28a745', // 2021 - hijau
          '#ffc107'  // 2019 - kuning
        ],

        borderColor: '#ffffff',
        borderWidth: 2
      }]
    },
    options: {
      responsive: true,
  maintainAspectRatio: false,
      plugins: {
        legend: {
          position: 'top'
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              return context.label + ': ' + context.raw + ' lulusan';
            }
          }
        }
      }
    }
  });


</script>
<?php include('5script.php'); ?>
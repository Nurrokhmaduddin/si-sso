<?php $page = 'monev_pustaka_publikasi'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>
  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Pustaka Publikasi & Diseminasi
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
                <div class="col-md-6">
                  <b>Periode Akademik:</b> Semua &nbsp;
                </div> 
                <div class="col-md-6">
                  <b>Status:</b> Semua  &nbsp;
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
    <div class="kpi bg-primary text-white">
      <div class="small">Total mahasiswa aktif TA</div>
      <div class="big" id="mhsTahun1">1.240</div>
      <div class="small">pembimbingan TA</div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="kpi text-white" style="background:#20c997;">
      <div class="small">Rata-rata TA (hari)</div>
      <div class="big" id="mhsTahun2">145</div>
      <div class="small">durasi penyelesaian TA</div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="kpi text-white" style="background:#ff7f0e;">
      <div class="small">Mahasiswa Pasif</div>
      <div class="big" id="mhsTahun3">98</div>
      <div class="small">Tidak bimbingan > 30 hari</div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="kpi bg-danger text-white">
      <div class="small">Mahasiswa Macet</div>
      <div class="big" id="mhsTahun4">4</div>
      <div class="small">Melebihi batas periode</div>
    </div>
  </div>

</div>
 <!-- TAB NAV (Semester) -->
           <ul class="nav nav-tabs">
            <li class="nav-item" onclick="window.location='monev-ta.php'"><a class="nav-link active">Berlangsung</a></li>
            <li class="nav-item" onclick="window.location='monev-ta2.php'"><a class="nav-link ">Selesai</a></li>
          </ul>
  <!-- ========== CARD : Chart ========== --> 
  <div class="card">
    <div class="card-header">
      <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i> Sebaran Jumlah Mahasiswa , dibuat stacked barchart dg informasi distribusi status bimbingan(aktif,pasif,macet)</h5>
      <div class="card-tools">
        <!-- <small class="text-muted"> Terpilih</small> -->
      </div>
    </div>

    <div class="card-body chart-container d-flex flex-column">

      <div class="flex-grow-1">
        <canvas id="chartMasaStudi" height="70"></canvas>
      </div>            

    </div>
  </div>
  <!-- ========== CARD : Pustaka ========== --> 
<div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i> Pustaka Publikasi/Diseminasi </h5>
    <div class="card-tools">
      <small class="text-muted">berdasarkan </i></h5></small>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table id="tablePublikasi" class="table table-bordered table-striped align-middle">
        <thead class="text-center">
            <tr>
              <th>No</th>
              <th>Tahun Akademik</th>
              <th>Jenis Publikasi/Diseminasi</th>
              <th>Jumlah Publikasi</th>
              <th>Tingkat Keberhasilan</th>
              <th>Media Terpopuler</th>
              <th>Kategori Media Terpopuler</th>
              <th>Sub Kategori Media Terpopuler</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">1</td>
              <td>2025/Ganjil</td>
              <td>Magang</td>
              <td class="text-center">133</td>
              <td class="text-center">0.00 %</td>
              <td class="text-center">-</td>
              <td class="text-center">-</td>
              <td class="text-center">-</td>
            </tr>
            <tr>
              <td class="text-center">2</td>
              <td>2025/Ganjil</td>
              <td>Magang</td>
              <td class="text-center">3</td>
              <td class="text-center">33.33 %</td>
              <td>Jurnal</td>
              <td>Jurnal Internasional</td>
              <td>Terindeks EBSCO/DOAJ/Proquest/Copernicus/IEEE</td>
            </tr>
            <tr>
              <td class="text-center">3</td>
              <td>2025/Ganjil</td>
              <td>Magang</td>
              <td class="text-center">1</td>
              <td class="text-center">100.00 %</td>
              <td>Jurnal</td>
              <td>Jurnal Nasional</td>
              <td>Sinta 2</td>
            </tr>
            <tr>
              <td class="text-center">4</td>
              <td>2025/Ganjil</td>
              <td>Magang</td>
              <td class="text-center">16</td>
              <td class="text-center">56.25 %</td>
              <td>Jurnal</td>
              <td>Jurnal Nasional</td>
              <td>Sinta 3</td>
            </tr>
            <tr>
              <td class="text-center">5</td>
              <td>2025/Ganjil</td>
              <td>Magang</td>
              <td class="text-center">7</td>
              <td class="text-center">28.57 %</td>
              <td>Jurnal</td>
              <td>Jurnal Nasional</td>
              <td>Sinta 4</td>
            </tr>
            <tr>
              <td class="text-center">6</td>
              <td>2025/Ganjil</td>
              <td>RBB</td>
              <td class="text-center">12</td>
              <td class="text-center">0.00 %</td>
              <td class="text-center">-</td>
              <td class="text-center">-</td>
              <td class="text-center">-</td>
            </tr>
            <tr>
              <td class="text-center">7</td>
              <td>2025/Ganjil</td>
              <td>RBB</td>
              <td class="text-center">1</td>
              <td class="text-center">100.00 %</td>
              <td>Jurnal</td>
              <td>Jurnal Nasional</td>
              <td>Sinta 3</td>
            </tr>
            <tr>
              <td class="text-center">8</td>
              <td>2025/Ganjil</td>
              <td>RBB</td>
              <td class="text-center">1</td>
              <td class="text-center">100.00 %</td>
              <td>Pameran Bisnis/Produk</td>
              <td>Pameran Skala Nasional</td>
              <td>Penjualan/Display Produk/Demonstrasi/Interaksi Bisnis</td>
            </tr>
            <tr>
              <td class="text-center">9</td>
              <td>2025/Ganjil</td>
              <td>Skripsi</td>
              <td class="text-center">118</td>
              <td class="text-center">0.00 %</td>
              <td class="text-center">-</td>
              <td class="text-center">-</td>
              <td class="text-center">-</td>
            </tr>
            <tr>
              <td class="text-center">10</td>
              <td>2025/Ganjil</td>
              <td>Skripsi</td>
              <td class="text-center">1</td>
              <td class="text-center">100.00 %</td>
              <td>Jurnal</td>
              <td>Jurnal Internasional</td>
              <td>Terindeks EBSCO/DOAJ/Proquest/Copernicus/IEEE</td>
            </tr>
          </tbody>
      </table>
    </div>
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
        datasets: [{
            label: 'Jumlah Mahasiswa',
            data: [20, 45, 80, 60, 25, 10], // data contoh statis
            backgroundColor: "rgba(255, 99, 132, 0.7)",
            borderColor: "rgb(255, 99, 132)",
            borderWidth: 1
        }]
    },
    options: {
        indexAxis: 'y', // Membuat bar horizontal
        responsive: true,
        plugins: {
            legend: {
                display: true
            },
            // title: {
            //     display: true,
            //     text: 'Sebaran Jumlah Mahasiswa Berdasarkan Masa Studi'
            // },
            tooltip: {
                enabled: true
            }
        },
        scales: {
            x: {
                beginAtZero: true,
                title: {
                    display: false,
                    text: 'Jumlah Mahasiswa'
                }
            },
            y: {
                title: {
                    display: false,
                    text: 'Masa Studi'
                }
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

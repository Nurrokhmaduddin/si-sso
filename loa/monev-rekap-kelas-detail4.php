<?php $page = 'monev_kelas'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>
  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Rekapitulasi - Kelas Perkuliahan 
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
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
            <!-- <div class="card-header bg-secondary">
              <h5 class="card-title mb-0">
                <i class="fas fa-database"></i> Data Produk/Barang        
              </h5>
              <div class="card-tools ms-auto">
                               
              </div>
            </div> -->

            <div class="card-body ">
              <div class="row">   
                <div class="col-lg-7">
                  <table class="table table-sm table-hover table-bordered table-striped deta">
                    <tbody>
                      <tr>
                        <td width="30%"><b> Kurikulum</b></td>
                        <td>2023</td>
                      </tr>
                      <tr>
                        <td width="30%"><b> Periode Akademik</b></td>
                        <td>2024/2025 - Gasal</td>
                      </tr>
                      <tr>
                        <td width="30%"><b> Dosen Pengampu</b></td>
                        <td>Tri Nugroho Sulistyantoro, S.T., M.T. - (195110502) <i class="fas fa-star"></i></td> 
                      </tr>
                      <tr>
                        <td width="30%"><b></b></td>
                        <td>Hasan, ST, MT. - (198888502)</td>
                      </tr>
                     
                      <!-- <tr>
                        <td width="30%"><b> Tanggal Posting </b></td>
                        <td>23 Januari 2024</td>
                      </tr> -->
                    </tbody>
                  </table>
                </div>
                <div class="col-lg-5">
                  <table class="table table-sm table-hover table-bordered table-striped deta">
                    <tbody>
                      <tr>
                        <td width="30%"><b> Jalur Kelas</b></td>
                        <td>Civil Engineering Regular - (511)</td>
                      </tr>
                       <tr>
                        <td width="30%"><b> Mata Kuliah</b></td>
                        <td>Metode Pelaksanaan Bangunan - (STS704)</td>
                      </tr>
                      <tr>
                        <td width="30%"><b> Kelas</b></td>
                        <td>A</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>

            <div class="card-footer">
              <div class="card-tools ms-auto">
                 <button type="button" 
                class="btn btn-outline-secondary btn-sm"
                onclick="window.location.href='monev-rekap-kelas.php'">
                <span class="fas fa-reply me-1"></span> Kembali
              </button>

                <!-- <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button> -->
               <!--  <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button> -->
                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>  
                <button type="button" class="btn btn-outline-warning btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import from Gateway UII
                </button> -->              
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <!-- <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button> -->    
              </div>
            </div>

          </div>

          <!-- TAB NAV (Semester) -->
           <ul class="nav nav-tabs">
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail.php'"><a class="nav-link ">Final</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail4.php'"><a class="nav-link active">Remedial</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail3.php'"><a class="nav-link ">Portofolio</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail2.php'"><a class="nav-link ">Penilaian Mahasiswa</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail5.php'"><a class="nav-link ">Refleksi Dosen</a></li>
            <!-- <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail6.php'"><a class="nav-link ">OBE</a></li> -->
          </ul>
     

<!-- ========== CARD : tabel rekap remidi   CPMK ========== -->
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      
      <table class="table table-bordered table-sm table-hover table-striped example1" border="1">
        <thead>
          <tr>
            <th colspan="2" rowspan="2" style="vertical-align: middle; text-align: center;">Daftar CPMK (Remidi)</th>
            <th><center>Rerata Awal</center></th>
            <th><center>Rerata Remidi</center></th>
            <th><center>Ketuntasan (%)</center></th>
            <th><center>Jumlah Mahasiswa</center></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="width: 10px;">1</td>
            <td style="width: 40%;">Mahasiswa mengerti dan memahami dasar-dasar polimer, hubungan antara sifat dengan struktur dan perilaku prosesnya.</td>
            <td align="center">56,14                      </td>
            <td align="center">80,25                    </td>
            <td align="center">100,00                      </td>
            <td align="center">5
          <tr>
            <td style="width: 10px;">2</td>
            <td style="width: 40%;">Mahasiswa mengerti dan memahami dasar-dasar komposit, hubungan antara sifat dengan struktur dan perilaku prosesnya.</td>
            <td align="center">56,14                      </td>
            <td align="center">82,10                       </td>
            <td align="center">100,00                      </td>
            <td align="center"> 4                     </td>
          </tr>
          <tr>
            <td style="width: 10px;">3</td>
            <td style="width: 40%;">Mahasiswa mampu mengembangkan aplikasi polimer</td>
            <td align="center">56,14                      </td>
            <td align="center"> 78,50                      </td>
            <td align="center"> 80,00                      </td>
            <td align="center">12                      </td>
          </tr>
          <tr>
            <td style="width: 10px;">4</td>
            <td style="width: 40%;">Mahasiswa mampu mengembangkan aplikasi komposit</td>
            <td align="center">56,14                      </td>
            <td align="center">79,30                       </td>
            <td align="center">80,00                      </td>
            <td align="center"> 24                      </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- ========== CARD : Perbandingan CPMK Bar A vs Bar B ========== -->
<div class="card">
  <div class="card-header">
    <h5 class="mb-0">Perbandingan Remidi CPMK (Before vs After)</h5>
  </div>
  <div class="card-body">
    <canvas id="chartCpmkCompare" height="120"></canvas>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctxCompare = document.getElementById('chartCpmkCompare').getContext('2d');

  // ===== CUSTOM WARNA =====
  const colorBarA = 'rgba(108, 117, 125, 0.8)';   // Abu-abu (bisa diganti)
  const colorBarB = 'rgba(0, 123, 255, 0.8)';     // Biru (bisa diganti)

  const chartCpmkCompare = new Chart(ctxCompare, {
    type: 'bar',
    data: {
      labels: ['CPMK 1', 'CPMK 2', 'CPMK 3', 'CPMK 4'],
      datasets: [
        {
          label: 'Bar A',
          data: [56.14, 56.14, 56.14, 56.14],
          backgroundColor: colorBarA,
          borderColor: colorBarA,
          borderWidth: 1
        },
        {
          label: 'Bar B',
          data: [80.25, 82.10, 78.50, 79.30],
          backgroundColor: colorBarB,
          borderColor: colorBarB,
          borderWidth: 1
        }
      ]
    },
    options: {
      scales: {
        y: { beginAtZero: true, max: 100 }
      },
      plugins: {
        legend: { display: false },
        title: {
          display: false,
          text: 'Perbandingan Remidi CPMK (Before vs After)'
        }
      }
    }
  });
</script>
<!-- ========== CARD : Chart Row CPMK remidi ========== -->
<div class="card collapse">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fas fa-chart-bar mr-1"></i>
      Distribusi Nilai Awal & Remidi per CPMK
    </h3>
  </div>

  <div class="card-body">

    <!-- CPMK 1 -->
    <div class="chart-container mb-4" style="height:250px;">
      <h6 class="text-muted mb-2">CPMK 1</h6>
      <canvas id="chartCpmk1Compare"></canvas>
    </div>

    <!-- CPMK 2 -->
    <div class="chart-container mb-4" style="height:250px;">
      <h6 class="text-muted mb-2">CPMK 2</h6>
      <canvas id="chartCpmk2Compare"></canvas>
    </div>

  </div>
</div>



      </div>
    </div>
  </div>
</section>
</div>
<!-- ./content-wrapper -->

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

          <!-- Pilihan -->
          <div class="mb-3">
            <label for="lembaga" class="form-label">Periode Akademik</label>
            <select name="lembaga" id="lembaga" class="form-select">
              <option value="PA019" selected>2024/2025 - Gasal - (Aktif)</option><option value="PA018" >2023/2024 - Genap</option><option value="PA017" >2023/2024 - Gasal</option><option value="PA016" >2022/2023 - Genap</option><option value="PA015" >2022/2023 - Gasal</option><option value="PA014" >2021/2022 - Genap</option><option value="PA013" >2021/2022 - Gasal</option><option value="PA012" >2020/2021 - Genap</option><option value="PA011" >2020/2021 - Gasal</option><option value="PA010" >2019/2020 - Genap</option><option value="PA009" >2019/2020 - Gasal</option><option value="PA008" >2018/2019 - Genap</option><option value="PA007" >2018/2019 - Gasal</option><option value="PA006" >2017/2018 - Genap</option><option value="PA005" >2017/2018 - Gasal</option><option value="PA004" >2016/2017 - Genap</option><option value="PA003" >2016/2017 - Gasal</option><option value="PA002" >2015/2016 - Genap</option><option value="PA001" >2015/2016 - Gasal</option> 
            </select>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-info">Terapkan Filter</button>
          </div>
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
          Ideal hasil ekspor kelas berdasarkan:
kurikulum, set pemetaan, mata kuliah(satu,beberapa, semua)
kolom: kode MK, mata kuliah, mahasiswa, nilai akhir(huruf),nilai akhir(angka), cpmk 1,2,3,4,5
jika ada kesamaan NIM di satu mata kuliah(artinya mahasiswa tempuh >1 kali MK tsb) ambil nilai tertinggi
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- ========== CARD : Chart Row CPMK remidi ========== -->
<script>

// =====================
// DATA CPMK 1
// =====================
const nimCpmk1 = ['NIM 1','NIM 2','NIM 3','NIM 4','NIM 5'];

const nilaiAwalCpmk1 = [60, 75, 55, 80, 70];
const nilaiRemidiCpmk1 = [75, 80, 70, 85, 78];

const ctxCpmk1 = document.getElementById('chartCpmk1Compare').getContext('2d');

new Chart(ctxCpmk1, {
  type: 'bar',
  data: {
    labels: nimCpmk1,
    datasets: [
      {
        label: 'Nilai Awal',
        data: nilaiAwalCpmk1,
        backgroundColor: 'rgba(108, 117, 125, 0.8)',  // abu
        borderColor: 'rgba(108, 117, 125, 1)',
        borderWidth: 1
      },
      {
        label: 'Nilai Remidi',
        data: nilaiRemidiCpmk1,
        backgroundColor: 'rgba(0, 123, 255, 0.8)',   // biru
        borderColor: 'rgba(0, 123, 255, 1)',
        borderWidth: 1
      }
    ]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      y: {
        min: 0,
        max: 100
      }
    },
    plugins: {
      legend: { position: 'top' },
      tooltip: {
        mode: 'index',
        intersect: false
      }
    }
  }
});
</script>
<script>

// =====================
// DATA CPMK 2
// =====================
const nimCpmk2 = ['NIM 1','NIM 2','NIM 3','NIM 4'];

const nilaiAwalCpmk2 = [72, 65, 88, 74];
const nilaiRemidiCpmk2 = [80, 75, 90, 82];

const ctxCpmk2 = document.getElementById('chartCpmk2Compare').getContext('2d');

new Chart(ctxCpmk2, {
  type: 'bar',
  data: {
    labels: nimCpmk2,
    datasets: [
      {
        label: 'Nilai Awal',
        data: nilaiAwalCpmk2,
        backgroundColor: 'rgba(108, 117, 125, 0.8)',
        borderColor: 'rgba(108, 117, 125, 1)',
        borderWidth: 1
      },
      {
        label: 'Nilai Remidi',
        data: nilaiRemidiCpmk2,
        backgroundColor: 'rgba(0, 123, 255, 0.8)',
        borderColor: 'rgba(0, 123, 255, 1)',
        borderWidth: 1
      }
    ]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      y: {
        min: 0,
        max: 100
      }
    },
    plugins: {
      legend: { position: 'top' },
      tooltip: {
        mode: 'index',
        intersect: false
      }
    }
  }
});
</script>

<?php include('5script.php'); ?>







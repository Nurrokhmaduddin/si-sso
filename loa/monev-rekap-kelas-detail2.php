<?php $page = 'monev_kelas'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>
  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Rekapitulasi - Kelas Perkuliahan 
        <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
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
              <div class="card-tools ml-auto">
                               
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
              <div class="card-tools ml-auto">
                 <button type="button" 
                class="btn btn-outline-secondary btn-sm"
                onclick="window.location.href='monev-rekap-kelas.php'">
                <span class="fas fa-reply mr-1"></span> Kembali
              </button>

                <!-- <button class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#modalFilter">
                  <i class="fas fa-filter mr-1"></i> Filter
                </button> -->
               <!--  <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalTambahData">
                  <i class="fas fa-plus mr-1"></i> Add
                </button> -->
                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalImpor">
                  <i class="fas fa-file-upload mr-1"></i> Import
                </button>  
                <button type="button" class="btn btn-outline-warning btn-sm " data-toggle="modal" data-target="#modalImpor">
                  <i class="fas fa-file-upload mr-1"></i> Import from Gateway UII
                </button> -->              
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download mr-1"></i> Export
                </button>
                <!-- <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban mr-1"></i> Reset
                </button> -->    
              </div>
            </div>

          </div>

          <!-- TAB NAV (Semester) -->
           <ul class="nav nav-tabs">
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail.php'"><a class="nav-link ">Final</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail4.php'"><a class="nav-link ">Remedial</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail3.php'"><a class="nav-link ">Portofolio</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail2.php'"><a class="nav-link active">Penilaian Mahasiswa</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail5.php'"><a class="nav-link ">Refleksi Dosen</a></li>
            <!-- <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail6.php'"><a class="nav-link ">OBE</a></li> -->
          </ul>
        
<!-- ========== CARD : Progres Penilaian CPMK ========== -->
<?php 
$persen = 100;

if ($persen == 100) {
  $warna = "#198754"; // hijau
} else {
  $warna = "#212529"; // hitam/gelap
}
?>

<div class="card border-0 shadow-sm mb-3">
  <div class="card-body">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-2">
      <small class="text-muted text-uppercase">
       <i class="fas fa-tasks  mr-2"></i> Progres Penilaian CPMK
      </small>
      <small class="text-muted">
        40 / 40 Mahasiswa
      </small>
    </div>

    <?php $persen = 100; ?>

    <!-- Progress Bar -->
    <div class="position-relative" style="height: 8px; background:#e9ecef; border-radius:4px;">
      
      <div style="
          width: <?php echo $persen; ?>%;
          height: 100%;
          background: #198754;
          border-radius: 4px;
          position: relative;">
        
        <!-- Text Persen -->
        <span style="
            position: absolute;
            right: 6px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 0.65rem;
            color: #fff;
            font-weight: 600;">
          <?php echo $persen; ?>%
        </span>

      </div>
    </div>

    <!-- Info bawah -->
    <div class="mt-2 d-flex justify-content-between">
      <small class="text-muted">
        Semua mahasiswa sudah dinilai
      </small>
      <small class="text-muted">
        Update terakhir: 14 Jan 2024
      </small>
    </div>

  </div>
</div>
      <!-- ========== CARD 3: Tabel saja ========== -->
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
    <table id="data_nilai_cpmk" class="table table-bordered table-striped table-sm datatables1">
                  <thead>
                    <tr align="center" class="text-uppercase">
                      <th width="5px">No.</th>
                      <th>Mahasiswa</th>
                      <th>Nilai Akhir (Angka)</th>
                      <th>Nilai Akhir (Huruf)</th>
                      <th>CPMK 1</th><th>Remidi CPMK 1</th><th>CPMK 2</th><th>Remidi CPMK 2</th><th>CPMK 3</th><th>Remidi CPMK 3</th><th>CPMK 4</th><th>Remidi CPMK 4</th><th>CPMK 5</th><th>Remidi CPMK 5</th> 
                    </tr>
                  </thead>
                  <tbody>
                    <tr >
                      <td align="center">1</td>
                      <td>
                        ILHAM KURNIAWAN                              <br>
                        <small><b>(19511100)</b></small>
                      </td>
                      <td align="center" class="bg-danger">3.57</td>
                      <td align="center">F</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" class="bg-secondary"></td>
                      
                    </tr>
                    <tr >
                      <td align="center">2</td>
                      <td>
                        NABILLAH PUTRI NUR RAHMAH                              <br>
                        <small><b>(20511106)</b></small>
                      </td>
                      <td align="center" class="">76.70</td>
                      <td align="center">B+</td>
                      <td align="center" >75.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >78.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >71.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >78.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >71.00</td>
                      <td align="center" class="bg-secondary"></td>
                      
                    </tr>
                    <tr >
                      <td align="center">3</td>
                      <td>
                        MUHAMMAD FIRDAUS SANI WIJAYA KUSUMA                              <br>
                        <small><b>(20511402)</b></small>
                      </td>
                      <td align="center" class="">86.77</td>
                      <td align="center">A</td>
                      <td align="center" >81.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >88.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >82.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >86.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >87.00</td>
                      <td align="center" class="bg-secondary"></td>
                      
                    </tr>
                    <tr >
                      <td align="center">4</td>
                      <td>
                        SAHLA SALSABILA                              <br>
                        <small><b>(21511014)</b></small>
                      </td>
                      <td align="center" class="">76.43</td>
                      <td align="center">B+</td>
                      <td align="center" >81.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >83.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >69.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >73.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >75.00</td>
                      <td align="center" class="bg-secondary"></td>
                      
                    </tr>
                    <tr >
                      <td align="center">5</td>
                      <td>
                        SALWA BAGHEA MULIARAHMA                              <br>
                        <small><b>(21511043)</b></small>
                      </td>
                      <td align="center" class="">63.47</td>
                      <td align="center">B/C</td>
                      <td align="center" >80.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >63.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >70.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >48.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >60.00</td>
                      <td align="center" class="bg-secondary"></td>
                      
                    </tr>
                    <tr >
                      <td align="center">6</td>
                      <td>
                        KAHFI NATAKUSUMA                              <br>
                        <small><b>(21511066)</b></small>
                      </td>
                      <td align="center" class="">88.57</td>
                      <td align="center">A</td>
                      <td align="center" >94.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >91.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >95.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >95.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >61.00</td>
                      <td align="center" class="bg-secondary"></td>
                      
                    </tr>
                    <tr >
                      <td align="center">7</td>
                      <td>
                        RAHESA ARIANO PUTRA                              <br>
                        <small><b>(21511073)</b></small>
                      </td>
                      <td align="center" class="">77.78</td>
                      <td align="center">A/B</td>
                      <td align="center" >77.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >70.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >68.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >84.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >82.00</td>
                      <td align="center" class="bg-secondary"></td>
                      
                    </tr>
                    <tr >
                      <td align="center">8</td>
                      <td>
                        MUHAMMAD SURFUN BATTAN QOTO'A                              <br>
                        <small><b>(21511082)</b></small>
                      </td>
                      <td align="center" class="">73.01</td>
                      <td align="center">B</td>
                      <td align="center" >79.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >68.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >75.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >69.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >68.00</td>
                      <td align="center" class="bg-secondary"></td>
                      
                    </tr>
                    <tr >
                      <td align="center">9</td>
                      <td>
                        RIDHO AHMAT FAUZI                              <br>
                        <small><b>(21511085)</b></small>
                      </td>
                      <td align="center" class="">84.43</td>
                      <td align="center">A-</td>
                      <td align="center" >73.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >81.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >79.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >92.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >79.00</td>
                      <td align="center" class="bg-secondary"></td>
                      
                    </tr>
                    <tr >
                      <td align="center">10</td>
                      <td>
                        BAYU MUHAMMAD IQBAL                              <br>
                        <small><b>(21511091)</b></small>
                      </td>
                      <td align="center" class="">85.87</td>
                      <td align="center">A</td>
                      <td align="center" >79.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >88.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >88.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >88.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >74.00</td>
                      <td align="center" class="bg-secondary"></td>
                      
                    </tr>                   
                    <tr >
                      <td align="center">27</td>
                      <td>
                        MUHAMMAD ZAIDAN SALIM                              <br>
                        <small><b>(22511243)</b></small>
                      </td>
                      <td align="center" class="">83.09</td>
                      <td align="center">A-</td>
                      <td align="center" >84.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >79.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >81.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >82.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >85.00</td>
                      <td align="center" class="bg-secondary"></td>
                      
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card-body -->
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
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
            <select name="lembaga" id="lembaga" class="custom-select">
              <option value="PA019" selected>2024/2025 - Gasal - (Aktif)</option><option value="PA018" >2023/2024 - Genap</option><option value="PA017" >2023/2024 - Gasal</option><option value="PA016" >2022/2023 - Genap</option><option value="PA015" >2022/2023 - Gasal</option><option value="PA014" >2021/2022 - Genap</option><option value="PA013" >2021/2022 - Gasal</option><option value="PA012" >2020/2021 - Genap</option><option value="PA011" >2020/2021 - Gasal</option><option value="PA010" >2019/2020 - Genap</option><option value="PA009" >2019/2020 - Gasal</option><option value="PA008" >2018/2019 - Genap</option><option value="PA007" >2018/2019 - Gasal</option><option value="PA006" >2017/2018 - Genap</option><option value="PA005" >2017/2018 - Gasal</option><option value="PA004" >2016/2017 - Genap</option><option value="PA003" >2016/2017 - Gasal</option><option value="PA002" >2015/2016 - Genap</option><option value="PA001" >2015/2016 - Gasal</option> 
            </select>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<script>
// Generate label CPMK 1 - 256
const labelsCPMK = Array.from({ length: 40 }, (_, i) => `NIM ${i + 1}`);

// Contoh nilai CPMK (0 - 100)
const nilaiCPMK = Array.from({ length: 40 }, () =>
  Math.floor(Math.random() * 101)
);

const cty = document.getElementById('barChartCPMK').getContext('2d');

new Chart(cty, {
  type: 'bar',
  data: {
    labels: labelsCPMK,
    datasets: [{
      label: 'Nilai CPMK 1',
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
// Generate label CPMK 1 - 256
const labelsCPMK2 = Array.from({ length: 40 }, (_, i) => `NIM ${i + 1}`);

// Contoh nilai CPMK (0 - 100)
const nilaiCPMK2 = Array.from({ length: 40 }, () =>
  Math.floor(Math.random() * 101)
);

const cty2 = document.getElementById('barChartCPMK2').getContext('2d');

new Chart(cty2, {
  type: 'bar',
  data: {
    labels: labelsCPMK2,
    datasets: [{
      label: 'Nilai CPMK 2',
      data: nilaiCPMK2,
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

<?php include('5script.php'); ?>







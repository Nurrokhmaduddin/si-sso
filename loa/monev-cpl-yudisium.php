<?php $page = 'monev_yudisium'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev CPL Yudisium
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
          <div class="card card-outline card-info">
           
            <div class="card-body ">
              <div class="row">
                <div class="col-md-6">
                  <b>Kurikulum:</b> 2023 &nbsp;
                </div>                
                <div class="col-md-6">
                  <b>Set Pemetaan:</b> KT-6 (K20) Kurikulum 2025 full stage &nbsp;
                </div>
              
              <div class="col-md-5">
                <b>Periode Yudisium :</b> Jan 2027 
              </div>
             <!--  <div class="col-md-5">
                <b>Status Mahasiswa:</b> Aktif - Semua
              </div> -->
                
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
                <button type="button" class="btn btn-sm btn-outline-info" onclick="window.location='detail-cpl.html'"><i class="fas fa-info-circle"></i></button>            
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
              <div class="small">CPL yang Memenuhi Standar</div>
              <div class="big" id="kpiAvg">7 dari 10 CPL</div>
              <div class="small">70% mencapai standar</div>
            </div>
          </div>
          

          <div class="col-md-3">
            <div class="kpi" style="background:#20c997;">
              <div class="small"> CPL Terkuat</div>
              <div class="big" id="kpiReached">CPL 1</div>
              <div class="small">85% mencapai tuntas</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="kpi" style="background:#ff7f0e;">
              <div class="small"> Lulusan Kompeten</div>
              <div class="big" id="kpiReached">50 dari 90 </div>
              <div class="small">tuntas semua CPL</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="kpi bg-danger">
              <div class="small">CPL Terlemah</div>
              <div class="big" id="kpiRisk">CPL 4</div>
              <div class="small">50% mencapai tuntas</div>
            </div>
          </div>
        </div>

         <!-- ========== CARD :  Grafik Radar CPL & Progress ========== --> 
<div class="card">
  <!-- <div class="card-header">
    <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i>Level 1 – Ringkasan</h5>
    <div class="card-tools">
      <small class="text-muted">Batch Yudisium Terpilih</i></h5></small> 
    </div> 
  </div> -->
  <div class="card-body p-3">
    <div class="row">

      <!-- KIRI: Pie Chart -->
      <div class="col-lg-6">
        <!-- <h6><b>Proporsi Angkatan Batch Yudisium</b></h6> -->
        <canvas id="chartLulusanBatch" width="100%" height="180"></canvas>
      </div>
      <!-- KANAN -->
      <div class="col-lg-6">
        <!-- <h6><b>Tabel Performa Batch Yudisium</b></h6> -->
        <table class="table table-bordered table-striped table-sm">
          <thead class=" text-center">
            <tr>
              <th>Indikator</th>
              <th>Batch Jan 2027</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
              <td >Jumlah Lulusan</td>
              <td>80</td>
            </tr>
            <tr>
              <td>IPK Rata-rata</td>
              <td>3.42</td>
            </tr>
            <tr>
              <td>CPL Rata-rata</td>
              <td>83%</td>
            </tr>
            <tr>
              <td>% Tepat Waktu</td>
              <td>72%</td>
            </tr>        
            <tr>     
              <td>Tidak Pernah Remedial</td>
              <td>40(50%)</td>
            </tr>
            <tr>

              <td>Remedial Ringan (1–2 MK)</td>
              <td>28(35%)</td>
            </tr>
            <tr>    
              <td>Remedial Tinggi (≥ 3 MK)</td>
              <td>12(15%)</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="4">
                <strong>Cara membaca tabel:</strong><br>
                Remedial tinggi didefinisikan sebagai mahasiswa yang pernah mengulang ≥ 3 Mata Kuliah atau > 20% MK selama masa studi.
                Angka "Persentase" menunjukkan proporsi dari total 80 lulusan pada Batch Jan 2027.<br>
                Rata-rata jumlah remedial per lulusan: <strong>1.8 MK</strong>.
              </td>
            </tr>
          </tfoot>
        </table>

      </div>
    </div>
  </div>
</div>



<!-- Level 2 -->
<div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i>Level 2 – 10 CPL Lulusan</h5>
    <div class="card-tools">
      <!-- <small class="text-muted">5 Batch Yudisium Terakhir</i></h5></small> -->
    </div>
  </div>
  <div class="card-body">
   
<canvas id="chartCPL1" width="100%" height="30" class="mb-4"></canvas>
<table class="table table-bordered table-striped table-sm ">
    <thead>
        <tr>
            <th>CPL</th>
            <th>Rata-rata CPL</th>
            <th>% Lulus CPL</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>CPL 1</td>
            <td>82</td>
            <td>95%</td>
        </tr>
        <tr>
            <td>CPL 2</td>
            <td>70</td>
            <td>80%</td>
        </tr>
        <tr>
            <td>CPL 3</td>
            <td style="color:red;">63</td>
            <td style="color:red;">60%</td>
        </tr>
        <tr>
            <td>CPL 4</td>
            <td>78</td>
            <td>88%</td>
        </tr>
        <tr>
            <td>CPL 5</td>
            <td>85</td>
            <td>92%</td>
        </tr>
        <tr>
            <td>CPL 6</td>
            <td>74</td>
            <td>85%</td>
        </tr>
        <tr>
            <td>CPL 7</td>
            <td>90</td>
            <td>98%</td>
        </tr>
        <tr>
            <td>CPL 8</td>
            <td>76</td>
            <td>83%</td>
        </tr>
        <tr>
            <td>CPL 9</td>
            <td>68</td>
            <td>75%</td>
        </tr>
        <tr>
            <td>CPL 10</td>
            <td style="color:red;">61</td>
            <td style="color:red;">58%</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3">
                <strong>Cara Membaca Tabel:</strong><br>
                - Rata-rata CPL menunjukkan nilai agregat capaian lulusan pada masing-masing CPL.<br>
                - % Lulus CPL menunjukkan persentase mahasiswa yang mencapai batas minimal ketuntasan (misalnya ≥75).<br>
                - Nilai berwarna <span style="color:red;">merah</span> menunjukkan capaian di bawah standar dan perlu evaluasi lebih lanjut.
            </td>
        </tr>
    </tfoot>
</table>
</div>
</div>
<!-- Grafik Rentang Nilai -->
<div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i>Level 3 – Distribusi CPL Lulusan</h5>
    <div class="card-tools">
      <small class="text-muted">Berdasarkan Rentang Nilai</i></h5></small>
    </div>
  </div>
  <div class="card-body">

    <canvas id="stackedCPMKChart" height="70" class="mb-4"></canvas>
  </div>
</div>
<!-- Tabel Tren 5 batch -->
<div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i>Level 4 - Tren Perbandingan rata-rata setiap CPL</h5>
    <div class="card-tools">
      <small class="text-muted">5 Batch Yudisium Terakhir</i></h5></small>
    </div>
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped table-sm ">
      <thead>
        <tr>
          <th>Batch Yudisium</th>
          <th>CPL 1</th>
          <th>CPL 2</th>
          <th>CPL 3</th>
          <th>CPL 4</th>
          <th>CPL 5</th>
          <th>CPL 6</th>
          <th>CPL 7</th>
          <th>CPL 8</th>
          <th>CPL 9</th>
          <th>CPL 10</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Jan 2025</td>
          <td style="color:red;">62</td>
          <td>70</td>
          <td>74</td>
          <td>76</td>
          <td>78</td>
          <td>80</td>
          <td>82</td>
          <td>81</td>
          <td>79</td>
          <td>75</td>
        </tr>
        <tr>
          <td>Jul 2025</td>
          <td>68</td>
          <td>72</td>
          <td>76</td>
          <td>78</td>
          <td>80</td>
          <td>83</td>
          <td>85</td>
          <td>84</td>
          <td>82</td>
          <td>77</td>
        </tr>
        <tr>
          <td>Jan 2026</td>
          <td>85</td>
          <td>87</td>
          <td>86</td>
          <td>88</td>
          <td>90</td>
          <td>92</td>
          <td>91</td>
          <td>93</td>
          <td>94</td>
          <td>89</td>
        </tr>
        <tr>
          <td>Jul 2026</td>
          <td>72</td>
          <td style="color:red;">63</td>
          <td>76</td>
          <td>78</td>
          <td>79</td>
          <td>81</td>
          <td>83</td>
          <td>84</td>
          <td>86</td>
          <td>82</td>
        </tr>
        <tr>
          <td>Jan 2027</td>
          <td>60</td>
          <td>65</td>
          <td>68</td>
          <td>70</td>
          <td>72</td>
          <td>75</td>
          <td>77</td>
          <td>79</td>
          <td>80</td>
          <td>74</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="11">
            <strong>Cara Membaca Tabel:</strong><br>
            Tabel ini menunjukkan tren mutu CPL rata-rata berdasarkan periode kelulusan.
            Ini bukan tren per angkatan masuk, melainkan evaluasi mutu output sistem dari waktu ke waktu.
            Jika nilai meningkat secara bertahap berarti ada perbaikan mutu pembelajaran,
            sedangkan stagnasi atau penurunan menunjukkan perlunya evaluasi kebijakan akademik.<br>
            - Tabel menampilkan perbandingan capaian rata-rata tiap CPL pada 5 batch yudisium.<br>
            - Angka menunjukkan persentase capaian CPL.<br>
            - Nilai berwarna <span style="color:red;">merah</span> menunjukkan capaian di bawah 65% (perlu perhatian/analisis lebih lanjut).<br>
            - Tabel ini digunakan untuk monitoring mutu lulusan antar periode yudisium (bukan per angkatan masuk).
          </td>
        </tr>
      </tfoot>
    </table>
  </div>
</div>

<!-- ========== CARD : Distribusi Angkatan ========== -->
<!-- <div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i>Distribusi Angkatan Mahasiswa</h5>
    <div class="card-tools">
      <small class="text-muted">Batch Yudisium Terpilih</small>
    </div>
  </div>
  <div class="card-body">

<table class="table table-bordered table-striped table-sm">
  <thead class="text-center">
    <tr>
      <th>No</th>
      <th>Angkatan Masuk</th>
      <th>Jumlah Lulusan</th>
      <th>Persentase (%)</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
      <td>1</td>
      <td>2020</td>
      <td>50</td>
      <td>62%</td>
    </tr>
    <tr>
      <td>2</td>
      <td>2021</td>
      <td>20</td>
      <td>25%</td>
    </tr>
    <tr>
      <td>3</td>
      <td>2019</td>
      <td>10</td>
      <td>13%</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td colspan="5">
        <strong>Total Lulusan: 80 Mahasiswa.</strong><br>
        Cara membaca tabel: Kolom "Angkatan Masuk" menunjukkan tahun awal studi mahasiswa.
        Kolom "Persentase" menunjukkan proporsi dari total 80 lulusan pada Batch Yudisium Juli 2026.
        Angkatan 2020 (62%) mendominasi, yang mengindikasikan mayoritas lulusan menyelesaikan studi tepat waktu.
        Persentase dari angkatan 2019 (13%) menunjukkan terdapat sebagian lulusan yang menyelesaikan studi lebih dari waktu normal.
      </td>
    </tr>
  </tfoot>
</table>
</div>
</div> -->


<!-- ========== CARD : tren antar batch ========== -->
<!-- <div class="card">
  <div class="card-body">
    <h6><b>Tabel Perbandingan Batch Yudisium (Monitoring Periodik)</b></h6>
    <table class="table table-bordered table-striped table-sm">
      <thead class=" text-center">
        <tr>
          <th>Indikator</th>
          <th>Batch Jan 2027</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <tr>
          <td class="text-start">Jumlah Lulusan</td>
          <td>80</td>
        </tr>
        <tr>
          <td class="text-start">IPK Rata-rata</td>
          <td>3.42</td>
        </tr>
        <tr>
          <td class="text-start">CPL Rata-rata</td>
          <td>83%</td>
        </tr>
        <tr>
          <td class="text-start">% Tepat Waktu</td>
          <td>72%</td>
        </tr>        
        <tr>     
          <td>Tidak Pernah Remedial</td>
          <td>40(50%)</td>
        </tr>
        <tr>

          <td>Remedial Ringan (1–2 MK)</td>
          <td>28(35%)</td>
        </tr>
        <tr>    
          <td>Remedial Tinggi (≥ 3 MK)</td>
          <td>12(15%)</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="4">
            <strong>Cara membaca tabel:</strong><br>
            Tabel ini membandingkan mutu lulusan antar periode yudisium (bukan per angkatan).
            Kolom "Perubahan" menunjukkan arah perbedaan dari Jan 2026 ke Jul 2026.
            Jika IPK dan CPL menurun serta persentase remedial tinggi meningkat,
            maka perlu evaluasi terhadap proses pembelajaran pada periode tersebut.
            Tabel ini bersifat monitoring mutu output secara periodik.<br>
            <strong>Total Lulusan: 80 Mahasiswa.</strong><br>
        Definisi operasional: Remedial tinggi didefinisikan sebagai mahasiswa yang pernah mengulang ≥ 3 Mata Kuliah 
        atau lebih dari 20% MK selama masa studi.<br>
        Cara membaca tabel: Kolom "Persentase" menunjukkan proporsi dari total 80 lulusan pada Batch Juli 2026.
        Sebanyak 50% lulusan tidak pernah remedial (menunjukkan performa akademik stabil),
        sementara 19% termasuk kategori remedial tinggi, yang dapat menjadi bahan evaluasi mutu pembelajaran.
        Rata-rata jumlah remedial per lulusan: <strong>1.8 MK</strong>.
          </td>
        </tr>
      </tfoot>
    </table>

    
  </div>
</div> -->
<!-- ========== CARD : tabel distribusi lulusan ========== -->
<div class="card">
  <div class="card-header d-flex align-items-center">
    <h5 class="card-title mb-0">Daftar Lulusan</h5>    
    
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm datatables1">
        <thead>
          <tr class="text-uppercase text-center">
            <th width="5px">No.</th>
            <th>NIM</th>
            <th>Nama Lengkap</th>
            <th>Angkatan</th>
            <th>Jalur/Jurusan(reguler,IP)</th>
            <th>Rata-rata CPL</th>
            <th>tuntas semua CPL(y,n)</th>
            <th>masa studi (...semester)</th>
            <th>Lulusan tepat waktu(y,n)</th>
            <th>IPK</th>
            <th>Kategori Remedial(0, 1-2, >3)</th>
            <th>Aksi</th>

          </tr>
        </thead>
        <tbody>


<tr>
  <td class="text-center">1</td>
  <td>19312137</td>
  <td>Pramita Widyadari</td>
  <td class="text-center">2019</td>
  <td>Civil Engineering Regular</td>
  <td class="text-center">82</td>
  <td class="text-center">Y</td>
  <td class="text-center">8</td>
  <td class="text-center">Y</td>
  <td class="text-center">3.62</td>
  <td class="text-center">0</td>
  <td class="text-center">
    <button class="btn btn-sm btn-outline-info">Detail</button>
  </td>
</tr>

<tr>
  <td class="text-center">2</td>
  <td>19312376</td>
  <td>Ho Aldika Novaldy Sumampow</td>
  <td class="text-center">2020</td>
  <td>Civil Engineering Regular</td>
  <td class="text-center">75</td>
  <td class="text-center">Y</td>
  <td class="text-center">8</td>
  <td class="text-center">Y</td>
  <td class="text-center">3.28</td>
  <td class="text-center">1-2</td>
  <td class="text-center">
    <button class="btn btn-sm btn-outline-info">Detail</button>
  </td>
</tr>

<tr>
  <td class="text-center">3</td>
  <td>19312406</td>
  <td>Annisa Regita Sintowati</td>
  <td class="text-center">2020</td>
  <td>Civil Engineering Regular</td>
  <td class="text-center">69</td>
  <td class="text-center">N</td>
  <td class="text-center">10</td>
  <td class="text-center">N</td>
  <td class="text-center">3.10</td>
  <td class="text-center">>3</td>
  <td class="text-center">
    <button class="btn btn-sm btn-outline-info">Detail</button>
  </td>
</tr>

<tr>
  <td class="text-center">4</td>
  <td>19312418</td>
  <td>Claudia Monica Aditama</td>
  <td class="text-center">2019</td>
  <td>Civil Engineering Regular</td>
  <td class="text-center">80</td>
  <td class="text-center">Y</td>
  <td class="text-center">8</td>
  <td class="text-center">Y</td>
  <td class="text-center">3.45</td>
  <td class="text-center">0</td>
  <td class="text-center">
    <button class="btn btn-sm btn-outline-info">Detail</button>
  </td>
</tr>

<tr>
  <td class="text-center">5</td>
  <td>19312424</td>
  <td>Filza Aliyah Tasya</td>
  <td class="text-center">2019</td>
  <td>Civil Engineering IP</td>
  <td class="text-center">85</td>
  <td class="text-center">Y</td>
  <td class="text-center">8</td>
  <td class="text-center">Y</td>
  <td class="text-center">3.55</td>
  <td class="text-center">0</td>
  <td class="text-center">
    <button class="btn btn-sm btn-outline-info">Detail</button>
  </td>
</tr>

<tr>
  <td class="text-center">6</td>
  <td>19312430</td>
  <td>Rizky Maulana</td>
  <td class="text-center">2019</td>
  <td>Civil Engineering Regular</td>
  <td class="text-center">64</td>
  <td class="text-center">N</td>
  <td class="text-center">12</td>
  <td class="text-center">N</td>
  <td class="text-center">2.98</td>
  <td class="text-center">>3</td>
  <td class="text-center">
    <button class="btn btn-sm btn-outline-info">Detail</button>
  </td>
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
          Monev yudisium menjawab:

Apakah lulusan benar-benar mencapai 10 CPL?
apakah ada lulusan yg tidak memenuhi standar minimal?
Apakah ada CPL yang konsisten lemah saat lulus?

Apakah ada perbaikan kualitas lulusan dari tahun ke tahun?

Apakah perubahan kurikulum berdampak ke kualitas akhir?

Fokusnya bukan lagi growth semester,
tapi kualitas akhir dan konsistensinya.
        </p>
        <p>
Jenis chart:
Line Chart → Tren Semester
Bar Chart → Perbandingan Kelas
Radar Chart → Profil Lulusan
Heatmap → CPL vs Semester 
        </p>
        <p>
          Ringkasan capaian CPL per Kelompok Mahasiswa, perkembangan, peringatan dini (EWS), disajikan dalam bentuk grafik dan tabel (Mockup data statis)
        </p>
        <p>
          Laporan halaman ini menjawab 'apakah lulusan kita benar-benar kompeten'
        </p>
        <p>
          snapshot CPL by batch yudisium adalah gambaran CPL Mahasiswa yang lulus pada satu periode  yudisium tertentu tanpa memandang tahun masuknya(bisa campuran angkatan dan bahkan kurikulum), sehingga tujuannya adalah memonitor mutu output lulusan terkini; informmasi yag perlu disajikan meliputi jumlah lulusan periode tersebut, distribusi angkatan masuk, IPK rerata dan distribusinya, lama studi rerata rerata CPL dan distribusinya, persentasi remedial tinggi (misal >3 MK) remidial. dan perbandingan denan batch yudisium sebelumnya untuk melihat stabilitas output periodik. singkkatnya  snapsho batch yudisium menjawab " bagaimana mutu lulusan yang keluar pada periode ini?"
          untuk mutu lulusan.
        </p>
        <p>
          Halaman ringkasan ini disusun sebagai instrumen monitoring dan evaluasi mutu lulusan secara periodik. Melalui tampilan ini, pengguna dapat melihat apakah mayoritas mahasiswa lulus tepat waktu atau terdapat kecenderungan keterlambatan pada periode tertentu.

Selain itu, laporan ini membantu mengidentifikasi apakah capaian lulusan sudah kuat sejak awal proses pembelajaran atau terdapat indikasi perbaikan nilai (misalnya melalui remedial) yang signifikan.

Dari sisi mutu akademik, ringkasan ini juga berfungsi untuk menilai stabilitas kualitas lulusan antar periode, mendeteksi potensi penurunan capaian, serta mengamati kemungkinan perubahan beban akademik yang berdampak pada hasil pembelajaran.

Secara khusus, halaman ini menampilkan perkembangan rata-rata Capaian Pembelajaran Lulusan (CPL) dari waktu ke waktu berdasarkan periode kelulusan, sehingga dapat menjadi dasar analisis tren dan pengambilan keputusan akademik yang berbasis data.
        </p>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


 

 



<script>
  const ctx3 = document.getElementById('stackedCPMKChart').getContext('2d');

  const data = {
    labels: ['CPL 1', 'CPL 2', 'CPL 3', 'CPL 4','CPL 5','CPL 6','CPL 7','CPL 8','CPL 9','CPL 10'],
    datasets: [
      {
        label: 'Unsatisfactory (0-30)',
        data: [9, 6, 3, 6, 9, 6, 3, 6, 3, 6],
        backgroundColor: '#F59999'
      },
      {
        label: 'Developing (30.01-55)',
        data: [15, 18, 12, 15, 18, 12, 15, 12, 15, 18],
        backgroundColor: '#B7C9FC'
      },
      {
        label: 'Competent (55.01-70)',
        data: [30, 24, 27, 21, 24, 27, 21, 30, 24, 27],
        backgroundColor: '#9AE5CA'
      },
      {
        label: 'Accomplished (70.01-85)',
        data: [36, 42, 39, 45, 36, 42, 39, 45, 39, 45],
        backgroundColor: '#A2EDD2'
      },
      {
        label: 'Exemplary (85.01-100)',
        data: [30, 30, 39, 33, 30, 30, 39, 33, 39, 33],
        backgroundColor: '#6FD3C3'
      }
    ]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'bottom'
        },
        tooltip: {
          mode: 'index',
          intersect: false,
          itemSort: function(a, b) {
            return b.datasetIndex - a.datasetIndex;
          }
        }
      },
      scales: {
        x: {
          stacked: true
        },
        y: {
          stacked: true,
          beginAtZero: true,
          max: 120,
          title: {
            display: true,
            text: 'Jumlah Lulusan'
          }
        }
      }
    }
  };

  new Chart(ctx3, config);
</script>

<script>
const ctx = document.getElementById("chartCPL1");

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [
      'CPL 1','CPL 2','CPL 3','CPL 4','CPL 5',
      'CPL 6','CPL 7','CPL 8','CPL 9','CPL 10'
    ],
    datasets: [
      {
        label: 'Batas Standar',
        type: 'line',
        yMin: 80, 
        yMax: 80,
        backgroundColor: 'rgba(255,255,255,0.7)',
        borderColor: 'red',
        borderWidth: 2,
        borderDash: [6, 6],
      },
      {
        label: 'Rerata Skor',
        data: [82, 80, 79, 83, 78, 81, 77, 72, 70, 74],
        backgroundColor: '#6c757d',
        borderColor: '#6c757d',
        borderWidth: 1
      },
      {
        label: '% Mahasiswa Tuntas',
        data: [85, 81, 82, 84, 80, 81, 80, 61, 50, 67],
        backgroundColor: '#007bff',
        borderColor: '#007bff',
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
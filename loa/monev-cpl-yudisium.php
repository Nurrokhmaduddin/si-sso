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
                <b>Periode Yudisium :</b> 2021/2023 - 4 
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
    <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i>Level 4 - Tren Perbandingan</h5>
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
<div class="card">
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
      <th>Kategori Ketepatan Studi</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
      <td>1</td>
      <td>2020</td>
      <td>50</td>
      <td>62%</td>
      <td><span class="badge bg-success">Tepat Waktu</span></td>
    </tr>
    <tr>
      <td>2</td>
      <td>2021</td>
      <td>20</td>
      <td>25%</td>
      <td><span class="badge bg-info text-dark">Lebih Cepat</span></td>
    </tr>
    <tr>
      <td>3</td>
      <td>2019</td>
      <td>10</td>
      <td>13%</td>
      <td><span class="badge bg-warning text-dark">Terlambat</span></td>
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
</div>
<!-- ========== CARD : Proporsi Mahasiswa ========== -->
 <div class="card">
          <div class="card-body">
    <h6><b>Proporsi Mahasiswa dengan Remedial Tinggi</b></h6>
<table class="table table-bordered table-striped table-sm">
  <thead class=" text-center">
    <tr>
      <th>No</th>
      <th>Kategori Remedial</th>
      <th>Jumlah Mahasiswa</th>
      <th>Persentase (%)</th>
      <th>Keterangan Akademik</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
      <td>1</td>
      <td>Tidak Pernah Remedial</td>
      <td>40</td>
      <td>50%</td>
      <td><span class="badge bg-success">Stabil / Kuat Akademik</span></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Remedial Ringan (1–2 MK)</td>
      <td>25</td>
      <td>31%</td>
      <td><span class="badge bg-info text-dark">Perlu Penyesuaian</span></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Remedial Tinggi (≥ 3 MK)</td>
      <td>15</td>
      <td>19%</td>
      <td><span class="badge bg-warning text-dark">Perlu Perhatian</span></td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td colspan="5">
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
</div>

<!-- ========== CARD : tren antar batch ========== -->
<div class="card">
  <div class="card-body">
    <h6><b>Tabel Perbandingan Batch Yudisium (Monitoring Periodik)</b></h6>
    <table class="table table-bordered table-striped table-sm">
      <thead class=" text-center">
        <tr>
          <th>Indikator</th>
          <th>Batch Jan 2026</th>
          <th>Batch Jul 2026</th>
          <th>Perubahan</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <tr>
          <td class="text-start">Jumlah Lulusan</td>
          <td>65</td>
          <td>80</td>
          <td><span class="badge bg-success">Naik</span></td>
        </tr>
        <tr>
          <td class="text-start">IPK Rata-rata</td>
          <td>3.42</td>
          <td>3.38</td>
          <td><span class="badge bg-warning text-dark">Turun Tipis</span></td>
        </tr>
        <tr>
          <td class="text-start">CPL Rata-rata</td>
          <td>83%</td>
          <td>81%</td>
          <td><span class="badge bg-warning text-dark">Turun</span></td>
        </tr>
        <tr>
          <td class="text-start">% Tepat Waktu</td>
          <td>72%</td>
          <td>68%</td>
          <td><span class="badge bg-danger">Menurun</span></td>
        </tr>
        <tr>
          <td class="text-start">Remedial Tinggi</td>
          <td>14%</td>
          <td>19%</td>
          <td><span class="badge bg-danger">Meningkat</span></td>
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
            Tabel ini bersifat monitoring mutu output secara periodik.
          </td>
        </tr>
      </tfoot>
    </table>

    <h6><b>Tabel Perbandingan Batch Yudisium (Monitoring Periodik)</b></h6>
    <table class="table table-bordered table-striped table-sm">
      <thead class=" text-center">
        <tr>
          <th>No</th>
          <th>Periode Yudisium</th>
          <th>CPL Rata-rata (%)</th>
          <th>Tren</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <tr>
          <td>1</td>
          <td>Jan 2025</td>
          <td>79%</td>
          <td><span class="badge bg-secondary">Baseline</span></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jul 2025</td>
          <td>81%</td>
          <td><span class="badge bg-success">Meningkat</span></td>
        </tr>
        <tr>
          <td>3</td>
          <td>Jan 2026</td>
          <td>82%</td>
          <td><span class="badge bg-success">Meningkat</span></td>
        </tr>
        <tr>
          <td>4</td>
          <td>Jul 2026</td>
          <td>81%</td>
          <td><span class="badge bg-warning text-dark">Fluktuatif</span></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="4">
            <strong>Cara membaca tabel:</strong><br>
            Tabel ini menunjukkan tren mutu CPL rata-rata berdasarkan periode kelulusan.
            Ini bukan tren per angkatan masuk, melainkan evaluasi mutu output sistem dari waktu ke waktu.
            Jika nilai meningkat secara bertahap berarti ada perbaikan mutu pembelajaran,
            sedangkan stagnasi atau penurunan menunjukkan perlunya evaluasi kebijakan akademik.
          </td>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
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
            <th>Aksi(detail)</th>

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
  <td class="text-center">2019</td>
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
  <td class="text-center">2019</td>
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



          <!-- <tr>
            <td class="text-center">1</td>
            <td>19312137</td>
            <td>Pramita Widyadari</td>
            <td>pramita.widyadari@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-info">Aktif</span></td>
            <td class="text-center">
              <button type="button" class="btn btn-sm btn-outline-warning"><i class="fas fa-key"></i></button>
              <button type="button" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
              <button type="button" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
            </td>
          </tr>

          <tr>
            <td class="text-center">2</td>
            <td>19312376</td>
            <td>Ho Aldika Novaldy Sumampow</td>
            <td>aldika.sumampow@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-warning">Cuti</span></td>
            <td class="text-center">
              <button class="btn btn-sm btn-outline-info" onclick="window.location.href='monev-cpl-individual1.php' " ><i class="fas fa-info-circle"></i></button>
              <button class="btn btn-sm btn-outline-primary"><i class="fas fa-upload"></i></button>
              <button class="btn btn-sm btn-outline-success"><i class="fas fa-download"></i></button>
            </td>
          </tr>

          <tr>
            <td class="text-center">3</td>
            <td>19312406</td>
            <td>Annisa Regita Sintowati</td>
            <td>annisa.sintowati@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-danger">Skors</span></td>
            <td class="text-center">
              <div class="btn-group">
                <a href="portfolio_cpmk_detail2.php" target="_blank" class="btn btn-sm btn-outline-info">
                  <i class="fas fa-external-link-alt"></i> View
                </a>
                <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><i class="fas fa-edit text-primary"></i> Edit</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-trash text-danger"></i> Hapus</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-key text-warning"></i> Ubah Password</a></li>
                </ul>
              </div>
            </td>
          </tr>

          <tr>
            <td class="text-center">4</td>
            <td>19312418</td>
            <td>Claudia Monica Aditama</td>
            <td>claudia.aditama@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-danger">Drop Out</span></td>
            <td class="text-center">
              <button class="btn btn-sm btn-outline-warning">🔑</button>
            </td>
          </tr>
          <tr>

            <td class="text-center">5</td>
            <td>19312424</td>
            <td>Filza Aliyah Tasya</td>
            <td>filza.tasya@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering IP</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-danger">Passed Out</span></td>
            <td class="text-center">
              <button class="btn btn-sm btn-outline-warning">🔑</button>
            </td>
          </tr>

          <tr>
            <td class="text-center">6</td>
            <td>19312424</td>
            <td>Filza Aliyah Tasya</td>
            <td>filza.tasya@univ.ac.id</td>
            <td class="text-center">2019</td>
            <td>Civil Engineering Regular</td>
            <td class="text-center"><img style="width:40px;" alt="Foto"></td>
            <td class="text-center"><span class="badge badge-success">Lulus</span></td>
            <td class="text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-info dropdown-toggle" 
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-ellipsis-h"></i> Action
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"><i class="fas fa-edit text-primary"></i> Edit Link</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt text-danger"></i> Hapus Data</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-key text-warning"></i> Ubah Password</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-upload text-success"></i> Upload File</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="portfolio_cpmk_detail2.php" target="_blank">
                  <i class="fas fa-external-link-alt text-info"></i> View Link</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-download text-success"></i> Download File</a></li>
                </ul>
              </div>
            </td>
          </tr> -->

        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- ========== CARD 4: Chart CPL/IK/CPMK/MK Min/Max/Rerata ========== -->
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i> CPL - Rata-rata Capaian (Hijau)</h5>
            <div class="card-tools">
              <small class="text-muted">Angkatan Terpilih</small>
            </div>
          </div>
          <div class="card-body chart-container">
            <canvas id="chartCPL" width="100%" height="22"></canvas>
            <div class="row text-center mt-3">
              <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL11">
                  Rangking Performa
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL12">
                  Rangking Mahasiswa
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL13">
                  Daftar Min/Max/Rerata
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-danger btn-sm w-100" data-bs-toggle="collapse" onclick="openAllRisikoPreview()">
                  Performa Risiko
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-danger btn-sm w-100" data-bs-toggle="collapse" onclick="openAllStudentsPreview()">
                  Mahasiswa Risiko
                </button>
              </div>
            </div>
          </div>         
        </div>
        <!-- Rangking Performa -->
        <!-- Rangking Mahasiswa -->
        <div class="row collapse" id="daftarIKCPL12">
          <!-- Card Lowest -->
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">🔽 Top 5 CPL Nilai Terendah</h5>
              </div>
              <div class="card-body">
                <h3>Lowest 5</h3>
                <table border="1" cellpadding="8" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Ranking</th>
                      <th>CPL</th>
                      <th class="text-center">Nilai</th>
                      <th>NIM</th>
                      <th>NAMA</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:10%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>CPL-01</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">20</span></td>
                      <td>20241099</td>
                      <td>Andi Saputra</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:25%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>CPL-04</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">30</span></td>
                      <td>20241002</td>
                      <td>Siti Rahma</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:35%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>CPL-05</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">50</span></td>
                      <td>20241055</td>
                      <td>Budi Santoso</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:50%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>CPL-09</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">51</span></td>
                      <td>20241077</td>
                      <td>Nina Lestari</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:70%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>CPL-10</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">57</span></td>
                      <td>20241011</td>
                      <td>Rian Kurnia</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Card Highest -->
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">🔼 Top 5 CPL Nilai Tertinggi</h5>
              </div>
              <div class="card-body">
                <h3>Highest 5</h3>
                <table border="1" cellpadding="8" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Ranking</th>
                      <th>CPL</th>
                      <th class="text-center">Nilai</th>
                      <th>NIM</th>
                      <th>NAMA</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>                      
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:95%; height:12px; border-radius:4px;"></div>
                        </div>
                        <td>CPL-10</td>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">95</span></td>
                      <td>20241099</td>
                      <td>Andi Saputra</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:85%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>CPL-10</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">90</span></td>
                      <td>20241099</td>
                      <td>Andi Saputra</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:78%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>CPL-09</td>
                     <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">85</span></td>
                      <td>20241099</td>
                      <td>Andi Saputra</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:65%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>CPL-01</td>
                     <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">70</span></td>
                      <td>20241099</td>
                      <td>Andi Saputra</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:50%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>CPL-01</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">70</span></td>
                      <td>20241002</td>
                      <td>Siti Rahma</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- daftar min/max/rerate -->
        <div class="card collapse" id="daftarIKCPL13" >
          <div class="card-header d-flex align-items-center">
            <h5 class="card-title mb-0"><i class="fas fa-table me-2"></i> Tabel CPL — Min / Max / Rerata</h5>
            <div class="card-tools ms-auto">
              <small class="text-muted">Klik angka Min/Max untuk melihat 1 mahasiswa (NIM / Nama / Nilai)</small>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="tblCplStats" class="table table-hover table-bordered table-sm">
                <thead class="table-light">
                  <tr>
                    <th style="width: 40px">#</th>
                    <th>CPL Code</th>
                    <th class="text-center">Min</th>
                    <th class="text-center">Max</th>
                    <th class="text-center">Rerata (%)</th>
                  </tr>
                </thead>
                <tbody>                
                  <tr>
                    <td>1</td>
                    <td>CPL-01: Pemahaman Dasar Polimer</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="61">61</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="88">88</span></td>
                    <td class="text-center">72.14</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>CPL-02: Teori Komposit</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-02" data-type="min" data-value="55">55</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-02" data-type="max" data-value="94">94</span></td>
                    <td class="text-center">77.86</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>CPL-03: Aplikasi Polimer</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-03" data-type="min" data-value="68">68</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-03" data-type="max" data-value="91">91</span></td>
                    <td class="text-center">76.14</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>CPL-04: Proses Produksi</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-04" data-type="min" data-value="60">60</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-04" data-type="max" data-value="86">86</span></td>
                    <td class="text-center">74.00</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>CPL-05: Analisis Material</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-05" data-type="min" data-value="58">58</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-05" data-type="max" data-value="89">89</span></td>
                    <td class="text-center">75.30</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>CPL-06: Keselamatan & Etika</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-06" data-type="min" data-value="65">65</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-06" data-type="max" data-value="92">92</span></td>
                    <td class="text-center">78.20</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>CPL-07: Desain Proses</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-07" data-type="min" data-value="59">59</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-07" data-type="max" data-value="87">87</span></td>
                    <td class="text-center">73.40</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>CPL-08: Metode Eksperimental</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-08" data-type="min" data-value="62">62</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-08" data-type="max" data-value="90">90</span></td>
                    <td class="text-center">76.80</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>CPL-09: Statistik & Analisis Data</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-09" data-type="min" data-value="57">57</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-09" data-type="max" data-value="85">85</span></td>
                    <td class="text-center">71.50</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>CPL-10: Komunikasi Teknis</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-10" data-type="min" data-value="64">64</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-10" data-type="max" data-value="88">88</span></td>
                    <td class="text-center">75.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>        
          <div class="card-footer d-flex justify-content-between">            
          </div>
        </div>

        <!-- ========== CARD 4: Chart CPL/IK/CPMK/MK Min/Max/Rerata ========== -->
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i>IK - Rata-rata Capaian (Oranye)</h5>
            <div class="card-tools">
              <small class="text-muted">Angkatan Terpilih</small>
            </div>
          </div>
          <div class="card-body chart-container">
            <canvas id="chartIK" width="100%" height="22"></canvas>
            <div class="row text-center mt-3">
              <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL21">
                  Rangking Performa
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL22">
                  Rangking Mahasiswa
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL23">
                  Daftar Min/Max/Rerata
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-danger btn-sm w-100" data-bs-toggle="collapse" onclick="openAllRisikoPreview()">
                  Performa Risiko
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-danger btn-sm w-100" data-bs-toggle="collapse" onclick="openAllStudentsPreview()">
                  Mahasiswa Risiko
                </button>
              </div>
            </div>
          </div>         
        </div>
        <!-- Rangking Performa -->
        <!-- Rangking Mahasiswa -->
        <div class="row collapse" id="daftarIKCPL22">
          <!-- Card Lowest -->
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">🔽 Top 5 IK Nilai Terendah</h5>
              </div>
              <div class="card-body">
                <h3>Lowest 5</h3>
                <table border="1" cellpadding="8" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Ranking</th>
                      <th>IK</th>
                      <th class="text-center">Nilai</th>
                      <th>NIM</th>
                      <th>NAMA</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:10%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>IK-11</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">20</span></td>
                      <td>20241099</td>
                      <td>Andi Saputra</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:25%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>IK-14</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">30</span></td>
                      <td>20241002</td>
                      <td>Siti Rahma</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:35%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>IK-14</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">50</span></td>
                      <td>20241055</td>
                      <td>Budi Santoso</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:50%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>IK-11</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">51</span></td>
                      <td>20241077</td>
                      <td>Nina Lestari</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:70%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>IK-17</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">57</span></td>
                      <td>20241011</td>
                      <td>Rian Kurnia</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Card Highest -->
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">🔼 Top 5 IK Nilai Tertinggi</h5>
              </div>
              <div class="card-body">
                <h3>Highest 5</h3>
                <table border="1" cellpadding="8" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Ranking</th>
                      <th>CPIK</th>
                      <th class="text-center">Nilai</th>
                      <th>NIM</th>
                      <th>NAMA</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>                      
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:95%; height:12px; border-radius:4px;"></div>
                        </div>
                        <td>IK-21</td>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">95</span></td>
                      <td>20241099</td>
                      <td>Andi Saputra</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:85%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>IK-15</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">90</span></td>
                      <td>20241099</td>
                      <td>Andi Saputra</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:78%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>IK-16</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">85</span></td>
                      <td>20241099</td>
                      <td>Andi Saputra</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:65%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>IK-21</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">70</span></td>
                      <td>20241099</td>
                      <td>Andi Saputra</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:50%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>IK-23</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">70</span></td>
                      <td>20241002</td>
                      <td>Siti Rahma</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- daftar min/max/rerate -->
        <div class="card collapse" id="daftarIKCPL23" >
          <div class="card-header d-flex align-items-center">
            <h5 class="card-title mb-0"><i class="fas fa-table me-2"></i> Tabel CPL — Min / Max / Rerata</h5>
            <div class="card-tools ms-auto">
              <small class="text-muted">Klik angka Min/Max untuk melihat 1 mahasiswa (NIM / Nama / Nilai)</small>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="tblCplStats" class="table table-hover table-bordered table-sm">
                <thead class="table-light">
                  <tr>
                    <th style="width: 40px">#</th>
                    <th>CPL Code</th>
                    <th class="text-center">Min</th>
                    <th class="text-center">Max</th>
                    <th class="text-center">Rerata (%)</th>
                  </tr>
                </thead>
                <tbody>                
                  <tr>
                    <td>1</td>
                    <td>CPL-01: Pemahaman Dasar Polimer</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="61">61</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="88">88</span></td>
                    <td class="text-center">72.14</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>CPL-02: Teori Komposit</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-02" data-type="min" data-value="55">55</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-02" data-type="max" data-value="94">94</span></td>
                    <td class="text-center">77.86</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>CPL-03: Aplikasi Polimer</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-03" data-type="min" data-value="68">68</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-03" data-type="max" data-value="91">91</span></td>
                    <td class="text-center">76.14</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>CPL-04: Proses Produksi</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-04" data-type="min" data-value="60">60</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-04" data-type="max" data-value="86">86</span></td>
                    <td class="text-center">74.00</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>CPL-05: Analisis Material</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-05" data-type="min" data-value="58">58</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-05" data-type="max" data-value="89">89</span></td>
                    <td class="text-center">75.30</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>CPL-06: Keselamatan & Etika</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-06" data-type="min" data-value="65">65</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-06" data-type="max" data-value="92">92</span></td>
                    <td class="text-center">78.20</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>CPL-07: Desain Proses</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-07" data-type="min" data-value="59">59</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-07" data-type="max" data-value="87">87</span></td>
                    <td class="text-center">73.40</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>CPL-08: Metode Eksperimental</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-08" data-type="min" data-value="62">62</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-08" data-type="max" data-value="90">90</span></td>
                    <td class="text-center">76.80</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>CPL-09: Statistik & Analisis Data</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-09" data-type="min" data-value="57">57</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-09" data-type="max" data-value="85">85</span></td>
                    <td class="text-center">71.50</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>CPL-10: Komunikasi Teknis</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-10" data-type="min" data-value="64">64</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-10" data-type="max" data-value="88">88</span></td>
                    <td class="text-center">75.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>        
          <div class="card-footer d-flex justify-content-between">            
          </div>
        </div>

        <!-- ========== CARD 4: Chart CPL/IK/CPMK/MK Min/Max/Rerata ========== -->
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i>CPMK - Rata-rata Capaian (Merah)</h5>
            <div class="card-tools">
              <small class="text-muted">Angkatan Terpilih</small>
            </div>
          </div>
          <div class="card-body chart-container">
            <canvas id="chartCPMK" width="100%" height="22"></canvas>
            <div class="row text-center mt-3">
              <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL31">
                  Rangking Performa
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL32">
                  Rangking Mahasiswa
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL33">
                  Daftar Min/Max/Rerata
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-danger btn-sm w-100" data-bs-toggle="collapse" onclick="openAllRisikoPreview()">
                  Performa Risiko
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-danger btn-sm w-100" data-bs-toggle="collapse" onclick="openAllStudentsPreview()">
                  Mahasiswa Risiko
                </button>
              </div>
            </div>
          </div>         
        </div>
        <!-- Rangking Performa -->
        <!-- Rangking Mahasiswa -->
        <div class="row collapse" id="daftarIKCPL32" >
          <!-- Card Lowest -->
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">🔽 Top 5 CPMK Nilai Terendah</h5>
              </div>
              <div class="card-body">
                <h3>Lowest 5</h3>
                <table border="1" cellpadding="8" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Ranking</th>
                      <th>CPMK</th>
                      <th class="text-center">Nilai</th>
                      <th>NIM</th>
                      <th>NAMA</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:10%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>STK114-1</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">20</span></td>
                      <td>20241099</td>
                      <td>Andi Saputra</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:25%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>STK114-1</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">30</span></td>
                      <td>20241002</td>
                      <td>Siti Rahma</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:35%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>STK115-1</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">50</span></td>
                      <td>20241055</td>
                      <td>Budi Santoso</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:50%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>STK116-1</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">51</span></td>
                      <td>20241077</td>
                      <td>Nina Lestari</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#f54242; width:70%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>STK144-4</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="57">57</span></td>
                      <td>20241011</td>
                      <td>Rian Kurnia</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Card Highest -->
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">🔼 Top 5 CPMK Nilai Tertinggi</h5>
              </div>
              <div class="card-body">
                <h3>Highest 5</h3>
                <table border="1" cellpadding="8" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Ranking</th>
                      <th>CPMK</th>
                      <th class="text-center">Nilai</th>
                      <th>NIM</th>
                      <th>NAMA</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>                      
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:95%; height:12px; border-radius:4px;"></div>
                        </div>
                        <td>STS911-4</td>
                      </td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">95</span></td>
                      <td>20241099</td>
                      <td>Andi Saputra</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:85%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>STS916-1</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">90</span></td>
                      <td>20241099</td>
                      <td>Andi Saputra</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:78%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>STS913-2</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">85</span></td>
                      <td>20241099</td>
                      <td>Andi Saputra</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:65%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>STS991-3</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">70</span></td>
                      <td>20241099</td>
                      <td>Andi Saputra</td>
                    </tr>
                    <tr>
                      <td>
                        <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                          <div style="background:#4287f5; width:50%; height:12px; border-radius:4px;"></div>
                        </div>
                      </td>
                      <td>STS914-5</td>
                      <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="95">70</span></td>
                      <td>20241002</td>
                      <td>Siti Rahma</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- daftar min/max/rerate -->
        <div class="card collapse" id="daftarIKCPL33" >
          <div class="card-header d-flex align-items-center">
            <h5 class="card-title mb-0"><i class="fas fa-table me-2"></i> Tabel CPL — Min / Max / Rerata</h5>
            <div class="card-tools ms-auto">
              <small class="text-muted">Klik angka Min/Max untuk melihat 1 mahasiswa (NIM / Nama / Nilai)</small>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="tblCplStats" class="table table-hover table-bordered table-sm">
                <thead class="table-light">
                  <tr>
                    <th style="width: 40px">#</th>
                    <th>CPL Code</th>
                    <th class="text-center">Min</th>
                    <th class="text-center">Max</th>
                    <th class="text-center">Rerata (%)</th>
                  </tr>
                </thead>
                <tbody>                
                  <tr>
                    <td>1</td>
                    <td>CPL-01: Pemahaman Dasar Polimer</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="61">61</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="88">88</span></td>
                    <td class="text-center">72.14</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>CPL-02: Teori Komposit</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-02" data-type="min" data-value="55">55</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-02" data-type="max" data-value="94">94</span></td>
                    <td class="text-center">77.86</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>CPL-03: Aplikasi Polimer</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-03" data-type="min" data-value="68">68</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-03" data-type="max" data-value="91">91</span></td>
                    <td class="text-center">76.14</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>CPL-04: Proses Produksi</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-04" data-type="min" data-value="60">60</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-04" data-type="max" data-value="86">86</span></td>
                    <td class="text-center">74.00</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>CPL-05: Analisis Material</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-05" data-type="min" data-value="58">58</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-05" data-type="max" data-value="89">89</span></td>
                    <td class="text-center">75.30</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>CPL-06: Keselamatan & Etika</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-06" data-type="min" data-value="65">65</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-06" data-type="max" data-value="92">92</span></td>
                    <td class="text-center">78.20</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>CPL-07: Desain Proses</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-07" data-type="min" data-value="59">59</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-07" data-type="max" data-value="87">87</span></td>
                    <td class="text-center">73.40</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>CPL-08: Metode Eksperimental</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-08" data-type="min" data-value="62">62</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-08" data-type="max" data-value="90">90</span></td>
                    <td class="text-center">76.80</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>CPL-09: Statistik & Analisis Data</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-09" data-type="min" data-value="57">57</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-09" data-type="max" data-value="85">85</span></td>
                    <td class="text-center">71.50</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>CPL-10: Komunikasi Teknis</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-10" data-type="min" data-value="64">64</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-10" data-type="max" data-value="88">88</span></td>
                    <td class="text-center">75.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>        
          <div class="card-footer d-flex justify-content-between">            
          </div>
        </div>

        <!-- ========== CARD 4: Chart CPL/IK/CPMK/MK Min/Max/Rerata ========== -->
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i> MK - Rata-rata Capaian (Biru)</h5>
            <div class="card-tools">
              <small class="text-muted">Angkatan Terpilih</small>
            </div>
          </div>
          <div class="card-body chart-container">
            <canvas id="chartMK" width="100%" height="22"></canvas>
            <div class="row text-center mt-3">
              <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL41">
                  Rangking Performa
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL42">
                  Rangking Mahasiswa
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-info btn-sm w-100" data-bs-toggle="collapse" data-bs-target="#daftarIKCPL43">
                  Daftar Min/Max/Rerata
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-danger btn-sm w-100" data-bs-toggle="collapse" onclick="openAllRisikoPreview()">
                  Performa Risiko
                </button>
              </div>
              <div class="col">
                <button class="btn btn-outline-danger btn-sm w-100" data-bs-toggle="collapse" onclick="openAllStudentsPreview()">
                  Mahasiswa Risiko
                </button>
              </div>
            </div>
          </div>      
        </div>
        <!-- Rangking Performa -->
        <div class="row collapse" id="daftarIKCPL41" >
          <!-- Card Lowest -->
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">🔽 Top 5 MK Performa Terendah</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="tblCplStats" class="table table-hover table-bordered table-sm">
                    <thead class="table-light">
                      <tr>
                        <th>Ranking</th>
                        <th class="text-center" style="width: 140px">Rerata Nilai Akhir</th>
                        <th>MK</th>
                        <th>Deskripsi</th>
                      </tr>
                    </thead>
                    <tbody>                
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:10%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">20</span></td>
                        <td>STK314</td>
                        <td>Fisika Dasar 2</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:25%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">30</span></td>
                        <td>STK114</td>
                        <td>Azas Teknik Kimia 1</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:35%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">50</span></td>
                        <td>STK115</td>
                        <td>Aljabar Linear</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:50%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">51</span></td>
                        <td>STK116</td>
                        <td>Bahasa Inggris</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:70%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">57</span></td>
                        <td>STK144</td>
                        <td>Perancangan Alat Proses</td>
                      </tr>
                    </tbody>
                  </table>
                </div>               
              </div>
            </div>
          </div>
          <!-- Card Highest -->
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">🔼 Top 5 MK Performa Tertinggi</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="tblCplStats" class="table table-hover table-bordered table-sm">
                    <thead class="table-light">
                      <tr>
                        <th>Ranking</th>
                        <th class="text-center" style="width: 140px">Rerata Nilai Akhir</th>
                        <th>MK</th>
                        <th>Deskripsi</th>
                      </tr>
                    </thead>
                    <tbody>                
                      <tr>                      
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:95%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">95</span></td>
                        <td>STS911</td>
                        <td>Bahasa Inggris</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:85%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">90</span></td>
                        <td>STS916</td>
                        <td>Ekonomi Teknik</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:78%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">85</span></td>
                        <td>UNI913</td>
                        <td>Kuliah Kerja Nyata</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:65%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">70</span></td>
                        <td>STS991</td>
                        <td>Fisika Dasar</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:50%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">70</span></td>
                        <td>STS914</td>
                        <td>Islam Ulil Albab</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                
              </div>
            </div>
          </div>
        </div>
        <!-- Rangking Mahasiswa -->
        <div class="row collapse" id="daftarIKCPL42" >
          <!-- Card Lowest -->
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">🔽 Top 10 MK Nilai Terendah</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="tblCplStats" class="table table-hover table-bordered table-sm">
                    <thead class="table-light">
                      <tr>
                        <th>Ranking</th>
                        <th class="text-center" style="width: 100px">Nilai Akhir</th>
                        <th>MK</th>
                        <th>NIM</th>
                        <th>NAMA</th>
                      </tr>
                    </thead>
                    <tbody>                
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:10%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">20</span></td>
                        <td>STK114</td>
                        <td>20241099</td>
                        <td>Andi Saputra</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:22%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">30</span></td>
                        <td>STK115</td>
                        <td>20241002</td>
                        <td>Siti Rahma</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:25%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">44</span></td>
                        <td>STK119</td>
                        <td>20241055</td>
                        <td>Budi Santoso</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:35%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">45</span></td>
                        <td>STK116</td>
                        <td>20241077</td>
                        <td>Nina Lestari</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:37%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">49</span></td>
                        <td>STK144</td>
                        <td>20241011</td>
                        <td>Rian Kurnia</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:40%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">50</span></td>
                        <td>STK521</td>
                        <td>20241099</td>
                        <td>Andi Saputra</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:45%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">50</span></td>
                        <td>STK911</td>
                        <td>20241002</td>
                        <td>Siti Rahma</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:45%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">56</span></td>
                        <td>STK914</td>
                        <td>20241055</td>
                        <td>Budi Santoso</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:50%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">56</span></td>
                        <td>STK921</td>
                        <td>20241077</td>
                        <td>Nina Lestari</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#f54242; width:70%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="min" data-value="57">57</span></td>
                        <td>STK925</td>
                        <td>20241011</td>
                        <td>Rian Kurnia</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Card Highest -->
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">🔼 Top 10 MK Nilai Tertinggi</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="tblCplStats" class="table table-hover table-bordered table-sm">
                    <thead class="table-light">
                      <tr>
                        <th>Ranking</th>
                        <th class="text-center" style="width: 100px">Nilai Akhir</th>
                        <th>MK</th>
                        <th>NIM</th>
                        <th>NAMA</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>                      
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:95%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">95</span></td>
                        <td>STS911</td>
                        <td>20241099</td>
                        <td>Andi Saputra</td>
                      </tr>
                      <tr>                      
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:95%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">94</span></td>
                        <td>STS981</td>
                        <td>20241099</td>
                        <td>Andi Saputra</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:85%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">90</span></td>
                        <td>STS916</td>
                        <td>20241099</td>
                        <td>Andi Saputra</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:85%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">89</span></td>
                        <td>STS916</td>
                        <td>20241002</td>
                        <td>Siti Rahma</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:78%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">85</span></td>
                        <td>STS913</td>
                        <td>20241099</td>
                        <td>Andi Saputra</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:78%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">85</span></td>
                        <td>STS913</td>
                        <td>13521171</td>
                        <td>Taufik Kusuma</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:65%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">70</span></td>
                        <td>STS991</td>
                        <td>20241099</td>
                        <td>Andi Saputra</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:65%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">68</span></td>
                        <td>STS991</td>
                        <td>13521143</td>
                        <td>Ega Nur Hidayat</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:50%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">67</span></td>
                        <td>STS914</td>
                        <td>20241002</td>
                        <td>Siti Rahma</td>
                      </tr>
                      <tr>
                        <td>
                          <div style="background:#eee; width:100%; height:12px; border-radius:4px;">
                            <div style="background:#4287f5; width:50%; height:12px; border-radius:4px;"></div>
                          </div>
                        </td>
                        <td class="text-center"><span class="clickable" data-MK="MK-01" data-type="max" data-value="95">67</span></td>
                        <td>STS914</td>
                        <td>16521014</td>
                        <td>Satya Aditya</td>
                      </tr>
                    </tbody>
                  </table>
                </div>


              </div>
            </div>
          </div>
        </div>        
        <!-- daftar min/max/rerate -->
        <div class="card collapse" id="daftarIKCPL43" >
          <div class="card-header d-flex align-items-center">
            <h5 class="card-title mb-0"><i class="fas fa-table me-2"></i> Tabel CPL — Min / Max / Rerata</h5>
            <div class="card-tools ms-auto">
              <small class="text-muted">Klik angka Min/Max untuk melihat 1 mahasiswa (NIM / Nama / Nilai)</small>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="tblCplStats" class="table table-hover table-bordered table-sm">
                <thead class="table-light">
                  <tr>
                    <th style="width: 40px">#</th>
                    <th>CPL Code</th>
                    <th class="text-center">Min</th>
                    <th class="text-center">Max</th>
                    <th class="text-center">Rerata (%)</th>
                  </tr>
                </thead>
                <tbody>                
                  <tr>
                    <td>1</td>
                    <td>CPL-01: Pemahaman Dasar Polimer</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="min" data-value="61">61</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-01" data-type="max" data-value="88">88</span></td>
                    <td class="text-center">72.14</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>CPL-02: Teori Komposit</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-02" data-type="min" data-value="55">55</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-02" data-type="max" data-value="94">94</span></td>
                    <td class="text-center">77.86</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>CPL-03: Aplikasi Polimer</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-03" data-type="min" data-value="68">68</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-03" data-type="max" data-value="91">91</span></td>
                    <td class="text-center">76.14</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>CPL-04: Proses Produksi</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-04" data-type="min" data-value="60">60</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-04" data-type="max" data-value="86">86</span></td>
                    <td class="text-center">74.00</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>CPL-05: Analisis Material</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-05" data-type="min" data-value="58">58</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-05" data-type="max" data-value="89">89</span></td>
                    <td class="text-center">75.30</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>CPL-06: Keselamatan & Etika</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-06" data-type="min" data-value="65">65</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-06" data-type="max" data-value="92">92</span></td>
                    <td class="text-center">78.20</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>CPL-07: Desain Proses</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-07" data-type="min" data-value="59">59</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-07" data-type="max" data-value="87">87</span></td>
                    <td class="text-center">73.40</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>CPL-08: Metode Eksperimental</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-08" data-type="min" data-value="62">62</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-08" data-type="max" data-value="90">90</span></td>
                    <td class="text-center">76.80</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>CPL-09: Statistik & Analisis Data</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-09" data-type="min" data-value="57">57</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-09" data-type="max" data-value="85">85</span></td>
                    <td class="text-center">71.50</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>CPL-10: Komunikasi Teknis</td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-10" data-type="min" data-value="64">64</span></td>
                    <td class="text-center"><span class="clickable" data-cpl="CPL-10" data-type="max" data-value="88">88</span></td>
                    <td class="text-center">75.00</td>
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


  <!-- Modal: Student detail (when clicking a value) -->
  <div class="modal fade" id="modalValueDetail" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header bg-info text-white">
          <h6 class="modal-title" id="modalValueTitle">Detail Nilai</h6>
          <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <dl class="row mb-0">
            <dt class="col-5">NIM</dt><dd class="col-7" id="mdNim">-</dd>
            <dt class="col-5">Nama</dt><dd class="col-7" id="mdName">-</dd>
            <dt class="col-5">IK</dt><dd class="col-7" id="mdIk">-</dd>
            <dt class="col-5">CPMK</dt><dd class="col-7" id="mdCpmk">-</dd>
            <dt class="col-5">Nilai</dt><dd class="col-7" id="mdValue">-</dd>
          </dl>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
          <a id="viewDocBtn" class="btn btn-primary btn-sm" href="#" target="_blank">Lihat Dokumen</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Preview Risk Students -->
  <div class="modal fade" id="modalPreviewAll" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-secondary text-white">
          <h6 class="modal-title">Preview Mahasiswa Risiko (sample)</h6>
          <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table table-sm table-bordered">
            <thead class="table-light"><tr><th>#</th><th>NIM</th><th>Nama</th><th>CP Lower</th></tr></thead>
            <tbody>
              <tr><td>1</td><td>20241099</td><td>Mahasiswa Minimal</td><td>61 (CPL-01)</td></tr>
              <tr><td>2</td><td>20241077</td><td>Siswa Risiko</td><td>48 (CPL-04)</td></tr>
              <tr><td>3</td><td>20241055</td><td>Contoh Lain</td><td>45 (CPL-09)</td></tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Preview Risk Performance -->
  <div class="modal fade" id="modalRisikoAll" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-secondary text-white">
          <h6 class="modal-title">Preview Performa Risiko (sample)</h6>
          <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table table-sm table-bordered">
            <thead class="table-light"><tr><th>#</th><th>Kode</th><th>Deskripsi</th><th>Nilai Performa</th></tr></thead>
            <tbody>
              <tr><td>1</td><td>CPL-01</td><td>lorem ipsum</td><td>61 </td></tr>
              <tr><td>2</td><td>CPL-04</td><td>lorem ipsum</td><td>48 </td></tr>
              <tr><td>3</td><td>CPL-06</td><td>Contoh Lain</td><td>45 </td></tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Show single student (on clicking min/max) -->
  <div class="modal fade" id="modalStudent" tabindex="-1" aria-labelledby="modalStudentLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header bg-info text-white">
          <h5 class="modal-title" id="modalStudentLabel"><i class="fas fa-user-graduate me-2"></i> Detil Mahasiswa</h5>
          <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <dl class="row mb-0">
            <dt class="col-5">NIM</dt><dd class="col-7" id="stuNim">-</dd>
            <dt class="col-5">Nama</dt><dd class="col-7" id="stuName">-</dd>
            <dt class="col-5">Jenis</dt><dd class="col-7" id="stuType">-</dd>
            <dt class="col-5">Nilai</dt><dd class="col-7" id="stuValue">-</dd>
          </dl>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <script>
/* ========== Clickable min/max handler (show modal with single student) ========== */
    $(document).on('click', '.clickable', function() {
      const cpl = $(this).data('cpl');
  const type = $(this).data('type'); // 'min' atau 'max'
  const value = $(this).data('value');

  // dummy student selection logic (for mockup)
  let student;
  if(type === 'min') {
    student = { nim: '20241099', name: 'Mahasiswa Minimal', value: value, type: 'Min' };
  } else {
    student = { nim: '20241002', name: 'Mahasiswa Maksimal', value: value, type: 'Max' };
  }

  $('#modalStudentLabel').text(cpl + ' — ' + (type === 'min' ? 'Minimum' : 'Maximum'));
  $('#stuNim').text(student.nim);
  $('#stuName').text(student.name);
  $('#stuValue').text(student.value);
  $('#stuType').text(student.type);

  var modal = new bootstrap.Modal(document.getElementById('modalStudent'));
  modal.show();
});

/* ========== Export CSV (from table tblCplStats) ========== */
    function tableToCSV(filename = 'cpl_stats.csv') {
      const rows = [];
      $('#tblCplStats thead tr').each(function() {
        const cols = $(this).find('th').map((i, th) => $(th).text().trim()).get();
        rows.push(cols.join(','));
      });
      $('#tblCplStats tbody tr').each(function() {
        const cols = $(this).find('td').map((i, td) => {
      // remove inner tags (like span)
      return $(td).text().trim().replace(/,/g, ''); // crude comma remove
    }).get();
        rows.push(cols.join(','));
      });

      const csvString = rows.join('\n');
      const blob = new Blob([csvString], { type: 'text/csv' });
      const link = document.createElement('a');
      link.href = URL.createObjectURL(blob);
      link.download = filename;
      document.body.appendChild(link);
      link.click();
      link.remove();
    }
    $('#btnExportCsv').on('click', function(){ tableToCSV(); });

/* ========== Filter modal: apply dummy filter ========== */
    $('#formFilter').on('submit', function(e){
      e.preventDefault();
  // read values (dummy)
      const set = $('#filterSet').val();
      const angkatan = $('#filterAngkatan').val();
      const peminatan = $('#filterPeminatan').val();

  // just display in header row, or apply to chart/table if dynamic back-end
      alert('Filter diterapkan:\\nSet: ' + set + '\\nAngkatan: ' + angkatan + '\\nPeminatan: ' + peminatan);
      $('#modalFilter').modal('hide');
    });

/* ========== Utility: openAllStudentsPreview (dummy) ========== */
    function openAllStudentsPreview(){
      var modal = new bootstrap.Modal(document.getElementById('modalPreviewAll'));
      modal.show();
    }

/* ========== small helper for demo: applyDummyFilter ========== */
    function applyDummyFilter(){
      alert('Filter dummy diterapkan (preview).');
    }

/* ========== (Optional) Prepare CSV export for other tables if needed ========== */

  </script>

  <script>     
    // -------------------------
    // Populate tables & KPI
    // -------------------------
    function populateRekap() {
      const tbody = document.getElementById('tableRekapBody');
      tbody.innerHTML = '';
      CPLS.forEach((c,i) => {
        const gap = (c.avg - c.target).toFixed(2);
        const status = gap >= 0 ? 'green' : (gap >= -10 ? 'yellow' : 'red');
        const tr = document.createElement('tr');
        tr.style.cursor = 'pointer';
        tr.innerHTML = `
          <td>${i+1}</td>
          <td><strong>${c.code}</strong><div class="small text-muted">${c.name}</div></td>
          <td class="text-center">${c.avg}</td>
          <td class="text-center">${c.target}</td>
          <td class="text-center">${gap}%</td>
          <td class="text-center"><span class="status-dot ${status==='green'?'status-green':status==='yellow'?'status-yellow':'status-red'}"></span></td>
        `;
        tr.addEventListener('click', ()=> {
          // highlight and scroll to granular - simple behavior: filter detail rows by sample
          alert('Buka drilldown CPL: ' + c.code + '\\n(Mockup) — men-scroll ke tabel detail');
          document.getElementById('tblDetail').scrollIntoView({behavior:'smooth'});
        });
        tbody.appendChild(tr);
      });

      // KPI summary
      const avgAll = (CPLS.reduce((s,x)=>s+x.avg,0) / CPLS.length).toFixed(2);
      document.getElementById('kpiAvg').textContent = avgAll;
      const reached = CPLS.filter(x=>x.avg >= x.target).length;
      document.getElementById('kpiReached').textContent = reached + ' / ' + CPLS.length;
      const gapAvg = (avgAll - 80).toFixed(2);
      document.getElementById('kpiGap').textContent = (gapAvg>0?('+'):'') + gapAvg + '%';
      const riskCount = detailRows.filter(r=>r.value < 50).length;
      document.getElementById('kpiRisk').textContent = riskCount;
      document.getElementById('summaryShort').textContent = `Rata-rata CPL: ${avgAll} — Gap vs Target: ${gapAvg}%`;
    }

    
    function populateDetail() {
      const tbody = document.getElementById('tblDetailBody');
      tbody.innerHTML = '';
      detailRows.forEach(r => {
        const tdValue = `<a href="#" class="link-primary text-decoration-none value-link" data-nim="${r.nim}" data-name="${r.name}" data-ik="${r.ik}" data-cpmk="${r.cpmk}" data-value="${r.value}" data-doc="${r.doc}">${r.value}</a>`;
        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td>${r.nim}</td>
          <td>${r.name}</td>
          <td>${r.ik}</td>
          <td>${r.cpmk}</td>
          <td class="text-center">${tdValue}</td>
          <td class="text-center">${r.prog}</td>
          <td><a class="btn btn-sm btn-outline-secondary" href="${r.doc}">Dokumen</a></td>
        `;
        tbody.appendChild(tr);
      });

      // attach click handlers for value links
      document.querySelectorAll('.value-link').forEach(el=>{
        el.addEventListener('click', function(ev){
          ev.preventDefault();
          const nim = this.dataset.nim;
          const name = this.dataset.name;
          const ik = this.dataset.ik;
          const cpmk = this.dataset.cpmk;
          const value = this.dataset.value;
          document.getElementById('modalValueTitle').textContent = `${cpmk} — Nilai`;
          document.getElementById('mdNim').textContent = nim;
          document.getElementById('mdName').textContent = name;
          document.getElementById('mdIk').textContent = ik;
          document.getElementById('mdCpmk').textContent = cpmk;
          document.getElementById('mdValue').textContent = value;
          document.getElementById('viewDocBtn').href = this.dataset.doc || '#';
          const modal = new bootstrap.Modal(document.getElementById('modalValueDetail'));
          modal.show();
        });
      });
    }

      
    // -------------------------
    // UI helpers
    // -------------------------
    function openAllStudentsPreview(){ const modal = new bootstrap.Modal(document.getElementById('modalPreviewAll')); modal.show(); }
    function openAllRisikoPreview(){ const modal = new bootstrap.Modal(document.getElementById('modalRisikoAll')); modal.show(); }

    function applyDummyFilter(){
      // apply values from modal inputs when user clicks "Terapkan"
      const set = document.getElementById('filterSet').value || 'KT-6 (K20)';
      const ang = document.getElementById('filterAngkatan').value || '2024';
      const prodi = document.getElementById('filterProdi').value || 'Teknik Kimia Reguler';
      document.getElementById('summarySet').textContent = set;
      document.getElementById('summaryAngkatan').textContent = ang;
      document.getElementById('summaryProdi').textContent = prodi;
      // close modal if open
      const modalEl = document.getElementById('modalFilter');
      const bs = bootstrap.Modal.getInstance(modalEl);
      if(bs) bs.hide();
      // in real app, perform XHR to backend to update data. Here we simply repopulate with same dummy.
      populateRekap();
      populateEws();
      populateDetail();
      renderCharts();
      alert('Filter diterapkan (mock). Data dummy tetap sama.');
    }

    // Attach filter form submit
    document.getElementById('formFilter').addEventListener('submit', function(e){
      e.preventDefault();
      applyDummyFilter();
    });

    // Export button
    document.getElementById('btnExportAll').addEventListener('click', function(){
      downloadCSV('rekap_cpl_all.csv', tableToCSVArray_());
    });

    // On page load populate
    (function init(){
      populateRekap();
      populateEws();
      populateDetail();
      renderCharts();
    })();

    // detail export wrapper
    function downloadCSVDetail(){
      downloadCSV('detail_mhs.csv', detailTableToCSVArray());
    }

    // link functions used in buttons elsewhere
    window.downloadCSV = downloadCSV;
    window.tableToCSVArray = tableToCSVArray_;
    window.detailTableToCSVArray = detailTableToCSVArray;
    window.openAllStudentsPreview = openAllStudentsPreview;
    window.applyDummyFilter = applyDummyFilter;
    window.downloadCSVDetail = downloadCSVDetail;

  </script>
<script>
// -------------------------------------------------
// 1) GENERATOR DATA DUMMY SECARA OTOMATIS
// -------------------------------------------------

// 11 CPL
const cplLabels = Array.from({length: 11}, (_, i) => `CPL-${String(i+1).padStart(2,'0')}`);
const cplAverages = cplLabels.map(() => randomScore());

// 24 IK
const ikLabels = Array.from({length: 24}, (_, i) => `IK-${String(i+1).padStart(2,'0')}`);
const ikAverages = ikLabels.map(() => randomScore());

// 258 CPMK  (format: STKxxx-n)
const cpmkLabels = Array.from({length: 258}, (_, i) => {
    const mkCode = `STK${String(500 + Math.floor(i/5)).padStart(3,'0')}`;
    const num = (i % 5) + 1;
    return `${mkCode}-${num}`;
});
const cpmkAverages = cpmkLabels.map(() => randomScore());

// 78 MK
const mkLabels = Array.from({length: 78}, (_, i) => `STK${String(600 + i).padStart(3,'0')}`);
const mkAverages = mkLabels.map(() => randomScore());

// -------------------------------------------------
// 2) FUNCTION RANDOM SCORE
// -------------------------------------------------
function randomScore() {
    return Number((0 + Math.random()*100).toFixed(2)); // rentang 0–100
}

// -------------------------------------------------
// 3) FUNGSI GENERATOR BARCHART UMUM
// -------------------------------------------------

function generateBarChart(canvasId, labels, data, labelName, color) {
    const ctx = document.getElementById(canvasId).getContext("2d");
    new Chart(ctx, {
        type: "bar",
        data: {
            labels: labels,
            datasets: [{
                label: labelName,
                data: data,
                backgroundColor: color.bg,
                borderColor: color.border,
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: { ticks: { maxRotation: 90, minRotation: 45 } },
                y: {
                    beginAtZero: true,
                    max: 100
                }
            }
        }
    });
}

// -------------------------------------------------
// 4) GENERATE 4 BARCHART
// -------------------------------------------------

generateBarChart("chartCPL", cplLabels, cplAverages, "Rata-rata CPL", {
    bg: "rgba(75, 192, 75, 0.7)", border: "rgb(75, 192, 75)"       // hijau
});

generateBarChart("chartIK", ikLabels, ikAverages, "Rata-rata IK", {
    bg: "rgba(255, 159, 64, 0.7)", border: "rgb(255, 159, 64)"     // oranye
});

generateBarChart("chartCPMK", cpmkLabels, cpmkAverages, "Rata-rata CPMK", {
    bg: "rgba(255, 99, 132, 0.7)", border: "rgb(255, 99, 132)"     // merah
});

generateBarChart("chartMK", mkLabels, mkAverages, "Rata-rata MK", {
    bg: "rgba(54, 162, 235, 0.7)", border: "rgb(54, 162, 235)"     // biru
});

</script>

<script>
// ------------------------------------------------------------
// 1) TEMPAT INPUT DATA CPMK
// Cukup edit bagian ini saja!
// Format: { code: "STKxxx-n", value: 0-100 }
// ------------------------------------------------------------
const cpmkData = [
    { code: "STK623-1", value: 72.5 },
    { code: "STK623-2", value: 81.2 },
    { code: "STK623-3", value: 66.7 },
    { code: "STK610-4", value: 90.1 },
    { code: "STK611-2", value: 58.3 },
    { code: "STK615-1", value: 77.4 },
    { code: "STK620-3", value: 69.8 },
    { code: "STK620-4", value: 82.6 },
    { code: "STK621-1", value: 94.0 },
    { code: "STK622-3", value: 88.2 },
    // ... lanjutkan data asli kamu
];

// ------------------------------------------------------------
// 2) PROSES DATA: URUTKAN & PILIH 10 TERENDAH / 10 TERTINGGI
// ------------------------------------------------------------
const sortedData = [...cpmkData].sort((a, b) => a.value - b.value);

const lowest10 = sortedData.slice(0, 10);
const highest10 = sortedData.slice(-10).reverse(); // highest → descending

// ------------------------------------------------------------
// 3) FUNGSI GENERATOR CHART HORIZONTAL
// ------------------------------------------------------------
function generateHorizontalChart(canvasId, labels, values, bgColor, borderColor) {
    const ctx = document.getElementById(canvasId).getContext("2d");

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: labels,
            datasets: [{
                label: "Nilai CPMK",
                data: values,
                backgroundColor: bgColor,
                borderColor: borderColor,
                borderWidth: 2
            }]
        },
        options: {
            indexAxis: "y", // Membuat horizontal
            responsive: true,
            scales: {
                x: { beginAtZero: true, max: 100 }
            }
        }
    });
}

// ------------------------------------------------------------
// 4) PANGGIL CHART KIRI & KANAN
// ------------------------------------------------------------
generateHorizontalChart(
    "chartLowest",
    lowest10.map(d => d.code),
    lowest10.map(d => d.value),
    "rgba(255, 99, 132, 0.7)",   // merah lembut
    "rgb(255, 99, 132)"
);

generateHorizontalChart(
    "chartHighest",
    highest10.map(d => d.code),
    highest10.map(d => d.value),
    "rgba(75, 192, 75, 0.7)",   // hijau lembut
    "rgb(75, 192, 75)"
);

</script>


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
            text: 'Jumlah Mahasiswa'
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
<?php include('5script.php'); ?>
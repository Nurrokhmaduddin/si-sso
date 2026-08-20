<?php $page = 'monev_semester3'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev Semester
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
          <div class="card card-outline card-info">
            <div class="card-body ">
              <div class="row">
                <div class="col-md-6">
                  <b>Kurikulum:</b> 2023 &nbsp;
                </div>                
                <div class="col-md-6">
                  <b>Set Pemetaan:</b> KT-6 (K20) Kurikulum 2025 full stage &nbsp;
                </div>
                <div class="col-md-6">
                  <b>Tahun Akademik:</b> 2024/2025 &nbsp;
                </div> 
                <div class="col-md-6">
                  <b>Semester Akademik:</b> Gasal  &nbsp;
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
                <a class="btn btn-sm btn-outline-primary" href="formulir-evaluasi.php" target="_blank"><i class="fas fa-clipboard-list mr-1"> </i>Catat Temuan </a>             
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
                <div class="small">Rerata CPL Tertinggi</div>
                <div class="big" id="kpiGap">CPL 1 (87.2)</div>
                <div class="small">dari 254 kelas</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="kpi" style="background:#ff7f0e;">
                <div class="small">Jumlah IK Risiko</div>
                <div class="big" id="kpiReached">5 IK</div>
                <div class="small">konsisten rerata < 65</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="kpi bg-danger">
                <div class="small">Rerata CPL Terendah</div>
                <div class="big" id="kpiRisk">CPL 6 (56.2)</div>
                <div class="small">dari 254 kelas</div>
              </div>
            </div>
          </div>

  <!-- TAB NAV  -->
  <ul class="nav nav-tabs">   
    <li class="nav-item" onclick="window.location='monev-rekap-semester3-.php'"><a class="nav-link ">Ringkasan</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-semester3-detail0.php'"><a class="nav-link ">IK</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-semester3-detail1.php'"><a class="nav-link active">CPMK</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-semester3-detail2.php'"><a class="nav-link ">Mata Kuliah</a></li>
  </ul>



<!-- ========== CARD 4: Chart CPL-IK ========== -->     
        <div class="card">   
          <!-- CARD HEADER -->  
          <div class="card-header ">         
            <h5 class="card-title mb-0">
              <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK1">
                <i class="fas fa-expand"></i>
              </button>
              kode IK pertama (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
            </h5>
          </div>
          <!-- CARD BODY -->
          <div class="card-body " id="chartCPLIK1">
            <!-- Chart Container -->
            <div class="chart-container">
              <canvas id="chartCPL1" width="100%" height="30"></canvas>
            </div>
            <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
            <div class="table-responsive">
              <table class="table table-sm table-bordered">
               <thead class="thead-dark">
                <tr>
                  <th style="width: 80px;">Kode CPMK</th>
                  <th style="width: 80px;">NAMA MK</th>
                  <th>Deskripsi CPMK</th>                    
                  <th>Periode A</th>
                  <th>Periode B</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>STS190-1</td>
                  <td>Pengantar Ilmu Komunikasi</td>
                  <td>Mahasiswa mampu menyampaikan informasi secara lisan secara runtut, jelas, dan mudah dipahami.</td>
                  <td><a href="progres-cpl-semester3.php">78</a></td>
                  <td><a href="progres-cpl-semester3.php">80</a></td>
                </tr>
                <tr>
                  <td>STS230-2</td>
                  <td>Dasar Logika Berpikir</td>
                  <td>Mahasiswa mampu menulis laporan/tulisan akademik sesuai kaidah bahasa dan struktur penulisan yang baik.</td>
                  <td><a href="progres-cpl-semester3.php">68</a></td>
                  <td><a href="progres-cpl-semester3.php">70</a></td>
                </tr>
                <tr>
                  <td>STS333-1</td>
                  <td>Komunikasi Organisasi</td>
                  <td>Mahasiswa mampu berkomunikasi secara profesional dalam konteks akademik dan industri, termasuk etika komunikasi digital.</td>
                  <td><a href="progres-cpl-semester3.php">58</a></td>
                  <td><a href="progres-cpl-semester3.php">60</a></td>
                </tr>
                <tr>
                    <td> STS900-2</td>
                    <td>Dasar Logika Berpikir</td>
                    <td>Mahasiswa mampu menyampaikan informasi secara lisan secara runtut, jelas, dan mudah dipahami.</td>
                    <td><a href="progres-cpl-semester3.php">58</a></td>
                  <td><a href="progres-cpl-semester3.php">60</a></td>
                  </tr>
                  <tr>
                    <td> STS544-2</td>
                    <td>Dasar Logika Berpikir</td>
                    <td>Mahasiswa mampu menulis laporan/tulisan akademik sesuai kaidah bahasa dan struktur penulisan yang baik.</td>
                    <td><a href="progres-cpl-semester3.php">83</a></td>
                  <td><a href="progres-cpl-semester3.php">84</a></td>
                  </tr>
              </tbody>
              <tfoot>
                <tr class="table-secondary">
                    <td>IK 1</td>
                    <td colspan="2">Mahasiswa mampu menulis laporan/tulisan akademik sesuai kaidah bahasa dan struktur penulisan yang baik.</td>
                    <td><a href="progres-cpl-semester3.php">81</a></td>
                  <td><a href="progres-cpl-semester3.php">81</a></td>
                  </tr>
              </tfoot>
              </table>
            </div>
          </div>          
        </div>

<!-- ========== CARD : Chart CPL-IK 2 ========== -->  
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK2">
        <i class="fas fa-expand"></i>
      </button>
      kode IK kedua (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>

  <div class="card-body collapse" id="chartCPLIK2">
    <div class="chart-container">
      <canvas id="chartCPL2" width="100%" height="30"></canvas>
    </div>

    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr>
            <th style="width: 80px;">Kode CPMK</th>
            <th style="width: 120px;">Nama MK</th>
            <th>Deskripsi CPMK</th>                    
            <th>Periode A</th>
            <th>Periode B</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>STS210-1</td>
            <td>Metodologi Penelitian</td>
            <td>Mahasiswa mampu merumuskan masalah penelitian secara sistematis.</td>
            <td>72</td>
            <td>75</td>
          </tr>
          <tr>
            <td>STS211-2</td>
            <td>Statistika Dasar</td>
            <td>Mahasiswa mampu mengolah data kuantitatif menggunakan metode statistik dasar.</td>
            <td>65</td>
            <td>70</td>
          </tr>
          <tr>
            <td>STS212-1</td>
            <td>Teknik Penulisan Ilmiah</td>
            <td>Mahasiswa mampu menyusun karya ilmiah sesuai struktur akademik.</td>
            <td>68</td>
            <td>72</td>
          </tr>
          <tr>
            <td>STS213-3</td>
            <td>Logika Analitik</td>
            <td>Mahasiswa mampu menganalisis permasalahan secara logis dan sistematis.</td>
            <td>60</td>
            <td>66</td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>IK 2</td>
            <td colspan="2">Mahasiswa mampu menganalisis dan menyusun karya ilmiah berbasis data.</td>
            <td>66</td>
            <td>71</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>          
</div>

<!-- ========== CARD : Chart CPL-IK 3 ========== -->  
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK3">
        <i class="fas fa-expand"></i>
      </button>
      kode IK ketiga (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>

  <div class="card-body collapse" id="chartCPLIK3">
    <div class="chart-container">
      <canvas id="chartCPL3" width="100%" height="30"></canvas>
    </div>

    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr>
            <th style="width: 80px;">Kode CPMK</th>
            <th style="width: 120px;">Nama MK</th>
            <th>Deskripsi CPMK</th>                    
            <th>Periode A</th>
            <th>Periode B</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>STS310-1</td>
            <td>Manajemen Proyek</td>
            <td>Mahasiswa mampu merencanakan dan mengelola proyek sederhana.</td>
            <td>70</td>
            <td>74</td>
          </tr>
          <tr>
            <td>STS311-2</td>
            <td>Etika Profesi</td>
            <td>Mahasiswa memahami prinsip etika dalam profesi terkait.</td>
            <td>65</td>
            <td>69</td>
          </tr>
          <tr>
            <td>STS312-1</td>
            <td>Organisasi & Kepemimpinan</td>
            <td>Mahasiswa mampu mengidentifikasi struktur organisasi dan gaya kepemimpinan.</td>
            <td>68</td>
            <td>72</td>
          </tr>
          <tr>
            <td>STS313-3</td>
            <td>Analisis Data</td>
            <td>Mahasiswa mampu menganalisis data sederhana untuk pengambilan keputusan.</td>
            <td>62</td>
            <td>67</td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>IK 3</td>
            <td colspan="2">Mahasiswa mampu menerapkan manajemen proyek, etika, organisasi, dan analisis data.</td>
            <td>66</td>
            <td>71</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>          
</div>

<!-- ========== CARD : Chart CPL-IK 4 ========== -->
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK4">
        <i class="fas fa-expand"></i>
      </button>
      kode IK keempat (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>

  <div class="card-body collapse" id="chartCPLIK4">
    <div class="chart-container">
      <canvas id="chartCPL4" width="100%" height="30"></canvas>
    </div>

    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr>
            <th style="width: 80px;">Kode CPMK</th>
            <th style="width: 120px;">Nama MK</th>
            <th>Deskripsi CPMK</th>                    
            <th>Periode A</th>
            <th>Periode B</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>STS410-1</td>
            <td>Pengantar Ekonomi</td>
            <td>Mahasiswa memahami prinsip dasar ekonomi makro dan mikro.</td>
            <td>68</td>
            <td>72</td>
          </tr>
          <tr>
            <td>STS411-2</td>
            <td>Akuntansi Dasar</td>
            <td>Mahasiswa mampu mencatat transaksi keuangan sederhana.</td>
            <td>64</td>
            <td>69</td>
          </tr>
          <tr>
            <td>STS412-1</td>
            <td>Manajemen SDM</td>
            <td>Mahasiswa memahami konsep manajemen sumber daya manusia.</td>
            <td>66</td>
            <td>71</td>
          </tr>
          <tr>
            <td>STS413-3</td>
            <td>Pemasaran</td>
            <td>Mahasiswa mampu merancang strategi pemasaran sederhana.</td>
            <td>61</td>
            <td>66</td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>IK 4</td>
            <td colspan="2">Mahasiswa mampu menerapkan dasar ekonomi, akuntansi, SDM, dan pemasaran secara terpadu.</td>
            <td>65</td>
            <td>70</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>          
</div>
<!-- ========== CARD : Chart CPL-IK 5 ========== -->
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK5">
        <i class="fas fa-expand"></i>
      </button>
      kode IK kelima (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>

  <div class="card-body collapse" id="chartCPLIK5">
    <div class="chart-container">
      <canvas id="chartCPL5" width="100%" height="30"></canvas>
    </div>

    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr>
            <th style="width: 80px;">Kode CPMK</th>
            <th style="width: 120px;">Nama MK</th>
            <th>Deskripsi CPMK</th>                    
            <th>Periode A</th>
            <th>Periode B</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>STS510-1</td>
            <td>Fisika Dasar</td>
            <td>Mahasiswa mampu menjelaskan konsep dasar fisika secara kuantitatif.</td>
            <td>70</td>
            <td>74</td>
          </tr>
          <tr>
            <td>STS511-2</td>
            <td>Kimia Dasar</td>
            <td>Mahasiswa mampu melakukan percobaan sederhana dan melaporkan hasilnya.</td>
            <td>66</td>
            <td>70</td>
          </tr>
          <tr>
            <td>STS512-1</td>
            <td>Biologi Dasar</td>
            <td>Mahasiswa memahami struktur dan fungsi organisme dasar.</td>
            <td>68</td>
            <td>72</td>
          </tr>
          <tr>
            <td>STS513-3</td>
            <td>Matematika Terapan</td>
            <td>Mahasiswa mampu menerapkan konsep matematika untuk menyelesaikan masalah sederhana.</td>
            <td>64</td>
            <td>68</td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>IK 5</td>
            <td colspan="2">Mahasiswa mampu menguasai konsep dasar fisika, kimia, biologi, dan matematika terapan.</td>
            <td>67</td>
            <td>71</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>          
</div>

<!-- ========== CARD : Chart CPL-IK 6 ========== -->
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK6">
        <i class="fas fa-expand"></i>
      </button>
      kode IK keenam (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>

  <div class="card-body collapse" id="chartCPLIK6">
    <div class="chart-container">
      <canvas id="chartCPL6" width="100%" height="30"></canvas>
    </div>

    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr>
            <th style="width: 80px;">Kode CPMK</th>
            <th style="width: 120px;">Nama MK</th>
            <th>Deskripsi CPMK</th>                    
            <th>Periode A</th>
            <th>Periode B</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>STS610-1</td>
            <td>Algoritma & Pemrograman</td>
            <td>Mahasiswa mampu menulis algoritma sederhana dan menerapkannya dalam pemrograman.</td>
            <td>72</td>
            <td>76</td>
          </tr>
          <tr>
            <td>STS611-2</td>
            <td>Basis Data</td>
            <td>Mahasiswa mampu membuat query dan mengelola database sederhana.</td>
            <td>68</td>
            <td>73</td>
          </tr>
          <tr>
            <td>STS612-1</td>
            <td>Jaringan Komputer</td>
            <td>Mahasiswa memahami konsep dasar jaringan dan topologi komputer.</td>
            <td>70</td>
            <td>75</td>
          </tr>
          <tr>
            <td>STS613-3</td>
            <td>Keamanan Informasi</td>
            <td>Mahasiswa memahami prinsip dasar keamanan data dan sistem informasi.</td>
            <td>65</td>
            <td>70</td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>IK 6</td>
            <td colspan="2">Mahasiswa mampu menerapkan dasar algoritma, basis data, jaringan, dan keamanan informasi.</td>
            <td>69</td>
            <td>73</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>          
</div>
<!-- ========== CARD : Chart CPL-IK 7 ========== -->
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK7">
        <i class="fas fa-expand"></i>
      </button>
      kode IK ketujuh (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>

  <div class="card-body collapse" id="chartCPLIK7">
    <div class="chart-container">
      <canvas id="chartCPL7" width="100%" height="30"></canvas>
    </div>

    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr>
            <th style="width: 80px;">Kode CPMK</th>
            <th style="width: 120px;">Nama MK</th>
            <th>Deskripsi CPMK</th>                    
            <th>Periode A</th>
            <th>Periode B</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>STS710-1</td><td>Statistika Dasar</td><td>Mahasiswa memahami dasar statistik deskriptif dan probabilitas.</td><td>75</td><td>78</td></tr>
          <tr><td>STS711-2</td><td>Probabilitas</td><td>Mahasiswa mampu menghitung peluang sederhana dan distribusi probabilitas.</td><td>70</td><td>74</td></tr>
          <tr><td>STS712-1</td><td>Analisis Data</td><td>Mahasiswa mampu melakukan analisis data dasar menggunakan spreadsheet atau software statistik.</td><td>72</td><td>76</td></tr>
          <tr><td>STS713-3</td><td>Riset Operasi</td><td>Mahasiswa memahami metode optimisasi sederhana dalam pengambilan keputusan.</td><td>68</td><td>71</td></tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>IK 7</td>
            <td colspan="2">Mahasiswa mampu menguasai konsep dasar statistik, probabilitas, analisis data, dan riset operasi.</td>
            <td>71</td>
            <td>75</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>          
</div>

<!-- ========== CARD : Chart CPL-IK 8 ========== -->
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK8">
        <i class="fas fa-expand"></i>
      </button>
      kode IK kedelapan (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>

  <div class="card-body collapse" id="chartCPLIK8">
    <div class="chart-container">
      <canvas id="chartCPL8" width="100%" height="30"></canvas>
    </div>

    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr>
            <th style="width: 80px;">Kode CPMK</th>
            <th style="width: 120px;">Nama MK</th>
            <th>Deskripsi CPMK</th>                    
            <th>Periode A</th>
            <th>Periode B</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>STS810-1</td><td>Ekonomi Mikro</td><td>Mahasiswa memahami prinsip dasar ekonomi mikro dan permintaan-penawaran.</td><td>73</td><td>77</td></tr>
          <tr><td>STS811-2</td><td>Ekonomi Makro</td><td>Mahasiswa memahami konsep dasar ekonomi makro dan indikator ekonomi utama.</td><td>69</td><td>72</td></tr>
          <tr><td>STS812-1</td><td>Keuangan Dasar</td><td>Mahasiswa mampu memahami dasar pengelolaan keuangan dan laporan keuangan sederhana.</td><td>71</td><td>75</td></tr>
          <tr><td>STS813-3</td><td>Manajemen Bisnis</td><td>Mahasiswa memahami konsep dasar manajemen dan organisasi bisnis sederhana.</td><td>66</td><td>70</td></tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>IK 8</td>
            <td colspan="2">Mahasiswa mampu menguasai dasar ekonomi mikro-makro, keuangan, dan manajemen bisnis.</td>
            <td>70</td>
            <td>73</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>          
</div>
<!-- ========== CARD : Chart CPL-IK 9 ========== -->
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK9">
        <i class="fas fa-expand"></i>
      </button>
      kode IK kesembilan (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>

  <div class="card-body collapse" id="chartCPLIK9">
    <div class="chart-container">
      <canvas id="chartCPL9" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr><th>Kode CPMK</th><th>Nama MK</th><th>Deskripsi CPMK</th><th>Periode A</th><th>Periode B</th></tr>
        </thead>
        <tbody>
          <tr><td>STS910-1</td><td>Fisika Dasar</td><td>Mahasiswa memahami hukum dasar fisika dan penerapannya.</td><td>74</td><td>78</td></tr>
          <tr><td>STS911-2</td><td>Fisika Listrik</td><td>Mahasiswa memahami konsep kelistrikan dan rangkaian sederhana.</td><td>70</td><td>73</td></tr>
          <tr><td>STS912-1</td><td>Fisika Modern</td><td>Mahasiswa mengenal konsep fisika modern dan aplikasinya.</td><td>68</td><td>71</td></tr>
          <tr><td>STS913-3</td><td>Eksperimen Fisika</td><td>Mahasiswa mampu melakukan percobaan dasar dan menganalisis data.</td><td>72</td><td>75</td></tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>IK 9</td><td colspan="2">Mahasiswa mampu memahami fisika dasar, listrik, fisika modern, dan eksperimen.</td><td>71</td><td>74</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<!-- ========== CARD : Chart CPL-IK 10 ========== -->
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK10">
        <i class="fas fa-expand"></i>
      </button>
      kode IK kesepuluh (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>

  <div class="card-body collapse" id="chartCPLIK10">
    <div class="chart-container">
      <canvas id="chartCPL10" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr><th>Kode CPMK</th><th>Nama MK</th><th>Deskripsi CPMK</th><th>Periode A</th><th>Periode B</th></tr>
        </thead>
        <tbody>
          <tr><td>STS1010-1</td><td>Kimia Dasar</td><td>Mahasiswa memahami konsep dasar kimia dan reaksi sederhana.</td><td>73</td><td>77</td></tr>
          <tr><td>STS1011-2</td><td>Kimia Organik</td><td>Mahasiswa mengenal struktur, sifat, dan reaksi senyawa organik.</td><td>70</td><td>73</td></tr>
          <tr><td>STS1012-1</td><td>Kimia Analitik</td><td>Mahasiswa mampu melakukan analisis kuantitatif sederhana.</td><td>68</td><td>71</td></tr>
          <tr><td>STS1013-3</td><td>Laboratorium Kimia</td><td>Mahasiswa mampu melakukan percobaan laboratorium dasar dengan aman.</td><td>72</td><td>75</td></tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>IK 10</td><td colspan="2">Mahasiswa mampu memahami kimia dasar, organik, analitik, dan praktik laboratorium.</td><td>71</td><td>74</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<!-- ========== CARD : Chart CPL-IK 11 ========== -->
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK11">
        <i class="fas fa-expand"></i>
      </button>
      kode IK kesebelas (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>

  <div class="card-body collapse" id="chartCPLIK11">
    <div class="chart-container">
      <canvas id="chartCPL11" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr><th>Kode CPMK</th><th>Nama MK</th><th>Deskripsi CPMK</th><th>Periode A</th><th>Periode B</th></tr>
        </thead>
        <tbody>
          <tr><td>STS1110-1</td><td>Biologi Dasar</td><td>Mahasiswa memahami konsep dasar biologi sel dan organisme.</td><td>74</td><td>78</td></tr>
          <tr><td>STS1111-2</td><td>Genetika</td><td>Mahasiswa mengenal prinsip pewarisan sifat dan DNA.</td><td>70</td><td>73</td></tr>
          <tr><td>STS1112-1</td><td>Ekologi</td><td>Mahasiswa memahami interaksi organisme dan lingkungan.</td><td>68</td><td>71</td></tr>
          <tr><td>STS1113-3</td><td>Laboratorium Biologi</td><td>Mahasiswa mampu melakukan percobaan dasar biologi dengan benar.</td><td>72</td><td>75</td></tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>IK 11</td><td colspan="2">Mahasiswa mampu menguasai biologi dasar, genetika, ekologi, dan laboratorium biologi.</td><td>71</td><td>74</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<!-- ========== CARD : Chart CPL-IK 12 ========== -->
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK12">
        <i class="fas fa-expand"></i>
      </button>
      kode IK kedua belas (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>

  <div class="card-body collapse" id="chartCPLIK12">
    <div class="chart-container">
      <canvas id="chartCPL12" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr><th>Kode CPMK</th><th>Nama MK</th><th>Deskripsi CPMK</th><th>Periode A</th><th>Periode B</th></tr>
        </thead>
        <tbody>
          <tr><td>STS1210-1</td><td>Sosiologi Dasar</td><td>Mahasiswa memahami teori dasar masyarakat dan interaksi sosial.</td><td>73</td><td>77</td></tr>
          <tr><td>STS1211-2</td><td>Antropologi</td><td>Mahasiswa mengenal konsep budaya dan keragaman manusia.</td><td>69</td><td>72</td></tr>
          <tr><td>STS1212-1</td><td>Psikologi Dasar</td><td>Mahasiswa memahami perilaku manusia dan dasar psikologi.</td><td>71</td><td>75</td></tr>
          <tr><td>STS1213-3</td><td>Metodologi Penelitian</td><td>Mahasiswa mampu merancang dan memahami penelitian sosial sederhana.</td><td>66</td><td>70</td></tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>IK 12</td><td colspan="2">Mahasiswa mampu memahami sosiologi, antropologi, psikologi, dan metodologi penelitian.</td><td>70</td><td>73</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
<!-- ========== CARD : Chart CPL-IK 13 ========== -->
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK13">
        <i class="fas fa-expand"></i>
      </button>
      kode IK ketigabelas (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>

  <div class="card-body collapse" id="chartCPLIK13">
    <div class="chart-container">
      <canvas id="chartCPL13" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr><th>Kode CPMK</th><th>Nama MK</th><th>Deskripsi CPMK</th><th>Periode A</th><th>Periode B</th></tr>
        </thead>
        <tbody>
          <tr><td>STS1310-1</td><td>Matematika Lanjut</td><td>Mahasiswa memahami konsep lanjutan kalkulus dan aljabar linear.</td><td>75</td><td>78</td></tr>
          <tr><td>STS1311-2</td><td>Statistika</td><td>Mahasiswa mampu menghitung probabilitas dan analisis data sederhana.</td><td>72</td><td>75</td></tr>
          <tr><td>STS1312-1</td><td>Analisis Numerik</td><td>Mahasiswa mampu menyelesaikan masalah numerik menggunakan metode komputer.</td><td>70</td><td>73</td></tr>
          <tr><td>STS1313-3</td><td>Aljabar Modern</td><td>Mahasiswa memahami struktur aljabar abstrak dan penerapannya.</td><td>74</td><td>76</td></tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>IK 13</td><td colspan="2">Mahasiswa mampu menguasai matematika lanjut, statistika, analisis numerik, dan aljabar modern.</td><td>72</td><td>75</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<!-- ========== CARD : Chart CPL-IK 14 ========== -->
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK14">
        <i class="fas fa-expand"></i>
      </button>
      kode IK keempatbelas (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>

  <div class="card-body collapse" id="chartCPLIK14">
    <div class="chart-container">
      <canvas id="chartCPL14" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr><th>Kode CPMK</th><th>Nama MK</th><th>Deskripsi CPMK</th><th>Periode A</th><th>Periode B</th></tr>
        </thead>
        <tbody>
          <tr><td>STS1410-1</td><td>Ekonomi Mikro</td><td>Mahasiswa memahami prinsip dasar perilaku konsumen dan produsen.</td><td>73</td><td>77</td></tr>
          <tr><td>STS1411-2</td><td>Ekonomi Makro</td><td>Mahasiswa memahami teori makroekonomi dan kebijakan fiskal/moneter.</td><td>70</td><td>74</td></tr>
          <tr><td>STS1412-1</td><td>Ekonomi Internasional</td><td>Mahasiswa mengenal perdagangan dan hubungan ekonomi antarnegara.</td><td>69</td><td>72</td></tr>
          <tr><td>STS1413-3</td><td>Ekonomi Pembangunan</td><td>Mahasiswa memahami isu pembangunan dan strategi peningkatan ekonomi.</td><td>71</td><td>74</td></tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>IK 14</td><td colspan="2">Mahasiswa mampu memahami ekonomi mikro, makro, internasional, dan pembangunan.</td><td>71</td><td>74</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<!-- ========== CARD : Chart CPL-IK 15 ========== -->
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK15">
        <i class="fas fa-expand"></i>
      </button>
      kode IK kelimabelas (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>

  <div class="card-body collapse" id="chartCPLIK15">
    <div class="chart-container">
      <canvas id="chartCPL15" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr><th>Kode CPMK</th><th>Nama MK</th><th>Deskripsi CPMK</th><th>Periode A</th><th>Periode B</th></tr>
        </thead>
        <tbody>
          <tr><td>STS1510-1</td><td>Hukum Dasar</td><td>Mahasiswa memahami konsep hukum dasar dan penerapannya.</td><td>74</td><td>77</td></tr>
          <tr><td>STS1511-2</td><td>Hukum Perdata</td><td>Mahasiswa mengenal prinsip hukum perdata dan kontrak.</td><td>71</td><td>74</td></tr>
          <tr><td>STS1512-1</td><td>Hukum Pidana</td><td>Mahasiswa memahami konsep hukum pidana dan kasusnya.</td><td>70</td><td>73</td></tr>
          <tr><td>STS1513-3</td><td>Hukum Internasional</td><td>Mahasiswa memahami peraturan dan konvensi internasional.</td><td>72</td><td>75</td></tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>IK 15</td><td colspan="2">Mahasiswa mampu memahami hukum dasar, perdata, pidana, dan internasional.</td><td>72</td><td>75</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<!-- ========== CARD : Chart CPL-IK 16 ========== -->
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK16">
        <i class="fas fa-expand"></i>
      </button>
      kode IK keenambelas (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>

  <div class="card-body collapse" id="chartCPLIK16">
    <div class="chart-container">
      <canvas id="chartCPL16" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr><th>Kode CPMK</th><th>Nama MK</th><th>Deskripsi CPMK</th><th>Periode A</th><th>Periode B</th></tr>
        </thead>
        <tbody>
          <tr><td>STS1610-1</td><td>Manajemen Dasar</td><td>Mahasiswa memahami prinsip dasar manajemen dan organisasi.</td><td>75</td><td>78</td></tr>
          <tr><td>STS1611-2</td><td>Manajemen Keuangan</td><td>Mahasiswa mampu membaca laporan keuangan dan analisis dasar.</td><td>72</td><td>75</td></tr>
          <tr><td>STS1612-1</td><td>Manajemen SDM</td><td>Mahasiswa memahami manajemen sumber daya manusia.</td><td>70</td><td>73</td></tr>
          <tr><td>STS1613-3</td><td>Manajemen Operasi</td><td>Mahasiswa memahami proses operasi dan optimisasi bisnis.</td><td>74</td><td>76</td></tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary">
            <td>IK 16</td><td colspan="2">Mahasiswa mampu memahami manajemen dasar, keuangan, SDM, dan operasi.</td><td>72</td><td>75</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
<!-- ========== CARD : Chart CPL-IK 17 ========== -->
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK17">
        <i class="fas fa-expand"></i>
      </button>
      kode IK ketujuhbelas (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>
  <div class="card-body collapse" id="chartCPLIK17">
    <div class="chart-container">
      <canvas id="chartCPL17" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark"><tr><th>Kode CPMK</th><th>Nama MK</th><th>Deskripsi CPMK</th><th>Periode A</th><th>Periode B</th></tr></thead>
        <tbody>
          <tr><td>STS1710-1</td><td>Fisika Dasar</td><td>Mahasiswa memahami hukum dasar fisika dan aplikasinya.</td><td>72</td><td>75</td></tr>
          <tr><td>STS1711-2</td><td>Fisika Lanjut</td><td>Mahasiswa mampu menerapkan konsep fisika ke masalah nyata.</td><td>70</td><td>73</td></tr>
          <tr><td>STS1712-1</td><td>Optika</td><td>Mahasiswa memahami fenomena cahaya dan aplikasinya.</td><td>71</td><td>74</td></tr>
          <tr><td>STS1713-3</td><td>Termodinamika</td><td>Mahasiswa memahami prinsip energi dan konversinya.</td><td>73</td><td>76</td></tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary"><td>IK 17</td><td colspan="2">Mahasiswa mampu memahami fisika dasar hingga termodinamika.</td><td>71</td><td>74</td></tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<!-- ========== CARD : Chart CPL-IK 18 ========== -->
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK18">
        <i class="fas fa-expand"></i>
      </button>
      kode IK kedelapanbelas (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>
  <div class="card-body collapse" id="chartCPLIK18">
    <div class="chart-container">
      <canvas id="chartCPL18" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark"><tr><th>Kode CPMK</th><th>Nama MK</th><th>Deskripsi CPMK</th><th>Periode A</th><th>Periode B</th></tr></thead>
        <tbody>
          <tr><td>STS1810-1</td><td>Kimia Dasar</td><td>Mahasiswa memahami konsep dasar kimia dan reaksi sederhana.</td><td>73</td><td>76</td></tr>
          <tr><td>STS1811-2</td><td>Kimia Organik</td><td>Mahasiswa memahami struktur dan reaksi senyawa organik.</td><td>71</td><td>74</td></tr>
          <tr><td>STS1812-1</td><td>Kimia Anorganik</td><td>Mahasiswa memahami sifat dan reaksi senyawa anorganik.</td><td>70</td><td>73</td></tr>
          <tr><td>STS1813-3</td><td>Kimia Fisika</td><td>Mahasiswa memahami hubungan antara fisika dan kimia.</td><td>72</td><td>75</td></tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary"><td>IK 18</td><td colspan="2">Mahasiswa mampu memahami kimia dasar hingga kimia fisika.</td><td>71</td><td>74</td></tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<!-- ========== CARD : Chart CPL-IK 19 ========== -->
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK19">
        <i class="fas fa-expand"></i>
      </button>
      kode IK kesembilanbelas (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>
  <div class="card-body collapse" id="chartCPLIK19">
    <div class="chart-container">
      <canvas id="chartCPL19" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark"><tr><th>Kode CPMK</th><th>Nama MK</th><th>Deskripsi CPMK</th><th>Periode A</th><th>Periode B</th></tr></thead>
        <tbody>
          <tr><td>STS1910-1</td><td>Biologi Dasar</td><td>Mahasiswa memahami konsep dasar biologi dan organisme.</td><td>74</td><td>77</td></tr>
          <tr><td>STS1911-2</td><td>Biologi Sel</td><td>Mahasiswa memahami struktur dan fungsi sel.</td><td>72</td><td>75</td></tr>
          <tr><td>STS1912-1</td><td>Biologi Molekuler</td><td>Mahasiswa memahami DNA, RNA, dan protein.</td><td>71</td><td>74</td></tr>
          <tr><td>STS1913-3</td><td>Ekologi</td><td>Mahasiswa memahami interaksi organisme dengan lingkungan.</td><td>73</td><td>76</td></tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary"><td>IK 19</td><td colspan="2">Mahasiswa mampu memahami biologi dasar hingga ekologi.</td><td>72</td><td>75</td></tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<!-- ========== CARD : Chart CPL-IK 20 ========== -->
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK20">
        <i class="fas fa-expand"></i>
      </button>
      kode IK kedua puluh (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>
  <div class="card-body collapse" id="chartCPLIK20">
    <div class="chart-container">
      <canvas id="chartCPL20" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark"><tr><th>Kode CPMK</th><th>Nama MK</th><th>Deskripsi CPMK</th><th>Periode A</th><th>Periode B</th></tr></thead>
        <tbody>
          <tr><td>STS2010-1</td><td>Sejarah Dasar</td><td>Mahasiswa memahami sejarah dasar manusia dan peradaban.</td><td>73</td><td>76</td></tr>
          <tr><td>STS2011-2</td><td>Sejarah Modern</td><td>Mahasiswa memahami sejarah dunia modern dan peristiwa penting.</td><td>71</td><td>74</td></tr>
          <tr><td>STS2012-1</td><td>Sejarah Indonesia</td><td>Mahasiswa memahami sejarah bangsa Indonesia secara kronologis.</td><td>70</td><td>73</td></tr>
          <tr><td>STS2013-3</td><td>Sejarah Ekonomi</td><td>Mahasiswa memahami perkembangan ekonomi dan kebijakan sejarah.</td><td>72</td><td>75</td></tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary"><td>IK 20</td><td colspan="2">Mahasiswa mampu memahami sejarah dasar hingga ekonomi.</td><td>71</td><td>74</td></tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<!-- ========== CARD : Chart CPL-IK 21 ========== -->
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK21">
        <i class="fas fa-expand"></i>
      </button>
      kode IK kedua puluh satu (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>
  <div class="card-body collapse" id="chartCPLIK21">
    <div class="chart-container">
      <canvas id="chartCPL21" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark"><tr><th>Kode CPMK</th><th>Nama MK</th><th>Deskripsi CPMK</th><th>Periode A</th><th>Periode B</th></tr></thead>
        <tbody>
          <tr><td>STS2110-1</td><td>Sastra Indonesia</td><td>Mahasiswa memahami karya sastra Indonesia klasik dan modern.</td><td>74</td><td>77</td></tr>
          <tr><td>STS2111-2</td><td>Sastra Dunia</td><td>Mahasiswa memahami karya sastra dunia dan konteksnya.</td><td>72</td><td>75</td></tr>
          <tr><td>STS2112-1</td><td>Puisi</td><td>Mahasiswa mampu menganalisis puisi secara kritis.</td><td>71</td><td>74</td></tr>
          <tr><td>STS2113-3</td><td>Prosa</td><td>Mahasiswa mampu memahami dan menulis prosa kreatif.</td><td>73</td><td>76</td></tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary"><td>IK 21</td><td colspan="2">Mahasiswa mampu memahami sastra Indonesia dan dunia, puisi, dan prosa.</td><td>72</td><td>75</td></tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<!-- ========== CARD : Chart CPL-IK 22 ========== -->
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK22">
        <i class="fas fa-expand"></i>
      </button>
      kode IK kedua puluh dua (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>
  <div class="card-body collapse" id="chartCPLIK22">
    <div class="chart-container">
      <canvas id="chartCPL22" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark"><tr><th>Kode CPMK</th><th>Nama MK</th><th>Deskripsi CPMK</th><th>Periode A</th><th>Periode B</th></tr></thead>
        <tbody>
          <tr><td>STS2210-1</td><td>Psikologi Dasar</td><td>Mahasiswa memahami prinsip dasar psikologi dan perilaku manusia.</td><td>73</td><td>76</td></tr>
          <tr><td>STS2211-2</td><td>Psikologi Perkembangan</td><td>Mahasiswa memahami pertumbuhan dan perkembangan manusia.</td><td>71</td><td>74</td></tr>
          <tr><td>STS2212-1</td><td>Psikologi Pendidikan</td><td>Mahasiswa memahami psikologi dalam konteks pendidikan.</td><td>70</td><td>73</td></tr>
          <tr><td>STS2213-3</td><td>Psikologi Klinis</td><td>Mahasiswa memahami dasar psikologi klinis dan diagnosis.</td><td>72</td><td>75</td></tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary"><td>IK 22</td><td colspan="2">Mahasiswa mampu memahami psikologi dasar hingga klinis.</td><td>71</td><td>74</td></tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<!-- ========== CARD : Chart CPL-IK 23 ========== -->
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK23">
        <i class="fas fa-expand"></i>
      </button>
      kode IK kedua puluh tiga (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>
  <div class="card-body collapse" id="chartCPLIK23">
    <div class="chart-container">
      <canvas id="chartCPL23" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark"><tr><th>Kode CPMK</th><th>Nama MK</th><th>Deskripsi CPMK</th><th>Periode A</th><th>Periode B</th></tr></thead>
        <tbody>
          <tr><td>STS2310-1</td><td>Bahasa Inggris Dasar</td><td>Mahasiswa memahami kosakata dan tata bahasa dasar.</td><td>74</td><td>77</td></tr>
          <tr><td>STS2311-2</td><td>Bahasa Inggris Lisan</td><td>Mahasiswa mampu berbicara bahasa Inggris dengan lancar.</td><td>72</td><td>75</td></tr>
          <tr><td>STS2312-1</td><td>Bahasa Inggris Tulisan</td><td>Mahasiswa mampu menulis teks bahasa Inggris yang baik.</td><td>71</td><td>74</td></tr>
          <tr><td>STS2313-3</td><td>Bahasa Inggris Akademik</td><td>Mahasiswa memahami teks akademik bahasa Inggris.</td><td>73</td><td>76</td></tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary"><td>IK 23</td><td colspan="2">Mahasiswa mampu memahami bahasa Inggris dasar hingga akademik.</td><td>72</td><td>75</td></tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<!-- ========== CARD : Chart CPL-IK 24 ========== -->
<div class="card">   
  <div class="card-header ">         
    <h5 class="card-title mb-0">
      <button class="btn btn-sm btn-outline-primary" data-toggle="collapse" data-target="#chartCPLIK24">
        <i class="fas fa-expand"></i>
      </button>
      kode IK kedua puluh empat (]perbandingan %mahasiswa tuntas CPMK, periode A vs B)
    </h5>
  </div>
  <div class="card-body collapse" id="chartCPLIK24">
    <div class="chart-container">
      <canvas id="chartCPL24" width="100%" height="30"></canvas>
    </div>
    <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark"><tr><th>Kode CPMK</th><th>Nama MK</th><th>Deskripsi CPMK</th><th>Periode A</th><th>Periode B</th></tr></thead>
        <tbody>
          <tr><td>STS2410-1</td><td>Ilmu Komputer Dasar</td><td>Mahasiswa memahami dasar algoritma dan pemrograman.</td><td>73</td><td>76</td></tr>
          <tr><td>STS2411-2</td><td>Struktur Data</td><td>Mahasiswa memahami struktur data dasar dan implementasi.</td><td>71</td><td>74</td></tr>
          <tr><td>STS2412-1</td><td>Basis Data</td><td>Mahasiswa memahami konsep dan implementasi basis data.</td><td>70</td><td>73</td></tr>
          <tr><td>STS2413-3</td><td>Jaringan Komputer</td><td>Mahasiswa memahami konsep jaringan dan protokol komunikasi.</td><td>72</td><td>75</td></tr>
        </tbody>
        <tfoot>
          <tr class="table-secondary"><td>IK 24</td><td colspan="2">Mahasiswa mampu memahami ilmu komputer dasar hingga jaringan komputer.</td><td>71</td><td>74</td></tr>
        </tfoot>
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
            munculkan ada data kuantitatif, dan data kualitatif. untuk keperluan prodi analisis temuan evaluasi, dan membuat keputusan aksi evaluasi. kedua, masukkan barchart perbandingan antar semester akademik,CPMK dan IK nya disini, yang satuan nya adalah %mahasiswa yg tuntas.
        </p>
        <p>
          sebaran angkatan yang menambil MK di semester ini. sebarang mahasiswa angkata yang menempuh semester nii dengan mengambil mata kuliah atau ada di kelas perkuliahan semester ini.
angkatan | jml mahasiswa |
2020  | 30
2021  | 59
2022  | 120
        </p>
        <p>
          Menampilkan untuk monitoring CPMK pada tiap mata kuliah, dalam satu semester. membandingkan antar tahun akademik. Sehingga mencirikan CQI pembelajaran mata kuliah
        </p>     
        <p>
          bahan evaluasi MK, dg parameter CPMK, dengan detail di kelas perkuliaha.
        </p>   
        <p>
         v 1️⃣ Monitoring Operasional Semester

Perlu sampai CPL atau cukup CPMK?

Untuk monitoring operasional semester:

✔ Fokus utama cukup sampai CPMK.

Kenapa?

Karena semester itu level implementasi:

Dosen mengajar

Kelas berjalan

Instrumen dipakai

Penilaian dilakukan

Unit kendali dosen adalah:

Aktivitas pembelajaran

Penilaian CPMK

Hasil kelas

CPL adalah agregasi lintas MK dan lintas semester.
Jika dipaksakan tampil penuh di semester view, akan muncul:

CPL terlihat “kosong”

CPL tampak rendah

Interpretasi keliru karena belum semua MK kontribusi

Rekomendasi Desain
📘 Semester View (Operasional)

Tampilkan:

Capaian CPMK per kelas

Distribusi nilai per kelas

Evaluasi kelas

Konsistensi antar kelas

Evaluasi MK (agregasi semua kelas dalam semester itu)

CPL boleh ditampilkan, tetapi:

Sebagai indikasi parsial

Diberi label “kontribusi sementara”

2️⃣ Evaluasi MK Cocok di Semester atau Tahun Akademik?

Jawabannya:

✔ Evaluasi MK operasional → Semester view
✔ Evaluasi MK struktural → Tahun akademik view

Bedanya:

Semester:

Apakah kelas berjalan baik?

Apakah ada perbedaan antar dosen?

Tahun akademik:

Apakah MK konsisten sepanjang tahun?

Apakah CPMK stabil antar semester?

Apakah ada masalah sistemik?

Jadi evaluasi MK bisa muncul di dua view, tapi konteksnya berbeda.
        </p>
        <p>
           1. Tingkat Ketercapaian CPMK:
% mahasiswa mencapai batas minimal
Rata-rata nilai Final per CPMK
CPMK 1 → 78% mahasiswa ≥ 70

2. Gap Awal vs Final

Mengukur efektivitas pembelajaran.

Rata-rata Awal = 65
Rata-rata Final = 78
Gap = +13

Ini indikator:

Apakah pembelajaran & perbaikan efektif?
3. Distribusi Nilai

Berapa % rendah

Berapa % sedang

Berapa % tinggi

Karena rata-rata saja bisa menipu.

4. CPMK Lemah

Identifikasi:

CPMK mana < threshold (misal 75%)

Ini dasar refleksi dosen:

Metode kurang tepat?

Soal tidak align?

Materi terlalu berat?

5. Alignment Assessment

Apakah soal benar-benar mengukur CPMK?

Bobot sudah proporsional?

Ini penting dalam OBE:

Assessment harus aligned dengan learning outcome.

tambahan aspek:
Persentase mahasiswa perlu perbaikan
CPMK dengan tingkat remedial tinggi
-------
Level Dosen

Rata-rata Final CPMK

% Lulus Threshold

Gap Awal–Final

Distribusi Nilai

CPMK Bermasalah
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
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
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <table class="table table-sm table-bordered">
          <thead class="table-light"><tr><th>#</th><th>Kode</th><th>Deskripsi</th><th>Nilai Performa(pilih by Rerata atau by %Tuntas)</th></tr></thead>
          <tbody>
            <tr><td>1</td><td>STS009-1</td><td>lorem ipsum</td><td>61 </td></tr>
            <tr><td>2</td><td>STS544-4</td><td>lorem ipsum</td><td>48 </td></tr>
            <tr><td>3</td><td>UKU355-6</td><td>Contoh Lain</td><td>45 </td></tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Detail MK -->
<div class="modal fade" id="modalDetailMK" tabindex="-1" role="dialog" aria-labelledby="detailMKTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <!-- Header -->
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="detailMKTitle">Detail Kelas Mata Kuliah</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Body -->
      <div class="modal-body">

        <!-- Informasi Umum -->
        <h6 class="mb-2"><b>Informasi Umum</b></h6>
        <table class="table table-sm table-bordered mb-4">
          <tr>
            <th style="width: 180px;">Mata Kuliah</th>
            <td>SKT1239 — Dasar Matematika</td>
          </tr>
          <tr>
            <th style="width: 180px;">Periode Akademik</th>
            <td>2024/2025 Gasal</td>
          </tr>
        </table>

        <!-- Tabel Detail Kelas -->
        <h6 class="mb-2"><b>Informasi Kelas</b></h6>
        <div class="table-responsive">
          <table class="table table-bordered table-sm">
            <thead class="thead-light">
              <tr class="text-center">
                <th>Kelas</th>
                <th>Dosen Pengampu</th>
                <th>Rerata Nilai MK</th>
                <th>Rerata CPMK 1</th>
                <th>Rerata Remidi CPMK 1</th>
                <th>Rerata CPMK 2</th>
                <th>Rerata Remidi CPMK 2</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">
                <td>A</td>
                <td>Hasan, ST, MT.</td>
                <td>78</td>
                <td>78</td>
                <td>0</td>
                <td>78</td>
                <td>0</td>
              </tr>
              <tr class="text-center">
               <td>C</td>
                <td>Rendi, ST, MT.</td>
                <td>78</td>
                <td>78</td>
                <td>0</td>
                <td>78</td>
                <td>0</td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>

      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>

    </div>
  </div>
</div>

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
    const labelsXG = entriesG.map(e => e.ik);

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
                return e.ik + ' (CPL ' + e.cpl + '): ' + e.value;
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

<script>
const ctx = document.getElementById("chartCPL1");

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [
      ' STS190-1','  STS230-2','STS333-1','STS900-2','STS544-2',
     'IK 1'
    ],
    datasets: [
      {
        label: 'Target Treshold (> 80%)',
        type: 'line',
        yMin: 80, 
        yMax: 80,
        backgroundColor: 'rgba(255,255,255,0.7)',
        borderColor: 'red',
        borderWidth: 2,
        borderDash: [6, 6],
      },
      {
        label: 'Previous Periode (%)',
        data: [78, 68, 58, 58, 83, 81, 77, 72, 70, 74],
        backgroundColor: '#6c757d',
        borderColor: '#6c757d',
        borderWidth: 1
      },
      {
        label: 'Selected Periode (%)',
        data: [80, 78, 60, 60, 84, 81, 80, 61, 50, 67],
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
const ctx2 = document.getElementById("chartCPL2");

new Chart(ctx2, {
  type: 'bar',
  data: {
    labels: [
      'STS210-1','STS211-2','STS212-1','STS213-3','IK 2'
    ],
    datasets: [
      {
        label: 'Target Treshold (> 80%)',
        type: 'line',
        yMin: 80,
        yMax: 80,
        borderColor: 'red',
        borderWidth: 2,
        borderDash: [6, 6],
      },
      {
        label: 'Previous Periode (%)',
        data: [72,65,68,60,66],
        backgroundColor: '#6c757d',
      },
      {
        label: 'Selected Periode (%)',
        data: [75,70,72,66,71],
        backgroundColor: '#007bff',
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
const ctx3 = document.getElementById("chartCPL3");

new Chart(ctx3, {
  type: 'bar',
  data: {
    labels: [
      'STS310-1','STS311-2','STS312-1','STS313-3','IK 3'
    ],
    datasets: [
      {
        label: 'Previous Periode (%)',
        data: [70,65,68,62,66],
        backgroundColor: '#6c757d',
      },
      {
        label: 'Selected Periode (%)',
        data: [74,69,72,67,71],
        backgroundColor: '#007bff',
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
              content: 'Target % Mahasiswa = 80',
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
const ctx4 = document.getElementById("chartCPL4");

new Chart(ctx4, {
  type: 'bar',
  data: {
    labels: [
      'STS410-1','STS411-2','STS412-1','STS413-3','IK 4'
    ],
    datasets: [
      {
        label: 'Previous Periode (%)',
        data: [68,64,66,61,65],
        backgroundColor: '#6c757d',
      },
      {
        label: 'Selected Periode (%)',
        data: [72,69,71,66,70],
        backgroundColor: '#007bff',
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
              content: 'Target % Mahasiswa = 80',
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
const ctx5 = document.getElementById("chartCPL5");

new Chart(ctx5, {
  type: 'bar',
  data: {
    labels: [
      'STS510-1','STS511-2','STS512-1','STS513-3','IK 5'
    ],
    datasets: [
      {
        label: 'Previous Periode (%)',
        data: [70,66,68,64,67],
        backgroundColor: '#6c757d',
      },
      {
        label: 'Selected Periode (%)',
        data: [74,70,72,68,71],
        backgroundColor: '#007bff',
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
              content: 'Target % Mahasiswa = 80',
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
const ctx6 = document.getElementById("chartCPL6");

new Chart(ctx6, {
  type: 'bar',
  data: {
    labels: [
      'STS610-1','STS611-2','STS612-1','STS613-3','IK 6'
    ],
    datasets: [
      {
        label: 'Previous Periode (%)',
        data: [72,68,70,65,69],
        backgroundColor: '#6c757d',
      },
      {
        label: 'Selected Periode (%)',
        data: [76,73,75,70,73],
        backgroundColor: '#007bff',
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
              content: 'Target % Mahasiswa = 80',
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
// Chart IK 7
const ctx7 = document.getElementById("chartCPL7");
new Chart(ctx7, {
  type: 'bar',
  data: {
    labels: ['STS710-1','STS711-2','STS712-1','STS713-3','IK 7'],
    datasets: [
      { label:'Previous Periode (%)', data:[75,70,72,68,71], backgroundColor:'#6c757d' },
      { label:'Selected Periode (%)', data:[78,74,76,71,75], backgroundColor:'#007bff' }
    ]
  },
  options: {
    responsive:true,
    plugins:{
      legend:{ position:'top' },
      annotation:{
        annotations:{
          targetLine:{
            type:'line', yMin:80, yMax:80,
            borderColor:'red', borderWidth:2, borderDash:[6,6],
            label:{ display:true, content:'Target % Mahasiswa = 80', position:'start', color:'red', backgroundColor:'rgba(255,255,255,0.7)', padding:4 }
          }
        }
      }
    },
    scales:{ y:{ beginAtZero:true, max:100 } }
  }
});

// Chart IK 8
const ctx8 = document.getElementById("chartCPL8");
new Chart(ctx8, {
  type: 'bar',
  data: {
    labels: ['STS810-1','STS811-2','STS812-1','STS813-3','IK 8'],
    datasets: [
      { label:'Previous Periode (%)', data:[73,69,71,66,70], backgroundColor:'#6c757d' },
      { label:'Selected Periode (%)', data:[77,72,75,70,73], backgroundColor:'#007bff' }
    ]
  },
  options: {
    responsive:true,
    plugins:{
      legend:{ position:'top' },
      annotation:{
        annotations:{
          targetLine:{
            type:'line', yMin:80, yMax:80,
            borderColor:'red', borderWidth:2, borderDash:[6,6],
            label:{ display:true, content:'Target % Mahasiswa = 80', position:'start', color:'red', backgroundColor:'rgba(255,255,255,0.7)', padding:4 }
          }
        }
      }
    },
    scales:{ y:{ beginAtZero:true, max:100 } }
  }
});
</script>
<script>
// Chart IK 9
const ctx9 = document.getElementById("chartCPL9");
new Chart(ctx9, {
  type:'bar',
  data:{
    labels:['STS910-1','STS911-2','STS912-1','STS913-3','IK 9'],
    datasets:[
      {label:'Previous Periode (%)', data:[74,70,68,72,71], backgroundColor:'#6c757d'},
      {label:'Selected Periode (%)', data:[78,73,71,75,74], backgroundColor:'#007bff'}
    ]
  },
  options:{ responsive:true, plugins:{ legend:{position:'top'}, annotation:{ annotations:{ targetLine:{ type:'line', yMin:80, yMax:80, borderColor:'red', borderWidth:2, borderDash:[6,6], label:{display:true, content:'Target % Mahasiswa = 80', position:'start', color:'red', backgroundColor:'rgba(255,255,255,0.7)', padding:4} } } } }, scales:{ y:{beginAtZero:true, max:100} } }
});

// Chart IK 10
const ctx10 = document.getElementById("chartCPL10");
new Chart(ctx10, {
  type:'bar',
  data:{
    labels:['STS1010-1','STS1011-2','STS1012-1','STS1013-3','IK 10'],
    datasets:[
      {label:'Previous Periode (%)', data:[73,70,68,72,71], backgroundColor:'#6c757d'},
      {label:'Selected Periode (%)', data:[77,73,71,75,74], backgroundColor:'#007bff'}
    ]
  },
  options:{ responsive:true, plugins:{ legend:{position:'top'}, annotation:{ annotations:{ targetLine:{ type:'line', yMin:80, yMax:80, borderColor:'red', borderWidth:2, borderDash:[6,6], label:{display:true, content:'Target % Mahasiswa = 80', position:'start', color:'red', backgroundColor:'rgba(255,255,255,0.7)', padding:4} } } } }, scales:{ y:{beginAtZero:true, max:100} } }
});

// Chart IK 11
const ctx11 = document.getElementById("chartCPL11");
new Chart(ctx11, {
  type:'bar',
  data:{
    labels:['STS1110-1','STS1111-2','STS1112-1','STS1113-3','IK 11'],
    datasets:[
      {label:'Previous Periode (%)', data:[74,70,68,72,71], backgroundColor:'#6c757d'},
      {label:'Selected Periode (%)', data:[78,73,71,75,74], backgroundColor:'#007bff'}
    ]
  },
  options:{ responsive:true, plugins:{ legend:{position:'top'}, annotation:{ annotations:{ targetLine:{ type:'line', yMin:80, yMax:80, borderColor:'red', borderWidth:2, borderDash:[6,6], label:{display:true, content:'Target % Mahasiswa = 80', position:'start', color:'red', backgroundColor:'rgba(255,255,255,0.7)', padding:4} } } } }, scales:{ y:{beginAtZero:true, max:100} } }
});

// Chart IK 12
const ctx12 = document.getElementById("chartCPL12");
new Chart(ctx12, {
  type:'bar',
  data:{
    labels:['STS1210-1','STS1211-2','STS1212-1','STS1213-3','IK 12'],
    datasets:[
      {label:'Previous Periode (%)', data:[73,69,71,66,70], backgroundColor:'#6c757d'},
      {label:'Selected Periode (%)', data:[77,72,75,70,73], backgroundColor:'#007bff'}
    ]
  },
  options:{ responsive:true, plugins:{ legend:{position:'top'}, annotation:{ annotations:{ targetLine:{ type:'line', yMin:80, yMax:80, borderColor:'red', borderWidth:2, borderDash:[6,6], label:{display:true, content:'Target % Mahasiswa = 80', position:'start', color:'red', backgroundColor:'rgba(255,255,255,0.7)', padding:4} } } } }, scales:{ y:{beginAtZero:true, max:100} } }
});
</script>
<script>
// Chart IK 13
const ctx13 = document.getElementById("chartCPL13");
new Chart(ctx13,{type:'bar',data:{labels:['STS1310-1','STS1311-2','STS1312-1','STS1313-3','IK 13'],datasets:[{label:'Previous Periode (%)',data:[75,72,70,74,72],backgroundColor:'#6c757d'},{label:'Selected Periode (%)',data:[78,75,73,76,75],backgroundColor:'#007bff'}]},options:{responsive:true,plugins:{legend:{position:'top'},annotation:{annotations:{targetLine:{type:'line',yMin:80,yMax:80,borderColor:'red',borderWidth:2,borderDash:[6,6],label:{display:true,content:'Target % Mahasiswa = 80',position:'start',color:'red',backgroundColor:'rgba(255,255,255,0.7)',padding:4}}}}},scales:{y:{beginAtZero:true,max:100}}}});

// Chart IK 14
const ctx14 = document.getElementById("chartCPL14");
new Chart(ctx14,{type:'bar',data:{labels:['STS1410-1','STS1411-2','STS1412-1','STS1413-3','IK 14'],datasets:[{label:'Previous Periode (%)',data:[73,70,69,71,71],backgroundColor:'#6c757d'},{label:'Selected Periode (%)',data:[77,74,72,74,74],backgroundColor:'#007bff'}]},options:{responsive:true,plugins:{legend:{position:'top'},annotation:{annotations:{targetLine:{type:'line',yMin:80,yMax:80,borderColor:'red',borderWidth:2,borderDash:[6,6],label:{display:true,content:'Target % Mahasiswa = 80',position:'start',color:'red',backgroundColor:'rgba(255,255,255,0.7)',padding:4}}}}},scales:{y:{beginAtZero:true,max:100}}}});

// Chart IK 15
const ctx15 = document.getElementById("chartCPL15");
new Chart(ctx15,{type:'bar',data:{labels:['STS1510-1','STS1511-2','STS1512-1','STS1513-3','IK 15'],datasets:[{label:'Previous Periode (%)',data:[74,71,70,72,72],backgroundColor:'#6c757d'},{label:'Selected Periode (%)',data:[77,74,73,75,75],backgroundColor:'#007bff'}]},options:{responsive:true,plugins:{legend:{position:'top'},annotation:{annotations:{targetLine:{type:'line',yMin:80,yMax:80,borderColor:'red',borderWidth:2,borderDash:[6,6],label:{display:true,content:'Target % Mahasiswa = 80',position:'start',color:'red',backgroundColor:'rgba(255,255,255,0.7)',padding:4}}}}},scales:{y:{beginAtZero:true,max:100}}}});

// Chart IK 16
const ctx16 = document.getElementById("chartCPL16");
new Chart(ctx16,{type:'bar',data:{labels:['STS1610-1','STS1611-2','STS1612-1','STS1613-3','IK 16'],datasets:[{label:'Previous Periode (%)',data:[75,72,70,74,72],backgroundColor:'#6c757d'},{label:'Selected Periode (%)',data:[78,75,73,76,75],backgroundColor:'#007bff'}]},options:{responsive:true,plugins:{legend:{position:'top'},annotation:{annotations:{targetLine:{type:'line',yMin:80,yMax:80,borderColor:'red',borderWidth:2,borderDash:[6,6],label:{display:true,content:'Target % Mahasiswa = 80',position:'start',color:'red',backgroundColor:'rgba(255,255,255,0.7)',padding:4}}}}},scales:{y:{beginAtZero:true,max:100}}}});
</script>
<script>
function createIKChart(id, labels, prev, curr){
  const ctx = document.getElementById(id);
  new Chart(ctx,{
    type:'bar',
    data:{labels:labels,datasets:[{label:'Previous Periode (%)',data:prev,backgroundColor:'#6c757d'},{label:'Selected Periode (%)',data:curr,backgroundColor:'#007bff'}]},
    options:{
      responsive:true,
      plugins:{
        legend:{position:'top'},
        annotation:{annotations:{targetLine:{type:'line',yMin:80,yMax:80,borderColor:'red',borderWidth:2,borderDash:[6,6],label:{display:true,content:'Target % Mahasiswa = 80',position:'start',color:'red',backgroundColor:'rgba(255,255,255,0.7)',padding:4}}}}
      },
      scales:{y:{beginAtZero:true,max:100}}
    }
  });
}

createIKChart('chartCPL17',['STS1710-1','STS1711-2','STS1712-1','STS1713-3','IK 17'],[72,70,71,73,71],[75,73,74,76,74]);
createIKChart('chartCPL18',['STS1810-1','STS1811-2','STS1812-1','STS1813-3','IK 18'],[73,71,70,72,71],[76,74,73,75,74]);
createIKChart('chartCPL19',['STS1910-1','STS1911-2','STS1912-1','STS1913-3','IK 19'],[74,72,71,73,72],[77,75,74,76,75]);
createIKChart('chartCPL20',['STS2010-1','STS2011-2','STS2012-1','STS2013-3','IK 20'],[73,71,70,72,71],[76,74,73,75,74]);
createIKChart('chartCPL21',['STS2110-1','STS2111-2','STS2112-1','STS2113-3','IK 21'],[74,72,71,73,72],[77,75,74,76,75]);
createIKChart('chartCPL22',['STS2210-1','STS2211-2','STS2212-1','STS2213-3','IK 22'],[73,71,70,72,71],[76,74,73,75,74]);
createIKChart('chartCPL23',['STS2310-1','STS2311-2','STS2312-1','STS2313-3','IK 23'],[74,72,71,73,72],[77,75,74,76,75]);
createIKChart('chartCPL24',['STS2410-1','STS2411-2','STS2412-1','STS2413-3','IK 24'],[73,71,70,72,71],[76,74,73,75,74]);
</script>
    <?php include('5script.php'); ?>
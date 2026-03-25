<?php $page = 'monev_semester3'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev Semester
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
                <div class="col-md-6">
                  <b>Tahun Akademik:</b> 2024/2025 &nbsp;
                </div> 
                <div class="col-md-6">
                  <b>Semester Akademik:</b> Gasal  &nbsp;
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
                <a class="btn btn-sm btn-outline-primary" href="formulir-evaluasi.php" target="_blank"><i class="fas fa-clipboard-list me-1"> </i>Catat Temuan </a>             
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
    <li class="nav-item" onclick="window.location='monev-rekap-semester3-.php'"><a class="nav-link active">Ringkasan</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-semester3-detail0.php'"><a class="nav-link ">IK</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-semester3-detail1.php'"><a class="nav-link ">CPMK</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-semester3-detail2.php'"><a class="nav-link ">Mata Kuliah</a></li>

  </ul>

<!-- ========== CARD 4: CHART 1 ========== -->    
<div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i>
      Ringkasan Kuantitatif
    </h5>
    <div class="card-tools">
      <small class="text-muted">Semester Terpilih</small>
    </div>
  </div>
  <div class="card-body">
    <canvas id="chartIKG" width="100%" height="30"></canvas>
    <h6 class="font-weight-bold">Daftar Indikator Kompetensi (IK)</h6>
    <table class="table table-sm table-bordered table-striped table-hover  ">

  <thead>
    <tr>
      <th>#</th>
      <th>Kode IK</th>
      <th>Deskripsi IK</th>
      <th>Skor IK (avg)</th>
    </tr>
  </thead>
  <tbody>
    <!-- CPL 1 -->
    <tr><td>1</td><td>IK1.1</td><td>Memahami konsep dasar CPL 1</td><td>82</td></tr>
    <tr><td>2</td><td>IK1.2</td><td>Menerapkan prinsip CPL 1 dalam tugas</td><td>75</td></tr>

    <!-- CPL 2 -->
    <tr><td>3</td><td>IK2.1</td><td>Analisis kasus CPL 2 secara kritis</td><td>70</td></tr>
    <tr><td>4</td><td>IK2.2</td><td>Mampu menyelesaikan masalah CPL 2</td><td>78</td></tr>
    <tr><td>5</td><td>IK2.3</td><td>Menguasai konsep CPL 2 dalam praktik</td><td>83</td></tr>

    <!-- CPL 3 -->
    <tr><td>6</td><td>IK3.1</td><td>Memahami teknik dasar CPL 3</td><td>72</td></tr>
    <tr><td>7</td><td>IK3.2</td><td>Mampu menerapkan CPL 3 pada studi kasus</td><td>76</td></tr>

    <!-- CPL 4 -->
    <tr><td>8</td><td>IK4.1</td><td>Memahami proses CPL 4</td><td>74</td></tr>
    <tr><td>9</td><td>IK4.2</td><td>Mampu mengaplikasikan CPL 4 secara efektif</td><td>79</td></tr>

    <!-- CPL 5 -->
    <tr><td>10</td><td>IK5.1</td><td>Menguasai prinsip CPL 5</td><td>73</td></tr>
    <tr><td>11</td><td>IK5.2</td><td>Mampu menerapkan CPL 5 dalam proyek</td><td>77</td></tr>

    <!-- CPL 6 -->
    <tr><td>12</td><td>IK6.1</td><td>Memahami konsep CPL 6</td><td>85</td></tr>

    <!-- CPL 7 -->
    <tr><td>13</td><td>IK7.1</td><td>Menunjukkan kemampuan CPL 7</td><td>80</td></tr>
    <tr><td>14</td><td>IK7.2</td><td>Mengaplikasikan CPL 7 dalam studi kasus</td><td>84</td></tr>

    <!-- CPL 8 -->
    <tr><td>15</td><td>IK8.1</td><td>Memahami prinsip CPL 8</td><td>78</td></tr>
    <tr><td>16</td><td>IK8.2</td><td>Mengimplementasikan CPL 8</td><td>82</td></tr>

    <!-- CPL 9 -->
    <tr><td>17</td><td>IK9.1</td><td>Analisis CPL 9 secara kritis</td><td>75</td></tr>
    <tr><td>18</td><td>IK9.2</td><td>Mampu memecahkan masalah CPL 9</td><td>79</td></tr>

    <!-- CPL 10 -->
    <tr><td>19</td><td>IK10.1</td><td>Memahami teknik CPL 10</td><td>76</td></tr>
    <tr><td>20</td><td>IK10.2</td><td>Mampu mengaplikasikan CPL 10</td><td>80</td></tr>

    <!-- CPL 11 -->
    <tr><td>21</td><td>IK11.1</td><td>Menguasai CPL 11</td><td>82</td></tr>
    <tr><td>22</td><td>IK11.2</td><td>Menerapkan CPL 11 pada proyek</td><td>85</td></tr>

    <!-- CPL 12 -->
    <tr><td>23</td><td>IK12.1</td><td>Menguasai CPL 12 secara menyeluruh</td><td>88</td></tr>
    <tr><td>24</td><td>IK12.2</td><td>Mampu mengaplikasikan CPL 12</td><td>90</td></tr>
  </tbody>

</table>
  </div>
</div>





<!-- CARD REKAP MASUKAN & INSIGHT PRODI (48 DOSEN) -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fas fa-chart-line mr-1"></i>
      Ringkasan Kualitatif
    </h3>
    <div class="card-tools">
      <small class="text-muted">Semester Terpilih</small>
    </div>
  </div>
  <div class="card-header bg-warning text-white">
    <h5>Rekap Masukan & Insight untuk Prodi</h5>
    <small>Ringkasan dari 48 dosen • Strategis</small>
  </div>

  <div class="card-body">

    <!-- 1️⃣ Kesiapan Mahasiswa -->
    <h6><strong>1. Kesiapan Mahasiswa</strong></h6>
    <p>🏆 Cukup (30/48 dosen)</p>
    <hr>

    <!-- 2️⃣ CPMK Tercapai -->
    <h6><strong>2. CPMK Tercapai</strong></h6>
    <p>🏆 Tercapai Kuat (28/48 dosen)</p>
    <hr>

    <!-- 3️⃣ Skor Skala -->
    <h6><strong>3. Skor Skala (Rerata Semua Dosen)</strong></h6>
    <ul>
      <li>Kesiapan Mahasiswa: 3.8/5</li>
      <li>Efektivitas Metode Pembelajaran: 4.5/5</li>
    </ul>
    <hr>

    <!-- 4️⃣ Kesesuaian Kurikulum (Tagging) -->
    <h6><strong>4. Kesesuaian Kurikulum</strong></h6>
    <span class="badge badge-danger">Gap Materi (25)</span>
    <span class="badge badge-info">Tumpang Tindih Materi (15)</span>
    <span class="badge badge-secondary">CPMK Ambisius (8)</span>
    <p><small>Catatan tambahan: Penyusunan ulang materi agar urut & konsisten</small></p>
    <hr>

    <!-- 5️⃣ Efektivitas Metode Pembelajaran (Tagging) -->
    <h6><strong>5. Metode Pembelajaran Paling Efektif</strong></h6>
    <span class="badge badge-danger">Praktikum Menguatkan CPMK (30)</span>
    <span class="badge badge-info">Diskusi Efektif (25)</span>
    <span class="badge badge-secondary">Project Based Learning Efektif (15)</span>
    <p><small>Catatan tambahan: Studi kasus perlu dipadukan untuk optimalisasi</small></p>
    <hr>


    <!-- 6️⃣ Insight Evaluasi -->
    <h6><strong>6. Insight Evaluasi</strong></h6>
    <small class="text-muted">48 responden</small>
    <ul class="list-group mb-2">
      <li class="list-group-item">Mahasiswa masih kurang siap secara konsep dasar. (Dosen 1)</li>
      <li class="list-group-item">Praktikum & diskusi terbukti paling efektif. (Dosen 2)</li>
      <li class="list-group-item">…dst hingga Dosen 48</li>
    </ul>

    <!-- Collapsible sisa jawaban -->
    <div class="collapse" id="insightAll">
      <ul class="list-group mb-3">
        <li class="list-group-item">Rubrik penilaian perlu disesuaikan untuk CPMK kompleks. (Dosen 3)</li>
        <li class="list-group-item">Beberapa mahasiswa kesulitan mengikuti materi lanjutan. (Dosen 4)</li>
        <li class="list-group-item">Mahasiswa perlu lebih banyak latihan dasar. (Dosen 5)</li>
        <li class="list-group-item">… (Dosen 48)</li>
      </ul>
    </div>
    <button class="btn btn-link p-0" type="button" data-bs-toggle="collapse" data-bs-target="#insightAll" aria-expanded="false" aria-controls="insightAll">
      Selengkapnya
    </button>

    <hr>

    <!-- 7️⃣ Rekomendasi & Action Plan -->
    <h6><strong>7. Rekomendasi & Action Plan</strong></h6>
    <small class="text-muted">48 responden</small>
    <ul class="list-group mb-2">
      <li class="list-group-item">Tambahkan sesi praktikum awal & diskusi terstruktur. (Dosen 1)</li>
      <li class="list-group-item">Pengadaan software simulasi & alat bantu praktikum. (Dosen 2)</li>
    </ul>

    <div class="collapse" id="recommendAll">
      <ul class="list-group mb-3">
      <li class="list-group-item">Standarisasi urutan materi dan CPMK antar mata kuliah. (Dosen 3)</li>
        <li class="list-group-item">Rubrik jelas & evaluasi berjenjang untuk penilaian. (Dosen 4)</li>
        <li class="list-group-item">… (Dosen 48)</li>
      </ul>
    </div>
    <button class="btn btn-link p-0" type="button" data-bs-toggle="collapse" data-bs-target="#recommendAll" aria-expanded="false" aria-controls="recommendAll">
      Selengkapnya
    </button>

  </div>

  <div class="card-footer text-right">
    <button class="btn btn-outline-success">Unduh Rekap</button>
    <button class="btn btn-outline-info">Lihat Semua Masukan</button>
  </div>

</div>


<!-- ========== CARD : Ringkasan Refleksi Kelas untuk Tim Kurikulum ========== -->
<div class="card  collapse">

  <div class="card-header">
    <h3 class="card-title">
      <i class="fas fa-chart-line mr-1"></i>
      Ringkasan Kualitatif
    </h3>
    <div class="card-tools">
      <small class="text-muted">Semester Terpilih</small>
    </div>
  </div>

  <div class="card-body">

    <!-- ================= TAG UTAMA ================= -->
    <div class="mb-4">
      <h5 class="text-primary"><strong>TAG Utama Kelas</strong></h5>
      <div>
        <span class="badge badge-danger">#CPMK_Tidak_Tercapai</span>
        <span class="badge badge-warning">#Variansi_Tinggi</span>
        <span class="badge badge-info">#Prasyarat_Lemah</span>
        <span class="badge badge-secondary">#Instrumen_Terlalu_Sulit</span>
        <span class="badge badge-primary">#Butuh_Pemecahan_Materi</span>
      </div>
    </div>

    <hr>

    <!-- ================= RINGKASAN OBE ================= -->
    <div class="mb-4">
      <h5 class="text-primary"><strong>1. Ringkasan Ketercapaian OBE</strong></h5>
      <p>
        CPMK 1 dan 2 relatif tercapai secara konsisten, namun CPMK 3 menunjukkan penurunan signifikan.
        Mahasiswa mulai tertinggal pada tahap analisis kasus lanjutan.
        Distribusi nilai menunjukkan variansi tinggi antara mahasiswa kuat dan lemah.
      </p>
    </div>

    <!-- ================= METODE ================= -->
    <div class="mb-4">
      <h5 class="text-primary"><strong>2. Temuan Metode Pembelajaran</strong></h5>
      <ul>
        <li>Studi kasus efektif meningkatkan pemahaman konseptual.</li>
        <li>Ceramah murni kurang efektif untuk CPMK analitis.</li>
        <li>Project akhir menjadi bottleneck utama kelas.</li>
      </ul>
    </div>

    <!-- ================= PENILAIAN ================= -->
    <div class="mb-4">
      <h5 class="text-primary"><strong>3. Evaluasi Instrumen Penilaian</strong></h5>
      <ul>
        <li>Rubrik belum dipahami mahasiswa secara merata.</li>
        <li>Instrumen cenderung mengukur teknis, bukan kedalaman analisis.</li>
        <li>Bobot tugas akhir terlalu dominan.</li>
      </ul>
    </div>

    <!-- ================= POLA MAHASISWA ================= -->
    <div class="mb-4">
      <h5 class="text-primary"><strong>4. Pola Mahasiswa</strong></h5>
      <p>
        Kelemahan dominan pada prasyarat konseptual.
        Mahasiswa dengan kemampuan mandiri tinggi berkembang pesat,
        namun mahasiswa dengan ketergantungan contoh mengalami stagnasi.
      </p>
    </div>

    <hr>

    <!-- ================= PRIORITAS TINDAK LANJUT ================= -->
    <div class="alert alert-warning">
      <h5><i class="fas fa-exclamation-triangle mr-1"></i> Isu Prioritas</h5>
      <ul class="mb-0">
        <li>Lonjakan kesulitan pada CPMK 3</li>
        <li>Prasyarat mahasiswa belum merata</li>
        <li>Desain instrumen perlu evaluasi ulang</li>
      </ul>
    </div>

    <!-- ================= REKOMENDASI PENGADAAN ================= -->
    <div class="alert alert-info">
      <h5><i class="fas fa-lightbulb mr-1"></i> Rekomendasi untuk Prodi</h5>
      <ul class="mb-0">
        <li>Pengembangan modul prasyarat sebelum CPMK 3</li>
        <li>Workshop penyusunan rubrik berbasis OBE</li>
        <li>Pengadaan software simulasi untuk analisis kasus</li>
      </ul>
    </div>

  </div>

  <div class="card-footer text-right">
    <button class="btn btn-outline-primary btn-sm">
      <i class="fas fa-file-download mr-1"></i> Unduh Ringkasan
    </button>
  </div>

</div>


<!-- ========== CARD 4: Chart CPL-IK ========== -->     
        <!-- <div class="card">   

          <div class="card-header ">         
            <h5 class="card-title mb-0">
              <button class="btn btn-sm btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#chartCPLIK1">
                <i class="fas fa-expand"></i>
              </button>
              kode IK pertama (perbandingan %mahasiswa tuntas IK, periode A vs B)
            </h5>
          </div>

          <div class="card-body " id="chartCPLIK1">

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
        </div> -->











<!-- 1. CARD: Populis Voting Semua Kelas -->
<div class="col-md-12">
  <div class="card card-info collapse">

    <div class="card-header">
      <h5 class="card-title mb-0">Populis Kelas</h5>
      <small class="text-light">Agregasi seluruh kelas • Berdasarkan catatan dosen</small>
    </div>

    <div class="card-body">

      <p>
        Menampilkan isu dan kondisi yang paling sering muncul dari seluruh kelas dalam satu semester.
      </p>

      <hr>

      <h6><strong>Isu Dominan</strong></h6>

      <div class="mb-2">
        <span class="badge badge-danger">Mahasiswa belum siap</span>
        <span class="float-right">18 kelas</span>
      </div>

      <div class="mb-2">
        <span class="badge badge-warning">Waktu tidak cukup</span>
        <span class="float-right">15 kelas</span>
      </div>

      <div class="mb-2">
        <span class="badge badge-info">Assessment perlu perbaikan</span>
        <span class="float-right">12 kelas</span>
      </div>

      <div class="mb-2">
        <span class="badge badge-success">Metode praktik efektif</span>
        <span class="float-right">20 kelas</span>
      </div>

      <hr>

      <small class="text-muted">
        Data berasal dari tagging pada Catatan & Evaluasi Kelas
      </small>

    </div>

    <div class="card-footer d-flex justify-content-between">
      <button class="btn btn-info">Lihat Detail</button>
      <button class="btn btn-outline-secondary">Filter Semester</button>
    </div>

  </div>
</div>


<!-- 2. CARD: Populis Voting Semua Mata Kuliah -->
<div class="col-md-12">
  <div class="card card-purple collapse">

    <div class="card-header">
      <h5 class="card-title mb-0">Populis Mata Kuliah</h5>
      <small class="text-light">Agregasi per mata kuliah • Insight kurikulum</small>
    </div>

    <div class="card-body">

      <p>
        Menampilkan mata kuliah dengan isu terbanyak berdasarkan evaluasi dosen di berbagai kelas.
      </p>

      <hr>

      <h6><strong>Mata Kuliah Perlu Perhatian</strong></h6>

      <div class="mb-2">
        <strong>Pemrograman Web Dasar</strong>
        <span class="badge badge-danger float-right">12 isu</span>
        <br>
        <small class="text-muted">Masalah: CPMK lanjutan, kesiapan mahasiswa</small>
      </div>

      <div class="mb-2">
        <strong>Struktur Data</strong>
        <span class="badge badge-warning float-right">9 isu</span>
        <br>
        <small class="text-muted">Masalah: tingkat kesulitan tinggi</small>
      </div>

      <div class="mb-2">
        <strong>Basis Data</strong>
        <span class="badge badge-info float-right">7 isu</span>
        <br>
        <small class="text-muted">Masalah: assessment & praktikum</small>
      </div>

      <hr>

      <small class="text-muted">
        Berdasarkan agregasi evaluasi lintas kelas per mata kuliah
      </small>

    </div>

    <div class="card-footer d-flex justify-content-between">
      <button class="btn btn-purple">Lihat Analisis</button>
      <button class="btn btn-outline-secondary">Bandingkan Semester</button>
    </div>

  </div>
</div>


<!-- 3. CARD: Masukan & Insight untuk Program Studi (Strategic) -->
<div class="col-md-12 ">
  <div class="card card-danger collapse">

    <div class="card-header">
      <h5 class="card-title mb-0">Masukan & Insight Prodi</h5>
      <small class="text-light">Lanjutan dari kelas • Strategis</small>
    </div>

    <div class="card-body">

      <p>
        Rangkuman insight dan rekomendasi dosen untuk perbaikan pembelajaran dan kurikulum di tingkat program studi.
      </p>

      <hr>

      <h6><strong>Insight Utama</strong></h6>

      <ul>
        <li>Mahasiswa belum memiliki dasar pemrograman yang cukup di semester awal</li>
        <li>Perlu penambahan sesi praktikum pada mata kuliah inti</li>
        <li>Metode pembelajaran berbasis proyek lebih efektif dibanding ceramah</li>
      </ul>

      <hr>

      <h6><strong>Rekomendasi</strong></h6>

      <ul>
        <li>Tambahkan mata kuliah pengantar coding di semester 1</li>
        <li>Standarisasi rubrik penilaian antar dosen</li>
        <li>Perbaiki distribusi beban tugas mahasiswa</li>
      </ul>

      <hr>

      <small class="text-muted">
        Diambil dari masukan dosen pada seluruh mata kuliah dalam semester berjalan
      </small>

    </div>

    <div class="card-footer d-flex justify-content-between">
      <button class="btn btn-danger">Lihat Semua Insight</button>
      <button class="btn btn-outline-secondary">Export Laporan</button>
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
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
        <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
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

     
 
    <?php include('5script.php'); ?>
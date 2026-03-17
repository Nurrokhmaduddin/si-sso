<?php $page = 'monev_semester'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev Semester IK (avg ketuntasan CPMK)
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




<!-- BAR CHART 1 -->
<div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i>
      Persentase Mahasiswa1
    </h5>
    <div class="card-tools">
      <small class="text-muted">Semester Terpilih</small>
    </div>
  </div>
  <div class="card-body">
    <canvas id="chartIK" height="190"></canvas>
  </div>
</div>
     <!-- BAR CHART 1 -->
<!-- <div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i>
      Persentase Mahasiswa2
    </h5>
    <div class="card-tools">
      <small class="text-muted">Semester Terpilih</small>
    </div>
  </div>
  <div class="card-body">
    <canvas id="chartIK2" ></canvas>
  </div>
</div> -->
     <!-- BAR CHART 1 -->
<!-- <div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i>
      Persentase Mahasiswa3
    </h5>
    <div class="card-tools">
      <small class="text-muted">Semester Terpilih</small>
    </div>
  </div>
  <div class="card-body">
    <canvas id="chartIK3" height="70"></canvas>
  </div>
</div> -->
<!-- BAR CHART 1 -->
<!-- <div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i>
      Persentase Mahasiswa4
    </h5>
    <div class="card-tools">
      <small class="text-muted">Semester Terpilih</small>
    </div>
  </div>
  <div class="card-body">
    <canvas id="heatmapChart" width="100%" height="100%"></canvas>
  </div>
</div> -->
<!-- BAR CHART 1 -->
<!-- <div class="card col-6">
    <style>
    
    td, th { 
      border: 1px solid #ccc; 
      text-align: center; 
     
    }
    .heat { 
      background-color: #007bff; 
      color: #fff; 
    }
  </style>
  <div class="card-header">
    <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i>
     Heatmap Table IK x CPL
    </h5>
    <div class="card-tools">
      <small class="text-muted">Semester Terpilih</small>
    </div>
  </div>
  <div class="card-body">
    <table>
  <thead>
    <tr>
      <th>IK / CPL</th>
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
      <th>CPL 11</th>
      <th>CPL 12</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>IK1.1</th><td class="heat">82</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
      <th>IK1.2</th><td class="heat">75</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
      <th>IK2.1</th><td></td><td class="heat">70</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
      <th>IK2.2</th><td></td><td class="heat">78</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
      <th>IK2.3</th><td></td><td class="heat">83</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
      <th>IK3.1</th><td></td><td></td><td class="heat">72</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
      <th>IK3.2</th><td></td><td></td><td class="heat">76</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
      <th>IK4.1</th><td></td><td></td><td></td><td class="heat">74</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
      <th>IK4.2</th><td></td><td></td><td></td><td class="heat">79</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
      <th>IK5.1</th><td></td><td></td><td></td><td></td><td class="heat">73</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
      <th>IK5.2</th><td></td><td></td><td></td><td></td><td class="heat">77</td><td></td><td class="heat">77</td><td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
      <th>IK6.1</th><td></td><td></td><td></td><td></td><td></td><td class="heat">85</td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
      <th>IK7.1</th><td></td><td></td><td></td><td></td><td></td><td></td><td class="heat">80</td><td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
      <th>IK7.2</th><td></td><td></td><td></td><td></td><td></td><td></td><td class="heat">84</td><td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
      <th>IK8.1</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="heat">78</td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
      <th>IK8.2</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="heat">82</td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
      <th>IK9.1</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="heat">75</td><td></td><td></td><td></td>
    </tr>
    <tr>
      <th>IK9.2</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="heat">79</td><td></td><td></td><td></td>
    </tr>
    <tr>
      <th>IK10.1</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="heat">76</td><td></td><td></td>
    </tr>
    <tr>
      <th>IK10.2</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="heat">80</td><td></td><td></td>
    </tr>
    <tr>
      <th>IK11.1</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="heat">82</td><td></td>
    </tr>
    <tr>
      <th>IK11.2</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="heat">85</td>
    </tr>
    <tr>
      <th>IK12.1</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="heat">88</td>
    </tr>
    <tr>
      <th>IK12.2</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td class="heat">90</td>
    </tr>
  </tbody>
</table>
  </div>
</div> -->
<!-- BAR CHART 1 -->
<div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0"><i class="fas fa-chart-bar me-2"></i>
      Persentase Mahasiswa5
    </h5>
    <div class="card-tools">
      <small class="text-muted">Semester Terpilih</small>
    </div>
  </div>
  <div class="card-body">
    <canvas id="chartIKG" width="100%" height="30"></canvas>
  </div>
</div>

<!-- ========== CARD 4: Chart CPL-IK ========== -->     
        <div class="card">   
          <!-- CARD HEADER -->  
          <div class="card-header ">         
            <h5 class="card-title mb-0">
              <button class="btn btn-sm btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#chartCPLIK1">
                <i class="fas fa-expand"></i>
              </button>
              kode IK pertama (perbandingan %mahasiswa tuntas IK, periode A vs B)
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
            <!-- <h6 class="font-weight-bold">Daftar Indikator Kinerja (IK)</h6>
            <div class="table-responsive">
              <table class="table table-sm table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th style="width: 80px;">Kode IK</th>
                    <th>Deskripsi IK</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>IK 1</td>
                    <td>Mahasiswa mampu menyampaikan informasi secara lisan secara runtut, jelas, dan mudah dipahami.</td>
                  </tr>
                  <tr>
                    <td>IK 2</td>
                    <td>Mahasiswa mampu menulis laporan/tulisan akademik sesuai kaidah bahasa dan struktur penulisan yang baik.</td>
                  </tr>
                  <tr>
                    <td>IK 3</td>
                    <td>Mahasiswa mampu berkomunikasi secara profesional dalam konteks akademik dan industri, termasuk etika komunikasi digital.</td>
                  </tr>
                </tbody>
              </table>
            </div> -->
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
// -------------------------------------------------
// 1) GENERATOR DATA DUMMY SECARA OTOMATIS
// -------------------------------------------------


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
                x: {
              ticks: {
                display: false   // ⬅️ MATIKAN LABEL BAWAH
              },
              grid: {
                display: false   // (opsional) hilangkan garis grid vertikal
              }
            },
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

generateBarChart("chartCPMK", cpmkLabels, cpmkAverages, "Rata-rata CPMK", {
    bg: "rgba(255, 99, 132, 0.7)", border: "rgb(255, 99, 132)"     // merah
});

</script>




<script>
// ===============================================
// DATA PERSENTASE KETUNTASAN CPMK (BERBEDA)
// ===============================================


// Gunakan label yang sama seperti chartCPMK agar konsisten
const ketuntasanLabels = cpmkLabels.slice(0, 258); 
// hanya tampilkan 40 pertama agar tidak terlalu padat

// Generate data berbeda (60% - 100%)
const ketuntasanValues = ketuntasanLabels.map(() => {
    return Number((60 + Math.random()*40).toFixed(2));
});

// ===============================================
// GENERATE BAR CHART PERSENTASE KETUNTASAN
// ===============================================

const ctxKetuntasan = document.getElementById("chartKetuntasanCPMK").getContext("2d");

new Chart(ctxKetuntasan, {
    type: "bar",
    data: {
        labels: ketuntasanLabels,
        datasets: [
            {
                label: "Mahasiswa Tuntas (%)",
                data: ketuntasanValues,
                backgroundColor: "rgba(255, 99, 132, 0.7)",
                borderColor: "rgb(255, 99, 132)",
                borderWidth: 1
            },
            {
                label: "Batas Standar",
                type: "line",
                data: ketuntasanLabels.map(() => 65),
                borderColor: "red",
                borderWidth: 2,
                borderDash: [6,6],
                fill: false,
                pointRadius: 0
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { position: "top" },
            tooltip: {
                mode: "index",
                intersect: false
            }
        },
        scales: {
            x: {
                ticks: { display: false },
                grid: { display: false }
            },
            y: {
                beginAtZero: true,
                max: 100,
                title: {
                    display: false,
                    text: "Persentase (%)"
                }
            }
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
        labels: ['UKU100-1', 'STS454-1','UKU900-5', 'IK 2'],
        datasets: [{
            label: 'Capaian',
            data: [90, 0,80, 77.33],
            backgroundColor: [
                '#6c757d', // IK 4
                '#6c757d', 
                '#6c757d', // IK 5
                '#007bff'  // CPL 2
            ],
            borderColor: [
                '#6c757d',
                '#6c757d',
                '#6c757d',
                '#007bff'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: false },
            
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
// ----- Radar CPL -----
  const radarCtx = document.getElementById('radarCPL').getContext('2d');
  const radarCPL = new Chart(radarCtx, {
    type: 'radar',
    data: {
      labels: ['CPL 1', 'CPL 2', 'CPL 3', 'CPL 4', 'CPL 5', 'CPL 6', 'CPL 7', 'CPL 8', 'CPL 9', 'CPL 10', 'CPL 11'],
      datasets: [{
        label: 'Capaian CPL',
        data: [80, 90, 75, 85, 88,65, 67, 70, 55, 30, 23],
            // Warna hijau lembut (lebih nyaman di mata)
        backgroundColor: 'rgba(80, 200, 120, 0.35)',
        borderColor: 'rgba(60, 160, 95, 0.9)',
        borderWidth: 2,
        pointBackgroundColor: 'rgba(60, 160, 95, 1)'
      }]
    },
    options: {
      responsive: true,
    maintainAspectRatio: false,
      scales: {
        r: {
          min: 0,
          max: 100,
          ticks: { stepSize: 10 }
        }
      }
    }
  });

    // ----- Progress CPL Keseluruhan -----
    const progressCtx = document.getElementById('progressCPL').getContext('2d');
    const progressCPL = new Chart(progressCtx, {
        type: 'bar',
        data: {
            labels: ['CPL A', 'CPL B', 'CPL C'],
            datasets: [{
                label: 'Progress %',
                data: [74, 78, 82],
                backgroundColor: ['#007bff','#28a745','#ffc107']
            }]
        },
        options: {
            indexAxis: 'y',
            responsive: true,
    maintainAspectRatio: false,
            scales: {
                x: { max: 100, ticks: { callback: function(val){ return val + '%'; } } }
            },
            plugins: {
                legend: { display: false }
            }
        }
    });

    // ----- Grafik Batang CPMK Top 10 -----
    const barCtx = document.getElementById('barCPMK').getContext('2d');
    const barCPMK = new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: ['CPMK1','CPMK2','CPMK3','CPMK4','CPMK5','CPMK6','CPMK7','CPMK8','CPMK9','CPMK10'],
            datasets: [{
                label: 'Capaian %',
                data: [62, 65, 67, 68, 70, 72, 74, 75, 77, 78],
                backgroundColor: 'rgba(255, 99, 132, 0.7)'
            }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            y: { beginAtZero: true, max: 100, ticks: { callback: function(val){ return val + '%'; } } }
          }
        }
    });
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
const cpmkLabels2 = Array.from({length: 258}, (_, i) => {
    const mkCode = `STK${String(500 + Math.floor(i/5)).padStart(3,'0')}`;
    const num = (i % 5) + 1;
    return `${mkCode}-${num}`;
});
const cpmkAverages2 = cpmkLabels2.map(() => randomScore());

// 78 MK
const mkLabels2 = Array.from({length: 78}, (_, i) => `STK${String(600 + i).padStart(3,'0')}`);
const mkAverages2 = mkLabels2.map(() => randomScore());

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
    const ctz = document.getElementById(canvasId).getContext("2d");
    new Chart(ctz, {
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
          maintainAspectRatio: false,
          scales: {
            x: {
              ticks: {
                display: true   // ⬅️ MATIKAN LABEL BAWAH
              },
              grid: {
                display: false   // (opsional) hilangkan garis grid vertikal
              }
            },
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



generateBarChart("chartIK", ikLabels, ikAverages, "Capaian IK", {
    bg: "rgba(255, 159, 64, 0.7)",
    border: "rgb(255, 159, 64)"
});

generateBarChart("chartCPMKRight", cpmkLabels2, cpmkAverages2, "Capaian CPMK", {
    bg: "rgba(255, 99, 132, 0.7)",
    border: "rgb(255, 99, 132)"
});

generateBarChart("chartMK", mkLabels, mkAverages, "Capaian MK", {
    bg: "rgba(54, 162, 235, 0.7)", border: "rgb(54, 162, 235)"     // biru
});

</script>

<!-- <script>
const ctik = document.getElementById('chartIK2').getContext('2d');

const chartCpl = new Chart(ctik, {
  type: 'bar',
  data: {
    labels: [
      'IK1.1','IK1.2',
      'IK2.1','IK2.2','IK2.3',
      'IK3.1','IK3.2','IK3.3',
      'IK4.1','IK4.2',
      'IK5.1','IK5.2'
    ],
    datasets: [

      {
        label: 'CPL 1',
        data: [75, 82, null, null, null, null, null, null, null, null, null, null],
        backgroundColor: 'rgba(54,162,235,0.6)',
        borderColor: 'rgba(54,162,235,1)',
        borderWidth: 1
      },

      {
        label: 'CPL 2',
        data: [null, null, 68, 74, 80, null, null, null, null, null, null, null],
        backgroundColor: 'rgba(255,159,64,0.6)',
        borderColor: 'rgba(255,159,64,1)',
        borderWidth: 1
      },

      {
        label: 'CPL 3',
        data: [null, null, null, null, null, 72, 77, 83, null, null, null, null],
        backgroundColor: 'rgba(75,192,192,0.6)',
        borderColor: 'rgba(75,192,192,1)',
        borderWidth: 1
      },

      {
        label: 'CPL 4',
        data: [null, null, null, null, null, null, null, null, 79, 85, null, null],
        backgroundColor: 'rgba(255,99,132,0.6)',
        borderColor: 'rgba(255,99,132,1)',
        borderWidth: 1
      },

      {
        label: 'CPL 5',
        data: [null, null, null, null, null, null, null, null, null, null, 73, 81],
        backgroundColor: 'rgba(153,102,255,0.6)',
        borderColor: 'rgba(153,102,255,1)',
        borderWidth: 1
      }

    ]
  },

  options: {
    scales: {
      y: {
        beginAtZero: true,
        max: 100,
        title: {
          display: true,
          text: 'Persentase (%)'
        }
      }
    },
    plugins: {
      title: {
        display: true,
        text: 'Capaian IK pada Setiap CPL'
      }
    }
  }
});
</script> -->


<script>
const ctik = document.getElementById('chartIK2').getContext('2d');

new Chart(ctik, {
    type: 'bar',
    data: {
        labels: [
            // CPL 1
            'IK1.1', 'IK1.2',
            // CPL 2
            'IK2.1', 'IK2.2', 'IK2.3',
            // CPL 3
            'IK3.1', 'IK3.2',
            // CPL 4
            'IK4.1', 'IK4.2',
            // CPL 5
            'IK5.1', 'IK5.2',
            // CPL 6
            'IK6.1',
            // CPL 7
            'IK7.1', 'IK7.2',
            // CPL 8
            'IK8.1', 'IK8.2',
            // CPL 9
            'IK9.1', 'IK9.2',
            // CPL 10
            'IK10.1', 'IK10.2',
            // CPL 11
            'IK11.1', 'IK11.2',
            // CPL 12
            'IK12.1', 'IK12.2'
        ],
        datasets: [
            {
                label: 'CPL 1',
                data: [75, 82, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null],
                backgroundColor: '#007bff',
                borderColor: '#007bff',
                borderWidth: 1,
            },
            {
                label: 'CPL 2',
                data: [90, null, 70, 78, 83, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null],
                backgroundColor: '#6c757d',
                borderColor: '#6c757d',
                borderWidth: 1,
            },
            {
                label: 'CPL 3',
                data: [null, null, null, null, null, 72, 76, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null],
                backgroundColor: '#28a745',
                borderColor: '#28a745',
                borderWidth: 1,
            },
            {
                label: 'CPL 4',
                data: [null, null, null, null, null, null, null, 74, 79, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null],
                backgroundColor: '#ffc107',
                borderColor: '#ffc107',
                borderWidth: 1,
            },
            {
                label: 'CPL 5',
                data: [null, null, null, null, null, null, null, null, null, 73, 77, null, null, null, null, null, null, null, null, null, null, null, null, null],
                backgroundColor: '#dc3545',
                borderColor: '#dc3545',
                borderWidth: 1,
            },
            {
                label: 'CPL 6',
                data: [null, null, null, null, null, null, null, null, null, null, null, 85, null, null, null, null, null, null, null, null, null, null, null, null],
                backgroundColor: '#6610f2',
                borderColor: '#6610f2',
                borderWidth: 1,
            },
            {
                label: 'CPL 7',
                data: [null, null, null, null, null, null, null, null, null, null, null, null, 80, 84, null, null, null, null, null, null, null, null, null, null],
                backgroundColor: '#fd7e14',
                borderColor: '#fd7e14',
                borderWidth: 1,
            },
            {
                label: 'CPL 8',
                data: [null, null, null, null, null, null, null, null, null, null, null, null, null, null, 78, 82, null, null, null, null, null, null, null, null],
                backgroundColor: '#20c997',
                borderColor: '#20c997',
                borderWidth: 1,
            },
            {
                label: 'CPL 9',
                data: [null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 75, 79, null, null, null, null, null, null],
                backgroundColor: '#17a2b8',
                borderColor: '#17a2b8',
                borderWidth: 1,
            },
            {
                label: 'CPL 10',
                data: [null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 76, 80, null, null, null, null],
                backgroundColor: '#6f42c1',
                borderColor: '#6f42c1',
                borderWidth: 1,
            },
            {
                label: 'CPL 11',
                data: [null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 82, 85, null, null],
                backgroundColor: '#e83e8c',
                borderColor: '#e83e8c',
                borderWidth: 1,
            },
            {
                label: 'CPL 12',
                data: [null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 88, 90],
                backgroundColor: '#20c997',
                borderColor: '#20c997',
                borderWidth: 1,
            },
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { position: 'top' },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        return context.dataset.label + ' - ' + context.label + ': ' + context.raw;
                    }
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                max: 100,
                title: {
                    display: true,
                    text: 'Nilai IK (%)'
                }
            },
            x: {
                title: {
                    display: true,
                    text: 'Indikator Kinerja (IK)'
                }
            }
        }
    }
});
</script>

<!-- 
CPL 1 (IK1.1, IK1.2)
CPL 2 (IK2.1, IK2.2, IK2.3)
CPL 3 (IK3.1, IK3.2)
CPL 4 (IK4.1, IK4.2)
CPL 5 (IK5.1, IK5.2)
CPL 6 (IK6.1)
CPL 7 (IK7.1, IK7.2)
CPL 8 (IK8.1, IK8.2)
CPL 9 (IK9.1, IK9.2)
CPL 10 (IK10.1, IK10.2)
CPL 11 (IK11.1, IK11.2)
CPL 12 (IK12.1, IK12.2) -->

<!-- <script>
const ctik = document.getElementById('chartIK2').getContext('2d');

new Chart(ctik, {
    type: 'bar',
    data: {
        labels: [
            'CPL 1','CPL 2','CPL 3','CPL 4','CPL 5',
            'CPL 6','CPL 7','CPL 8','CPL 9','CPL 10','CPL 11','CPL 12'
        ],
        datasets: [
            {
                label: 'IK 1.1',
                data: [82], // IK1.1, IK1.2
                backgroundColor: '#007bff'
            },
            {
                label: 'IK 1.2',
                data: [78], // IK2.1, IK2.2, IK2.3
                backgroundColor: '#007bff'
            },
            {
                label: 'IK 2.1',
                data: [null, 76], // IK3.1, IK3.2
                backgroundColor: '#28a745'
            },
            {
                label: 'IK 2.2',
                data: [null, 72], // IK3.1, IK3.2
                backgroundColor: '#28a745'
            },
            {
                label: 'IK 2.3',
                data: [null, 80], // IK3.1, IK3.2
                backgroundColor: '#28a745'
            },
            {
                label: 'CPL 4',
                data: [74, 79], // IK4.1, IK4.2
                backgroundColor: '#ffc107'
            },
            {
                label: 'CPL 5',
                data: [73, 77], // IK5.1, IK5.2
                backgroundColor: '#dc3545'
            },
            {
                label: 'CPL 6',
                data: [85], // IK6.1
                backgroundColor: '#6610f2'
            },
            {
                label: 'CPL 7',
                data: [80, 84], // IK7.1, IK7.2
                backgroundColor: '#fd7e14'
            },
            {
                label: 'CPL 8',
                data: [78, 82], // IK8.1, IK8.2
                backgroundColor: '#20c997'
            },
            {
                label: 'CPL 9',
                data: [75, 79], // IK9.1, IK9.2
                backgroundColor: '#17a2b8'
            },
            {
                label: 'CPL 10',
                data: [76, 80], // IK10.1, IK10.2
                backgroundColor: '#6f42c1'
            },
            {
                label: 'CPL 11',
                data: [82, 85], // IK11.1, IK11.2
                backgroundColor: '#e83e8c'
            },
            {
                label: 'CPL 12',
                data: [88, 90], // IK12.1, IK12.2
                backgroundColor: '#ffc107'
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { position: 'top' },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        // Tampilkan CPL dan nilai IK
                        return context.dataset.label + ' - ' + context.raw;
                    }
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                max: 100,
                title: { display: true, text: 'Nilai IK (%)' }
            },
            x: {
                title: { display: true, text: 'Capaian Pembelajaran Lulusan (CPL)' }
            }
        }
    }
});
</script> -->




<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.2.0"></script>

<script>
const ctik3 = document.getElementById("chartIK3").getContext("2d");

// Semua IK sebagai dataset tapi warnanya sama
const datasetsIK = [
    { label: 'IK1.1', data: [82, null, null, null, null, null, null, null, null, null, null, null], backgroundColor: '#007bff' },
    { label: 'IK1.2', data: [75, null, null, null, null, null, null, null, null, null, null, null], backgroundColor: '#007bff' },

    { label: 'IK2.1', data: [null, 70, null, null, null, null, null, null, null, null, null, null], backgroundColor: '#20c997' },
    { label: 'IK2.2', data: [null, 78, null, null, null, null, null, null, null, null, null, null], backgroundColor: '#20c997' },
    { label: 'IK2.3', data: [null, 83, null, null, null, null, null, null, null, null, null, null], backgroundColor: '#20c997' },

    { label: 'IK3.1', data: [null, null, 72, null, null, null, null, null, null, null, null, null], backgroundColor: '#e83e8c' },
    { label: 'IK3.2', data: [null, null, 76, null, null, null, null, null, null, null, null, null], backgroundColor: '#e83e8c' },

    { label: 'IK4.1', data: [null, null, null, 74, null, null, null, null, null, null, null, null], backgroundColor: '#6f42c1' },
    { label: 'IK4.2', data: [null, null, null, 79, null, null, null, null, null, null, null, null], backgroundColor: '#6f42c1' },

    { label: 'IK5.1', data: [null, null, null, null, 73, null, null, null, null, null, null, null], backgroundColor: '#17a2b8' },
    { label: 'IK5.2', data: [null, null, null, null, 77, null, null, null, null, null, null, null], backgroundColor: '#17a2b8' },

    { label: 'IK6.1', data: [null, null, null, null, null, 85, null, null, null, null, null, null], backgroundColor: '#007bff' },

    { label: 'IK7.1', data: [null, null, null, null, null, null, 80, null, null, null, null, null], backgroundColor: '#6610f2' },
    { label: 'IK7.2', data: [null, null, null, null, null, null, 84, null, null, null, null, null], backgroundColor: '#6610f2' },

    { label: 'IK8.1', data: [null, null, null, null, null, null, null, 78, null, null, null, null], backgroundColor: '#dc3545' },
    { label: 'IK8.2', data: [null, null, null, null, null, null, null, 82, null, null, null, null], backgroundColor: '#dc3545' },

    { label: 'IK9.1', data: [null, null, null, null, null, null, null, null, 75, null, null, null], backgroundColor: '#ffc107' },
    { label: 'IK9.2', data: [null, null, null, null, null, null, null, null, 79, null, null, null], backgroundColor: '#ffc107' },

    { label: 'IK10.1', data: [null, null, null, null, null, null, null, null, null, 76, null, null], backgroundColor: '#007bff' },
    { label: 'IK10.2', data: [null, null, null, null, null, null, null, null, null, 80, null, null], backgroundColor: '#007bff' },

    { label: 'IK11.1', data: [null, null, null, null, null, null, null, null, null, null, 82, null], backgroundColor: '#6c757d' },
    { label: 'IK11.2', data: [null, null, null, null, null, null, null, null, null, null, 85, null], backgroundColor: '#6c757d' },

    { label: 'IK12.1', data: [null, null, null, null, null, null, null, null, null, null, null, 88], backgroundColor: '#007bff' },
    { label: 'IK12.2', data: [null, null, null, null, null, null, null, null, null, null, null, 90], backgroundColor: '#007bff' }
];

new Chart(ctik3, {
    type: 'bar',
    data: {
        labels: [
            'CPL 1','CPL 2','CPL 3','CPL 4','CPL 5','CPL 6',
            'CPL 7','CPL 8','CPL 9','CPL 10','CPL 11','CPL 12'
        ],
        datasets: datasetsIK
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: true },
            datalabels: { display: false, anchor: 'end', align: 'top', color: '#000' }
        },
        scales: {
            y: {  beginAtZero: true, max: 100, title: { display: false, text: 'Nilai IK (%)' } },
            x: {  title: { display: false, text: 'CPL' } }
        }
    },
    plugins: [ChartDataLabels]
});
</script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-chart-matrix@1.2.0/dist/chartjs-chart-matrix.min.js"></script>
<script>
  const ctrr = document.getElementById('heatmapChart').getContext('2d');

  const cplLabelst = [
    'CPL 1','CPL 2','CPL 3','CPL 4','CPL 5','CPL 6',
    'CPL 7','CPL 8','CPL 9','CPL 10','CPL 11','CPL 12'
  ];

  const ikLabelst = [
    'IK1.1','IK1.2','IK2.1','IK2.2','IK2.3','IK3.1','IK3.2','IK4.1','IK4.2',
    'IK5.1','IK5.2','IK6.1','IK7.1','IK7.2','IK8.1','IK8.2','IK9.1','IK9.2',
    'IK10.1','IK10.2','IK11.1','IK11.2','IK12.1','IK12.2'
  ];

const ikToCPL = {
  'IK1.1': 0, 'IK1.2': 0,
  'IK2.1': 1, 'IK2.2': 1, 'IK2.3': 1,
  'IK3.1': 2, 'IK3.2': 2,
  'IK4.1': 3, 'IK4.2': 3,
  'IK5.1': 4,
  'IK5.2': [4, 6], // IK5.2 muncul di CPL 5 dan CPL 7
  'IK6.1': 5,
  'IK7.1': 6, 'IK7.2': 6,
  'IK8.1': 7, 'IK8.2': 7,
  'IK9.1': 8, 'IK9.2': 8,
  'IK10.1': 9, 'IK10.2': 9,
  'IK11.1': 10, 'IK11.2': 10,
  'IK12.1': 11, 'IK12.2': 11
};
  const ikValues = {
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

const matrixData = [];

// Loop IK
ikLabelst.forEach((ik, yIdx) => {
  const cplIndexes = ikToCPL[ik]; // sekarang bisa array kalau lebih dari satu CPL
  const value = ikValues[ik];

  if (Array.isArray(cplIndexes)) {
    cplIndexes.forEach(xIdx => {
      matrixData.push({
        x: xIdx,
        y: yIdx,
        v: value,
        backgroundColor: value !== undefined ? '#007bff' : 'transparent',
        borderColor: '#fff',
        borderWidth: 1
      });
    });
  } else {
    matrixData.push({
      x: cplIndexes,
      y: yIdx,
      v: value,
      backgroundColor: value !== undefined ? '#007bff' : 'transparent',
      borderColor: '#fff',
      borderWidth: 1
    });
  }
});
  new Chart(ctrr, {
    type: 'matrix',
    data: {
      datasets: [{
        label: 'Heatmap IK x CPL',
        data: matrixData,
        width: ({chart}) => (chart.chartArea || {}).width / cplLabelst.length * 0.5,
        height: ({chart}) => (chart.chartArea || {}).height / ikLabelst.length * 0.5
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { display: false },
        tooltip: {
          callbacks: {
            title: () => '',
            label: (item) => `${ikLabelst[item.raw.y]} - ${cplLabelst[item.raw.x]}: ${item.raw.v}`
          }
        },
        title: { display: true, text: 'Heatmap IK x CPL' }
      },
      scales: {
        x: {
          type: 'linear',
          min: 0,
          max: 11,
          ticks: {
            stepSize: 1,
            callback: val => cplLabelst[val] || ''
          },
          title: { display: false, text: 'CPL' },
          grid: { offset: false }
        },
        y: {
          type: 'linear',
          min: 0,
          max: 24,
          ticks: {
            stepSize: 1,
            callback: val => ikLabelst[val] || ''
          },
          title: { display: false, text: 'IK' },
          grid: { offset: false }
        }
      }
    }
  });
  </script>

      

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
    <?php include('5script.php'); ?>
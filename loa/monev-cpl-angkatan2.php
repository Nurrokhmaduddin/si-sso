<?php $page = 'monev_angkatan'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev CPL Angkatan
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
          <div class="card">
            <!-- <div class="card-header">
              <h5 class="card-title mb-0"><i class="fas fa-filter "></i> Judul Tabel yang terdampak tombol aksi ini </h5>              
            </div> -->
            <div class="card-body ">
              <div class="row">
<div class="col-md-6">
                  <b>Kurikulum:</b> 2023 &nbsp;
                </div>                
                <div class="col-md-6">
                <b>Set Pemetaan:</b> KT-6 (K20) Kurikulum 2025 full stage &nbsp;
              </div>
              
              <div class="col-md-5">
                <b>Angkatan :</b> 2024 
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
            <div class="kpi " style="background:#ff7f0e;">
              <div class="small">Pemerataan Ketercapaian CPL</div>
              <div class="big" id="kpiGap">Gap 30% | 0.56</div>
              <div class="small">Kategori: Cukup Stabil</div>
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

        <!-- ========== CARD : Tabel pemerataan target CPL ========== -->
        <div class="card">
  <div class="card-body">
    <table class="table table-hover table-bordered table-sm">
      <thead style="background-color: #f2f2f2;">
        <tr>
          <th>Indikator</th>
          <th>Nilai</th>
          <th>Keterangan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>CPL Tertinggi</td>
          <td>85%</td>
          <td>Persentase mahasiswa mencapai tuntas pada CPL 1</td>
        </tr>
        <tr>
          <td>CPL Terendah</td>
          <td>50%</td>
          <td>Persentase mahasiswa mencapai tuntas pada CPL 8</td>
        </tr>
        <tr>
          <td>Gap (Selisih)</td>
          <td>30%</td>
          <td>Selisih antara CPL tertinggi dan terendah</td>
        </tr>
        <tr>
          <td>CPL Batas Standar</td>
          <td>80%</td>
          <td>Persentase mahasiswa mencapai tuntas pada CPL tersebut</td>
        </tr>
        <tr>
          <td>Indeks Pemerataan</td>
          <td>0.56</td>
          <td>Dihitung sebagai 1 - (Gap / Batas Standar)</td>
        </tr>
        <tr>
          <td>Kategori Stabilitas</td>
          <td style="color: orange; font-weight: bold;">Cukup Stabil</td>
          <td>Indeks 0.50 – 0.64</td>
        </tr>
      </tbody>
      <tfoot style="background-color: #f9f9f9; font-weight: bold;">
        <tr>
          <td colspan="3">
            <i>Interpretasi:</i> Kesenjangan ketercapaian antar CPL sebesar 30% menunjukkan adanya ketimpangan kompetensi pada angkatan ini. 
            Dengan Indeks Pemerataan sebesar 0.56, profil kompetensi mahasiswa tergolong cukup stabil namun masih memerlukan upaya perbaikan untuk meningkatkan pemerataan antar CPL.
          </td>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
        <!-- ========== CARD : Tabel ketuntasan tiap CPL ========== -->
        <div class="card">
          <div class="card-body">
            <table class="table table-hover table-bordered table-sm">
              <thead style="background-color: #f2f2f2;">
                <tr>
                  <th>CPL</th>
                  <th>Rerata Skor</th>
                  <th>% Mahasiswa Tuntas (>60)</th>
                  <th>Status Standar (>80%)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>CPL 1</td>
                  <td>82</td>
                  <td>85%</td>
                  <td style="color: green; font-weight: bold;">Memenuhi</td>
                </tr>
                <tr>
                  <td>CPL 2</td>
                  <td>80</td>
                  <td>81%</td>
                  <td style="color: green; font-weight: bold;">Memenuhi</td>
                </tr>
                <tr>
                  <td>CPL 3</td>
                  <td>79</td>
                  <td>82%</td>
                  <td style="color: green; font-weight: bold;">Memenuhi</td>
                </tr>
                <tr>
                  <td>CPL 4</td>
                  <td>83</td>
                  <td>84%</td>
                  <td style="color: green; font-weight: bold;">Memenuhi</td>
                </tr>
                <tr>
                  <td>CPL 5</td>
                  <td>78</td>
                  <td>80%</td>
                  <td style="color: green; font-weight: bold;">Memenuhi</td>
                </tr>
                <tr>
                  <td>CPL 6</td>
                  <td>81</td>
                  <td>81%</td>
                  <td style="color: green; font-weight: bold;">Memenuhi</td>
                </tr>
                <tr>
                  <td>CPL 7</td>
                  <td>77</td>
                  <td>80%</td>
                  <td style="color: green; font-weight: bold;">Memenuhi</td>
                </tr>
                <tr>
                  <td>CPL 8</td>
                  <td>72</td>
                  <td>61%</td>
                  <td style="color: red; font-weight: bold;">Tidak Memenuhi</td>
                </tr>
                <tr>
                  <td>CPL 9</td>
                  <td>70</td>
                  <td>50%</td>
                  <td style="color: red; font-weight: bold;">Tidak Memenuhi</td>
                </tr>
                <tr>
                  <td>CPL 10</td>
                  <td>74</td>
                  <td>67%</td>
                  <td style="color: red; font-weight: bold;">Tidak Memenuhi</td>
                </tr>
              </tbody>
              <tfoot style="background-color: #f9f9f9; font-weight: bold;">
                <tr>
                  <td colspan="4">
                    <i>Sebanyak</i> 7 dari 10 CPL (70%) <i>memenuhi standar, dengan kriteria bahwa minimal 80% mahasiswa pada angkatan mencapai skor ≥75 pada masing-masing CPL tersebut.</i>
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>


<!-- ========== CARD 4: Chart CPL-IK ========== -->     
        <div class="card">   
          <!-- CARD HEADER -->  
          <div class="card-header ">         
            <h5 class="card-title mb-0">
              <!-- <button class="btn btn-sm btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#chartCPLIK1">
                <i class="fas fa-expand"></i>
              </button> -->
              <i class="fas fa-chart-bar me-2"></i>
              CPL angkatan terpilih
            </h5>
          </div>
          <!-- CARD BODY -->
          <div class="card-body " id="chartCPLIK1">
            <!-- Chart Container -->
            <div class="chart-container">
              <canvas id="chartCPL1" width="100%" height="30"></canvas>
            </div>
            
          </div> 
          <div class="card-footer">
            <i>Interpretasi:</i> garis merah adalah batas target CPL
          </div>         
        </div>

         <!-- ========== CARD 4: Chart CPL-IK ========== -->     
        <div class="card">   
          <!-- CARD HEADER -->  
          <div class="card-header ">         
            <h5 class="card-title mb-0">
              <button class="btn btn-sm btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#chartCPLIK2">
                <i class="fas fa-expand"></i>
              </button>
              CPL 1 – Kemampuan untuk menginternalisasi semangat kemandirian dan Kewirausahaan
            </h5>
          </div>
          <!-- CARD BODY -->
          <div class="card-body " >
            <!-- Chart Container -->
            <div class="chart-container">
              <canvas id="chartCPL2" width="100%" height="30"></canvas>
            </div>
          </div>
          <!-- CARD FOOTER -->
          <div class="card-footer collapse" id="chartCPLIK2">
            <h6 class="font-weight-bold">Daftar Indikator Kinerja (IK)</h6>
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
                    <td>IK 5</td>
                    <td>Mahasiswa mampu menyampaikan informasi secara lisan secara runtut, jelas, dan mudah dipahami.</td>
                  </tr>
                  <tr>
                    <td>IK 6</td>
                    <td>Mahasiswa mampu menulis laporan/tulisan akademik sesuai kaidah bahasa dan struktur penulisan yang baik.</td>
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
          Ringkasan capaian CPL per Kelompok Mahasiswa, perkembangan, peringatan dini (EWS), disajikan dalam bentuk grafik dan tabel (Mockup data statis)
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
        label: 'Batas Standar (> 80%)',
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
        label: '% Mahasiswa Tuntas (≥ 60)',
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
                const ctx2 = document.getElementById("chartCPL2");

                new Chart(ctx2, {
                  type: 'bar',
                  data: {
                    labels: ['IK 4', 'IK 5',  'CPL2'],
                    datasets: [
                      {
                        label: 'Rerata CPL',
                        data: [82, 75,  81.66],
                        backgroundColor: '#6c757d',
                        borderColor: '#6c757d',
                        borderWidth: 1
                      },
                      {
                        label: '% Mahasiswa Tuntas (≥ 60)',
                        data: [90, 80, 87.33],
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
                            yMin: 85,      // <<< TARGET CAPAIAN
                            yMax: 85,
                            borderColor: 'red',
                            borderWidth: 2,
                            borderDash: [6, 6],
                            label: {
                              display: true,
                              content: 'Target 85',
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
                        beginAtZero: true
                      }
                    }
                  }
                });


              </script>
<?php include('5script.php'); ?>
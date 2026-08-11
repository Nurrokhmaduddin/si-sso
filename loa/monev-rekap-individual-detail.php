<?php $page = 'monev_individu'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev CPL Individu
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
            <div class="card-body ">
              <table class="table table-sm table-hover table-bordered table-striped deta">
                <tbody>
                  <tr>
                    <td width="30%"><b> Kurikulum</b></td>
                    <td>2023</td>
                  </tr>
                  <tr>
                    <td width="30%"><b> Set Pemetaan:</b></td>
                    <td>Peta v1.0</td>
                  </tr>
                  <tr>
                    <td width="30%"><b> Mahasiswa</b></td>
                    <td>VEGA AYU CENTYA (20521098)</td>
                  </tr>
                  <tr>
                    <td width="30%"><b> Angkatan</b></td>
                    <td>2024</td>
                  </tr>
                  <tr>
                    <td width="30%"><b> Status</b></td>
                    <td>Aktif</td>
                  </tr>

                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button type="button" class="btn btn-outline-secondary btn-sm" onclick="window.location.href='monev-rekap-individual-.php'">
                  <i class="fas fa-reply me-1"></i> Kembali
                </button>
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-search me-1"></i> Pencarian
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm" onclick="window.location='data-cpl-individual.pdf'">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>   
              </div>
            </div>
          </div>


  <!-- TAB NAV  -->
  <ul class="nav nav-tabs">   
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail.php'"><a class="nav-link active">Grafik</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail2.php'"><a class="nav-link ">Tabel</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail4.php'"><a class="nav-link ">Riwayat CPL</a></li>
    <!-- <li class="nav-item" onclick="window.location='monev-rekap-individual-detail5.php'"><a class="nav-link ">Riwayat IK</a></li> -->
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail3.php'"><a class="nav-link ">Riwayat MK</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail6.php'"><a class="nav-link "> KHS</a></li>
    <!-- <li class="nav-item" onclick="window.location='monev-rekap-individual-detail7.php'"><a class="nav-link ">IPK</a></li> -->
  </ul>





<!-- ========== CARD 4:  Grafik Radar CPL & Progress ========== --> 

<div class="card p-3">
  <div class="row g-2 align-items-stretch">

    <!-- KIRI: Radar -->
    <div class="col-lg-4 d-flex">
      <div class="chart-box w-100 h-100 d-flex">
        <div style="position:relative; width:100%; height:100%;">
          <canvas id="radarCPL"></canvas>
        </div>
      </div>
    </div>

    <!-- KANAN: Bar -->
    <div class="col-lg-8 d-flex">
      <div class="chart-box w-100 h-100 d-flex flex-column">

        <div class="flex-grow-1" style="position:relative;">
          <canvas id="chartIKG"></canvas>
        </div>

      </div>
    </div>

  </div>
</div>


<!-- ============ card : tabel deskripsi CPL ====== -->
<div class="card"> 
  <div class="card-header"> 
    <h5>Rekapitulasi Capaian CPL</h5> 
  </div> 
  <div class="card-body"> 
    <table class="table table-sm table-bordered table-striped">
      <thead> 
        <tr> 
          <th width="5%">CPL</th> <th width="75%">Deskripsi</th> <th width="20%">Capaian Akhir</th> 
        </tr> 
      </thead> 
      <tbody> 
        <tr> 
          <td>1</td> <td>Mampu menunjukkan sikap ketakwaan kepada Tuhan yang Maha Esa dengan menjalankan syariat-Nya, menjunjung nilai keislaman dan keIndonesian, serta mengintegrasikan islam dalam bidang ilmu Teknik elektro</td> <td>75.74</td> 
        </tr> 
        <tr> 
          <td>2</td> <td>Kemampuan untuk menerapkan matematika, ilmu pengetahuan alam dan/atau material, teknologi informasi dan keteknikan untuk mendapatkan pemahaman yang menyeluruh mengenai prinsip-prinsip teknik elektro</td> <td>76.4</td> 
        </tr> 
        <tr> 
          <td>3</td> <td>Kemampuan untuk mendesain komponen, sistem, dan/atau proses untuk memenuhi kebutuhan bidang teknik elektro dalam batasan realistis dengan memanfaatkan potensi sumber daya lokal dan nasional dalam perspektif global</td> <td>75.45</td> 
        </tr> 
        <tr> 
          <td>4</td> <td>Kemampuan untuk mendesain dan melaksanakan eksperimen laboratorium dan/atau lapangan serta menganalisis dan mengartikan data untuk memperkuat penilaian teknik</td> <td>74.58</td> 
        </tr> 
        <tr> 
          <td>5</td> <td>Kemampuan untuk mengindentifikasi, memformulasikan, menganalisa, dan memecahkan masalah teknik elektro</td> <td>69.73</td> 
        </tr> 
        <tr> 
          <td>6</td> <td>Kemampuan untuk mengaplikasikan metode, keahlian, dan piranti modern yang diperlukan untuk praktik teknik elektro</td> <td>65.69</td> 
        </tr> 
        <tr> 
          <td>7</td> <td>Kemampuan untuk berkomunikasi secara efektif secara lisan dan tulisan</td> <td>74.6</td> 
        </tr> 
        <tr> 
          <td>8</td> <td>Kemampuan untuk merencanakan, menyelesaikan, dan mengevaluasi tugas dalam batasan yang telah ditentukan</td> <td>70.6</td> 
        </tr> 
        <tr> 
          <td>9</td> <td>Kemampuan untuk bekerja dalam tim multidisiplin dan multikultural secara inklusif</td> <td>55.42</td> 
        </tr> 
        <tr> 
          <td>10</td> <td>Kemampuan untuk akuntabel dan bertanggungjawab kepada masyarakat serta mengikuti etika profesional dalam menyelesaikan masalah keteknikan</td> <td>30.96</td> 
        </tr> 
         <tr> 
          <td>11</td> <td>Kemampuan untuk akuntabel dan bertanggungjawab kepada masyarakat serta mengikuti etika profesional dalam menyelesaikan masalah keteknikan</td> <td>23.96</td> 
        </tr> 
         <tr> 
          <td>12</td> <td>Kemampuan untuk akuntabel dan bertanggungjawab kepada masyarakat serta mengikuti etika profesional dalam menyelesaikan masalah keteknikan</td> <td>88.00</td> 
        </tr> 
      </tbody> 
    </table> 
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
        <h5 class="modal-title" id="modalFilterLabel"> Pencarian Mahasiswa</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="" method="GET">

        <div class="modal-body">

          <!-- Informasi -->
          <div class="alert alert-info mb-3" role="alert" style="font-size: 0.9rem;">
            <b>Informasi:</b> Masukkan NIM mahasiswa yang ingin dicari. 
            Anda dapat mengisi sebagian NIM untuk pencarian lebih fleksibel.
          </div>

          <div class="mb-3">
            <label for="nim" class="form-label">NIM Mahasiswa</label>
            <input 
              type="text" 
              name="nim" 
              id="nim" 
              class="form-control" 
              placeholder="Contoh: 20231001"
              value="<?= isset($_GET['nim']) ? htmlspecialchars($_GET['nim']) : '' ?>"
            >
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Batal
          </button>
          <button type="submit" class="btn btn-info">
             Cari 
          </button>
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



generateBarChart("chartIK", ikLabels, ikAverages, "Capaian IK, grouping per CPL", {
    bg: "rgba(255, 159, 64, 0.7)", border: "rgb(255, 159, 64)"     // oranye
});

generateBarChart("chartCPMK", cpmkLabels, cpmkAverages, "Capaian CPMK", {
    bg: "rgba(255, 99, 132, 0.7)", border: "rgb(255, 99, 132)"     // merah
});

generateBarChart("chartMK", mkLabels, mkAverages, "Capaian MK", {
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
// ----- Radar CPL -----
  const radarCtx = document.getElementById('radarCPL').getContext('2d');
  const radarCPL = new Chart(radarCtx, {
    type: 'radar',
    data: {
      labels: ['CPL 1', 'CPL 2', 'CPL 3', 'CPL 4', 'CPL 5', 'CPL 6', 'CPL 7', 'CPL 8', 'CPL 9', 'CPL 10', 'CPL 11', 'CPL 12'],
      datasets: [{
        label: 'Capaian CPL',
        data: [80, 90, 75, 85, 88,65, 67, 70, 55, 30, 23,88],
            // Warna hijau lembut (lebih nyaman di mata)
        backgroundColor: 'rgba(80, 200, 120, 0.35)',
        borderColor: 'rgba(60, 160, 95, 0.9)',
        borderWidth: 2,
        pointBackgroundColor: 'rgba(60, 160, 95, 1)'
      }]
    },
    options: {
      responsive: false,
      maintainAspectRatio: false,
      scales: {
        r: {
          min: 0,
          max: 100,
          ticks: {
          display: false // ❌ sembunyikan angka skala
        },
        pointLabels: {
          padding: -5 // 🔽 dekatkan label ke radar
        }
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

<!-- Modal: Detail MK Student -->
<div class="modal fade" id="modalStudentMK" tabindex="-1" aria-labelledby="modalStudentMKLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- HEADER -->
      <div class="modal-header bg-info text-white py-2">
        <h6 class="modal-title mb-0" id="modalStudentMKLabel">
          <i class="fas fa-book-open me-2"></i> Detail MK Student
        </h6>
        <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- BODY -->
      <div class="modal-body small pb-1">

        <!-- INFORMASI UMUM -->
        <div class="mb-3">
          <dl class="row mb-0">
            <dt class="col-4">Set Pemetaan</dt>
            <dd class="col-8" id="mkSetPemetaan">SKO 24</dd>

            <dt class="col-4">NIM</dt>
            <dd class="col-8" id="mkNim">129873691</dd>

            <dt class="col-4">Mata Kuliah</dt>
            <dd class="col-8" id="mkNamaMk">SKS119 Pengantar Pancasila</dd>
          </dl>
        </div>

        <!-- INFORMASI DETAIL -->
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-sm mb-0">
            <thead class="text-center bg-light">
              <tr class="text-uppercase small">
                <th>Periode</th>
                <th>Angka</th>
                <th>Huruf</th>
                <th>CPMK 1</th>
                <th>Perb. 1</th>
                <th>CPMK 2</th>
                <th>Perb. 2</th>
                <th>CPMK 3</th>
                <th>Perb. 3</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>2021/2022 Genap</td>
                <td>71</td>
                <td>B+</td>
                <td>76</td>
                <td></td>
                <td>78</td>
                <td></td>
                <td>67</td>
                <td></td>
              </tr>
              <tr>
                <td>2020/2021 Genap</td>
                <td>56</td>
                <td>D+</td>
                <td>58</td>
                <td>69</td>
                <td>59</td>
                <td>69</td>
                <td>70</td>
                <td>70</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- FOOTER -->
      <div class="modal-footer py-2">
        <button class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
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
      'IK2.1':98,'IK2.2':78,'IK2.3':83,
      'IK3.1':72,'IK3.2':76,
      'IK4.1':85,'IK4.2':84,
      'IK5.1':88,'IK5.2':92,
      'IK6.1':65,
      'IK7.1':67,'IK7.2':67,
      'IK8.1':72,'IK8.2':68,
      'IK9.1':55,'IK9.2':53,
      'IK10.1':32,'IK10.2':28,
      'IK11.1':20,'IK11.2':25,
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
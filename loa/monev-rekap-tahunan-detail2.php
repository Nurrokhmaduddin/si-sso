<?php $page = 'monev_tahunan'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev Setahun
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
          <div class="card">
            <div class="card-body ">
                  <!-- Identitas Mata Kuliah -->
    <h6><b>Identitas IK</b></h6>
    <table class="table table-sm table-hover table-bordered table-striped deta">
      <tr>
        <th>Kurikulum</th>
        <td>Merdeka Belajar</td>
      </tr>
      <tr>
        <th>Tahun Akademik</th>
        <td>2024/2025</td>
      </tr>
      <tr>
        <th style="width:200px;">Kode CPL</th>
        <td>IK 1</td>
      </tr>
      <tr>
        <th>Deskripsi</th>
        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</td>
      </tr>
     
      <tr>
        <th>Jumlah CPMK</th>
        <td>3</td>
      </tr>
    </table>
            </div>
            <div class="card-footer">
              <div class="card-tools ml-auto">
                <button type="button" class="btn btn-outline-secondary btn-sm" onclick="window.location.href='monev-rekap-tahunan-.php'">
                  <i class="fas fa-reply mr-1"></i> Kembali
                </button>    
                <a class="btn btn-sm btn-outline-primary" href="formulir-evaluasi.php" target="_blank"><i class="fas fa-clipboard-list mr-1"> </i>Catat Temuan </a> 
              </div>
            </div>
          </div>

    
<!-- ========== CARD : Detail info per Mata Kuliah ========== -->
<div class="card shadow-sm">
 <!--  <div class="card-header bg-info text-white">
    <h5 class="mb-0">Detail info per CPL</h5>
  </div> -->

  <div class="card-body">

    <canvas id="chartCPL1" width="100%" height="30"></canvas>
    <h6 class="font-weight-bold">Daftar Capaian Pembelajaran Mata Kuliah (CPMK)</h6>

    <div class="table-responsive">
      <table class="table table-sm table-bordered">
        <thead class="thead-dark">
          <tr>
            <th style="width: 80px;">Kode </th>
            <th>Deskripsi </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td> STS900-2</td>
            <td>Mahasiswa mampu menyampaikan informasi secara lisan secara runtut, jelas, dan mudah dipahami.</td>
          </tr>
          <tr>
            <td> STS544-2</td>
            <td>Mahasiswa mampu menulis laporan/tulisan akademik sesuai kaidah bahasa dan struktur penulisan yang baik.</td>
          </tr>
          <tr>
            <td> UKU111-2</td>
            <td>Mahasiswa mampu menulis laporan/tulisan akademik sesuai kaidah bahasa dan struktur penulisan yang baik.</td>
          </tr>

        </tbody>
      </table>
    </div>
    
  </div>
</div>
<div class="card bg-warning">
<div class="card-body">
  Perlukah untuk detailkan per CPMK, dari Matakuliah mana saja, dan bagaimaan capaian di mata kuliah tersebut?
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
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
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
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>
          Ringkasan capaian CPL per Individu Mahasiswa, perkembangan, peringatan dini (EWS), disajikan dalam bentuk grafik dan tabel (Mockup data statis)
        </p>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Chart Script -->
<script>
const ctx = document.getElementById("chartCPL1");

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['STS900-2', 'STS544-2', 'UKU111-2', 'IK 1'],
        datasets: [{
            label: 'Capaian',
            data: [90, 80, 92, 87.33], // satu periode saja
            backgroundColor: [
                '#6c757d', // IK 1 (abu-abu)
                '#6c757d', // IK 2
                '#6c757d', // IK 3
                '#007bff'  // CPL (biru)
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
            // annotation: {
            //     annotations: {
            //         targetLine: {
            //             type: 'line',
            //             yMin: 85,
            //             yMax: 85,
            //             borderColor: 'red',
            //             borderWidth: 2,
            //             borderDash: [6, 6],
            //             label: {
            //                 display: true,
            //                 content: 'Target 85',
            //                 position: 'start',
            //                 color: 'red',
            //                 backgroundColor: 'rgba(255,255,255,0.7)',
            //                 padding: 4
            //             }
            //         }
            //     }
            // }
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
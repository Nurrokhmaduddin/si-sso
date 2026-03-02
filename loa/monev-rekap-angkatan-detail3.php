<?php $page = 'monev_angkatan'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev Angkatan
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
                  <!-- Identitas Mata Kuliah -->
    <h6><b>Identitas Angkatan [Satu IK]</b></h6>
    <table class="table table-sm table-hover table-bordered table-striped deta">
      <tr>
        <th>Kurikulum</th>
        <td>Merdeka Belajar</td>
      </tr>
      <tr>
        <th>Angkatan</th>
        <td>2024</td>
      </tr>
      <tr>
        <th>Periode Semester</th>
        <td>sem3 [2025/2026 - Ganjil]</td>
      </tr>
      <tr>
        <th style="width:200px;">Kode CPL</th>
        <td>IK 4</td>
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
        <td>4</td>
      </tr>
    </table>
            </div>
            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button type="button" class="btn btn-outline-secondary btn-sm" onclick="window.location.href='monev-rekap-angkatan-.php'">
                  <i class="fas fa-reply me-1"></i> Kembali
                </button>    
                <a class="btn btn-sm btn-outline-primary" href="formulir-evaluasi.php" target="_blank"><i class="fas fa-clipboard-list me-1"> </i>Catat Temuan </a> 
              </div>
            </div>
          </div>

<!-- ========== CARD : Detail info per Mata Kuliah ========== -->
<div class="card shadow-sm" id="detailIK1">
  <!-- <div class="card-header bg-info text-white">
    <h5 class="mb-0">Detail info per Periode Semester (each IK)</h5>
  </div> -->

  <div class="card-body">
    <canvas id="chartCPL4" width="100%" height="30"></canvas>

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
<!-- Tabel Perbandingan kelas-->
<h6><b>Perbandingan Capaian <i>Antar Angkatan</i></b> </h6>
<div class="table-responsive">
  <table class="table table-bordered table-striped table-sm text-center">
    <thead class="table-dark">
      <tr>
        <th>Angkatan</th>
        <th>STS900-2</th>
        <th>STS544-2</th>
        <th>UKU111-2</th>
        <th>IK 4</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <td>% CPL Angkatan 2022</td>
        <td>68</td>
        <td>70</td>
        <td>40</td>
        <td>74</td>
      </tr>

      <tr>
        <td>% CPL Angkatan 2023</td>
        <td>72</td>
        <td>69</td>
        <td>40</td>
        <td>76</td>
      </tr>

      <tr>
        <td>% CPL Angkatan 2024</td>
        <td>75</td>
        <td>71</td>
        <td>40</td>
        <td>80</td>
      </tr>

      <tr>
        <td>Perkembangan Tren</td>
        <td><span class="badge bg-success">Menaik</span></td>
        <td><span class="badge bg-warning text-dark">Fluktuatif</span></td>
        <td><span class="badge bg-secondary">Stagnan</span></td>
        <td><span class="badge bg-success">Menaik</span></td>
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

<script>
const ctx4 = document.getElementById("chartCPL4");

new Chart(ctx4, {
    type: 'bar',
    data: {
      labels: ['STS900-2', 'STS544-2','UKU111-2', 'IK 1'],

      datasets: [{
        label: '% Mahasiswa Tuntas',
        data: [90, 80, 88, 87.33],
        backgroundColor: [
                '#6c757d', // IK 4
                '#6c757d', // IK 5
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
            annotation: {
                annotations: {
                    targetLine: {
                        type: 'line',
                        yMin: 85,
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
                beginAtZero: true,
                max: 100
            }
        }
    }
});
</script>
<?php include('5script.php'); ?>
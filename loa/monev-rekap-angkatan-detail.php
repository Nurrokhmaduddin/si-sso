<?php $page = 'monev_angkatan'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev Angkatan
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
              <h6><b>Identitas Angkatan [Semua CPL]</b></h6>
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
              </table>
            </div>
            <div class="card-footer">
              <div class="card-tools ml-auto">
                <button type="button" class="btn btn-outline-secondary btn-sm" onclick="window.location.href='monev-rekap-angkatan-.php'">
                  <i class="fas fa-reply mr-1"></i> Kembali
                </button>    
                <a class="btn btn-sm btn-outline-primary" href="formulir-evaluasi.php" target="_blank"><i class="fas fa-clipboard-list mr-1"> </i>Catat Temuan </a> 
              </div>
            </div>
          </div>
<!-- ========== CARD : Detail info per Mata Kuliah ========== -->
<div class="card shadow-sm" id="detailallCPL">
  <!-- <div class="card-header bg-info text-white">
    <h5 class="mb-0">Detail info per Periode Semester (all CPL)</h5>
  </div>
 -->
  <div class="card-body">

    <canvas id="chartCPL1" width="100%" height="30" class="mb-4"></canvas>
   <!-- Tabel Perbandingan kelas-->
    <h6><b>Perbandingan %CPL <i>Antar Angkatan</i></b> </h6>
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm text-center">
        <thead class="table-dark">
          <tr>
            <th>Angkatan</th>
            <th>CPL 1</th>
            <th>CPL 2</th>
            <th>CPL 3</th>
            <th>CPL 4</th>
            <th>CPL 5</th>
            <th>CPL 6</th>
            <th>CPL 7</th>
            <th>CPL 8</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>% CPL Angkatan 2022</td>
            <td>68</td>
            <td>70</td>
            <td>74</td>
            <td>78</td>
            <td>80</td>
            <td>83</td>
            <td>85</td>
            <td>87</td>
          </tr>

          <tr>
            <td>% CPL Angkatan 2023</td>
            <td>72</td>
            <td>69</td>
            <td>76</td>
            <td>75</td>
            <td>82</td>
            <td>85</td>
            <td>82</td>
            <td>89</td>
          </tr>

          <tr>
            <td>% CPL Angkatan 2024</td>
            <td>75</td>
            <td>71</td>
            <td>80</td>
            <td>75</td>
            <td>79</td>
            <td>88</td>
            <td>78</td>
            <td>90</td>
          </tr>

          <tr>
            <td>Perkembangan Tren</td>
            <td><span class="badge-success">Menaik</span></td>
            <td><span class="badge-warning text-dark">Fluktuatif</span></td>
            <td><span class="badge-success">Menaik</span></td>
            <td><span class="badge-secondary">Stagnan</span></td>
            <td><span class="badge-warning text-dark">Fluktuatif</span></td>
            <td><span class="badge-success">Menaik</span></td>
            <td><span class="badge-danger">Menurun</span></td>
            <td><span class="badge-success">Menaik</span></td>
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
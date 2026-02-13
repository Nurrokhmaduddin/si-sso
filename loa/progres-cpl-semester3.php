<?php $page = 'progress_cpl'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Daftar Nilai Pembangun IK
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
                <b>Set Pemetaan:</b> KT-6 (K20) Kurikulum 2025 full stage &nbsp;
              </div>
              <div class="col-md-6">
                <b>Periode Akademik:</b> 2025/2026 Ganjil- Semua
              </div>
              <div class="col-md-6">
                <b>Periode A:</b> 2024-Genap
              </div>
              <div class="col-md-6">
                <b>Periode B:</b> 2025-Genap
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
              </div>

            </div>
          </div>

        
   

  <!-- TAB NAV  -->
  <ul class="nav nav-tabs">   
    <li class="nav-item" onclick="window.location='progres-cpl-semester.php'"><a class="nav-link ">CPL</a></li>
    <li class="nav-item" onclick="window.location='progres-cpl-semester2.php'"><a class="nav-link ">IK</a></li>
    
  </ul>

<!-- ========== CARD : identitas mata kuliah & periodenya ========== -->
<div class="card mb-2">
  <div class="card-header bg-primary text-white">
    <h5 class="mb-0"><i class="fas fa-info-circle me-2"></i> Informasi Mata Kuliah</h5>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-12">
        <table class="table table-sm table-hover table-bordered table-striped deta">
          <tbody>
            <tr>
              <td width="35%"><b>Kurikulum</b></td>
              <td>kurikulum 2025</td>
            </tr>
            <tr>
              <td width="35%"><b>Set Pemetaan</b></td>
              <td>Full Stage</td>
            </tr>
            <tr>
              <td width="35%"><b>Periode Akademik</b></td>
              <td>2024/2025 - Semester Genap</td>
            </tr>                      
            <tr>
              <td><b>Mata Kuliah</b></td>
              <td>Teknologi Polimer dan Komposit - (MTK907)</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>


<!-- ========== CARD : Penilaian Mata Kuliah di semua kelas pada periode tertentu ========== -->
<div class="card mb-4">
  <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
    
    <!-- Judul -->
    <h5 class="mb-0">
      <i class="fas fa-check-circle me-2"></i>
      Daftar Penilaian Mata Kuliah di semua kelas perkuliahan
    </h5>

    <!-- Keterangan -->
    <small class="bg-warning text-dark px-2 py-1 rounded">
      Nilai Remidi
    </small>

  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-sm table-hover table-bordered table-striped deta">
        <!-- THEAD -->
        <thead class="table-dark text-center">
         <tr class="bg-bllg" align="center" >
          <!-- <th rowspan="2" style="vertical-align: middle;">Periode</th> -->
          <th rowspan="2" style="vertical-align: middle;">Mahasiswa</th>
          <th rowspan="2" style="vertical-align: middle;">Nilai Akhir <br>(Angka)</th>
          <th colspan="15">Nilai CPMK</th>
          </tr>
          <tr class="bg-bllg" align="center">                        
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
            <th>n</th>
          </tr>
        </thead>
        <!-- TBODY -->
        <tbody>
          <tr>
            <td colspan="17" class="bg-secondary" align="center">Kelas A - Dosen Pengampu XYZ</td>
          </tr>
          <tr>
            <!-- <td>2023/2024 Genap</td> -->
            <td>NIM Mahasiswa 1</td>    
            <td align="center">78</td>
            <td>68</td>
            <td>72</td>
            <td class="bg-warning">74</td>
            <td>58</td>
            <td>67</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <!-- <td>2023/2024 Genap</td> -->
            <td>NIM Mahasiswa 2</td>    
            <td align="center">88</td>
            <td>88</td>
            <td>72</td>
            <td>74</td>
            <td>68</td>
            <td>89</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td colspan="17" class="bg-secondary" align="center">Kelas B - Dosen Pengampu CCC</td>
          </tr>
          <tr>
            <!-- <td>2023/2024 Gasal</td> -->
            <td>NIM Mahasiswa 3</td>    
            <td align="center">78</td>
            <td>78</td>
            <td>62</td>
            <td>64</td>
            <td>58</td>
            <td class="bg-warning">79</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <!-- <td>2023/2024 Gasal</td> -->
            <td>NIM Mahasiswa 5</td>    
            <td align="center">78</td>
            <td>78</td>
            <td>62</td>
            <td>64</td>
            <td>58</td>
            <td class="bg-warning">79</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <!-- <td>2023/2024 Gasal</td> -->
            <td>NIM Mahasiswa 6</td>    
            <td align="center">78</td>
            <td>78</td>
            <td>62</td>
            <td>64</td>
            <td>58</td>
            <td class="bg-warning">79</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <!-- <td>2023/2024 Gasal</td> -->
            <td>NIM Mahasiswa 4</td>    
            <td align="center">78</td>
            <td>78</td>
            <td>62</td>
            <td>64</td>
            <td>58</td>
            <td class="bg-warning">79</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td colspan="17" class="bg-secondary" align="center">Kelas D - Dosen Pengampu POP</td>
          </tr>
          <tr>
            <!-- <td>2022/2023 Genap</td> -->
            <td>NIM Mahasiswa 12</td>    
            <td align="center">78</td>
            <td>78</td>
            <td>62</td>
            <td>64</td>
            <td>58</td>
            <td class="bg-warning">79</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
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
          Perhitungan Capaian Pembelajaran Lulusan (CPL) dilakukan memperbandingkan 2 waktu periode.
          Ambil nilai CPMK dari periode A dan Periode B, bentuk nilai IKnya. abaikan faktor angkatan mahasiswa. fokuskan pada kelas perkuliahan di Periode A dan Periode B. Fungsinya untuk membandingkan pencapaian IK antara dua periode.
        </p>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>



<?php include('5script.php'); ?>
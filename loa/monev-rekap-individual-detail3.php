<?php $page = 'monev_individu'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Monev CPL Individu
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
            <!-- <div class="card-header">
              <h5 class="card-title mb-0"><i class="fas fa-filter "></i> Judul Tabel yang terdampak tombol aksi ini </h5>              
            </div> -->
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
              <div class="card-tools ml-auto">
                <button type="button" class="btn btn-outline-secondary btn-sm" onclick="window.location.href='monev-rekap-individual-.php'">
                  <i class="fas fa-reply mr-1"></i> Kembali
                </button>
                <button class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#modalFilter">
                  <i class="fas fa-search mr-1"></i> Pencarian
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download mr-1"></i> Export
                </button>   
              </div>

            </div>
          </div>

        
  <!-- ========== CARD 3: KPI row ========== --> 
  <!-- <style>
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
        <div class="small">Rata-rata IK</div>
        <div class="big" id="kpiGap">85 </div>
        <div class="small">dari 24 IK</div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="kpi" style="background:#ff7f0e;">
        <div class="small">Rata-rata CPMK</div>
        <div class="big" id="kpiReached">78</div>
        <div class="small">dari 258</div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="kpi bg-danger">
        <div class="small">Rata-rata Nilai Akhir MK</div>
        <div class="big" id="kpiRisk">78</div>
        <div class="small">dari 78 MK</div>
      </div>
    </div>
  </div> -->

<!-- TAB NAV  -->
  <ul class="nav nav-tabs">   
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail.php'"><a class="nav-link ">Grafik</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail2.php'"><a class="nav-link ">Tabel</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail4.php'"><a class="nav-link ">Riwayat CPL</a></li>
    <!-- <li class="nav-item" onclick="window.location='monev-rekap-individual-detail5.php'"><a class="nav-link ">Riwayat IK</a></li> -->
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail3.php'"><a class="nav-link active">Riwayat MK</a></li>
    <li class="nav-item" onclick="window.location='monev-rekap-individual-detail6.php'"><a class="nav-link "> KHS</a></li>
    <!-- <li class="nav-item" onclick="window.location='monev-rekap-individual-detail7.php'"><a class="nav-link ">IPK</a></li> -->
  </ul>




<!-- ========== CARD 4:  Tabel CPL & Progress ========== --> 
          <div id="tab_1">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0"><i class="fas fa-calendar-alt mr-2"></i> Penempuhan Mata Kuliah</h5>
                <div class="card-tools">
                  <small class="text-muted">warna kuning adalah nilai dari perbaikan</small>
                </div>
              </div>
              <div class="card-body p-0">

                <div class="table-responsive">
                  <table class="table table-sm table-hover table-bordered table-striped deta">
                    <!-- THEAD -->
                    <thead class="table-dark text-center">
                     <tr align="center" >
                      <!-- <th rowspan="2" style="vertical-align: middle;">Periode</th> -->
                      <th rowspan="2" style="vertical-align: middle;">Mata Kuliah</th>
                      <th rowspan="2" style="vertical-align: middle;">Nilai Akhir <br>(Angka)</th>
                      <th colspan="15">Nilai CPMK</th>
                    </tr>
                      <tr align="center">                        
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                        <th>11</th>
                        <th>12</th>
                        <th>13</th>
                        <th>14</th>
                        <th>n</th>
                      </tr>
                    </thead>
                    <!-- TBODY -->
                    <tbody>
                      <tr>
                        <td colspan="17" class="bg-secondary" align="center">2023/2024 Genap</td>
                      </tr>
                      <tr>
                        <!-- <td>2023/2024 Genap</td> -->
                        <td>STK912 Kalkulus 3</td>    
                        <td align="center">78</td>
                        <td>68</td>
                        <td>72</td>
                        <td class="bg-warning">74</td>
                        <td>58</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <!-- <td>2023/2024 Genap</td> -->
                        <td>STK732 Metode Penelitian</td>    
                        <td align="center">88</td>
                        <td>88</td>
                        <td>72</td>
                        <td>74</td>
                        <td>68</td>
                        <td>89</td>
                        <td>67</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="17" class="bg-secondary" align="center">2023/2024 Gasal</td>
                      </tr>
                      <tr>
                        <!-- <td>2023/2024 Gasal</td> -->
                        <td>STK732 Pengantar Penelitian</td>    
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <!-- <td>2023/2024 Gasal</td> -->
                        <td>STK432 Pengantar Bahasa Indonesia</td>    
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="17" class="bg-secondary" align="center">2022/2023 Gasal</td>
                      </tr>
                      <tr>
                        <!-- <td>2022/2023 Genap</td> -->
                        <td>STK111 Pendidikan Agama</td>    
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
          Ringkasan capaian CPL per Individu Mahasiswa, perkembangan, peringatan dini (EWS), disajikan dalam bentuk grafik dan tabel (Mockup data statis)
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
          <h5 class="modal-title" id="modalStudentLabel"><i class="fas fa-user-graduate mr-2"></i> Detil Mahasiswa</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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



<?php include('5script.php'); ?>
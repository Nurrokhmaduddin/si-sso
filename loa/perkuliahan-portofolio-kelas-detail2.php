<?php $page = 'portofolio_kelas'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Portofolio - Kelas Perkuliahan [lembar kerja dosen]
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
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
            <!-- <div class="card-header bg-secondary">
              <h5 class="card-title mb-0">
                <i class="fas fa-database"></i> Data Produk/Barang        
              </h5>
              <div class="card-tools ms-auto">
                               
              </div>
            </div> -->

            <div class="card-body ">
              <div class="row">   
                <div class="col-lg-7">
                  <table class="table table-sm table-hover table-bordered table-striped deta">
                    <tbody>
                      <tr>
                        <td width="30%"><b> Kurikulum</b></td>
                        <td>2023</td>
                      </tr>
                      <tr>
                        <td width="30%"><b> Periode Akademik</b></td>
                        <td>2024/2025 - Gasal</td>
                      </tr>
                      <tr>
                        <td width="30%"><b> Dosen Pengampu</b></td>
                        <td>Tri Nugroho Sulistyantoro, S.T., M.T. - (195110502) <i class="fas fa-star"></i></td> 
                      </tr>
                      <tr>
                        <td width="30%"><b></b></td>
                        <td>Hasan, ST, MT. - (198888502)</td>
                      </tr>
                     
                      <!-- <tr>
                        <td width="30%"><b> Tanggal Posting </b></td>
                        <td>23 Januari 2024</td>
                      </tr> -->
                    </tbody>
                  </table>
                </div>
                <div class="col-lg-5">
                  <table class="table table-sm table-hover table-bordered table-striped deta">
                    <tbody>
                      <tr>
                        <td width="30%"><b> Jalur Kelas</b></td>
                        <td>Civil Engineering Regular - (511)</td>
                      </tr>
                       <tr>
                        <td width="30%"><b> Mata Kuliah</b></td>
                        <td>Metode Pelaksanaan Bangunan - (STS704)</td>
                      </tr>
                      <tr>
                        <td width="30%"><b> Kelas</b></td>
                        <td>A</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>

            <div class="card-footer">
              <div class="card-tools ms-auto">
                 <button type="button" 
                class="btn btn-outline-secondary btn-sm"
                onclick="window.location.href='perkuliahan-portofolio-kelas.php'">
                <span class="fas fa-reply me-1"></span> Kembali
              </button>

                <!-- <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button> -->
               <!--  <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button> -->
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>  
                <!-- <button type="button" class="btn btn-outline-warning btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-cloud-upload-alt me-1"></i> Import from Gateway UII
                </button> -->              
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <button type="button" class="btn btn-outline-warning btn-sm " >
                  <i class="fas fa-cloud-download-alt"></i> Export to Gateway UII
                </button>
                <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>    
              </div>
            </div>

          </div>

          <!-- TAB NAV (Semester) -->
           <ul class="nav nav-tabs">
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail.php'"><a class="nav-link ">Portofolio</a></li>
           <!-- <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail4.php'"><a class="nav-link ">Soal Ujian</a></li> -->
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail2.php'"><a class="nav-link active">Penilaian Mahasiswa</a></li>
            <!-- <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail3.php'"><a class="nav-link ">Laporan(Grafik/Tabel)</a></li> -->
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail5.php'"><a class="nav-link ">Refleksi Kelas</a></li>
          </ul>


<!-- ========== CARD : Progres Penilaian CPMK ========== -->
<?php 
$persen = 100;

if ($persen == 100) {
  $warna = "#198754"; // hijau
} else {
  $warna = "#212529"; // hitam/gelap
}
?>

<div class="card border-0 shadow-sm mb-3">
  <div class="card-body">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-2">
      <small class="text-muted text-uppercase">
        Progres Penilaian CPMK
      </small>
      <small class="text-muted">
        25 / 40 Mahasiswa
      </small>
    </div>

    <?php $persen = 62; ?>
    <!-- Progress Bar -->
    <div class="position-relative" style="height: 8px; background:#e9ecef; border-radius:4px;">

      <div style="
      width: <?php echo $persen; ?>%;
      height: 100%;
      background: #212529;
      border-radius: 4px;
      position: relative;">

      <!-- Text Persen -->
      <span style="
      position: absolute;
      right: 6px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 0.65rem;
      color: #fff;
      font-weight: 600;">
      <?php echo $persen; ?>%
    </span>

  </div>
</div>

<!-- Info bawah -->
<div class="mt-2 d-flex justify-content-between">
  <small class="text-muted">
    15 mahasiswa belum dinilai
  </small>
  <small class="text-muted">
    Update terakhir: 12 Jan 2024
  </small>
</div>

</div>
</div>

      <!-- ========== CARD 3: Tabel saja ========== -->
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
    <table id="data_nilai_cpmk" class="table table-bordered table-striped table-sm datatables1">
                  <thead>
                    <tr align="center" class="text-uppercase">
                      <th rowspan="2" width="5px">No.</th>
                      <th rowspan="2">NIM</th>
                      <th rowspan="2">Mahasiswa</th>
                      <th rowspan="2">Angka</th>
                      <th rowspan="2">Huruf</th>
                      <th colspan="3">CPMK 1</th>
                      <th colspan="2">CPMK 2</th>
                      <th colspan="2">CPMK 3</th>
                      <th colspan="2">CPMK 4</th>
                      <th colspan="2">CPMK 5</th>                      
                      <th rowspan="2">Aksi</th>
                    </tr>
                    <tr>
                      <th title="Nilai Awal CPMK">A</th>
                      <th title="Nilai Perbaikan CPMK">P</th>
                      <th title="Nilai Final CPMK">F</th>
                      <th>A</th>
                      <th>P</th>
                      <th>A</th>
                      <th>P</th>
                      <th>A</th>
                      <th>P</th>
                      <th>A</th>
                      <th>P</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr >
                      <td align="center">1</td>
                      <td>19511100</td>
                      <td>ILHAM KURNIAWAN</td>
                      <td align="center" class="bg-danger">3.57</td>
                      <td align="center">F</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center">
                        <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditNilai">✏️</button>
                        <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusNilai">🗑️</button>
                      </td>
                    </tr>
                    <tr >
                      <td align="center">2</td>
                      <td>20511106</td>
                      <td>NABILLAH PUTRI NUR RAHMAH</td>
                      <td align="center" class="">76.70</td>
                      <td align="center">B+</td>
                      <td align="center" >75.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >75.00</td>
                      <td align="center" >78.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >71.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >78.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >71.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center">
                        <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditNilai">✏️</button>
                        <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusNilai">🗑️</button>
                      </td>
                    </tr>
                    <tr >
                      <td align="center">3</td>
                      <td>20511402</td>
                      <td>MUHAMMAD FIRDAUS SANI WIJAYA KUSUMA</td>
                      <td align="center" class="">86.77</td>
                      <td align="center">A</td>
                      <td align="center" >66.00</td>
                      <td align="center" >81.00</td>
                      <td align="center" >81.00</td>
                      <td align="center" >88.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >82.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >86.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >87.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center">
                        <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditNilai">✏️</button>
                        <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusNilai">🗑️</button>
                      </td>
                    </tr>
                    <tr >
                      <td align="center">4</td>
                      <td>21511014</td>
                      <td>SAHLA SALSABILA </td>
                      <td align="center" class="">76.43</td>
                      <td align="center">B+</td>
                      <td align="center" >81.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >81.00</td>
                      <td align="center" >83.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >69.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >73.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >75.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center">
                        <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditNilai">✏️</button>
                        <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusNilai">🗑️</button>
                      </td>
                    </tr>
                    <tr >
                      <td align="center">5</td>
                      <td>21511043</td>
                      <td>SALWA BAGHEA MULIARAHMA</td>
                      <td align="center" class="">63.47</td>
                      <td align="center">B/C</td>
                      <td align="center" >80.00</td>
                      <td align="center" >60.00</td>
                      <td align="center" >80.00</td>
                      <td align="center" >63.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >70.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >48.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >60.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center">
                        <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditNilai">✏️</button>
                        <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusNilai">🗑️</button>
                      </td>
                    </tr>
                    <tr >
                      <td align="center">6</td>
                      <td>21511066</td>
                      <td>KAHFI NATAKUSUMA</td>
                      <td align="center" class="">88.57</td>
                      <td align="center">A</td>
                      <td align="center" >94.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >94.00</td>
                      <td align="center" >91.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >95.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >95.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >61.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center">
                        <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditNilai">✏️</button>
                        <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusNilai">🗑️</button>
                      </td>
                    </tr>
                    <tr >
                      <td align="center">7</td>
                      <td>21511073</td>
                      <td>RAHESA ARIANO PUTRA </td>
                      <td align="center" class="">77.78</td>
                      <td align="center">A/B</td>
                      <td align="center" >77.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >77.00</td>
                      <td align="center" >70.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >68.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >84.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >82.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center">
                        <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditNilai">✏️</button>
                        <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusNilai">🗑️</button>
                      </td>
                    </tr>
                    <tr >
                      <td align="center">8</td>
                      <td>21511082</td>
                      <td>MUHAMMAD SURFUN BATTAN</td>
                      <td align="center" class="">73.01</td>
                      <td align="center">B</td>
                      <td align="center" >79.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >79.00</td>
                      <td align="center" >68.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >75.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >69.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >68.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center">
                        <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditNilai">✏️</button>
                        <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusNilai">🗑️</button>
                      </td>
                    </tr>
                    <tr >
                      <td align="center">9</td>
                      <td>21511085</td>
                      <td>RIDHO AHMAT FAUZI</td>
                      <td align="center" class="">84.43</td>
                      <td align="center">A-</td>
                      <td align="center" >73.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >73.00</td>
                      <td align="center" >81.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >79.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >92.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >79.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center">
                        <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditNilai">✏️</button>
                        <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusNilai">🗑️</button>
                      </td>
                    </tr>
                    <tr >
                      <td align="center">10</td>
                      <td>21511091</td>
                      <td>BAYU MUHAMMAD IQBAL</td>
                      <td align="center" class="">85.87</td>
                      <td align="center">A</td>
                      <td align="center" >79.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >79.00</td>
                      <td align="center" >88.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >88.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >88.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >74.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center">
                        <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditNilai">✏️</button>
                        <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusNilai">🗑️</button>
                      </td>
                    </tr>                   
                    <tr >
                      <td align="center">27</td>
                      <td>22511243</td>
                      <td>MUHAMMAD ZAIDAN SALIM </td>
                      <td align="center" class="">83.09</td>
                      <td align="center">A-</td>
                      <td align="center" >84.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >84.00</td>
                      <td align="center" >79.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >81.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >82.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center" >85.00</td>
                      <td align="center" class="bg-secondary"></td>
                      <td align="center">
                        <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditNilai">✏️</button>
                        <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusNilai">🗑️</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card-body -->








      </div>
    </div>
  </div>
</section>
</div>
<!-- ./content-wrapper -->

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

          <!-- Pilihan -->
          <div class="mb-3">
            <label for="lembaga" class="form-label">Periode Akademik</label>
            <select name="lembaga" id="lembaga" class="form-select">
            	<option value="PA019" selected>2024/2025 - Gasal - (Aktif)</option><option value="PA018" >2023/2024 - Genap</option><option value="PA017" >2023/2024 - Gasal</option><option value="PA016" >2022/2023 - Genap</option><option value="PA015" >2022/2023 - Gasal</option><option value="PA014" >2021/2022 - Genap</option><option value="PA013" >2021/2022 - Gasal</option><option value="PA012" >2020/2021 - Genap</option><option value="PA011" >2020/2021 - Gasal</option><option value="PA010" >2019/2020 - Genap</option><option value="PA009" >2019/2020 - Gasal</option><option value="PA008" >2018/2019 - Genap</option><option value="PA007" >2018/2019 - Gasal</option><option value="PA006" >2017/2018 - Genap</option><option value="PA005" >2017/2018 - Gasal</option><option value="PA004" >2016/2017 - Genap</option><option value="PA003" >2016/2017 - Gasal</option><option value="PA002" >2015/2016 - Genap</option><option value="PA001" >2015/2016 - Gasal</option> 
            </select>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-info">Terapkan Filter</button>
          </div>
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
          Ideal hasil ekspor kelas berdasarkan:
kurikulum, set pemetaan, mata kuliah(satu,beberapa, semua)
kolom: kode MK, mata kuliah, mahasiswa, nilai akhir(huruf),nilai akhir(angka), cpmk 1,2,3,4,5
jika ada kesamaan NIM di satu mata kuliah(artinya mahasiswa tempuh >1 kali MK tsb) ambil nilai tertinggi
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php include('5script.php'); ?>
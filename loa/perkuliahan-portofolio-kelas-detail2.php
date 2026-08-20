<?php $page = 'portofolio_kelas'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Portofolio - Kelas Perkuliahan [lembar kerja dosen]
        <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
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
              <div class="card-tools ml-auto">
                               
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
              <div class="card-tools ml-auto">
                 <button type="button" 
                class="btn btn-outline-secondary btn-sm"
                onclick="window.location.href='perkuliahan-portofolio-kelas.php'">
                <span class="fas fa-reply mr-1"></span> Kembali
              </button>

                <!-- <button class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#modalFilter">
                  <i class="fas fa-filter mr-1"></i> Filter
                </button> -->
               <!--  <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalTambahData">
                  <i class="fas fa-plus mr-1"></i> Add
                </button> -->
                <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalImpor">
                  <i class="fas fa-file-upload mr-1"></i> Import
                </button>  
                <!-- <button type="button" class="btn btn-outline-warning btn-sm " data-toggle="modal" data-target="#modalImpor">
                  <i class="fas fa-cloud-upload-alt mr-1"></i> Import from Gateway UII
                </button> -->              
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download mr-1"></i> Export
                </button>
                <button type="button" class="btn btn-outline-warning btn-sm " >
                  <i class="fas fa-cloud-download-alt"></i> Export to Gateway UII
                </button>
                <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban mr-1"></i> Reset
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
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail5.php'"><a class="nav-link ">Refleksi Dosen</a></li>
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
<?php
$rows = [
["no" => "1", "nim" => "19511100", "mahasiswa" => "ILHAM KURNIAWAN", "angka" => "3.57", "huruf" => "F", "cpmk_1" => "", "cpmk_2" => "", "cpmk_3" => "", "cpmk_4" => "", "aksi" => "", "p" => "", "a" => ""],
["no" => "2", "nim" => "20511106", "mahasiswa" => "NABILLAH PUTRI NUR RAHMAH", "angka" => "76.70", "huruf" => "B+", "cpmk_1" => "75.00", "cpmk_2" => "", "cpmk_3" => "75.00", "cpmk_4" => "78.00", "aksi" => "71.00", "p" => "78.00", "a" => "71.00"],
["no" => "3", "nim" => "20511402", "mahasiswa" => "MUHAMMAD FIRDAUS SANI WIJAYA KUSUMA", "angka" => "86.77", "huruf" => "A", "cpmk_1" => "66.00", "cpmk_2" => "81.00", "cpmk_3" => "81.00", "cpmk_4" => "88.00", "aksi" => "82.00", "p" => "86.00", "a" => "87.00"],
["no" => "4", "nim" => "21511014", "mahasiswa" => "SAHLA SALSABILA", "angka" => "76.43", "huruf" => "B+", "cpmk_1" => "81.00", "cpmk_2" => "", "cpmk_3" => "81.00", "cpmk_4" => "83.00", "aksi" => "69.00", "p" => "73.00", "a" => "75.00"],
["no" => "5", "nim" => "21511043", "mahasiswa" => "SALWA BAGHEA MULIARAHMA", "angka" => "63.47", "huruf" => "B/C", "cpmk_1" => "80.00", "cpmk_2" => "60.00", "cpmk_3" => "80.00", "cpmk_4" => "63.00", "aksi" => "70.00", "p" => "48.00", "a" => "60.00"],
["no" => "6", "nim" => "21511066", "mahasiswa" => "KAHFI NATAKUSUMA", "angka" => "88.57", "huruf" => "A", "cpmk_1" => "94.00", "cpmk_2" => "", "cpmk_3" => "94.00", "cpmk_4" => "91.00", "aksi" => "95.00", "p" => "95.00", "a" => "61.00"],
["no" => "7", "nim" => "21511073", "mahasiswa" => "RAHESA ARIANO PUTRA", "angka" => "77.78", "huruf" => "A/B", "cpmk_1" => "77.00", "cpmk_2" => "", "cpmk_3" => "77.00", "cpmk_4" => "70.00", "aksi" => "68.00", "p" => "84.00", "a" => "82.00"],
["no" => "8", "nim" => "21511082", "mahasiswa" => "MUHAMMAD SURFUN BATTAN", "angka" => "73.01", "huruf" => "B", "cpmk_1" => "79.00", "cpmk_2" => "", "cpmk_3" => "79.00", "cpmk_4" => "68.00", "aksi" => "75.00", "p" => "69.00", "a" => "68.00"],
["no" => "9", "nim" => "21511085", "mahasiswa" => "RIDHO AHMAT FAUZI", "angka" => "84.43", "huruf" => "A-", "cpmk_1" => "73.00", "cpmk_2" => "", "cpmk_3" => "73.00", "cpmk_4" => "81.00", "aksi" => "79.00", "p" => "92.00", "a" => "79.00"],
["no" => "10", "nim" => "21511091", "mahasiswa" => "BAYU MUHAMMAD IQBAL", "angka" => "85.87", "huruf" => "A", "cpmk_1" => "79.00", "cpmk_2" => "", "cpmk_3" => "79.00", "cpmk_4" => "88.00", "aksi" => "88.00", "p" => "88.00", "a" => "74.00"],
["no" => "27", "nim" => "22511243", "mahasiswa" => "MUHAMMAD ZAIDAN SALIM", "angka" => "83.09", "huruf" => "A-", "cpmk_1" => "84.00", "cpmk_2" => "", "cpmk_3" => "84.00", "cpmk_4" => "79.00", "aksi" => "81.00", "p" => "82.00", "a" => "85.00"],
];
foreach ($rows as $index => $row) {
?>
                      <tr >
                        <td align="center"><?= $row['no'] ?></td>
                        <td><?= $row['nim'] ?></td>
                        <td><?= $row['mahasiswa'] ?></td>
                        <td align="center" class="bg-danger"><?= $row['angka'] ?></td>
                        <td align="center"><?= $row['huruf'] ?></td>
                        <td align="center" class="bg-secondary"><?= $row['cpmk_1'] ?></td>
                        <td align="center" class="bg-secondary"><?= $row['cpmk_2'] ?></td>
                        <td align="center" class="bg-secondary"><?= $row['cpmk_3'] ?></td>
                        <td align="center" class="bg-secondary"><?= $row['cpmk_4'] ?></td>
                        <td align="center" class="bg-secondary"></td>
                        <td align="center" class="bg-secondary"><?= $row['aksi'] ?></td>
                        <td align="center" class="bg-secondary"></td>
                        <td align="center" class="bg-secondary"><?= $row['p'] ?></td>
                        <td align="center" class="bg-secondary"></td>
                        <td align="center" class="bg-secondary"><?= $row['a'] ?></td>
                        <td align="center" class="bg-secondary"></td>
                        <td align="center"><button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditNilai">✏️</button> <button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusNilai">🗑️</button></td>
                      </tr>
                    <?php } ?>
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
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
            <select name="lembaga" id="lembaga" class="custom-select">
            	<option value="PA019" selected>2024/2025 - Gasal - (Aktif)</option><option value="PA018" >2023/2024 - Genap</option><option value="PA017" >2023/2024 - Gasal</option><option value="PA016" >2022/2023 - Genap</option><option value="PA015" >2022/2023 - Gasal</option><option value="PA014" >2021/2022 - Genap</option><option value="PA013" >2021/2022 - Gasal</option><option value="PA012" >2020/2021 - Genap</option><option value="PA011" >2020/2021 - Gasal</option><option value="PA010" >2019/2020 - Genap</option><option value="PA009" >2019/2020 - Gasal</option><option value="PA008" >2018/2019 - Genap</option><option value="PA007" >2018/2019 - Gasal</option><option value="PA006" >2017/2018 - Genap</option><option value="PA005" >2017/2018 - Gasal</option><option value="PA004" >2016/2017 - Genap</option><option value="PA003" >2016/2017 - Gasal</option><option value="PA002" >2015/2016 - Genap</option><option value="PA001" >2015/2016 - Gasal</option> 
            </select>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
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
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php include('5script.php'); ?>
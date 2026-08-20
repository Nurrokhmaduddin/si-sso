<?php $page = 'portofolio_kelas'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Portofolio Kelas Perkuliahan 
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
                <div class="col-md-6">
                  <b>Kurikulum:</b> 2023  &nbsp;
                </div>                
                <div class="col-md-6">
                  <b>Periode Akademik:</b> 2024/2025 - Gasal  &nbsp;
                </div> 
                <div class="col-md-6">
                  <b>Mata Kuliah:</b> Semua
                </div>                
              </div>
            </div>

            <div class="card-footer">
              <div class="card-tools ml-auto">
                <button class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#modalFilter">
                  <i class="fas fa-filter mr-1"></i> Filter
                </button>
                <button type="button"
                class="btn btn-outline-primary btn-sm"
                data-toggle="modal"
                data-target="#modalBlastNotifikasi"
                data-placement="top"
                title="Notifikasi"
                data-custom-class="tooltip-primary">
                <i class="fas fa-paper-plane mr-1"></i> Blast
              </button>
              
              <button type="button"
              class="btn btn-outline-primary btn-sm"
              data-toggle="modal"
              data-target="#modalBlastNotifikasi"
              data-placement="top"
              title="Notifikasi"
              data-custom-class="tooltip-primary">
              <i class="fas fa-paper-plane mr-1"></i> Blast
            </button>

                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalTambahData">
                  <i class="fas fa-plus mr-1"></i> Add
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalImpor">
                  <i class="fas fa-file-upload mr-1"></i> Import
                </button>  
                <button type="button" class="btn btn-outline-warning btn-sm " data-toggle="modal" data-target="#modalImpor">
                  <i class="fas fa-file-upload mr-1"></i> Import from Gateway UII
                </button> -->              
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download mr-1"></i> Export
                </button>
               <!--  <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban mr-1"></i> Reset
                </button> -->    
              </div>
            </div>

          </div>


			<!-- ========== CARD 3: Tabel saja ========== -->
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table1 table-bordered table-striped table-sm datatables1">
               	<thead  class="text-uppercase">
               		<tr>
               			<th width="5px">No.</th>
               			<th>Dosen Pengampu</th>
               			<th>Mata Kuliah</th>
               			<th>Peminatan</th>
               			<th style="text-align: center;">Kelas</th>
               			<th style="text-align: center;">CPMK</th>
               			<th style="text-align: center;">Mahasiswa</th>
               			<th style="text-align: center;">Aksi</th>
               		</tr>
               	</thead>
               	<tbody>
<?php
$rows = [
["dosen_pengampu" => "Tri Nugroho Sulistyantoro, S.T., M.T. <br> <small><b>(195110502)</b></small>", "mata_kuliah" => "Metode Pelaksanaan Bangunan <br> <small><b>(STS704)</b></small>", "kelas" => "A", "cpmk" => "5", "mahasiswa" => "27", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Tri Nugroho Sulistyantoro, S.T., M.T. <br> <small><b>(195110502)</b></small>", "mata_kuliah" => "Metode Pelaksanaan Bangunan <br> <small><b>(STS704)</b></small>", "kelas" => "C", "cpmk" => "5", "mahasiswa" => "33", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Andi Purnomo, S.T., M.T. <br> <small><b>(065110501)</b></small>", "mata_kuliah" => "Metode Pelaksanaan Bangunan <br> <small><b>(STS704)</b></small>", "kelas" => "B", "cpmk" => "5", "mahasiswa" => "26", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Vendie Abma, S.T., M.T. <br> <small><b>(155111310)</b></small>", "mata_kuliah" => "Metode Pelaksanaan Bangunan <br> <small><b>(STS704)</b></small>", "kelas" => "D", "cpmk" => "5", "mahasiswa" => "23", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Rizki Budiman, S.T., M.T. <br> <small><b>(245111203)</b></small>", "mata_kuliah" => "Metode Pelaksanaan Bangunan <br> <small><b>(STS704)</b></small>", "kelas" => "F", "cpmk" => "5", "mahasiswa" => "25", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Vendie Abma, S.T., M.T. <br> <small><b>(155111310)</b></small>", "mata_kuliah" => "Metode Pelaksanaan Bangunan <br> <small><b>(STS704)</b></small>", "kelas" => "E", "cpmk" => "5", "mahasiswa" => "22", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Miftahul Fauziah, S.T., M.T., Ph.D. <br> <small><b>(955110103)</b></small>", "mata_kuliah" => "Bahan Perkerasan Jalan (+Pr) <br> <small><b>(STS307)</b></small>", "kelas" => "F", "cpmk" => "9", "mahasiswa" => "24", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Prayogo Afang Prayitno, S.T., M.Sc. <br> <small><b>(205111303)</b></small>", "mata_kuliah" => "Bahan Perkerasan Jalan (+Pr) <br> <small><b>(STS307)</b></small>", "kelas" => "C", "cpmk" => "9", "mahasiswa" => "20", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Ir. Berlian Kushari, S.T., M.Eng., IPM, ASEAN Eng. <br> <small><b>(015110101)</b></small>", "mata_kuliah" => "Bahan Perkerasan Jalan (+Pr) <br> <small><b>(STS307)</b></small>", "kelas" => "G", "cpmk" => "9", "mahasiswa" => "24", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Ir. Mochammad Sigit Darmosudiharjo, M.T. <br> <small><b>(885110103)</b></small>", "mata_kuliah" => "Bahan Perkerasan Jalan (+Pr) <br> <small><b>(STS307)</b></small>", "kelas" => "E", "cpmk" => "9", "mahasiswa" => "22", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Muhamad Abdul HadiS.T., M.T. <br> <small><b>(215111307)</b></small>", "mata_kuliah" => "Bahan Perkerasan Jalan (+Pr) <br> <small><b>(STS307)</b></small>", "kelas" => "D", "cpmk" => "9", "mahasiswa" => "24", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Muhamad Abdul HadiS.T., M.T. <br> <small><b>(215111307)</b></small>", "mata_kuliah" => "Bahan Perkerasan Jalan (+Pr) <br> <small><b>(STS307)</b></small>", "kelas" => "B", "cpmk" => "9", "mahasiswa" => "24", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Miftahul Fauziah, S.T., M.T., Ph.D. <br> <small><b>(955110103)</b></small>", "mata_kuliah" => "Bahan Perkerasan Jalan (+Pr) <br> <small><b>(STS307)</b></small>", "kelas" => "A", "cpmk" => "9", "mahasiswa" => "21", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Ir. Subarkah, M.T. <br> <small><b>(865110101)</b></small>", "mata_kuliah" => "Bahan Perkerasan Jalan (+Pr) <br> <small><b>(STS307)</b></small>", "kelas" => "H", "cpmk" => "9", "mahasiswa" => "24", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Dr.Eng. Mahmud Kori Effendi, S.T., M.T. <br> <small><b>(195110103)</b></small>", "mata_kuliah" => "Struktur Baja <br> <small><b>(STS702)</b></small>", "kelas" => "D", "cpmk" => "4", "mahasiswa" => "16", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Ir. Suharyatma, M.T. <br> <small><b>(865110201)</b></small>", "mata_kuliah" => "Struktur Baja <br> <small><b>(STS702)</b></small>", "kelas" => "C", "cpmk" => "4", "mahasiswa" => "35", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Ir. Suharyatma, M.T. <br> <small><b>(865110201)</b></small>", "mata_kuliah" => "Struktur Baja <br> <small><b>(STS702)</b></small>", "kelas" => "A", "cpmk" => "4", "mahasiswa" => "28", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Ir. Suharyatma, M.T. <br> <small><b>(865110201)</b></small>", "mata_kuliah" => "Struktur Baja <br> <small><b>(STS702)</b></small>", "kelas" => "B", "cpmk" => "4", "mahasiswa" => "27", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Vendie Abma, S.T., M.T. <br> <small><b>(155111310)</b></small>", "mata_kuliah" => "BIM untuk Manajemen Konstruksi <br> <small><b>(STS904)</b></small>", "kelas" => "A", "cpmk" => "3", "mahasiswa" => "20", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Dr. Hanindya Kusuma Artati, S.T., M.T. <br> <small><b>(045110407)</b></small>", "mata_kuliah" => "Soil Mechanics II (+Lab) <br> <small><b>(STS305)</b></small>", "kelas" => "E", "cpmk" => "7", "mahasiswa" => "24", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Melinda Dwi Rahmawati, S.T., M. Eng  <br> <small><b>(245111202)</b></small>", "mata_kuliah" => "Soil Mechanics II (+Lab) <br> <small><b>(STS305)</b></small>", "kelas" => "B", "cpmk" => "7", "mahasiswa" => "25", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Anisa Nur AmalinaS.T., M.Eng. <br> <small><b>(215111305)</b></small>", "mata_kuliah" => "Soil Mechanics II (+Lab) <br> <small><b>(STS305)</b></small>", "kelas" => "A", "cpmk" => "7", "mahasiswa" => "25", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
["dosen_pengampu" => "Aisya Galuh Laksita, S.T., M. Eng <br> <small><b>(245111201)</b></small>", "mata_kuliah" => "Soil Mechanics II (+Lab) <br> <small><b>(STS305)</b></small>", "kelas" => "C", "cpmk" => "7", "mahasiswa" => "25", "aksi" => "<button type=\"button\" onclick=\"window.location='perkuliahan-portofolio-kelas-detail.php'\" class=\"btn btn-sm btn-outline-info\"> <i class='fas fa-info-circle'> </i></button> <a href=\"data-portofolio-cpmk.pdf\" download class=\"btn btn-sm btn-outline-success\"> <i class='fas fa-download'> </i></a>"],
];
foreach ($rows as $index => $row) {
?>
                    <tr>
                      <td align="center"><?= $index + 1 ?></td>
                      <td><?= $row['dosen_pengampu'] ?></td>
                      <td><?= $row['mata_kuliah'] ?></td>
                      <td>Civil Engineering Regular <br> <small><b>(511)</b></small></td>
                      <td align="center"><?= $row['kelas'] ?></td>
                      <td align="center"><?= $row['cpmk'] ?></td>
                      <td align="center"><?= $row['mahasiswa'] ?></td>
                      <td align="center"><?= $row['aksi'] ?></td>
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


<!-- Modal Blast Notifikasi -->
<div class="modal fade" id="modalBlastNotifikasi" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow">

      <!-- Header -->
      <div class="modal-header bg-light">
        <h5 class="modal-title fw-semibold">
          <i class="fas fa-bullhorn text-primary mr-2"></i>
          Konfirmasi Blast Notifikasi
        </h5>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <!-- Body -->
      <div class="modal-body text-center py-4">
        <div class="mb-3">
          <i class="fas fa-paper-plane fa-3x text-primary opacity-75"></i>
        </div>
        <p class="mb-2 fw-medium">
          Anda akan mengirimkan notifikasi 
        </p>
        <p class="mb-3">
          <strong>Reminder Penguploadan RPS</strong><br>
          kepada <strong>seluruh dosen</strong>.
        </p>
        <p class="text-muted small mb-0">
          Pastikan informasi sudah benar sebelum melanjutkan.
        </p>
      </div>

      <!-- Footer -->
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
          Batal
        </button>
        <button type="button" class="btn btn-primary">
          <i class="fas fa-paper-plane mr-1"></i> Ya, Kirim Notifikasi
        </button>
      </div>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>
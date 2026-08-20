<?php $page = 'kelas_perkuliahan'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Daftar Mahasiswa Kelas Perkuliahan 
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
                        <td>Tri Nugroho Sulistyantoro, S.T., M.T. - (195110502)</td>
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
                onclick="window.location.href='perkuliahan-kelas-perkuliahan.php'">
                <span class="fas fa-reply mr-1"></span> Kembali
              </button>

                <!-- <button class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#modalFilter">
                  <i class="fas fa-filter mr-1"></i> Filter
                </button> -->
               <!--  <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalTambahData">
                  <i class="fas fa-plus mr-1"></i> Add
                </button> -->
                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalImpor">
                  <i class="fas fa-file-upload mr-1"></i> Import
                </button>  
                <button type="button" class="btn btn-outline-warning btn-sm " data-toggle="modal" data-target="#modalImpor">
                  <i class="fas fa-file-upload mr-1"></i> Import from Gateway UII
                </button> -->              
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download mr-1"></i> Export
                </button>
                <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban mr-1"></i> Reset
                </button>    
              </div>
            </div>

          </div>

      <!-- ========== CARD 3: Tabel saja ========== -->
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table1 table-bordered table-striped table-sm datatables1">
                <thead>
                  <tr class="text-uppercase">
                    <th width="5px">No.</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th style="text-align: center;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
<?php
$rows = [
  ["nim" => "19511100", "nama_mahasiswa" => "ILHAM KURNIAWAN", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/160060')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "20511106", "nama_mahasiswa" => "NABILLAH PUTRI NUR RAHMAH", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/156095')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "20511402", "nama_mahasiswa" => "MUHAMMAD FIRDAUS SANI WIJAYA KUSUMA", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/155895')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "21511014", "nama_mahasiswa" => "SAHLA SALSABILA", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/157629')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "21511043", "nama_mahasiswa" => "SALWA BAGHEA MULIARAHMA", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/159584')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "21511066", "nama_mahasiswa" => "KAHFI NATAKUSUMA", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/158738')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "21511073", "nama_mahasiswa" => "RAHESA ARIANO PUTRA", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/160626')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "21511082", "nama_mahasiswa" => "MUHAMMAD SURFUN BATTAN QOTO'A", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/155675')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "21511085", "nama_mahasiswa" => "RIDHO AHMAT FAUZI", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/164616')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "21511091", "nama_mahasiswa" => "BAYU MUHAMMAD IQBAL", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/164163')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "21511135", "nama_mahasiswa" => "FAIHA KHOIRUZZUKHRUF", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/162653')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "21511148", "nama_mahasiswa" => "MUHAMMAD AJI ARTI HUSATIUTATRA", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/161551')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "21511153", "nama_mahasiswa" => "MOHAMMAD AHROZ NAJAHA", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/157972')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "21511154", "nama_mahasiswa" => "APRIANTO", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/160180')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "21511185", "nama_mahasiswa" => "JIBRIL MUKIRESPATI", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/164885')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "21511214", "nama_mahasiswa" => "YAFI DZAKIA MUTTAQIN", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/165042')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "21511219", "nama_mahasiswa" => "MUHAMMAD NUZUL SHALAHUDDIN", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/160039')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "21511221", "nama_mahasiswa" => "GHINA HANIFAH FARZA", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/157401')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "21511226", "nama_mahasiswa" => "MUHAMMAD ALIF KURNIAWAN", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/155593')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "21511232", "nama_mahasiswa" => "AUDY MAYDA ARIQAH", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/156762')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "22511045", "nama_mahasiswa" => "ANGGA PUTRA BIMANTARA", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/154761')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "22511064", "nama_mahasiswa" => "VANIA NABILA DAMAYANTI", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/155500')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "22511071", "nama_mahasiswa" => "ANDIEN PUTRI AULIA", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/163640')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "22511081", "nama_mahasiswa" => "SHAFA AMALIA MUMTAZ", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/160952')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "22511093", "nama_mahasiswa" => "IQBAL", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/161693')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "22511228", "nama_mahasiswa" => "ARDINDA DESI ILMAWATI FAHMA", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/161372')\"><i class=\"fas fa-trash\"></i></button>"],
  ["nim" => "22511243", "nama_mahasiswa" => "MUHAMMAD ZAIDAN SALIM", "aksi" => "<button type=\"button\" class=\"btn btn-danger btn-sm\" onclick=\"load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/160842')\"><i class=\"fas fa-trash\"></i></button>"],
];
foreach ($rows as $index => $row) {
?>
          <tr>
            <td align="center"><?= $index + 1 ?></td>
            <td><?= $row['nim'] ?></td>
            <td><?= $row['nama_mahasiswa'] ?></td>
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
<?php include('5script.php'); ?>
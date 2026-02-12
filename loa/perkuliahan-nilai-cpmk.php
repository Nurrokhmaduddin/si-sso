<?php $page = 'nilai_cpmk'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Nilai CPMK 
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
                <div class="col-md-6">
                  <b>Periode Akademik:</b> 2024/2025 - Gasal  &nbsp;
                </div>                
                <div class="col-md-6">
                  <b>Mata Kuliah:</b> Semua
                </div>               
              </div>
            </div>

            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
               <!--  <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button> -->
                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button> -->  
                <!-- <button type="button" class="btn btn-outline-warning btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import from Gateway UII
                </button> -->              
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export Nilai Akhir
                </button>
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export Nilai Kosong
                </button>
                <!-- <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button> -->    
              </div>
            </div>

          </div>

<!-- ========== CARD : KPI ========== -->
          <style>
            .card-status-nilai:hover {
              box-shadow: 5px 5px #888888;
            }

            .card-status-nilai-acktive {
              box-shadow: 5px 5px #888888;
            }
          </style>
          <div class="row">
            <div class="col-md-3 col-6">
              <div class="card card-body cursor card-status-nilai" onclick="pilih_status('all')">
                <center class="text-info">
                  <h3><b>319</b></h3>
                  <h5><b><i class="fas fa-chalkboard-teacher"></i> Semua Kelas</b></h5>
                </center>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="card card-body cursor card-status-nilai" onclick="pilih_status('1')">
                <center class="text-success">
                  <h3><b id="jml_sudah_dinilai"><i class="fas fa-spinner fa-pulse"></i></b></h3>
                  <h5><b><i class="fas fa-check"></i> Sudah Dinilai</b></h5>
                </center>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="card card-body cursor card-status-nilai" onclick="pilih_status('2')">
                <center class="text-gray">
                  <h3><b id="jml_belum_lengkap"><i class="fas fa-spinner fa-pulse"></i></b></h3>
                  <h5><b><i class="fas fa-edit"></i> Belum Lengkap</b></h5>
                </center>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="card card-body cursor card-status-nilai" onclick="pilih_status('3')">
                <center class="text-danger">
                  <h3><b id="jml_belum_dinilai"><i class="fas fa-spinner fa-pulse"></i></b></h3>
                  <h5><b><i class="fas fa-times"></i> Belum Dinilai</b></h5>
                </center>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table1 table-bordered table-striped table-sm datatables1">

                </div>
              </div>
            </div>

            <script>
              $(document).ready(function(){
                $('#jml_sudah_dinilai').text('226')
                $('#jml_belum_lengkap').text('0')
                $('#jml_belum_dinilai').text('93')
              });

              function pilih_status(status)
              {
                window.location='https://tsipil-loa.tmidev.my.id/loa/nilai_cpmk?k=PA019&s='+status
              }
            </script>

      <!-- ========== CARD 3: Tabel saja ========== -->
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table1 table-bordered table-striped table-sm datatables1">
                <thead>
          <tr class="text-uppercase">
            <th width="5px">No.</th>
            <th>Dosen Pengampu</th>
            <th>Mata Kuliah</th>
            <th>Peminatan</th>
            <th style="text-align: center;">Kelas</th>
            <th style="text-align: center;">CPMK</th>
            <th style="text-align: center;">Mahasiswa</th>
            <th style="text-align: center;">Status</th>
            <th style="text-align: center;">Aksi</th>
          </tr>
        </thead>
        <tbody>
                          <tr>
                  <td align="center">1</td>
                  <td>
                    Tri Nugroho Sulistyantoro, S.T., M.T.                    <br>
                    <small><b>(195110502)</b></small>
                  </td>
                  <td>
                    Metode Pelaksanaan Bangunan                    <br>
                    <small><b>(STS704)</b></small>
                  </td>
                  <td>
                    Civil Engineering Regular                    <br>
                    <small><b>(511)</b></small>
                  </td>
                  <td align="center">A</td>
                  <td align="center">5</td>
                  <td align="center"><b>27</b></td>
                  <td align="center">
                    <button type="button" class="btn btn-xs btn-outline-success btn-flat">Sudah Dinilai</button>                  </td>
                  <td align="center">
                    <a href="nilai_cpmk_isi.php">
                      <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Isi Nilai CPMK</button>
                    </a>
                  </td>
                </tr>
                          <tr>
                  <td align="center">2</td>
                  <td>
                    Tri Nugroho Sulistyantoro, S.T., M.T.                    <br>
                    <small><b>(195110502)</b></small>
                  </td>
                  <td>
                    Metode Pelaksanaan Bangunan                    <br>
                    <small><b>(STS704)</b></small>
                  </td>
                  <td>
                    Civil Engineering Regular                    <br>
                    <small><b>(511)</b></small>
                  </td>
                  <td align="center">C</td>
                  <td align="center">5</td>
                  <td align="center"><b>33</b></td>
                  <td align="center">
                    <button type="button" class="btn btn-xs btn-outline-success btn-flat">Sudah Dinilai</button>                  </td>
                  <td align="center">
                    <a href="https://tsipil-loa.tmidev.my.id/loa/nilai_cpmk/nilai_cpmk/UVVKc05HODBWV2hSc056RnBPVU16ckIwMDAwOA">
                      <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Isi Nilai CPMK</button>
                    </a>
                  </td>
                </tr>
                          <tr>
                  <td align="center">3</td>
                  <td>
                    Andi Purnomo, S.T., M.T.                    <br>
                    <small><b>(065110501)</b></small>
                  </td>
                  <td>
                    Metode Pelaksanaan Bangunan                    <br>
                    <small><b>(STS704)</b></small>
                  </td>
                  <td>
                    Civil Engineering Regular                    <br>
                    <small><b>(511)</b></small>
                  </td>
                  <td align="center">B</td>
                  <td align="center">5</td>
                  <td align="center"><b>26</b></td>
                  <td align="center">
                    <button type="button" class="btn btn-xs btn-outline-success btn-flat">Sudah Dinilai</button>                  </td>
                  <td align="center">
                    <a href="https://tsipil-loa.tmidev.my.id/loa/nilai_cpmk/nilai_cpmk/YkdnMGFEUnBNbVRLRDhjNGVqSWQzYzBtM2cwMDAxMA">
                      <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Isi Nilai CPMK</button>
                    </a>
                  </td>
                </tr>
                          <tr>
                  <td align="center">4</td>
                  <td>
                    Vendie Abma, S.T., M.T.                    <br>
                    <small><b>(155111310)</b></small>
                  </td>
                  <td>
                    Metode Pelaksanaan Bangunan                    <br>
                    <small><b>(STS704)</b></small>
                  </td>
                  <td>
                    Civil Engineering Regular                    <br>
                    <small><b>(511)</b></small>
                  </td>
                  <td align="center">D</td>
                  <td align="center">5</td>
                  <td align="center"><b>23</b></td>
                  <td align="center">
                    <button type="button" class="btn btn-xs btn-outline-success btn-flat">Sudah Dinilai</button>                  </td>
                  <td align="center">
                    <a href="https://tsipil-loa.tmidev.my.id/loa/nilai_cpmk/nilai_cpmk/T1ZjME1qUkxOSEVWMG5neVZUSWQzYzBtYWEwMDAxMA">
                      <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Isi Nilai CPMK</button>
                    </a>
                  </td>
                </tr>
                          <tr>
                  <td align="center">5</td>
                  <td>
                    Rizki Budiman, S.T., M.T.                    <br>
                    <small><b>(245111203)</b></small>
                  </td>
                  <td>
                    Metode Pelaksanaan Bangunan                    <br>
                    <small><b>(STS704)</b></small>
                  </td>
                  <td>
                    Civil Engineering Regular                    <br>
                    <small><b>(511)</b></small>
                  </td>
                  <td align="center">F</td>
                  <td align="center">5</td>
                  <td align="center"><b>25</b></td>
                  <td align="center">
                    <button type="button" class="btn btn-xs btn-outline-success btn-flat">Sudah Dinilai</button>                  </td>
                  <td align="center">
                    <a href="https://tsipil-loa.tmidev.my.id/loa/nilai_cpmk/nilai_cpmk/WkRsTE5FazA4enRiNFV6VlNNa2N6N2UwMDAwOA">
                      <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Isi Nilai CPMK</button>
                    </a>
                  </td>
                </tr>
                          <tr>
                  <td align="center">6</td>
                  <td>
                    Vendie Abma, S.T., M.T.                    <br>
                    <small><b>(155111310)</b></small>
                  </td>
                  <td>
                    Metode Pelaksanaan Bangunan                    <br>
                    <small><b>(STS704)</b></small>
                  </td>
                  <td>
                    Civil Engineering Regular                    <br>
                    <small><b>(511)</b></small>
                  </td>
                  <td align="center">E</td>
                  <td align="center">5</td>
                  <td align="center"><b>22</b></td>
                  <td align="center">
                    <button type="button" class="btn btn-xs btn-outline-success btn-flat">Sudah Dinilai</button>                  </td>
                  <td align="center">
                    <a href="https://tsipil-loa.tmidev.my.id/loa/nilai_cpmk/nilai_cpmk/T1ROYU5FNDE2R2JUYmJqQkpNV3N6VDYwMDAwOA">
                      <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Isi Nilai CPMK</button>
                    </a>
                  </td>
                </tr>
                          <tr>
                  <td align="center">7</td>
                  <td>
                    Miftahul Fauziah, S.T., M.T., Ph.D.                    <br>
                    <small><b>(955110103)</b></small>
                  </td>
                  <td>
                    Bahan Perkerasan Jalan (+Pr)                    <br>
                    <small><b>(STS307)</b></small>
                  </td>
                  <td>
                    Civil Engineering Regular                    <br>
                    <small><b>(511)</b></small>
                  </td>
                  <td align="center">F</td>
                  <td align="center">9</td>
                  <td align="center"><b>24</b></td>
                  <td align="center">
                    <button type="button" class="btn btn-xs btn-outline-success btn-flat">Sudah Dinilai</button>                  </td>
                  <td align="center">
                    <a href="https://tsipil-loa.tmidev.my.id/loa/nilai_cpmk/nilai_cpmk/WlVvMFVqTjZNRFpPdjhNMFFUSWQzYzBtNHMwMDAxMA">
                      <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Isi Nilai CPMK</button>
                    </a>
                  </td>
                </tr>
                          <tr>
                  <td align="center">8</td>
                  <td>
                    Prayogo Afang Prayitno, S.T., M.Sc.                    <br>
                    <small><b>(205111303)</b></small>
                  </td>
                  <td>
                    Bahan Perkerasan Jalan (+Pr)                    <br>
                    <small><b>(STS307)</b></small>
                  </td>
                  <td>
                    Civil Engineering Regular                    <br>
                    <small><b>(511)</b></small>
                  </td>
                  <td align="center">C</td>
                  <td align="center">9</td>
                  <td align="center"><b>20</b></td>
                  <td align="center">
                    <button type="button" class="btn btn-xs btn-outline-success btn-flat">Sudah Dinilai</button>                  </td>
                  <td align="center">
                    <a href="https://tsipil-loa.tmidev.my.id/loa/nilai_cpmk/nilai_cpmk/VDNkRE5Ea3paWm1DMmRUUkNPSE16T1cwMDAwOA">
                      <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Isi Nilai CPMK</button>
                    </a>
                  </td>
                </tr>
                          <tr>
                  <td align="center">9</td>
                  <td>
                    Ir. Berlian Kushari, S.T., M.Eng., IPM, ASEAN Eng.                    <br>
                    <small><b>(015110101)</b></small>
                  </td>
                  <td>
                    Bahan Perkerasan Jalan (+Pr)                    <br>
                    <small><b>(STS307)</b></small>
                  </td>
                  <td>
                    Civil Engineering Regular                    <br>
                    <small><b>(511)</b></small>
                  </td>
                  <td align="center">G</td>
                  <td align="center">9</td>
                  <td align="center"><b>24</b></td>
                  <td align="center">
                    <button type="button" class="btn btn-xs btn-outline-success btn-flat">Sudah Dinilai</button>                  </td>
                  <td align="center">
                    <a href="https://tsipil-loa.tmidev.my.id/loa/nilai_cpmk/nilai_cpmk/TWtoSk5IZzBEQlk2OVNURk1NMGt6S2YwMDAwOA">
                      <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Isi Nilai CPMK</button>
                    </a>
                  </td>
                </tr>
                          <tr>
                  <td align="center">10</td>
                  <td>
                    Ir. Mochammad Sigit Darmosudiharjo, M.T.                    <br>
                    <small><b>(885110103)</b></small>
                  </td>
                  <td>
                    Bahan Perkerasan Jalan (+Pr)                    <br>
                    <small><b>(STS307)</b></small>
                  </td>
                  <td>
                    Civil Engineering Regular                    <br>
                    <small><b>(511)</b></small>
                  </td>
                  <td align="center">E</td>
                  <td align="center">9</td>
                  <td align="center"><b>22</b></td>
                  <td align="center">
                    <button type="button" class="btn btn-xs btn-outline-success btn-flat">Sudah Dinilai</button>                  </td>
                  <td align="center">
                    <a href="https://tsipil-loa.tmidev.my.id/loa/nilai_cpmk/nilai_cpmk/ZVhNMFZ6UkdORXJlOWdVNFJqSWQzYzBtTnMwMDAxMA">
                      <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Isi Nilai CPMK</button>
                    </a>
                  </td>
                </tr>
                          <tr>
                  <td align="center">11</td>
                  <td>
                    Muhamad Abdul HadiS.T., M.T.                    <br>
                    <small><b>(215111307)</b></small>
                  </td>
                  <td>
                    Bahan Perkerasan Jalan (+Pr)                    <br>
                    <small><b>(STS307)</b></small>
                  </td>
                  <td>
                    Civil Engineering Regular                    <br>
                    <small><b>(511)</b></small>
                  </td>
                  <td align="center">D</td>
                  <td align="center">9</td>
                  <td align="center"><b>24</b></td>
                  <td align="center">
                    <button type="button" class="btn btn-xs btn-outline-success btn-flat">Sudah Dinilai</button>                  </td>
                  <td align="center">
                    <a href="https://tsipil-loa.tmidev.my.id/loa/nilai_cpmk/nilai_cpmk/TXpWV05FZzBISmJ2VVJUZG9NVmd6T0QwMDAwOA">
                      <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Isi Nilai CPMK</button>
                    </a>
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
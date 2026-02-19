<?php $page = 'kelas_perkuliahan'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Daftar Mahasiswa Kelas Perkuliahan 
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
              <div class="card-tools ms-auto">
                <button type="button" 
                class="btn btn-outline-secondary btn-sm"
                onclick="window.location.href='perkuliahan-kelas-perkuliahan.php'">
                <span class="fas fa-reply me-1"></span> Kembali
              </button>

                <!-- <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button> -->
               <!--  <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button> -->
                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>  
                <button type="button" class="btn btn-outline-warning btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import from Gateway UII
                </button> -->              
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
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
                  <tr>
                    <td align="center">1</td>
                    <td>19511100</td>
                    <td>ILHAM KURNIAWAN</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/160060')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">2</td>
                    <td>20511106</td>
                    <td>NABILLAH PUTRI NUR RAHMAH</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/156095')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">3</td>
                    <td>20511402</td>
                    <td>MUHAMMAD FIRDAUS SANI WIJAYA KUSUMA</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/155895')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">4</td>
                    <td>21511014</td>
                    <td>SAHLA SALSABILA</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/157629')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">5</td>
                    <td>21511043</td>
                    <td>SALWA BAGHEA MULIARAHMA</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/159584')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">6</td>
                    <td>21511066</td>
                    <td>KAHFI NATAKUSUMA</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/158738')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">7</td>
                    <td>21511073</td>
                    <td>RAHESA ARIANO PUTRA</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/160626')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">8</td>
                    <td>21511082</td>
                    <td>MUHAMMAD SURFUN BATTAN QOTO'A</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/155675')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">9</td>
                    <td>21511085</td>
                    <td>RIDHO AHMAT FAUZI</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/164616')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">10</td>
                    <td>21511091</td>
                    <td>BAYU MUHAMMAD IQBAL</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/164163')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">11</td>
                    <td>21511135</td>
                    <td>FAIHA KHOIRUZZUKHRUF</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/162653')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">12</td>
                    <td>21511148</td>
                    <td>MUHAMMAD AJI ARTI HUSATIUTATRA</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/161551')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">13</td>
                    <td>21511153</td>
                    <td>MOHAMMAD AHROZ NAJAHA</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/157972')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">14</td>
                    <td>21511154</td>
                    <td>APRIANTO</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/160180')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">15</td>
                    <td>21511185</td>
                    <td>JIBRIL MUKIRESPATI</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/164885')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">16</td>
                    <td>21511214</td>
                    <td>YAFI DZAKIA MUTTAQIN</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/165042')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">17</td>
                    <td>21511219</td>
                    <td>MUHAMMAD NUZUL SHALAHUDDIN</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/160039')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">18</td>
                    <td>21511221</td>
                    <td>GHINA HANIFAH FARZA</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/157401')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">19</td>
                    <td>21511226</td>
                    <td>MUHAMMAD ALIF KURNIAWAN</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/155593')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">20</td>
                    <td>21511232</td>
                    <td>AUDY MAYDA ARIQAH</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/156762')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">21</td>
                    <td>22511045</td>
                    <td>ANGGA PUTRA BIMANTARA</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/154761')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">22</td>
                    <td>22511064</td>
                    <td>VANIA NABILA DAMAYANTI</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/155500')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">23</td>
                    <td>22511071</td>
                    <td>ANDIEN PUTRI AULIA</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/163640')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">24</td>
                    <td>22511081</td>
                    <td>SHAFA AMALIA MUMTAZ</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/160952')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">25</td>
                    <td>22511093</td>
                    <td>IQBAL</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/161693')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">26</td>
                    <td>22511228</td>
                    <td>ARDINDA DESI ILMAWATI FAHMA</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/161372')"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">27</td>
                    <td>22511243</td>
                    <td>MUHAMMAD ZAIDAN SALIM</td>
                    <td align="center">
                      <button type="button" class="btn btn-danger btn-sm" onclick="load_modal('kelas_mata_kuliah/modal_hapus_mahasiswa/160842')"><i class="fas fa-trash"></i></button>
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






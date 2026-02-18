<?php $page = 'kelas_konversi'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Kelas Konversi 
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
                  <b>Kurikulum:</b> KT-6 (K20) Kurikulum 2025 &nbsp;
                </div>                
                <div class="col-md-6">
                  <b>Set Pemetaan:</b> full stage
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
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button> -->
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>  
                <!-- <button type="button" class="btn btn-outline-warning btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import from Gateway UII
                </button>  -->             
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
               	<thead  class="text-uppercase">
                    <tr>
                      <th width="5px">No.</th>
                      <!-- <th>Dosen Pengampu</th> -->
                      <th>Mata Kuliah</th>
                      <th>Jalur Kelas</th>
                      <th style="text-align: center;">Kelas</th>
                      <th style="text-align: center;">CPMK</th>
                      <th style="text-align: center;">Mahasiswa</th>
                      <th style="text-align: center;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td align="center">1</td>
                      <td>
                        Mekanika Teknik I <br>
                        <small><b>(STS201)</b></small>
                      </td>
                      <td>
                        Civil Engineering Regular <br>
                        <small><b>(511)</b></small>
                      </td>
                      <td align="center">A</td>
                      <td align="center">4</td>
                      <td align="center">32</td>
                      <td align="center">
                        <button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-users"></i> </button>
                        <button type="button" class="btn btn-outline-danger mrg-btn btn-sm"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td align="center">2</td>
                      <td>
                        Mekanika Fluida <br>
                        <small><b>(STS305)</b></small>
                      </td>
                      <td>
                        Civil Engineering Regular <br>
                        <small><b>(511)</b></small>
                      </td>
                      <td align="center">A</td>
                      <td align="center">6</td>
                      <td align="center">28</td>
                      <td align="center">
                        <button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-users"></i> </button>
                        <button type="button" class="btn btn-outline-danger mrg-btn btn-sm"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td align="center">3</td>
                      <td>
                        Struktur Beton I <br>
                        <small><b>(STS401)</b></small>
                      </td>
                      <td>
                        Civil Engineering Regular <br>
                        <small><b>(511)</b></small>
                      </td>
                      <td align="center">A</td>
                      <td align="center">5</td>
                      <td align="center">30</td>
                      <td align="center">
                        <button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-users"></i> </button>
                        <button type="button" class="btn btn-outline-danger mrg-btn btn-sm"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td align="center">4</td>
                      <td>
                        Struktur Kayu & Baja <br>
                        <small><b>(STS402)</b></small>
                      </td>
                      <td>
                        Civil Engineering Regular <br>
                        <small><b>(511)</b></small>
                      </td>
                      <td align="center">A</td>
                      <td align="center">5</td>
                      <td align="center">27</td>
                      <td align="center">
                        <button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-users"></i> </button>
                        <button type="button" class="btn btn-outline-danger mrg-btn btn-sm"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td align="center">5</td>
                      <td>
                        Rekayasa Transportasi <br>
                        <small><b>(STS501)</b></small>
                      </td>
                      <td>
                        Civil Engineering Regular <br>
                        <small><b>(511)</b></small>
                      </td>
                      <td align="center">A</td>
                      <td align="center">4</td>
                      <td align="center">31</td>
                      <td align="center">
                        <button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-users"></i> </button>
                        <button type="button" class="btn btn-outline-danger mrg-btn btn-sm"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td align="center">6</td>
                      <td>
                        Hidrologi Terapan <br>
                        <small><b>(STS302)</b></small>
                      </td>
                      <td>
                        Civil Engineering Regular <br>
                        <small><b>(511)</b></small>
                      </td>
                      <td align="center">A</td>
                      <td align="center">4</td>
                      <td align="center">29</td>
                      <td align="center">
                        <button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-users"></i> </button>
                        <button type="button" class="btn btn-outline-danger mrg-btn btn-sm"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td align="center">7</td>
                      <td>
                        Geoteknik II <br>
                        <small><b>(STS308)</b></small>
                      </td>
                      <td>
                        Civil Engineering Regular <br>
                        <small><b>(511)</b></small>
                      </td>
                      <td align="center">A</td>
                      <td align="center">6</td>
                      <td align="center">26</td>
                      <td align="center">
                        <button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-users"></i> </button>
                        <button type="button" class="btn btn-outline-danger mrg-btn btn-sm"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td align="center">8</td>
                      <td>
                        Gambar Teknik & CAD <br>
                        <small><b>(STS104)</b></small>
                      </td>
                      <td>
                        Civil Engineering Regular <br>
                        <small><b>(511)</b></small>
                      </td>
                      <td align="center">A</td>
                      <td align="center">3</td>
                      <td align="center">34</td>
                      <td align="center">
                        <button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-users"></i> </button>
                        <button type="button" class="btn btn-outline-danger mrg-btn btn-sm"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td align="center">9</td>
                      <td>
                        Manajemen Proyek Konstruksi <br>
                        <small><b>(STS601)</b></small>
                      </td>
                      <td>
                        Civil Engineering Regular <br>
                        <small><b>(511)</b></small>
                      </td>
                      <td align="center">A</td>
                      <td align="center">4</td>
                      <td align="center">33</td>
                      <td align="center">
                        <button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-users"></i> </button>
                        <button type="button" class="btn btn-outline-danger mrg-btn btn-sm"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td align="center">10</td>
                      <td>
                        Analisis Struktur Lanjut <br>
                        <small><b>(STS502)</b></small>
                      </td>
                      <td>
                        Civil Engineering Regular <br>
                        <small><b>(511)</b></small>
                      </td>
                      <td align="center">A</td>
                      <td align="center">5</td>
                      <td align="center">25</td>
                      <td align="center">
                        <button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-users"></i> </button>
                        <button type="button" class="btn btn-outline-danger mrg-btn btn-sm"><i class="fas fa-trash"></i></button>
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
          algoritma konversi kurikulum:<br>
1.unggah file berita acara mapping konversi kurikulum di sistem<br>
2.ambil nilai CPMK-CPMK dan nilai akhir,(nilai seperti khs) berdasarkan data periode pertama hingga data periode terkini. [data modal] ambil nilai MK(cpmk1,2,3,4,n,akhir angka,huruf) terbaik, berdasarkan mata kuliah di set pemetaan tertentu. kolom [kode pemetaan, kode mk, kode kelas, kode , nilai MK(cpmk1,2,3,4,n,akhir angka,huruf)]<br>
3.buat data kelas konversi untuk menampung  niali2nya. per kelas adalah 1 mata kuliah saja. dengan dosen 'tanda konevrsi', kemudian periode terkini, pilih satu periode.<br>
4.input.impor nilai CPMK dgn perhitungan mapping dari prodi. proses konversi berdasarkan [data modal]<br>
5. parameter pencegahan agar semua data yg diperlukan termigrasi/terkonversi dengan efektif?
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php include('5script.php'); ?>
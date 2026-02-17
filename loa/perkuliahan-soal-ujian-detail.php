<?php $page = 'soal_ujian'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Soal Ujian 
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

         
      <!-- ========== CARD 3: Tabel saja ========== -->
       <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table1 table-bordered table-striped table-sm example1 dataTable no-footer" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                <thead>
                  <tr><th width="5px" class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No.: activate to sort column descending" style="width: 24.1641px;">No.</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="File Soal: activate to sort column ascending" style="width: 165.281px;">File Soal</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Perbaikan: activate to sort column ascending" style="width: 165.281px;">Perbaikan</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Keterangan: activate to sort column ascending" style="width: 144.109px;">Keterangan</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 235.125px;">Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Aksi: activate to sort column ascending" style="width: 67.0391px;">Aksi</th></tr>
                </thead>
                <tbody>
                                      
                                      
                                  <tr class="odd">
                      <td align="center" class="sorting_1">1</td>
                      <td align="center">
                                                  <a href="https://loa.simtekim-uii.id/shared/soal_ujian/Soal_Ujian_STK539_20242025_Gasal_25112501063166.pdf" target="_blank">
                            <button type="button" class="btn btn-info btn-sm"><i class="fas fa-download"></i> Download</button>
                          </a>
                                              </td>
                      
                      <td align="center">
                                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-download"></i> Download</button>
                                                </td>
                      <td>UTS MTP</td>

                      
                      <td align="center">
                                                  <button type="button" class="btn btn-default btn-sm btn-flat" style="pointer-events: none;"><i class="fas fa-book"></i> Belum Diverifikasi</button>
                                              </td>
                      <td align="center">
                        <button type="button" onclick="hapus_soal_ujian(&#39;155&#39;)" class="btn btn-danger btn-sm btn-disabled btn-aksi-hapus-soal-ujian155"><i class="fas fa-trash"></i></button>

                        
                      </td>
                    </tr><tr class="even">
                      <td align="center" class="sorting_1">2</td>
                      <td align="center">
                                                  <a href="https://loa.simtekim-uii.id/shared/soal_ujian/Soal_Ujian_STK539_20242025_Gasal_25112501064756.pdf" target="_blank">
                            <button type="button" class="btn btn-info btn-sm"><i class="fas fa-download"></i> Download</button>
                          </a>
                                              </td>
                      <!-- ----- -->
                      <td align="center">
                                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-download"></i> Download</button>
                                                </td>
                      <td>UAS MTP</td>

                      
                      <td align="center">
                                                  <button type="button" class="btn btn-default btn-sm btn-flat" style="pointer-events: none;"><i class="fas fa-book"></i> Belum Diverifikasi</button>
                                              </td>
                      <td align="center">
                        <button type="button" onclick="hapus_soal_ujian(&#39;156&#39;)" class="btn btn-danger btn-sm btn-disabled btn-aksi-hapus-soal-ujian156"><i class="fas fa-trash"></i></button>


                      </td>
                    </tr></tbody>
              </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 2 of 2 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="https://loa.simtekim-uii.id/loa/soal_ujian/soal_ujian_data?id=3408&amp;kode_periode_akademik=KR-11&amp;tahun=2024/2025&amp;semester=Gasal#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="https://loa.simtekim-uii.id/loa/soal_ujian/soal_ujian_data?id=3408&amp;kode_periode_akademik=KR-11&amp;tahun=2024/2025&amp;semester=Gasal#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="https://loa.simtekim-uii.id/loa/soal_ujian/soal_ujian_data?id=3408&amp;kode_periode_akademik=KR-11&amp;tahun=2024/2025&amp;semester=Gasal#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
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
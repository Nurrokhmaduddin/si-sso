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
                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalImpor">
                  <i class="fas fa-file-upload mr-1"></i> Import
                </button>  
                <button type="button" class="btn btn-outline-warning btn-sm " data-toggle="modal" data-target="#modalImpor">
                  <i class="fas fa-file-upload mr-1"></i> Import from Gateway UII
                </button> -->              
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download mr-1"></i> Export
                </button>
                <!-- <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban mr-1"></i> Reset
                </button> -->    
              </div>
            </div>

          </div>

          <!-- TAB NAV (Semester) -->
           <ul class="nav nav-tabs">
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail.php'"><a class="nav-link active">Portofolio</a></li>
            <!-- <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail4.php'"><a class="nav-link ">Soal Ujian</a></li> -->
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail2.php'"><a class="nav-link ">Penilaian Mahasiswa</a></li>
            <!-- <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail3.php'"><a class="nav-link ">Laporan(Grafik/Tabel)</a></li> -->
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail5.php'"><a class="nav-link ">Refleksi Dosen</a></li>
          </ul>


          <!-- ========== CARD : tabel sebaran CPMK ========== -->
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm">
        <thead class="table-dark text-center">
          <!-- Baris 1: CPL -->
          <tr>
            <!-- <th rowspan="2">Kode MK</th> -->
            <th rowspan="2" colspan="2">CPMK</th>
            <th colspan="2" data-toggle="tooltip" title="CPL 1: Bertakwa kepada Tuhan Yang Maha Esa dan berperilaku islami">CPL 1</th>
            <th colspan="2">CPL 2</th>
            <th colspan="3">CPL 3</th>
            <th colspan="2">CPL 4</th>
            <th colspan="2">CPL 5</th>
            <th colspan="2">CPL 6</th>
            <th colspan="2">CPL 7</th>
            <th>CPL 8</th>
            <th colspan="2">CPL 9</th>
            <th>CPL 10</th>
          </tr>
          <!-- Baris 2: IK -->
          <tr>
            <th data-toggle="tooltip" title="IK 1: Menunjukkan perilaku islami pada setiap peran yang dijalani (50%)">IK 1</th>
            <th>IK 2</th>
            <th>IK 3</th>
            <th>IK 4</th>
            <th>IK 5</th>
            <th>IK 6</th>
            <th>IK 7</th>
            <th>IK 8</th>
            <th>IK 9</th>
            <th>IK 10</th>
            <th>IK 11</th>
            <th>IK 12</th>
            <th>IK 13</th>
            <th>IK 14</th>
            <th>IK 15</th>
            <th>IK 16</th>
            <th>IK 17</th>
            <th>IK 18</th>
            <th>IK 19</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>STS704</td>
            <td data-toggle="tooltip" title="Deskripsi CPMK 1">1</td>
            <td class="text-center">v</td><td></td>
            <td></td><td></td>
            <td></td><td></td><td></td>
            <td></td><td></td>
            <td></td><td></td>
            <td></td><td></td>
            <td></td><td></td>
            <td></td>
            <td></td><td></td><td></td>
          </tr>
          <tr>
            <td>STS704</td>
            <td>2</td>
            <td></td><td class="text-center">v</td>
            <td></td><td></td>
            <td></td><td></td><td></td>
            <td></td><td></td>
            <td></td><td></td>
            <td></td><td></td>
            <td></td><td></td>
            <td></td>
            <td></td><td></td><td></td>
          </tr>
          <tr>
            <td>STS704</td>
            <td>3</td>
            <td></td><td></td>
            <td class="text-center">v</td><td></td>
            <td></td><td></td><td></td>
            <td></td><td></td>
            <td></td><td></td>
            <td></td><td></td>
            <td class="text-center">v</td><td></td>
            <td></td>
            <td></td><td></td><td></td>
          </tr>
          <tr>
            <td>STS704</td>
            <td>4</td>
            <td></td><td></td>
            <td></td><td></td><td></td>
            <td class="text-center">v</td><td></td>
            <td></td><td></td>
            <td></td><td></td>
            <td class="text-center">v</td><td></td>
            <td></td><td></td>
            <td></td>
            <td></td><td></td><td></td>
          </tr>
        </tbody>
      </table>
    </div>
        <!-- KOMPETENSI -->
<!-- <div class="card mb-3"> -->

    <div class="card-body p-0">
      <table class="table table-hover table-sm mb-0 table-secondary ">
        <thead>
          <tr class="text-uppercase">
            <th width="120px" align="center">CPMK</th>
            <th>Deskripsi </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>STS704-1:</td>
            <td>
              <span><small> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.</small></span>
            </td>
          </tr>
          <tr>
            <td> STS704-2:</td>
             <td>
              <span><small>Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</small></span>
            </td>
          </tr>
          <tr>
            <td>STS704-3: </td>
            <td>
              <span><small>Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. </small></span>
            </td>
          </tr>
          <tr>
            <td>STS704-4: </td>
            <td>
              <span><small> Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</small></span>
            </td>
          </tr>
          
        </tbody>
      </table>
    </div>
  
<!-- </div> -->
 
  </div>
  
</div>


          <!-- ========== CARD : Portfolio========== --> 

          <div class="card">
            <div class="card-body">
              <table id="tbl" name="tbl" class="table table-sm table-hover table-bordered table-striped deta">
                  <tbody>
                    <tr>
                      <td>Dokumen RPS <span class="badge badge-success">Valid</span></td>
                        <td width="40%">
                          <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modalEditData"><i class="fas fa-edit"></i></button>
                          <a href="#" target="_blank" title="Unduh RPS">
                            <button type="button" class="btn btn-xs btn-success" ><i class="fas fa-file"></i> Download</button>
                          </a> <i>update_at</i>
                        </td>
                      </tr>
                      <tr>
                        <td>Materi Pembelajaran (slides, modul, bahan ajar) </td>
                        <td width="40%">
                          <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modalEditData"><i class="fas fa-edit"></i></button>
                          <a href="#" target="_blank">
                            <button type="button" class="btn btn-xs btn-info"><i class="fas fa-link"></i> Download</button>
                          </a> <i>update_at</i>
                        </td>
                      </tr>
                      <tr>
                        <td>Dokumen Penugasan Mahasiswa <span class="badge badge-secondary">Proses</span></td>
                          <td width="40%">
                            <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modalEditData"><i class="fas fa-edit"></i></button>
                            <a href="https://drive.google.com/drive/folders/1Ba6yZ2KLWZC992tVO7wxpcfxaOYb8Eyi?usp=drive_link" target="_blank">
                              <button type="button" class="btn btn-xs btn-info"><i class="fas fa-link"></i> Download</button>
                            </a> <i>updated 19 sep 2025</i>
                          </td>
                        </tr>
                        <!-- <tr>
                          <td><button type="button" class="btn btn-xs btn-primary" ><i class="fas fa-edit"></i></button>
                            Soal Ujian UTS/UAS <span class="badge badge-danger">Rejected</span> (dengan validasi prodi)</td>
                            <td width="40%">
                              <a href="https://drive.google.com/drive/folders/1Ba6yZ2KLWZC992tVO7wxpcfxaOYb8Eyi?usp=drive_link" target="_blank">
                                <button type="button" class="btn btn-xs btn-info"><i class="fas fa-link"></i> Download</button>
                              </a> <i>update_at</i>
                            </td>
                          </tr> -->
                          <tr>
                            <td>Evaluasi Dosen oleh Mahasiswa</td>
                            <td width="40%">
                              <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modalEditData"><i class="fas fa-edit"></i></button>
                              <a href="portfolio_cpmk_detail2.php" target="_blank">
                                <button type="button" class="btn btn-xs btn-info"><i class="fas fa-link"></i> Download</button>
                              </a> <i>update_at</i>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>


          <!-- ========== CARD : soal ujian========== --> 
<div class="card">
  <!-- <div class="card-header">
    <h5 class="mb-0">Daftar Soal Ujian</h5>
  </div> -->
  <div class="card-body">

    <div class="table-responsive">
      <table class="table table-sm table-hover table-bordered table-striped deta">
        <thead>
          <tr class="text-uppercase">
            <th width="50">No</th>
            <th width="150">Tanggal Ujian</th>
            <th>Keterangan soal ujian</th>
            <th>Status</th>
            <th width="100" class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>1</td>
            <td>10 Maret 2025</td>
            <td>Ujian Tengah Semester - Mekanika Tanah. UTS Semester Genap 2024/2025</td>
            <td><span class="badge badge-warning">Penugasan Validator</span> </td>
            <td class="text-center"><button class="btn btn-sm btn-outline-success">
                <i class="fas fa-download"></i>
              </button>
              <button class="btn btn-sm btn-outline-danger">
                <i class="fas fa-trash"></i>
              </button>
            </td>
          </tr>

          <tr>
            <td>2</td>
            <td>25 Juni 2025</td>
            <td>Ujian Akhir Semester - Struktur Beton. UAS Semester Genap 2024/2025</td>
            <td><span class="badge badge-info">Proses Verifikasi</span> </td>
            <td class="text-center"><button class="btn btn-sm btn-outline-info">
                <i class="fas fa-paperclip"></i>
              </button>
              <button class="btn btn-sm btn-outline-danger">
                <i class="fas fa-trash"></i>
              </button>
            </td>
          </tr>

          <tr>
            <td>3</td>
            <td>5 April 2025</td>
            <td>Kuis 1 - Geoteknik. Evaluasi Bab 1 dan 2</td>
            <td><span class="badge badge-primary">Proses Revisi</span> </td>
            <td class="text-center"><button class="btn btn-sm btn-outline-success">
                <i class="fas fa-download"></i>
              </button>
              <button class="btn btn-sm btn-outline-danger">
                <i class="fas fa-trash"></i>
              </button>
            </td>
          </tr>

          <tr>
            <td>4</td>
            <td>20 April 2025</td>
            <td>Kuis 2 - Analisis Struktur. Evaluasi Bab 3 dan 4</td>
            <td><span class="badge badge-success">Approved</span> </td>
            <td class="text-center"><button class="btn btn-sm btn-outline-success">
                <i class="fas fa-download"></i>
              </button>
              <button class="btn btn-sm btn-outline-danger">
                <i class="fas fa-trash"></i>
              </button>
            </td>
          </tr>

          <tr>
            <td>5</td>
            <td>30 Maret 2025</td>
            <td>Remedial UTS - Mekanika Tanah. Khusus mahasiswa yang belum tuntas</td>
            <td><span class="badge badge-danger">Rejected</span> </td>
            <td class="text-center"><button class="btn btn-sm btn-outline-success">
                <i class="fas fa-download"></i>
              </button>
              <button class="btn btn-sm btn-outline-danger">
                <i class="fas fa-trash"></i>
              </button>
            </td>
          </tr>

        </tbody>
        <tfoot>
          <tr><td colspan="5"><button type="button" class="btn btn-outline-primary btn-sm btn-block" data-toggle="modal" data-target="#modalTambahData"><i class="fas fa-plus mr-1"></i> Add</button></td></tr>
        </tfoot>
      </table>
    </div>

  </div>
</div>

<!-- ========== CARD : Catatan Evaluasi MK-Portfolio========== --> 
<div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0">
      <!-- <button class="btn btn-sm btn-outline-info" data-toggle="collapse" data-target="#daftarIKCPL2">
        <i class="fas fa-expand"></i>
      </button> -->
      Jurnal CQI Pengajaran Mata Kuliah ini (Refleksi Personal Saya)
    </h5>
  </div>
  <div class="card-body collapse show" id="daftarIKCPL2" >
    <div class="table-responsive">
      <table class="table table-bordered table-striped datatables1">
        <thead>
          <tr>
            <th>#</th>
            <th>Periode Akademik</th>
            <th>Refleksi Dosen</th>
            <th>Analisis Kendala</th>
            <th>Rencana Perbaikan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2</td>
            <td>2025 - Gasal</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
            <td>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
            <td></td>
            <td class="text-center">                     
             <button class="btn btn-sm btn-outline-info" onclick="window.location.href='.php'"><i class="fas fa-info-circle"></i> </button>
             </td>
           </tr>
           <tr>
            <td>1</td>
            <td>2025 - Genap</td>
            <td>Materi telah tersampaikan sesuai rencana pembelajaran, namun beberapa mahasiswa membutuhkan penjelasan tambahan pada topik tertentu. Partisipasi kelas cukup baik.</td>
            <td>-</td>
            <td>Menambahkan sesi konsultasi mingguan, menyediakan contoh studi kasus tambahan, serta memperbaiki alur penyampaian pada pertemuan awal.</td>
            <td class="text-center">                     
              <button class="btn btn-sm btn-outline-info" onclick="window.location.href='.php'"><i class="fas fa-info-circle"></i> </button>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>2024 - Genap</td>
            <td>Ketercapaian materi berada pada kategori baik. Praktikum berjalan lancar meskipun ada beberapa kendala kecil terkait perangkat laboratorium.</td>
            <td>-</td>
            <td>Melakukan koordinasi dengan laboran, memperbarui panduan praktikum, dan menambah materi pemantapan untuk pertemuan terakhir.</td>
            <td class="text-center">                     
              <button class="btn btn-sm btn-outline-info" onclick="window.location.href='.php'"><i class="fas fa-info-circle"></i> </button>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>2024 - Gasal</td>
            <td>Interaksi kelas masih perlu ditingkatkan. Sebagian mahasiswa kurang aktif berdiskusi dan ketepatan waktu pengumpulan tugas masih rendah.</td>
            <td>-</td>
            <td>Menerapkan metode pembelajaran berbasis proyek kecil, memberikan reward aktif partisipasi, dan memperjelas timeline tugas.</td>
            <td class="text-center">                     
              <button class="btn btn-sm btn-outline-info" onclick="window.location.href='.php'"><i class="fas fa-info-circle"></i> </button>
            </td>
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
          yang input hanya koordinaor dosen pengampu, selain itu hanya view.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit Data -->
<div class="modal fade" id="modalEditData" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content border-0 shadow">

      <!-- Header -->
      <div class="modal-header bg-light">
        <h5 class="modal-title fw-semibold">
          <i class="fas fa-plus-circle text-primary mr-2"></i>
          Input Portofolio (nama dokumen)
        </h5>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <!-- Body -->
      <div class="modal-body">
        <form id="formTambahSoal">

          <!-- Pilih Tipe -->
          <div class="mb-3">
            <label class="form-label d-block">Tipe Lampiran</label>
            
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="tipeSoal" id="pilihFile" value="file" checked>
              <label class="form-check-label" for="pilihFile">Upload File</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="tipeSoal" id="pilihLink" value="link">
              <label class="form-check-label" for="pilihLink">Input Link</label>
            </div>
          </div>

          <!-- Input File -->
          <div class="mb-3" id="inputFileWrapper">
            <label class="form-label">Upload File Soal</label>
            <input type="file" class="form-control">
            <small class="text-muted">Format: PDF / DOC / DOCX</small>
          </div>

          <!-- Input Link -->
          <div class="mb-3 d-none" id="inputLinkWrapper">
            <label class="form-label">Link Soal</label>
            <input type="url" class="form-control" placeholder="https://...">
          </div>

        </form>
      </div>

      <!-- Footer -->
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
          Batal
        </button>
        <button type="submit" class="btn btn-primary" form="formTambahSoal">
          <i class="fas fa-save mr-1"></i> Simpan
        </button>
      </div>

    </div>
  </div>
</div>
<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content border-0 shadow">

      <!-- Header -->
      <div class="modal-header bg-light">
        <h5 class="modal-title fw-semibold">
          <i class="fas fa-plus-circle text-primary mr-2"></i>
          Tambah Soal Ujian
        </h5>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>

      <!-- Body -->
      <div class="modal-body">
        <form id="formTambahSoal">

          <!-- Tanggal Ujian -->
          <div class="mb-3">
            <label class="form-label">Tanggal Ujian</label>
            <input type="date" class="form-control" required>
          </div>

          <!-- Keterangan -->
          <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea class="form-control" rows="3" placeholder="Masukkan keterangan ujian..." required></textarea>
          </div>

          <!-- Pilih Tipe -->
          <div class="mb-3">
            <label class="form-label d-block">Tipe Lampiran</label>
            
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="tipeSoal" id="pilihFile" value="file" checked>
              <label class="form-check-label" for="pilihFile">Upload File</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="tipeSoal" id="pilihLink" value="link">
              <label class="form-check-label" for="pilihLink">Input Link</label>
            </div>
          </div>

          <!-- Input File -->
          <div class="mb-3" id="inputFileWrapper">
            <label class="form-label">Upload File Soal</label>
            <input type="file" class="form-control">
            <small class="text-muted">Format: PDF / DOC / DOCX</small>
          </div>

          <!-- Input Link -->
          <div class="mb-3 d-none" id="inputLinkWrapper">
            <label class="form-label">Link Soal</label>
            <input type="url" class="form-control" placeholder="https://...">
          </div>

        </form>
      </div>

      <!-- Footer -->
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
          Batal
        </button>
        <button type="submit" class="btn btn-primary" form="formTambahSoal">
          <i class="fas fa-save mr-1"></i> Simpan
        </button>
      </div>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>
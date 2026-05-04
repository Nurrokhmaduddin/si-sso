<?php $page = 'monev_kelas'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>
  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Rekapitulasi - Kelas Perkuliahan 
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
                onclick="window.location.href='monev-rekap-kelas.php'">
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
                <!-- <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button> -->    
              </div>
            </div>

          </div>

          <!-- TAB NAV (Semester) -->
         
           <ul class="nav nav-tabs">
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail.php'"><a class="nav-link ">Final</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail4.php'"><a class="nav-link ">Remedial</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail3.php'"><a class="nav-link active">Portofolio</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail2.php'"><a class="nav-link ">Penilaian Mahasiswa</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail5.php'"><a class="nav-link ">Refleksi Dosen</a></li>
            <!-- <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail6.php'"><a class="nav-link ">OBE</a></li> -->
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
            <th colspan="2" data-bs-toggle="tooltip" title="CPL 1: Bertakwa kepada Tuhan Yang Maha Esa dan berperilaku islami">CPL 1</th>
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
            <th data-bs-toggle="tooltip" title="IK 1: Menunjukkan perilaku islami pada setiap peran yang dijalani (50%)">IK 1</th>
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
            <td data-bs-toggle="tooltip" title="Deskripsi CPMK 1">1</td>
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

</div>

          <!-- ========== CARD : Portfolio========== --> 

          <div class="card">
            <div class="card-body">
              <table  class="table table-sm table-hover table-bordered table-striped deta">
                  <tbody>
                    <tr>
                      <td>
                        Dokumen RPS <span class="badge badge-success">Valid</span></td>
                        <td width="40%">
                          <a href="#" target="_blank" title="Unduh RPS">
                            <button type="button" class="btn btn-sm btn-outline-info" ><i class="fas fa-link"></i> </button>
                          </a> <small><i>updated 11 jul 2025</i><smalli>
                        </td>
                      </tr>
                      <tr>
                        <td>
                        Materi Pembelajaran (slides, modul, bahan ajar) </td>
                        <td width="40%">
                          <a href="#" target="_blank">
                            <button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-link"></i> </button>
                          </a> <small><i>updated 11 sep 2025</i><smalli>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Dokumen Penugasan Mahasiswa <span class="badge badge-secondary">Proses</span></td>
                          <td width="40%">
                            <a href="https://drive.google.com/drive/folders/1Ba6yZ2KLWZC992tVO7wxpcfxaOYb8Eyi?usp=drive_link" target="_blank">
                              <button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-link"></i> </button>
                            </a> <small><i>updated 19 sep 2025</i><smalli>
                          </td>
                        </tr>
                        <!-- <tr>
                          <td><button type="button" class="btn btn-xs btn-primary" ><i class="fas fa-edit"></i></button>
                            Soal Ujian UTS/UAS <span class="badge badge-danger">Rejected</span> </td>
                            <td width="40%">
                              <a href="https://drive.google.com/drive/folders/1Ba6yZ2KLWZC992tVO7wxpcfxaOYb8Eyi?usp=drive_link" target="_blank">
                                <button type="button" class="btn btn-xs btn-info"><i class="fas fa-link"></i> Download</button>
                              </a> <i>update_at</i>
                            </td>
                          </tr> -->
                          <tr>
                            <td>
                            Evaluasi Dosen oleh Mahasiswa</td>
                            <td width="40%">
                              <a href="portfolio_cpmk_detail2.php" target="_blank">
                                <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fas fa-link"></i> </button>
                              </a> <small><i></i><smalli>
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
            <!-- <th >No</th> -->
            <th >Tanggal Ujian</th>
            <th>Keterangan soal ujian (dengan validasi prodi)</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <!-- <td>1</td> -->
            <td>10 Maret 2025</td>
            <td>Ujian Tengah Semester - Mekanika Tanah. UTS Semester Genap 2024/2025<span class="badge badge-success">Approved</span> </td>
            <td class="text-center"><button class="btn btn-sm btn-outline-success">
                <i class="fas fa-download"></i>
              </button> <small><i>updated 11 jul 2025</i><smalli>
            </td>
          </tr>

          <tr>
            <!-- <td>2</td> -->
            <td>25 Juni 2025</td>
            <td>Ujian Akhir Semester - Struktur Beton. UAS Semester Genap 2024/2025<span class="badge badge-success">Approved</span> </td>
            <td class="text-center"><button class="btn btn-sm btn-outline-info">
                <i class="fas fa-paperclip"></i>
              </button> <small><i>updated 11 jul 2025</i><smalli>
            </td>
          </tr>

          <tr>
            <!-- <td>3</td> -->
            <td>5 April 2025</td>
            <td>Kuis 1 - Geoteknik. Evaluasi Bab 1 dan 2<span class="badge badge-danger">Rejected</span> </td>
            <td class="text-center"><button class="btn btn-sm btn-outline-success">
                <i class="fas fa-download"></i>
              </button> <small><i>updated 11 jul 2025</i><smalli>
            </td>
          </tr>

          <tr>
            <!-- <td>4</td> -->
            <td>20 April 2025</td>
            <td>Kuis 2 - Analisis Struktur. Evaluasi Bab 3 dan 4<span class="badge badge-success">Approved</span> </td>
            <td class="text-center"><button class="btn btn-sm btn-outline-success">
                <i class="fas fa-download"></i>
              </button> <small><i>updated 11 jul 2025</i><smalli>
            </td>
          </tr>

          <tr>
            <!-- <td>5</td> -->
            <td>30 Maret 2025</td>
            <td>Remedial UTS - Mekanika Tanah. Khusus mahasiswa yang belum tuntas<span class="badge badge-danger">Rejected</span> </td>
            <td class="text-center"><button class="btn btn-sm btn-outline-success">
                <i class="fas fa-download"></i>
              </button> <small><i>updated 11 jul 2025</i><smalli>
            </td>
          </tr>

        </tbody>
      </table>
    </div>

  </div>
</div>

   
<!-- ========== CARD MODERN: Refleksi Personal Dosen ========== -->
<div class="card shadow-sm mb-3 " >
  <div class="card-header bg-secondary">
    <h5 class="mb-0">
      Jurnal CQI Pengajaran Mata Kuliah ini (Refleksi Personal Saya) 
    </h5>
  </div>
  <div class="card-body" style="padding: 1rem 1.25rem;">
    <div class="d-flex flex-column flex-md-row gap-3">
      <!-- Refleksi Dosen -->
      <div class="flex-fill p-3" style="background-color: #f8f9fc; border-radius: 0.5rem;">
        <h6 class="text-muted" style="font-weight: 500; font-size: 0.875rem;">Refleksi Dosen</h6>
        <p style="margin: 0.5rem 0 0; font-size: 0.9rem; color: #3a3b45;">
          Praktikum berjalan lancar dan metode diskusi kelompok efektif untuk meningkatkan partisipasi mahasiswa.
        </p>
      </div>
      <!-- Analisis Kendala -->
      <div class="flex-fill p-3" style="background-color: #f8f9fc; border-radius: 0.5rem;">
        <h6 class="text-muted" style="font-weight: 500; font-size: 0.875rem;">Analisis Kendala</h6>
        <p style="margin: 0.5rem 0 0; font-size: 0.9rem; color: #3a3b45;">
          Beberapa mahasiswa kesulitan memahami teori yang dijelaskan terlalu cepat. Waktu diskusi terbatas sehingga beberapa topik kurang mendalam.
        </p>
      </div>
      <!-- Rencana Perbaikan -->
      <div class="flex-fill p-3" style="background-color: #f8f9fc; border-radius: 0.5rem;">
        <h6 class="text-muted" style="font-weight: 500; font-size: 0.875rem;">Rencana Perbaikan</h6>
        <p style="margin: 0.5rem 0 0; font-size: 0.9rem; color: #3a3b45;">
          Mengurangi penjelasan teori panjang, menambah sesi praktik awal, serta memperpanjang waktu diskusi kelompok.
        </p>
      </div>
    </div>
  </div>
</div>

<!-- ========== CARD : Refleksi Personal Dosen (1 baris) ========== --> 
<!-- <div class="card mb-3">
  <div class="card-header">
    <h5 class="mb-0">
      Refleksi Personal Dosen • 2024/2025 - Gasal
    </h5>
  </div>
  <div class="card-body">
    <div class="mb-3">
      <h6 class="card-subtitle text-muted">Refleksi Dosen</h6>
      <p>Praktikum berjalan lancar dan metode diskusi kelompok efektif untuk meningkatkan partisipasi mahasiswa.</p>
    </div>
    <div class="mb-3">
      <h6 class="card-subtitle text-muted">Analisis Kendala</h6>
      <p>Beberapa mahasiswa kesulitan memahami teori yang dijelaskan terlalu cepat. Waktu diskusi terbatas sehingga beberapa topik kurang mendalam.</p>
    </div>
    <div class="mb-3">
      <h6 class="card-subtitle text-muted">Rencana Perbaikan</h6>
      <p>Mengurangi penjelasan teori panjang, menambah sesi praktik awal, serta memperpanjang waktu diskusi kelompok.</p>
    </div>
  </div>
</div> -->

<!-- CARD REKAP CATATAN & EVALUASI KELAS SESUAI PERTANYAAN -->
<!-- <div class="col-md-12"> -->
  <!-- <div class="card card-primary">

     <div class="card-header bg-primary text-white">
      <h5 class="card-title mb-0">Rekapan Catatan & Evaluasi MataKuliah</h5>
      <small> Kolaboratif • Berdasarkan isian seluruh dosen untuk mata kuliah ini</small>
    </div>

    <div class="card-body">
      <h6><strong>1. Capaian CPMK</strong></h6>
      <p>🏆 Tercapai Kuat (2 dosen)</p>
      <h6><strong>2. Tingkat Partisipasi Mahasiswa</strong></h6>
      <p>🏆 Sangat Aktif (1 dosen)</p>
      <hr>

      <h6><strong>3. Efektivitas Metode Pengajaran (skala 1–5)</strong></h6>
      <ul>
        <li>Rata-rata skor: 4.0</li>
        <li>Skor terbanyak: 4 (2 dosen)</li>
      </ul>
      <h6><strong>4. Kesesuaian Penilaian dengan Kemampuan Mahasiswa (skala 1–5)</strong></h6>
      <ul>
        <li>Rata-rata skor: 3.7</li>
        <li>Skor terbanyak: 4 (2 dosen)</li>
      </ul>
      <hr>
      <h6><strong>5. Kendala Utama</strong></h6>
      <span class="badge badge-secondary">Koneksi Internet (1)</span>
      <span class="badge badge-info">Partisipasi Rendah (2)</span>
      <span class="badge badge-info">Materi Kompleks (2)</span>
      <span class="badge badge-danger">Waktu Terbatas (3)</span>
      <hr>
      <h6><strong>6. Metode Pengajaran Paling Efektif</strong></h6>
      <span class="badge badge-info">Diskusi (2)</span>
      <span class="badge badge-danger">Praktikum (3)</span>
      <span class="badge badge-info">Studi Kasus (2)</span>
      <span class="badge badge-secondary">Project Based Learning (1)</span>
      <hr>
      <h6><strong>7. Catatan Dinamika Kelas</strong></h6>
      <ul>
        <li>Dosen 1: Partisipasi sedang, mahasiswa awal pasif tapi akhir aktif.</li>
        <li>Dosen 2: Variatif, beberapa mahasiswa tertinggal materi awal.</li>
        <li>Dosen 3: Interaksi meningkat saat praktikum, beberapa mahasiswa fokus terbatas.</li>
      </ul>
      <h6><strong>8. Rekomendasi Perbaikan</strong></h6>
      <ul>
        <li>Dosen 1: Tambah pre-test awal, diferensiasi tugas.</li>
        <li>Dosen 2: Rubrik penilaian jelas, latihan praktikum tambahan.</li>
        <li>Dosen 3: Lebih banyak diskusi interaktif, sediakan modul latihan mandiri.</li>
      </ul>
    </div>
  </div> -->
<!-- </div> -->


<!-- ================= Card  : Catatan evaluasi dan pengembangan ================= -->
<!-- 
<div class="row">


  <div class="col-lg-6">
    <div class="card h-100">
      <div class="card-header bg-secondary text-white">
        <h5 class="card-title mb-0">
          <i class="fas fa-clipboard-list me-2"></i>
          Evaluasi Hasil Pembelajaran
        </h5>
      </div>

      <div class="card-body">
        <p class="mb-0">
          secara keseluruhan pembelajaran telah berjalan dengan baik
        </p>
      </div>
    </div>
  </div>


  <div class="col-lg-6">
    <div class="card h-100">
      <div class="card-header bg-secondary text-white">
        <h5 class="card-title mb-0">
          <i class="fas fa-chart-line me-2"></i>
          Rencana Pengembangan Perkuliahan
        </h5>
      </div>

      <div class="card-body">
        <p class="mb-0">
          perlu meningkatkan interaksi
        </p>
      </div>
    </div>
  </div>

</div>


 -->
          
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


<script>
// Generate label CPMK 1 - 256
const labelsCPMK = Array.from({ length: 40 }, (_, i) => `NIM ${i + 1}`);

// Contoh nilai CPMK (0 - 100)
const nilaiCPMK = Array.from({ length: 40 }, () =>
  Math.floor(Math.random() * 101)
);

const cty = document.getElementById('barChartCPMK').getContext('2d');

new Chart(cty, {
  type: 'bar',
  data: {
    labels: labelsCPMK,
    datasets: [{
      label: 'Nilai CPMK 1',
      data: nilaiCPMK,
      backgroundColor: 'rgba(220, 53, 69, 0.8)', // merah (Bootstrap danger)
      borderColor: 'rgba(220, 53, 69, 1)',
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      // title: {
      //   display: true,
      //   text: 'Capaian CPMK',
      //   font: {
      //     size: 18
      //   }
      // },
      legend: {
        position: 'top'
      },
      tooltip: {
        callbacks: {
          label: function(context) {
            return `Nilai: ${context.raw}`;
          }
        }
      }
    },
    scales: {
      y: {
        min: 0,
        max: 100,
        // title: {
        //   display: true,
        //   text: 'Nilai (0–100)'
        // }
      },
      x: {
        ticks: {
          autoSkip: true,
          maxTicksLimit: 30 // supaya tidak overload
        },
        title: {
          display: true,
          // text: 'CPMK'
        }
      }
    }
  }
});
</script>



<script>
// Generate label CPMK 1 - 256
const labelsCPMK2 = Array.from({ length: 40 }, (_, i) => `NIM ${i + 1}`);

// Contoh nilai CPMK (0 - 100)
const nilaiCPMK2 = Array.from({ length: 40 }, () =>
  Math.floor(Math.random() * 101)
);

const cty2 = document.getElementById('barChartCPMK2').getContext('2d');

new Chart(cty2, {
  type: 'bar',
  data: {
    labels: labelsCPMK2,
    datasets: [{
      label: 'Nilai CPMK 2',
      data: nilaiCPMK2,
      backgroundColor: 'rgba(220, 53, 69, 0.8)', // merah (Bootstrap danger)
      borderColor: 'rgba(220, 53, 69, 1)',
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      // title: {
      //   display: true,
      //   text: 'Capaian CPMK',
      //   font: {
      //     size: 18
      //   }
      // },
      legend: {
        position: 'top'
      },
      tooltip: {
        callbacks: {
          label: function(context) {
            return `Nilai: ${context.raw}`;
          }
        }
      }
    },
    scales: {
      y: {
        min: 0,
        max: 100,
        // title: {
        //   display: true,
        //   text: 'Nilai (0–100)'
        // }
      },
      x: {
        ticks: {
          autoSkip: true,
          maxTicksLimit: 30 // supaya tidak overload
        },
        title: {
          display: true,
          // text: 'CPMK'
        }
      }
    }
  }
});
</script>

<?php include('5script.php'); ?>







<?php $page = 'konfigurasi_loa'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>
  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Konfigurasi - LOA
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

            
            <div class="card-footer">
              <div class="card-tools ms-auto">
                 <!-- <button type="button" 
                class="btn btn-outline-secondary btn-sm"
                onclick="window.location.href='monev-rekap-kelas.php'">
                <span class="fas fa-reply me-1"></span> Kembali
              </button> -->

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
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail.php'"><a class="nav-link ">Rekapitulasi</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail4.php'"><a class="nav-link ">Remidi</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail3.php'"><a class="nav-link ">Portofolio</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail2.php'"><a class="nav-link ">Mahasiswa</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail5.php'"><a class="nav-link active">OBE</a></li>
          </ul>


<!-- ========== CARD : LOA ========== -->
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">
                    <i class="fas fa-cogs"></i> 
                    &nbsp;Periode Akademik Aktif
                  </h5>
                </div>
                <div class="card-body">
                  <form action="https://loa.simtekim-uii.id/loa/konfigurasi/edit_konfigurasi_periode_akademik_aktif" method="POST">
                    <input type="hidden" name="kode_periode_akademik" value="KR13">
                    <div class="form-group">
                      <label>Pilih</label>
                      <div class="input-group">
                        <input type="number" max="100" min="0" maxlength="2" name="nilai_min_cpmk" placeholder="2025/2026 - Gasal" class="form-control" >
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">
                    <i class="fas fa-cogs"></i> 
                    &nbsp;Batas Minimum SKS Yudisium
                  </h5>
                </div>
                <div class="card-body">
                  <form action="https://loa.simtekim-uii.id/loa/konfigurasi/edit_min_sks_daftar_yudisium" method="POST">
                    <div class="form-group">
                      <label>Jumlah SKS</label>
                      <div class="input-group">
                        <input type="number" min="0" maxlength="2" name="min_sks_daftar_yudisium" placeholder="..." class="form-control" value="127">
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">
                    <i class="fas fa-cogs"></i> 
                  &nbsp;Batas Minimum Ketuntasan</h5>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="tabel_data" class="table table1 table-bordered table-striped table-sm">
                      <thead>
                        <tr>
                          <th width="5%">No.</th>
                          <th>Keterangan</th>
                          <th width="35%">Batas Minimal Tuntas</th>
                          <th width="15%"><center>Aksi</center></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>CPL</td>
                          <td>60.00</td>
                          <td align="center">                      
                            <button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi-so-level1 btn-disabled" onclick="edit_bobot('1')"><i class="fas fa-edit"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>IK</td>
                          <td>60.00</td>
                          <td align="center">                      
                            <button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi-so-level2 btn-disabled" onclick="edit_bobot('2')"><i class="fas fa-edit"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>CPMK</td>
                          <td>60.00</td>
                          <td align="center">                      
                            <button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi-so-level3 btn-disabled" onclick="edit_bobot('3')"><i class="fas fa-edit"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Nilai Akhir Mata Kuliah (Angka)</td>
                          <td>60.00</td>
                          <td align="center">                      
                            <button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi-so-level3 btn-disabled" onclick="edit_bobot('3')"><i class="fas fa-edit"></i></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">
                    <i class="fas fa-cogs"></i> 
                    &nbsp;CPL / Student Outcome Level
                  </h5>
                </div>
                <div class="card-body">
            
            <div class="table-responsive">
              <table id="tabel_data" class="table table1 table-bordered table-striped table-sm">
                <thead>
                  <tr>
                    <th width="5%">No.</th>
                    <th>Teks</th>
                    <th width="15%">Angka</th>
                    <th width="35%">Warna</th>
                    <th width="15%"><center>Aksi</center></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Unsatisfactory</td>
                    <td>30.00</td>
                    <td style="background-color: #F59999"><i>code : #F59999</i> </td>
                    <td align="center">                      
                      <button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi1 btn-disabled" onclick="edit('1')"><i class="fas fa-edit"></i></button>
                      <b style="color: gray;" class="hidden loading-aksi1"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Developing</td>
                    <td>54.99</td>
                    <td style="background-color: #B7C9FC"><i>code : #B7C9FC</i> </td>
                    <td align="center">                      
                      <button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi2 btn-disabled" onclick="edit('2')"><i class="fas fa-edit"></i></button>
                      <b style="color: gray;" class="hidden loading-aksi2"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Competent</td>
                    <td>70.00</td>
                    <td style="background-color: #9AE5CA"><i>code : #9AE5CA</i> </td>
                    <td align="center">                      
                      <button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi3 btn-disabled" onclick="edit('3')"><i class="fas fa-edit"></i></button>
                      <b style="color: gray;" class="hidden loading-aksi3"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Accomplished</td>
                    <td>84.99</td>
                    <td style="background-color: #A2EDD2"><i>code : #A2EDD2</i> </td>
                    <td align="center">                      
                      <button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi4 btn-disabled" onclick="edit('4')"><i class="fas fa-edit"></i></button>
                      <b style="color: gray;" class="hidden loading-aksi4"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Exemplary</td>
                    <td>100.00</td>
                    <td style="background-color: #B58DA0"><i>code : #B58DA0</i> </td>
                    <td align="center">                      
                      <button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi6 btn-disabled" onclick="edit('6')"><i class="fas fa-edit"></i></button>
                      <b style="color: gray;" class="hidden loading-aksi6"><i class="fas fa-spinner fa-pulse"></i> Loading</b>
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
<!-- ========== CARD : rubrik Kategori Indeks Pemerataan CPL ========== -->

  <div class="card shadow-sm">
    
    <!-- Card Header -->
    <div class="card-header bg-dark text-white">
      Kategori Indeks Pemerataan CPL
    </div>

    <!-- Card Body -->
    <div class="card-body">
      <table class="table table-bordered table-sm text-center">
        <thead style="background-color: #f2f2f2;">
          <tr>
            <th>Rentang Indeks</th>
            <th>Kategori</th>
            <th>Interpretasi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>≥ 0.80</strong></td>
            <td style="color: green; font-weight: bold;">Sangat Stabil</td>
            <td>Pemerataan kompetensi sangat baik dan seimbang antar CPL</td>
          </tr>
          <tr>
            <td><strong>0.65 – 0.79</strong></td>
            <td style="color: #2e8b57; font-weight: bold;">Stabil</td>
            <td>Kompetensi relatif merata dengan ketimpangan kecil</td>
          </tr>
          <tr>
            <td><strong>0.50 – 0.64</strong></td>
            <td style="color: orange; font-weight: bold;">Cukup Stabil</td>
            <td>Masih terdapat ketimpangan moderat antar CPL</td>
          </tr>
          <tr>
            <td><strong>&lt; 0.50</strong></td>
            <td style="color: red; font-weight: bold;">Tidak Stabil</td>
            <td>Ketimpangan kompetensi tinggi dan perlu perhatian serius</td>
          </tr>
        </tbody>
        <tfoot style="background-color: #f9f9f9; font-weight: bold;">
          <tr>
            <td colspan="3">
              Indeks Pemerataan dihitung berdasarkan selisih capaian CPL tertinggi dan terendah 
              relatif terhadap standar yang ditetapkan. Semakin mendekati 1, semakin merata kualitas kompetensi angkatan.
            </td>
          </tr>
        </tfoot>
      </table>
    </div>

  </div>


<!-- ========== CARD : Abstraksi Tag Pengembangan ========== -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fas fa-tags mr-1"></i>
      Tag Hasil Kelas Perkuliahan
    </h3>
  </div>

  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <thead>
        <tr>
          <th style="width: 30%;">Tag</th>
          <th>Deskripsi / Pernyataan</th>
          <th style="width: 15%;">Kategori</th>
        </tr>
      </thead>
      <tbody>

        <tr>
          <td>
            <span class="badge badge-success">Tuntas</span>
          </td>
          <td>Sebagian besar mahasiswa mencapai target CPMK yang ditetapkan.</td>
          <td>Positif</td>
        </tr>

        <tr>
          <td>
            <span class="badge badge-warning">Perlu Penguatan</span>
          </td>
          <td>Mahasiswa memahami konsep dasar namun masih lemah pada analisis lanjutan.</td>
          <td>Evaluatif</td>
        </tr>

        <tr>
          <td>
            <span class="badge badge-danger">Belum Tercapai</span>
          </td>
          <td>Target capaian belum memenuhi batas minimal yang ditentukan.</td>
          <td>Risiko</td>
        </tr>

        <tr>
          <td>
            <span class="badge badge-info">Peningkatan Signifikan</span>
          </td>
          <td>Terjadi peningkatan nilai yang signifikan setelah program remidi.</td>
          <td>Perkembangan</td>
        </tr>

        <tr>
          <td>
            <span class="badge badge-primary">Konsisten Stabil</span>
          </td>
          <td>Capaian mahasiswa stabil dan konsisten di atas rata-rata kelas.</td>
          <td>Monitoring</td>
        </tr>

      </tbody>
    </table>
  </div>
</div>



<!-- ========== CARD : Rekomendasi TAG Generalisasi OBE & CPMK ========== -->
<div class="card">
  <div class="card-header bg-primary">
    <h3 class="card-title">
      <i class="fas fa-tags mr-1"></i>
      Rekomendasi TAG Generalisasi (Berbasis OBE & CPMK)
    </h3>
  </div>

  <div class="card-body table-responsive p-0">
    <table class="table table-bordered table-hover">
      <thead class="bg-light">
        <tr>
          <th style="width: 20%;">Kategori</th>
          <th style="width: 40%;">Daftar TAG</th>
          <th style="width: 40%;">Relevansi Pengembangan / Pengadaan</th>
        </tr>
      </thead>
      <tbody>

        <!-- 1. Ketercapaian CPMK -->
        <tr>
          <td>
            <strong>1. Ketercapaian CPMK (Core OBE)</strong><br>
            <small class="text-muted">Berbasis distribusi nilai CPMK</small>
          </td>
          <td>
            <span class="badge badge-success">#CPMK_Tercapai_Kuat</span>
            <span class="badge badge-info">#CPMK_Tercapai_Minimal</span>
            <span class="badge badge-danger">#CPMK_Tidak_Tercapai</span>
            <span class="badge badge-warning">#Variansi_Tinggi</span>
            <span class="badge badge-secondary">#Dominan_Nilai_Menengah</span>
            <span class="badge badge-dark">#CPMK_Tergantung_Tugas</span>
          </td>
          <td>
            • Perlu modul penguatan<br>
            • Perlu alat evaluasi baru<br>
            • Penyederhanaan atau restrukturisasi CPMK
          </td>
        </tr>

        <!-- 2. Beban Kognitif -->
        <tr>
          <td>
            <strong>2. Beban Kognitif & Kompleksitas</strong><br>
            <small class="text-muted">Analisis pola kesulitan</small>
          </td>
          <td>
            <span class="badge badge-danger">#Materi_Terlalu_Padat</span>
            <span class="badge badge-warning">#Lonjakan_Kesulitan</span>
            <span class="badge badge-secondary">#Prasyarat_Lemah</span>
            <span class="badge badge-info">#Butuh_Pemecahan_Materi</span>
            <span class="badge badge-primary">#Butuh_Pengayaan</span>
          </td>
          <td>
            • Revisi struktur materi<br>
            • Perlu modul prasyarat<br>
            • Tambahan sesi pengayaan
          </td>
        </tr>

        <!-- 3. Metode & Aktivitas -->
        <tr>
          <td>
            <strong>3. Metode & Aktivitas Pembelajaran</strong>
          </td>
          <td>
            <span class="badge badge-warning">#Diskusi_Tidak_Efektif</span>
            <span class="badge badge-success">#Studi_Kasus_Efektif</span>
            <span class="badge badge-info">#Praktikum_Menguatkan_CPMK</span>
            <span class="badge badge-danger">#Ceramah_Tidak_Cukup</span>
            <span class="badge badge-primary">#Project_Based_Learning_Efektif</span>
          </td>
          <td>
            • Revisi RPS<br>
            • Pelatihan metode dosen<br>
            • Pengadaan tools / software / lab
          </td>
        </tr>

        <!-- 4. Instrumen Penilaian -->
        <tr>
          <td>
            <strong>4. Instrumen Penilaian</strong>
          </td>
          <td>
            <span class="badge badge-danger">#Instrumen_Terlalu_Sulit</span>
            <span class="badge badge-warning">#Rubrik_Tidak_Jelas</span>
            <span class="badge badge-secondary">#Bobot_Tidak_Proporsional</span>
            <span class="badge badge-info">#Penilaian_Terlalu_Teoritis</span>
            <span class="badge badge-primary">#Penilaian_Kurang_Kontekstual</span>
          </td>
          <td>
            • Workshop penyusunan rubrik<br>
            • Pengadaan bank soal<br>
            • Standardisasi evaluasi
          </td>
        </tr>

        <!-- 5. Kesiapan & Karakter Mahasiswa -->
        <tr>
          <td>
            <strong>5. Kesiapan & Karakter Mahasiswa</strong><br>
            <small class="text-muted">Non-presensi</small>
          </td>
          <td>
            <span class="badge badge-danger">#Literasi_Dasar_Lemah</span>
            <span class="badge badge-warning">#Pemahaman_Konsep_Lemah</span>
            <span class="badge badge-secondary">#Eksekusi_Teknis_Lemah</span>
            <span class="badge badge-info">#Analisis_Baik_Eksekusi_Lemah</span>
            <span class="badge badge-success">#Mandiri_Tinggi</span>
            <span class="badge badge-dark">#Ketergantungan_Contoh</span>
          </td>
          <td>
            • Kelas matrikulasi<br>
            • Modul prasyarat<br>
            • Asistensi tambahan
          </td>
        </tr>

        <!-- 6. Lingkungan & Dukungan -->
        <tr>
          <td>
            <strong>6. Lingkungan & Dukungan Pembelajaran</strong>
          </td>
          <td>
            <span class="badge badge-danger">#Tools_Tidak_Memadai</span>
            <span class="badge badge-warning">#Akses_Materi_Terbatas</span>
            <span class="badge badge-secondary">#Platform_Menghambat</span>
            <span class="badge badge-info">#Waktu_Pembelajaran_Kurang</span>
            <span class="badge badge-primary">#Butuh_Simulasi_Tambahan</span>
          </td>
          <td>
            • Pengadaan perangkat<br>
            • Upgrade platform<br>
            • Penambahan waktu praktik / simulasi
          </td>
        </tr>

      </tbody>
    </table>
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
          Modul Konfigurasi digunakan untuk pengaturan sistem yang bersifat administratif, seperti pengaturan (set), pengeditan template, serta pengaktifan atau penonaktifan fitur tertentu. Perubahan yang dilakukan pada modul ini akan memengaruhi perilaku dan mekanisme kerja sistem ke depannya.

Perlu dipahami bahwa perubahan konfigurasi tidak mengubah atau menghapus data historis yang telah tersimpan sebelumnya. Penyesuaian hanya berlaku pada aturan, tampilan, atau proses sistem setelah konfigurasi diterapkan.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<?php include('5script.php'); ?>
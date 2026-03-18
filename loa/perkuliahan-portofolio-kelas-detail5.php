<?php $page = 'portofolio_kelas'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Portofolio - Kelas Perkuliahan [lembar kerja dosen]
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
                onclick="window.location.href='perkuliahan-portofolio-kelas.php'">
                <span class="fas fa-reply me-1"></span> Kembali
              </button>

                <!-- <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button> -->
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button>
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
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail.php'"><a class="nav-link ">Portofolio</a></li>
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail4.php'"><a class="nav-link ">Soal Ujian</a></li>
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail2.php'"><a class="nav-link ">Penilaian Mahasiswa</a></li>
            <!-- <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail3.php'"><a class="nav-link ">Laporan(Grafik/Tabel)</a></li> -->
            <li class="nav-item" onclick="window.location='perkuliahan-portofolio-kelas-detail5.php'"><a class="nav-link active">Refleksi Kelas</a></li>
          </ul>

<div class="card-body">
  Flow mental dosen:<br>

“Di kelas tadi terjadi apa ya?”
👉 isi Catatan Kelas<br>

“Ini kayaknya perlu disampaikan ke prodi”
👉 isi Insight Prodi<br>

“Kalau saya ngajar lagi, harusnya gimana ya?”
👉 isi Catatan Pribadi

</div>
<!-- card-card refleksi -->
<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h5 class="card-title mb-0">Catatan & Evaluasi Kelas</h5>
      <small class="text-light">(utama & wajib diisi - Kolaboratif)</small>
    </div>

    <div class="card-body">
      Deskripsi:(untuk team teaching & rekap kelas)

Formulir ini digunakan untuk mencatat hasil evaluasi pelaksanaan perkuliahan pada kelas yang Anda ampu. Isian mencakup capaian pembelajaran, dinamika kelas, metode pengajaran, serta kendala yang dihadapi selama proses pembelajaran.

Catatan yang Anda tuliskan dapat dilihat oleh dosen lain dalam tim pengampu (team teaching) sebagai bahan berbagi pengalaman dan perbaikan bersama. Data ini juga akan direkap untuk memberikan gambaran umum kondisi pembelajaran kepada program studi.
      <p>
        Formulir ini digunakan untuk mencatat hasil pelaksanaan perkuliahan pada kelas yang Anda ampu. 
        Isian mencakup capaian pembelajaran, dinamika kelas, metode pengajaran, serta kendala selama proses belajar.
      </p>

      <p>
        Catatan ini dapat dilihat oleh tim dosen pengampu dan akan direkap sebagai gambaran umum kondisi pembelajaran untuk program studi.
      </p>

      <hr>
👉 Arah pengisian:
Fokuskan pada kondisi nyata di kelas, apa yang terjadi, apa yang berhasil, dan apa yang perlu diperbaiki.
      <strong>Arahan Pengisian:</strong>
      <ul>
        <li>Fokus pada kondisi nyata di kelas</li>
        <li>Catat apa yang berhasil dan tidak</li>
        <li>Sertakan kendala yang terjadi</li>
      </ul>

      <hr>

      <strong>Contoh Hal yang Ditanyakan:</strong>
      <ul>
        <li>Apakah capaian pembelajaran (CPMK) tercapai?</li>
        <li>Bagaimana tingkat partisipasi mahasiswa?</li>
        <li>Metode apa yang paling efektif?</li>
        <li>Kendala utama selama perkuliahan?</li>
        <li>Apakah penilaian sudah mencerminkan kemampuan mahasiswa?</li>
      </ul>

    </div>

    <div class="card-footer d-flex justify-content-between">
      <button class="btn btn-primary">Isi Evaluasi</button>
      <button class="btn btn-outline-secondary">Lihat Catatan Tim</button>
    </div>
  </div>
</div>



<div class="col-md-12">
  <div class="card card-purple">
    <div class="card-header">
      <h5 class="card-title mb-0">Masukan & Insight untuk Program Studi</h5>
      <small class="text-light">(lanjutan dari kelas - Strategis)</small>
    </div>

    <div class="card-body">
      Deskripsi:(untuk strategic input ke prodi)

Formulir ini digunakan untuk menyampaikan masukan, insight, dan rekomendasi Anda kepada program studi berdasarkan pengalaman mengajar pada mata kuliah dan kelas yang diampu.

Isian dapat mencakup kesiapan mahasiswa, kesesuaian kurikulum, efektivitas metode pembelajaran, hingga kebutuhan dukungan atau perbaikan sistem akademik. Masukan dari seluruh dosen akan direkap sebagai bahan evaluasi dan pengambilan keputusan di tingkat program studi.
      <p>
        Formulir ini digunakan untuk menyampaikan masukan, insight, dan rekomendasi kepada program studi berdasarkan pengalaman mengajar.
      </p>

      <p>
        Masukan Anda akan direkap bersama dosen lain sebagai bahan evaluasi dan pengambilan keputusan di tingkat program studi.
      </p>

      <hr>
👉 Arah pengisian:
Sampaikan hal-hal penting yang menurut Anda perlu diketahui oleh program studi, terutama yang berdampak pada peningkatan kualitas pembelajaran secara keseluruhan.
      <strong>Arahan Pengisian:</strong>
      <ul>
        <li>Sampaikan hal yang berdampak luas</li>
        <li>Fokus pada perbaikan sistem atau kurikulum</li>
        <li>Hindari hanya menceritakan kejadian kelas</li>
      </ul>

      <hr>

      <strong>Contoh Hal yang Ditanyakan:</strong>
      <ul>
        <li>Apakah mahasiswa memiliki prasyarat yang cukup?</li>
        <li>Apakah terdapat gap atau tumpang tindih materi?</li>
        <li>Apakah kurikulum sudah sesuai kebutuhan?</li>
        <li>Apa yang perlu diperbaiki di tingkat prodi?</li>
        <li>Rekomendasi konkret untuk peningkatan kualitas pembelajaran?</li>
      </ul>

    </div>

    <div class="card-footer d-flex justify-content-between">
      <button class="btn btn-purple">Sampaikan Masukan</button>
      <button class="btn btn-outline-secondary">Lihat Rekap Prodi</button>
    </div>
  </div>
</div>


<div class="col-md-12">
  <div class="card card-success">
    <div class="card-header">
      <h5 class="card-title mb-0">Log Pengajaran Dosen</h5>
      <small class="text-light">(opsional - Personal)</small>
    </div>

    <div class="card-body">
      Deskripsi:(untuk personal reuse & improvement)

Formulir ini digunakan sebagai catatan pribadi Anda dalam mengevaluasi pengalaman mengajar pada mata kuliah yang diampu. Isian mencakup penilaian terhadap metode pengajaran, materi, penilaian (assessment), serta rencana perbaikan untuk pelaksanaan di semester berikutnya.

Catatan ini bersifat pribadi dan hanya dapat diakses oleh Anda. Tujuannya adalah membantu Anda mempersiapkan pengajaran yang lebih baik ketika mengampu mata kuliah yang sama di masa mendatang.
      <p>
        Formulir ini digunakan sebagai catatan pribadi Anda dalam mengevaluasi pengalaman mengajar pada mata kuliah yang diampu.
      </p>

      <p>
        Catatan ini hanya dapat diakses oleh Anda dan bertujuan membantu persiapan pengajaran yang lebih baik di semester berikutnya.
      </p>

      <hr>
👉 Arah pengisian:
Tuliskan secara jujur hal-hal yang menurut Anda berhasil, kurang efektif, serta ide perbaikan yang ingin Anda lakukan di semester berikutnya.
      <strong>Arahan Pengisian:</strong>
      <ul>
        <li>Isi secara jujur dan reflektif</li>
        <li>Fokus pada pengalaman pribadi mengajar</li>
        <li>Tuliskan rencana perbaikan konkret</li>
      </ul>

      <hr>

      <strong>Contoh Hal yang Ditanyakan:</strong>
      <ul>
        <li>Apa yang berjalan baik dalam pengajaran saya?</li>
        <li>Apa yang tidak berjalan sesuai harapan?</li>
        <li>Metode apa yang akan saya pertahankan?</li>
        <li>Apa yang perlu saya ubah di semester berikutnya?</li>
        <li>Hal apa yang tidak boleh terulang?</li>
      </ul>

    </div>

    <div class="card-footer d-flex justify-content-between">
      <button class="btn btn-success">Isi Catatan</button>
      <button class="btn btn-outline-secondary">Lihat Riwayat Saya</button>
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


<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content border-0 shadow">

      <!-- Header -->
      <div class="modal-header bg-light">
        <h5 class="modal-title fw-semibold">
          <i class="fas fa-plus-circle text-primary me-2"></i>
          Tambah Soal Ujian
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
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
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Batal
        </button>
        <button type="submit" class="btn btn-primary" form="formTambahSoal">
          <i class="fas fa-save me-1"></i> Simpan
        </button>
      </div>

    </div>
  </div>
</div>

<?php include('5script.php'); ?>
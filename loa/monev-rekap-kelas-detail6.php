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
                <button type="button" 
                class="btn btn-outline-secondary btn-sm"
                onclick="window.location.href='perkuliahan-portofolio-kelas-detail5.php'">
                <span class="fas fa-edit me-1"></span> Pengisian Refleksi
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
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail3.php'"><a class="nav-link ">Portofolio</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail2.php'"><a class="nav-link ">Mahasiswa</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail6.php'"><a class="nav-link active">Refleksi</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail5.php'"><a class="nav-link ">OBE</a></li>
          </ul>
     

<!-- ========== CARD : Ringkasan Refleksi Kelas untuk Tim Kurikulum ========== -->
<div class="card ">
  <div class="card-body">

    <!-- ================= TAG UTAMA ================= -->
    <div class="mb-4">
      <h5 class="text-primary"><strong>TAG Utama Kelas</strong></h5>
      <div>
        <span class="badge badge-danger">#CPMK_Tidak_Tercapai</span>
        <span class="badge badge-warning">#Variansi_Tinggi</span>
        <span class="badge badge-info">#Prasyarat_Lemah</span>
        <span class="badge badge-secondary">#Instrumen_Terlalu_Sulit</span>
        <span class="badge badge-primary">#Butuh_Pemecahan_Materi</span>
      </div>
    </div>

    <hr>

    <!-- ================= RINGKASAN OBE ================= -->
    <div class="mb-4">
      <h5 class="text-primary"><strong>1. Ringkasan Ketercapaian OBE</strong></h5>
      <p>
        CPMK 1 dan 2 relatif tercapai secara konsisten, namun CPMK 3 menunjukkan penurunan signifikan.
        Mahasiswa mulai tertinggal pada tahap analisis kasus lanjutan.
        Distribusi nilai menunjukkan variansi tinggi antara mahasiswa kuat dan lemah.
      </p>
    </div>

    <!-- ================= METODE ================= -->
    <div class="mb-4">
      <h5 class="text-primary"><strong>2. Temuan Metode Pembelajaran</strong></h5>
      <ul>
        <li>Studi kasus efektif meningkatkan pemahaman konseptual.</li>
        <li>Ceramah murni kurang efektif untuk CPMK analitis.</li>
        <li>Project akhir menjadi bottleneck utama kelas.</li>
      </ul>
    </div>

    <!-- ================= PENILAIAN ================= -->
    <div class="mb-4">
      <h5 class="text-primary"><strong>3. Evaluasi Instrumen Penilaian</strong></h5>
      <ul>
        <li>Rubrik belum dipahami mahasiswa secara merata.</li>
        <li>Instrumen cenderung mengukur teknis, bukan kedalaman analisis.</li>
        <li>Bobot tugas akhir terlalu dominan.</li>
      </ul>
    </div>

    <!-- ================= POLA MAHASISWA ================= -->
    <div class="mb-4">
      <h5 class="text-primary"><strong>4. Pola Mahasiswa</strong></h5>
      <p>
        Kelemahan dominan pada prasyarat konseptual.
        Mahasiswa dengan kemampuan mandiri tinggi berkembang pesat,
        namun mahasiswa dengan ketergantungan contoh mengalami stagnasi.
      </p>
    </div>

    <hr>

    <!-- ================= PRIORITAS TINDAK LANJUT ================= -->
    <div class="alert alert-warning">
      <h5><i class="fas fa-exclamation-triangle mr-1"></i> Isu Prioritas</h5>
      <ul class="mb-0">
        <li>Lonjakan kesulitan pada CPMK 3</li>
        <li>Prasyarat mahasiswa belum merata</li>
        <li>Desain instrumen perlu evaluasi ulang</li>
      </ul>
    </div>

    <!-- ================= REKOMENDASI PENGADAAN ================= -->
    <div class="alert alert-info">
      <h5><i class="fas fa-lightbulb mr-1"></i> Rekomendasi untuk Prodi</h5>
      <ul class="mb-0">
        <li>Pengembangan modul prasyarat sebelum CPMK 3</li>
        <li>Workshop penyusunan rubrik berbasis OBE</li>
        <li>Pengadaan software simulasi untuk analisis kasus</li>
      </ul>
    </div>

  </div>

  <div class="card-footer text-right">
    <button class="btn btn-outline-primary btn-sm">
      <i class="fas fa-file-download mr-1"></i> Unduh Ringkasan
    </button>
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
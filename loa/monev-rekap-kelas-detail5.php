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
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail5.php'"><a class="nav-link active">Refleksi</a></li>
            <li class="nav-item" onclick="window.location='monev-rekap-kelas-detail6.php'"><a class="nav-link ">OBE</a></li>
          </ul>
     





<!-- CARD RINGKASAN CATATAN&EVALUASI SEMUA DOSEN KELAS INI -->
<div class="col-md-12">
  <div class="card card-primary">

    <!-- HEADER -->
    <div class="card-header">
      <h5 class="card-title mb-0">
        Rekapan Catatan & Evaluasi Kelas
      </h5>
      <small class="text-light">
        Wajib diisi • Kolaboratif (Team Teaching)
      </small>
    </div>

    <!-- BODY -->
    <div class="card-body">


      <!-- RINGKASAN -->
      <h6><strong>Ringkasan Umum</strong></h6>
      <table class="table table-bordered table-sm">
        <tr>
          <th>Capaian CPMK</th>
          <td>2 Tercapai, 1 Kurang</td>
        </tr>
        <tr>
          <th>Partisipasi</th>
          <td>Sedang</td>
        </tr>
        <tr>
          <th>Metode Efektif</th>
          <td>Praktikum & Studi Kasus</td>
        </tr>
        <tr>
          <th>Kendala Dominan</th>
          <td>Perbedaan kemampuan mahasiswa</td>
        </tr>
      </table>

      <hr>

      <!-- DOSEN LIST (ACCORDION) -->
      <h6><strong>Detail Catatan Dosen</strong></h6>

      <div id="accordion">

        <!-- DOSEN 1 -->
        <div class="card">
          <div class="card-header">
            <h6 class="mb-0">
              <a data-toggle="collapse" href="#dosen1">
                Ahmad Fauzi
              </a>
            </h6>
          </div>
          <div id="dosen1" class="collapse show" data-parent="#accordion">
            <div class="card-body">
              <p><strong>CPMK:</strong> HTML (✔), Form (⚠)</p>
              <p><strong>Dinamika:</strong> Partisipasi sedang</p>
              <p><strong>Metode Efektif:</strong> Live coding</p>
              <p><strong>Kendala:</strong> Dasar logika mahasiswa lemah</p>
              <p><strong>Catatan:</strong> Perlu pre-test awal</p>
            </div>
          </div>
        </div>

        <!-- DOSEN 2 -->
        <div class="card">
          <div class="card-header">
            <h6 class="mb-0">
              <a data-toggle="collapse" href="#dosen2">
                Siti Rahma
              </a>
            </h6>
          </div>
          <div id="dosen2" class="collapse" data-parent="#accordion">
            <div class="card-body">
              <p><strong>CPMK:</strong> HTML (✔), Form (⚠), CRUD (❌)</p>
              <p><strong>Dinamika:</strong> Awal pasif, akhir aktif</p>
              <p><strong>Metode Efektif:</strong> Praktikum langsung</p>
              <p><strong>Kendala:</strong> Gap kemampuan tinggi</p>
              <p><strong>Catatan:</strong> Perlu diferensiasi tugas</p>
            </div>
          </div>
        </div>

        <!-- DOSEN 3 -->
        <div class="card">
          <div class="card-header">
            <h6 class="mb-0">
              <a data-toggle="collapse" href="#dosen3">
                Budi Santoso
              </a>
            </h6>
          </div>
          <div id="dosen3" class="collapse" data-parent="#accordion">
            <div class="card-body">
              <p><strong>CPMK:</strong> HTML (✔), Form (⚠), CRUD (⚠)</p>
              <p><strong>Dinamika:</strong> Variatif</p>
              <p><strong>Metode Efektif:</strong> Studi kasus</p>
              <p><strong>Kendala:</strong> Kurang latihan mandiri</p>
              <p><strong>Catatan:</strong> Perlu rubrik penilaian jelas</p>
            </div>
          </div>
        </div>

      </div>

      <hr>

      <!-- TAGGING -->
      <h6><strong>Survey Populis (Tagging)</strong></h6>
      <span class="badge badge-danger">Mahasiswa belum siap (2)</span>
      <span class="badge badge-success">Metode praktik efektif (3)</span>
      <span class="badge badge-warning">Waktu tidak cukup (2)</span>
      <span class="badge badge-info">Assessment perlu perbaikan (2)</span>

      <hr>

      <!-- INSIGHT -->
      <h6><strong>Insight Otomatis</strong></h6>
      <ul>
        <li>Metode praktik paling efektif di semua dosen</li>
        <li>CPMK lanjutan belum tercapai optimal</li>
        <li>Gap kemampuan mahasiswa cukup tinggi</li>
      </ul>

    </div>

    <!-- FOOTER -->
    <div class="card-footer d-flex justify-content-between">
      <!-- <button class="btn btn-primary">Tambah Catatan</button> -->
      <button class="btn btn-outline-secondary">Export Rekap</button>
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


<?php include('5script.php'); ?>
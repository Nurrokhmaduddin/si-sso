<?php $page = 'progress_kelas'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Progress - Kelas Perkuliahan
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
                        <td width="30%"><b> Tahun Akademik</b></td>
                        <td>2024/2025 - Gasal</td>
                      </tr>
                      <tr>
                        <td width="30%"><b> Dosen Pengampu</b></td>
                        <td>Tri Nugroho Sulistyantoro, S.T., M.T. - (195110502)</td>
                      </tr>
                      <tr>
                        <td width="30%"><b> Mata Kuliah</b></td>
                        <td>Metode Pelaksanaan Bangunan - (STS704)</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-lg-5">
                  <table class="table table-sm table-hover table-bordered table-striped deta">
                    <tbody>
                      <tr>
                        <td width="30%"><b> Jumlah CPMK</b></td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td width="30%"><b> Peminatan</b></td>
                        <td>Civil Engineering Regular - (511)</td>
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
            <li class="nav-item" onclick="window.location='progres-kelas-semester-detail.php'"><a class="nav-link ">Progres(Grafik/Tabel)</a></li>
            <!-- <li class="nav-item" onclick="window.location='monev_portfolio_cpmk_detail2.php'"><a class="nav-link ">Mahasiswa</a></li>
            <li class="nav-item" onclick="window.location='monev_portfolio_cpmk_detail3.php'"><a class="nav-link ">Portofolio</a></li> -->
            <li class="nav-item" onclick="window.location='progres-kelas-semester-detail4.php'"><a class="nav-link active">Pengembangan</a></li>
          </ul>

        
          <!-- ========== CARD 3: Tabel saja ========== -->
          <div class="card shadow-sm">
            <div class="card-body">
              <div class="table-responsive">
                <table id="tbl" class="table table-sm table-bordered table-hover align-middle mb-0">
                  <thead class="table-dark text-center">
                    <tr>
                      <th>Lampiran</th>
                      <th>Periode A</th>
                      <th>Periode B</th>
                    </tr>
                  </thead>

                  <tbody>

                    <tr>
                      <td>
                        Dokumen RPS 
                        <span class="badge bg-success">Valid</span>
                      </td>
                      <td>
                        <a href="#" target="_blank" title="Unduh RPS">
                          <button type="button" class="btn btn-xs btn-success">
                            <i class="fas fa-file me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>update_at</i></small>
                      </td>
                      <td>
                        <a href="#" target="_blank" title="Unduh RPS">
                          <button type="button" class="btn btn-xs btn-success">
                            <i class="fas fa-file me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>update_at</i></small>
                      </td>
                    </tr>

                    <tr>
                      <td>Materi Pembelajaran (slides, modul, bahan ajar)</td>
                      <td>
                        <a href="#" target="_blank">
                          <button type="button" class="btn btn-xs btn-info">
                            <i class="fas fa-link me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>update_at</i></small>
                      </td>
                      <td>
                        <a href="#" target="_blank">
                          <button type="button" class="btn btn-xs btn-info">
                            <i class="fas fa-link me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>update_at</i></small>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Dokumen Penugasan Mahasiswa 
                        <span class="badge bg-secondary">Proses</span>
                      </td>
                      <td>
                        <a href="https://drive.google.com/drive/folders/1Ba6yZ2KLWZC992tVO7wxpcfxaOYb8Eyi?usp=drive_link" target="_blank">
                          <button type="button" class="btn btn-xs btn-info">
                            <i class="fas fa-link me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>updated 19 Sep 2025</i></small>
                      </td>
                      <td>
                        <a href="https://drive.google.com/drive/folders/1Ba6yZ2KLWZC992tVO7wxpcfxaOYb8Eyi?usp=drive_link" target="_blank">
                          <button type="button" class="btn btn-xs btn-info">
                            <i class="fas fa-link me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>updated 19 Sep 2025</i></small>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Soal Ujian UTS/UAS 
                        <span class="badge bg-danger">Rejected</span>
                        <small class="text-muted ms-1">(dengan validasi prodi)</small>
                      </td>
                      <td>
                        <a href="https://drive.google.com/drive/folders/1Ba6yZ2KLWZC992tVO7wxpcfxaOYb8Eyi?usp=drive_link" target="_blank">
                          <button type="button" class="btn btn-xs btn-info">
                            <i class="fas fa-link me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>update_at</i></small>
                      </td>
                      <td>
                        <a href="https://drive.google.com/drive/folders/1Ba6yZ2KLWZC992tVO7wxpcfxaOYb8Eyi?usp=drive_link" target="_blank">
                          <button type="button" class="btn btn-xs btn-info">
                            <i class="fas fa-link me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>update_at</i></small>
                      </td>
                    </tr>

                    <tr>
                      <td>Penilaian CPMK oleh Dosen</td>
                      <td>
                        <a href="monev-rekap-kelas-detail2.php">
                          <button type="button" class="btn btn-xs btn-info">
                            <i class="fas fa-link me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>update_at 21 Jan 2024</i></small>
                      </td>
                      <td>
                        <a href="monev-rekap-kelas-detail2.php">
                          <button type="button" class="btn btn-xs btn-info">
                            <i class="fas fa-link me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>update_at 21 Jan 2024</i></small>
                      </td>
                    </tr>

                    <tr>
                      <td>Evaluasi Dosen oleh Mahasiswa</td>
                      <td>
                        <a href="portfolio_cpmk_detail2.php" target="_blank">
                          <button type="button" class="btn btn-xs btn-info">
                            <i class="fas fa-link me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>update_at</i></small>
                      </td>
                      <td>
                        <a href="portfolio_cpmk_detail2.php" target="_blank">
                          <button type="button" class="btn btn-xs btn-info">
                            <i class="fas fa-link me-1"></i> Download
                          </button>
                        </a>
                        <small class="text-muted ms-2"><i>update_at</i></small>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>



          <!-- ================= Card  : Catatan evaluasi dan pengembangan) ================= -->
          <div class="row mb-4">
            <div class="col-12">
              <h4 class="mb-1">Catatan Evaluasi dan Perencanaan</h4>
              <small class="text-muted">
                Kolom kiri menampilkan catatan <strong>Periode A</strong> (arsip/sebelumnya).  
                Kolom kanan digunakan untuk mengisi dan menyimpan catatan <strong>Periode B</strong>.
              </small>
            </div>
          </div>


          <!-- ROW 1 : EVALUASI  -->
          <div class="row mb-4">

            <!-- KIRI : Periode A -->
            <div class="col-lg-6">
              <div class="card h-100 shadow-sm">
                <div class="card-header bg-secondary text-white">
                  <h5 class="mb-0">
                    <i class="fas fa-clipboard-list me-2"></i>
                    Evaluasi Hasil Pembelajaran
                  </h5>
                  <small>Periode A</small>
                </div>
                <div class="card-body">
                  <p class="mb-0">
                    secara keseluruhan pembelajaran telah berjalan dengan baik
                  </p>
                </div>
              </div>
            </div>


            <!-- KANAN : Periode B -->
            <div class="col-lg-6">
              <div class="card h-100 shadow-sm border-primary">
                <div class="card-header bg-primary text-white">
                  <h5 class="mb-0">
                    <i class="fas fa-edit me-2"></i>
                    Evaluasi Hasil Pembelajaran
                  </h5>
                  <small>Periode B</small>
                </div>

                <form action="https://loa.simtekim-uii.id/loa/portofolio_cpmk/edit_evaluasi_hasil"
                method="POST">
                <input type="hidden" name="id" value="4100">

                <div class="card-body">
                  <textarea class="form-control"
                  name="evaluasi_hasil"
                  placeholder="Tuliskan evaluasi periode B..."
                  style="min-height:200px;"></textarea>
                </div>

                <div class="card-footer bg-white">
                  <button type="submit" class="btn btn-primary w-100">
                    <i class="fas fa-save me-1"></i> Simpan Evaluasi Periode B
                  </button>
                </div>
              </form>

            </div>
          </div>
          </div>
          <!--  ROW 2 : RENCANA  -->
          <div class="row">

            <!-- KIRI : Periode A -->
            <div class="col-lg-6">
              <div class="card h-100 shadow-sm">
                <div class="card-header bg-secondary text-white">
                  <h5 class="mb-0">
                    <i class="fas fa-chart-line me-2"></i>
                    Rencana Pengembangan Perkuliahan
                  </h5>
                  <small>Periode A</small>
                </div>
                <div class="card-body">
                  <p class="mb-0">
                    perlu meningkatkan interaksi
                  </p>
                </div>
              </div>
            </div>


            <!-- KANAN : Periode B -->
            <div class="col-lg-6">
              <div class="card h-100 shadow-sm border-primary">
                <div class="card-header bg-primary text-white">
                  <h5 class="mb-0">
                    <i class="fas fa-edit me-2"></i>
                    Rencana Pengembangan Perkuliahan
                  </h5>
                  <small>Periode B</small>
                </div>

                <form action="https://loa.simtekim-uii.id/loa/portofolio_cpmk/edit_rencana_pengembangan"
                method="POST">
                <input type="hidden" name="id" value="4100">

                <div class="card-body">
                  <textarea class="form-control"
                  name="rencana_pengembangan"
                  placeholder="Tuliskan rencana periode B..."
                  style="min-height:200px;"></textarea>
                </div>

                <div class="card-footer bg-white">
                  <button type="submit" class="btn btn-primary w-100">
                    <i class="fas fa-save me-1"></i> Simpan Rencana Periode B
                  </button>
                </div>
              </form>

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
















        

        
     

<!-- <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-annotation@1.3.1/dist/chartjs-plugin-annotation.min.js"></script> -->

<!-- Chart Script -->
<script>
    const ctx2 = document.getElementById("chartCPL2");

    new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['CPMK 1', 'CPMK 2', 'CPMK 3'],
            datasets: [
                {
                    label: 'Periode A',
                    data: [82, 75,  81.66],
                    backgroundColor: '#6c757d',
                    borderColor: '#6c757d',
                    borderWidth: 1
                },
                {
                    label: 'Periode B',
                    data: [90, 80, 87.33],
                    backgroundColor: '#007bff',
                    borderColor: '#007bff',
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'top' },
                annotation: {
                    annotations: {
                        targetLine: {
                            type: 'line',
                            yMin: 85,      // <<< TARGET CAPAIAN
                            yMax: 85,
                            borderColor: 'red',
                            borderWidth: 2,
                            borderDash: [6, 6],
                            label: {
                                display: true,
                                content: 'Target 85',
                                position: 'start',
                                color: 'red',
                                backgroundColor: 'rgba(255,255,255,0.7)',
                                padding: 4
                            }
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });


</script>
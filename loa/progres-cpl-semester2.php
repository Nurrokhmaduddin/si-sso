<?php $page = 'progress_cpl'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Progres CPL Semester
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
          <i class="fas fa-question-circle"></i>
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
            <!-- <div class="card-header">
              <h5 class="card-title mb-0"><i class="fas fa-filter "></i> Judul Tabel yang terdampak tombol aksi ini </h5>              
            </div> -->
            <div class="card-body ">
              <div class="row">

                <div class="col-md-6">
                <b>Set Pemetaan:</b> KT-6 (K20) Kurikulum 2025 full stage &nbsp;
              </div>
              <div class="col-md-6">
                <b>Periode Akademik:</b> 2025/2026 Ganjil- Semua
              </div>
              <div class="col-md-6">
                <b>Periode A:</b> 2024-Genap
              </div>
              <div class="col-md-6">
                <b>Periode B:</b> 2025-Genap
              </div>
                
              </div>
            </div>
            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>                
              </div>

            </div>
          </div>

        
   

  <!-- TAB NAV  -->
  <ul class="nav nav-tabs">   
    <li class="nav-item" onclick="window.location='progres-cpl-semester.php'"><a class="nav-link ">CPL</a></li>
    <li class="nav-item" onclick="window.location='progres-cpl-semester2.php'"><a class="nav-link active">IK</a></li>
    <!-- <li class="nav-item" onclick="window.location='progres-cpl-semester3.php'"><a class="nav-link ">Detail</a></li> -->
  </ul>


<!-- ========== CARD 4: Chart CPL-IK ========== -->     
        <div class="card">   
          <!-- CARD HEADER -->  
          <div class="card-header ">         
            <h5 class="card-title mb-0">
              <button class="btn btn-sm btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#chartCPLIK1">
                <i class="fas fa-expand"></i>
              </button>
              IK 1 – Kemampuan berkomunikasi secara efektif baik lisan maupun tulisan
            </h5>
          </div>
          <!-- CARD BODY -->
          <div class="card-body " id="chartCPLIK1">
            <!-- Chart Container -->
            <div class="chart-container">
              <canvas id="chartCPL1" width="100%" height="30"></canvas>
            </div>
            <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
            <div class="table-responsive">
              <table class="table table-sm table-bordered">
               <thead class="thead-dark">
                <tr>
                  <th style="width: 80px;">Kode CPMK</th>
                  <th style="width: 80px;">NAMA MK</th>
                  <th>Deskripsi CPMK</th>                    
                  <th>Periode A</th>
                  <th>Periode B</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>STS190-1</td>
                  <td>Pengantar Ilmu Komunikasi</td>
                  <td>Mahasiswa mampu menyampaikan informasi secara lisan secara runtut, jelas, dan mudah dipahami.</td>
                  <td><a href="progres-cpl-semester3.php">78</a></td>
                  <td><a href="progres-cpl-semester3.php">80</a></td>
                </tr>
                <tr>
                  <td>STS230-2</td>
                  <td>Dasar Logika Berpikir</td>
                  <td>Mahasiswa mampu menulis laporan/tulisan akademik sesuai kaidah bahasa dan struktur penulisan yang baik.</td>
                  <td><a href="progres-cpl-semester3.php">68</a></td>
                  <td><a href="progres-cpl-semester3.php">70</a></td>
                </tr>
                <tr>
                  <td>STS333-1</td>
                  <td>Komunikasi Organisasi</td>
                  <td>Mahasiswa mampu berkomunikasi secara profesional dalam konteks akademik dan industri, termasuk etika komunikasi digital.</td>
                  <td><a href="progres-cpl-semester3.php">58</a></td>
                  <td><a href="progres-cpl-semester3.php">60</a></td>
                </tr>
              </tbody>
              </table>
            </div>
          </div>          
        </div>

         <!-- ========== CARD 4: Chart CPL-IK ========== -->     
        <div class="card">   
          <!-- CARD HEADER -->  
          <div class="card-header ">         
            <h5 class="card-title mb-0">
              <button class="btn btn-sm btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#chartCPLIK2">
                <i class="fas fa-expand"></i>
              </button>
              IK 2 – Kemampuan untuk menginternalisasi semangat kemandirian dan Kewirausahaan
            </h5>
          </div>
          <!-- CARD BODY -->
          <div class="card-body " >
            <!-- Chart Container -->
            <div class="chart-container">
              <canvas id="chartCPL2" width="100%" height="30"></canvas>
            </div>
          </div>
          <!-- CARD FOOTER -->
          <div class="card-footer collapse" id="chartCPLIK2">
            <h6 class="font-weight-bold">Daftar Capaian Mata Kuliah (CPMK)</h6>
            <div class="table-responsive">
              <table class="table table-sm table-bordered">
                thead class="thead-dark">
                  <tr>
                    <th style="width: 80px;">Kode CPMK</th>
                    <th style="width: 80px;">NAMA MK</th>
                    <th>Deskripsi CPMK</th>                    
                    <th>Periode A</th>
                    <th>Periode B</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>                    
                    <td>UNI910-5</td>
                    <td>Pengantar Ilmu Politik</td>
                    <td>Mahasiswa mampu menyampaikan informasi secara lisan secara runtut, jelas, dan mudah dipahami.</td>
                    <td><a href="progres-cpl-semester3.php">78</a></td>
                    <td><a href="progres-cpl-semester3.php">80</a></td>
                  </tr>
                  <tr>
                    <td>UNI912-6</td>
                    <td>Dasar Elemen Komunikasi</td>
                    <td>Mahasiswa mampu menulis laporan/tulisan akademik sesuai kaidah bahasa dan struktur penulisan yang baik.</td>
                    <td><a href="progres-cpl-semester3.php">78</a></td>
                    <td><a href="progres-cpl-semester3.php">80</a></td>
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
  <!-- /.content-wrapper -->

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
          <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Angkatan --</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="NonAktif">NonAktif</option>
            </select>
          </div>
       
       </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info">Terapkan Filter</button>
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
          Perhitungan Capaian Pembelajaran Lulusan (CPL) dilakukan memperbandingkan 2 waktu periode.
          Ambil nilai CPMK dari periode A dan Periode B, bentuk nilai IKnya. abaikan faktor angkatan mahasiswa. fokuskan pada kelas perkuliahan di Periode A dan Periode B. Fungsinya untuk membandingkan pencapaian IK antara dua periode.
        </p>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<!-- Chart Script -->
<script>
    const ctx = document.getElementById("chartCPL1");

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['CPMK 1', 'CPMK 2', 'CPMK 3', 'IK 1'],
            datasets: [
                {
                    label: 'Periode A',
                    data: [82, 75, 88, 81.66],
                    backgroundColor: '#6c757d',
                    borderColor: '#6c757d',
                    borderWidth: 1
                },
                {
                    label: 'Periode B',
                    data: [90, 80, 92, 87.33],
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
<script>
    const ctx2 = document.getElementById("chartCPL2");

    new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['CPMK 4', 'CPMK 5',  'IK 2'],
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
<?php include('5script.php'); ?>
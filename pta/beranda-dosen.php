<?php $page='';?>
<?php include "1header.php"; ?>
<?php include "2navbar.php"; ?>
<?php include "3sidebar.php"; ?>
 <!-- Custom Style -->
  <style>
    :root {
      --card-radius: 12px;
      --accent: #0d6efd;
      --soft-bg: #f8f9fa;
      --badge-bg: #eef6ff;
    }

    body {
      background: linear-gradient(180deg, #f4f7fb 0%, #ffffff 60%);
      font-family: Inter, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }

    .card {
      border-radius: var(--card-radius);
      box-shadow: 0 6px 18px rgba(16, 24, 40, 0.06);
    }

    .role-tag {
      font-size: 0.85rem;
      padding: 4px 10px;
      border-radius: 999px;
      background: var(--badge-bg);
      color: #0b5ed7;
      font-weight: 600;
    }

    .xp-bar {
      height: 10px;
      border-radius: 999px;
      background: #e9eef9;
    }

    .xp-fill {
      height: 100%;
      border-radius: 999px;
      background: linear-gradient(90deg, #6ea8fe, #0d6efd);
    }

    .icon-circle {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: #f0f6ff;
      color: #0d6efd;
    }

    .status-circle {
      width: 60px;
      height: 60px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      color: #fff;
      font-size: 1.5rem;
      margin: 0 auto 0.5rem;
      cursor: pointer;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .status-circle:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .badge-chip {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 6px 10px;
      border-radius: 999px;
      background: #fff;
      border: 1px solid #eef2ff;
      font-weight: 600;
      font-size: 0.85rem;
      box-shadow: 0 2px 6px rgba(13, 110, 253, 0.04);
    }
  </style>

  <!-- Content Wrapper -->
  <div class="content-wrapper" style="min-height: 600px;">
    <div class="content-header">
    
    </div>
    <section class="content">
      <div class="container-fluid">



        <div class="row g-4"> 
          <!-- Card Identitas  --> 
          <div class="col-lg-12"> 
            <div class="card p-3"> 
              <div class="d-flex align-items-start"> 
                <div class="me-3"> 
                  <div class="icon-circle">
                    <i class="fas fa-chalkboard-teacher"></i>
                  </div> 
                </div> 
                <div class="flex-grow-1"> 
                  <div class="d-flex justify-content-between"> 
                    <div> 
                      <div class="small text-muted">Dosen</div> 
                      <h5 class="mb-0">Dr. Siti Rahma</h5> 
                      <div class="small text-muted">NIP: 198012345 • Program Studi: Teknik Informatika</div> 
                    </div> 
                    <div class="text-end"> 
                      <div class="role-tag">Lv 3 – Dosen Proaktif</div> 
                      <div class="small text-muted">XP: 320 / 500 (Reset Semester)</div> 
                    </div> 
                  </div> 
                  <hr> 
                  <div class="mb-3"> 
                    <div class="d-flex justify-content-between small mb-1"> 
                      <div class="fw-semibold">Progress Next Level</div> 
                      <div class="small text-muted">40%</div> 
                    </div> 
                    <div class="xp-bar mb-2"> 
                      <div class="xp-fill" style="width:40%"></div> 
                    </div> 
                  </div> 
                </div> 
              </div> 
            </div> 
          </div> 
          <!-- CARD SUMMARY SEMESTER --> 
          <div class="col-lg-12"> 
            <div class="card p-3"> <h5 class="mb-3"><i class="fas fa-medal me-1"></i> Progress Board: 2024/2025 – Genap</h5> 
              <div class="card-body"> 
                <div class="row text-center"> 
                  <div class="col"> 
                    <div class="status-circle" style="background-color: #20c997;" data-bs-toggle="tooltip" title="Mahasiswa ini rutin berkomunikasi dengan dosen"> <i class="fas fa-user-check"></i> </div> 
                    <p class="status-label">Aktif</p> 
                    <p class="status-count">8</p> 
                  </div> 
                  <div class="col"> 
                    <div class="status-circle bg-warning" data-bs-toggle="tooltip" title="Mahasiswa belum berkomunikasi lebih dari 30 hari"> <i class="fas fa-user-clock"></i> </div> 
                    <p class="status-label">Pasif</p> 
                    <p class="status-count">3</p> 
                  </div> 
                  <div class="col"> 
                    <div class="status-circle bg-danger" data-bs-toggle="tooltip" title="Mahasiswa belum memperpanjang bimbingan periode sebelumnya"> <i class="fas fa-user-times"></i> </div> 
                    <p class="status-label">Macet</p> 
                    <p class="status-count">1</p> 
                  </div> 
                  <div class="col"> 
                    <div class="status-circle" style="background-color: #0d6efd;" data-bs-toggle="tooltip" title="Mahasiswa telah menyelesaikan semua tahap bimbingan"> <i class="fas fa-user-check"></i> </div> 
                    <p class="status-label">Selesai</p> 
                    <p class="status-count">5</p> 
                  </div> 
                </div> 
                <style>
                  .status-circle {
                    width: 60px;
                    height: 60px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border-radius: 50%;
                    color: #ffffff;
                    font-size: 1.5rem;
                    margin: 0 auto 0.5rem;
                    cursor: pointer;
                    transition: transform 0.2s ease, box-shadow 0.2s ease;
                  }

                  .status-circle:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
                  }

                  .status-label {
                    text-align: center;
                    margin-bottom: 0;
                  }

                  .status-count {
                    text-align: center;
                    margin-top: 0;
                  }
                </style>

                <script>
                  document.addEventListener("DOMContentLoaded", function () {
                    const tooltipTriggerList = [].slice.call(
                      document.querySelectorAll('[data-bs-toggle="tooltip"]')
                      );

                    tooltipTriggerList.map(function (tooltipTriggerEl) {
                      return new bootstrap.Tooltip(tooltipTriggerEl);
                    });
                  });
                </script>
                <hr>  
                <h6>Achievements & Badges</h6> 
                <div class="d-flex flex-wrap gap-2 mt-0"> 
                  <div class="badge-chip badge-completed"><i class="fa fa-fire"></i> Streak 5 hari</div> 
                  <div class="badge-chip"><i class="fa fa-check-circle"></i> 4 Ujian Sehari</div> 
                  <div class="badge-chip"><i class="fa fa-stopwatch"></i> Respons Konsisten</div> 
                  <div class="badge-chip" style="color:#dc3545;"> Mahasiswa Macet <i class="fas fa-circle"></i> X 1 </div> 
                </div> 
                <!-- Health Bar --> 
                <div class="health-bar-container mt-3 position-relative" 
                style="height: 24px; 
                border-radius: 12px; 
                background: #eee;"> 
                <?php $d = 76; ?> 
                <div class="health-bar-fill" 
                style="width:
                <?php echo $d;?>%; 
                height:100%; 
                background: #20c997; 
                border-radius: 12px 0 0 12px; 
                position: absolute; 
                right: 0;"> 
                  <span class="health-bar-text" style="position:absolute; width:100%; text-align:center; font-size:0.85rem; color:#fff; font-weight:600; line-height:24px;"> Energy Bar <?php echo $d;?>/100 (Reset Daily) </span> 
                </div> 
              </div> 
            </div> 
          </div> 
        </div> 
        <!-- ROW 2 : QUEST / EVENT --> 
        <div class="col-lg-12"> 
          <div class="card p-3"> 
            <h5 class="mb-3"><i class="fas fa-flag-checkered me-1"></i> Jadwal Quest Pengujian (Terdekat)</h5> 
            <div class="table-responsive"> 
              <table class="table table-sm table-hover mb-0"> 
                <thead class="table-light"> 
                  <tr> 
                    <th>Jadwal</th> 
                    <th>Event/Stage</th> 
                    <th>Jenis Aktivitas</th> 
                    <th>Mahasiswa</th> 
                    <th>Peran</th> 
                    <th>Aksi</th> 
                  </tr> 
                </thead> 
                <tbody> 
                  <tr> 
                    <td>09 Okt 2025</td> 
                    <td>Seminar Proposal</td> 
                    <td>Skripsi</td> 
                    <td>Windah B</td> 
                    <td>Pembimbing Utama</td> 
                    <td><button class="btn btn-sm btn-outline-primary">Nilai</button></td> 
                  </tr> 
                  <tr> 
                    <td>25 Des 2025</td> 
                    <td>Sidang</td> 
                    <td>TA</td> 
                    <td>Hasan S</td> 
                    <td>Pembimbing Utama</td> 
                    <td><button class="btn btn-sm btn-outline-primary">Review</button></td> 
                  </tr> 
                  <tr> 
                    <td>26 Des 2025</td> 
                    <td>Seminar Hasil</td> 
                    <td>Skripsi</td> 
                    <td>Andi A</td> 
                    <td>Pembimbing Utama</td> 
                    <td><button class="btn btn-sm btn-outline-primary">Review</button></td> 
                  </tr> 
                  <tr> 
                    <td>27 Des 2025</td> 
                    <td>Presentasi</td> 
                    <td>Magang</td> 
                    <td>Budi B</td> 
                    <td>Penguji 2</td> 
                    <td><button class="btn btn-sm btn-outline-primary">Review</button></td> 
                  </tr> 
                </tbody> 
              </table> <!-- </table> --> 
            </div> 
          </div> 
        </div> 
        <!-- ROW 3 : TASK / CHECKLIST MAHASISWA --> 
        <div class="col-lg-12"> 
          <div class="card p-3"> 
            <div class="d-flex justify-content-between mb-3"> 
              <h5 class="mb-3"><i class="fas fa-list me-1"></i> Daftar NPC Dibimbing (Taskboard)</h5> <button class="btn btn-sm btn-outline-primary">Taskboard<i class="fas fa-angle-double-right ms-1"></i></button> 
            </div> 
            <div class="table-responsive"> 
              <table class="table table-sm align-middle mb-0"> 
                <thead class="table-light"> 
                  <tr> 
                    <th>Status</th> 
                    <th>Progress Bar (stage 1/9)</th> 
                    <th>Jenis Aktivitas</th> 
                    <th>Mahasiswa</th> 
                    <th>Peran</th> 
                    <th>Aksi</th> 
                  </tr> 
                </thead> 
                <tbody> 
                  <tr> 
                    <td><i class="fas fa-circle text-success"></i> Aktif</td> 
                    <td> <div class="progress progress-milestone"> <div class="progress-bar bg-primary" style="width:70%"></div> </div> </td> 
                    <td>Magang</td> 
                    <td>Andi A</td> 
                    <td>Pembimbing Utama</td> 
                    <td><button class="btn btn-sm btn-outline-primary">Detail</button></td> 
                  </tr> 
                  <tr> 
                    <td><i class="fas fa-circle text-warning"></i> Pasif</td> 
                    <td> <div class="progress progress-milestone"> <div class="progress-bar bg-primary" style="width:40%"></div> </div> </td> 
                    <td>PKL</td> 
                    <td>Budi B</td> 
                    <td>Penguji 2</td> 
                    <td><button class="btn btn-sm btn-outline-primary">Detail</button></td> 
                  </tr> 
                  <tr> 
                    <td><i class="fas fa-circle text-danger"></i> Macet</td> 
                    <td> <div class="progress progress-milestone"> <div class="progress-bar bg-primary" style="width:40%"></div> </div> </td> 
                    <td>Skripsi</td> 
                    <td>Citra C</td> 
                    <td>Penguji 1</td> 
                    <td><button class="btn btn-sm btn-outline-primary">Detail</button></td> 
                  </tr> 
                </tbody> 
              </table> 
            </div> 
          </div> 
        </div> 


      </div> 




    </section>
  </div>

<?php include "4footer.php"; ?>

<!-- ChartJS Script -->

<?php include "5script.php"; ?>
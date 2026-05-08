<?php $page = 'monev-ta-riwayat'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">
        Dashboard Riwayat Aktivitas Tugas Akhir
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>

      <p class="text-muted mb-0">
        Monitoring histori milestone, progres pengerjaan, dan audit trail aktivitas Tugas Akhir mahasiswa.
      </p>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <style>
        .ta-ledger-card {
          border-radius: 14px;
          overflow: hidden;
          box-shadow: 0 2px 10px rgba(0,0,0,0.08);
          margin-bottom: 24px;
        }

        .ta-ledger-card .card-header {
          padding: 16px 20px;
        }

        .ta-summary-box {
          border-radius: 12px;
          padding: 18px;
          color: #fff;
          margin-bottom: 16px;
        }

        .ta-summary-box h3 {
          margin: 0;
          font-weight: 700;
        }

        .ta-summary-box p {
          margin: 0;
          opacity: .9;
        }

        .table-ledger thead th {
          vertical-align: middle;
          white-space: nowrap;
          font-size: 13px;
        }

        .table-ledger tbody td {
          vertical-align: middle;
          font-size: 13px;
        }

        .badge-milestone {
          font-size: 11px;
          padding: 6px 10px;
          border-radius: 8px;
        }

        .student-info-box {
          border: 1px solid #e9ecef;
          border-radius: 12px;
          padding: 14px;
          background: #f8f9fa;
          height: 100%;
        }

        .student-info-box small {
          color: #6c757d;
        }

        .student-info-box h6 {
          margin-top: 5px;
          margin-bottom: 0;
          font-weight: 700;
        }

        .timeline-note {
          font-size: 12px;
          color: #6c757d;
        }

        .progress {
          height: 18px;
          border-radius: 20px;
          background: #e9ecef;
        }

        .progress-bar {
          font-size: 11px;
          font-weight: 600;
        }

        .table-ledger tbody tr:hover {
          background: #f8fbff;
        }
      </style>

      <!-- ===================================================== -->
      <!-- CARD : RIWAYAT AKTIVITAS TUGAS AKHIR -->
      <!-- ===================================================== -->

      <div class="card ta-ledger-card">

        <!-- HEADER -->
        <div class="card-header bg-primary text-white">

          <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

            <div>
              <h4 class="mb-1">
                <i class="fas fa-history me-2"></i>
                Riwayat Aktivitas Tugas Akhir
              </h4>

              <small>
                Audit trail milestone dan progres proses Tugas Akhir mahasiswa.
              </small>
            </div>

            <div class="d-flex gap-2">

              <button class="btn btn-light btn-sm">
                <i class="fas fa-filter me-1"></i>
                Filter
              </button>

              <button class="btn btn-success btn-sm">
                <i class="fas fa-file-excel me-1"></i>
                Export Excel
              </button>

              <button class="btn btn-danger btn-sm">
                <i class="fas fa-file-pdf me-1"></i>
                Cetak PDF
              </button>

            </div>

          </div>

        </div>

        <!-- BODY -->
        <div class="card-body">

          <!-- INFORMASI MAHASISWA -->
          <div class="row mb-4">

            <div class="col-md-3">
              <div class="student-info-box">
                <small>Nama Mahasiswa</small>
                <h6>Ahmad Fauzan</h6>
              </div>
            </div>

            <div class="col-md-3">
              <div class="student-info-box">
                <small>NIM</small>
                <h6>221011400123</h6>
              </div>
            </div>

            <div class="col-md-3">
              <div class="student-info-box">
                <small>Program Studi</small>
                <h6>Teknik Informatika</h6>
              </div>
            </div>

            <div class="col-md-3">
              <div class="student-info-box">
                <small>Status TA</small>
                <h6 class="text-success">Aktif</h6>
              </div>
            </div>

          </div>

          <!-- SUMMARY -->
          <div class="row mb-4">

            <div class="col-md-3">
              <div class="ta-summary-box bg-primary">
                <h3>11</h3>
                <p>Total Aktivitas</p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="ta-summary-box bg-success">
                <h3>100%</h3>
                <p>Progress Akhir</p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="ta-summary-box bg-warning text-dark">
                <h3>3</h3>
                <p>Revisi / Menunggu</p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="ta-summary-box bg-info">
                <h3>117</h3>
                <p>Total Durasi Hari</p>
              </div>
            </div>

          </div>

          <!-- TABLE -->
          <div class="table-responsive">

            <table class="table table-bordered table-hover table-ledger align-middle">

              <thead class="table-dark text-center">
                <tr>
                  <th>Tanggal</th>
                  <th>Ref</th>
                  <th>Milestone</th>
                  <th>Keterangan</th>
                  <th width="220">Progres</th>
                  <th>Status</th>
                  <th>Saldo Durasi</th>
                </tr>
              </thead>

              <tbody>

                <!-- OPENING -->
                <tr class="table-secondary">
                  <td>-</td>
                  <td><b>TA-OPEN</b></td>

                  <td>
                    <span class="badge bg-primary badge-milestone">
                      Opening Progress
                    </span>
                  </td>

                  <td>Pengajuan awal TA</td>

                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-primary" style="width:0%">
                        0%
                      </div>
                    </div>
                  </td>

                  <td class="text-center">
                    <span class="badge bg-secondary">
                      Draft
                    </span>
                  </td>

                  <td class="text-center">
                    <b>0 Hari</b>
                  </td>
                </tr>

                <!-- ROW -->
                <tr>
                  <td>01/02/2026</td>
                  <td>REG-001</td>

                  <td>
                    <span class="badge bg-secondary badge-milestone">
                      Pendaftaran TA
                    </span>
                  </td>

                  <td>Mahasiswa mendaftar TA</td>

                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-primary" style="width:5%">
                        5%
                      </div>
                    </div>
                  </td>

                  <td class="text-center">
                    <span class="badge bg-info">Diproses</span>
                  </td>

                  <td class="text-center">
                    <b>1 Hari</b>
                  </td>
                </tr>

                <!-- ROW -->
                <tr>
                  <td>05/02/2026</td>
                  <td>SK-001</td>

                  <td>
                    <span class="badge bg-secondary badge-milestone">
                      Penetapan Pembimbing
                    </span>
                  </td>

                  <td>Pembimbing ditetapkan</td>

                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-primary" style="width:10%">
                        10%
                      </div>
                    </div>
                  </td>

                  <td class="text-center">
                    <span class="badge bg-success">Aktif</span>
                  </td>

                  <td class="text-center">
                    <b>5 Hari</b>
                  </td>
                </tr>

                <!-- ROW -->
                <tr>
                  <td>10/02/2026</td>
                  <td>TOP-001</td>

                  <td>
                    <span class="badge bg-secondary badge-milestone">
                      Penetapan Topik
                    </span>
                  </td>

                  <td>Topik disetujui</td>

                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-primary" style="width:15%">
                        15%
                      </div>
                    </div>
                  </td>

                  <td class="text-center">
                    <span class="badge bg-success">Disetujui</span>
                  </td>

                  <td class="text-center">
                    <b>10 Hari</b>
                  </td>
                </tr>

                <!-- ROW -->
                <tr>
                  <td>20/02/2026</td>
                  <td>BIM-001</td>

                  <td>
                    <span class="badge bg-secondary badge-milestone">
                      Bimbingan TA
                    </span>
                  </td>

                  <td>Revisi BAB 1</td>

                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-primary" style="width:20%">
                        20%
                      </div>
                    </div>
                  </td>

                  <td class="text-center">
                    <span class="badge bg-warning text-dark">
                      Direvisi
                    </span>
                  </td>

                  <td class="text-center">
                    <b>20 Hari</b>
                  </td>
                </tr>

                <!-- ROW -->
                <tr>
                  <td>28/02/2026</td>
                  <td>BIM-002</td>

                  <td>
                    <span class="badge bg-secondary badge-milestone">
                      Bimbingan TA
                    </span>
                  </td>

                  <td>ACC BAB 1</td>

                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-primary" style="width:30%">
                        30%
                      </div>
                    </div>
                  </td>

                  <td class="text-center">
                    <span class="badge bg-success">
                      Approved
                    </span>
                  </td>

                  <td class="text-center">
                    <b>28 Hari</b>
                  </td>
                </tr>

                <!-- ROW -->
                <tr>
                  <td>15/03/2026</td>
                  <td>SEM-001</td>

                  <td>
                    <span class="badge bg-secondary badge-milestone">
                      Pendaftaran Seminar
                    </span>
                  </td>

                  <td>Daftar seminar proposal</td>

                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-primary" style="width:45%">
                        45%
                      </div>
                    </div>
                  </td>

                  <td class="text-center">
                    <span class="badge bg-warning text-dark">
                      Menunggu
                    </span>
                  </td>

                  <td class="text-center">
                    <b>43 Hari</b>
                  </td>
                </tr>

                <!-- ROW -->
                <tr>
                  <td>22/03/2026</td>
                  <td>UJ-001</td>

                  <td>
                    <span class="badge bg-secondary badge-milestone">
                      Ujian Proposal
                    </span>
                  </td>

                  <td>Seminar proposal selesai</td>

                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-primary" style="width:60%">
                        60%
                      </div>
                    </div>
                  </td>

                  <td class="text-center">
                    <span class="badge bg-success">
                      Lulus
                    </span>
                  </td>

                  <td class="text-center">
                    <b>50 Hari</b>
                  </td>
                </tr>

                <!-- ROW -->
                <tr>
                  <td>10/05/2026</td>
                  <td>BIM-010</td>

                  <td>
                    <span class="badge bg-secondary badge-milestone">
                      Bimbingan TA
                    </span>
                  </td>

                  <td>ACC Naskah Final</td>

                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-primary" style="width:85%">
                        85%
                      </div>
                    </div>
                  </td>

                  <td class="text-center">
                    <span class="badge bg-success">
                      Approved
                    </span>
                  </td>

                  <td class="text-center">
                    <b>99 Hari</b>
                  </td>
                </tr>

                <!-- ROW -->
                <tr>
                  <td>20/05/2026</td>
                  <td>UJ-002</td>

                  <td>
                    <span class="badge bg-secondary badge-milestone">
                      Ujian Akhir
                    </span>
                  </td>

                  <td>Sidang akhir selesai</td>

                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-primary" style="width:95%">
                        95%
                      </div>
                    </div>
                  </td>

                  <td class="text-center">
                    <span class="badge bg-success">
                      Lulus
                    </span>
                  </td>

                  <td class="text-center">
                    <b>109 Hari</b>
                  </td>
                </tr>

                <!-- CLOSING -->
                <tr class="table-secondary">
                  <td>28/05/2026</td>
                  <td><b>TA-CLOSE</b></td>

                  <td>
                    <span class="badge bg-primary badge-milestone">
                      Closing Progress
                    </span>
                  </td>

                  <td>Berita acara selesai TA</td>

                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-primary" style="width:100%">
                        100%
                      </div>
                    </div>
                  </td>

                  <td class="text-center">
                    <span class="badge bg-success">
                      Selesai
                    </span>
                  </td>

                  <td class="text-center">
                    <b>117 Hari</b>
                  </td>
                </tr>

              </tbody>

            </table>

          </div>

          <!-- FOOTNOTE -->
          <div class="mt-3 timeline-note">
            <i class="fas fa-info-circle me-1"></i>
            Riwayat aktivitas ini digunakan sebagai audit trail akademik untuk monitoring progres dan milestone Tugas Akhir mahasiswa.
          </div>

        </div>

      </div>

    </div>
  </section>
</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
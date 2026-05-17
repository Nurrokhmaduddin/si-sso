<?php $page = 'finance-ar-aging-monitor'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Monitor AR Aging Dashboard

        <button type="button"
                class="btn btn-tool"
                data-bs-toggle="modal"
                data-bs-target="#modalBantuan">

          <i class="fas fa-question-circle"></i>

        </button>

      </h3>

      <p class="text-muted mb-0">
        Monitoring piutang usaha, aging receivable,
        overdue customer, collection workflow,
        dan outstanding invoice customer.
      </p>

    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <style>

        .ar-card{
          border-radius:12px;
          overflow:hidden;
          box-shadow:0 2px 8px rgba(0,0,0,0.08);
          margin-bottom:24px;
        }

        .summary-box{
          border-radius:12px;
          padding:20px;
          color:#fff;
          margin-bottom:16px;
        }

        .summary-box h3{
          margin:0;
          font-weight:700;
        }

        .summary-box p{
          margin:0;
          opacity:.9;
        }

        .table thead th{
          vertical-align:middle;
          white-space:nowrap;
        }

      </style>

      <!-- ===================================================== -->
      <!-- AR AGING MONITOR -->
      <!-- ===================================================== -->

      <div class="card ar-card">

        <div class="card-header bg-danger text-white">

          <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">

            <div>

              <h5 class="mb-0">
                <i class="fas fa-file-invoice-dollar me-2"></i>
                Account Receivable Aging Monitor
              </h5>

              <small>
                Monitoring aging piutang customer,
                overdue invoice, collection process,
                dan risiko keterlambatan pembayaran.
              </small>

            </div>

            <div class="d-flex gap-2">

              <button class="btn btn-light btn-sm">
                <i class="fas fa-filter me-1"></i>
                Filter
              </button>

              <button class="btn btn-warning btn-sm">
                <i class="fas fa-file-excel me-1"></i>
                Export
              </button>

            </div>

          </div>

        </div>

        <div class="card-body">

          <!-- SUMMARY -->
          <div class="row mb-4">

            <div class="col-md-3">
              <div class="summary-box bg-success">
                <h3>Rp 1.2 M</h3>
                <p>Current AR</p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="summary-box bg-warning">
                <h3>Rp 420 Jt</h3>
                <p>Overdue 1-30 Hari</p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="summary-box bg-danger">
                <h3>Rp 180 Jt</h3>
                <p>Overdue > 90 Hari</p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="summary-box bg-dark">
                <h3>17</h3>
                <p>High Risk Customer</p>
              </div>
            </div>

          </div>

          <!-- TABLE -->
          <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

              <thead class="table-dark text-center">

                <tr>

                  <th>Invoice</th>
                  <th>Customer</th>
                  <th>Tanggal Invoice</th>
                  <th>Jatuh Tempo</th>
                  <th>Outstanding</th>
                  <th>Aging</th>
                  <th>Status</th>
                  <th>Collector</th>
                  <th>Promise To Pay</th>
                  <th>Aksi</th>

                </tr>

              </thead>

              <tbody>

                <tr>
                  <td>INV-2026-001</td>
                  <td>PT Maju Bersama</td>
                  <td>02 Mei 2026</td>
                  <td>01 Juni 2026</td>
                  <td class="fw-bold">Rp 25.000.000</td>
                  <td class="text-success fw-bold">Current</td>
                  <td class="text-center">
                    <span class="badge bg-success">Normal</span>
                  </td>
                  <td>Rina</td>
                  <td>-</td>
                  <td class="text-center">

                    <button class="btn btn-primary btn-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#modalView">
                      View
                    </button>

                    <button class="btn btn-warning btn-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#modalEdit">
                      Edit
                    </button>

                    <button class="btn btn-danger btn-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#modalAksi">
                      Collection
                    </button>

                  </td>
                </tr>

                <tr>
                  <td>INV-2026-002</td>
                  <td>PT Sentosa Abadi</td>
                  <td>10 Apr 2026</td>
                  <td>10 Mei 2026</td>
                  <td class="fw-bold">Rp 18.000.000</td>
                  <td class="text-warning fw-bold">15 Hari</td>
                  <td class="text-center">
                    <span class="badge bg-warning text-dark">Reminder</span>
                  </td>
                  <td>Andi</td>
                  <td>25 Mei 2026</td>
                  <td class="text-center">
                    <button class="btn btn-primary btn-sm">View</button>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Collection</button>
                  </td>
                </tr>

                <tr>
                  <td>INV-2026-003</td>
                  <td>CV Cahaya Utama</td>
                  <td>15 Mar 2026</td>
                  <td>15 Apr 2026</td>
                  <td class="fw-bold">Rp 42.500.000</td>
                  <td class="text-danger fw-bold">45 Hari</td>
                  <td class="text-center">
                    <span class="badge bg-danger">Overdue</span>
                  </td>
                  <td>Sinta</td>
                  <td>20 Mei 2026</td>
                  <td class="text-center">
                    <button class="btn btn-primary btn-sm">View</button>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Collection</button>
                  </td>
                </tr>

                <tr>
                  <td>INV-2026-004</td>
                  <td>PT Sinar Logistik</td>
                  <td>08 Feb 2026</td>
                  <td>08 Mar 2026</td>
                  <td class="fw-bold">Rp 65.000.000</td>
                  <td class="text-danger fw-bold">78 Hari</td>
                  <td class="text-center">
                    <span class="badge bg-danger">Escalated</span>
                  </td>
                  <td>Rina</td>
                  <td>Pending</td>
                  <td class="text-center">
                    <button class="btn btn-primary btn-sm">View</button>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Collection</button>
                  </td>
                </tr>

                <tr>
                  <td>INV-2026-005</td>
                  <td>PT Nusantara Retail</td>
                  <td>01 Jan 2026</td>
                  <td>31 Jan 2026</td>
                  <td class="fw-bold">Rp 12.000.000</td>
                  <td class="text-danger fw-bold">110 Hari</td>
                  <td class="text-center">
                    <span class="badge bg-dark">Legal</span>
                  </td>
                  <td>Dimas</td>
                  <td>-</td>
                  <td class="text-center">
                    <button class="btn btn-primary btn-sm">View</button>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Collection</button>
                  </td>
                </tr>

                <!-- tambahan 6 baris -->

                <tr>
                  <td>INV-2026-006</td>
                  <td>PT Bumi Karya</td>
                  <td>03 Mei 2026</td>
                  <td>02 Juni 2026</td>
                  <td>Rp 14.500.000</td>
                  <td class="text-success">Current</td>
                  <td><span class="badge bg-success">Normal</span></td>
                  <td>Andi</td>
                  <td>-</td>
                  <td class="text-center">
                    <button class="btn btn-primary btn-sm">View</button>
                  </td>
                </tr>

                <tr>
                  <td>INV-2026-007</td>
                  <td>CV Prima Niaga</td>
                  <td>18 Apr 2026</td>
                  <td>18 Mei 2026</td>
                  <td>Rp 8.200.000</td>
                  <td class="text-warning">7 Hari</td>
                  <td><span class="badge bg-warning text-dark">Reminder</span></td>
                  <td>Sinta</td>
                  <td>22 Mei 2026</td>
                  <td class="text-center">
                    <button class="btn btn-primary btn-sm">View</button>
                  </td>
                </tr>

                <tr>
                  <td>INV-2026-008</td>
                  <td>PT Global Tekno</td>
                  <td>20 Mar 2026</td>
                  <td>20 Apr 2026</td>
                  <td>Rp 55.000.000</td>
                  <td class="text-danger">35 Hari</td>
                  <td><span class="badge bg-danger">Overdue</span></td>
                  <td>Rina</td>
                  <td>28 Mei 2026</td>
                  <td class="text-center">
                    <button class="btn btn-primary btn-sm">View</button>
                  </td>
                </tr>

                <tr>
                  <td>INV-2026-009</td>
                  <td>PT Mega Industri</td>
                  <td>11 Feb 2026</td>
                  <td>11 Mar 2026</td>
                  <td>Rp 95.000.000</td>
                  <td class="text-danger">74 Hari</td>
                  <td><span class="badge bg-danger">Escalated</span></td>
                  <td>Dimas</td>
                  <td>Pending</td>
                  <td class="text-center">
                    <button class="btn btn-primary btn-sm">View</button>
                  </td>
                </tr>

                <tr>
                  <td>INV-2026-010</td>
                  <td>CV Delta Perkasa</td>
                  <td>05 Jan 2026</td>
                  <td>05 Feb 2026</td>
                  <td>Rp 22.000.000</td>
                  <td class="text-danger">98 Hari</td>
                  <td><span class="badge bg-dark">Legal</span></td>
                  <td>Andi</td>
                  <td>-</td>
                  <td class="text-center">
                    <button class="btn btn-primary btn-sm">View</button>
                  </td>
                </tr>

                <tr>
                  <td>INV-2026-011</td>
                  <td>PT Arta Supply</td>
                  <td>28 Apr 2026</td>
                  <td>28 Mei 2026</td>
                  <td>Rp 11.300.000</td>
                  <td class="text-success">Current</td>
                  <td><span class="badge bg-success">Normal</span></td>
                  <td>Sinta</td>
                  <td>-</td>
                  <td class="text-center">
                    <button class="btn btn-primary btn-sm">View</button>
                  </td>
                </tr>

              </tbody>

            </table>

          </div>

        </div>

        <div class="card-footer bg-light">

          <div class="row">

            <div class="col-md-3">
              <small class="text-muted">
                <b>Current</b><br>
                Piutang belum jatuh tempo.
              </small>
            </div>

            <div class="col-md-3">
              <small class="text-muted">
                <b>Reminder</b><br>
                Customer mulai ditagih.
              </small>
            </div>

            <div class="col-md-3">
              <small class="text-muted">
                <b>Escalated</b><br>
                Risiko keterlambatan tinggi.
              </small>
            </div>

            <div class="col-md-3">
              <small class="text-muted">
                <b>Legal</b><br>
                Masuk proses hukum/penagihan khusus.
              </small>
            </div>

          </div>

        </div>

      </div>

    </div>
  </section>
</div>

<!-- ===================================================== -->
<!-- MODAL VIEW -->
<!-- ===================================================== -->

<div class="modal fade" id="modalView" tabindex="-1">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-primary text-white">

        <h5 class="modal-title">
          Detail AR Invoice
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal"></button>

      </div>

      <div class="modal-body">

        <p><b>Invoice :</b> INV-2026-001</p>
        <p><b>Customer :</b> PT Maju Bersama</p>
        <p><b>Outstanding :</b> Rp 25.000.000</p>
        <p><b>Status :</b> Current</p>

      </div>

    </div>

  </div>

</div>

<!-- ===================================================== -->
<!-- MODAL EDIT -->
<!-- ===================================================== -->

<div class="modal fade" id="modalEdit" tabindex="-1">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header bg-warning">

        <h5 class="modal-title">
          Edit Collection Note
        </h5>

      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label>Promise To Pay</label>
          <input type="date" class="form-control">
        </div>

        <div class="mb-3">
          <label>Catatan Collection</label>
          <textarea class="form-control"></textarea>
        </div>

      </div>

      <div class="modal-footer">

        <button class="btn btn-secondary"
                data-bs-dismiss="modal">
          Close
        </button>

        <button class="btn btn-warning">
          Save
        </button>

      </div>

    </div>

  </div>

</div>

<!-- ===================================================== -->
<!-- MODAL AKSI -->
<!-- ===================================================== -->

<div class="modal fade" id="modalAksi" tabindex="-1">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header bg-danger text-white">

        <h5 class="modal-title">
          Workflow Collection
        </h5>

      </div>

      <div class="modal-body">

        <div class="d-grid gap-2">

          <button class="btn btn-outline-primary">
            Kirim Reminder Email
          </button>

          <button class="btn btn-outline-warning">
            Follow Up Telepon
          </button>

          <button class="btn btn-outline-danger">
            Escalate Collection
          </button>

          <button class="btn btn-outline-dark">
            Ajukan Legal Collection
          </button>

        </div>

      </div>

    </div>

  </div>

</div>

<!-- ===================================================== -->
<!-- MODAL BANTUAN -->
<!-- ===================================================== -->

<div class="modal fade" id="modalBantuan" tabindex="-1">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-info text-white">

        <h5 class="modal-title">
          Bantuan Halaman AR Aging Monitor
        </h5>

      </div>

      <div class="modal-body">

        <p>
          Halaman ini digunakan untuk memonitor
          outstanding piutang customer,
          umur piutang,
          risiko keterlambatan pembayaran,
          serta aktivitas collection.
        </p>

        <p>
          Aging menunjukkan berapa lama invoice belum dibayar.
          Semakin tinggi aging,
          semakin tinggi risiko piutang macet.
        </p>

        <p>
          Workflow collection membantu tim AR:
        </p>

        <ul>
          <li>Reminder pembayaran</li>
          <li>Follow up customer</li>
          <li>Promise to pay monitoring</li>
          <li>Escalation collection</li>
          <li>Legal collection</li>
        </ul>

        <p>
          Dashboard ini penting untuk:
        </p>

        <ul>
          <li>cashflow management</li>
          <li>working capital monitoring</li>
          <li>credit risk analysis</li>
          <li>customer payment behavior</li>
          <li>AR aging analytics</li>
        </ul>

      </div>

    </div>

  </div>

</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
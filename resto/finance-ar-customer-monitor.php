<?php $page = 'finance-ar-customer-monitor'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Monitor Customer Receivable Dashboard

        <button type="button"
                class="btn btn-tool"
                data-bs-toggle="modal"
                data-bs-target="#modalBantuan">

          <i class="fas fa-question-circle"></i>

        </button>

      </h3>

      <p class="text-muted mb-0">
        Monitoring saldo piutang customer,
        outstanding receivable,
        usia dokumen piutang,
        dan aktivitas collection customer.
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

        .customer-name{
          font-weight:600;
        }

      </style>

      <!-- ===================================================== -->
      <!-- CUSTOMER RECEIVABLE MONITOR -->
      <!-- ===================================================== -->

      <div class="card ar-card">

        <div class="card-header bg-danger text-white">

          <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">

            <div>

              <h5 class="mb-0">
                <i class="fas fa-file-invoice-dollar me-2"></i>
                Customer Outstanding Receivable
              </h5>

              <small>
                Monitoring total saldo piutang customer,
                outstanding belum lunas,
                usia dokumen piutang,
                dan aktivitas collection AR.
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
              <div class="summary-box bg-primary">
                <h3>148</h3>
                <p>Total Customer AR</p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="summary-box bg-success">
                <h3>Rp 3.8 M</h3>
                <p>Total Outstanding</p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="summary-box bg-warning">
                <h3>41</h3>
                <p>Customer Aging > 90 Hari</p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="summary-box bg-danger">
                <h3>Rp 620 Jt</h3>
                <p>High Risk Outstanding</p>
              </div>
            </div>

          </div>

          <!-- TABLE -->
          <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

              <thead class="table-dark text-center">

                <tr>

                  <th>Customer</th>
                  <th>Total Doc</th>
                  <th>Total Piutang</th>
                  <th>Total Dibayar</th>
                  <th>Outstanding</th>
                  <th>Oldest Doc Aging</th>
                  <!-- <th>Collector</th>
                  <th>Last Collection</th> -->
                  <th>Aksi</th>

                </tr>

              </thead>

              <tbody>

                <tr>
                  <td class="customer-name">PT Maju Bersama</td>
                  <td class="text-center">5</td>
                  <td>Rp 225.000.000</td>
                  <td>Rp 180.000.000</td>
                  <td class="fw-bold text-danger">Rp 45.000.000</td>
                  <td class="fw-bold text-warning">132 Hari</td>
                  <!-- <td>Rina</td>
                  <td>12 Mei 2026</td> -->

                  <td class="text-center">

                    <button class="btn btn-outline-info btn-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#modalView">
                      View
                    </button>

                    <button class="btn btn-outline-primary btn-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#modalEdit">
                      Edit
                    </button>

                    <button class="btn btn-outline-primary btn-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#modalAksi">
                      Action
                    </button>

                  </td>
                </tr>

                <tr>
                  <td class="customer-name">PT Sentosa Abadi</td>
                  <td class="text-center">3</td>
                  <td>Rp 120.000.000</td>
                  <td>Rp 98.000.000</td>
                  <td class="fw-bold text-danger">Rp 22.000.000</td>
                  <td class="fw-bold text-warning">88 Hari</td>
                  <!-- <td>Andi</td>
                  <td>10 Mei 2026</td> -->
                  <td class="text-center">
                    <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalView">View</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalAksi">Action</button>
                  </td>
                </tr>

                <tr>
                  <td class="customer-name">CV Cahaya Utama</td>
                  <td class="text-center">7</td>
                  <td>Rp 480.000.000</td>
                  <td>Rp 350.000.000</td>
                  <td class="fw-bold text-danger">Rp 130.000.000</td>
                  <td class="fw-bold text-danger">190 Hari</td>
                  <!-- <td>Sinta</td>
                  <td>09 Mei 2026</td> -->
                  <td class="text-center">
                    <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalView">View</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalAksi">Action</button>
                  </td>
                </tr>

                <tr>
                  <td class="customer-name">PT Sinar Logistik</td>
                  <td class="text-center">4</td>
                  <td>Rp 310.000.000</td>
                  <td>Rp 240.000.000</td>
                  <td class="fw-bold text-danger">Rp 70.000.000</td>
                  <td class="fw-bold text-danger">165 Hari</td>
                  <!-- <td>Rina</td>
                  <td>08 Mei 2026</td> -->
                  <td class="text-center">
                    <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalView">View</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalAksi">Action</button>
                  </td>
                </tr>

                <tr>
                  <td class="customer-name">PT Nusantara Retail</td>
                  <td class="text-center">2</td>
                  <td>Rp 75.000.000</td>
                  <td>Rp 40.000.000</td>
                  <td class="fw-bold text-danger">Rp 35.000.000</td>
                  <td class="fw-bold text-danger">220 Hari</td>
                  <!-- <td>Dimas</td>
                  <td>06 Mei 2026</td> -->
                  <td class="text-center">
                    <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalView">View</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalAksi">Action</button>
                  </td>
                </tr>

                <tr>
                  <td class="customer-name">PT Bumi Karya</td>
                  <td class="text-center">6</td>
                  <td>Rp 215.000.000</td>
                  <td>Rp 180.000.000</td>
                  <td class="fw-bold text-danger">Rp 35.000.000</td>
                  <td class="fw-bold text-warning">72 Hari</td>
                  <!-- <td>Andi</td>
                  <td>11 Mei 2026</td> -->
                  <td class="text-center">
                    <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalView">View</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalAksi">Action</button>
                  </td>
                </tr>

                <tr>
                  <td class="customer-name">CV Prima Niaga</td>
                  <td class="text-center">3</td>
                  <td>Rp 98.000.000</td>
                  <td>Rp 74.000.000</td>
                  <td class="fw-bold text-danger">Rp 24.000.000</td>
                  <td class="fw-bold text-warning">95 Hari</td>
                 <!--  <td>Sinta</td>
                  <td>10 Mei 2026</td> -->
                  <td class="text-center">
                    <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalView">View</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalAksi">Action</button>
                  </td>
                </tr>

                <tr>
                  <td class="customer-name">PT Global Tekno</td>
                  <td class="text-center">8</td>
                  <td>Rp 620.000.000</td>
                  <td>Rp 500.000.000</td>
                  <td class="fw-bold text-danger">Rp 120.000.000</td>
                  <td class="fw-bold text-danger">240 Hari</td>
                  <!-- <td>Rina</td>
                  <td>05 Mei 2026</td> -->
                  <td class="text-center">
                    <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalView">View</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalAksi">Action</button>
                  </td>
                </tr>

                <tr>
                  <td class="customer-name">PT Mega Industri</td>
                  <td class="text-center">9</td>
                  <td>Rp 880.000.000</td>
                  <td>Rp 700.000.000</td>
                  <td class="fw-bold text-danger">Rp 180.000.000</td>
                  <td class="fw-bold text-danger">310 Hari</td>
                 <!--  <td>Dimas</td>
                  <td>03 Mei 2026</td> -->
                  <td class="text-center">
                    <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalView">View</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalAksi">Action</button>
                  </td>
                </tr>

                <tr>
                  <td class="customer-name">CV Delta Perkasa</td>
                  <td class="text-center">4</td>
                  <td>Rp 145.000.000</td>
                  <td>Rp 110.000.000</td>
                  <td class="fw-bold text-danger">Rp 35.000.000</td>
                  <td class="fw-bold text-warning">104 Hari</td>
                  <!-- <td>Andi</td>
                  <td>09 Mei 2026</td> -->
                  <td class="text-center">
                    <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalView">View</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalAksi">Action</button>
                  </td>
                </tr>

                <tr>
                  <td class="customer-name">PT Arta Supply</td>
                  <td class="text-center">5</td>
                  <td>Rp 260.000.000</td>
                  <td>Rp 215.000.000</td>
                  <td class="fw-bold text-danger">Rp 45.000.000</td>
                  <td class="fw-bold text-warning">84 Hari</td>
                  <!-- <td>Sinta</td>
                  <td>12 Mei 2026</td> -->
                  <td class="text-center">
                    <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalView">View</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalAksi">Action</button>
                  </td>
                </tr>

              </tbody>

            </table>

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

  <div class="modal-dialog modal-xl">

    <div class="modal-content">

      <div class="modal-header bg-info">

        <h5 class="modal-title">
          Detail Outstanding Document Customer
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal"></button>

      </div>

      <div class="modal-body">

        <div class="mb-3">

          <h5 class="mb-1">PT Maju Bersama</h5>

          <small class="text-muted">
            Daftar invoice / kontrak piutang yang masih outstanding dan belum lunas.
          </small>

        </div>

        <div class="table-responsive">

          <table class="table table-bordered table-hover align-middle">

            <thead class="table-dark text-center">

              <tr>

                <th>Document Type</th>
                <th>Document No</th>
                <th>Tanggal</th>
                <th>Amount</th>
                <th>Paid</th>
                <th>Outstanding</th>
                <th>Aging</th>

              </tr>

            </thead>

            <tbody>

              <tr>
                <td>Invoice Penjualan</td>
                <td>INV-2026-001</td>
                <td>02 Jan 2026</td>
                <td>Rp 50.000.000</td>
                <td>Rp 25.000.000</td>
                <td class="fw-bold text-danger">Rp 25.000.000</td>
                <td class="fw-bold text-danger">132 Hari</td>
              </tr>

              <tr>
                <td>Invoice Penjualan</td>
                <td>INV-2026-004</td>
                <td>18 Feb 2026</td>
                <td>Rp 80.000.000</td>
                <td>Rp 70.000.000</td>
                <td class="fw-bold text-danger">Rp 10.000.000</td>
                <td class="fw-bold text-warning">85 Hari</td>
              </tr>

              <tr>
                <td>Piutang Non Usaha</td>
                <td>LOAN-2026-002</td>
                <td>12 Mar 2026</td>
                <td>Rp 25.000.000</td>
                <td>Rp 15.000.000</td>
                <td class="fw-bold text-danger">Rp 10.000.000</td>
                <td class="fw-bold text-warning">66 Hari</td>
              </tr>

            </tbody>

          </table>

        </div>

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

      <div class="modal-header bg-primary">

        <h5 class="modal-title">
          Update Collection Note
        </h5>

      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label>Promise To Pay</label>
          <input type="date" class="form-control">
        </div>

        <div class="mb-3">
          <label>Collection Note</label>
          <textarea class="form-control" rows="4"></textarea>
        </div>

        <div class="mb-3">
          <label>Collection Result</label>

          <select class="form-select">

            <option>Reminder Sent</option>
            <option>Customer Contacted</option>
            <option>Waiting Payment</option>
            <option>Need Escalation</option>

          </select>
        </div>

      </div>

      <div class="modal-footer">

        <button class="btn btn-secondary"
                data-bs-dismiss="modal">
          Close
        </button>

        <button class="btn btn-warning">
          Save Update
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

      <div class="modal-header bg-primary text-white">

        <h5 class="modal-title">
          Collection Workflow Action
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

          <button class="btn btn-outline-success">
            Input Promise To Pay
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
          Bantuan Halaman Customer Receivable Monitor
        </h5>

      </div>

      <div class="modal-body">

        <p>
          Halaman ini digunakan untuk memonitor
          saldo piutang customer secara summary.
          Setiap baris merepresentasikan akumulasi seluruh dokumen piutang customer
          yang masih outstanding.
        </p>

        <p>
          Customer dapat memiliki banyak invoice,
          kontrak piutang,
          ataupun piutang non usaha.
          Namun pada tabel utama,
          seluruh saldo outstanding diakumulasi menjadi satu baris customer.
        </p>

        <p>
          Kolom <b>Oldest Doc Aging</b>
          menunjukkan usia dokumen piutang tertua
          sejak dokumen diterbitkan,
          bukan berdasarkan jatuh tempo.
        </p>

        <p>
          Tombol <b>View</b>
          digunakan untuk melihat rincian invoice atau kontrak
          yang masih outstanding dan belum lunas.
        </p>

        <p>
          Halaman ini membantu:
        </p>

        <ul>
          <li>monitoring outstanding customer</li>
          <li>kontrol collection AR</li>
          <li>analisa risiko piutang macet</li>
          <li>monitor customer aging</li>
          <li>monitor cashflow receivable</li>
          <li>kontrol promise to pay customer</li>
        </ul>

      </div>

    </div>

  </div>

</div>

<?php include('4footer.php'); ?>
<?php include('5script.php'); ?>
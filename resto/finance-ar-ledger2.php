<!-- ========================================================= -->
<!-- PAGE : finance-ar-ledger.php -->
<!-- DESCRIPTION : Account Receivable Ledger & Audit Trail -->
<!-- ========================================================= -->

<?php $page = 'finance-ar-ledger'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">

  <!-- ========================================================= -->
  <!-- PAGE HEADER -->
  <!-- ========================================================= -->

  <section class="content-header">

    <div class="container-fluid">

      <h3 class="mb-0">

        Accounts Receivable Ledger

        <button type="button"
                class="btn btn-tool"
                data-bs-toggle="modal"
                data-bs-target="#modalBantuan">

          <i class="fas fa-question-circle"></i>

        </button>

      </h3>

      <p class="text-muted mb-0">
        Monitoring histori mutasi piutang customer,
        audit trail invoice,
        pembayaran,
        adjustment,
        dan running saldo piutang customer secara detail.
      </p>

    </div>

  </section>

  <!-- ========================================================= -->
  <!-- MAIN CONTENT -->
  <!-- ========================================================= -->

  <section class="content">

    <div class="container-fluid">

      <style>

        .ledger-card{
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

        .running-balance{
          font-weight:700;
          color:#dc3545;
        }

      </style>

      <!-- ========================================================= -->
      <!-- FILTER -->
      <!-- ========================================================= -->

      <div class="card ledger-card">

        <div class="card-header bg-info text-white">

          <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">

            <div>

              <h5 class="mb-0">
                <i class="fas fa-filter me-2"></i>
                Filter Ledger Piutang
              </h5>

              <small>
                Filter histori mutasi piutang berdasarkan customer,
                periode,
                dan status transaksi.
              </small>

            </div>

            <div class="d-flex gap-2">

              <button class="btn btn-light btn-sm"
                      data-bs-toggle="modal"
                      data-bs-target="#modalFilter">

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

          <div class="row">

            <div class="col-md-3 mb-3">
              <small class="text-muted">Customer</small>
              <h6>PT Maju Jaya Abadi</h6>
            </div>

            <div class="col-md-3 mb-3">
              <small class="text-muted">Periode</small>
              <h6>01 Mei 2026 - 31 Mei 2026</h6>
            </div>

            <div class="col-md-3 mb-3">
              <small class="text-muted">Status</small>
              <h6>Semua Transaksi</h6>
            </div>

            <div class="col-md-3 mb-3">
              <small class="text-muted">Currency</small>
              <h6>IDR</h6>
            </div>

          </div>

        </div>

      </div>

      <!-- ========================================================= -->
      <!-- KPI -->
      <!-- ========================================================= -->

      <div class="row">

        <div class="col-md-3">

          <div class="summary-box bg-primary">

            <h3>Rp 185 JT</h3>
            <p>Opening AR Balance</p>

          </div>

        </div>

        <div class="col-md-3">

          <div class="summary-box bg-success">

            <h3>Rp 96 JT</h3>
            <p>Total Payment</p>

          </div>

        </div>

        <div class="col-md-3">

          <div class="summary-box bg-warning">

            <h3>11</h3>
            <p>Total Outstanding Doc</p>

          </div>

        </div>

        <div class="col-md-3">

          <div class="summary-box bg-danger">

            <h3>Rp 124 JT</h3>
            <p>Ending AR Balance</p>

          </div>

        </div>

      </div>

      <!-- ========================================================= -->
      <!-- TABLE -->
      <!-- ========================================================= -->

      <div class="card ledger-card">

        <div class="card-header bg-dark text-white">

          <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">

            <div>

              <h5 class="mb-0">

                <i class="fas fa-book me-2"></i>
                Receivable Ledger Audit Trail

              </h5>

              <small>
                Detail histori mutasi piutang customer dan running balance.
              </small>

            </div>

          </div>

        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-hover align-middle">

            <thead class="table-dark text-center">

              <tr>

                <th>Tanggal</th>
                <th>Customer</th>
                <th>Document</th>
                <th>Reference</th>
                <th>Description</th>
                <th>Debit</th>
                <th>Credit</th>
                <th>Running Balance</th>
                <th>User</th>
                <th>Aksi</th>

              </tr>

            </thead>

            <tbody>

              <tr>
                <td>01 Mei 2026</td>
                <td>PT Maju Jaya Abadi</td>
                <td>INV-2026-001</td>
                <td>SO-1101</td>
                <td>Penjualan Website Project</td>
                <td class="text-success">Rp 25.000.000</td>
                <td>-</td>
                <td class="running-balance">Rp 170.000.000</td>
                <td>rina.finance</td>

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

                  <button class="btn btn-outline-danger btn-sm"
                          data-bs-toggle="modal"
                          data-bs-target="#modalAksi">

                    Action

                  </button>

                </td>

              </tr>

              <tr>
                <td>03 Mei 2026</td>
                <td>PT Sentosa Teknologi</td>
                <td>PAY-2026-002</td>
                <td>RCV-001</td>
                <td>Pembayaran Termin</td>
                <td>-</td>
                <td class="text-danger">Rp 15.000.000</td>
                <td class="running-balance">Rp 155.000.000</td>
                <td>andi.ar</td>
                <td class="text-center">
                  <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalView">View</button>
                  <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</button>
                  <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalAksi">Action</button>
                </td>
              </tr>

              <tr>
                <td>04 Mei 2026</td>
                <td>CV Cahaya Digital</td>
                <td>INV-2026-004</td>
                <td>SO-1104</td>
                <td>Implementasi ERP</td>
                <td class="text-success">Rp 42.000.000</td>
                <td>-</td>
                <td class="running-balance">Rp 197.000.000</td>
                <td>sinta.finance</td>
                <td class="text-center">
                  <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalView">View</button>
                  <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</button>
                  <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalAksi">Action</button>
                </td>
              </tr>

              <tr>
                <td>05 Mei 2026</td>
                <td>PT Arta Supply</td>
                <td>CN-2026-001</td>
                <td>ADJ-001</td>
                <td>Credit Note Retur</td>
                <td>-</td>
                <td class="text-danger">Rp 8.000.000</td>
                <td class="running-balance">Rp 189.000.000</td>
                <td>dimas.audit</td>
                <td class="text-center">
                  <button class="btn btn-outline-info btn-sm">View</button>
                  <button class="btn btn-outline-primary btn-sm">Edit</button>
                  <button class="btn btn-outline-danger btn-sm">Action</button>
                </td>
              </tr>

              <tr>
                <td>06 Mei 2026</td>
                <td>PT Nusantara Retail</td>
                <td>INV-2026-007</td>
                <td>SO-1110</td>
                <td>Penjualan Device</td>
                <td class="text-success">Rp 18.500.000</td>
                <td>-</td>
                <td class="running-balance">Rp 207.500.000</td>
                <td>rina.finance</td>
                <td class="text-center">
                  <button class="btn btn-outline-info btn-sm">View</button>
                  <button class="btn btn-outline-primary btn-sm">Edit</button>
                  <button class="btn btn-outline-danger btn-sm">Action</button>
                </td>
              </tr>

              <tr>
                <td>08 Mei 2026</td>
                <td>PT Mega Industri</td>
                <td>PAY-2026-009</td>
                <td>RCV-008</td>
                <td>Pembayaran Invoice</td>
                <td>-</td>
                <td class="text-danger">Rp 22.000.000</td>
                <td class="running-balance">Rp 185.500.000</td>
                <td>andi.ar</td>
                <td class="text-center">
                  <button class="btn btn-outline-info btn-sm">View</button>
                  <button class="btn btn-outline-primary btn-sm">Edit</button>
                  <button class="btn btn-outline-danger btn-sm">Action</button>
                </td>
              </tr>

              <tr>
                <td>11 Mei 2026</td>
                <td>CV Delta Perkasa</td>
                <td>INV-2026-011</td>
                <td>SO-1112</td>
                <td>Penjualan Konsultan</td>
                <td class="text-success">Rp 30.000.000</td>
                <td>-</td>
                <td class="running-balance">Rp 215.500.000</td>
                <td>sinta.finance</td>
                <td class="text-center">
                  <button class="btn btn-outline-info btn-sm">View</button>
                  <button class="btn btn-outline-primary btn-sm">Edit</button>
                  <button class="btn btn-outline-danger btn-sm">Action</button>
                </td>
              </tr>

              <tr>
                <td>14 Mei 2026</td>
                <td>PT Global Tekno</td>
                <td>PAY-2026-014</td>
                <td>RCV-014</td>
                <td>Pembayaran Partial</td>
                <td>-</td>
                <td class="text-danger">Rp 35.000.000</td>
                <td class="running-balance">Rp 180.500.000</td>
                <td>andi.ar</td>
                <td class="text-center">
                  <button class="btn btn-outline-info btn-sm">View</button>
                  <button class="btn btn-outline-primary btn-sm">Edit</button>
                  <button class="btn btn-outline-danger btn-sm">Action</button>
                </td>
              </tr>

              <tr>
                <td>18 Mei 2026</td>
                <td>PT Sinar Logistik</td>
                <td>INV-2026-018</td>
                <td>SO-1131</td>
                <td>Penjualan Maintenance</td>
                <td class="text-success">Rp 28.000.000</td>
                <td>-</td>
                <td class="running-balance">Rp 208.500.000</td>
                <td>rina.finance</td>
                <td class="text-center">
                  <button class="btn btn-outline-info btn-sm">View</button>
                  <button class="btn btn-outline-primary btn-sm">Edit</button>
                  <button class="btn btn-outline-danger btn-sm">Action</button>
                </td>
              </tr>

              <tr>
                <td>22 Mei 2026</td>
                <td>PT Bumi Karya</td>
                <td>PAY-2026-020</td>
                <td>RCV-021</td>
                <td>Pelunasan Invoice</td>
                <td>-</td>
                <td class="text-danger">Rp 44.000.000</td>
                <td class="running-balance">Rp 164.500.000</td>
                <td>dimas.audit</td>
                <td class="text-center">
                  <button class="btn btn-outline-info btn-sm">View</button>
                  <button class="btn btn-outline-primary btn-sm">Edit</button>
                  <button class="btn btn-outline-danger btn-sm">Action</button>
                </td>
              </tr>

              <tr>
                <td>28 Mei 2026</td>
                <td>PT Arta Supply</td>
                <td>INV-2026-028</td>
                <td>SO-1140</td>
                <td>Penjualan Infrastruktur</td>
                <td class="text-success">Rp 18.000.000</td>
                <td>-</td>
                <td class="running-balance">Rp 182.500.000</td>
                <td>sinta.finance</td>
                <td class="text-center">
                  <button class="btn btn-outline-info btn-sm">View</button>
                  <button class="btn btn-outline-primary btn-sm">Edit</button>
                  <button class="btn btn-outline-danger btn-sm">Action</button>
                </td>
              </tr>

            </tbody>

          </table>

        </div>

      </div>

    </div>

  </section>

</div>

<?php include('4footer.php'); ?>

<!-- ========================================================= -->
<!-- MODAL VIEW -->
<!-- ========================================================= -->

<div class="modal fade" id="modalView" tabindex="-1">

  <div class="modal-dialog modal-xl">

    <div class="modal-content">

      <div class="modal-header bg-info text-white">

        <h5 class="modal-title">
          Detail Ledger Transaction
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal"></button>

      </div>

      <div class="modal-body">

        <div class="row">

          <div class="col-md-4 mb-3">
            <small class="text-muted">Document</small>
            <h6>INV-2026-001</h6>
          </div>

          <div class="col-md-4 mb-3">
            <small class="text-muted">Customer</small>
            <h6>PT Maju Jaya Abadi</h6>
          </div>

          <div class="col-md-4 mb-3">
            <small class="text-muted">Created By</small>
            <h6>rina.finance</h6>
          </div>

          <div class="col-md-6 mb-3">
            <small class="text-muted">Description</small>
            <h6>Penjualan Website Project</h6>
          </div>

          <div class="col-md-3 mb-3">
            <small class="text-muted">Debit</small>
            <h6 class="text-success">Rp 25.000.000</h6>
          </div>

          <div class="col-md-3 mb-3">
            <small class="text-muted">Running Balance</small>
            <h6 class="text-danger">Rp 170.000.000</h6>
          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<!-- ========================================================= -->
<!-- MODAL EDIT -->
<!-- ========================================================= -->

<div class="modal fade" id="modalEdit" tabindex="-1">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header bg-primary text-white">

        <h5 class="modal-title">
          Edit Ledger Note
        </h5>

      </div>

      <div class="modal-body">

        <div class="mb-3">

          <label>Correction Note</label>

          <textarea class="form-control" rows="4"></textarea>

        </div>

        <div class="mb-3">

          <label>Status Audit</label>

          <select class="form-select">

            <option>Valid</option>
            <option>Need Review</option>
            <option>Correction Required</option>

          </select>

        </div>

      </div>

      <div class="modal-footer">

        <button class="btn btn-secondary"
                data-bs-dismiss="modal">

          Close

        </button>

        <button class="btn btn-primary">

          Save Update

        </button>

      </div>

    </div>

  </div>

</div>

<!-- ========================================================= -->
<!-- MODAL ACTION -->
<!-- ========================================================= -->

<div class="modal fade" id="modalAksi" tabindex="-1">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header bg-danger text-white">

        <h5 class="modal-title">
          Ledger Workflow Action
        </h5>

      </div>

      <div class="modal-body">

        <div class="d-grid gap-2">

          <button class="btn btn-outline-primary">
            Open Audit Review
          </button>

          <button class="btn btn-outline-warning">
            Create Adjustment
          </button>

          <button class="btn btn-outline-success">
            Attach Supporting Document
          </button>

          <button class="btn btn-outline-danger">
            Escalate To Finance Manager
          </button>

        </div>

      </div>

    </div>

  </div>

</div>

<!-- ========================================================= -->
<!-- MODAL FILTER -->
<!-- ========================================================= -->

<div class="modal fade" id="modalFilter" tabindex="-1">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-info text-white">

        <h5 class="modal-title">
          Filter Receivable Ledger
        </h5>

      </div>

      <div class="modal-body">

        <div class="row">

          <div class="col-md-6 mb-3">

            <label>Customer</label>

            <select class="form-select">

              <option>All Customer</option>
              <option>PT Maju Jaya Abadi</option>
              <option>PT Global Tekno</option>

            </select>

          </div>

          <div class="col-md-6 mb-3">

            <label>Transaction Type</label>

            <select class="form-select">

              <option>All</option>
              <option>Invoice</option>
              <option>Payment</option>
              <option>Adjustment</option>

            </select>

          </div>

          <div class="col-md-6 mb-3">

            <label>Date From</label>

            <input type="date" class="form-control">

          </div>

          <div class="col-md-6 mb-3">

            <label>Date To</label>

            <input type="date" class="form-control">

          </div>

        </div>

      </div>

      <div class="modal-footer">

        <button class="btn btn-secondary"
                data-bs-dismiss="modal">

          Close

        </button>

        <button class="btn btn-info">

          Apply Filter

        </button>

      </div>

    </div>

  </div>

</div>

<!-- ========================================================= -->
<!-- MODAL BANTUAN -->
<!-- ========================================================= -->

<div class="modal fade" id="modalBantuan" tabindex="-1">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-primary text-white">

        <h5 class="modal-title">
          Bantuan Halaman AR Ledger
        </h5>

      </div>

      <div class="modal-body">

        <p>
          Halaman AR Ledger digunakan untuk melihat histori mutasi piutang customer secara detail dan kronologis.
        </p>

        <p>
          Setiap transaksi invoice,
          pembayaran,
          adjustment,
          ataupun koreksi akan tercatat sebagai audit trail transaksi.
        </p>

        <p>
          Kolom running balance menunjukkan saldo berjalan piutang setelah transaksi diproses.
        </p>

        <p>
          Halaman ini membantu:
        </p>

        <ul>

          <li>audit histori piutang customer</li>
          <li>tracking invoice dan pembayaran</li>
          <li>rekonsiliasi saldo piutang</li>
          <li>monitor perubahan saldo piutang</li>
          <li>kontrol adjustment AR</li>
          <li>investigasi dispute transaksi</li>

        </ul>

        <p>
          Finance,
          accounting,
          audit,
          maupun collection team dapat menggunakan halaman ini sebagai sumber audit trail utama piutang customer.
        </p>

      </div>

    </div>

  </div>

</div>

<?php include('5script.php'); ?>
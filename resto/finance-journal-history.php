<?php $page = 'finance-journal-history'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <!-- ========================================================= -->
  <!-- CONTENT HEADER -->
  <!-- ========================================================= -->

  <section class="content-header">
    <div class="container-fluid">

      <h3 class="mb-0">
        Journal Entry History

        <button type="button"
                class="btn btn-tool"
                data-bs-toggle="modal"
                data-bs-target="#modalBantuan">

          <i class="fas fa-question-circle"></i>

        </button>

      </h3>

      <p class="text-muted mb-0">
      Menampilkan histori journal entry sebagai audit trail transaksi keuangan untuk kebutuhan monitoring, validasi posting, penelusuran referensi transaksi, dan tracking aktivitas user terhadap pencatatan transaksi accounting.
    </p>

    </div>
  </section>

  <!-- ========================================================= -->
  <!-- MAIN CONTENT -->
  <!-- ========================================================= -->

  <section class="content">

    <div class="container-fluid">

      <!-- ========================================================= -->
      <!-- FILTER -->
      <!-- ========================================================= -->

      <div class="card card-outline card-info">

        <div class="card-body">

          <div class="row">

            <div class="col-md-4 mb-2">
              <b>Periode :</b> 1 Mei 2026 - 31 Mei 2026
            </div>

            <div class="col-md-4 mb-2">
              <b>Journal Type :</b> Semua
            </div>

            <div class="col-md-4 mb-2">
              <b>Posting Status :</b> Semua
            </div>

          </div>

        </div>

        <div class="card-footer">

          <div class="card-tools ms-auto">

            <button class="btn btn-outline-info btn-sm"
                    data-bs-toggle="modal"
                    data-bs-target="#modalFilter">

              <i class="fas fa-filter me-1"></i> Filter

            </button>

            <button class="btn btn-outline-success btn-sm">

              <i class="fas fa-file-download me-1"></i> Export

            </button>

          </div>

        </div>

      </div>

      <!-- ========================================================= -->
      <!-- KPI -->
      <!-- ========================================================= -->

      <!-- <div class="row">

        <div class="col-md-3">

          <div class="small-box bg-info">

            <div class="inner">

              <h3>1.245</h3>

              <p>Total Journal</p>

            </div>

            <div class="icon">
              <i class="fas fa-book"></i>
            </div>

          </div>

        </div>

        <div class="col-md-3">

          <div class="small-box bg-warning">

            <div class="inner">

              <h3>45</h3>

              <p>Draft Journal</p>

            </div>

            <div class="icon">
              <i class="fas fa-edit"></i>
            </div>

          </div>

        </div>

        <div class="col-md-3">

          <div class="small-box bg-success">

            <div class="inner">

              <h3>1.120</h3>

              <p>Posted Journal</p>

            </div>

            <div class="icon">
              <i class="fas fa-check"></i>
            </div>

          </div>

        </div>

        <div class="col-md-3">

          <div class="small-box bg-danger">

            <div class="inner">

              <h3>8</h3>

              <p>Unbalanced Journal</p>

            </div>

            <div class="icon">
              <i class="fas fa-exclamation-triangle"></i>
            </div>

          </div>

        </div>

      </div> -->

      <!-- ========================================================= -->
      <!-- TABLE -->
      <!-- ========================================================= -->

      <div class="card">

        <div class="card-header bg-dark">

          <h3 class="card-title text-white">
            Daftar History Jurnal
          </h3>

        </div>

        <div class="card-body table-responsive p-0">

          <table class="table table-bordered table-hover">

            <thead class="table-dark text-center">

              <tr>

                <th width="120">Tanggal</th>
                <th width="140">No Journal</th>
                <th width="140">Reference</th>
                <th>Description</th>
                <th width="160">Total Amount</th>
                <th width="150">Created By</th>
                <th width="120">Journal Type</th>

              </tr>

            </thead>

            <tbody>

              <tr>

                <td>01 Mei 2026</td>

                <td>
                  <a href="#">
                    JR-0001
                  </a>
                </td>

                <td>INV-001</td>

                <td>
                  Penerimaan invoice customer project website company profile
                </td>

                <td class="text-end">
                  Rp 20.000.000
                </td>

                <td>finance01</td>

                <td>
                  <span class="badge bg-primary">
                    Manual
                  </span>
                </td>

              </tr>

              <tr>

                <td>02 Mei 2026</td>

                <td>
                  <a href="#">
                    JR-0002
                  </a>
                </td>

                <td>EXP-001</td>

                <td>
                  Pengakuan biaya operasional kantor bulan Mei
                </td>

                <td class="text-end">
                  Rp 15.000.000
                </td>

                <td>admin.finance</td>

                <td>
                  <span class="badge bg-success">
                    Auto
                  </span>
                </td>

              </tr>

              <tr>

                <td>03 Mei 2026</td>

                <td>
                  <a href="#">
                    JR-0003
                  </a>
                </td>

                <td>PAY-002</td>

                <td>
                  Pembayaran hutang vendor perangkat jaringan
                </td>

                <td class="text-end">
                  Rp 8.500.000
                </td>

                <td>finance02</td>

                <td>
                  <span class="badge bg-primary">
                    Manual
                  </span>
                </td>

              </tr>

              <tr>

                <td>05 Mei 2026</td>

                <td>
                  <a href="#">
                    JR-0004
                  </a>
                </td>

                <td>JV-004</td>

                <td>
                  Penyesuaian penyusutan aset tetap
                </td>

                <td class="text-end">
                  Rp 4.200.000
                </td>

                <td>system.auto</td>

                <td>
                  <span class="badge bg-success">
                    Auto
                  </span>
                </td>

              </tr>

              <tr>

                <td>08 Mei 2026</td>

                <td>
                  <a href="#">
                    JR-0005
                  </a>
                </td>

                <td>AR-008</td>

                <td>
                  Pembayaran piutang customer termin kedua
                </td>

                <td class="text-end">
                  Rp 32.000.000
                </td>

                <td>finance03</td>

                <td>
                  <span class="badge bg-primary">
                    Manual
                  </span>
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
<!-- MODAL FILTER -->
<!-- ========================================================= -->

<div class="modal fade"
     id="modalFilter"
     tabindex="-1"
     aria-hidden="true">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-info text-white">

        <h5 class="modal-title">
          Filter History Jurnal
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal"></button>

      </div>

      <form action="" method="GET">

        <div class="modal-body">

          <div class="alert alert-info">

            Gunakan filter untuk mempersempit pencarian histori jurnal berdasarkan periode, jenis jurnal, user posting, maupun tipe transaksi.

          </div>

          <div class="row">

            <!-- TANGGAL -->
            <div class="col-md-6 mb-3">

              <label class="form-label">
                Tanggal Awal
              </label>

              <input type="date"
                     class="form-control"
                     name="tanggal_awal">

            </div>

            <div class="col-md-6 mb-3">

              <label class="form-label">
                Tanggal Akhir
              </label>

              <input type="date"
                     class="form-control"
                     name="tanggal_akhir">

            </div>

            <!-- JOURNAL TYPE -->
            <div class="col-md-6 mb-3">

              <label class="form-label">
                Journal Type
              </label>

              <select class="form-select" name="journal_type">

                <option value="">Semua</option>
                <option value="manual">Manual</option>
                <option value="auto">Auto</option>

              </select>

            </div>

            <!-- POSTING STATUS -->
            <div class="col-md-6 mb-3">

              <label class="form-label">
                Posting Status
              </label>

              <select class="form-select" name="posting_status">

                <option value="">Semua</option>
                <option value="draft">Draft</option>
                <option value="posted">Posted</option>
                <option value="unbalance">Unbalance</option>
                <option value="reverse">Reverse</option>

              </select>

            </div>

            <!-- CREATED BY -->
            <div class="col-md-6 mb-3">

              <label class="form-label">
                Created By
              </label>

              <select class="form-select" name="created_by">

                <option value="">Semua User</option>
                <option value="finance01">finance01</option>
                <option value="finance02">finance02</option>
                <option value="admin.finance">admin.finance</option>
                <option value="system.auto">system.auto</option>

              </select>

            </div>

            <!-- KEYWORD -->
            <div class="col-md-6 mb-3">

              <label class="form-label">
                Keyword / Reference
              </label>

              <input type="text"
                     class="form-control"
                     name="keyword"
                     placeholder="Cari nomor jurnal / referensi">

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal">

            Tutup

          </button>

          <button type="submit"
                  class="btn btn-info">

            Terapkan Filter

          </button>

        </div>

      </form>

    </div>

  </div>

</div>

<!-- ========================================================= -->
<!-- MODAL BANTUAN -->
<!-- ========================================================= -->

<div class="modal fade"
     id="modalBantuan"
     tabindex="-1"
     aria-hidden="true">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header bg-primary text-white">

        <h5 class="modal-title">
          Bantuan Halaman
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal"></button>

      </div>

      <div class="modal-body">

        <p>
          Halaman History Jurnal Accounting digunakan untuk melihat seluruh histori jurnal accounting yang pernah dibuat dalam sistem.
        </p>

        <p>
          Halaman ini membantu finance dan auditor dalam melakukan:
        </p>

        <ul>

          <li>Audit transaksi accounting</li>
          <li>Validasi posting jurnal</li>
          <li>Monitoring jurnal manual dan auto journal</li>
          <li>Tracking histori transaksi keuangan</li>
          <li>Pencarian jurnal berdasarkan referensi transaksi</li>

        </ul>

        <p>
          Setiap nomor jurnal dapat dibuka untuk melihat detail akun debit dan kredit yang membentuk jurnal tersebut.
        </p>

        <p>
          Filter tersedia untuk mempermudah pencarian jurnal berdasarkan periode, tipe jurnal, status posting, user pembuat, dan keyword transaksi.
        </p>

      </div>

      <div class="modal-footer">

        <button type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal">

          Tutup

        </button>

      </div>

    </div>

  </div>

</div>

<?php include('5script.php'); ?>
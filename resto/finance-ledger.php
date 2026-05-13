<!-- ========================================================= -->
<!-- PAGE : finance-ledger.php -->
<!-- ========================================================= -->

<?php $page = 'finance-ledger'; ?>
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
        General Ledger (Buku Besar)

        <button type="button"
        class="btn btn-tool"
        data-bs-toggle="modal"
        data-bs-target="#modalBantuan"
        title="Bantuan">

        <i class="fas fa-question-circle"></i>

      </button>
    </h3>

    <p class="text-muted mb-0">
      Menampilkan mutasi akun COA secara detail berupa saldo awal, transaksi debit dan kredit, serta saldo berjalan dalam format buku besar (staffel).
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

            <div class="col-md-3 mb-2">
              <b>Periode :</b><br>
              1 Mei 2026 - 31 Mei 2026
            </div>

            <div class="col-md-3 mb-2">
              <b>COA :</b><br>
              111-001 - Kas Besar
            </div>

            <!-- <div class="col-md-3 mb-2">
              <b>Posting Status :</b><br>
              Semua
            </div> -->

            <div class="col-md-3 mb-2">
              <b>User Posting :</b><br>
              Semua User
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
      <!-- KPI SUMMARY -->
      <!-- ========================================================= -->

      <div class="row">

        <!-- OPENING -->
        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-secondary">

            <div class="inner">

              <h3>Rp 150Jt</h3>

              <p>Opening Balance</p>

            </div>

            <div class="icon">
              <i class="fas fa-wallet"></i>
            </div>

          </div>

        </div>

        <!-- DEBIT -->
        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-success">

            <div class="inner">

              <h3>Rp 320Jt</h3>

              <p>Total Debit</p>

            </div>

            <div class="icon">
              <i class="fas fa-arrow-down"></i>
            </div>

          </div>

        </div>

        <!-- CREDIT -->
        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-danger">

            <div class="inner">

              <h3>Rp 215Jt</h3>

              <p>Total Kredit</p>

            </div>

            <div class="icon">
              <i class="fas fa-arrow-up"></i>
            </div>

          </div>

        </div>

        <!-- ENDING -->
        <div class="col-lg-3 col-md-6">

          <div class="small-box bg-primary">

            <div class="inner">

              <h3>Rp 255Jt</h3>

              <p>Ending Balance</p>

            </div>

            <div class="icon">
              <i class="fas fa-chart-line"></i>
            </div>

          </div>

        </div>

      </div>

      <!-- ========================================================= -->
      <!-- INFORMASI COA -->
      <!-- ========================================================= -->

      <!-- <div class="card">

        <div class="card-header bg-orange">

          <h3 class="card-title">
            Informasi Akun COA
          </h3>

        </div>

        <div class="card-body">

          <div class="row">

            <div class="col-md-3 mb-3">

              <small class="text-muted d-block">
                Kode Akun
              </small>

              <b>111-001</b>

            </div>

            <div class="col-md-3 mb-3">

              <small class="text-muted d-block">
                Nama Akun
              </small>

              <b>Kas Besar</b>

            </div>

            <div class="col-md-3 mb-3">

              <small class="text-muted d-block">
                Tipe Akun
              </small>

              <b>Asset</b>

            </div>

            <div class="col-md-3 mb-3">

              <small class="text-muted d-block">
                Currency
              </small>

              <b>IDR</b>

            </div>

          </div>

        </div>

      </div> -->

      <!-- ========================================================= -->
      <!-- TABLE LEDGER -->
      <!-- ========================================================= -->

      <div class="card">

        <div class="card-header bg-orange">

          <h3 class="card-title">
            Histori Buku Besar Staffel
          </h3>

        </div>

        <div class="card-body table-responsive p-0">

          <table class="table table-bordered table-hover mb-0">

            <thead class="table-dark text-center align-middle">

              <tr>

                <th width="120">
                  Tanggal
                </th>

                <th width="140">
                  No Journal
                </th>

                <th width="140">
                  Reference
                </th>

                <th>
                  Description
                </th>

                <th width="150">
                  Debit
                </th>

                <th width="150">
                  Credit
                </th>

                <th width="180">
                  Balance Staffel
                </th>

                <th width="150">
                  User Posting
                </th>

              </tr>

            </thead>

            <tbody>

              <!-- OPENING -->
              <tr style="background:#f8f9fa;font-weight:bold;">

                <td colspan="6" class="text-end">
                  OPENING BALANCE
                </td>

                <td>
                  Rp 150.000.000
                </td>

                <td></td>

              </tr>

              <!-- ROW -->
              <tr>

                <td>01 Mei 2026</td>

                <td>
                  <a href="#">
                    JR-0001
                  </a>
                </td>

                <td>PAY-001</td>

                <td>
                  Penerimaan pembayaran customer PT Maju Jaya
                </td>

                <td class="text-success fw-bold">
                  20.000.000
                </td>

                <td class="text-center">
                  -
                </td>

                <td class="fw-bold">
                  170.000.000
                </td>

                <td>
                  admin.finance
                </td>

              </tr>

              <!-- ROW -->
              <tr>

                <td>02 Mei 2026</td>

                <td>
                  <a href="#">
                    JR-0002
                  </a>
                </td>

                <td>EXP-001</td>

                <td>
                  Pembayaran biaya operasional kantor
                </td>

                <td class="text-center">
                  -
                </td>

                <td class="text-danger fw-bold">
                  15.000.000
                </td>

                <td class="fw-bold">
                  155.000.000
                </td>

                <td>
                  finance01
                </td>

              </tr>

              <!-- ROW -->
              <tr>

                <td>03 Mei 2026</td>

                <td>
                  <a href="#">
                    JR-0003
                  </a>
                </td>

                <td>TRF-001</td>

                <td>
                  Transfer dana ke kas kecil operasional
                </td>

                <td class="text-center">
                  -
                </td>

                <td class="text-danger fw-bold">
                  50.000.000
                </td>

                <td class="fw-bold">
                  105.000.000
                </td>

                <td>
                  manager.finance
                </td>

              </tr>

              <!-- ROW -->
              <tr>

                <td>04 Mei 2026</td>

                <td>
                  <a href="#">
                    JR-0004
                  </a>
                </td>

                <td>REV-001</td>

                <td>
                  Reversal jurnal penyesuaian sementara
                </td>

                <td class="text-success fw-bold">
                  150.000.000
                </td>

                <td class="text-center">
                  -
                </td>

                <td class="fw-bold">
                  255.000.000
                </td>

                <td>
                  accounting.spv
                </td>

              </tr>

              <!-- TOTAL -->
              <tr style="background:#f8f9fa;font-weight:bold;">

                <td colspan="4" class="text-end">
                  TOTAL MUTASI
                </td>

                <td class="text-success">
                  320.000.000
                </td>

                <td class="text-danger">
                  215.000.000
                </td>

                <td>
                  255.000.000
                </td>

                <td></td>

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
          Filter Buku Besar
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal"></button>

      </div>

      <form action="" method="GET">

        <div class="modal-body">

          <div class="alert alert-info">

            Gunakan filter untuk mempersempit histori buku besar berdasarkan periode, akun COA, status posting, maupun user transaksi.

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

            <!-- COA -->
            <div class="col-md-6 mb-3">

              <label class="form-label">
                COA / Akun
              </label>

              <select class="form-select" name="coa">

                <option value="">
                  Semua Akun
                </option>

                <option>
                  111-001 - Kas Besar
                </option>

                <option>
                  111-002 - Kas Kecil
                </option>

                <option>
                  112-001 - Bank BCA
                </option>

              </select>

            </div>

            <!-- STATUS -->
           <!--  <div class="col-md-6 mb-3">

              <label class="form-label">
                Posting Status
              </label>

              <select class="form-select" name="posting_status">

                <option value="">
                  Semua
                </option>

                <option value="posted">
                  Posted
                </option>

                <option value="draft">
                  Draft
                </option>

                <option value="reverse">
                  Reverse
                </option>

              </select>

            </div>
 -->
            <!-- USER -->
            <div class="col-md-6 mb-3">

              <label class="form-label">
                User Posting
              </label>

              <select class="form-select" name="user_posting">

                <option value="">
                  Semua User
                </option>

                <option>
                  admin.finance
                </option>

                <option>
                  finance01
                </option>

                <option>
                  accounting.spv
                </option>

              </select>

            </div>

            <!-- KEYWORD -->
            <div class="col-md-12 mb-3">

              <label class="form-label">
                Keyword / Reference
              </label>

              <input type="text"
                     class="form-control"
                     placeholder="Cari nomor jurnal / reference">

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
          Bantuan Buku Besar (General Ledger)
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal"></button>

      </div>

      <div class="modal-body">

        <p>
          Halaman Buku Besar (General Ledger / Staffel) digunakan untuk melihat histori transaksi accounting secara detail berdasarkan akun COA tertentu.
        </p>

        <p>
          Halaman ini membantu finance dalam melakukan audit transaksi, tracking mutasi saldo akun, validasi jurnal, dan penelusuran histori transaksi accounting.
        </p>

        <hr>

        <h6>
          Informasi yang Ditampilkan
        </h6>

        <ul>

          <li>Opening balance awal periode</li>
          <li>Total mutasi debit dan kredit</li>
          <li>Ending balance akhir periode</li>
          <li>Histori transaksi jurnal per akun</li>
          <li>User posting transaksi</li>
          <li>Reference transaksi accounting</li>

        </ul>

        <hr>

        <h6>
          Cara Membaca Staffel
        </h6>

        <p>
          Opening Balance + Debit - Kredit = Balance Staffel
        </p>

        <p>
          Setiap transaksi akan langsung memengaruhi saldo berjalan akun sehingga finance dapat mengetahui posisi saldo akun pada setiap titik transaksi.
        </p>

        <p>
          Klik nomor jurnal untuk melakukan drill down dan melihat detail jurnal accounting yang membentuk transaksi tersebut.
        </p>

        <hr>

        <h6>
          Fitur Filter
        </h6>

        <p>
          Filter dapat digunakan untuk mencari transaksi berdasarkan:
        </p>

        <ul>

          <li>Periode transaksi</li>
          <li>Akun COA tertentu</li>
          <li>Status posting jurnal</li>
          <li>User posting</li>
          <li>Nomor jurnal atau reference transaksi</li>

        </ul>

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
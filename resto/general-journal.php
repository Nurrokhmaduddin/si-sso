
<?php $page = 'general-journal';   ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  <style>

#modalTambahData .modal-body{
    max-height: calc(100vh - 180px);
    overflow-y: auto;
}

#modalTambahData .table-responsive{
    overflow-x: auto;
}

.modal{
    overflow-y:auto !important;
}

</style>
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Jurnal Entries
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
        </button>
      </h3>
        <p class="text-muted mb-0">Daftar transaki yang di masukkan pada jurnal, journal entries. pemanfaat journal type bisa di ulik lebih lanjut untuk penanndaan atau pengelompokan jurnal</p>
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
            <div class="card-body ">
              <div class="row">

                <div class="col-md-6">
                  <b>Angkatan:</b> 2023 &nbsp;
                </div>                
                <div class="col-md-6">
                  <b>Peminatan:</b> Peminatan B
                </div>
                <div class="col-md-6">
                  <b>Jalur:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Status:</b> Semua
                </div>

              </div>
            </div>

             <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>    
                <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalGagal">
                  <i class="fas fa-exclamation-triangle me-1"></i> ErrorHandler
                </button>
              </div>
            </div>
            
          </div>


          <!-- ========== CARD : Tabel  Granular ========== -->
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm datatables1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Transaction Date</th>
                      <th>Jurnal No</th>
                      <th>Description</th>
                      <th>Transaction Type</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>

                    <tr>
                      <td>1</td>
                      <td>2026-01-01</td>
                      <td>SLS-001</td>
                      <td>Penjualan tunai produk retail</td>
                      <td>sales</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info">
                          <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-primary">
                          <i class="fas fa-edit"></i>
                        </button>
                      </td>
                    </tr>

                    <tr>
                      <td>2</td>
                      <td>2026-01-02</td>
                      <td>PUR-001</td>
                      <td>Pembelian stok barang supplier PT Maju</td>
                      <td>purchase</td>
                      <td>
                        <button class="btn btn-sm btn-outline-primary">✏️</button>
                      </td>
                    </tr>

                    <tr>
                      <td>3</td>
                      <td>2026-01-03</td>
                      <td>CSH-001</td>
                      <td>Penerimaan pembayaran piutang customer</td>
                      <td>cash_receipt</td>
                      <td>
                        <button class="btn btn-sm btn-outline-primary">✏️</button>
                      </td>
                    </tr>

                    <tr>
                      <td>4</td>
                      <td>2026-01-03</td>
                      <td>CSH-002</td>
                      <td>Pembayaran biaya operasional kantor</td>
                      <td>cash_disbursement</td>
                      <td>
                        <button class="btn btn-sm btn-outline-primary">✏️</button>
                      </td>
                    </tr>

                    <tr>
                      <td>5</td>
                      <td>2026-01-04</td>
                      <td>ADJ-001</td>
                      <td>Jurnal penyesuaian beban listrik akhir bulan</td>
                      <td>adjustment</td>
                      <td>
                        <button class="btn btn-sm btn-outline-info">✏️</button>
                        <button class="btn btn-sm btn-outline-primary">✏️</button>
                      </td>
                    </tr>

                    <tr>
                      <td>6</td>
                      <td>2026-01-04</td>
                      <td>REV-001</td>
                      <td>Jurnal pembalik accrual bulan sebelumnya</td>
                      <td>reversal</td>
                      <td>
                        <button class="btn btn-sm btn-outline-primary">✏️</button>
                      </td>
                    </tr>

                    <tr>
                      <td>7</td>
                      <td>2026-01-05</td>
                      <td>PAY-001</td>
                      <td>Pembayaran hutang vendor melalui bank</td>
                      <td>payment</td>
                      <td>
                        <button class="btn btn-sm btn-outline-primary">✏️</button>
                      </td>
                    </tr>

                    <tr>
                      <td>8</td>
                      <td>2026-01-05</td>
                      <td>PAY-002</td>
                      <td>Pembayaran gaji karyawan bulan Januari</td>
                      <td>payroll</td>
                      <td>
                        <button class="btn btn-sm btn-outline-primary">✏️</button>
                      </td>
                    </tr>

                    <tr>
                      <td>9</td>
                      <td>2026-01-06</td>
                      <td>AST-001</td>
                      <td>Pembelian kendaraan operasional perusahaan</td>
                      <td>fixed_asset</td>
                      <td>
                        <button class="btn btn-sm btn-outline-primary">✏️</button>
                      </td>
                    </tr>

                    <tr>
                      <td>10</td>
                      <td>2026-01-06</td>
                      <td>LON-001</td>
                      <td>Penerimaan pinjaman bank jangka panjang</td>
                      <td>financing</td>
                      <td>
                        <button class="btn btn-sm btn-outline-primary">✏️</button>
                      </td>
                    </tr>

                    <tr>
                      <td>11</td>
                      <td>2026-01-07</td>
                      <td>EMP-001</td>
                      <td>Pinjaman dana talangan karyawan</td>
                      <td>employee_loan</td>
                      <td>
                        <button class="btn btn-sm btn-outline-primary">✏️</button>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- | Journal Type      | Fungsi                |
          | ----------------- | --------------------- |
          | sales             | penjualan             |
          | purchase          | pembelian             |
          | cash_receipt      | kas masuk             |
          | cash_disbursement | kas keluar            |
          | payment           | pembayaran hutang     |
          | receipt           | penerimaan pembayaran |
 -->
          <table border="1" cellpadding="8" cellspacing="0" style="margin-top:20px;">
            <caption><b>Journal Transaction Lines (Detail / COA)</b></caption>
            <thead>
              <tr>
                <th>Journal ID</th>
                <th>COA</th>
                <th>Debit</th>
                <th>Credit</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Kas (1101)</td>
                <td>1.100.000</td>
                <td>0</td>
              </tr>
              <tr>
                <td>1</td>
                <td>Penjualan (4101)</td>
                <td>0</td>
                <td>1.000.000</td>
              </tr>
              <tr>
                <td>1</td>
                <td>PPN (2101)</td>
                <td>0</td>
                <td>100.000</td>
              </tr>
            </tbody>
          </table>




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



<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">

      <!-- HEADER -->
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">
          Manual General Journal Entry
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal">
        </button>
      </div>

      <!-- FORM -->
      <form id="formJournal">

        <div class="modal-body">

          <!-- ========================= -->
          <!-- JOURNAL HEADER -->
          <!-- ========================= -->

          <div class="card mb-3">
            <div class="card-header bg-light fw-bold">
              Journal Header
            </div>

            <div class="card-body">

              <div class="row g-3">
<!-- Journal Number -->
                <div class="col-md-12">
                  <label class="form-label">
                    Journal No
                  </label>

                  <input type="text"
                         class="form-control"
                         name="journal_no"
                         value="AUTO"
                         readonly>
                </div>
 <!-- Source Module -->
                <div class="col-md-12">
                  <label class="form-label">
                    Source Module
                  </label>

                  <select class="form-select"
                          name="source_module" disabled>

                    <option value="MANUAL">
                      MANUAL
                    </option>

                    <option value="SALES">
                      SALES
                    </option>

                    <option value="PURCHASE">
                      PURCHASE
                    </option>

                    <option value="INVENTORY">
                      INVENTORY
                    </option>

                    <option value="FINANCE">
                      FINANCE
                    </option>

                  </select>
                </div>
                <!-- Journal Date -->
                <div class="col-md-3">
                  <label class="form-label" title="kapan transaksi itu sebenarnya terjadi">
                    Transaction Date<span class="text-danger">*</span>
                  </label>

                  <input type="date"
                         class="form-control"
                         name="journal_date"
                         required>
                </div>

                <!-- Journal Type -->
<div class="col-md-3">
  <label class="form-label">
    Transaction Type<span class="text-danger">*</span>
  </label>

  <select class="form-select"
          name="journal_type"
          required>

    <option value="">-- Select --</option>

    <!-- ===================================================== -->
    <!-- GENERAL ACCOUNTING -->
    <!-- ===================================================== -->

    <option value="GENERAL_JOURNAL">
      General Journal
    </option>

    <option value="ADJUSTMENT_JOURNAL">
      Adjustment Journal
    </option>

    <option value="ACCRUAL_JOURNAL">
      Accrual Journal
    </option>

    <option value="REVERSING_JOURNAL">
      Reversing Journal
    </option>

    <option value="CLOSING_JOURNAL">
      Closing Journal
    </option>

    <option value="OPENING_BALANCE">
      Opening Balance
    </option>

    <!-- ===================================================== -->
    <!-- CASH & BANK -->
    <!-- ===================================================== -->

    <option value="CASH_IN">
      Cash In
    </option>

    <option value="CASH_OUT">
      Cash Out
    </option>

    <option value="BANK_TRANSFER">
      Bank Transfer
    </option>

    <option value="PETTY_CASH">
      Petty Cash
    </option>

    <!-- ===================================================== -->
    <!-- SALES -->
    <!-- ===================================================== -->

    <option value="SALES_INVOICE">
      Sales Invoice
    </option>

    <option value="SALES_RETURN">
      Sales Return
    </option>

    <option value="SALES_PAYMENT">
      Sales Payment
    </option>

    <option value="CUSTOMER_RECEIPT">
      Customer Receipt
    </option>

    <!-- ===================================================== -->
    <!-- PURCHASE -->
    <!-- ===================================================== -->

    <option value="PURCHASE_INVOICE">
      Purchase Invoice
    </option>

    <option value="PURCHASE_RETURN">
      Purchase Return
    </option>

    <option value="PURCHASE_PAYMENT">
      Purchase Payment
    </option>

    <option value="VENDOR_PAYMENT">
      Vendor Payment
    </option>

    <!-- ===================================================== -->
    <!-- INVENTORY -->
    <!-- ===================================================== -->

    <option value="INVENTORY_IN">
      Inventory In
    </option>

    <option value="INVENTORY_OUT">
      Inventory Out
    </option>

    <option value="STOCK_ADJUSTMENT">
      Stock Adjustment
    </option>

    <option value="STOCK_OPNAME">
      Stock Opname
    </option>

    <option value="STOCK_TRANSFER">
      Stock Transfer
    </option>

    <!-- ===================================================== -->
    <!-- FIXED ASSET -->
    <!-- ===================================================== -->

    <option value="ASSET_PURCHASE">
      Asset Purchase
    </option>

    <option value="ASSET_DEPRECIATION">
      Asset Depreciation
    </option>

    <option value="ASSET_DISPOSAL">
      Asset Disposal
    </option>

    <!-- ===================================================== -->
    <!-- PAYROLL -->
    <!-- ===================================================== -->

    <option value="PAYROLL">
      Payroll
    </option>

    <option value="SALARY_PAYMENT">
      Salary Payment
    </option>

    <option value="EMPLOYEE_REIMBURSEMENT">
      Employee Reimbursement
    </option>

    <!-- ===================================================== -->
    <!-- TAX -->
    <!-- ===================================================== -->

    <option value="TAX_PAYMENT">
      Tax Payment
    </option>

    <option value="TAX_ADJUSTMENT">
      Tax Adjustment
    </option>

    <!-- ===================================================== -->
    <!-- LOAN & FINANCING -->
    <!-- ===================================================== -->

    <option value="LOAN_RECEIPT">
      Loan Receipt
    </option>

    <option value="LOAN_PAYMENT">
      Loan Payment
    </option>

    <!-- ===================================================== -->
    <!-- OWNER / INVESTOR -->
    <!-- ===================================================== -->

    <option value="CAPITAL_INJECTION">
      Capital Injection
    </option>

    <option value="OWNER_DRAWING">
      Owner Drawing
    </option>

  </select>
</div>
               

                <!-- Status -->
                <!-- <div class="col-md-3">
                  <label class="form-label">
                    Status
                  </label>

                  <select class="form-select"
                          name="status" disabled>

                    <option value="DRAFT">
                      Draft
                    </option>

                    <option value="POSTED">
                      Posted
                    </option>

                  </select>
                </div> -->

                <!-- Posting Date -->
                <!-- <div class="col-md-3">
                  <label class="form-label" title="tanggal jurnal resmi masuk buku besar" >
                    Posting Date
                  </label>

                  <input type="date"
                  class="form-control"
                  name="posting_date"
                   disabled>
                </div> -->
                

                

                <!-- Reference Type -->
                <div class="col-md-3">
                  <label class="form-label">
                    Reference Type
                  </label>

                  <input type="text"
                         class="form-control"
                         name="reference_type"
                         placeholder="sales_invoice">
                </div>
<!-- Reference Number -->
                <div class="col-md-3">
                  <label class="form-label">
                    Reference No
                  </label>

                  <input type="text"
                         class="form-control"
                         name="reference_no"
                         placeholder="INV-001 / ADJ-001">
                </div>

                <!-- Description -->
                <div class="col-md-12">
                  <label class="form-label">
                    Description<span class="text-danger">*</span>
                  </label>

                  <textarea class="form-control"
                            rows="2"
                            name="description"
                            placeholder="Journal description"></textarea>
                </div>

              </div>
            </div>
          </div>

                <!-- ========================= -->
                <!-- Dimension & Analysis -->
                <!-- ========================= -->
<div class="card mb-3">
            <div class="card-header bg-light fw-bold">
             Dimension & Analysis
            </div>
                 

                    <div class="card-body">
                      <div class="row g-3">
                        <div class="col-md-6">
                          <label class="form-label">Branch</label>
                          <select class="form-select">
                            <option>PUSAT</option>
                            <option>MEDAN</option>
                            <option>JAKARTA</option>
                            <option>BANDUNG</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label class="form-label">Business Unit</label>
                          <select class="form-select">
                            <option>HQ</option>
                            <option>SOFTWARE HOUSE</option>
                            <option>TRAINING CENTER</option>
                          </select>
                        </div>
                      
                      <div class="col-md-4">
                        <label class="form-label">Division</label>
                        <select class="form-select">
                          <option>HQ</option>
                          <option>Marketing</option>
                          <option>Finance</option>
                          <option>Operational</option>
                        </select>
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Sub Division</label>
                        <select class="form-select">
                          <option>-</option>
                          <option>HQ</option>
                          <option>Digital Ads</option>
                          <option>Sales</option>
                          <option>Collection</option>
                        </select>
                      </div>

                      <div class="col-md-4">
                        <label class="form-label">Project</label>
                        <select class="form-select">
                          <option>-</option>
                          <option>Promo Ramadhan</option>
                          <option>ERP Development</option>
                        </select>
                      </div>

                      <!-- <div class="col-md-6">
                        <label class="form-label">Customer</label>
                        <select class="form-select">
                          <option>-</option>
                          <option>PT ABC</option>
                          <option>PT XYZ</option>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label">Vendor</label>
                        <select class="form-select">
                          <option>-</option>
                          <option>CV Supplier Utama</option>
                        </select>
                      </div> -->
</div>
                    </div>
                  </div>







          <!-- ========================= -->
          <!-- JOURNAL DETAIL -->
          <!-- ========================= -->

          <div class="card">

            <div class="card-header d-flex justify-content-between align-items-center">

              <span class="fw-bold">
                Journal Detail<span class="text-danger">*</span>
              </span>

              

            </div>

            <div class="card-body p-0">

              <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle mb-0"
                id="journalDetailTable">

                <thead class="table-light text-center">

                  <tr>

                    <th width="22%">
                      Account
                    </th>

                    <th width="18%">
                      Memo
                    </th>

                    <th width="12%">
                      Debit
                    </th>

                    <th width="12%">
                      Credit
                    </th>

                    <th width="10%">
                      Branch
                    </th>
                    <th width="10%">
                      Project
                    </th>
                    <th width="12%">
                      Entity_Type
                    </th>
                     <th width="12%">
                      Entity_ID
                    </th>

                    

                    <th width="4%">
                      #
                    </th>

                  </tr>

                </thead>

                <tbody id="journalTableBody">

                  <tr>

                    <!-- ACCOUNT -->
                    <td>

                      <select class="form-select"
                      name="coa_id[]"
                      required>

                      <option value="">
                        -- Select Account --
                      </option>

                      <option value="1">
                        1-1001 - Cash
                      </option>

                      <option value="2">
                        1-1101 - Bank BCA
                      </option>

                      <option value="3">
                        1-1201 - Accounts Receivable
                      </option>

                      <option value="4">
                        2-1101 - Accounts Payable
                      </option>

                      <option value="5">
                        4-1001 - Sales Revenue
                      </option>

                      <option value="6">
                        5-1001 - Salary Expense
                      </option>

                    </select>

                  </td>

                  <!-- MEMO -->
                  <td>

                    <input type="text"
                    class="form-control"
                    name="line_memo[]"
                    placeholder="Line memo">

                  </td>

                  <!-- DEBIT -->
                  <td>

                    <input type="number"
                    class="form-control debit text-end"
                    name="debit[]"
                    min="0"
                    step="0.01"
                    value="0">

                  </td>

                  <!-- CREDIT -->
                  <td>

                    <input type="number"
                    class="form-control credit text-end"
                    name="credit[]"
                    min="0"
                    step="0.01"
                    value="0">

                  </td>

                  <!-- BRANCH -->
                  <td>

                    <select class="form-select"
                    name="branch_id[]">

                    <option value="">
                      -
                    </option>

                    <option value="1">
                      Head Office
                    </option>

                    <option value="2">
                      Bandung
                    </option>

                  </select>

                </td>

                

              <!-- PROJECT -->
              <td>

                <select class="form-select"
                name="project_id[]">

                <option value="">
                  -
                </option>

                <option value="1">
                  Project Alpha
                </option>

                <option value="2">
                  Project Beta
                </option>

              </select>

            </td>
<!-- ENTITY -->
                <td>

                  <select class="form-select"
                  name="entity_id[]">

                  <option value="">
                    -
                  </option>

                  <option value="1">
                    Customer A
                  </option>

                  <option value="2">
                    Vendor B
                  </option>

                </select>

              </td>
              <td>

                  <select class="form-select"
                  name="entity_id[]">

                  <option value="">
                    -
                  </option>

                  <option value="1">
                    1
                  </option>

                  <option value="2">
                   14
                  </option>

                </select>

              </td>
            <!-- DELETE -->
            <td class="text-center">

              <button type="button"
              class="btn btn-outline-danger btn-sm btn-remove-row">

              <i class="fas fa-trash"></i>

            </button>

          </td>

        </tr>

      </tbody>
      <tfoot>
        <tr>
          <td colspan="9"><button type="button"
            class="btn btn-outline-primary btn-sm btn-block"
            onclick="addJournalRow()">

            + Add Row

          </button></td>
        </tr>
      </tfoot>
    </table>

  </div>

</div>

</div>

          <!-- ========================= -->
          <!-- TOTAL -->
          <!-- ========================= -->

          <div class="card mt-3">

            <div class="card-body">

              <div class="row">

                <div class="col-md-4">

                  <div class="fw-bold">
                    Total Debit
                  </div>

                  <div id="totalDebit"
                       class="text-primary fs-5">

                    0.00

                  </div>

                </div>

                <div class="col-md-4">

                  <div class="fw-bold">
                    Total Credit
                  </div>

                  <div id="totalCredit"
                       class="text-success fs-5">

                    0.00

                  </div>

                </div>

                <div class="col-md-4">

                  <div class="fw-bold">
                    Balance Status
                  </div>

                  <div id="balanceStatus"
                       class="text-danger fw-bold">

                    NOT BALANCED

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

        <!-- FOOTER -->
        <div class="modal-footer">

          <button type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal">

            Cancel

          </button>

          <button type="button"
                  class="btn btn-warning">

            Save Draft

          </button>

          <button type="submit"
                  class="btn btn-primary">

            Post Journal

          </button>

        </div>

      </form>

    </div>
  </div>
</div>


<!-- Modal Impor -->
<div class="modal fade" id="modalImpor" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Impor Data</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">   
        <div class="alert alert-warning mb-3 py-2" role="alert" style="font-size: 0.9rem;">
          <i class="fas fa-exclamation-triangle me-1"></i>
          <strong>Penting:</strong> Pastikan file yang akan diimpor menggunakan <strong>template resmi</strong> yang sudah disediakan. Menggunakan file lain atau format berbeda dapat menyebabkan <strong>kesalahan impor</strong>.
        </div>     

        <label class="form-label">Pilih File:</label>
        <input type="file" class="form-control mb-3" accept=".xlsx,.xls">

        <a href="template-impor-mahasiswa.xls" class="btn btn-sm btn-outline-success w-100">Download Template</a>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Impor</button>
      </div>

    </div>
  </div>
</div>

<!-- Modal Bantuan -->
<div class="modal fade" id="modalBantuan" tabindex="-1" aria-labelledby="modalBantuanLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">

      <!-- HEADER -->
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalBantuanLabel">
          Panduan Pengisian General Journal
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal"
                aria-label="Close">
        </button>
      </div>

      <!-- BODY -->
      <div class="modal-body">

        <!-- INTRO -->
        <div class="alert alert-info">
          <b>Informasi:</b><br>
          Form ini digunakan untuk mencatat transaksi akuntansi secara manual
          ke dalam jurnal umum (General Journal).
          Semua transaksi dapat dicatat di sini selama total debit dan kredit seimbang (balanced).
        </div>

        <!-- ======================== -->
        <!-- HEADER JOURNAL -->
        <!-- ======================== -->

        <div class="card mb-4">
          <div class="card-header bg-light fw-bold">
            1. Journal Header
          </div>

          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-bordered table-sm align-middle">
                <thead class="table-light">
                  <tr>
                    <th width="20%">Field</th>
                    <th width="20%">Jenis Input</th>
                    <th width="60%">Penjelasan</th>
                  </tr>
                </thead>

                <tbody>

                  <tr>
                    <td><b>Journal Date</b></td>
                    <td>Date</td>
                    <td>
                      Tanggal transaksi sebenarnya terjadi.
                      Contoh:
                      <code>2026-01-15</code>
                    </td>
                  </tr>

                  <tr>
                    <td><b>Posting Date</b></td>
                    <td>Date</td>
                    <td>
                      Tanggal jurnal diposting ke buku besar.
                      Biasanya sama dengan tanggal jurnal.
                    </td>
                  </tr>

                  <tr>
                    <td><b>Journal Type</b></td>
                    <td>Select</td>
                    <td>
                      Jenis jurnal yang digunakan.
                      <ul class="mb-0">
                        <li><b>General Journal</b> → jurnal umum biasa</li>
                        <li><b>Adjustment Journal</b> → jurnal penyesuaian</li>
                        <li><b>Accrual Journal</b> → accrual / akrual</li>
                        <li><b>Reversing Journal</b> → jurnal pembalik</li>
                        <li><b>Closing Journal</b> → jurnal penutup</li>
                      </ul>
                    </td>
                  </tr>

                  <tr>
                    <td><b>Status</b></td>
                    <td>Select</td>
                    <td>
                      <ul class="mb-0">
                        <li><b>Draft</b> → belum diposting</li>
                        <li><b>Posted</b> → sudah masuk buku besar</li>
                      </ul>
                    </td>
                  </tr>

                  <tr>
                    <td><b>Journal No</b></td>
                    <td>Readonly Input</td>
                    <td>
                      Nomor jurnal otomatis dari sistem.
                    </td>
                  </tr>

                  <tr>
                    <td><b>Reference No</b></td>
                    <td>Text</td>
                    <td>
                      Nomor referensi dokumen transaksi.
                      Contoh:
                      <code>INV-001</code>,
                      <code>PAY-002</code>,
                      <code>ADJ-001</code>
                    </td>
                  </tr>

                  <tr>
                    <td><b>Reference Type</b></td>
                    <td>Text</td>
                    <td>
                      Jenis dokumen asal transaksi.
                      Contoh:
                      <code>sales_invoice</code>,
                      <code>purchase_invoice</code>,
                      <code>manual_journal</code>
                    </td>
                  </tr>

                  <tr>
                    <td><b>Source Module</b></td>
                    <td>Select</td>
                    <td>
                      Modul asal transaksi.
                      <ul class="mb-0">
                        <li>MANUAL</li>
                        <li>SALES</li>
                        <li>PURCHASE</li>
                        <li>INVENTORY</li>
                        <li>FINANCE</li>
                      </ul>
                    </td>
                  </tr>

                  <tr>
                    <td><b>Description</b></td>
                    <td>Textarea</td>
                    <td>
                      Penjelasan transaksi secara umum.
                      Contoh:
                      <i>Pembelian perlengkapan kantor secara tunai.</i>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>

          </div>
        </div>

        <!-- ======================== -->
        <!-- DETAIL -->
        <!-- ======================== -->

        <div class="card mb-4">
          <div class="card-header bg-light fw-bold">
            2. Journal Detail / Journal Lines
          </div>

          <div class="card-body">

            <div class="alert alert-warning">
              Setiap transaksi minimal memiliki:
              <b>1 akun debit</b> dan
              <b>1 akun kredit</b>.
            </div>

            <div class="table-responsive">
              <table class="table table-bordered table-sm align-middle">

                <thead class="table-light">
                  <tr>
                    <th width="20%">Field</th>
                    <th width="20%">Jenis Input</th>
                    <th width="60%">Penjelasan</th>
                  </tr>
                </thead>

                <tbody>

                  <tr>
                    <td><b>Account</b></td>
                    <td>Select</td>
                    <td>
                      Pilih akun COA (Chart of Account)
                      yang terlibat dalam transaksi.
                    </td>
                  </tr>

                  <tr>
                    <td><b>Memo</b></td>
                    <td>Text</td>
                    <td>
                      Keterangan khusus untuk baris jurnal tersebut.
                    </td>
                  </tr>

                  <tr>
                    <td><b>Debit</b></td>
                    <td>Number</td>
                    <td>
                      Isi nominal debit.
                      Hanya isi salah satu:
                      debit ATAU kredit.
                    </td>
                  </tr>

                  <tr>
                    <td><b>Credit</b></td>
                    <td>Number</td>
                    <td>
                      Isi nominal kredit.
                      Hanya isi salah satu:
                      debit ATAU kredit.
                    </td>
                  </tr>

                  <tr>
                    <td><b>Branch</b></td>
                    <td>Select</td>
                    <td>
                      Cabang yang terkait transaksi.
                      Opsional.
                    </td>
                  </tr>

                  <tr>
                    <td><b>Entity</b></td>
                    <td>Select</td>
                    <td>
                      Customer, vendor, supplier,
                      atau pihak terkait transaksi.
                    </td>
                  </tr>

                  <tr>
                    <td><b>Project</b></td>
                    <td>Select</td>
                    <td>
                      Digunakan jika transaksi terkait proyek tertentu.
                    </td>
                  </tr>

                </tbody>

              </table>
            </div>

          </div>
        </div>

        <!-- ======================== -->
        <!-- CONTOH -->
        <!-- ======================== -->

        <div class="card mb-4">
          <div class="card-header bg-light fw-bold">
            3. Contoh Pengisian Jurnal
          </div>

          <div class="card-body">

            <h6 class="fw-bold">
              Contoh 1 — Pembelian Tunai Perlengkapan
            </h6>

            <table class="table table-bordered table-sm">
              <thead class="table-light">
                <tr>
                  <th>Akun</th>
                  <th>Debit</th>
                  <th>Credit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Beban Perlengkapan</td>
                  <td>500.000</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>Kas</td>
                  <td>0</td>
                  <td>500.000</td>
                </tr>
              </tbody>
            </table>

            <hr>

            <h6 class="fw-bold">
              Contoh 2 — Penjualan Tunai
            </h6>

            <table class="table table-bordered table-sm">
              <thead class="table-light">
                <tr>
                  <th>Akun</th>
                  <th>Debit</th>
                  <th>Credit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Kas</td>
                  <td>1.000.000</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>Pendapatan Penjualan</td>
                  <td>0</td>
                  <td>1.000.000</td>
                </tr>
              </tbody>
            </table>

            <hr>

            <h6 class="fw-bold">
              Contoh 3 — Pembayaran Hutang
            </h6>

            <table class="table table-bordered table-sm">
              <thead class="table-light">
                <tr>
                  <th>Akun</th>
                  <th>Debit</th>
                  <th>Credit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Hutang Usaha</td>
                  <td>2.000.000</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>Kas / Bank</td>
                  <td>0</td>
                  <td>2.000.000</td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>

        <!-- ======================== -->
        <!-- RULES -->
        <!-- ======================== -->

        <div class="card">
          <div class="card-header bg-light fw-bold">
            4. Aturan Penting Jurnal
          </div>

          <div class="card-body">

            <div class="alert alert-danger">
              <b>Jurnal tidak dapat diposting jika total debit dan kredit tidak sama.</b>
            </div>

            <ul class="mb-0">
              <li>Total debit harus sama dengan total kredit.</li>
              <li>Minimal terdapat 2 baris jurnal.</li>
              <li>Setiap baris hanya boleh debit atau kredit.</li>
              <li>Gunakan deskripsi yang jelas dan mudah dipahami.</li>
              <li>Pastikan akun COA sesuai jenis transaksi.</li>
              <li>Gunakan reference number agar mudah ditelusuri.</li>
            </ul>

          </div>
        </div>

      </div>

      <!-- FOOTER -->
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

<!-- modal reset -->
<div class="modal fade" id="modalResetData" tabindex="-1" aria-labelledby="modalResetDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Konfirmasi Reset Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form action="proses_hapus_akun.php" method="POST">
        <div class="modal-body text-center">

          <!-- ID disimpan sebagai hidden input -->
          <input type="hidden" name="id_akun" id="hapus_id_akun">

          <p class="fs-5">Apakah Anda yakin ingin menghapus semua data ini?</p>

          <!-- Tampilkan kode dan nama akun -->
         <!--  <p class="text-muted mb-0 d-flex justify-content-center gap-2">
            <span id="hapus_kode_akun"></span>
            <span>|</span>
            <strong id="hapus_nama_akun"></strong>
          </p> -->

        </div>

        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger">Hapus</button>
        </div>

      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modalGagal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalGagalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-danger border-2 shadow">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="modalGagalLabel"><i class="fas fa-times-circle me-2"></i>Oops! Terjadi Kesalahan</h5>
      </div>
      <div class="modal-body">
        <p><strong>❌ Masalah:</strong><br> 
          <span id="errorAction">Upload file gagal.</span></p>

        <p><strong>⚠️ Penyebab:</strong><br> 
          <span id="errorReason">Format file tidak sesuai (.pdf/.docx) atau ukuran melebihi 5MB.</span></p>

        <p><strong>💡 Solusi:</strong><br> 
          <span id="errorSolution">Pastikan file sesuai format, ukuran < 5MB, lalu coba unggah lagi.</span></p>

        <p><i>Jika masih gagal, hubungi admin untuk bantuan atau tips lebih lanjut.</i></p>

        <!-- Optional: reward tip gamified -->
        <div class="alert alert-warning mt-3" role="alert">
          🔹 Tip: Setiap percobaan upload berhasil akan menambah EXP +20! Jangan menyerah! 🚀
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" id="closeGagal" data-bs-dismiss="modal"><i class="fas fa-check me-1"></i> Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php include('5script.php'); ?>
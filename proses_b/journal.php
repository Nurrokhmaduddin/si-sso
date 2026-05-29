<?php
$page = 'journal';

include('koneksi.php');
include('1header.php');
include('2navbar.php');
include('3sidebar.php');
?>
<?php
// ── Auto-generate journal number ──────────────────────────────
$yearMonth = date('Ym');

$q = mysqli_query($conn, "
    SELECT journal_no
    FROM journal_headers
    WHERE journal_no LIKE 'JV-$yearMonth-%'
    ORDER BY journal_no  DESC
    LIMIT 1
");

$lastNumber = 0;
if ($row = mysqli_fetch_assoc($q)) {
    $parts      = explode('-', $row['journal_no']);
    $lastNumber = (int) end($parts);
}
$nextNumber = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
$journalNo  = "JV-$yearMonth-$nextNumber";

// ── Siapkan option strings untuk HTML & JS ────────────────────

// COA — tambahkan data-subledger di setiap option
// agar JS bisa baca langsung tanpa AJAX tambahan
$qCoa = mysqli_query($conn, "
    SELECT id, kode_akun, nama_akun, subledger_type
    FROM coa
    WHERE status = 'ACTIVE'
    ORDER BY kode_akun ASC
");
$coaOptions = '';
while ($c = mysqli_fetch_assoc($qCoa)) {
    $sub         = htmlspecialchars($c['subledger_type'] ?? '');
    $coaOptions .= "<option value=\"{$c['id']}\" data-subledger=\"{$sub}\">"
                 . htmlspecialchars($c['kode_akun']) . ' - '
                 . htmlspecialchars($c['nama_akun'])
                 . "</option>";
}

// Branch
$qBranch = mysqli_query($conn, "SELECT id, branch_name FROM branches ORDER BY branch_name ASC");
$branchOptions = '';
while ($b = mysqli_fetch_assoc($qBranch)) {
    $branchOptions .= "<option value=\"{$b['id']}\">" . htmlspecialchars($b['branch_name']) . "</option>";
}

// Project
$qProject = mysqli_query($conn, "SELECT id, project_name FROM projects ORDER BY project_name ASC");
$projectOptions = '';
while ($p = mysqli_fetch_assoc($qProject)) {
    $projectOptions .= "<option value=\"{$p['id']}\">" . htmlspecialchars($p['project_name']) . "</option>";
}

// JS-safe versions (untuk dipakai di dalam JS template literal)
$coaOptionsJS     = addslashes($coaOptions);
$branchOptionsJS  = addslashes($branchOptions);
$projectOptionsJS = addslashes($projectOptions);
?>

<style>
#modalTambahData .modal-body {
    max-height: calc(100vh - 180px);
    overflow-y: auto;
}
#modalTambahData .table-responsive {
    overflow-x: auto;
}
.modal {
    overflow-y: auto !important;
}
/* Entity type → tampil sebagai readonly badge setelah COA dipilih */
.entity-type-display {
    font-size: 0.82rem;
    font-weight: 600;
    padding: 4px 8px;
    border-radius: 4px;
    background: #e9ecef;
    color: #495057;
    display: inline-block;
    min-width: 80px;
    text-align: center;
}
.entity-type-display.empty {
    color: #adb5bd;
    background: #f8f9fa;
}
</style>

<div class="content-wrapper" style="min-height: 626.4px;">

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Jurnal Entries
        <button type="button" class="btn btn-tool"
                data-bs-toggle="modal" data-bs-target="#modalBantuan"
                title="Bantuan">
          <i class="fas fa-question-circle"></i>
        </button>
      </h3>
      <p class="text-muted mb-0">Daftar transaksi yang dimasukkan pada jurnal. Journal type bisa digunakan untuk penandaan atau pengelompokan jurnal.</p>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <!-- ── Card Filter & Toolbar ── -->
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6"><b>Periode:</b> <?= date('F Y') ?></div>
                <div class="col-md-6"><b>Status:</b> Semua</div>
              </div>
            </div>
            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm"
                        data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm"
                        data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm"
                        data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>
                <button type="button" class="btn btn-outline-danger btn-sm"
                        data-bs-toggle="modal" data-bs-target="#modalGagal">
                  <i class="fas fa-exclamation-triangle me-1"></i> ErrorHandler
                </button>
              </div>
            </div>
          </div>

          <!-- ── Card Tabel Journal ── -->
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm datatables1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Jurnal No</th>
                      <th>Transaction Type</th>
                      <th>Transaction Date</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no    = 1;
                    $query = mysqli_query($conn, "SELECT * FROM journal_headers ORDER BY transaction_date DESC , created_at DESC");
                    while ($d = mysqli_fetch_array($query)) :
                    ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><b><?= htmlspecialchars($d['journal_no']) ?></b></td>
                      <td><span class="badge bg-info"><?= htmlspecialchars($d['transaction_type']) ?></span></td>
                      <td><?= date('d M Y', strtotime($d['transaction_date'])) ?></td>
                      <td><?= htmlspecialchars($d['memo']) ?></td>
                      <td>
                        <button class="btn btn-sm btn-outline-info btn-detail"
                                data-id="<?= $d['id'] ?>"
                                data-bs-toggle="modal"
                                data-bs-target="#modalDetailJournal">
                          <i class="fas fa-eye"></i>
                        </button>
                      </td>
                    </tr>
                    <?php endwhile; ?>
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

<?php include('4footer.php'); ?>

<!-- ══════════════════════════════════════════════════════════
     MODAL: Filter
     ══════════════════════════════════════════════════════════ -->
<div class="modal fade" id="modalFilter" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Filter Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <form action="" method="GET">
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Periode</label>
            <input type="month" class="form-control" name="periode">
          </div>
          <div class="mb-3">
            <label class="form-label">Transaction Type</label>
            <select name="transaction_type" class="form-select">
              <option value="">-- Semua --</option>
              <option>GENERAL_JOURNAL</option>
              <option>ADJUSTMENT_JOURNAL</option>
              <option>CASH_IN</option>
              <option>CASH_OUT</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select">
              <option value="">-- Semua --</option>
              <option>DRAFT</option>
              <option>POSTED</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info">Terapkan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════════════════════
     MODAL: Import
     ══════════════════════════════════════════════════════════ -->
<div class="modal fade" id="modalImpor" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Impor Data</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning py-2" style="font-size:.9rem">
          <i class="fas fa-exclamation-triangle me-1"></i>
          Pastikan menggunakan <strong>template resmi</strong>.
        </div>
        <label class="form-label">Pilih File:</label>
        <input type="file" class="form-control mb-3" accept=".xlsx,.xls">
        <a href="template-impor-journal.xls" class="btn btn-sm btn-outline-success w-100">Download Template</a>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Impor</button>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════════════════════
     MODAL: Bantuan
     ══════════════════════════════════════════════════════════ -->
<div class="modal fade" id="modalBantuan" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Panduan Pengisian General Journal</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-info">
          Form ini digunakan untuk mencatat transaksi akuntansi secara manual.
          Total debit dan kredit harus seimbang (balanced).
        </div>

        <div class="card mb-3">
          <div class="card-header bg-light fw-bold">Alur Pengisian Journal Detail</div>
          <div class="card-body">
            <ol>
              <li>Pilih <b>Account (COA)</b> → kolom <b>Entity Type</b> otomatis terisi sesuai subledger akun tersebut.</li>
              <li>Jika Entity Type memiliki data, kolom <b>Entity ID</b> otomatis load daftar entitas (customer / vendor / dll).</li>
              <li>Pilih Entity ID yang sesuai.</li>
              <li>Isi nominal <b>Debit</b> atau <b>Credit</b> (tidak keduanya).</li>
            </ol>
            <div class="alert alert-warning mb-0">
              <b>Aturan:</b> Total Debit harus = Total Credit sebelum bisa Post Journal.
            </div>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-header bg-light fw-bold">Contoh — Penjualan Tunai</div>
          <div class="card-body">
            <table class="table table-bordered table-sm">
              <thead class="table-light"><tr><th>Akun</th><th>Entity Type</th><th>Debit</th><th>Credit</th></tr></thead>
              <tbody>
                <tr><td>Kas Kecil (1101)</td><td><span class="badge bg-secondary">cash</span></td><td>1.000.000</td><td>0</td></tr>
                <tr><td>Pendapatan Penjualan (4101)</td><td><span class="badge bg-info">customer</span></td><td>0</td><td>1.000.000</td></tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="card">
          <div class="card-header bg-light fw-bold">Aturan Penting</div>
          <div class="card-body">
            <div class="alert alert-danger">Jurnal tidak dapat diposting jika total debit ≠ kredit.</div>
            <ul class="mb-0">
              <li>Total debit harus sama dengan total kredit.</li>
              <li>Minimal terdapat 2 baris jurnal.</li>
              <li>Setiap baris hanya boleh debit ATAU kredit.</li>
              <li>Gunakan reference number agar mudah ditelusuri.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════════════════════
     MODAL: Error Handler
     ══════════════════════════════════════════════════════════ -->
<div class="modal fade" id="modalGagal" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content border-danger border-2 shadow">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title"><i class="fas fa-times-circle me-2"></i>Terjadi Kesalahan</h5>
      </div>
      <div class="modal-body">
        <p><strong>❌ Masalah:</strong><br><span id="errorAction">Upload file gagal.</span></p>
        <p><strong>⚠️ Penyebab:</strong><br><span id="errorReason">Format file tidak sesuai atau ukuran melebihi 5MB.</span></p>
        <p><strong>💡 Solusi:</strong><br><span id="errorSolution">Pastikan file sesuai format, lalu coba lagi.</span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal"><i class="fas fa-check me-1"></i> Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════════════════════
     MODAL: Tambah Data — Manual General Journal Entry
     ══════════════════════════════════════════════════════════ -->
<div class="modal fade" id="modalTambahData" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Manual General Journal Entry</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form id="formJournal" method="POST" action="journal_save.php">
        <div class="modal-body">

          <!-- ── Journal Header ─────────────────────────────── -->
          <div class="card mb-3">
            <div class="card-header bg-light fw-bold">Journal Header</div>
            <div class="card-body">
              <div class="row g-3">

                <div class="col-md-4">
                  <label class="form-label">Journal No</label>
                  <input type="text" class="form-control" name="journal_no"
                         value="<?= $journalNo ?>" readonly>
                </div>

                <div class="col-md-4">
                  <label class="form-label">Transaction Type <span class="text-danger">*</span></label>
                  <select class="form-select" name="journal_type" required>
                    <option value="">-- Select --</option>
                    <optgroup label="General Accounting">
                      <option value="GENERAL_JOURNAL">General Journal</option>
                      <option value="ADJUSTMENT_JOURNAL">Adjustment Journal</option>
                      <option value="ACCRUAL_JOURNAL">Accrual Journal</option>
                      <option value="REVERSING_JOURNAL">Reversing Journal</option>
                      <option value="CLOSING_JOURNAL">Closing Journal</option>
                      <option value="OPENING_BALANCE">Opening Balance</option>
                    </optgroup>
                    <optgroup label="Cash & Bank">
                      <option value="CASH_IN">Cash In</option>
                      <option value="CASH_OUT">Cash Out</option>
                      <option value="BANK_TRANSFER">Bank Transfer</option>
                      <option value="PETTY_CASH">Petty Cash</option>
                    </optgroup>
                    <optgroup label="Sales">
                      <option value="SALES_INVOICE">Sales Invoice</option>
                      <option value="SALES_RETURN">Sales Return</option>
                      <option value="SALES_PAYMENT">Sales Payment</option>
                      <option value="CUSTOMER_RECEIPT">Customer Receipt</option>
                    </optgroup>
                    <optgroup label="Purchase">
                      <option value="PURCHASE_INVOICE">Purchase Invoice</option>
                      <option value="PURCHASE_RETURN">Purchase Return</option>
                      <option value="PURCHASE_PAYMENT">Purchase Payment</option>
                      <option value="VENDOR_PAYMENT">Vendor Payment</option>
                    </optgroup>
                    <optgroup label="Inventory">
                      <option value="INVENTORY_IN">Inventory In</option>
                      <option value="INVENTORY_OUT">Inventory Out</option>
                      <option value="STOCK_ADJUSTMENT">Stock Adjustment</option>
                      <option value="STOCK_OPNAME">Stock Opname</option>
                      <option value="STOCK_TRANSFER">Stock Transfer</option>
                    </optgroup>
                    <optgroup label="Fixed Asset">
                      <option value="ASSET_PURCHASE">Asset Purchase</option>
                      <option value="ASSET_DEPRECIATION">Asset Depreciation</option>
                      <option value="ASSET_DISPOSAL">Asset Disposal</option>
                    </optgroup>
                    <optgroup label="Payroll">
                      <option value="PAYROLL">Payroll</option>
                      <option value="SALARY_PAYMENT">Salary Payment</option>
                      <option value="EMPLOYEE_REIMBURSEMENT">Employee Reimbursement</option>
                    </optgroup>
                    <optgroup label="Tax">
                      <option value="TAX_PAYMENT">Tax Payment</option>
                      <option value="TAX_ADJUSTMENT">Tax Adjustment</option>
                    </optgroup>
                    <optgroup label="Loan & Financing">
                      <option value="LOAN_RECEIPT">Loan Receipt</option>
                      <option value="LOAN_PAYMENT">Loan Payment</option>
                    </optgroup>
                    <optgroup label="Owner / Investor">
                      <option value="CAPITAL_INJECTION">Capital Injection</option>
                      <option value="OWNER_DRAWING">Owner Drawing</option>
                    </optgroup>
                  </select>
                </div>

                <div class="col-md-4">
                  <label class="form-label">Transaction Date <span class="text-danger">*</span></label>
                  <input type="date" class="form-control" name="journal_date" required>
                </div>

                <div class="col-md-4">
                  <label class="form-label">Source Module</label>
                  <select class="form-select" name="source_module">
                    <!-- <option value="MANUAL">MANUAL</option> -->
                    <!-- <option value="MARKETING">MARKETING</option> -->
                    <option value="SALES">SALES</option>
                    <option value="OPERATIONAL">OPERATIONAL</option>
                    <option value="FINANCE" selected>FINANCE</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <label class="form-label">Reference Type</label>
                  <input type="text" class="form-control" name="reference_type"
                         placeholder="sales_invoice">
                </div>

                <div class="col-md-4">
                  <label class="form-label">Reference No</label>
                  <input type="text" class="form-control" name="reference_no"
                         placeholder="INV-001 / ADJ-001">
                </div>

                <div class="col-md-12">
                  <label class="form-label">Description <span class="text-danger">*</span></label>
                  <textarea class="form-control" rows="2" name="description"
                            placeholder="Journal description" required></textarea>
                </div>

              </div>
            </div>
          </div>

          <!-- ── Dimension & Analysis ───────────────────────── -->
          <div class="card mb-3">
            <div class="card-header bg-light fw-bold">Dimension & Analysis</div>
            <div class="card-body">
              <div class="row g-3">
                <div class="col-md-4">
                  <label class="form-label">Branch</label>
                  <select class="form-select" name="header_branch_id">
                    <option value="0">-</option>
                    <?= $branchOptions ?>
                  </select>
                </div>
                <div class="col-md-4">
                  <label class="form-label">Business Unit</label>
                  <select class="form-select" name="header_business_unit">
                    <option value="0">-</option>
                    <option value="HQ">HQ</option>
                    <option value="SOFTWARE_HOUSE">SOFTWARE HOUSE</option>
                    <option value="TRAINING_CENTER">TRAINING CENTER</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label class="form-label">Project</label>
                  <select class="form-select" name="header_project_id">
                    <option value="0">-</option>
                    <?= $projectOptions ?>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <!-- ── Journal Detail Lines ───────────────────────── -->
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <span class="fw-bold">Journal Detail <span class="text-danger">*</span></span>
              <small class="text-muted">
                Pilih Account → Entity Type otomatis terisi → Entity ID load otomatis
              </small>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle mb-0"
                       id="journalDetailTable">
                  <thead class="table-light text-center">
                    <tr>
                      <th style="min-width:200px">Account <span class="text-danger">*</span></th>
                      <th style="min-width:130px">Memo</th>
                      <th style="min-width:110px">Debit</th>
                      <th style="min-width:110px">Credit</th>
                      <th style="min-width:110px">Branch</th>
                      <th style="min-width:110px">Project</th>
                      <th style="min-width:100px">Entity Type</th>
                      <th style="min-width:160px">Entity ID</th>
                      <th style="min-width:40px">#</th>
                    </tr>
                  </thead>
                  <tbody id="journalTableBody">

                    <!-- Baris pertama (static, PHP render) -->
                    <tr>
                      <!-- ACCOUNT -->
                      <td>
                        <?php
                        // Re-query untuk baris pertama (pointer sudah habis)
                        $qCoaRow = mysqli_query($conn, "SELECT id, kode_akun, nama_akun, subledger_type FROM coa WHERE status='ACTIVE' ORDER BY kode_akun ASC");
                        ?>
                        <select class="form-select select-coa" name="coa_id[]" required>
                          <option value="" data-subledger="">-- Pilih Akun --</option>
                          <?php while ($c = mysqli_fetch_assoc($qCoaRow)): ?>
                          <option value="<?= $c['id'] ?>"
                                  data-subledger="<?= htmlspecialchars($c['subledger_type'] ?? '') ?>">
                            <?= htmlspecialchars($c['kode_akun']) ?> - <?= htmlspecialchars($c['nama_akun']) ?>
                          </option>
                          <?php endwhile; ?>
                        </select>
                      </td>

                      <!-- MEMO -->
                      <td>
                        <input type="text" class="form-control"
                               name="line_memo[]" placeholder="Line memo">
                      </td>

                      <!-- DEBIT -->
                      <td>
                        <input type="number" class="form-control debit text-end"
                               name="debit[]" min="0" step="0.01" value="0">
                      </td>

                      <!-- CREDIT -->
                      <td>
                        <input type="number" class="form-control credit text-end"
                               name="credit[]" min="0" step="0.01" value="0">
                      </td>

                      <!-- BRANCH -->
                      <td>
                        <select class="form-select" name="branch_id[]">
                          <option value="0">-</option>
                          <?= $branchOptions ?>
                        </select>
                      </td>

                      <!-- PROJECT -->
                      <td>
                        <select class="form-select" name="project_id[]">
                          <option value="0">-</option>
                          <?= $projectOptions ?>
                        </select>
                      </td>

                      <!-- ENTITY TYPE — readonly badge, diisi otomatis dari COA -->
                      <td class="text-center">
                        <span class="entity-type-display empty">—</span>
                        <input type="hidden" name="entity_type[]" value="">
                      </td>

                      <!-- ENTITY ID — load via AJAX -->
                      <td>
                        <div class="entity-id-wrapper">
                          <select class="form-select select-entity-id"
                                  name="entity_id[]" disabled>
                            <option value="">- pilih akun dulu -</option>
                          </select>
                          <div class="entity-spinner spinner-border spinner-border-sm
                                      text-secondary mt-1 d-none"></div>
                          <small class="entity-msg d-none"></small>
                        </div>
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
                      <td colspan="9">
                        <button type="button"
                                class="btn btn-outline-primary btn-sm"
                                onclick="addJournalRow()">
                          <i class="fas fa-plus me-1"></i> Add Row
                        </button>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>

          <!-- ── Balance Summary ────────────────────────────── -->
          <div class="card mt-3">
            <div class="card-body">
              <div class="row text-center">
                <div class="col-md-4">
                  <div class="fw-bold text-muted mb-1">Total Debit</div>
                  <div id="totalDebit" class="text-primary fs-5 fw-bold">0.00</div>
                </div>
                <div class="col-md-4">
                  <div class="fw-bold text-muted mb-1">Total Credit</div>
                  <div id="totalCredit" class="text-success fs-5 fw-bold">0.00</div>
                </div>
                <div class="col-md-4">
                  <div class="fw-bold text-muted mb-1">Balance Status</div>
                  <div id="balanceStatus" class="text-danger fs-5 fw-bold">NOT BALANCED</div>
                </div>
              </div>
            </div>
          </div>

        </div><!-- /modal-body -->

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-warning" id="btnSaveDraft">
            <i class="fas fa-save me-1"></i> Save Draft
          </button>
          <button type="submit" class="btn btn-primary" id="btnPostJournal">
            <i class="fas fa-check me-1"></i> Post Journal
          </button>
        </div>

      </form>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════════════════════
     MODAL: Detail Journal
     ══════════════════════════════════════════════════════════ -->
<div class="modal fade" id="modalDetailJournal" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Journal Detail</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body" id="detailJournalBody">
        <div class="text-center p-5">
          <div class="spinner-border text-primary"></div>
          <div class="mt-2">Loading...</div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('5script.php'); ?>

<script>
// ══════════════════════════════════════════════════════════════
// DATA DARI PHP — di-inject sekali, dipakai ulang di JS
// ══════════════════════════════════════════════════════════════
var _coaOptions     = `<?= $coaOptionsJS ?>`;
var _branchOptions  = `<?= $branchOptionsJS ?>`;
var _projectOptions = `<?= $projectOptionsJS ?>`;

// ══════════════════════════════════════════════════════════════
// FUNGSI: Tampilkan Entity Type dari subledger COA
// ── Dipanggil saat select-coa berubah
// ══════════════════════════════════════════════════════════════
function applyEntityTypeFromCOA(selectCoaEl) {

    var $select     = $(selectCoaEl);
    var $row        = $select.closest('tr');
    var subledger   = $select.find('option:selected').data('subledger') || '';

    // Update badge tampilan
    var $badge = $row.find('.entity-type-display');
    var $hidden = $row.find('input[name="entity_type[]"]');

    if (subledger) {
        $badge.text(subledger).removeClass('empty');
        $hidden.val(subledger);
    } else {
        $badge.text('—').addClass('empty');
        $hidden.val('');
    }

    // Lanjut load entity ID
    loadEntityID($row, subledger);
}

// ══════════════════════════════════════════════════════════════
// FUNGSI: Load Entity ID via AJAX berdasarkan entity_type
// ══════════════════════════════════════════════════════════════
function loadEntityID($row, entityType) {

    var $entitySelect = $row.find('.select-entity-id');
    var $spinner      = $row.find('.entity-spinner');
    var $msg          = $row.find('.entity-msg');

    // Reset
    $entitySelect.empty().append('<option value="">-</option>');
    $msg.addClass('d-none').text('').removeClass('text-danger text-warning text-muted');
    $spinner.addClass('d-none');

    // Kosong — disable dan stop
    if (!entityType || entityType === '') {
        $entitySelect.prop('disabled', true)
                     .empty()
                     .append('<option value="">- pilih akun dulu -</option>');
        return;
    }

    // Tampilkan spinner
    $spinner.removeClass('d-none');
    $entitySelect.prop('disabled', true);

    // AJAX
    $.ajax({
        url      : 'ajax_get_entities.php',
        type     : 'GET',
        data     : { entity_type: entityType },
        dataType : 'json',

        success: function(res) {
            $spinner.addClass('d-none');

            if (res.status === 'ok') {
                if (res.rows.length === 0) {
                    $entitySelect.append('<option value="">— tidak ada data —</option>');
                    $entitySelect.prop('disabled', true);
                    $msg.removeClass('d-none').text('Data kosong.')
                        .addClass('text-warning');
                    return;
                }
                $.each(res.rows, function(i, item) {
                    $entitySelect.append(
                        $('<option>', { value: item.id, text: item.label })
                    );
                });
                $entitySelect.prop('disabled', false);

            } else if (res.status === 'no_entity') {
                $entitySelect.append('<option value="">— tidak perlu entity —</option>');
                $entitySelect.prop('disabled', true);
                $msg.removeClass('d-none')
                    .text('Tipe ini tidak memerlukan entity.')
                    .addClass('text-muted');

            } else if (res.status === 'not_mapped') {
                $entitySelect.append('<option value="">-</option>');
                $entitySelect.prop('disabled', true);
                $msg.removeClass('d-none')
                    .text('⚠ "' + entityType + '" belum terhubung ke tabel.')
                    .addClass('text-danger');

            } else {
                $entitySelect.append('<option value="">- error -</option>');
                $entitySelect.prop('disabled', true);
                $msg.removeClass('d-none')
                    .text('DB Error: ' + res.message)
                    .addClass('text-danger');
            }
        },

        error: function(xhr, status, err) {
            $spinner.addClass('d-none');
            $entitySelect.prop('disabled', true)
                         .empty()
                         .append('<option value="">- request gagal -</option>');
            $msg.removeClass('d-none')
                .text('AJAX error: ' + err)
                .addClass('text-danger');
        }
    });
}

// ══════════════════════════════════════════════════════════════
// EVENT: saat COA dipilih (baris mana saja, termasuk baris baru)
// ══════════════════════════════════════════════════════════════
$(document).on('change', '.select-coa', function() {
    applyEntityTypeFromCOA(this);
});

// ══════════════════════════════════════════════════════════════
// FUNGSI: Tambah baris baru
// ══════════════════════════════════════════════════════════════
function addJournalRow() {
    var newRow = `
    <tr>
        <td>
            <select class="form-select select-coa" name="coa_id[]" required>
                <option value="" data-subledger="">-- Pilih Akun --</option>
                ${_coaOptions}
            </select>
        </td>
        <td>
            <input type="text" class="form-control"
                   name="line_memo[]" placeholder="Line memo">
        </td>
        <td>
            <input type="number" class="form-control debit text-end"
                   name="debit[]" min="0" step="0.01" value="0">
        </td>
        <td>
            <input type="number" class="form-control credit text-end"
                   name="credit[]" min="0" step="0.01" value="0">
        </td>
        <td>
            <select class="form-select" name="branch_id[]">
                <option value="0">-</option>
                ${_branchOptions}
            </select>
        </td>
        <td>
            <select class="form-select" name="project_id[]">
                <option value="0">-</option>
                ${_projectOptions}
            </select>
        </td>
        <td class="text-center">
            <span class="entity-type-display empty">—</span>
            <input type="hidden" name="entity_type[]" value="">
        </td>
        <td>
            <div class="entity-id-wrapper">
                <select class="form-select select-entity-id"
                        name="entity_id[]" disabled>
                    <option value="">- pilih akun dulu -</option>
                </select>
                <div class="entity-spinner spinner-border spinner-border-sm
                            text-secondary mt-1 d-none"></div>
                <small class="entity-msg d-none"></small>
            </div>
        </td>
        <td class="text-center">
            <button type="button"
                    class="btn btn-outline-danger btn-sm btn-remove-row">
                <i class="fas fa-trash"></i>
            </button>
        </td>
    </tr>`;

    $('#journalTableBody').append(newRow);
}

// ══════════════════════════════════════════════════════════════
// EVENT: hapus baris
// ══════════════════════════════════════════════════════════════
$(document).on('click', '.btn-remove-row', function() {
    if ($('#journalTableBody tr').length <= 1) {
        alert('Minimal harus ada 1 baris jurnal.');
        return;
    }
    $(this).closest('tr').remove();
    recalcBalance();
});

// ══════════════════════════════════════════════════════════════
// FUNGSI: Hitung balance debit vs credit
// ══════════════════════════════════════════════════════════════
function recalcBalance() {
    var totalDebit  = 0;
    var totalCredit = 0;

    $('.debit').each(function()  { totalDebit  += parseFloat($(this).val()) || 0; });
    $('.credit').each(function() { totalCredit += parseFloat($(this).val()) || 0; });

    $('#totalDebit').text(totalDebit.toFixed(2));
    $('#totalCredit').text(totalCredit.toFixed(2));

    if (totalDebit > 0 && totalDebit === totalCredit) {
        $('#balanceStatus')
            .text('✔ BALANCED')
            .removeClass('text-danger')
            .addClass('text-success');
    } else {
        $('#balanceStatus')
            .text('✖ NOT BALANCED')
            .removeClass('text-success')
            .addClass('text-danger');
    }
}

$(document).on('input', '.debit, .credit', function() {
    recalcBalance();
});

// ══════════════════════════════════════════════════════════════
// EVENT: klik detail journal
// ══════════════════════════════════════════════════════════════
$(document).on('click', '.btn-detail', function() {
    var id = $(this).data('id');
    $('#detailJournalBody').html(`
        <div class="text-center p-5">
            <div class="spinner-border text-primary"></div>
            <div class="mt-2">Loading...</div>
        </div>
    `);
    $.ajax({
        url     : 'ajax_journal_detail.php',
        type    : 'GET',
        data    : { id: id },
        success : function(response) {
            $('#detailJournalBody').html(response);
        }
    });
});

// ══════════════════════════════════════════════════════════════
// Validasi sebelum submit: harus BALANCED
// ══════════════════════════════════════════════════════════════
$('#formJournal').on('submit', function(e) {
    var totalDebit  = 0;
    var totalCredit = 0;
    $('.debit').each(function()  { totalDebit  += parseFloat($(this).val()) || 0; });
    $('.credit').each(function() { totalCredit += parseFloat($(this).val()) || 0; });

    if (totalDebit === 0 || totalDebit !== totalCredit) {
        e.preventDefault();
        alert('Journal tidak dapat diposting.\nTotal Debit harus sama dengan Total Credit dan tidak boleh 0.');
        return false;
    }

    if ($('#journalTableBody tr').length < 2) {
        e.preventDefault();
        alert('Minimal 2 baris jurnal diperlukan.');
        return false;
    }
});
</script>

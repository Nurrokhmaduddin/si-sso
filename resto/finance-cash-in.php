<?php $page = 'finance-cash-in'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">

<!-- ========================================================= -->
<!-- HEADER -->
<!-- ========================================================= -->
<section class="content-header">
  <div class="container-fluid">

    <div class="d-flex justify-content-between align-items-start flex-wrap">
      <div>
        <h3 class="mb-1">
          Cash In Management (Journal-Based)
          <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
            <i class="fas fa-question-circle"></i>
          </button>
        </h3>

        <p class="text-muted mb-0">
          Halaman ini menampilkan seluruh kas masuk yang berasal dari <b>Business Document</b> yang memicu
          <b>Journal Cash Receipt</b> di sistem akuntansi (journal_header & journal_detail).
        </p>
      </div>
    </div>

  </div>
</section>

<!-- ========================================================= -->
<!-- MAIN -->
<!-- ========================================================= -->
<section class="content">
<div class="container-fluid">

<!-- ========================================================= -->
<!-- FILTER CARD -->
<!-- ========================================================= -->
<div class="card">
  <div class="card-body">

    <div class="row">
      <div class="col-md-3"><b>Period:</b> Jan 2026</div>
      <div class="col-md-3"><b>Source Module:</b> All</div>
      <div class="col-md-3"><b>Document Type:</b> All Cash Receipt</div>
      <div class="col-md-3"><b>Bank/Cash Account:</b> All</div>
    </div>

  </div>

  <div class="card-footer d-flex gap-2 flex-wrap">

    <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalFilter">
      <i class="fas fa-filter me-1"></i> Filter
    </button>

    <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambahData">
      <i class="fas fa-plus me-1"></i> Add Cash-In Document
    </button>

    <button class="btn btn-outline-success btn-sm">
      <i class="fas fa-file-download me-1"></i> Export
    </button>

  </div>
</div>

<!-- ========================================================= -->
<!-- TABLE -->
<!-- ========================================================= -->
<div class="card">
<div class="card-body table-responsive">

<table class="table table-bordered table-striped table-sm datatables1 align-middle">

<thead class="table-dark text-center">
<tr>
  <th>Document No</th>
  <th>Document Type</th>
  <th>Source Module</th>
  <th>Counterparty</th>
  <th>Cash Type</th>
  <th>Bank/Cash</th>
  <th>Amount</th>
  <th>Aksi</th>
</tr>
</thead>

<tbody>

<tr>
  <td>CI-2026-001</td>
  <td>AR Payment (Invoice Settlement)</td>
  <td>Sales</td>
  <td>PT Maju Bersama</td>
  <td>Customer Payment</td>
  <td>Bank BCA</td>
  <td>Rp 25.000.000</td>
  <td>
    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalView">View</button>
    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</button>
  </td>
</tr>

<tr><td>CI-2026-002</td><td>Cash Sales</td><td>Sales</td><td>Toko Sinar Jaya</td><td>Cash Sale</td><td>Cash</td><td>Rp 5.500.000</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
<tr><td>CI-2026-003</td><td>Loan Receipt</td><td>Finance</td><td>PT Sumber Dana</td><td>Loan Incoming</td><td>Bank Mandiri</td><td>Rp 100.000.000</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
<tr><td>CI-2026-004</td><td>Down Payment Received</td><td>Sales</td><td>CV Cahaya Abadi</td><td>DP Receipt</td><td>Bank BNI</td><td>Rp 12.000.000</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
<tr><td>CI-2026-005</td><td>Refund Received</td><td>Finance</td><td>Vendor PT Indo Supplier</td><td>Refund</td><td>Bank BRI</td><td>Rp 3.200.000</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
<tr><td>CI-2026-006</td><td>Interest Income</td><td>Finance</td><td>Bank BCA</td><td>Interest</td><td>Bank BCA</td><td>Rp 450.000</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
<tr><td>CI-2026-007</td><td>Tax Refund</td><td>Tax</td><td>DJP Indonesia</td><td>Tax Refund</td><td>Bank Mandiri</td><td>Rp 8.000.000</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
<tr><td>CI-2026-008</td><td>Owner Capital Injection</td><td>Finance</td><td>Owner</td><td>Equity Injection</td><td>Bank BCA</td><td>Rp 250.000.000</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
<tr><td>CI-2026-009</td><td>Other Income</td><td>Finance</td><td>Misc Income</td><td>Other</td><td>Cash</td><td>Rp 1.250.000</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
<tr><td>CI-2026-010</td><td>Advance Receipt</td><td>Sales</td><td>PT Global Tekno</td><td>Advance</td><td>Bank BNI</td><td>Rp 18.000.000</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
<tr><td>CI-2026-011</td><td>Project Payment</td><td>Sales</td><td>PT Nusantara Group</td><td>Contract Payment</td><td>Bank Mandiri</td><td>Rp 75.000.000</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>

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
<div class="modal fade" id="modalFilter" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header bg-info text-white">
  <h5 class="modal-title">Cash-In Filter</h5>
</div>

<div class="modal-body">

<label>Period</label>
<input type="month" class="form-control mb-2">

<label>Source Module</label>
<select class="form-select mb-2">
  <option>All</option>
  <option>Sales</option>
  <option>Finance</option>
  <option>Tax</option>
</select>

<label>Cash Type</label>
<select class="form-select mb-2">
  <option>All</option>
  <option>Customer Payment</option>
  <option>Cash Sale</option>
  <option>Loan</option>
  <option>Refund</option>
  <option>Other Income</option>
</select>

</div>

<div class="modal-footer">
<button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<button class="btn btn-primary">Apply</button>
</div>

</div>
</div>
</div>

<!-- ========================================================= -->
<!-- MODAL TAMBAH -->
<!-- ========================================================= -->
<div class="modal fade" id="modalTambahData" tabindex="-1">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header bg-primary text-white">
  <h5 class="modal-title">Add Cash-In Business Document</h5>
</div>

<form>

<div class="modal-body">

<h6 class="text-primary">1. Business Document (Trigger Cash-In Journal)</h6>

<label>Document Type</label>
<select class="form-select mb-2">
  <option>AR Payment (Invoice Settlement)</option>
  <option>Cash Sales</option>
  <option>Loan Receipt</option>
  <option>Down Payment Received</option>
  <option>Refund Received</option>
  <option>Interest Income</option>
  <option>Tax Refund</option>
  <option>Owner Capital Injection</option>
  <option>Advance Receipt</option>
  <option>Other Income</option>
</select>

<label>Document No</label>
<input type="text" class="form-control mb-2" placeholder="AUTO CI-2026-XXX">

<label>Counterparty</label>
<input type="text" class="form-control mb-2">

<label>Amount</label>
<input type="number" class="form-control mb-3">

<hr>

<h6 class="text-primary">2. Accounting Impact (Auto Journal)</h6>

<div class="alert alert-warning">
Debit: Cash/Bank Account (Asset) <br>
Credit: Revenue / Liability / Equity (depends on document type)
</div>

</div>

<div class="modal-footer">
<button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<button class="btn btn-primary">Generate Journal</button>
</div>

</form>

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
<h5 class="modal-title">Cash-In Concept Guide (3-Layer Model)</h5>
</div>

<div class="modal-body">

<h6>1. Business Document Layer</h6>
<p>
Semua cash-in berasal dari event bisnis seperti:
AR Payment, Cash Sales, Loan Receipt, Refund, Tax Refund, Capital Injection, Advance Receipt.
</p>

<h6>2. Journal Layer</h6>
<p>
Setiap business document akan menghasilkan journal_header & journal_detail:
</p>
<ul>
<li>Debit: Cash / Bank</li>
<li>Credit: Revenue / Liability / Equity</li>
</ul>

<h6>3. Reference Layer</h6>
<p>
Document No (CI-xxxx) menghubungkan business event dengan jurnal akuntansi.
</p>

<hr>

<h6>Cash-In Trigger List</h6>
<ul>
<li>AR Payment (Invoice Settlement)</li>
<li>Cash Sales</li>
<li>Loan Incoming</li>
<li>Down Payment Received</li>
<li>Refund from Vendor</li>
<li>Interest Income</li>
<li>Tax Refund</li>
<li>Owner Capital Injection</li>
<li>Advance Receipt</li>
<li>Other Income</li>
</ul>

</div>

<div class="modal-footer">
<button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</div>

</div>
</div>
</div>

<!-- ========================================================= -->
<!-- MODAL RESET -->
<!-- ========================================================= -->
<div class="modal fade" id="modalResetData" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header bg-danger text-white">
<h5 class="modal-title">Reset Cash-In Data</h5>
</div>

<div class="modal-body text-center">
Apakah Anda yakin ingin mereset semua data cash-in?
</div>

<div class="modal-footer">
<button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
<button class="btn btn-danger">Reset</button>
</div>

</div>
</div>
</div>

<!-- ========================================================= -->
<!-- ERROR MODAL -->
<!-- ========================================================= -->
<div class="modal fade" id="modalGagal" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content border-danger">

<div class="modal-header bg-danger text-white">
<h5 class="modal-title">Error Handler</h5>
</div>

<div class="modal-body">
<p><b>Gagal generate Cash-In Journal</b></p>
<p>Pastikan business document memiliki amount dan counterparty.</p>
</div>

<div class="modal-footer">
<button class="btn btn-dark" data-bs-dismiss="modal">Close</button>
</div>

</div>
</div>
</div>

<?php include('5script.php'); ?>
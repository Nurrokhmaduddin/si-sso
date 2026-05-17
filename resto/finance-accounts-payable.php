<?php $page = 'finance-accounts-payable'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

<!-- ========================================================= -->
<!-- HEADER -->
<!-- ========================================================= -->
<section class="content-header">
  <div class="container-fluid">
    <h3 class="mb-0">
      Accounts Payable Subledger (Journal-Based)
      <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
        <i class="fas fa-question-circle"></i>
      </button>
    </h3>

    <p class="text-muted mb-0">
      Menampilkan AP berbasis journal_detail (GL posting) yang diturunkan dari business_document dan journal_header sebagai layer akuntansi.
    </p>
  </div>
</section>

<!-- ========================================================= -->
<!-- FILTER -->
<!-- ========================================================= -->
<section class="content">
<div class="container-fluid">

<div class="card">
  <div class="card-body">
    <div class="row">

      <div class="col-md-3"><b>Period:</b> Jan 2026</div>
      <div class="col-md-3"><b>Module:</b> All</div>
      <div class="col-md-3"><b>AP Type:</b> All</div>
      <div class="col-md-3"><b>Subledger:</b> All Vendor</div>

    </div>
  </div>

  <div class="card-footer">

    <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalFilter">
      <i class="fas fa-filter me-1"></i> Filter
    </button>

    <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambahData">
      <i class="fas fa-plus me-1"></i> Add Business Document
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

<table class="table table-bordered table-striped table-sm datatables1">

<thead class="table-dark text-center">
<tr>
  <th>Document No</th>
  <th>Document Type</th>
  <th>AP Type</th>
  <th>Counterparty (Vendor)</th>
  <th>Module</th>
  <th>Amount</th>
  <th>Aksi</th>
</tr>
</thead>

<tbody>

<tr>
  <td>AP-2026-001</td>
  <td>Purchase Invoice</td>
  <td>Trade Payable</td>
  <td>PT Supplier Maju</td>
  <td>Procurement</td>
  <td>Rp 25.000.000</td>
  <td>
    <button class="btn btn-sm btn-primary">View</button>
    <button class="btn btn-sm btn-warning">Edit</button>
  </td>
</tr>

<tr><td>AP-2026-002</td><td>Service Invoice</td><td>Trade Payable</td><td>PT Jasa Teknik</td><td>Operations</td><td>Rp 18.000.000</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
<tr><td>AP-2026-003</td><td>Utility Invoice</td><td>Expense Payable</td><td>PLN Indonesia</td><td>Finance</td><td>Rp 5.000.000</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
<tr><td>AP-2026-004</td><td>Lease Invoice</td><td>Long Term Payable</td><td>PT Gedung Sentral</td><td>Finance</td><td>Rp 42.500.000</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
<tr><td>AP-2026-005</td><td>Tax Payable</td><td>Tax Payable</td><td>DJP Indonesia</td><td>Tax</td><td>Rp 12.000.000</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
<tr><td>AP-2026-006</td><td>Loan Interest</td><td>Financial Payable</td><td>PT Bank Nasional</td><td>Treasury</td><td>Rp 65.000.000</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
<tr><td>AP-2026-007</td><td>Purchase Invoice</td><td>Trade Payable</td><td>PT Nusantara Supplier</td><td>Procurement</td><td>Rp 22.000.000</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
<tr><td>AP-2026-008</td><td>Advance Receipt</td><td>Other Payable</td><td>PT Mega Industri</td><td>Finance</td><td>Rp 15.000.000</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
<tr><td>AP-2026-009</td><td>Purchase Invoice</td><td>Trade Payable</td><td>PT Global Material</td><td>Procurement</td><td>Rp 95.000.000</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
<tr><td>AP-2026-010</td><td>Employee Reimbursement</td><td>Employee Payable</td><td>Dimas Finance</td><td>HR</td><td>Rp 8.000.000</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
<tr><td>AP-2026-011</td><td>Purchase Invoice</td><td>Trade Payable</td><td>PT Arta Supplier</td><td>Procurement</td><td>Rp 11.300.000</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>

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
<div class="modal fade" id="modalFilter">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header bg-info text-white">
<h5 class="modal-title">AP Subledger Filter</h5>
</div>

<div class="modal-body">

<label>Period (journal_header.date)</label>
<input type="month" class="form-control mb-2">

<label>Module Source</label>
<select class="form-select mb-2">
  <option>All</option>
  <option>Procurement</option>
  <option>Finance</option>
  <option>HR</option>
  <option>Tax</option>
</select>

<label>Document Type</label>
<select class="form-select mb-2">
  <option>All</option>
  <option>Purchase Invoice</option>
  <option>Service Invoice</option>
  <option>Tax Payable</option>
  <option>Reimbursement</option>
</select>

<label>AP Type</label>
<select class="form-select mb-2">
  <option>All</option>
  <option>Trade Payable</option>
  <option>Employee Payable</option>
  <option>Tax Payable</option>
</select>

<label>Vendor</label>
<input type="text" class="form-control">

</div>

<div class="modal-footer">
<button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<button class="btn btn-primary">Apply</button>
</div>

</div>
</div>
</div>

<!-- ========================================================= -->
<!-- MODAL TAMBAH BUSINESS DOCUMENT -->
<!-- ========================================================= -->
<div class="modal fade" id="modalTambahData">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header bg-primary text-white">
<h5 class="modal-title">Add AP Business Document</h5>
</div>

<form>
<div class="modal-body">

<h6 class="text-primary">1. Business Document Layer</h6>

<div class="row">

<div class="col-md-6 mb-2">
<label>Document Type</label>
<select class="form-select">
  <option>Purchase Invoice</option>
  <option>Service Invoice</option>
  <option>Tax Payable</option>
  <option>Reimbursement</option>
</select>
</div>

<div class="col-md-6 mb-2">
<label>Document No</label>
<input class="form-control" readonly placeholder="AUTO AP-2026-XXXX">
</div>

</div>

<div class="mb-2">
<label>Description</label>
<textarea class="form-control"></textarea>
</div>

<hr>

<h6 class="text-primary">2. Vendor & Source</h6>

<div class="row">

<div class="col-md-6 mb-2">
<label>Vendor</label>
<input class="form-control">
</div>

<div class="col-md-6 mb-2">
<label>Module Source</label>
<select class="form-select">
<option>Procurement</option>
<option>Finance</option>
<option>HR</option>
<option>Tax</option>
</select>
</div>

</div>

<hr>

<h6 class="text-primary">3. Financial Layer</h6>

<div class="row">

<div class="col-md-6 mb-2">
<label>Amount</label>
<input type="number" class="form-control">
</div>

<div class="col-md-6 mb-2">
<label>AP Type (auto mapping)</label>
<select class="form-select" disabled>
<option>Trade Payable</option>
<option>Employee Payable</option>
<option>Tax Payable</option>
<option>Other Payable</option>
</select>
</div>

</div>

</div>

<div class="modal-footer">
<button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<button class="btn btn-primary">Save</button>
</div>

</form>

</div>
</div>
</div>
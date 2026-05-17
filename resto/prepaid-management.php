<?php $page = 'prepaid-management'; ?>
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
      Prepaid Expense Management
      <button class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
        <i class="fas fa-question-circle"></i>
      </button>
    </h3>

    <p class="text-muted mb-0">
      Sistem ini mengelola seluruh biaya dibayar dimuka seperti asuransi, sewa, subscription, dan kontrak layanan
      yang kemudian diamortisasi sesuai periode manfaat.
    </p>

  </div>
</section>

<!-- ========================================================= -->
<!-- SUMMARY -->
<!-- ========================================================= -->
<section class="content">
<div class="container-fluid">

<div class="row mb-3">

  <div class="col-md-4">
    <div class="card text-bg-primary">
      <div class="card-body">
        <h5>Total Prepaid</h5>
        <h3>Rp 485.000.000</h3>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card text-bg-warning">
      <div class="card-body">
        <h5>Amortisasi Berjalan</h5>
        <h3>Rp 120.000.000</h3>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card text-bg-success">
      <div class="card-body">
        <h5>Remaining Prepaid</h5>
        <h3>Rp 365.000.000</h3>
      </div>
    </div>
  </div>

</div>

<!-- ========================================================= -->
<!-- ACTION BUTTONS -->
<!-- ========================================================= -->
<div class="card mb-3">
  <div class="card-body d-flex gap-2 flex-wrap">

    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalAddDocument">
      <i class="fas fa-plus me-1"></i> Add Document
    </button>

    <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalAmortisasi">
      <i class="fas fa-calculator me-1"></i> Run Amortization
    </button>

    <button class="btn btn-outline-success">
      <i class="fas fa-file-download me-1"></i> Export
    </button>

  </div>
</div>

<!-- ========================================================= -->
<!-- TABLE -->
<!-- ========================================================= -->
<div class="card">
<div class="card-header">
  <h3 class="card-title">Prepaid Register</h3>
</div>

<div class="card-body table-responsive">

<table class="table table-bordered table-striped table-sm datatables1">

<thead class="table-dark text-center">
<tr>
  <th>Doc ID</th>
  <th>Type</th>
  <th>Vendor</th>
  <th>Start Date</th>
  <th>End Date</th>
  <th>Amount</th>
  <th>Remaining</th>
  <th>Status</th>
  <th>Aksi</th>
</tr>
</thead>

<tbody>

<tr>
  <td>PR-001</td>
  <td>Insurance</td>
  <td>Asuransi Astra</td>
  <td>2026-01-01</td>
  <td>2026-12-31</td>
  <td class="text-end">50.000.000</td>
  <td class="text-end">35.000.000</td>
  <td><span class="badge bg-warning">Active</span></td>
  <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalView">View</button></td>
</tr>

<tr>
  <td>PR-002</td>
  <td>Rent</td>
  <td>Gedung Menara</td>
  <td>2026-01-01</td>
  <td>2026-12-31</td>
  <td class="text-end">120.000.000</td>
  <td class="text-end">90.000.000</td>
  <td><span class="badge bg-success">Active</span></td>
  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>PR-003</td>
  <td>Software</td>
  <td>Microsoft</td>
  <td>2026-01-01</td>
  <td>2026-12-31</td>
  <td class="text-end">80.000.000</td>
  <td class="text-end">60.000.000</td>
  <td><span class="badge bg-info">Amortizing</span></td>
  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>
<tr>
  <td>PR-004</td>
  <td>Insurance</td>
  <td>Zurich Insurance</td>
  <td>2026-02-01</td>
  <td>2027-01-31</td>
  <td class="text-end">65.000.000</td>
  <td class="text-end">58.000.000</td>
  <td><span class="badge bg-warning">Active</span></td>
  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>PR-005</td>
  <td>Rent</td>
  <td>Graha Office Tower</td>
  <td>2026-03-01</td>
  <td>2027-02-28</td>
  <td class="text-end">240.000.000</td>
  <td class="text-end">220.000.000</td>
  <td><span class="badge bg-success">Active</span></td>
  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>PR-006</td>
  <td>Software</td>
  <td>Google Workspace</td>
  <td>2026-01-01</td>
  <td>2026-12-31</td>
  <td class="text-end">36.000.000</td>
  <td class="text-end">22.000.000</td>
  <td><span class="badge bg-info">Amortizing</span></td>
  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>PR-007</td>
  <td>Advertising</td>
  <td>Meta Ads</td>
  <td>2026-01-15</td>
  <td>2026-06-15</td>
  <td class="text-end">50.000.000</td>
  <td class="text-end">28.000.000</td>
  <td><span class="badge bg-info">Amortizing</span></td>
  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>PR-008</td>
  <td>Maintenance</td>
  <td>PT Teknisi Mandiri</td>
  <td>2026-01-01</td>
  <td>2026-12-31</td>
  <td class="text-end">18.000.000</td>
  <td class="text-end">12.000.000</td>
  <td><span class="badge bg-warning">Active</span></td>
  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>PR-009</td>
  <td>Training</td>
  <td>Digital Skill Academy</td>
  <td>2026-02-10</td>
  <td>2026-05-10</td>
  <td class="text-end">12.000.000</td>
  <td class="text-end">4.000.000</td>
  <td><span class="badge bg-info">Amortizing</span></td>
  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>PR-010</td>
  <td>Insurance</td>
  <td>AXA Mandiri</td>
  <td>2026-01-01</td>
  <td>2026-12-31</td>
  <td class="text-end">42.000.000</td>
  <td class="text-end">30.000.000</td>
  <td><span class="badge bg-warning">Active</span></td>
  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>PR-011</td>
  <td>Rent</td>
  <td>Ruko Harmoni</td>
  <td>2026-01-01</td>
  <td>2026-12-31</td>
  <td class="text-end">90.000.000</td>
  <td class="text-end">65.000.000</td>
  <td><span class="badge bg-success">Active</span></td>
  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>PR-012</td>
  <td>Software</td>
  <td>Adobe Creative Cloud</td>
  <td>2026-01-01</td>
  <td>2026-12-31</td>
  <td class="text-end">24.000.000</td>
  <td class="text-end">14.000.000</td>
  <td><span class="badge bg-info">Amortizing</span></td>
  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>PR-013</td>
  <td>Advertising</td>
  <td>Google Ads</td>
  <td>2026-02-01</td>
  <td>2026-07-31</td>
  <td class="text-end">75.000.000</td>
  <td class="text-end">55.000.000</td>
  <td><span class="badge bg-warning">Active</span></td>
  <td><button class="btn btn-sm btn-primary">View</button></td>
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
<!-- MODAL ADD DOCUMENT -->
<!-- ========================================================= -->
<div class="modal fade" id="modalAddDocument">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header bg-primary text-white">
  <h5 class="modal-title">Add Prepaid Document</h5>
</div>

<div class="modal-body">

  <p><b>Dokumen yang bisa memicu jurnal prepaid:</b></p>
  <ul>
    <li>Invoice Asuransi</li>
    <li>Invoice Sewa</li>
    <li>Subscription SaaS</li>
    <li>Contract / SLA</li>
    <li>Proforma Invoice</li>
  </ul>

  <hr>

  <div class="row">

    <div class="col-md-6 mb-2">
      <label>Document Type</label>
      <select class="form-select">
        <option>Insurance</option>
        <option>Rent</option>
        <option>Software</option>
        <option>Advertising</option>
        <option>Maintenance</option>
      </select>
    </div>

    <div class="col-md-6 mb-2">
      <label>Vendor</label>
      <input class="form-control">
    </div>

    <div class="col-md-6 mb-2">
      <label>Start Date</label>
      <input type="date" class="form-control">
    </div>

    <div class="col-md-6 mb-2">
      <label>End Date</label>
      <input type="date" class="form-control">
    </div>

    <div class="col-md-6 mb-2">
      <label>Amount</label>
      <input type="number" class="form-control">
    </div>

    <div class="col-md-6 mb-2">
      <label>Source Document No</label>
      <input class="form-control" placeholder="INV / PO / CONTRACT">
    </div>

  </div>

  <div class="alert alert-warning mt-3">
    Jurnal otomatis:
    Dr Prepaid Expense / Cr Cash or AP
  </div>

</div>

<div class="modal-footer">
  <button class="btn btn-secondary">Cancel</button>
  <button class="btn btn-primary">Save Document</button>
</div>

</div>
</div>
</div>

<!-- ========================================================= -->
<!-- MODAL AMORTISASI -->
<!-- ========================================================= -->
<div class="modal fade" id="modalAmortisasi">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header bg-warning">
  <h5 class="modal-title">Run Amortization</h5>
</div>

<div class="modal-body">

<label>Period</label>
<input type="month" class="form-control">

<div class="alert alert-info mt-3">
  Dr Expense / Cr Prepaid Asset
</div>

</div>

<div class="modal-footer">
<button class="btn btn-secondary">Cancel</button>
<button class="btn btn-warning">Run</button>
</div>

</div>
</div>
</div>

<!-- ========================================================= -->
<!-- MODAL BANTUAN -->
<!-- ========================================================= -->
<div class="modal fade" id="modalBantuan">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header bg-dark text-white">
  <h5 class="modal-title">Prepaid Accounting Guide</h5>
</div>

<div class="modal-body">

<h5>Jenis Dokumen Prepaid</h5>
<ul>
  <li>Insurance Policy (asuransi)</li>
  <li>Lease Agreement (sewa)</li>
  <li>SaaS Subscription Invoice</li>
  <li>Advertising Contract</li>
  <li>Maintenance Agreement</li>
  <li>Training Invoice</li>
</ul>
<h5>🧾 Prepaid Others (Generic)</h5>
<ul>
  <li>Dokumen sumber umum:</li>
  <li>Proforma Invoice</li>
  <li>Contract Advance Clause</li>
  <li>Payment Voucher</li>
</ul>








<hr>

<h5>Konsep Akuntansi</h5>
<p>
Prepaid adalah aset karena pembayaran dilakukan di awal,
namun manfaat ekonomi diterima di masa depan.
</p>

<h5>Alur Jurnal</h5>
<ul>
  <li>Initial Recognition → Dr Prepaid / Cr Cash or AP</li>
  <li>Monthly Amortization → Dr Expense / Cr Prepaid</li>
</ul>

</div>

</div>
</div>
</div>
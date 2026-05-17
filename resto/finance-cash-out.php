<?php $page = 'finance-cash-out'; ?>
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
      Cash Disbursement Journal (Cash-Out Based)
      <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
        <i class="fas fa-question-circle"></i>
      </button>
    </h3>

    <p class="text-muted mb-0">
      Menampilkan transaksi kas keluar yang diturunkan dari berbagai dokumen sumber seperti vendor invoice,
      payroll, reimbursement, hingga pembayaran pajak yang memicu pencatatan jurnal pengeluaran kas.
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
      <div class="col-md-3"><b>Source Doc:</b> All</div>
      <div class="col-md-3"><b>Payment Method:</b> All</div>
      <div class="col-md-3"><b>Cash Account:</b> All Bank & Cash</div>

    </div>
  </div>

  <div class="card-footer">

    <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalFilter">
      <i class="fas fa-filter me-1"></i> Filter
    </button>

    <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambahData">
      <i class="fas fa-plus me-1"></i> Add Cash-Out
    </button>

    <button class="btn btn-outline-success btn-sm">
      <i class="fas fa-file-download me-1"></i> Export Journal
    </button>

  </div>

</div>

<!-- ========================================================= -->
<!-- TABLE -->
<!-- ========================================================= -->
<div class="card">

<div class="card-header">
  <h3 class="card-title">Cash Disbursement Journal Entries</h3>
</div>

<div class="card-body table-responsive">

<table class="table table-bordered table-striped table-sm datatables1">

<thead class="table-dark text-center">
<tr>
  <th>Journal No</th>
  <th>Date</th>
  <th>Source Document</th>
  <th>Document Type</th>
  <th>Payee</th>
  <th>Account Impact</th>
  <th>Debit</th>
  <th>Credit</th>
  <th>Aksi</th>
</tr>
</thead>

<tbody>

<tr>
  <td>CDJ-2026-001</td>
  <td>2026-01-01</td>
  <td>AP-INV-001</td>
  <td>Vendor Invoice Payment</td>
  <td>PT Maju Bersama</td>
  <td>Accounts Payable</td>
  <td class="text-end">12.500.000</td>
  <td class="text-end">12.500.000</td>
  <td class="text-center">
    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalView">View</button>
  </td>
</tr>

<tr>
  <td>CDJ-2026-002</td>
  <td>2026-01-02</td>
  <td>EXP-REQ-001</td>
  <td>Expense Reimbursement</td>
  <td>Karyawan Operasional</td>
  <td>Expense Account</td>
  <td class="text-end">1.250.000</td>
  <td class="text-end">1.250.000</td>
  <td class="text-center">
    <button class="btn btn-sm btn-primary">View</button>
  </td>
</tr>

<tr>
  <td>CDJ-2026-003</td>
  <td>2026-01-02</td>
  <td>UTILITY-PLN-001</td>
  <td>Utility Payment</td>
  <td>PLN Indonesia</td>
  <td>Utilities Expense</td>
  <td class="text-end">2.150.000</td>
  <td class="text-end">2.150.000</td>
  <td class="text-center">
    <button class="btn btn-sm btn-primary">View</button>
  </td>
</tr>

<tr>
  <td>CDJ-2026-004</td>
  <td>2026-01-03</td>
  <td>PAYROLL-001</td>
  <td>Payroll</td>
  <td>All Employees</td>
  <td>Salary Expense</td>
  <td class="text-end">75.000.000</td>
  <td class="text-end">75.000.000</td>
  <td class="text-center">
    <button class="btn btn-sm btn-primary">View</button>
  </td>
</tr>

<tr>
  <td>CDJ-2026-005</td>
  <td>2026-01-03</td>
  <td>TAX-SSP-001</td>
  <td>Tax Payment</td>
  <td>DJP Indonesia</td>
  <td>Tax Payable</td>
  <td class="text-end">9.500.000</td>
  <td class="text-end">9.500.000</td>
  <td class="text-center">
    <button class="btn btn-sm btn-primary">View</button>
  </td>
</tr>

<tr>
  <td>CDJ-2026-006</td>
  <td>2026-01-04</td>
  <td>ASSET-INV-001</td>
  <td>Fixed Asset Purchase</td>
  <td>PT Konstruksi Prima</td>
  <td>Fixed Asset</td>
  <td class="text-end">125.000.000</td>
  <td class="text-end">125.000.000</td>
  <td class="text-center">
    <button class="btn btn-sm btn-primary">View</button>
  </td>
</tr>

<tr>
  <td>CDJ-2026-007</td>
  <td>2026-01-05</td>
  <td>LOAN-REP-001</td>
  <td>Loan Repayment</td>
  <td>Bank Nusantara</td>
  <td>Loan Payable</td>
  <td class="text-end">9.500.000</td>
  <td class="text-end">9.500.000</td>
  <td class="text-center">
    <button class="btn btn-sm btn-primary">View</button>
  </td>
</tr>

<tr>
  <td>CDJ-2026-008</td>
  <td>2026-01-06</td>
  <td>ADV-SETT-001</td>
  <td>Advance Settlement</td>
  <td>PT Sumber Rejeki</td>
  <td>Advance Clearing</td>
  <td class="text-end">4.800.000</td>
  <td class="text-end">4.800.000</td>
  <td class="text-center">
    <button class="btn btn-sm btn-primary">View</button>
  </td>
</tr>

<tr>
  <td>CDJ-2026-009</td>
  <td>2026-01-06</td>
  <td>REFUND-001</td>
  <td>Vendor Refund</td>
  <td>CV Sumber Rejeki</td>
  <td>Cash/Bank</td>
  <td class="text-end">980.000</td>
  <td class="text-end">980.000</td>
  <td class="text-center">
    <button class="btn btn-sm btn-primary">View</button>
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
<!-- MODALS (ringkas tapi lengkap struktur) -->
<!-- ========================================================= -->

<div class="modal fade" id="modalFilter">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Filter Cash-Out Journal</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label>Period</label>
          <input type="month" class="form-control">
        </div>

        <div class="mb-3">
          <label>Source Document</label>
          <select class="form-select">
            <option>All</option>
            <option>Vendor Invoice</option>
            <option>Payroll</option>
            <option>Tax Payment</option>
            <option>Expense Claim</option>
            <option>Asset Purchase</option>
          </select>
        </div>

        <div class="mb-3">
          <label>Payment Method</label>
          <select class="form-select">
            <option>All</option>
            <option>Cash</option>
            <option>Bank Transfer</option>
            <option>Auto Debit</option>
          </select>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-info">Apply</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalView">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Journal Detail</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <p>Detail jurnal cash-out berdasarkan source document akan ditampilkan di sini (GL breakdown).</p>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

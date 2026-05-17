<?php $page = 'finance-fixed-asset'; ?>
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
      Fixed Asset Register & Lifecycle Management
      <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
        <i class="fas fa-question-circle"></i>
      </button>
    </h3>

    <p class="text-muted mb-0">
      Mengelola siklus lengkap aset tetap mulai dari acquisition, capitalization, depreciation, transfer, hingga disposal.
    </p>

  </div>
</section>

<!-- ========================================================= -->
<!-- SUMMARY CARDS -->
<!-- ========================================================= -->
<section class="content">
<div class="container-fluid">

<div class="row mb-3">

  <div class="col-md-4">
    <div class="card text-bg-primary">
      <div class="card-body">
        <h5>Total Fixed Asset</h5>
        <h3>Rp 1.250.000.000</h3>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card text-bg-warning">
      <div class="card-body">
        <h5>Accumulated Depreciation</h5>
        <h3>Rp 320.000.000</h3>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card text-bg-danger">
      <div class="card-body">
        <h5>Net Book Value</h5>
        <h3>Rp 930.000.000</h3>
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

    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalAcquisition">
      <i class="fas fa-plus me-1"></i> Acquisition
    </button>

    <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalDepreciation">
      <i class="fas fa-calculator me-1"></i> Run Depreciation
    </button>

    <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalDisposal">
      <i class="fas fa-trash me-1"></i> Disposal
    </button>

    <button class="btn btn-outline-success">
      <i class="fas fa-file-download me-1"></i> Export Register
    </button>

  </div>
</div>

<!-- ========================================================= -->
<!-- TABLE ASSET REGISTER -->
<!-- ========================================================= -->
<div class="card">

  <div class="card-header">
    <h3 class="card-title">Fixed Asset Register</h3>
  </div>

  <div class="card-body table-responsive">

    <table class="table table-bordered table-striped table-sm datatables1">

      <thead class="table-dark text-center">
        <tr>
          <th>Asset Code</th>
          <th>Asset Name</th>
          <th>Category</th>
          <th>Acquisition Doc</th>
          <th>Acquisition Cost</th>
          <th>Accum Dep</th>
          <th>Net Book Value</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>FA-0001</td>
          <td>Office Laptop Dell</td>
          <td>IT Equipment</td>
          <td>AP-INV-001</td>
          <td class="text-end">25.000.000</td>
          <td class="text-end">8.000.000</td>
          <td class="text-end">17.000.000</td>
          <td><span class="badge bg-success">Active</span></td>
          <td>
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalView">View</button>
          </td>
        </tr>

        <tr>
          <td>FA-0002</td>
          <td>Company Vehicle Avanza</td>
          <td>Vehicle</td>
          <td>CAPEX-002</td>
          <td class="text-end">180.000.000</td>
          <td class="text-end">45.000.000</td>
          <td class="text-end">135.000.000</td>
          <td><span class="badge bg-success">Active</span></td>
          <td><button class="btn btn-sm btn-primary">View</button></td>
        </tr>

        <tr>
          <td>FA-0003</td>
          <td>Office Furniture Set</td>
          <td>Furniture</td>
          <td>AP-INV-045</td>
          <td class="text-end">40.000.000</td>
          <td class="text-end">12.000.000</td>
          <td class="text-end">28.000.000</td>
          <td><span class="badge bg-warning">Depreciating</span></td>
          <td><button class="btn btn-sm btn-primary">View</button></td>
        </tr>

        <tr>
          <td>FA-0004</td>
          <td>Old Server Rack</td>
          <td>IT Equipment</td>
          <td>DISP-001</td>
          <td class="text-end">50.000.000</td>
          <td class="text-end">50.000.000</td>
          <td class="text-end">0</td>
          <td><span class="badge bg-danger">Disposed</span></td>
          <td><button class="btn btn-sm btn-primary">View</button></td>
        </tr>

      </tbody>

    </table>

  </div>
</div>

<!-- TABLE -->
<div class="card">
<div class="card-body table-responsive">

<table class="table table-bordered table-sm datatables1">

<thead class="table-dark text-center">
<tr>
  <th>Asset Code</th>
  <th>Asset Name</th>
  <th>Doc Source</th>
  <th>Cost</th>
  <th>Accum Dep</th>
  <th>NBV</th>
  <th>Status</th>
  <th>Aksi</th>
</tr>
</thead>

<tbody>

<tr>
  <td>FA-0001</td>
  <td>Office Laptop</td>
  <td>AP-INVOICE</td>
  <td class="text-end">25.000.000</td>
  <td class="text-end">8.000.000</td>
  <td class="text-end">17.000.000</td>
  <td><span class="badge bg-success">Active</span></td>
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
<!-- MODAL ADD DOCUMENT -->
<div class="modal fade" id="modalAddDocument">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Add Fixed Asset Document</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <label>Document Type</label>
        <select class="form-select" id="faDocType" onchange="changeFAModal()">
          <option value="">-- Select --</option>
          <option value="acq">Acquisition (PO / Invoice / GRN)</option>
          <option value="capex">CapEx Approval</option>
          <option value="dep">Depreciation Run</option>
          <option value="trf">Asset Transfer</option>
          <option value="disp">Disposal</option>
        </select>

        <hr>

        <div id="faFormArea">
          <p class="text-muted">Select document type to continue</p>
        </div>

      </div>

    </div>
  </div>
</div>

<!-- ========================================================= -->
<!-- MODALS -->
<!-- ========================================================= -->

<!-- ACQUISITION -->
<div class="modal fade" id="modalAcquisition">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Asset Acquisition</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <p><b>Dokumen sumber:</b> Vendor Invoice / CapEx Approval / GRN</p>

        <div class="row">

          <div class="col-md-6 mb-2">
            <label>Asset Name</label>
            <input class="form-control">
          </div>

          <div class="col-md-6 mb-2">
            <label>Category</label>
            <select class="form-select">
              <option>IT Equipment</option>
              <option>Vehicle</option>
              <option>Furniture</option>
              <option>Building</option>
            </select>
          </div>

          <div class="col-md-6 mb-2">
            <label>Acquisition Cost</label>
            <input type="number" class="form-control">
          </div>

          <div class="col-md-6 mb-2">
            <label>Source Document</label>
            <input class="form-control" placeholder="AP-INV / CAPEX / PO">
          </div>

        </div>

        <div class="alert alert-warning mt-3">
          Jurnal: Dr Fixed Asset / Cr AP or Cash
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-primary">Create Asset</button>
      </div>

    </div>
  </div>
</div>

<!-- DEPRECIATION -->
<div class="modal fade" id="modalDepreciation">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-warning">
        <h5 class="modal-title">Run Depreciation</h5>
      </div>

      <div class="modal-body">

        <label>Period</label>
        <input type="month" class="form-control">

        <div class="alert alert-info mt-3">
          Jurnal: Dr Depreciation Expense / Cr Accumulated Depreciation
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary">Cancel</button>
        <button class="btn btn-warning">Run</button>
      </div>

    </div>
  </div>
</div>

<!-- DISPOSAL -->
<div class="modal fade" id="modalDisposal">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Asset Disposal</h5>
      </div>

      <div class="modal-body">

        <label>Asset Code</label>
        <input class="form-control">

        <label class="mt-2">Disposal Value</label>
        <input type="number" class="form-control">

        <div class="alert alert-warning mt-3">
          Jurnal: Dr Accum Dep / Cr Asset / Gain-Loss Disposal
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary">Cancel</button>
        <button class="btn btn-danger">Dispose</button>
      </div>

    </div>
  </div>
</div>

<!-- VIEW -->
<div class="modal fade" id="modalView">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Asset Detail</h5>
      </div>

      <div class="modal-body">
        <p>Detail lifecycle asset: acquisition → depreciation → disposal trail.</p>
      </div>

    </div>
  </div>
</div>

<!-- BANTUAN -->
<div class="modal fade" id="modalBantuan">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title">Fixed Asset Lifecycle Guide</h5>
      </div>

      <div class="modal-body">
<h5>Lifecycle Asset</h5>
        <ul>
          <li>Acquisition → masuk ke Fixed Asset Register</li>
          <li>Depreciation → akumulasi penyusutan</li>
          <li>Disposal → penghapusan atau penjualan aset</li>
        </ul>
        <h5>1. Acquisition Documents</h5>
        <ul>
          <li>CapEx Approval → persetujuan investasi aset</li>
          <li>Purchase Order (PO) → komitmen pembelian</li>
          <li>Vendor Invoice → dasar hutang (AP)</li>
          <li>Goods Receipt (GRN) → barang diterima</li>
        </ul>

        <h5>2. Capitalization</h5>
        <ul>
          <li>Mengubah asset dari WIP menjadi Fixed Asset</li>
          <li>Jurnal: Dr Fixed Asset / Cr AP or Clearing</li>
        </ul>

        <h5>3. Depreciation</h5>
        <ul>
          <li>Monthly depreciation run</li>
          <li>Jurnal: Dr Depreciation Expense / Cr Accum Depreciation</li>
        </ul>

        <h5>4. Transfer</h5>
        <ul>
          <li>Pindah lokasi / cost center</li>
          <li>Tidak mengubah nilai aset</li>
        </ul>

        <h5>5. Disposal</h5>
        <ul>
          <li>Penjualan / penghapusan aset</li>
          <li>Jurnal: Dr Accum Dep / Cr Asset / Gain-Loss</li>
        </ul>

        <hr>

        <p>
          Semua dokumen di atas membentuk Fixed Asset Subledger yang menjadi dasar laporan keuangan dan audit aset perusahaan.
        </p>

      </div>

    </div>
  </div>
</div>
<?php include('5script.php'); ?>
<script>
function changeFAModal() {
  let t = document.getElementById('faDocType').value;
  let el = document.getElementById('faFormArea');

  if (t === 'acq') {
    el.innerHTML = `
      <div class="mb-2">
        <label>Asset Name</label>
        <input class="form-control">
      </div>
      <div class="mb-2">
        <label>Vendor Invoice</label>
        <input class="form-control">
      </div>
      <div class="mb-2">
        <label>Cost</label>
        <input type="number" class="form-control">
      </div>
    `;
  }

  if (t === 'dep') {
    el.innerHTML = `
      <label>Period</label>
      <input type="month" class="form-control">
    `;
  }

  if (t === 'disp') {
    el.innerHTML = `
      <label>Asset Code</label>
      <input class="form-control">
      <label class="mt-2">Disposal Value</label>
      <input type="number" class="form-control">
    `;
  }

  if (t === 'trf') {
    el.innerHTML = `
      <label>Asset Code</label>
      <input class="form-control">
      <label class="mt-2">From Location</label>
      <input class="form-control">
      <label class="mt-2">To Location</label>
      <input class="form-control">
    `;
  }

  if (t === 'capex') {
    el.innerHTML = `
      <label>CapEx Approval No</label>
      <input class="form-control">
      <label class="mt-2">Budget Amount</label>
      <input type="number" class="form-control">
    `;
  }
}
</script>
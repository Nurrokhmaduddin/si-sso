<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Unified ERP Transaction Form</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body { background:#f5f6f8; }

.step { display:none; }
.step.active { display:block; }

.step-header {
  display:flex;
  gap:8px;
  margin-bottom:15px;
}

.step-dot {
  flex:1;
  height:6px;
  background:#ddd;
  border-radius:10px;
}
.step-dot.active { background:#0d6efd; }

.help-btn{
  border:0;
  background:#e9ecef;
  border-radius:50%;
  width:26px;
  height:26px;
  font-size:12px;
  margin-left:6px;
  cursor:pointer;
}
.help-btn:hover { background:#ced4da; }

.input-group-text {
  background:#f1f3f5;
}
</style>
</head>

<body>

<div class="container py-4">

<div class="card shadow">

  <div class="card-header bg-dark text-white">
    <h5 class="mb-0">Unified ERP Transaction Wizard (AR / AP / Inventory / Asset Ready)</h5>
    <small>Single subledger entry model — journal generated automatically</small>
  </div>

  <div class="card-body">

    <!-- STEP INDICATOR -->
    <div class="step-header">
      <div class="step-dot active" id="dot1"></div>
      <div class="step-dot" id="dot2"></div>
      <div class="step-dot" id="dot3"></div>
    </div>

    <form id="erpForm">

      <!-- ================= STEP 1 ================= -->
      <div class="step active" id="step1">

        <h5>Step 1 - Document Header (Subledger Entry Root)</h5>

        <div class="row g-3">

          <div class="col-md-4">
            <label class="form-label">
              Transaction Date
              <button type="button" class="help-btn" onclick="openHelp('trx_date')">?</button>
            </label>
            <input type="date" class="form-control">
          </div>

          <div class="col-md-4">
            <label class="form-label">
              Document Type
              <button type="button" class="help-btn" onclick="openHelp('doc_type')">?</button>
            </label>
            <select class="form-select">
              <option>SALES_INVOICE</option>
              <option>PURCHASE_INVOICE</option>
              <option>AR_ADJUSTMENT</option>
              <option>AP_ADJUSTMENT</option>
              <option>INVENTORY_MOVEMENT</option>
              <option>ASSET_ACQUISITION</option>
              <option>PREPAID_ALLOCATION</option>
            </select>
          </div>

          <div class="col-md-4">
            <label class="form-label">
              Counterparty
              <button type="button" class="help-btn" onclick="openHelp('counterparty')">?</button>
            </label>
            <select class="form-select">
              <option>Customer A</option>
              <option>Vendor B</option>
            </select>
          </div>

          <div class="col-md-6">
            <label class="form-label">
              External Reference
              <button type="button" class="help-btn" onclick="openHelp('ref')">?</button>
            </label>
            <input type="text" class="form-control">
          </div>

          <div class="col-md-6">
            <label class="form-label">
              Posting Mode
              <button type="button" class="help-btn" onclick="openHelp('posting')">?</button>
            </label>
            <select class="form-select">
              <option>DRAFT</option>
              <option>POSTED</option>
            </select>
          </div>

        </div>
      </div>

      <!-- ================= STEP 2 ================= -->
      <div class="step" id="step2">

        <h5>Step 2 - Subledger Lines (Universal Line Engine)</h5>

        <table class="table table-bordered">
          <thead class="table-light text-center">
            <tr>
              <th>Line Type</th>
              <th>Account / Item</th>
              <th>Qty</th>
              <th>Price</th>
              <th>Tax</th>
              <th>Warehouse</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>
                <select class="form-select">
                  <option>ITEM</option>
                  <option>SERVICE</option>
                  <option>ACCOUNT</option>
                  <option>PREPAID</option>
                  <option>ASSET</option>
                </select>
              </td>

              <td>
                <select class="form-select">
                  <option>Product A</option>
                  <option>Service B</option>
                </select>
              </td>

              <td><input type="number" class="form-control" value="1"></td>
              <td><input type="number" class="form-control" value="0"></td>
              <td><input type="number" class="form-control" value="0"></td>

              <td>
                <select class="form-select">
                  <option>Main Warehouse</option>
                  <option>Branch</option>
                </select>
              </td>
            </tr>
          </tbody>
        </table>

        <button class="btn btn-success btn-sm" type="button">
          + Add Line
        </button>

      </div>

      <!-- ================= STEP 3 ================= -->
      <div class="step" id="step3">

        <h5>Step 3 - Settlement & Posting Layer</h5>

        <div class="row g-3">

          <div class="col-md-4">
            <label class="form-label">
              Paid Amount
              <button type="button" class="help-btn" onclick="openHelp('paid')">?</button>
            </label>
            <input type="number" class="form-control">
          </div>

          <div class="col-md-4">
            <label class="form-label">
              Settlement Account
              <button type="button" class="help-btn" onclick="openHelp('account')">?</button>
            </label>
            <select class="form-select">
              <option>Cash</option>
              <option>Bank BCA</option>
            </select>
          </div>

          <div class="col-md-4">
            <label class="form-label">
              Final Status
              <button type="button" class="help-btn" onclick="openHelp('status')">?</button>
            </label>
            <select class="form-select">
              <option>DRAFT</option>
              <option>POSTED</option>
            </select>
          </div>

        </div>

        <hr>

        <div class="alert alert-info">
          <b>Unified Subledger Output:</b><br>
          ✔ AR / AP Ledger Entry (single model)<br>
          ✔ Inventory Movement (if applicable)<br>
          ✔ Asset / Prepaid recognition (if applicable)<br>
          ✔ Auto Journal Posting (PSAK-ready)<br>
        </div>

      </div>

    </form>
  </div>

  <div class="card-footer d-flex justify-content-between">

    <button class="btn btn-secondary" onclick="prevStep()">Back</button>

    <div>
      <button class="btn btn-outline-primary">Save Draft</button>
      <button class="btn btn-primary">Submit</button>
    </div>

    <button class="btn btn-success" onclick="nextStep()">Next</button>

  </div>

</div>
</div>

<!-- ================= HELP MODAL ================= -->
<div class="modal fade" id="helpModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Field Help</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body" id="helpContent">
        ...
      </div>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>

let step = 1;

function showStep(s){
  document.querySelectorAll('.step').forEach(e=>e.classList.remove('active'));
  document.getElementById('step'+s).classList.add('active');

  document.querySelectorAll('.step-dot').forEach(e=>e.classList.remove('active'));
  document.getElementById('dot'+s).classList.add('active');
}

function nextStep(){
  if(step < 3){
    step++;
    showStep(step);
  }
}

function prevStep(){
  if(step > 1){
    step--;
    showStep(step);
  }
}

/* ================= HELP CONTENT MAP ================= */
const helpMap = {
  trx_date: "Tanggal transaksi untuk menentukan periode posting subledger (AR/AP/Inventory/Asset).",
  doc_type: "Menentukan engine posting: apakah AR, AP, Inventory, Asset, atau kombinasi otomatis.",
  counterparty: "Entitas lawan transaksi (Customer / Vendor / Internal entity).",
  ref: "Nomor referensi eksternal seperti invoice vendor, PO, atau nomor dokumen legacy.",
  posting: "DRAFT = tidak masuk ledger, POSTED = langsung generate journal & subledger.",
  paid: "Jumlah pembayaran aktual yang akan mengurangi AR/AP balance.",
  account: "Akun kas/bank yang digunakan untuk settlement (cash clearing layer).",
  status: "Status final untuk locking transaksi dan trigger accounting engine."
};

function openHelp(key){
  document.getElementById('helpContent').innerText =
    helpMap[key] || "No help available";

  new bootstrap.Modal(document.getElementById('helpModal')).show();
}

</script>

</body>
</html>
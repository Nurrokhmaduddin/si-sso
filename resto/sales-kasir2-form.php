<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ERP Transaction Wizard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.step { display:none; }
.step.active { display:block; }
.step-header {
  display:flex;
  gap:10px;
  margin-bottom:15px;
}
.step-dot {
  flex:1;
  height:6px;
  background:#ddd;
  border-radius:10px;
}
.step-dot.active { background:#0d6efd; }
</style>
</head>

<body class="bg-light">

<div class="container py-4">

  <div class="card shadow">

    <!-- HEADER -->
    <div class="card-header bg-primary text-white">
      <h5 class="mb-0">ERP Transaction Entry (Sales / Purchase / Cash / Inventory)</h5>
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

          <h5>Step 1 - Document Header</h5>

          <div class="row g-3">

            <div class="col-md-4">
              <label class="form-label">Transaction Date *</label>
              <input type="date" class="form-control" name="trx_date" required>
            </div>

            <div class="col-md-4">
              <label class="form-label">Document Type *</label>
              <select class="form-select" name="doc_type">
                <option>SALES_INVOICE</option>
                <option>PURCHASE_INVOICE</option>
                <option>CASH_RECEIPT</option>
                <option>CASH_PAYMENT</option>
                <option>ADJUSTMENT</option>
                <option>INVENTORY_TRANSFER</option>
              </select>
            </div>

            <div class="col-md-4">
              <label class="form-label">Counterparty *</label>
              <select class="form-select" name="entity_id">
                <option>Customer A</option>
                <option>Vendor B</option>
              </select>
            </div>

            <div class="col-md-6">
              <label class="form-label">Reference No</label>
              <input type="text" class="form-control" name="ref_no">
            </div>

            <div class="col-md-6">
              <label class="form-label">Payment Type</label>
              <select class="form-select" name="payment_type">
                <option>CASH</option>
                <option>BANK</option>
                <option>CREDIT</option>
              </select>
            </div>

            <div class="col-md-12">
              <label class="form-label">Description</label>
              <textarea class="form-control" name="description"></textarea>
            </div>

          </div>

        </div>

        <!-- ================= STEP 2 ================= -->
        <div class="step" id="step2">

          <h5>Step 2 - Transaction Lines (Items / Services)</h5>

          <table class="table table-bordered mt-3">
            <thead class="table-light text-center">
              <tr>
                <th>Type</th>
                <th>Item/Account</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Subtotal</th>
                <th>Warehouse</th>
              </tr>
            </thead>

            <tbody id="lineBody">

              <tr>
                <td>
                  <select class="form-select">
                    <option>ITEM</option>
                    <option>SERVICE</option>
                    <option>ACCOUNT</option>
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
                <td><input type="number" class="form-control" readonly></td>

                <td>
                  <select class="form-select">
                    <option>Main Warehouse</option>
                    <option>Branch</option>
                  </select>
                </td>
              </tr>

            </tbody>
          </table>

          <button type="button" class="btn btn-success btn-sm">
            + Add Line
          </button>

        </div>

        <!-- ================= STEP 3 ================= -->
        <div class="step" id="step3">

          <h5>Step 3 - Payment & Summary</h5>

          <div class="row g-3">

            <div class="col-md-4">
              <label class="form-label">Paid Amount</label>
              <input type="number" class="form-control" name="paid_amount">
            </div>

            <div class="col-md-4">
              <label class="form-label">Cash/Bank Account</label>
              <select class="form-select" name="cash_account">
                <option>Cash</option>
                <option>Bank BCA</option>
              </select>
            </div>

            <div class="col-md-4">
              <label class="form-label">Status</label>
              <select class="form-select">
                <option>DRAFT</option>
                <option>POSTED</option>
              </select>
            </div>

          </div>

          <hr>

          <div class="alert alert-info">
            <b>System Output After Submit:</b><br>
            ✔ Journal Entry (auto)<br>
            ✔ Sales/Purchase Document<br>
            ✔ Accounts Receivable / Payable<br>
            ✔ Cash Movement<br>
            ✔ Inventory Stock Movement
          </div>

        </div>

      </form>

    </div>

    <!-- FOOTER -->
    <div class="card-footer d-flex justify-content-between">

      <button class="btn btn-secondary" type="button" onclick="prevStep()">
        Back
      </button>

      <div>
        <button class="btn btn-outline-primary" type="button">
          Save Draft
        </button>

        <button class="btn btn-primary" type="button">
          Submit Transaction
        </button>
      </div>

      <button class="btn btn-success" type="button" onclick="nextStep()">
        Next
      </button>

    </div>

  </div>

</div>

<script>
let step = 1;

function showStep(s){
  document.querySelectorAll('.step').forEach(e => e.classList.remove('active'));
  document.getElementById('step'+s).classList.add('active');

  document.querySelectorAll('.step-dot').forEach(e => e.classList.remove('active'));
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
</script>

</body>
</html>
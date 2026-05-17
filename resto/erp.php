<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>ERP Finance & Accounting</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    margin:0;
    background:#f4f6f9;
    font-family:Arial, sans-serif;
}

.sidebar{
    width:260px;
    height:100vh;
    position:fixed;
    overflow-y:auto;
    background:#1f2937;
    color:white;
    padding:20px;
}

.sidebar h5{
    margin-top:25px;
    font-size:14px;
    color:#9ca3af;
    text-transform:uppercase;
}

.sidebar a{
    display:block;
    color:white;
    text-decoration:none;
    padding:8px 10px;
    border-radius:6px;
    margin-bottom:4px;
}

.sidebar a:hover{
    background:#374151;
}

.content{
    margin-left:280px;
    padding:25px;
}

.card{
    margin-bottom:25px;
    border:none;
    border-radius:12px;
    box-shadow:0 2px 10px rgba(0,0,0,0.08);
}

.table th{
    background:#111827;
    color:white;
    font-size:13px;
}

.table td{
    font-size:13px;
}

.badge-module{
    background:#2563eb;
}

.badge-journal{
    background:#059669;
}

.badge-source{
    background:#dc2626;
}
</style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">

<h3>ERP F&A</h3>

<h5>Core Accounting</h5>
<a href="#">Dashboard</a>
<a href="#">Chart Of Account</a>
<a href="#">Journal Entry</a>
<a href="#">General Ledger</a>
<a href="#">Trial Balance</a>
<a href="#">Balance Sheet</a>
<a href="#">Profit & Loss</a>

<h5>Account Receivable</h5>
<a href="#">Customer</a>
<a href="#">Sales Invoice</a>
<a href="#">Customer Payment</a>
<a href="#">AR Aging</a>
<a href="#">Customer Ledger</a>

<h5>Account Payable</h5>
<a href="#">Vendor</a>
<a href="#">Vendor Bill</a>
<a href="#">Vendor Payment</a>
<a href="#">AP Aging</a>
<a href="#">Vendor Ledger</a>

<h5>Inventory</h5>
<a href="#">Item Master</a>
<a href="#">Warehouse</a>
<a href="#">Stock Movement</a>
<a href="#">Stock Card</a>
<a href="#">Inventory Valuation</a>
<a href="#">Stock Opname</a>

<h5>Fixed Asset</h5>
<a href="#">Asset Register</a>
<a href="#">Depreciation</a>
<a href="#">Asset Disposal</a>

<h5>Cash & Bank</h5>
<a href="#">Cash In</a>
<a href="#">Cash Out</a>
<a href="#">Bank Transfer</a>
<a href="#">Bank Reconciliation</a>

</div>

<!-- CONTENT -->
<div class="content">

<div class="container-fluid">

<h2 class="mb-4">ERP Finance & Accounting Demo</h2>

<!-- MODULE MATRIX -->
<div class="card">
<div class="card-header bg-primary text-white">
<h5>ERP Module Matrix</h5>
</div>

<div class="card-body">

<table class="table table-bordered table-striped">

<thead>
<tr>
<th>Module</th>
<th>Function</th>
<th>Status</th>
<th>Subledger</th>
</tr>
</thead>

<tbody>

<tr>
<td>Sales Invoice</td>
<td>Penjualan Kredit</td>
<td><span class="badge badge-module">Revenue</span></td>
<td>Customer Ledger</td>
</tr>

<tr>
<td>Vendor Bill</td>
<td>Pembelian Kredit</td>
<td><span class="badge badge-module">Payable</span></td>
<td>Vendor Ledger</td>
</tr>

<tr>
<td>Inventory</td>
<td>Stock Valuation</td>
<td><span class="badge badge-module">Inventory</span></td>
<td>Inventory Ledger</td>
</tr>

<tr>
<td>Fixed Asset</td>
<td>Asset Management</td>
<td><span class="badge badge-module">Asset</span></td>
<td>Asset Ledger</td>
</tr>

<tr>
<td>Prepaid Expense</td>
<td>Beban Dibayar Dimuka</td>
<td><span class="badge badge-module">Prepaid</span></td>
<td>Vendor Advance</td>
</tr>

</tbody>

</table>

</div>
</div>

<!-- JOURNAL TYPE -->
<div class="card">

<div class="card-header bg-success text-white">
<h5>PSAK Journal Types</h5>
</div>

<div class="card-body">

<table class="table table-bordered table-striped">

<thead>
<tr>
<th>Journal Type</th>
<th>Description</th>
<th>Accounting Impact</th>
</tr>
</thead>

<tbody>

<tr>
<td>sales_journal</td>
<td>Penjualan Kredit</td>
<td>AR & Revenue</td>
</tr>

<tr>
<td>purchase_journal</td>
<td>Pembelian Kredit</td>
<td>AP & Inventory</td>
</tr>

<tr>
<td>cash_receipt</td>
<td>Penerimaan Kas</td>
<td>Cash In</td>
</tr>

<tr>
<td>cash_disbursement</td>
<td>Pengeluaran Kas</td>
<td>Cash Out</td>
</tr>

<tr>
<td>adjustment_journal</td>
<td>Jurnal Penyesuaian</td>
<td>Adjustment</td>
</tr>

</tbody>

</table>

</div>
</div>

<!-- SOURCE DOCUMENT -->
<div class="card">

<div class="card-header bg-danger text-white">
<h5>Source Documents</h5>
</div>

<div class="card-body">

<table class="table table-bordered table-striped">

<thead>
<tr>
<th>Source Type</th>
<th>Document</th>
<th>Reference</th>
<th>Journal Generated</th>
</tr>
</thead>

<tbody>

<tr>
<td>sales_invoice</td>
<td>Invoice Penjualan</td>
<td>INV-001</td>
<td>sales_journal</td>
</tr>

<tr>
<td>purchase_invoice</td>
<td>Invoice Pembelian</td>
<td>BILL-001</td>
<td>purchase_journal</td>
</tr>

<tr>
<td>customer_payment</td>
<td>Pembayaran Customer</td>
<td>PAY-001</td>
<td>cash_receipt</td>
</tr>

<tr>
<td>vendor_payment</td>
<td>Pembayaran Vendor</td>
<td>VPAY-001</td>
<td>cash_disbursement</td>
</tr>

<tr>
<td>stock_adjustment</td>
<td>Adjustment Stok</td>
<td>ADJ-001</td>
<td>inventory_adjustment</td>
</tr>

</tbody>

</table>

</div>
</div>

<!-- CUSTOMER LEDGER -->
<div class="card">

<div class="card-header bg-dark text-white">
<h5>Customer Ledger</h5>
</div>

<div class="card-body">

<table class="table table-bordered table-striped">

<thead>
<tr>
<th>Date</th>
<th>Document</th>
<th>Description</th>
<th>Debit</th>
<th>Credit</th>
<th>Balance</th>
</tr>
</thead>

<tbody>

<tr>
<td>2025-01-01</td>
<td>INV-001</td>
<td>Sales Invoice</td>
<td>5,000,000</td>
<td>0</td>
<td>5,000,000</td>
</tr>

<tr>
<td>2025-01-05</td>
<td>PAY-001</td>
<td>Customer Payment</td>
<td>0</td>
<td>2,000,000</td>
<td>3,000,000</td>
</tr>

<tr>
<td>2025-01-08</td>
<td>INV-002</td>
<td>Sales Invoice</td>
<td>4,000,000</td>
<td>0</td>
<td>7,000,000</td>
</tr>

<tr>
<td>2025-01-10</td>
<td>PAY-002</td>
<td>Customer Payment</td>
<td>0</td>
<td>1,000,000</td>
<td>6,000,000</td>
</tr>

<tr>
<td>2025-01-15</td>
<td>CN-001</td>
<td>Credit Note</td>
<td>0</td>
<td>500,000</td>
<td>5,500,000</td>
</tr>

</tbody>

</table>

</div>
</div>

<!-- VENDOR LEDGER -->
<div class="card">

<div class="card-header bg-secondary text-white">
<h5>Vendor Ledger</h5>
</div>

<div class="card-body">

<table class="table table-bordered table-striped">

<thead>
<tr>
<th>Date</th>
<th>Document</th>
<th>Description</th>
<th>Debit</th>
<th>Credit</th>
<th>Balance</th>
</tr>
</thead>

<tbody>

<tr>
<td>2025-01-01</td>
<td>BILL-001</td>
<td>Purchase Invoice</td>
<td>0</td>
<td>7,000,000</td>
<td>7,000,000</td>
</tr>

<tr>
<td>2025-01-04</td>
<td>VPAY-001</td>
<td>Vendor Payment</td>
<td>2,000,000</td>
<td>0</td>
<td>5,000,000</td>
</tr>

<tr>
<td>2025-01-07</td>
<td>BILL-002</td>
<td>Purchase Invoice</td>
<td>0</td>
<td>3,000,000</td>
<td>8,000,000</td>
</tr>

<tr>
<td>2025-01-11</td>
<td>VPAY-002</td>
<td>Vendor Payment</td>
<td>1,000,000</td>
<td>0</td>
<td>7,000,000</td>
</tr>

<tr>
<td>2025-01-18</td>
<td>DN-001</td>
<td>Debit Note</td>
<td>500,000</td>
<td>0</td>
<td>6,500,000</td>
</tr>

</tbody>

</table>

</div>
</div>

<!-- INVENTORY LEDGER -->
<div class="card">

<div class="card-header bg-warning">
<h5>Inventory Ledger</h5>
</div>

<div class="card-body">

<table class="table table-bordered table-striped">

<thead>
<tr>
<th>Date</th>
<th>Item</th>
<th>Qty In</th>
<th>Qty Out</th>
<th>Balance</th>
<th>Value</th>
</tr>
</thead>

<tbody>

<tr>
<td>2025-01-01</td>
<td>Kopi Arabica</td>
<td>100</td>
<td>0</td>
<td>100</td>
<td>5,000,000</td>
</tr>

<tr>
<td>2025-01-03</td>
<td>Kopi Arabica</td>
<td>0</td>
<td>20</td>
<td>80</td>
<td>4,000,000</td>
</tr>

<tr>
<td>2025-01-05</td>
<td>Susu Fresh</td>
<td>50</td>
<td>0</td>
<td>50</td>
<td>2,500,000</td>
</tr>

<tr>
<td>2025-01-06</td>
<td>Susu Fresh</td>
<td>0</td>
<td>10</td>
<td>40</td>
<td>2,000,000</td>
</tr>

<tr>
<td>2025-01-09</td>
<td>Kopi Arabica</td>
<td>30</td>
<td>0</td>
<td>110</td>
<td>5,500,000</td>
</tr>

</tbody>

</table>

</div>
</div>

<!-- FIXED ASSET -->
<div class="card">

<div class="card-header bg-info text-white">
<h5>Fixed Asset Register</h5>
</div>

<div class="card-body">

<table class="table table-bordered table-striped">

<thead>
<tr>
<th>Asset Code</th>
<th>Asset Name</th>
<th>Acquisition Cost</th>
<th>Useful Life</th>
<th>Monthly Depreciation</th>
</tr>
</thead>

<tbody>

<tr>
<td>FA-001</td>
<td>Laptop Accounting</td>
<td>12,000,000</td>
<td>36 Month</td>
<td>333,333</td>
</tr>

<tr>
<td>FA-002</td>
<td>Server ERP</td>
<td>25,000,000</td>
<td>60 Month</td>
<td>416,667</td>
</tr>

<tr>
<td>FA-003</td>
<td>Mobil Operasional</td>
<td>180,000,000</td>
<td>96 Month</td>
<td>1,875,000</td>
</tr>

<tr>
<td>FA-004</td>
<td>Printer</td>
<td>5,000,000</td>
<td>24 Month</td>
<td>208,333</td>
</tr>

<tr>
<td>FA-005</td>
<td>AC Kantor</td>
<td>8,000,000</td>
<td>48 Month</td>
<td>166,667</td>
</tr>

</tbody>

</table>

</div>
</div>

<!-- JOURNAL HEADER -->
<div class="card">

<div class="card-header bg-primary text-white">
<h5>Journal Header</h5>
</div>

<div class="card-body">

<table class="table table-bordered table-striped">

<thead>
<tr>
<th>Journal No</th>
<th>Journal Type</th>
<th>Date</th>
<th>Reference Type</th>
<th>Reference No</th>
<th>Description</th>
</tr>
</thead>

<tbody>

<tr>
<td>JR-001</td>
<td>sales_journal</td>
<td>2025-01-01</td>
<td>sales_invoice</td>
<td>INV-001</td>
<td>Penjualan Kredit</td>
</tr>

<tr>
<td>JR-002</td>
<td>purchase_journal</td>
<td>2025-01-02</td>
<td>purchase_invoice</td>
<td>BILL-001</td>
<td>Pembelian Barang</td>
</tr>

<tr>
<td>JR-003</td>
<td>cash_receipt</td>
<td>2025-01-03</td>
<td>customer_payment</td>
<td>PAY-001</td>
<td>Pembayaran Customer</td>
</tr>

<tr>
<td>JR-004</td>
<td>cash_disbursement</td>
<td>2025-01-04</td>
<td>vendor_payment</td>
<td>VPAY-001</td>
<td>Pembayaran Vendor</td>
</tr>

<tr>
<td>JR-005</td>
<td>adjustment_journal</td>
<td>2025-01-05</td>
<td>stock_adjustment</td>
<td>ADJ-001</td>
<td>Adjustment Persediaan</td>
</tr>

</tbody>

</table>

</div>
</div>

<!-- JOURNAL DETAIL -->
<div class="card">

<div class="card-header bg-success text-white">
<h5>Journal Detail / General Ledger</h5>
</div>

<div class="card-body">

<table class="table table-bordered table-striped">

<thead>
<tr>
<th>COA</th>
<th>Debit</th>
<th>Credit</th>
<th>Subledger Type</th>
<th>Subledger ID</th>
<th>Description</th>
</tr>
</thead>

<tbody>

<tr>
<td>1101 - Accounts Receivable</td>
<td>5,000,000</td>
<td>0</td>
<td>customer</td>
<td>1</td>
<td>Invoice Customer</td>
</tr>

<tr>
<td>4101 - Sales Revenue</td>
<td>0</td>
<td>5,000,000</td>
<td>-</td>
<td>-</td>
<td>Sales Revenue</td>
</tr>

<tr>
<td>1201 - Inventory</td>
<td>7,000,000</td>
<td>0</td>
<td>item</td>
<td>15</td>
<td>Purchase Inventory</td>
</tr>

<tr>
<td>2101 - Account Payable</td>
<td>0</td>
<td>7,000,000</td>
<td>vendor</td>
<td>5</td>
<td>Vendor Liability</td>
</tr>

<tr>
<td>5101 - Depreciation Expense</td>
<td>333,333</td>
<td>0</td>
<td>fixed_asset</td>
<td>2</td>
<td>Monthly Depreciation</td>
</tr>

</tbody>

</table>

</div>
</div>

</div>
</div>

</body>
</html>
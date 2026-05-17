<?php $page = 'inventory-subledger'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height: 626.4px;">

  <!-- HEADER -->
  <section class="content-header">
    <div class="container-fluid">

      <div class="d-flex justify-content-between align-items-start flex-wrap">
        <div>
          <h3 class="mb-1">
            Inventory Subledger (Stock Movement Register)
            <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
              <i class="fas fa-question-circle"></i>
            </button>
          </h3>

          <p class="text-muted mb-0">
            Menampilkan seluruh pergerakan inventory berbasis dokumen bisnis seperti GRN, Issue, Transfer, Adjustment,
            dan Sales Delivery yang membentuk subledger persediaan.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- CONTENT -->
  <section class="content">
    <div class="container-fluid">

      <!-- FILTER -->
      <div class="card">
        <div class="card-body">
          <div class="row">

            <div class="col-md-3 mb-2"><b>Periode:</b> Jan 2026</div>
            <div class="col-md-3 mb-2"><b>Warehouse:</b> All</div>
            <div class="col-md-3 mb-2"><b>Item Group:</b> All</div>
            <div class="col-md-3 mb-2"><b>Stock Type:</b> All</div>

          </div>
        </div>

        <div class="card-footer">
          <div class="d-flex flex-wrap gap-2">

            <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalFilter">
              <i class="fas fa-filter me-1"></i> Filter
            </button>

            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambahData">
              <i class="fas fa-plus me-1"></i> Add Inventory Transaction
            </button>
<button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalInventoryDocument">
  <i class="fas fa-file-alt me-1"></i> Add Inventory Document
</button>

<button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalStockAdjustment">
  <i class="fas fa-balance-scale me-1"></i> Stock Adjustment
</button>
            <button class="btn btn-outline-success btn-sm">
              <i class="fas fa-file-download me-1"></i> Export
            </button>

          </div>
        </div>
      </div>


            <!-- TABLE -->
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Inventory Movement Register</h3>
        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-striped table-sm datatables1 align-middle">
<thead class="table-dark text-center">
  <tr>
    <th>Date</th>
    <th>Doc No</th>
    <th>Document Type</th>

    <!-- NEW CORE FIELDS -->
    <th>Movement Type</th>
    <th>Source Document</th>
    <th>Value Impact</th>

    <th>Item</th>
    <th>Warehouse</th>

    <th>In</th>
    <th>Out</th>
    <th>Balance</th>

    <th>Cost</th>
    <th>Running Cost</th>

    <th>Aksi</th>
  </tr>
</thead>
<tbody>

<tr>
  <td>2026-01-01</td>
  <td>GRN-001</td>
  <td>Goods Receipt</td>

  <td><span class="badge bg-success">IN</span></td>
  <td>PO-001 / Vendor Invoice</td>
  <td>Inventory Asset</td>

  <td>Baut M10</td>
  <td>Gudang A</td>

  <td class="text-end">1,000</td>
  <td class="text-end">0</td>
  <td class="text-end">1,000</td>

  <td class="text-end">Rp 5.000.000</td>
  <td class="text-end">Rp 5.000.000</td>

  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>2026-01-02</td>
  <td>ISS-001</td>
  <td>Material Issue</td>

  <td><span class="badge bg-danger">OUT</span></td>
  <td>WO-001 / Production Order</td>
  <td>COGS</td>

  <td>Baut M10</td>
  <td>Gudang A</td>

  <td class="text-end">0</td>
  <td class="text-end">200</td>
  <td class="text-end">800</td>

  <td class="text-end">Rp 1.000.000</td>
  <td class="text-end">Rp 4.000.000</td>

  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>2026-01-03</td>
  <td>TRF-001</td>
  <td>Stock Transfer</td>

  <td><span class="badge bg-info">MOVE</span></td>
  <td>Transfer Order TO-001</td>
  <td>Inventory Movement</td>

  <td>Baut M10</td>
  <td>Gudang A → B</td>

  <td class="text-end">0</td>
  <td class="text-end">100</td>
  <td class="text-end">700</td>

  <td class="text-end">Rp 500.000</td>
  <td class="text-end">Rp 3.500.000</td>

  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>
<tr>
  <td>2026-01-04</td>
  <td>GRN-002</td>
  <td>Goods Receipt</td>

  <td><span class="badge bg-success">IN</span></td>
  <td>PO-002 / Vendor Invoice</td>
  <td>Inventory Asset</td>

  <td>Baut M10</td>
  <td>Gudang A</td>

  <td class="text-end">500</td>
  <td class="text-end">0</td>
  <td class="text-end">1,200</td>

  <td class="text-end">Rp 2.500.000</td>
  <td class="text-end">Rp 6.500.000</td>

  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>2026-01-05</td>
  <td>ISS-002</td>
  <td>Material Issue</td>

  <td><span class="badge bg-danger">OUT</span></td>
  <td>WO-002 / Production Order</td>
  <td>COGS</td>

  <td>Baut M10</td>
  <td>Gudang A</td>

  <td class="text-end">0</td>
  <td class="text-end">300</td>
  <td class="text-end">900</td>

  <td class="text-end">Rp 1.500.000</td>
  <td class="text-end">Rp 5.000.000</td>

  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>2026-01-06</td>
  <td>ADJ-002</td>
  <td>Stock Adjustment</td>

  <td><span class="badge bg-warning">ADJ</span></td>
  <td>Stock Opname SO-002</td>
  <td>Inventory Correction</td>

  <td>Baut M10</td>
  <td>Gudang A</td>

  <td class="text-end">20</td>
  <td class="text-end">0</td>
  <td class="text-end">920</td>

  <td class="text-end">Rp 100.000</td>
  <td class="text-end">Rp 5.100.000</td>

  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>2026-01-07</td>
  <td>TRF-002</td>
  <td>Stock Transfer</td>

  <td><span class="badge bg-info">MOVE</span></td>
  <td>Transfer Order TO-002</td>
  <td>Inventory Movement</td>

  <td>Baut M10</td>
  <td>Gudang A → B</td>

  <td class="text-end">0</td>
  <td class="text-end">150</td>
  <td class="text-end">770</td>

  <td class="text-end">Rp 750.000</td>
  <td class="text-end">Rp 4.350.000</td>

  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>2026-01-08</td>
  <td>SD-002</td>
  <td>Sales Delivery</td>

  <td><span class="badge bg-danger">OUT</span></td>
  <td>SO-001 / Customer Order</td>
  <td>COGS</td>

  <td>Baut M10</td>
  <td>Gudang A</td>

  <td class="text-end">0</td>
  <td class="text-end">250</td>
  <td class="text-end">520</td>

  <td class="text-end">Rp 1.250.000</td>
  <td class="text-end">Rp 3.100.000</td>

  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>2026-01-09</td>
  <td>GRN-003</td>
  <td>Goods Receipt</td>

  <td><span class="badge bg-success">IN</span></td>
  <td>PO-003 / Vendor Invoice</td>
  <td>Inventory Asset</td>

  <td>Baut M10</td>
  <td>Gudang B</td>

  <td class="text-end">800</td>
  <td class="text-end">0</td>
  <td class="text-end">800</td>

  <td class="text-end">Rp 4.000.000</td>
  <td class="text-end">Rp 4.000.000</td>

  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>2026-01-10</td>
  <td>ISS-003</td>
  <td>Material Issue</td>

  <td><span class="badge bg-danger">OUT</span></td>
  <td>WO-003 / Maintenance Request</td>
  <td>Expense</td>

  <td>Baut M10</td>
  <td>Gudang B</td>

  <td class="text-end">0</td>
  <td class="text-end">100</td>
  <td class="text-end">700</td>

  <td class="text-end">Rp 500.000</td>
  <td class="text-end">Rp 3.500.000</td>

  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>2026-01-11</td>
  <td>ADJ-003</td>
  <td>Stock Adjustment</td>

  <td><span class="badge bg-warning">ADJ</span></td>
  <td>Stock Opname SO-003</td>
  <td>Inventory Loss</td>

  <td>Baut M10</td>
  <td>Gudang B</td>

  <td class="text-end">0</td>
  <td class="text-end">40</td>
  <td class="text-end">660</td>

  <td class="text-end">Rp 200.000</td>
  <td class="text-end">Rp 3.300.000</td>

  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>2026-01-12</td>
  <td>TRF-003</td>
  <td>Stock Transfer</td>

  <td><span class="badge bg-info">MOVE</span></td>
  <td>Transfer Order TO-003</td>
  <td>Inventory Movement</td>

  <td>Baut M10</td>
  <td>Gudang B → C</td>

  <td class="text-end">0</td>
  <td class="text-end">120</td>
  <td class="text-end">540</td>

  <td class="text-end">Rp 600.000</td>
  <td class="text-end">Rp 2.700.000</td>

  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>2026-01-13</td>
  <td>SD-003</td>
  <td>Sales Delivery</td>

  <td><span class="badge bg-danger">OUT</span></td>
  <td>SO-002 / Customer Order</td>
  <td>COGS</td>

  <td>Baut M10</td>
  <td>Gudang B</td>

  <td class="text-end">0</td>
  <td class="text-end">200</td>
  <td class="text-end">340</td>

  <td class="text-end">Rp 1.000.000</td>
  <td class="text-end">Rp 1.700.000</td>

  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>

<tr>
  <td>2026-01-14</td>
  <td>ADJ-004</td>
  <td>Stock Adjustment</td>

  <td><span class="badge bg-warning">ADJ</span></td>
  <td>Stock Correction SC-001</td>
  <td>Inventory Correction</td>

  <td>Baut M10</td>
  <td>Gudang C</td>

  <td class="text-end">50</td>
  <td class="text-end">0</td>
  <td class="text-end">390</td>

  <td class="text-end">Rp 250.000</td>
  <td class="text-end">Rp 1.950.000</td>

  <td><button class="btn btn-sm btn-primary">View</button></td>
</tr>
</tbody>

</table>

        </div>
      </div>
      <!-- TABLE -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Inventory Movement Register</h3>
        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-striped table-sm datatables1 align-middle">

            <thead class="table-dark text-center">
              <tr>
                <th>Date</th>
                <th>Doc No</th>
                <th>Document Type</th>
                <th>Item</th>
                <th>Warehouse</th>
                <th>In</th>
                <th>Out</th>
                <th>Balance</th>
                <th>Cost</th>
                <th>Aksi</th>
              </tr>
            </thead>

            <tbody>

              <tr>
                <td>2026-01-01</td>
                <td>GRN-001</td>
                <td>Goods Receipt</td>
                <td>Baut M10</td>
                <td>Gudang A</td>
                <td class="text-end">1,000</td>
                <td class="text-end">0</td>
                <td class="text-end">1,000</td>
                <td class="text-end">Rp 5.000.000</td>
                <td><button class="btn btn-sm btn-primary">View</button></td>
              </tr>

              <tr>
                <td>2026-01-02</td>
                <td>ISS-001</td>
                <td>Material Issue</td>
                <td>Baut M10</td>
                <td>Gudang A</td>
                <td class="text-end">0</td>
                <td class="text-end">200</td>
                <td class="text-end">800</td>
                <td class="text-end">Rp 1.000.000</td>
                <td><button class="btn btn-sm btn-primary">View</button></td>
              </tr>

              <tr>
                <td>2026-01-03</td>
                <td>ADJ-001</td>
                <td>Stock Adjustment</td>
                <td>Baut M10</td>
                <td>Gudang A</td>
                <td class="text-end">50</td>
                <td class="text-end">0</td>
                <td class="text-end">850</td>
                <td class="text-end">Rp 250.000</td>
                <td><button class="btn btn-sm btn-primary">View</button></td>
              </tr>

              <tr>
                <td>2026-01-04</td>
                <td>TRF-001</td>
                <td>Stock Transfer</td>
                <td>Baut M10</td>
                <td>Gudang A → B</td>
                <td class="text-end">0</td>
                <td class="text-end">100</td>
                <td class="text-end">750</td>
                <td class="text-end">Rp 500.000</td>
                <td><button class="btn btn-sm btn-primary">View</button></td>
              </tr>

              <tr>
                <td>2026-01-05</td>
                <td>SO-001</td>
                <td>Stock Opname</td>
                <td>Baut M10</td>
                <td>Gudang A</td>
                <td class="text-end">0</td>
                <td class="text-end">30</td>
                <td class="text-end">720</td>
                <td class="text-end">Rp 150.000</td>
                <td><button class="btn btn-sm btn-primary">View</button></td>
              </tr>

              <tr>
                <td>2026-01-06</td>
                <td>SD-001</td>
                <td>Sales Delivery</td>
                <td>Baut M10</td>
                <td>Gudang A</td>
                <td class="text-end">0</td>
                <td class="text-end">120</td>
                <td class="text-end">600</td>
                <td class="text-end">Rp 600.000</td>
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

<!-- MODAL FILTER -->
<div class="modal fade" id="modalFilter" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Filter Inventory</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label class="form-label">Periode</label>
          <input type="month" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Document Type</label>
          <select class="form-select">
            <option>All</option>
            <option>Goods Receipt</option>
            <option>Material Issue</option>
            <option>Stock Transfer</option>
            <option>Stock Adjustment</option>
            <option>Sales Delivery</option>
          </select>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-info">Apply</button>
      </div>

    </div>
  </div>
</div>

<!-- MODAL TAMBAH -->
<div class="modal fade" id="modalTambahData" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Add Inventory Transaction</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="row">

          <div class="col-md-6 mb-3">
            <label class="form-label">Document Type</label>
            <select class="form-select">
              <option>Goods Receipt (GRN)</option>
              <option>Material Issue</option>
              <option>Stock Transfer</option>
              <option>Stock Adjustment</option>
              <option>Sales Delivery</option>
            </select>
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Document No</label>
            <input type="text" class="form-control">
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Item</label>
            <input type="text" class="form-control">
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Warehouse</label>
            <input type="text" class="form-control">
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Qty In</label>
            <input type="number" class="form-control">
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Qty Out</label>
            <input type="number" class="form-control">
          </div>

        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-primary">Save</button>
      </div>

    </div>
  </div>
</div>


<!-- MODAL BANTUAN -->
<div class="modal fade" id="modalBantuan" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Inventory Subledger Concept Guide</h5>
      </div>

      <div class="modal-body">

        <h5>📦 Konsep Inventory Subledger</h5>
        <p>
          Inventory tidak hanya mencatat stok, tetapi merupakan <b>dokumen-driven subledger</b>
          yang mencatat setiap pergerakan barang berdasarkan transaksi bisnis.
        </p>

        <hr>

        <h5>📑 Dokumen yang memicu pergerakan stok</h5>

        <ul>
          <li><b>Goods Receipt (GRN / Purchase Receipt)</b> → menambah stok (IN)</li>
          <li><b>Material Issue (Production / WO Consumption)</b> → mengurangi stok (OUT)</li>
          <li><b>Sales Delivery (DO)</b> → mengurangi stok + memicu COGS</li>
          <li><b>Stock Transfer</b> → perpindahan lokasi gudang (MOVE)</li>
          <li><b>Stock Adjustment (Stock Opname)</b> → koreksi selisih (+/-)</li>
          <li><b>Purchase Return</b> → pengurangan stok</li>
          <li><b>Sales Return</b> → penambahan stok kembali</li>
          <li><b>Production Output</b> → penambahan stok barang jadi</li>
          <li><b>Scrap / Waste</b> → pengurangan stok karena kerusakan</li>
        </ul>

        <hr>

        <h5>⚙️ Cara Sistem Bekerja</h5>

        <p><b>1. Document Layer</b> → semua transaksi wajib berasal dari dokumen sumber (PO, SO, WO)</p>
        <p><b>2. Movement Engine</b> → menentukan arah stok (IN / OUT / MOVE)</p>
        <p><b>3. Subledger Update</b> → update saldo per item & warehouse</p>
        <p><b>4. Valuation Engine</b> → menghitung nilai persediaan (FIFO / Average Cost)</p>

        <hr>

        <h5>💰 Dampak Akuntansi</h5>

        <ul>
          <li>Inventory bertambah → Dr Inventory / Cr AP atau GRNI</li>
          <li>Inventory berkurang → Dr COGS / Cr Inventory</li>
          <li>Adjustment → Dr/Cr Inventory + Gain/Loss</li>
        </ul>

        <hr>

        <h5>📊 Kesimpulan</h5>

        <p>
          Inventory Subledger adalah sistem yang menghubungkan:
          <b>dokumen bisnis → pergerakan stok → nilai akuntansi</b>
          secara real-time dan audit-ready.
        </p>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- INVENTORY DOCUMENT SOURCE -->
<div class="modal fade" id="modalInventoryDocument" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Inventory Source Document</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="alert alert-info">
          Setiap pergerakan stok wajib berasal dari dokumen sumber yang valid.
        </div>

        <div class="row">

          <div class="col-md-6 mb-3">
            <label>Document Type</label>
            <select class="form-select">
              <option>Goods Receipt (GRN) - +Stock</option>
              <option>Material Issue - -Stock</option>
              <option>Sales Delivery - -Stock +COGS</option>
              <option>Stock Transfer - Location Move</option>
              <option>Stock Adjustment (+/-)</option>
              <option>Purchase Return</option>
              <option>Sales Return</option>
              <option>Production Output</option>
              <option>Scrap / Waste</option>
            </select>
          </div>

          <div class="col-md-6 mb-3">
            <label>Document Number</label>
            <input type="text" class="form-control" placeholder="GRN-2026-001">
          </div>

          <div class="col-md-6 mb-3">
            <label>Source Reference</label>
            <input type="text" class="form-control" placeholder="PO / SO / WO / DO">
          </div>

          <div class="col-md-6 mb-3">
            <label>Warehouse</label>
            <input type="text" class="form-control">
          </div>

          <div class="col-md-6 mb-3">
            <label>Item</label>
            <input type="text" class="form-control">
          </div>

          <div class="col-md-6 mb-3">
            <label>Qty</label>
            <input type="number" class="form-control">
          </div>

        </div>

        <div class="alert alert-warning">
          📌 Impact:
          <br>• +Stock (GRN / Return / Production)
          <br>• -Stock (Issue / Delivery / Scrap)
          <br>• Location Move (Transfer)
          <br>• Value Impact (COGS / Adjustment)
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-primary">Post Movement</button>
      </div>

    </div>
  </div>
</div>
<!-- STOCK ADJUSTMENT ENGINE (OPNAME CONTROL) -->
<div class="modal fade" id="modalStockAdjustment" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-warning">
        <h5 class="modal-title">Stock Adjustment (Stock Opname)</h5>
      </div>

      <div class="modal-body">

        <div class="alert alert-info">
          Digunakan untuk koreksi selisih hasil stock opname.
        </div>

        <div class="mb-3">
          <label>Item</label>
          <input class="form-control">
        </div>

        <div class="mb-3">
          <label>System Qty</label>
          <input type="number" class="form-control">
        </div>

        <div class="mb-3">
          <label>Actual Qty</label>
          <input type="number" class="form-control">
        </div>

        <div class="mb-3">
          <label>Adjustment Reason</label>
          <textarea class="form-control"></textarea>
        </div>

        <div class="alert alert-warning">
          📌 Jurnal:
          <br>Dr / Cr Inventory
          <br>Dr / Cr Inventory Gain/Loss
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary">Cancel</button>
        <button class="btn btn-warning">Apply Adjustment</button>
      </div>

    </div>
  </div>
</div>
<?php include('5script.php'); ?>
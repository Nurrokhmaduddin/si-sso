<?php $page = 'finance-journal'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Jurnal Akuntansi
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
        </button>
      </h3>
        <p class="text-muted mb-0">Keterangan singkat cara baca informasi halaman ini</p>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Main row -->
      <div class="row">
        <div class="col-md-12">
          
          <!-- ========== CARD : Filter & Export ========== -->
          <div class="card">
            <!-- <div class="card-header bg-secondary">
              <h5 class="card-title mb-0">
                <i class="fas fa-database"></i> Data Produk/Barang        
              </h5>
              <div class="card-tools ms-auto">
                <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
                </button>                
              </div>
            </div> -->

            <div class="card-body ">
              <div class="row">
                <div class="col-md-6">
                  <b>Rentang Tanggal:</b> 2023 &nbsp;
                </div>       
                <div class="col-md-6">
                  <b>Sumber:</b> Semua
                </div>
              </div>
            </div>

            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button> -->
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <!-- <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>  -->   
              </div>
            </div>

          </div>


        <!-- ========== CARD : Tabel  ========== -->
          <div class="card">
           <!--  <div class="card-header d-flex align-items-center">
              <h5 class="card-title mb-0">Judul tabel ini</h5>    
              <div class="ms-auto">                
                <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="modal" data-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm ">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
              </div>
            </div> -->

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm datatables1">

                  <thead>
                    <tr class="text-uppercase text-center">
                      <th>ID</th>
                      <th>Journal Type</th>
                      <th>Journal No</th>
                      <th>Date</th>
                      <th>Description</th>
                      <th>Aksi</th>
                      <th>Reference Type</th>
                      <th>Reference No</th>
                    </tr>
                  </thead>

                  <tbody>

                    <tr>
  <td>1</td>
  <td>purchase_journal</td>
  <td>JV-2026-0001</td>
  <td>2026-01-02</td>
  <td>Pembelian tunai bahan baku kopi</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"110","nama":"Inventory - Bahan Baku","value":5000000}
      ]'
      data-kredit='[
        {"coa":"101","nama":"Kas","value":5000000}
      ]'
      onclick="showDetail(this)">
      <i class="fas fa-eye"></i>
    </button>

  </td>
  <td>purchase_invoice</td>
  <td>PI-0001</td>
</tr>

                   <tr>
  <td>2</td>
  <td>expense_journal</td>
  <td>JV-2026-0002</td>
  <td>2026-01-02</td>
  <td>Pembayaran listrik outlet pusat</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"610","nama":"Utilities Expense","value":1200000}
      ]'
      data-kredit='[
        {"coa":"101","nama":"Kas","value":1200000}
      ]'
      onclick="showDetail(this)">
      👁
    </button>

  </td>
  <td>cash_payment</td>
  <td>CP-0001</td>
</tr>

<tr>
  <td>3</td>
  <td>sales_journal</td>
  <td>JV-2026-0003</td>
  <td>2026-01-03</td>
  <td>Penjualan tunai coffee latte</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"101","nama":"Kas","value":750000}
      ]'
      data-kredit='[
        {"coa":"410","nama":"Sales Revenue","value":750000}
      ]'
      onclick="showDetail(this)">
      👁
    </button>

  </td>
  <td>sales_invoice</td>
  <td>SI-0001</td>
</tr>

<tr>
  <td>4</td>
  <td>service_revenue</td>
  <td>JV-2026-0004</td>
  <td>2026-01-03</td>
  <td>Pendapatan jasa konsultasi branding</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"102","nama":"Bank","value":3000000}
      ]'
      data-kredit='[
        {"coa":"420","nama":"Service Revenue","value":3000000}
      ]'
      onclick="showDetail(this)">
      👁
    </button>

  </td>
  <td>service_invoice</td>
  <td>SV-0001</td>
</tr>

<tr>
  <td>5</td>
  <td>purchase_journal</td>
  <td>JV-2026-0005</td>
  <td>2026-01-04</td>
  <td>Pembelian kredit persediaan susu</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"110","nama":"Inventory","value":8000000}
      ]'
      data-kredit='[
        {"coa":"201","nama":"Accounts Payable","value":8000000}
      ]'
      onclick="showDetail(this)">
      👁
    </button>

  </td>
  <td>purchase_invoice</td>
  <td>PI-0002</td>
</tr>

<tr>
  <td>6</td>
  <td>payable_payment</td>
  <td>JV-2026-0006</td>
  <td>2026-01-05</td>
  <td>Pembayaran hutang supplier PT Dairy</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"201","nama":"Accounts Payable","value":8000000}
      ]'
      data-kredit='[
        {"coa":"101","nama":"Kas","value":8000000}
      ]'
      onclick="showDetail(this)">
      👁
    </button>

  </td>
  <td>vendor_payment</td>
  <td>VP-0001</td>
</tr>
<tr>
  <td>7</td>
  <td>sales_journal</td>
  <td>JV-2026-0007</td>
  <td>2026-01-05</td>
  <td>Penjualan kredit ke customer corporate</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"103","nama":"Accounts Receivable","value":10000000}
      ]'
      data-kredit='[
        {"coa":"410","nama":"Sales Revenue","value":10000000}
      ]'
      onclick="showDetail(this)">👁</button>

  </td>
  <td>sales_invoice</td>
  <td>SI-0002</td>
</tr>

<tr>
  <td>8</td>
  <td>receivable_payment</td>
  <td>JV-2026-0008</td>
  <td>2026-01-06</td>
  <td>Pelunasan invoice customer PT ABC</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"101","nama":"Cash","value":10000000}
      ]'
      data-kredit='[
        {"coa":"103","nama":"Accounts Receivable","value":10000000}
      ]'
      onclick="showDetail(this)">👁</button>

  </td>
  <td>customer_payment</td>
  <td>CR-0001</td>
</tr>
<tr>
  <td>9</td>
  <td>prepaid_expense</td>
  <td>JV-2026-0009</td>
  <td>2026-01-06</td>
  <td>Sewa gedung 12 bulan dimuka</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"121","nama":"Prepaid Rent","value":12000000}
      ]'
      data-kredit='[
        {"coa":"101","nama":"Kas","value":12000000}
      ]'
      onclick="showDetail(this)">
      👁
    </button>

  </td>
  <td>prepaid_contract</td>
  <td>PRE-0001</td>
</tr>

<tr>
  <td>10</td>
  <td>deferred_revenue</td>
  <td>JV-2026-0010</td>
  <td>2026-01-07</td>
  <td>DP project interior cafe</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"101","nama":"Kas","value":5000000}
      ]'
      data-kredit='[
        {"coa":"211","nama":"Deferred Revenue","value":5000000}
      ]'
      onclick="showDetail(this)">
      👁
    </button>

  </td>
  <td>customer_down_payment</td>
  <td>DP-0001</td>
</tr>

<tr>
  <td>11</td>
  <td>purchase_return</td>
  <td>JV-2026-0011</td>
  <td>2026-01-08</td>
  <td>Retur pembelian biji kopi</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"201","nama":"Accounts Payable","value":2000000}
      ]'
      data-kredit='[
        {"coa":"110","nama":"Inventory","value":2000000}
      ]'
      onclick="showDetail(this)">
      👁
    </button>

  </td>
  <td>purchase_return</td>
  <td>PR-0001</td>
</tr>

<tr>
  <td>12</td>
  <td>sales_return</td>
  <td>JV-2026-0012</td>
  <td>2026-01-08</td>
  <td>Refund pembatalan pesanan</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"410","nama":"Sales Revenue","value":1000000}
      ]'
      data-kredit='[
        {"coa":"101","nama":"Kas","value":1000000}
      ]'
      onclick="showDetail(this)">
      👁
    </button>

  </td>
  <td>sales_return</td>
  <td>SR-0001</td>
</tr>

                    

                  <tr>
  <td>13</td>
  <td>inventory_transfer</td>
  <td>JV-2026-0013</td>
  <td>2026-01-09</td>
  <td>Mutasi stok antar gudang cabang Bandung</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"110","nama":"Inventory - Branch A","value":3000000}
      ]'
      data-kredit='[
        {"coa":"110","nama":"Inventory - Main Warehouse","value":3000000}
      ]'
      onclick="showDetail(this)">👁</button>

  </td>
  <td>inventory_transfer</td>
  <td>IT-0001</td>
</tr>

<tr>
  <td>14</td>
  <td>inventory_adjustment</td>
  <td>JV-2026-0014</td>
  <td>2026-01-09</td>
  <td>Penyesuaian stok susu expired</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"615","nama":"Inventory Loss / Waste","value":2000000}
      ]'
      data-kredit='[
        {"coa":"110","nama":"Inventory","value":2000000}
      ]'
      onclick="showDetail(this)">👁</button>

  </td>
  <td>stock_adjustment</td>
  <td>SA-0001</td>
</tr>

<tr>
  <td>15</td>
  <td>stock_opname</td>
  <td>JV-2026-0015</td>
  <td>2026-01-10</td>
  <td>Koreksi selisih stock opname gudang utama</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"110","nama":"Inventory","value":500000}
      ]'
      data-kredit='[
        {"coa":"615","nama":"Stock Shrinkage","value":500000}
      ]'
      onclick="showDetail(this)">👁</button>

  </td>
  <td>stock_opname</td>
  <td>SO-0001</td>
</tr>

<tr>
  <td>16</td>
  <td>material_usage</td>
  <td>JV-2026-0016</td>
  <td>2026-01-10</td>
  <td>Pemakaian bahan baku produksi pastry</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"620","nama":"COGS / Raw Material Usage","value":4000000}
      ]'
      data-kredit='[
        {"coa":"110","nama":"Inventory","value":4000000}
      ]'
      onclick="showDetail(this)">👁</button>

  </td>
  <td>material_issue</td>
  <td>MI-0001</td>
</tr>

<tr>
  <td>17</td>
  <td>production_journal</td>
  <td>JV-2026-0017</td>
  <td>2026-01-11</td>
  <td>Produksi barang jadi frozen food</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"111","nama":"Finished Goods","value":6000000}
      ]'
      data-kredit='[
        {"coa":"110","nama":"Raw Materials","value":6000000}
      ]'
      onclick="showDetail(this)">👁</button>

  </td>
  <td>production_order</td>
  <td>WO-0001</td>
</tr>

                 <tr>
  <td>18</td>
  <td>payroll_journal</td>
  <td>JV-2026-0018</td>
  <td>2026-01-12</td>
  <td>Pengakuan gaji karyawan outlet</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"610","nama":"Payroll Expense","value":7000000}
      ]'
      data-kredit='[
        {"coa":"202","nama":"Salary Payable","value":7000000}
      ]'
      onclick="showDetail(this)">👁</button>

  </td>
  <td>payroll_run</td>
  <td>PAY-0001</td>
</tr>

<tr>
  <td>19</td>
  <td>fixed_asset</td>
  <td>JV-2026-0019</td>
  <td>2026-01-12</td>
  <td>Pembelian mesin espresso baru</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"150","nama":"Fixed Asset - Equipment","value":15000000}
      ]'
      data-kredit='[
        {"coa":"101","nama":"Cash","value":15000000}
      ]'
      onclick="showDetail(this)">👁</button>

  </td>
  <td>asset_purchase</td>
  <td>FA-0001</td>
</tr>

<tr>
  <td>20</td>
  <td>depreciation_journal</td>
  <td>JV-2026-0020</td>
  <td>2026-01-31</td>
  <td>Penyusutan mesin kopi bulan Januari</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"630","nama":"Depreciation Expense","value":500000}
      ]'
      data-kredit='[
        {"coa":"151","nama":"Accumulated Depreciation","value":500000}
      ]'
      onclick="showDetail(this)">👁</button>

  </td>
  <td>depreciation_run</td>
  <td>DEP-0001</td>
</tr>

<tr>
  <td>21</td>
  <td>accrual_journal</td>
  <td>JV-2026-0021</td>
  <td>2026-01-31</td>
  <td>Accrual biaya internet</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"611","nama":"Internet Expense","value":300000}
      ]'
      data-kredit='[
        {"coa":"205","nama":"Accrued Expense","value":300000}
      ]'
      onclick="showDetail(this)">👁</button>

  </td>
  <td>accrual_expense</td>
  <td>ACC-0001</td>
</tr>

<tr>
  <td>22</td>
  <td>prepaid_amortization</td>
  <td>JV-2026-0022</td>
  <td>2026-01-31</td>
  <td>Amortisasi sewa gedung bulan Januari</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"612","nama":"Rent Expense","value":1000000}
      ]'
      data-kredit='[
        {"coa":"121","nama":"Prepaid Rent","value":1000000}
      ]'
      onclick="showDetail(this)">👁</button>

  </td>
  <td>prepaid_schedule</td>
  <td>AMRT-0001</td>
</tr>

<tr>
  <td>23</td>
  <td>revenue_recognition</td>
  <td>JV-2026-0023</td>
  <td>2026-01-31</td>
  <td>Pengakuan pendapatan proyek bertahap</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"211","nama":"Deferred Revenue","value":2000000}
      ]'
      data-kredit='[
        {"coa":"420","nama":"Service Revenue","value":2000000}
      ]'
      onclick="showDetail(this)">👁</button>

  </td>
  <td>deferred_schedule</td>
  <td>REV-0001</td>
</tr>
<tr>
  <td>24</td>
  <td>cash_receipt</td>
  <td>JV-2026-0024</td>
  <td>2026-02-01</td>
  <td>Penerimaan kas outlet</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"101","nama":"Cash","value":5000000}
      ]'
      data-kredit='[
        {"coa":"410","nama":"Sales Revenue","value":5000000}
      ]'
      onclick="showDetail(this)">👁</button>

  </td>
  <td>cash_receipt</td>
  <td>CR-0002</td>
</tr>

<tr>
  <td>25</td>
  <td>cash_disbursement</td>
  <td>JV-2026-0025</td>
  <td>2026-02-01</td>
  <td>Operasional harian</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"610","nama":"Operating Expense","value":1500000}
      ]'
      data-kredit='[
        {"coa":"101","nama":"Cash","value":1500000}
      ]'
      onclick="showDetail(this)">👁</button>

  </td>
  <td>cash_payment</td>
  <td>CP-0002</td>
</tr>

<tr>
  <td>26</td>
  <td>bank_transfer</td>
  <td>JV-2026-0026</td>
  <td>2026-02-02</td>
  <td>Transfer kas ke bank</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"102","nama":"Bank","value":3000000}
      ]'
      data-kredit='[
        {"coa":"101","nama":"Cash","value":3000000}
      ]'
      onclick="showDetail(this)">👁</button>

  </td>
  <td>bank_transfer</td>
  <td>BT-0001</td>
</tr>

<tr>
  <td>27</td>
  <td>adjustment_journal</td>
  <td>JV-2026-0027</td>
  <td>2026-02-03</td>
  <td>Koreksi expense internet</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"611","nama":"Internet Expense","value":200000}
      ]'
      data-kredit='[
        {"coa":"610","nama":"Operating Expense","value":200000}
      ]'
      onclick="showDetail(this)">👁</button>

  </td>
  <td>manual_adjustment</td>
  <td>ADJ-0001</td>
</tr>

<tr>
  <td>28</td>
  <td>reversing_journal</td>
  <td>JV-2026-0028</td>
  <td>2026-02-01</td>
  <td>Reversing accrual Januari</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"205","nama":"Accrued Expense","value":300000}
      ]'
      data-kredit='[
        {"coa":"611","nama":"Internet Expense","value":300000}
      ]'
      onclick="showDetail(this)">👁</button>

  </td>
  <td>reversing_entry</td>
  <td>REV-0002</td>
</tr>

<tr>
  <td>29</td>
  <td>closing_journal</td>
  <td>JV-2026-0029</td>
  <td>2026-01-31</td>
  <td>Closing laba rugi Januari</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"410","nama":"Revenue","value":20000000}
      ]'
      data-kredit='[
        {"coa":"320","nama":"Retained Earnings","value":20000000}
      ]'
      onclick="showDetail(this)">👁</button>

  </td>
  <td>period_closing</td>
  <td>CLS-0001</td>
</tr>

<tr>
  <td>30</td>
  <td>manual_journal</td>
  <td>JV-2026-0030</td>
  <td>2026-02-05</td>
  <td>Koreksi opening balance</td>
  <td class="text-center">

    <button class="btn btn-sm btn-outline-info"
      data-bs-toggle="modal"
      data-bs-target="#modalDetailJurnal"
      data-debit='[
        {"coa":"110","nama":"Inventory","value":1000000}
      ]'
      data-kredit='[
        {"coa":"320","nama":"Equity Adjustment","value":1000000}
      ]'
      onclick="showDetail(this)">👁</button>

  </td>
  <td>journal_manual</td>
  <td>MNL-0001</td>
</tr>

                 
                  <!-- =========================================================
                  PENAMBAHAN & PENYEMPURNAAN TABEL JURNAL
                  FOKUS:
                  1. Siklus lengkap prepaid expense
                  2. Siklus lengkap deferred revenue
                  3. Meta-data detail jurnal
                  4. Struktur siap modal bootstrap
                  ========================================================= -->

              
                    <!-- =========================================================
                    PREPAID EXPENSE FLOW
                    ========================================================= -->

                    <!-- Pembayaran prepaid -->
                    <tr>
                      <td>31</td>
                      <td>prepaid_expense</td>
                      <td>JV-2026-0031</td>
                      <td>2026-02-06</td>
                      <td>Pembayaran asuransi tahunan dibayar dimuka</td>

                      <td class="text-center">

                        <button class="btn btn-sm btn-outline-info"
                          data-bs-toggle="modal"
                          data-bs-target="#modalDetailJurnal"

                          data-debit='[
                            {"coa":"121","nama":"Asuransi Dibayar Dimuka","value":12000000}
                          ]'

                          data-kredit='[
                            {"coa":"101","nama":"Kas","value":12000000}
                          ]'

                          onclick="showDetail(this)">
                          <i class="fas fa-eye"></i>
                        </button>

                        <button class="btn btn-sm btn-outline-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalEditJurnal"

                          data-jenis="Prepaid Expense"
                          data-keterangan="Pembayaran asuransi tahunan dimuka"

                          data-debit='[
                            {"coa":"121","nama":"Asuransi Dibayar Dimuka"}
                          ]'

                          data-kredit='[
                            {"coa":"101","nama":"Kas"}
                          ]'

                          onclick="editJurnal(this)">
                          <i class="fas fa-edit"></i>
                        </button>

                      </td>

                      <td>prepaid_contract</td>
                      <td>PRE-0002</td>
                    </tr>

                    <!-- Pengakuan prepaid -->
                    <tr>
                      <td>32</td>
                      <td>prepaid_amortization</td>
                      <td>JV-2026-0032</td>
                      <td>2026-02-28</td>
                      <td>Amortisasi asuransi bulan Februari</td>

                      <td class="text-center">

                        <button class="btn btn-sm btn-outline-info"
                          data-bs-toggle="modal"
                          data-bs-target="#modalDetailJurnal"

                          data-debit='[
                            {"coa":"601","nama":"Beban Asuransi","value":1000000}
                          ]'

                          data-kredit='[
                            {"coa":"121","nama":"Asuransi Dibayar Dimuka","value":1000000}
                          ]'

                          onclick="showDetail(this)">
                          <i class="fas fa-eye"></i>
                        </button>

                        <button class="btn btn-sm btn-outline-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalEditJurnal"

                          data-jenis="Amortisasi Prepaid"
                          data-keterangan="Pengakuan beban asuransi bulan Februari"

                          data-debit='[
                            {"coa":"601","nama":"Beban Asuransi"}
                          ]'

                          data-kredit='[
                            {"coa":"121","nama":"Asuransi Dibayar Dimuka"}
                          ]'

                          onclick="editJurnal(this)">
                          <i class="fas fa-edit"></i>
                        </button>

                      </td>

                      <td>prepaid_schedule</td>
                      <td>AMRT-0002</td>
                    </tr>

                    <!-- Refund prepaid -->
                    <tr>
                      <td>33</td>
                      <td>prepaid_refund</td>
                      <td>JV-2026-0033</td>
                      <td>2026-02-10</td>
                      <td>Refund sisa kontrak sewa dibayar dimuka</td>

                      <td class="text-center">

                        <button class="btn btn-sm btn-outline-info"
                          data-bs-toggle="modal"
                          data-bs-target="#modalDetailJurnal"

                          data-debit='[
                            {"coa":"101","nama":"Kas","value":3000000}
                          ]'

                          data-kredit='[
                            {"coa":"122","nama":"Sewa Dibayar Dimuka","value":3000000}
                          ]'

                          onclick="showDetail(this)">
                          <i class="fas fa-eye"></i>
                        </button>

                        <button class="btn btn-sm btn-outline-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalEditJurnal"

                          data-jenis="Refund Prepaid"
                          data-keterangan="Refund atas sisa sewa dibayar dimuka"

                          data-debit='[
                            {"coa":"101","nama":"Kas"}
                          ]'

                          data-kredit='[
                            {"coa":"122","nama":"Sewa Dibayar Dimuka"}
                          ]'

                          onclick="editJurnal(this)">
                          <i class="fas fa-edit"></i>
                        </button>

                      </td>

                      <td>prepaid_refund</td>
                      <td>PREF-0001</td>
                    </tr>

                    <!-- =========================================================
                    DEFERRED REVENUE FLOW
                    ========================================================= -->

                    <!-- DP / uang muka -->
                    <tr>
                      <td>34</td>
                      <td>deferred_revenue</td>
                      <td>JV-2026-0034</td>
                      <td>2026-02-11</td>
                      <td>Penerimaan DP proyek website client PT Maju Jaya</td>

                      <td class="text-center">

                        <button class="btn btn-sm btn-outline-info"
                          data-bs-toggle="modal"
                          data-bs-target="#modalDetailJurnal"

                          data-debit='[
                            {"coa":"101","nama":"Kas","value":15000000}
                          ]'

                          data-kredit='[
                            {"coa":"205","nama":"Pendapatan Diterima Dimuka","value":15000000}
                          ]'

                          onclick="showDetail(this)">
                          <i class="fas fa-eye"></i>
                        </button>

                        <button class="btn btn-sm btn-outline-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalEditJurnal"

                          data-jenis="Deferred Revenue"
                          data-keterangan="DP proyek website customer"

                          data-debit='[
                            {"coa":"101","nama":"Kas"}
                          ]'

                          data-kredit='[
                            {"coa":"205","nama":"Pendapatan Diterima Dimuka"}
                          ]'

                          onclick="editJurnal(this)">
                          <i class="fas fa-edit"></i>
                        </button>

                      </td>

                      <td>customer_down_payment</td>
                      <td>DP-0002</td>
                    </tr>

                    <!-- Pengakuan revenue -->
                    <tr>
                      <td>35</td>
                      <td>revenue_recognition</td>
                      <td>JV-2026-0035</td>
                      <td>2026-02-28</td>
                      <td>Pengakuan pendapatan tahap 1 proyek website</td>

                      <td class="text-center">

                        <button class="btn btn-sm btn-outline-info"
                          data-bs-toggle="modal"
                          data-bs-target="#modalDetailJurnal"

                          data-debit='[
                            {"coa":"205","nama":"Pendapatan Diterima Dimuka","value":5000000}
                          ]'

                          data-kredit='[
                            {"coa":"401","nama":"Pendapatan Jasa","value":5000000}
                          ]'

                          onclick="showDetail(this)">
                          <i class="fas fa-eye"></i>
                        </button>

                        <button class="btn btn-sm btn-outline-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalEditJurnal"

                          data-jenis="Revenue Recognition"
                          data-keterangan="Pengakuan revenue tahap pertama"

                          data-debit='[
                            {"coa":"205","nama":"Pendapatan Diterima Dimuka"}
                          ]'

                          data-kredit='[
                            {"coa":"401","nama":"Pendapatan Jasa"}
                          ]'

                          onclick="editJurnal(this)">
                          <i class="fas fa-edit"></i>
                        </button>

                      </td>

                      <td>deferred_schedule</td>
                      <td>REV-0003</td>
                    </tr>

                    <!-- Refund deferred revenue -->
                    <tr>
                      <td>36</td>
                      <td>deferred_refund</td>
                      <td>JV-2026-0036</td>
                      <td>2026-02-15</td>
                      <td>Refund sisa DP karena pembatalan proyek</td>

                      <td class="text-center">

                        <button class="btn btn-sm btn-outline-info"
                          data-bs-toggle="modal"
                          data-bs-target="#modalDetailJurnal"

                          data-debit='[
                            {"coa":"205","nama":"Pendapatan Diterima Dimuka","value":2000000}
                          ]'

                          data-kredit='[
                            {"coa":"101","nama":"Kas","value":2000000}
                          ]'

                          onclick="showDetail(this)">
                          <i class="fas fa-eye"></i>
                        </button>

                        <button class="btn btn-sm btn-outline-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalEditJurnal"

                          data-jenis="Deferred Refund"
                          data-keterangan="Refund DP customer"

                          data-debit='[
                            {"coa":"205","nama":"Pendapatan Diterima Dimuka"}
                          ]'

                          data-kredit='[
                            {"coa":"101","nama":"Kas"}
                          ]'

                          onclick="editJurnal(this)">
                          <i class="fas fa-edit"></i>
                        </button>

                      </td>

                      <td>customer_refund</td>
                      <td>RF-0001</td>
                    </tr>

                  </tbody>



                </table>
              </div>

            </div>
            <!-- /.card-body -->
          </div>




        </div>
      </div>
    </div>
  </section>
  </div>
  <!-- /.content-wrapper -->

<?php include('4footer.php'); ?>

<!-- Modal Filter -->
<div class="modal fade" id="modalFilter" tabindex="-1" aria-labelledby="modalFilterLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="modalFilterLabel">Filter Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="GET">

        <div class="modal-body">
          <!-- Catatan penting -->
          <div class="alert alert-warning mb-3" role="alert" style="font-size: 0.9rem;">
            <b>Informasi:</b> Halaman ini otomatis menampilkan data angkatan terbaru saat pertama dibuka. Data awal yang tampil adalah angkatan [2025].
          </div>
          <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select name="angkatan" id="angkatan" class="form-select">
              <option value="">-- Pilih Angkatan --</option>
              <option value="2025">2025</option>
              <option value="2024">2024</option>
              <option value="2023">2023</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
              <option value="">-- Pilih Status --</option>
              <option value="Aktif">Aktif</option>
              <option value="NonAktif">NonAktif</option>
            </select>
          </div>
       
       </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info">Terapkan Filter</button>
        </div>

      </form>
    </div>
  </div>
</div>



<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Tambah Jurnal Manual</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <form>
        <div class="modal-body">

          <!-- HEADER -->
          <div class="row mb-3">
            <div class="col-md-4">
              <label>Tanggal</label>
              <input type="date" class="form-control">
            </div>

            <div class="col-md-4">
              <label>Referensi</label>
              <input type="text" class="form-control" placeholder="Contoh: ADJ-001">
            </div>

            <div class="col-md-4">
              <label>Sumber</label>
              <select class="form-control">
                <option>MANUAL</option>
                <option>ADJUSTMENT</option>
                <option>LAINNYA</option>
              </select>
            </div>
          </div>

          <div class="mb-3">
            <label>Keterangan</label>
            <input type="text" class="form-control" placeholder="Isi keterangan jurnal">
          </div>

          <hr>

          <!-- DETAIL -->
          <table class="table table-bordered" id="jurnalDetailTable">
            <thead class="table-light text-center">
              <tr>
                <th>Akun</th>
                <th>Debit</th>
                <th>Kredit</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td>
                  <select class="form-control">
                    <option>Kas</option>
                    <option>Bank</option>
                    <option>Pendapatan</option>
                    <option>Beban</option>
                    <option>Hutang</option>
                    <option>Persediaan</option>
                  </select>
                </td>
                <td><input type="number" class="form-control debit"></td>
                <td><input type="number" class="form-control kredit"></td>
                <td class="text-center">
                  <button type="button" class="btn btn-danger btn-sm btn-hapus">X</button>
                </td>
              </tr>

            </tbody>
          </table>

          <button type="button" class="btn btn-success btn-sm" onclick="tambahBaris()">+ Tambah Baris</button>

          <hr>

          <!-- TOTAL -->
          <div class="d-flex justify-content-between">
            <b>Total Debit: <span id="totalDebit">0</span></b>
            <b>Total Kredit: <span id="totalKredit">0</span></b>
          </div>

          <div id="balanceInfo" class="mt-2 text-danger">
            ⚠️ Jurnal belum balance
          </div>

        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan Jurnal</button>
        </div>
      </form>

    </div>
  </div>
</div>


<!-- Modal Impor -->
<div class="modal fade" id="modalImpor" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Impor Data</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">   
        <div class="alert alert-warning mb-3 py-2" role="alert" style="font-size: 0.9rem;">
          <i class="fas fa-exclamation-triangle me-1"></i>
          <strong>Penting:</strong> Pastikan file yang akan diimpor menggunakan <strong>template resmi</strong> yang sudah disediakan. Menggunakan file lain atau format berbeda dapat menyebabkan <strong>kesalahan impor</strong>.
        </div>     

        <label class="form-label">Pilih File:</label>
        <input type="file" class="form-control mb-3" accept=".xlsx,.xls">

        <a href="template-impor-mahasiswa.xls" class="btn btn-sm btn-outline-success w-100">Download Template</a>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Impor</button>
      </div>

    </div>
  </div>
</div>

<!-- Modal Bantuan -->
<div class="modal fade" id="modalBantuan" tabindex="-1" aria-labelledby="modalBantuanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalBantuanLabel">Bantuan Tabel</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="alert alert-info">
          <strong>Informasi:</strong><br>
          Halaman ini menampilkan data jurnal akuntansi (General Journal / General Ledger)
          yang menjadi fondasi utama sistem Finance & Accounting berbasis PSAK.
        </div>

        <h5 class="mb-3">Cara Memahami Halaman Journal</h5>

        <p>
          Dalam sistem accounting modern, seluruh laporan keuangan dan analytics
          berasal dari proses berikut:
        </p>

        <div class="border rounded p-3 bg-light mb-3">
          BUSINESS TRANSACTION
          → JOURNAL
          → GENERAL LEDGER
          → FINANCIAL STATEMENT
          → ANALYTICS
          → DECISION SUPPORT
        </div>

        <p>
          Halaman ini berfungsi sebagai pusat pencatatan transaksi accounting
          yang berasal dari berbagai proses bisnis seperti:
        </p>

        <ul>
          <li>Penjualan (Sales)</li>
          <li>Pembelian (Purchase)</li>
          <li>Pembayaran Customer</li>
          <li>Pembayaran Vendor</li>
          <li>Kas & Bank</li>
          <li>Inventory / Persediaan</li>
          <li>Fixed Asset / Aset Tetap</li>
          <li>Adjustment / Penyesuaian</li>
        </ul>

        <hr>

        <h5 class="mb-3">Penjelasan Kolom Journal Header</h5>

        <div class="table-responsive">
          <table class="table table-bordered table-sm">
            <thead class="table-light">
              <tr>
                <th>Kolom</th>
                <th>Penjelasan</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td><b>ID</b></td>
                <td>Primary key / identitas unik jurnal.</td>
              </tr>

              <tr>
                <td><b>Journal Type</b></td>
                <td>
                  Jenis jurnal secara accounting.<br>
                  Contoh:
                  sales_journal,
                  purchase_journal,
                  cash_receipt,
                  adjustment_journal,
                  depreciation_journal.
                </td>
              </tr>

              <tr>
                <td><b>Journal No</b></td>
                <td>
                  Nomor unik jurnal accounting yang dihasilkan sistem.
                </td>
              </tr>

              <tr>
                <td><b>Date</b></td>
                <td>
                  Tanggal posting jurnal accounting.
                </td>
              </tr>

              <tr>
                <td><b>Description</b></td>
                <td>
                  Keterangan transaksi atau memo jurnal.
                </td>
              </tr>

              <tr>
                <td><b>Reference Type</b></td>
                <td>
                  Jenis dokumen bisnis sumber transaksi.<br>
                  Contoh:
                  sales_invoice,
                  purchase_invoice,
                  customer_payment,
                  vendor_payment.
                </td>
              </tr>

              <tr>
                <td><b>Reference No</b></td>
                <td>
                  Nomor dokumen bisnis asli yang menjadi referensi jurnal.
                </td>
              </tr>

            </tbody>
          </table>
        </div>

        <hr>

        <h5 class="mb-3">Perbedaan Journal Type vs Reference Type</h5>

        <div class="table-responsive">
          <table class="table table-bordered table-sm">
            <thead class="table-light">
              <tr>
                <th>Field</th>
                <th>Fungsi</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td><b>Journal Type</b></td>
                <td>
                  Sudut pandang accounting / PSAK.<br>
                  Menjelaskan klasifikasi jurnal akuntansi.
                </td>
              </tr>

              <tr>
                <td><b>Reference Type</b></td>
                <td>
                  Sudut pandang proses bisnis.<br>
                  Menjelaskan asal dokumen transaksi bisnis.
                </td>
              </tr>

            </tbody>
          </table>
        </div>

        <hr>

        <h5 class="mb-3">Cara Membaca Journal</h5>

        <ol>
          <li>
            Lihat jenis jurnal pada kolom <b>Journal Type</b>.
          </li>

          <li>
            Lihat sumber transaksi bisnis pada
            <b>Reference Type</b> dan <b>Reference No</b>.
          </li>

          <li>
            Klik tombol <b>Detail</b> untuk melihat baris accounting
            (debit & kredit) pada General Ledger.
          </li>

          <li>
            Pastikan total debit = total kredit
            sebagai validasi prinsip double-entry accounting.
          </li>

          <li>
            Data jurnal ini akan digunakan untuk:
            <ul>
              <li>General Ledger</li>
              <li>Trial Balance</li>
              <li>Laporan Laba Rugi</li>
              <li>Neraca</li>
              <li>Cash Flow</li>
              <li>Financial Analytics</li>
            </ul>
          </li>
        </ol>

        <hr>

        <h5 class="mb-3">Konsep Penting</h5>

        <div class="alert alert-warning mb-2">
          Analytics finance modern tidak menggantikan accounting.
          Analytics adalah layer lanjutan di atas data PSAK dan jurnal accounting.
        </div>

        <div class="border rounded p-3 bg-light">
          COA
          → Journal
          → Ledger
          → Financial Statement
          → Finance Analytics
          → AI & Decision Support
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


                  <!-- =========================================================
                  MODAL DETAIL JURNAL
                  ========================================================= -->

                  <div class="modal fade" id="modalDetailJurnal">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h5 class="modal-title">
                            Detail Jurnal
                          </h5>

                          <button class="btn-close"
                            data-bs-dismiss="modal">
                          </button>
                        </div>

                        <div class="modal-body">

                          <table class="table table-bordered table-sm">

                            <thead>
                              <tr class="text-center">
                                <th>COA</th>
                                <th>Account</th>
                                <th>Debit</th>
                                <th>Kredit</th>
                              </tr>
                            </thead>

                            <tbody id="ledgerBody"></tbody>

                          </table>

                        </div>

                      </div>
                    </div>
                  </div>



               
<?php include('5script.php'); ?>
   <!-- =========================================================
                  SCRIPT SHOW DETAIL
                  ========================================================= -->

                  <script>

                  function showDetail(el) {

                    const debit = JSON.parse(el.dataset.debit || "[]");
                    const kredit = JSON.parse(el.dataset.kredit || "[]");

                    let html = '';

                    let totalDebit = 0;
                    let totalKredit = 0;

                    debit.forEach(d => {

                      totalDebit += Number(d.value || 0);

                      html += `
                        <tr>
                          <td>${d.coa}</td>
                          <td>${d.nama}</td>
                          <td class="text-end">
                            ${(d.value || 0).toLocaleString()}
                          </td>
                          <td class="text-end">-</td>
                        </tr>
                      `;
                    });

                    kredit.forEach(d => {

                      totalKredit += Number(d.value || 0);

                      html += `
                        <tr>
                          <td>${d.coa}</td>
                          <td>${d.nama}</td>
                          <td class="text-end">-</td>
                          <td class="text-end">
                            ${(d.value || 0).toLocaleString()}
                          </td>
                        </tr>
                      `;
                    });

                    html += `
                      <tr class="fw-bold table-light">
                        <td colspan="2" class="text-end">
                          TOTAL
                        </td>

                        <td class="text-end">
                          ${totalDebit.toLocaleString()}
                        </td>

                        <td class="text-end">
                          ${totalKredit.toLocaleString()}
                        </td>
                      </tr>
                    `;

                    document.getElementById('ledgerBody').innerHTML = html;
                  }

                  </script>
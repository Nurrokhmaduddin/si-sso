
<?php
$page = 'inventory-report';

include('koneksi.php');
include('1header.php');
include('2navbar.php');
include('3sidebar.php');
?>

<div class="content-wrapper">

<!-- ========================================================= -->
<!-- CONTENT HEADER -->
<!-- ========================================================= -->
<section class="content-header">
	<div class="container-fluid">

		<h3 class="mb-0">
			Master Employees

			<button type="button"
			class="btn btn-tool"
			data-bs-toggle="modal"
			data-bs-target="#modalBantuan">

			<i class="fas fa-question-circle"></i>

		</button>

	</h3>

	<p class="text-muted mb-0">
		Halaman ini digunakan untuk mengelola data karyawan perusahaan
		yang mencakup identitas pegawai, jabatan, departemen,
		cabang penempatan, status kerja, dan informasi dasar HR.
	</p>

</div>
</section>

<!-- ========================================================= -->
<!-- CONTENT -->
<!-- ========================================================= -->
<section class="content">
	<div class="container-fluid">

<!-- ========================================================= -->
<!-- FILTER CARD -->
<!-- ========================================================= -->
<div class="card">

	<div class="card-body">

		<div class="row">

			<div class="col-md-3">
				<b>Status:</b> Semua
			</div>

			<div class="col-md-3">
				<b>Department:</b> Semua
			</div>

			<div class="col-md-3">
				<b>Branch:</b> Semua
			</div>

			<div class="col-md-3">
				<b>Data:</b> Employee Master
			</div>

		</div>

	</div>

	<div class="card-footer">

		<div class="card-tools ms-auto">

			<button class="btn btn-outline-info btn-sm"
			data-bs-toggle="modal"
			data-bs-target="#modalFilter">

			<i class="fas fa-filter me-1"></i>
			Filter

		</button>

		<button class="btn btn-outline-primary btn-sm"
		data-bs-toggle="modal"
		data-bs-target="#modalTambahData">

		<i class="fas fa-plus me-1"></i>
		Tambah Employee

	</button>

	<button class="btn btn-outline-primary btn-sm"
	data-bs-toggle="modal"
	data-bs-target="#modalImpor">

	<i class="fas fa-file-upload me-1"></i>
	Import

</button>

<button class="btn btn-outline-success btn-sm"
data-bs-toggle="modal"
data-bs-target="#modalExport">

<i class="fas fa-file-download me-1"></i>
Export

</button>

<button class="btn btn-outline-danger btn-sm"
data-bs-toggle="modal"
data-bs-target="#modalResetData">

<i class="fas fa-ban me-1"></i>
Reset

</button>

</div>

</div>

</div>

<!-- ========================================================= -->
<!-- CARD TABLE -->
<!-- ========================================================= -->
<div class="card">

	<div class="card-header">

		<h3 class="card-title">
			Daftar Employees
		</h3>

	</div>

	<div class="card-body">

		<div class="table-responsive">

			<?php
			$query = mysqli_query($conn, "
				SELECT
				e.*,
				b.branch_name
				FROM employees e
				LEFT JOIN branches b
				ON b.id = e.branch_id
				ORDER BY e.id ASC
				");
				?>

				<table class="table table-bordered table-striped table-sm datatables1">

					<thead class="table-light">

						<tr class="text-center">

							<th>No</th>
							<th>Employee Code</th>
							<th>Employee Name</th>
							<th>Department</th>
							<th>Position</th>
							<th>Branch</th>
							<th>Phone</th>
							<th>Status</th>
							<th>Aksi</th>

						</tr>

					</thead>

					<tbody>

						<?php
						$no = 1;
						while($data = mysqli_fetch_assoc($query)) :
							?>

							<tr>

								<td class="text-center">
									<?= $no++; ?>
								</td>

								<td>
									<?= $data['employee_code']; ?>
								</td>

								<td>
									<?= $data['employee_name']; ?>
								</td>

								<td>
									<?= $data['department']; ?>
								</td>

								<td>
									<?= $data['position']; ?>
								</td>

								<td>
									<?= $data['branch_name']; ?>
								</td>

								<td>
									<?= $data['phone']; ?>
								</td>

								<td class="text-center">

									<?php if($data['employee_status'] == 'ACTIVE'){ ?>

										<span class="badge bg-success">
											ACTIVE
										</span>

									<?php } elseif($data['employee_status'] == 'INACTIVE'){ ?>

										<span class="badge bg-secondary">
											INACTIVE
										</span>

									<?php } else { ?>

										<span class="badge bg-danger">
											RESIGNED
										</span>

									<?php } ?>

								</td>

								<td class="text-center">

									<button class="btn btn-sm btn-outline-info">
										<i class="fas fa-eye"></i>
									</button>

									<button class="btn btn-sm btn-outline-primary">
										<i class="fas fa-edit"></i>
									</button>

									<button class="btn btn-sm btn-outline-danger">
										<i class="fas fa-trash"></i>
									</button>

								</td>

							</tr>

						<?php endwhile; ?>

					</tbody>

				</table>

			</div>

		</div>

	</div>

</div>


<!-- ========================================================= -->
<!-- STOCK SUMMARY REPORT -->
<!-- ========================================================= -->

<div class="card card-outline card-primary">

  <div class="card-header">
    <h3 class="card-title">
      Stock Summary Report
    </h3>
  </div>

  <div class="card-body p-0 table-responsive">

    <table class="table table-bordered table-hover">

      <thead class="table-dark text-center">
        <tr>
          <th>Item Code</th>
          <th>Item Name</th>
          <th>Category</th>
          <th>Warehouse</th>
          <th>Stock Qty</th>
          <th>Unit</th>
          <th>Avg Cost</th>
          <th>Total Value</th>
        </tr>
      </thead>
      <tbody>

      	<tr>
      		<td>BRG-001</td>
      		<td>Laptop Asus</td>
      		<td>Elektronik</td>
      		<td>Gudang Utama</td>
      		<td class="text-end">12</td>
      		<td>PCS</td>
      		<td class="text-end">8.000.000</td>
      		<td class="text-end">96.000.000</td>
      	</tr>

      	<tr>
      		<td>BRG-002</td>
      		<td>Mouse Logitech</td>
      		<td>Aksesoris</td>
      		<td>Gudang Utama</td>
      		<td class="text-end">55</td>
      		<td>PCS</td>
      		<td class="text-end">150.000</td>
      		<td class="text-end">8.250.000</td>
      	</tr>

      	<tr>
      		<td>BRG-003</td>
      		<td>Keyboard Mechanical</td>
      		<td>Aksesoris</td>
      		<td>Gudang Cabang A</td>
      		<td class="text-end">30</td>
      		<td>PCS</td>
      		<td class="text-end">450.000</td>
      		<td class="text-end">13.500.000</td>
      	</tr>

      	<tr>
      		<td>BRG-004</td>
      		<td>Printer Epson</td>
      		<td>Elektronik</td>
      		<td>Gudang Utama</td>
      		<td class="text-end">8</td>
      		<td>PCS</td>
      		<td class="text-end">2.500.000</td>
      		<td class="text-end">20.000.000</td>
      	</tr>

      	<tr>
      		<td>BRG-005</td>
      		<td>Monitor LG 24"</td>
      		<td>Elektronik</td>
      		<td>Gudang Cabang B</td>
      		<td class="text-end">14</td>
      		<td>PCS</td>
      		<td class="text-end">1.850.000</td>
      		<td class="text-end">25.900.000</td>
      	</tr>

      	<tr>
      		<td>BRG-006</td>
      		<td>Flashdisk Sandisk</td>
      		<td>Storage</td>
      		<td>Gudang Utama</td>
      		<td class="text-end">120</td>
      		<td>PCS</td>
      		<td class="text-end">90.000</td>
      		<td class="text-end">10.800.000</td>
      	</tr>

      	<tr>
      		<td>BRG-007</td>
      		<td>Router Mikrotik</td>
      		<td>Networking</td>
      		<td>Gudang Cabang A</td>
      		<td class="text-end">10</td>
      		<td>PCS</td>
      		<td class="text-end">1.200.000</td>
      		<td class="text-end">12.000.000</td>
      	</tr>

      </tbody>

      <tfoot class="table-secondary fw-bold">
        <tr>
          <td colspan="7" class="text-end">
            TOTAL INVENTORY VALUE
          </td>
          <td class="text-end">
            96.000.000
          </td>
        </tr>
      </tfoot>

    </table>

  </div>

</div>
     <!-- ========================================================= -->
<!-- STOCK LEDGER REPORT -->
<!-- ========================================================= -->
<div class="card card-outline card-info">

  <div class="card-header">
    <h3 class="card-title">
      Stock Ledger Report
    </h3>
  </div>

  <div class="card-body table-responsive p-0">

    <table class="table table-bordered table-hover">

      <thead class="table-dark text-center">
        <tr>
          <th>Date</th>
          <th>Document No</th>
          <th>Transaction</th>
          <th>Warehouse</th>
          <th>Qty In</th>
          <th>Qty Out</th>
          <th>Balance</th>
        </tr>
      </thead>



<tbody>

  <tr>
    <td>2026-05-01</td>
    <td>PO-0001</td>
    <td>Purchase Receipt</td>
    <td>Gudang Utama</td>
    <td class="text-end">50</td>
    <td class="text-end">0</td>
    <td class="text-end">50</td>
  </tr>

  <tr>
    <td>2026-05-02</td>
    <td>SO-0001</td>
    <td>Sales Delivery</td>
    <td>Gudang Utama</td>
    <td class="text-end">0</td>
    <td class="text-end">5</td>
    <td class="text-end">45</td>
  </tr>

  <tr>
    <td>2026-05-03</td>
    <td>TRF-0001</td>
    <td>Transfer Warehouse</td>
    <td>Gudang Cabang A</td>
    <td class="text-end">10</td>
    <td class="text-end">0</td>
    <td class="text-end">55</td>
  </tr>

  <tr>
    <td>2026-05-04</td>
    <td>ADJ-0001</td>
    <td>Stock Adjustment</td>
    <td>Gudang Utama</td>
    <td class="text-end">2</td>
    <td class="text-end">0</td>
    <td class="text-end">57</td>
  </tr>

  <tr>
    <td>2026-05-05</td>
    <td>OPN-0001</td>
    <td>Stock Opname</td>
    <td>Gudang Utama</td>
    <td class="text-end">0</td>
    <td class="text-end">1</td>
    <td class="text-end">56</td>
  </tr>

  <tr>
    <td>2026-05-06</td>
    <td>RET-0001</td>
    <td>Sales Return</td>
    <td>Gudang Utama</td>
    <td class="text-end">3</td>
    <td class="text-end">0</td>
    <td class="text-end">59</td>
  </tr>

  <tr>
    <td>2026-05-07</td>
    <td>PRD-0001</td>
    <td>Production Usage</td>
    <td>Gudang Produksi</td>
    <td class="text-end">0</td>
    <td class="text-end">7</td>
    <td class="text-end">52</td>
  </tr>

</tbody>

    </table>

  </div>

</div>
      <!-- ========================================================= -->
<!-- INVENTORY VALUATION REPORT -->
<!-- ========================================================= -->
<div class="card card-outline card-success">

  <div class="card-header">
    <h3 class="card-title">
      Inventory Valuation Report
    </h3>
  </div>

  <div class="card-body table-responsive p-0">

    <table class="table table-bordered">

      <thead class="table-dark text-center">
        <tr>
          <th>Item</th>
          <th>Warehouse</th>
          <th>Qty</th>
          <th>Method</th>
          <th>Unit Cost</th>
          <th>Total Value</th>
        </tr>
      </thead>



<tbody>

  <tr>
    <td>Laptop Asus</td>
    <td>Gudang Utama</td>
    <td class="text-end">12</td>
    <td>FIFO</td>
    <td class="text-end">8.000.000</td>
    <td class="text-end">96.000.000</td>
  </tr>

  <tr>
    <td>Mouse Logitech</td>
    <td>Gudang Utama</td>
    <td class="text-end">55</td>
    <td>FIFO</td>
    <td class="text-end">150.000</td>
    <td class="text-end">8.250.000</td>
  </tr>

  <tr>
    <td>Keyboard Mechanical</td>
    <td>Gudang Cabang A</td>
    <td class="text-end">30</td>
    <td>Average</td>
    <td class="text-end">450.000</td>
    <td class="text-end">13.500.000</td>
  </tr>

  <tr>
    <td>Printer Epson</td>
    <td>Gudang Utama</td>
    <td class="text-end">8</td>
    <td>FIFO</td>
    <td class="text-end">2.500.000</td>
    <td class="text-end">20.000.000</td>
  </tr>

  <tr>
    <td>Monitor LG</td>
    <td>Gudang Cabang B</td>
    <td class="text-end">14</td>
    <td>Average</td>
    <td class="text-end">1.850.000</td>
    <td class="text-end">25.900.000</td>
  </tr>

  <tr>
    <td>Flashdisk Sandisk</td>
    <td>Gudang Utama</td>
    <td class="text-end">120</td>
    <td>FIFO</td>
    <td class="text-end">90.000</td>
    <td class="text-end">10.800.000</td>
  </tr>

  <tr>
    <td>Router Mikrotik</td>
    <td>Gudang Cabang A</td>
    <td class="text-end">10</td>
    <td>Average</td>
    <td class="text-end">1.200.000</td>
    <td class="text-end">12.000.000</td>
  </tr>

</tbody>

    </table>

  </div>

</div>
---
<div class="card card-outline card-warning">

  <div class="card-header">
    <h3 class="card-title">
      Slow Moving Stock Report ❌ BELUM wajib
    </h3>
  </div>

  <div class="card-body table-responsive p-0">

    <table class="table table-bordered">

      <thead class="table-dark text-center">
        <tr>
          <th>Item</th>
          <th>Warehouse</th>
          <th>Current Stock</th>
          <th>Last Sold</th>
          <th>Days Idle</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>Printer Epson</td>
          <td>Gudang Utama</td>
          <td class="text-end">25</td>
          <td>2025-12-01</td>
          <td class="text-end">120</td>
        </tr>

      </tbody>

    </table>

  </div>

</div>
---
<div class="card card-outline card-danger">

  <div class="card-header">
    <h3 class="card-title">
      Fast Moving Stock Report ❌ BELUM wajib
    </h3>
  </div>

  <div class="card-body table-responsive p-0">

    <table class="table table-bordered">

      <thead class="table-dark text-center">
        <tr>
          <th>Item</th>
          <th>Qty Sold</th>
          <th>Average Daily Sales</th>
          <th>Current Stock</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>Mouse Wireless</td>
          <td class="text-end">320</td>
          <td class="text-end">15</td>
          <td class="text-end">18</td>
        </tr>

      </tbody>

    </table>

  </div>

</div>
---
<div class="card card-outline card-danger">

  <div class="card-header">
    <h3 class="card-title">
      Expired Stock Report ❌ BELUM wajib
    </h3>
  </div>

  <div class="card-body table-responsive p-0">

    <table class="table table-bordered">

      <thead class="table-dark text-center">
        <tr>
          <th>Batch No</th>
          <th>Item</th>
          <th>Expired Date</th>
          <th>Qty</th>
          <th>Status</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>BT-0001</td>
          <td>Obat A</td>
          <td>2026-05-01</td>
          <td class="text-end">20</td>
          <td>
            <span class="badge bg-danger">
              Expired
            </span>
          </td>
        </tr>

      </tbody>

    </table>

  </div>

</div>
---
<div class="card card-outline card-warning">

  <div class="card-header">
    <h3 class="card-title" title="Reorder Report / Stock Shortage Report

Fungsinya:

memberi tahu item apa saja yang stoknya tidak mencukupi dan perlu dilakukan pembelian ulang (replenishment).
Pada ERP yang lebih matang, sumber “kekurangan stok” bisa berasal dari:

Sumber Kekurangan	Penjelasan
Minimum Stock	stok di bawah safety stock
Reorder Point	stok melewati titik reorder
Outstanding Sales Order	stok sudah dialokasikan customer
Forecast Demand	prediksi kebutuhan
Production Requirement	kebutuhan produksi
Transfer Request	permintaan antar gudang

Jadi gambar Anda itu sudah masuk level ERP yang bagus sebenarnya.">
      Reorder Report
    </h3>
  </div>

  <div class="card-body table-responsive p-0">

    <table class="table table-bordered">

      <thead class="table-dark text-center">
        <tr>
          <th>Item</th>
          <th>Current Stock</th>
          <th>Minimum Stock</th>
          <th>Suggested Order</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>Keyboard Logitech</td>
          <td class="text-end">3</td>
          <td class="text-end">10</td>
          <td class="text-end">20</td>
        </tr>

      </tbody>

    </table>

  </div>

</div>
---
<div class="card card-outline card-secondary">

  <div class="card-header">
    <h3 class="card-title">
      Warehouse Summary Report ✅
    </h3>
  </div>

  <div class="card-body table-responsive p-0">

    <table class="table table-bordered">

      <thead class="table-dark text-center">
        <tr>
          <th>Warehouse</th>
          <th>Total Item</th>
          <th>Total Qty</th>
          <th>Total Value</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>Gudang Utama</td>
          <td class="text-end">250</td>
          <td class="text-end">1500</td>
          <td class="text-end">1.200.000.000</td>
        </tr>

      </tbody>

    </table>

  </div>

</div>
<!-- ========================================================= -->
<!-- SALES SUMMARY REPORT -->
<!-- ========================================================= -->
<div class="card card-outline card-primary">

  <div class="card-header">
    <h3 class="card-title">
      Sales Summary Report
    </h3>
  </div>

  <div class="card-body table-responsive p-0">

    <table class="table table-bordered">

      <thead class="table-dark text-center">
        <tr>
          <th>Date</th>
          <th>Total Invoice</th>
          <th>Total Customer</th>
          <th>Total Sales</th>
        </tr>
      </thead>



<tbody>

  <tr>
    <td>2026-05-01</td>
    <td class="text-end">25</td>
    <td class="text-end">20</td>
    <td class="text-end">125.000.000</td>
  </tr>

  <tr>
    <td>2026-05-02</td>
    <td class="text-end">18</td>
    <td class="text-end">15</td>
    <td class="text-end">98.000.000</td>
  </tr>

  <tr>
    <td>2026-05-03</td>
    <td class="text-end">22</td>
    <td class="text-end">18</td>
    <td class="text-end">110.000.000</td>
  </tr>

  <tr>
    <td>2026-05-04</td>
    <td class="text-end">30</td>
    <td class="text-end">24</td>
    <td class="text-end">155.000.000</td>
  </tr>

  <tr>
    <td>2026-05-05</td>
    <td class="text-end">28</td>
    <td class="text-end">21</td>
    <td class="text-end">142.000.000</td>
  </tr>

  <tr>
    <td>2026-05-06</td>
    <td class="text-end">16</td>
    <td class="text-end">12</td>
    <td class="text-end">80.000.000</td>
  </tr>

  <tr>
    <td>2026-05-07</td>
    <td class="text-end">35</td>
    <td class="text-end">29</td>
    <td class="text-end">180.000.000</td>
  </tr>

</tbody>

    </table>

  </div>

</div>
<!-- ========================================================= -->
<!-- SALES DETAIL REPORT -->
<!-- ========================================================= -->
<div class="card card-outline card-info">

  <div class="card-header">
    <h3 class="card-title">
      Sales Detail Report
    </h3>
  </div>

  <div class="card-body table-responsive p-0">

    <table class="table table-bordered">

      <thead class="table-dark text-center">
        <tr>
          <th>Invoice</th>
          <th>Customer</th>
          <th>Item</th>
          <th>Qty</th>
          <th>Price</th>
          <th>Total</th>
        </tr>
      </thead>



<tbody>

  <tr>
    <td>INV-0001</td>
    <td>PT ABC</td>
    <td>Laptop Asus</td>
    <td class="text-end">2</td>
    <td class="text-end">8.000.000</td>
    <td class="text-end">16.000.000</td>
  </tr>

  <tr>
    <td>INV-0002</td>
    <td>PT Maju Jaya</td>
    <td>Mouse Logitech</td>
    <td class="text-end">10</td>
    <td class="text-end">150.000</td>
    <td class="text-end">1.500.000</td>
  </tr>

  <tr>
    <td>INV-0003</td>
    <td>CV Nusantara</td>
    <td>Printer Epson</td>
    <td class="text-end">1</td>
    <td class="text-end">2.500.000</td>
    <td class="text-end">2.500.000</td>
  </tr>

  <tr>
    <td>INV-0004</td>
    <td>PT Sejahtera</td>
    <td>Keyboard Mechanical</td>
    <td class="text-end">4</td>
    <td class="text-end">450.000</td>
    <td class="text-end">1.800.000</td>
  </tr>

  <tr>
    <td>INV-0005</td>
    <td>PT Global</td>
    <td>Router Mikrotik</td>
    <td class="text-end">3</td>
    <td class="text-end">1.200.000</td>
    <td class="text-end">3.600.000</td>
  </tr>

  <tr>
    <td>INV-0006</td>
    <td>CV Teknologi</td>
    <td>Monitor LG</td>
    <td class="text-end">5</td>
    <td class="text-end">1.850.000</td>
    <td class="text-end">9.250.000</td>
  </tr>

  <tr>
    <td>INV-0007</td>
    <td>PT Sentosa</td>
    <td>Flashdisk Sandisk</td>
    <td class="text-end">20</td>
    <td class="text-end">90.000</td>
    <td class="text-end">1.800.000</td>
  </tr>

</tbody>

    </table>

  </div>

</div>
---
<div class="card card-outline card-success">

  <div class="card-header">
    <h3 class="card-title">
      Sales By Customer
    </h3>
  </div>

  <div class="card-body table-responsive p-0">

    <table class="table table-bordered">

      <thead class="table-dark text-center">
        <tr>
          <th>Customer</th>
          <th>Total Invoice</th>
          <th>Total Sales</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>PT ABC</td>
          <td class="text-end">12</td>
          <td class="text-end">350.000.000</td>
        </tr>

      </tbody>

    </table>

  </div>

</div>
---
<div class="card card-outline card-warning">

  <div class="card-header">
    <h3 class="card-title">
      Sales By Product
    </h3>
  </div>

  <div class="card-body table-responsive p-0">

    <table class="table table-bordered">

      <thead class="table-dark text-center">
        <tr>
          <th>Product</th>
          <th>Qty Sold</th>
          <th>Total Revenue</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>Laptop Asus</td>
          <td class="text-end">45</td>
          <td class="text-end">360.000.000</td>
        </tr>

      </tbody>

    </table>

  </div>

</div>
---
<div class="card card-outline card-secondary">

  <div class="card-header">
    <h3 class="card-title">
      Sales By Salesman ⚠️ naik level accounting
    </h3>
  </div>

  <div class="card-body table-responsive p-0">

    <table class="table table-bordered">

      <thead class="table-dark text-center">
        <tr>
          <th>Salesman</th>
          <th>Total Customer</th>
          <th>Total Sales</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>Budi</td>
          <td class="text-end">18</td>
          <td class="text-end">280.000.000</td>
        </tr>

      </tbody>

    </table>

  </div>

</div>
---
<div class="card card-outline card-danger">

  <div class="card-header">
    <h3 class="card-title">
      Margin Report ⚠️ naik level accounting
    </h3>
  </div>

  <div class="card-body table-responsive p-0">

    <table class="table table-bordered">

      <thead class="table-dark text-center">
        <tr>
          <th>Product</th>
          <th>Revenue</th>
          <th>COGS</th>
          <th>Margin</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>Laptop Asus</td>
          <td class="text-end">360.000.000</td>
          <td class="text-end">300.000.000</td>
          <td class="text-end">60.000.000</td>
        </tr>

      </tbody>

    </table>

  </div>

</div>
---
<div class="card card-outline card-danger">

  <div class="card-header">
    <h3 class="card-title">
      Outstanding Invoice Report ✅ WAJIB
    </h3>
  </div>

  <div class="card-body table-responsive p-0">

    <table class="table table-bordered">

      <thead class="table-dark text-center">
        <tr>
          <th>Invoice</th>
          <th>Customer</th>
          <th>Due Date</th>
          <th>Outstanding</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>INV-0001</td>
          <td>PT ABC</td>
          <td>2026-05-10</td>
          <td class="text-end">15.000.000</td>
        </tr>

      </tbody>

    </table>

  </div>

</div>
---
<div class="card card-outline card-primary">

  <div class="card-header">
    <h3 class="card-title">
      Top Product Report ❌ tidak wajib awal.Karena bisa dihasilkan dari Sales By Product.
    </h3>
  </div>

  <div class="card-body table-responsive p-0">

    <table class="table table-bordered">

      <thead class="table-dark text-center">
        <tr>
          <th>Rank</th>
          <th>Product</th>
          <th>Qty Sold</th>
          <th>Total Revenue</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>1</td>
          <td>Laptop Asus</td>
          <td class="text-end">150</td>
          <td class="text-end">1.200.000.000</td>
        </tr>

      </tbody>

    </table>

  </div>

</div>
---
<!-- ========================================================= -->
<!-- INVENTORY VALUATION LEDGER -->
<!-- ACCOUNTING-CENTRIC INVENTORY REPORT -->
<!-- ========================================================= -->

<div class="card card-outline card-success">

  <!-- ========================================================= -->
  <!-- CARD HEADER -->
  <!-- ========================================================= -->
  <div class="card-header">

    <h3 class="card-title">
      Inventory Valuation Ledger
    </h3>

    <div class="card-tools">

      <button class="btn btn-sm btn-outline-info">
        <i class="fas fa-filter"></i>
        Filter
      </button>

      <button class="btn btn-sm btn-outline-success">
        <i class="fas fa-file-excel"></i>
        Export
      </button>

      <button class="btn btn-sm btn-outline-secondary">
        <i class="fas fa-print"></i>
        Print
      </button>

    </div>

  </div>

  <!-- ========================================================= -->
  <!-- FILTER INFORMATION -->
  <!-- ========================================================= -->
  <div class="card-body border-bottom">

    <div class="row">

      <div class="col-md-3">
        <b>Periode :</b><br>
        01-05-2026 s/d 31-05-2026
      </div>

      <div class="col-md-3">
        <b>Warehouse :</b><br>
        Gudang Utama
      </div>

      <div class="col-md-3">
        <b>Valuation Method :</b><br>
        FIFO
      </div>

      <div class="col-md-3">
        <b>Inventory Account :</b><br>
        1-1101 Persediaan Barang
      </div>

    </div>

  </div>

  <!-- ========================================================= -->
  <!-- SUMMARY -->
  <!-- ========================================================= -->
  <div class="card-body border-bottom">

    <div class="row">

      <div class="col-md-3">

        <div class="small-box bg-secondary">

          <div class="inner">
            <h3>Rp 120 JT</h3>
            <p>Opening Inventory</p>
          </div>

          <div class="icon">
            <i class="fas fa-boxes"></i>
          </div>

        </div>

      </div>

      <div class="col-md-3">

        <div class="small-box bg-success">

          <div class="inner">
            <h3>Rp 85 JT</h3>
            <p>Total Inventory In</p>
          </div>

          <div class="icon">
            <i class="fas fa-arrow-down"></i>
          </div>

        </div>

      </div>

      <div class="col-md-3">

        <div class="small-box bg-danger">

          <div class="inner">
            <h3>Rp 70 JT</h3>
            <p>Total Inventory Out</p>
          </div>

          <div class="icon">
            <i class="fas fa-arrow-up"></i>
          </div>

        </div>

      </div>

      <div class="col-md-3">

        <div class="small-box bg-info">

          <div class="inner">
            <h3>Rp 135 JT</h3>
            <p>Closing Inventory</p>
          </div>

          <div class="icon">
            <i class="fas fa-balance-scale"></i>
          </div>

        </div>

      </div>

    </div>

  </div>

  <!-- ========================================================= -->
  <!-- TABLE -->
  <!-- ========================================================= -->
  <div class="card-body table-responsive p-0">

    <table class="table table-bordered table-hover table-sm">

      <thead class="table-dark text-center">

        <tr>

          <th>Date</th>
          <th>Reference</th>
          <th>Transaction</th>
          <th>Item</th>
          <th>Warehouse</th>

          <th>Qty In</th>
          <th>Qty Out</th>
          <th>Qty Balance</th>

          <th>Unit Cost</th>
          <th>Inventory Value</th>

          <th>Inventory Account</th>

        </tr>

      </thead>

      <tbody>

        <!-- OPENING -->
        <tr class="table-secondary fw-bold">

          <td colspan="9">
            OPENING BALANCE
          </td>

          <td class="text-end">
            120.000.000
          </td>

          <td>
            1-1101 Persediaan Barang
          </td>

        </tr>

        <!-- ROW 1 -->
        <tr>

          <td>2026-05-01</td>
          <td>GR-0001</td>
          <td>Purchase Receipt</td>
          <td>Laptop Asus</td>
          <td>Gudang Utama</td>

          <td class="text-end">10</td>
          <td class="text-end">0</td>
          <td class="text-end">10</td>

          <td class="text-end">8.000.000</td>
          <td class="text-end">80.000.000</td>

          <td>1-1101 Persediaan Barang</td>

        </tr>

        <!-- ROW 2 -->
        <tr>

          <td>2026-05-02</td>
          <td>SO-0001</td>
          <td>Sales Delivery</td>
          <td>Laptop Asus</td>
          <td>Gudang Utama</td>

          <td class="text-end">0</td>
          <td class="text-end">2</td>
          <td class="text-end">8</td>

          <td class="text-end">8.000.000</td>
          <td class="text-end">64.000.000</td>

          <td>1-1101 Persediaan Barang</td>

        </tr>

        <!-- ROW 3 -->
        <tr>

          <td>2026-05-03</td>
          <td>TRF-0001</td>
          <td>Warehouse Transfer</td>
          <td>Mouse Logitech</td>
          <td>Gudang Cabang A</td>

          <td class="text-end">20</td>
          <td class="text-end">0</td>
          <td class="text-end">28</td>

          <td class="text-end">150.000</td>
          <td class="text-end">4.200.000</td>

          <td>1-1101 Persediaan Barang</td>

        </tr>

        <!-- ROW 4 -->
        <tr>

          <td>2026-05-04</td>
          <td>ADJ-0001</td>
          <td>Stock Adjustment</td>
          <td>Keyboard Mechanical</td>
          <td>Gudang Utama</td>

          <td class="text-end">3</td>
          <td class="text-end">0</td>
          <td class="text-end">15</td>

          <td class="text-end">450.000</td>
          <td class="text-end">6.750.000</td>

          <td>1-1101 Persediaan Barang</td>

        </tr>

        <!-- ROW 5 -->
        <tr>

          <td>2026-05-05</td>
          <td>RET-0001</td>
          <td>Sales Return</td>
          <td>Monitor LG</td>
          <td>Gudang Utama</td>

          <td class="text-end">1</td>
          <td class="text-end">0</td>
          <td class="text-end">12</td>

          <td class="text-end">1.850.000</td>
          <td class="text-end">22.200.000</td>

          <td>1-1101 Persediaan Barang</td>

        </tr>

        <!-- ROW 6 -->
        <tr>

          <td>2026-05-06</td>
          <td>PRD-0001</td>
          <td>Production Usage</td>
          <td>Steel Plate</td>
          <td>Gudang Produksi</td>

          <td class="text-end">0</td>
          <td class="text-end">15</td>
          <td class="text-end">85</td>

          <td class="text-end">120.000</td>
          <td class="text-end">10.200.000</td>

          <td>1-1102 Raw Material</td>

        </tr>

        <!-- ROW 7 -->
        <tr>

          <td>2026-05-07</td>
          <td>PO-0007</td>
          <td>Purchase Receipt</td>
          <td>Router Mikrotik</td>
          <td>Gudang Cabang B</td>

          <td class="text-end">5</td>
          <td class="text-end">0</td>
          <td class="text-end">18</td>

          <td class="text-end">1.200.000</td>
          <td class="text-end">21.600.000</td>

          <td>1-1101 Persediaan Barang</td>

        </tr>

      </tbody>

      <!-- ========================================================= -->
      <!-- FOOTER -->
      <!-- ========================================================= -->
      <tfoot class="table-secondary fw-bold">

        <tr>

          <td colspan="9" class="text-end">
            CLOSING INVENTORY VALUE
          </td>

          <td class="text-end">
            135.000.000
          </td>

          <td>
            ALL INVENTORY ACCOUNT
          </td>

        </tr>

      </tfoot>

    </table>

  </div>

</div>



<!-- ========================================================= -->
<!-- INVENTORY ACCOUNT LEDGER -->
<!-- ========================================================= -->

<div class="card card-outline card-success">

  <div class="card-header">

    <h3 class="card-title">
      Inventory Account Ledger
    </h3>

  </div>

  <div class="card-body">

    <div class="row mb-3">

      <div class="col-md-4">
        <b>COA :</b><br>
        1-1101 Persediaan Barang Dagang
      </div>

      <div class="col-md-4">
        <b>Periode :</b><br>
        01-05-2026 s/d 31-05-2026
      </div>

      <div class="col-md-4">
        <b>Valuation Method :</b><br>
        FIFO
      </div>

    </div>
<!-- | Business Event            | Dampak Inventory |
| ------------------------- | ---------------- |
| Purchase Receipt          | Debit Inventory  |
| Sales Delivery / COGS     | Credit Inventory |
| Sales Return              | Debit Inventory  |
| Purchase Return           | Credit Inventory |
| Stock Adjustment Gain     | Debit Inventory  |
| Stock Adjustment Loss     | Credit Inventory |
| Production Output         | Debit Inventory  |
| Production Consumption    | Credit Inventory |
| Inventory Opening Balance | Debit Inventory  |
| Inventory Write Off       | Credit Inventory | -->

    <table class="table table-bordered table-hover">

      <thead class="table-dark text-center">

        <tr>

          <th>Tanggal</th>
          <th>No Jurnal</th>
          <th>Business Event</th>
          <th>Referensi</th>

          <th>Debit</th>
          <th>Credit</th>

          <th>Saldo Inventory</th>

        </tr>

      </thead>

      <tbody>

        <tr class="table-secondary fw-bold">

          <td colspan="6">
            SALDO AWAL
          </td>

          <td class="text-end">
            250.000.000
          </td>

        </tr>

        <tr>

          <td>2026-05-01</td>
          <td>JV-0001</td>
          <td>Purchase Receipt</td>
          <td>PO-0001</td>

          <td class="text-end">
            80.000.000
          </td>

          <td class="text-end">
            0
          </td>

          <td class="text-end">
            330.000.000
          </td>

        </tr>

        <tr>

          <td>2026-05-02</td>
          <td>JV-0002</td>
          <td>Sales Delivery (COGS)</td>
          <td>SO-0001</td>

          <td class="text-end">
            0
          </td>

          <td class="text-end">
            16.000.000
          </td>

          <td class="text-end">
            314.000.000
          </td>

        </tr>

        <tr>

          <td>2026-05-03</td>
          <td>JV-0003</td>
          <td>Sales Return</td>
          <td>RET-0001</td>

          <td class="text-end">
            4.000.000
          </td>

          <td class="text-end">
            0
          </td>

          <td class="text-end">
            318.000.000
          </td>

        </tr>

        <tr>

          <td>2026-05-04</td>
          <td>JV-0004</td>
          <td>Stock Adjustment Loss</td>
          <td>ADJ-0001</td>

          <td class="text-end">
            0
          </td>

          <td class="text-end">
            2.000.000
          </td>

          <td class="text-end">
            316.000.000
          </td>

        </tr>

      </tbody>

      <tfoot class="table-secondary fw-bold">

        <tr>

          <td colspan="6" class="text-end">
            SALDO AKHIR INVENTORY
          </td>

          <td class="text-end">
            316.000.000
          </td>

        </tr>

      </tfoot>

    </table>

  </div>

</div>


<!-- ========================================================= -->
<!-- STOCK VALUATION LEDGER -->
<!-- SIMPLIFIED AVERAGE COST VALUATION -->
<!-- ========================================================= -->

<div class="card card-outline card-primary">

  <!-- ========================================================= -->
  <!-- CARD HEADER -->
  <!-- ========================================================= -->
  <div class="card-header">

    <h3 class="card-title">
      Stock Valuation Ledger
    </h3>

    <div class="card-tools">

      <button class="btn btn-sm btn-outline-info">
        <i class="fas fa-filter"></i>
        Filter
      </button>

      <button class="btn btn-sm btn-outline-success">
        <i class="fas fa-file-excel"></i>
        Export
      </button>

    </div>

  </div>

  <!-- ========================================================= -->
  <!-- ITEM INFORMATION -->
  <!-- ========================================================= -->
  <div class="card-body border-bottom">

    <div class="row">

      <div class="col-md-3">
        <b>Item :</b><br>
        Laptop ACER V7
      </div>

      <div class="col-md-3">
        <b>Warehouse :</b><br>
        Gudang Utama
      </div>

      <div class="col-md-3">
        <b>Valuation Method :</b><br>
        Moving Average Cost
      </div>

      <div class="col-md-3">
        <b>Period :</b><br>
        Mei 2026
      </div>

    </div>

  </div>

  <!-- ========================================================= -->
  <!-- TABLE -->
  <!-- ========================================================= -->
<div class="card-body table-responsive p-0">
  <table class="table table-bordered table-hover table-sm">

    <thead class="table-dark text-center align-middle">
      <tr>
        <th title="Waktu terjadinya transaksi stock movement">Date</th>
        <th title="Jenis transaksi seperti Purchase, Sales, Transfer, Adjustment">Business Event</th>
        <th title="Referensi dokumen transaksi (PO, SO, TRF, ADJ, dll)">Doc Ref</th>
        <th title="Referensi jurnal akuntansi yang terbentuk dari transaksi">Journal Ref</th>
        <th title="Jumlah barang masuk (IN)">Qty In </th>
        <th title="Jumlah barang keluar (OUT)">Qty Out</th>     
        <th title="Value In = Qty In × Purchase Cost">Value In</th>
        <th title="Value Out = Qty Out × Avg Cost Active saat transaksi (COGS)">Value Out</th>
        <th title="Purchase Cost = harga beli per unit dari supplier (hanya saat IN)">Purchase Cost</th>
        <th title="HPP Cost = unit cost yang dipakai saat barang keluar (moving average cost saat transaksi)">HPP Cost</th>
        <th title="Saldo Qty = Balance Qty sebelumnya + In - Out">Balance Qty</th>
        <th title="Balance Value = akumulasi nilai stok (Value In - Value Out + saldo sebelumnya)">Balance Value</th>
        <th title="Avg Cost Active = Balance Value ÷ Balance Qty (moving average cost berjalan)">Moving Avg Cost</th>
    </tr>
</thead>

<tbody>

	<tr class="table-secondary fw-bold">
		<td colspan="10" class="text-end">OPENING BALANCE</td>
		<!-- <td class="text-end">10</td>
		<td class="text-end">0</td>
		<td class="text-end">-</td>
		<td class="text-end">-</td>
		<td class="text-end">-</td>
		<td class="text-end">-</td>
 -->		<td class="text-end">10</td>
		<td class="text-end">75.000.000</td>
		<td class="text-end">7.500.000</td>
	</tr>

	<tr>
		<td>2026-05-01</td>
		<td>Purchase Receipt</td>
		<td>PO-0001</td>
		<td>JV-0001</td>
		<td class="text-end">10</td>
		<td class="text-end">0</td>
		<td class="text-end">75.000.000</td>
		<td class="text-end">0</td>
		<td class="text-end">7.500.000</td>
		<td class="text-end">-</td>
		<td class="text-end">15</td>
		<td class="text-end">115.000.000</td>
		<td class="text-end">7.666.667</td>
	</tr>

	<tr>
		<td>2026-05-02</td>
		<td>Sales Delivery</td>
		<td>SO-0001</td>
		<td>JV-0002</td>
		<td class="text-end">0</td>
		<td class="text-end">3</td>
		<td class="text-end">0</td>
		<td class="text-end">23.000.001</td>
		<td class="text-end">-</td>
		<td class="text-end">7.666.667</td>
		<td class="text-end">12</td>
		<td class="text-end">92.000.004</td>
		<td class="text-end">7.666.667</td>
	</tr>

	<tr>
		<td>2026-05-03</td>
		<td>Transfer Out to Warehouse Branch A</td>
		<td>TRF-0001</td>
		<td>JV-0003</td>
		<td class="text-end">0</td>
		<td class="text-end">2</td>
		<td class="text-end">0</td>
		<td class="text-end">15.333.334</td>
		<td class="text-end">-</td>
		<td class="text-end">7.666.667</td>
		<td class="text-end">10</td>
		<td class="text-end">76.666.670</td>
		<td class="text-end">7.666.667</td>
	</tr>

	<tr>
		<td>2026-05-04</td>
		<td>Transfer In from Warehouse Center</td>
		<td>TRF-0002</td>
		<td>JV-0004</td>
		<td class="text-end">4</td>
		<td class="text-end">0</td>
		<td class="text-end">30.666.668</td>
		<td class="text-end">0</td>
		<td class="text-end">7.666.667</td>
		<td class="text-end">-</td>
		<td class="text-end">14</td>
		<td class="text-end">107.333.338</td>
		<td class="text-end">7.666.667</td>
	</tr>

	<tr>
		<td>2026-05-05</td>
		<td>Purchase Receipt</td>
		<td>PO-0002</td>
		<td>JV-0005</td>
		<td class="text-end">6</td>
		<td class="text-end">0</td>
		<td class="text-end">51.000.000</td>
		<td class="text-end">0</td>
		<td class="text-end">8.500.000</td>
		<td class="text-end">-</td>
		<td class="text-end">20</td>
		<td class="text-end">158.333.340</td>
		<td class="text-end">7.916.667</td>
	</tr>

	<tr>
		<td>2026-05-06</td>
		<td>Stock Adjustment Gain</td>
		<td>ADJ-0001</td>
		<td>JV-0006</td>
		<td class="text-end">1</td>
		<td class="text-end">0</td>
		<td class="text-end">7.916.667</td>
		<td class="text-end">0</td>
		<td class="text-end">7.916.667</td>
		<td class="text-end">-</td>
		<td class="text-end">21</td>
		<td class="text-end">166.250.007</td>
		<td class="text-end">7.916.667</td>
	</tr>

	<tr>
		<td>2026-05-07</td>
		<td>Stock Adjustment Loss</td>
		<td>ADJ-0002</td>
		<td>JV-0007</td>
		<td class="text-end">0</td>
		<td class="text-end">2</td>
		<td class="text-end">0</td>
		<td class="text-end">15.833.334</td>
		<td class="text-end">-</td>
		<td class="text-end">7.916.667</td>
		<td class="text-end">19</td>
		<td class="text-end">150.416.673</td>
		<td class="text-end">7.916.667</td>
	</tr>

	<tr>
		<td>2026-05-08</td>
		<td>Sales Return</td>
		<td>SR-0001</td>
		<td>JV-0008</td>
		<td class="text-end">1</td>
		<td class="text-end">0</td>
		<td class="text-end">7.916.667</td>
		<td class="text-end">0</td>
		<td class="text-end">7.916.667</td>
		<td class="text-end">-</td>
		<td class="text-end">20</td>
		<td class="text-end">158.333.340</td>
		<td class="text-end">7.916.667</td>
	</tr>

	<tr>
		<td>2026-05-09</td>
		<td>Purchase Return</td>
		<td>PR-0001</td>
		<td>JV-0009</td>
		<td class="text-end">0</td>
		<td class="text-end">1</td>
		<td class="text-end">0</td>
		<td class="text-end">7.916.667</td>
		<td class="text-end">-</td>
		<td class="text-end">7.916.667</td>
		<td class="text-end">19</td>
		<td class="text-end">150.416.673</td>
		<td class="text-end">7.916.667</td>
	</tr>

	<tr>
		<td>2026-05-10</td>
		<td>Production Usage</td>
		<td>PRD-0001</td>
		<td>JV-0010</td>
		<td class="text-end">0</td>
		<td class="text-end">4</td>
		<td class="text-end">0</td>
		<td class="text-end">31.666.668</td>
		<td class="text-end">-</td>
		<td class="text-end">7.916.667</td>
		<td class="text-end">15</td>
		<td class="text-end">118.750.005</td>
		<td class="text-end">7.916.667</td>
	</tr>

</tbody>

<tfoot class="table-secondary fw-bold">
	<tr>
		<td colspan="10" class="text-end">CLOSING BALANCE</td>
		<!-- <td class="text-end">15</td>
		<td class="text-end">4</td>
		<td class="text-end">172.500.000</td>
		<td class="text-end">118.750.005</td>
		<td class="text-end">-</td>
		<td class="text-end">7.916.667</td> -->
		<td class="text-end">15</td>
		<td class="text-end">118.750.005</td>
		<td class="text-end">7.761.438</td>
	</tr>
</tfoot>

  </table>
</div>






<!-- ========================================================= -->
<!-- BUSINESS EVENT STOCK MOVEMENT MATRIX -->
<!-- ========================================================= -->

<div class="card card-outline card-dark">

  <div class="card-header">

    <h3 class="card-title">
      Business Event Stock Movement Matrix
    </h3>

  </div>

  <div class="card-body table-responsive p-0">

    <table class="table table-bordered table-hover table-sm">

      <thead class="table-dark text-center align-middle">

        <tr>

          <th>Aspect</th>

          <th>IN</th>

          <th>OUT</th>

        </tr>

      </thead>

      <tbody>

        <tr>

          <td>
            Purchase
          </td>

          <td>
            Purchase Receipt / Barang diterima dari supplier
          </td>

          <td>
            Purchase Return / Retur pembelian ke supplier
          </td>

        </tr>

        <tr>

          <td>
            Sales
          </td>

          <td>
            Sales Return / Barang dikembalikan customer
          </td>

          <td>
            Sales Delivery / Barang dikirim ke customer
          </td>

        </tr>

        <tr>

          <td>
            Warehouse Transfer
          </td>

          <td>
            Transfer In / Barang masuk dari gudang lain
          </td>

          <td>
            Transfer Out / Barang keluar ke gudang lain
          </td>

        </tr>

        <tr>

          <td>
            Stock Adjustment
          </td>

          <td>
            Adjustment Gain / Kelebihan stok fisik
          </td>

          <td>
            Adjustment Loss / Kehilangan atau kerusakan stok
          </td>

        </tr>

        <tr>

          <td>
            Stock Opname
          </td>

          <td>
            Hasil opname lebih dari saldo sistem
          </td>

          <td>
            Hasil opname kurang dari saldo sistem
          </td>

        </tr>

        <tr>

          <td>
            Production
          </td>

          <td>
            Finished Goods Receipt / Hasil produksi masuk
          </td>

          <td>
            Production Usage / Pemakaian bahan baku
          </td>

        </tr>

        <tr>

          <td>
            Consignment
          </td>

          <td>
            Consignment Return / Barang konsinyasi kembali
          </td>

          <td>
            Consignment Release / Barang konsinyasi keluar
          </td>

        </tr>

        <tr>

          <td>
            Asset Movement
          </td>

          <td>
            Asset Return to Warehouse
          </td>

          <td>
            Asset Issue to Employee / Department
          </td>

        </tr>

      </tbody>

    </table>

  </div>

</div>






</section>

</div>

<?php include('4footer.php'); ?>


<?php include('5script.php'); ?>


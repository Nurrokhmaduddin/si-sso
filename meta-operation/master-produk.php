<!-- FILE : master-produk.php -->

<?php $page = 'master-produk'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper" style="min-height:100vh;">

<!-- ===================================================== -->
<!-- HEADER -->
<!-- ===================================================== -->
<section class="content-header">
  <div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center flex-wrap">

      <div>
        <h3 class="mb-1">
          Master Data Produk
          <button class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
            <i class="fas fa-question-circle"></i>
          </button>
        </h3>

        <p class="text-muted mb-0">
          Data utama seluruh produk/barang dagang: SKU, kategori, harga, dan status stok.
        </p>
      </div>

      <div>
        <button class="btn btn-primary btn-sm">
          <i class="fas fa-plus mr-1"></i>
          Tambah Produk
        </button>

        <button class="btn btn-success btn-sm">
          <i class="fas fa-file-excel mr-1"></i>
          Export
        </button>
      </div>

    </div>

  </div>
</section>

<!-- ===================================================== -->
<!-- CONTENT -->
<!-- ===================================================== -->
<section class="content">
<div class="container-fluid">

<style>

.master-card{
  border-radius:14px;
  border:none;
  box-shadow:0 2px 10px rgba(0,0,0,.08);
  margin-bottom:20px;
}

.summary-box{
  border-radius:12px;
  padding:18px;
  color:#fff;
  position:relative;
  overflow:hidden;
}

.summary-box h3{
  margin:0;
  font-weight:700;
}

.summary-box i{
  position:absolute;
  right:12px;
  bottom:10px;
  font-size:42px;
  opacity:.15;
}

.table thead th{
  white-space:nowrap;
  font-size:13px;
}

.table tbody td{
  font-size:13px;
  vertical-align:middle;
}

.badge-soft{
  font-size:11px;
  padding:5px 8px;
  border-radius:8px;
}

</style>

<!-- ===================================================== -->
<!-- KPI SUMMARY -->
<!-- ===================================================== -->
<div class="row">

  <div class="col-md-3">
    <div class="summary-box bg-primary">
      <h3>1.248</h3>
      <p>Total Produk</p>
      <i class="fas fa-box"></i>
    </div>
  </div>

  <div class="col-md-3">
    <div class="summary-box bg-success">
      <h3>876</h3>
      <p>Active SKU</p>
      <i class="fas fa-barcode"></i>
    </div>
  </div>

  <div class="col-md-3">
    <div class="summary-box bg-warning text-dark">
      <h3>132</h3>
      <p>Low Stock</p>
      <i class="fas fa-exclamation-triangle"></i>
    </div>
  </div>

  <div class="col-md-3">
    <div class="summary-box bg-danger">
      <h3>48</h3>
      <p>Inactive Product</p>
      <i class="fas fa-times-circle"></i>
    </div>
  </div>

</div>

<!-- ===================================================== -->
<!-- TABLE MASTER PRODUK -->
<!-- ===================================================== -->
<div class="card master-card">

  <div class="card-header bg-dark text-white">
    Data Master Produk (Inventory)
  </div>

  <div class="card-body table-responsive">

    <table class="table table-bordered table-hover align-middle">

      <thead class="table-dark text-center">
        <tr>
          <th>SKU</th>
          <th>Nama Produk</th>
          <th>Kategori</th>
          <th>Satuan</th>
          <th>Harga Beli</th>
          <th>Harga Jual</th>
          <th>Stok</th>
          <th>Status</th>
          <th>Last Update</th>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td>FG-001</td>
          <td>Industrial Pump X1</td>
          <td>Mechanical</td>
          <td>Unit</td>
          <td>Rp 1.200.000</td>
          <td>Rp 1.750.000</td>
          <td>120</td>
          <td><span class="badge bg-success">Active</span></td>
          <td>2026-05-06</td>
        </tr>

        <tr>
          <td>FG-002</td>
          <td>Valve Steel A2</td>
          <td>Spare Part</td>
          <td>Pcs</td>
          <td>Rp 320.000</td>
          <td>Rp 450.000</td>
          <td>45</td>
          <td><span class="badge bg-warning text-dark">Low Stock</span></td>
          <td>2026-05-05</td>
        </tr>

        <tr>
          <td>FG-003</td>
          <td>Motor Gear 2HP</td>
          <td>Electrical</td>
          <td>Unit</td>
          <td>Rp 2.800.000</td>
          <td>Rp 3.500.000</td>
          <td>0</td>
          <td><span class="badge bg-danger">Out of Stock</span></td>
          <td>2026-05-04</td>
        </tr>

      </tbody>

    </table>

  </div>

</div>

</div>
</section>

</div>

<?php include('4footer.php'); ?>
<!-- Modal Bantuan -->
<div class="modal fade" id="modalBantuan" tabindex="-1" aria-labelledby="modalBantuanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">

      <!-- HEADER -->
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalBantuanLabel">
          Penjelasan Istilah SKU (Stock Keeping Unit)
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- BODY -->
      <div class="modal-body">

        <h6 class="fw-bold">Apa itu SKU?</h6>
        <p>
          <b>SKU (Stock Keeping Unit)</b> adalah kode unik yang digunakan untuk mengidentifikasi setiap item produk
          dalam sistem inventory atau gudang. SKU berfungsi sebagai identitas teknis barang di dalam sistem,
          bukan sekadar nama produk.
        </p>

        <hr>

        <h6 class="fw-bold">Contoh sederhana</h6>
        <ul>
          <li><b>Nama Produk:</b> Beras Premium 5kg</li>
          <li><b>SKU:</b> BRS-PRM-5KG-001</li>
        </ul>

        <p>
          Walaupun nama produk bisa sama, SKU bisa berbeda jika ada perbedaan:
        </p>

        <ul>
          <li>Ukuran (5kg, 10kg, dll)</li>
          <li>Varian (premium, medium, ekonomis)</li>
          <li>Warna / spesifikasi</li>
          <li>Supplier / batch produksi</li>
        </ul>

        <hr>

        <h6 class="fw-bold">Fungsi SKU dalam sistem dagang</h6>
        <ul>
          <li>Identifikasi unik setiap barang</li>
          <li>Menghindari duplikasi data produk</li>
          <li>Mempermudah tracking stok di gudang</li>
          <li>Mempercepat transaksi (sales, pembelian, delivery)</li>
          <li>Digunakan dalam barcode atau QR code</li>
          <li>Kunci utama relasi database inventory</li>
        </ul>

        <hr>

        <h6 class="fw-bold">Cara berpikir SKU</h6>
        <p>
          <b>Nama Produk</b> digunakan untuk manusia (mudah dibaca), sedangkan
          <b>SKU</b> digunakan oleh sistem (unik dan konsisten).
        </p>

        <div class="alert alert-info mb-0">
          Dalam sistem ERP atau gudang, SKU adalah “ID utama” yang memastikan setiap transaksi barang selalu tepat.
        </div>

      </div>

      <!-- FOOTER -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Tutup
        </button>
      </div>

    </div>
  </div>
</div>
<?php include('5script.php'); ?>
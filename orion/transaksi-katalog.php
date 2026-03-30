<?php $page = 'transaksi_katalog'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php
// Include sidebar sesuai peran
$sidebar_file = "3sidebar-{$role}.php";
if (file_exists($sidebar_file)) {
	include($sidebar_file);
} else {
	include('3sidebar.php');
}
?>


<div class="content-wrapper" style="min-height: 626.4px;">    

	<section class="content-header">
		<div class="container-fluid">
			<h3 class="mb-0"> Katalog Produk
				<button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
				</button>
			</h3>
			<p class="text-muted mb-0">Katalog Produk untuk Sales Order = pencatatan permintaan customer oleh sales.</p>
		</div>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Main row -->
			<div class="row">
				<div class="col-md-12">
					<!-- ========== CARD : Filter & Export ========== -->
          <!-- <div class="card">
            <div class="card-body ">
              <div class="row">

                <div class="col-md-6">
                  <b>Gudang:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Toko:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Sales:</b> Semua
                </div>
                <div class="col-md-6">
                  <b>Status:</b> Semua
                </div>

              </div>
            </div>

             <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>    
              </div>
            </div>
            
          </div> -->


          <!-- ========== CARD : grid  Granular ========== -->

<style>
	body {
		background: #f6f7fb;
		/*font-family: 'Inter', sans-serif;*/
	}

	.topbar {
		position: sticky;
		top: 0;
		z-index: 1000;
		/*background: #fff;*/
		border-bottom: 1px solid #eee;
		/*padding: 12px 16px;*/
	}

	.product-card {
		border-radius: 14px;
		border: none;
		transition: 0.2s;
		background: #fff;
	}

	.product-card:hover {
		transform: translateY(-3px);
		box-shadow: 0 8px 20px rgba(0,0,0,0.08);
	}

	.product-img {
		height: 140px;
		object-fit: contain;
		padding: 10px;
	}

	.product-title {
		font-size: 14px;
		font-weight: 600;
		height: 38px;
		overflow: hidden;
	}

	.product-meta {
		font-size: 12px;
		color: #888;
	}

	.price {
		color: #16a34a;
		font-weight: 600;
		font-size: 15px;
	}

	.btn-cart {
		border-radius: 10px;
		font-size: 13px;
	}

	.filter-select {
		font-size: 13px;
	}

	.search-input {
		border-radius: 10px;
		font-size: 14px;
	}
</style>          
<!-- 🔷 TOPBAR -->
<div class="topbar">
	<div class="container-fluid">
		<div class="row g-2 align-items-center">

			<div class="col-md-4">
				<input type="text" class="form-control search-input" placeholder="🔍 Cari produk...">
			</div>

			<div class="col-md-2">
				<select class="form-select filter-select">
					<!-- <option>Pilih Merek</option> -->
					<option>Semua Merek</option>
					<option>Hawaii</option>
					<option>Izumi</option>
				</select>
			</div>

			<div class="col-md-2">
				<select class="form-select filter-select">
					<!-- <option>Urutkan Jumlah</option> -->
					<option>Urutkan Terbanyak</option>
					<option>Urutkan Tersedikit</option>
				</select>
			</div>

			<div class="col-md-2">
				<select class="form-select filter-select">
					<!-- <option>Urutkan Waktu</option> -->
					<option>Terbaru Ditambahkan</option>
					<option>Terlama Ditambahkan</option>
				</select>
			</div>

			<div class="col-md-2 text-end">
				<!-- <button 
				class="btn btn-success btn-sm"
				data-bs-toggle="modal"
				data-bs-target="#modalKeranjang"
				>
				🛒 Keranjang (3)
				</button> -->
				<button 
				class="btn btn-success btn-sm btn-block"
				data-bs-toggle="modal"
				data-bs-target="#modalKeranjangLarge"
				>
				🛒 Keranjang (3)
				</button>
			</div>

		</div>
	</div>
</div>

<!-- 🔷 KATALOG -->
<div class="container-fluid mt-3">
	<div class="row g-3">

	<!-- ITEM -->
	<div class="col-6 col-md-3 col-lg-2">
		<div class="card product-card h-100">
			<img src="https://via.placeholder.com/150" class="product-img" alt="">
			<div class="card-body p-2 d-flex flex-column">
				<div class="product-title">
					Cetakan Es Kirari HWI (5441)
				</div>
				<div class="product-meta mt-1">
					HAWAII • Stok: 120
				</div>
				<div class="price mt-2">
					Rp 13.900
				</div>
				<div class="mt-auto d-grid">
					<button 
					class="btn btn-outline-primary btn-sm btn-cart"
					data-bs-toggle="modal"
					data-bs-target="#modalTambah"
					>
					+ Keranjang
					</button>
				</div>
			</div>
		</div>
	</div>

	<!-- DUPLIKASI ITEM -->
	<div class="col-6 col-md-3 col-lg-2">
		<div class="card product-card h-100">
			<img src="https://via.placeholder.com/150" class="product-img" alt="">
			<div class="card-body p-2 d-flex flex-column">
				<div class="product-title">Irush Soup Dino Ladle</div>
				<div class="product-meta mt-1">HAWAII • Stok: 276</div>
				<div class="price mt-2">Rp 3.400</div>
				<div class="mt-auto d-grid">
					<button 
					class="btn btn-outline-primary btn-sm btn-cart"
					data-bs-toggle="modal"
					data-bs-target="#modalTambah"
					>
					+ Keranjang
					</button>
				</div>
			</div>
		</div>
	</div>
	<!-- ITEM 2 -->
	<div class="col-6 col-md-3 col-lg-2">
	  <div class="card product-card h-100">
	    <img src="https://via.placeholder.com/150" class="product-img" alt="">
	    <div class="card-body p-2 d-flex flex-column">
	      <div class="product-title">
	        Cetakan Es Kirari HWI (5442)
	      </div>
	      <div class="product-meta mt-1">
	        HAWAII • Stok: 95
	      </div>
	      <div class="price mt-2">
	        Rp 14.200
	      </div>
	      <div class="mt-auto d-grid">
	        <button class="btn btn-outline-primary btn-sm btn-cart" data-bs-toggle="modal" data-bs-target="#modalTambah">
	          + Keranjang
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- ITEM 3 -->
	<div class="col-6 col-md-3 col-lg-2">
	  <div class="card product-card h-100">
	    <img src="https://via.placeholder.com/150" class="product-img" alt="">
	    <div class="card-body p-2 d-flex flex-column">
	      <div class="product-title">
	        Cetakan Es Kirari HWI (5443)
	      </div>
	      <div class="product-meta mt-1">
	        HAWAII • Stok: 80
	      </div>
	      <div class="price mt-2">
	        Rp 15.000
	      </div>
	      <div class="mt-auto d-grid">
	        <button class="btn btn-outline-primary btn-sm btn-cart" data-bs-toggle="modal" data-bs-target="#modalTambah">
	          + Keranjang
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- ITEM 4 -->
	<div class="col-6 col-md-3 col-lg-2">
	  <div class="card product-card h-100">
	    <img src="https://via.placeholder.com/150" class="product-img" alt="">
	    <div class="card-body p-2 d-flex flex-column">
	      <div class="product-title">
	        Cetakan Es Kirari HWI (5444)
	      </div>
	      <div class="product-meta mt-1">
	        HAWAII • Stok: 110
	      </div>
	      <div class="price mt-2">
	        Rp 13.700
	      </div>
	      <div class="mt-auto d-grid">
	        <button class="btn btn-outline-primary btn-sm btn-cart" data-bs-toggle="modal" data-bs-target="#modalTambah">
	          + Keranjang
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- ITEM 5 -->
	<div class="col-6 col-md-3 col-lg-2">
	  <div class="card product-card h-100">
	    <img src="https://via.placeholder.com/150" class="product-img" alt="">
	    <div class="card-body p-2 d-flex flex-column">
	      <div class="product-title">
	        Cetakan Es Kirari HWI (5445)
	      </div>
	      <div class="product-meta mt-1">
	        HAWAII • Stok: 75
	      </div>
	      <div class="price mt-2">
	        Rp 14.500
	      </div>
	      <div class="mt-auto d-grid">
	        <button class="btn btn-outline-primary btn-sm btn-cart" data-bs-toggle="modal" data-bs-target="#modalTambah">
	          + Keranjang
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- ITEM 6 -->
	<div class="col-6 col-md-3 col-lg-2">
	  <div class="card product-card h-100">
	    <img src="https://via.placeholder.com/150" class="product-img" alt="">
	    <div class="card-body p-2 d-flex flex-column">
	      <div class="product-title">
	        Cetakan Es Kirari HWI (5446)
	      </div>
	      <div class="product-meta mt-1">
	        HAWAII • Stok: 130
	      </div>
	      <div class="price mt-2">
	        Rp 13.900
	      </div>
	      <div class="mt-auto d-grid">
	        <button class="btn btn-outline-primary btn-sm btn-cart" data-bs-toggle="modal" data-bs-target="#modalTambah">
	          + Keranjang
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- ITEM 7 -->
	<div class="col-6 col-md-3 col-lg-2">
	  <div class="card product-card h-100">
	    <img src="https://via.placeholder.com/150" class="product-img" alt="">
	    <div class="card-body p-2 d-flex flex-column">
	      <div class="product-title">
	        Cetakan Es Kirari HWI (5447)
	      </div>
	      <div class="product-meta mt-1">
	        HAWAII • Stok: 60
	      </div>
	      <div class="price mt-2">
	        Rp 14.800
	      </div>
	      <div class="mt-auto d-grid">
	        <button class="btn btn-outline-primary btn-sm btn-cart" data-bs-toggle="modal" data-bs-target="#modalTambah">
	          + Keranjang
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- ITEM 8 -->
	<div class="col-6 col-md-3 col-lg-2">
	  <div class="card product-card h-100">
	    <img src="https://via.placeholder.com/150" class="product-img" alt="">
	    <div class="card-body p-2 d-flex flex-column">
	      <div class="product-title">
	        Cetakan Es Kirari HWI (5448)
	      </div>
	      <div class="product-meta mt-1">
	        HAWAII • Stok: 85
	      </div>
	      <div class="price mt-2">
	        Rp 13.600
	      </div>
	      <div class="mt-auto d-grid">
	        <button class="btn btn-outline-primary btn-sm btn-cart" data-bs-toggle="modal" data-bs-target="#modalTambah">
	          + Keranjang
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- ITEM 9 -->
	<div class="col-6 col-md-3 col-lg-2">
	  <div class="card product-card h-100">
	    <img src="https://via.placeholder.com/150" class="product-img" alt="">
	    <div class="card-body p-2 d-flex flex-column">
	      <div class="product-title">
	        Cetakan Es Kirari HWI (5449)
	      </div>
	      <div class="product-meta mt-1">
	        HAWAII • Stok: 100
	      </div>
	      <div class="price mt-2">
	        Rp 14.000
	      </div>
	      <div class="mt-auto d-grid">
	        <button class="btn btn-outline-primary btn-sm btn-cart" data-bs-toggle="modal" data-bs-target="#modalTambah">
	          + Keranjang
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- ITEM 10 -->
	<div class="col-6 col-md-3 col-lg-2">
	  <div class="card product-card h-100">
	    <img src="https://via.placeholder.com/150" class="product-img" alt="">
	    <div class="card-body p-2 d-flex flex-column">
	      <div class="product-title">
	        Cetakan Es Kirari HWI (5450)
	      </div>
	      <div class="product-meta mt-1">
	        HAWAII • Stok: 120
	      </div>
	      <div class="price mt-2">
	        Rp 14.200
	      </div>
	      <div class="mt-auto d-grid">
	        <button class="btn btn-outline-primary btn-sm btn-cart" data-bs-toggle="modal" data-bs-target="#modalTambah">
	          + Keranjang
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- ITEM 11 -->
	<div class="col-6 col-md-3 col-lg-2">
	  <div class="card product-card h-100">
	    <img src="https://via.placeholder.com/150" class="product-img" alt="">
	    <div class="card-body p-2 d-flex flex-column">
	      <div class="product-title">
	        Cetakan Es Kirari HWI (5451)
	      </div>
	      <div class="product-meta mt-1">
	        HAWAII • Stok: 90
	      </div>
	      <div class="price mt-2">
	        Rp 14.500
	      </div>
	      <div class="mt-auto d-grid">
	        <button class="btn btn-outline-primary btn-sm btn-cart" data-bs-toggle="modal" data-bs-target="#modalTambah">
	          + Keranjang
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- ITEM 12 -->
	<div class="col-6 col-md-3 col-lg-2">
	  <div class="card product-card h-100">
	    <img src="https://via.placeholder.com/150" class="product-img" alt="">
	    <div class="card-body p-2 d-flex flex-column">
	      <div class="product-title">
	        Cetakan Es Kirari HWI (5452)
	      </div>
	      <div class="product-meta mt-1">
	        HAWAII • Stok: 115
	      </div>
	      <div class="price mt-2">
	        Rp 13.800
	      </div>
	      <div class="mt-auto d-grid">
	        <button class="btn btn-outline-primary btn-sm btn-cart" data-bs-toggle="modal" data-bs-target="#modalTambah">
	          + Keranjang
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- ITEM 13 -->
	<div class="col-6 col-md-3 col-lg-2">
	  <div class="card product-card h-100">
	    <img src="https://via.placeholder.com/150" class="product-img" alt="">
	    <div class="card-body p-2 d-flex flex-column">
	      <div class="product-title">
	        Cetakan Es Kirari HWI (5453)
	      </div>
	      <div class="product-meta mt-1">
	        HAWAII • Stok: 80
	      </div>
	      <div class="price mt-2">
	        Rp 14.100
	      </div>
	      <div class="mt-auto d-grid">
	        <button class="btn btn-outline-primary btn-sm btn-cart" data-bs-toggle="modal" data-bs-target="#modalTambah">
	          + Keranjang
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- ITEM 14 -->
	<div class="col-6 col-md-3 col-lg-2">
	  <div class="card product-card h-100">
	    <img src="https://via.placeholder.com/150" class="product-img" alt="">
	    <div class="card-body p-2 d-flex flex-column">
	      <div class="product-title">
	        Cetakan Es Kirari HWI (5454)
	      </div>
	      <div class="product-meta mt-1">
	        HAWAII • Stok: 105
	      </div>
	      <div class="price mt-2">
	        Rp 13.900
	      </div>
	      <div class="mt-auto d-grid">
	        <button class="btn btn-outline-primary btn-sm btn-cart" data-bs-toggle="modal" data-bs-target="#modalTambah">
	          + Keranjang
	        </button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- ITEM 15 -->
	<div class="col-6 col-md-3 col-lg-2">
	  <div class="card product-card h-100">
	    <img src="https://via.placeholder.com/150" class="product-img" alt="">
	    <div class="card-body p-2 d-flex flex-column">
	      <div class="product-title">
	        Cetakan Es Kirari HWI (5455)
	      </div>
	      <div class="product-meta mt-1">
	        HAWAII • Stok: 95
	      </div>
	      <div class="price mt-2">
	        Rp 14.300
	      </div>
	      <div class="mt-auto d-grid">
	        <button class="btn btn-outline-primary btn-sm btn-cart" data-bs-toggle="modal" data-bs-target="#modalTambah">
	          + Keranjang
	        </button>
	      </div>
	    </div>
	  </div>
	</div>






</div>
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
		<div class="modal-content rounded-3 shadow">
			<div class="modal-header bg-primary text-white">
				<h5 class="modal-title" id="modalTambahDataLabel">Tambah Data</h5>
				<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="modal-body">

					<!-- Informasi -->
					<div class="alert alert-warning mb-3 py-2" role="alert" style="font-size: 0.9rem;">
						<i class="fas fa-info-circle me-1"></i>
						<strong>Catatan:</strong> Semua field yang diberi tanda <span class="text-danger">*</span> wajib diisi.
					</div>

					<!-- Form Inputs -->
					<div class="mb-3">
						<label for="username" class="form-label">NIM <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
					</div>

					<div class="mb-3">
						<label for="displayname" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="displayname" name="displayname" placeholder="Masukkan Nama Lengkap" required>
					</div>

					<div class="mb-3">
						<label for="email" class="form-label">Email <span class="text-danger">*</span></label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
					</div>

					<div class="mb-3">
						<label for="hp" class="form-label">Nomor HP <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="hp" name="hp" placeholder="Masukkan Nomor HP" required>
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
						<label for="angkatan" class="form-label">Peminatan</label>
						<select name="angkatan" id="angkatan" class="form-select">
							<option value="">-- Pilih Peminatan --</option>
							<option value="2025">A</option>
							<option value="2024">B</option>
							<option value="2023">C</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="status" class="form-label">Status <span class="text-danger">*</span></label>
						<select class="form-select" id="status" name="status" required>
							<option value="">-- Pilih Status --</option>
							<option value="Aktif">Aktif</option>
							<option value="NonAktif">NonAktif</option>
							<option value="Cuti">Cuti</option>
							<option value="Skors">Skors</option>
							<option value="PassedOut">Passed Out</option>
							<option value="DropOut">Drop Out</option>
							<option value="Lulus">Lulus</option>
						</select>
					</div>

					<div class="mb-3">
						<label for="foto" class="form-label">Foto <span class="text-danger">*</span></label>
						<input type="file" class="form-control" id="foto" name="foto" required>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Simpan Data</button>
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
				<p>
					Ini adalah penjelasan panjang tentang tabel. Anda bisa menuliskan informasi detail,
					petunjuk penggunaan tombol, cara membaca data, dan tips penting lainnya di sini.
				</p>
				<p>
					Misalnya:  
					- Tombol Filter digunakan untuk memfilter data berdasarkan kolom.  
					- Tombol Impor digunakan untuk memasukkan data dari file Excel.  
					- Tombol Reset akan menghapus semua data di tabel, gunakan dengan hati-hati.  
				</p>
				<p>
					Anda bisa menambahkan banyak paragraf atau daftar sesuai kebutuhan.
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalResetData" tabindex="-1" aria-labelledby="modalResetDataLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content rounded-3 shadow">

			<div class="modal-header bg-danger text-white">
				<h5 class="modal-title">Konfirmasi Reset Data</h5>
				<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
			</div>

			<form action="proses_hapus_akun.php" method="POST">
				<div class="modal-body text-center">

					<!-- ID disimpan sebagai hidden input -->
					<input type="hidden" name="id_akun" id="hapus_id_akun">

					<p class="fs-5">Apakah Anda yakin ingin menghapus semua data ini?</p>

					<!-- Tampilkan kode dan nama akun -->
         <!--  <p class="text-muted mb-0 d-flex justify-content-center gap-2">
            <span id="hapus_kode_akun"></span>
            <span>|</span>
            <strong id="hapus_nama_akun"></strong>
          </p> -->

      </div>

      <div class="modal-footer justify-content-center">
      	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
      	<button type="submit" class="btn btn-danger">Hapus</button>
      </div>

  </form>
</div>
</div>
</div>

<div class="modal fade" id="modalTambah" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="modal-title">Tambah ke Keranjang</h6>
				<button class="btn-close" data-bs-dismiss="modal"></button>
			</div>

			<div class="modal-body">

				<div class="d-flex gap-3">
					<img src="https://via.placeholder.com/80" class="rounded" width="80">

					<div>
						<div class="fw-semibold">Cetakan Es Kirari</div>
						<div class="text-muted small">HAWAII • Stok 120</div>
						<div class="text-success fw-semibold mt-1">Rp 13.900</div>
					</div>
				</div>

				<hr>

				<label class="small mb-1">Qty</label>
				<input type="number" class="form-control" value="1" min="1">

			</div>

			<div class="modal-footer">
				<button class="btn btn-light btn-sm" data-bs-dismiss="modal">Batal</button>
				<button class="btn btn-primary btn-sm">
					+ Tambahkan
				</button>
			</div>

		</div>
	</div>
</div>



<!-- MODAL KERANJANG -->
<div class="modal fade" id="modalKeranjang" tabindex="-1">
	<div class="modal-dialog modal-lg modal-dialog-scrollable">
		<div class="modal-content" style="border-radius:14px;">

			<!-- HEADER -->
			<div class="modal-header">
				<h6 class="modal-title fw-semibold">Keranjang Sales Order</h6>
				<button class="btn-close" data-bs-dismiss="modal"></button>
			</div>

			<div class="modal-body">

				<!-- 🔶 INFORMASI ORDER -->
				<div class="mb-4">
					<div class="fw-semibold mb-2">Informasi Pesanan</div>

					<div class="row g-2">

						<div class="col-md-6">
							<label class="small">Lokasi Gudang <span class="text-danger">*</span></label>
							<select class="form-select form-select-sm">
								<option value="">- Pilih Gudang -</option>
								<option>Purwokerto</option>
								<option>Jakarta</option>
							</select>
						</div>

						<div class="col-md-6">
							<label class="small">Tanggal PO <span class="text-danger">*</span></label>
							<input type="date" class="form-control form-control-sm" value="2026-03-27">
						</div>

						<div class="col-md-6">
							<label class="small">Toko <span class="text-danger">*</span></label>
							<select class="form-select form-select-sm">
								<option value="">- Pilih Toko -</option>
								<option>Depo Pelita Sokaraja</option>
								<option>Gardena Magelang</option>
							</select>
						</div>

						<div class="col-md-6">
							<label class="small">Sales</label>
							<input type="text" class="form-control form-control-sm" value="ANDRE" readonly>
						</div>

					</div>
				</div>

				<hr>

				<!-- 🔶 LIST ITEM -->
				<div>
					<div class="fw-semibold mb-2">Daftar Produk</div>

					<!-- ITEM -->
					<div class="d-flex align-items-center mb-3 border-bottom pb-2">

						<img src="https://via.placeholder.com/60" class="rounded me-3">

						<div class="flex-grow-1">
							<div class="fw-semibold small">Cetakan Es Kirari</div>
							<div class="text-muted small">Rp 13.900</div>
						</div>

						<input type="number" value="2" min="1"
						class="form-control form-control-sm me-2"
						style="width:70px">

						<div class="fw-semibold me-3">Rp 27.800</div>

						<button class="btn btn-sm btn-outline-danger">
							✕
						</button>

					</div>

					<!-- ITEM -->
					<div class="d-flex align-items-center mb-3 border-bottom pb-2">

						<img src="https://via.placeholder.com/60" class="rounded me-3">

						<div class="flex-grow-1">
							<div class="fw-semibold small">Irush Soup Dino</div>
							<div class="text-muted small">Rp 3.400</div>
						</div>

						<input type="number" value="5" min="1"
						class="form-control form-control-sm me-2"
						style="width:70px">

						<div class="fw-semibold me-3">Rp 17.000</div>

						<button class="btn btn-sm btn-outline-danger">
							✕
						</button>

					</div>

				</div>

			</div>

			<!-- FOOTER -->
			<div class="modal-footer d-flex justify-content-between">

				<div>
					<div class="small text-muted">Total</div>
					<div class="fw-bold text-success">Rp 44.800</div>
				</div>

				<div>
					<button class="btn btn-light btn-sm" data-bs-dismiss="modal">
						Tutup
					</button>

					<button class="btn btn-success btn-sm">
						Submit Order
					</button>
				</div>

			</div>

		</div>
	</div>
</div>






<!-- Modal Keranjang Besar -->
<div class="modal fade" id="modalKeranjangLarge" tabindex="-1">
	<div class="modal-dialog modal-xl modal-dialog-scrollable">
		<div class="modal-content" style="border-radius:14px; max-height: 90vh;">

			<!-- HEADER -->
			<div class="modal-header sticky-top bg-white" style="z-index:10;">
				<h5 class="modal-title">Keranjang Sales Order</h5>
				<button class="btn-close" data-bs-dismiss="modal"></button>
			</div>

			<div class="modal-body p-3 d-flex flex-column" style="height: calc(90vh - 120px);">

				<!-- FORM IDENTITAS ORDER -->
				<div class="mb-3 border-bottom pb-2">
					<div class="row g-2">
						<div class="col-md-3">
							<label for="gudang" class="form-label small fw-semibold">Lokasi Gudang *</label>
							<select id="gudang" class="form-select form-select-sm" disabled>
								<option value="">- pilih gudang -</option>
								<option value="g1">Gudang 1</option>
								<option value="g2" selected>Purwokerto</option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="tanggalPO" class="form-label small fw-semibold">Tanggal PO *</label>
							<input type="date" id="tanggalPO" class="form-control form-control-sm" value="2026-03-27">
						</div>
						<div class="col-md-3">
							<label for="toko" class="form-label small fw-semibold">Toko *</label>
							<select class="form-select form-select-sm">
								<option value="">- Pilih Toko -</option>
								<option>Depo Pelita Sokaraja</option>
								<option>Gardena Magelang</option>
							</select>
						</div>
						<div class="col-md-3">
							<label class="small">Sales</label>
							<input type="text" class="form-control form-control-sm" value="ANDRE" readonly>
						</div>
					</div>
				</div>

				<!-- FILTER & SEARCH -->
				<input type="search" id="filterKeranjang" class="form-control form-control-sm mb-2" placeholder="Cari produk dalam keranjang...">

				<!-- DAFTAR ITEM (scrollable) -->
				<div class="keranjang-list flex-grow-1 overflow-auto border rounded p-2" style="max-height: 100%;">
					<!-- Contoh item compact -->
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari</div>
						<input type="number" value="3" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 41.700</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari</div>
						<input type="number" value="3" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 41.700</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 2</div>
						<input type="number" value="2" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 42.000</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 3</div>
						<input type="number" value="1" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 39.500</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 3</div>
						<input type="number" value="1" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 39.500</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 3</div>
						<input type="number" value="1" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 39.500</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 3</div>
						<input type="number" value="1" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 39.500</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 3</div>
						<input type="number" value="1" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 39.500</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 3</div>
						<input type="number" value="1" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 39.500</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 3</div>
						<input type="number" value="1" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 39.500</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 3</div>
						<input type="number" value="1" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 39.500</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 3</div>
						<input type="number" value="1" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 39.500</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 3</div>
						<input type="number" value="1" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 39.500</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 3</div>
						<input type="number" value="1" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 39.500</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 3</div>
						<input type="number" value="1" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 39.500</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 3</div>
						<input type="number" value="1" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 39.500</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 3</div>
						<input type="number" value="1" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 39.500</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 3</div>
						<input type="number" value="1" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 39.500</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 3</div>
						<input type="number" value="1" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 39.500</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 3</div>
						<input type="number" value="1" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 39.500</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 3</div>
						<input type="number" value="1" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 39.500</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 3</div>
						<input type="number" value="1" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 39.500</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 3</div>
						<input type="number" value="1" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 39.500</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>

					<div class="d-flex align-items-center mb-2">
						<img src="https://via.placeholder.com/40" class="rounded me-2" alt="Produk">
						<div class="flex-grow-1 small fw-semibold">Cetakan Es Kirari 3</div>
						<input type="number" value="1" min="1" class="form-control form-control-sm me-2" style="width:60px;">
						<div class="small fw-bold text-success me-2">Rp 39.500</div>
						<button class="btn btn-sm btn-outline-danger">✕</button>
					</div>
					<!-- ... lebih dari 100 item bisa di-render di sini ... -->
				</div>
			</div>

			<!-- FOOTER -->
			<div class="modal-footer sticky-bottom bg-white d-flex justify-content-between" style="z-index:10;">
				<div>
					<small>Total</small>
					<div class="fw-bold text-success">Rp 150.000</div>
				</div>
				<div>
					<button class="btn btn-light btn-sm" data-bs-dismiss="modal">Tutup</button>
					<button class="btn btn-success btn-sm">Kirim Order</button>
				</div>
			</div>

		</div>
	</div>
</div>

<?php include('5script.php'); ?>
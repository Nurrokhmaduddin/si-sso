<?php $page = 'transaksi_preorder'; ?>
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
      <h3 class="mb-0"> Data Pre-Order (Verified/Approved)
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
        </button>
      </h3>
        <p class="text-muted mb-0">Pre-Order = pencatatan permintaan customer oleh admin, atau sales order yang sudah di Verified/Approved oleh admin.</p>
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
            <div class="card-body ">
              <div class="row">

                <div class="col-md-6">
                  <b>Gudang:</b> Semua
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
                <!-- <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                <button type="button" class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>     -->
              </div>
            </div>
            
          </div>


         <!-- ========== CARD : Tabel  Granular ========== -->
<div class="card">
  <div class="card-header d-flex align-items-center">
    <h5 class="card-title mb-0">Daftar </h5>    
    
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-sm datatables1">
        <thead>
            <tr align="center">
              <th style="min-width: 40px;">No.</th>
              <th>Lokasi Gudang</th>
              <th style="min-width: 90px;">Tanggal PO</th>
              <th style="min-width: 80px;">Nomor PO</th>
              <th style="min-width: 180px;">Toko Penerima</th>
              <th style="min-width: 100px;">Nama Sales</th>
              <th style="min-width: 100px;">Total Harga (Rp)</th>
              <th style="min-width: 60px;">Status</th>
              <th style="min-width: 200px;">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr align="center">
              <td>0</td>
              <td>Purwokerto</td>
              <td>08-Mar-2026</td>
              <td>-</td>
              <td align="left">DEPO PELITA SOKARAJA</td>
              <td align="left">OFFICE</td>                        <td align="right">9.206.500,00</td>
              <td align="center">
                <span class="badge badge-warning" title="(oleh sales)">DRAF_SALES</span>
              </td>
              <td align="center">
                <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi3641 btn-disabled" ><i class="fas fa-list"></i> Draf</button>
                <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi3639 btn-disabled transaksi-button" title="verifikasi draf_sales menjadi open" ><i class="fas fa-exchange-alt"></i> Aprove</button>
                <button type="button" class="btn btn-danger btn-sm " title="Cancel"><i class="fas fa-trash"></i></button>
              </td>
            </tr>
            <tr align="center">
              <td>1</td>
              <td>Purwokerto</td>
              <td>09-Mar-2026</td>
              <td>PO-3536</td>
              <td align="left">DEPO PELITA SOKARAJA</td>
              <td align="left">OFFICE</td>                        <td align="right">19.206.500,00</td>
              <td align="center">
                <span class="badge badge-warning">DRAF</span>
              </td>
              <td align="center">
                
                <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi3641 btn-disabled" title="Draf" onclick="detail(&#39;YTBWaE0yazIwc1Y5RU5EUkVNWE16cU8wMDAwOA&#39;, &#39;3641&#39;, &#39;trx&#39;)" fdprocessedid="23f98r"><i class="fas fa-list"></i> Draf</button>
                <button type="button" class="btn btn-danger mrg-btn btn-sm btn-aksi3641 btn-disabled" title="Cancel" onclick="cancel(&#39;3641&#39;)" fdprocessedid="vrkb59"><i class="fas fa-times"></i> Batal</button>
              </td>
            </tr>
            <tr align="center">
              <td>2</td>
              <td>Purwokerto</td>
              <td>09-Mar-2026</td>
              <td>PO-3535</td>
              <td align="left">GARDENA MAGELANG</td>
              <td align="left">ANDRE</td>                        <td align="right">5.436.400,00</td>
              <td align="center">
                <span class="badge badge-warning">DRAF</span>
              </td>
              <td align="center">
                
                <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi3640 btn-disabled" title="Draf" onclick="detail(&#39;TVZjemRqWlJOSDViZW5Jd2NESWQzYzBtbEUwMDAxMA&#39;, &#39;3640&#39;, &#39;trx&#39;)" fdprocessedid="95kxda"><i class="fas fa-list"></i> Draf</button>
                <button type="button" class="btn btn-danger mrg-btn btn-sm btn-aksi3640 btn-disabled" title="Cancel" onclick="cancel(&#39;3640&#39;)" fdprocessedid="ovm1f"><i class="fas fa-times"></i> Batal</button>
              </td>
            </tr>
            <tr align="center">
              <td>3</td>
              <td>Purwokerto</td>
              <td>04-Mar-2026</td>
              <td>PO-3486</td>
              <td align="left">REMUJUNG</td>
              <td align="left">OFFICE</td>                        <td align="right">0,00</td>
              <td align="center">
                <span class="badge badge-warning">DRAF</span>
              </td>
              <td align="center">
                
                <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi3590 btn-disabled" title="Draf" onclick="detail(&#39;VlVFemJUVXdPVXNaRFlJd1NUSWQzYzBtRzkwMDAxMA&#39;, &#39;3590&#39;, &#39;trx&#39;)" fdprocessedid="4h9s2"><i class="fas fa-list"></i> Draf</button>
                <button type="button" class="btn btn-danger mrg-btn btn-sm btn-aksi3590 btn-disabled" title="Cancel" onclick="cancel(&#39;3590&#39;)" fdprocessedid="qadaih"><i class="fas fa-times"></i> Batal</button>
              </td>
            </tr>
            <tr align="center">
              <td>4</td>
              <td>Purwokerto</td>
              <td>24-Feb-2026</td>
              <td>PO-3387</td>
              <td align="left">LARIS KLATEN</td>
              <td align="left">OFFICE</td>                        <td align="right">106.086.402,50</td>
              <td align="center">
                <span class="badge badge-warning">DRAF</span>
              </td>
              <td align="center">
                
                <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi3489 btn-disabled" title="Draf" onclick="detail(&#39;VmxCUE0xVTBsQ0tiTmRUZzVPVlV6YkswMDAwOA&#39;, &#39;3489&#39;, &#39;trx&#39;)" fdprocessedid="egholc"><i class="fas fa-list"></i> Draf</button>
                <button type="button" class="btn btn-danger mrg-btn btn-sm btn-aksi3489 btn-disabled" title="Cancel" onclick="cancel(&#39;3489&#39;)" fdprocessedid="369pl"><i class="fas fa-times"></i> Batal</button>
              </td>
            </tr>
            <tr align="center">
              <td>5</td>
              <td>Purwokerto</td>
              <td>09-Mar-2026</td>
              <td>PO-3534</td>
              <td align="left">SURYA TOSERBA CILEDUG</td>
              <td align="left">ANDRE</td>                        <td align="right">2.831.092,50</td>
              <td align="center">
                <span class="badge badge-success">OPEN</span>
              </td>
              <td align="center">
                
                <a href="https://orion-houseware.my.id/preorder/print/YVV4NU0wNDI2bWczY1p6TllPVVF6R2owMDAwOA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi3639 btn-disabled" title="Print PO" fdprocessedid="u2w3z8"><i class="fas fa-print"></i></button></a>
                <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi3639 btn-disabled" title="Detail" onclick="detail(&#39;YlZSd00wRTIxc3Nrc1J6Tm1PWG96QUgwMDAwOA&#39;, &#39;3639&#39;, &#39;&#39;)" fdprocessedid="4kjc8r"><i class="fas fa-list"></i></button>

                
                <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi3639 btn-disabled transaksi-button" title="Transaksi Penjualan" onclick="penjualan(&#39;3639&#39;)" fdprocessedid="yr7vty"><i class="fas fa-exchange-alt"></i> Transaksi</button>
                <button type="button" class="btn btn-danger mrg-btn btn-sm btn-aksi3639 btn-disabled" title="Tutup Preorder" onclick="tutup(&#39;3639&#39;)" fdprocessedid="9kln0b"><i class="fas fa-window-close"></i> Closed</button>

                <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi3639 btn-disabled" title="Edit" onclick="edit(&#39;3639&#39;)" fdprocessedid="26jhn"><i class="fas fa-edit"></i> Edit</button>
              </td>
            </tr>
            <tr align="center">
              <td>6</td>
              <td>Purwokerto</td>
              <td>09-Mar-2026</td>
              <td>PO-3533</td>
              <td align="left">SURYA TOSERBA JALAKSANA</td>
              <td align="left">ANDRE</td>                        <td align="right">396.000,00</td>
              <td align="center">
                <span class="badge badge-success">OPEN</span>
              </td>
              <td align="center">
                
                <a href="https://orion-houseware.my.id/preorder/print/U0hZek5qWk1NMldDY1M0NFJESWQzYzBtTzgwMDAxMA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi3638 btn-disabled" title="Print PO" fdprocessedid="74xp8a"><i class="fas fa-print"></i></button></a>
                <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi3638 btn-disabled" title="Detail" onclick="detail(&#39;ZW5GTU0zbzJ1blp2M1JETXdPRWd6blAwMDAwOA&#39;, &#39;3638&#39;, &#39;&#39;)" fdprocessedid="9u7mkq"><i class="fas fa-list"></i></button>

                
                <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi3638 btn-disabled transaksi-button" title="Transaksi Penjualan" onclick="penjualan(&#39;3638&#39;)" fdprocessedid="20em9p"><i class="fas fa-exchange-alt"></i> Transaksi</button>
                <button type="button" class="btn btn-danger mrg-btn btn-sm btn-aksi3638 btn-disabled" title="Tutup Preorder" onclick="tutup(&#39;3638&#39;)" fdprocessedid="toouv"><i class="fas fa-window-close"></i> Closed</button>

                <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi3638 btn-disabled" title="Edit" onclick="edit(&#39;3638&#39;)" fdprocessedid="filkun"><i class="fas fa-edit"></i> Edit</button>
              </td>
            </tr>
            <tr align="center">
              <td>7</td>
              <td>Purwokerto</td>
              <td>09-Mar-2026</td>
              <td>PO-3532</td>
              <td align="left">TOKO BATES</td>
              <td align="left">SUPRI</td>                        <td align="right">5.933.976,00</td>
              <td align="center">
                <span class="badge badge-success">OPEN</span>
              </td>
              <td align="center">
                
                <a href="https://orion-houseware.my.id/preorder/print/WVhnellqWmlNMU9WWGJVM1ZESWQzYzBtSEEwMDAxMA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi3637 btn-disabled" title="Print PO" fdprocessedid="c0r55m"><i class="fas fa-print"></i></button></a>
                <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi3637 btn-disabled" title="Detail" onclick="detail(&#39;ZUZjek5EWnhNMHQyU1ZjM2N6SWQzYzBtWk4wMDAxMA&#39;, &#39;3637&#39;, &#39;&#39;)" fdprocessedid="gmcga"><i class="fas fa-list"></i></button>

                
                <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi3637 btn-disabled transaksi-button" title="Transaksi Penjualan" onclick="penjualan(&#39;3637&#39;)" fdprocessedid="cy5jnr"><i class="fas fa-exchange-alt"></i> Transaksi</button>
                <button type="button" class="btn btn-danger mrg-btn btn-sm btn-aksi3637 btn-disabled" title="Tutup Preorder" onclick="tutup(&#39;3637&#39;)" fdprocessedid="wf8ht9"><i class="fas fa-window-close"></i> Closed</button>

                <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi3637 btn-disabled" title="Edit" onclick="edit(&#39;3637&#39;)" fdprocessedid="ddjv97f"><i class="fas fa-edit"></i> Edit</button>
              </td>
            </tr>
            <tr align="center">
              <td>8</td>
              <td>Purwokerto</td>
              <td>07-Mar-2026</td>
              <td>PO-3531</td>
              <td align="left">JODO SWALAYAN</td>
              <td align="left">OFFICE</td>                        <td align="right">648.000,00</td>
              <td align="center">
                <span class="badge badge-success">OPEN</span>
              </td>
              <td align="center">
                
                <a href="https://orion-houseware.my.id/preorder/print/T1hOcU0zTTJPczVPV2RETkZObEF6NzIwMDAwOA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi3636 btn-disabled" title="Print PO" fdprocessedid="nies"><i class="fas fa-print"></i></button></a>
                <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi3636 btn-disabled" title="Detail" onclick="detail(&#39;Vlcxbk16UTJMTWJrVmVqTXhOa016amswMDAwOA&#39;, &#39;3636&#39;, &#39;&#39;)" fdprocessedid="pltois"><i class="fas fa-list"></i></button>

                
                <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi3636 btn-disabled transaksi-button" title="Transaksi Penjualan" onclick="penjualan(&#39;3636&#39;)" fdprocessedid="m4he7"><i class="fas fa-exchange-alt"></i> Transaksi</button>
                <button type="button" class="btn btn-danger mrg-btn btn-sm btn-aksi3636 btn-disabled" title="Tutup Preorder" onclick="tutup(&#39;3636&#39;)" fdprocessedid="mjm0j"><i class="fas fa-window-close"></i> Closed</button>

                <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi3636 btn-disabled" title="Edit" onclick="edit(&#39;3636&#39;)" fdprocessedid="gltf5c"><i class="fas fa-edit"></i> Edit</button>
              </td>
            </tr>
            <tr align="center">
              <td>9</td>
              <td>Purwokerto</td>
              <td>07-Mar-2026</td>
              <td>PO-3530</td>
              <td align="left">SUPRI</td>
              <td align="left">OFFICE</td>                        <td align="right">108.000,00</td>
              <td align="center">
                <span class="badge badge-success">OPEN</span>
              </td>
              <td align="center">
                
                <a href="https://orion-houseware.my.id/preorder/print/TW5KTE16ZzJWTElQeVRqTnVOV0V6RW4wMDAwOA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi3635 btn-disabled" title="Print PO" fdprocessedid="djvfci"><i class="fas fa-print"></i></button></a>
                <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi3635 btn-disabled" title="Detail" onclick="detail(&#39;YURacE0xSTJEUE93OVJqTjNOV3N6Z3AwMDAwOA&#39;, &#39;3635&#39;, &#39;&#39;)" fdprocessedid="vezfxt"><i class="fas fa-list"></i></button>

                
                <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi3635 btn-disabled transaksi-button" title="Transaksi Penjualan" onclick="penjualan(&#39;3635&#39;)" fdprocessedid="jjbd5"><i class="fas fa-exchange-alt"></i> Transaksi</button>
                <button type="button" class="btn btn-danger mrg-btn btn-sm btn-aksi3635 btn-disabled" title="Tutup Preorder" onclick="tutup(&#39;3635&#39;)" fdprocessedid="y44gs5"><i class="fas fa-window-close"></i> Closed</button>

                <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi3635 btn-disabled" title="Edit" onclick="edit(&#39;3635&#39;)" fdprocessedid="a0apf9"><i class="fas fa-edit"></i> Edit</button>
              </td>
            </tr>
            <tr align="center">
              <td>10</td>
              <td>Purwokerto</td>
              <td>07-Mar-2026</td>
              <td>PO-3528</td>
              <td align="left">SURYA TOSERBA JATIBARANG</td>
              <td align="left">ANDRE</td>                        <td align="right">6.485.680,00</td>
              <td align="center">
                <span class="badge badge-success">OPEN</span>
              </td>
              <td align="center">
                
                <a href="https://orion-houseware.my.id/preorder/print/UTFrelNEWnFNekRBUzdZelVESWQzYzBtYlEwMDAxMA" target="_blank"><button type="button" class="btn btn-success mrg-btn btn-sm btn-aksi3633 btn-disabled" title="Print PO" fdprocessedid="fq64fs"><i class="fas fa-print"></i></button></a>
                <button type="button" class="btn btn-info mrg-btn btn-sm btn-aksi3633 btn-disabled" title="Detail" onclick="detail(&#39;YVdremJUWTBNem84WUpnelN6SWQzYzBtb2QwMDAxMA&#39;, &#39;3633&#39;, &#39;&#39;)" fdprocessedid="851t26"><i class="fas fa-list"></i></button>

                
                <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi3633 btn-disabled transaksi-button" title="Transaksi Penjualan" onclick="penjualan(&#39;3633&#39;)" fdprocessedid="bi1yf"><i class="fas fa-exchange-alt"></i> Transaksi</button>
                <button type="button" class="btn btn-danger mrg-btn btn-sm btn-aksi3633 btn-disabled" title="Tutup Preorder" onclick="tutup(&#39;3633&#39;)" fdprocessedid="h8rlcc"><i class="fas fa-window-close"></i> Closed</button>

                <button type="button" class="btn btn-warning mrg-btn btn-sm btn-aksi3633 btn-disabled" title="Edit" onclick="edit(&#39;3633&#39;)" fdprocessedid="8hpej"><i class="fas fa-edit"></i> Edit</button>
              </td>
            </tr>
          </tbody>
      </table>
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


<?php include('5script.php'); ?>
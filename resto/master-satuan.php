<?php $page='master-satuan';?>
<?php include "1header.php"; ?>
<?php include "2navbar.php"; ?>

<?php
// Include sidebar sesuai peran
$sidebar_file = "3sidebar-{$role}.php";
if (file_exists($sidebar_file)) {
    include($sidebar_file);
} else {
    include('3sidebar.php');
}
?>

<!-- Content Wrapper -->
<div class="content-wrapper" style="min-height: 600px;">

  <section class="content">
    <div class="container-fluid">

      <!-- ============================================= -->
      <!-- HEADER -->
      <!-- ============================================= -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
          <h2 class="page-title mb-0">Master Data Satuan<button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
        </button></h2>
          <p class="text-muted mb-0">
            Master unit pengukuran untuk inventory, produksi, dan pembelian.
          </p>
        </div>

        <button class="btn btn-sm btn-outline-primary">
          + Tambah Satuan
        </button>
      </div>

      <!-- ============================================= -->
      <!-- CARD TABLE -->
      <!-- ============================================= -->
      <div class="card item-card">

        <div class="card-header bg-dark">
          <h5 class="mb-0">Data Master Satuan (Unit of Measurement)</h5>
        </div>

        <div class="card-body table-responsive">

          <table class="table table-bordered table-hover">

            <thead class="table-dark text-center">
              <tr>
                <th>Kode</th>
                <th>Nama Unit</th>
                <th>Simbol</th>
                <th>Tipe</th>
                <th>Base Unit</th>
                <th>Konversi</th>
                <th>Status</th>
                <th width="180">Aksi</th>
              </tr>
            </thead>

            <tbody>

              <!-- ====================================== -->
              <!-- BASE UNIT -->
              <!-- ====================================== -->
              <tr>
                <td>U001</td>
                <td>Gram</td>
                <td>g</td>
                <td>Weight</td>
                <td>-</td>
                <td>1 g</td>
                <td class="text-center">
                  <span class="badge bg-success">Active</span>
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
                  <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                  <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </td>
              </tr>

              <!-- ====================================== -->
              <!-- CONVERSION UNIT -->
              <!-- ====================================== -->
              <tr>
                <td>U002</td>
                <td>Kilogram</td>
                <td>kg</td>
                <td>Weight</td>
                <td>Gram</td>
                <td>1 kg = 1000 g</td>
                <td class="text-center">
                  <span class="badge bg-success">Active</span>
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
                  <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                  <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </td>
              </tr>

              <!-- ====================================== -->
              <!-- VOLUME UNIT -->
              <!-- ====================================== -->
              <tr>
                <td>U003</td>
                <td>Milliliter</td>
                <td>ml</td>
                <td>Volume</td>
                <td>-</td>
                <td>1 ml</td>
                <td class="text-center">
                  <span class="badge bg-success">Active</span>
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
                  <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                  <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </td>
              </tr>

              <!-- ====================================== -->
              <!-- VOLUME UNIT -->
              <!-- ====================================== -->
              <tr>
                <td>U004</td>
                <td>Liter</td>
                <td>L</td>
                <td>Volume</td>
                <td>Milliliter</td>
                <td>1 L = 1000 ml</td>
                <td class="text-center">
                  <span class="badge bg-success">Active</span>
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
                  <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                  <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </td>
              </tr>

              <!-- ====================================== -->
              <!-- PIECE UNIT -->
              <!-- ====================================== -->
              <tr>
                <td>U005</td>
                <td>Piece</td>
                <td>pcs</td>
                <td>Count</td>
                <td>-</td>
                <td>1 pcs</td>
                <td class="text-center">
                  <span class="badge bg-success">Active</span>
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
                  <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                  <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </td>
              </tr>

              <!-- ====================================== -->
              <!-- PACK UNIT -->
              <!-- ====================================== -->
              <tr>
                <td>U006</td>
                <td>Box</td>
                <td>box</td>
                <td>Packaging</td>
                <td>Piece</td>
                <td>1 box = 12 pcs</td>
                <td class="text-center">
                  <span class="badge bg-warning">Inactive</span>
                </td>
                <td class="text-center">
                  <button class="btn btn-sm btn-info"><i class="fas fa-eye"></i></button>
                  <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                  <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </td>
              </tr>

            </tbody>

          </table>

        </div>

      </div>

    </div>
  </section>

</div>

<?php include "4footer.php"; ?>
<!-- Modal Bantuan -->
<div class="modal fade" id="modalBantuan" tabindex="-1" aria-labelledby="modalBantuanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalBantuanLabel">Bantuan Tabel</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

  <h5 class="mb-2">📌 Tujuan Halaman Master Satuan</h5>
  <p>
    Halaman ini digunakan untuk mengelola <b>satuan ukuran (Unit of Measurement / UoM)</b> yang dipakai di seluruh sistem:
    Inventory, Purchasing, Production (Kitchen), dan Sales.
  </p>

  <hr>

  <h5 class="mb-2">⚠️ Konsep Penting (WAJIB DIPAHAMI)</h5>
  <ul>
    <li>
      <b>Satuan bukan barang</b>, tetapi cara mengukur barang.
    </li>
    <li>
      <b>Inventory hanya mengenal 1 base unit</b> untuk konsistensi stok.
    </li>
    <li>
      Konversi hanya digunakan untuk perhitungan, bukan mengubah stok utama.
    </li>
    <li>
      Kesalahan satuan = kesalahan stok + HPP + laporan keuangan.
    </li>
  </ul>

  <hr>

  <h5 class="mb-2">📦 Struktur Satuan dalam Sistem</h5>

  <p><b>1. Base Unit (Satuan Dasar)</b></p>
  <p>
    Satuan utama yang menjadi sumber kebenaran di inventory.
    Contoh: gram (g), ml, pcs.
  </p>

  <p><b>2. Conversion Unit (Satuan Turunan)</b></p>
  <p>
    Satuan lain yang dikonversi ke base unit.
    Contoh: 1 kg = 1000 g, 1 liter = 1000 ml.
  </p>

  <p><b>3. Packaging Unit</b></p>
  <p>
    Satuan untuk penjualan atau pembelian dalam bentuk kemasan.
    Contoh: 1 box = 12 pcs.
  </p>

  <hr>

  <h5 class="mb-2">🔁 Cara Kerja Sistem Satuan</h5>
  <ul>
    <li>
      Saat purchase → sistem akan mengonversi ke base unit.
    </li>
    <li>
      Saat produksi → resep menggunakan base unit agar konsisten.
    </li>
    <li>
      Saat sales → boleh menggunakan packaging unit, tapi tetap dihitung ke base unit.
    </li>
    <li>
      Semua laporan (stock, HPP, profit) dihitung dari base unit.
    </li>
  </ul>

  <hr>

  <h5 class="mb-2">🚫 Kesalahan yang Sering Terjadi</h5>
  <ul>
    <li>Menjadikan kg dan gram sebagai item berbeda (SALAH).</li>
    <li>Tidak mendefinisikan base unit.</li>
    <li>Mencampur satuan di produksi dan sales tanpa konversi.</li>
    <li>Mengubah satuan tanpa memperhitungkan stock lama.</li>
  </ul>

  <hr>

  <h5 class="mb-2">💡 Best Practice</h5>
  <ul>
    <li>Selalu tentukan base unit di awal (disarankan gram / ml / pcs).</li>
    <li>Gunakan konversi, bukan duplikasi item.</li>
    <li>Jangan ubah base unit setelah transaksi berjalan.</li>
    <li>Gunakan packaging unit hanya untuk display sales.</li>
  </ul>

</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php include "5script.php"; ?>
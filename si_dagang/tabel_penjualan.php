<?php 
$page = 'penjualan';
include('1header.php'); 
include('2navbar.php'); 
include('3sidebar.php'); 
?>

<div class="content-wrapper" style="min-height: 626px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Data Penjualan</h3>
      <p class="text-muted mb-0">Menampilkan data penjualan perusahaan dagang dari database.</p>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <!-- CARD: Tabel Penjualan -->
          <div class="card">
            <div class="card-header">
              <h5 class="card-title mb-0"><i class="fas fa-table me-2"></i> Tabel Penjualan</h5>
              <div class="card-tools ms-auto">
                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button>
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
              </div>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table id="penjualan_table" class="table table-bordered table-striped table-sm datatables1">
                  <thead>
                    <tr class="text-center text-uppercase">
                      <th>No.</th>
                      <th>No. Faktur</th>
                      <th>Tanggal</th>
                      <th>Customer</th>
                      <th>Total</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    // koneksi database
                    $conn = new mysqli("localhost", "root", "", "si_dagang");
                    if ($conn->connect_error) {
                        die("Koneksi gagal: " . $conn->connect_error);
                    }

                    // ambil data penjualan beserta nama customer
                    // $sql = "SELECT p.penjualan_id, p.no_faktur, p.tanggal, c.nama_customer, p.total, p.status
                    //         FROM penjualan p
                    //         LEFT JOIN customer c ON p.customer_id = c.customer_id
                    //         ORDER BY p.penjualan_id ASC";
                    // $result = $conn->query($sql);

                    // $no = 1;
                    // if ($result->num_rows > 0) {
                    //     while($row = $result->fetch_assoc()) {
                    //         echo "<tr class='text-center'>";
                    //         echo "<td>".$no."</td>";
                    //         echo "<td>".$row['no_faktur']."</td>";
                    //         echo "<td>".$row['tanggal']."</td>";
                    //         echo "<td>".$row['nama_customer']."</td>";
                    //         echo "<td>".number_format($row['total'],0,",",".")."</td>";
                    //         echo "<td>".$row['status']."</td>";
                    //         echo "<td>
                    //                 <button class='btn btn-sm btn-outline-info'><i class='fas fa-eye'></i></button>
                    //                 <button class='btn btn-sm btn-outline-primary'><i class='fas fa-edit'></i></button>
                    //                 <button class='btn btn-sm btn-outline-danger'><i class='fas fa-trash'></i></button>
                    //               </td>";
                    //         echo "</tr>";
                    //         $no++;
                    //     }
                    // } else {
                    //     echo "<tr><td colspan='7' class='text-center'>Data tidak tersedia</td></tr>";
                    // }
                    // $conn->close();
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /.card -->

        </div>
      </div>
    </div>
  </section>
</div>
<?php include('4footer.php'); ?>
<!-- Modal Tambah Data Penjualan -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalTambahDataLabel">Tambah Penjualan</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="" method="POST">
        <div class="modal-body">

          <!-- Informasi Umum -->
          <div class="mb-3 row">
            <div class="col-md-6">
              <label class="form-label">Customer <span class="text-danger">*</span></label>
              <select name="customer_id" class="form-select" required>
                <option value="">-- Pilih Customer --</option>
                <option value="1">Customer A</option>
                <option value="2">Customer B</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Tipe Pembayaran <span class="text-danger">*</span></label>
              <select name="tipe_bayar" class="form-select" required>
                <option value="Cash">Cash</option>
                <option value="Kredit">Kredit</option>
              </select>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea name="keterangan" class="form-control" placeholder="Keterangan transaksi"></textarea>
          </div>

          <!-- Daftar Barang -->
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-sm" id="tblBarang">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Produk</th>
                  <th>Qty</th>
                  <th>Harga Satuan</th>
                  <th>Subtotal</th>
                  <th><button type="button" class="btn btn-sm btn-success" id="addRow">+</button></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <select name="produk_id[]" class="form-select" required>
                      <option value="">-- Pilih Produk --</option>
                      <option value="101">Produk A</option>
                      <option value="102">Produk B</option>
                    </select>
                  </td>
                  <td><input type="number" name="qty[]" class="form-control qty" value="1" min="1" required></td>
                  <td><input type="number" name="harga[]" class="form-control harga" value="0" required></td>
                  <td><input type="number" name="subtotal[]" class="form-control subtotal" readonly></td>
                  <td><button type="button" class="btn btn-sm btn-danger removeRow">-</button></td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" name="submit_penjualan" class="btn btn-primary">Simpan Penjualan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Script untuk subtotal otomatis dan tambah/hapus baris -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  function updateSubtotal(row) {
    let qty = row.querySelector('.qty').value || 0;
    let harga = row.querySelector('.harga').value || 0;
    row.querySelector('.subtotal').value = qty * harga;
  }

  document.querySelectorAll('#tblBarang tbody tr').forEach(row => {
    row.querySelector('.qty').addEventListener('input', ()=>updateSubtotal(row));
    row.querySelector('.harga').addEventListener('input', ()=>updateSubtotal(row));
  });

  document.getElementById('addRow').addEventListener('click', function(){
    let tbody = document.querySelector('#tblBarang tbody');
    let index = tbody.rows.length + 1;
    let row = tbody.rows[0].cloneNode(true);
    row.cells[0].innerText = index;
    row.querySelectorAll('input').forEach(input => input.value = input.classList.contains('qty') ? 1 : 0);
    tbody.appendChild(row);

    row.querySelector('.removeRow').addEventListener('click', ()=>row.remove());
    row.querySelector('.qty').addEventListener('input', ()=>updateSubtotal(row));
    row.querySelector('.harga').addEventListener('input', ()=>updateSubtotal(row));
  });

  document.querySelectorAll('.removeRow').forEach(btn=>{
    btn.addEventListener('click', function(){ this.closest('tr').remove(); });
  });
});
</script>



<?php include('5script.php'); ?>
<!-- Inisialisasi DataTables -->
<script>
  $(document).ready(function() {
    $('#penjualan_table').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true
    });
  });
</script>

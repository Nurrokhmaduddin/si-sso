<?php $page='beranda_kasir';?>
<?php include "1header.php"; ?>
<?php include "2navbar.php"; ?>
<?php
$sidebar_file = "3sidebar-{$role}.php";
if (file_exists($sidebar_file)) {
    include($sidebar_file);
} else {
    include('3sidebar.php');
}
?>

<div class="content-wrapper" style="min-height: 600px;">
  <section class="content">
    <div class="container-fluid">

<style>
.pos-card { border-radius:12px; }
.total-box { font-size:1.5rem; font-weight:bold; }
</style>

<!-- HEADER -->
<div class="d-flex justify-content-between align-items-center mb-3">
  <h3>💰 Dashboard Kasir</h3>
  <button class="btn btn-sm btn-outline-primary" onclick="refreshKasir()">🔄 Refresh</button>
</div>

<div class="row">

<!-- ORDER LIST -->
<div class="col-md-6">
  <div class="card pos-card shadow-sm">
    <div class="card-header">📋 Daftar Order</div>
    <div class="card-body p-0">
      <table class="table table-hover mb-0">
        <thead class="table-light">
          <tr>
            <th>ID</th>
            <th>Meja</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>#001</td>
            <td>A1</td>
            <td><span class="badge bg-warning">Belum Bayar</span></td>
            <td><button class="btn btn-sm btn-primary" onclick="openOrder(this)">Buka</button></td>
          </tr>
          <tr>
            <td>#002</td>
            <td>B2</td>
            <td><span class="badge bg-success">Lunas</span></td>
            <td>-</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- DETAIL ORDER -->
<div class="col-md-6">
  <div class="card pos-card shadow-sm">
    <div class="card-header">🧾 Detail Order</div>
    <div class="card-body">

      <ul id="orderDetail">
        <li>Pilih order untuk melihat detail</li>
      </ul>

      <hr>

      <div class="total-box mb-3">Total: <span id="totalHarga">Rp 0</span></div>

      <!-- ACTION -->
      <button class="btn btn-sm btn-warning" onclick="addItem()">➕ Tambah Item</button>
      <button class="btn btn-sm btn-secondary" onclick="editItem()">✏️ Edit</button>

      <hr>

      <button class="btn btn-success w-100" onclick="processPayment()">💳 Proses Pembayaran</button>

    </div>
  </div>
</div>

</div>

</div>
</section>
</div>

<script>

function openOrder(btn){
  document.getElementById('orderDetail').innerHTML = `
    <li>Nasi Goreng x2 - Rp 40.000</li>
    <li>Es Teh x2 - Rp 10.000</li>
  `;
  document.getElementById('totalHarga').innerText = 'Rp 50.000';
}

function addItem(){
  alert('Tambah item (simulasi)');
}

function editItem(){
  alert('Edit item (simulasi)');
}

function processPayment(){
  let metode = prompt('Pilih metode: cash / qris / transfer');
  if(metode){
    alert('Pembayaran berhasil dengan metode: ' + metode);
  }
}

function refreshKasir(){
  alert('Data kasir diperbarui');
}

</script>

<?php include "4footer.php"; ?>
<?php include "5script.php"; ?>

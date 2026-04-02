<?php $page='beranda_waiter';?>
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
.waiter-card { border-radius:12px; }
.badge-status { font-size:0.75rem; }
</style>

<!-- HEADER -->
<div class="d-flex justify-content-between align-items-center mb-3">
  <h3>🧑‍💼 Dashboard Waiter</h3>
  <button class="btn btn-sm btn-outline-primary" onclick="refreshWaiter()">🔄 Refresh</button>
</div>

<div class="row">

<!-- ORDER SIAP -->
<div class="col-md-6">
  <div class="card waiter-card shadow-sm">
    <div class="card-header">🍽️ Siap Disajikan</div>
    <div class="card-body">
      <div class="mb-2">
        <strong>#001 - Meja A1</strong><br>
        <span class="badge bg-success badge-status">Selesai</span>
        <button class="btn btn-sm btn-primary float-end" onclick="serveOrder(this)">Antar</button>
      </div>
      <div>
        <strong>#002 - Meja B2</strong><br>
        <span class="badge bg-success badge-status">Selesai</span>
        <button class="btn btn-sm btn-primary float-end" onclick="serveOrder(this)">Antar</button>
      </div>
    </div>
  </div>
</div>

<!-- ORDER AKTIF -->
<div class="col-md-6">
  <div class="card waiter-card shadow-sm">
    <div class="card-header">📋 Order Aktif</div>
    <div class="card-body">
      <div class="mb-2">
        <strong>#003 - Meja C3</strong><br>
        <span class="badge bg-warning badge-status">Diproses</span>
        <button class="btn btn-sm btn-secondary float-end" onclick="viewOrder()">Detail</button>
      </div>
    </div>
  </div>
</div>

</div>

<hr>

<!-- INPUT ORDER -->
<div class="card shadow-sm">
  <div class="card-header">➕ Input Order (Manual)</div>
  <div class="card-body">

    <div class="row">
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Nomor Meja" id="meja">
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Nama Menu" id="menu">
      </div>
      <div class="col-md-2">
        <input type="number" class="form-control" placeholder="Qty" id="qty">
      </div>
      <div class="col-md-2">
        <button class="btn btn-success w-100" onclick="addOrder()">Tambah</button>
      </div>
    </div>

    <ul id="orderList" class="mt-3"></ul>

    <button class="btn btn-primary mt-3" onclick="submitOrder()">Kirim ke Dapur</button>

  </div>
</div>

<hr>

<!-- PEMBAYARAN QRIS VIA WAITER -->
<div class="card shadow-sm">
  <div class="card-header">💳 Pembayaran QRIS</div>
  <div class="card-body">

    <p>Total Tagihan: <strong id="tagihan">Rp 75.000</strong></p>

    <button class="btn btn-outline-dark" onclick="showQR()">Tampilkan QRIS</button>
    <button class="btn btn-success" onclick="confirmPayment()">Konfirmasi Pembayaran</button>

  </div>
</div>

</div>
</section>
</div>

<script>

function serveOrder(btn){
  btn.parentElement.innerHTML += '<br><span class="badge bg-primary">Disajikan</span>';
  btn.remove();
}

function viewOrder(){
  alert('Menampilkan detail order (simulasi)');
}

function addOrder(){
  let meja = document.getElementById('meja').value;
  let menu = document.getElementById('menu').value;
  let qty = document.getElementById('qty').value;

  if(meja && menu && qty){
    let li = document.createElement('li');
    li.innerText = `${menu} x${qty} (Meja ${meja})`;
    document.getElementById('orderList').appendChild(li);
  }
}

function submitOrder(){
  alert('Order dikirim ke dapur');
}

function showQR(){
  alert('Menampilkan QRIS');
}

function confirmPayment(){
  alert('Pembayaran dikonfirmasi');
}

function refreshWaiter(){
  alert('Data waiter diperbarui');
}

</script>

<?php include "4footer.php"; ?>
<?php include "5script.php"; ?>
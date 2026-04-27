<?php $page='customer_qr';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SSO v4 | CDN Version</title>

  <!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- AdminLTE CSS (v3 tetap bisa dipakai, tapi JS harus diubah nanti) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

<!-- overlayScrollbars -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.3/css/OverlayScrollbars.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

</head>
<body class="hold-transition layout-top-nav" style="background:#f5f6fa;">
<div class="wrapper">
<?php 
$q = $_SERVER['QUERY_STRING'] ?? '';
// atau rebuild dari $_GET:
$q = !empty($_GET) ? '?'.http_build_query($_GET) : '';
?>

<?php 
// Ambil peran 
$role = isset($_GET['peran']) && $_GET['peran'] !== '' ? ucfirst($_GET['peran']) : 'SuperAdmin'; 
// Ambil seluruh query string (peran & data lain) 
$q = $_SERVER['QUERY_STRING']; 
$q = $q ? "?$q" : ""; 
?>

<div class="content-wrapper" style="min-height:100vh;background:#f5f6fa;">
<div class="container-fluid py-3">

<style>
.menu-card{border-radius:12px;}
.cart-box{position:fixed;bottom:0;left:0;right:0;background:#fff;padding:10px;border-top:1px solid #ddd;}
</style>

<!-- HEADER -->
<div class="mb-3">
  <h4>🍽️ Meja A1</h4>
  <small class="text-muted">Silakan pilih menu</small>
</div>

<!-- STATUS ORDER -->
<div class="alert alert-info">
  Status Order: <strong id="statusOrder">Belum Order</strong>
</div>

<!-- MENU LIST -->
<div class="row g-2">

<div class="col-6">
  <div class="card menu-card p-2">
    <h6>Nasi Goreng</h6>
    <small>Rp 20.000</small><br>
    <button class="btn btn-sm btn-primary mt-2" onclick="addToCart('Nasi Goreng',20000)">Tambah</button>
  </div>
</div>

<div class="col-6">
  <div class="card menu-card p-2">
    <h6>Es Teh</h6>
    <small>Rp 5.000</small><br>
    <button class="btn btn-sm btn-primary mt-2" onclick="addToCart('Es Teh',5000)">Tambah</button>
  </div>
</div>

</div>

<!-- CART -->
<div class="cart-box">
  <div id="cartList"></div>
  <div>Total: <strong id="total">Rp 0</strong></div>
  <button class="btn btn-success w-100 mt-2" onclick="submitOrder()">Pesan Sekarang</button>
  <button class="btn btn-warning w-100 mt-2" onclick="payQRIS()">Panggil Waiter</button>
</div>

</div>
</div>

<script>
let cart=[];
let total=0;

function addToCart(nama,harga){
  cart.push({nama,harga});
  total+=harga;
  renderCart();
}

function renderCart(){
  let html='';
  cart.forEach(item=>{
    html+=`<div>${item.nama} - Rp ${item.harga}</div>`;
  });
  document.getElementById('cartList').innerHTML=html;
  document.getElementById('total').innerText='Rp '+total;
}

function submitOrder(){
  if(cart.length===0){alert('Keranjang kosong');return;}
  document.getElementById('statusOrder').innerText='Diproses';
  alert('Order berhasil dikirim ke dapur');
}

function payQRIS(){
  if(total===0){alert('Belum ada tagihan');return;}
  alert('Tampilkan QRIS dan lakukan pembayaran');
  setTimeout(()=>{
    document.getElementById('statusOrder').innerText='Lunas';
    alert('Pembayaran berhasil');
  },2000);
}
</script>

<?php include "5script.php"; ?>
<?php $page='beranda_dapur';?>
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
.kds-card { border-radius: 12px; }
.order-card { border-left: 6px solid #ffc107; }
/*.order-card.processing { border-left-color: #0d6efd; }*/
/*.order-card.done { border-left-color: #198754; }*/
.timer { font-size: 0.85rem; color: #6c757d; }
</style>

<!-- HEADER -->
<div class="d-flex justify-content-between align-items-center mb-3">
  <h3>👨‍🍳 Kitchen Display System</h3>
  <button class="btn btn-sm btn-outline-primary" onclick="refreshKDS()">🔄 Refresh</button>
</div>

<!-- FILTER STATION -->
<div class="mb-3">
  <select class="form-select w-auto" onchange="filterStation(this.value)">
    <option value="all">Semua Station</option>
    <option value="kitchen">Kitchen</option>
    <option value="bar">Bar</option>
    <option value="dessert">Dessert</option>
  </select>
</div>

<!-- ORDER LIST -->
<div class="row g-3" id="orderContainer">

  <!-- ORDER 1 -->
  <div class="col-md-4 order-item" data-station="kitchen">
    <div class="card kds-card order-card p-3">
      <h6>#ORD-001 | Meja A1</h6>
      <div class="timer">⏱ 5 menit lalu</div>
      <ul>
        <li>Nasi Goreng x2</li>
        <li>Ayam Bakar x1</li>
      </ul>
      <button class="btn btn-sm btn-primary" onclick="startCooking(this)">Mulai Masak</button>
    </div>
  </div>

  <!-- ORDER 2 -->
  <div class="col-md-4 order-item" data-station="bar">
    <div class="card kds-card order-card processing p-3">
      <h6>#ORD-002 | Meja B2</h6>
      <div class="timer">⏱ 10 menit lalu</div>
      <ul>
        <li>Es Teh x2</li>
      </ul>
      <button class="btn btn-sm btn-success" onclick="finishCooking(this)">Selesai</button>
    </div>
  </div>

</div>

</div>
</section>
</div>

<script>

function startCooking(btn){
  let card = btn.closest('.order-card');
  card.classList.add('processing');
  btn.outerHTML = '<button class="btn btn-sm btn-success" onclick="finishCooking(this)">Selesai</button>';
}

function finishCooking(btn){
  let card = btn.closest('.order-card');
  card.classList.remove('processing');
  card.classList.add('done');
  btn.outerHTML = '<span class="badge bg-success">Selesai</span>';
  alert('Pesanan selesai dan siap diambil waiter');
}

function refreshKDS(){
  alert('Data dapur diperbarui');
}

function filterStation(station){
  let items = document.querySelectorAll('.order-item');
  items.forEach(item => {
    if(station === 'all' || item.dataset.station === station){
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });
}

</script>

<?php include "4footer.php"; ?>
<?php include "5script.php"; ?>

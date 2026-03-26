

<?php $page = 'sales-qr';   ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>
<?php
$meja = $_GET['meja'] ?? 'MEJA01';

if(isset($_GET['order'])){
  $order = $_GET['order'];
}else{
  $order = 'ORD-' . date('Ymd-His') . '-' . rand(100,999);
}
?>

  
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Daftar Menu Self Order
        <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan"><i class="fas fa-question-circle"></i>
        </button>
      </h3>
        <p class="text-muted mb-0">Keterangan singkat cara baca informasi halaman ini</p>
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
                  <b>Angkatan:</b> 2023 &nbsp;
                </div>                
                <div class="col-md-6">
                  <b>Peminatan:</b> Peminatan B
                </div>
                <div class="col-md-6">
                  <b>Jalur:</b> Semua
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
                <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalGagal">
                  <i class="fas fa-exclamation-triangle me-1"></i> ErrorHandler
                </button>
              </div>
            </div>
            
          </div> -->


         <!-- ========== CARD : Tabel  Granular ========== -->
<style>
.menu-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
  gap: 12px;
}

.menu-item {
  background: #fff;
  border-radius: 12px;
  padding: 10px;
  text-align: center;
  box-shadow: 0 2px 6px rgba(0,0,0,0.08);
  cursor: pointer;
  transition: 0.2s;
}

.menu-item:hover {
  transform: scale(1.05);
}

.menu-item img {
  width: 100%;
  height: 100px;
  object-fit: cover;
  border-radius: 8px;
}

.cart-bar {
  /*position: fixed;*/
  bottom: 0;
  left: 0;
  right: 0;
  background: #fff;
  border-top: 1px solid #ddd;
  padding: 10px;
  box-shadow: 0 -2px 6px rgba(0,0,0,0.1);
}

.qty-btn {
  border: none;
  background: #eee;
  border-radius: 5px;
  width: 25px;
  height: 25px;
}
</style>

<div class="container-fluid py-3">

  <div class="alert alert-info d-flex justify-content-between align-items-center ">
    <div>
      <b>🍽️ Meja:</b> <?= $meja ?>
    </div>
    <div>
      <b>🧾 Order:</b> <?= $order ?>
    </div>
  </div>
  
  <!-- FILTER -->
  <div class="row mb-3">
    <div class="col-md-3">
      <input type="text" id="searchInput" class="form-control" placeholder="Cari menu...">
    </div>

    <div class="col-md-3">
      <select id="filterCategory" class="form-select">
        <option value="">Semua Kategori</option>
        <option value="makanan">Makanan</option>
        <option value="minuman">Minuman</option>
        <option value="dessert">Dessert</option>
        <option value="snack">Snack</option>
      </select>
    </div>

    <div class="col-md-3">
      <input type="number" id="minPrice" class="form-control" placeholder="Harga Min">
    </div>

    <div class="col-md-3">
      <input type="number" id="maxPrice" class="form-control" placeholder="Harga Max">
    </div>
  </div>

  <div class="row">

    <!-- MENU -->
    <div class="col-md-8">
      <div class="row g-3" id="cardContainer">

        <!-- ITEM -->
        <div class="col-md-4 card-item" data-id="1" data-category="makanan" data-price="25000">
          <div class="card h-100 shadow-sm">
            <img src="nasi-goreng.jpg" class="card-img-top" style="height:150px;object-fit:cover;">
            <div class="card-body d-flex flex-column">
              <h6>Nasi Goreng</h6>
              <small class="text-muted">Makanan</small>

              <div class="mt-auto">
                <div class="d-flex justify-content-between align-items-center">
                  <b class="text-success">Rp 25.000</b>

                  <div class="d-flex align-items-center gap-2">
                    <button class="btn btn-sm btn-outline-danger btn-minus">-</button>
                    <span class="qty">0</span>
                    <button class="btn btn-sm btn-outline-success btn-plus">+</button>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-md-4 card-item" data-id="2" data-category="minuman" data-price="8000">
          <div class="card h-100 shadow-sm">
            <img src="es-teh.jpg" class="card-img-top" style="height:150px;object-fit:cover;">
            <div class="card-body d-flex flex-column">
              <h6>Es Teh Manis</h6>
              <small class="text-muted">Minuman</small>

              <div class="mt-auto d-flex justify-content-between align-items-center">
                <b class="text-success">Rp 8.000</b>
                <div class="d-flex gap-2">
                  <button class="btn btn-sm btn-outline-danger btn-minus">-</button>
                  <span class="qty">0</span>
                  <button class="btn btn-sm btn-outline-success btn-plus">+</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 card-item" data-id="3" data-category="minuman" data-price="15000">
          <div class="card h-100 shadow-sm">
            <img src="es-kopi.jpg" class="card-img-top" style="height:150px;object-fit:cover;">
            <div class="card-body d-flex flex-column">
              <h6>Es Kopi Susu</h6>
              <small class="text-muted">Minuman</small>

              <div class="mt-auto d-flex justify-content-between align-items-center">
                <b class="text-success">Rp 15.000</b>
                <div class="d-flex gap-2">
                  <button class="btn btn-sm btn-outline-danger btn-minus">-</button>
                  <span class="qty">0</span>
                  <button class="btn btn-sm btn-outline-success btn-plus">+</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 4 -->
        <div class="col-md-4 card-item" data-id="4" data-category="makanan" data-price="27000">
          <div class="card h-100 shadow-sm">
            <img src="ayam-bakar.jpg" class="card-img-top" style="height:150px;object-fit:cover;">
            <div class="card-body d-flex flex-column">
              <h6>Ayam Bakar</h6>
              <small class="text-muted">Makanan</small>
              <div class="mt-auto d-flex justify-content-between align-items-center">
                <b class="text-success">Rp 27.000</b>
                <div class="d-flex gap-2">
                  <button class="btn btn-sm btn-outline-danger btn-minus">-</button>
                  <span class="qty">0</span>
                  <button class="btn btn-sm btn-outline-success btn-plus">+</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 5 -->
        <div class="col-md-4 card-item" data-id="5" data-category="makanan" data-price="26000">
          <div class="card h-100 shadow-sm">
            <img src="ayam-geprek.jpg" class="card-img-top" style="height:150px;object-fit:cover;">
            <div class="card-body d-flex flex-column">
              <h6>Ayam Geprek</h6>
              <small class="text-muted">Makanan</small>
              <div class="mt-auto d-flex justify-content-between align-items-center">
                <b class="text-success">Rp 26.000</b>
                <div class="d-flex gap-2">
                  <button class="btn btn-sm btn-outline-danger btn-minus">-</button>
                  <span class="qty">0</span>
                  <button class="btn btn-sm btn-outline-success btn-plus">+</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 6 -->
        <div class="col-md-4 card-item" data-id="6" data-category="makanan" data-price="24000">
          <div class="card h-100 shadow-sm">
            <img src="nasi-ayam-katsu.jpg" class="card-img-top" style="height:150px;object-fit:cover;">
            <div class="card-body d-flex flex-column">
              <h6>Nasi Ayam Katsu</h6>
              <small class="text-muted">Makanan</small>
              <div class="mt-auto d-flex justify-content-between align-items-center">
                <b class="text-success">Rp 24.000</b>
                <div class="d-flex gap-2">
                  <button class="btn btn-sm btn-outline-danger btn-minus">-</button>
                  <span class="qty">0</span>
                  <button class="btn btn-sm btn-outline-success btn-plus">+</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 7 -->
        <div class="col-md-4 card-item" data-id="7" data-category="minuman" data-price="12000">
          <div class="card h-100 shadow-sm">
            <img src="es-jeruk.jpg" class="card-img-top" style="height:150px;object-fit:cover;">
            <div class="card-body d-flex flex-column">
              <h6>Es Jeruk</h6>
              <small class="text-muted">Minuman</small>
              <div class="mt-auto d-flex justify-content-between align-items-center">
                <b class="text-success">Rp 12.000</b>
                <div class="d-flex gap-2">
                  <button class="btn btn-sm btn-outline-danger btn-minus">-</button>
                  <span class="qty">0</span>
                  <button class="btn btn-sm btn-outline-success btn-plus">+</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 8 -->
        <div class="col-md-4 card-item" data-id="8" data-category="minuman" data-price="14000">
          <div class="card h-100 shadow-sm">
            <img src="matcha-latte.jpg" class="card-img-top" style="height:150px;object-fit:cover;">
            <div class="card-body d-flex flex-column">
              <h6>Matcha Latte</h6>
              <small class="text-muted">Minuman</small>
              <div class="mt-auto d-flex justify-content-between align-items-center">
                <b class="text-success">Rp 14.000</b>
                <div class="d-flex gap-2">
                  <button class="btn btn-sm btn-outline-danger btn-minus">-</button>
                  <span class="qty">0</span>
                  <button class="btn btn-sm btn-outline-success btn-plus">+</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 9 -->
        <div class="col-md-4 card-item" data-id="9" data-category="dessert" data-price="18000">
          <div class="card h-100 shadow-sm">
            <img src="pancake.jpg" class="card-img-top" style="height:150px;object-fit:cover;">
            <div class="card-body d-flex flex-column">
              <h6>Pancake Coklat</h6>
              <small class="text-muted">Dessert</small>
              <div class="mt-auto d-flex justify-content-between align-items-center">
                <b class="text-success">Rp 18.000</b>
                <div class="d-flex gap-2">
                  <button class="btn btn-sm btn-outline-danger btn-minus">-</button>
                  <span class="qty">0</span>
                  <button class="btn btn-sm btn-outline-success btn-plus">+</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 10 -->
        <div class="col-md-4 card-item" data-id="10" data-category="dessert" data-price="22000">
          <div class="card h-100 shadow-sm">
            <img src="ice-cream.jpg" class="card-img-top" style="height:150px;object-fit:cover;">
            <div class="card-body d-flex flex-column">
              <h6>Ice Cream Sundae</h6>
              <small class="text-muted">Dessert</small>
              <div class="mt-auto d-flex justify-content-between align-items-center">
                <b class="text-success">Rp 22.000</b>
                <div class="d-flex gap-2">
                  <button class="btn btn-sm btn-outline-danger btn-minus">-</button>
                  <span class="qty">0</span>
                  <button class="btn btn-sm btn-outline-success btn-plus">+</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 11 -->
        <div class="col-md-4 card-item" data-id="11" data-category="snack" data-price="17000">
          <div class="card h-100 shadow-sm">
            <img src="kentang-goreng.jpg" class="card-img-top" style="height:150px;object-fit:cover;">
            <div class="card-body d-flex flex-column">
              <h6>Kentang Goreng</h6>
              <small class="text-muted">Snack</small>
              <div class="mt-auto d-flex justify-content-between align-items-center">
                <b class="text-success">Rp 17.000</b>
                <div class="d-flex gap-2">
                  <button class="btn btn-sm btn-outline-danger btn-minus">-</button>
                  <span class="qty">0</span>
                  <button class="btn btn-sm btn-outline-success btn-plus">+</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 12 -->
        <div class="col-md-4 card-item" data-id="12" data-category="snack" data-price="19000">
          <div class="card h-100 shadow-sm">
            <img src="dimsum.jpg" class="card-img-top" style="height:150px;object-fit:cover;">
            <div class="card-body d-flex flex-column">
              <h6>Dimsum Ayam</h6>
              <small class="text-muted">Snack</small>
              <div class="mt-auto d-flex justify-content-between align-items-center">
                <b class="text-success">Rp 19.000</b>
                <div class="d-flex gap-2">
                  <button class="btn btn-sm btn-outline-danger btn-minus">-</button>
                  <span class="qty">0</span>
                  <button class="btn btn-sm btn-outline-success btn-plus">+</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 13 -->
        <div class="col-md-4 card-item" data-id="13" data-category="minuman" data-price="13000">
          <div class="card h-100 shadow-sm">
            <img src="thai-tea.jpg" class="card-img-top" style="height:150px;object-fit:cover;">
            <div class="card-body d-flex flex-column">
              <h6>Thai Tea</h6>
              <small class="text-muted">Minuman</small>
              <div class="mt-auto d-flex justify-content-between align-items-center">
                <b class="text-success">Rp 13.000</b>
                <div class="d-flex gap-2">
                  <button class="btn btn-sm btn-outline-danger btn-minus">-</button>
                  <span class="qty">0</span>
                  <button class="btn btn-sm btn-outline-success btn-plus">+</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 14 -->
        <div class="col-md-4 card-item" data-id="14" data-category="dessert" data-price="21000">
          <div class="card h-100 shadow-sm">
            <img src="brownies.jpg" class="card-img-top" style="height:150px;object-fit:cover;">
            <div class="card-body d-flex flex-column">
              <h6>Brownies Coklat</h6>
              <small class="text-muted">Dessert</small>
              <div class="mt-auto d-flex justify-content-between align-items-center">
                <b class="text-success">Rp 21.000</b>
                <div class="d-flex gap-2">
                  <button class="btn btn-sm btn-outline-danger btn-minus">-</button>
                  <span class="qty">0</span>
                  <button class="btn btn-sm btn-outline-success btn-plus">+</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        
      </div>

      <!-- PAGINATION -->
      <ul class="pagination justify-content-center mt-4" id="pagination"></ul>

    </div>

    <!-- CART -->
    <div class="col-md-4">
      <div class="card shadow-sm sticky-top" style="top:20px;">
        <div class="card-header bg-dark text-white">
          🛒 Pesanan Anda
        </div>

        <div class="card-body" id="cartList">
          <i>Belum ada pesanan</i>
        </div>

        <div class="card-footer d-flex justify-content-between">
          <b>Total</b>
          <b id="cartTotal">Rp 0</b>
        </div>

        <button class="btn btn-success w-100" onclick="checkout()">Checkout</button>
      </div>
    </div>

  </div>
</div>
<script>
const cardsPerPage = 6;
let currentPage = 1;
let cart = {};

const cardContainer = document.getElementById('cardContainer');
const allCards = Array.from(document.getElementsByClassName('card-item'));

const searchInput = document.getElementById('searchInput');
const filterCategory = document.getElementById('filterCategory');
const minPrice = document.getElementById('minPrice');
const maxPrice = document.getElementById('maxPrice');
const pagination = document.getElementById('pagination');

function getFilteredCards() {
  const search = searchInput.value.toLowerCase();
  const category = filterCategory.value;
  const min = parseInt(minPrice.value) || 0;
  const max = parseInt(maxPrice.value) || Infinity;

  return allCards.filter(card => {
    const title = card.querySelector('h6').innerText.toLowerCase();
    const cat = card.dataset.category;
    const price = parseInt(card.dataset.price);

    return (
      title.includes(search) &&
      (!category || cat === category) &&
      price >= min &&
      price <= max
    );
  });
}

function showPage(page, filtered) {
  allCards.forEach(c => c.style.display = 'none');

  const start = (page - 1) * cardsPerPage;
  const end = start + cardsPerPage;

  filtered.slice(start, end).forEach(c => c.style.display = 'block');

  renderPagination(filtered.length, page);
}

function renderPagination(total, page) {
  const totalPages = Math.ceil(total / cardsPerPage);
  let html = '';

  for (let i = 1; i <= totalPages; i++) {
    html += `<li class="page-item ${i==page?'active':''}">
      <a class="page-link" href="#">${i}</a>
    </li>`;
  }

  pagination.innerHTML = html;

  Array.from(pagination.querySelectorAll('a')).forEach((el,i)=>{
    el.onclick = e=>{
      e.preventDefault();
      currentPage = i+1;
      showPage(currentPage, getFilteredCards());
    }
  });
}

function updateCartUI() {
  const cartList = document.getElementById('cartList');
  const cartTotal = document.getElementById('cartTotal');

  let html = '';
  let total = 0;

  Object.values(cart).forEach(item => {
    total += item.qty * item.price;
    html += `<div class="d-flex justify-content-between">
      <span>${item.name} (${item.qty})</span>
      <span>Rp ${item.qty * item.price}</span>
    </div>`;
  });

  cartList.innerHTML = html || "<i>Belum ada pesanan</i>";
  cartTotal.innerText = "Rp " + total;
}

allCards.forEach(card => {
  const id = card.dataset.id;
  const name = card.querySelector('h6').innerText;
  const price = parseInt(card.dataset.price);

  const plus = card.querySelector('.btn-plus');
  const minus = card.querySelector('.btn-minus');
  const qtyEl = card.querySelector('.qty');

  plus.onclick = () => {
    if (!cart[id]) cart[id] = {name, price, qty:0};
    cart[id].qty++;
    qtyEl.innerText = cart[id].qty;
    updateCartUI();
  };

  minus.onclick = () => {
    if (cart[id]) {
      cart[id].qty--;
      if (cart[id].qty <= 0) delete cart[id];
      qtyEl.innerText = cart[id]?.qty || 0;
      updateCartUI();
    }
  };
});

[searchInput, filterCategory, minPrice, maxPrice].forEach(el=>{
  el.addEventListener('input', ()=>{
    currentPage = 1;
    showPage(currentPage, getFilteredCards());
  });
});

showPage(1, allCards);
</script>
<script>
const mejaID = "<?= $meja ?>";
const orderID = "<?= $order ?>";
</script>
<script>
  function checkout() {
  if (Object.keys(cart).length === 0) {
    alert("Pesanan kosong!");
    return;
  }

  const payload = {
    meja: mejaID,
    order: orderID,
    items: cart
  };

  console.log(payload);

  alert("Order dikirim!\nMeja: " + mejaID + "\nOrder: " + orderID);
}
</script>
---------------

          




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

<div class="modal fade" id="modalGagal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalGagalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-danger border-2 shadow">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="modalGagalLabel"><i class="fas fa-times-circle me-2"></i>Oops! Terjadi Kesalahan</h5>
      </div>
      <div class="modal-body">
        <p><strong>❌ Masalah:</strong><br> 
          <span id="errorAction">Upload file gagal.</span></p>

        <p><strong>⚠️ Penyebab:</strong><br> 
          <span id="errorReason">Format file tidak sesuai (.pdf/.docx) atau ukuran melebihi 5MB.</span></p>

        <p><strong>💡 Solusi:</strong><br> 
          <span id="errorSolution">Pastikan file sesuai format, ukuran < 5MB, lalu coba unggah lagi.</span></p>

        <p><i>Jika masih gagal, hubungi admin untuk bantuan atau tips lebih lanjut.</i></p>

        <!-- Optional: reward tip gamified -->
        <div class="alert alert-warning mt-3" role="alert">
          🔹 Tip: Setiap percobaan upload berhasil akan menambah EXP +20! Jangan menyerah! 🚀
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" id="closeGagal" data-bs-dismiss="modal"><i class="fas fa-check me-1"></i> Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php include('5script.php'); ?>
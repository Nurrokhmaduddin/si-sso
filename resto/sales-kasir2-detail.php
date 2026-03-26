<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detail Order Meja 5</title>
<style>
  body {
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 2rem;
  }

  h2 {
    margin-bottom: 1rem;
    color: #333;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
  }

  th, td {
    padding: 12px 15px;
    text-align: left;
    font-size: 0.95rem;
  }

  thead {
    background-color: #2196F3;
    color: white;
  }

  tbody tr:nth-child(even) {
    background-color: #f9f9f9;
  }

  .status {
    font-weight: bold;
    padding: 0.2rem 0.5rem;
    border-radius: 4px;
    font-size: 0.85rem;
    text-transform: uppercase;
    display: inline-block;
  }

  .main-order { background-color: #4CAF50; color: white; }
  .sub-order { background-color: #FF9800; color: white; }
  .manual { background-color: #9C27B0; color: white; }

  button {
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    font-size: 0.85rem;
    margin-right: 4px;
    transition: all 0.2s ease;
  }

  .btn-edit { background-color: #03A9F4; color: white; }
  .btn-edit:hover { background-color: #0288D1; }

  .btn-delete { background-color: #F44336; color: white; }
  .btn-delete:hover { background-color: #D32F2F; }

  .btn-add { background-color: #4CAF50; color: white; margin-top: 1rem; }
  .btn-add:hover { background-color: #388E3C; }

  .btn-pay { background-color: #FFC107; color: white; margin-top: 1rem; float: right; }
  .btn-pay:hover { background-color: #FFA000; }

  .total {
    font-weight: bold;
    font-size: 1.1rem;
    margin-top: 1rem;
    text-align: right;
  }

</style>
</head>
<body>

<h2>Detail Order - Meja 5</h2>

<table>
  <thead>
    <tr>
      <th>Menu</th>
      <th>Qty</th>
      <th>Harga Satuan</th>
      <th>Subtotal</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <!-- Order Pertama -->
    <tr>
      <td>Nasi Goreng</td>
      <td>1</td>
      <td>Rp 25.000</td>
      <td>Rp 25.000</td>
      <td><span class="status main-order">Order Pertama</span></td>
      <td>
        <button class="btn-edit">✏️</button>
        <button class="btn-delete">🗑️</button>
      </td>
    </tr>
    <tr>
      <td>Es Teh Manis</td>
      <td>1</td>
      <td>Rp 5.000</td>
      <td>Rp 5.000</td>
      <td><span class="status main-order">Order Pertama</span></td>
      <td>
        <button class="btn-edit">✏️</button>
        <button class="btn-delete">🗑️</button>
      </td>
    </tr>

    <!-- Sub-Order / Order Tambahan -->
    <tr>
      <td>Mie Ayam</td>
      <td>2</td>
      <td>Rp 15.000</td>
      <td>Rp 30.000</td>
      <td><span class="status sub-order">Order Tambahan</span></td>
      <td>
        <button class="btn-edit">✏️</button>
        <button class="btn-delete">🗑️</button>
      </td>
    </tr>

    <!-- Manual Item Kasir -->
    <tr>
      <td>Snack Tambahan</td>
      <td>2</td>
      <td>Rp 10.000</td>
      <td>Rp 20.000</td>
      <td><span class="status manual">Manual Kasir</span></td>
      <td>
        <button class="btn-edit">✏️</button>
        <button class="btn-delete">🗑️</button>
      </td>
    </tr>
  </tbody>
</table>

<button class="btn-add">+ Tambah Item</button>

<div class="total">
  Total: Rp 80.000
  <button class="btn-pay">Bayar</button>
</div>
-----------------
<table class="table table-bordered table-striped">
  <thead class="table-dark text-center">
    <tr>
      <th>No</th>
      <th>Meja</th>
      <th>Order</th>
      <th>Batch</th>
      <th>Menu</th>
      <th>Qty</th>
      <th>Status</th>
      <th>Waktu</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>MEJA01</td>
      <td>ORD-001</td>
      <td>B1</td>
      <td>Nasi Goreng</td>
      <td>2</td>
      <td><span class="badge bg-danger">NEW</span></td>
      <td>12:01</td>
      <td>
        <button class="btn btn-sm btn-warning">Proses</button>
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>MEJA01</td>
      <td>ORD-001</td>
      <td>B1</td>
      <td>Es Teh</td>
      <td>1</td>
      <td><span class="badge bg-warning">PROCESS</span></td>
      <td>12:01</td>
      <td>
        <button class="btn btn-sm btn-success">Selesai</button>
      </td>
    </tr>
    <tr>
      <td>3</td>
      <td>MEJA02</td>
      <td>ORD-002</td>
      <td>B1</td>
      <td>Ayam Bakar</td>
      <td>1</td>
      <td><span class="badge bg-success">DONE</span></td>
      <td>12:05</td>
      <td>-</td>
    </tr>
    <tr>
      <td>4</td>
      <td>MEJA02</td>
      <td>ORD-002</td>
      <td>B2</td>
      <td>Es Jeruk</td>
      <td>2</td>
      <td><span class="badge bg-danger">NEW</span></td>
      <td>12:10</td>
      <td>
        <button class="btn btn-sm btn-warning">Proses</button>
      </td>
    </tr>
    <tr>
      <td>5</td>
      <td>MEJA03</td>
      <td>ORD-003</td>
      <td>B1</td>
      <td>Nasi Katsu</td>
      <td>1</td>
      <td><span class="badge bg-success">DONE</span></td>
      <td>11:50</td>
      <td>-</td>
    </tr>
    <tr>
      <td>6</td>
      <td>MEJA05</td>
      <td>ORD-005</td>
      <td>B1</td>
      <td>Dimsum</td>
      <td>2</td>
      <td><span class="badge bg-warning">PROCESS</span></td>
      <td>12:10</td>
      <td>
        <button class="btn btn-sm btn-success">Selesai</button>
      </td>
    </tr>
    <tr>
      <td>7</td>
      <td>MEJA06</td>
      <td>ORD-006</td>
      <td>B1</td>
      <td>Kopi Susu</td>
      <td>1</td>
      <td><span class="badge bg-success">DONE</span></td>
      <td>12:00</td>
      <td>-</td>
    </tr>
    <tr>
      <td>8</td>
      <td>MEJA06</td>
      <td>ORD-006</td>
      <td>B2</td>
      <td>Kentang Goreng</td>
      <td>1</td>
      <td><span class="badge bg-danger">NEW</span></td>
      <td>12:12</td>
      <td>
        <button class="btn btn-sm btn-warning">Proses</button>
      </td>
    </tr>
    <tr>
      <td>9</td>
      <td>MEJA09</td>
      <td>ORD-009</td>
      <td>B1</td>
      <td>Thai Tea</td>
      <td>1</td>
      <td><span class="badge bg-danger">NEW</span></td>
      <td>12:15</td>
      <td>
        <button class="btn btn-sm btn-warning">Proses</button>
      </td>
    </tr>
  </tbody>
</table>
-------------------
</body>
</html>